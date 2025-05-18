<?php
get_header()
?>
<!-- SLIDER -->
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
            <div class="swiper-slide ">
                <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider10.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/slider8.gif' ?>" alt="">
            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        <div class="slider-pagination"></div>
    </div>
</section>
<!-- CATEGORY STORY -->
<section class="my-16 container  max-w-[1480px] mx-auto" id="cat-story">
    <div class="swiper category-list">
        <div class="swiper-wrapper ">
            <div class="swiper-slide">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat1.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat1.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat2.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat3.webp' ?>" alt="">
            </div>
            <div class="swiper-slide">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat4.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat5.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat6.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
            </div>
            <div class="swiper-slide ">
                <img class=" p-1 border-3  border-blue-300 hover:border-blue-600  rounded-full transition-all" loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/cat7.webp' ?>" alt="">
            </div>

        </div>
        <div class="swiper-button-next cat-btn-next"></div>
        <div class="swiper-button-prev cat-btn-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>
<!-- BAKALAMA PRODUCT OFF -->
<section class="container max-w-[1480px] mx-auto border border-red-100 rounded-md p-4 flex flex-col">
    <div class="bg-red-800 flex items-center justify-between rounded-md p-4 ">
        <h4 class="text-white font-extrabold">محصولات جشنواره</h4>
        <button class="flex items-center justify-between gap-2 text-white font-extrabold    ">
            نمایش همه
            <span class="rotate-90">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 1L7.70711 6.29289C7.31658 6.68342 6.68342 6.68342 6.29289 6.29289L1 1" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
        </button>
    </div>
    <!-- PRODUCTS -->
    <div class=" mt-4">
        <div class="swiper discount-product">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل سامسونگ Galaxy S25 Ultra 5G ظرفیت 256 گیگابایت رم 12 گیگابایت - ویتنام</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">2%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">25,900,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <!-- <div class="flex items-center gap-2  ">
                                            <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">25,390,000</span>
                                            <span class="text-[11px] text-gray-400">تومان</span>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل اپل iPhone 15 Pro Max دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">5%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">89,900,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">94,500,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل شیائومی مدل Redmi Note 13 Pro دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">8%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">15,490,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">16,900,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل هوآوی مدل Nova 11 Pro دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">12%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">19,800,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">22,500,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل نوکیا مدل G42 5G دو سیم کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">15%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">7,290,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">8,590,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل وان پلاس مدل Nord CE3 Lite 5G دو سیم کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">10%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">11,890,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">13,200,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل موتورولا مدل Edge 40 Neo دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">18%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">16,490,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">20,100,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل ریلمی مدل C53 دو سیم کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">20%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">5,890,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">7,390,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="border-l border-gray-200 p-2">
                        <div class="relative w-full">
                            <a href=""> <img class="w-full" src="<?php echo get_template_directory_uri() . '/assets/img/pro01.webp' ?>" alt=""></a>
                        </div>
                        <div class="mt-4 flex flex-col gap-2">
                            <a href="" class="yekanbakh-en line-clamp-2  w-full text-xs font-medium  -tracking-0.5 text-primary-shade-1 2md:h-[50px] 2md:text-sm 2md:leading-[27px] 2md:text-primary-shade-1">
                                <h3 class="text-sm font-medium leading-[24px] ">گوشی موبایل گوگل مدل Pixel 8 Pro دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت</h3>
                            </a>
                            <div class="flex items-center justify-between ">
                                <span class="bg-[#da1c28] text-white text-sm font-medium px-2 py-1 rounded font-yekanbakh-regular">25%</span>
                                <div class="flex items-end gap-2 flex-col ">
                                    <div class="flex items-center gap-2 ">
                                        <span class="text-sm font-bold font-yekanbakh-regular">45,900,000</span>
                                        <span class="text-xs">تومان</span>
                                    </div>
                                    <div class="flex items-center gap-2  ">
                                        <span class="text-[11px] text-gray-400 font-bold line-through font-yekanbakh-regular">61,200,000</span>
                                        <span class="text-[11px] text-gray-400">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next product-discount-btn-next"></div>
            <div class="swiper-button-prev product-discount-btn-prev"></div>
        </div>

    </div>
</section>


<!-- BANNERS -->
<section class="my-16 container  max-w-[1480px] mx-auto">
    <div class="flex items-center justify-between gap-4">
        <a href=""><img class="rounded-2xl" src="<?php echo get_template_directory_uri() . '/assets/img/banner01.webp' ?>" alt=""></a>
        <a href=""><img class="rounded-2xl" src="<?php echo get_template_directory_uri() . '/assets/img/banner02.webp' ?>" alt=""></a>
        <a href=""><img class="rounded-2xl" src="<?php echo get_template_directory_uri() . '/assets/img/banner03.webp' ?>" alt=""></a>
    </div>
</section>


<?php
get_footer();
?>