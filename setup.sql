CREATE DATABASE diploma_institute;
USE diploma_institute;
-- Create Students Table
CREATE TABLE students (
 StudentID INT PRIMARY KEY,
 FirstName VARCHAR(100),
 LastName VARCHAR(100),
 Address TEXT,
 DiplomaID INT,
 FOREIGN KEY (DiplomaID) REFERENCES diplomas(DiplomaID)
);

CREATE DATABASE diploma_institute;
USE diploma_institute;
-- Create Departments Table
CREATE TABLE departments (
 DepartmentID INT PRIMARY KEY,
 DepartmentName VARCHAR(255) NOT NULL
);
-- Create Diplomas Table
CREATE TABLE diplomas (
 DiplomaID INT PRIMARY KEY,
 DiplomaName VARCHAR(255) NOT NULL,
 DepartmentID INT,
 FOREIGN KEY (DepartmentID) REFERENCES departments(DepartmentID)
);

-- Create Lecturers Table
CREATE TABLE lecturers (
 LecturerID INT PRIMARY KEY,
 FirstName VARCHAR(100),
 LastName VARCHAR(100),
 DepartmentID INT,
 FOREIGN KEY (DepartmentID) REFERENCES departments(DepartmentID)
);
-- Create Modules Table
CREATE TABLE modules (
 ModuleCode VARCHAR(50) PRIMARY KEY,
 Title VARCHAR(255) NOT NULL,
 CreditValue INT,
 ModuleCoordinatorID INT,
 DiplomaID INT,
 DepartmentID INT,
 FOREIGN KEY (ModuleCoordinatorID) REFERENCES lecturers(LecturerID),
 FOREIGN KEY (DiplomaID) REFERENCES diplomas(DiplomaID),
 FOREIGN KEY (DepartmentID) REFERENCES departments(DepartmentID)
);