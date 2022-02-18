use Bibliotheque

DROP TABLE borrow;
DROP TABLE Clients;
DROP TABLE Books;


CREATE TABLE Clients(
	client_register VARCHAR(50),
	client_bail DECIMAL(4,2) NOT NULL,
	client_number_loan INT,
	client_date_loan Date NOT NULL,
	client_adress VARCHAR(100) NOT NULL,
	client_lastname VARCHAR(50),
	client_firstname VARCHAR(50),
	PRIMARY KEY(client_register)
	);

CREATE TABLE Books(
	book_id VARCHAR(50),
	name_editor VARCHAR(50) NOT NULL,
	name_author VARCHAR(50) NOT NULL,
	book_number INT,
	book_digits INT,
	book_date_buy DATE NOT NULL,
	book_condition VARCHAR(50) NOT NULL,
	book_title VARCHAR(50) NOT NULL,
	PRIMARY KEY(book_id),
	UNIQUE(book_title)
	);

CREATE TABLE borrow(
	client_register VARCHAR(50),
	book_id VARCHAR(50),
	PRIMARY KEY(client_register, book_id),
	FOREIGN KEY(client_register) REFERENCES Clients(client_register),
	FOREIGN KEY(book_id) REFERENCES Books(book_id)
	);