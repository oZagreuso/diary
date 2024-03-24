<?php get_header(); ?>



<section class="front">    
  <div class="front-article">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <div class="front-article-title">
              <h1><?php the_title(); ?></h1>
       
            <div class="front-article-info">
              <p class="post__meta">
                                  Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                                  par <?php the_author(); ?> • <?php comments_number(); ?>
              </p>
            </div>

        </div>

        <div class="front-article-excerpt">
          <?php the_excerpt(); ?>  
            <p>
                  <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
            </p>  
        </div>  
        
      

    <?php endwhile; endif; ?>

    </div>
    
      <div class="front-article-letter">
            <?php get_template_part( 'parts/newsletter' ); ?>
      </div>


      <h1>FRONT-PAGE</h1>
      
</section>


<?php get_footer(); ?>

