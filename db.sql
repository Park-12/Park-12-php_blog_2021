DROP DATABASE IF EXISTS php_blog_2021;

CREATE DATABASE php_blog_2021;

USE php_blog_2021;

CREATE TABLE article(
	id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	regDate DATETIME NOT NULL,
	updateDate DATETIME NOT NULL,
	title CHAR(100) NOT NULL,
	`body` TEXT NOT NULL
);

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목1',
`body` = '내용1';
	
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목2',
`body` = '내용2';

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목3',
`body` = '내용3';

INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '제목4',
`body` = '내용4';

CREATE TABLE `member`(
	id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	regDate DATETIME NOT NULL,
	updateDate DATETIME NOT NULL,
	userId VARCHAR(100) NOT NULL,
	userPw VARCHAR(100) NOT NULL,
	userPwc VARCHAR(100) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	nickname VARCHAR(100) NOT NULL,
	cellphone VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL
);

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
userId = 'user1',
userPw = 'user1',
userPwc = 'user1',
`name` = 'user1',
nickname = 'user1',
cellphone = 'user1',
email = 'user1@test.com';

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
userId = 'user2',
userPw = 'user2',
userPwc = 'user2',
`name` = 'user2',
nickname = 'user2',
cellphone = 'user2',
email = 'user2@test.com';

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
userId = 'user3',
userPw = 'user3',
userPwc = 'user3',
`name` = 'user3',
nickname = 'user3',
cellphone = 'user3',
email = 'user3@test.com';