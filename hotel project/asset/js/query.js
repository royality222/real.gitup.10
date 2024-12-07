$(document).ready(function () {
  signup();
  login_auth();
});

function signup() {
  $(document).on("click", "#signup", function () {
    var username = $("#username").val();
    var email = $("#email").val();
    var usertype = $("#usertype").val();
    var password = $("#password").val();
    var conpassword = $("#confirm-password").val();

    $.ajax({
      url: "signup.php",
      method: "post",
      data: {
        username: username,
        email: email,
        usertype: usertype,
        password: password,
        conpassword: conpassword,
      },

      success: function (data) {
        data = $.parseJSON(data);
        if (data.status == "error") {
          $("#errormessage").html(data.html);
        } else {
          $("#errormessage").html(data.html);
          setInterval(function () {
            window.location = "./";
          }, 300);
        }
      },
    });
  });
}
function login_auth() {
  $(document).on("click", "#loginbtn", function () {
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax({
      url: "login-auth.php",
      method: "post",
      data: { username: username, password: password },
      success: function (data) {
        data = $.parseJSON(data);
        if (data.status == "error") {
          $("#loginerrormsg").html(data.html);
        } else if (data.status == "staff") {
          window.location = "staff";
        } else if (data.status == "student") {
          window.location = "student";
        }
      },
    });
  });
}
