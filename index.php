<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="jquery.popupoverlay.js"></script>
    <script src="code.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TYTUŁ</title>
</head>
<body>
    <header>
        <div id="topLeft">
            <div class="corner-box" id="backspace">
                <div id="arrow"></div>
            </div>
            <h1 id="title">Wprost</h1>
            <h2 id="subtitle">Historia</h2>
        </div>
        <nav id="topRight">
            <ul id="top-menu">
                <li class="corner-box long-box"><span id="bell-icon"><em id="subscribe">Subskrypcja</em></span></li>
                <li class="corner-box"><span id="log-icon"></span></li>
                <li class="corner-box"><span id="search-icon"></span></li>
                <li class="corner-box"><span id="menu-icon"></span></li>
            </ul>
        </nav>

    </header>
    <div id="top-bar">
        <p><strong>Wprost premium</strong> dołącz do subskrypcji teraz!</p>
    </div>
<main id="container">
    <article class="hotnews" id="">
        <section class="description"><a href="#">
            <h3>Rzeź Woli była największą masakrą cywili podczas II wojny światowej</h3>
            <p>W pierwszych dniach Powstania Warszawskiego doszło do&nbsp;eksterminacji cywili w&nbsp;dzielnicy Wola. Szczyt masakry trwał w&nbsp;dniach 5-7 sierpnia 1944&nbsp;r. Równolegle w&nbsp;innej warszawskiej dzielnicy dochodziło do&nbsp;fali masowych pogromów, grabieży i&nbsp;gwałtów, które zyskały miano rzezi Ochoty.</p>
        </a></section>
        <section class="transparency"></section>
    </article>
    <section class="gridnews">
        <article id="">
            <div class="gridimg"><img src="img/img2.PNG"></div>
            <h3>30 lat temu religia wróciła do&nbsp;szkół. W&nbsp;tej sprawie orzekał Trybunał Konstytucyjny</h3>
            <p>3 sierpnia 1990 roku minister edukacji Henryk Samsonowicz wydał instrukcję dotyczącą powrotu religii do&nbsp;szkół. Nauczanie religii zostało usunięte ze&nbsp;szkół państwowych w&nbsp;czasach PRL, na&nbsp;podstawie ustawy z&nbsp;15 lipca 1961 roku. Stanowiła ona, że&nbsp;szkoły i&nbsp;placówki oświatowo-wychowawcze są instytucjami świeckimi.</p>
        </article>
        <article id="">
            <div class="gridimg"><img src="img/img2.PNG"></div>
            <h3>30 lat temu religia wróciła do&nbsp;szkół. W&nbsp;tej sprawie orzekał Trybunał Konstytucyjny</h3>
            <p>Nieznaną jaskinię, złożony system tuneli i&nbsp;szczelin odkryli archeolodzy pod&nbsp;zamkiem w&nbsp;Olsztynie na&nbsp;terenie Jury Krakowsko-Częstochowskiej. –&nbsp;Część z&nbsp;nich mogła być wykorzystywana przez ludzi w&nbsp;średniowieczu, a&nbsp;może zdecydowanie wcześniej –&nbsp;wynika z&nbsp;ustaleń..</p>
        </article>
        <article id="">
            <div class="gridimg"><img src="img/img2.PNG"></div>
            <h3>30 lat temu religia wróciła do&nbsp;szkół. W&nbsp;tej sprawie orzekał Trybunał Konstytucyjny</h3>
            <p>Przejmująca, wstrząsająca i&nbsp;do bólu szczera –&nbsp;taka właśnie jest najnowsza książka Agnieszki Cubały „Kobiety'44. Prawdziwe historie kobiet w&nbsp;powstańczej Warszawie”. Autorka skupiła się na&nbsp;przedstawieniu Powstania Warszawskiego ich oczami. Obrazy, które narysowała na&nbsp;łamach książki, wykorzystując relacje uczestniczek zrywu, mocno zapisują się w&nbsp;pamięci.</p>
        </article>
        <article id="">
            <div class="gridimg"><img src="img/img2.PNG"></div>
            <h3>30 lat temu religia wróciła do&nbsp;szkół. W&nbsp;tej sprawie orzekał Trybunał Konstytucyjny</h3>
            <p>Pamieć o&nbsp;Powstaniu Warszawskim jest od&nbsp;lat obecna w&nbsp;wielu dziełach kultury popularnej. Niektóre z&nbsp;nich zostały błyskawicznie docenione przez krytyków, a&nbsp;inne wywołały wiele kontrowersji. Przypominamy najważniejsze i&nbsp;najciekawsze z&nbsp;nich.</p>
        </article>
    </section>
</main>
    <!-- Rozwijane menu -->
    <div id="overlay">
        <nav id="overlayNav">
            <ul class="submenu" >
                <li><a onclick="" href="#">Wiadomości</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
            </ul>
            <ul class="submenu" >
                <li><a href="#">Wiadomości</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
            </ul>
            <ul class="submenu">
                <li><a href="#">Wiadomości</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
            </ul>
            <ul class="submenu" >
                <li><a href="#">Wiadomości</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
            </ul>
            <ul class="submenu">
                <li><a href="#">Wiadomości</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
                <li><a href="#">Pozycja</a></li>
            </ul>
        </nav>
    </div>
    <!-- Logowanie -->
    <div id="jqpopup">
        <div id="loglog">
            <div id="header">
                <h1>Panel administracyjny</h1>
                <button class="popup_close jqpopup_close" title="Close" aria-label="Close"><span aria-hidden="true">Zamknij</span></button>
            </div>
            <div id="signin">
                <form method="post" action="" name="login">
                    <label for="nickname">
                        <span class="label">Login</span>
                        <input id="nickname" type="text" name="nickname" placeholder="Wpisz login" required>
                    </label>
                    <label for="password">
                        <span class="label">Hasło</span>
                        <input type="password" name="password" id="password" placeholder="Wpisz hasło"  required >
                    </label>
                    <button id="logging" type="submit" name="sign">Zaloguj</button>
                </form>
                <?php include "login.php"; ?>
                <script src="login.js"></script>            </div>
        </div>
    </div>
</body>
</html>
