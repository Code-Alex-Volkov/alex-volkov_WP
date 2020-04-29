<?php get_header(); ?>
    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h1 class="title">Блог</h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
            </div>
            <div class="post_box">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

                <?php endwhile; ?>
                    <?php the_posts_pagination([
                        'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                        'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                    ]); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
<?php get_footer(); ?>