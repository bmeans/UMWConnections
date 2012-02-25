DROP DATABASE IF EXISTS umwconnections;
CREATE DATABASE IF NOT EXISTS umwconnections;
USE umwconnections;

CREATE TABLE IF NOT EXISTS Users (
	email varchar(100) NOT NULL,
  	lastname varchar(25) NOT NULL,
  	firstname varchar(25) NOT NULL,
  	gender ENUM('Male', 'Female') NOT NULL,
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

INSERT INTO Users (email,lastname,firstname,gender,phone,interests,description,lookingFor,major) VALUES 
('semper@eu.ca','Gray','Todd','Male','4537638355','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetuer adipiscing','Date','egestas.'),
('amet.faucibus.ut@hendrerit.com','Horn','Russell','Male','3152505279','Lorem','Lorem','Date','metus vitae velit'),
('lorem.ut.aliquam@vulputateposuerevulputate.ca','Fisher','Yen','Female','8414639889','Lorem ipsum dolor','Lorem ipsum','Relationship','nisl. Nulla'),
('et.rutrum.non@gravidasit.com','Hahn','Germane','Female','2635477840','Lorem ipsum dolor sit','Lorem ipsum dolor sit amet,','Relationship','a,'),
('tincidunt@orciluctuset.ca','Herrera','Dieter','Female','8662835372','Lorem','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur','Study Group','orci. Ut semper'),
('facilisis@molestiedapibusligula.com','Tate','Colby','Female','7631496679','Lorem','Lorem ipsum','Relationship','iaculis nec,'),
('in@aliquetPhasellus.org','Sexton','Maite','Female','2523286236','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.','Study Group','metus vitae'),
('sit.amet.ultricies@auctor.org','Mann','Sybil','Male','3713865184','Lorem ipsum dolor sit amet,','Lorem ipsum','Date','pede. Suspendisse dui.'),
('dictum.eleifend@ipsumleo.com','Compton','Dalton','Male','9754025312','Lorem ipsum dolor sit amet,','Lorem ipsum dolor sit amet,','Sports','mauris elit,'),
('ligula.Aliquam.erat@Vestibulum.ca','Jarvis','Indira','Male','7614598990','Lorem ipsum dolor','Lorem ipsum dolor sit amet,','Sports','cursus vestibulum.'),
('ac@Nulla.org','Hutchinson','Declan','Male','3702463813','Lorem ipsum dolor sit','Lorem ipsum dolor','Date','feugiat tellus'),
('lectus.pede@felisadipiscing.com','Browning','Alan','Male','8484753990','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer','Date','consequat'),
('Fusce.aliquet@adipiscingligula.com','Sweet','Noel','Female','3838685961','Lorem ipsum','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','Relationship','lacinia vitae,');

INSERT INTO login VALUES('semper@eu.ca','semper'),('amet.faucibus.ut@hendrerit.com','kittycat'),('lorem.ut.aliquam@vulputateposuerevulputate.ca','heythere');