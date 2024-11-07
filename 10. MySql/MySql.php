<?php
// ! SQL - Structured Query Language        
// ! MYSQL - The “My” of MySQL is the name of the co-creator's daughter, My.  (relational database management system)
// ! DBMS - Data Base Management System
// ! SQL MySQL Commands Siralamasi ve bu siralama qarismamalidir
//? SELECT
//? DISTINCT
//? FROM
//? JOIN
//? ON
//? UNION
//? WHERE
//? GROUP BY
//? HAVING
//? BETWEEN LIKE
//? AND OR IN
//? ORDER BY
//? LIMIT

// TODO: SQL Commands CREATE TABLE
// CREATE DATABASE Human;                                              //! Create Database
// USE Human;                                                          //! You are now in that Database
// CREATE TABLE Friends (user int PRIMARY KEY, fullname varchar(25), age int );    //! Create "Friends" Table and prepare user, fullname and age THEAD to inserting
// INSERT INTO Friends (user, fullname, age) ...                       //! INSERT edeceyimiz TABLE THEAD-larini PREPARE edirik
// ... VALUES ("FD", "Fuad Babayev", 25), (NULL, "Rauf Abbasli", 25);  //! Ve icine daxil edirik VALUELERI
// DROP DATABASE(TABLE) Human;                                         //! Delete Database or table
// ALTER TABLE Friends AUTO_INCREMENT = 1000;                          //! AUTO_INCREMENT 1-den yox istenilen ededden baslaya biler

// TODO: PHP CRUD Operations
//* INSERT INTO Table (name, surname, age) VALUES ("Fuad", "Babayev", 25);       CREATE
//* UPDATE Table SET age = 25, status = "Employee" WHERE user_id = 1;            UPDATE
//* DELETE FROM Table WHERE user_id = 1;                                         DELETE

// TODO: SQL Commands (SQL is not casesensitive try to write SQL command with UPPERCASE, table names LOWERCASE)
//* USE sakila                                                         en evvelceden her zaman bildirki bu database ile isleyeceksen ve digerlerine baxmasin hec
//* DESCRIBE sakila.actor                                              Sakila Databasenin icindeki Actor tablesinin icindeki deyerlerin typeni gosterir
//* SELECT * FROM film;                                                FILM tablesindeki butun ROW-lari getirir
//* SELECT * FROM sakila.film;                                         SAKILA databasesindeki FILM tablesindeki butun ROW-lari getirir
//* SELECT * FROM film LIMIT 100;                                      ILK 100 elementi qaytarir
//* SELECT * FROM film LIMIT 0, 100;                                   1-ci elementden basla ve umumi 100 element qaytar
//* SELECT * FROM film LIMIT 30, 5;                                    31-ci elementden basla ve umumi 5 element qaytar yeni [31 ... 35]
//* SELECT title FROM film;                                            FILM tablesindeki TITLE ROW-daki butun datalari getirir
//* SELECT title AS header FROM film;                                  ALIAS: FILM tablesindeki TITLE ROW-daki butun datalari HEADER adi ile getir
//* SELECT title, email FROM film;                                     FILM tablesindeki TITLE ve EMAIL ROW-daki butun datalari getirir
//* SELECT *, title FROM film;                                         FILM tablesindeki butun datalarin yanina yeniden TITLE rowundaki butun datalari getirir
//* SELECT COUNT(*) FROM payment;                                      PAYMENT tabledeki CUSTOMER_ID ROW-daki butun datalarin sayinin gosterir
//* SELECT COUNT(customer_id) FROM payment;                            PAYMENT tabledeki CUSTOMER_ID ROW-daki butun datalarin sayinin gosterir
//* SELECT DISTINCT customer_id FROM payment;                          PAYMENT tabledeki CUSTOMER_ID ROW-daki UNIQUE olan deyerleri getirir (Tekrarlari silir) 
//* SELECT COUNT(DISTINCT customer_id) FROM payment;                   PAYMENT tabledeki CUSTOMER_ID ROW-daki UNIQUE olan deyerlerin sayini getirir 
//* SELECT amount, (amount + 2) AS new_amonut FROM payment;            PAYMENT tabledeki AMOUNT getirdi ve yanina NEW_AMOUNT adli (amount+2) ROW-u geldi
//* SELECT * FROM city WHERE city = "Baku";                            CITY tablesindeki CITY ROW-unda BAKI olan COLUMN getirir 
//* SELECT city FROM city WHERE city = "Baku";                         CITY tablesindeki CITY ROW-unda BAKI olan CITY ROW getirir 
//* SELECT country_id FROM city WHERE city = "Baku";                   CITY tablesindeki CITY ROW-unda BAKI olan COUNTRY_ID ROW getirir 
//* SELECT * FROM film WHERE length <= 80;                             FILM tablesindeki LENGTH ROW-daki 80 ve ondan kicik butun datalari getirir
//* SELECT * FROM film WHERE length <> 80 ORDER BY cost;               FILM tablesindeki LENGTH ROW-daki 80 olmuyan butun datalari COST-a gore ARTAN qayda ile sirala
//* SELECT * FROM film WHERE length != 80 ORDER BY cost ASC;           FILM tablesindeki LENGTH ROW-daki 80 olmuyan butun datalari COST-a gore ARTAN qayda ile sirala
//* SELECT * FROM film WHERE length != 80 ORDER BY cost DESC;          FILM tablesindeki LENGTH ROW-daki 80 olmuyan butun datalari COST-a gore AZALAN qayda ile sirala
//* SELECT * FROM film ORDER BY length DESC, rental_rate ASC, name;    FILM tablesindeki LENGTH ARTAN sonra RENTAL_RATE AZALAN sonra NAME ARTAN sira ile getir
//* SELECT length, rental_rate, name FROM film ORDER BY l DESC, 2 ASC, 3; FILM tablesindeki LENGTH ARTAN sonra RENTAL_RATE AZALAN sonra NAME ARTAN sira ile getir
//* SELECT * FROM film WHERE length IN(20, 80);                        FILM tablesindeki LENGTH ROW-daki 20 ve 80 olan butun datalari getirir
//* SELECT * FROM film WHERE length BETWEEN 20 AND 80;                 FILM tablesindeki LENGTH ROW-daki [20-80] araliqindaki butun datalari getirir
//* SELECT * FROM film WHERE length NOT BETWEEN 20 AND 80;             FILM tablesindeki LENGTH ROW-daki [20-80] araliqindan BASQA butun datalari getirir
//* SELECT * FROM film WHERE length BETWEEN "A" AND "C";               FILM tablesindeki LENGTH ROW-daki [A-Z] araliqindaki butun datalari getirir
//* SELECT * FROM a WHERE b BETWEEN "2024-01-01" AND "2024-07-01";     A tablesindeki B ROW-daki TARIX araliqindaki butun datalari getirir
//* SELECT * FROM film WHERE title LIKE "A%";                          FILM tablesindeki TITLE ROW-daki A ile BASLAYIB istenilen sayda olan butun COLUMN-lari getirir
//* SELECT * FROM film WHERE title LIKE "%A";                          FILM tablesindeki TITLE ROW-daki A ile BITEN butun COLUMN-lari getirir
//* SELECT * FROM film WHERE title LIKE "%A%";                         FILM tablesindeki TITLE ROW-daki TERKİBİNDE A herfi olan butun COLUMN-lari getirir
//* SELECT * FROM film WHERE title LIKE "_LI";                         Yuxaridaki ile eyni isleyir tek ferqi 1 HERF ve sonu LI olan (ALI) COLUMN getirecek
//* SELECT * FROM film WHERE title LIKE "__I";                         Yuxaridaki ile eyni isleyir tek ferqi 2 HERF ve sonu I olan (ALI) COLUMN getirecek
//* SELECT * FROM film WHERE title LIKE "_L_";                         Umumilikde 3 HERFLI ve ortasinda L herfi olan column getirecek
//* SELECT * FROM film WHERE title LIKE "al__%";                       Mutleq MINIMUM 4 HERFLi olsun AL ile baslasin ve onlardan sonra istenilen qederi olsun
//* SELECT * FROM film WHERE title LIKE "_____";                       Ancaq 5 HERFLI olan COLUMN-lari getir
//* SELECT * FROM film WHERE title LIKE "%";                           Butun sozleri getirir WILDCART sayilir % ve _ 
//* SELECT * FROM film WHERE title NOT LIKE "_L_";                     Umumilikde 3 HERFLI ve ortasinda L herfi olan sozlerden basqa butun column getirecek
//* SELECT * FROM user WHERE age >= 25 AND price <= 400;               USER tablesindeki AGE>25 AND PRICE<=400 olan butun COLUMN-lari getirir
//* SELECT * FROM user WHERE age BETWEEN 25 AND  400;                  USER tablesindeki AGE>25 AND PRICE<=400 olan butun COLUMN-lari getirir
//* SELECT * FROM user WHERE age > 25 OR price <= 400;                 USER tablesindeki AGE>25 OR PRICE<=400 olan butun COLUMN-lari getirir
//* SELECT * FROM language WHERE name = "AZE" OR name = "TRK"          LANGUAGE tablesindeki AZE VƏ TRK dili butun COLUMN-lari getirir
//* SELECT * FROM language WHERE name IN ("AZE", "TRK");               LANGUAGE tablesindeki AZE VƏ TRK dili butun COLUMN-lari getirir (Yuxaridakinin qisa yazilisi)
//* SELECT * FROM language WHERE name NOT IN ("AZE", "TRK");           LANGUAGE tablesindeki AZE VƏ TRK dilinden BASQA butun COLUMN-lari getirir
//* SELECT * FROM user WHERE name="A" OR name="b" AND age=7            AND operatoru OR operatorundan daha gucludur => (name="A") OR (name="b" AND age=7)
//* SELECT DATE(payment_date) FROM payment;                            2005-05-25 11:30:37 bu hisseden 2005-05-2
//* SELECT YEAR(payment_date) FROM payment;                            2005-05-25 11:30:37 bu hisseden 2005
//* SELECT MONTH(payment_date) FROM payment;                           2005-05-25 11:30:37 bu hisseden 5
//* SELECT DAY(payment_date) FROM payment;                             2005-05-25 11:30:37 bu hisseden 25
//* SELECT * FROM (SELECT * FROM address WHERE city_id BETWEEN 200 AND 210)A;   Deyisene menimsetme
//* SELECT name, surname CASE status WHEN 0 THEN 'False' WHEN 1 THEN "True" END AS Result FROM User;        Statusun 1 ve ya 0 olmaqina gore True/False getirir
//* SELECT CONCAT("Mr. ", name, " ", surname, " ") AS Fullname FROM User            User tablesindeki name, surname rowlarindeki datalari birlesdirir


// ! AGGREGATE FUNCTIONS (Sum, Min, Max, Avg, Count) - Hazir funksiyalar
//* SELECT SUM(amount) FROM payment;                                    AMOUNT ROW-undaki butun datalari TOPLADI bir datada gosterdi
//* SELECT *, SUM(amount) FROM payment;                                 Bu cur yazanda ERROR verir cunki * coxlu COLUMN-lar getirdiyi halda digeri 1 COLUMN getirir
//* SELECT SUM(tax) FROM payment WHERE MONTH(p) IN (1, 2) AND name="A"; A adli istifadecinin YANVAR ve FEVRAL ayi ucun olan ODENISLERININ CEMI
//* SELECT MIN(amount) FROM payment;                                    AMOUNT ROW-undaki EN KICIK AMOUNT deyerini getirecek
//* SELECT MAX(amount) FROM payment;                                    AMOUNT ROW-undaki EN BOYUK AMOUNT deyerini getirecek
//* SELECT AVG(amount) FROM payment;                                    AMOUNT ROW-undaki AVERAGE deyerini getirecek

// ! COUNT Aggregate function IGNORES NULL values
//* SELECT COUNT(*) FROM payment;                                       PAYMENT tablesindeki butun COLUMNS sayini getirir
//* SELECT COUNT(amount) FROM payment;                                  AMOUNT ROW-un (NULL olmuyan) butun COLUMN sayini getirir

// ! GROUP BY COX VAXT AGGREGATE FUNCTIONS birlikde isleyir (DISTINCT kimi islesede eslinde EYNI olanlari BIR QRUPA toplayir)
// ! ve AGGREGATE FUNCTIONS-da evvel nece dene ROW (ALT KATEQORIYALAR) yazisilibsa sonrada o qederi GROUP BY-da mutleq yazilmalidir
// TODO: SELECT name, surname, age, SUM(amount) FROM payment GROUP BY name, surname, age;
//? EGET SELECT FROM arasinda hem TABLENAME hemde AGGREGATE FUNCTIONS varsa mutleq sekilde GROUP BY olmalidir
//* SELECT DISTINCT rating FROM film;                                   RATING ROW-u UNIQUE olagetirdi
//* SELECT rating FROM film GROUP BY rating;                            RATING-e gore QRUPLADI demek olarki DISTINCT ile eynidir ama elaveleri var
//* SELECT rating, count(rating) FROM film GROUP BY rating;             RATING-leri qrupladi ve yaninda her qrupa uygun sayini getirdi
//* SELECT customer_id, SUM(amount) FROM payment GROUP BY customer_id;  CUSTOMER_ID iye gore qrupla ve her UNIQUE CUSTOMER_ID-nin SUM-ni getir
//* SELECT staff_id, customer_id FROM payment GROUP BY staff_id, customer_id Alt QRUPlarini yaratdi

//! HAVING demek olarki WHERE ile eyni seydir ESAS ferq HAVING ancaq ve ancaq GROUP BY ile isleyir, WHERE ise TEK olan setirlerle GRUPLANMAMISlarla
//! EGER GROUP BY yoxdursa orada WHERE evezine HAVING de yazmaq olar hec bir ferqi yoxdur (Ama bu cur istifade etmesen daha yaxsidir)
//* SELECT age, COUNT(user) FROM film GROUP BY age HAVING COUNT(user) > A; AGE-ye gore qrupla ve USER adlari A-dan boyukleri getir


//! SQL ve MYSQL considered Relational Database Management System (RDBMS) because of PRIMARY FOREIGN kEY 
//! PRIMARY KEY: unique deyerler almalidir ve hec zaman NULL deyer almamalidir
//! FOREIGN KEY: hemen tablede PRIMARY olmayib diger her hansisa tablede PRIMARY olan COLUMN

//! JOIN (INNER, LEFT, RIGHT, FULL: Bunlardan en cox LEFT JOIN istifade edecik, INNER-den arada, RIGHT-dan etmesek daha yaxsidir, FULL JOIN MySQL-da yoxdur)
//? JOIN sozunu sagindaki table adi SAG TABLEYE, sol tabledeki ise SOL TABLEYE addir
//? INNER ve LEFT JOIN: Esas teref SOLDUR ve SOL tableye nezeren duzulur,              RIGHT JOIN: Esas teref SAGDIR ve SAG tableye esasen duzulur
//Todo: INNER: soldaki NULL deyerli hisseni atir geri qalan hissesine sagdaki tableden elave edir (Ancaq KESISEN COlUMNlari getiri deye kicile biler)
//Todo: LEFT: soldaki Table olduqu kimi qalir geri qalan hissesine sagdaki tableden elave edir    (COLUMN DEFAULT veziyyetde qaldi ucun hemise bundan istifade et)
//Todo: RIGHT: sagdaki Table olduqu kimi qalir geri qalan hissesine soldaki tableden elave edir
//* SELECT * FROM A INNER JOIN B ON A.fullname = B.fullname;              B tablesindeki BUTUN ROW-lari ORTAQ FULNAMEYE gore A-nin NULL olmuyanina birlesdirir
//* SELECT A.age, B.life FROM A JOIN B ON A.fullname = B.fullname;        INNER sozunu yazmasanda INNER JOIN kimi taniyacaq ama her zaman calis yaz
//* SELECT * FROM A LEFT JOIN B ON A.ad = B.ad;                    B tablesindeki BUTUN ROW-lari ORTAQ FULNAMEYE gore A-nin DEFAULT-na birlesdirir NULL deyer goturur

//! UNION and UNION ALL (Joinden ferqli olaraq yan yana deyil alt alta yerlesdirir)
//Todo: UNION DISTINCT kimi isleyir eyni deyerler varsa birini goturur ama UNION ALL ise her birini tekrarini da goturur
//? DIQQET ET eger birince SELECT-de ne qeder COLUMN yazmisansa ikincide de o qeder COLUMN olmalidir
//* SELECT name FROM user1 UNION SELECT name FROM user2;
//* SELECT name FROM user1 UNION ALL SELECT name FROM user2;

?>  