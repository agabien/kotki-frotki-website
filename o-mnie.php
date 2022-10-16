<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frotki Kotki</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,500;0,6..96,600;1,6..96,400;1,6..96,500;1,6..96,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./libraries/aos/dist/aos.css">
    <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body>

    <header>
        <?php include("components/menu.html"); ?>
        <div class="baner">
            <figure class="baner__shape">
                <img src="./assets/slide2.jpg" alt="frotki" class="baner__photo">
            </figure>
            <div class="container">
                <div class="baner__text">
                    <h2>O mnie</h2>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <section class="container about-me" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="about-me__photos">
                <figure class="photos__img photos__img--1">
                    <img src="./assets/beauty-woman.jpg" alt="zdjecie-1">
                </figure>
                <figure class="photos__img photos__img--2">
                    <img src="./assets/akcesoria.jpg" alt="">
                </figure>
                <figure class="photos__img photos__img--3">
                    <img src="./assets/girl.jpg" alt="">
                </figure>
            </div>
            <div class="about-me__text">
                <h2 class="section-header">Jak powstały Kotki Frotki?</h2>
                <p class="main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum aliquam dapibus. Ut posuere sapien sed elementum malesuada. Sed ut augue nunc. Vivamus bibendum condimentum efficitur. Donec consectetur, leo eget pellentesque elementum, enim quam sagittis lectus, at rhoncus risus diam id dolor.</p>
                <p class="main-text">Praesent viverra tristique ligula, ac commodo massa. Vivamus purus metus, porttitor eu porttitor a, auctor vel ligula.
                </p>
            </div>
        </section>

        <section class="container numbers" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="section-header">Frotki Kotki w liczbach</div>
            <div class="numbers__container">
                <div class="numbers__boxNumber">
                    <div class="section-header boxNumber__number" data-number="202">0</div>
                    <div class="main-text boxNumber__text">modele frotek</div>
                </div>
                <div class="numbers__boxNumber">
                    <div class="section-header boxNumber__number" data-number="400">0</div>
                    <div class="main-text boxNumber__text">rodzaje ściegów</div>
                </div>
                <div class="numbers__boxNumber">
                    <div class="section-header boxNumber__number" data-number="1000">0</div>
                    <div class="main-text boxNumber__text">zadowolnych klientów</div>
                </div>
            </div>
        </section>
    </main>

    <?php include("components/footer.html"); ?>

    <script src=" https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./libraries/aos/dist/aos.js"></script>
    <script src="./dist/scripts/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>