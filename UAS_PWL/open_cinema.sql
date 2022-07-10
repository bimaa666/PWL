CREATE DATABASE open_cinema;
USE open_cinema;

SET SQL_SAFE_UPDATES = 0;

CREATE TABLE films(
	id_film INT AUTO_INCREMENT PRIMARY KEY,
    judul_film VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tahun CHAR(4) NOT NULL,
    sinopsis TEXT NOT NULL,
    durasi INT NOT NULL,
    gambar VARCHAR(255)
);

CREATE TABLE users(
	id_user INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    role ENUM("user", "admin"),
    tanggal_lahir DATE,
    alamat TEXT,
    no_telp VARCHAR(15)
);

CREATE TABLE rooms(
	id_room INT AUTO_INCREMENT PRIMARY KEY,
    nama_ruang VARCHAR(50),
    jumlah_kursi TINYINT DEFAULT 0
);

CREATE TABLE seat_lists(
	id_seat_list INT AUTO_INCREMENT PRIMARY KEY,
    id_room INT,
    nomor_kursi TINYINT
);

CREATE TABLE schedules(
	id_schedule INT AUTO_INCREMENT PRIMARY KEY,
    id_film INT,
    id_room INT,
    tanggal_penayangan DATETIME,
    status ENUM("open","close")
);

CREATE TABLE orders(
	id_order INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    id_schedule INT,
    nama_film VARCHAR(255),
    nama_ruang VARCHAR(50),
    nomor_kursi TINYINT,
    tanggal_pemesanan DATETIME
);

ALTER TABLE seat_lists
ADD CONSTRAINT fk_seat_lists_rooms
	FOREIGN KEY (id_room) REFERENCES rooms(id_room)
		ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE schedules
ADD CONSTRAINT fk_schedules_rooms
	FOREIGN KEY (id_room) REFERENCES rooms(id_room)
		ON UPDATE CASCADE ON DELETE CASCADE,
ADD CONSTRAINT fk_schedules_films
	FOREIGN KEY (id_film) REFERENCES films(id_film)
		ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE orders
ADD CONSTRAINT fk_orders_schedules
	FOREIGN KEY (id_schedule) REFERENCES schedules(id_schedule)
		ON UPDATE CASCADE ON DELETE SET NULL,
ADD CONSTRAINT fk_orders_users
	FOREIGN KEY (id_user) REFERENCES users(id_user)
		ON UPDATE CASCADE ON DELETE CASCADE;

DELIMITER |
CREATE TRIGGER tambahJumlahKursi
AFTER INSERT
ON seat_lists
FOR EACH ROW
BEGIN
	UPDATE rooms SET jumlah_kursi = jumlah_kursi + 1 WHERE id_room = NEW.id_room;
END |
DELIMITER ;

DELIMITER |
CREATE TRIGGER kurangiJumlahKursi
BEFORE DELETE
ON seat_lists
FOR EACH ROW
BEGIN
	UPDATE rooms SET jumlah_kursi = jumlah_kursi - 1 WHERE id_room = OLD.id_room;
END |
DELIMITER ;

INSERT INTO films 
VALUES 	(null, "Thor: Love and Thunder", "Action, Adventure, Comedy", "Taika Waititi", "2022", "Thor kali ini meminta bantuan Valkyrie, Korg dan mantan kekasihnya, Jane Foster untuk melawan Gorr the God Butcher, yang berniat membasmi para dewa.", 119, "Thor Love and Thunder"),
		(null, "Minions 2: The Rise of Gru", "Animation, Adventure, Comedy", "Matthew Fogel", "2022", "Kisah tak terduga tentang mimpi seorang anak berusia dua belas tahun untuk menjadi penjahat super terhebat di dunia.", 87, "Minions 2 The Rise of Gru" );
        
INSERT INTO rooms(nama_ruang)
VALUES	("Gedung 1"), ("Gedung 2"), ("Gedung 3");

INSERT INTO seat_lists(id_room, nomor_kursi)
VALUES	(1, 1),(1, 2),(1, 3),(1, 4),(1, 5),(1, 6),(1, 7),(1, 8),(1, 9),(1, 10),(1, 11),(1, 12),(1, 13),(1, 14),(1, 15),(1, 16),(1, 17),(1, 18),(1, 19),(1, 20),(1, 21),(1, 22),(1, 23),(1, 24),(1, 25),(1, 26),(1, 27),(1, 28),(1, 29),(1, 30),
		(2, 1),(2, 2),(2, 3),(2, 4),(2, 5),(2, 6),(2, 7),(2, 8),(2, 9),(2, 10),(2, 11),(2, 12),(2, 13),(2, 14),(2, 15),(2, 16),(2, 17),(2, 18),(2, 19),(2, 20),(2, 21),(2, 22),(2, 23),(2, 24),(2, 25),(2, 26),(2, 27),(2, 28),
		(3, 1),(3, 2),(3, 3),(3, 4),(3, 5),(3, 6),(3, 7),(3, 8),(3, 9),(3, 10),(3, 11),(3, 12),(3, 13),(3, 14),(3, 15),(3, 16),(3, 17),(3, 18),(3, 19),(3, 20);

INSERT INTO schedules(id_film, id_room, tanggal_penayangan, status)
VALUES	(1, 1, "2022-07-15 13:00:00", "open"),
		(2, 1, "2022-07-15 15:00:00", "open"),
        (1, 1, "2022-07-15 17:00:00", "open"),
        (1, 2, "2022-07-15 15:00:00", "open"),
        (2, 2, "2022-07-15 13:00:00", "open"),
        (2, 3, "2022-07-15 13:00:00", "open"),
        (1, 3, "2022-08-15 17:00:00", "open"),
        (2, 2, "2022-04-15 15:00:00", "open");
        
INSERT INTO users
VALUES 	(null, "sylvnix", "admin@gmail.com", "123", "admin", null, null, null);
        
SELECT * FROM schedules 
JOIN rooms USING(id_room) W
HERE id_schedule=5;