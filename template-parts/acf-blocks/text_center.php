<?php 
    $subtitle = get_sub_field('subtitle');
    $title = get_sub_field('title');
    $text_content = get_sub_field('content');
    $link = get_sub_field('link');
   if($title):
?>
<section class="text_center section" id="text_center">
    <div class="section-bg"></div>
    <div class="container">
        <div class="main_block">
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
            <?php if($text_content): ?>
            <div class="content-block">
                <p><?php echo $text_content; ?></p>
                <?php if($link): 
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a href="<?php echo $link['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>"
                    class="button button--arrow"><?php echo $link['title']; ?>
                    <svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64644L21.1716 0.464464C20.9763 0.269202 20.6597 0.269202 20.4645 0.464464C20.2692 0.659727 20.2692 0.976309 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.73079 20.9763 7.73079 21.1716 7.53553L24.3536 4.35355ZM4.37114e-08 4.5L24 4.5L24 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z"
                            fill="white" />
                    </svg>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="tree_img">
        <img src="<?= get_template_directory_uri() ?>/assets/images/tree_img.svg" alt="">
    </div>
    <div class="pig_img">
        <img src="<?= get_template_directory_uri() ?>/assets/images/pig_with_grass.svg" alt="">
    </div>
</section>
<?php endif; ?>