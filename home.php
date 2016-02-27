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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

<p>Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat.</p>
  </aside>
</main>
<?php get_footer(); ?>
