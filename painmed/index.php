<?php
/**
 * Основной шаблон (fallback).
 * WordPress требует наличие index.php в теме.
 * Для главной страницы используется front-page.php.
 *
 * @package Painmed
 */

get_header(); ?>

<section class="section">
  <div class="section-inner">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Записей не найдено.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
