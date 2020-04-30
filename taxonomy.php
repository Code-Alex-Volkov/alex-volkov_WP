<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

    Taxonomy php

<?php } } else { ?>
    <p>Записей нет.</p>
<?php } ?>

<?php get_footer('template'); ?>
