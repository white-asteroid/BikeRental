function checkPasswordMatch() {
    var password = $("#psw").val();
    var confirmPassword = $("#psw").val();

    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Passwords do not match!");
    else
        $("#CheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#psw").keyup(checkPasswordMatch);
});
