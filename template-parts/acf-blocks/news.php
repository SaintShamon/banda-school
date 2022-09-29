<?php 
    $subtitle = get_sub_field('subtitle');
    $title = get_sub_field('title');
    $content_left = get_sub_field('content');
    $if_show_socials = get_sub_field('if_show_socials');
    
   if($title):
?>
<section class="news section">
    <div class="container">
        <div class="main_block">
            <div class="left_col">
                <?php if($subtitle || $title): ?>
                <div class="title_block">
                    <?php if($subtitle): ?>
                    <div class="subtitle">
                        <p><?php echo $subtitle; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if($content_left): ?>
                <div class="content-block">
                    <p><?php echo $content_left; ?></p>
                </div>
                <?php endif; ?>
                <?php if($if_show_socials == true): ?>
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
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <?php endif; ?>
                <div class="lion_img">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lion_img.svg" alt="lion img">
                </div>
            </div>
            <?php if(have_rows('cards_list')): ?>
            <div class="news_col">
                <div class="news_list">
                    <?php while(have_rows('cards_list')): the_row(); 
                        $img = get_sub_field('image');
                        $title = get_sub_field('content');
                        $link = get_sub_field('link');
                        ?>
                    <div class="news_block"
                        style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), radial-gradient(71.92% 71.92% at 50% 50%, rgba(0, 0, 0, 0.5) 1.97%, rgba(0, 0, 0, 0) 100%), url('<?= $img ?>');">
                        <a href="<?= $link ?>">
                            <span class="h3"><?= $title ?></span>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>