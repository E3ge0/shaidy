<?php include 'inc/bdd.php' ?>
<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Shai'Dy</title>
    <link rel="prefetch" href="fonts/Axis/AXIS-ExtraBold.otf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Montserrat/Montserrat-Bold.ttf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Montserrat/Montserrat-Light.ttf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Montserrat/Montserrat-Regular.ttf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Roboto/Roboto-Bold.ttf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Roboto/Roboto-Light.ttf" as="font" crossorigin="" />
    <link rel="prefetch" href="fonts/Roboto/Roboto-Regular.ttf" as="font" crossorigin="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charSet="UTF-8" />
    <script>
    (function(w, l) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
    })(window, 'dataLayer');
    </script>
    <meta name="next-head-count" content="25" />
    <link rel="preload" href="_next/static/css/5b7addec0d9a4aa3.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/5b7addec0d9a4aa3.css" data-n-g="" />
    <link rel="preload" href="_next/static/css/1b075b8d9783e1aa.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/1b075b8d9783e1aa.css" data-n-p="" /><noscript
        data-n-css=""></noscript>
    <script defer="" nomodule="" src="_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="_next/static/chunks/webpack-9d61c1acd50801c6.js" defer=""></script>
    <script src="_next/static/chunks/framework-2fe4cb6473b20297.js" defer=""></script>
    <script src="_next/static/chunks/main-39fc82d5774eab0f.js" defer=""></script>
    <script src="_next/static/chunks/pages/_app-ff4c3fdcb978ffc4.js" defer=""></script>
    <script src="_next/static/chunks/5308-0e1c1f8cd3d1d193.js" defer=""></script>
    <script src="_next/static/chunks/5449-100bd34ac4074cd8.js" defer=""></script>
    <script src="_next/static/chunks/94-d1f961a1ccf58c73.js" defer=""></script>
    <script src="_next/static/chunks/3792-bd7c58879704b0fe.js" defer=""></script>
    <script src="_next/static/chunks/482-e2fcc154bd57f264.js" defer=""></script>
    <script src="_next/static/chunks/6472-de768674f820fcf7.js" defer=""></script>
    <script src="_next/static/chunks/pages/blog-57a59ae2261f3555.js" defer=""></script>
    <script src="_next/static/K0SfJspOlpAxtYmrnc6DQ/_buildManifest.js" defer=""></script>
    <script src="_next/static/K0SfJspOlpAxtYmrnc6DQ/_ssgManifest.js" defer=""></script>
    <link rel="stylesheet" href="css/home.css">
    <style>
    .carousel-wrapper {
        height: 100%;
        position: relative;
        width: 100%;
        margin: 0 auto;
    }

    .carousel-item {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 25px 50px;
        opacity: 0;
        transition: all 0.5s ease-in-out;
    }

    .arrow {
        border: solid white;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 12px;
    }

    .arrow-prev {
        left: 10px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%) rotate(135deg);
    }

    .arrow-next {
        right: 10px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%) rotate(-45deg);
    }

    .light {
        color: white;
    }

    @media (max-width: 480px) {

        .arrow,
        .light .arrow {
            background-size: 10px;
            background-position: 10px 50%;
        }
    }

    /*Select every element*/
    [id^="item"] {
        display: none;
    }

    .item-1 {
        z-index: 2;
        opacity: 1;
    }

    *:target~.item-1 {
        opacity: 0;
    }

    #item-1:target~.item-1 {
        opacity: 1;
    }

    #item-2:target~.item-2,
    #item-3:target~.item-3 {
        z-index: 3;
        opacity: 1;
    }

    .title-carroussel {
      white-space: nowrap; /* Empêche le texte de passer à la ligne */
      overflow: hidden; /* Masque le contenu débordant */
      text-overflow: ellipsis; /* Ajoute des points de suspension à la fin */
      width: 100%;
    }
    </style>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close"></a>
        <ul>
            <li><a href="etudes.php">Studies</a></li>
            <li><a href="api.php">API</a></li>
            <li><a href="podcasts.php">Podcasts</a></li>


        </ul>
    </div>
    <div id="__next">
        <nav opacity="0" class="Nav__Navbar-sc-1cqvak9-0 bOVFzz"><img src="logo.jpg" width="30" height="30"
                style="border-radius: 30px"><a href="index.php" class="NavLogo__StyledLink-sc-y37qlc-0 feEeet">
                <div class="NavLogo__ImageContainer-sc-y37qlc-1 kCZRJl"><svg id="ev2JWg5Vn4k1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 298.35 30.27" shape-rendering="geometricPrecision"
                        text-rendering="geometricPrecision"><text dx="0" dy="0"
                            font-family="&quot;ev2JWg5Vn4k1:::Montserrat&quot;" font-size="30" font-weight="700"
                            transform="translate(85.178052 25.780609)" stroke-width="0">
                            <tspan y="0" font-weight="700" stroke-width="0">
                                <![CDATA[
SHAI'DY
]]>
                            </tspan>
                        </text>
                        <style>
                        <![CDATA[
                        @font-face {
                            font-family: 'ev2JWg5Vn4k1:::Montserrat';
                            font-style: normal;
                            font-weight: 700;
                            src: url(data:font/ttf;charset=utf-8;base64,AAEAAAAQAQAABAAAR0RFRgBOAAgAAAG4AAAAKEdQT1OO7pelAAADUAAAAM5HU1VCI3YkggAAAeAAAAAuT1MvMngVXg0AAAKMAAAAYFNUQVTl5MwmAAACSAAAAERjbWFwAOoBogAAAuwAAABkZ2FzcAAAABAAAAEUAAAACGdseWaO1ZOfAAAEIAAAAcpoZWFkGBay5wAAAhAAAAA2aGhlYQkaAhkAAAFwAAAAJGhtdHgUGAFXAAABlAAAACRsb2NhAkACnwAAARwAAAAUbWF4cAAdALYAAAEwAAAAIG5hbWUwm1n2AAAF7AAAAkBwb3N0/58AMgAAAVAAAAAgcHJlcGgGjIUAAAEMAAAAB7gB/4WwBI0AAAEAAf//AA8AAAAUADAAVABvAHsAvADXAOUA5QABAAAACQBZAAcAWQAJAAEAAAAAAAAAAAAAAAAAAwADAAMAAAAAAAD/nAAyAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAA8j/BQAABh7/VvzsBfkAAQAAAAAAAAAAAAAAAAAAAAkCSwAoAv7/9wM6AFMDKABTAUgAUwJ+ABwCpP/yAOYAMQEbAAAAAQACAB4AAAAAAAAADgABAAIAAAAMAAAADAABAAAAAgABAAEABgABAAEAAAAKACwALAADREZMVAAYY3lybAAUbGF0bgAUAAAAAAAEAAAAAP//AAAAAAAAAAEAAAAIAADD20YJXw889QADA+gAAAAA1gv+RgAAAADdnHDE/1b+/QX5A/0AAQAGAAIAAAAAAAAAAQABAAgAAgAAABQAAgAAACQAAndnaHQBAAAAaXRhbAETAAEABAAQAAEAAAAAAQcCvAAAAAMAAQACARQAAAAAAAEAAAAEAnICvAAFAAACigJYAAAASwKKAlgAAAFeADIBNgAAAAAAAAAAAAAAAKAAAv9AACB7AAAAAAAAAABVTEEAAKAAAPsCA8j/BQAABFUBDiAAAZcAAAAAAgUCvAAAACAAAwAAAAIAAAADAAAAFAADAAEAAAAUAAQAUAAAABAAEAADAAAAIAAnAEEARABJAFMAWf//AAAAIAAnAEEARABIAFMAWf///+j/4P/A/77/u/+y/60AAQAAAAAAAAAAAAAAAAAAAAAAAQAAAAoAKgA4AANERkxUABRjeXJsABRsYXRuABQABAAAAAD//wABAAAAAWtlcm4ACAAAAAEAAAABAAQAAgAIAAEACAACAFgABAAAAHYAYgAGAAYAAAAA//YAAP/i/+8AAAAAAAAAAAAAAAAAAAAAABcAAP/V/9YAAAAAAAAAAP/x/+IAAP/5/9X/8f/8AAAAAAAA/9YAAAAAAC0AAgABAAEABwAAAAEAAQAHAAIAAQABAAEAAwAEAAUAAQABAAcAAgAAAAEAAQADAAQABQAAAAIAKAAAAiMCvAADAAcAADMRIRElIREhKAH7/lUBW/6lArz9REYCMAAC//cAAAMIArwABwALAAAjATMBIwEzASc3IRcJATigATmq/wBA/v8KKwFoLAK8/UQCav2Wlnt7AAIAUwAAAxMCvAAKABUAADMRITIWFhUUBgYjJzMyNjY1NCYmIyNTAT5yrmJirnKclEZnOTlnRpQCvFeca2qdV4U1YkJDYTUAAAMAUwAAAtUCvAADAAcACwAAATMRIyEjETMBITUhAjOiov7CoqIBSv6qAVYCvP1EArz+Y4kAAAEAUwAAAPUCvAADAAAzETMRU6ICvP1EAAEAHP/0AmICyAAtAAAFIiYnNxYWMzI2NjU0LgU1NDY2MzIWFwcmJiMiBgYVFB4FFRQGBgE5VJovNy17PzA7HCxIV1dILUGDY0KAMTIxYi8vPBosSFdXSC1CgwwtJHogKRMiFhwhFRMcLEg4PGM7Hx97HBsWIxcbIRQUGixINztiPAAB//IAAAKzArwACwAAIREXATMTIxMzATcRAQEl/sys7GPtn/7MJAEeYgIA/ncBif4AYv7iAAABADEBoAC2ArwAAwAAEwMzAzsKhQsBoAEc/uQAAAAAAAwAlgADAAEECQAAALAA+gADAAEECQABABQA5gADAAEECQACAAgA3gADAAEECQADADIArAADAAEECQAEAB4AjgADAAEECQAFABoAdAADAAEECQAGAB4AVgADAAEECQAOADQAIgADAAEECQEAAAwAFgADAAEECQEHAAgA3gADAAEECQETAAwACgADAAEECQEUAAoAAABSAG8AbQBhAG4ASQB0AGEAbABpAGMAVwBlAGkAZwBoAHQAaAB0AHQAcAA6AC8ALwBzAGMAcgBpAHAAdABzAC4AcwBpAGwALgBvAHIAZwAvAE8ARgBMAE0AbwBuAHQAcwBlAHIAcgBhAHQALQBCAG8AbABkAFYAZQByAHMAaQBvAG4AIAA4AC4AMAAwADAATQBvAG4AdABzAGUAcgByAGEAdAAgAEIAbwBsAGQAOAAuADAAMAAwADsAVQBMAEEAOwBNAG8AbgB0AHMAZQByAHIAYQB0AC0AQgBvAGwAZABCAG8AbABkAE0AbwBuAHQAcwBlAHIAcgBhAHQAQwBvAHAAeQByAGkAZwBoAHQAIAAyADAAMQAxACAAVABoAGUAIABNAG8AbgB0AHMAZQByAHIAYQB0ACAAUAByAG8AagBlAGMAdAAgAEEAdQB0AGgAbwByAHMAIAAoAGgAdAB0AHAAcwA6AC8ALwBnAGkAdABoAHUAYgAuAGMAbwBtAC8ASgB1AGwAaQBlAHQAYQBVAGwAYQAvAE0AbwBuAHQAcwBlAHIAcgBhAHQAKQ==) format('truetype');
                        }
                        ]]>
                        </style>
                    </svg></div>
            </a>
            <ul class="Nav__Ul-sc-1cqvak9-1 yWqGT hide-nav" opacity="0">
                <li class="Nav__Li-sc-1cqvak9-2 ksxkVL"><a href="index.php">Home</a></li>
                <li class="Nav__Li-sc-1cqvak9-2 cFSmUX"><a href="news.php">News</a></li>
                <li class="Nav__Li-sc-1cqvak9-2 ergrcH"><a href="contact.php">Contact</a></li>
            </ul>

            <div style="margin-right: 20px">
                <a href="#" id="openBtn">
                    <span class="burger-icon" id="burgerIcon">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </span>
                </a>
            </div>

        </nav>
        <main>
            <section class="Hero__Section-sc-106qolb-0 cgBWsx">
                <div class="swiper mySwiper">
                    <div class="carousel-wrapper">
                        <span id="item-1"></span>
                        <span id="item-2"></span>
                        <span id="item-3"></span>
                        <?php
                        $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1');
                        $req->execute([]);
                        $a1 = $req->fetch();
                        if ($req->rowCount() == 1) {
                        ?>
                        <div class="carousel-item item-1" style="background: url(upload/<?php echo $a1['image'] ?>); background-size: cover;
        background-repeat: no-repeat;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0" align="center">

                                <h2 style="font-size: 40px; color: white" class="title-carroussel">
                                    <?php echo $a1['titre'] ?></h2>
                            </div>
                            <a class="arrow arrow-prev" href="#item-3"></a>
                            <a class="arrow arrow-next" href="#item-2"></a>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1 OFFSET 1');
                        $req->execute([]);
                        $a2 = $req->fetch();
                        if ($req->rowCount() == 1) {
                        ?>
                        <div class="carousel-item item-2" style="background: url(upload/<?php echo $a2['image'] ?>); background-size: cover;
        background-repeat: no-repeat;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0" align="center">

                                <h2 style="font-size: 40px; color: white" class="title-carroussel"</h2>
                                    <?php echo $a2['titre'] ?></h2>
                            </div>

                            <a class="arrow arrow-prev" href="#item-1"></a>
                            <a class="arrow arrow-next" href="#item-3"></a>
                        </div>
                        <?php
                        }
                        $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 1 OFFSET 2');
                        $req->execute([]);
                        $a3 = $req->fetch();
                        if ($req->rowCount() == 1) {
                        ?>
                        <div class="carousel-item item-3" style="background: url(upload/<?php echo $a3['image'] ?>); background-size: cover;
        background-repeat: no-repeat;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0" align="center">

                                <h2 style="font-size: 40px; color: white" class="title-carroussel">
                                    <?php echo $a3['titre'] ?></h2>
                            </div>

                            <a class="arrow arrow-prev" href="#item-2"></a>
                            <a class="arrow arrow-next" href="#item-1"></a>
                        </div>
                        <?php
                        } ?>
                    </div>

                </div>
            </section>

            <div class="blog__Container-sc-1r9k7f4-0 fqkZaR">

                <div class="blog__HeaderContainer-sc-1r9k7f4-1 gpJXD">
                    <h1 class="blog__SectionTitle-sc-1r9k7f4-2 IFQoh">Last news</h1>
                    <!-- <div class="BlogCategorySelector__SelectorContainer-sc-ghsvil-0 rJEyo"><select
                            id="select-blog-category" class="BlogCategorySelector__Select-sc-ghsvil-1 gUrpat no-zoom">
                            <option value="">Toutes les catégories</option>
                            <option value="bons plans">Bons Plans</option>
                            <option value="top">Top</option>
                            <option value="info">Info</option>
                            <option value="focus">Focus</option>
                            <option value="mode">Mode</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="sneakers">Sneakers</option>
                        </select></div> -->
                </div>
                <section class="AllPosts__Section-sc-6aropc-0 kcFeoT">

                    <div class="AllPosts__Container-sc-6aropc-1 hsgcUN">

                        <?php
                        include 'inc/bdd.php';
                        $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 3');
                        $req->execute([]);
                        $articles = $req->fetchAll();
                        foreach ($articles as $a) {
                        ?>
                        <a href="read.php?i=<?php echo $a['id'] ?>"
                            class="PostCardPreview__Container-sc-1j4wnl5-0 eQyRpe">
                            <div class="PostCardPreview__ImgContainer-sc-1j4wnl5-1 eDeQuS"><span
                                    style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0"><img
                                        src="upload/<?php echo $a['image'] ?>" decoding="async" data-nimg="fill"
                                        class="image"
                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover;background-size:cover;background-position:0% 0%" /><noscript><img
                                            sizes="100vw" decoding="async" data-nimg="fill"
                                            style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover"
                                            class="image" loading="lazy" /></noscript></span></div>
                            <div class="PostCardPreview__ContentContainer-sc-1j4wnl5-2 dTiUBv">
                                <h2 class="PostCardPreview__PostTitleH2-sc-1j4wnl5-3 iWPezH"><?php echo $a['titre'] ?>
                                </h2>
                                <p class="PostCardPreview__PostDescription-sc-1j4wnl5-5 dddMdo">
                                    <?php echo $a['description'] ?>
                                </p>
                                <div style="display:flex;align-items:center;margin-top:12px">
                                    <p class="PostCardPreview__MetaText-sc-1j4wnl5-6 fAwCOA"><?php echo $a['date'] ?>
                                    </p>
                                    <div class="PostCardPreview__PointSeparator-sc-1j4wnl5-7 isseNH"></div>
                                    <div class="PostCategories__CategoriesContainer-sc-1mmlc33-0 ktHVET">
                                        <div class="CategoryTag__CategoryUnclicable-sc-h38akm-1 kUSwnk">
                                            <?php echo $a['category'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
                        }
                        ?>

                    </div>
                </section>
            </div>
        </main>

    </div>
    <div align="center" style="margin-top: 100px">
        <a href="dashboard.php">
            <div align="center"
                style="background-color: grey; padding: 10px; border-radius: 10px; width: 25%; margin: 10px">
                <p style="color: white">Administration</p>
            </div>
        </a>
    </div>

    <script>
    var carouselItems = document.querySelectorAll('.carousel-item');
    var currentIndex = 0;
    var totalItems = carouselItems.length;
    var intervalTime = 10000;
    var autoplayTimer;

    function showItem(index) {
        // Masquer tous les items du carrousel
        for (var i = 0; i < totalItems; i++) {
            carouselItems[i].style.opacity = '0';
        }

        // Afficher l'item actuel
        carouselItems[index].style.opacity = '1';
    }

    function showNextItem() {
        currentIndex++;
        if (currentIndex >= totalItems) {
            currentIndex = 0;
        }
        showItem(currentIndex);
    }

    function showPrevItem() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = totalItems - 1;
        }
        showItem(currentIndex);
    }

    function startAutoplay() {
        autoplayTimer = setInterval(showNextItem, intervalTime);
    }

    function stopAutoplay() {
        clearInterval(autoplayTimer);
    }

    // Démarrer l'autoplay lorsque la page se charge
    window.addEventListener('load', function() {
        startAutoplay();
    });

    // Arrêter l'autoplay lorsqu'un utilisateur interagit avec le carrousel
    var carousel = document.querySelector('.carousel-wrapper');
    carousel.addEventListener('mouseover', function() {
        stopAutoplay();
    });

    carousel.addEventListener('mouseout', function() {
        startAutoplay();
    });

    // Ajouter des écouteurs d'événements aux flèches du carrousel
    var arrowPrev = document.querySelector('.arrow-prev');
    var arrowNext = document.querySelector('.arrow-next');

    arrowPrev.addEventListener('click', function(e) {
        e.preventDefault();
        showPrevItem();
    });

    arrowNext.addEventListener('click', function(e) {
        e.preventDefault();
        showNextItem();
    });
    </script>
    <script src="inc/burger-menu.js"></script>
</body>

</html>