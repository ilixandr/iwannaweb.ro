<?php
/*======================================
  == ionut @ 04-Mar-2019              ==
  ======================================*/
  global $language;
  $language = isset($_GET["lang"]) ? ($_GET["lang"] == "en" ? "en" : ($_GET["lang"] == "fr" ? "fr" : "ro")) : "ro";
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/strings.' . $language . '.php');
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/elements.php');
  $pagename = basename(__FILE__, ".php");
  $pagetitle = $txt[$pagename . "_title"];
  $pagekeywords = "\"" . $txt[$pagename . "_keywords"] . "\"";
  $pagedescription = "\"" . $txt[$pagename . "_description"] . "\"";
?>
<!DOCTYPE html>
<html lang=<?php echo $language?>>
<?php addHeadHtml($language, $pagetitle, $pagekeywords, $pagedescription)?>
<body>
  <?php addMenuHtml($language, "crypto")?>
    <div class="container">
      <div class="col-sm-9">
      	<h1>HelpDesk &amp; asistenţă IT</h1>
        <div class="image_frame_300 image_fl"><span></span><img src="assets/img/webdesign_helpdesk.png" alt= "servicii helpdesk, asistententa IT, Cluj web designer" /></div>
        <p><em>Something about crypto</em></p>
        <p>În anii '90 se spunea tot mai des că trăim în "secolul vitezei". Şi, într-adevăr, la vremea respectivă, aspectul care devenea hotărâtor în ceea ce avea pretenţia 
		să se numească economie de piaţă era raportul calitate/ preţ/ viteză de execuţie. Astăzi ne vedem, cu sau fără voia noastră, migraţi spre o societate de tip informaţional, 
		în care publicitatea a devenit un factor chiar mai important decât calitatea, întrucât dacă nimeni nu ştie ce şi unde vinzi, va trebui să te raportezi la societatea 
		pur "vitezistă", pe cale de dispariţie. Dacă exişti în mediul virtual, exişti pentru competiţie. Aici intră în scenă web design-ul, crearea de site-uri web, iar 
		promovarea site-ului vă va aduce pe piaţă, putând profita strategic de plusul de calitate pe care îl oferiţi. Totul devine încet-încet informatizat, iar noi vă putem 
		oferi asistenţă IT pentru orice tip de problemă, pe lângă crearea unui site web şi optimizarea lui pentru motoarele de căutare.</p>
        <p>Suntem <a href="http://www.iwannaweb.ro">iwanna.web | Cluj web designer</a>, ne dorim să avem cei mai mulţumiţi clienţi, iar serviciile noastre cuprind:</p><br/>
		<ul>
		  <li><strong>creare site web</strong>, promovare site web, <strong>web design</strong>;</li>
		  <li>optimizare site web pentru motoarele de căutare (<strong>SEO</strong> - Search Engine Optimization);</li>
		  <li><strong>servicii HelpDesk şi asistenţă IT</strong> pentru orice problemă de tip software / hardware - remote sau la sediul clientului;</li>
		  <li>servicii de <strong>promovare</strong> a clientului - afişe, postere si promovare în mediul online.</li>
		</ul>
		<div class="col-sm-12">
			<div class="spacer-dash"></div>
		  	<div class="col-sm-6">
		  	  <h2>HelpDesk</h2>
              <p>Pentru clienţii noştri, dar şi pentru oricine altcineva are nevoie, oferim servicii de asistenţă IT (onsite sau remote, hardware şi software). Companiile mari 
			  dispun de un HelpDesk profesional, gata oricând să rezolve problemele informatice. Acum puteţi avea şi dumneavoastră propriul HelpDesk! E suficient să ne contactaţi!</p>	
		  	</div>
		  	<div class="col-sm-6">
		  	  <h2>Cluj web design</h2>
              <p><b>Web design</b>, creare de site-uri web, optimizare pentru motoarele de căutare - <b>SEO</b>, promovare în mediul online, publicitate. Tot ceea ce aveţi nevoie 
			  pentru a putea face faţă competiţiei se află acum la un click distanţă! Mizăm pe o acoperire la 360 de grade, prin complementarea serviciilor de <strong>web design</strong> 
			  cu cele de tip <strong>helpdesk</strong>.</p>	
		  	</div>
		</div>
      </div>
      <div class="col-sm-3">
        <h4>10 linkuri utile</h4>
		<i>Mai jos veţi găsi 10 linkuri utile, care sperăm să ţină loc de asistanţă de bază pentru diferite întrebări şi probleme de IT pe care le-aţi putea avea:</i><br/><br/>
        <iframe frameborder="0" scrolling="no" height="300px" src="http://www.iwannaweb.ro/blog/utile-links.html"></iframe>
        <div class="spacer-dash"></div>
        <h4>Ultimele noutăţi...</h4>
        <iframe frameborder="0" scrolling="no" height="300px" src="http://www.iwannaweb.ro/blog/noutati-links.html"></iframe>
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
    <?php addFooterHtml($language)?>
    <script type="text/javascript">
  	  (function() {
        var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
        po.src = "https://apis.google.com/js/plusone.js?publisherid=106919341084706153999";
        var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
      })();
      </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
