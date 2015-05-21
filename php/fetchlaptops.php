<?php
extract($_POST);
print_r(123);
$con = mysqli_connect('bigyellowcat.cs.binghamton.edu','naik','naik3010','test');
if (!$con)
  {
	die('Could not connect: ' . mysqli_error($con));
  }
 if ($action == 'fetch') 
 { 
    $sql="select * from dailyupdate where company='".$_POST['company']."'";

    $result = mysqli_query($con,$sql);
	 echo "<table border = '1'>
	<tr>
	<th>Company:</th>
	<th>Model:</th>
	<th>Processor:</th>
	<th>Windows:</th>
	<th>Hard-disk:</th>
	<th>RAM:</th>
	<th>Price:</th>
	<th>Picture:</th>
	<tr>";
    if (mysql_num_rows($result) > 0) 
	{
           while($row = mysqli_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['company'] . "</td>";
		  echo "<td>" . $row['model'] . "</td>";
		  echo "<td>" . $row['processor'] . "</td>";
		  echo "<td>" . $row['windows'] . "</td>";
		  echo "<td>" . $row['harddisk'] . "</td>";
		  echo "<td>" . $row['ram'] . "</td>";
		  echo "<td>" . $row['price'] . "</td>";
		  echo "<td>" . $row['picture'] . "</td>";
		  echo "</tr>";
		  }
		echo "</table>";
		
	}
    if (mysql_num_rows($result) == 0) {
        echo 'Database is empty';
    } 

mysql_close($con);
?>