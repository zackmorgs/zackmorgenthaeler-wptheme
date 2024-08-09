<article id="post-<?php the_ID(); ?>" class="post">
    <header>
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p class="post-author-info">
            <?php the_time('F j, Y'); ?> by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
            </a>
        </p>
    </header>
    <div class="post-content">
        <?php if (has_post_thumbnail()) { ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php } ?>
        <?php the_content(); ?>
    </div>
</article>