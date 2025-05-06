<?php
$account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));
?>

<section id="popup-login" class=" items-center justify-center hidden absolute w-full z-30">
    <div class="bg-white w-[480px] h-[300px] flex flex-col  justify-center  rounded-md p-8 absolute top-28 m-auto ">

        <form action="<?php echo esc_url($account_link) ?>" class="flex flex-col gap-y-4 items-center justify-center" method="post">
            <h2 class="font-black text-2xl">ثبت نام در فیت لند</h2>
            <p>به وب سایت خودتون خوش اومدین :)</p>
            <div class="flex items-center justify-between w-full">
                <label for="username"></label>
                <input class="w-full p-2 outline-none rounded-md focus:ring-primary focus:ring-1 border border-gray-100 placeholder:text-primary placeholder:text-sm" name="username" id="username" type="text" placeholder="نام کاربری یا ایمیل" autocomplete="off">
            </div>
            <div class="flex items-center justify-between w-full">
                <label for="password"></label>
                <input class="w-full p-2 outline-none rounded-md focus:ring-primary focus:ring-1 border border-gray-100 placeholder:text-primary placeholder:text-sm" name="password" id="password" type="password" placeholder="رمز عبور" autocomplete="off">
            </div>
            <?php wp_nonce_field('login_form', 'login_form_nonce'); ?>
            <button class="bg-secondary rounded-md w-1/2 p-2 text-white hover:bg-amber-500 transition-all" type="submit">ثبت نام</button>
        </form>


    </div>
</section>