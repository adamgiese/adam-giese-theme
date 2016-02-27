<?php get_header(); ?>
<main class="page-content">
  <div class="page-article-container">
  <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <article class="page-article">
        <h2 class="page-article-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php edit_post_link(); ?>
        <div class="page-article-excerpt"><?php the_excerpt(); ?></div>
        <span class="page-article-date"><?php echo get_the_date(); ?></span>
      </article>
    <?php } } ?>
  </div>
  <aside class="page-sidebar">
    <?php echo get_sidebar('main-sidebar'); ?>
  </aside>
</main>
<?php get_footer(); ?>
