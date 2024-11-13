-- Create the database
CREATE DATABASE petition_system;

-- Use the database
USE petition_system;

-- Create the petitions table
CREATE TABLE petitions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    student_id VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    language VARCHAR(20),
    semester VARCHAR(20),
    year VARCHAR(4),
    semester_number VARCHAR(10),
    program_type VARCHAR(50),
    study_mode VARCHAR(20),
    program_name VARCHAR(255),
    university_name VARCHAR(255),
    faculty VARCHAR(255),
    specialization VARCHAR(255),
    permission BOOLEAN DEFAULT FALSE,
    resignation BOOLEAN DEFAULT FALSE,
    crossed_out BOOLEAN DEFAULT FALSE,
    semesters_passed INT,
    receiver_signature VARCHAR(255),
    student_signature VARCHAR(255),
    dean_decision TEXT,
    dean_signature VARCHAR(255),
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
