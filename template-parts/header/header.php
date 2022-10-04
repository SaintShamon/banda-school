<?php 
    $logo = get_field('header_logo', 'option');
    $logo_side = get_field('header_logo_side', 'option');
?>

<header class="header">
    <div class="header_wrap">
        <div class="container">
            <div class="header_main_block">
                <?php
                    if ( is_front_page() ) :   
                else :
                    ?>
                <?php if($logo): ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                    </a>
                </div>
                <?php endif; ?>
                <?php   
                endif;
                ?>
                <div class="header_inner_block">
                    <div class="header__menu">
                        <nav>
                            <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )) ?>
                        </nav>
                    </div>
                    <div class="button_menu" id="toggle">
                        <span class="text">Menu</span>
                        <button>
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="side-panel" class="side-panel custom-scrollbar">
                <div class="side-inner">
                    <div class="white_bg">
                        <div class="side_container">
                            <div class="container">
                                <div class="side_header">
                                    <?php if($logo_side): ?>
                                    <div class="header__logo">
                                        <a href="<?php echo get_home_url(  ) ?>">
                                            <img src="<?php echo esc_url($logo_side['url']); ?>"
                                                alt="<?php echo esc_attr($logo_side['alt']); ?>">
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <div class="header_inner_block">
                                        <div class="header__menu">
                                            <nav>
                                                <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )) ?>
                                            </nav>
                                        </div>
                                        <div class="btn_close" id="close">
                                            <span class="text">Close</span>
                                            <button>
                                                <span class="line"></span>
                                                <span class="line"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="header__menu side_menu_block">
                                    <nav>
                                        <?php wp_nav_menu(array( 'theme_location' => 'burger-menu' )) ?>
                                    </nav>
                                    <div class="search_block">
                                        <?php echo do_shortcode('[ivory-search id="413" title="Default Search Form"]'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side_bg_img">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/side_bg.svg" alt="">
                    </div>
                    <div class="side_bg_grass">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/side_grass_bg.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>