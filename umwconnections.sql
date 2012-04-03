DROP DATABASE IF EXISTS umwconnections;
CREATE DATABASE IF NOT EXISTS umwconnections;
USE umwconnections;

GRANT ALL PRIVILEGES ON umwconnections.* TO 'admin'@'localhost' IDENTIFIED BY 'adminpw';

CREATE TABLE IF NOT EXISTS Login (
	email varchar(100) NOT NULL,
	pw varchar(40) NOT NULL,
	PRIMARY KEY (email, pw)
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Comments (
	name varchar(50) NOT NULL,
	email varchar(30) NOT NULL,
	comments blob NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Images (
    image_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    file_data longblob NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Interests (
	interest_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	interest blob NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Classifications (
	classification_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	classification ENUM('Freshman', 'Sophomore', 'Junior', 'Senior', 'Professor') NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS InterestedIn (
	interested_in_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	interested_in_value ENUM('Male','Female','No preference') NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Looking_For (
	looking_for_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	looking_for_value ENUM('Date', 'Relationship', 'Friendship', 'Study Group', 'Sports') NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Majors (
	major_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	major varchar(50) NOT NULL
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Users (
	user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email varchar(100) NOT NULL,
  	last_name varchar(25) NOT NULL,
  	first_name varchar(25) NOT NULL,
  	gender ENUM('Male', 'Female', 'N/A') NOT NULL DEFAULT 'N/A',
  	phone varchar(10) NOT NULL DEFAULT 'N/A',
  	description blob,
  	interested_in_id int,
	classification_id int,
  	looking_for_id int,
  	image_id int,
  	CONSTRAINT login_email_fk FOREIGN KEY (email) REFERENCES Login (email),
  	CONSTRAINT classifications_classification_id_fk FOREIGN KEY (classification_id) REFERENCES Classifications (classification_id),
  	CONSTRAINT interestedIn_interested_in_id_fk FOREIGN KEY (interested_in_id) REFERENCES InterestedIn (interested_in_id),
	CONSTRAINT looking_for_looking_for_id_fk FOREIGN KEY (looking_for_id) REFERENCES Looking_For (looking_for_id),
	CONSTRAINT images_image_id_fk FOREIGN KEY (image_id) REFERENCES Images (image_id)
)ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Users_Interests(
	user_id int NOT NULL,
	interest_id int NOT NULL,
	PRIMARY KEY (user_id, interest_id),
	CONSTRAINT users_user_id_fk FOREIGN KEY (user_id) REFERENCES Users (user_id),
	CONSTRAINT interests_interest_id_fk FOREIGN KEY (interest_id) REFERENCES Interests (interest_id)
) ENGINE = MYISAM;

CREATE TABLE IF NOT EXISTS Users_Majors (
	user_id int NOT NULL,
	major_id int NOT NULL,
	PRIMARY KEY(user_id, major_id),
	CONSTRAINT users_user_id_fk FOREIGN KEY (user_id) REFERENCES Users (user_id),
	CONSTRAINT majors_major_id_fk FOREIGN KEY (major_id) REFERENCES Majors (major_id)
)ENGINE = MYISAM;

INSERT INTO Login (email,pw) VALUES 
	('admin',SHA('admin')),
	('tgray@mail.umw.edu',SHA('tgray')),
	('rhorn@mail.umw.edu',SHA('rhorn')),
	('jsmith@mail.umw.edu',SHA('jsmith')),
	('yfisher@mail.umw.edu',SHA('yfisher')),
	('sjohnson@mai.umw.edu', SHA('sjohnson')),
	('sramirez@mail.umw.edu', SHA ('sramirez')),
	('fali@mail.umw.edu', SHA('fali')),
	('jjacobs@mail.umw.edu', SHA('jjacobs')),
	('btyler@mail.umw.edu', SHA ('btyler')),
	('yyurameshi@mail.umw.edu', SHA('yyurameshi')),
	('sgoku@mail.umw.edu', SHA('sgoku')),
	('nuzamaki@mail.umw.edu', SHA('nuzamaki')),
	('zefron@mail.umw.edu', SHA('zefron')),
	('jalba@mail.umw.edu', SHA('jalba')),
	('hgranger@mail.umw.edu', SHA('hgranger'));

INSERT INTO Users (email, last_name, first_name, gender, phone, description) VALUES
	('tgray@mail.umw.edu','Gray','Todd','Male','4537638355','Tall, dark and handsome'),
	('rhorn@mail.umw.edu','Horn','Russell','Male','3152505279','Constantly wears glasses and a red and white striped sweater with a matching hat and blue pants.'),
	('jsmith@mail.umw.edu','Smith','John','Male','8953265471','Short, pale, and ugly'),
	('sjohnson@mai.umw.edu','Johnson','Samantha','Female','6587981002','Very fair skin, long legs, dark black hair'),
	('sramirez@mail.umw.edu','Ramirez','Santiago','Male','1472583698','Curly hair, medium height, nice smile'),
	('fali@mail.umw.edu','Ali','Fatima','Female','9632587415','Green eyes, tall, slender'),
	('yfisher@mail.umw.edu','Fisher','Yen','Female','8414639889','Enjoys long walks on the beach and candlelight dinners'),
	('jjacobs@mail.umw.edu','Jacobs','John','Male','2356789410','I love wearing aeropostale and skinny jeans'),
	('btyler@mail.umw.edu','Tyler','Ben','Male','0712345895','58 years old but still going strong'),
	('yyurameshi@mail.umw.edu','Yurameshi','Yusuke','Male','7775559998','I am a spirit detective and protect the world from demons'),
	('sgoku@mail.umw.edu','Goku','Son','Male','5821743906','Spiky hair! Sometimes black, sometimes blonde, sometimes red...'),
	('nuzamaki@mail.umw.edu','Uzamaki','Naruto','Male','7531598462','I am gonna be the Hokage!'),
	('zefron@mail.umw.edu','Efron','Zac','Male','7845123695','I like making chick-flicks and dating Vanessa Hudgens...or was it Miley Cyrus?'),
	('jalba@mail.umw.edu','Alba','Jessica','Female','7598463451','This is not the famous Jessica Alba....'),
	('hgranger@mail.umw.edu','Granger','Hermoine','Female','7530159846','I like magical walks under the night sky...literally');
	
	
INSERT INTO Comments VALUES('Sally Jo','sally@umw.edu','I LOVE THIS SITE!!!!!!! It helped me meet my soulmate!!'),('Peter','prabbit@umw.edu','How do you upload a picture?');

INSERT INTO Majors (major) VALUES ('Theater'),('Computer Science'),('Biology'),('Chemistry'),('Mathematics'), ('English'), ('Spanish'),('Political Science'),('International Relations'),('Magic');

INSERT INTO Interests (interest) VALUES ('Martial Arts'),('Acting'),('Surfing'),('Fighting'),('Basketball'),('Soccer'),('Singing'),('Football'),('Hacking'),('Video Games'),('Magic'),('Ju-jitsu');

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
WHERE Users.last_name = 'Smith' AND (Interests.interest = 'Ju-jitsu');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Johnson' AND (Interests.interest = 'Soccer');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Ramirez' AND (Interests.interest = 'Magic');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Ali' AND (Interests.interest = 'Basketball');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Fisher' AND (Interests.interest = 'Ju-jitsu');
--
INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Jacobs' AND (Interests.interest = 'Basketball');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Tyler' AND (Interests.interest = 'Surfing');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Yurameshi' AND (Interests.interest = 'Fighting');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Goku' AND (Interests.interest = 'Martial Arts');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Uzamaki' AND (Interests.interest = 'Fighting' OR Interests.interest = 'Martial Arts');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Efron' AND (Interests.interest = 'Acting');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Alba' AND (Interests.interest = 'Acting' OR Interests.interest = 'Surfing');

INSERT INTO Users_Interests SELECT Users.user_id, Interests.interest_id FROM Users, Interests 
WHERE Users.last_name = 'Granger' AND (Interests.interest = 'Magic');


INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Gray' AND (Majors.major = 'Theater');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Horn' AND (Majors.major = 'Computer Science');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Smith' AND (Majors.major = 'Spanish');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Johnson' AND (Majors.major = 'International Relations');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Ramirez' AND (Majors.major = 'Political Science');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Ali' AND (Majors.major = 'Chemistry');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Fisher' AND (Majors.major = 'Biology');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Jacobs' AND (Majors.major = 'Political Science');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Tyler' AND (Majors.major = 'Computer Science');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Yurameshi' AND (Majors.major = 'English');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Goku' AND (Majors.major = 'International Relations');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Uzamaki' AND (Majors.major = 'Chemistry');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Efron' AND (Majors.major = 'Theater');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Alba' AND (Majors.major = 'Theater');

INSERT INTO Users_Majors SELECT Users.user_id, Majors.major_id FROM Users, Majors 
WHERE Users.last_name = 'Granger' AND (Majors.major = 'Magic');

UPDATE Users SET interested_in_id = (SELECT InterestedIn.interested_in_id FROM InterestedIn
WHERE InterestedIn.interested_in_value = 'Male') WHERE (Users.last_name = 'Gray' OR Users.last_name = 'Fisher' OR Users.last_name = 'Ali' OR Users.last_name = 'Johnson' OR Users.last_name = 'Alba' OR Users.last_name = 'Granger' OR Users.last_name = 'Efron');

UPDATE Users SET interested_in_id = (SELECT InterestedIn.interested_in_id FROM InterestedIn
WHERE InterestedIn.interested_in_value = 'Female') WHERE (Users.last_name = 'Horn' OR Users.last_name = 'Smith' OR Users.last_name = 'Ramirez' OR Users.last_name = 'Jacobs' OR Users.last_name = 'Tyler' OR Users.last_name = 'Urameshi' OR Users.last_name = 'Goku' OR Users.last_name = 'Uzamaki' OR Users.last_name = 'Yurameshi');

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Jacobs';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Sophomore') WHERE Users.last_name = 'Tyler';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Junior') WHERE Users.last_name = 'Yurameshi';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Senior') WHERE Users.last_name = 'Goku';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Uzamaki';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Efron';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Junior') WHERE Users.last_name = 'Alba';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Senior') WHERE Users.last_name = 'Granger';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Gray';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Sophomore') WHERE Users.last_name = 'Horn';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Junior') WHERE Users.last_name = 'Smith';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Senior') WHERE Users.last_name = 'Johnson';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Junior') WHERE Users.last_name = 'Ramirez';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Sophomore') WHERE Users.last_name = 'Ali';

UPDATE Users SET classification_id = (SELECT Classifications.classification_id FROM Classifications
WHERE Classifications.classification = 'Freshman') WHERE Users.last_name = 'Fisher';

UPDATE Users SET looking_for_id = (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Date') WHERE (Users.last_name = 'Gray' OR Users.last_name = 'Horn' OR Users.last_name = 'Alba' OR Users.last_name = 'Efron' OR Users.last_name = 'Jacobs');

UPDATE Users SET looking_for_id =  (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Friendship') WHERE (Users.last_name = 'Smith' OR Users.last_name = 'Goku' OR Users.last_name = 'Yurameshi');

UPDATE Users SET looking_for_id =  (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Sports') WHERE (Users.last_name = 'Ali' OR Users.last_name = 'Uzamaki');

UPDATE Users SET looking_for_id =  (SELECT Looking_For.looking_for_id FROM Looking_For
WHERE Looking_For.looking_for_value = 'Relationship') WHERE (Users.last_name = 'Fisher' OR Users.last_name = 'Johnson' OR Users.last_name = 'Ramirez' OR Users.last_name = 'Granger' OR Users.last_name = 'Tyler');