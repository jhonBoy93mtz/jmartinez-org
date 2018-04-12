su postgres
psql
create user examen2 with encrypted password 'ctin123';
create database segundoexamenbd owner examen2;
\c segundoexamenbd
create table usuarios(
id_usuario serial primary key,
nombre varchar(30) not null,
apaterno varchar(30) not null,
amaterno varchar(30) not null,
usuario varchar(30) not null,
contrasenia varchar(30) not null);
create table autores(
id_autor serial primary key,
nombre varchar(30) not null,				
apaterno varchar(30) not null,
amaterno varchar(30) not null,
nacionalidad varchar(30) not null);
create table libros(
id_libro serial primary key,
titulo varchar(30) not null,
id_autor int not null,
anio_publicacion date not null);

alter table usuarios_id_usuario_seq owner to examen2;
alter table libros_id_libro_seq owner to examen2;
alter table autores_id_autor_seq owner to examen2;
alter sequence usuarios_id_usuario_seq owner to examen2;
alter sequence libros_id_libro_seq owner to examen2;
alter sequence autores_id_autor_seq owner to examen2;
GRANT insert ON usuarios TO examen2;
GRANT insert ON libros TO examen2;
GRANT insert ON autores TO examen2;
GRANT select ON usuarios TO examen2;
GRANT select ON libros TO examen2;
GRANT select ON autores TO examen2;

nano /etc/postgresql/9.6/main/pg_hba.conf
host segundoexamenbd examen2 127.0.0.1/32 md5 
