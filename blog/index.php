<?php
/*======================================
  == ionut @ 21-Mar-2019              ==
  ======================================*/
  global $language;
  $language = isset($_GET["lang"]) ? ($_GET["lang"] == "en" ? "en" : ($_GET["lang"] == "fr" ? "fr" : "ro")) : "ro";
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/strings.' . $language . '.php');
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/elements.php');
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/blog.config.php');
  require_once(dirname(dirname(__FILE__)) . '/assets/phpres/blog.functions.php');
  $pagename = basename(__FILE__, ".php");
  $pagetitle = $txt[$pagename . "_title"];
  $pagekeywords = "\"" . $txt[$pagename . "_keywords"] . "\"";
  $pagedescription = "\"" . $txt[$pagename . "_description"] . "\"";
?>
<!DOCTYPE html>
<html lang=<?php echo $language?>>
<?php addHeadHtml($language, $pagetitle, $pagekeywords, $pagedescription)?>
<body>
  <?php addMenuHtml($language, "blog")?>
    <div class="container">
      <div class="col-xs-9 col-md-9">
        <?php 
        $posts = getPublishedPosts($conn, $language);
        foreach (array_reverse($posts) as $post): 
        ?>
        <div class="post_box">
          <h2><a  class="blogtitles" href="http://localhost/iwannaweb.ro/blog/post.php?id=<?php echo $post['id']?>" target="_blank"><?php echo $post['title']?></a></h2>
          <div class="post_meta">
            <span class="cat"><?php echo $txt["blog_posted_on"] . date("d-m-Y", strtotime($post['created']))?> </span> | <em><?php echo $txt["blog_cathegory"]?>: <?php echo $txt["blog_cat_" . $post['cathegory']]?></em>
          </div>
          <?php echo $post['short_text'] . ' <a href="http://localhost/iwannaweb.ro/blog/post.php?id=' . $post['id'] . '" target="_blank"> <button class="btn btn-default">Read more...</button></a>'?>
        </div>
        <?php endforeach?>
      </div>
      <div class="col-xs-3 col-md-3">
        <div class="side-content">
          <div class="cat-box">
            <h3><?php echo $txt["blog_cathegories"]?></h3>
            <ul class="blog-cat-list">
              <li>
                <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/cathegory.php?cat=other&lang=<?php echo $language?>"><?php echo $txt["blog_cat_other"]?></a>
              </li>
              <li>
                <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/cathegory.php?cat=software&lang=<?php echo $language?>"><?php echo $txt["blog_cat_software"]?></a>
              </li>
              <li>
                <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/cathegory.php?cat=hardware&lang=<?php echo $language?>"><?php echo $txt["blog_cat_hardware"]?></a>
              </li>
              <li>
                <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/cathegory.php?cat=security&lang=<?php echo $language?>"><?php echo $txt["blog_cat_security"]?></a>
              </li>
              <li>
                <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/cathegory.php?cat=programming&lang=<?php echo $language?>"><?php echo $txt["blog_cat_programming"]?></a>
              </li>
            </ul>
          </div>
          <div class="cat-box">
            <h3><?php echo $txt["blog_recent_posts"]?></h3>
            <ul class="blog-cat-list">
              <?php
              $len = count($posts);
              for ($i = $len - 1; $i > max(-1, $len - 11); $i--) {
                ?>
                <li class="blog-article">
                  <a class="blogtitles" href="http://localhost/iwannaweb.ro/blog/post.php?id=<?php echo $posts[$i]["id"]?>">+ <?php echo $posts[$i]['title']?></a>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="cleaner"></div>
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
    <?php addFooterHtml($language, "blog")?>
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
