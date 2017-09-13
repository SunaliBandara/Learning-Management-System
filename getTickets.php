<?php
// Start the session
session_start();



if (!isset($_SESSION['pageControl'])) {
header('Location: index.php?pl=error');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>95 Learning Management System </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="styleBGslide.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!--Include Nav of the Site-->
<?php include "navigation.php"; ?>



<div class="container setBorderR">

<ul class="ticketsUL">
<li><a href="">Connect facebook to check who are going</a></li>
<li class="setFright"><a href=""><button class="greenSB">Buy Now</button></a></li>
<li><strong>|  $60 – $120</strong></li>
</ul>
<hr>
<h2>Why Attend DCRE?</h2>
<p>Brought to you by the Indiana Commercial Board of REALTORS®, Discovering Commercial Real Estate offers a broad overview of the basics of commercial real estate and how it differs from residential real estate. Attendees will be able to distinguish and understand the commercial broker’s role and discover the different types of commercial properties, terms, valuation methods, marketing and resources for further education.</p>


<h2>What WIll You Learn?</h2>
<ul>
<li>he duties of professionals who assist in commercial transactions</li>
<li>The key differences between commercial and residential real estate</li>
<li>Types of commercial real estate</li>
<li>Types of commercial transactions</li>
<li>Commercial contracts</li>
</ul>

<h2>When?</h2>
<p>Monday, October 3, 2016 from 8:00 AM to 12:00 PM (EDT)</p>

<h2>Where?</h2>
<p>Monday, October 3, 2016 from 8:00 AM to 12:00 PM (EDT)</p>

</div>

	<!--Include footer of the Site-->
	<?php include "footer.php"; ?>

</body>
</html>

