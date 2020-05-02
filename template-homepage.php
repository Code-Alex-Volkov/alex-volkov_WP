<?php
/*
  * Template name: Homepage Template
  * */
get_header();
?>


    <div class="header_slider">
        <div class="slid" style="background: url(<?php the_field('фон_страницы'); ?>) no-repeat center center; width: 100%; background-size: cover;">
            <h1 class="title animated fadeInDown"><?php the_field('заголовок_главной_страницы'); ?></h1>
            <h2 class="sub_title animated fadeInUp"><?php the_field('подзаголовок_главной_страницы'); ?></h2>
            <div class="btn_clic animated fadeInUp">
                <a href="http://alex-volkov.loc/moi-proekty/">Посмотреть портфолио</a>
            </div>
        </div>
    </div>


<?php
get_footer();