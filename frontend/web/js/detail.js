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