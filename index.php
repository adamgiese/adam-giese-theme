<?php get_header(); ?>
<header class="page-header">
  <?php if ( ! is_front_page() && ! is_home() ) { ?>
    <h1 class="page-header-title"><?php the_title(); ?></h1>
  <?php } ?>
</header>
<main class="page-content">
  <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <article class="page-article">
    <?php the_content(); ?>
  </article>
  <?php } } ?>
</main>
<?php get_footer(); ?>
