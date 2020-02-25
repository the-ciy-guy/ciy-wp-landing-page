<?php 

/*
    @package full_landing_page

    Index.php Template
*/
get_header();
?>

<header id="showcase" style="background-image: url(<?php echo get_theme_mod('landingpage_picture', get_template_directory_uri() . '/img/background.jpg'); ?>)";>
    <h1><?php echo get_theme_mod('landingpage_header', 'Welcome to the beach!'); ?></h1>
    <p><?php echo get_theme_mod('landingpage_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis ipsum officia numquam expedita ullam.'); ?></p>
    <a href="<?php echo get_theme_mod('button_url', 'http://www.yoururl.com'); ?>" class="button"><?php echo get_theme_mod('button_text', 'Read More'); ?></a>
</header>
<div class="main-column">
    <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>