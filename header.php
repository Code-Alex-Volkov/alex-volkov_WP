<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <?php wp_head(); ?>
</head>
<body>
<div class="left_box">
    <div class="logo_box">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php the_field('логотип', 'option'); ?>" alt="Logo">
        </a>
    </div>
    <?php
    if ( have_rows('социальные_сети', 'option') ) {
        while ( have_rows('социальные_сети', 'option') ) { the_row(); ?>
            <div class="social">
                <a href="<?php the_sub_field('ссылка_на_социальную_сеть', 'option'); ?>"><?php the_sub_field('тег_иконки', 'option'); ?></a>
            </div>
            <?php
        }
    }
    ?>
    <div class="mail_block popup-btn">
        <a href="#" class="open_popup">Заказать разработку сайта</a>
        <a href="#" class="mail"><i class="fas fa-envelope-open-text"></i></a>
    </div>
</div>
<section class="centr_box">