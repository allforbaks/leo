$(document).ready(function() {
    $('.burger_menu').click(function(event) {
        $('.burger_menu, .navigate').toggleClass('active');
        $('body').toggleClass('lock');
    });
});