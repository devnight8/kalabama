<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'bakalama_setting';

    //
    // options
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
    // top header
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

    // header
    CSF::createSection($prefix, array(
        'title'  => 'تنظیمات هدر',
        'fields' => array(
            array(
                'id'          => 'header-type',
                'type'        => 'select',
                'title'       => 'انتخاب نوع هدر',
                'placeholder' => 'یک گزینه را انتخاب کنید',
                'options'     => array(
                    'default-header'  => 'طرح پیش فرض',
                    'elementor-header'  => 'طرح المنتوری',
                ),
                'default' => 'default-header'
            ),

            array(
                'id'    => 'logo-header',
                'type'  => 'media',
                'title' => 'انتخاب لوگو',
            ),

            array(
                'id'    => 'logo-size',
                'type' => 'text',
                'title' => 'سایز لوگو به پیکسل',
                'placeholder' => '200',
                'default' => '112',
            ),

        )
    ));
}


function bakalama_setting($key = '')
{
    $options = get_option('bakalama_setting');
    return isset($options[$key]) ? $options[$key] : null;
}
