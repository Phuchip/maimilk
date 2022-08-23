$('#search-box').keyup(function() {
    var text = $(this).val();
    if (text.length > 0) {
        $('#suggestion-box').addClass('show');
    } else {
        $('#suggestion-box').removeClass('show');
    }
});
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('#search-box dropdown show')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
//Scroll top
scroll = $('#scroll_top');
$(document).scroll(function() {
    if($(this).scrollTop() > 100){
        scroll.css("display", "block");
    }else{
        scroll.css("display", "none");
    }
});
scrollTop();

// When the user clicks on the button, scroll to the top of the document
function scrollTop() {
	scroll.click(function(){
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
}

window.onscroll = function() {
    stickyTop()
};
var navbar = $('.navbar');
var sticky = navbar.offset().top;
stickyTop();
function stickyTop() {
    if (window.pageYOffset > sticky) {
        navbar.addClass("sticky-top")
    } else {
        navbar.removeClass("sticky-top");
    }
}
$('.footer-column').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    }else{
        $(this).addClass('active');
        $(this).find('.footer-content').focus();
    }
});
$('.list-banner').slick({
    infinite: false,
    variableWidth: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnFocus: false,
    pauseOnHover: true,
    pauseOnDotsHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight : false,
    dots: true,
    prevArrow:"<button type='button' class='slick-btn slick-left'><i class='icon-slick-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-btn slick-right'><i class='icon-slick-right' aria-hidden='true'></i></button>",
    responsive: [
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: false,
          }
        },
    ]
});
var slider = $('.list-banner');
slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
    if (currentSlide === slick.$slides.length - 1 ) {
        slider.slick('slickGoTo', 0);
    }
});
$('.best-seller .list-product').slick({
    variableWidth: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    adaptiveHeight : true,
    prevArrow:"<button type='button' class='slick-btn slick-left'><i class='icon-slick-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-btn slick-right'><i class='icon-slick-right' aria-hidden='true'></i></button>",
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                variableWidth: false,
            },
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
            },
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                variableWidth: false,
            },
        },
    ]
});
//Lazyload
width = $(window).width();
if(width < 480){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('.category-banner').show();
        }
    });
}
$('.menu-mobile .content.category').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active');
        $('body').removeClass('menu-mobile-active');
        $('.section-menu-mobile').removeClass('active');
    }else{
        $('.menu-mobile .content').removeClass('active');
        $(this).addClass('active');
        $('.section-menu-mobile').addClass('active');
        $('body').addClass('menu-mobile-active');
    }
});