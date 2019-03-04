<?php
function addFooterHtml($language) {
  require(dirname(__FILE__) . '/strings.' . $language . '.php');
  echo '<footer id="iwwFooter">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h2 class="logo"><a href="http://www.iwannaweb.ro"><img src="assets/img/logo.png" alt=""/></a></h2>
      </div>
      <div class="col-sm-2">
        <h5>Dezvoltare web</h5>
        <ul>
          <li><a href="#"><i class="fa fa-info special"></i> Noutăţi</a></li>
          <li><a href="#"><i class="fa fa-server special"></i> Software gratuit</a></li>
          <li><a href="#"><i class="fa fa-question-circle special"></i> Solicită ajutor</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h5>Cryptomonede</h5>
        <ul>
          <li><a href="#"><i class="far fa-lightbulb special"></i> Informaţii</a></li>
          <li><a href="#"><i class="far fa-chart-bar special"></i> Trenduri</a></li>
          <li><a href="#"><i class="fab fa-twitter special"></i> @iwannaCrypto</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h5>Social</h5>
        <ul>
          <li><a href="http://www.iwannaweb.ro/blog/"><i class="fas fa-pen-square special"></i> Blog</a></li>
          <li><a href="#"><i class="fa fa-bullhorn special"></i> Recomandări</a></li>
          <li><a href="#"><i class="fa fa-paper-plane special"></i> Telegram</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <div class="social-networks">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="google"><i class="fab fa-github"></i></a>
        </div>
        <a href="http://www.iwannaweb.ro/contact.asp" class="btn btn-default">Contactează-ne</a>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <p>© 2013-', date("Y"), ' <a href="http://www.iwannaweb.ro">iwannaweb</a> | Experience web freedom </p>
  </div>
</footer>';
}
function addMenuHtml($language) {
  require(dirname(__FILE__) . '/strings.' . $language . '.php');
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="">', 
            $txt["lang"], 
            '<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="index.php?lang=', substr($txt["lang_flag_1"], 0, 2), '"><img class="img-flag" src="assets/img/', $txt["lang_flag_1"], '.svg">', $txt["lang_alt_1"], '</a>
            </li>
            <li>
              <a href="index.php?lang=', substr($txt["lang_flag_2"], 0, 2), '"><img class="img-flag" src="assets/img/', $txt["lang_flag_2"], '.svg">', $txt["lang_alt_2"], '</a>
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
      <a class="navbar-brand navbar-brand-fit" href="index.html"><img class="logo" src="assets/img/logo.png" alt=""/></a>
    </div>
    <div id="sticky-header">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="activ"><a href="http://www.iwannaweb.ro">', $txt["home"], '</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">', $txt["webdev"],'<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">', $txt["services"], '</a></li>
              <li><a href="#">', $txt["pricing"], '</a></li>
              <li><a href="#">', $txt["software"], '</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.iwannaweb.ro/portofoliu_page3.html">', $txt["portfolio"], '<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">', $txt["recent"], '</a></li>
              <li><a href="#">', $txt["archive"], '</a></li>
            </ul>
          </li>
          <li><a href="http://www.iwannaweb.ro/crypto/">', $txt["crypto"], '</a></li>
          <li><a href="http://www.iwannaweb.ro/blog/">', $txt["blog"], '</a></li>
          <li><a href="http://www.iwannaweb.ro/contact.asp">', $txt["contact"], '</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>';
}
?>