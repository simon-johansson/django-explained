<?php include 'base.php' ?>

<?php startblock('title') ?>
	<title>Django Explained</title>
<?php endblock() ?>

<?php startblock('movie') ?>
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/intro-poster.png" data-setup="{}">
      <source src="movies/1/1.ogv" type='video/ogg' />
      <source src="movies/1/1.mp4" type='video/mp4' />
    </video>

    <a class="download" href="movies/1/1.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
	<img class="movieTitle" src="img/1-intro.png" alt="">

    <p class="headline">Hej och välkommen till Django Explained!</p>
    <p>Jag heter <a href="http://www.simon-johansson.com">Simon Johansson</a> och jag kommer att vara er guide i Django-djungeln.</p>

    <p>Django Explained består av ett antal instruktionsfilmer som är tänkta att lära ut grunderna i ramverket Django. Filmerna är i första hand ämnade till studenter på Stockholms Universitet som går <i>Fortsättningskurs i Programmering</i>, ID:WEBPROG VT13, då filmerna utgör kursmaterialet för Django på kursen. Men om du har hittat hit utan att gå den kursen så är du också välkommen!</p>
    
    <p class="headline">Förkunskaper</p>
    <p>Du behöver inte ha några förkunskaper i Django men däremot lite grundläggande kännedom om hur programmeringsspråket <i>Python</i> fungerar, Django bygger nämligen på Python. Du bör även kunna strukturera enkla webbsidor i <i>HTML</i> och <i>CSS</i>.</p>

    <img src="img/test.png" alt="" style="float:right;margin-top:55px;">

  <p class="headline">Upplägg</p>
   <p> I filmserien så kommer vi tillsammans att bygga en blogg från grunden, och på så sätt gå igenom alla de centrala delarna i Django. Varje film bygger vidare på den föregående så jag rekommenderar att titta på filmerna i ordning. Filmerna går även att ladda ner, det finns en länk under varje film (högerklicka på länken och välj <i>Spara länk som...</i> om filmen öppnas i en ny flik). </p>

      <p>När ni är klara med filmserien kommer ni att ha en blogg som ser ut ungefär så här: <br>
    <a href="http://simon-johansson.com/django-blog/">http://simon-johansson.com/django-blog/</a></p>

     <p class="headline">Hjälp!</p>

    <p> Om du fastnar på någon del av bloggbyggandet så kan du börja med att kolla igenom FAQ:n på den här sidan och handledningstråden i <i>iLearn2</i> för uppgiften som du har fastnat på. Om du fortfarande har problem kan du antingen skriva en ny fråga i handledningstråden eller zippa-ihop hela din blogg och maila den till <a href="mailto:mail@simon-johansson.com">mail@simon-johansson.com.</a>. Om du mailar ditt projekt så ska du ange vad du tror att felet är samt i samband med vilken instruktionsfilm som du började få problem. </p>

      <fieldset style="padding-bottom:0px; padding-bottom:0px;">
        <legend>&nbsp;<b>Zippvadå?!</b>&nbsp;</legend>
             <p>Om du saknar ett bra program för att skapa zipp-filer så rekommenderar jag <i>WinRAR</i>, du kan ladda ner det ifrån <a href="http://www.rarlab.com/download.htm">http://www.rarlab.com/download.htm</a></p>
      </fieldset>

  <p class="headline">Förbättringar och feedback</p>
  <p> Släng gärna iväg ett mail till <a href="mail@simon-johansson.com">mail@simon-johansson.com</a> och berätta vad du tycker om sidan, all kritik är välkommen. </p> 
<p>I mån om tid kan jag även spela in kompletterande filmer om det efterfrågas. Vill du veta hur man lägger in bilder i blogginläggen eller kanske hur man gör bloggen tillgänglig på internet? Eller har du kanske något annat du vill lära dig, säg till så ska jag försöka spela in fler filmer.
</p>
  

	<!-- NYHETER -->
    <p class="news">FÖR ID:WEBPROG VT 2014</p>

    <p>Sedan jag spelade in filmerna så har det släppts nya versioner av Django, den senaste versionen just nu är 1.6.2 (2014-04-02).  Det är vissa skillnader mellan version 1.6.2 och den som jag använder i filmerna, vilket är 1.5. För enkelhetens skull rekommenderar jag er därför att använda er av 1.5 även fast mycket har blivit bättre i de senare versionerna. Då detta är en introduktionskurs och intentionerna med denna del är att ni skall få testa på serverprogrammering spelar det mindre roll om vi använder oss av den absolut senaste versionen. Om du använder en nyare version av Django i din inlämningsuppgift skall detta framgå tydligt.</p>

    <p>Ni hittar installationsfilerna för version 1.5 för Django här:</p>
    <p><a href="https://www.djangoproject.com/download/1.5/tarball/">https://www.djangoproject.com/download/1.5/tarball/</a></p>
    <p>Det går inte längre att ladda ner filen direkt från ”download”-sidan på djangoproject.com.</p>

    <p>När kursen gick förra gången så var det många som hade problem med att få Django att fungera ihop med Aptana på Mac OS X. Om ni har problem att få det att fungera så ger det alldeles utmärkt att använda någon annan IDE eller texteditor (typ TextWrangler eller Sublime Text). Att använda sig av Aptana är absolut inget krav. Jag kommer under Django-workshoppen gå igenom installationsprocessen på både Windows och Mac, förhoppningsvis löser sig alla eventuella problemen då.
    </p>

 <!--    <p>Här kommer jag att skriva när jag har gjort uppdateringar till bloggen. Spelat in nya filmer, korrigerat eventuella fel eller uppdaterat FAQ:n</p>

      <fieldset style="margin-bottom: 30px">
        <legend ><p class="headline" style="bottom:8px;">14/4 - 2013</p></legend>
          <p>Tolfte filmen är nu tillgänglig! Jag kommer kanske att lägga upp fler filmer i framtiden om det efterfrågas av tillräckligt många men för tillfället är det den sista filmen i serien. </p>
      </fieldset>

      <p class="clear">
      <b class="headline headline3">14/4 - 2013</b>
            <span class="inline">Sprillans nya film nummer elva ligger nu uppe.</span>
    </p>  

    <p class="clear">
      <b class="headline headline3">13/4 - 2013</b>
            <span class="inline">Film nummer tio är nu tillgänglig för allmän visning. Filmen berör, så gott som, alla centrala delar i ramverket och demonstrerar att vi med få rader kod kan göra väldigt mycket.</span>
    </p>  

    <p class="clear">
      <b class="headline headline3">12/4 - 2013</b>
            <span class="inline">Lär dig om främmande nycklar i film nummer nio! Som det ser ut nu så kommer det totalt att bli tolv stycken filmer. Jag planerar att lägga upp två till under helgen.</span>
    </p>  

    <p class="clear">
      <b class="headline headline3">10/4 - 2013</b>
            <span class="inline">Film nummer åtta ligger nu uppe.</span>
    </p>  

    <p class="clear">
      <b class="headline headline3">7/4 - 2013</b>
            <span class="inline">Två nya filmer, nummer sex och sju! Håll till godo, fler filmer kommer snart.</span>
    </p> 

    <p class="clear">
      <b class="headline headline3">20/3 - 2013</b>
            <span class="inline">Nu finns film nummer fem tillgänglig, vissa ändringar gjordes även till F.A.Q:n</span>
    </p> 

    <p class="clear">
      <b class="headline headline3">17/3 - 2013</b>
            <span class="inline">Hello World! Sidan lanserades.</span>
    </p>  -->


<?php endblock() ?>
