
<?php

$host="localhost";
$username="root";
$password="";
$db_name="mdd"; 

$conn=mysqli_connect("$host", "$username", "$password")or die("cannoot connect");
mysqli_select_db($conn,$db_name)or die("cannot select DB");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mydoctor";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


echo "<table border='1'>
<tr>
      <td>Name</td>
      <td>Qualification</td>
      <td>Speclization</td>
       <td>Experience</td>
      <td>Fees</td>
      <td>Timings</td>
      <td>Phone</td>
      <td>Location</td>
      
     

    </tr>";



if (mysqli_num_rows($result) > 0 ) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Qualification'] . "</td>";
  echo "<td>" . $row['Specilization'] . "</td>";
  echo "<td>" . $row['Experience'] . "</td>";
  echo "<td>" . $row['Fees'] . "</td>";
  echo "<td>" . $row['Timings'] . "</td>";
  echo "<td>" . $row['Phone'] . "</td>";
   echo "<td>" . $row['Location'] . "</td>";



  echo "</tr>";
  }
echo "</table>";
    }
 else {
    echo "0 results";
}
mysqli_close($conn);
 
	?>
 
