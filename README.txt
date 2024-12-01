Project is built using LAMP (without Linux :D)

I made the project run locally using XAMPP (Apache and MySQL)

Move the project files into the htdocs folder in XAMPP directory

Open your browser and go to http://localhost/index.html

Sample query to populate the DB:

INSERT INTO movies (title, plot, director, actors, year)
VALUES
    ('Harry Potter and the Sorcerer\'s Stone', 'A young boy learns he is a wizard and attends a magical school where he uncovers dark secrets.', 'Chris Columbus', 'Daniel Radcliffe, Rupert Grint, Emma Watson', 2001),
    ('SpongeBob SquarePants Movie', 'SpongeBob and Patrick embark on a mission to retrieve a stolen crown and save their town.', 'Stephen Hillenburg', 'Tom Kenny, Bill Fagerbakke, Alec Baldwin', 2004),
    ('Rush', 'Two F1 drivers, James Hunt and Niki Lauda, engage in a fierce rivalry during the 1976 racing season.', 'Ron Howard', 'Chris Hemsworth, Daniel Brühl, Olivia Wilde', 2013),
    ('Barbie', 'Barbie ventures into the real world to discover what it truly means to be herself.', 'Greta Gerwig', 'Margot Robbie, Ryan Gosling, Will Ferrell', 2023),
    ('The Pursuit of Happyness', 'A man struggles to build a better life for his son while facing homelessness and hardship.', 'Gabriele Muccino', 'Will Smith, Jaden Smith, Thandie Newton', 2006);
