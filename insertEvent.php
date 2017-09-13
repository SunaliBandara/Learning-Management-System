<?php
// Start the session
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


$eName = $_REQUEST["eName"];
$venue = $_REQUEST["venue"];


$speaker1 = $_REQUEST["speaker1"];
$speaker2 = $_REQUEST["speaker2"];
$speaker3 = $_REQUEST["speaker3"];


$sponser1 = $_REQUEST["sponser1"];
$sponser2 = $_REQUEST["sponser2"];

$time = $_REQUEST["time"];




//uplaod file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadImg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
	   
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
		header('Location: adminPanel.php?uploadP=onlyImages');
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
	header('Location: adminPanel.php?uploadP=exitst');
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   header('Location: adminPanel.php?uploadP=onlyImages');
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
	header('Location: adminPanel.php?uploadP=notupload');
	
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadImg"]["tmp_name"], $target_file)) {
        
		//echo "The file ". basename( $_FILES["uploadImg"]["name"]). " has been uploaded.";
		header('Location: adminPanel.php?uploadP=upload');
    } else {
        //echo "Sorry, there was an error uploading your file.";
		header('Location: adminPanel.php?uploadP=notupload');
    }
}   

$imageName=basename( $_FILES["uploadImg"]["name"]);

$sql = "INSERT INTO eventmanagement (eName, venue, speaker1, speaker2,speaker3,sponser1,sponser2,time,imageName) VALUES ('$eName', '$venue', '$speaker1','$speaker2','$speaker3','$sponser1','$sponser2','$time','$imageName')";





if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  header('Location: adminPanel.php?id=okayEvent');
} else {
   //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
	header('Location: adminPanel.php?id=noEvent');
}
mysqli_close($conn);

?>
</body>

</html>
