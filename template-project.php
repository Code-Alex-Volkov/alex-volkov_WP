<?php
/*
  * Template name: Project Template
  * */
get_header();
?>

    <div class="project_box">
        <div class="wrapper">
            <div class="project_title">
                <div class="title"><?php wp_title(''); ?></div>
            </div>
            <p class="info_project_text">Кликните на блок, чтобы посмотреть подробности. Для вашего удобства, работы разбиты на категории.</p>
            <div class="projects">
                <?php
                $categories = get_categories(array(
                    'taxonomy'  => 'work',
                    'orderby'   => 'name',
                    'order'     => 'ASC'
                ));
                foreach( $categories as $category ){ ?>
                    <div class="project animated fadeInUp">
                        <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                <span class="overlay">
                                    <i class="fas fa-link"></i>
                                </span>
                            <div class="img_box">
                                <?php $cat_image = get_field('выберите_картинку', $category); ?>
                                <img src="<?php echo $cat_image; ?>" alt="#" >

                            </div>
                            <div class="info_box">
                                <?php echo '<span class="title_site"> '. $category->name . '</span>'; ?>
                                <?php echo '<span class="text_site"> '. $category->description . '</span>' ?>
                            </div>
                        </a>
                    </div>

              <?php  } ?>
            </div>
        </div>
    </div>

<?php
get_footer( 'template' );