CREATE TABLE ENROLLMENT (
student_ID int NOT NULL,
course_code int NOT NULL,
FOREIGN KEY (course_code) REFERENCES course(course_code),
FOREIGN KEY (student_ID) REFERENCES student(ID),
PRIMARY KEY (student_ID, course_code)
);