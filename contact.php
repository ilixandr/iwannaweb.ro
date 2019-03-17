<?php
/*======================================
  == ionut @ 17-Mar-2019              ==
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
  <?php addMenuHtml($language, "contact")?>
  <?php
  $action = $_REQUEST['action'];
  if ($action == "") { /* display the contact form */
  ?>
    <div class="container">
	  <h2>Contact</h2>
	  <div class="col-sm-9">
		  <h4>Trimiteţi-ne un mesaj...</h4>
		  <form id="form1" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="E-mail">E-mail:</label> 
			  <input type="text" class="validate-email required input_field" name="E-mail" id="E-mail"/>
			  <!-- https://getbootstrap.com/docs/4.0/components/forms/ -->
            </div>
			<div class="cleaner h10"></div>
			<label for="Subiect">Subiect:</label> <input type="text" class="validate-subject required input_field" name="Subiect" id="Subiect"/>				               
			<div class="cleaner h10"></div>
			<label for="Mesaj">Mesaj:</label> <textarea id="text" name="Mesaj" rows="0" cols="0" class="required"></textarea>
			<div class="cleaner h10"></div>				
			<input type="submit" value="Trimite" id="submit" name="submit" class="submit_btn float_l" />
			<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
		  </form>
	  </div>
      <div class="col-sm-3">
	    <div class="col_fw">	
          <h4>Adresa:</h4>
          <h6><strong>iwanna.web | Cluj web designer</strong></h6>
          400492, Cluj-Napoca, <br/>
          Cluj, România<br/>
          "web design pentru toata lumea"<br/><br/>
		  <strong>Telefon:</strong> ??? <br />
          <strong>E-mail:</strong> <a href="mailto:helpdesk@iwannaweb.ro">helpdesk@iwannaweb.ro</a>
        </div>            
        <div class="col_fw_last">
          <h4>Unde ne gasiţi...</h4>
          <div id="map">
			  <a class="pirobox" href="images/webdesign_map_big.png" title="Adresa noastra...">
				<img src="images/webdesign_map_small.png" alt="Cluj web designer, creare site Cluj" />
			  </a>
		  </div>                
		  <a href="https://maps.google.ro/maps?f=q&amp;source=s_q&amp;hl=ro&amp;geocode=&amp;q=Strada+Meteor,+Cluj-Napoca,+Cluj&amp;aq=0&amp;oq=strada+mete&amp;sll=46.777248,23.59989&amp;sspn=0.289198,0.837021&amp;gl=ro&amp;ie=UTF8&amp;hq=&amp;hnear=Strada+Meteor,+Cluj-Napoca,+Cluj&amp;t=m&amp;z=14&amp;ll=46.754357,23.590124&amp;" target="_blank">Link Google Maps</a>
		</div>
	  </div>
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
		<script>
		  (function(d, s, id) {
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
  <?php
  } else {
    $email=$_REQUEST['E-mail'];
    $subject=$_REQUEST['Subiect'];
    $message=$_REQUEST['Mesaj'];
    if (($email == "")||($subject == "")||($message== "" )) {
	  echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
    } else {
      $fromValue = "From: <$email>\r\nReturn-path: $email";
      $subjectValue = "Message sent using your contact form: " . $subject;
      mail("ilixandr@gmail.com", $subjectValue, $message, $fromValue);
	  echo "Email sent!";
	}
  }
  ?>
  <div class="cleaner h20"></div>
    <?php addFooterHtml($language, "contact")?>
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