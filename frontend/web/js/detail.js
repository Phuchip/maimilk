$('#multiple-items').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    pauseOnFocus: true,
    pauseOnHover: true,
    adaptiveHeight : false,
    asNavFor: "#thumbnail-items",
    prevArrow:"<button type='button' class='slick-btn slick-left'><i class='icon-slick-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-btn slick-right'><i class='icon-slick-right' aria-hidden='true'></i></button>",
});
$("#thumbnail-items").slick({
    infinite: true,
    slidesToShow: 4,
    focusOnSelect : true,
    arrows: false,
    pauseOnFocus: true,
    pauseOnHover: true,
    adaptiveHeight : false,
    asNavFor: "#multiple-items"
});
$('.btn-text').click(function(){
    var parent = $(this).parent('.group-btn-text');
    var collapse = parent.find('.collapse');
    if(collapse.hasClass('show')){
        collapse.removeClass('show');
    }else{
        collapse.addClass('show');
    }
});

$('.btn-add-to-cart').click(function(){
    notification('success','Thêm vào giỏ hàng thành công');
});

$('.btn-see-more').click(function(){
    var parent = $(this).parents('.product-left');
    var content = parent.find('.product-desc');
    if(content.hasClass('show')){
        content.removeClass('show');
        $(this).text('Xem thêm');
    }else{
        content.addClass('show');
        $(this).text('Thu gọn');
    }
});

// Hover star
var title_star = 'Rất hài lòng';
$('.full').click(function(){
    var value = $(this).attr('title');
    $('.desc-star').text(value);
    title_star = value;
});
$('.full').mousemove(function(){
    var value = $(this).attr('title');
    $('.desc-star').text(value);
});
$('.full').mouseleave(function(){
    $('.desc-star').text(title_star);
});

$('#comment-content').click(function(){
    $('.comment-name').removeClass('hide');
    $('.comment-phone').removeClass('hide');
    $('.action-toolbar').removeClass('hide');
});

$('.product-relate .list-product').slick({
    autoplay: true,
    autoplaySpeed: 2000,
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