<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>9. Främmande nyckel</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/9-poster.png" data-setup="{}">
          
          <source src="movies/9/9.ogv" type='video/ogg' />
			<source src="movies/9/9.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/9/9.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/9-frammande-nyckel2.png" alt="">

     <!-- INSTRUKTIONER -->

<p>Vi skall nu implementera User-klassen ur klassdiagrammet. Som jag nämnde tidigare så får vi hjälp av Django att göra detta då vi kan använda oss av inställningarna som finns sparade för superanvändaren. Vi vill även skapa en <i>many-to-one</i> relation mellan User- och BlogPost-klassen, dvs. att en användare kan stå angiven som skapare för flera blogginlägg.</p>

<img src="img/klassdiagram.png" class="mtv" alt=""> <br>

<p class="headline">MODELS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="45"><span data-title="&nbsp;Hoppa hit&nbsp;">45 sek</span></a></div>

<p>Vi börjar med att amportera <code>User</code> från djangos <code>auth</code>-modulen.</p>

<script src="https://gist.github.com/simon-johansson/5333555.js"></script>

<fieldset>
<legend ><p>&nbsp;<b>auth = authentication</b>&nbsp;</p></legend>
  <p>Auth-modulen utgör Djangos inbyggda användarautentiseringssystem. Den hanterar användarkonton, grupper, tillstånd och cookie-baserade användarsessioner. Modulen hjälper oss med både autentisering och befogenhetshantering. Kortfattat så handlar autentisering om att verifiera att en användare faktiskt är den som hen påstår sig att vara, och befogenhetshantering hjälper oss att avgöra vad en autentiserad användare får göra. Kolla in: <a href="https://docs.djangoproject.com/en/dev/topics/auth/">https://docs.djangoproject.com/en/dev/topics/auth/</a>
</p>
</fieldset>

<p>Inuti <code>BlogPost</code>-klassen definierar vi sedan en <code>author</code>-variabel och sparar i den vilken <code>User</code> som har skapat inlägget. Vi gör detta genom att använda oss av kommandot <code>ForeignKey</code> som skapar en relation mellan inlägget och dess skapare. Det kommer nu att bli möjligt att härleda ett inlägg till en viss användare men också att hämta alla inläggen som en viss användare har skapat.</p>

<script src="https://gist.github.com/simon-johansson/5333557.js"></script>

<p class="headline">INDEX.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="95"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 35 sek</span></a></div>

<p>Vi vill här använda oss av User-klassen för att skriva ut för- och efternamn på superanvändaren som skapat inläggen. Vi byter därför ut den sista raden inuti for-loopen till:</p>

<script src="https://gist.github.com/simon-johansson/5333559.js"></script>

<p>Tänk på att du måste ange för- och efternamn för din superanvändare i admin-gränssnittet för att det här skall finnas något att skriva ut. Om du inte har angivit något namn för din superanvändare kommer du inte få något felmeddelande i templaten. Django kommer då helt enkelt bara att hoppa över <code>first_name</code>- och <code>last_name</code>-variablerna </p>

<p class="headline">ÄNDRINGAR I MODELS = DJANGO BLIR SUR</p>
<div class="timestamp"><a href="" class="roll-link" data-time="139"><span data-title="&nbsp;Hoppa hit&nbsp;">2 m 18 sek</span></a></div>

<p>Om vi nu försöker att synka om databasen, för att uppdatera tabellerna gällande vår BlogPost-klass, så kommer vi att stöta på problem. Anledningen till det är för att Django inte gillar när vi redan har fyllt tabeller i databasen med information, och sedan lägger till kolumner/rader i dessa tabeller. Django vet då inte hur den skall hantera de tomma kolumnerna/raderna för de klassinstanser som vi redan har skapat. I flera andra ramverk är det möjligt att automatiskt fylla dessa kolumner/rader med ett givet värde, detta kallas för <i>databasmigrering</i>. Att det inte finns någon möjlighet att utföra databasmigreringar i Django, utan att behöva ta hjälp av tredjeparsapplikationer, är en av de svagaste sidorna i ramverket. Django-applikationen <a href="http://south.aeracode.org/">South</a> tillför dock denna funktionalitet och har blivit de facto standard inom Django-utveckling.

<fieldset>
<legend ><p>&nbsp;<b>kickstarter FTW!</b>&nbsp;</p></legend>
<p>Ett <a href="http://www.kickstarter.com/projects/andrewgodwin/schema-migrations-for-django?ref=search">kickstarter-projekt</a> för att finansiera just detta tillägg till Django avslutades nyligen, vilket betyder att vi redan i version 1.6 - som kommer att släppas senare i år – kommer att kunna utföra databasmigreringar utan att behöva använda tredjepartsapplikation.
</p>
</fieldset>

<p>Det lättaste sättet att komma runt detta problem när vi fortfarande arbetar med <i>Sqlite3</i> är att helt enkelt ta bort databasen och skapa en ny. Problemet med detta sätt att arbeta är att allt som vi har sparat förvinner, detta inkluderar informationen om våra superanvändare. </p>

<p>Databasen ligger i projekt-mappen, har filändelsen <i>.db</i> och heter <i>database</i> (förutsatt att du döpte den till samma sak som jag gjorde i film nummer tre). Ta bort denna fil och kör därefter kommandot <code>manage.py syncdb</code> på nytt. Tänk dock på att alla inläggen som du har skapat kommer att försvinna, bli därför inte förvånad om det är tomt när du surfar in på din <i>index.html</i>.</p>

<?php endblock() ?>