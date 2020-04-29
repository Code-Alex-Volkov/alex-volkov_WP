<?php
/*
  * Template name: Privacy Template
 * */
get_header();
?>

    <div class="blog_container">
        <div class="wrapper">
            <div class="blog_title">
                <h2 class="title"><?php the_title() ?></h2>
            </div>
            <div class="post_single_box">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <div class="article_text">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_footer( 'template' );