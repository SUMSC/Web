create database MSC;
use MSC

create table if not exists firstpage(
	id int(5) primary key auto_increment,
	Name varchar(200) NOT NULL,
	Content varchar(200),
	Pressname varchar(200),
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
	News_1 varchar(1024)
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


create table if not exists Cproblem(
	ID int(5) Primary key auto_increment,
	name varchar(10),
	College varchar(50),
	Grade char(5),
	Sex Char(4) CHECK(Sex IN ('男','女')),
	Problem varchar(500),
	contact varchar(100),
    Rate int(4),
    Worker varchar(40)
);