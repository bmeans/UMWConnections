DROP DATABASE IF EXISTS umwconnections;
CREATE DATABASE IF NOT EXISTS umwconnections;
USE umwconnections;

GRANT ALL PRIVILEGES ON umwconnections.* TO 'admin'@'localhost' IDENTIFIED BY 'adminpw';

CREATE TABLE IF NOT EXISTS Login (
	email varchar(100) NOT NULL,
	pw varchar(20) NOT NULL,
	PRIMARY KEY (email, pw)
);

CREATE TABLE IF NOT EXISTS Comments (
	name varchar(50) NOT NULL,
	email varchar(30) NOT NULL,
	comments blob NOT NULL
);

CREATE TABLE IF NOT EXISTS Images (
    image_id int AUTO_INCREMENT NOT NULL,
    filename varchar(255) NOT NULL,
    mime_type varchar(255) NOT NULL,
    file_size int NOT NULL,
    file_data blob NOT NULL,
    PRIMARY KEY (image_id),
    INDEX (filename)
);

CREATE TABLE IF NOT EXISTS Interests (
	interest_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	interest blob NOT NULL
);

CREATE TABLE IF NOT EXISTS Classifications (
	classification_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	classification ENUM('Freshman', 'Sophomore', 'Junior', 'Senior', 'Professor') NOT NULL
);

CREATE TABLE IF NOT EXISTS InterestedIn (
	interested_in_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	interested_in_value ENUM('Male','Female','No preference') NOT NULL
);

CREATE TABLE IF NOT EXISTS Looking_For (
	looking_for_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	looking_for_value ENUM('Date', 'Relationship', 'Friendship', 'Study Group', 'Sports') NOT NULL
);

CREATE TABLE IF NOT EXISTS Majors (
	major_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	major varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Users (
	user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email varchar(100) NOT NULL,
  	last_name varchar(25) NOT NULL,
  	first_name varchar(25) NOT NULL,
  	gender ENUM('Male', 'Female') NOT NULL,
  	phone varchar(10) NOT NULL,
  	description blob NOT NULL,
  	interested_in_id int,
	classification_id int,
  	looking_for_id int,
  	CONSTRAINT login_email_fk FOREIGN KEY (email) REFERENCES Login (email),
  	CONSTRAINT classifications_classification_id_fk FOREIGN KEY (classification_id) REFERENCES Classifications (classification_id),
  	CONSTRAINT interestedIn_interested_in_id_fk FOREIGN KEY (interested_in_id) REFERENCES InterestedIn (interested_in_id),
	CONSTRAINT looking_for_looking_for_id_fk FOREIGN KEY (looking_for_id) REFERENCES Looking_For (looking_for_id)
);

CREATE TABLE IF NOT EXISTS Users_Interests (
	user_id int NOT NULL,
	interest_id int NOT NULL,
	PRIMARY KEY (user_id, interest_id),
	CONSTRAINT users_user_id_fk FOREIGN KEY (user_id) REFERENCES Users (user_id),
	CONSTRAINT interests_interest_id_fk FOREIGN KEY (interest_id) REFERENCES Interests (interest_id)
);

CREATE TABLE IF NOT EXISTS Users_Majors (
	user_id int NOT NULL,
	major_id int NOT NULL,
	PRIMARY KEY(user_id, major_id),
	CONSTRAINT users_user_id_fk FOREIGN KEY (user_id) REFERENCES Users (user_id),
	CONSTRAINT majors_major_id_fk FOREIGN KEY (major_id) REFERENCES Majors (major_id)
);

INSERT INTO Login (email,pw) VALUES 
	('tgray@mail.umw.edu','tgray'),
	('rhorn@mail.umw.edu','rhorn'),
	('yfisher@mail.umw.edu','yfisher'), 
	('acrowe@mail.umw.edu','acrowe');

INSERT INTO Users (email, last_name, first_name, gender, phone, description) VALUES
	('tgray@mail.umw.edu','Gray','Todd','Male','4537638355','Tall, dark and handsome'),
	('rhorn@mail.umw.edu','Horn','Russell','Male','3152505279','Constantly wears glasses and a red and white striped sweater with a matching hat and blue pants.'),
	('yfisher@mail.umw.edu','Fisher','Yen','Female','8414639889','Enjoys long walks on the beach and candlelight dinners');

INSERT INTO Majors (major) VALUES ('Theater'),('Computer Science'),('Biology');

INSERT INTO Interests (interest) VALUES ('Soccer'),('Singing'),('Football'),('Hacking'),('Video Games'),('Magic'),('Ju-jitsu');

INSERT INTO InterestedIn (interested_in_value) VALUES ('Male'),('Female'),('No preference');

INSERT INTO Looking_For (looking_for_value) VALUES ('Date'),('Relationship'),('Friendship'),('Study Group'),('Sports');

INSERT INTO Classifications (classification) VALUES ('Freshman'),('Sophomore'),('Junior'),('Senior'),('Professor');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Gray' AND (Interests.interest = 'Soccer' OR Interests.interest = 'Singing'
OR Interests.interest = 'Football');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Horn' AND (Interests.interest = 'Hacking' OR Interests.interest = 'Video Games'
OR Interests.interest = 'Magic');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Fisher' AND (Interests.interest = 'Ju-jitsu');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Gray' AND (Majors.major = 'Theater');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Horn' AND (Majors.major = 'Computer Science');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Fisher' AND (Majors.major = 'Biology');

UPDATE Users SET interested_in_id = (SELECT InterestedIn.interested_in_id FROM InterestedIn
WHERE InterestedIn.interested_in_value = 'Male') WHERE (Users.last_name = 'Gray' OR Users.last_name = 'Fisher');

UPDATE Users SET interested_in_id = (SELECT InterestedIn.interested_in_id FROM InterestedIn
WHERE InterestedIn.interested_in_value = 'Female') WHERE Users.last_name = 'Horn';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Gray';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Sophomore') WHERE Users.last_name = 'Horn';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Junior') WHERE Users.last_name = 'Fisher';

UPDATE Users SET looking_for_id = (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Date') WHERE (Users.last_name = 'Gray' OR Users.last_name = 'Horn');

UPDATE Users SET looking_for_id =  (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Relationship') WHERE Users.last_name = 'Fisher';