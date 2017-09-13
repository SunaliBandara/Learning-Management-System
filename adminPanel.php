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
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<!--Include Nav of the Site-->
<?php include "navigation.php"; ?>

<div class="container">
<!--Side Nav-->
<div class="row">
<div class="col-md-4">
<ul class="EDnav">
<li><a href="#Modules">Upload Modules</a></li>
<li><a href="#Hall">Manage Lecture Hall</a></li>
<li><a href="#Sessions">Manage Lab Sessions</a></li>
<li><a href="#Events">Manage Events</a></li>

</div></div>


<div class="row">
<h1 style="text-align:left;">Admin Panel</h1>
<hr>
<div class="col-md-12">

<!--create module sections-->

<h3 class="navHead"id="Modules">Upload Module</h3>
<p>you can create modify remove or anything with this modules</p>
<hr>

<form method="post" enctype="multipart/form-data" action="insertModuleData.php" name="createModules" onsubmit="return validateModuleForm()">
<div class="form-group">
     <label>Module Code</label>
      <input type="text" class="form-control input-lg" name="mcode"/>
    </div>
	<div class="form-group">
     <label>Module Name</label>
      <input type="text" class="form-control input-lg" name="mname"/>
    </div>
	<div class="form-group">
     <label>Degree Programme</label>
      <input type="text" class="form-control input-lg" name="dprogramme"/>
    </div>
	<div class="form-group">
     <label>Faculty</label>
	 <select name="faculty" class="form-control input-lg">
	 <option>School of Computing</option>
	 <option>School of Management</option>
	 <option>School of Engineering</option>
	 </select>
    </div>
	<div class="form-group">
     <label>Year</label>
	  <select name="year" class="form-control input-lg">
	 <option>Year 0</option>
	 <option>Year 1</option>
	 <option>Year 2</option>
	 <option>Year 3</option>
	 <option>Year 4</option>
	 <option>PGD</option>
	 <option>UCD</option>
	 <option>UGC</option>
	 <option>MSC</option>
	 <option>Foundation</option>
	 <option>Plymouth</option>
	 
	 </select>
	 
    </div>
    
    <input type="file" class="form-control" name="uploadImg"/>
    <input type="submit" class="btn btn-default" value="Create">
  <p><?php

$response=$_REQUEST['id'];
if($response=="okay"){
	echo "New module created successfully";}
	
	if($response=="no"){
		
		echo "Cant insert module.There is some problem.please try again.!";
	}


?></p>
	 <p>
	 <?php

$response=$_REQUEST['uploadP'];

	
	if($response=="exitst"){
		
		echo "Sorry, file already exists.!";
	}
	
	if($response=="notupload"){
		
		echo "Sorry, your file was not uploaded.";
	}
	
	if($response=="upload"){
		
		echo "File has been uploaded!";
	}


?></p>


</form></div>



<div class="col-md-12">

<!--Manage Lecture Halls sections-->

<br><br><br>
<hr><h3 class="navHead" id="Hall">Manage Lecture Hall</h3>
<p>you can create modify remove or anything with this Halls</p>
<hr>

<form method="post" action="insertHallData.php" name="createHall" onsubmit="return validateHallForm()">
<div class="form-group">
     <label>Batch</label>
      <input type="text" class="form-control input-lg" name="batch"/>
    </div>
	<div class="form-group">
     <label>Module Name</label>
      <input type="text" class="form-control input-lg" name="mName"/>
    </div>
	<div class="form-group">
     <label>Hall Number</label>
	 <select name="hallNumber" class="form-control input-lg">
	 <option>Hall 01</option>
	 <option>Hall 02</option>
	 <option>Hall 03</option>
	 <option>Hall 04</option>
	 <option>Hall 05</option>
	 <option>Auditorium</option>
	 
	 
	 </select>
	 
    </div>
	<div class="form-group">
     <label>Time</label>
	 <input type="text" class="form-control input-lg" name="time"/>
	 
    </div>
    <input type="submit" class="btn btn-default" value="Create"/>
  <p><?php

$response=$_REQUEST['id'];
if($response=="okayHall"){
	echo "Hall reserved successfully";}
	
	if($response=="noHall"){
		
		echo "Cant reserved hall.There is a problem.please try again.!";
	}


?></p></form>
</div>




<div class="col-md-12">

<!--Manage Lab sections-->

<br><br><br>
<hr><h3 class="navHead" id="Sessions">Manage Lab Sessions</h3>
<p>you can create modify remove or anything with this LAB</p>
<hr>

<form method="post" action="insertLabData.php" name="createLab" onsubmit="return validateLabForm()">
<div class="form-group">
     <label>Batch</label>
      <input type="text" class="form-control input-lg" name="batch"/>
    </div>
	<div class="form-group">
     <label>Group Number</label>
      <input type="text" class="form-control input-lg" name="groupNumber"/>
    </div>
	
	<div class="form-group">
     <label>Module Name</label>
      <input type="text" class="form-control input-lg" name="mName"/>
    </div>
	<div class="form-group">
     <label>Lab</label>
	 <select name="labNumber" class="form-control input-lg">
	 <option>Lab 01</option>
	 <option>Lab 02</option>
	 <option>Lab 03</option>
	 <option>Lab 04</option>
	 <option>Lab 05</option></select>
	 
    </div>
	<div class="form-group">
     <label>Time</label>
	 <input type="text" class="form-control input-lg" name="time"/>
	 
    </div>
    <input type="submit" class="btn btn-default" value="Create"/>
  <p><?php

$response=$_REQUEST['id'];
if($response=="okayLab"){
	echo "Hall reserved successfully";}
	
	if($response=="noLab"){
		
		echo "Cant reserved Lab.There is a problem.please try again.!";
	}


?></p></form>
</div>




<div class="col-md-12">

<!--Manage Events-->

<br><br><br>
<hr><h3 class="navHead" id="Events">Manage Events</h3>
<p>you can create modify remove or anything with this Events</p>
<hr>

<form method="post" enctype="multipart/form-data" action="insertEvent.php" name="createEvent" onsubmit="return validateEventForm()">
<div class="form-group">
     <label>Event Name</label>
      <input type="text" class="form-control input-lg" name="eName"/>
   
	
     <label>Venue</label>
      <input type="text" class="form-control input-lg" name="venue"/>
   
	
	 <hr>
     <label><h3>Speakers</h3></label><br>
	
	 <label>Speaker 01</label>
      <input type="text" class="form-control input-sm" name="speaker1"/>
	  
	  <label>Speaker 02</label>
      <input type="text" class="form-control input-sm" name="speaker2"/>
    
	 <label>Speaker 03</label>
      <input type="text" class="form-control input-sm" name="speaker3"/>
	
	    <hr>
		<label><h3>Sponsers</h3></label><br>
	 
	 <label>Sponser 01</label>
      <input type="text" class="form-control input-sm" name="sponser1"/>
	  
	  <label>Sponser 02</label>
      <input type="text" class="form-control input-sm" name="sponser2"/>
	
	 <hr>
     <label>Time</label>
	 <input type="text" class="form-control input-lg" name="time"/><br>
	 <input type="file" class="form-control" name="uploadImg"/>
	 <input type="submit" class="btn btn-default" value="Create"/>
	 <p>
	 <?php

$response=$_REQUEST['uploadP'];
if($response=="onlyImages"){
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";}
	
	if($response=="exitst"){
		
		echo "Sorry, file already exists.!";
	}
	
	if($response=="notupload"){
		
		echo "Sorry, your file was not uploaded.";
	}
	
	if($response=="upload"){
		
		echo "File has been uploaded!";
	}


?></p>
	 
    
    
  <p><?php

$response=$_REQUEST['id'];
if($response=="okayEvent"){
	echo "Hall reserved successfully";}
	
	if($response=="noEvent"){
		
		echo "Cant reserved Lab.There is a problem.please try again.!";
	}


?></p><br><br><br><br><br><br><br></div></form>
</div>








</div>






</div>
	<!--Include footer of the Site-->
	<?php include "footer.php"; ?>

</body>
</html>

