<!DOCTYPE html>
<html>
	<head>
		<title>Extraco Banks - Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>		
		<div class="gohome wrap">
			<p>go to <a href="#">extracobanks.com</a></p>
		</div>
		<?php include "includes/header.html"; ?>
		<div class="wrap">
			<div class="content clfx">
				<?php include 'includes/feed.html'; ?>
				<?php include 'includes/sidebar.html'; ?>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
			var burgerClicked = false;
			$('.burger').click(function(){
				if (burgerClicked == false) {
					$('nav ul').show();
					burgerClicked = true;
					return;
				} else {
					$('nav ul').hide();
					burgerClicked = false;
					return;
				}
			});
		});
		</script>
	</body>
</html>
