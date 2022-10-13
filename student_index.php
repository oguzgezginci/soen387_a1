<?php
$con = mysqli_connect("localhost", "root", "", "assignment1");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM Student");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Email</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['first_Name'] . "</td>";
  echo "<td>" . $row['last_Name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
