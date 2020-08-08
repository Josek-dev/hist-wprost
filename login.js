function loginAjax() {
    var nick = $("#nickname").val();
    var pass = $("#password").val();
    var actiontype = "login";

    if($("#nickname").empty()) {
        this.css("border-bottom", "2px #000 solid");
        $(".label:eq(0)").text("Wprowadz login");
        this.placeholder.empty();
    }

    else if($("#pass").empty()){
        this.css("border-bottom", "2px #000 solid");
        $(".label:eq(1)").text("Wprowadz haslo");
        this.placeholder.empty();
    }

    else {
        $.ajax({
            url : 'login.php',
            type : 'POST',
            data : {
                login : nick,
                password : pass,
                action : actiontype
            },
            success : function(response) {
                if( response.trim=="error") {
                    $("#nickname").css("border-bottom", "2px #f00 solid");
                    $(".label:eq(1)").text("Dane niepoprawne");
                    $("#pass").css("border-bottom", "2px #f00 solid");
                    $(".label:eq(1)").text("");
            } else {
                    $(h1).html(response);
                }}})};
}





