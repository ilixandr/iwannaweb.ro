<?php
/*======================================
  == ionut @ 04-Mar-2019              ==
  ======================================*/
  global $language;
  $language = isset($_GET["lang"]) ? ($_GET["lang"] == "en" ? "en" : ($_GET["lang"] == "fr" ? "fr" : "ro")) : "ro";
  require_once(dirname(__FILE__) . '/assets/phpres/strings.' . $language . '.php');
  $pagename = basename(__FILE__, ".php");
  $pagetitle = $txt[$pagename . "_title"];
  $pagekeywords = "\"" . $txt[$pagename . "_keywords"] . "\"";
  $pagedescription = "\"" . $txt[$pagename . "_description"] . "\"";
?>
<!DOCTYPE html>
<html lang=<?php echo $language?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pagetitle ?></title>
    <meta name="keywords" content=<?php echo $pagekeywords ?> />
  	<meta name="description" content=<?php echo $pagedescription ?> />
  	<meta name="alexaVerifyID" content="v29ZnO1qm4DkMR-EiIIz_aOrQ00" />
  	<link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  	<link rel="stylesheet" href="assets/css/main.css" type="text/css">
  </head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="topmenu">
        <div class="left-topmenu">
          <a class="topmenu-a" href="https://facebook.com" target="_blank">
            <i class="fab fa-iww fa-facebook-f"></i>
          </a>
          <a class="topmenu-a" href="https://twitter.com" target="_blank">
            <i class="fab fa-iww fa-twitter"></i>
          </a>
          <a class="topmenu-a" href="https://github.com" target="_blank">
            <i class="fab fa-iww fa-github"></i>
          </a>
        </div>
        <div class="right-topmenu">
          <ul class="nav navbar-nav navbar-nav-fit">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">
                <?php echo $txt["lang"]?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href=<?php echo "index.php?lang=" . substr($txt["lang_flag_1"], 0, 2)?>><img class="img-flag" src=<?php echo "\"assets/img/" . $txt["lang_flag_1"] . ".svg\""?>><?php echo $txt["lang_alt_1"]?></a>
                </li>
                <li>
                  <a href=<?php echo "index.php?lang=" . substr($txt["lang_flag_2"], 0, 2)?>><img class="img-flag" src=<?php echo "\"assets/img/" . $txt["lang_flag_2"] . ".svg\""?>><?php echo $txt["lang_alt_2"]?></a>
                </li> 
              </ul>
            </li> 
          </ul>
          <form class="navbar-form navbar-right col-md-6 col-xs-6" action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder=<?php echo $txt["search"]?>>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>  
            </div>
          </form>
        </div>
      </div>
  	  <div class="container-fluid container-fluid-white">
        <div class="navbar-header">           
      	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
        	  <span class="icon-bar"></span>
        	  <span class="icon-bar"></span>                        
      	  </button>
      	  <a class="navbar-brand navbar-brand-fit" href="index.html"><img class="logo" src="assets/img/logo.png" alt=""/></a>
    	  </div>
    	  <div id="sticky-header">
    	    <div class="collapse navbar-collapse" id="myNavbar">
      	    <ul class="nav navbar-nav">
              <li class="activ"><a href="http://www.iwannaweb.ro"><?php echo $txt["home"]?></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href=""><?php echo $txt["webdev"]?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><?php echo $txt["services"]?></a></li>
                  <li><a href="#"><?php echo $txt["pricing"]?></a></li>
                  <li><a href="#"><?php echo $txt["software"]?></a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.iwannaweb.ro/portofoliu_page3.html"><?php echo $txt["portfolio"]?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><?php echo $txt["recent"]?></a></li>
                  <li><a href="#"><?php echo $txt["archive"]?></a></li>
                </ul>
              </li>
              <li><a href="http://www.iwannaweb.ro/crypto/"><?php echo $txt["crypto"]?></a></li>
              <li><a href="http://www.iwannaweb.ro/blog/"><?php echo $txt["blog"]?></a></li>
              <li><a href="http://www.iwannaweb.ro/contact.asp"><?php echo $txt["contact"]?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="col-sm-9">
      	<h1>HelpDesk &amp; asistenţă IT</h1>
        <div class="image_frame_300 image_fl"><span></span><img src="assets/img/webdesign_helpdesk.png" alt= "servicii helpdesk, asistententa IT, Cluj web designer" /></div>
        <p><em>Pentru că ne dorim să avem clienţii cei mai mulţumiţi, oferim si servicii HelpDesk, cu program deschis între orele 8:30 AM şi 18:30 PM. Aveţi o problemă care 
		necesită asistenţă IT? Noi o vom rezolva! </em></p>
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
