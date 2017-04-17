<!DOCTYPE html>
<html lang="en-US">
<meta charset="utf-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
<meta name="keywords" content="Manhattan Beach Barber Shop, Barber, haircut, face shaves, tapers, fades, lineups, military, traditional, pomades, straight razor shaves"></meta>
<meta name="author" content="Devin Checa"></meta>
<meta name="description content="Manhattan Beach Barber Shop"></meta>
<head>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
	<title>Manhattan Beach BarberShop</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet"> 
<style>
a {
	text-decoration: none;
}
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
body {
 background-image: url("images/background.jpg");
}
</style>
</head>
<body class="w3-content" style="max-width:99%; margin: auto;">
	<header class="w3-container w3-red w3-section w3-card-24 w3-animate-opacity">
		<h1 class="w3-container" style="font-family: 'Marcellus SC', serif;">
			<a href="http://localbz.co/hbs">
				Manhattan Beach BarberShop<br />
				<h2 style="font-family: 'Marcellus SC', serif;">We put the <span style="font-weight: bold;">MAN</span> back in Manhattan Beach</h2>
			</a>
			<br />
			<h3>
			<a class="w3-right w3-hover-opacity w3-padding" href="https://www.yelp.com/biz/manhattan-beach-barbershop-manhattan-beach" target="_blank">
				<i class="fa fa-yelp"></i>
			</a>
			<a class="w3-right w3-hover-opacity w3-padding" href="https://www.instagram.com/manhattanbeachbarbershop" target="_blank">
				<i class="fa fa-instagram"></i>
			</a>
<!--			<a class="w3-right w3-hover-opacity w3-padding" href="https://www.facebook.com/henrysbarbershop310/?ref=page_internal" target="_blank"> -->
<!--				<i class="fa fa-facebook-square"></i> -->
<!--			</a> -->
			</h3>
		</h1>
	</header>
	<br />
	<article class="w3-row w3-red w3-card-24" style="font-family: 'Marcellus SC', serif; margin-bottom: 128px;">
		<br />
		    <div class="w3-quarter">
			<?php
                  moreImages(2);
                ?>
                                   
			</div>
			<div class="w3-quarter">
				<?php
                  moreImages(4);
                ?>
                                   
			</div>
			<div class="w3-quarter">
				<?php
                  moreImages(6);
                ?>
                                   
			</div>
			<div class="w3-quarter">
				<?php
                  moreImages(8);
                ?>
                                   
			</div>
	</article>
	<div id="reload" class="w3-row w3-red w3-card-24" style="font-family: 'Marcellus SC', serif; margin-bottom: 128px;">
		<div>
			<div class="w3-quarter">
			<?php
				$submit = "";
				$submit = ($_GET["submit"]);
				if ($submit != "") {
					moreImages(10);
				}
				$submit = "";
			?>

			</div>
			<div class="w3-quarter">
			<?php
				$submit = "";
				$submit = ($_GET["submit"]);
				if ($submit != "") {
					moreImages(12);
				}
				$submit = "";
			?>

			</div>
			<div class="w3-quarter">
			<?php
				$submit = "";
				$submit = ($_GET["submit"]);
				if ($submit != "") {
					moreImages(14);
				}
				$submit = "";
			?>

			</div>
			<div class="w3-quarter">
			<?php
				$submit = "";
				$submit = ($_GET["submit"]);
				if ($submit != "") {
					moreImages(16);
				}
				$submit = "";
			?>

			</div>
		</div>
	</div>
	<a style="font-family: 'Marcellus SC', serif;" href="gallery.php?submit=more#reload"><button class="w3-btn w3-ripple">Show More Images</button></a>
	<hr></hr>
	<footer class="w3-container w3-animate-opacity w3-red" style="font-family: 'Marcellus SC', serif;">
		(310) 318-8833<br></br>
		1069 North Aviation Boulevard<br></br>
		Manhattan Beach, CA 90266<br></br>
		Powered by W3.css
	</footer>
	<?php
		function moreImages($box) {
			for ($cell = $box-1; $cell <= $box; $cell++) {
				echo "<img src=\"images/gallery/".$cell.".jpg\" onClick=\"document.getElementById('".$cell."').style.display='block'\" style=\"width: 100%;\"></img>\n\t";
				echo "<div id=\"".$cell."\" class=\"w3-modal\" onClick=\"this.style.display='none'\">\n\t";
				echo "<div class=\"w3-modal-content\">\n\t";
				echo "<span class=\"w3-closebtn w3-white w3-hover-red w3-container w3-padding w3-display-topright\">&times;</span>\n\t";
				echo "<div class=\"w3-center\"><img src=\"images/gallery/".$cell.".jpg\" style=\"max-height: 100%;\"></img></div>\n\t";
				echo "</div>\n\t";
				echo "</div>\n\t";
			}
		}
	?>

</body>
</html>