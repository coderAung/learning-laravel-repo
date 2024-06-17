use mini_library;	
-- insert tables

-- roles
	insert into roles (name) values ('manager');
	insert into roles (name) values ('staff');


	-- states()
insert into states(name) values('Yangon');

-- townships()
insert into townships(name,state_id) values('Shwepyithar',1);
insert into townships(name,state_id) values('North Okkalapa',1);
insert into townships(name,state_id) values('South Okkalapa',1);
insert into townships(name,state_id) values('Hlaingtharyar',1);
insert into townships(name,state_id) values('Mingalardon',1);
insert into townships(name,state_id) values('Sanchaung',1);
insert into townships(name,state_id) values('Tarmwe',1);
insert into townships(name,state_id) values('Insein',1);
insert into townships(name,state_id) values('Shwepaukkan',1);
insert into townships(name,state_id) values('Kamaryut',1);


-- address()
insert into addresses(name,township_id) values('No 82, Kayay Street, Shwe Ward',1);
insert into addresses(name,township_id) values('No 436, Wizzar Street, 15 Ward',2);
insert into addresses(name,township_id) values('No 78, Kone Baung Street, 14 Ward',3);
insert into addresses(name,township_id) values('No 90, Sein Chal Street, Sein Chal Ward',4);
insert into addresses(name,township_id) values('No 37, Grand Street, Wanarbiyar Ward',5);
insert into addresses(name,township_id) values('No 234, Shwe War Street, Home Ward',6);
insert into addresses(name,township_id) values('No 589, Padauk Street, Sein Pan Myaing Ward',7);
insert into addresses(name,township_id) values('No 4, Nilar Street, 10 Ward',8);
insert into addresses(name,township_id) values('No 47, Yay Oo Street, Yay Oo Ward',9);
insert into addresses(name,township_id) values('No 82, Tharaphi Street, Sein Pan Myaing Ward',10);
insert into addresses(name,township_id) values('No 73, Kyar Kyaung Street, Kyaung Ward',1);
insert into addresses(name,township_id) values('No 82, Bo Banyar Street, Shwe Pan Myaing Ward',2);
insert into addresses(name,township_id) values('No 82, Ba Htoo Street, Ba Htoo Ward',3);
insert into addresses(name,township_id) values('No 82, Pinlone Street, Pinlone Ward',4);
insert into addresses(name,township_id) values('No 82, Kyan Sit Thar Street, 20 Ward',5);
insert into addresses(name,township_id) values('No 82, Thitsar Street, 89 Ward',6);
insert into addresses(name,township_id) values('No 82, Gantgaw Street, Pan Hlaing Ward',7);
insert into addresses(name,township_id) values('No 82, Thayattaw Street, Loon Ward',8);
insert into addresses(name,township_id) values('No 82, Kabaraye Street, Kabaraye Ward',9);
insert into addresses(name,township_id) values('No 82, Satkyarwalar Street, Yoeyar Ward',10);	


-- employees
	insert into users (name,email,phone_no,role_id) values ('Khine Khine','khine234@gmail.com','09250478633',1);
	insert into users (name,email,phone_no,role_id) values ('Kyaw Kyaw','kyaw687@gmail.com','09767442398',1);
	insert into users (name,email,phone_no,role_id) values ('Phyo Phyo','phyo442@gmail.com','09443662743',2);
	insert into users (name,email,phone_no,role_id) values ('Thiri','thiri314@gmail.com','09970684122',2);
	insert into users (name,email,phone_no,role_id) values ('Maung Maung','maung490@gmail.com','09783042378',2);
	

-- members
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Ye Wont Aung','yewontaung@gmail.com','09328727229',1,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Hein Htet Zaw','heinhtetzaw@gmail.com','09234938097',2,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Kyaw Paing Htet','kyawpainghtet@gmail.com','09324678932',3,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Ye Min Aung','yeminaung@gmail.com','09549308990',4,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Htet Nadi','htetnadi@gmail.com','09378923192',5,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Lei Lei Yee','leileiyee@gmail.com','09740923879',6,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Phu Phu May Maung','phuphumaymaung@gmail.com','09347842098',7,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Than Thar Linn Latt','thantharlinnlatt@gmail.com','09549037438',8,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Khine Zin Thet','khinezinthet@gmail.com','09437824809',9,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Shwe Sin Phuu Lwin','shwesinphuulwin@gmail.com','09348924478',10,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Win Myat Nwe','winmyatnwe@gmail.com','09784389342',11,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Pann Kay Thwel Oo','pannkaythweloo@gmail.com','09734889234',12,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Aeint Poe Myat','aeintpoemyat@gmail.com','09783489734',13,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Hikari','hikari@gmail.com','09899897423',14,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Merries Zen','merrieszen@gmail.com','09743098537',15,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Mochi','mochi@gmail.com','09548448909',16,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Kevin','kevin@gmail.com','09344829376',17,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at)
	values('Skyllar','skyllar@gmail.com','09783448930',18,now(),now());
insert into members
	(name,email,phone_no,address_id,created_at,updated_at,status)
	values('Cattherine','cattherine@gmail.com','09984578904',19,now(),now(),'inactive');
insert into members
	(name,email,phone_no,address_id,created_at,updated_at,status)
	values('Stevin','stevin@gmail.com','09347899804',20,now(),now(),'inactive');


-- genres
insert into genres(name) values
	("fiction"),("fantasy"),("horror"),
	("romance"),("non-fiction"),("education");

-- authors
insert into authors(name,phone_no,email) values
	("Charles Dickens",096771237,"charles@gmail.com"),
	("J.K Rowling",096771238,"jk@gmail.com"),
	("Bram Stoker",096771239,"bram@gmail.com"),
	("Nicholas Sparks",096771137,"nicholas@gmail.com"),
	("Michael Lewis",096271237,"michael@gmail.com"),
	("Ei Maung",095771238,"ei@gmail.com");

-- publishers
insert into publishers(name) values
	("Chapman & Hall"),("Bloomsbury"),("Heinemann"),
	("Warner Books"),("W.W.Norton&Company"),("Ei Maung");

-- books
insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Greatest Expectations",1,"Fourth","the life of a young orphan named Pip",1,1,1,"2022-05-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("A Tale of Two Cities",1,"Second","About France Revolution",1,1,1,"2022-05-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("A Christmas Carol",1,"Second","Story of Ebenezer Scrooge",1,1,1,"2022-05-03");


insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Harry Potter and the Philosopher's Stone",2,"Third","About Harry Potter's life",2,2,2,"2022-06-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Harry Potter and the Sorcerer's Stone",2,"Third","About Harry Potter's life",2,2,2,"2022-06-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Harry Potter and the Chamber of Secrets",2,"Third","About Harry Potter's life",2,2,2,"2022-06-03");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Harry Potter and the Prisoner of Azkaban",2,"Third","About Harry Potter's life",2,2,2,"2022-06-04");


insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("The Jewel of Seven Stars",3,"Fifth","Story of an archaeologist",3,3,1,"2022-07-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)values
	("The Lair of the White Worm",3,"Fifth","Story of a mysterious young man",3,3,1,"2022-07-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("The Man",3,"Fifth","Story of vampire",3,3,1,"2022-07-03");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("The Lady of the Shroud" ,3,"Fifth","Story of supernatural woman",3,3,1,"2022-07-04");


insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("The Notebook" ,4,"Sixth","Story of a young couple who fall in love in 1940",4,4,2,"2022-08-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("A Walk to Remember" ,4,"Sixth","High-school love story",4,4,2,"2022-08-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("Dear John" ,4,"Sixth","Love story of solider and college student",4,4,2,"2022-08-03");


insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("Liar's Poker" ,5,"Seventh","About Lewis's debut",5,5,1,"2022-09-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("The Big Short" ,5,"Seventh","About the investors",5,5,1,"2022-09-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at) values
	("Flash Boys" ,5,"Seventh","Trading on stock markets",5,5,1,"2022-09-03");
    

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("Javascript" ,6,"Ninth","Javascript guide in Burmese ",6,6,2,"2022-10-01");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("Php" ,6,"Ninth","PHP gudie in Burmese",6,6,2,"2022-10-02");

insert into books(name,author_id,edition,description,publisher_id,genre_id,user_id,created_at)  values
	("Laravel" ,6,"Ninth","Laravel guide in Burmese",6,6,2,"2022-10-03");

-- book_details
insert into book_details(book_id,total_books) values
(1,3),(2,5),(3,1),(4,6),(5,8),(6,6),(7,2),(8,3),(9,4),(10,5),
(11,2),(12,4),(13,1),(14,5),(15,3),(16,7),(17,8),(18,2),(19,4),(20,5);


-- borrow_details

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (1, 19, 2, now(), date_add(now(), interval 7 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (1, 20, 2, now(), date_add(now(), interval 7 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (6, 12, 1, date_sub(now(), interval 3 day), date_add(now(), interval 4 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (15, 4, 1, date_sub(now(), interval 3 day), date_add(now(), interval 4 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (15, 5, 1, date_sub(now(), interval 3 day), date_add(now(), interval 4 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (5, 4, 1, date_sub(now(), interval 3 day), date_add(now(), interval 4 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (5, 14, 1, date_sub(now(), interval 3 day), date_add(now(), interval 4 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (3, 10, 5, date_sub(now(), interval 4 day), date_add(now(), interval 3 day));

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (3, 11, 5, date_sub(now(), interval 4 day), date_add(now(), interval 3 day));


insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (20, 1, 3, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (20, 2, 3, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (19, 3, 4, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (17, 5, 4, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (18, 6, 4, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (17, 7, 4, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (4, 8, 2, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (14, 10, 5, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (7, 11, 5, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (13, 17, 5, date_sub(now(), interval 2 day), date_add(now(), interval 5 day));


-- /////////////////////////////////////////////////////////////////////////////////////////////

-- returned

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (8, 16, 4, '2024-01-30', '2024-02-06');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (8, 15, 4, '2024-01-30', '2024-02-06');

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (9, 9, 5, '2024-02-8', '2024-02-15');

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (9, 10, 5, '2024-02-8', '2024-02-15');

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (4, 8, 3, '2023-12-15', '2023-12-22');

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (11, 16, 2, '2024-02-08', '2024-02-15');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (11, 18, 2, '2024-02-08', '2024-02-15');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (14, 19, 1, '2024-01-15', '2024-02-22');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (17, 5, 2, '2024-01-30', '2024-02-06');

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (20, 5, 2, '2024-01-01', '2024-01-08');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (1, 18, 4, '2024-01-03', '2024-01-10');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (6, 18, 4, '2024-01-03', '2024-02-10');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (9, 13, 1, '2024-01-05', '2024-02-12');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (8, 14, 3, '2024-01-08', '2024-02-15');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (10, 15, 3, '2024-01-30', '2024-02-06');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (20, 16, 3, '2024-01-30', '2024-02-06');
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (8, 12, 2, '2024-01-10', '2024-01-17');


-- /////////////////////////////////////////////////////////////////////////////////////////////

-- tomorrow return
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (12, 8, 3, date_sub(now(), interval 6 day), date_add(now(), interval 1 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (13, 9, 3, date_sub(now(), interval 6 day), date_add(now(), interval 1 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (12, 11, 2, date_sub(now(), interval 6 day), date_add(now(), interval 1 day));
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (16, 14, 2, date_sub(now(), interval 6 day), date_add(now(), interval 1 day));
-- /////////////////////////////////////////////////////////////////////////////////////////////


-- today return

insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (6, 1, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (5, 1, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (7, 2, 2, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (8, 3, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (9, 11, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (10, 11, 4, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (11, 5, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (12, 8, 5, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (11, 4, 3, date_sub(now(), interval 7 day), now());
insert into borrow_details (member_id, book_id, user_id, borrow_date, return_date)
	values (7, 6, 2, date_sub(now(), interval 7 day), now());


-- /////////////////////////////////////////////////////////////////////////////////////////////