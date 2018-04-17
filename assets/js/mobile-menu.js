$(document).ready(function () {
    $('.collapsed').click(function () {
        if(!$('.submenu-2').is(':visible')){
            $(this).find('.mobile-sub-menu ul').toggleClass('active');
            if ($(this).find('.mobile-sub-menu ul').hasClass('active')){
                $(this).find('.mobile-sub-menu ul').removeClass('collapse')
            }
            else {
                $(this).find('ul').addClass('collapse');
            }
        }
    });
    $('.mobile-sub-menu li').click(function () {
        $(this).find('.submenu-2').slideToggle(300);
    })
});