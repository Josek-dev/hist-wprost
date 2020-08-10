<?php
session_start();

if (!isset($_SESSION['access']) || $_SESSION['access'] !== true) {
    var_dump(http_response_code(404));
    sleep(2);
    header("location: index.html");
    exit;
}

else {



    ?>
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
            h2 {text-align:center; font-size: 1.5rem; color: #555; animation: hideit; animation-duration: 3s; cursor: pointer;}
            @keyframes hideit { from { opacity: 0; } to { opacity: 1 } }
        </style>
        <title>Panel Administracyjny</title>
    </head>
    <body>
        <h1>Tutaj miał być panel administracyjny</h1>
        <h2>Sesja zniszczy się po odświeżeniu...</h2>
    </body>
    </html>



<?php
$_SESSION = array();

    session_destroy();

 }?>