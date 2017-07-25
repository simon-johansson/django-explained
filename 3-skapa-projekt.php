<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>3. Starta ett nytt projekt</title>
<?php endblock() ?>

<?php startblock('movie') ?>
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/3-poster.png" data-setup="{}">
      <source src="movies/3/3.mp4" type='video/mp4' />
    </video>

    <a class="download" href="movies/3/3.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/3-starta-projekt.png" alt="">

             <!-- INSTRUKTIONER -->

            <p class="headline">Skapa ett nytt Django-projekt</p>
            <p>För att starta ett nytt projekt skriver vi <code>django-admin.py startproject</code> i kommandoprompten/terminalen, följt av namnet vi vill ge vårt projekt. Jag väljer att kalla mitt projekt för <code>django_project</code>, för att det skall vara så enkelt som möjligt att följa med i de nästkommande filmerna rekommenderar jag att du också gör det. Vi skriver alltså <code>django-admin.py startproject django_project</code> när vi står i den mappen som vi vill ha vårt projekt i.</p>

            <p>Vi får inget meddelande om allt går som det ska men däremot skapas det en mapp med ett antal filer i. För att tydliggöra mappstrukturen väljer jag att döpa om den översta mappen till <i>Blog</i> för att tydliggöra mappstrukturen, detta är dock inget krav. Vi har således en mappstruktur som ser ut på följande sätt:</p>

            <script src="https://gist.github.com/simon-johansson/5160939.js"></script>

            <p><i>manage.py</i> använder vi för att kommunicera med vårt projekt, bla. för att starta utvecklingsservern och för att skapa vår databas (mer om det senare)</p>

            <p><i>settings.py</i>, i den här filen anger vi inställningarna för hela vårt projekt.</p>

            <p><i>urls.py</i> användas till att anger hur olika request skickas vidare inom vårt projekt.</p>

            <p>
              <i>init.py</i> och <i>wsgi.py</i> behöver vi inte bry oss om i det här projektet. Vill du läsa mer om dessa kan du göra det på Djangos officiella dokumentation, <a href="https://www.d
              jangoproject.com/">https://www.djangoproject.com/</a>
            </p>

           <p class="headline"> Importera vår projekt till Aptana </p>
           <div class="timestamp"><a href="" class="roll-link" data-time="153"><span data-title="&nbsp;Hoppa hit&nbsp;">2 m 33 sek</span></a></div>
            <p>Starta Aptana, välj <i>File</i> > <i>New</i> > <i>Other...</i> > <i>PyDev</i> > <i>PyDev Project</i>. Namnge vad projektet skall heta i Aptana samt sökvägen till vår projektmapp, dvs mappen som vi döpte om till <i>Blog</i>. Resterande inställningar kan vi lämna som de är.</p>

            <p>Första gången du startar ett nytt projekt kommer du att få frågan <i>Open Associated Perspective?</i>. Svara <i>Yes</i>, det kommer att anpassa Aptana för python-utveckling.</p>

            <p>Nu kan vi se vårt projekt i den vänstra spalten. Den första filen som vi skall redigera är <i>settings.py</i>. Här måste vi tala om för Django vilken databas vi skall använda oss av, i vårt skall vi använda <i>sqlite3</i>. Vi måste även döpa vår databas. När vi är klara vill vi att variablen <code>DATABASES</code> ser ut så här:</p>

            <script src="https://gist.github.com/simon-johansson/5100771.js"></script>

            <p>Vi passar även på att ange rätt tidszon och språk för vårt projekt:</p>

            <script src="https://gist.github.com/simon-johansson/5117958.js"></script>

            <p>Kom ihåg att spara ändringar ofta! Bli kompis med ctrl+s</p>

           <p> Längre ner i <i>settings.py</i> hittar vi variablen <code>INSTALLED_APPS</code>. I denna anger vi vilka appar som vi vill ha tillgång till i vårt projekt. Django har redan installerat några appar åt oss i vårt projekt, några av dessa kommer vi att ha användning av i senare filmer. </p>

            <p class="headline">Skapa en ny app</p>
           <div class="timestamp"><a href="" class="roll-link" data-time="471"><span data-title="&nbsp;Hoppa hit&nbsp;">7 m 51 sek</span></a></div>
            <p>För att vår blogg skall ha någon funktionalitet så måste vi skapa en egen app. Precis som vi när vi startade ett nytt projekt så skapar vi nya appar från kommandoprompten/terminalen. Navigera så att du står i mappen som vi döpte till <i>Blog</i> i kommandoprompten. I denna mapp skall <i>manage.py</i> finnas. Om du är osäker på om du är i rätt mapp kan du skriva <code>dir</code> (på windows) eller <code>ls</code> (på Mac) för att skriva ut innehållet i mappen som du står i. För att starta en ny app skriver vi <code>manage.py startapp</code> och sedan namnet på appen. Jag väljer att kalla min app för <code>blog_app</code>, jag rekommenderar att du också gör det då jag kommer att utgå ifrån att appen heter blog_app i resterande kodexempel. Vi skriver alltså: <code>manage.py startapp blog_app</code> i kommandoprompten/terminalen. Om du får ett felmeddelande, teta då att skriva <code>python manage.py startapp blog_app</code> istället.</p>

            <p>Det skapas då en mapp i vår projektmapp, i denna skapas det fyra filer. Nu skall vår mappstruktur se ut på följande sätt:</p>

            <script src="https://gist.github.com/simon-johansson/7302839aaff0a72ad443.js"></script>

            <p>När vi börjar arbeta med vårt projekt så kommer det att skapas filer med filendelsen <i>.pyc</i>, dessa behöver du inte bry dig. Python behöver skapa dessa för att kunna köra vår kod, redigera inte dessa. Filerna <i>.pydevproject</i> och <i>.project</i> skapas av Aptana och gör att programmet kan hålla kolla på vårt projekt</p>

            <p class="headline">Utvecklingsservern</p>
           <div class="timestamp"><a href="" class="roll-link" data-time="535"><span data-title="&nbsp;Hoppa hit&nbsp;">8 m 55 sek</span></a></div>
            <p>Django har en medföljande utvecklingsserver som vi har möjlighet att köra lokalt på vår dator och som vi kan använda oss av när vi håller på att utvecklar vår webbplats. Vi slipper därmed att skicka vårt projekt till en extern server, vilket tar tid och är lite bökigt. Djangos utvecklingsserver är dock inte ämnad att tas i produktion på riktiga sidor.</p>

            <p>Vi skall nu testa att starta utvecklingsservern. Det gör vi ifrån kommandoprompten inuti vår projektmapp, dvs samma mapp som tidigare. Nu skriver ni <code>manage.py runserver</code>. Om allt går bra så får vi tillbaka <code>Development server is running at http://127.0.0.1:8000/</code>, där adressen är vårt lokala IP följt av porten som servern körs på. Vi kan nu öppna en webbläsare och skriva in <code>http://127.0.0.1:8000/</code></p>

             <fieldset>
              <legend>&nbsp;<span style="color:#E65555"> !!! Public Service Announcement !!! </span>&nbsp;</legend>
                        <p>Använd <span style="color:#E65555">INTE</span> Internet Explorer 9, eller någon tidigare version av IE för den delen. Använd instället IE 10, Firefox, Safari eller Chrome.</p>
            </fieldset>


            <p>Eftersom att vi inte har börjat koda på vår app än så finns det inget att se men vi få ett standardmeddelande från Django som visar att servern fungerar.
<?php endblock() ?>
