
use classmates;

create table classmates_info (
   id int auto_increment primary key,
   name varchar(255) not null,
   age int not null,
   adress varchar(255) not null
);

insert into classmates_info (name, age, adress)
values ('Иван Иванов', 20, 'ул. Ленина, 1'),
       ('Петр Петров', 21, 'ул. Гагарина, 5'),
       ('Анна Аннова', 19, 'ул. Садовая, 8'),
       ('Иван Иванов', 20, 'ул. Ленина, 1'),
       ('Петр Петров', 21, 'ул. Гагарина, 5'),
       ('Анна Аннова', 19, 'ул. Садовая, 8');
       

select * from classmates_info