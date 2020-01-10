DROP DATABASE IF EXISTS library;

CREATE DATABASE library;

USE library;

CREATE TABLE books (
    book_code INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    edition VARCHAR(255) NOT NULL,
    date_of_issuing DATE NOT NULL,
    availability BIT(1)
);


CREATE TABLE members(
    id INT AUTO_INCREMENT PRIMARY KEY,
    jmbg BIGINT NOT NULL,      
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    mobile VARCHAR(30),
    email VARCHAR(255)

);


CREATE TABLE demand(
    member_id INT,
    book_code INT,
    date_of_issue DATE NOT NULL,
    date_of_receipt DATE NOT NULL,
    PRIMARY KEY (member_id, book_code, date_of_issue, date_of_receipt),
    CONSTRAINT FK_DEMAND_MEMBER FOREIGN KEY (member_id)
    REFERENCES members (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    CONSTRAINT FK_DEMAND_BOOKS FOREIGN KEY (book_code)
    REFERENCES books (book_code)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);




CREATE TABLE authors(
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);


CREATE TABLE wrote(
    book_code INT,
    author_id INT,
    PRIMARY KEY (book_code, author_id),
    CONSTRAINT FK_BOOK FOREIGN KEY (book_code)
    REFERENCES books (book_code)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    CONSTRAINT FK_AUTHOR FOREIGN KEY (author_id)
    REFERENCES authors (id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    jmbg BIGINT NOT NULL, 
    mobile VARCHAR(255)

);



CREATE TABLE renting(
    staff_id INT NOT NULL,
    member_id INT NOT NULL,
    book_code INT NOT NULL,
    date_of_rent DATE NOT NULL,
    date_of_return DATE NOT NULL,
    PRIMARY KEY (staff_id, member_id, book_code, date_of_rent, date_of_return),
    CONSTRAINT FK_RENTING_STAFF FOREIGN KEY (staff_id)
    REFERENCES staff (id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    CONSTRAINT FK_RENTING_MEMBER FOREIGN KEY (member_id)
    REFERENCES members (id)
    ON DELETE CASCADE 
    ON UPDATE CASCADE,
    CONSTRAINT FK_RENTING_BOOK FOREIGN KEY (book_code)
    REFERENCES books (book_code)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);

CREATE TABLE publishers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255),
    book_code INT,
    CONSTRAINT FK_PUBLISHERS_BOOK FOREIGN KEY (book_code)
    REFERENCES books (book_code)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
);