<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Draupnir Danmark | Hjem</title>
        <?php include("partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | forside | kvalitet til islandske heste"/>
        <meta name="description" content="Dansk distributør af kvalitetsprodukter til islandske heste - Find fysisk forhandler af ASK, EMBLA, ORKA, SP, VILJE, ELLE og SMART sadel og udstyr til islænder"/>
        <meta name="subject" content="Dansk distributør af kvalitetsprodukter til islandske heste - Find fysisk forhandler af ASK, EMBLA, ORKA, SP, VILJE, ELLE og SMART sadel og udstyr til islænder"/>
    </head>
    <body onload="scrollToId()">
        <!-- Google Tag Manager (noscript) + ScrollToTop -->
        <?php include("partials/body.php"); ?>
        <header>
            <?php include("partials/header.php"); ?>
        </header>
        <main>
            <!-- hero video -->
            <section class="hero_video_section">
                <div class="content_wrapper">
                    <h1 class="white_text hero_h1">Draupnir Danmark</h1>
                    <p class="white_text hero_text">Dansk distributør af Draupnir kvalitetsprodukter til islandske heste</p>
                    <a class="hero_section_button" href="pages/saddles.php">Oplev Draupnir</a>
                    <video playsinline src="video/draupnir_index_hero_mobile.mp4" class="hero_video" autoplay muted loop></video>
                </div>
            </section>
            <!-- about us section -->
            <section class="index_about_section">
                <div class="grid-container">
                    <div class="h2_area">
                        <h2 class="white_text index_about_h2">Hvem er vi</h2>
                        <div class="line index_about_line"></div>
                    </div>
                    <div class="img_area">
                        <img class="index_about_img" src="img/hvemervi_home.webp" alt="søren og wibeke madsen draupnir danmark"/>
                    </div>
                    <div class="p_area">
                        <p class="white_text index_about_p">
                            Draupnir Danmark er din danske distributør af produkter fra det norske brand Draupnir.
                            <br/><br/>
                            Draupnir Danmark er ejet og drevet af Wibeke og Søren Madsen, Debelmose isheste. Draupnir Danmark fungerer primært som mellemled mellem danske forhandlere af Draupnir rideudstyr og virksomheden Draupnir Norge. Men Draupnir Danmark bestræber sig også på, at imødekomme dig som privatkunde, der gerne vil vide alt om Draupnir
                        </p>
                    </div>
                    <div class="button_area">
                        <a class="button_black index_about_button" href="pages/about_draupnir.php">LÆS MERE</a>
                    </div>
                </div>
            </section>
            <!-- product section -->
            <section class="index_product_section">
                <div class="alignment_wrapper">
                    <h2 class="text_black">Se vores produkter</h2>
                    <div class="line index_product_line"></div>
                </div>
                <div class="product_article_wrapper">
                    <article class="product_article">
                        <div class="layer"></div>
                        <img class="index_product_img" src="../img/saddles/orka_4.1.png" alt="sadel draupnir ORKA"/>
                        <h4 class="index_product_h4">Sadel udvalg</h4>
                        <a href="/pages/saddles.php" class="link_button_anchor white_text">SE MERE</a>
                    </article>
                    <article class="product_article">
                        <div class="layer"></div>
                        <img class="index_product_img" src="../img/index_ovrig_udstyr.png" alt="øvrigt draupnir udstyr"/>
                        <h4 class="index_product_h4">Øvrige produkter</h4>
                        <a href="/pages/products.php" class="link_button_anchor white_text">SE MERE</a>
                    </article>
                </div>
            </section>
            <!-- guidance section -->
            <section class="index_guidance_section">
                <div class="alignment_wrapper">
                    <h2 class="black_text">Har du brug for vejledning?</h2>
                    <div class="line index_guidance_line"></div>
                </div>
                <div class="guidance_article_wrapper">
                    <article class="index_guidance_article">
                        <img class="index_guidance_img" src="../img/types.webp" alt="draupnirs forskellige sadeltyper"/>
                        <h4 class="index_guidance_h4">Sadeltyper</h4>
                        <a class="link_button_anchor white_text guidance_link_anchor" href="../pages/guidance.php#types">LÆS MERE</a>
                    </article>
                    <article class="index_guidance_article">
                        <img class="index_guidance_img" src="img/size.webp" alt="sadelstørrelse vejledning"/>
                        <h4 class="index_guidance_h4">Størrelsesguide</h4>
                        <a class="link_button_anchor white_text guidance_link_anchor" href="../pages/guidance.php#size">LÆS MERE</a>
                    </article>
                    <article class="index_guidance_article">
                        <img class="index_guidance_img" src="../img/bom.webp" alt="omstopning og reperation information"/>
                        <h4 class="index_guidance_h4">Latex- & uldstopning</h4>
                        <a class="link_button_anchor white_text guidance_link_anchor" href="../pages/guidance.php#panels">LÆS MERE</a>
                    </article>
                    <article class="index_guidance_article">
                        <img class="index_guidance_img" src="../img/pleje.webp" alt="vedligeholdelse af sadel vejledning"/>
                        <h4 class="index_guidance_h4">Vedligeholdelse & garanti</h4>
                        <a class="link_button_anchor white_text guidance_link_anchor" href="../pages/guidance.php#maintence">LÆS MERE</a>
                    </article>
                </div>
            </section>
            <!-- facebook & instagram widget -->
            <div class="widget_background">
                <div class="widget_grid-container">
                    <section class="facebook_widget_grid">
                        <a href="https://www.facebook.com/draupnirdanmark" target="_blank">
                            <h4 class="white_text widget_text">Følg os på vores Facebook-side:<br>Draupnir Danmark</h4>
                        </a>
                        <iframe class="facebook_widget" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdraupnirdanmark&tabs=timeline&width=310&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </section>
                    <section class="instagram_widget_grid">
                        <a href="https://www.instagram.com/draupnir.no/" target="_blank">
                            <h4 class="white_text widget_text">Følg den norske Instagram:<br>Draupnir.no</h4>
                        </a>
                        <script src="https://snapwidget.com/js/snapwidget.js"></script>
                        <iframe src="https://snapwidget.com/embed/941782" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
                    </section>
                </div>
            </div>
        </main>
        <footer>
            <?php include("partials/footer.php"); ?>
        </footer>
    </body>
</html>
