-- SOAL 1 Buat Database;
CREATE DATABASE myshop;


-- SOAL 2 Buat Tabel

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255)
);

CREATE TABLE categories (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255)
);

CREATE TABLE items (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),
	description	VARCHAR(255),
	price	INT,
	stock	INT,
	category_id	INT,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);


-- SOAL 3 Insert Data
INSERT INTO users (name, email, password)
VALUES
	("John Doe",	"john@doe.com",	"john123"),
	("Jane Doe",	"jane@doe.com",	"jenita123")
;

INSERT INTO categories (name)
VALUES
	("gadget"),
	("cloth"),
	("men"),
	("women"),
	("branded")
;

INSERT INTO items (name, description , price, stock, category_id)
VALUES
	("Sumsang b50",	"hape keren dari merek sumsang", 4000000, 100,	1),
	("Uniklooh", "baju keren dari brand ternama", 500000, 50, 2),
	("IMHO Watch", "jam tangan anak yang jujur banget", 2000000, 10, 1)
;


-- SOAL 4 Query Data

-- 4.a
SELECT id, name, email FROM users;

-- 4.b
SELECT * FROM items i
WHERE i.price > 1000000;

SELECT * FROM items i
WHERE
	i.name LIKE '%uniklo%'
	OR i.name LIKE '%watch%'
	OR i.name LIKE '%sang%'
;

-- 4.c
SELECT i.*, c.name kategori FROM items i
JOIN categories c ON i.category_id = c.id;


-- SOAL 5 Update Data
UPDATE items
SET price = 2500000
WHERE name = "sumsang b50";