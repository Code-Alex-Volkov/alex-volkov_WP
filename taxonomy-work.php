<?php get_header(); ?>

<div class="project_single">
    <div class="wrapper">
        <div class="project_single_title">
            <span><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?></span>
        </div>
        <div class="block_single">
            <div class="left_single">
                <h2 class="title_single"><?php echo get_queried_object()->name; ?></h2>
                <p class="info_text_single"><?php echo get_queried_object()->description; ?></p>
                <div class="btn_clic">
                    <a class="popup-btn" href="#">Заказать такой сайт</a>
                </div>
            </div>
            <div class="right_single">
                <div class="right_single_box">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="block_project_single">
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="block_img">
                                    <?php the_post_thumbnail('work_thumb_'); ?>
                                </div>
                                <div class="block_title_site">
                                    <span class="name_site"><?php the_title() ?></span>
                                    <span class="data_download"><?php the_time('F jS, Y') ?></span>
                                </div>
                                <span class="overlay">
                            <i class="fas fa-link"></i>
                        </span>
                            </a>
                        </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <?php the_posts_pagination([
                    'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                    'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                ]); ?>
            </div>

        </div>

    </div>
</div>

<?php get_footer('template'); ?>
