
CREATE TABLE IF NOT EXISTS patients (
  id SERIAL NOT NULL ,
  lastName varchar(40) NOT NULL,
  firstName varchar(40) NOT NULL,
  phone varchar(20) NOT NULL,
  cellPhone varchar(20) NOT NULL,
  email varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  socialSecurity_id int DEFAULT NULL,
  created timestamp NOT NULL,
  modified timestamp NOT NULL,
  PRIMARY KEY (id)
);



INSERT INTO patients (id, lastname, firstname, phone, cellphone, email, address, socialsecurity_id, created, modified) VALUES
(1, 'Memoli', 'Francisco', '1213', '2342', 'francisco.memoli@gmail.com', 'cabello 3755', NULL, '2014-06-30 03:42:32', '2014-07-01 23:21:44'),
(2, 'Memoli', 'Milagros', '1213', '2342', '', 'cabello ', NULL, '2014-06-30 03:42:32', '2014-06-30 03:42:32');



CREATE TABLE IF NOT EXISTS users (
  id SERIAL NOT NULL ,
  username varchar(50) DEFAULT NULL,
  password varchar(50) DEFAULT NULL,
  role varchar(20) DEFAULT NULL,
  created timestamp DEFAULT NULL,
  modified timestamp DEFAULT NULL,
  PRIMARY KEY (id)
)  ;



INSERT INTO users (id, username, password, role, created, modified) VALUES
(1, 'fran', 'ebcbc0b74e96ae35219cd0dffcb5ccfef7fe07eb', 'admin', '2014-06-28 18:27:23', '2014-06-28 18:27:23');

