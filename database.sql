-- DBNAME: 'e_teacher';

CREATE TABLE users (
    username VARCHAR(50) PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('learner', 'tutor') NOT NULL
);

CREATE TABLE learner (
    username PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    sex ENUM('M', 'F') NOT NULL,
    age INT NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(10) NOT NULL,
    guardian_phone VARCHAR(10) NOT NULL,
    school varchar(50) NOT NULL,
    FOREIGN KEY (username) REFERENCES users(username)
);

CREATE TABLE educator (
    username PRIMARY KEY,
    fullname VARCHAR(100),
    sex ENUM('M', 'F') NOT NULL,
    age INT NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(10) NOT NULL,
    email varchar(50) not null,
    qualification VARCHAR(255),
    specialize varchar(100),
    year_exp int,
    institute varchar(100),
    short_bio varchar(300),
    FOREIGN KEY (username) REFERENCES users(username)
);

