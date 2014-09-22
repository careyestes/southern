<?php

// Make a highlight box
function insertCalendarMod( $atts, $content = null ) {
	$calendarModHtml = '<hr class="dottedDivider"><section class="calendarModule"><div class="calendarIcon"></div><h2>'.do_shortcode($content).'</h2></section>';
   return $calendarModHtml;
}
add_shortcode( 'calendarModule', 'insertCalendarMod' );