$(document).ready(function( ){
	//--------------Большой Слайдер
	$(function() {
		$('#slider').slick({
			speed:1500,
			arrows:true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			slidesToShow: 1
		});
	});
	
	//-------------Телефон
	$(function(){$("[name=phone]").mask("+9 (999) 999-9999");	
	});
	
	//---------Галерея фотографий	   
	  lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
	  'showImageNumberLabel': false
    });
	
	//-------Анимация
	if ($(window).width() > 1199) {
		$(window).scroll(function(){
			jQuery('.animate1').addClass("hidden").viewportChecker({
				classToAdd: 'visible animated zoomIn',
				offset:100,
				repeat:false
			});
			
			jQuery('.animate2').addClass("hidden").viewportChecker({
				classToAdd: 'visible animated fadeInUp',
				offset:100,
				repeat:false
			});
			
			jQuery('.animate3').addClass("hidden").viewportChecker({
				classToAdd: 'visible animated bounceIn',
				offset:100,
				repeat:false
			});
			
			jQuery('.animate4').addClass("hidden").viewportChecker({
				classToAdd: 'visible animated fadeInLeft',
				offset:100,
				repeat:false
			});
			
			jQuery('.animate5').addClass("hidden").viewportChecker({
				classToAdd: 'visible animated fadeInRight',
				offset:100,
				repeat:false
			});
		});
	};
	
            var centerLatLng = new google.maps.LatLng(50.429612,30.4802938);
            var centerLatLng2 = new google.maps.LatLng(50.429800,30.484360);
            var mapOptions = {
                zoom: 17,
                center: centerLatLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: centerLatLng2
            }); 


	
});