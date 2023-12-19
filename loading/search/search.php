<?php
require_once '../../vendor/db.php';
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" href="../../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../css/search_output.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.20.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <style>
            h1 {
            --s: 0.1em;   /* the thickness of the line */
    --c: #2c4bff; /* the color */

    color: #0000;
    padding-bottom: var(--s);
    background:
    linear-gradient(90deg,var(--c) 50%,#000 0) calc(100% - var(--_p,0%))/200% 100%,
    linear-gradient(var(--c) 0 0) 0% 100%/var(--_p,0%) var(--s) no-repeat;
    -webkit-background-clip: text,padding-box;
    background-clip: text,padding-box;
    transition: 0.5s;
    }
    h1:hover {--_p: 100%}


    body {
    height: 100vh;
    margin: 0;
    display: grid;
    place-content: center;
    }
    h1 {
    font-family: system-ui, sans-serif;
    font-size: 5rem;
    cursor: pointer;
    }
    </style>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-header u-header" id="sec-c6b5"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
            <img src="../../images/unn_logo_ru.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                        </g></svg>
                </a>
            </div>
            <div class="u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Главная.html" style="padding: 10px 20px;">Главная</a>
                    </li></ul>
            </div>
            <div class="u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html">Главная</a>
                            </li></ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div></header>
<section class="u-clearfix u-section-1" id="sec-6ee9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-default u-text-1">Факультет</h4>
        <h4 class="u-text u-text-default u-text-2">Ф.И.О.</h4>
        <h4 class="u-text u-text-default u-text-3">Направление</h4>
        <h4 class="u-text u-text-default u-text-4">Группа</h4>


        <?php
        $search = $_SESSION['search'];
        $main = mysqli_query($connect, "SELECT * FROM `main` WHERE `name` LIKE '$search'");
        $main = mysqli_fetch_assoc($main);
        ?>
        <a href="Поиск_результат.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">выбор</a>
        <h4><?=$main['faculte'] ?>
        <?=$main['group'] ?>
        <?=$main['number_group'] ?>
        <?=$main['name'] ?></h4>
    </div>
</section>





</body></html>



