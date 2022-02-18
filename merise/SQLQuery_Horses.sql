use Horse

-- DROP TABLE Horses, People, Companies, care, is_part_of --

Create TABLE Horses(
	horse_registration_id INT,
	horse_birthday DATE NOT NULL,
	horse_breed VARCHAR(20),
	horse_primary_color VARCHAR(10) NOT NULL,
	horse_gender VARCHAR(1) NOT NULL,
	horse_birth_location VARCHAR(20) NOT NULL,
	PRIMARY KEY(horse_registration_id)
	);

CREATE TABLE People(
	person_id INT,
	person_lastname VARCHAR(32) NOT NULL,
	person_firstname VARCHAR(32),
	person_street VARCHAR(255) NOT NULL,
	person_city VARCHAR(32),
	person_zipcode VARCHAR(5) NOT NULL,
	PRIMARY KEY(person_id)
	);

CREATE TABLE Companies(
	company_siren VARCHAR(2),
	company_name VARCHAR(24) NOT NULL,
	person_id INT NOT NULL,
	PRIMARY KEY(company_siren),
	FOREIGN KEY(person_id) REFERENCES People(person_id)
	);

CREATE TABLE care(
	horse_registration_id INT,
	person_id INT,
	activity_name VARCHAR(15) NOT NULL CHECK (activity_name IN('proprietaire', 'vaccination', 'entraineur')),
	activity_date DATE NOT NULL,
	PRIMARY KEY(horse_registration_id, person_id),
	FOREIGN KEY(horse_registration_id) REFERENCES Horses(horse_registration_id),
	FOREIGN KEY(person_id) REFERENCES People(person_id)
	);

CREATE TABLE is_part_of(
	person_id INT,
	company_siren VARCHAR(2),
	PRIMARY KEY(person_id, company_siren),
	FOREIGN KEY(person_id) REFERENCES People(person_id),
	FOREIGN KEY(company_siren) REFERENCES Companies(company_siren)
	);


		

