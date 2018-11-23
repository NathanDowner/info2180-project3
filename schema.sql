DROP DATABASE IF EXISTS hireme;
CREATE DATABASE hireme;

DROP TABLE IF EXISTS 'USERS';
CREATE TABLE 'USERS'(
    'ID' INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Firstname' CHAR(40) NOT NULL default '',
    'Lastname' CHAR(40) NOT NULL default '',
    'Password' VARCHAR(205) NOT NULL default '',
    'Telephone' CHAR(13) NOT NULL default '',
    'Email' VARCHAR(50) NOT NULL default '',
    'Date_Joined' DATE NOT NULL
);

DROP TABLE IF EXISTS 'JOBS';
CREATE TABLE 'JOBS'(
    'ID'  INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Job_Title' CHAR(20) NOT NULL default '',
    'Job_Description'
    'Category'
    'Company_Name'
    'Company_Location' 
    'Date_Posted' DATE NOT NULL
);

DROP TABLE IF EXISTS 'Jobs Applied For';
CREATE TABLE 'Jobs Applied For'(
    'ID'  INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'Job_ID' INT(10) UNSIGNED NOT NULL REFERENCES JOBS,
    'User_ID' INT(10) UNSIGNED NOT NULL REFERENCES USERS,
    'Date_Applied' DATE NOT NULL
);