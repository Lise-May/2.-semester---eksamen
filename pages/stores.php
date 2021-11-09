<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Draupnir | Find forhandler</title>
        <?php include("../partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | find forhandler | kvalitet til islandske heste"/>
        <meta name="description" content="Find din nærmeste fysiske udstyrsforretning som forhandler Draupnir udstyr, få hjælp til sadeltilpasning og se prøvningsdage - holdbart rideudstyr til islænder"/>
        <meta name="subject" content="Find din nærmeste fysiske udstyrsforretning som forhandler Draupnir udstyr, få hjælp til sadeltilpasning og se prøvningsdage - holdbart rideudstyr til islænder"/>
        <link
            href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css"
            rel="stylesheet"
        />
        <script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
        <script src="../js/map.js" defer></script>
    </head>
    <body onload="scrollToId()">
        <!-- Google Tag Manager (noscript) + ScrollToTop -->
        <?php include("../partials/body.php"); ?>
        <header>
            <?php include("../partials/header.php"); ?>
        </header>
        <main>
            <section class="find_store">
                <h1 class="black_text store_h1">Find din forhandler i Danmark</h1>
                <div class="line store_line"></div>
                <div id="map"></div>
            </section>
        </main>
        <footer>
            <?php include("../partials/footer.php"); ?>
        </footer>
    </body>
</html>
