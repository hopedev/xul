<?php

    echo '<ul class="uk-slideshow" data-uk-slideshow="{autoplay:true}">';

$slideshow = get_post_meta( 20, $slideshow_name , true );
$partialname = $slideshow_name . "_";
if( $slideshow ) {
  for( $i = 0; $i < $slideshow; $i++ ) {
     $title  = esc_html( get_post_meta( get_the_ID(), $partialname . $i . '_text', true ) );
    $video = esc_url( get_post_meta( get_the_ID(), $partialname . $i . '_page_url', true ) );
    $image = (int) get_post_meta( get_the_ID(), $partialname . $i . '_image', true );
    
    // Thumbnail field returns image ID, so grab image. If none provided, use default image
     $image =   wp_get_attachment_url( $image ) ;
     echo '<li><img src="' .  $image  .  '" width="" height="" alt="' . $title . '"></li>';

    

    // // Displayed in two columns, so using column classes
    // $class = 0 == $i || 0 == $i % 2 ? 'one-half first' : 'one-half';
    
    // // Build the video box
    // echo '<div class="' . $class . '"><a href="' . $video . '">' . $image . '</a>' . $title . '</div>';
    


  




  }

}
echo '</ul>';