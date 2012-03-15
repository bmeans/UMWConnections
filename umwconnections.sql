DROP DATABASE IF EXISTS umwconnections;
CREATE DATABASE IF NOT EXISTS umwconnections;
USE umwconnections;

GRANT ALL PRIVILEGES ON umwconnections TO 'admin'@'localhost' IDENTIFIED BY 'adminpw';

CREATE TABLE IF NOT EXISTS Users (
	email varchar(100) NOT NULL,
  	last_name varchar(25) NOT NULL,
  	first_name varchar(25) NOT NULL,
  	gender ENUM('Male', 'Female') NOT NULL,
  	interested_in ENUM('Male','Female', 'No preference'),
	year ENUM('Freshmen', 'Sophomore', 'Junior', 'Senior', 'Professor') NOT NULL,
  	phone varchar(10) NOT NULL,
  	interests blob NOT NULL,
  	description blob,
  	lookingFor ENUM('Date', 'Relationship', 'Friendship', 'Study Group', 'Sports') NOT NULL,
  	major varchar(50),
  	PRIMARY KEY (email)
);

CREATE TABLE IF NOT EXISTS Login (
	email varchar(100) NOT NULL,
	pw varchar(20) NOT NULL,
	PRIMARY KEY (email)
);

CREATE TABLE IF NOT EXISTS Comments (
	name varchar(50) NOT NULL,
	email varchar(30) NOT NULL,
	comments blob NOT NULL
);
	
	

INSERT INTO Users (interested_in,year,email,last_name,first_name,gender,phone,interests,description,lookingFor,major) VALUES 
('Male','Freshmen','tgray@mail.umw.edu','Gray','Todd','Male','4537638355','Soccer, Singing, Football','Tall, dark and handsome','Date','Theater'),
('Female','Sophomore','rhorn@mail.umw.edu','Horn','Russell','Male','3152505279','Hacking, Video Games, Magic','Constantly wears glasses and a red and white striped sweater with a matching hat and blue pants. ','Date','Computer Science'),
('Male','Junior','yfisher@mail.umw.edu','Fisher','Yen','Female','8414639889','Ju-jitsu','Enjoys long walks on the beach, and candlelight dinners','Relationship','Biology'),
('Female','Senior','et.rutrum.non@gravidasit.com','Hahn','Germane','Female','2635477840','Lorem ipsum dolor sit','Lorem ipsum dolor sit amet,','Relationship','a,'),
('Male','Freshmen','tincidunt@orciluctuset.ca','Herrera','Dieter','Female','8662835372','Lorem','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur','Study Group','orci. Ut semper'),
('Female','Freshmen','facilisis@molestiedapibusligula.com','Tate','Colby','Female','7631496679','Lorem','Lorem ipsum','Relationship','iaculis nec,'),
('Male','Sophomore','in@aliquetPhasellus.org','Sexton','Maite','Female','2523286236','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.','Study Group','metus vitae'),
('Female','Sophomore','sit.amet.ultricies@auctor.org','Mann','Sybil','Male','3713865184','Lorem ipsum dolor sit amet,','Lorem ipsum','Date','pede. Suspendisse dui.'),
('Male','Junior','dictum.eleifend@ipsumleo.com','Compton','Dalton','Male','9754025312','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet,','Sports','mauris elit,'),
('Female','Junior','ligula.Aliquam.erat@Vestibulum.ca','Jarvis','Indira','Male','7614598990','Lorem ipsum dolor','Lorem ipsum dolor sit amet,','Sports','cursus vestibulum.'),
('Male','Senior','ac@Nulla.org','Hutchinson','Declan','Male','3702463813','Lorem ipsum dolor sit','Lorem ipsum dolor','Date','feugiat tellus'),
('Female','Senior','lectus.pede@felisadipiscing.com','Browning','Alan','Male','8484753990','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer','','consequat'),
('Male','Professor','Fusce.aliquet@adipiscingligula.com','Sweet','Noel','Female','3838685961','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','Relationship','lacinia vitae,');

INSERT INTO login VALUES('tgray@mail.umw.edu','tgray'),('rhorn@mail.umw.edu','rhorn'),('yfisher@mail.umw.edu','yfisher'), ('acrowe@mail.umw.edu','acrowe');