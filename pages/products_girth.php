<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Draupnir Danmark | Gjord</title>
        <?php include("../partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | gjord | kvalitet til islandske heste"/>
        <meta name="description" content="Gjord fra Draupnir i økovenlig tysk og italiensk kvalitetslæder - elastikgjord med god optimal komfort og rustfrie spænder - holdbart rideudstyr til islænder"/>
        <meta name="subject" content="Gjord fra Draupnir i økovenlig tysk og italiensk kvalitetslæder - elastikgjord med god optimal komfort og rustfrie spænder - holdbart rideudstyr til islænder"/>
    </head>
    <body onload="scrollToId()">
        <!-- Google Tag Manager (noscript) + ScrollToTop -->
        <?php include("../partials/body.php"); ?>
        <header>
            <?php include("../partials/header.php"); ?>
        </header>
        <main>
            <!-- product describtion and images -->
            <div class="product_grid_products">
                <div class="grid_container_gold_arrow">
                    <a href="../pages/products.php">
                        <h6 class="gold_arrow">&#10094;</h6>
                    </a>
                </div>
                <div class="grid_container_goback">
                    <a href="../pages/products.php">
                        <h6>Tilbage til produktoversigt</h6>
                    </a>
                </div>
                <div class="grid_container_diasshow">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img class="slide_img" alt="draupnir gjord til islandsk hest" src="../img/products/gjord_1.1.png"/>
                        </div>
                        <div class="mySlides fade">
                            <img class="slide_img" alt="draupnir gjord til islandsk hest" src="../img/products/gjord_1.2.png"/>
                        </div>
                        <div class="mySlides fade">
                            <img class="slide_img" alt="draupnir gjord til islandsk hest" src="../img/products/gjord_1.3.png"/>
                        </div>
                    </div>
                </div>
                <div class="grid_container_arrow_prew">
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                </div>
                <div class="grid_container_dots">
                    <div style="text-align: center">
                        <span class="dot dot3" onclick="currentSlide(1)"></span>
                        <span class="dot dot4" onclick="currentSlide(2)"></span>
                        <span class="dot dot5" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class="grid_container_arrow_next">
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="grid_container_product_text">
                    <img src="../img/sekundaer-black.svg" alt="draupnir danmark logo" class="logo_secondary_black"/>
                    <h2 class="product_heading"><b>Gjord</b></h2>
                    <p>Gjord fra Draupnir udført i samme lækre og holdbare læderkvalitet som de øvrige Draupnir-produkter. Læderet er italiensk og tysk og er garvet under miljøvenlige forhold. Gjorden har 2 gennemgående elastikbånd for optimal komfort for hesten. Polstringen er desuden syet med så få sømme som muligt for optimal komfort.
                        <br />Gjord og polstring kan nemt og enkelt skilles ad, så gjorden kan rengøres grundigt – også under elastikkerne. 
                        <br />
                        <br />Draupnir-gjorden kan bestilles hos Draupnir-forhandlere med følgende valgmuligheder:
                        <br />Længde på 35cm, 40cm, 45cm, 50cm eller 55cm
                        <br />Standardfarve sort, mørkebrun eller lysebrun
                    </p>
                    <h5 class="price_text">Vejledende udsalgspris</h5>
                    <h3 class="price">DKK 1.130,-</h3>
                    <a href="../pages/stores.php">
                        <h4 class="button button_red">Find forhandler</h4>
                    </a>
                </div>
            </div>
            <!-- related products -->
            <section class="related_products">
                <div class="wrapper">
                    <h2 class="product_heading white_text">Relaterede produkter</h2>
                    <div class="line product_line3"></div>
                    <div class="container">
                        <div class="filterDiv saddle_cover">
                            <img class="products_filter_img2" alt="draupnir sadelovertræk til islandsk hest" src="../img/products/sadelovertraek_1.png"/>
                            <h4>Sadelovertræk</h4>
                            <a href="../pages/poducts_saddle_cover.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv">
                            <img class="products_filter_img2" alt="draupnir sadel ASK til islandsk hest" src="../img/saddles/ask_1.1.png"/>
                            <h4>ASK</h4>
                            <a href="../pages/saddles_ask.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv webbers">
                            <img class="products_filter_img2" alt="draupnir webbers til islandsk hest" src="../img/products/webbers_1.png"/>
                            <h4>Webbers</h4>
                            <a href="../pages/products_webbers.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv girth orka">
                            <img class="products_filter_img2" alt="draupnir gjord ORKA til islandsk hest" src="../img/products/gjord_2.png"/>
                            <h4>Gjord ORKA</h4>
                            <a href="../pages/products_girth_orka.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <?php include("../partials/footer.php"); ?>
        </footer>
    </body>
</html>
