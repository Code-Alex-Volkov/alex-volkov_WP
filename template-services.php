<?php
/*
  * Template name: Services Template
  * */
get_header();
?>

    <div class="service_container">
        <div class="wrapper">
            <div class="service_title">
                <h1 class="title"><?php wp_title(''); ?></h1>
            </div>
            <div class="service_block">
                <?php
                if ( have_rows('услуги') ) {
                    while ( have_rows('услуги') ) { the_row(); ?>
                        <div class="service_list animated fadeInLeft">
                            <div class="list_clik">
                                <?php the_sub_field('иконка'); ?>
                                <h3 class="title_service"><?php the_sub_field('заголовок'); ?></h3>
                                <p class="info_list"><?php the_sub_field('текст'); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer( 'template' );