$(document).ready(function(){

    const btn = $(".navbar-toggler");
    const sidebar = $(".sidebar");
    btn[0].addEventListener("click", (el) => {
        if(sidebar.attr("class") == "sidebar sidebar-offcanvas active"){
            sidebar.removeClass("active");
        }else{
            sidebar.addClass("active");
        };
    });
});