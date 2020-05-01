<?php get_header();?>


    <div class="project_blog">
        <div class="wrapper">
            <div class="project_blog_title">
                <div class="title_blog"><?php the_title() ?></div>

                <span><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?></span>
            </div>

            <div class="block_blog">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <div class="btn_clic">
                            <a href="<?php the_field('vstav_ssylku_na_sajt'); ?>">Перейти на сайт</a>
                        </div>
                        <div class="article_text">

                            <?php
                            the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="btn_clic order">
                <a class="popup-btn" href="#">Заказать такой сайт</a>
            </div>
        </div>
    </div>



<?php get_footer(); ?>