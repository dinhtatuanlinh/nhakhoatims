<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    if(!is_page("trum-kim-cuong-si")&&!is_page("trum-kim-cuong-si-thanks")){
        wp_register_script('dttl_jquery', $jsUrl . '/jquery-3.5.1.min.js', array(), '1.0', true);
        wp_enqueue_script('dttl_jquery');
        // wp_register_script('socketio', $jsUrl . '/socket.io.js', array(), '1.0', true);
        // wp_enqueue_script('socketio');
        // wp_register_script('createSocketIO', $jsUrl . '/createSocketIO.js', array(), '1.0', true);
        // wp_enqueue_script('createSocketIO');
        // wp_register_script('cookie', $jsUrl . '/cookie.js', array(), '1.0', false);
        // wp_enqueue_script('cookie');
        wp_register_script('lazyload', $jsUrl . '/lazysizes.min.js', array(), '1.0', true);
        wp_enqueue_script('lazyload');
        wp_register_script('swiper-bundle', $jsUrl . '/swiper-bundle.min.js', array( 'jquery' ), '1.0', true);
        wp_enqueue_script('swiper-bundle');
        wp_register_script('gsap', $jsUrl . '/gsap.min.js', array(), '1.0', true);
        wp_enqueue_script('gsap');
        wp_register_script('swiper-script', $jsUrl . '/swiper-script.js', array(), '1.0', true);
        wp_enqueue_script('swiper-script');
        // wp_register_script('icon-on-menu', $jsUrl . '/icon-on-menu.js', array(), '1.0', true);
        // wp_enqueue_script('icon-on-menu');
        wp_register_script('open-close-menu', $jsUrl . '/open-close-menu.js', array(), '1.0', true);
        wp_enqueue_script('open-close-menu');
        // wp_register_script('slider-index', $jsUrl . '/slider-index.js', array(), '1.0', true);
        // wp_enqueue_script('slider-index');
        // wp_register_script('bgkc', $jsUrl . '/bgkc.js', array(), '1.0', true);
        // wp_enqueue_script('bgkc');
        // wp_register_script('cart', $jsUrl . '/cart.js', array(), '1.0', true);
        // wp_enqueue_script('cart');
        // wp_register_script('diamondSizeChart', $jsUrl . '/diamondSizeChart.js', array(), '1.0', true);
        // wp_enqueue_script('diamondSizeChart');
        // wp_register_script('bannerSingle', $jsUrl . '/banner-single.js', array(), '1.0', true);
        // wp_enqueue_script('bannerSingle');
        // wp_register_script('tagManipulation', $jsUrl . '/tagManipulation.js', array(), '1.0', true);
        // wp_enqueue_script('tagManipulation');
        wp_register_script('showHideTopBar', $jsUrl . '/showHideTopBar.js', array(), '1.0', true);
        wp_enqueue_script('showHideTopBar');
        wp_register_script('clickToHide', $jsUrl . '/clickToHide.js', array(), '1.0', true);
        wp_enqueue_script('clickToHide');
    }
    // if(is_page("trum-kim-cuong-si")){
    //     wp_register_script('trumKimCuongSi', $cssUrl . '/trumKimCuongSi.js', array(), '1.0', true);
    //     wp_enqueue_script('trumKimCuongSi');
    // }
    // if(is_product()){
    //     wp_register_script('productSlider', $jsUrl . '/productSlider.js', array(), '1.0', true);
    //     wp_enqueue_script('productSlider');
    // }
}
?>