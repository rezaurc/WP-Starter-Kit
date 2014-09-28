<?php
/**
 * WP Starter Kit template for generating comments
 *
 * @package WordPress
 * @subpackage WP Starter Kit
 * @since WP Starter Kit 1.0
 */
?>

<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments">

    <?php if (have_comments()) : ?>

        <h2 class="comments-title">
            <?php
            printf(
                    _n('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'wp-starter-kit'), number_format_i18n(get_comments_number()), get_the_title()
            );
            ?>
        </h2>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'wp-starter-kit'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'wp-starter-kit')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'wp-starter-kit')); ?></div>
            </nav>
        <?php endif; ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                    array(
                        'style' => 'ol',
                        'short_ping' => true,
                        'avatar_size' => 34,
                    )
            );
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'wp-starter-kit'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'wp-starter-kit')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'wp-starter-kit')); ?></div>
            </nav>
        <?php endif; ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'wp-starter-kit'); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>

</div>
