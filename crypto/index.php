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
      <div class="col-md-4 col-md-offset-4">
        <h1>Coming soon...</h1>
      </div>
    </div>
    <div class="container">
      <div class="iframe-div">
        <iframe class="pendulum" src="https://player.vimeo.com/video/249400106?autoplay=1&loop=1&title=0&portrait=0&muted=1" frameborder="0"></iframe>
      </div>
    </div>
    <div class="container">
      <div id="adblock-detection-text"></div>
      <div class="row">
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="1027" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="52" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="1831" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
      </div>
      <div class="row">
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="2" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="1765" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="1839" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
        <div class="coinmarketcap-currency-widget col-md-3 col-xs-3" data-currencyid="512" data-base="USD" data-secondary="" data-ticker="false" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="false"></div>
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
    <?php addFooterHtml($language, "crypto")?>
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
    <script type="text/javascript">
      let adblock = true;
    </script>
    <script type="text/javascript" src="../assets/js/adframe.js"></script>
    <script type="text/javascript">
      if (adblock) {
        let text = <?php echo json_encode($txt["adblock-detection-text"])?>;
        let adt = document.getElementById('adblock-detection-text');
        adt.style.padding = "10px";
        adt.style.margin = "10px";
        adt.style.border = "2px solid black";
        adt.style.borderRadius = "5px";
        adt.style.width = "100%";
        adt.style.height = "100px";
        adt.display = "flex";
        adt.innerHTML = text;
      }
    </script>
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
