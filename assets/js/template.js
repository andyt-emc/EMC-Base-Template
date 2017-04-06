jQuery(document).ready(function() {

	/*******************************************
	 * HELPER FUNCTIONS *
	 *******************************************/

	/*
	 * Image lazy loading
	 * Further reading: https://www.appelsiini.net/projects/lazyload
	 * Example image tag:  <img class="lazy" data-original="img/example.jpg" width="640" height="480">
	 * Uncomment out the code below and in the index.php file to enable lazyloading
	 */

	// jQuery("img.lazy").lazyload({
	//     threshold : 200
	// });

	/*
	 * Check alt tags aren't empty for images
	 * For development use only
	 */

	// jQuery('img').each(function() {
	// 	console.log(jQuery(this).attr('alt'));
	// });

	/*******************************************
	 * RESPONSIVE NAV *
	 *******************************************/

	jQuery('.nav-btn').on('click', function() {
		jQuery('html').addClass('js-nav');
	});

	jQuery('.close-btn, .js-nav #innerwrap').on('click', function() {
		jQuery('html').removeClass('js-nav');
	});

});
