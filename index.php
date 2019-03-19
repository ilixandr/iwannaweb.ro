<?php
/*======================================
  == ionut @ 03-Mar-2019              ==
  ======================================*/
  global $language;
  $language = isset($_GET["lang"]) ? ($_GET["lang"] == "en" ? "en" : ($_GET["lang"] == "fr" ? "fr" : "ro")) : "ro";
  require_once(dirname(__FILE__) . '/assets/phpres/strings.' . $language . '.php');
  require_once(dirname(__FILE__) . '/assets/phpres/elements.php');
  $pagename = basename(__FILE__, ".php");
  $pagetitle = $txt[$pagename . "_title"];
  $pagekeywords = "\"" . $txt[$pagename . "_keywords"] . "\"";
  $pagedescription = "\"" . $txt[$pagename . "_description"] . "\"";
?>
<!DOCTYPE html>
<html lang=<?php echo "\"" . $language . "\""?>>
  <?php addHeadHtml($language, $pagetitle, $pagekeywords, $pagedescription)?>
  <body>
    <?php addMenuHtml($language, "index")?>
    <div class="container">
      <div class="col-sm-7">
        <h1>&nbsp;&nbsp;&nbsp;<a href="http://www.iwannaweb.ro">Cluj web design</a><br /> <span>web designer &amp; promovare site</span></h1>
        <p>Orice web designer ştie că secretul unei afaceri de succes stă în felul în care îţi faci reclamă. Potenţialii clienţi caută 
        soluţia problemei cu un "<a href="https://www.google.ro/?gws_rd=cr#q=site+cluj+iwanna.web" target="_blank">Google search</a>". Iar existenţa unei firme fără o creare de site, 
        fără o optimizare de site, fără web design şi promovare online, devine o problemă de management. Sunt situaţii în care clientul intră pe uşa 
        concurentului, trecând direct prin faţa uşii dumneavoastră. De ce a ales asta? Pentru că acest concurent a trecut de la creare de site la 
        optimizare de site, apoi la promovarea site-ului si in final la succes. E mai comod aşa!</p>
      </div>
      <div class="col-sm-5">
        <img src="assets/img/slider/slider.gif" alt=""/>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-3">
        <img src="assets/img/webdesign_creare_optimizare_site.png" alt="site Cluj, Cluj web" />
        <h3>Cluj web designer<br /><span>creare site cluj &amp; web design</span></h3>               
        <p><a href="http://www.iwannaweb.ro">iwanna.web | Cluj web designer</a> oferă soluţii de web design, creare site, optimizare şi promovare 
        site clienţilor din Cluj, Bistriţa, Alba, Mureş, Salaj, Bihor, Arad şi alte judeţe din ţară.</p>
      </div>
      <div class="col-sm-3">
        <img src="assets/img/webdesign_SEO.png" alt="web design, creare site, optimizare site" />
        <h3>Optimizare site Cluj<br /><span>promovare site Cluj &amp; web design</span></h3>                
        <p>Fie că doriţi optimizarea site-ului dumneavoastră, fie că vă doriţi o creare de site, <a href="http://www.iwannaweb.ro">iwanna.web | Cluj web designer</a> 
        vă poate oferi servicii de calitate, raportate la un preţ firesc!</p>
      </div>
      <div class="col-sm-3">
        <img src="assets/img/webdesign_helpdesk_.png" alt="web designer, promovare site, cluj web asistenta" />
        <h3>HelpDesk personal<br /><span>Cluj web - asistenţă IT</span></h3>
        <p><a href="http://www.iwannaweb.ro/helpdesk.html">Cluj web - asistenţă</a> vine să ne asigure clienţii cei mai mulţumiţi, fiind un serviciu 
        de HelpDesk deschis între orele 8:30 AM si 18:30 PM. Aveţi o problemă IT? Noi o vom rezolva!</p>
      </div>
      <div class="col-sm-3">
        <img src="assets/img/webdesign_solutii_IT.png" alt="web design cluj, solutii software, site cluj" />
        <h3>Soluţii software & web site Cluj<br /><span>Cluj web designer &amp; soluţii soft</span></h3>
        <p>Un HelpDesk profesionist e mereu la post! IT-ul nu e doar web design, realizare de site sau optimizare de site, de aceea vom 
        oferi, pe blog sau live, soluţii şi ponturi software.</p>
      </div>
    </div>  
    <div class="cleaner"></div>
    <div class="container">
      <div class="col-sm-4">
        <h3>Cine suntem...</h3>
        <div class="news_box">
          <a href="http://www.iwannaweb.ro">Cluj web design & promovare site</a>
          <p>Ne ocupăm de creare de web site-uri in Cluj. Servicii de web design, promovare site - <b><u>iwanna.web | Cluj web designer</u></b>.</p>
        </div>
        <div class="news_box">
          <a href="http://www.iwannaweb.ro">Web desing în judeţele vecine</a>
          <p>Nu contează că nu sunteţi din Cluj. Putem crea site-uri şi pentru clienţi din judeţele vecine. </p>
        </div>
        <div class="news_box">
          <a href="http://www.iwannaweb.ro/portofoliu.html">Optimizare site-uri web</a>
          <p>Un site web care apare între primele rezultate pe Google are toate şansele să fie un mare atu de marketing.</p>
        </div>
        <div class="news_box">
          <a href="http://www.iwannaweb.ro/helpdesk.html">Experienţă în IT</a>
          <p><b><u>iwanna.web | Cluj web designer</u></b> - puţine sunt secretele pe IT-ul le mai are pentru noi!</p>
        </div>
        <div class="cleaner h20"></div>
      </div>
      <div class="col-sm-4">
        <h3>HelpDesk personalizat</h3>
        <div class="image_frame_300"><span></span><img src="assets/img/webdesign_helpdesk.png" alt="webdesign, SEO si helpdesk" /></div>
        <p><em>"O problemă nu poate fi rezolvată decât la un nivel de gândire diferit faţă de cel la care a fost creată." (Albert EINSTEIN)</em></p>
        <p><a href="http://www.iwannaweb.ro" target="_parent">IWANNA.WEB</a> înseamnă în principal creare, optimizare  şi promovareare de site-uri web. 
        În Cluj, web design-ul şi asistenţa IT vor fi principalii vectori de dezvoltare, dar vom oferi asistenţă IT oricărui client care ne solicită, 
        având ca principal site Cluj, deservind, remote, orice judeţ din România!</p>
        <div class="cleaner h20"></div>
      </div>
      <div class="col-sm-4">
        <h3>Blog - soluţii IT</h3>
        <div class="image_frame_300"><span></span><img src="assets/img/webdesign_blog.png" alt="webdesign, optimizare saituri web si solutii IT - blog" /></div>
        <p><em>"Drumul cel mai scurt e acela pe care îl cunoşti. Dar fără aventurieri, care să se abată de la drum, nu s-ar mai inventa scurtături!" (Proverb)</em></p>
        <p>Vom crea site-uri web pentru zona Clujului, vom oferi soluţii de tip HelpDesk oricui ne va cere şi vom veni în întâmpinarea dumeavoastră, oriunde aţi fi, 
        cu articole pe blog, în care vom discuta diferite aspecte IT şi vă vom oferi diverse ponturi - <b>Cluj web designer</b> va deveni <b>Cluj IT advisor</b>.</p>
        <div class="cleaner h20"></div>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-4">
        <a href="http://www.facebook.com/iwannaweb"><img src="assets/img/fb_32_32.png" alt="Cluj web designer" style="vertical-align:middle"/></a>
        <a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
        <a href="http://www.facebook.com/iwannaweb">Facebook</a>
      </div>
      <div class="col-sm-4">
        <a href="http://www.twitter.com/iwannaweb"><img src="assets/img/tw_32_32.png" alt="Cluj web designer" style="vertical-align:middle"/></a>
        <a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
        <a href="http://www.twitter.com/iwannaweb">Twitter</a>
      </div>
      <div class="col-sm-4">
        <a href="//plus.google.com/106919341084706153999?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;vertical-align:middle">
          <img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="cluj web designer Google+" style="border:0;width:16px;height:16px;"/>
        </a>
        <a href="https://plus.google.com/106919341084706153999" rel="publisher"></a>
        <a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
        <a href="https://plus.google.com/106919341084706153999">Google+</a>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-4">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ro_RO/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div style="margin-left: 10px;" class="fb-like" data-href="https://www.facebook.com/pages/Iwanna-web/192732267566140" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
      </div>
    </div>
    <div class="cleaner h20"></div>
    <?php addFooterHtml($language, "index")?>
    <script type="text/javascript">
  	  (() => {
        let po = document.createElement("script"); 
        po.type = "text/javascript"; 
        po.async = true;
        po.src = "https://apis.google.com/js/plusone.js?publisherid=106919341084706153999";
        let s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(po, s);
      })();
  	</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Flag icons to be credited 
<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->