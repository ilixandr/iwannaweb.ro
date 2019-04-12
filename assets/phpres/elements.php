<?php
function addFooterHtml($language, $pagename) {
  require(dirname(__FILE__) . '/strings.' . $language . '.php');
  echo '<footer id="iwwFooter">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h2 class="logo"><a href="http://localhost/iwannaweb.ro"><img src="', $pagename == "crypto" | $pagename == "blog" ? "../" : "", 'assets/img/logo.png" alt=""/></a></h2>
      </div>
      <div class="col-sm-2">
        <h5>', $txt["f_webdev_small"], '</h5>
        <ul>
          <li><a href="#"><i class="fa fa-info special"></i>', $txt["f_news"], '</a></li>
          <li><a href="#"><i class="fa fa-server special"></i> ', $txt["f_free_soft"], '</a></li>
          <li><a href="#"><i class="fa fa-question-circle special"></i> ', $txt["f_ask_help"], '</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h5>', $txt["f_crypto_small"], '</h5>
        <ul>
          <li><a href="#"><i class="far fa-lightbulb special"></i> ', $txt["f_info"], '</a></li>
          <li><a href="#"><i class="far fa-chart-bar special"></i> ', $txt["f_trends"], '</a></li>
          <li><a href="#"><i class="fab fa-twitter special"></i> ', $txt["f_twitter_iwannacrypto"], '</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h5>', $txt["f_social"], '</h5>
        <ul>
          <li><a href="http://localhost/iwannaweb.ro/blog/"><i class="fas fa-pen-square special"></i> ', $txt["f_blog_small"], '</a></li>
          <li><a href="#"><i class="fa fa-bullhorn special"></i> ', $txt["f_recomm"], '</a></li>
          <li><a href="#"><i class="fa fa-paper-plane special"></i> ', $txt["f_telegram"], '</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <div class="social-networks">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="google"><i class="fab fa-github"></i></a>
        </div>
        <a href="http://localhost/iwannaweb.ro/contact.php" class="btn btn-default">', $txt["f_contact_us"], '</a>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <p>© 2013-', date("Y"), ' <a href="http://localhost/iwannaweb.ro">iwannaweb</a> | ', $txt["f_slogan"], ' </p>
  </div>
</footer>';
}
function addMenuHtml($language, $pagename) {
  require(dirname(__FILE__) . '/strings.' . $language . '.php');
  $indexIsActive = "";
  $webdevIsActive = "";
  $portfolioIsActive = "";
  $blogIsActive = "";
  $cryptoIsActive = "";
  $contactIsActive = "";
  switch ($pagename) {
    case "index":
      $indexIsActive = " class=\"activ\"";
      break;
    case "webdev":
      $webdevIsActive = " activ";
      break;
    case "portfolio":
      $portfolioIsActive = " activ";
      break;
    case "blog":
      $blogIsActive = " class=\"activ\"";
      break;
    case "crypto":
      $cryptoIsActive = " class=\"activ\"";
      break;
    case "contact":
      $contactIsActive = " class=\"activ\"";
      break;
  }
  echo '<nav class="navbar navbar-inverse">
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
          <a class="dropdown-toggle lang-color" data-toggle="dropdown" href="">', 
            $txt["lang"], 
            '<img class="img-flag" src="', $pagename == "crypto" | $pagename =="blog" ? "../" : "", 'assets/img/', $txt["lang_flag_0"], '.svg" alt=""><span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="', $pagename == "crypto" | $pagename == "blog" ? "index" : $pagename, '.php?lang=', substr($txt["lang_flag_1"], 0, 2), '"><img class="img-flag" src="', $pagename == "crypto" | $pagename =="blog" ? "../" : "",'assets/img/', $txt["lang_flag_1"], '.svg">', $txt["lang_alt_1"], '</a>
            </li>
            <li>
              <a href="', $pagename == "crypto" | $pagename == "blog" ? "index" : $pagename, '.php?lang=', substr($txt["lang_flag_2"], 0, 2), '"><img class="img-flag" src="', $pagename =="crypto" | $pagename =="blog" ? "../" : "", 'assets/img/', $txt["lang_flag_2"], '.svg">', $txt["lang_alt_2"], '</a>
            </li> 
          </ul>
        </li> 
      </ul>
      <form class="navbar-form navbar-right col-md-6 col-xs-6" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder=', $txt["search"], '>
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
      <a class="navbar-brand navbar-brand-fit" href="index.html"><img class="logo" src="', $pagename == "crypto" | $pagename =="blog" ? "../" : "", 'assets/img/logo.png" alt=""/></a>
    </div>
    <div id="sticky-header">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li', $indexIsActive,'><a href="http://localhost/iwannaweb.ro">', $txt["home"], '</a></li>
          <li class="dropdown ', $webdevIsActive,'">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">', $txt["webdev"],'<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/iwannaweb.ro/webdev.php', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["services"], '</a></li>
              <li><a href="#', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["pricing"], '</a></li>
              <li><a href="#', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["software"], '</a></li>
            </ul>
          </li>
          <li class="dropdown ', $portfolioIsActive,'">
            <a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/iwannaweb.ro/portofoliu_page3.html">', $txt["portfolio"], '<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/iwannaweb.ro/portfolio.php', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["recent"], '</a></li>
              <li><a href="#', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["archive"], '</a></li>
            </ul>
          </li>
          <li', $cryptoIsActive,'><a href="http://localhost/iwannaweb.ro/crypto/index.php', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["crypto"], '</a></li>
          <li', $blogIsActive, '><a href="http://localhost/iwannaweb.ro/blog/', $language == "ro" ? "" : ($language == "en" ? "index.php?lang=en" : "index.php?lang=fr"), '">', $txt["blog"], '</a></li>
          <li', $contactIsActive, '><a href="http://localhost/iwannaweb.ro/contact.php', $language == "ro" ? "" : ($language == "en" ? "?lang=en" : "?lang=fr"), '">', $txt["contact"], '</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>';
}
function addHeadHtml($language, $title, $keywords, $description) {
  require(dirname(__FILE__) . '/strings.' . $language . '.php');
  echo '<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>', $title, '</title>
  <meta name="keywords" content=', $keywords,' />
  <meta name="description" content=', $description,' />
  <meta name="alexaVerifyID" content="v29ZnO1qm4DkMR-EiIIz_aOrQ00" />
  <link href="assets/img/favicon.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/iwannaweb.ro/assets/css/main.css" type="text/css">
</head>';
}
function drawCircle($box, $percentage, $radius, $margin, $color) {
  /*===================================================*\
  = drawCircle(box, percentage, radius, margin, color)  =
  = ionut @ 29-mar-2019                                 =
  =-----------------------------------------------------=
  = $box is indicating the box size, box is a square    =
  = $percentage is the percentage the circle displays   =
  = $radius is the external radius of the circle        =
  = $margin is the circle's thickness                   =
  = $color is circle's base color                       =
  =-----------------------------------------------------=
  = depends on custom css (add this to your css file)   =
  = .svg-text-big {font: italic 80px sans-serif}        =
  =   + (if you change 80px, adapt text's x and y)      =
  = svg:hover text {fill: #F9CF00}                      =
  = svg:hover .flashy {fill: #F9CF00}                   =
  \*===================================================*/
  /* Calculate x and y */
  $x = floor(-$radius * cos(deg2rad(90 + 3.6 * $percentage)));
  $y = floor(-$radius * sin(deg2rad(90 + 3.6 * $percentage)));
  echo '<svg width="' . $box . '" height="' . $box . '" viewBox="0 0 ' . $box . ' ' . $box . '">
<g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')" stroke="#eeeff3" stroke-width="1">
  <path class="flashy" d="M0 0 0-' . $radius . 'A' . $radius . ' ' . $radius . ' 0 ' . ($percentage > 49 ? 1 : 0) . ' 1' . ($x < 0 ? '' : ' ') . $x . ($y < 0 ? '' : ' ') . $y . 'Z" fill="' . $color . '"/>
  <path d="M0 0' . ($x < 0 ? '' : ' ') . $x . ($y < 0 ? '' : ' ') . $y . 'A' . $radius . ' ' . $radius . ' 0 ' . ($percentage > 49 ? 0 : 1) . ' 1 0-' . $radius . 'Z" fill="#eeeff3"/>
</g>
<g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')" stroke="#eeeff3" stroke-width="1">
  <path d="M0 0 0-' . ($radius - $margin) . 'A' . ($radius - $margin) . ' ' . ($radius - $margin) . ' 0 1 1-' . ($radius - $margin) . ' 0Z" fill="#eeeff3"/>
  <path d="M0 0-' . ($radius - $margin) . ' 0A' . ($radius - $margin) . ' ' . ($radius - $margin) . ' 0 0 1 0-' . ($radius - $margin) . 'Z" fill="#eeeff3"/>
</g>
<g class="flashy-g" transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')" stroke="#eeeff3" stroke-width="1">
  <path d="M0 0 0-' . ($radius - $margin / 2) . 'A' . ($radius - $margin / 2) . ' ' . ($radius - $margin /2) . ' 0 1 1-' . ($radius - $margin / 2) . ' 0Z" fill="#eeeff3"/>
  <path d="M0 0-' . ($radius - $margin / 2) . ' 0A' . ($radius - $margin / 2) . ' ' . ($radius - $margin / 2) . ' 0 0 1 0-' . ($radius - $margin / 2) . 'Z" fill="#eeeff3"/>
</g>
<g transform="translate(' . ($radius + 1) . ', ' . ($radius + 1) . ')">
  <text class="svg-text-big" x="' . '-90' . '" y="' . 37 . '" fill="' . $color . '">' . $percentage . '%</text>
</g>
</svg>';
}
function createPortfolioGallery($filePath, $imgPath, $lang) {
  $jsonString = file_get_contents($filePath);
  $json = json_decode($jsonString, TRUE);
  for ($i = 1; $i <= count($json); $i++) {
    echo '<a href="' . $json[$i]["href"] . '" title="' . $json[$i]["title_" . $lang] . '" target="_blank">
        <img class="photo-anchor" src="' . $imgPath . $json[$i]["src"] . '" alt="' . $json[$i]["alt_" . $lang] . '">
      </a>';
  }
  
}
?>