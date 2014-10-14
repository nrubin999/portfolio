// JavaScript Document

$(window).scroll(function() {
		$('#app').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideRight");
			}
		});
	});

	$(window).scroll(function() {
		$('#apptitle').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideLeft");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#appname').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideLeft");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#smallicon').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("fadeIn");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#smallicon2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+440) {
				$(this).addClass("fadeIn");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#smallicon3').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+480) {
				$(this).addClass("fadeIn");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#iconlabel').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideLeft");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#iconlabel2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+440) {
				$(this).addClass("slideLeft");
			}
		});
	});
	
	$(window).scroll(function() {
		$('#iconlabel3').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+480) {
				$(this).addClass("slideLeft");
			}
		});
	});