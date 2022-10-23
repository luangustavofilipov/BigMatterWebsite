use login;
create table if not exists usuarios(
    email varchar(40) not null,
    senha varchar(32) not null
);