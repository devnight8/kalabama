<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'bakalama';

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
                'id' => 'link-top-header',
                'type' => 'text',
                'title' => 'لینک',
                'default' => 'https://example.com',
            ),
            array(
                'id'    => 'opt-img',
                'type'  => 'upload',
                'title' => 'تصویر',

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
