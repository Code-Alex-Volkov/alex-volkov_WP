<?php get_header(); ?>

    <div class="container_error">

        <div class="text-center" >
            <h1 class="error404-numb2">404</h1>
            <h3 class="error404-text2">Страница, которую вы ищете, <br> не удалось найти</h3>
            <div class="btn_clic">
                <a href="<?php echo esc_js('javascript:history.go(-1)'); ?>"><?php esc_html_e('Вернуться назад',''); ?></a>
            </div>

        </div>

    </div>

<?php get_footer(); ?>