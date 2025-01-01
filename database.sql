-- DBNAME: 'e_teacher';

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('learner', 'tutor') NOT NULL
);

CREATE TABLE learner (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    sex ENUM('M', 'F') NOT NULL,
    age INT NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(10) NOT NULL,
    guardian_phone VARCHAR(10) NOT NULL,
    school varchar(50) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE educator (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
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
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

