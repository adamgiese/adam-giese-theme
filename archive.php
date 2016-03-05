<?php get_header(); ?>
<header class="page-header">
  <?php the_archive_title( '<h1 class="page-header-title">', '</h1>' ); ?>
  <div class="archive-filter">
  <?php
    $tags = get_terms();
    foreach ($tags as $tag) {
      $name = $tag->name;
      $slug = $tag->slug;
      echo "<button data-slug='$slug' class='archive-filter-button' id='archive-filter-button-$slug'>$name</button>";
    }
  ?>
  </div>
</header>
<main class="page-content show-all">
  <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <?php 
        $tags = wp_get_post_terms(get_the_ID()); 
        $tag_class = '';
        foreach ($tags as $tag) {
          $name = $tag->name;
          $slug = $tag->slug;
          $tag_class = $tag_class . " $slug";
        }
      ?>
      <article class="page-article<?php echo $tag_class; ?>">
        <h2 class="page-article-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <span class="page-article-date"><?php echo get_the_date(); ?></span>
      </article>
    <?php } } ?>
</main>
<?php get_footer(); ?>
