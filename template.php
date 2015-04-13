<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php if($title) { echo "$title" . " | "; } ?>Lee Van Arsdall</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
	<link href='//fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
 	<link rel="stylesheet" href="/stylesheets/main.css">
 	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container <?php echo $type; ?>">

		<div class="row header">
			<div class="six columns">
				<a href="/"><h2>Lee Van Arsdall</h2></a>
			</div>
			<div class="six columns nav">
				<a href="/gallery/street" <?php if (($gallery_name == 'street') || ($title == 'Street')) { echo "class=\"primary\"";} ?>>Street</a>
				<a href="/gallery/alternative" <?php if (($gallery_name == 'alternative') || ($title == 'Alternative')) { echo "class=\"primary\"";} ?>>Alternative</a>
				<a href="/about" <?php if ($title == 'About') { echo "class=\"primary\"";} ?>>About</a>
			</div>
		</div>

		<?php echo $content; ?>

		<div class="row footer">

			<a href="http://leevanarsdall.tumblr.com" target="_blank"><span class="fa-stack fa">
			  <i class="fa fa-square fa-stack-2x"></i>
			  <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
			</span></a>

			<a href="https://instagram.com/leevanarsdall" target="_blank"><span class="fa-stack fa">
			  <i class="fa fa-square fa-stack-2x"></i>
			  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
			</span></a>

			<a href="https://www.flickr.com/photos/leevanarsdall/" target="_blank"><span class="fa-stack fa">
			  <i class="fa fa-flickr fa-stack-2x"></i>
			</span></a>

		</div>
	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60526441-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>