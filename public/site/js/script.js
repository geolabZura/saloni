
ymaps.ready(init);
	var myMap,
		myPlacemark;

	function init(){
		myMap = new ymaps.Map("map", {
			center: [55.808, 37.46],
			zoom: 14
		});

		myPlacemark = new ymaps.Placemark([55.808, 37.47], {
		hintContent: 'Moscow!', balloonContent: 'Capital of Russia'
	});

		myMap.geoObjects.add(myPlacemark);
	}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("SmallImg");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}

	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}

$(document).ready(function(){
	$('#BurgerToggle').click(function(){
		$(this).toggleClass('rotated');
		$('#navbar').toggleClass('open');
	});
});

$("#collapsibleNavbar a").click( function() {
	$('#BurgerToggle').removeClass('rotated');
	$('#navbar').removeClass('open');
});

$('body').scrollspy({target: ".HeaderMain", offset: 50});
$("#collapsibleNavbar a").on('click', function(event) {
	if (this.hash !== "") {
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 800, function(){
			window.location.hash = hash;
		});
	}
});

function getScrollPosition(){
    var scrollTop = $(window).scrollTop();

    // If you want to check distance
    if(scrollTop > 200) {
        $('#BurgerToggle').css({
			right: "3vw"
		});
    } else {
        $('#BurgerToggle').css({
            right: ''
        });
    }
}
$(window).scroll(getScrollPosition);

$(function(){
	$('.SlideSectionContainer').owlCarousel({
		items: 1,
		loop: true,
		nav: true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
	});
});



