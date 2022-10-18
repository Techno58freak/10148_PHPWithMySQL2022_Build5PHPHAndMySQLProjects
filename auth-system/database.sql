-- auto-generated definition
create schema `10148_auth-sys` collate utf8mb4_bin;

create table users
(
    id         int                                 not null
        primary key,
    email      varchar(200)                        null,
    username   varchar(200)                        null,
    mypassword varchar(200)                        null,
    created_at timestamp default CURRENT_TIMESTAMP null
);

