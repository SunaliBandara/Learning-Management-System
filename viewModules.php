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

<h1><?php


//insert correct title for page
$getTitle=$_REQUEST["name"];
$getYear=$_REQUEST["id"];
$faculty;

if($getTitle=="socomputing"){
	echo "School of Computing | $getYear";
	$faculty="School of Computing";
	}
if($getTitle=="somanagement"){
	echo "School of Management | $getYear";
	$faculty="School of Management";
	}
if($getTitle=="soengineering"){
	echo "School of Engineering | $getYear";
	$faculty="School of Engineering";
	}

?></h1>

Select Course Categories
<select name="cCategories">
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
<option>BMIS113 System Design Project</option>
</select>



<?php 


$code=$_REQUEST['id'];

// Create connection
$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"],$_SESSION["dbname"]);
$sql="SELECT filePath,year FROM modules WHERE moduleCode='$code'";


//$sql="SELECT moduleCode, moduleName FROM modules WHERE year='$getYear' and faculty='$faculty'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	
	?><table class="table table-responsive" style="margin-top:30px;"><?php
    while($row = $result->fetch_assoc()) {
        
		?><tr><td><a href="" style="text-decoration:none; color:black;"><?php
		
		echo $row["filePath"];?></a></td></tr><?php
		
    }
} else {
    echo "0 results";
}
$conn->close();
?></table>





</div>

	<!--Include footer of the Site-->
	<?php include "footer.php"; ?>

</body>
</html>

