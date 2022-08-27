$('#multiple-items').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed :3000,
    pauseOnFocus: true,
    pauseOnHover: true,
    adaptiveHeight : false,
    asNavFor: "#thumbnail-items",
    prevArrow:"<button type='button' class='slick-btn slick-left'><i class='icon-slick-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-btn slick-right'><i class='icon-slick-right' aria-hidden='true'></i></button>",
});
$("#thumbnail-items").slick({
    infinite: true,
    slidesToShow: 3,
    focusOnSelect : true,
    arrows: false,
    autoplaySpeed :3000,
    pauseOnFocus: true,
    pauseOnHover: true,
    adaptiveHeight : false,
    asNavFor: "#multiple-items"
});