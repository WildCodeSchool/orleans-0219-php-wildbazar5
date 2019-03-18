
DROP TABLE IF EXISTS `wildbazar`.`slipper`;

CREATE TABLE `wildbazar`.`slipper` (
                                    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    `title` VARCHAR(255) NOT NULL,
                                    `short_title` VARCHAR(100) NOT NULL,
                                    `price` FLOAT NOT NULL,
                                    `summary` VARCHAR(255) NOT NULL,
                                    `picture` VARCHAR(100) NOT NULL,
                                    `char_size` VARCHAR(100) NOT NULL,
                                    `char_material` VARCHAR(100) NOT NULL,
                                    `char_color` VARCHAR(100) NOT NULL,
                                    `char_reference` VARCHAR(100) NOT NULL);

/*CREATE TABLE `wildbazar`.`slipper_characteristics` (
                                            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                            `Size` VARCHAR(100) NOT NULL,
                                            `Material` VARCHAR(100) NOT NULL,
                                            `Color` VARCHAR(100) NOT NULL,
                                            `Reference` VARCHAR(100) NOT NULL);*/

INSERT INTO `wildbazar`.`slipper` (title, short_title, price, summary, picture, char_size, char_material, char_color, char_reference )
VALUES ('Pokemon Pikachu Slippers','Pokemon Slippers', 19.99 ,'Be careful when you walk on the water...', 'pika.jpeg','3-12','cotton','yellow/black','R75631'),
       ('Hobbit hairy feet slippers','Hobbit Slippers',19.99,'Bring back the precious with these amazing Hobbit slippers, Peregrin Took !','téléchargement.jpeg','3-15','cotton','camel/brown','X47935'),
       ('Homer Simpson Slippers','Pokemon Slippers',19.99,'Perfect slippers to enjoy your daytime on the sofa','homer.jpeg','8-15','cotton','yellow/brown','T93468'),
       ('Wild Code School slippers','WCS Slippers',29.99,'Awesome deer slippers that you can take to Wild code School','deer.jpg','2-10','cotton','brown','L54937'),
       ('Cartman Body Slippers','Cartman Slippers',19.99,'Everybody will respect your autority with these badass slippers','cartman.jpeg','8-15','cotton','blue/yellow','P79536'),
       ('Fabulous Poo Slippers','Poo Slippers',19.99,'Don\'t be afraid into the poo whit these slippers anymore..','poo.jpeg','5-10','cotton','brown','A66134'),
       ('Deathly Hallows Harry Potter Slippers','Pokemon Slippers',14.99,'You can\'t become invisible, immortal or invicible whit these slippers.. but they\'re super cool !','hp3.jpg','7-9','cotton','black/white','F45942'),
       ('Hogward express HP Slippers','Harry Potters Slippers',14.99,'It\'s not recommended to run into a wall.. Also whit these slippers','hp.jpeg','8-12','cotton','red/yellow/black&white','G45255'),
       ('Padded Harry Potter Slippers','Harry Potter Slippers',17.99,'Be comfortable whit these padded slippers to hunt down the horcruxes','hp2.jpeg','6-11','cotton','grey/burgundy','M45826'),
       ('Star Wars Stormtrooper Slipper','Star Wars Slippers',19.99,'Be ready to defend the Emperor against the jedis (but before that, learn how to shoot...)','stormtrooper.jpg','4-10','cotton','white/black','J25562'),
       ('Star Wars R2D2 Slippers','Star Wars Slippers',14.99,'Bipbipbip bipbip bipbip bipbipbipbip','r2d2.jpeg','3-6','cotton','blue/white','S56846'),
       ('Bowser Fun Slippers','Bowser Slippers',19.99,'Be ready to sow terror whit these funny slippers','bowser.jpeg','5-10','cotton','green/orange','Q45862'),
       ('King Julian Slippers','Madagascar Slippers',19.99,'Be ready to move whit these BEST slippers ever !','kingJulian.jpg','7-10','cotton','grey/green','G49262');
