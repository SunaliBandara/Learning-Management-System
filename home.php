<?php

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

<div class="container">
<br><br><br><br>

<dl><b>School of Computing</b>
    <dd><a href="catSelectModules.php?name=socomputing&id=Year 0">Year 0</a></dd>
    <dd><a href="catSelectModules.php?name=socomputing&id=Year 1">Year 1</a></dd>
    <dd><a href="catSelectModules.php?name=socomputing&id=Year 2">Year 2</a></dd>
    <dd><a href="catSelectModules.php?name=socomputing&id=Year 3">Year 3</a></dd>
    <dd><a href="catSelectModules.php?name=socomputing&id=Year 4">Year 4</a></dd>
	<dd><a href="catSelectModules.php?name=socomputing&id=PGD">PGD</a></dd></dl></br></br></br>
	
<dl><b>School of Management</b>	
    <dd><a href="catSelectModules.php?name=somanagement&id=PGD">PGD</a></dd>
	<dd><a href="catSelectModules.php?name=somanagement&id=UCD">UCD</a></dd>
	<dd><a href="catSelectModules.php?name=somanagement&id=UGC">UGC</a></dd>
	<dd><a href="catSelectModules.php?name=somanagement&id=Foundation">Foundation</a></dd>
	<dd><a href="catSelectModules.php?name=somanagement&id=Plymouth">Plymouth</a></dd> </dl></br></br></br>
	
<dl><b>School of Engineering</b>	
     <dd><a href="catSelectModules.php?name=soengineering&id=Year 0">Year 0</a></dd>
	 <dd><a href="catSelectModules.php?name=soengineering&id=Year 1">Year 1</a></</dd>
     <dd><a href="catSelectModules.php?name=soengineering&id=Year 2">Year 2</a></dd>
     <dd><a href="catSelectModules.php?name=soengineering&id=Year 3">Year 3</a></dd>  </dl>
</div>

	<!--Include footer of the Site-->
	<?php include "footer.php"; ?>

</body>
</html>

