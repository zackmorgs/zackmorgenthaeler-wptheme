<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>
            <a href="<?php echo home_url('/'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <p>
            <?php bloginfo('description'); ?>
        </p>
    </header>
    <?php get_footer(); ?>
</body>
</html>