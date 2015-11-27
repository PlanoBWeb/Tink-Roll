$(document).ready(function() {

	var altura_tela = $(window).width();
	if (altura_tela >= 980 ) {

		var current = '.mtlsr-images-for-lightbox ul li.current';
		$('.mtlsr-images-for-lightbox ul li').on('click', 'a', function(event) {
			event.preventDefault();
			var big_image_href = $(this).attr('href');
			
			$(this).parent().addClass('current');
			$('.mtlsr-lightbox').fadeIn();
			$('.mtlsr-lightbox').append('<iframe class="image-in-lightbox" src="'+big_image_href+'"></iframe>');
			
		});
		//Fechar
		$('.mtlsr-lightbox').on('click', '.close', function(event) {
			$('.mtlsr-lightbox').fadeOut();
			$('.mtlsr-lightbox .image-in-lightbox').remove();
			$(current).removeClass('current');
		});
	}
});