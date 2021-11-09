<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Draupnir Danmark | Produkter</title>
        <?php include("../partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | Draupnir produkter | kvalitet til islandske heste"/>
        <meta name="description" content="Øvrige produkter fra Draupnir i økovenlig kvalitetslæder til din islænder - Alt fra næserem, nakkestykke, webbers, gjord, kopfjern, longering, stigbøjler, tøjler"/>
        <meta name="subject" content="Øvrige produkter fra Draupnir i økovenlig kvalitetslæder til din islænder - Alt fra næserem, nakkestykke, webbers, gjord, kopfjern, longering, stigbøjler, tøjler"/>
    </head>
    <body onload="scrollToId()">
        <!-- Google Tag Manager (noscript) + ScrollToTop -->
        <?php include("../partials/body.php"); ?>
        <header>
            <?php include("../partials/header.php"); ?>
        </header>
        <main>
            <!-- product filter -->
            <div class="wrapper">
                <h1>Øvrige produkter</h1>
                <div class="line product_line1"></div>
                <div class="product_grid">
                    <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')">Vis alle</button>
                        <button class="btn" onclick="filterSelection('orka')">ORKA-serien</button>
                        <button class="btn" onclick="filterSelection('girth')">Gjord</button>
                        <button class="btn" onclick="filterSelection('gullet_iron')">Kopfjern</button>
                        <button class="btn" onclick="filterSelection('lunging')">Longering</button>
                        <button class="btn" onclick="filterSelection('headstall')">Nakkestykke</button>
                        <button class="btn" onclick="filterSelection('noseband')">Næserem</button>
                        <button class="btn" onclick="filterSelection('browband')">Pandebånd</button>
                        <button class="btn" onclick="filterSelection('whip')">Pisk</button>
                        <button class="btn" onclick="filterSelection('saddle_cover')">Sadelovertræk</button>
                        <button class="btn" onclick="filterSelection('saddle_bags')">Sadeltaske</button>
                        <button class="btn" onclick="filterSelection('stirrups')">Stigbøjler</button>
                        <button class="btn" onclick="filterSelection('reins')">Tøjler</button>
                        <button class="btn" onclick="filterSelection('webbers')">Webbers</button>
                    </div>
                </div>
                <div class="line product_line2"></div>
                <div class="container">
                    <div class="filterDiv saddle_cover orka">
                        <img class="products_filter_img2" alt="draupnir sadelovertræk ORKA til islandsk hest" src="../img/products/sadelovertraek_2_orka_1.png"/>
                        <h4>Sadelovertræk ORKA</h4>
                        <a href="../pages/products_saddle_cover_orka.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv saddle_cover">
                        <img class="products_filter_img2" alt="draupnir sadelovertræk til islandsk hest" src="../img/products/sadelovertraek_1.png"/>
                        <h4>Sadelovertræk</h4>
                        <a href="../pages/poducts_saddle_cover.php">
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
                    <div class="filterDiv girth">
                        <img class="products_filter_img2" alt="draupnir gjord til islandsk hest" src="../img/products/gjord_1.1.png"/>
                        <h4>Gjord</h4>
                        <a href="../pages/products_girth.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv webbers orka">
                        <img class="products_filter_img2" alt="draupnir webbers ORKA til islandsk hest" src="../img/products/webbers_2_orka.png"/>
                        <h4>Webbers ORKA</h4>
                        <a href="../pages/products_webbers_orka.php">
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
                    <div class="filterDiv stirrups">
                        <img class="products_filter_img2" alt="draupnir stigbøjler til islandsk hest" src="../img/products/stigboejler_1.silber.png"/>
                        <h4>Stigbøjler</h4>
                        <a href="../pages/products_stirrups.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv gullet_iron">
                        <img class="products_filter_img2" alt="draupnir kopfjern til SMART til islandsk hest" src="../img/products/kopfjern_1.png"/>
                        <h4>Kopfjern</h4>
                        <a href="../pages/products_gullet_iron.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv whip">
                        <img class="products_filter_img2" alt="draupnir pisk til islandsk hest" src="../img/products/pisk_1.png"/>
                        <h4>Pisk</h4>
                        <a href="../pages/products_whip.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv saddle_bags orka">
                        <img class="products_filter_img2" alt="draupnir sadeltaske ORKA til islandsk hest" src="../img/products/sadeltaske_1.png"/>
                        <h4>Sadeltaske ORKA</h4>
                        <a href="../pages/products_saddle_bags.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv lunging">
                        <img class="products_filter_img2" alt="draupnir indspændingstøjler til islandsk hest" src="../img/products/indspandingstojler_1.png"/>
                        <h4>Indspændingstøjler</h4>
                        <a href="../pages/products_lunging_rains.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv lunging">
                        <img class="products_filter_img2" alt="draupnir longegjord til islandsk hest" src="../img/products/longegjorde_2.png"/>
                        <h4>Longegjord</h4>
                        <a href="../pages/products_lunging_girth.php">
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
                    <div class="filterDiv reins orka">
                        <img class="products_filter_img2" alt="draupnir tøjler læder ORKA til islandsk hest" src="../img/products/toejler-orka_laeder_3.png"/>
                        <h4>Tøjler læder ORKA</h4>
                        <a href="../pages/products_rains_orka_leather.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv reins orka">
                        <img class="products_filter_img2" alt="draupnir tøjler gummi ORKA til islandsk hest" src="../img/products/toejler_gummi_orka.png"/>
                        <h4>Tøjler gummi ORKA</h4>
                        <a href="../pages/products_rains_orka_rubber.php">
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
                    <div class="filterDiv headstall orka">
                        <img class="products_filter_img2" alt="draupnir nakkestykke ORKA til islandsk hest" src="../img/products/nakkestykke_orka_2.1.png"/>
                        <h4>Nakkestykke ORKA</h4>
                        <a href="../pages/products_headstall_orka.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv headstall">
                        <img class="products_filter_img2" alt="draupnir nakkestykke til islandsk hest" src="../img/products/nakkestykke_standard_1.png"/>
                        <h4>Nakkestykke</h4>
                        <a href="../pages/products_headstall.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband orka">
                        <img class="products_filter_img" alt="draupnir kombineret næserem ORKA til islandsk hest" src="../img/products/kombineret-næserem-orka_1.png"/>
                        <h4>Kombineret næserem<br />ORKA</h4>
                        <a href="../pages/products_noseband_combined_orka.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband orka">
                        <img class="products_filter_img" alt="draupnir hannoveransk næserem ORKA til islandsk hest" src="../img/products/hannoveransk_næsere_-orka_2.png"/>
                        <h4>Hannoveransk<br />næserem ORKA</h4>
                        <a href="../pages/products_noseband_drop_orka.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir engelsk næserem swarovski til islandsk hest" src="../img/products/engelsk_naeserem_swarovski_3.1.png"/>
                        <h4>Engelsk næserem<br />SWAROVSKI</h4>
                        <a href="../pages/products_noseband_cavesson_swarovski.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir kombineret næserem swarovski til islandsk hest" src="../img/products/kombineret_næserem_swarovski_4.1.png"/>
                        <h4>Kombineret næserem<br />SWAROVSKI</h4>
                        <a href="../pages/products_noseband_combined_swarovski.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir hannoveransk næserem swarovski til islandsk hest" src="../img/products/hannoveransk_næserem_swarovski_5.1.png"/>
                        <h4>Hannoveransk<br />næserem SWAROVSKI</h4>
                        <a href="../pages/products_noseband_drop_swarovski.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img2" alt="draupnir kombineret næserem til islandsk hest" src="../img/products/kombineret_næserem_6.png"/>
                        <h4>Kombineret næserem</h4>
                        <a href="../pages/products_noseband_combined.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img2" alt="draupnir engelsk næserem til islandsk hest" src="../img/products/engelsk_næserem_7.png"/>
                        <h4>Engelsk næserem</h4>
                        <a href="../pages/products_noseband_cavesson.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir hannoveransk næserem til islandsk hest" src="../img/products/hannoveransk_næserem_8.png"/>
                        <h4>Hannoveransk<br />næserem</h4>
                        <a href="../pages/products_noseband_drop.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir kombineret næserem foret til islandsk hest" src="../img/products/kombineret_næserem_sort_for_9.png"/>
                        <h4>Kombineret næserem<br />FORET</h4>
                        <a href="../pages/products_noseband_combined_padding.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir hannoveransk næserem foret til islandsk hest" src="../img/products/hannoveransk_næserem_med_sort_for_1.0.png"/>
                        <h4>Hannoveransk<br />næserem FORET</h4>
                        <a href="../pages/products_noseband_drop_padding.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir kombineret/engelsk næserem justerbar til islandsk hest" src="../img/products/kombineret_engelsk_næserem_justerbar_12.png"/>
                        <h4>Kombineret/engelsk<br />næserem JUSTERBAR</h4>
                        <a href="../pages/products_noseband_combined_adjustable.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir hannoveransk næserem justerbar til islandsk hest" src="../img/products/hannoveransk_næserem_justerbar_11.png"/>
                        <h4>Hannoveransk<br />næserem JUSTERBAR</h4>
                        <a href="../pages/products_noseband_drop_adjustable.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir engelsk næserem med dekorstribe til islandsk hest" src="../img/products/engelsk_næserem_dekorstribe_13.png"/>
                        <h4>Engelsk næserem<br />DEKORSTRIBE</h4>
                        <a href="../pages/products_noseband_cavesson_decor.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir kombineret næserem med dekorstribe til islandsk hest" src="../img/products/kombineret_næserem_dekorstribe_14.png"/>
                        <h4>Kombineret næserem<br />DEKORSTRIBE</h4>
                        <a href="../pages/products_noseband_combined_decor.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv noseband">
                        <img class="products_filter_img" alt="draupnir næsestykke til justerbar næserem til islandsk hest" src="../img/products/naesestykke_til_justerbar_næsebånd_15.1.png"/>
                        <h4>
                            Næsestykke til<br />justerbar næserem
                        </h4>
                        <a href="../pages/products_noseband_nosepiece.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                    <div class="filterDiv browband">
                        <img class="products_filter_img2" alt="draupnir pandebånd til islandsk hest" src="../img/products/pandeband_1.png"/>
                        <h4>Pandebånd</h4>
                        <a href="../pages/products_brow_band.php">
                            <h5 class="products_filter_btn">LÆS MERE</h5>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include("../partials/footer.php"); ?>
        </footer>
    </body>
</html>
