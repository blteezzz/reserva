create database sistema_reserva;
use sistema_reserva;
create table item(
    id int auto_increment primary key,
    nome varchar(20),
    descricao varchar(255),
    patrimonio varchar(6)
);
create table servidor(
    id int auto_increment primary key,
    nome varchar(50),
    matricula varchar(20),
    cpf varchar(14),
    telefone varchar(14),
    email varchar(50),
    endereco varchar(100),
    dtn date
);
create table emprestimo(
    id int auto_increment primary key,
    id_item int,
    id_servidor int,
    data_emprestimo datetime,
    data_devolucao datetime,
    foreign key (id_item) references item (id),
    foreign key (id_servidor) references servidor (id)
);