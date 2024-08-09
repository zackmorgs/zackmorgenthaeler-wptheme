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
    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>