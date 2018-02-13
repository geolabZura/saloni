
    //yandex map
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {
        myMap = new ymaps.Map("map", {
            center: [55.808, 37.46],
            zoom: 14
        });

        myPlacemark = new ymaps.Placemark([55.808, 37.47], {
            hintContent: 'Moscow!', balloonContent: 'Capital of Russia'
        });

        myMap.geoObjects.add(myPlacemark);
    }

    // Menu
    $(document).ready(function () {
        $('#BurgerToggle').click(function () {
            $(this).toggleClass('rotated');
            $('#navbar').toggleClass('open');
        });
    });

    $("#collapsibleNavbar a").click(function () {
        $('#BurgerToggle').removeClass('rotated');
        $('#navbar').removeClass('open');
    });

    $('body').scrollspy({target: ".HeaderMain", offset: 50});
    $("#collapsibleNavbar a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    function getScrollPosition() {
        var scrollTop = $(window).scrollTop();

        // If you want to check distance
        if (scrollTop > 200) {
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

    //slider slider

    // $(".SlideSectionContainer").owlCarousel({
    //      items : 3,
    //      loop  : true,
    //      nav  : true,
    //      smartSpeed :900,
    //      navText : ['<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" version="1.1" x="0px" y="0px"><path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z" transform="translate(50.000000, 50.000000) rotate(-90.000000) translate(-50.000000, -50.000000) "/></svg>' , '<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" version="1.1" x="0px" y="0px"><path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z" transform="translate(50.000000, 50.000000) rotate(90.000000) translate(-50.000000, -50.000000) "/></svg>']
    // });


    $(document).ready(function () {

        $('.SlideSectionContainer').owlCarousel({
            loop: true,
            nav: true,
            smartSpeed: 900,
            navText: ['<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" version="1.1" x="0px" y="0px"><path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z" transform="translate(50.000000, 50.000000) rotate(-90.000000) translate(-50.000000, -50.000000) "/></svg>', '<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" version="1.1" x="0px" y="0px"><path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z" transform="translate(50.000000, 50.000000) rotate(90.000000) translate(-50.000000, -50.000000) "/></svg>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1170: {
                    items: 3,
                }
            }
        });
    })


    // Header
     $('#headerButton').click(function (){
        var x = $("#Long");
        var y = $("#Short");
        var button = $('#headerButton');

        if (x.css('display') == "none") {
            x.slideDown();
            y.slideUp();
            button.stop(true, true).animate({
                opacity: 0
            }, 150).queue(function (next) {
                button.text("меньше");
                next();
            }).animate({
                opacity: 1
            }, 150);
        } else {
            x.slideUp();
            y.slideDown();
            button.stop(true, true).animate({
                opacity: 0
            }, 150).queue(function (next) {
                button.text("подробнее");
                next();
            }).animate({
                opacity: 1
            }, 150);
        }
    })

    // gallery slider

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
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    // Specialist slider

    var slideIndex = 1;
    showStaff(slideIndex);


    function plusStaffSlides(n) {
        showStaff(slideIndex += n);
    }

    function currentStaffSlide(n) {
        showStaff(slideIndex = n);
    }

    function showStaff(n) {
        var i;
        var slides = document.getElementsByClassName("stuffSLide");
        var dots = document.getElementsByClassName("RightSlideText");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
