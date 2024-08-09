<div class="comment">
    <div class="comment-author">
        <?php echo get_avatar($comment, 32); ?>
        <div class="comment-author-info">
            <strong>
                <?php comment_author(); ?>
            </strong>
            <span>
                <?php comment_date(); ?>
            </span>
        </div>
    </div>
    <div class="comment-content">
        <?php comment_text(); ?>
    </div>
</div>