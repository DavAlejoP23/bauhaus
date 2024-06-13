<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BauHaus</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <header>
        <div class="container__nav">
            <div class="container__nav--logo">
                <img src="assets/images/bauhaus-logo.png" alt="Logo BauHaus" />
            </div>
            <div class="container__nav--login">
                <a class="login" href="login.php">Login</a>
            </div>
            <button class="hamburger" onclick="toggleHamburger()" title="Navigation Menu" type="button">
                <div class="line1"><span></span> <span></span></div>
                <div class="line2"><span></span> <span></span></div>
                <div class="line3"><span></span> <span></span></div>
            </button>
        </div>
        <nav class="container__nav--menu">
            <ul>
                <li><a href="#history">Historia</a></li>
                <li><a href="#artists">Referentes</a></li>
                <li><a href="#works">Obras</a></li>
                <li><a href="#form_commentaries">Haz tu propio comentario</a></li>
                <li><a href="#answers">Comentarios</a></li>
            </ul>
        </nav>
        <nav class="container__nav--submenu">
            <ul class="list__menu">
                <li><a href="#history">Historia</a></li>
                <li><a href="#artists">Referentes</a></li>
                <li><a href="#works">Obras</a></li>
                <li><a href="#form_commentaries">Haz tu propio comentario</a></li>
                <li><a href="#answers">Comentarios</a></li>
            </ul>
        </nav>
    </header>