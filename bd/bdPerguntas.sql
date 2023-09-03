create database PERGUNTAS CHARACTER SET utf8 COLLATE utf8_general_ci;

use PERGUNTAS;

create table tbPerguntas(
question_id int not null auto_increment,
user_id int not null,
titulo varchar(100) not null,
conteudo text not null,
data_publicacao DATETIME not null,
primary key(question_id))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;

create table tbUsuarios(
user_id int not null auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(100) not null,
create_at DATETIME not null,
update_at DATETIME,
primary key(user_id))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;

