$('.sidebar-title').click(function(){
    var parent = $(this).parent('.category-item');
    if($(this).hasClass('active')){
        $(this).removeClass('active');
        parent.find('.sidebar-content').addClass('hide');
        $(this).find('.fa').removeClass('fa-angle-up');
        $(this).find('.fa').addClass('fa-angle-down');
    }else{
        $(this).addClass('active');
        parent.find('.sidebar-content').removeClass('hide');
        $(this).find('.fa').addClass('fa-angle-up');
        $(this).find('.fa').removeClass('fa-angle-down');
    }
});
$('.filter-product').on("change", "input", function() {
    $('.filter-product').submit();
});