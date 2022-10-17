$(document).ready(() => {

    const col = $(".col");
    const footee = $('.footer');

    document.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > footee.offset().top - 200) {
        col.addClass("animate");
    } else {
        
    }

  });


});
