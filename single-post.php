<?php get_header();?>

    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h1 class="title"></h1>
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' <i class="fas fa-angle-right"></i> '); ?>
            </div>
            <div class="blog_box_container">
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
                                <div class="author">Автор: <?php the_author_posts_link() ?></div>
                                <div class="tags"><?php the_tags('', ''); ?></div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="link_post">
                        <?php previous_post_link('%link', '<i class="fa fa-angle-left"></i> Предыдущая', true); ?>
                        <?php next_post_link('%link', 'Следующая <i class="fa fa-angle-right"></i> ', true); ?>
                    </div>
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

<?php get_footer('template'); ?>