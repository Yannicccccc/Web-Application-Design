CREATE TABLE movie (
    movieid INT NOT NULL PRIMARY KEY,
    title CHAR(50) NOT NULL,
    rate CHAR(10),
    score FLOAT(2,1),
    main_cast CHAR(100),
    sub CHAR(50),
    director CHAR(50),
    lan CHAR(20),
    release DATE
)

CREATE TABLE movie_genre (
    genreid INT NOT NULL PRIMARY KEY,
    movieid INT NOT NULL FOREIGN KEY REFERENCES movie(movieid),
    genre CHAR(20)
)