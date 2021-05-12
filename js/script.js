$(document).ready(function () {
    $(".open_menu").click(function () {
        $(".sub_nav").slideToggle();
    });
});
/* ---------- hamburger menu --------- */
function onClickMenu() {
    document.getElementById("menu").classList.toggle("change");

    document.querySelector(".nav_list").classList.toggle("change");
}
