<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
    <main>
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <article>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
            <div class="post-nav">
                <?php posts_nav_link(); ?>
            </div>
        <?php endif; ?>
    </main>
</body>

<?php get_footer(); ?>