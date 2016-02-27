<?php get_header(); ?>
<header class="page-header">
  <?php the_archive_title( '<h1 class="page-header-title">', '</h1>' ); ?>
</header>
<main class="page-content">
  <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <article class="page-article">
        <h2 class="page-article-title"><?php the_title(); ?></h2>
        <span class="page-article-date"><?php echo get_the_date(); ?></span>
      </article>
    <?php } } ?>
</main>
<?php get_footer(); ?>
