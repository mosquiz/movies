<?php
/*
Template Name: Movie-list
*/
get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h1>Out latest movies</h1>
      <section class="movies">
        <?php 
          query_posts(array( 
            'post_type' => 'movies',
            'showposts' => 20,
          ));  
        ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="movie">
          <div class="image">
            <?php $cover = get_field( 'cover' ); ?>
            <?php if ( $cover ) { ?>
            <img src="<?php echo $cover['url']; ?>" alt="<?php echo $cover['alt']; ?>" />
            <?php } ?>
          </div>
          <div class="hover">
            <div><?php the_field( 'title' ); ?></div>        
            <div><?php the_field( 'director_name' ); ?></div>
          </div>
        </div>
        <?php endwhile;?>
      </section>

    </main><!-- #main -->

<?php get_footer();
?>