create database summernote default charset utf8;
use summernote;
create table note(
	id int not null primary key auto_increment,
    texto text not null
)engine = InnoDB;
