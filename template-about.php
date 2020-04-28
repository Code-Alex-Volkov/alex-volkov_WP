<?php
/*
  * Template name: About Template
  * */
get_header();
?>

    <div class="about_box">
        <div class="wrapper">
            <div class="about_title">
                <div class="title"><?php wp_title(''); ?></div>
            </div>
            <div class="acquaintance">
                <div class="img_about animated fadeInLeft">
                    <img src="<?php the_field('загрузи_фото'); ?>" alt="загрузи_фото">
                </div>
                <?php while( have_posts() ) : the_post(); ?>
                    <div class="info_about animated fadeInRight">
                     <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="history_box">
            <div class="wrapper">
                <div class="history_container">
                    <h3 class="smalltitle"><?php the_field('заголовок_стаж'); ?></h3>
                    <div class="time_line_box">
                        <div class="time_content">
                            <?php
                            if ( have_rows('на_протяжении_многих_лет') ) {
                                while ( have_rows('на_протяжении_многих_лет') ) { the_row(); ?>
                                        <div class="time_line">
                                            <div class="left_box_time">
                                                <h4 class="time"><?php the_sub_field('год1'); ?></h4>
                                            </div>
                                            <div class="right_box_time">
                                                <p class="info_time"><?php the_sub_field('событие1'); ?></p>
                                            </div>
                                        </div>
                                        <div class="time_line">
                                            <div class="left_box_time">
                                                <p class="info_time"><?php the_sub_field('событие2'); ?></p>
                                            </div>
                                            <div class="right_box_time">
                                                <h4 class="time"><?php the_sub_field('год2'); ?></h4>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="freelance_box">
            <div class="wrapper">
                <div class="freelance_container">
                    <h3 class="smalltitle"><?php the_field('заголовок_фриланс'); ?></h3>
                    <div class="about_why">
                        <div class="left_block_why" style="background: url(<?php the_field('фото_фриланс'); ?>) no-repeat center; ">

                        </div>
                        <div class="right_block_why">
                            <p><?php the_field('текст_про_фриланс'); ?></p>
                            <div class="btn_clic order">
                                <a class="popup-btn" href="#">Заказать у меня сайт</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer( 'template' );