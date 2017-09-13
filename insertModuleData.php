<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php


// Create connection
$conn = new mysqli($_SESSION["servername"], $_SESSION["username"], $_SESSION["password"],$_SESSION["dbname"]);


$moduleCode = $_REQUEST["mcode"];
$moduleName = $_REQUEST["mname"];
$degreeProgramm = $_REQUEST["dprogramme"];
$year = $_REQUEST["year"];
$faculty = $_REQUEST["faculty"];




//uplaod file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadImg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
	header('Location: adminPanel.php?uploadP=exitst');
    $uploadOk = 0;
}


  
  
  
  
  

$fileName=basename( $_FILES["uploadImg"]["name"]); 





$sql = "INSERT INTO modules (moduleCode, moduleName, degreeProgramm, year,faculty,fileName,filePath) VALUES ('$moduleCode', '$moduleName', '$degreeProgramm','$year','$faculty','$fileName','$target_file')";


if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES["uploadImg"]["tmp_name"], $target_file)) {
   // echo "New record created successfully";
   header('Location: adminPanel.php?id=okay');
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
	//header('Location: adminPanel.php?id=no');
}
mysqli_close($conn);

/*
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
	header('Location: adminPanel.php?uploadP=notupload');
	
	
// if everything is ok, try to upload file
} else {
    if () {
        
		//echo "The file ". basename( $_FILES["uploadImg"]["name"]). " has been uploaded.";
		header('Location: adminPanel.php?uploadP=upload');
    } else {
        //echo "Sorry, there was an error uploading your file.";
		header('Location: adminPanel.php?uploadP=notupload');
    }
}*/


// Create connection











?>
</body>

</html>
