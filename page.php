<?php
/**
 * WP Starter Kit template for displaying Pages
 *
 * @package WordPress
 * @subpackage WP Starter Kit
 * @since WP Starter Kit 1.0
 */
get_header();
?>

<section class="page-content primary" role="main">

    <?php
    if (have_posts()) : the_post();

        get_template_part('loop');
        ?>

        <aside class="post-aside"><?php
            wp_link_pages(
                    array(
                        'before' => '<div class="linked-page-nav"><p>' . sprintf(__('<em>%s</em> is separated in multiple parts:', 'wp-starter-kit'), get_the_title()) . '<br />',
                        'after' => '</p></div>',
                        'next_or_number' => 'number',
                        'separator' => ' ',
                        'pagelink' => __('&raquo; Part %', 'wp-starter-kit'),
                    )
            );
            ?>

            <?php
            if (comments_open() || get_comments_number() > 0) :
                comments_template('', true);
            endif;
            ?>

        </aside><?php
    else :

        get_template_part('loop', 'empty');

    endif;
    ?>

</section>

<?php get_footer(); ?>