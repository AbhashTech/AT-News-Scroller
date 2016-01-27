<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "at_news_scroller";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'at_news_scroller',
        'display_name' => 'AT News Scroller',
        'display_version' => '0.01',
        'page_slug' => 'at-news-scroller',
        'page_title' => 'AT Scroll Settings',
        'update_notice' => TRUE,
        'admin_bar' => FALSE,
        'menu_type' => 'menu',
        'menu_title' => 'AT Scroll Option',
        'allow_sub_menu' => TRUE,
        'customizer' => FALSE,
        'default_mark' => '*',
        'hints' => array(
            'icon' => 'el el-key',
            'icon_position' => 'left',
            'icon_color' => '#dd3333',
            'icon_size' => 'large',
            'tip_style' => array(
                'color' => 'dark',
                'shadow' => '1',
                'rounded' => '1',
                'style' => 'tipsy',
            ),
            'tip_position' => array(
                'my' => 'right top',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'effect' => 'slide',
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'effect' => 'fade',
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'use_cdn' => FALSE,
        'show_import_export'   => false,
        'dev_mode'             => false,
        'footer_credit' => 'Made With Love <i class="el el-heart" style="color:rgb(255,0,0);"></i> by <a href="http://abhashtech.com">AbhashTech</a>',
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/AbhashTech/AT-News-Scroller',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Our Website',
        'icon'  => 'el el-website'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    


    /*
     *
     * ---> START SECTIONS
     *
     */


