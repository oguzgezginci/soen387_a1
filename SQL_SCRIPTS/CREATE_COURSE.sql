CREATE TABLE COURSE (
    course_code int NOT NULL UNIQUE,
    title varchar(250),
    semester enum ('F', 'W', 'S'),
    days enum ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
    time time,
    instructor varchar(250),
    room varchar(3),
    start_date Date,
    end_date Date
);