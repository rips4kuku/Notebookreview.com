<?php
$q = $_GET['q'];

//setting connection
$con = mysqli_connect('bigyellowcat.cs.binghamton.edu','naik','naik3010','test');
//checking connection
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

//fetching data according to the model of laptop
$sql="SELECT * FROM test.dailyupdate WHERE model = '".$q."'";

//storing the result of query
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

//fetching and displaying data
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
  //echo "<td>" . $row['picture'] . "</td>";
  echo "<td><a href = 'Dell/".$row['picture']."'><img src='Dell/".$row['picture']."' height ='100' width='100'></a></td>"; // echo '<td><img src='Dell/".$row['picture']."'/></td>';
  echo '<td><a href="./cart.html" /><input type = "button" name = "button" value = "Add to Cart"></a></td>';
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>