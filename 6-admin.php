<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>6. Introduktion till Djangos medföljande administrationsgränssnitt</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/6-poster.png" data-setup="{}">
          
          <source src="movies/6/6.ogv" type='video/ogg' />
			<source src="movies/6/6.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/6/6.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/6-admin.png" alt="">
<p>
  Vi ska i den filmen gå igenom vad vi behöver göra för att få tillgång till Djangos medföljande administrationsgränssnitt. Admingränssnittet är enligt många en av Djangos starkaste sidor och gör det superenkelt att spara och ändra data i vår databas.</p>

  <p class="headline">Settings.py</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="32"><span data-title="&nbsp;Hoppa hit&nbsp;">32 sek</span></a></div>
<!-- <div class="timestamp"><a href="" class="roll-link" data-time="153"><span data-title="&nbsp;Hoppa hit&nbsp;">???</span></a></div> -->
  <p>Vi börjar med att öppna <i>settings.py</i>. Admin-gränssnittet är en app, och precis som alla andra appar så måste den stå angiven under <code>INSTALLED_APPS</code> om vi vill kunna använda den. Smidigt nog har Django redan löst det åt oss, vi behöver bara ta bort kommenteringen (alla rader kod som börjar med en <code>#</code> är en kommentar och kommer inte tas hänsyn till av Python/Django).</p>
  <p>Följande rad skall avkommenteras:</p>

  <script src="https://gist.github.com/simon-johansson/5135148.js"></script>

  <p class="headline">Urls.py</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="57"><span data-title="&nbsp;Hoppa hit&nbsp;">57 sek</span></a></div>
<!-- <div class="timestamp"><a href="" class="roll-link" data-time="153"><span data-title="&nbsp;Hoppa hit&nbsp;">???</span></a></div> -->
  <p>Vi måste här importera admin-gränssnittet men precis som i <i>settings.py</i> har Django radan angivit allt som krävs, vi behöver bara ta bort kommenteringarna från följande rader: </p>

  <script src="https://gist.github.com/simon-johansson/5135162.js"></script>

    <p>Vi behöver även en url som leder oss till admin-gränssnittet. Vi avkommenterar därför även följande rad under <i>urlpatterns</i>-variablen:</p>

    <script src="https://gist.github.com/simon-johansson/5135164.js"></script>

  <p class="headline">Skapa en superanvändare</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="73"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 13 sek</span></a></div>
<!-- <div class="timestamp"><a href="" class="roll-link" data-time="153"><span data-title="&nbsp;Hoppa hit&nbsp;">???</span></a></div> -->
  <p>För att kunna logga in på admingränssnittet så måste vi skapa en <i>superanvändare</i>. Men för att kunna skapa en sådan så måste vi först skapa vår databas. Anledningen till detta är att vi måste kunna spara information om användaren, bl.a. användarnamn och lösenord, i databasen. Jag kommer att beskriva mer i detalj vad en databas är och hur en sådan är uppbyggd i en annan film. Vi skapar vår databas ifrån kommandoprompten/terminalen genom att anropa <code>manage.py syncdb</code></p>

  <p>Du kommer att få frågan om du vill skapa en <i>superanvändare</i>, skriv <code>yes</code> och tryck på enter. Du kommer sedan att bli ombedd att ange ett <i>användarnamn</i>, <i>email-adress</i> och <i>lösenord</i>. </p>

  <p>Databasen har nu skapats enligt de riktlinjer som vi angav i den tredje filmen, den finns nu att hitta i projektmappen. Jag kommer i nästkommande filmer att ta upp hur vår databasen är uppbyggd lite mer i detalj.</p>

  <p class="headline">Börja administrera!</p>
<div class="timestamp"><a href="" class="roll-link" data-time="191"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 11 sek</span></a></div>
  <p>Vi kan nu starta utvecklingsservern och surfa in på <code>http://127.0.0.1:8000/admin/</code>. Skriv in användaruppgifterna som du angav tidigare. Det finns för tillfället inte så mycket att administrera eftersom att vi inte har skrivit nått i vår <i>models.py</i> än men det skall vi ändra på i nästa film.</p>

<?php endblock() ?>