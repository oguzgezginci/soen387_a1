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
    // $todayDay = 11;
    // $todayMonth = 10;
    // $limitCourses = 4;
    // $presentSemester = "W";
    $todayDay = date("d");
    $todayMonth = date("m");

    $query = "INSERT INTO enrollment(student_ID, course_code)
                         VALUES ('$student_id', '$course_code')";

    $limitCourses = "SELECT student_ID
                                  FROM enrollment 
                                  WHERE student_ID = '$student_id'";


    $presentSemester = "SELECT semester
                                    FROM course
                                    WHERE course_code = '$course_code'";
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
        if (($todayMonth <= 8) || $todayMonth == 9 && $todayDay <= 11) {
            $allowed = true;
        } else {
            $allowed = false;
        }
    } else {
        if (($todayMonth >= 5) || $todayMonth == 1 && $todayDay <= 13) {
            $allowed = true;
        } else {
            $allowed = false;
        }
    }
    $resultCheck = mysqli_query($database, $limitCourses);
    if (!$resultCheck) {
        print("An error occured");
    } else {
        if ($allowed) {
            $tableRows = mysqli_num_rows($resultCheck);
            if ($tableRows < 5) {
                // query Products database
                try {
                    $result = mysqli_query($database, $query);

                    // die( mysqli_error() . "</body></html>" );
                } catch (Exception) {
                    print("Could not execute query");
                }
            } else {
                print("has already 5 courses enrolled in for this semester.");
            }
        } else {
            print("Today is past the date limit for enrollment.");
        }
    }
    mysqli_close($database);
    ?>
    <!-- end PHP script -->

</body>

</html>