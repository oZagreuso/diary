<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<section class="section-header">

    <body class="body-header"<?php body_class(); ?>>

    <header class="header">

        <?php 
        if ( is_user_logged_in() ):
            $current_user = wp_get_current_user(); 
            echo "Bonjour, " . $current_user->user_firstname;
        else:
            echo "Bonjour et bienvenue !";
        endif; ?>

        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cover.svg" alt="cover">
        </a>  
    </header>

</section>
 
<?php wp_body_open(); ?>


