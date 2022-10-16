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
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-160x160.png" sizes="160x160" />
    <link rel="icon" type="image/png" href="/assets/favicon/favicon-196x196.png" sizes="196x196" />    
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-touch-icon-152x152.png" />    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./libraries/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./libraries/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./libraries/aos/dist/aos.css">
    <link rel="stylesheet" href="./dist/css/main.css">
</head>

<body class="home">

    <header>
    <?php include("components/menu.html"); ?>
        <div class="slider">
            <section class="slider__container">
                <button class="slider__btn slider__btn--prev" data-button-prev></button>
                <figure class="slide" data-slide></figure>
                <button class="slider__btn slider__btn--next" data-button-next></button>
            </section>
        </div>
    </header>

    <main>
        <section class="container intro">
            <h2 class="intro__bigText" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
                Pięlęgnacja i piękno idą ze&nbsp;sobą w&nbsp;parze.</h2>
            <h3 class="intro__smallText" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">W
                KotkiFrotki doskonale o tym wiemy, dlatego pomogamy Ci w&nbsp;Twoich rytuałach
                pielęgnacyjnych każdego dnia.</h3>
        </section>

        <section class="container products-slider">
            <h2 class="section-header" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">Nasze produkty</h2>
            <div class="owl-carousel owl-theme products-slider__container" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <a href="produkt.php" class="product">
                    <div class="product__img">
                        <img src="./assets/frotka.jpg" alt="frotka-1">
                    </div>
                    <div class="product__name">Frotka 1</div>
                    <div class="product__price">30 zł</div>
                    <div class="product__btn">Więcej</div>
                </a>

                <a href="produkt.php" class="product">
                    <div class="product__img">
                        <img src="./assets/frotka.jpg" alt="fortka-2">
                    </div>
                    <div class="product__name">Frotka 2</div>
                    <div class="product__price">30 zł</div>
                    <div class="product__btn">Więcej</div>
                </a>

                <a href="produkt.php" class="product">
                    <div class="product__img">
                        <img src="./assets/frotka.jpg" alt="frotka-3">
                    </div>
                    <div class="product__name">Frotka 3</div>
                    <div class="product__price">30 zł</div>
                    <div class="product__btn">Więcej</div>
                </a>

                <a href="produkt.php" class="product">
                    <div class="product__img">
                        <img src="./assets/frotka.jpg" alt="frotka-4">
                    </div>
                    <div class="product__name">Frotka 4</div>
                    <div class="product__price">30 zł</div>
                    <div class="product__btn">Więcej</div>
                </a>

                <a href="produkt.php" class="product">
                    <div class="product__img">
                        <img src="./assets/frotka.jpg" alt="frotka-5">
                    </div>
                    <div class="product__name">Frotka 5</div>
                    <div class="product__price">30 zł</div>
                    <div class="product__btn">Więcej</div>
                </a>

            </div>

            <div class="products-slider__button-container">
                <a href="produkty.php" class="products-slider__button">Zobacz wszystkie produkty</a>
            </div>
        </section>

        <section class="our-mission">
            <div class="our-mission__bigPhoto"></div>
            <div class="our-mission__content">
                <div class="content__imgPart container">
                    <figure>
                        <img src="./assets/beautiful.jpg" alt="woman">
                    </figure>
                </div>
                <div class="content__textPart container">
                    <h2 class="section-header">Lorem Ipsum is simply</h2>
                    <p class="main-text">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
            </div>
        </section>

        <section class="cta container" data-aos="zoom-out" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="cta__box">
                <p class="main-text cta__text">
                    Masz pytania? Sugestie, co warto włączyć do naszej oferty?
                    <a href="kontakt.php" class="cta__text cta__text--link">Napisz do nas!</a>
                </p>
            </div>
        </section>

    </main>

    <?php include("components/footer.html"); ?>  

    <script src=" https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./libraries/owl-carousel/dist/owl.carousel.min.js"></script>
    <script src="./libraries/aos/dist/aos.js"></script>
    <script src="./dist/scripts/main.js"></script>
    <script>
        // slider w topie
        const imageArr = [
            './assets/slide1.jpg',
            './assets/slide2.jpg',
            './assets/slide3.jpg',
        ];

        const headerArr = [
            'Z myślą o Twoim pięknie',
            'Akcesoria do pielęgnacji włosów',
            'Naturalna pielęgnacja dla Ciebie',
        ];

        const slider = new Slider(imageArr, headerArr);
        slider.initializeSlider();

        // owl carousel
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3,
                    loop: false
                }
            }
        })

        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });

        // aos
        AOS.init();

        // ściemnianie zdjęcia na scroll
        const $doc = $(document);
        const $missionPhoto = $('.our-mission__bigPhoto');
        const $missionText = $('.our-mission__content');
        const $header = $('.main-menu');     

        $doc.on('scroll', function () {            
            const scrollPos = $doc.scrollTop();
            const missionTextOffset = $missionText.offset().top;
            const missionPhotoOffset = $missionPhoto.offset().top;
            const menuHeight = $header.outerHeight();
            const missionPhotoHeight = $missionPhoto.outerHeight();
            
            $missionPhoto.css({
                'filter': 'grayscale(' + ((scrollPos - $missionPhoto.offset().top + menuHeight) / missionPhotoHeight) * 1.5 + ')'
            });
        });
    </script>
</body>

</html>