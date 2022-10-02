<?php 
    if(is_singular( 'programs' )){
        $sidebar_block = get_field('single_program_sidebar_block', 'options');
        if($sidebar_block):
            $block_title = $sidebar_block['title'];
            $text = $sidebar_block['text'];
            $button = $sidebar_block['button'];
            $background_image = $sidebar_block['background_image'];
            if($button):
                $button_target = $button['target'] ? $button['target'] : '_self';
            endif;
        endif;
    }
    else{
        $link = get_field('link','options' );
        $background_image = get_field('background_image','options');
        $link_2 = get_field('link_second','options' );
        $background_image_2 = get_field('background_image_second','options');
        if($link):
            $link_target = $link['target'] ? $link['target'] : '_self';
        endif;
        if($link_2):
            $link_target = $link_2['target'] ? $link_2['target'] : '_self';
        endif;
    }
?>
<div class="sidebar__links">
    <?php 
        $skip = get_field('skip_one_parent_page_for_sidebar');
        if($skip == true){
            $parent_id = wp_get_post_parent_id();
            $parent_id = wp_get_post_parent_id($parent_id);
        }
        else{
            $parent_id = wp_get_post_parent_id(); 
        }
        $page_link = get_page_link($parent_id);
        $current_page_link = get_page_link(get_the_ID());
        $parent_page_label = get_field('sidebar_page_label', $parent_id);
    ?>
    <li class="page_item page-item-25 <?php if($current_page_link == $page_link): echo 'current_page_item'; endif; ?>">
        <a href="<?php echo $page_link; ?>"
            aria-current="page"><?php if($parent_page_label): echo $parent_page_label; else: echo get_the_title($parent_id); endif; ?></a>
    </li>
    <?php echo do_shortcode('[wpb_childpages]'); ?>
</div>


<?php if($background_image || $link): ?>
<div class="sidebar__block">
    <?php if($background_image): ?>
    <div class="sidebar__image"><img src="<?php echo $background_image; ?>" alt=""></div>
    <?php endif; ?>
    <div class="sidebar__link">
        <a href="<?php echo $link['url']; ?>" class="link"
            target="<?php echo $link_target; ?>"><?php echo $link['title']; ?></a>
    </div>
</div>
<?php endif; ?>
<?php if($background_image_2 || $link_2): ?>
<div class="sidebar__block last_block">
    <?php if($background_image_2): ?>
    <div class="sidebar__image last"><img src="<?php echo $background_image_2; ?>" alt=""></div>
    <?php endif; ?>
    <div class="sidebar__link">
        <a href="<?php echo $link_2['url']; ?>" class="link"
            target="<?php echo $link_target_2; ?>"><?php echo $link_2['title']; ?></a>
    </div>
</div>
<?php endif; ?>