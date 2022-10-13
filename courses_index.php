<html>

<head>
  <title>Add course</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/form-validation.js"></script>
  <style>
    form .error {
      color: #ff0000;
    }
  </style>
</head>

<?php
$con = mysqli_connect("localhost", "root", "", "assignment1");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM course");

echo "<table border='1'>
<tr>
<th>Code</th>
<th>Title</th>
<th>Semester</th>
<th>Instructor</th>
<th>Room</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['course_code'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['semester'] . "</td>";
  echo "<td>" . $row['instructor'] . "</td>";
  echo "<td>" . $row['room'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>

</html>