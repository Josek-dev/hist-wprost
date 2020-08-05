<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>Panel administracyjny</title>
</head>
<body>
<div id="login">
    <div id="header">
        <h1>Panel administracyjny</h1>
    </div>
    <div id="signin">
        <form method="post" action="login.php" name="admin">
            <label for="login">
                <span class="label">Login</span>
                <input type="text" name="login" placeholder="Wpisz login">
            </label>
            <label for="password">
                <span class="label">Hasło</span>
                <input type="password" name="password" placeholder="Wpisz hasło" >
            </label>
            <button type="submit" name="sign">Zaloguj</button>
        </form>
    </div>
</div>
    <?php
        session_start();
        $SESSION['user'] = "admin";
        $SESSION['pass'] = "cc03e747a6afbbcbf8be7668acfebee5";

        //if (isset()

        ?>


</body>
</html>

