<?php include('config.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="de"> <!--<![endif]-->
    <head name="start">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fahrschule-Thimsen</title>
        <meta name="description" content="Wir sind die Fahrschule Thimsen, die Fahrschule mit Köpfchen und Filialen in Schafflund und Großenwiehe.
        Wir bilden alle Führerscheinklassen aus und Berufskraftfahrer weiter.
        ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Fahrschule, Thimsen, Fahrschule-Thimsen, Großenwiehe, Lindewitt, Schafflund, Ausbildung, fahrschule-großenwiehe">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/stylesheets/style.css">
        <link rel="icon" sizes="64x64" href="favicon.ico">
        <meta name="theme-color" content="#fecc00">
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body id="start">
        <!--[if lt IE 9]>
            <aside class="browse-happy">Du benutzt einen <strong>veralteten</strong> Webbrowser. Einige Funktionen dieser Webseite werden leider nicht funktionieren. Du kannst einen neuen <a target="_blank" href="http://browsehappy.com/">sicheren Webbrowser herunterladen</a>, um dein Erlebnis auf unserer und anderen Internetseiten zu verbessern.</p></aside>
        <![endif]-->

        <div class="main-header-wrap">
            <header id="main-header">
                <h1 class="logo">
                    <a href="#start">Fahrschule Thimsen</a>
                </h1>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#start">Start</a></li>
                        <li><a href="#angebote">Ausbildung</a></li>
                        <li><a href="#filialen">Filialen</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                        <li><a href="#impressum">Impressum</a></li>

                    </ul>
                </nav>
            </header>
        </div>
        <main>
            <section>
                <?php include 'content/start.php'; ?>
            </section>
<!--             <section class="section-standard">
                <?php include 'content/infoContainer.php'; ?>
            </section> -->
            <section class="section-standard">
                <?php include 'content/about.php'; ?>
            </section>
            <figure class="section-image_menschen">
                <img name="angebote" id="angebote" src="media/menschen.jpg" alt="Fahrschule-Thimsen - Unser Team">
                <figcaption>
                    <h2>Unser Angebot</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include 'content/angebote.php'; ?>
            </section>
            <figure name="filialen" id="filialen" class="section-image">
                <img src="media/map.jpg" alt="Fahrschule-Thimsen - Unsere Standorte">
                <figcaption>
                    <h2>Unsere Standorte</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include 'content/filialen.php'; ?>
            </section>
            <figure name="faq" id="faq" class="section-image-faq">

                <article class="faq_text"></article>
                <figcaption>
                    <h2>Wir haben Antworten</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include 'content/faq.php'; ?>
            </section>
            <figure name="contact" id="contact" class="section-image">
                <img src="media/freifunk-flensburg-kontakte.jpg" alt="Kontakte Bild">
                <figcaption>
                    <h2>Jede Menge Kontakt(e)</h2>
                </figcaption>
            </figure>
            <section class="section-standard">
                <?php include 'content/contact.php'; ?>
            </section>

            <figure name="impressum" id="impressum" class="section-image">
<article class="impressum_text"></article>

            </figure>

                <?php include 'content/impressum.php'; ?>





        </main>
        <footer class="main-footer">
            <ul class="list-external-links">
            </ul>
        </footer>

        <script src="assets/javascripts/jquery-1.11.1.min.js"></script>
        <script async src="assets/javascripts/jquery.main.js"></script>
    </body>
</html>
