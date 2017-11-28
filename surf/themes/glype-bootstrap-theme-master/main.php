<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="search" type="application/opensearchdescription+xml" title="WMan's Proxy" href="https://wman-web.fr/proxy/wmansproxy.xml">
    <meta charset="utf-8">
    <title><!--[site_name]--></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <!-- Le styles -->
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php"><!--[site_name]--></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<li><a href="edit-browser.php">Edit Browser</a></li>
				<li><a href="cookies.php">Manage Cookies</a></li>
				<li><a href="disclaimer.php">Disclaimer</a></li> 
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
		<!-- CONTENT START -->
		
		<!--[error]-->

		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
			<div class="input-append">
				<input class="span9" placeholder="Enter URL" name="u" id="input" type="text">
				<button type="submit" class="btn" />Go!</button>
			</div>
		
		
			<!--<input class="input-block-level" type="text" placeholder="Enter URL" name="u" id="input"><input type="submit" value="Go" class="btn btn-primary"/>-->
			<div>
			<?php 
			foreach ($toShow as $option) {
					echo '<label class="checkbox inline"><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'>'.$option['title'].'</label>';
					
			}
			?>
			</div>
				
		</form>
	 
		<!-- CONTENT END -->
		
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?=injectionJS();?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script>
	$('#error').addClass('alert');
	$('#error').addClass('alert-error');
	</script>
  </body>
</html>
