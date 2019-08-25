/* 3 professor inserts */

INSERT INTO PROFESSOR(Professor_SSN, Professor_Name, Professor_Gender, Professor_Title, Professor_Salary, Professor_AddressStreet, Professor_City, Professor_State, Professor_ZipCode, Professor_AreaCode, Professor_TeleNum)
VALUES (050560282, 'Kenneth Kung', 'M', 'Dr.', 110614, '800 N State College Blvd', 'Fullerton', 'CA', 92831, 562, 9991456);

INSERT INTO PROFESSOR(Professor_SSN, Professor_Name, Professor_Gender, Professor_Title, Professor_Salary, Professor_AddressStreet, Professor_City, Professor_State, Professor_ZipCode, Professor_AreaCode, Professor_TeleNum)
VALUES (660800282, 'Shawn X. Wang', 'M', 'Dr.', 130562, '800 N State College Blvd', 'Fullerton', 'CA', 92831, 562, 9995873);

INSERT INTO PROFESSOR(Professor_SSN, Professor_Name, Professor_Gender, Professor_Title, Professor_Salary, Professor_AddressStreet, Professor_City, Professor_State, Professor_ZipCode, Professor_AreaCode, Professor_TeleNum)
VALUES (708814498, 'Doina Bein', 'F', 'Dr.', 100258, '800 N State College Blvd', 'Fullerton', 'CA', 92831, 562, 9999635);

/* 3 degree inserts */

INSERT INTO DEGREES(Degree_OwnerSSN, Degree_Name, Degree_Name2, Degree_Name3)
VALUES(050560282, "Ph.D Computer Science", "M.A. Computer Science", "B.A. Computer Science");

INSERT INTO DEGREES(Degree_OwnerSSN, Degree_Name, Degree_Name2, Degree_Name3)
VALUES(660800282, "Ph.D Computer Science", "M.S. Computer Science", "B.S. Computer Science");

INSERT INTO DEGREES(Degree_OwnerSSN, Degree_Name, Degree_Name2, Degree_Name3)
VALUES(708814498, "M.A. Computer Engineering", "B.A. Computer Engineering", NULL);

/* 2 Departments */
INSERT INTO DEPARTMENT(Department_Num, Department_Name, Department_PNum, Department_Location, Department_Chair)
VALUES (5050, 'Computer Science', 5627778596, 'CS-605', 050560282);

INSERT INTO DEPARTMENT(Department_Num, Department_Name, Department_PNum, Department_Location, Department_Chair)
VALUES (4040, 'Computer Engineering', 5627771234, 'E-507', 708814498);
/* 4 Courses */
INSERT INTO COURSE(Course_Num, Course_Title, Course_Textbook, Course_Units, Course_PreRec, Course_DepNum)
VALUES (337353, 'CPSC 120 - Introduction to Programming', 'Learn C the Hard Way', 3, NULL, 5050);

INSERT INTO COURSE(Course_Num, Course_Title, Course_Textbook, Course_Units, Course_PreRec, Course_DepNum)
VALUES (060962, 'CPSC 131 - Data Structures', 'Introduction to Algorithms, 3rd Edition', 3, 'CPSC 121 – Object-Oriented Programming', 5050);

INSERT INTO COURSE(Course_Num, Course_Title, Course_Textbook, Course_Units, Course_PreRec, Course_DepNum)
VALUES (948636, 'EGCP 180 - Digital Logic and Computer Structures', 'Digital Logic And Computer Design', 3, 'CPSC 120 - Introduction to Programming', 4040);

INSERT INTO COURSE(Course_Num, Course_Title, Course_Textbook, Course_Units, Course_PreRec, Course_DepNum)
VALUES (704556, 'EGCP 280 - Microcontollers', 'Programming PIC Microcontrollers with XC8', 3, 'EGCP 180 or EGEE 245', 4040);

/* 3 CPSC SECTIONS */

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum),
VALUES (21880, 'CS-103', 32, 'MW', '8:00 A.M.', '9:15 A.M.', 050560282, 704556);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (31258, 'CS-109', 30, 'MW', '11:00 A.M.', '12:15 P.M.', 660800282, 704556);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (75896, 'CS-209', 45, 'F', '1:00 P.M.', '3:15 P.M.', 050560282, 704556);

/* 3 EGCP Sections */
INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (95135, 'E-108', 36, 'MW', '6:00 A.M.', '7:15 A.M.', 660800282, 060962);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (03256, 'E-309', 30, 'TTH', '11:00 A.M.', '12:15 P.M.', 708814498, 060962);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (61458, 'E-401', 25, 'S', '6:00 P.M.', '7:15 P.M.', 708814498, 060962);


INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (53437, 'E-109', 50, 'TTH', '6:00 P.M.', '7:15 P.M.', 660800282, 337353);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (41413, 'E-109', 30, 'TTH', '7:30 P.M.', '9:45 P.M.', 660800282, 337353);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (05056, 'E-109', 30, 'MW', '7:30 P.M.', '9:45 P.M.', 708814498, 948636);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (32238, 'CS-413', 30, 'TTH', '7:30 A.M.', '8:50 A.M.', 708814498, 948636);

INSERT INTO SECTIONS(Section_Number, Section_Classroom, Section_SeatNum, Section_Days, Section_StartTime, Section_EndTime, Section_ProfessorSSnum, Section_CourseNum)
VALUES (334466, 'CS-101', 30, 'MW', '5:00 P.M.', '7:00 P.M.', 708814498, 948636);



/* 8 Students */
INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000001, 'Gordon', 'Huynh', '1517 E Marshall St. Santa Ana, CA 98765', 7145498819, 4040);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000002, 'Omar', 'Ramirez', '216 Cynthia St Garden Grove, CA 98722', 7145378067, 5050);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000003, 'Jazmin', 'Esqueda', '210 W Unions Lane Fullerton, CA 92831', 9515378487, 5050);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000004, 'Chris', 'Ahn', '3364 E Newberry Lane Chino, CA 73242', 7148847139, 5050);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000005, 'Ismael', 'Barajas', '12323 Halo St Lynwood, CA 90262', 3106147399, 5050);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000006, 'Eli', 'Porter', '3614 Lolly Ave Costa Mesa, CA 32374', 9515897714, 4040);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000007, 'Bridgette', 'Porter', '3614 Lolly Ave Costa Mesa, CA 32374', 9515897718, 5050);

INSERT INTO STUDENT(Student_CWID, Student_FirstName, Student_LastName, Student_Address, Student_TeleNum, Student_MajorDep)
VALUES (000000008, 'Jesus', 'Guzman', '2467 W Hope St Riverside, CA 45612', 8498847814, 4040);


/* Minors */

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000001, "Accounting", "Art History", NULL, NULL, NULL);

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000002, "Anthropolog", NULL, NULL, NULL, NULL);

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000004, "Latin", "Global Health", "Civic Engagement", "Philosophy", "Statistics");

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000006, "Statistics", NULL, NULL, NULL, NULL);

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000007, "Theater", "German", "Geology", NULL, NULL);

INSERT INTO MINOR(Minor_StudentNum, Minor_DepName1, Minor_DepName2, Minor_DepName3, Minor_DepName4, Minor_DepName5)
VALUES (000000008, "Social Thought", "Cognitive Science", NULL, NULL, NULL);


/* 20 Enrollments */
INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A", 000000001, 060962, 03256);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A-", 000000001, 337353, 53437);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A+", 000000001, 704556, 21880);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("B+", 000000001, 948636, 05056);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("C+", 000000002, 337353, 53437);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("D+", 000000002, 060962, 95135);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A+", 000000003, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("B-", 000000003, 060962, 95135);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("C-", 000000003, 948636, 05056);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("F", 000000004, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("D+", 000000004, 060962, 03256);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A+", 000000005, 060962, 61458);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("F", 000000005, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("F", 000000005, 948636, 32238);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("F", 000000005, 704556, 21880);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("B", 000000006, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("C", 000000007, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("C+", 000000007, 060962, 61458);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("D-", 000000008, 337353, 41413);

INSERT INTO ENROLLRECORD(EnrollRecord_Grade , EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum)
VALUES("A+", 000000008, 060962, 61458);
