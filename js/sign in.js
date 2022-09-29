// -------------
// start ready
// -------------
$(document).ready(function () {

  const email_password = $(".login__input");
  const validation_email = /(^\w+([\.-]?\w+))+\@gmail.com/;
  const eye = $(".eye");
  const btn = $(".btnn");

  // start show and hed eye 
  email_password[1].addEventListener("keyup", e => {
    if (email_password[1].value.length >= 1 && eye.attr('class') == "eye") {
      eye.addClass("icon-eye-blocked");
    } if (email_password[1].value.length < 1) {
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
      email_password[1].type = "text";
      return;
    } else {
      eye.removeClass("icon-eye");
      eye.addClass("icon-eye-blocked");
      email_password[1].type = "password";
    };
  });
  //end click on eye 


  //start input blur
  email_password[0].addEventListener("blur", (e) => {
    if (!email_password[0].value.match(validation_email)) {
      email_password.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
    } else {
      email_password.eq(0).css('border-bottom', '2px solid rgb(10 243 6)');
    } 
  });

  email_password[1].addEventListener("blur", (e) => {
    if (email_password[1].value == "") {
      email_password.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
    } else {
      email_password.eq(1).css('border-bottom', '2px solid rgb(10 243 6)');
    } 
  });
  //end input blur

  //start btn click
  btn[0].addEventListener("click", (e) => {
    e.preventDefault();
    if (email_password[0].value.length == 0 && email_password[1].value.length == 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid email address and password',
      });
      email_password.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
      email_password.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else if (email_password[0].value.length == 0 && email_password[1].value.length > 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid email address',
      });
      email_password.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else if (email_password[0].value.length > 0 && email_password[1].value.length == 0) {
      Swal.fire({
        icon: 'error',
        text: 'please enter a valid password',
      });
      email_password.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
      e.preventDefault();
    } else {
      if (!email_password[0].value.match(validation_email)) {
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