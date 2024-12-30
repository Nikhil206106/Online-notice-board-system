create database online_notice_board_1;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE online_notice_board_1.admins (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE online_notice_board_1.notice (
  `nid` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `to_whom` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE online_notice_board_1.users (
  `uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE online_notice_board_1.admins
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE online_notice_board_1.notice
  ADD PRIMARY KEY (`nid`);
  
 ALTER TABLE online_notice_board_1.users
  ADD PRIMARY KEY (`uid`);
  
 ALTER TABLE online_notice_board_1.admins
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
 ALTER TABLE online_notice_board_1.notice
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
 ALTER TABLE online_notice_board_1.users
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT; 

select * from online_notice_board_1.notice;
select * from online_notice_board_1.users;
select * from online_notice_board_1.admins;

alter table online_notice_board_1.admins add lname varchar(250) not null;
alter table online_notice_board_1.admins drop email;
alter table online_notice_board_1.admins drop password;
alter table online_notice_board_1.admins add email varchar(100) not null;
alter table online_notice_board_1.admins add password varchar(100) not null;

alter table online_notice_board_1.users drop class;
alter table online_notice_board_1.users add year varchar(100) not null;

delete from online_notice_board_1.admins where id=1;
delete from online_notice_board_1.admins where id=2;
delete from online_notice_board_1.admins where id=3;
update online_notice_board_1.admins set id=1 where name='Atharv';