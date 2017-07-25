<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>8. Visa Inlägg</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/8-poster.png" data-setup="{}">
          
          <source src="movies/8/8.ogv" type='video/ogg' />
			<source src="movies/8/8.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/8/8.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="8-visainlagg.png" alt="">

     <!-- INSTRUKTIONER -->

    <p>Likt flera andra ramverk för att skapa dynamiska webbsidor så bygger django på designmönstret MVC (Model View Controller). I django kallas det däremot för MTV (Model Template View) istället, men det är i praktiken samma upplägg. Och i grunder går det ut på att dela upp de centrala delarna av ramverket för att underlätta designprocessen på ett antal sätt.</p>

    <p class="headline">Model</p>
    <p>Hanterar data och skriver till databasen. Svarar på frågan; <i>Vad har vi för data att arbeta med?</i></p>

    <p class="headline">Template</p>
    <p>Presenterar data för användaren. Svarar på frågan; <i>Hur ska vi presentera vår data?</i></p>

    <p class="headline">View</p>
    <p>Hanterar användarens förfrågningar (requests)  och anropar resurser för att svara på dem. Utgör navet i ramverket. Svarar på frågan; <i>Vilken data skall vi visa för användaren?</i></p>

    <p class="headline">Från request till response</p>
    <p>En väldigt förenklad förklaring till vad som händer när en request, eller förfrågan, når vår blogg skulle kunna se ut så här:</p>

    <p><b>1.</b> Urls.py är den första anhalten kan man säga för en request. Här avgörs vilken vy som skall få svara på requseten</p>

    <p><b>2.</b> I views avgörs vilken information som vi skall presentera för användaren. När någon navigerar in på vår startsida tex. så kanske vi vill visa våra senaste blogg-inlägg.</p>

    <p><b>3.</b> Views kommunicerar i sin tur med models som hanterar vår data. Hämtar den data vi vill ha från databasen, i vårt fall våra senaste blogginlägg, och skickar tillbaka den till views.</p>

    <p><b>4.</b> Views hanterar datan och sätter namn den som vi sedan kan använda oss av när vi skall avgöra hur datan skall presenteras, och det gör vi i template.</p>

    <p><b>5.</b> I template avgör vi var på webbsidan som våra blogginlägg skall visas, hur många inlägg som skall visas mm. Allt som har med presentationen att göra.</p>
    
   <p> Det här är den bilden som jag skulle vilja att ni har den här bilden i bakhuvudet när ni arbetar med projektet. Gå tillbaka till den här om ni blir osäkra på hur allt hänger ihop.</p>

   <img src="MTV.png" class="mtv" alt="">
<?php endblock() ?>