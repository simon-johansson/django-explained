<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>10. Kommentarer...</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/10-poster.png" data-setup="{}">
          
          <source src="movies/10/10.ogv" type='video/ogg' />
			<source src="movies/10/10.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/10/10.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/10-kommentera.png" alt="">

     <!-- INSTRUKTIONER -->

<p>Vi skall nu implementera BlogComment-klassen ur klassdiagrammet. Vi skall också göra så att varje blogginlägg kan visas på en separat sida, på vilken dess bloggkommentarer också kommer att presenteras.</p>

<p class="headline">MODELS.py</p>
<div class="timestamp"><a href="" class="roll-link" data-time="60"><span data-title="&nbsp;Hoppa hit&nbsp;">60 sek</span></a></div>

<p>BlogComment-klassen har samma struktur som vår BlogPost-klass.</p>

<script src="https://gist.github.com/simon-johansson/5364357.js"></script>

<p>Vi skickar i det här fallet med BlogPost-klassen som ett argument till <code>ForeignKey</code>-fältet vilket resulterar vi att varje bloggkommentar tillhör ett specifikt blogginlägg. Då vi här inte har någon titel-variabel så låter vi unicode-metoden returnera för- och efternamn på personen som skrivit kommentaren.</p>

<p>Vi måste nu, som alltid när vi gör ändringar till våra models, synka om databsen genom köra kommandot <code>manage.py syncdb</code>. Anledningen till att det inte kommer att uppstå några problem i det här fallet är för att BlogComment-klassen är ny, vi har tidigare inte skapat några bloggkommentarer.</p>

<p class="headline">ADMIN.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="106"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 47 sek</span></a></div>

<p>För att kunna administrera bloggkommentarerna från admin-gränssnittet så måste vi registrera <code>BlogComment</code>-klassen i <i>admin.py</i>. Vi börjar med att importera klassen.</p>

<script src="https://gist.github.com/simon-johansson/5364412.js"></script>

<p>Därefter registrerar vi den.</p>

<script src="https://gist.github.com/simon-johansson/5364421.js"></script>

<p class="headline">VIEWS.py</p>
<div class="timestamp"><a href="" class="roll-link" data-time="214"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 34 sek</span></a></div>

<p>Vi vill nu skapa en ny view som endast visar ett specifikt blogginlägg med alla dess kommentarer, jag har valt att kalla den för <code>blogPost</code>.</p>

<script src="https://gist.github.com/simon-johansson/5364376.js"></script>

<p>Skillnaden från vår andra view är att denna tar emot ett argument förutom requesten, som jag har valt att kalla för <code>ID</code>. Vi använder sedan denna variabel till att peka ut ett specifikt inlägg genom att ange <code>.get(id=ID)</code>, istället för att hämta alla inlägg. Anledningen till att detta fungerar är för att Django automatiskt ger alla instanser av klassen <code>BlogPost</code> ett unikt id i form av en siffra, så det första inlägget vi skapar har <i>1</i> som id det andra inlägget har <i>2</i> osv.</p>

<p class="headline">URLS.py</p>
<div class="timestamp"><a href="" class="roll-link" data-time="308"><span data-title="&nbsp;Hoppa hit&nbsp;">5 m 7 sek</span></a></div>

<p>För att kunna nå vår nyskapade view så måste vi göra en ny URL som leder till denna. Vi börjar med att importera <code>blogPost</code>.</p>

<script src="https://gist.github.com/simon-johansson/5364393.js"></script>

<p>Vi skapar sedan URL:en som leder oss till <code>blogPost</code>:</p>

<script src="https://gist.github.com/simon-johansson/5364398.js"></script>

<p>Det reguljära uttrycket som står angivet emellan <code>^</code> och <code>$</code> resulterar vi att måste skriva <code>/blog-post[SIFFRA]</code> efter vår grundadress för att nå <code>blogPost</code>-viewn. Genom att ange <code>&lt;ID&gt;</code> skickar vi även med siffran som vi har skrivit in i URL:n som ett argument till <code>blogPost</code>.</p>

<p class="headline">BLOG_POST.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="398"><span data-title="&nbsp;Hoppa hit&nbsp;">6 m 38 sek</span></a></div>

<p>Vi måste skapa den nya templaten, <i>blog_post.html</i>, som vi anropar på från <code>blogPost</code>-viewn. Vi skriver sedan följande inuti body-taggen:</p>

<script src="https://gist.github.com/simon-johansson/5364519.js"></script>

<p>Eftersom att variabeln <code>oneBlogPost</code> inte innehåller en lista med flera blogginlägg, utan istället ett specifikt inlägg, behöver vi här inte skapa en loop för att skriva ut inläggets innehåll. Vi behöver däremot skapa en loop för att skriva ut samtliga kommentarer som är kopplade till inlägget. </p>

<p>Vi kommer åt alla kommentarer som är associerade med inlägget genom att ange <code>blogcomment_set.all</code>, notera att vi anger klassnamnet med små bokstäver.</p>

<fieldset>
<legend>&nbsp;<b>Djangometa</b>&nbsp;</legend>
	<p>Vi har också möjlighet att använda Django-variabler för att ange metainformation om vår sida. Vi kan tex. skriva följande innanför vår <code>head</code>-tagg:</p>

	<script src="https://gist.github.com/simon-johansson/5364523.js"></script>

	<p>Vilket resulterar i att alla inlägg får en unik titel, som t.ex. är standarnamnet om någon gör ett bokmärke på något av våra blogginlägg. </p>
</fieldset>

<p class="headline">INDEX.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="514"><span data-title="&nbsp;Hoppa hit&nbsp;">8 m 33 sek</span></a></div>

<p>För att slippa att skriva URL:er som tar oss till våra olika blogginlägg kan vi göra rubrikerna på vår index-sida till länkar som leder till de enskilda inläggen. Detta åstadkommer vi genom att byta ut den första raden i for-loopen mot följande:  </p>

<script src="https://gist.github.com/simon-johansson/5364511.js"></script>

<p>Precis som <code>title</code>, <code>datetime</code> och <code>content</code> kan vi få tag på blogginläggets unika id genom att ange <code>.id</code>. Varje rubrik har nu en unik länk som leder till dess respektive sida.</p>

<?php endblock() ?>