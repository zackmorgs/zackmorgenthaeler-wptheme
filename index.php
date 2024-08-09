<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php get_header(); ?>
</head>

<body>
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
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                </h2>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <div class="post-nav">
            <?php posts_nav_link(); ?>
        </div>
    <?php endif; ?>
    <?php get_footer(); ?>
</body>

</html>