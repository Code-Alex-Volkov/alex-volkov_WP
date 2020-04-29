

</section>
<div class="right_box">
    <div class="menu">
        <div class="nav_btn">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
        </div>
        <div class="site_nav_box">
            <?php
            wp_nav_menu( [
                'theme_location'  => 'Menu',
                'container'       => 'nav',
                'container_class' => 'site_nav',
            ] );
            ?>
            <div class="mobile_soc">
                <ul>
                    <?php
                    if ( have_rows('социальные_сети', 'option') ) {
                        while ( have_rows('социальные_сети', 'option') ) { the_row(); ?>
                            <li><a href="<?php the_sub_field('link_social', 'option'); ?>"><?php the_sub_field('тег_иконки', 'option'); ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="popup">
    <!-- Само (белое) модальное окно -->
    <div class="popup-dialog">
        <!-- Содержимое модального окна -->
        <div class="popup-content">
            <button class="popup-close">&times;</button>
            <!-- Заголовок окна -->
            <div class="form_block_popup">
                <?php echo do_shortcode( '[contact-form-7 id="63" title="Без названия"]' ); ?>
                <span class="bottom_text">Я отвечу в течении 24 часов!</span>
                <span class="ok_clik">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь <br> с <?php the_privacy_policy_link(); ?>.</span>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>