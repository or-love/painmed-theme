Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

$projectRoot = Split-Path -Path $PSScriptRoot -Parent
$configPath = Join-Path $PSScriptRoot 'deploy.config.ps1'
$localThemeDir = Join-Path $projectRoot 'painmed'

if (-not (Test-Path $configPath)) {
    Write-Host 'File scripts/deploy.config.ps1 was not found.' -ForegroundColor Yellow
    Write-Host 'Create it from the sample file:' -ForegroundColor Yellow
    Write-Host 'Copy-Item .\scripts\deploy.config.example.ps1 .\scripts\deploy.config.ps1' -ForegroundColor Yellow
    exit 1
}

. $configPath

if (-not (Test-Path $localThemeDir)) {
    throw ('Local theme folder was not found: ' + $localThemeDir)
}

$stamp = Get-Date -Format 'yyyy-MM-dd_HHmmss'
$remoteTempDir = "${RemoteThemeDir}.__new__${stamp}"
$remoteBackupDir = "${RemoteBackupBaseDir}/${ThemeSlug}-${stamp}"
$remoteLogin = "${RemoteUser}@${RemoteHost}"

Write-Host ('Local theme: ' + $localThemeDir)
Write-Host ('Server: ' + $remoteLogin)
Write-Host ('Remote theme path: ' + $RemoteThemeDir)
Write-Host ""
Write-Host 'What this script does:' -ForegroundColor Cyan
Write-Host '1. Creates a backup of the current theme on Beget'
Write-Host '2. Uploads the new theme into a temporary folder'
Write-Host '3. Replaces the live theme with the uploaded version'
Write-Host ''

$confirmation = Read-Host 'Continue? Type YES'
if ($confirmation -ne 'YES') {
    Write-Host 'Publish cancelled.'
    exit 1
}

Write-Host ''
Write-Host 'Step 1/3. Preparing folders on the server...' -ForegroundColor Cyan
& ssh $remoteLogin "mkdir -p '$RemoteBackupBaseDir' '$remoteTempDir'"
if ($LASTEXITCODE -ne 0) {
    throw 'Failed to prepare folders on the server.'
}

Write-Host 'Step 2/3. Uploading theme files...' -ForegroundColor Cyan
Get-ChildItem -Force $localThemeDir | ForEach-Object {
    & scp -r $_.FullName "${remoteLogin}:$remoteTempDir/"
    if ($LASTEXITCODE -ne 0) {
        throw ('Upload failed for: ' + $_.Name)
    }
}

$remoteSwapCommand = @"
set -e
if [ -d '$RemoteThemeDir' ]; then
  mv '$RemoteThemeDir' '$remoteBackupDir'
fi
mv '$remoteTempDir' '$RemoteThemeDir'
"@

Write-Host 'Step 3/3. Switching the live theme...' -ForegroundColor Cyan
& ssh $remoteLogin $remoteSwapCommand
if ($LASTEXITCODE -ne 0) {
    throw 'Failed to replace the live theme.'
}

Write-Host ''
Write-Host 'Done.' -ForegroundColor Green
Write-Host ('Remote backup: ' + $remoteBackupDir)
Write-Host 'Open the site and check the homepage and 2-3 important pages.'
