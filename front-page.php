<?php get_header(); ?>

<h1>FRONT-PAGE</h1>

<section class="front">     

  <div class="front-article">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
        <h1><?php the_title(); ?></h1>

          <p class="post__meta">
                              Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                              par <?php the_author(); ?> • <?php comments_number(); ?>
          </p>

        <?php the_excerpt(); ?>  
          <p>
                <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
          </p>     

        <?php get_template_part( 'parts/newsletter' ); ?>

    <?php endwhile; endif; ?>

  </div>
</section>

<?php get_footer(); ?>

