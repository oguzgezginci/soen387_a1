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

	//Testing values
	$todayDay = 25;
	$todayMonth = 3;
	$limitCourses = 4;
	$presentSemester = "W";
	// $todayDay = date("d");
	// $todayMonth = date("m");

	// $query =
	// 	"DELETE FROM enrollment WHERE course_code = '$course_code' AND student_ID = '$student_ID'";

	// $limitCourses =
	// 	"SELECT student_ID
	// 	FROM enrollment 
	// 	WHERE studentID = '$student_ID'";

	// $presentSemester = 
	// 	"SELECT semester
	// 	FROM course
	// 	WHERE course_code = '$course_code'";

	// Connect to MySQL
	if (!($database = mysqli_connect(
		"localhost",
		"root",
		""
	)))
		die("Could not connect to database </body></html>");

	// open Products database
	if (!mysqli_select_db($database, "assignment1"))
		die("Could not open products database </body></html>");

	if ($presentSemester == "F") {
		if ($todayDay < 25 && $todayMonth == 12 || $todayMonth <= 11 && $todayMonth >= 9) {
			$allowed = true;
		} else {
			$allowed = false;
		}
	} else {
		if ($todayDay <= 30 && $todayMonth == 4 || $todayMonth <= 3 && $todayMonth >= 1) {
			$allowed = true;
		} else {
			$allowed = false;
		}
	}
	if ($allowed) {
		if (mysqli_query($database, $limitCourses) == false) {
			if (!($result = mysqli_query($database, $query))) {
				print("Could not execute query! <br />");
				// die( mysqli_error() . "</body></html>" );
			} // end if
			else {
				//print("$course_code was dropped successfully");
			}
		} else {
			print("You already have no classes");
		}
	} else {
		print("You cannot drop classes at this moment");
	}
	mysqli_close($database);
	?>
	<!-- end PHP script -->

</body>

</html>