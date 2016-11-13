set names utf8;

drop database if exists AngularProject;

create database AngularProject charset=utf8;

use AngularProject;

create table user(
	uid int primary key auto_increment,
	uname varchar(64),
	pwd varchar(64),
	zname varchar(64)
);

insert into user values(
	null,'S7952787','wyx7952787','张无忌'
);

CREATE TABLE hs_dish(
	hid INT PRIMARY KEY AUTO_INCREMENT,
	UID INT,
	name VARCHAR(64),
	pic VARCHAR(64),
	teacherP VARCHAR(64),
	look INT,
	liuyan INT,
	zan INT,
	score float(4,1),
	type VARCHAR(64),
	proWrite VARCHAR(64)
);
INSERT INTO hs_dish VALUES
(NULL,'1','张无忌优秀作品','img/557af084f321f_02_06-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','水粉静物','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'2','赵敏优秀作品','img/c02-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','水粉静物','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'3','小昭优秀作品','img/m_02-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','人物素描','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'4','谢逊优秀作品','img/s01-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','人物速写','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'1','张无忌优秀作品','img/s03-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','人物速写','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'6','殷素素优秀作品','img/s04-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','人物速写','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'7','周芷若优秀作品','img/hh_lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','水粉静物','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'8','金庸老师作品展示','img/m_01-lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','静物素描','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！'),
(NULL,'8','金庸老师作品展示','img/hhhh_lg.jpg','色彩整体柔和，冷暖色调分明，立体感十足，在静物刻画上十分到位，只是在篮子绘画上颜色稍微有点杂','13','3','8','92.5','水粉静物','水粉画作品，冷暖色调明确,主副刻画十分到位，中心主体无论在刻画上还是在色彩上来说都是很不错的！！！');

CREATE TABLE lunList(
	lid INT PRIMARY KEY AUTO_INCREMENT,
	lname VARCHAR(64),
	lun VARCHAR(64),
	lpic VARCHAR(64),
	lHID INT,
	ltime BIGINT
	pinID INT,
	huiID INT
);
INSERT INTO lunList VALUES
(NULL,'小昭','大神求带！！！','img/pop.png','1','1477985092673','3','1'),
(NULL,'小昭','大神求带！！！','img/pop.png','1','1477985092673','3','1');

CREATE TABLE lunCart(
	lcid INT PRIMARY KEY AUTO_INCREMENT,
	LID INT,
	lname VARCHAR(64),
        lun VARCHAR(64),
        ltime BIGINT
);
INSERT INTO lunList VALUES
(NULL,'1','张无忌','不带你玩','1477985092673'),