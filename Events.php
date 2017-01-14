<?php
    session_start();

    if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    die;
}



?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>

        <script src="js/validacija.js" id="skripta"></script>
         <script src="js/carousel.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="app.css">
    <title>WT PROJEKAT</title>
</head>

<body onload="load()">
    
        <div class="home_user">
            <div class=row>
                <div class="col-4 col-m-6">
                    <a href="Index.php">
                        <img src="images/ufc_logo.png" >
                    </a>
                </div>
                </div>
                    
                   </div> 
  
   <div class = "navigation">
    <div class="row">
        <div class="col-13 col-m-6">
        <a class="nav-Prva" href="Index.php"  > Home </a>
        </div>
        <div class="col-13 col-m-6">
        <a class="nav-Prva" href="Events.php" > Events </a>
        </div>
        <div class="col-13 col-m-6">
        <a class="nav-Prva" href="Fighters.php" > Fighters </a>
        </div>
        <div class="col-13 col-m-6">
        <a class="nav-Prva" href="Contact.php" > Contact </a>
        </div>
        <div class="col-13 col-m-12">
        <a class="nav-Prva" href="login.php" > Login / Register</a>
        </div>
   
    </div>
</div>

    <div class="content">


 <div class="row">
        <div class="col-2"> </div>
        <div class="col-8">
            
            <figure>
                <img src="images/UFC_100.jpg" id="mainImage" alt="UFC 100">
                <figcaption id="mainImageCaption"> 
                        UFC 100
                </figcaption>

            </figure>
         </div>
        <div class="col-2"> </div>
    </div>

        <div class="row">
            <div class="col-12">
                <p>UFC events are separated into seven different formats: "Numbered" events, currently airing on pay-per-view, with some exceptions "UFC on Fox" events, currently airing on Fox "Fight Night" events, formerly aired on Spike, currently airing on Fox Sports 1, Fox Sports 2, or UFC Fight Pass "The Ultimate Fighter Finale" events, formerly aired on Spike and FX, currently airing on Fox Sports 1 or UFC Fight Pass "UFC on FX" events, formerly aired on FX "UFC on Fuel TV" events, formerly aired on Fuel TV "UFC Live on Versus" events, formerly aired on Versus</p>

                <p>Most of the "numbered" events have taken place on pay-per-view, though there have been a few exceptions for reasons such as tape-delay. Events such as UFC 72, which took place in Belfast, Northern Ireland, U.K., were sold on pay-per-view, but due to tape-delay, purchase rates were not as high as events that aired at a traditional starting time. As such, events taking part in significantly different timezones, including UFC 70, UFC 75, UFC 89, UFC 95, UFC 105, UFC 120, UFC 122, and UFC 138, were given a same-night airing in American primetime on Spike TV. </p>

                <p>istorically, the UFC has also aired preliminary fights prior to the main fight cards, either on television via Spike, FX, and Fuel TV, or online via Facebook and YouTube. Beginning in August 2013, starting with UFC Fight Night: Shogun vs. Sonnen, the UFC began airing non-PPV events on either Fox Sports 1 or Fox Sports 2. In January 2014, as part of the organization's global expansion, the UFC began airing various international events exclusively on their subscription-based digital network, UFC Fight Pass.</p>

                <p>In July 2009, the UFC held its unofficial 100th "numbered event"; however, officially, despite being called UFC 100, it was actually the 101st numbered event (not to mention the 133rd event overall). The UFC signed a deal with Fox Sports Net, after Fox agreed to broadcast one fight in June 2002, during its "All-Star Summer" that month. UFC 37 and 38 had already been scheduled and promoted, but as UFC 38 was the promotion's debut in the United Kingdom, they created UFC 37.5; an event that became the first ever mixed martial arts fight available on cable television.</p>

                <p>
                    UFC's first event, UFC 1, took place on November 12, 1993. Each UFC event contains several fights. Traditionally, every event starts off with a preliminary card followed by a main card, with the last fight being known as the main event.
                </p>

                <p>istorically, the UFC has also aired preliminary fights prior to the main fight cards, either on television via Spike, FX, and Fuel TV, or online via Facebook and YouTube. Beginning in August 2013, starting with UFC Fight Night: Shogun vs. Sonnen, the UFC began airing non-PPV events on either Fox Sports 1 or Fox Sports 2. In January 2014, as part of the organization's global expansion, the UFC began airing various international events exclusively on their subscription-based digital network, UFC Fight Pass.</p>
            </div>
        </div>

    </div>


 </div>
        
        
        <footer>
            ETF Sarajevo Web Tehnologije © All rights reserved
        </footer>


        
     
        <script src="js/carousel.js"></script>

        

</body>

</html>

        
