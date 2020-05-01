<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

    <div class="img_box">
        <?php
        $queried_object = get_queried_object();
        $taxonomy = $queried_object->work;
        $term_id = $queried_object->term_id;

        $GLOBALS['wp_embed']->post_ID = $taxonomy . '_' . $term_id;
        ?>
        <img src="<?php echo get_field('выберите_картинку', $GLOBALS['wp_embed']->post_ID); ?>" alt="#">
    </div>

<?php } } else { ?>
    <p>Записей нет.</p>
<?php } ?>

<?php get_footer('template'); ?>
