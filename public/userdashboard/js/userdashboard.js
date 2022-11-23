$(document).ready(function () {
    $("#sidebarCollapse").on("click", function () {
        $("#sidebar").toggleClass("user_dashboard_active");
        $("#content").toggleClass("user_dashboard_active");
    });

    $(".more-button,.body-overlay").on("click", function () {
        $("#sidebar,.body-overlay").toggleClass("show-nav");
    });
});
