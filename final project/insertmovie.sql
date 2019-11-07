use f38ee;

INSERT INTO movie VALUES
    (1, "Poster-AWitnessOutOfTheBlue.jpg", "Crime", "A Witness Out Of Blue", "NC16", 4.5, "Louis Koo, Jessica Hsuan , Louis Cheung, Philip Keung , Fiona Sit", "English & Chinese", "Fung Chih Chiang", "Chinese", "2019-10-17", "Detective Frank Lam (Louis Cheung) arrives at the scene with his commanding officer Yip Sir (Philip Keung) to find a dead man inside an apartment with a strange noise “Help! Help!” next to its body. Yip Sir is convinced the deceased is killed by his partner in crime, Sunny Wong (Louis Koo) when they had a fight over how to divvy up the loot from an armed robbery a month ago. When confronted by Frank, Sunny denies all allegations and names Yip Sir as the killer. Frank’s only hope in cracking the case lies in sole survivor and eye witness at the crime scene – a parrot!"),
    (2, "Poster-Bigil.jpg", "Action, Sport", "Bigil", "PG13", 4.2, "Vijay, Nayanthara, Jackie Sharoff, Vivek, Yogi Babu, Kathir", "English", "Atlee", "Tamil", "2019-10-25", "The film revolves around a football coach, who struggles to fulfill the dream of his late friend and seeks out revenge on the death of his best friend."),
    (3, "Poster-MaleficentMistressOfEvil-V2.jpg", "Adventure, Family, Fantasy", "Maleficient: Mistress Of Evil", "PG", 4.8, "Angelina Jolie, Elle Fanning, Chiwetel Ejiofor, Sam Riley, Imelda Staunton, Juno Temple, Lesley Manville", "Chinese", "Joachim Rønning", "Chinese",  "2019-10-17", "A fantasy adventure that picks up several years after Maleficent, in which audiences learned of the events that hardened the heart of Disney's most notorious villain and drove her to curse a baby Princess Aurora, Maleficent: Mistress of Evil continues to explore the complex relationship between the horned fairy and the soon to be Queen, as they form new alliances and face new adversaries in their struggle to protect the moors and the magical creatures that reside within."),
    (4, "Poster-TerminatorDarkFate-V2.jpg", "Action, Adventure", "Terminator: Dark Fate", "NC16", 4.9, "Linda Hamilton, Arnold Schwarzenegger, Mackenzie Davis, Natalia Reyes, Gabriel Luna, Diego Boneta", "Chinese", "Tim Miller", "English", "2019-10-24", "More than two decades after the events of Terminator 2: Judgment Day, Sarah Connor sets out to protect a young woman named Dani Ramos and her friends as a liquid metal Terminator, sent from the future attempts to terminate them."),
    (5, "Poster-TheKillTeam.jpg", "Action, Drama, Thriller", "The Kill Team", "NC16", 4.6, "Alexander Skarsgård, Nat Wolff, Adam Long, Jonathan Whitesell, Brian Marc, Rob Morrow", "N.A.", "Dan Krauss", "English", "2019-10-24", "2017 Academy Award nominated director Dan Krauss adapts his acclaimed documentary THE KILL TEAM into a taut, provocative thriller reminiscent of such classics as THREE DAYS OF THE CONDOR, THE CONVERSATION, and ALL THE PRESIDENT’S MEN. Based on dramatic true events, THE KILL TEAM tells the story of a young American soldier trapped between his conscience and his survival when members of his platoon carry out a murderous scheme in the desolate wasteland of Southern Afghanistan.");

INSERT INTO movie_genre VALUES
    (1, 1, "Crime"),
    (2, 2, "Action"),
    (3, 2, "Sport"),
    (4, 3, "Adventure"),
    (5, 3, "Family"),
    (6, 3, "Fantasy"),
    (7, 4, "Action"),
    (8, 4, "Adventure"),
    (9, 5, "Action"),
    (10, 5, "Drama"),
    (11, 5, "Thriller");    

INSERT INTO slides VALUES
    (1, "WidePoster-AWitnessOutOfTheBlue.jpg"),
    (2, "WidePoster-Bigil.jpg"),
    (3, "WidePoster-MaleficentMistressOfEvil-V2.jpg"),
    (4, "WidePoster-TerminatorDarkFate-V2.jpg"),
    (5, "WidePoster-TheKillTeam.jpg"),
    (6, "ad1.jpg"),
    (7, "ad2.jpg");

INSERT INTO promos VALUES
    (1, "promo1.jpg"),
    (2, "promo2.jpg"),
    (3, "promo3.jpg"),
    (4, "promo4.jpg"),
    (5, "promo5.jpg"),
    (6, "promo6.jpg"),
    (7, "promo7.jpg"),
    (8, "promo8.jpg");

INSERT INTO users VALUES
    ("username", "password", "test@host.com", "profilepic.jpg", 0);