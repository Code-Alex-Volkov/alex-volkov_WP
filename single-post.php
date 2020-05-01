<?php get_header();?>

    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h1 class="title"></h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
            </div>
            <div class="post_single_box">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <div class="img_post">
                        <?php the_post_thumbnail('single_post_thumb'); ?>
                    </div>
                    <div class="article_text">
                        <h2 class="title_post"><?php the_title() ?></h2>
                        <span class="data_post"><?php the_time('F jS, Y') ?></span>
                        <?php the_content(); ?>
                    </div>
                    <div class="meta">
                        <?php the_author_posts_link() ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer('template'); ?>