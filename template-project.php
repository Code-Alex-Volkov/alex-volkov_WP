<?php
/*
  * Template name: Project Template
  * */
get_header();
?>

    <div class="project_box">
        <div class="wrapper">
            <div class="project_title">
                <h1 class="title"><?php wp_title(''); ?></h1>
            </div>
            <p class="info_project_text">Кликните на блок, чтобы посмотреть подробности. Для вашего удобства, работы разбиты на категории.</p>
            <div class="projects">
                <div class="project animated fadeInLeft">
                    <a href="project-single.html">
							<span class="overlay">
								<i class="fas fa-link"></i>
							</span>
                        <div class="img_box">
                            <img src="assets/images/img_project.png" alt="#">
                        </div>
                        <div class="info_box">
                            <span class="title_site">Landing Page</span>
                            <span class="text_site">Посадочная страница для сбора контактов посетителей или продажи товара.</span>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>

<?php
get_footer( 'template' );