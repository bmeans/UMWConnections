DROP DATABASE IF EXISTS umwconnections;
CREATE DATABASE IF NOT EXISTS umwconnections;
USE umwconnections;

CREATE TABLE IF NOT EXISTS Users (
	email varchar(100) NOT NULL,
  	lastname varchar(25) NOT NULL,
  	firstname varchar(25) NOT NULL,
  	gender ENUM('Male', 'Female') NOT NULL,
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

INSERT INTO Users (year,email,lastname,firstname,gender,phone,interests,description,lookingFor,major) VALUES 
('Freshmen','semper@eu.ca','Gray','Todd','Male','4537638355','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetuer adipiscing','Date','egestas.'),
('Sophomore','amet.faucibus.ut@hendrerit.com','Horn','Russell','Male','3152505279','Lorem','Lorem','Date','metus vitae velit'),
('Junior','lorem.ut.aliquam@vulputateposuerevulputate.ca','Fisher','Yen','Female','8414639889','Lorem ipsum dolor','Lorem ipsum','Relationship','nisl. Nulla'),
('Senior','et.rutrum.non@gravidasit.com','Hahn','Germane','Female','2635477840','Lorem ipsum dolor sit','Lorem ipsum dolor sit amet,','Relationship','a,'),
('Freshmen','tincidunt@orciluctuset.ca','Herrera','Dieter','Female','8662835372','Lorem','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur','Study Group','orci. Ut semper'),
('Freshmen','facilisis@molestiedapibusligula.com','Tate','Colby','Female','7631496679','Lorem','Lorem ipsum','Relationship','iaculis nec,'),
('Sophomore','in@aliquetPhasellus.org','Sexton','Maite','Female','2523286236','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.','Study Group','metus vitae'),
('Sophomore','sit.amet.ultricies@auctor.org','Mann','Sybil','Male','3713865184','Lorem ipsum dolor sit amet,','Lorem ipsum','Date','pede. Suspendisse dui.'),
('Junior','dictum.eleifend@ipsumleo.com','Compton','Dalton','Male','9754025312','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet,','Sports','mauris elit,'),
('Junior','ligula.Aliquam.erat@Vestibulum.ca','Jarvis','Indira','Male','7614598990','Lorem ipsum dolor','Lorem ipsum dolor sit amet,','Sports','cursus vestibulum.'),
('Senior','ac@Nulla.org','Hutchinson','Declan','Male','3702463813','Lorem ipsum dolor sit','Lorem ipsum dolor','Date','feugiat tellus'),
('Senior','lectus.pede@felisadipiscing.com','Browning','Alan','Male','8484753990','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer','','consequat'),
('Professor','Fusce.aliquet@adipiscingligula.com','Sweet','Noel','Female','3838685961','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','Relationship','lacinia vitae,');

INSERT INTO login VALUES('semper@eu.ca','semper'),('amet.faucibus.ut@hendrerit.com','kittycat'),('lorem.ut.aliquam@vulputateposuerevulputate.ca','heythere');