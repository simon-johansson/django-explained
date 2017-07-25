<?php include 'base.php' ?>

<?php startblock('title') ?>
  <title>11. ...från bloggen</title>
<?php endblock() ?>

<?php startblock('movie') ?>
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="1020" height="574" poster="img/11-poster.png" data-setup="{}">
          
          <source src="movies/11/11.ogv" type='video/ogg' />
			<source src="movies/11/11.mp4" type='video/mp4' />
      </video>

        <a class="download" href="movies/11/11.mp4">Ladda ner filmen i MP4-format</a>
<?php endblock() ?>

<?php startblock('content') ?>
<img class="movieTitle" src="img/11-fran-bloggen.png" alt="">

     <!-- INSTRUKTIONER -->

<p>Just nu går det endast att skriva kommentarer till blogginläggen från admin-gränssnittet men tanken är ju att besökare av sidan skall kunna skriva kommentarer, och de kommer ju inte åt admin-gränssnittet. Vi måste därför göra det möjligt att skiva kommentarer direkt från bloggen.</p>

<p class="headline">BLOG_POST.HTML</p>
<div class="timestamp"><a href="" class="roll-link" data-time="25"><span data-title="&nbsp;Hoppa hit&nbsp;">25 sek</span></a></div>

<p>Här måste vi nu skapa ett formulär som besökare av bloggen kan interagera med:</p>

<script src="https://gist.github.com/simon-johansson/5367887.js"></script>

<p>Inuti form-taggen måste vi lägga till <code>{% csrf_token %}</code>, <a href="https://docs.djangoproject.com/en/dev/ref/contrib/csrf/">cross-site request forgery</a>, som gör att Django skickar med en unik nyckel i vår <i>POST</i>-request. Detta skyddar oss ifrån att någon skall lyckas göra <i>POST</i>-request, och på så sätt spara saker i vår databas, från en extern webbplats.</p> 

<p>Det som vi här anger som <code>name</code> för respektive tagg kommer vi sedan i vår views att använda som identifikation för varje fält.</p>

<p class="headline">VIEWS.PY</p>
<div class="timestamp"><a href="" class="roll-link" data-time="87"><span data-title="&nbsp;Hoppa hit&nbsp;">1 m 27 sek</span></a></div>

<p>Som jag nämnde i film nummer fyra så finns det olika typer av requests. Hittills har vi endast använt oss av <i>GET</i>-requester, som är ämnade för att hämta saker ur databasen. Men för att kunna spara nya saker i databasen måste vi utnyttja en <i>POST</i>-request.</p>

<p>Vi börjar, som vanligt, med att importera allt vi kommer att behöva använda oss av:</p>

<script src="https://gist.github.com/simon-johansson/5367670.js"></script>

<p>Vi importerar <code>BlogComment</code>, då vi kommer att vilja kunna spara nya kommentarer i databasen. </p>
<p>Vi importerar även <code>render</code>, som fungerar på samma sätt som <code>render_to_response</code> men med skillnaden att <code>render</code> drar nytta av Djangos <a href="https://docs.djangoproject.com/en/dev/ref/templates/api/#django.template.RequestContext ">RequestContext</a>, som i sin tur kollar om den medskickade <i>csrf</i>-nyckeln är giltig.</p>

<p>Till sist importerar vi <code>datetime</code> så att vi kan datera kommentarerna.</p>

<script src="https://gist.github.com/simon-johansson/5367677.js"></script>

<p>Vi skapar en if-sats som kollar om requesten som viewn har mottagit är av typen <code>POST</code>. Om så är fallet tar vi emot det användaren har skrivit in i formulärfälten genom att ange <code>request.POST["<i>NAME</i>"]</code>, där <i>NAME</i> är det namnet vi gav formulärfältet i vår template. </p>

<fieldset>
<legend ><p>&nbsp;<b>Validering på serversidan</b>&nbsp;</p></legend>
  <p>
  	I vårt fall så behöver vi inte validera någon del av bloggkommentarerna, men om vi hade velat göra det så hade själva granskningen av datan skett nu. Om vi t.ex. hade gjort det möjligt för användaren att bifoga sin epost-adress i bloggkommentaren så hade vi kunnat kolla om adressen som användaren anger har ett giltigt format. Eller om vi utvecklade en e-commerce sida så hade kreditkortskortsvalideringen kunnat ske här. </p>
	<p>Anledningen till att vi hellre vill validera data på serversidan, med hjälp av t.ex. Django, än på klientsidan med JavaScript är för att användaren har möjlighet att stänga av JavaScript i sin webbläsare och kan då komma runt våra säkerhetskontroller. Genom att ha valideringen på serversidan kan vi också hålla våra algoritmer gömda, vilket i vissa fall är nödvändigt av säkerhetsskäl.</p>

	<p>Om du är sugen på att experimentera med validering i Django så rekommenderar jag avsnittet <a href="https://docs.djangoproject.com/en/dev/topics/forms/">Working with forms</a> i Django-dokumentationen </p>
</fieldset>

<p>Vi kallar sedan på BlogComment-klassen och skickar med användarens kommentarsinformation som argument. 
Genom att ange <code>datetime.datetime.now()</code> sparas automatiskt datumet och klockslaget för när POST-requesten togs emot.</p>

<p>Vi använder oss sedan av <code>.save()</code> för att spara inlägget i databasen.</p>

<p>Till skillnad ifrån <code>render_to_response()</code> måste vi till <code>render()</code> även skicka med requesten för att kunna dra nytta av csrf-skyddet  </p>


<?php endblock() ?>