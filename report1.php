<?php
$course_code = $_POST["course_code"];
?>
<html>
<head>
  <title>Report 1</title>
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

<body>
  <div class="container">
    <h2>Report 1</h2>
    
    <?php
  $con = mysqli_connect("localhost", "root", "", "assignment1");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con, "
  SELECT student.*
  FROM student, enrollment
  WHERE ID = enrollment.student_ID AND enrollment.course_code = '$course_code';
  ");

  $posts = array();

  echo "
<table class='table' >
<thead>
<tr>
<th scope='col'>First Name</th>
<th scope='col'>Last Name</th>
<th scope='col'>Address</th>
<th scope='col'>Email</th>
<th scope='col'>Phone number</th>
<th scope='col'>Date of birth</th>
</tr>
</thead>
<tbody>";

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['first_Name'] . "</td>";
    echo "<td>" . $row['last_Name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone_Number'] . "</td>";
    echo "<td>" . $row['date_of_Birth'] . "</td>";
    echo "</tr>";
  }
  echo "
</tbody>
</table>
";

  //print_r($posts);

  mysqli_close($con);

  ?>
  </div>
</body>

</html>
<script>
</script>