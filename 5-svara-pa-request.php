<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>5. Svara på request</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/5-poster.png" data-setup="{}">

			<source src="movies/5/5.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/5/5.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/5-svara-pa-req.png" alt="">

<p>Vi skall nu ta emot och svara på en request. För att inte göra det allt för mastigt nu i början så kommer vi att fuska lite och hoppa över vår <i>Model</i>. Vi kommer istället att skapa innehållet direkt i vår <i>View</i>. Flödet från request till response kommer att se ut på följande sätt:</p>
<img src="img/TV.png" class="mtv" alt="">
<br>

<p class="headline">Views.py</p>
<div class="timestamp"><a href="" class="roll-link" data-time="28"><span data-title="&nbsp;Hoppa hit&nbsp;">28 sek</span></a></div>

<p>Vi börjar med att ange teckenkodningen UTF-8 för att undvika problem när vi använder oss av bokstäverna Å, Ä och Ö. Därefter importerar vi kommandot <code>render_to_response</code> från modulen <code>shortcuts</code>.</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5135038.js"></script>
</p>

<p>Vi skall nu skapa två olika views, vi gör det genom att skapa två stycken python-funktioner. En view måste alltid ta emot en request, även om vi inte använder oss av den i funktionen. När vi har tagit emot requesten vill vi returnera en response. Vi gör det genom att ange kommandot <code>render_to_response</code> följt av template-mallen vi vill använda oss av (i det här fallet <i>index.html</i>).</p>
<p>Sedan måste vi ange vad vi vill skicka vidare för information till vår mall. Vi gör det genom att deklarera en variabel (jag har här döpt variabeln till <code>content</code>) som vi kommer att använda oss av i vår mall samt vad vi vill spara för data i den variabeln (i det här fallet strängarna <code>Hello World, from oneView</code> respektive <code>Hello Again, from anotherView</code>). Strängarna som vi nu sparar i variabeln <code>content</code> kommer vi i senare filmer att byta ut mot data från vår databas.</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5135070.js"></script>
</p>

<p class="headline">Template - index.html</p>
<div class="timestamp"><a href="" class="roll-link" data-time="166"><span data-title="&nbsp;Hoppa hit&nbsp;">2 m 46 sek</span></a></div>
<p>För att kunna använda oss av en template-mall så måste vi först skapa den. Vi börjar med att skapa en ny mapp inuti mappen <i>blog_app</i>. Vi döper den nya mappen till <i>templates</i>.</p>

 <fieldset>
   <legend>&nbsp;<span style="color:#E65555">OBS!</span>&nbsp;</legend>
   <p>Det är viktigt att mappen innehållandes våra templates heter just <i>templates</i> och ligger i app-mappen, annars kommer Django inte att hitta den.</p>
 </fieldset>

 <p> I den nyskapade mappen kommer alla våra templates att ligga. Vi skapar en ny template-fil och döper den till <i>index.html</i>. Mappstrukturen skall nu se ut så här:</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5184504.js"></script>
</p>

<p>Vi fyller <i>index.html</i> med en enkel HTML5 grund som vi sedan kan bygga vidare på.</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5134976.js"></script>
</p>

<p>Vi skall nu använda oss av variabeln som vi skickar vidare ifrån views.py, dvs. <code>content</code>. Det gör vi genom att använda Djangos template-språk. För att använda oss av variabler skriver vi dessa innanför två stycken par måsvingar, dvs <code>{{ VARIABEL }}</code>  </p>

<p>
  <script src="https://gist.github.com/simon-johansson/5135124.js"></script>
</p>

<p class="headline">urls.py</p>
<div class="timestamp"><a href="" class="roll-link" data-time="220"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 40 sek</span></a></div>
<p>För att kunna navigera oss in på bloggen och se våra olika views måste vi först fastställa bloggens olika URL:er, eller webbadresser. Vi börjar med att importera våra två views.</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5108207.js"></script>
</p>

<p>Innuti variabeln <code>urlpatterns</code> anger vi våra URL:er. För att göra det använder vi oss av <i>regular expressions</i>, som tillåter oss att matcha och hitta mönster i olika strängar. Detta krävs för att undvika att våra olika URL:er inte skall krocka med varandra. Genom att ange <code>^</code>, följt av URL:en och därefter <code>$</code> bestämmer vi att URL-strängen skall matchas både från början och från slutet. Detta innebär att man inte kan skriva in någont annat i webbläsaren förutom den URL som vi har registrerat i <code>urlpatterns</code> för att nå våra views. Efter att vi har fastställt URL:en så anger vi vilket view som requesten skall skickas vidare till.</p>

<p>
  <script src="https://gist.github.com/simon-johansson/5134722.js"></script>
</p>

<p class="headline">Testa att det fungerar</p>
<div class="timestamp"><a href="" class="roll-link" data-time="467"><span data-title="&nbsp;Hoppa hit&nbsp;">7 m 47 sek</span></a></div>
<p>Vi borde nu kunna starta utvecklingsservern och surfa in på <code>127.0.0.1:8000/one/</code> respektive <code>127.0.0.1:8000/another/</code> för att nå våra olika views.</p>

<?php endblock() ?>
