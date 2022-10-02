<?php 
    $logo = get_field('header_logo', 'option');
    $use_title = get_field('use_custom_title');
    $title = get_field('custom_title');
    $backgroung_img = get_sub_field('backgroung_img');
    if($backgroung_img):
?>
<section class="banner section">
    <div class="section-bg"
        style="background: linear-gradient(180deg, rgba(114, 156, 186, 0.2) 0%, rgba(12, 17, 20, 0) 65.56%), linear-gradient(180deg, rgba(0, 0, 0, 0) 41.48%, rgba(0, 0, 0, 0.3) 100%), linear-gradient(0deg, rgba(0, 55, 96, 0.2), rgba(0, 55, 96, 0.2)), url('<?php echo $backgroung_img; ?>');">
    </div>
    <div class="container">
        <div class="main_block">
            <?php
            if ( is_front_page() ) :
                ?>
            <div class="logo_block">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            </div>
            <div class="title_block">
                <?php if($use_title == true): ?>
                <h1><?= $title; ?></h1>
                <?php elseif($use_title == false): ?>
                <h1><?= the_title(); ?></h1>
                <?php endif; ?>
            </div>
            <?php
                else :
            ?>
            <div class="title_block inner_page">
                <?php if($use_title == true): ?>
                <h1><?= $title; ?></h1>
                <?php elseif($use_title == false): ?>
                <h1><?= the_title(); ?></h1>
                <?php endif; ?>
            </div>
            <?php  
                endif;
            ?>
        </div>
    </div>
    <?php if(is_front_page()): ?>
    <a class="explore" href="#text_center">
        <img src="<?= get_template_directory_uri() ?>/assets/images/pig_img.svg" alt="">
        <span>Explore</span>
    </a>
    <?php endif; ?>
</section>
<?php endif; ?>