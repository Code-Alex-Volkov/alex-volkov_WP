<?php get_header(); ?>

    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h1 class="title"><?php echo get_queried_object()->name; ?></h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' <i class="fas fa-angle-right"></i> '); ?>
            </div>
            <div class="blog_box_container">
                <div class="post_box">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article>
                            <div>
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
                            </div>
                            <div class="meta">
                                <div class="author">Автор: <?php the_author_posts_link() ?></div>
                                <div class="tags"><?php the_tags('', ''); ?></div>
                            </div>
                        </article>

                    <?php endwhile; ?>
                        <?php the_posts_pagination([
                            'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                            'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                        ]); ?>
                    <?php endif; ?>

                </div>
                <div class="sidebar_box">
                    <?php
                    $categories = get_categories(array(
                        'taxonomy'  => 'category',
                        'orderby' => 'name',
                        'order' => 'ASC'
                    )); ?>
                    <div class="caterory_link">
                        <div class="title_category">Категории</div>
                        <div class="category_box_sidebar">
                            <?php foreach( $categories as $category ){ ?>
                                <div class="post_category_link">
                                    <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?> </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    $tags = get_categories(array(
                        'taxonomy'  => 'post_tag',
                        'orderby'   => 'name',
                        'order'     => 'ASC'
                    ));?>
                    <div class="tags_link">
                        <div class="title_tags">Метки</div>
                        <div class="tags_box_sidebar">
                            <?php foreach( $tags as $tag ){ ?>
                                <div class="post_tags_link">
                                    <a href="<?php echo get_category_link( $tag->term_id ); ?>"><?php echo $tag->name; ?> </a>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('template'); ?>