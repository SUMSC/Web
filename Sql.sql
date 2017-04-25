create database MSC;
use MSC;

create table if not exists firstpage(
	id int(5) primary key auto_increment,
	TItle varchar(200) NOT NULL,
	abstract varchar(200),
	Link varchar(200),
	Imgpath varchar(200)
);

create table if not exists Campus_walk(
    name varchar(30),
    college varchar(50),
    grade varchar(50),
    telphone varchar(50),
    email varchar(50),
    primary key(telphone)
);

create table if not exists Activity(
	ID int(5) Primary key auto_increment,
	Name varchar(200) NOT NULL,
	Time DATETIME,
	Location varchar(200),
	Infor_path varchar(200),
	Img_path varchar(200),
	News_1 varchar(1024),
	ActivityTime varchar(20),
	Abstract varchar(30)
);

create table if not exists Member(
	ID char(5) Primary key,
	Name varchar(15) NOT NULL,
	Img varchar(20),
    Telphone varchar(15),
    Email varchar(30),
    College varchar(50),
	Infor_ad varchar(20),
	password char(20)
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
	name char(10),
	College varchar(50),
	Grade char(5),
	Sex Char(4),
	contact varchar(9),
	Problem varchar(500),
    Rate int(4),
    Worker varchar(40)
);