<?php include 'base.php' ?>

<?php startblock('title') ?>
	<title>2. Installationer</title>
<?php endblock() ?>

<?php startblock('movie') ?>
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/2-poster.png" data-setup="{}">
      <source src="movies/2/2.ogv" type='video/ogg' />
      <source src="movies/2/2.mp4" type='video/mp4' />
    </video>

    <a class="download" href="movies/2/2.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
	  <img class="movieTitle" src="img/2-installation.png" alt="">

    <p class="headline">Python 2.7</p>
    <img class="icon-logo" src="img/python-logo.png" alt="">
    <p>Senaste versionen av Django stödjer python 3.3 men det är fortfarande i utvecklingsstadiet, jag kommer att använda 2.7 så jag rekommenderar att du också gör det.

    <p class="headline">Django 1.5</p>
    <img class="icon-logo" src="img/django-icon-256.png" alt="">
    <p>Den senaste versionen är 1.5 och den släpptes i slutet av februari 2013. Django laddas ner från <a href="https://www.djangoproject.com/download/">https://www.djangoproject.com/download/</a>.</p>

    <p class="headline">Aptana Stuido 3</p>
    <img class="icon-logo" src="img/aptana.png" alt="">
    <p>Jag använder Aptana 3 för att skriva min kod, det är <b>helt gratis</b> och har stöd för Python redan från start. Du måste inte använda Aptana för att skapa webbsidor med Django men jag rekommenderar att du åtminstone använder någon typ av IDE (Integrated development environment) istället för en vanlig texteditor som Notepad++ eller Coda. IDLE, som följer med Python-installationen, avråder jag också från att använda. När vi arbetar med Django så kommer vi hoppa mellan flera olika filer, det är därför viktigt att ha ett program som hjälper oss att ha en tydlig struktur. Aptana kan laddas ner från <a href="http://www.aptana.com/products/studio3/download">http://www.aptana.com/products/studio3/download</a>.</p>

   <p class="headline"> 1. </p>
   <div class="timestamp"><a href="" class="roll-link" data-time="95"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 35 sek</span></a></div>

   <p>
     Börja med att installera Python. Det lättaste är att ladda ner installationsfilen och följa instruktionerna. Du kan ladda ner den härifrån: <a href="http://www.python.org/getit/">http://www.python.org/getit/.</a><br>På Mac OS X finns Python 2.7.3 förinstallerat.</p>
    
    <p class="headline"> 2. </p>
      <div class="timestamp"><a href="" class="roll-link" data-time="134"><span data-title="&nbsp;Hoppa hit&nbsp;">2 m 14 sek</span></a></div>
      <p>
      Det är tyvärr inte lika lätt att installera Django som python. Vi kommer att behöva göra det manuellt ifrån kommandoprompten, men mer om det alldeles snart. Börja med att ladda ner gzipp-filen (har filendelsen .gz) innehållandes den senaste versionen av Django från: <a href="https://www.djangoproject.com/download/1.5/tarball/">https://www.djangoproject.com/download/1.5/tarball/</a>. Packa upp innehållet i en tom mapp, exempelvis på skrivbordet.</p>

    <p class="headline">3. Detta steg är specifikt för Windows</p>
    <div class="timestamp"><a href="" class="roll-link" data-time="198"><span data-title="&nbsp;Hoppa hit&nbsp;">3 m 19 sek</span></a></div>
    <p>Vi måste nu göra Python tillgängligt från kommando prompten. För att kunna göra det måste vi peka ut för kommandoprompten var Python finns på hårddisken.</p>

   <p>Öppna startmenyn (Windows-loggan längst ner i vänstra hörnet), högerklicka på <i>Dator</i> och välj <i>Egenskaper</i>. Klicka sedan på <i>Avancerade systeminställningar</i> i vänstermenyn. Gå sedan in på <i>Miljövariabler</i> under fliken Avancerat. </p>

    <p>Om du under <i>Användarvariabler</i> redan har en variablen som heter <i>PATH</i> kan du markera den och välja <i>Redigera</i>, annars väljer du “Ny...” för att skapa en ny användarvariabel och döper den till <i>PATH</i>.</p>

    <p>Klistra in följande (inklusive semikolon):</p>
    <p>
      <script src="https://gist.github.com/simon-johansson/5146207.js"></script>
    </p> 
    <p>i fältet <i>Variabelvärde</i>, om det redan står något i fältet så klistrar du in det i slutet av av det som redan står.<span style="color:#F20D0D">OBS!</span> Detta förutsätter att du har installerat Python under standardsökvägen. Om din Python-installation finns någon annanstans måste du byta ut <code>C:\python27</code> mot den korrekta sökvägen. Godkänn och stäng alla fönster.</p>

    
    <p class="headline">3. För OS X</p>
    <p>På nyare installationer av Mac OS X (däribland version 10.9.2 Mavericks) så finns Python 2.7 förinstallerat och tillgängligt från terminalen. Du kan  testa detta genom att öppna terminalen och skriva <code>python -V</code>. Om du får  <code>Python 2.7.3</code> som svar betyder det att allt fungerar som det ska, du kan då hoppa till nästa steg. Om du istället får ett felmeddelande kan du testa ladda ner och installera Python (enligt steg ett ovan). Öppna sedan terminalen, klistra in följande och tryck på enter:</p>
    <p>
      <script src="https://gist.github.com/simon-johansson/5146290.js"></script>
    </p>

    <p>Detta kommer att registrera sökvägen till din Python-installation i filen som heter <i>.bash_profile</i>. Den styr bl.a. över vilka program som skall göras tillgängliga från terminalen.</p>

    <p>Du kommer inte att få något meddelande om det lyckades. Om du får ett felmeddelande i stil med “... No such file or directory” så behöver du köra kommandot <code>touch ~/.bash_profile</code> i terminalen först för att skapa filen <i>.bash_profile</i>.</p>

    <p class="headline">4.</p>
    <div class="timestamp"><a href="" class="roll-link" data-time="268"><span data-title="&nbsp;Hoppa hit&nbsp;">4 m 28 sek</span></a></div>
   <p> Öppna nukommandoprompten/terminalen. Kommandoprompten kan öppnas genom att klicka på startmenyn och skriv <code>cmd</code> i sökfältet. Skriv <code>python -V</code> i kommandoprompten/terminalen (OBS att det är ett stort “V”).  Om du får tillbaka <code>Python 2.7.3</code> så betyder det att alla nödvändiga kopplingar har lyckats. Om du får ett felmeddelande i stil med “python är inte ett internt kommando, externt kommando, program eller kommandofil” så betyder det att kommandoprompten fortfarande inte hittar Python av någon anledning, pröva att starta om datorn. Om det fortfarande inte fungerar så har du gjort något fel på steg 3.</p>

   <p class="headline">5. </p>
    <div class="timestamp"><a href="" class="roll-link" data-time="317"><span data-title="&nbsp;Hoppa hit&nbsp;">5 m 17 sek</span></a></div>
    <p>Stäng av kommandoprompten och öppna mappen som du packade upp Django i. Gå in i mappen <i>Django-1.5</i>, så att du kan se filen <i>setup.py</i>. Nu skall vi starta kommandoprompten ifrån den här mappen. Gör det genom att ställa dig i sökvägsfältet högst upp i mappen (det vänstra av de två fälten) så att sökvägen till mappen markeras, skriv därefter <code>cmd</code> och tryck på enter. Nu borde kommandoprompten ha startats och du borde där kunna se sökvägen till mappen.</p>

    <p>Ett annat sätt att navigera sig igenom filsystemet med hjälp av kommandoprompten/terminalen är att ange kommandot <code>cd</code>, som står för <i>change directory</i>, följt av sökvägen till den mappen som vi vill ta oss till. Testa att skriva <code>cd</code> och dra in en mapp i kommandoprompten, då skrivs sökvägen till mappen automatiskt ut (glöm inte att göra ett mellanslag mellan <code>cd</code> och sökvägen).</p>

    <p>För att vara säkra på att vi nu är i rätt mapp kan vi skriva <code>dir</code> och trycka på enter, då skrivs allt innehåll i den nuvarande mappen ut (för Mac kan du skriva <code>ls</code> för samma resultat). Om <i>setup.py</i> är med bland de filer som skrivs ut så vet vi att vi är i rätt mapp.</p>
    
    <p class="headline">6. </p>
    <div class="timestamp"><a href="" class="roll-link" data-time="371"><span data-title="&nbsp;Hoppa hit&nbsp;">6 m 11 sek</span></a></div>
   <p> Vi skall nu installera Django, det gör vi genom att skriva <code>python setup.py install</code>, på Mac så måste du skriva <code>sudo python setup.py install</code> för att få administrationsrättigheter. Det tar ett litet tag och sen rasslar det förbi en massa rader kod. Om du får ett felmeddelande kan det bero på att du inte har administrationsrättigheter, testa att starta kommandoprompten genom att högerklicka på cmd.exe och välja <i>Kör som administratör</i>. </p>

    <p>När installationen är klar kan du testa att skriva <code>django-admin.py version</code> och trycka på enter. Om allt vill säg väl så får du tillbaka 1.5, vilket är versionen av Django som vi precis installerade. Om du får ett felmeddelande, teta då att skriva <code>python django-admin.py version</code> istället. Du kan behöva starta om kommandopromten för att detta skall fungera.</p>
    
    <p class="headline">7. </p>
   <p> Nu är det bara Aptana Stuido 3 kvar. Ladda ner installationsfilen ifrån <a href="http://www.aptana.com/">http://www.aptana.com/</a> och kör den. </p>
    <p>Starta Aptana när installationen är klar. Aptana kommer att be dig att ange en Workspace, dvs var dina projekt som du skapar i Aptana kommer att sparas. Ett tips om du använder backup-program som Dropbox eller Google Drive är att välja att ha din Workspace innuti någon utav dessa. Då behöver du inte vara orolig för att din kod försvinner om darorn kraschar.</p>
      
      <p class="headline">8. </p>
      <div class="timestamp"><a href="" class="roll-link" data-time="435"><span data-title="&nbsp;Hoppa hit&nbsp;">7 m 15 sek</span></a></div>
   <p> Vi skall nu tala om för Aptana var vår Python-installation håller hus. Välj <i>Window</i> uppe i menyraden och därefter <i>Preferences</i>. Expandera <i>PyDev</i> i menyn till vänster och välj sedan <i>Interpreter - Python</i>. </p>

    <p>Tryck på <i>Auto Config</i> för att Aptana skall leta igenom datorn och automatiskt hitta alla filer som krävs. Om detta inte fungerar av någon anledning så måste man trycka på <i>New...</i> och manuellt leta upp python.exe. Denna ligger som standard på sökvägen <code>C:/Python27/python.exe</code> i Windows respektive <code>/System/Library/Frameworks/Python.framework/Versions/2.7/bin/python2.7</code> på Mac.</p>

    <p>Mac-användare kan också behöva lägga till följande mapp manuellt <code>/Library/Python/2.7/site-packages</code> genom att klicka på “New Folder” och leta upp mappen.</p>

    <p>För att testa om allt fungerade kan vi skapa ett nytt Django-projekt. Gör det genom att välja <i>File</i> > <i>New</i> > <i>Project...</i> välj sedan <i>PyDev Django Project</i> under <i>Pydev</i>.</p>

    <p>Döp ditt projekt till django_test eller något liknande, det spelar egentligen ingen roll. Du behöver inte bry dig om några inställningar, klicka bara vidare på <i>Next</i> och sedan <i>Finish</i>. Om allt går som det ska kommer det att dyka upp en mapp i den vänstra spalten. Du kan högerklicka på projektet och välja Delete, vi kommer i nästa film att skapa det riktiga projektet som kommer att ligga till grund för vår blogg.</p>

    <p class="headline">Bra jobbat!</p>
    <p>Nu är alla nödvändiga installationer klara.</p>
<?php endblock() ?>
