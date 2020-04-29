<?php
/*
  * Template name: FAQ Template
  * */
get_header();
?>

    <div class="faq_container">
        <div class="wrapper">
            <div class="faq_title">
                <h1 class="title"><?php wp_title(''); ?></h1>
            </div>
            <div class="faq_container">
                <h3 class="smalltitle"><?php the_field('заголовок_блока'); ?></h3>
                <div class="faq_box">
                    <div class="faq_content">
                        <?php
                        if ( have_rows('вопрос-ответ') ) {
                            while ( have_rows('вопрос-ответ') ) { the_row(); ?>
                                <div class="faq_line">
                                    <div class="left_box_faq">
                                        <h4 class="question"><?php the_sub_field('вопрос'); ?></h4>
                                    </div>
                                    <div class="right_box_faq">
                                        <p class="answer"><?php the_sub_field('ответ'); ?></p>
                                    </div>
                                </div>
                                <div class="faq_line">
                                    <div class="left_box_faq">
                                        <p class="answer"><?php the_sub_field('ответ2'); ?></p>
                                    </div>
                                    <div class="right_box_faq">
                                        <h4 class="question"><?php the_sub_field('вопрос2'); ?></h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="form_block">
                <?php echo do_shortcode( '[contact-form-7 id="63" title="Без названия"]' ); ?>
                <span class="bottom_text">Я отвечу в течении 24 часов.</span>
                <span class="ok_clik">Нажав на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь <br> с <?php the_privacy_policy_link(); ?></span>
            </div>
        </div>
    </div>

<?php
get_footer( 'template' ); ?>