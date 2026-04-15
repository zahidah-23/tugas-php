CREATE DATABASE pbp;

USE pbp;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    jurusan VARCHAR(50)
);

INSERT INTO mahasiswa (nama, jurusan)
VALUES ('Sekar', 'Informatika');
