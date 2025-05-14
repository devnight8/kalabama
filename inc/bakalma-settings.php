<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'bakalama_options';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'تنظیمات قالب',
        'menu_slug'  => 'theme-settings',
        'framework_title' => 'تنظیمات قالب <small>باکلاما</small>',
        'menu_type' => 'menu',
        // 'menu_position' => 3,
        'menu_icon' => 'dashicons dashicons-admin-generic',
        'ajax_save' => true,
        'show_search' => true,
    ));


    //
    // Create a section
    CSF::createSection($prefix, array(


        'title'  => 'تنظیمات بخش تاپ هدر',
        'fields' => array(
            array(
                'id'      => 'switcher-top-header',
                'type'    => 'switcher',
                'title'   => 'فعال سازی بخش تاپ هدر',
                'subtitle' => 'آیا میخواهید این بخش را فعال کنید ؟',
                'label'   => 'فعال سازی',
                'default' => false,
            ),
            array(
                'id' => 'link-top-header',
                'type' => 'text',
                'title' => 'لینک',
                'default' => 'https://example.com',
                'dependency' =>  array('switcher-top-header', '==', 'true'),
            ),
            array(
                'id'    => 'img-top-header',
                'type'  => 'upload',
                'title' => 'تصویر',
                'dependency' =>  array('switcher-top-header', '==', 'true'),
            ),


        )
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title'  => 'تنظیمات بخش دوم',
        'fields' => array(

            // A textarea field
            array(
                'id'    => 'opt-textarea',
                'type'  => 'textarea',
                'title' => 'متن چند خطی',
            ),

        )
    ));
}
