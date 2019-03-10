<?php
/*======================================
  == ionut @ 07-Mar-2019              ==
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
    <div id="iwwmain">
    		<h2>Portofoliu :: <em>site-uri <a href="http://www.iwannaweb.ro">iwanna.web | Cluj web designer</a></em></h2>
            <p><em>Serviciile noastre sunt: creare site, optimizare site, promovare site (principal site Cluj, dar oferta e valabilă şi pentru judeţele vecine). Web design-ul necesită 
			lucru încontinuu, pentru a putea ţine pasul cu publicitatea agresivă promovată de giganţii comerciali ai momentului.</em></p>   
            
            <div class="cleaner h30"></div>
          	<div id="gallery">
                <div class="gallery_box">
                	<a class="pirobox" href="images/gallery/webdesign_SEO_1.png" title="http://www.iwannaweb.ro">
                        <span class="image_frame_900"><span></span>
                            <img src="images/gallery/webdesign_SEO_1.png" alt="Cluj web designer, creare, optimizare site Cluj" />
                        </span>
                    </a>
					<a href="http://www.iwannaweb.ro">Creare site web</a>
                    <div class="cleaner"></div>
                </div>                
            </div>
            <div class="cleaner"></div>
            <div class="pagging">
								<ul>
									<li><a href="http://www.iwannaweb.ro/portofoliu.html" target="_parent">&lt;&lt;&lt;</a></li>
									<li><a href="http://www.iwannaweb.ro/portofoliu.html" target="_parent">1</a></li>
									<li><a href="http://www.iwannaweb.ro/portofoliu_page2.html" target="_parent">2</a></li>
									<li><a href="http://www.iwannaweb.ro/portofoliu_page3.html" target="_parent">3</a></li>
									<li><a href="http://www.iwannaweb.ro/portofoliu_page4.html" target="_parent">4</a></li>
									<li><a href="http://www.iwannaweb.ro/portofoliu_page4.html" target="_parent">&gt;&gt;&gt;</a></li>
								</ul>
								<div class="cleaner"></div>
			</div>
			<!-- social networking goes here !-->
			<div class="col_allw300">
				<a href="http://www.facebook.com/iwannaweb"><img src="images/fb_32_32.png" alt="Cluj web designer" style="vertical-align:middle"/></a>
				<a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
				<a href="http://www.facebook.com/iwannaweb">Facebook</a>
			</div>
			<div class="col_allw300">
				<a href="http://www.twitter.com/iwannaweb"><img src="images/tw_32_32.png" alt="Cluj web designer" style="vertical-align:middle"/></a>
				<a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
				<a href="http://www.twitter.com/iwannaweb">Twitter</a>
			</div>
			<div class="col_allw300 col_rm">
				<a href="//plus.google.com/106919341084706153999?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;vertical-align:middle">
				<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="cluj web designer Google+" style="border:0;width:16px;height:16px;"/>
				</a>
				<a href="https://plus.google.com/106919341084706153999" rel="publisher"></a>
				<a href="http://www.iwannaweb.ro" target="_parent"><b>Cluj web designer</b></a> pe 
				<a href="https://plus.google.com/106919341084706153999">Google+</a>
			</div>
			<div class="col_allw300">			
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
        <div class="cleaner"></div>
    </div>
</div>
  <?php addFooterHtml($language, "portfolio")?>
</body>
</html>
