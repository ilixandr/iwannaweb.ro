<?php
/*======================================
  == ionut @ 29-Mar-2019              ==
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
  <?php addMenuHtml($language, "portfolio")?>
  <div class="container">
		<div class="port-top">
		  <div class="col-xs-8 col-md-8">
		    <div class="port-text">
          <p class="text-justify"><i class="fas fa-quote-right fas-iww-small"></i><b><?php echo $txt["portfolio_p0_quote"]?></b><i class="fas fa-quote-left fas-iww-small"></i><b><?php echo $txt["portfolio_p0_author"]?></b></p>
		      <p class="text-justify"><?php echo $txt["portfolio_p1"]?></p>
		      <p class="text-justify"><?php echo $txt["portfolio_p2"]?></p>
				</div>
			</div>
			<div class="col-xs-4 col-md-4">
			  <img class="img-responsive" src="assets/img/portfolio.jpg" alt="alt">
			</div>
    </div>
	</div>
	<div class="container">
    <h1 class="text-center"><?php echo $txt["portfolio_what_we_do"]?></h1>
		<div class="what-we-do">
			<div class="port-spec">
				<?php drawCircle(300, 85, 149, 20, "#4484CE")?>
				<h3><?php echo $txt["portfolio_dynamic_websites"]?></h3>
      </div>
			<div class="port-spec">
				<?php drawCircle(300, 75, 149, 20, "#4484CE")?>
				<h3><?php echo $txt["portfolio_web_apps"]?></h3>
      </div>
			<div class="port-spec">
				<?php drawCircle(300, 95, 149, 20, "#4484CE")?>
				<h3><?php echo $txt["portfolio_pres_web"]?></h3>
      </div>
    </div>
	</div>
  <div class="container">
    <h1 class="text-center"><?php echo $txt["portfolio_our_projects"]?></h1>
    <section id="photos">
      <?php createPortfolioGallery(dirname(__FILE__) . '/assets/phpres/portfolio.config.json', 'http://localhost/iwannaweb.ro/assets/img/portfolio/', $language)?>
    </section>
  </div>
  <div class="cleaner h50"></div>
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
  <div class="cleaner h10"></div>
	<?php addFooterHtml($language, "portfolio")?>
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
