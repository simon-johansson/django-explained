
$.fn.scrollBottom = function() { 
  return $(document).height() - this.scrollTop() - this.height(); 
};

$(document).ready(function(){

    // $('div[data-type="background2"]').each(function(){
    //     var $bgobj = $(this); // assigning the object
        
    //     $(window).scroll(function() {
    //         var yPos = ($(window).scrollBottom() / $bgobj.data('speed')); 
    //         var coords = (yPos + $bgobj.data('height'));
    //         $bgobj.css({ height: coords });
    //     });
    // });

    var tStart = 100 // Start transition 100px from top
              , tEnd = 2500   // End at 500px
              , cStart = [254, 152, 0]  
              , cEnd = [254, 25, 36]   
              , cDiff = [cEnd[0] - cStart[0], cEnd[1] - cStart[1], cEnd[1] - cStart[0]];

      function  colorChange(top){
        var p = (top - tStart) / (tEnd - tStart); // % of transition
        p = Math.min(1, Math.max(0, p)); // Clamp to [0, 1]
        var cBg = [Math.round(cStart[0] + cDiff[0] * p), Math.round(cStart[1] + cDiff[1] * p), Math.round(cStart[2] + cDiff[2] * p)];
        return cBg
      } 

    var tStartFix = 0 // Start transition 100px from top
              , tEndFix = 2500   // End at 500px
              , cStartFix = [45, 45, 45]  
              , cEndFix = [219, 48, 78]   
              , cDiffFix = [cEndFix[0] - cStartFix[0], cEndFix[1] - cStartFix[1], cEndFix[1] - cStartFix[0]];
              
      function  colorChangeFix(top){
        var p = (top - tStartFix) / (tEndFix - tStartFix); // % of transition
        p = Math.min(1, Math.max(0, p)); // Clamp to [0, 1]
        var cBg = [Math.round(cStartFix[0] + cDiffFix[0] * p), Math.round(cStartFix[1] + cDiffFix[1] * p), Math.round(cStartFix[2] + cDiffFix[2] * p)];
        return cBg
      } 

        var $sunObj =  $('.sun'),
            docHeight = $(document).height(),
            winHeight = $(window).height();
        
        $(document).scroll(function() {
            var top = $(window).scrollTop();
            var scrolled = (docHeight - 900) * (top / (docHeight - winHeight));

            var coordsSun = 350 - (500 *(scrolled / docHeight));

           var  colorSun = colorChange(top),
                colorFixed = colorChangeFix(top);

            $sunObj.css({
              top: coordsSun,
              'background-color': 'rgb(' + colorSun.join(',') +')',
            });
            $(".fixedBG").css({
              'background-color': 'rgb(' + colorFixed.join(',') +')',
            });
        });


  var sliderContent = ['<div>\
                        <h2 class="title">ctrl+c, ctrl+v</h2>\
                        <p>Skriv varje rad kod för hand, du kommer att lära dig mer av det. Om du börjar klippa och klistra så kommer det bli svårare att förstå hur allt hänger ihop.</p>\
                      </div>',
                      '<div>\
                        <h2 class="title">Kommandoprompten är din vän</h2>\
                        <p>Använd piltangenterna <code>&#x25B2;</code> & <code>&#x25BC;</code> få att gå igenom vad du har skrivit tidigare, sparar väldigt mycket tid.</p>\
                      </div>',
                      '<div>\
                        <h2 class="title">#%&*$@!!!</h2>\
                        <p>Få inte panik när något går fel. Ta det bara lugnt och kolla igenom den senaste koden som du skrev noggrant. Undvik att börjar ctrl+c:a och ctrl+v:a hej vilt. Hittar du inte felet är det bara att zippa ner projektet och skicka det till handledningsmailen så löser vi det.</p>\
                      </div>',
                      '<div>\
                        <h2 class="title">Synka om databasen</h2>\
                        <p>Får du en massa konstiga felmeddelanden även fast koden verkar stämma? Det kan det bero på att du har gjort ändringar till dina modeller med en redan existerande databas. Testa att ta bort databasen och synka om den.</p>\
                      </div>',
                      '<div>\
                        <h2 class="title">Skriv inga romaner</h2>\
                        <p>Gör inga blogginlägg som ni kommer att vilja spara medan ni håller på att utvecklar bloggen. Ni kommer behöva synka om databasen några gånger, och då kommer allt ni har skrivit att försvinna.</p>\
                      </div>',
                      '<div>\
                      <h2 class="title">Testa ofta och tidigt</h2>\
                      <p>Skriv inga längre rader kod utan att testa den. Ha utvecklingsservern igång och testa koden ofta för att se så att allt fungerar som det ska. Det kommer då bli lättare att sätta fingret på vad som är fel när olyckan är framme.</p>\
                      </div>'
                      ];

  sliderContent.sort(function() {return 0.5 - Math.random()});

  $('#slider-id').append(sliderContent);


  $(function() {
      $('#slider-id').codaSlider({
        dynamicTabs: false,
        autoSlide: true,
        dynamicArrows: false,
        slideEaseDuration: 800,
      });
  });

});