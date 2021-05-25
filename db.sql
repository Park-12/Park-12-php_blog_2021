drop database if exists php_blog_2021;

create database php_blog_2021;

use php_blog_2021;

create table article(
	id int(10) unsigned not null primary key auto_increment,
	regDate datetime not null,
	updateDate datetime not null,
	title char(100) not null,
	`body` text not null
);

insert into article
set regDate = now(),
updateDate = now(),
title = '제목1',
`body` = '내용1';

insert into article
set regDate = now(),
updateDate = now(),
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
