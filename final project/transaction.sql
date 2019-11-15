-- table for purchases by user
CREATE TABLE purchase (
    purchaseid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) REFERENCES users(name),
    slotid INT NOT NULL REFERENCES theaterslot(slotid),
    seat VARCHAR(50) REFERENCES theaterslot(seat)
);

-- table for current booking
CREATE TABLE currentbook (
    bookid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) REFERENCES users(name),
    pic VARCHAR(100) REFERENCES movie(pic),
    slotid INT NOT NULL REFERENCES purchase(slotid),
    movieid INT NOT NULL REFERENCES theatermovie(movieid),
    title VARCHAR(50) REFERENCES theatermovie(title),
    slotdate VARCHAR(10) REFERENCES theaterslot(slotdate),
    slot VARCHAR(10) REFERENCES theaterslot(slot),
    theaterid INT NOT NULL REFERENCES theatermovie(theaterid),
    theatername VARCHAR(10) REFERENCES theater(theatername)
);

-- table for view history
CREATE TABLE viewhist (
    histid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) REFERENCES users(name),
    title VARCHAR(50) REFERENCES theatermovie(title),
    pic VARCHAR(100) REFERENCES movie(pic)
);
-- some initial values for history
-- INSERT INTO viewhist VALUES
--     (1, "username", "A Witness Out Of Blue", "Poster-AWitnessOutOfTheBlue.jpg");

-- table for comments
CREATE TABLE comments (
    title VARCHAR(50) REFERENCES movie(title),
    comments VARCHAR(500)
);
-- some initial values for comments
INSERT INTO comments VALUES
    ("A Witness Out Of Blue", "Very good!"),
    ("Bigil", "Funny and action packed."),
    ("Maleficient: Mistress Of Evil", "Heart-throbbing continuation to the series."),
    ("Terminator: Dark Fate", "Just wow."),
    ("The Kill Team", "Pretty deep.");