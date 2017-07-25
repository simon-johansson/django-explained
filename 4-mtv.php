<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>4. Model Template View - Från request till response</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/4-poster.png" data-setup="{}">
          
          <source src="movies/4/4.ogv" type='video/ogg' />
			     <source src="movies/4/4.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/4/4.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/4-mtv.png" alt="">

     <!-- INSTRUKTIONER -->

    <p>Likt flera andra ramverk för att skapa dynamiska webbsidor så bygger Django på designmönstret MVC (Model View Controller). I Django kallas det däremot för MTV (Model Template View) istället, men det är i praktiken samma upplägg. Och i grunder går det ut på att dela upp de centrala delarna av ramverket för att underlätta designprocessen på ett antal sätt.</p>

    <p class="headline">Model</p>
    <p>Hanterar logiken och datan som gör vår sida unik och ansvarar för att kommunicera med databasen. Svarar på frågorna; <i>Hur skall data lagras i databasen samt vad har vi för data lagrad där just nu?</i></p>

    <p class="headline">Template</p>
    <p>Sköter hur datan skall presenteras för användaren. Som namnet antyder så skapar vi mallar för hur vi vill att datan som vi har lagrad i databasen skall visas på våra olika sidor. Svarar på frågan; <i>Hur ska vi presentera vår data?</i></p>

    <p class="headline">View</p>
    <p>Hanterar användarens förfrågningar (requests)  och anropar resurser för att svara på dem. Utgör navet i ramverket. Svarar på frågorna; <i>Ska data hämtas från eller sparas till databasen? Vilken data skall hämtas/sparas?</i></p>

    <p class="headline">Från request till response</p>
    <p>En väldigt förenklad förklaring till vad som händer när en request, eller förfrågan, når vår blogg skulle kunna se ut så här:</p>

    <p><b class="headline headline2">1.</b> <span class="fixedWidth">Urls.py är den första anhalten för en request. Här avgörs vilken vy som skall få svara på requseten</span></p>

    <p class="clear"><b class="headline headline2">2.</b> <span class="fixedWidth">I views avgörs vad vi skall göra med requesten beroände på vad det är för typ av request. Vi kommer antingen att hämta viss information från databasen, en så kallad GET-request, eller skriva något nytt till databasen, en POST-request.</span></p>

    <p class="clear"><b class="headline headline2">3.</b> <span class="fixedWidth">Views kommunicerar i sin tur med models som hanterar vår data. Hämtar den data vi vill ha, eller lagrar ny data till databasen, och skickar tillbaka den till views.</span></p>

    <p class="clear"><b class="headline headline2">4.</b> <span class="fixedWidth">Views hanterar datan och skickar den sedan vidare till rätt presentationsmall, eller template.</span></p>

    <p class="clear"><b class="headline headline2">5.</b> <span class="fixedWidth">I template avgör vi hur datan skall presenteras för användaren, dvs. själva sidan som användaren ser.</span></p>
    
   <p class="clear"> Ha den här bilden i bakhuvudet när ni arbetar med projektet. Gå tillbaka till den om ni blir osäkra på hur allt hänger ihop.</p>

   <img src="img/MTV.png" class="mtv" alt="">
<?php endblock() ?>