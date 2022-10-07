$(document).ready(() => {
  lang = $(".lang");
  html = $("html"),
  lang[0].addEventListener("click", (e) => {
    html.attr("lang","Ar");
  });
});

//   document.addEventListener("scroll", () => {
//     const footee = $('.footer');
//     const spanbottom = $(".border-bottom");
//     if (document.documentElement.scrollTop > footee.offset().top - 200) {
//       spanbottom[0].animate({ width: "130px" }, 5000);
//       // widthspan.ep(1).animate({ width: "126px" }, 5000);
//       // widthspan.ep(2).animate({ width: "117px" }, 5000);
//       // widthspan.ep(3).animate({ width: "133px" }, 5000);
//     } else {
//       spanbottom[0].animate({ width: "0" }, 5000);
//       // widthspan[1].animate({ width: "0" }, 5000);
//       // widthspan[2].animate({ width: "0" }, 5000);
//       // widthspan[3].animate({ width: "0" }, 5000);
//     }
//   });
