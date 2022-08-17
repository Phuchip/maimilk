$('#search-box').keyup(function() {
    var text = $(this).val();
    if (text.length > 0) {
        $('#suggestion-box').show();
    } else {
        $('#suggestion-box').hide();
    }
});
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
    variableWidth: false,
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
});
var slider = $('.list-banner');
slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
    if (currentSlide === slick.$slides.length - 1 ) {
        slider.slick('slickGoTo', 0);
    }
});