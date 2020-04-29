<?php
/*
  * Template name: Contact Template
  * */
get_header();
?>

    <div class="contact_box">
        <div class="wrapper">
            <div class="contact_title">
                <h1 class="title"><?php wp_title(''); ?></h1>
            </div>
            <div class="contact_info">
                <h3 class="sub_title">Готов начать работать со мной? Тогда напиши мне!!</h3>
            </div>

            <div class="form_block">
                <?php echo do_shortcode( '[contact-form-7 id="63" title="Без названия"]' ); ?>
                <span class="bottom_text">Я отвечу в течении 24 часов/</span>
                <span class="ok_clik">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь <br> с <?php the_privacy_policy_link(); ?>.</span>
            </div>
        </div>
    </div>



<?php
get_footer( 'template' );
