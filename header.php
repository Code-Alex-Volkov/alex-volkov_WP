<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php get_template_part('partials/preloader'); ?>

    <div class="wrapper"><!-- Wrapper start -->

        <div class="ale_main_container cf"><!-- Main Container Start -->
            <div class="ale_container">
