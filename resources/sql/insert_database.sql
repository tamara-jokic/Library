USE library;

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO books (title, edition, date_of_issuing, availability) VALUES
('Harry Potter and the Goblet of Fire', 'Tenth', '2019-05-14', 1),
('Harry Potter and the Goblet of Fire', 'Tenth', '2019-05-14', 1),
('Harry Potter and the Goblet of Fire', 'Tenth', '2019-05-14', 1),
('Harry Potter and the Goblet of Fire', 'Tenth', '2019-05-14', 1);
-- (5, 'Harry Potter and the Goblet of Fire', 'Tenth', '2019-05-14', 1),
-- (6, 'The Guardians', 'Second', '2010-03-25', 1),
-- (7, 'The Guardians', 'Second', '2010-03-25', 1),
-- (8, 'The Guardians', 'Second', '2010-03-25', 1),
-- (9, 'The Guardians', 'Second', '2010-03-25', 1),
-- (10, 'The Institute', 'First', '2000-10-04', 1),
-- (11, 'The Institute', 'First', '2000-10-04', 1),
-- (12, 'Criss Cross',  'Fourth', '2015-04-08', 1),
-- (13, 'Criss Cross',  'Fourth', '2015-04-08', 1 ),
-- (14, 'Criss Cross',  'Fourth', '2015-04-08', 1 ),
-- (15, 'Criss Cross',  'Fourth', '2015-04-08', 1 ),
-- (16, 'Catch-22',  'First', '1961-02-15', 1),
-- (17, 'On the Road',  'Second', '1990-10-26', 1),
-- (18, 'The Lord of the Rings',  'Fourth', '1999-02-14', 1),
-- (19, 'The Lord of the Rings',  'Fourth', '1999-02-14', 1),
-- (20, 'The Lord of the Rings', 'Fourth', '1999-02-14', 1),
-- (21, 'The Lord of the Rings',  'Fourth', '1999-02-14', 1),
-- (23, 'Lord of the Flies', 'Second', '1989-10-30', 1),
-- (24, 'The Stranger',  'Second', '1980-06-19', 1),
-- (25, 'The Sun Also Rises', 'First', '1920-09-14', 1);

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO members(jmbg, first_name, last_name, mobile, email) VALUES
(1203989215023,'Marko ', 'Jovanovic', '069456789', 'markojovanovic@gmail.com'),
(0210998212036, 'Stefan', 'Petrovic', '067125896', 'stefanpetrovic@gmail.com'),
(1603976214565, 'Anja ', 'Karovic', '068169752', 'karovicanja@gmail.com'),
(0512996216312, 'Anastasija', 'Jokic', '068964125', 'jokicana@hotmail.com'),
(2611994215014, 'Suzana ', 'Globarevic', '067458124', 'suzanasuzana@gmail.com'),
(2907995203645, 'Jovana', 'Jankovic', '069369852', 'jankovic123@hotmail.com'),
(3102997214512, 'Jelena', 'Markovic', '067775881', 'markjelena@gmail.com'),
(0910999213121, 'Miljan ', 'Lukovac', '068987412', 'lukovacm@gmail.com');


SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO demand(member_id, book_code, date_of_issue, date_of_receipt) VALUES
(1, 1, '2019-10-12', '2019-11-02'),
(1, 2, '2018-12-06','2018-12-30'),
(3, 2, '2017-04-25','2017-05-05'),
(3, 3, '2019-03-26','2019-04-15'),
(6, 4, '2018-06-07','2018-07-06'),
(7, 2, '2019-01-30','2019-03-15'),
(8, 1,'2019-11-03','2019-11-13'),
(7, 4, '2018-12-15','2018-12-31');

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO authors(first_name, last_name)VALUES
('J.K.', 'Rowling'),
('John', 'Grisham'),
('Stephen', 'King'),
('James', 'Patterson'),
('Joseph', 'Heller'),
('Jack', 'Kerouac'),
('Mesa', 'Selimovic'),
('J.R.R.', 'Tolkien'),
('William', 'Golding'),
('Albert', 'Camus'),
('Ernest', 'Hemingway'),
('Ivo', 'Andric');

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO staff(first_name, last_name, jmbg, mobile) VALUES
('Nemanja', 'Jnakovic', 1203989215412, '068898545'),
('Tamara', 'Ivanovic', 0204979201541, '067436987'),
('Nevena', 'Simonovic', 2607988213652, '069634753'),
('Milos', 'Nikolic', 1406986203214, '067189642');

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO renting(staff_id, member_id, book_code, date_of_rent, date_of_return) VALUES
(1,1, 1, '2019-10-12', '2019-11-02'),
(2,1, 2, '2018-12-06','2018-12-30'),
(3,3, 3, '2017-04-25','2017-05-05'),
(4,3, 4, '2019-03-26','2019-04-15'),
(2,6, 2, '2018-06-07','2018-07-06'),
(3,7, 1, '2019-01-30','2019-03-15'),
(3,8, 4,'2019-11-03','2019-11-13'),
(4,7, 2, '2018-12-15','2018-12-31');

SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO publishers(name, location)VALUES
('Akademija', 'Beograd'),
('Akademska knjiga', 'Novi Sad'),
('Croatia knjige', 'Zagreb'),
('Narodna prosvjeta', 'Sarajevo'),
('Laguna', 'Beograd'),
('Nova knjiga', 'Podgorica'),
('Narodna knjiga', 'Budva');


SET FOREIGN_KEY_CHECKS = 0;

SET FOREIGN_KEY_CHECKS = 1;


