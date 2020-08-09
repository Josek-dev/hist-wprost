<?php
session_start();
$login = htmlspecialchars("admin", ENT_QUOTES);
$pass = md5("test123");

if(isset($_POST['submit'])){
    if (htmlspecialchars($_POST['nickname'], ENT_QUOTES) === $login && md5($_POST['password']) === $pass) {
        $_SESSION['access'] = TRUE;
        header("Location: admin.php");
    }
else { ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="admin.css">
        <style type="text/css">
            h1 { text-align: center; padding-top:20vh; font-size: 2rem; }
            h2 {text-align:center; font-size: 1.5rem; color: #555; animation: hideit; animation-duration: 3s;}
            @keyframes hideit { from { opacity: 1; } to { opacity: 0.1 } }
        </style>
        <title>Niepoprawne dane</title>
    </head>
    <body>
        <script type="application/javascript">
            setTimeout(function(){ location.replace("index.php"); }, 3000);
        </script>
        <h1>Podano niepoprawne dane!</h1>
        <h2>Nastąpi przekierowanie...</h2>
    </body>
    </html>

<?php }

}

?>


