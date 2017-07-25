<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>12. Template 2.0</title>
  <style>
    .scroll .gist-file{
      max-height: 400px;
      overflow-y: scroll;
    }
    .moreTime li{
      margin-bottom: 5px;
    }
    .skor{
      float:right;
    }
  </style>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/12-poster.png" data-setup="{}">
          
          <source src="movies/12/12.ogv" type='video/ogg' />
			     <source src="movies/12/12.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/12/12.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/12-template-2.png" alt="">

     <!-- INSTRUKTIONER -->

<p>Vi ska nu kolla på vad vi behöver göra för att kunna länka in statiska filer, som <i>CSS</i> och <i>JavaScript</i>, i våra templates. Vi ska även titta på några fler template-taggar</p>

<p class="headline">VIEWS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="22"><span data-title="&nbsp;Hoppa hit&nbsp;">22 sek</span></a></div>

<p>Vi börjar med att byta ut <code>render_to_response</code> mot <code>render</code> för vår <code>blogIndex</code>-view</p>

<script src="https://gist.github.com/simon-johansson/5423193.js"></script>

<p>Då vi nu inte längre använder <code>render_to_response</code> kan vi ta bort den från vår <code>import</code></p>

<p class="headline">SETTINGS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="35.5"><span data-title="&nbsp;Hoppa hit&nbsp;">36 sek</span></a></div>

<p>Här ställer vi in var Django skall leta efter våra statiska filer.</p>

<p>För <code>STATIC_URL</code> och <code>STATICFILES_FINDERS</code> vill vi ange följande:</p>

<script src="https://gist.github.com/simon-johansson/5423194.js"></script>

<script src="https://gist.github.com/simon-johansson/5423451.js"></script>

<p>Vi måste även se till så att appen <code>django.contrib.staticfiles</code> finns med bland våra <code>INSTALLED_APPS</code>.</p>

<p class="headline">STATIC + CSS</p>
<div class="timestamp"><a href="" class="roll-link" data-time="90"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 30 sek</span></a></div>

<p>Vi måste nu skapa en ny mapp inuti vår <i>blog_app</i>-mapp, vi döper den till <i>static</i>. Mappstrukturen bör nu se ut så här:</p>

<script src="https://gist.github.com/simon-johansson/5423495.js"></script>

<p>I mappen <i>static</i> kan vi nu lägga våra statiska filer. CSS:en som jag använder i filmen hittar du här under. Jag sparar koden i en fil som jag har valt att kalla <i>css.css</i>.</p>

<div class="scroll">
  <script src="https://gist.github.com/simon-johansson/5423290.js"></script>
</div>

<p class="headline">INDEX.HTML BLIR BASE.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="114"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 54 sek</span></a></div>

<p>För att vi inte vill upprepa kod i onödan vill vi dra nytta av template-taggen <code>extends</code>. Vi börjar därför med att döpa om vår <i>index.html</i> till <i>base.html</i>, då denna kommer att utgöra vår template-bas.</p> 

<p>I denna fil vill vi nu lägga in <code>block</code>-taggar som vi kommer att fylla med olika innehåll beroände på vilken del av vår sida som användaren besöker. Vi börjar med att skapa en <code>block</code>-tagg för vår <code>title</code>. Jag väljer att döpa blocket till just <code>title</code>.</p>

<script src="https://gist.github.com/simon-johansson/5423204.js"></script>

<p>Vi klipper ut for-loopen och inuti vår <code>body</code> skriver vi istället följande:</p>

<script src="https://gist.github.com/simon-johansson/5423210.js"></script>

<p>Detta kommer göra att vi har en <code>header</code> och en <code>footer</code> som är gemensam för alla våra sidor. Notera att rubriken nu är en länk som leder oss tillbaka till vår grundadress.</p>

<p>För att importera css-filen anger vi nu följande någonstans mellan <code>head</code>-taggarna: </p>

<script src="https://gist.github.com/simon-johansson/5423558.js"></script>

<p><code>{{ STATIC_URL }}</code> skriver ut sökvägen till våra statiska filer som står angiven i <i>settings.py</i>.</p>

<p class="headline">NYA INDEX.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="250"><span data-title="&nbsp;Hoppa hit&nbsp;">4 m 10 sek</span></a></div>

<p>Vi skapar nu en ny html-fil i vår templats-mapp som vi döper till <i>index.html</i>. Vi kan nu använda <code>extends</code>-taggen för att läsa in allt innehåll i <i>base.html</i>:</p>

<script src="https://gist.github.com/simon-johansson/5423222.js"></script>

<p>Vi vill nu fylla block-taggen som vi döpte till <code>content</code> med alla blogg-inlägg. Vi klistrar därför in for-loopen från vår gamla <i>index.html</i> inuti block-taggen:</p>

<script src="https://gist.github.com/simon-johansson/5423223.js"></script>

<p>Notera även att jag har lagt till filtret <code>|upper</code> på blogg-inläggens titlar. Detta gör att titlarna skrivs ut med versaler, oavsett hur de är sparade i databasen. För mer om vilka template-filter som finns i Django rekommenderar jag att du kollar in följande del i Django-dokumentationen: <a href="https://docs.djangoproject.com/en/dev/ref/templates/builtins/">https://docs.djangoproject.com/en/dev/ref/templates/builtins/</a></p>

<p>Eftersom att vi i denna fil inte anger någon <code>block</code>-tagg med namnet <code>title</code> så kommer det som vi angav som default för den taggen i <i>base.html</i> att skrivas ut, dvs. <code>The Django Blog</code>.</p>

<p class="headline">BLOG_POST.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="325"><span data-title="&nbsp;Hoppa hit&nbsp;">5 m 25 sek</span></a></div>

<p>Templaten som visar ett enskilt inlägg och dess kommentarer kan nu se ut så här:</p>

<script src="https://gist.github.com/simon-johansson/5423240.js"></script>

<p>Genom att ange <code>{{ oneBlogPost.title|upper }}</code> inuti block-taggen benämnd <code>title</code> kommer nu sidtiteln att vara namnet på blogg-inlägget.</p>

<p>Jag har kompletterat koden med några nya <code>html</code>-taggar och klasser för att den lättare skall gå att stajla med CSS.</p>

<p>Genom att lägga till en <code>if</code>-sats runt <code>for</code>-loopen kan vi kolla om det finns några kommentarer för inlägget. Om så är fallet skrivs kommentarerna ut, annars meddelar vi att det inte finns några.</p>

<p class="headline">SLUT PÅ FILMSERIEN!</p>
<div class="timestamp"><a href="" class="roll-link" data-time="462"><span data-title="&nbsp;Hoppa hit&nbsp;">7 m 41 sek</span></a></div>

<p>Det här var den sista filmen i serien. Om du går kursen <i>ID:WEBPROG</i> kan du nu zippa ihop mappen <i>Blog</i> och skicka in den för rättning. Kom ihåg att bifoga inloggningsuppgifterna till din superanvändare så att vi kan logga in på ditt andministrationsgränssnitt.</p>

<p>Hade det funnits mer tid hade jag velat gå igenom även dessa ämnen:</p>

<ul class="moreTime">
  <li>Validera användarinmatade värden genom att dra nytta av Djangos <a href="https://docs.djangoproject.com/en/dev/topics/forms/">formulärhanteringsbibliotek</a>.</li>
  <li><a href="https://docs.djangoproject.com/en/dev/topics/class-based-views/">Class-based views</a> & <a href="https://docs.djangoproject.com/en/dev/topics/class-based-views/generic-display/">generic views</a>.</li>
  <li>Hur man installerar en tredjepartsapplikation.</li>
  <li>Hur man gör AJAX-request men JavaScript till Django.</li>
  <li>Anpassning av <a href="https://docs.djangoproject.com/en/dev/ref/contrib/admin/">admingränssnittet</a> på olika sätt.</li>
  <li>Uppladning av bilder och andra filer från admingränssnittet.</li>
  <li>Göra bloggen tillgänglig på internet.</li>
</ul>

<img class="skor" src="img/skor.png" alt="">

<p>För att bli en riktig Django-jedi så bör man dock bemästra ovanstående ämnen så jag rekommenderar att du kollar upp dem på egen hand. Kolla in punkten <i>Jag vill lära mig mer Django! Hur gör jag?</i> i F.A.Q:n för tips på hur du kan gå vidare härifrån.</p>

<p>Hoppas att du tycker att filmerna har varit givande. Skicka gärna ett mail med dina tankar och idéer kring filmerna/texterna till mig, <a href="mailto:mail@simon-johansson.com">mail@simon-johansson.com</a>, så att jag kan förbättra/justera materialet.</p>

<p>Lycka till med ert Django-kodande!</p>

<?php endblock() ?>