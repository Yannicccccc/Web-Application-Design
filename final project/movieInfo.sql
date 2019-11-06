-- table of movies and details
CREATE TABLE movie (
    movieid INT NOT NULL PRIMARY KEY,
    pic VARCHAR(100),
    genre VARCHAR(50),
    title VARCHAR(50),
    rate VARCHAR(10),
    score FLOAT(2,1),
    main_cast VARCHAR(100),
    sub VARCHAR(50),
    director VARCHAR(50),
    lan VARCHAR(20),
    release_date DATE,
    synopsis VARCHAR(500)
);
-- table of movie genres
CREATE TABLE movie_genre (
    genreid INT NOT NULL PRIMARY KEY,
    movieid INT NOT NULL REFERENCES movie(movieid),
    genre VARCHAR(20)
);
-- table of slideshow pics
CREATE TABLE slides (
    slideid INT NOT NULL PRIMARY KEY,
    slidepic VARCHAR(100)
);
-- table of promotion pics
CREATE TABLE promos (
    promoid INT NOT NULL PRIMARY KEY,
    promopic VARCHAR(100)
);
-- table for collecting requests 
CREATE TABLE corps (
    corpid INT NOT NULL PRIMARY KEY,
    corp_date DATE,
    corp_start VARCHAR(50),
    corp_cine1 VARCHAR(50),
    corp_cine2 VARCHAR(50),
    corp_movie VARCHAR(50),
    corp_guest INT,
    corp_req VARCHAR(500),
    corp_salute VARCHAR(50),
    corp_name VARCHAR(50),
    corp_email VARCHAR(50),
    corp_contact VARCHAR(50),
    corp_comp VARCHAR(50),
    corp_address VARCHAR(50),
    corp_postal VARCHAR(50)
);
-- table for users
CREATE TABLE users (
    name VARCHAR(50) PRIMARY KEY,
    password VARCHAR(50),
    email VARCHAR(50),
    profilepic VARCHAR(50),
    points INT
);