
--1. Korisnik moze izvuci sve podatke (koji su sadrzani u tabeli Books) o svim knjigama

SELECT * 
FROM books;

--2. Korisnik ima mogucnost da trazi knjigu po odredjenom autoru

SELECT *
FROM authors A
WHERE A.first_name = 'John';

--3. Koji clan je iznajmio odredjenu knjigu

SELECT first_name, last_name, D.book_code, B.title
FROM members M
INNER JOIN demand D ON M.id=D.member_id 
INNER JOIN books B ON B.book_code=D.book_code
WHERE D.book_code = 'B000010';

--4. Kad je izdata odredjena knjiga

SELECT  date_of_issue, B.title
FROM demand D
INNER JOIN books B ON D.book_code=B.book_code;

--5. Ko je izdao koju knjigu 

SELECT first_name, last_name, 
FROM staff S
INNER JOIN renting R ON S.id= R.staff_id
INNER JOIN books B ON R.book_code=B.book_code;

 
 --6. Podaci o svim knjigama i iznajmljivanjima od strane odredjenog clana biblioteke

 SELECT *
 FROM books B, demand D
 WHERE b.book_code= D.book_code
 AND EXISTS(
     SELECT*
     FROM members M 
     WHERE M.id=D.member_id AND
     M.first_name='ANJA'
 );

 --7. Izlistava sve knjige koje nikad nijesu iznajmljene

 SELECT * 
 FROM books B
 WHERE NOT EXISTS (
     SELECT *
     FROM renting R
     WHERE R.book_code=B.book_code
 );