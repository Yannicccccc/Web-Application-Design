CREATE TABLE movie (
    movieid INT NOT NULL PRIMARY KEY,
    pic char(100),
    genre CHAR(50),
    title CHAR(50),
    rate CHAR(10),
    score FLOAT(2,1),
    main_cast CHAR(100),
    sub CHAR(50),
    director CHAR(50),
    lan CHAR(20),
    release DATE,
    synopsis CHAR(500)
)

CREATE TABLE movie_genre (
    genreid INT NOT NULL PRIMARY KEY,
    movieid INT NOT NULL FOREIGN KEY REFERENCES movie(movieid),
    genre CHAR(20)
)