<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function ale_get_options() {

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll',
        'background-size'=>'cover'
    );

    $wrapper_size = array(
        '100' => esc_html__('Flexible 100%','olins'),
        '960' => esc_html__('Boxed 960px','olins'),
        '1024' => esc_html__('Boxed 1024px','olins'),
        'custom' => esc_html__('Custom','olins')
    );

    $yes_no = array(
        'no' => esc_html__('No. Use Default Styles','olins'),
        'yes' => esc_html__('Yes, Overwrite with Custom','olins')
    );
    $show_hide = array(
        'hide' => esc_html__('Hide','olins'),
        'show' => esc_html__('Show','olins')
    );
    $date_position = array(
        'onimage' => esc_html__('On Featured Image','olins'),
        'infoline' => esc_html__('Blog Info Line','olins'),
        'beforetitle' => esc_html__('Before Title','olins')
    );
    $postline_position = array(
        'beforetitle' => esc_html__('Before Post Title','olins'),
        'aftertitle' => esc_html__('After Post Title','olins'),
        'aftercontent' => esc_html__('After Post Description','olins'),
        'disable' => esc_html__('Disable Post Line','olins')
    );
    $archive_columns = array(
        '1' => esc_html__('One Column','olins'),
        '2' => esc_html__('Two Columns','olins'),
        '3' => esc_html__('Three Columns','olins'),
        '4' => esc_html__('Four Columns','olins'),
        '5' => esc_html__('Five Columns','olins')
    );
    $archive_text_align = array(
        'left' => esc_html__('Left Align','olins'),
        'center' => esc_html__('Center Align','olins'),
        'right' => esc_html__('Right Align','olins'),
        'justify' => esc_html__('Justify','olins')

    );
    $archive_pagination = array(
        'pagination' => esc_html__('Pagination','olins'),
        'loadmore' => esc_html__('Load More Button','olins'),
        'infinite' => esc_html__('Infinite Scroll','olins'),
        'simple' => esc_html__('Simple pagination','olins')
    );
    $archive_sidebar = array(
        'no' => esc_html__('No Sideabar','olins'),
        'left_third' => esc_html__('1/3 Left','olins'),
        'left_fourth' => esc_html__('1/4 Left','olins'),
        'right_third' => esc_html__('1/3 Right','olins'),
        'right_fourth' => esc_html__('1/4 Right','olins')
    );
    $footer_variant = array(
        'default' => esc_html__('Default Footer','olins'),
        'widget' => esc_html__('Widget Footer','olins')
    );
    $page_heading = array(
        'parallax_one' => esc_html__('Dark Title on Light Parallax Image 1','olins'),
        'parallax_two' => esc_html__('Light Title on Dark Parallax Image 2','olins'),
        'simple_image' => esc_html__('White Title on Dark Image','olins'),
        'center_text' => esc_html__('Simple Centered Dart Title (without pre title)','olins'),
        'left_text' => esc_html__('Simple Title (without pre title)','olins'),
        'left_text_breadcrumbs' => esc_html__('Simple Title (without pre title) with Breadcrumbs','olins'),
        'breadcrumbs' => esc_html__('Hide Title, Show Breadcrumbs Line','olins'),
        'wedding_heading' => esc_html__('Left Image. Works for Wedding Variant.','olins'),
        'parallax_three' => esc_html__('Parallax image with Pre Title for Sticky Header','olins')
    );
    $blog_grid = array(
        'masonry' => esc_html__('Masonry Grid','olins'),
        'vintage' => esc_html__('Vintage Grid','olins'),
        'furniture' => esc_html__('Furniture Grid','olins'),
        'magazine' => esc_html__('Magazine Grid','olins'),
        'brigitte' => esc_html__('Brigitte Grid','olins'),
        'cameron' => esc_html__('Cameron Grid','olins'),
        'pixel' => esc_html__('Pixel Grid','olins'),
        'jade' => esc_html__('Jade Grid','olins'),
    );
    $woo_grid = array(
        'default' => esc_html__('Default Style','olins'),
        'vintage' => esc_html__('Vintage Style','olins'),
        'minimal' => esc_html__('Minimal Style','olins'),
        'fashion' => esc_html__('Fashion Style','olins'),
    );
    $menu_styles = array(
        'color' => '',
        'image' => '',
        'width' => '',
        'height' => '',
        'text-color' => '',
        'text-align' => '',
    );


    /* Theme Options */

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();

    $options[] = array("name" => esc_html__("Brand","olins"),
                        "type" => "heading",
                        "icon" => "fa-desktop");

    $options[] = array( "name" => esc_html__("Логотип сайта","olins"),
                        "desc" => esc_html__("Загрузи логотип","olins"),
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Favicon icon","olins"),
                        "desc" => esc_html__("Загрузи favicon icon","olins"),
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");


    $options[] = array("name" => esc_html__("Footer Options","olins"),
                        "type" => "heading",
                        "icon" => "fa-copyright");

    $options[] = array( "name" => esc_html__("Footer Call Number","olins"),
                        "desc" => esc_html__("Insert the call number","olins"),
                        "id" => "ale_footer_callnumber",
                        "std" => "",
                        "type" => "text");


    $options[] = array( "name" => esc_html__("Typography","olins"),
                        "type" => "heading",
                        "icon" => "fa-font");

    $options[] = array( "name" => esc_html__("Select the First Font from Google Library","olins"),
                        "desc" => esc_html__("The default Font is - Roboto","olins"),
                        "id" => "ale_font_one",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the First Font Properties from Google Library","olins"),
                        "desc" => esc_html__("The default Font (extended) is - 200,300,400,900","olins"),
                        "id" => "ale_font_one_ex",
                        "std" => "200,300,400,900",
                        "type" => "text",
                        );

    $options[] = array( 'name' => esc_html__("H1 Style","olins"),
                        'desc' => esc_html__("Change the h1 style","olins"),
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Roboto','style' => 'normal','transform'=>'uppercase', 'weight'=>'400','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

/*    $options[] = array( 'name' => esc_html__("H2 Style","olins"),
                        'desc' => esc_html__("Change the h2 style","olins"),
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '28px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H3 Style","olins"),
                        'desc' => esc_html__("Change the h3 style","olins"),
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '24px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H4 Style","olins"),
                        'desc' => esc_html__("Change the h4 style","olins"),
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '20px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H5 Style","olins"),
                        'desc' => esc_html__("Change the h5 style","olins"),
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '16px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H6 Style","olins"),
                        'desc' => esc_html__("Change the h6 style","olins"),
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');*/

    $options[] = array( 'name' => esc_html__("Body Style","olins"),
                        'desc' => esc_html__("Change the body font style","olins"),
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Roboto','style' => 'normal','transform'=>'none', 'weight'=>'300','lineheight'=>'24px','color' => '#000000'),
                        'type' => 'typography');

	$options[] = array( "name" => esc_html__("Social Profiles","olins"),
						"type" => "heading",
                        "icon" => "fa-address-book");

    $options[] = array( "name" => esc_html__("Twitter","olins"),
                        "desc" => esc_html__("Your twitter profile URL.","olins"),
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook","olins"),
						"desc" => esc_html__("Your facebook profile URL.","olins"),
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => esc_html__("Youtube","olins"),
                        "desc" => esc_html__("Your youtube profile URL.","olins"),
                        "id" => "ale_you",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("LinkedIn","olins"),
                        "desc" => esc_html__("Your LinkedIn profile URL.","olins"),
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Pinterest","olins"),
                        "desc" => esc_html__("Your Pinterest profile URL.","olins"),
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Google Plus+","olins"),
                        "desc" => esc_html__("Your Google Plus+ profile URL.","olins"),
                        "id" => "ale_gpl",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Tumblr","olins"),
                        "desc" => esc_html__("Your Tumblr profile URL.","olins"),
                        "id" => "ale_tum",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Instagram","olins"),
                        "desc" => esc_html__("Your Instagram profile URL.","olins"),
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Reddit","olins"),
                        "desc" => esc_html__("Your Reddit profile URL.","olins"),
                        "id" => "ale_red",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("VK","olins"),
                        "desc" => esc_html__("Your VK profile URL.","olins"),
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Share Platforms","olins"),
                        "desc" => esc_html__("Check the platforms you want to use for social share","olins"),
                        "id" => "ale_share_platforms",
                        "std"=>array(
                            'fb'=>'1',
                            'twi'=>'1',
                            'goglp'=>'1'
                            ),
                        "type" => "multicheck",
                        "options" => array(
                            'fb'=>'Facebook',
                            'twi'=>'Twitter',
                            'goglp'=>'Google +',
                            'lin'=>'Linkedin',
                            'red'=>'Reddit',
                            'pin'=>'Pinterest',
                            'vk'=>'Vkontakte'
                        ));

	
	$options[] = array( "name" => esc_html__("Facebook Application ID","olins"),
						"desc" => esc_html__("If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.","olins"),
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => esc_html__("Enable Open Graph","olins"),
						"desc" => esc_html__("The Open Graph protocol enables any web page to become a rich object in a social graph.","olins"),
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


    $options[] = array("name" => esc_html__("Blog Settings","olins"),
                       "type" => "heading",
                       "icon" => "fa-newspaper-o");


    $options[] = array( "name" => esc_html__("Columns Count","olins"),
                        "desc" => esc_html__("Select the columns count for the Blog Archives pages. Works for grids, that support columns.","olins"),
                        "id" => "ale_default_blog_columns",
                        "std" => "3",
                        "type" => "select",
                        "options" => $archive_columns);

    $options[] = array( "name" => esc_html__("Text Align","olins"),
                        "desc" => esc_html__("Setup the Text Align into Blog items","olins"),
                        "id" => "ale_default_blog_text_align",
                        "std" => "center",
                        "type" => "select",
                        "options" => $archive_text_align);

    $options[] = array( "name" => esc_html__("Pagination Settings","olins"),
                        "desc" => esc_html__("Select the Pagination Type for Blog Archives","olins"),
                        "id" => "ale_default_blog_pagination",
                        "std" => "pagination",
                        "type" => "select",
                        "options" => $archive_pagination);

    $options[] = array( "name" => esc_html__("Sidebar Settings","olins"),
                        "desc" => esc_html__("Select a sidebar position for Blog Archives","olins"),
                        "id" => "ale_blog_sidebar_position",
                        "std" => "no",
                        "type" => "select",
                        "options" => $archive_sidebar);

    $options[] = array( "name" => esc_html__("Share Icons","olins"),
                        "desc" => esc_html__("Show or Hide Share Icons?","olins"),
                        "id" => "ale_blog_share_icons",
                        "std" => "show",
                        "type" => "select",
                        "options" => $show_hide);

    $options[] = array( "name" => esc_html__("Number of Words in Description","olins"),
                        "desc" => esc_html__("Specify the Number of Words for Description blog per post.","olins"),
                        "id" => "ale_custom_blog_excerpt_count",
                        "std" => "20",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Date Position","olins"),
                        "desc" => esc_html__("Select the date position.","olins"),
                        "id" => "ale_blog_custom_date_position",
                        "std" => "onimage",
                        "type" => "select",
                        "options" => $date_position);

    $options[] = array( "name" => esc_html__("Blog Info Line Position","olins"),
                        "desc" => esc_html__("Select the post info line position.","olins"),
                        "id" => "ale_blog_custom_postline_position",
                        "std" => "beforetitle",
                        "type" => "select",
                        "options" => $postline_position);

    $options[] = array( "name" => esc_html__("Show Category?","olins"),
                        "desc" => esc_html__("Show or Hide post Category?","olins"),
                        "id" => "ale_blog_show_category",
                        "std" => "show",
                        "type" => "select",
                        "options" => $show_hide);

    $options[] = array( "name" => esc_html__("Show post Author?","olins"),
                        "desc" => esc_html__("Show or Hide post Author?","olins"),
                        "id" => "ale_blog_show_author",
                        "std" => "hide",
                        "type" => "select",
                        "options" => $show_hide);

    $options[] = array( "name" => esc_html__("Show Comments count?","olins"),
                        "desc" => esc_html__("Show or Hide comments count?","olins"),
                        "id" => "ale_blog_show_comments",
                        "std" => "hide",
                        "type" => "select",
                        "options" => $show_hide);

    $options[] = array( "name" => esc_html__("Blog Grid Layout","olins"),
                        "desc" => esc_html__("Specify the Grid Layout. Note: Once you selected a specific Grid some of the options above will not work. This is happening because a specific grid has specific parameters and some options like columns count will not work.","olins"),
                        "id" => "ale_blog_grid_layout",
                        "std" => "masonry",
                        "type" => "select",
                        "options" => $blog_grid);


    $options[] = array( 'name' => esc_html__("Overwrite Default Blog Styles","olins"),
                        'desc' => esc_html__("The fields bellow are for custom styles. You can select the overwrite option and insert custom values to change the blog style.","olins"),
                        'id' => 'ale_overwritebloginfo',
                        'std' => "",
                        'type' => 'info');

    $options[] = array( "name" => esc_html__("Overwrite Blog Styles","olins"),
                        "desc" => esc_html__("Select Yes if you want to customize the elements like title, image, social icons, etc...","olins"),
                        "id" => "ale_blog_custom_styles",
                        "std" => "no",
                        "type" => "select",
                        "options" => $yes_no);

    $options[] = array( 'name' => esc_html__("Title Typography","olins"),
                        'desc' => esc_html__("Change the Typography for block title","olins"),
                        'id' => 'ale_custom_blog_title',
                        'std' => array('size' => '16px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'600','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( "name" => esc_html__("Title Margins","olins"),
                        "desc" => esc_html__("Specify the margin value for block title.","olins"),
                        "id" => "ale_custom_blog_title_margin",
                        "std" => "0 0 25px 0",
                        "type" => "text");

    $options[] = array( 'name' => esc_html__("Description Typography","olins"),
                        'desc' => esc_html__("Change the Typography for block description","olins"),
                        'id' => 'ale_custom_blog_desc',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'24px','color' => '#898989'),
                        'type' => 'typography');

    $options[] = array( "name" => esc_html__("Description Margins","olins"),
                        "desc" => esc_html__("Specify the margin value for block description.","olins"),
                        "id" => "ale_custom_blog_desc_margin",
                        "std" => "0 0 1em 0",
                        "type" => "text");

    $options[] = array( 'name' => esc_html__("Info Line Typography","olins"),
                        'desc' => esc_html__("Change the Typography for info line","olins"),
                        'id' => 'ale_custom_blog_infoline',
                        'std' => array('size' => '12px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'14px','color' => '#acacac'),
                        'type' => 'typography');

    $options[] = array( "name" => esc_html__("Info Line Margins","olins"),
                        "desc" => esc_html__("Specify the margin value for info line.","olins"),
                        "id" => "ale_custom_blog_info_margin",
                        "std" => "0",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Share Icons Color","olins"),
                        "desc" => esc_html__("Specify the share icons color.","olins"),
                        "id" => "ale_custom_blog_share_color",
                        "std" => "#898989",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Share Icons Size","olins"),
                        "desc" => esc_html__("Specify the icon size in px.","olins"),
                        "id" => "ale_custom_blog_share_size",
                        "std" => "12px",
                        "type" => "text");

    $options[] = array( 'name' => esc_html__("Overwrite Pagination Styles","olins"),
                        'desc' => esc_html__("Change the fields bellow to overwrite the paginations styles","olins"),
                        'id' => 'ale_overwritepaginationinfo',
                        'std' => "",
                        'type' => 'info');

    $options[] = array( "name" => esc_html__("Button Background color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_color",
                        "std" => "#FFF",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Button Font color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_color_font",
                        "std" => "#898989",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Button Hover Background color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_hover",
                        "std" => "#f3f4f4",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Button Hover Font color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_hover_font",
                        "std" => "#000",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Button Border color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_border",
                        "std" => "#f3f4f4",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Button Hover Border color","olins"),
                        "desc" => esc_html__("Specify the color.","olins"),
                        "id" => "ale_pag_button_border_hover",
                        "std" => "#f3f4f4",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Overwrite Single Blog Post Styles","olins"),
                        "desc" => esc_html__("Select Yes if you want to customize the elements like title, infoline, social icons, etc...","olins"),
                        "id" => "ale_single_blog_custom_styles",
                        "std" => "no",
                        "type" => "select",
                        "options" => $yes_no);

    $options[] = array( 'name' => esc_html__("Title Typography","olins"),
                        'desc' => esc_html__("Change the Typography for block title","olins"),
                        'id' => 'ale_custom_single_blog_title',
                        'std' => array('size' => '16px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'600','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( "name" => esc_html__("Title Margins","olins"),
                        "desc" => esc_html__("Specify the margin value for block title.","olins"),
                        "id" => "ale_custom_single_blog_title_margin",
                        "std" => "0 0 25px 0",
                        "type" => "text");

    $options[] = array( 'name' => esc_html__("Pre Title Typography","olins"),
                        'desc' => esc_html__("Change the Typography for Pre Title","olins"),
                        'id' => 'ale_custom_single_blog_infoline',
                        'std' => array('size' => '12px','face' => 'Raleway','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'14px','color' => '#acacac'),
                        'type' => 'typography');

    $options[] = array( "name" => esc_html__("Pre Title Margins","olins"),
                        "desc" => esc_html__("Specify the margin value for pre title.","olins"),
                        "id" => "ale_custom_single_blog_info_margin",
                        "std" => "0",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Title & Pre Title Align","olins"),
                        "desc" => esc_html__("Setup the Text Align","olins"),
                        "id" => "ale_default_single_blog_text_align",
                        "std" => "center",
                        "type" => "select",
                        "options" => $archive_text_align);


    $options[] = array( "name" => esc_html__("Work Settings","olins"),
                        "type" => "heading",
                        "icon" => "fa-camera");

    $options[] = array( "name" => esc_html__("Archive Pre Title","olins"),
                        "desc" => esc_html__("Insert the pre title for Archives pages","olins"),
                        "id" => "ale_works_pre_title",
                        "std" => "we love the things",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Archive Title","olins"),
                        "desc" => esc_html__("Insert the title for Archives pages","olins"),
                        "id" => "ale_works_title",
                        "std" => "we create for you",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Page Heading Background","olins"),
                        "desc" => esc_html__("Upload or put the image link. Necessary size: 1800px-590px","olins"),
                        "id" => "ale_worktitlebg",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Columns Count","olins"),
                        "desc" => esc_html__("Select the columns count for the Works Archives pages","olins"),
                        "id" => "ale_default_work_columns",
                        "std" => "3",
                        "type" => "select",
                        "options" => $archive_columns);

    $options[] = array( "name" => esc_html__("Layout Style","olins"),
                        "desc" => esc_html__("Select between Grid or Masonry or Square layout.","olins"),
                        "id" => "ale_default_layout_type",
                        "std" => "masonry",
                        "type" => "select",
                        "options" => array(
                            'masonry' => 'Masonry Layout',
                            'grid'    => 'Grid Layout',
                            'square'    => 'Square Layout',
                        ));

    $options[] = array( "name" => esc_html__("Hover Style","olins"),
                        "desc" => esc_html__("Specify the Hover Style.","olins"),
                        "id" => "ale_work_hover",
                        "std" => "1",
                        "type" => "select",
                        "options" => array(
                            '1' => 'Hover Style 1 (Lines)',
                            '2' => 'Hover Style 2 (Light Opacity)',
                            '3' => 'Hover Style 3 (Mask Opacity)',
                            '4' => 'Hover Style 4 (Light Opacity)',
                            '5' => 'Hover Style 5 (Creative)',
                            '6' => 'Hover Style 6 (Stephanie Wedding)',
                            '7' => 'Hover Style 7 (Cameron)'
                        ));

    $options[] = array( "name" => esc_html__("Padding","olins"),
                        "desc" => esc_html__("Padding between work items in px","olins"),
                        "id" => "ale_work_padding",
                        "std" => "0",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Sidebar Settings","olins"),
                        "desc" => esc_html__("Select a sidebar position for Work Archives","olins"),
                        "id" => "ale_work_sidebar_position",
                        "std" => "no",
                        "type" => "select",
                        "options" => $archive_sidebar);

    $options[] = array( "name" => esc_html__("Item Style","olins"),
                        "desc" => esc_html__("Specify the Item Style.","olins"),
                        "id" => "ale_item_style",
                        "std" => "1",
                        "type" => "select",
                        "options" => array(
                            '1' => esc_html__('Only Image','olins'),
                            '2' => esc_html__('Image, Title, and Category Icon','olins'),
                            '3' => esc_html__('Image, Title, Category','olins'),
                            '4' => esc_html__('Image (On Hover title & category)','olins'),
                            '5' => esc_html__('Image & Title','olins')
                        ));

    $options[] = array( "name" => esc_html__("Container Properties","olins"),
                        "desc" => esc_html__("Specify the Container style for Works Post Type","olins"),
                        "id" => "ale_works_container_prop",
                        "std" => "1",
                        "type" => "select",
                        "options" => array(
                            '1' => esc_html__('Use Default Settings (Style Tab).','olins'),
                            '2' => esc_html__('Use Full Width with no padding.','olins')
                        ));

    $options[] = array( "name" => esc_html__("Extra Heading","olins"),
                        "desc" => esc_html__("Enable or Disable an Extra Heading that shows some additional info","olins"),
                        "id" => "ale_works_extra_heading",
                        "std" => "1",
                        "type" => "select",
                        "options" => array(
                            '1' => esc_html__('Disable Extra Heading','olins'),
                            '2' => esc_html__('Enable Extra Heading','olins')
                        ));

    $options[] = array( "name" => esc_html__("First Line Text","olins"),
                        "desc" => esc_html__("Add some text to show in first line","olins"),
                        "id" => "ale_work_extra_line1",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Second Line Text","olins"),
                        "desc" => esc_html__("Add some text to show in second line","olins"),
                        "id" => "ale_work_extra_line2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Background Color","olins"),
                        "desc" => esc_html__("Specify the background color for the Extra heading","olins"),
                        "id" => "ale_work_extra_bg",
                        "std" => "",
                        "type" => "color");

    $options[] = array( "name" => esc_html__("Taxonomy Navigation","olins"),
                        "desc" => esc_html__("Enable or Disable the taxonomy (Category) navigation at the top of archive page.","olins"),
                        "id" => "ale_taxonomy_navigation",
                        "std" => "disable",
                        "type" => "select",
                        "options" => array(
                            'disable' => esc_html__('Disable','olins'),
                            'enable' => esc_html__('Enable','olins')
                        ));


    $options[] = array("name" => esc_html__("Instagram Settings","olins"),
                       "type" => "heading",
                       "icon" => "fa-instagram");

    $options[] = array( "name" => esc_html__("Enable Instagram Feed","olins"),
                        "desc" => esc_html__("Enable to show the recent images from instagram on the footer. Note: It will show the module only on design variants that support the instagram feed in footer. You can check the demo examples to view the list.","olins"),
                        "id" => "ale_instagram_feed_footer",
                        "std" => "disable",
                        "type" => "select",
                        "options" => array(
                            'enable' => esc_html__('Enable Instagram on Footers that supports','olins'),
                            'disable' => esc_html__('Disable Instagram Feed','olins')
                        ));

    $options[] = array( "name" => esc_html__("Instagram Login","olins"),
                        "desc" => esc_html__("Insert your instagram login","olins"),
                        "id" => "ale_instagram_login",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Access Token","olins"),
                        "desc" => esc_html__("Insert your Instagram Access Token. If you don't know how to generate an access token you can take a look at our video tutorial. The link is under this comment.","olins"),
                        "id" => "ale_instagram_token",
                        "tutorial" => "https://www.youtube.com/watch?v=N-nAzuqvePo",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Images Count","olins"),
                        "desc" => esc_html__("How many images to show?","olins"),
                        "id" => "ale_instagram_count",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Images Size","olins"),
                        "desc" => esc_html__("Specify the images Thumb.","olins"),
                        "id" => "ale_instagram_thumb",
                        "std" => "standard_resolution",
                        "type" => "select",
                        "options" => array(
                            'standard_resolution' => esc_html__('Standard Resolution','olins'),
                            'low_resolution' => esc_html__('Low Resolution','olins'),
                            'thumbnail' => esc_html__('Thumbnail','olins')
                        ));

    $options[] = array("name" => esc_html__("Forms Settings","olins"),
                       "type" => "heading",
                       "icon" => "fa-envelope-o");

    $options[] = array( "name" => esc_html__("Шорткод формы страницы Контакты","olins"),
                        "desc" => esc_html__("Вставь шорткод формы (cf7)","olins"),
                        "id" => "ale_form1_shortcode",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => esc_html__("Шорткод Popup","olins"),
                        "desc" => esc_html__("Вставь шорткод формы (cf7)","olins"),
                        "id" => "ale_form2_shortcode",
                        "std" => "",
                        "type" => "text");

	return $options;
}


/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function ale_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'title_heading_metabox',
        'title'      => esc_html__('Title About Us Styles','olins'),
        'pages'      => array( 'page' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'),),
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => esc_html__('Загрузи своё фото','olins'),
                'desc' => esc_html__('Загрузи своё фото.','olins'),
                'id'   => $prefix . 'download_photo',
                'type'    => 'file',
            ),
            array(
                'name' => esc_html__('Заголовок блока','olins'),
                'desc' => esc_html__('Введи заголовок блока','olins'),
                'id'   => $prefix . 'sub_title_one',
                'type'    => 'text',
            ),
            array(
                'name' => esc_html__('Заголовок блока','olins'),
                'desc' => esc_html__('Введи заголовок блока','olins'),
                'id'   => $prefix . 'sub_title_two',
                'type'    => 'text',
            ),
            array(
                'name' => esc_html__('Загрузи крутую картинку про фриланс','olins'),
                'desc' => esc_html__('Загрузи картинку.','olins'),
                'id'   => $prefix . 'download_freelance',
                'type'    => 'file',
            ),
            array(
                'name' => esc_html__('Текст про фриланс','olins'),
                'desc' => esc_html__('Запиши пару строк про фриланс','olins'),
                'id'   => $prefix . 'text_freelance',
                'type'    => 'textarea',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function ale_get_images_sizes() {
	return array(

        'post' => array(
            array(
                'name'      => 'post-squarelarge',
                'width'     => 700,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-simplelarge',
                'width'     => 1000,
                'height'    => 700,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-simpletin',
                'width'     => 1000,
                'height'    => 480,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-vertical',
                'width'     => 500,
                'height'    => 660,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function ale_get_post_formats() {
	return array('gallery','link','quote','video','audio');
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function ale_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function ale_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function ale_media_custom_fields() {
	return array();
}