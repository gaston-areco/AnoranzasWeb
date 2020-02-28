$( document ).ready(function() {
   $(".login-form").submit(function (e) {

      var url = $(this).attr("action");
      var user = $("#user").val();
      var password = $("#password").val();

      $.ajax({
         url: url,
         type: 'POST',
         data: {user: user, password: password},
         success: function (response) {
            if(response) {
               window.location.href = "https://anoranzas-chaquenas.000webhostapp.com";
            }
            else
            {
               alert("Usuario o Constraeña incorrecto");
            }
         }
      });

      e.preventDefault();

   });

   $(".register-form").submit(function (e) {

      var url = $(this).attr("action");
      var newUser = $("#newUser").val();
      var newPassword = $("#newPassword").val();
      var newEmail = $("#newEmail").val();

      $.ajax({
         url: url,
         type: 'POST',
         data: {newUser: newUser, newPassword: newPassword, newEmail: newEmail},
         success: function (response) {
            if(response) {
               window.location.href = "https://anoranzas-chaquenas.000webhostapp.com/login/login.php";
               alert("Usuario creado correctamente");
            }
            else
            {
               alert("Ocurrio un error intente nuevamente");
            }
         }
      });

      e.preventDefault();

   });
});

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

