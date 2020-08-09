function validate() {

    var nickname = $("#nickname").val();
    var password = $("#password").val();

    if (nickname != "" && password != "") {
        $.ajax({
            url: 'login.php',
            type: 'post',
            data: {
                nickname: nickname,
                password: password,
            },
            success:$("form").submit(),
        });

    } else {
        $(".label:eq(0)").text("Wprowadz login");
        $(".label:eq(1)").text("Wprowadz hasło");
        $("#nickname").css("border-bottom", "2px solid red");
        $("#password").css("border-bottom", "2px solid red");
        return false;
    }
    return true;
}






