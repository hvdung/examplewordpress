<?php

$opt_name='bict';

$theme=wp_get_theme();

$args=array(
    'opt_name' => $opt_name,
    'display_name'         => $theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    'admin_bar' => true,
    'menu_title'           => 'BICT Options',
    'page_title'           => 'BICT Options',
);

Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name,array(
    'title' =>  'Thông tin',
    'id'    =>  'bict-info',
    'desc'  =>  'Thông tin header thay đổi ở đây',
    'fields'=>array(
        array(
            'id'       => 'logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => 'Logo',
            'desc'     => 'Tải lên logo',
        ),

        array(
            'id'       => 'header-hotline',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Hotline',
            'desc'     => 'Hotline',
        ),

        array(
            'id'       => 'header-email',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Email',
            'desc'     => 'Email',
        ),

        array(
            'id'       => 'facebook',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Facebook',
            'desc'     => 'Link Facebook page',
        ),

        array(
            'id'       => 'twitter',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Twitter',
            'desc'     => 'Link Twitter',
        ),

        array(
            'id'       => 'gg',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Google plus',
            'desc'     => 'Link Google plus',
        ),

        array(
            'id'       => 'youtube',
            'type'     => 'text',
            'url'      => true,
            'title'    => 'Youtube',
            'desc'     => 'Link Youtube',
        ),
    )
));