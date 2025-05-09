<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه اینترنتی کالا با ما </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/src/output.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' ?>">
</head>

<body>
    <section class="top-header w-full">
        <a href=""><img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/banner-top-header.gif' ?>" alt=""></a>
    </section>
    <header class="container max-w-[1480px] mx-auto flex items-center py-4">
        <div>
            <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt=""></a>
        </div>
        <div class="flex flex-1 mr-6 h-14">
            <div class="flex items-center justify-start bg-bg-color p-2 w-2xl gap-3 rounded-md">
                <img class="w-6 h-6 " src="<?php echo get_template_directory_uri() . '/assets/img/icon-search.svg' ?>" alt="">
                <input type="search" placeholder="محصول، برند یا دسته مورد نظرتان را جستجو کنید" class="outline-none w-full">
            </div>
        </div>
        <div class="flex items-center gap-5">
            <button class="border border-gray-500 px-7 py-2 rounded-md cursor-pointer"> ورود | ثبت نام </button>
            <button>
                <img class="w-10 h-10 border p-2 border-gray-200  rounded-md" src="<?php echo get_template_directory_uri() . '/assets/img/bag.svg' ?>" alt="">
            </button>
        </div>
    </header>
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
    <section id="slider" class="w-full">
        <div class="swiper slider">
            <div class="swiper-wrapper ">
                <div class="swiper-slide ">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider.gif' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider2.gif' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider3.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider4.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider.gif' ?>" alt="">
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="slider-pagination"></div>
        </div>
    </section>
    <section class="my-[120px] container  max-w-[1480px] mx-auto" id="cat-story">
        <div class="swiper category-list">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat1.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat1.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat2.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat3.webp' ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat4.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat5.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat6.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
                </div>
                <div class="swiper-slide ">
                    <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
                </div>

            </div>
            <div class="swiper-button-next cat-btn-next"></div>
            <div class="swiper-button-prev cat-btn-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </section>




    <script src="<?php echo get_template_directory_uri() . '/assets/js/swiper-bundle.min.js' ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js' ?>"></script>


</body>

</html>