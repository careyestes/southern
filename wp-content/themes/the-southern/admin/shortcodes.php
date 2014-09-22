<?php

// Make a highlight box
function insertCalendarMod( $atts, $content = null ) {
	$calendarModHtml = '<hr class="dottedDivider"><section class="calendarModule"><div class="calendarIcon"></div><h2>'.do_shortcode($content).'</h2></section>';
   return '<div class="box-light">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'calendarModule', 'insertCalendarMod' );