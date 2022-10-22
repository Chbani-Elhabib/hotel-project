// -------------
// start ready
// -------------
$(document).ready(function () {
  const labelsign = $(".labelsign");
  const login__input = $(".login__input");
  const validation_email = /(^\w+([\.-]?\w+))+\@gmail.com/;
  const eye = $(".eye");
  const btn = $(".btnn");
  const html = $("html");
  const login = $(".login");

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
 
      // start show and hed eye 
      if (login__input[1].value.length >= 1 && eye.attr('class') == "eye" && login__input.eq(1).attr("type") == "password") {
        eye.addClass("icon-eye-blocked");
      }else if(login__input[1].value.length >= 1 && eye.attr('class') == "eye" && login__input.eq(1).attr("type") == "text") {
        eye.addClass("icon-eye");
      }else if (login__input[1].value.length < 1) {
        eye.removeClass("icon-eye-blocked");
        eye.removeClass("icon-eye");
      };
      // end show and hed eye 

    });  
  });

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
  login__input.each((e) => {
    login__input[e].addEventListener("blur", (el) => {
      if (login__input[e].value == "") {
        login__input.eq(e).css('border-bottom', '2px solid rgb(245 1 57)');
      } else {
        login__input.eq(e).css('border-bottom', '2px solid rgb(10 243 6)');
      } 
    });
  });
  //end input blur

  //start btn click
  btn[0].addEventListener("click", (e) => {
    e.preventDefault();
    if (login__input[0].value.length == 0) {
      login__input.eq(0).css('border-bottom', '2px solid rgb(245 1 57)');
      if(html.attr("lang") == "en"){
        Swal.fire({
          icon: 'error',
          text: "please enter a valid username",
        });
      }else{
        Swal.fire({
          icon: 'error',
          text: "الرجاءادخال اسم مستخدم صحيح",
        });
      };
    }else if(login__input[1].value.length == 0) {
      login__input.eq(1).css('border-bottom', '2px solid rgb(245 1 57)');
      if(html.attr("lang") == "en"){
        Swal.fire({
          icon: 'error',
          text: "please enter a valid password",
        });
      }else{
        Swal.fire({
          icon: 'error',
          text: "الرجاء إدخال كلمة السر الصحيحة",
        });
      };
    }else{
      $.ajax({
        url: "database/loginverification.php",
        type: "POST",
        data: {username: login__input[0].value, Password: login__input[1].value},
        success: function (response) {
          if(response == "No"){
            if(html.attr("lang") == "en"){
              Swal.fire({
                icon: 'error',
                text: "This account is not registered",
              });
            }else{
              Swal.fire({
                icon: 'error',
                text: "هذا الحساب غير مسجل",
              });
            };
          }else{
            if(html.attr("lang") == "en"){
              Swal.fire({
                icon: 'success',
                title: 'welcome ' + login__input[0].value,
                showConfirmButton: false,
                timer: 2000
              });
            }else{
              Swal.fire({
                icon: 'success',
                title: login__input[0].value + ' أهلا بك',
                showConfirmButton: false,
                timer: 2000
              });
            };
            setTimeout((el) => {
              login.submit();
              login__input[0].value = "";
            },2000)
          };
        }
      });
    }; 
    //end btn click
  });
  // -------------
  // end ready
  // -------------
});