<?php
class ale_global {

    //generate unique_ids
    private static $ale_unique_counter = 0;

    static function ale_generate_unique_id() {
        self::$ale_unique_counter++;
        return 'ale_uid_' . self::$ale_unique_counter . '_' . uniqid();
    }

    // Demo and plugins list
    public static $demo_list = array ();
    public static $plugins_list = array();

    static $ale_options;
}

//Demos Base
/*ale_global::$demo_list = array (
    'blackwhite' => array(
        'text' => 'Olins Black&White',
        'folder' => get_template_directory() . '/aletheme/demos/blackwhite/',
        'demo_url' => ALETHEME_DEMOS_HOST .'olins-blackwhite/',
        'category' => array('all','creative','shop'),
        'date-create' => '2017-01-1',
        'demo_preview' => ALETHEME_DEMOS_HOST .'olins_base/preview_screen/bw.jpg',
        'required_plugins' => array('woocommerce','cpt-olins','js_composer')
    ),
);*/

ale_global::$plugins_list = array(
    'cpt-olins' => array(
        'name'=>'Olins Core',
        'location'=>'bundled',
        'slug'=>'cpt-olins',
        'source' => ALETHEME_THEME_URL . '/plugins/cpt-olins.zip'
    ),
);