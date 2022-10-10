// -------------
// start ready
// -------------
$(document).ready(function () {
  const labelsign = $(".labelsign");
  const login__input = $(".login__input");
  const validation_email = /(^\w+([\.-]?\w+))+\@gmail.com/;
  const eye = $(".eye");
  const btn = $(".btnn");

  //start click en label focus to input
  labelsign.each((e) => {
    labelsign.eq(e).click((ele) => {
      login__input[e].focus();
    });
  });
  // end click en label focus to input

  // start keyup en inpute
  login__input.each((e) => {
    login__input[e].addEventListener("keyup", (el) => {
      // start animate label
      if (login__input[e].value.length >= 1) {
        labelsign.eq(e).addClass("top");
      } else {
        labelsign.eq(e).removeClass("top");
      }
      // end animate label
    });  
  });

  // start show and hed eye 
  login__input[1].addEventListener("keyup", e => {
    if (login__input[1].value.length >= 1 && eye.attr('class') == "eye") {
      eye.addClass("icon-eye-blocked");
    } if (login__input[1].value.length < 1) {
      eye.removeClass("icon-eye-blocked");
      eye.removeClass("icon-eye");
    };
  });
  // end show and hed eye 

  //start click on eye 
  eye.click(ee => {
    if (eye.attr('class') == "eye icon-eye-blocked") {
      eye.removeClass("icon-eye-blocked");
      eye.addClass("icon-eye");
      login__input[1].type = "text";
      return;
    } else {
      eye.removeClass("icon-eye");
      eye.addClass("icon-eye-blocked");
      login__input[1].type = "password";
    };
  });
  //end click on eye 


  //start input blur
  login__input[0].addEventListener("blur", (e) => {
    if (!login__input[0].value.match(validation_email)) {
      login__input.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
    } else {
      login__input.eq(0).css('border-bottom', '2px solid rgb(10 243 6)');
    } 
  });

  login__input[1].addEventListener("blur", (e) => {
    if (login__input[1].value == "") {
      login__input.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
    } else {
      login__input.eq(1).css('border-bottom', '2px solid rgb(10 243 6)');
    } 
  });
  //end input blur

  //start btn click
  btn[0].addEventListener("click", (e) => {
    e.preventDefault();
    if (login__input[0].value.length == 0 && login__input[1].value.length == 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid email address and password',
      });
      login__input.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
      login__input.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else if (login__input[0].value.length == 0 && login__input[1].value.length > 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid email address',
      });
      login__input.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else if (login__input[0].value.length > 0 && login__input[1].value.length == 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid password',
      });
      login__input.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else {
      if (!login__input[0].value.match(validation_email)) {
        Swal.fire({
          icon: 'error',
          title: 'Email error',
          text: 'example: users@gmail.com',
        });
      }else{
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })
        setTimeout(()=>{window.location.href='https://getbootstrap.com'},3000)
        
        
      }
    };
    //end btn click
  });
  // -------------
  // end ready
  // -------------
});