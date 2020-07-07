create database `summernote` default charset utf8;
use `summernote`;
create table `table`(
	`id` int not null primary key auto_increment,
    `title`varchar(100) not null,
    `text` text not null,
    `update_date` datetime not null
)engine = InnoDB;
CREATE TABLE `summernote_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
