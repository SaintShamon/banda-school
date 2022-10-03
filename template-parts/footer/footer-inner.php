<?php 
    $footer_content = get_field('footer_content', 'options');
    $footer_logo = get_field('footer_logo', 'options');
    
    $phone_1 = get_field('phone_1', 'options');
    $phone_2 = get_field('phone_2', 'options');
    $email = get_field('footer_email', 'options');

    $map_logo = get_field('footer_map_logo', 'options');
    $map_img = get_field('footer_map_img', 'options');
    $map_url = get_field('footer_map_url', 'options');
    $map_address = get_field('footer_map_address', 'options');

    $copyright = get_field('copyright', 'options');
    $copyright_logo = get_field('copyright_logo', 'options');
    $projects = get_field('projects_item');
    $project_block = get_field('project_block');
?>
<section class="projects section">
    <div class="section-bg"></div>
    <div class="projects_main">
        <div class="container">
            <div class="main_block">
                <?php if($project_block): ?>
                <div class="title_block">
                    <h2><?php echo $project_block; ?></h2>
                </div>
                <?php endif; ?>
                <div class="projects_row">
                    <?php foreach($projects as $post): setup_postdata( $post ); 
                        $add_image = get_field('add_image');
                        $add_video = get_field('add_video');
                     ?>
                    <div class="project_block">
                        <?php if($add_video): ?>
                        <div class="project_block_inner">
                            <?php echo $add_video; ?>
                        </div>
                        <?php endif; ?>
                        <?php if($add_image): ?>
                        <div class="project_block_inner">
                            <img src="<?php echo esc_url($add_image['url']); ?>"
                                alt="<?php echo esc_attr($add_image['alt']); ?>">
                        </div>
                        <?php endif; ?>
                        <?php if(!empty(get_the_title())): ?>
                        <div class="project_title">
                            <p><?php the_title(); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; wp_reset_postdata(  ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer projects_footer">
    <div class="container">
        <div class="footer_top_block">
            <div class="section-bg"></div>
            <?php if($footer_logo): ?>
            <div class="logo_block">
                <a href="<?php echo get_home_url(  ) ?>">
                    <img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['title'] ?>">
                </a>
            </div>
            <?php endif; ?>
            <div class="menu_block">
                <?php if($footer_content): ?>
                <div class="text_block text--size--22">
                    <?= $footer_content ?>
                </div>
                <?php endif; ?>
                <div class="footer_block">
                    <div class="col">
                        <?php if($phone_1 || $phone_2): ?>
                        <div class="phone_block">
                            <a href="<?= get_href_phone($phone_1); ?>"><?= $phone_1; ?></a> <span>/</span> <a
                                href="<?= get_href_phone($phone_2); ?>"><?= $phone_2; ?></a>
                        </div>
                        <?php endif; ?>
                        <?php if($email): ?>
                        <div class="email_block">
                            <a href="<?= get_href_email($email); ?>">Admissions Team</a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <?php if(have_rows('social_row', 'options')): ?>
                        <ul class="socials_block">
                            <?php while(have_rows('social_row', 'options')): the_row(); 
                                $logo = get_sub_field('logo');
                                $link = get_sub_field('url');
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <li>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>"
                                    rel="noopener noreferrer">
                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                        alt="<?php echo esc_attr($logo['alt']); ?>">
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="menu_block_inner">
                    <div class="menu_col">
                        <?php
                        $locations = get_nav_menu_locations(); //get all menu locations
                        $menu = wp_get_nav_menu_object($locations['footer-menu-1']);//get the menu object
                        ?>

                        <h3 class="h4"><?php echo $menu->name;?></h3>
                        <nav>
                            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1' )) ?>
                        </nav>
                    </div>
                    <div class="menu_col">
                        <?php
                        $locations = get_nav_menu_locations(); //get all menu locations
                        $menu = wp_get_nav_menu_object($locations['footer-menu-2']);//get the menu object
                        ?>
                        <h3 class="h4"><?php echo $menu->name;?></h3>
                        <nav>
                            <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2' )) ?>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="map_block">
                <a href="<?= $map_url ?>" target="_blank" rel="noopener noreferrer">
                    <?php if($map_img): ?>
                    <img src="<?php echo $map_img['url'] ?>" alt="<?php echo $map_img['title'] ?>">
                    <?php endif; ?>
                    <div class="map_content">
                        <?php if($map_logo): ?>
                        <img src="<?php echo $map_logo['url'] ?>" alt="<?php echo $map_logo['title'] ?>">
                        <?php endif; ?>
                        <p class="text--size--12"><?= $map_address ?></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer_bottom_block">
            <div class="section-bg"></div>
            <?php if($copyright): ?>
            <div class="copyright">
                <?= $copyright; ?>
            </div>
            <?php endif; ?>
            <?php if($copyright_logo): ?>
            <div class="developer">
                <img src="<?php echo $copyright_logo['url'] ?>" alt="<?php echo $copyright_logo['title'] ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</footer>