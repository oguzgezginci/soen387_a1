<?php
$student_id = $_POST["id"];
?>

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

<body>
  <h2>Logged in with student ID : <?php echo $student_id ?></h2>
  <?php
  $con = mysqli_connect("localhost", "root", "", "assignment1");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con, "SELECT * FROM course");

  $posts = array();

  echo "
<form name='enroll' method='post'>
<input type='hidden' id='student_id' name='student_id' value='$student_id'>
<table class='table' >
<thead>
<tr>
<th scope='col'>Select</th>
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
    $cc = $row['course_code'];
    echo "<td><input type='radio' name='course_code' value='$cc'></td>";
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
<button type='submit' id='submit_button' formaction='enroll_server.php' class='btn btn-primary' disabled>Enroll</button>
<button type='submit' id='drop_button' formaction='drop_server.php' class='btn btn-primary' disabled>Drop </button>
</form>
";

  //print_r($posts);

  mysqli_close($con);

  ?>
</body>
<script>
  $(document).ready(function() {

    $("[name='course_code']").on('input change', function() {
        if($(this).val() != '') {
            $('.btn').prop('disabled', false);
        } else {
            $('.btn').prop('disabled', true);
        }
    });
});
</script>
</html>