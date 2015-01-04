<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="author" href="humans.txt" />
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <?php
          foreach($cssFiles as $cssFile) {
    	?>
            <link href="css/<?php print $cssFile;?>" rel="stylesheet" type="text/css" media="screen">
    	<?php
          }
        ?>

        <?php
        	function menu($active) {
        		$urls = array("index.php", "aboutme.php", "portfolio.php", "blog.php", "contact.php");
        		$names = array("home", "about", "portfolio", "blog", "contact");
        		$count = count($urls);
        		print('<ul>');
        		for ($i = 0; $i < $count; $i++) {
        			echo "<li><a id=\"$names[$i]\" href=\"$urls[$i]\"";
        			if($active==$names[$i]) echo "class=\"active\"";
        				echo">$names[$i]</a></li>";
        			}
        		}
        		print('</ul>');
        ?>
        <script src="http://refle-x-ction.com/facelift/flir.js" type="text/javascript"></script>
        	<style>
        	  .wonder { font-family: 'wonderland', arial, serif;
        				font-size: 25px;	  }
        	  .creator { font-family: 'creator', arial, serif;
        				 font-size: 45px; }
        	  .cowboy { font-family: 'deutsch', arial, serif;
        				 font-size: 45px; }
        	  .desc { float: left;
        			  margin: 0 0 20px 150px;
        	  }
        	</style>

          <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
          <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />

          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
          <script type="text/javascript" src="js/jquery.easing.min.js"></script>

          <script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
          <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>

          <script type="text/javascript">

            jQuery(function($){

              $.supersized({

                // Functionality
                slide_interval          :   3000,   // Length between transitions
                transition              :   3,      // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed    : 700,    // Speed of transition

                // Components
                slide_links       : 'blank',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                slides          :   [     // Slideshow Images
                                    <?php for ($i = 1; $i < 16; $i++) {
                                        // print('{image : \'img/'.$i.'.jpg\', title : \'Image Credit: refle-x-ction\', thumb: \'img/min/'.$i.'.jpg\', url:\'http://refle-x-ction.com/site/index.php\'}');
                                        print('{image : \'img/'.rand(0, 146).'.jpg\'}');
                                        if ($i<15) {
                                              print(',');
                                            }
                                      }?>
                              ]

              });
              });

          </script>
  </head>
  <body>
	<!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    <div class="container <?php print $active;?>">
      <div class="header">

        <div class="header-inner">
          <a name="top"> </a>
          <a href="index.php" title="Refle(X)ction - creative, interactive experiences" class="logo">Refle(X)ction</a>
          <div class="nav">
      <?php menu($active); ?>
          </div> <!-- navigation -->
      <h1><?php if (defined('headertitle')) {print $headertitle;}?></h1>
        </div> <!-- header-inner -->
<?php
              if ($active == "home")  {
                print "<div class=\"clear\"></div>";
               #  print "<div class=\"hero-holder\">something</div>";
                      print "<div class=\"hero-holder\"><img src=\"css/art/header.jpg\" ></div>";
              }

      ?>
      </div> <!-- header -->
      <div class="content">
        <div class="content-top">
          <h1><a title="View Project" href="#"><?php if (defined('subtitle')) {print $subtitle;}?></a></h1>
          <div class="clear"></div>
        </div>
        <div class="main-content">
          <?php require_once('template/'.$template);?>
        </div> <!-- content -->
      </div> <!-- container -->


      <div class="footer">
        <div class="footer-inner">
          <div class="column"> <a href="index.php" title="Refle(X)ction"><img src="css/art/footer-logo.gif" alt="Refle(X)ction"></a>
            <p>Copyright 2010 - 2015<br><a href="index.php" title="Refle(X)ction">Refle(X)ction</a></p>
          </div>

          <div>
            <a href="#top" title="Back to the top"><img src="css/art/backtothetop.gif" alt="Back to the top"></a>
          </div>

		  </div>
		  <script type="text/javascript">
            FLIR.init();
            FLIR.auto([ '.wonder', '.creator', '.cowboy']);
		  </script>
		</div><!-- footer -->
    </div>

	<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
	<!--script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script-->
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[['_setAccount','UA-37014305-1'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
  </body>
</html>
