<a name='gotop'></a>
<div id="closeMobileMenu" class="hide-desktop hide-tablet" onclick='closemenu()'></div>
<div id="mobile-menu" class="hide-desktop hide-tablet">
    <div class="close" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <?php
        if(has_nav_menu('mobile_menu')){
            $args = array(
                'menu'                 => '',
                'container'            => '',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => '',
                'menu_class'           => '',
                'menu_id'              => '',
                'echo'                 => true,
                'fallback_cb'          => 'wp_page_menu',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                'item_spacing'         => 'preserve',
                'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                'walker'               => '',
                'theme_location'       => 'mobile_menu',
            );
            wp_nav_menu( $args );
        }
    ?>
    <div class="close2" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i></div>

</div>

<div id="top">
    <div id="upper" name="upper">
        <div class="background_upper"></div>
        <div class="wrapper">
            <div class="slogan">Nha Khoa TIMS</div>
            <div class="phone"><img src="<?php echo DTTL_THEME_URL_IMG; ?>/logos/phone.png" alt=""><label><a
                        href="tel:0901840101">0901 840 101</a></label></div>

        </div>
    </div>

    <div id="navi">
        <div class="wrapper">
            
            <div id="logo">
                <a href="<?php echo get_home_url(); ?>"><img
                        src="<?php echo DTTL_THEME_URL_IMG; ?>/logos/logoWithText.png" alt="jemmia"></a>
            </div>

            <?php
                if(has_nav_menu('main_menu')){
                    $args = array(
                        'menu'                 => '',
                        'container'            => 'nav',
                        'container_class'      => 'hide-mobile',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => '',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'fallback_cb'          => 'wp_page_menu',
                        'before'               => '',
                        'after'                => '',
                        'link_before'          => '',
                        'link_after'           => '',
                        'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                        'item_spacing'         => 'preserve',
                        'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                        'walker'               => '',
                        'theme_location'       => 'main_menu',
                    );
                    wp_nav_menu( $args );
                }
                ?>
            <div id="mobile-icon-menu" class="hide-desktop hide-tablet" onclick="openmenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </div>