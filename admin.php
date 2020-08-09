<?php
session_start();

if (!isset($_SESSION['access']) || $_SESSION['access'] !== true) {
    var_dump(http_response_code(404));
    sleep(2);
    header("location: index.php");
    exit;
}

else {



    ?>




<?php }?>