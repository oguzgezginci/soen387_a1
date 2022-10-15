<?php
$student_ID = $_POST["student_id"];
?>
<html>
<head>
  <title>Report 2</title>
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
    <h2>Report 2</h2>
    
    <?php
  $con = mysqli_connect("localhost", "root", "", "assignment1");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con, "
  SELECT course.*
  FROM course
  left join enrollment on course.course_code=enrollment.course_code
  WHERE enrollment.student_ID = '$student_ID';
  ");

  $posts = array();

  echo "
<table class='table' >
<thead>
<tr>
<th scope='col'>Code</th>
<th scope='col'>Title</th>
<th scope='col'>Semester</th>
<th scope='col'>Instructor</th>
<th scope='col'>Room</th>
</tr>
</thead>
<tbody>";

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['course_code'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['semester'] . "</td>";
    echo "<td>" . $row['instructor'] . "</td>";
    echo "<td>" . $row['room'] . "</td>";
    echo "</tr>";
  }
  echo "
</tbody>
</table>
";


  mysqli_close($con);

  ?>
  </div>
</body>

</html>
<script>
</script>