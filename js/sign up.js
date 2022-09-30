// -------------
// start ready
// -------------

$(document).ready(function () {
  const labelsignup = $(".labelsignup");
  const login__input = $(".login__input");
  const validation = $(".validation");
  const login__submit = $(".login__submit");
  const eye = $(".eye");
  const validation_Username = /^[a-zA-Z]+[0-9]*[a-zA-Z]*$/;
  const validation_email = /(^\w+([\.-]?\w+))+\@gmail.com/;
  const validation_password = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

  //start click en label focus to input
  labelsignup.each((e) => {
    labelsignup.eq(e).click((ele) => {
      login__input[e].focus();
    });
  });
  // end click en label focus to input

  // start show and hed eye
  login__input[2].addEventListener("keyup", (e) => {
    if (login__input[2].value.length >= 1 && eye.attr("class") == "eye") {
      eye.addClass("icon-eye-blocked");
    }
    if (login__input[2].value.length < 1) {
      eye.removeClass("icon-eye-blocked");
      eye.removeClass("icon-eye");
    }
  });
  // end show and hed eye

  //start click on eye
  eye.click((ee) => {
    if (eye.attr("class") == "eye icon-eye-blocked") {
      eye.removeClass("icon-eye-blocked");
      eye.addClass("icon-eye");
      login__input[2].type = "text";
      return;
    } else {
      eye.removeClass("icon-eye");
      eye.addClass("icon-eye-blocked");
      login__input[2].type = "password";
    }
  });
  //end click on eye

  // start keyup en inpute
  login__input.each((e) => {
    login__input[e].addEventListener("keyup", (el) => {
      // start animate label
      if (login__input[e].value.length >= 1) {
        labelsignup.eq(e).addClass("top");
      } else {
        labelsignup.eq(e).removeClass("top");
      }
      // end animate label

      // validation  users name
      if (
        login__input[0].value.length >= 4 &&
        login__input[0].value.match(validation_Username)
      ) {
        validation.eq(0).addClass("icon-check");
        validation.eq(0).removeClass("icon-cancel-circle");
        login__input.eq(0).css("border-bottom-color", "rgb(10, 243, 6)");
      } else if (
        (validation.eq(0).attr("class") == "validation icon-check" &&
          login__input[0].value.length < 4) ||
        (!login__input[0].value.match(validation_Username) &&
          validation.eq(0).attr("class") == "validation icon-check")
      ) {
        validation.eq(0).removeClass("icon-check");
        validation.eq(0).addClass("icon-cancel-circle");
        login__input.eq(0).css("border-bottom-color", "rgb(245, 1, 57)");
      }

      // validation  Email
      if (login__input[1].value.match(validation_email)) {
        validation.eq(1).addClass("icon-check");
        validation.eq(1).removeClass("icon-cancel-circle");
        login__input.eq(1).css("border-bottom-color", "rgb(10, 243, 6)");
      } else if (
        validation.eq(1).attr("class") == "validation icon-check" &&
        !login__input[1].value.match(validation_email)
      ) {
        validation.eq(1).removeClass("icon-check");
        validation.eq(1).addClass("icon-cancel-circle");
        login__input.eq(1).css("border-bottom-color", "rgb(245, 1, 57)");
      }

      // validation password
      if (login__input[2].value.match(validation_password)) {
        validation.eq(2).addClass("icon-check");
        validation.eq(2).removeClass("icon-cancel-circle");
        login__input.eq(2).css("border-bottom-color", "rgb(10, 243, 6)");
      } else if (
        validation.eq(2).attr("class") == "validation icon-check" &&
        !login__input[2].value.match(validation_password)
      ) {
        validation.eq(2).removeClass("icon-check");
        validation.eq(2).addClass("icon-cancel-circle");
        login__input.eq(2).css("border-bottom-color", "rgb(245, 1, 57)");
      }

      // validation confirm password
      if (
        login__input[2].value == login__input[3].value &&
        login__input[3].value.match(validation_password)
      ) {
        validation.eq(3).addClass("icon-check");
        validation.eq(3).removeClass("icon-cancel-circle");
        login__input.eq(3).css("border-bottom-color", "rgb(10, 243, 6)");
      } else if (
        (validation.eq(3).attr("class") == "validation icon-check" &&
          login__input[2].value != login__input[3].value) ||
        (!login__input[3].value.match(validation_password) &&
          validation.eq(3).attr("class") == "validation icon-check")
      ) {
        validation.eq(3).removeClass("icon-check");
        validation.eq(3).addClass("icon-cancel-circle");
        login__input.eq(3).css("border-bottom-color", "rgb(245, 1, 57)");
      }
    });
  });
  // end keyup en inpute

  // start blur en inpute
  login__input[0].addEventListener("blur", (el) => {
    // validation  Username
    if (
      login__input[0].value.length < 4 ||
      !login__input[0].value.match(validation_Username)
    ) {
      validation.eq(0).removeClass("icon-check");
      validation.eq(0).addClass("icon-cancel-circle");
      login__input.eq(0).css("border-bottom-color", "rgb(245, 1, 57)");
    }
  });
  login__input[1].addEventListener("blur", (el) => {
    // validation Email
    if (!login__input[1].value.match(validation_email)) {
      validation.eq(1).removeClass("icon-check");
      validation.eq(1).addClass("icon-cancel-circle");
      login__input.eq(1).css("border-bottom-color", "rgb(245, 1, 57)");
    }
  });
  login__input[2].addEventListener("blur", (el) => {
    // validation password
    if (!login__input[2].value.match(validation_password)) {
      validation.eq(2).removeClass("icon-check");
      validation.eq(2).addClass("icon-cancel-circle");
      login__input.eq(2).css("border-bottom-color", "rgb(245, 1, 57)");
    }
  });
  login__input[3].addEventListener("blur", (el) => {
    // validation confirm password
    if (
      login__input[2].value != login__input[3].value ||
      !login__input[3].value.match(validation_password)
    ) {
      validation.eq(3).removeClass("icon-check");
      validation.eq(3).addClass("icon-cancel-circle");
      login__input.eq(3).css("border-bottom-color", "rgb(245, 1, 57)");
    }
  });
  // end blur en inpute

  //start click buttom
  login__submit[0].addEventListener("click", (e) => {
    // validation  Username
    if (login__input[0].value.length == 0) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        text: "please enter a valid username",
      });
      validation.eq(0).removeClass("icon-check");
      validation.eq(0).addClass("icon-cancel-circle");
      login__input.eq(0).css("border-bottom-color", "rgb(245, 1, 57)");
    } else if (
      !login__input[0].value.match(validation_Username) ||
      login__input[0].value.length < 4
    ) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        title: "username error",
        text: "example: username4452",
      });
    }

    // validation Email
    else if (login__input[1].value.length == 0) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        text: "please enter a valid Email",
      });
      validation.eq(1).removeClass("icon-check");
      validation.eq(1).addClass("icon-cancel-circle");
      login__input.eq(1).css("border-bottom-color", "rgb(245, 1, 57)");
    } else if (!login__input[1].value.match(validation_email)) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        title: "Email error",
        text: "example: users@gmail.com",
      });
    }

    // validation  password
    else if (login__input[2].value.length == 0) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        text: "please enter a valid password",
      });
      validation.eq(2).removeClass("icon-check");
      validation.eq(2).addClass("icon-cancel-circle");
      login__input.eq(2).css("border-bottom-color", "rgb(245, 1, 57)");
    } else if (!login__input[2].value.match(validation_password)) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        title: "Email password",
        text: "Check a password between 8 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.",
      });
    }

    // validation  confirm password
    else if (login__input[3].value.length == 0) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        text: "please enter a valid confirm password",
      });
      validation.eq(3).removeClass("icon-check");
      validation.eq(3).addClass("icon-cancel-circle");
      login__input.eq(3).css("border-bottom-color", "rgb(245, 1, 57)");
    } else if (login__input[2].value != login__input[3].value) {
      e.preventDefault();
      Swal.fire({
        icon: "error",
        title: "Email password",
        text: "password are not matching.",
      });
    } else {
        e.preventDefault();
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function () {

          console.log(this.responseText);
          
        };
        xmlhttp.open("GET", "database/emailunique.php?email=" + login__input[1].value);
        xmlhttp.send();
    }
  });
  //end click buttom
});
