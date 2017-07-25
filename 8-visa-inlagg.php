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
<img class="movieTitle" src="img/8-visa-inlagg.png" alt="">

     <!-- INSTRUKTIONER -->
<p>Vi skall nu göra det möjligt att se våra blogginlägg på vår index-sida. När vi är klara med den här delen har vi, om allt har gått som det ska, en dynamisk webbplats!</p>

 <p class="headline">VIEWS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="64"><span data-title="&nbsp;Hoppa hit&nbsp;">64 sek</span></a></div>
 
 <p>För att kunna få tillgång till våra blogginlägg måste vi först importera klassen som inläggen är instanser av, dvs. <code>BlogPost</code>, och vi gör det ifrån vår <i>models.py</i> som vi nåt genom att ange <code>blog_app.models</code>.</p>

<script src="https://gist.github.com/simon-johansson/5331820.js"></script>

<p>Vi skapar en ny view vid namn <code>bloxIndex</code> och tar bort de två gamla vyerna, <code>oneView</code> & <code>anotherView</code>. </p>

<script src="https://gist.github.com/simon-johansson/5331825.js"></script>

<p>Vi definierar en variabel som vi vill spara alla tillgängliga blogginlägg i, jag har valt att döpa den till <code>allBlogPosts</code>. För att hämta inläggen, som är objektinstanser av klassen <code>BlopPost</code>, kallar vi först på klassen <code>BlogPost</code>. Genom punktnotation anger vi att vi vill komma åt objekten som vi skapat av klassen, <code>.objects</code>, därefter anger vi <code>.all()</code> för att få tag i alla inläggen. Vi skulle här, instället för <code>.all()</code>, kunna ange att vi endast ville hämta ett eller vissa av inläggen. </p>

<p>Vi skickar därefter med variabeln till vår template, dvs. <code>index.html</code>, och anger att den även skall heta <code>allBlogPosts</code> när vi arbetar med den i templaten.</p>

 <p class="headline">INDEX.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="185"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 4 sek</span></a></div>

 <p>I vår <i>index.html</i> vi vill nu använda oss av variabeln, <code>allBlogPosts</code>, som vi skickar vidare ifrån vår blogIndex-view för att kunna skriva alla inläggen. Inuti vår body-tag skriver vi därför följande:</p>

<script src="https://gist.github.com/simon-johansson/5331843.js"></script>

<p>Eftersom att <code>allBlogPosts</code> består av en lista innehållandes alla blogg-inlägg så måste vi iterera över variablen och skriva ut inläggen en efter en. Django tillåter oss att använda viss logik direkt i våra templates. Vi kommer i det här fallet bara att behöva använda oss av en <i>for-loop</i> men det finns även andra typer av template-taggar att leka med, kolla in länken om du vill veta mer: 
<a href="https://docs.djangoproject.com/en/dev/ref/templates/builtins/">https://docs.djangoproject.com/en/dev/ref/templates/builtins/</a>

<p>Anledningen till att vi loopar baklänges genom listan, detta åstadkoms genom att ange <code>reversed</code> i for-loops-taggen, är för att vi vill att det senast skrivna inlägget skall vara högst upp på vår sida.</p>

<p>Vi kommer åt blogg-inläggens olika delar genom att anropa på variablerna som vi definierade för BlogPost-klassen, dvs. <code>title</code>, <code>content</code> och <code>datetime</code>.</p>
</p>

 <p class="headline">URLS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="368"><span data-title="&nbsp;Hoppa hit&nbsp;">6 m 8 sek</span></a></div>

 <p>Vi vill här skapa en URL som tar oss till blogIndex-viewn. Men för att kunna göra det måste vi först och främst importera <code>bloxIndex</code> ifrån <code>blog_app.views</code>.</p>

<script src="https://gist.github.com/simon-johansson/5331926.js"></script>

 <p>Vi tar bord URL:erna som leder till <code>oneView</code> och <code>anotherView</code> och skapar en ny för vår blogIndex-view. Vi har nu inget emellan <code>^</code> och <code>$</code> vilket gör att vi når blogIndex om vi inte anger något annat än grundadressen till vår sida.</p>

<script src="https://gist.github.com/simon-johansson/5331848.js"></script>

<p class="headline">SCHYST!</p>
<div class="timestamp"><a href="" class="roll-link" data-time="447"><span data-title="&nbsp;Hoppa hit&nbsp;">7 m 26 sek</span></a></div>

<p>Vi har nu skapat en dynamisk sida enligt definitionen från den första filmen; Vi har kopplat vår sida mot en databas och det är möjligt att skapa nytt innehåll på sidan, genom administrationsgränssnittet, utan att skriva någon kod.</p> 
<p>
	Om du nu starta servern och surfar in på bloggen så borde du nu kunna avnjuta alla fina inlägg som du har skapat. 
</p>
<p>I nästa film skall vi fortsätta att implementera vårt klassdiagram, vi skall då ge oss på User-klassen och dess relation till BlogPost-klassen.</p>

<?php endblock() ?>