// Global js here
jQuery(document).ready(function($) {
	// Move the legend under the calendar title
	var legend = $('.calendarLegend');
	$('.tribe-events-page-title').after(legend);

	// Loop through events and disable the link to the event
	$('.vcalendar .vevent .url').each(function(index, el) {
		$(this).attr("href", "#");
	});

	$('.vevent .url').each(function(index, el) {
		$(this).attr("href", "#");
	});

	$('.tribe-events-read-more').attr('href', '#');

	// Copy cal month links to below header
	var subnav = $('.tribe-events-sub-nav').html();
	$('.tribe-events-page-title').after('<ul class="tribe-events-sub-nav">'+subnav+'</ul>');
});