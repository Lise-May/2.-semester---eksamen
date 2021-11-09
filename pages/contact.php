<!DOCTYPE html>

<html lang="da">
    <head>
        <title>Draupnir | Kontakt</title>
        <?php include("../partials/head.php"); ?>
        <meta name="title" content="Draupnir Danmark | kontakt | kvalitet til islandske heste"/>
        <meta name="description" content="Kontakt os vedr. spørgsmål på telefon/mobil/sms +4551949561, mail kontakt@draupnir.com eller find os på Facebook Draupnir Danmark - holdbart rideudstyr til islænder"/>
        <meta name="subject" content="Kontakt os vedr. spørgsmål på telefon/mobil/sms +4551949561, mail kontakt@draupnir.com eller find os på Facebook Draupnir Danmark - holdbart rideudstyr til islænder"/>
    </head>
    <body onload="scrollToId()">
        <!-- Google Tag Manager (noscript) + ScrollToTop -->
        <?php include("../partials/body.php"); ?>
        <header>
            <?php include("../partials/header.php"); ?>
        </header>
        <main>
            <!-- contact information -->
            <section class="contact_grid">
                <div class="white_space"></div>
                <div class="contact_information">
                    <div class="contact_wrapper">
                        <h1 class="contact_h1">Vi er klar til at hjælpe dig</h1>
                        <div class="line contact_line"></div>
                        <span class="contact_text">
                            <a href="https://goo.gl/maps/QionMWBkwZSLFn4k6" class="icon_link" target="_blank">
                                <img src="../img/pin.svg" class="contact_icons" alt="draupnir adresse kontaktinformation"/>Debelmosevej 3, 6900 Skjern</a>
                        </span>
                        <span class="contact_text contact_icon_spacing"><a href="tel:+45-5194-9561" class="icon_link">
                            <img src="../img/phone-call.svg" class="contact_icons" alt="draupnir telefon nummer kontaktinformation"/>+45-5194-9561</a>
                        </span>
                        <span class="contact_text contact_mail"><a href="mailto:kontakt@draupnir.com" class="icon_link">
                            <img src="../img/email.svg" class="contact_icons" alt="draupnir email kontaktinformation"/>kontakt@draupnir.com</a>
                        </span>
                        <span class="contact_text contact__facebook_icon_spacing"><a class="icon_link" href="https://www.facebook.com/draupnirdanmark" target="_blank">
                            <img src="../img/facebook-logo.svg" class="contact_icons" alt="draupnir facebook kontaktinformation"/>Draupnir Danmark</a>
                        </span>

                        <?php
                        $message_sent = false; //Den går ud fra at emailen ikke er sendt til at starte med
                            if(isset($_POST ['email']) && $_POST ['email'] != ''){ //Tester om der er en mail. Hvis emailen er udfyldt og ikke blank, gå til næste tjek
                                if( filter_var($_POST ['email'], FILTER_VALIDATE_EMAIL) ) { //Hvis emailen er valid (tejkker om email formatet er korekt ikke om mailen eksistere) så gå til neste step
                                    //sæt mailen op
                                    $userName = $_POST ['name'];
                                    $userEmail = $_POST ['email'];
                                    $messageSubject = $_POST ['subject'];
                                    $message = $_POST ['message'];
                                    //hvilken mail det skal sendes til
                                    $to = "sjombus2@gmail.com";
                                    $body = "";
                                    //Opsætning i mailen
                                    $body .="Fra: ".$userName. "\r\n";
                                    $body .="Email: ".$userEmail. "\r\n";
                                    $body .="Besked: ".$message. "\r\n";

                                    mail($to,$messageSubject,$body); //send mailen
                                    //hvis den sender mailen skal den gå en side tilbage / blive på siden
                                    $message_sent = true;
                                    echo "<div class='p mail_sent'>Din mail er nu sendt!</div>";
                                }
                            }
                        ?>
                        
                        <div class="send_mail_container">
                            <h2 class="send_mail_h2">Send os en mail</h2>
                            <div class="line send_mail_line"></div>
                            <form class="contact_form" action="../pages/contact.php" method="post">
                                <div class="send_mail_string">
                                    <label class="contact_lable" for="name">Navn</label>
                                    <input class="contact_input contact_input_underline" type="text" name="name" id="name" placeholder="Skriv dit fulde navn" tabindex="1" required>
                                </div>
            
                                <div class="send_mail_string">
                                    <label class="contact_lable" for="email">Mail</label>
                                    <input class="contact_input contact_input_underline" type="email" name="email" id="email" placeholder="Skriv din mail" tabindex="2" required>
                                </div>
                                <div class="send_mail_string">
                                    <label class="contact_lable" for="subject">Emne</label>
                                    <input class="contact_input contact_input_underline" type="text" name="subject" id="subject" placeholder="Skriv emnet eks. ''ORKA sadel''" tabindex="3" required>
                                </div>
                                <div class="send_mail_string">
                                    <label class="contact_lable" for="message">Besked</label>
                                    <textarea class="contact_input contact_input_message" name="message" id="message" placeholder="Skriv din besked her..." tabindex="4"></textarea>
                                </div>
                                <button class="button_red mail_button" type="submit" name="submit">Send mail</button>
                            </form>
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
