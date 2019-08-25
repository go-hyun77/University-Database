CREATE TABLE PROFESSOR
(
      Professor_SSN numeric(9) NOT NULL,
      Professor_Name varchar(15) NOT NULL,
      Professor_Gender char(1) NOT NULL,
      Professor_Title varchar(6) NOT NULL,
      Professor_Salary numeric(6) NOT NULL,
      Professor_AddressStreet varchar(55) NOT NULL,
      Professor_City varchar(15) NOT NULL,
      Professor_State varchar(2) NOT NULL,
      Professor_ZipCode numeric(5) NOT NULL,
      Professor_AreaCode numeric(3) NOT NULL,
      Professor_TeleNum numeric(7) NOT NULL,

      primary key(Professor_SSN)
);

CREATE TABLE DEGREES
(
      Degree_OwnerSSN numeric(9) not null,
      Degree_Name varchar(80) not null,
      Degree_Name2 varchar(80) null,
      Degree_Name3 varchar(80) null,

      Primary key(Degree_OwnerSSN),
      Foreign key(Degree_OwnerSSN) references PROFESSOR(Professor_SSN)
);

CREATE TABLE DEPARTMENT
(
      Department_Num numeric(4) not null,
      Department_Name varchar(55) not null,
      Department_PNum numeric(10) not null,
      Department_Location varchar(25) not null,
      Department_Chair numeric(9) not null,

      primary key(Department_Num, Department_Chair),
      foreign key(Department_Chair) references PROFESSOR(Professor_SSN)
);

CREATE TABLE COURSE
(
      Course_Num numeric(6) not null,
      Course_Title varchar(50) not null,
      Course_TextBook varchar(100) not null,
      Course_Units numeric(1) not null,
      Course_PreRec varchar(50) null,
      Course_DepNum numeric(4) not null,

      primary key(Course_Num, Course_DepNum),
      foreign key(Course_DepNum) references DEPARTMENT(Department_Num)
);

CREATE TABLE SECTIONS
(
      Section_Number numeric(5) not null,
      Section_Classroom varchar(20) not null,
      Section_SeatNum numeric(3) not null,
      Section_Days varchar(30) not null,
      Section_StartTime varchar(7) not null,
      Section_EndTime varchar(7) not null,
      Section_ProfessorSSnum numeric(9) not null,
      Section_CourseNum numeric(6) not null,

      primary key(Section_Number, Section_ProfessorSSnum, Section_CourseNum),
      foreign key(Section_ProfessorSSnum) references PROFESSOR(Professor_SSN),
      foreign key(Section_CourseNum) references COURSE(Course_Num)
);



CREATE TABLE STUDENT
(
      Student_CWID numeric(9) not null,
      Student_FirstName varchar (10) not null,
      Student_LastName varchar (10) not null,
      Student_Address varchar(75) not null,
      Student_TeleNum numeric(10) not null,
      Student_MajorDep numeric(4) not null,

      primary key(Student_CWID, Student_MajorDep),
      foreign key(Student_MajorDep) references DEPARTMENT(Department_Num)

);



CREATE TABLE MINOR
(
      Minor_StudentNum numeric(9) not null,
      Minor_DepName1 varchar(50) not null,
      Minor_DepName2 varchar(50) null,
      Minor_DepName3 varchar(50) null,
      Minor_DepName4 varchar(50) null,
      Minor_DepName5 varchar(50) null,

      primary key(Minor_StudentNum),
      foreign key(Minor_StudentNum) references STUDENT(Student_CWID)
);

CREATE TABLE ENROLLRECORD
(
      EnrollRecord_Grade char(2) not null,
      EnrollRecord_StudentNum numeric(9) not null,
      EnrollRecord_CourseNum numeric(6) not null,
      EnrollRecord_SectionNum numeric(5) not null,
      primary key(EnrollRecord_StudentNum, EnrollRecord_CourseNum, EnrollRecord_SectionNum),
      foreign key(EnrollRecord_StudentNum) references STUDENT(Student_CWID),
      foreign key(EnrollRecord_CourseNum) references COURSE(Course_Num),
      foreign key(EnrollRecord_SectionNum) references SECTIONS(Section_Number)
);
