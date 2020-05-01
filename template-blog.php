<?php
/*
  * Template name: Blog Template
  * Template post type: post, page
 * */
get_header();
?>

    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h1 class="title">Блог</h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
            </div>
            <div class="post_box">
                <?php // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 0,
                    'post_type'   => 'post',
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);?>
                     <article>
                        <div class="img_post">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('post_thumb'); ?>
                            </a>
                        </div>
                        <h2 class="title_post"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <div class="data_post"><?php the_time('F jS, Y') ?></div>
                        <div class="article_text">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="meta">
                            <?php the_author_posts_link() ?>
                        </div>
                    </article>
                    <?php
                    the_posts_pagination([
                        'prev_text' => __('<i class="fa fa-angle-left"></i>'),
                        'next_text' => __('<i class="fa fa-angle-right"></i>'),
                    ]);
              }

                wp_reset_postdata(); // сброс ?>


            </div>

        </div>
    </div>

<?php
get_footer( 'template' );