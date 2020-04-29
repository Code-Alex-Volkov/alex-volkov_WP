<?php get_header();?>


    <div class="project_single">
        <div class="wrapper">
            <div class="project_single_title">
                <h1 class="title">Мои проекты</h1>
                <span><a href="project.html">Категории <i class="fas fa-project-diagram"></i></a></span>
            </div>
            <div class="block_single">
                <div class="left_single">
                    <h2 class="title_single">Landing Page</h2>
                    <p class="info_text_single">Landing Page, ещё называют целевая или посадочная страница. Это одностраничный сайт с формой заявки. Может быть коротким или достаточно длинным. Подходит для акций, спец.предложений или 1 - 4 товаров/услуг.</p>
                    <div class="btn_clic">
                        <a class="popup-btn" href="#">Заказать такой сайт</a>
                    </div>
                </div>
                <div class="right_single">
                    <?php get_cat_name( 1 ) ?>

                    <div class="block_project_single">
                        <a href="project-blog.html">
                            <div class="block_img">
                                <img src="assets/images/img_project2.png" alt="#">
                            </div>
                            <div class="block_title_site">
                                <span class="name_site">Название сайта</span>
                                <span class="data_download">11 апреля 2020 г.</span>
                            </div>
                            <span class="overlay">
									<i class="fas fa-link"></i>
								</span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>