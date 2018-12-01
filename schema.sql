DROP DATABASE IF EXISTS hireme;
CREATE DATABASE hireme;

DROP TABLE IF EXISTS 'Users';
CREATE TABLE 'Users'(
    'ID' INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Firstname' CHAR(40) NOT NULL default '',
    'Lastname' CHAR(40) NOT NULL default '',
    'Password' VARCHAR(205) NOT NULL default '',
    'Telephone' CHAR(13) NOT NULL default '',
    'Email' VARCHAR(50) NOT NULL default '',
    'Date_Joined' DATE NOT NULL
);

DROP TABLE IF EXISTS 'Jobs';
CREATE TABLE 'Jobs'(
    'ID'  INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Job_Title' CHAR(20) NOT NULL default '',
    'Job_Description' VARCHAR(300) NOT NULL default '',
    'Category' CHAR(50) NOT NULL default '',
    'Company_Name' VARCHAR(50) NOT NULL default '',
    'Company_Location' VARCHAR(100) NOT NULL default '',
    'Date_Posted' DATE NOT NULL
);

DROP TABLE IF EXISTS 'Jobs Applied For';
CREATE TABLE 'Jobs Applied For'(
    'ID'  INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Job_ID' INT(10) UNSIGNED NOT NULL REFERENCES JOBS,
    'User_ID' INT(10) UNSIGNED NOT NULL REFERENCES USERS,
    'Date_Applied' DATE NOT NULL
);

INSERT INTO Users (Email, Password) VALUES ('admin@hireme.com', 'password123');