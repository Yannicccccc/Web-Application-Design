CREATE TABLE theater (
    theaterid INT NOT NULL PRIMARY KEY,
    theatername VARCHAR(10),
    theaterdescription VARCHAR(500),
    activate INT
);

CREATE TABLE theatermovie (
    movieid INT NOT NULL PRIMARY KEY,
    theaterid INT NOT NULL REFERENCES theater(theaterid),
    title VARCHAR(50)
);

CREATE TABLE theaterslot (
    slotid INT NOT NULL PRIMARY KEY,
    movieid INT NOT NULL REFERENCES theatermovie(movieid),
    slot VARCHAR(10),
    slotdate VARCHAR(10),
    seat VARCHAR(50)
);