create database `summernote` default charset utf8;
use `summernote`;
create table `table`(
	`id` int not null primary key auto_increment,
    `title`varchar(100) not null,
    `text` text not null,
    `update_date` datetime not null
)engine = InnoDB;
