<!DOCTYPE html>
<html>
<body>

<?php 


$fp=fopen("fileopen.doc","r");

while(!feof($fp)){

 echo fgets($fp)."<br>";


}
fclose($fp);


?>

</body>
</html>