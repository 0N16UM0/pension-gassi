$(document).ready(function($) {
    $("#toggle-mobile-nav").on("click", function() {
        $("#page").toggleClass("mobile-nav-opened");
    });

    $("#page").on("click", function(event) {
        let target = event.target;
        let navbarclick = $(target).hasClass("navbar-toggler") || $(target).parent().hasClass("navbar-toggler");
        if (navbarclick) {
            return;
        }
        $("#page").removeClass("mobile-nav-opened");
    });
});