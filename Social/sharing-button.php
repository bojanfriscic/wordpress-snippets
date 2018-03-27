<?php 

add_filter('the_content', 'my_social_sharing_btns');
function my_social_sharing_btns() {
  global $post;

  if(is_singular() || is_home()) {
    //Get values
    $url = urlencode(get_permalink());
    $title = str_replace(' ', '%20', get_the_title());

    //Create sharing URLs
    $twitter_url = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $url;
    $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
    $google_url = 'https://plus.google.com/share?url=' . $url;
    $wapp_url = 'whatsapp://send?text=' . $title . ' ' . $url;
    $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&amp;title=' . $title;

    //Add buttons to bottom of post/page
    $content .= '<div class="social-container">';
    $content .= '<a href="' . $twitter_url . '" target="_blank">Twitter</a>';
    $content .= '<a href="' . $facebook_url . '" target="_blank">Facebook</a>';
    $content .= '<a href="' . $google_url . '" target="_blank">Google+</a>';
    $content .= '<a href="' . $wapp_url . '" target="_blank">WhatsApp</a>';
    $content .= '<a href="' . $linkedin_url . '" target="_blank">LinkedIn</a>';
    $content .= '</div>';

    return $content;
  } else {
    return $content;
  }
}