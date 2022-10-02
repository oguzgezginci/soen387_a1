CREATE TABLE course_days (
course_code int NOT NULL,
day enum('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
FOREIGN KEY (course_code) REFERENCES course(course_code)
);