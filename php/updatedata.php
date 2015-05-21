<?php
//This is the directory where images will be saved 
 session_start();

$con=mysqli_connect("bigyellowcat.cs.binghamton.edu","naik","naik3010","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//This is the directory where images will be saved 
// $target = "upload/"; 
// $target = $target . basename( $_FILES['picture']['name']); 
 
$company = $_POST[company];
$model = $_POST[model];
$processor = $_POST[processor];
$windows = $_POST[windows];
$harddisk = $_POST[harddisk];
$ram = $_POST[ram];
$price = $_POST[price];
//$picture = ($_FILES['picture']['name']);


 
$sql="UPDATE dailyupdate SET model='$model', processor='$processor', windows='$windows', harddisk='$harddisk', ram='$ram', price='$price' WHERE company='$company'";

if ( $company == "" || $model == "" || $processor == "" || $windows == "" || $harddisk == "" || $ram == "" || $price == "")
{
    
	echo "All fields are required. Please go back and try again!!";
    //header("Location: adddata.html");
    exit;
   
}
else
{
	//header("Location: adddata.html");
	//echo "1 record is added";
	echo "<script type=\"text/javascript\">window.alert('Product is successfully updated.');window.location.href = 'http://harvey.binghamton.edu/~rnaik1/updatedata.html';</script>"; 
   //exit;
}

if (!mysqli_query($con,$sql))
  {
	die('Error: ' . mysqli_error($con));
  }
 /*if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['picture']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } */

mysqli_close($con);
?>