
drop database MSC;

create database MSC;

use MSC;

create table if not exists firstpage(
	id int(5) primary key auto_increment,
	TItle varchar(200) NOT NULL,
	abstract varchar(200),
	Link varchar(200),
	Imgpath varchar(200)
);

create table if not exists Activity(
	ID int(5) Primary key auto_increment,
	Name varchar(200) NOT NULL,
	Time DATETIME,
	Location varchar(1024),
	Infor_path varchar(1024),
	Img_path varchar(200),
	News_1 blob,
	ActivityTime varchar(200),
	Abstract varchar(1024)
);

create table if not exists Member(
	ID char(50) Primary key,
	Name varchar(30) NOT NULL,
	Img varchar(30),
    Telphone varchar(15),
    Email varchar(30),
    College varchar(50),
	Infor_ad varchar(1024),
	password char(20),
    Privilege int default 0
);

create table if not exists Document(
	ID int(5) Primary key auto_increment,
	Title varchar(200) NOT NULL,
	Time DATETIME,
	Content varchar(2000) NOT NULL,
	Appendix varchar(200),
	Author char(20)
);

create table if not exists Cproblem(
	ID int(5) Primary key auto_increment,
	Name varchar(100) charset utf8,
	College varchar(50),
	Grade char(50),
	Sex Char(20),
	Contact varchar(30),
	Problem varchar(4096),
    Rate int(4),
    Worker varchar(40)
);


insert into Member (ID, Name, password, Telphone, Privilege ) values ('root', 'admin', '1145141919810','18915422865', 1);
