function loginAjax() {
    var nickname = $("#nickname").val();
    var password = $("#password").val();
    var actiontype = "login";

    if($("#nickname").empty()) {
        this.css("border-bottom", "2px #000 solid");
        $(".label").text("Wprowadz login");
        this.placeholder.empty();
    }

    else if($("#password").empty()){
        this.css("border-bottom", "2px #000 solid");
        $(".label").text("Wprowadz haslo");
        this.placeholder.empty();
    }

    else {
        $.ajax({
            url : 'login.php',
            type : 'POST',
            data : {
                login : nickname,
                password : password,
                action : actiontype
            },
            success : function(response) {
                if(response.trim() == 'error') {
                    $("#nickname").css("border-bottom", "2px #f00 solid");
                    $(".label").text("Dane niepoprawne");
                    $("#password").css("border-bottom", "2px #f00 solid");
            } else {
                    $(h1).html(response);
                }}})}
}





