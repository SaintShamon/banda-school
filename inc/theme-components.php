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