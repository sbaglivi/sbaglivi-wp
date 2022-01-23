<?php if (have_comments()) : ?>
    <h2 class="comments-title">
        Commenti:
    </h2>

    <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'avatar_size' => 0,
        ));
        ?>
    </ul>
    <?php
    // Are there comments to navigate through?
    if (get_comment_pages_count() > 1 && get_option('page_comments')) :
    ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'twentythirteen'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Commenti meno recenti', 'twentythirteen')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Commenti piu` recenti &rarr;', 'twentythirteen')); ?></div>
        </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation 
    ?>
<?php endif; ?>
<?php comment_form(); ?>