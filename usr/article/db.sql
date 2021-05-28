DROP DATABASE IF EXISTS `php_blog_2021`;
CREATE DATABASE `php_blog_2021`;
USE `php_blog_2021`;

CREATE TABLE article(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title CHAR(100) NOT NULL,
    `body` TEXT NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL
);

INSERT INTO article
SET title = '제목1',
`body` = '내용1',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목2',
`body` = '내용2',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목3',
`body` = '내용3',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목4',
`body` = '내용4',
regDate = NOW(),
updateDate = NOW();

CREATE TABLE MEMBER(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    loginId CHAR(20) NOT NULL,
    loginPw CHAR(100) NOT NULL,
    `name` CHAR(20) NOT NULL,
    nickname CHAR(20) NOT NULL,
    email CHAR(100) NOT NULL,
    cellphoneNo CHAR(20) NOT NULL
);

INSERT INTO MEMBER
SET regDate = NOW(),
updateDate = NOW(),
loginId = 'user1',
loginPw = 'user1',
`name` = '홍길동',
nickname = '길동이',
email = 'user1@test.com',
cellphoneNo = '010-1111-1234';

INSERT INTO MEMBER
SET regDate = NOW(),
updateDate = NOW(),
loginId = 'user2',
loginPw = 'user2',
`name` = '홍길순',
nickname = '길순이',
email = 'user2@test.com',
cellphoneNo = '010-2222-1234';

CREATE TABLE reply(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    relId INT(10) UNSIGNED NOT NULL,
    `body` TEXT NOT NULL,
    relTypeCode CHAR(100) NOT NULL
);

SELECT * FROM reply;

INSERT INTO reply
SET regDate = NOW(),
updateDate = NOW(),
relId =  ,
`body` = ;

SELECT * FROM article ORDER BY article.id DESC;

DELETE FROM reply WHERE id = 9;