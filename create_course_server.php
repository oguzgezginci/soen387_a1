<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Search Results</title>
  <style type="text/css">
    body {
      font-family: arial, sans-serif;
      background-color: #F0E68C
    }

    table {
      background-color: #ADD8E6
    }

    td {
      padding-top: 2px;
      padding-bottom: 2px;
      padding-left: 4px;
      padding-right: 4px;
      border-width: 1px;
      border-style: inset
    }
  </style>
</head>

<body>
  <?php
  extract($_POST);

  // build SELECT query
  $verification = "SELECT course_code FROM course WHERE course_code = '$course_code'";
  $query = "INSERT INTO course (course_code, title, semester, days, time, instructor, room, start_date, end_date)
				 VALUES ('$course_code','$title','$semester','$days', '$time', '$instructor', '$room', '$start_date',  '$end_date')";


  // Connect to MySQL
  if (!($database = mysqli_connect(
    "localhost",
    "root",
    ""
  )))
    die("Could not connect to database </body></html>");

  // open Products database
  if (!mysqli_select_db($database, "assignment1"))
    die("Could not open assignment1 database </body></html>");
  $queryResult = mysqli_query($database, $verification);
  if(is_bool($queryResult)){

  } else {
    $queryResult = true;
  }
  if (!$queryResult) {

    // query Products database
    if (!($result = mysqli_query($database, $query))) {
      print("Could not execute query! <br />");
      //die( mysqli_error() . "</body></html>" );
    } // end if
    else {
      print("$course_code: $title was insterted into the Database correctly");
    }
  } else {
    print("$course_code already exists!");
  }
  mysqli_close($database);
  ?>
  <!-- end PHP script -->

</body>

</html>