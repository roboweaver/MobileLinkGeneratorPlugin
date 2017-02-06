<?php

/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */
class MobileLinkGeneratorSettings {

    private $ICON = [
        'favicon' => 'images/favicon.ico',
        "icon" => 'images/apple-touch-icon-192x192.png',
        "apple-touch-icon" => 'images/apple-touch-icon.png',
        "57x57" => 'images/apple-touch-icon-57x57.png',
        "72x72" => 'images/apple-touch-icon-72x72.png',
        "76x76" => 'images/apple-touch-icon-76x76.png',
        "114x114" => 'images/apple-touch-icon-114x114.png',
        "120x120" => 'images/apple-touch-icon-120x120.png',
        "144x144" => 'images/apple-touch-icon-144x144.png',
        "152x152" => 'images/apple-touch-icon-152x152.png',
        "180x180" => 'images/apple-touch-icon-180x180.png'
    ];
    // Options 
    private $mobile_link_generator_options;

    /**
     * Constructor
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'mobile_link_generator_add_plugin_page'));
        add_action('admin_init', array($this, 'mobile_link_generator_page_init'));
    }

    /**
     * Add the plugin page
     */
    public function mobile_link_generator_add_plugin_page() {
        add_menu_page(
                'Mobile Link Generator', // page_title
                'Mobile Link Generator', // menu_title
                'manage_options', // capability
                'mobile-link-generator', // menu_slug
                array($this, 'mobile_link_generator_create_admin_page'), // function
                'dashicons-format-image', // icon_url
                81 // position
        );
    }

    /**
     * Create the admin page ...
     */
    public function mobile_link_generator_create_admin_page() {
        $this->mobile_link_generator_options = get_option('mobile_link_generator_option_name');
        ?>

        <div class="wrap">
            <h2>Mobile Link Generator</h2>
            <p>Plugin to install the links needed to bookmark your site on mobile</p>
            <?php settings_errors(); ?>

            <form method="post" action="options.php">
                <?php
                settings_fields('mobile_link_generator_option_group');
                do_settings_sections('mobile-link-generator-admin');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    /**
     * Initialize the page
     * 
     * @global type $pagenow
     */
    public function mobile_link_generator_page_init() {
        global $pagenow;

        register_setting(
                'mobile_link_generator_option_group', // option_group
                'mobile_link_generator_option_name', // option_name
                array($this, 'mobile_link_generator_sanitize') // sanitize_callback
        );

        add_settings_section(
                'mobile_link_generator_setting_section', // id
                'Settings', // title
                array($this, 'mobile_link_generator_section_info'), // callback
                'mobile-link-generator-admin' // page
        );

        add_settings_field(
                'favicon', // id
                'favicon.ico', // title
                array($this, 'favicon_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_192x192_1', // id
                'apple touch (192x192)', // title
                array($this, 'apple_touch_192x192_1_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_57x57_2', // id
                'apple touch (57x57)', // title
                array($this, 'apple_touch_57x57_2_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_72x72_3', // id
                'apple touch (72x72)', // title
                array($this, 'apple_touch_72x72_3_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_76x76_4', // id
                'apple touch (76x76)', // title
                array($this, 'apple_touch_76x76_4_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_114x114_5', // id
                'apple touch (114x114)', // title
                array($this, 'apple_touch_114x114_5_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_120x120_6', // id
                'apple touch (120x120)', // title
                array($this, 'apple_touch_120x120_6_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_144x144_7', // id
                'apple touch (144x144)', // title
                array($this, 'apple_touch_144x144_7_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_152x152_8', // id
                'apple touch (152x152)', // title
                array($this, 'apple_touch_152x152_8_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );

        add_settings_field(
                'apple_touch_180x180_9', // id
                'apple touch (180x180)', // title
                array($this, 'apple_touch_180x180_9_callback'), // callback
                'mobile-link-generator-admin', // page
                'mobile_link_generator_setting_section' // section
        );
    }

    /**
     * Sanitize the options 
     * 
     * @param type $input
     * @return type
     */
    public function mobile_link_generator_sanitize($input) {
        $sanitary_values = array();
        if (isset($input['favicon'])) {
            $sanitary_values['favicon'] = sanitize_text_field($input['favicon']);
        }

        if (isset($input['apple_touch_192x192_1'])) {
            $sanitary_values['apple_touch_192x192_1'] = sanitize_text_field($input['apple_touch_192x192_1']);
        }

        if (isset($input['apple_touch_57x57_2'])) {
            $sanitary_values['apple_touch_57x57_2'] = sanitize_text_field($input['apple_touch_57x57_2']);
        }

        if (isset($input['apple_touch_72x72_3'])) {
            $sanitary_values['apple_touch_72x72_3'] = sanitize_text_field($input['apple_touch_72x72_3']);
        }

        if (isset($input['apple_touch_76x76_4'])) {
            $sanitary_values['apple_touch_76x76_4'] = sanitize_text_field($input['apple_touch_76x76_4']);
        }

        if (isset($input['apple_touch_114x114_5'])) {
            $sanitary_values['apple_touch_114x114_5'] = sanitize_text_field($input['apple_touch_114x114_5']);
        }

        if (isset($input['apple_touch_120x120_6'])) {
            $sanitary_values['apple_touch_120x120_6'] = sanitize_text_field($input['apple_touch_120x120_6']);
        }

        if (isset($input['apple_touch_144x144_7'])) {
            $sanitary_values['apple_touch_144x144_7'] = sanitize_text_field($input['apple_touch_144x144_7']);
        }

        if (isset($input['apple_touch_152x152_8'])) {
            $sanitary_values['apple_touch_152x152_8'] = sanitize_text_field($input['apple_touch_152x152_8']);
        }

        if (isset($input['apple_touch_180x180_9'])) {
            $sanitary_values['apple_touch_180x180_9'] = sanitize_text_field($input['apple_touch_180x180_9']);
        }

        return $sanitary_values;
    }

    public function mobile_link_generator_section_info() {
        
    }

    public function mobile_link_generator_enqueue() {
        wp_enqueue_media();

        wp_enqueue_script('media_button_script', plugin_dir_url(__FILE__) . 'js/media_button.js', array(), false, true);
    }

    /**
     * Set the call back for favicon
     */
    public function favicon_callback() {
        $this->mobile_link_generator_enqueue();
        $value = isset($this->mobile_link_generator_options['favicon']) ? esc_attr($this->mobile_link_generator_options['favicon']) : '';
        echo <<<EOF
	<div class='image-preview-wrapper'>
                <img id='favicon_preview' src='{$value}' width='100' height='100' style='max-height: 100px; width: 100px;'>
	</div>
        <div class='uploader'>
	<input id="favicon_button" type="button" class="button" value="Upload image" />
	<input type='hidden' name='mobile_link_generator_option_name[favicon]' id='favicon' value='{$value}'>
        </div>
EOF;
    }

    /**
     * 192x192 icon
     */
    public function apple_touch_192x192_1_callback() {
        $this->mobile_link_generator_enqueue();
        $value = isset($this->mobile_link_generator_options['apple_touch_192x192_1']) ? esc_attr($this->mobile_link_generator_options['apple_touch_192x192_1']) : '';
        echo <<<EOF
	<div class='image-preview-wrapper'>
                <img id='apple_touch_192x192_1_preview' src='{$value}' width='100' height='100' style='max-height: 100px; width: 100px;'>
	</div>
        <div class='uploader'>
	<input id="apple_touch_192x192_1_button" type="button" class="button" value="Upload image" />
	<input type='hidden' name='mobile_link_generator_option_name[apple_touch_192x192_1]' id='apple_touch_192x192_1' value='{$value}'>
        </div>
EOF;
    }

    /**
     * 57x57 icon
     */
    public function apple_touch_57x57_2_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_57x57_2]" id="apple_touch_57x57_2" value="%s">', isset($this->mobile_link_generator_options['apple_touch_57x57_2']) ? esc_attr($this->mobile_link_generator_options['apple_touch_57x57_2']) : ''
        );
    }

    /**
     * 72x72 icon
     */
    public function apple_touch_72x72_3_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_72x72_3]" id="apple_touch_72x72_3" value="%s">', isset($this->mobile_link_generator_options['apple_touch_72x72_3']) ? esc_attr($this->mobile_link_generator_options['apple_touch_72x72_3']) : ''
        );
    }

    /**
     * 76x76 icon
     */
    public function apple_touch_76x76_4_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_76x76_4]" id="apple_touch_76x76_4" value="%s">', isset($this->mobile_link_generator_options['apple_touch_76x76_4']) ? esc_attr($this->mobile_link_generator_options['apple_touch_76x76_4']) : ''
        );
    }

    public function apple_touch_114x114_5_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_114x114_5]" id="apple_touch_114x114_5" value="%s">', isset($this->mobile_link_generator_options['apple_touch_114x114_5']) ? esc_attr($this->mobile_link_generator_options['apple_touch_114x114_5']) : ''
        );
    }

    /**
     * 120x120 icon
     */
    public function apple_touch_120x120_6_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_120x120_6]" id="apple_touch_120x120_6" value="%s">', isset($this->mobile_link_generator_options['apple_touch_120x120_6']) ? esc_attr($this->mobile_link_generator_options['apple_touch_120x120_6']) : ''
        );
    }

    /**
     * 144x144 icon
     */
    public function apple_touch_144x144_7_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_144x144_7]" id="apple_touch_144x144_7" value="%s">', isset($this->mobile_link_generator_options['apple_touch_144x144_7']) ? esc_attr($this->mobile_link_generator_options['apple_touch_144x144_7']) : ''
        );
    }

    /**
     * 152x152 icon
     */
    public function apple_touch_152x152_8_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_152x152_8]" id="apple_touch_152x152_8" value="%s">', isset($this->mobile_link_generator_options['apple_touch_152x152_8']) ? esc_attr($this->mobile_link_generator_options['apple_touch_152x152_8']) : ''
        );
    }

    /**
     * 180x180 icon
     */
    public function apple_touch_180x180_9_callback() {
        printf(
                '<input class="regular-text" type="text" name="mobile_link_generator_option_name[apple_touch_180x180_9]" id="apple_touch_180x180_9" value="%s">', isset($this->mobile_link_generator_options['apple_touch_180x180_9']) ? esc_attr($this->mobile_link_generator_options['apple_touch_180x180_9']) : ''
        );
    }

    /**
     * Get the right URL for the image, based on our current location
     * @param type $fname
     */
    function getImageURL($fname) {
        return plugins_url($fname, __FILE__);
    }

    /**
     * Get the image by name from the array 
     * 
     * @param type $selector
     * @return type
     */
    public function getImage($selector) {
        $returnValue = $this->ICON[$selector];
        return $returnValue;
    }

    /**
     * Icon html snippet 
     * 
     * @return type
     */
    public function getIconHTML() {
        $url = $this->getImageURL($this->ICON['icon']);
        $returnValue = <<<EOF
                <link rel="icon" sizes="192x192" href="{$url}" type="image/png" />
EOF;
        return $returnValue;
    }

    /**
     * Apple touch icon snippet
     * 
     * @return type
     */
    public function getAppleTouchIconHTML() {
        $url = $this->getImageURL($this->ICON['apple_touch_icon']);
        $returnValue = <<<EOF
               <link rel = "apple-touch-icon" href = "{$url}" type = "image/png" />

EOF;
        return $returnValue;
    }

    /**
     * Get the Apple touch icon
     * 
     * @param type $size
     * @return type
     */
    public function getAppleTouchIconBySizeHTML($size) {
        $url = $this->getImageURL($this->ICON[$size]);
        $returnValue = <<<EOF
                <link rel = "apple-touch-icon" sizes = "{$size}" href = "{$url}" type = "image/png" />

EOF;
        return $returnValue;
    }

}
    /*
     * Retrieve this value with:
     * $mobile_link_generator_options = get_option( 'mobile_link_generator_option_name' ); // Array of All Options
     * $favicon = $mobile_link_generator_options['favicon']; // favicon.ico
     * $apple_touch_192x192_1 = $mobile_link_generator_options['apple_touch_192x192_1']; // apple touch (192x192)
     * $apple_touch_57x57_2 = $mobile_link_generator_options['apple_touch_57x57_2']; // apple touch (57x57)
     * $apple_touch_72x72_3 = $mobile_link_generator_options['apple_touch_72x72_3']; // apple touch (72x72)
     * $apple_touch_76x76_4 = $mobile_link_generator_options['apple_touch_76x76_4']; // apple touch (76x76)
     * $apple_touch_114x114_5 = $mobile_link_generator_options['apple_touch_114x114_5']; // apple touch (114x114)
     * $apple_touch_120x120_6 = $mobile_link_generator_options['apple_touch_120x120_6']; // apple touch (120x120)
     * $apple_touch_144x144_7 = $mobile_link_generator_options['apple_touch_144x144_7']; // apple touch (144x144)
     * $apple_touch_152x152_8 = $mobile_link_generator_options['apple_touch_152x152_8']; // apple touch (152x152)
     * $apple_touch_180x180_9 = $mobile_link_generator_options['apple_touch_180x180_9']; // apple touch (180x180)
     * 
     * 
     * 
     * <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
     * <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
     * <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
     * <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
     * <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
     * <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
     * <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
     * <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
     * <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
     * <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
     * <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
     * <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
     * <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
     * <link rel="manifest" href="/manifest.json">
     * <meta name="msapplication-TileColor" content="#ffffff">
     * <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     * <meta name="theme-color" content="#ffffff">
     */
