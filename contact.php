<?php
/*======================================
  == ionut @ 17-Mar-2019              ==
  ======================================
  == Note: php's mail() does not work ==
  == on localhost !                   ==
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
  if (!isset($_POST["submit"])) { /* display the contact form */
  ?>
    <div class="container">
    <h2><?php echo $txt["contact_contact_us"]?></h2>
    <h5><?php echo $txt["contact_we_will_reply"]?></h5>
    <div class="cleaner h10"></div>
    <div class="cleaner h10"></div>
	  <div class="col-sm-9">
      <fieldset class="fldset-style">
        <legend class="lgnd-style"><?php $txt["contact_legend_text"]?></legend>
		    <form action="" method="POST" enctype="multipart/form-data">
			    <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
				    <input type="email" class="form-control" name="E-mail" id="E-mail" placeholder="<?php echo $txt["contact_email"]?>" oninvalid="this.setCustomValidity('<?php echo $txt['contact_email_error']?>')"/>
          </div>
			    <div class="cleaner h10"></div>
			    <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><?php echo $txt["subject"]?></span>
				    <input type="text" class="form-control" name="Subiect" id="Subiect" placeholder="<?php echo $txt["contact_subject_placeholder"]?>"/>				               
			    </div>
			    <div class="cleaner h10"></div>
			    <div class="form-group">
			      <span class="input-group-addon input-group-addon-left" id="basic-addon1"><?php echo $txt["message"]?></span>
				    <textarea id="text" name="Mesaj" rows="3" cols="0" class="form-control"></textarea>
          </div>
			    <div class="cleaner h10"></div>				
          <div class="btn-grp-right">
            <input type="submit" value="<?php echo $txt["send"]?>" id="submit" name="submit" class="btn btn-primary" />
            <div class="separator-space"></div>
            <input type="reset" value="<?php echo $txt["reset"]?>" id="reset" name="reset" class="btn btn-danger" />
          </div>
        </form>
      </fieldset>
			<div class="cleaner h10"></div>		
	  </div>
    <div class="col-sm-3">
	    <div class="col_fw">	
          <h4><?php echo $txt["how_to_get_in_touch"]?></h4>
          <?php echo $txt["get_in_touch_text"];?>
      </div>            
      <div class="col_fw_last">
        <h4><?php echo $txt["company_name"]?></h4>
        <?php echo $txt["what_we_do"]?>
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
  </div>
  <?php
  } else {
    $email = htmlspecialchars($_REQUEST['E-mail']);
    $subject = htmlspecialchars($_REQUEST['Subiect']);
    $message = htmlspecialchars($_REQUEST['Mesaj']);
    if (($email == "") || ($subject == "") || ($message== "" )) {
	  echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
    } else {
      $fromValue = "From: <$email>\r\nReturn-path: $email";
      $subjectValue = "Message sent using your contact form: " . $subject;
      mail("ilixandr@gmail.com", $subjectValue, $message, $fromValue);
	  echo $txt["email_sent"];
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