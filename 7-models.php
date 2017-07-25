<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>7. Models</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/7-poster.png" data-setup="{}">
          
          <source src="movies/7/7.ogv" type='video/ogg' />
			<source src="movies/7/7.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/7/7.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/7-models.png" alt="">

     <!-- INSTRUKTIONER -->
    
   <p>Nu är det dags att börja definiera våra Models och därmed avgöra vad vi vill kunna spara i vår databas och hur den datan skall sparas. Vi kommer att utgå ifrån följande klassdiagram i skapandet av våra Models:</p>

   <img src="img/klassdiagram.png" class="mtv" alt=""> <br>

   <p>Vi kommer att börja med att implementera BlogPost-klassen, den som vad våra blogginlägg skall bestå av. </p> 

  <p class="headline">MODELS.PY</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="238"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 58 sek</span></a></div>
   <p>I Django så jobbar man oftast inte direkt mot databasen utan man gör det genom Djangos olika <i>fieldtypes</i>, eller fälttyper, som gör det smidigt att spara data på ett välformaterat sätt. Anledningen till att de heter fieldtypes är för att de kommer att dyka upp som olika typer av formulärfält i vårt adminsgränssnitt. Genom att välja en passande fälttyp till innehållet som vi vill spara i databasen så slipper vi allokera onödigt med utrymme i databasen vilket ökar prestandan av vår blogg. Vissa av fälttyperna kan även hjälp oss med validering på olika sätt vilket är smidigt.
</p>

<p>Vi börjar med att importera <code>models</code> från modulen <code>db</code>, därefter kan vi skapa vår klass.</p>

<script src="https://gist.github.com/simon-johansson/5326796.js"></script>

<p>Alla klasser i <i>models.py</i> måste ärva av Djangos Model-klass som vi når genom att ange <code>models.Model</code>. Vi får därmed tillgång till Djangos olika fälttyper. För vår BlogPost-klass vill vi använda oss av följande fälttyper:</p>

<p><code class="headline3">DateTimeField</code><span class="fixedWidth2">Gör det smidigt att spara datum och tid för våra inlägg. Kommer att representeras i from av en kalender i admingränssnittet.</span></p>

<p class="clear"><code class="headline3">CharField</code><span class="fixedWidth2" style="width:520px;">Passande för att spara kortare strängar som tex. namn eller titlar av olika slag. CharField-modulen kräver ett argument för maxantalet tecken som skall vara möjligt att ange.</span></p>

<p class="clear"><code class="headline3">TextField</code> <span class="fixedWidth2" style="width:520px;">Lämpligt för att  spara stora mängder text.</span></p>

<p>På <a href="https://docs.djangoproject.com/en/dev/ref/models/fields/">https://docs.djangoproject.com/en/dev/ref/models/fields/</a> hittar ni mer info om Djangos olika fieldtypes. Jag kan Jag kan verkligen rekommendera att kolla igenom den här delen av dokumentationen och att ni testar några av de övriga fälttyperna.</p>

<p class="headline">ADMIN.PY</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="414"><span data-title="&nbsp;Hoppa hit&nbsp;">6 m 54 sek</span></a></div>
   <p>För att kunna få tillgång till våra klassmodeller från admingränssnittet måste vi registrera dem i en fil vid namn <i>admin.py</i>. En sådan fil måste man skapa manuellt och den skall ligga i app-mappen.
</p>

<p>Följande kod skall anges i <i>admin.py</i>:</p>

<script src="https://gist.github.com/simon-johansson/5326800.js"></script>

<p>Nu borde du ha en mappstruktur som ser ut på följande sätt:</p>

<script src="https://gist.github.com/simon-johansson/a4e36a43d980fa86e978.js"></script>

<p class="headline">SYNKA DATABASEN IGEN</p>
  <div class="timestamp"><a href="" class="roll-link" data-time="489"><span data-title="&nbsp;Hoppa hit&nbsp;">8 m 9 sek</span></a></div>
   <p>Vi måste nu synka databasen igen. Det behövs för att vi måste skapa en ny tabell i databasen för vår nya klass som vi skapade i <i>models.py</i>. Annars har vi ingenstans att spara våra inlägg i databasen. 
</p>
<p>Vi synkar databasen på samma sätt som vi gjorde tidigare, dvs. genom att skriva <code>manage.py syndbd</code> i kommandoprompten  från projekmappen. Vi kan nu starta utveklingsservern, <code>manage.py runserver</code>, och surfa in på <code>127.0.0.1:8000/admin</code> för att se den nyskapade klassen. I nästa film skall vi försöka visa våra inlägg på index-sidan men för att det skall finnas något att visa så måste vi skapa några till inlägg, passa på att göra det nu. </p>

<fieldset>
  <legend>&nbsp;<span style="color:#E65555"> Skriv inga inlägg som du kommer att vilja spara </span>&nbsp;</legend>
          <p>Vi kommer i film nummer 9 att behöva ta bort vår databas och då kommer allt vi har sparat att försvinna, bara så du vet.</p>
</fieldset>

<?php endblock() ?>