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