$(function () {

    $('.main-menu-burger').on('click', function () {
        $('.main-menu-list').slideToggle(300, function () {
            if ($(this).css('display') === "none") {
                $(this).removeAttr('style');
            }
        });

    });

});