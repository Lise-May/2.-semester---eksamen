<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Draupnir Danmark | Longegjord</title>
        <?php include("../partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | longegjord | kvalitet til islandske heste"/>
        <meta name="description" content="Longegjord med spænder og ringe i rustfrit stål - longeudstyr i økovenlig tysk og italiensk kvalitetslæder til longering - holdbart rideudstyr til islænder"/>
        <meta name="subject" content="Longegjord med spænder og ringe i rustfrit stål - longeudstyr i økovenlig tysk og italiensk kvalitetslæder til longering - holdbart rideudstyr til islænder"/>
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
                            <img class="slide_img" alt="lunging girth draupnir" src="../img/products/longegjorde_2.png"/>
                        </div>
                        <div class="mySlides fade">
                            <img class="slide_img" alt="luning equipment draupnir" src="../img/products/longeringssaet_3.png"/>
                        </div>
                    </div>
                </div>
                <div class="grid_container_arrow_prew">
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                </div>
                <div class="grid_container_dots">
                    <div style="text-align: center">
                        <span class="dot dot10" onclick="currentSlide(1)"></span>
                        <span class="dot dot9" onclick="currentSlide(2)"></span>
                    </div>
                </div>
                <div class="grid_container_arrow_next">
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="grid_container_product_text">
                    <img src="../img/sekundaer-black.svg" alt="draupnir danmark logo" class="logo_secondary_black"/>
                    <h2 class="product_heading"><b>Longegjord</b></h2>
                    <p>Longegjord fra Draupnir tilpasset islandshesten. Longegjorden er i samme lækre og holdbare læderkvalitet som de øvrige Draupnir-produkter. 
                        <br />Læderet er italiensk og tysk og er garvet under miljøvenlige forhold. Draupnir longegjord kan bestilles hos Draupnir-forhandlere med følgende valgmuligheder: 
                        <br />Uden eller med dobbeltringe øverst
                    </p>
                    <h5 class="price_text">Vejledende udsalgspris</h5>
                    <h3 class="price">DKK 2500,-</h3>
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
                        <div class="filterDiv lunging">
                            <img class="products_filter_img2" alt="draupnir indspændingstøjler til islandsk hest" src="../img/products/indspandingstojler_1.png"/>
                            <h4>Indspændingstøjler</h4>
                            <a href="../pages/products_lunging_rains.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv lunging">
                            <img class="products_filter_img2" alt="draupnir longesæt til islandsk hest" src="../img/products/longeringssaet_3.png"/>
                            <h4>Longesæt</h4>
                            <a href="../pages/products_lunging_equipment.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv reins">
                            <img class="products_filter_img2" alt="draupnir tøjler læder til islandsk hest" src="../img/products/tojler_laeder_3.1.png"/>
                            <h4>Tøjler læder</h4>
                            <a href="../pages/products_rains_leather.php">
                                <h5 class="products_filter_btn">LÆS MERE</h5>
                            </a>
                        </div>
                        <div class="filterDiv reins">
                            <img class="products_filter_img2" alt="draupnir tøjler gummi til islandsk hest" src="../img/products/toejler_1_gummi.png"/>
                            <h4>Tøjler gummi</h4>
                            <a href="../pages/products_rains_rubber.php">
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
