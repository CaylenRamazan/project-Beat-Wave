<?php
$toekomstige_datum = strtotime("2024-7-27 10:59:59");
$huidige_tijd = time();
$verschil = $toekomstige_datum - $huidige_tijd;
$dagen = floor($verschil / (60 * 60 * 24));
$uren = floor(($verschil % (60 * 60 * 24)) / (60 * 60));
$minuten = floor(($verschil % (60 * 60)) / 60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat Wave</title>
    <link rel="stylesheet" href="beatwavecss/p2beatwave.css?v=<?php echo time(); ?>">
</head>
<body>
   <h1>Home</h1>
   <?php include 'menubeatwaveincl.html' ?>
   <div class="bannerdiv">
        <img class="bannerfoto" src="beatwavefotos/liltjaybanner.avif" alt="lil tjay op een podium">
        <div id="countdown">Nog <?php
            echo "$dagen dagen, $uren uur, $minuten minuten";
            ?> tot BW '24
        </div>
        <div id="informatie-overlay-div">
            <div class="informatie-overlay">
                <div class="overlay-foto-div"><img src="beatwavefotos/polog.jpg" class="overlay-foto"></div>
                <p class="informatie-artiest-home">Polo G is een Amerikaanse rapper die in 2019 bekenheid kreeg met zijn singels Finer Things en Pop Out.<br>Dit jaar gaat dit rap talent performen op BeatWave.</p>
            </div>
            <div class="informatie-overlay">
                <div class="overlay-foto-div"><img src="beatwavefotos/ygmarley.jpg" class="overlay-foto"></div>
                <p class="informatie-artiest-home">YG Marley is de kleinzoon van Bob Marley die dit jaar door brak met zijn nummer Praise Jah in the Moonlight.<br>Dit jaar gaat de artiest met talentvolle genen performen op BeatWave.</p>
            </div>
        </div>
    </div>
    <h1 id=faq-hoofdtext>Veelgestelde Vragen</h1>
    <div id=faq-vragen>
    <a href="#" id="link-hidden-text1">Wanneer start de kaartverkoop</a>
    <div id="hidden-text1" class="hidden-text1">Nog even wachten dan maken we bekend wanneer de kaartverkoop start.</div>
    <hr style="height:1px;border-width:0;color:black;background-color:black">
    <a href="#" id="link-hidden-text2">Hoe oud moet je zijn voor Beatwave</a>
    <div id="hidden-text2" class="hidden-text2">Er is geen minimum leeftijd alleen moeten kinderen onder 16 jaar begeleid worden door omdat van minimaal 18 jaar oud.</div>
    <hr style="height:1px;border-width:0;color:black;background-color:black">
    <a href="#" id="link-hidden-text3">Waar is Beatwave</a>
    <div id="hidden-text3" class="hidden-text3">Dit jaar is Beatwave georganiseerd in het centrum van Rotterdam.</div>
    <hr style="height:0.5px;border-width:0;color:black;background-color:black">
    <a href="#" id="link-hidden-text4">Hoeveel stages zijn er</a>
    <div id="hidden-text4" class="hidden-text4">Er zijn 3 stages 1 main stage, 1 extra en 1 community stage waar kleine artiesten die zich aanmelden kunnen performen.</div>
    <hr style="height:1px;border-width:0;color:black;background-color:black">
    </div>
    
    <?php include 'beatwavefooter.html' ?>
    <script src="beatwavescript.js"></script>
</body>
</html>