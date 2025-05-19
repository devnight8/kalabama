<?php

$header_type = bakalama_setting('header-type');
$link_top_header = bakalama_setting('link-top-header');
$img_top_header = bakalama_setting('img-top-header');
$logo_header = bakalama_setting('logo-header');
$logo_size = bakalama_setting('logo-size');
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه اینترنتی کالا با ما </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <!-- TOP HEADER -->
    <?php if ($header_type == "default-header"): ?>
        <div class="top-header w-full ">
            <a href="<?php echo esc_url($link_top_header) ?> "><img class="w-full" src="<?php echo $img_top_header ?>" alt=""></a>
        </div>
        <!-- Header -->
        <section class="sticky top-0 left-0 right-0 z-10 bg-white">
            <header class="container max-w-[1480px] mx-auto flex items-center py-4 ">
                <div>
                    <a href="<?php esc_url(home_url()); ?>"><img width="<?php echo esc_attr($logo_size) ?>px" src="<?php echo esc_url($logo_header['url']) ?>" alt="<?php echo esc_attr(get_bloginfo('name')) ?>"></a>
                </div>
                <div class="flex flex-1 mr-6 h-14">
                    <form class="flex items-center justify-start bg-bg-color p-2 w-2xl gap-3 rounded-md " action="">
                        <img class="w-6 h-6" src="<?php echo get_template_directory_uri() . '/assets/img/icon-search.svg' ?>" alt="">
                        <label for="search"></label>
                        <input type="search" id="search" placeholder="محصول، برند یا دسته مورد نظرتان را جستجو کنید" class="outline-none w-full placeholder:text-sm placeholder:text-gray-400 ">
                    </form>
                </div>
                <div class="flex items-center gap-5 relative">
                    <?php if (is_user_logged_in()): ?>
                        <button class="border border-gray-500 px-7 py-2 rounded-md cursor-pointer" id="my-account"> ناحیه کاربری</button>
                    <?php else: ?>
                        <button class="border border-gray-500 px-7 py-2 rounded-md cursor-pointer" id="registration"> ورود | ثبت نام </button>
                    <?php endif; ?>
                    <!-- Modal Login/Register -->
                    <div id="auth-modal" class="hidden fixed inset-0 bg-black/65  overflow-y-auto h-full w-full z-50 transition-opacity duration-300 opacity-0">
                        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white transform transition-transform duration-300 scale-95">
                            <div class="flex flex-col items-center">
                                <!-- Tab headers -->
                                <div class="flex w-full mb-8 gap-4">
                                    <button class="flex-1 py-2 text-center border-b-2 border-blue-500 text-blue-500" data-tab="login">ورود</button>
                                    <button class="flex-1 py-2 text-center" data-tab="register">ثبت نام</button>
                                </div>
                                <!-- Login Form -->
                                <form id="login-form" class="w-full">
                                    <div class="mb-4">
                                        <input type="text" class="w-full p-2 border rounded-md outline-none focus:border-blue-500" placeholder="ایمیل یا نام کاربری">
                                    </div>
                                    <div class="mb-6">
                                        <input type="password" class="w-full p-2 border rounded-md outline-none focus:border-blue-500" placeholder="رمز عبور">
                                    </div>
                                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors">
                                        ورود به حساب کاربری
                                    </button>
                                </form>
                                <!-- Register Form -->
                                <form id="register-form" class="w-full hidden">
                                    <div class="mb-4">
                                        <input type="text" class="w-full p-2 border rounded-md outline-none focus:border-blue-500" placeholder="ایمیل یا نام کاربری">
                                    </div>
                                    <div class="mb-6">
                                        <input type="password" class="w-full p-2 border rounded-md outline-none focus:border-blue-500" placeholder="رمز عبور">
                                    </div>
                                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition-colors">
                                        ثبت نام
                                    </button>
                                </form>
                            </div>
                            <!-- Close button -->
                            <button id="close-modal" class="absolute top-3 left-3 text-gray-400 hover:text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- CART CONTAINER -->
                    <div id="cart-container" class="mt-2">
                        <button id="cart-button" class="hover:[&+div]:block relative">
                            <img class="w-10 h-10 border p-2 border-gray-200  rounded-md" src="<?php echo get_template_directory_uri() . '/assets/img/bag.svg' ?>" alt="">
                            <span class="absolute bg-blue-400 text-white rounded-full h-5 w-5 text-[12px] -top-2 -right-1 items-center justify-center flex">1</span>
                        </button>
                        <!-- CART  -->
                        <div id="cart-box" class="absolute rounded-md left-0  shadow text-sm text-gray-500 w-[450px] p-4 hidden z-10 bg-white ">
                            <div class="bg-gray-100 flex items-center justify-between p-2 rounded">
                                <div class="flex items-center justify-center text-[12px] gap-2 font-medium ">
                                    <span class="text-black ">سبد خرید شما:</span>
                                    <span>1 عدد کالا</span>
                                </div>
                                <div class="flex items-center justify-center gap-2 text-[12px]">
                                    <a href="" class="flex items-center justify-center gap-2 text-[12px]">
                                        <span class="text-blue-800">مشاهده سبد خرید</span>
                                        <span class="text-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- CART BODY -->
                            <div class="flex justify-between items-center">
                                <div class="text-black flex gap-3 flex-col items-start justify-start">
                                    <img class="mt-2" src="<?php echo get_template_directory_uri() . '/assets/img/static_techno-off_new.svg' ?>" alt="">
                                    <h3 class="text-[12px]">ساعت هوشمند میبرو مدل GS Pro </h3>
                                    <div class="flex items-center  gap-4 mt-3 text-blue-800">
                                        <span class="[&>svg]:stroke-blue-600 ">

                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M15 11L16 17" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M9 11L8 17" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M20.2235 12.5257C19.6382 9.40452 19.3456 7.84393 18.2347 6.92196C17.1238 6 15.5361 6 12.3605 6H11.6393C8.46374 6 6.87596 6 5.76506 6.92196C4.65416 7.84393 4.36155 9.40452 3.77633 12.5257C2.9534 16.9146 2.54194 19.1091 3.74157 20.5545C4.94119 22 7.17389 22 11.6393 22H12.3605C16.8259 22 19.0586 22 20.2582 20.5545C20.9542 19.7159 21.1079 18.6252 20.9536 17" stroke-width="1.5" stroke-linecap="round" />
                                                </g>
                                            </svg>
                                        </span>
                                        <span>تکنو لایف</span>
                                    </div>
                                    <div class="flex items-center  gap-4 text-blue-800">
                                        <span class="[&>svg]:stroke-blue-600 ">

                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M15 11L16 17" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M9 11L8 17" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M20.2235 12.5257C19.6382 9.40452 19.3456 7.84393 18.2347 6.92196C17.1238 6 15.5361 6 12.3605 6H11.6393C8.46374 6 6.87596 6 5.76506 6.92196C4.65416 7.84393 4.36155 9.40452 3.77633 12.5257C2.9534 16.9146 2.54194 19.1091 3.74157 20.5545C4.94119 22 7.17389 22 11.6393 22H12.3605C16.8259 22 19.0586 22 20.2582 20.5545C20.9542 19.7159 21.1079 18.6252 20.9536 17" stroke-width="1.5" stroke-linecap="round" />
                                                </g>

                                            </svg>
                                        </span>
                                        <span>موجود در انبار </span>
                                    </div>
                                </div>
                                <div>
                                    <div class="w-[130px]">
                                        <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro.webp' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CART EMPTY -->
                        <!-- <div class="absolute p-2 rounded-full left-0 top-14 shadow text-sm text-gray-500 hidden "> سبد خرید (خالیه) </div> -->
                    </div>
                </div>
            </header>
        </section>
        <!-- NAVBAR -->
        <section class="sticky top-22 left-0 right-0 z-[3] bg-white">
            <section class="container max-w-[1480px] mx-auto py-4">
                <nav>
                    <ul class="flex items-center gap-10">
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                            <a href="">دسته بندی ها</a>

                        </li>
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <img class="h-6 w-6" src="<?php echo get_template_directory_uri() . '/assets/img/discount.svg' ?>" alt="">
                            </span>
                            <a href="">تکنوآف</a>

                        </li>
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <img class="h-6 w-6" src="<?php echo get_template_directory_uri() . '/assets/img/bag-icon.svg' ?>" alt="">

                            </span>
                            <a href="">خرید سازمانی</a>

                        </li>
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <img class="h-6 w-6" src="<?php echo get_template_directory_uri() . '/assets/img/gift.svg' ?>" alt="">

                            </span>
                            <a href="">کارت هدیه</a>

                        </li>
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <img class="h-6 w-6" src="<?php echo get_template_directory_uri() . '/assets/img/master-card.svg' ?>" alt="">

                            </span>
                            <a href="">خرید اقساطی</a>

                        </li>
                        <li class="text-sm flex items-center gap-2 hover:bg-blue-50 transition-all p-2 rounded-md">
                            <span>
                                <img class="h-6 w-6" src="<?php echo get_template_directory_uri() . '/assets/img/gold.svg' ?>" alt="">

                            </span>
                            <a href="">خرید طلای دیجیتال</a>

                        </li>
                    </ul>
                </nav>
            </section>
        </section>
    <?php else: ?>
        elementor
    <?php endif; ?>