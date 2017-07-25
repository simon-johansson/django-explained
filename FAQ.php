<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>FAQ</title>
<?php endblock() ?>

<?php startblock('scriptHead') ?>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>
$(function() {
  var icons = {
    header: "open",
    activeHeader: "closed"
  };
  $( "#accordion" ).accordion({
    heightStyle: "content",
    collapsible: true,
    icons: icons
  });
  $( "#toggle" ).button().click(function() {
    if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
      $( "#accordion" ).accordion( "option", "icons", null );
    } else {
      $( "#accordion" ).accordion( "option", "icons", icons );
    }
  });
});
</script>
<?php endblock() ?>

<?php startblock('cssHead') ?>
<link rel="stylesheet" href="css/jquery-ui.css">
<style>
  .contentWrapper{
    min-height: 500px;
  }
</style>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/faq.png" alt="">

<div id="accordion">

  <h3>Jag behöver hjälp, vart vänder jag mig?</h3>
  <div>
    Börja med att kolla igenom den här FAQ:n och handledningstråden i iLearn2 för uppgiften som du har fastnat på. Om problemet kvarstår kan du antingen skriva en ny fråga i handledningstråden eller zippa-ihop hela din blogg och maila den till <a href="mailto:mail@simon-johansson.com">mail@simon-johansson.com.</a>. Om du mailar ditt projekt så ska du ange vad du tror att felet är samt i samband med vilken instruktionsfilm som du började få problem. 
  </div>
  <h3>Vilken version av Django ska jag använda?</h3>
  <div>
    <p>Jag använder mig av version 1.5 i filmerna. För att det skall bli så enkelt som möjligt att följa med i filmerna så rekommenderar jag att du också använder den versionen. Använder du dig av en annan version kan bl.a. mappstrukturen vara lite annorlunda.</p>
  </div>
  <h3>Jag har redan installerat Python 3.X, kan jag ändå följa med i filmerna?</h3>
  <div>
    <p>Det är vissa syntaxskillnader mellan Python 2 och 3 så det kommer uppstå problem om du använder dig av Python 3 och skriver av koden exakt från filmerna. Det är dock inga problem att ha flera versioner av Python installerade samtidigt. Om du följer installationsguiden på den här sidan så borde det inte uppstå några konfliker mellan versionerna och du borde då få tillgång till Pyton 2.7 från kommandoprompten. </p>
  </div>
  <h3>Från vilken mapp skall utvecklingsservern startas ifrån?</h3>
  <div>
    <p>Ifrån din projektmapp, som <i>manage.py</i> ligger i. Om du blir osäker på om du är inne i rätt mapp kan du skriva <code>dir</code> (eller <code>ls</code> på Mac) i kommandoprompten för att se vilka filer som är i mappen som du står i. Bland filerna skall manage.py finnas med.</p>
  </div>
  <h3>Inga blogg-inlägg syns när jar öppnar bloggen i webbläsaren, varför?</h3>
  <div>
    <p>Har du några registrerade inlägg? Om du precis har tagit bort databasen för att synka om den så är den troligtvis tom. Gå in på admin-gränssnittet och skriv några nya inlägg. Om det inte löser problemet så bör du dubbelkolla att du använder samma variabelnamn i din template som i views.py.</p>
  </div>
  <h3>Jag vill lära mig mer Django! Hur gör jag?</h3>
  <div>
    <p>Lär dig att hitta i <a href="https://docs.djangoproject.com/en/1.5/">Djangos officiella dokumentation</a>, där kommer du att hänga mycket när du håller på att utvecklar nya saker. Där finns också en <a href="https://docs.djangoproject.com/en/1.5/intro/tutorial01/">nybörjar-tutorial</a> som är väldigt bra. Den börjar på ungefär samma nivå som jag gör i filmerna med den blir lite mer avancerad mot slutet. </p>

    <p>Django har en väldigt stark community vilket gör att det finns många bra sidor för att lära sig mer om Django. Här är några som jag tycker är bra:</p>
    <ul>
      <li><a href="http://www.djangobook.com/en/2.0/index.html">The Django Book</a></li>
      <li><a href="http://lightbird.net/dbe2/">Django by Example</a></li>
      <li><a href="http://gettingstartedwithdjango.com/">Getting Started With Django</a> - Ganska avancerad men väldigt bra om du vill veta hur man bör gå tillväga när man arbetar med att bygga Django-sidor.</li>
      <li><a href="https://django.2scoops.org/">Two Scoops of Django</a> - Är en bok som släpptes den 12/4-2013. Innehåller många bra och relevanta kodexempel och allt är anpassat för Django 1.5. Kostar dock en liten slant.</li>
    </ul>
    <p>För att kunna dra nytta av Django till fullo så behöver man kunna använda sig av andra personers appar. Implementationen av de flesta appar är någorlunda lika. Jag rekommenderar därför att börja med att försöka få appar som har gedigen dokumentation att fungera i ditt projekt. <a href="http://ckeditor.com/">CKEditor</a> är en app som du kan testa i din blogg för att få tillgång till en bra textredigerare i admingränssnittet och som gör det möjligt att ladda upp bilder till dina blogg-inlägg, Django-versionen hittar du här: <a href="https://github.com/shaunsephton/django-ckeditor">Django CKEditor</a></p>
  </div>

  <h3>Hur gör jag min blogg tillgänglig på internet?</h3>
  <div>
    <p>Tyvärr går det inte att lägga upp Django-projekt på era people-konton (om du är student på DSV så har du ett people-konto som du kan använda för att lägga upp statiska hemsidor och PHP-filer, läs på <a href="http://dsv.su.se/introdator/egenwebb">dsv.su.se/introdator/egenwebb</a>).</p>
      <p>Heroku är en tjänst som erbjuder Django-hosting, det är gratis så länge projekten är små. Du kan läsa vad du behöver göra för att få bloggen online på <a href="https://devcenter.heroku.com/articles/django">devcenter.heroku.com/articles/django</a>, kolla även in <i>Step 8</i> i denna artikel <a href="http://net.tutsplus.com/tutorials/python-tutorials/building-ribbit-with-django/">Building Ribbit in Django</a>. Varning! Det är tyvärr ganska meckligt att få allt att fungera.</p>
      <p>Skulle det här vara något som du vill att jag skall visa i en film? Säg i så fall till. Om tillräckligt många ber om det så ka jag spela in en sådan, i mån om tid.</p>
  </div>
<!--   <h3><i>WEBPROG:</i> Hur mycket måste jag kommentera i koden?</h3>
  <div>
    <p>Det är inget krav att du måste kommenterar koden men jag rekommenderar att du gör det för din egen skull, framför allt om ni sammarbetar i en grupp så att ni kan hålla kolla på vad de andra i gruppen har gjort. Om skapar en vana att kommentera under bloggbyggandet så kommer det också att bli lättare att beskriva vad du har gjort i din portfolio, där du skall beskriva alla uppgifter som du har avklarat under kursen. För att kommentera så skriver du ut <code>#</code> i början av en kodrad.
    </p>
  </div> -->
</div>

<?php endblock() ?>
