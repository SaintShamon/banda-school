<?php
/**
 * Remove Contact Form 7 auto added p tags
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Clear phone for href
 */
function get_href_phone($phone) {
    return "tel:". preg_replace('/\D+/', '', $phone);
}

/**
 * Clear email for href
 */
function get_href_email($email) {
    return "mailto:". $email;
}

/* Child pages list */
function wpb_list_child_pages() { 
 
    global $post; 
    $skip = get_field('skip_one_parent_page_for_sidebar', $post->ID);
    if ( is_page() && $post->post_parent ){
        if($skip == true){
            $id = wp_get_post_parent_id($post->post_parent);
        }
        else{
            $id = $post->post_parent;
        }
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $id . '&echo=0' );
    }
    else{
        if($skip == true){
            $id = wp_get_post_parent_id($post->ID);
        }
        else{
            $id = $post->ID;
        }
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $id . '&echo=0' );
    }
    if ( $childpages ) {
     
        $string = $childpages;
    }
     
    return $string;
     
}
     
add_shortcode('wpb_childpages', 'wpb_list_child_pages');