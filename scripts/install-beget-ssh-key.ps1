Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

$projectRoot = Split-Path -Path $PSScriptRoot -Parent
$configPath = Join-Path $PSScriptRoot 'deploy.config.ps1'
$publicKeyPath = Join-Path $HOME '.ssh\id_ed25519.pub'

if (-not (Test-Path $configPath)) {
    throw 'File scripts/deploy.config.ps1 was not found.'
}

if (-not (Test-Path $publicKeyPath)) {
    throw ('Public key was not found: ' + $publicKeyPath)
}

. $configPath

$remoteLogin = "${RemoteUser}@${RemoteHost}"
$remoteKeyFile = '.painmed_beget_key.pub'

Write-Host ('Public key: ' + $publicKeyPath)
Write-Host ('Server: ' + $remoteLogin)
Write-Host ''
Write-Host 'What this script does:' -ForegroundColor Cyan
Write-Host '1. Uploads your public SSH key to Beget'
Write-Host '2. Adds the key to ~/.ssh/authorized_keys'
Write-Host '3. Removes the temporary public key file from the server'
Write-Host ''

$confirmation = Read-Host 'Continue? Type YES'
if ($confirmation -ne 'YES') {
    Write-Host 'SSH key installation cancelled.'
    exit 1
}

Write-Host ''
Write-Host 'Step 1/2. Uploading your public key...' -ForegroundColor Cyan
& scp $publicKeyPath "${remoteLogin}:$remoteKeyFile"
if ($LASTEXITCODE -ne 0) {
    throw 'Failed to upload the public key.'
}

$remoteCommand = @"
set -e
mkdir -p ~/.ssh
chmod 700 ~/.ssh
touch ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
cat '$remoteKeyFile' >> ~/.ssh/authorized_keys
rm -f '$remoteKeyFile'
"@

Write-Host 'Step 2/2. Adding the key on the server...' -ForegroundColor Cyan
& ssh $remoteLogin $remoteCommand
if ($LASTEXITCODE -ne 0) {
    throw 'Failed to install the SSH key on the server.'
}

Write-Host ''
Write-Host 'Done.' -ForegroundColor Green
Write-Host 'Now test passwordless SSH with:'
Write-Host "ssh $remoteLogin exit"
