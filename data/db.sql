create database db34;
use db34;
create table users ( name varchar(34), email varchar(34), password varchar(64) );
insert into users values ("bob","bob@bob.com",SHA2("secrets, wow", 256)), ("lois","lois@lane.edu",SHA2("2124rgwvwc", 256));
insert into users values ("ken","ken@barbieland.com",SHA2("patriarchy", 256)), ("joju","chewbacca@every.io",SHA2("5jynrgb234tgrve", 256));

ALTER USER 'root' IDENTIFIED WITH mysql_native_password BY 'password';


-- DESCRIBE users;

-- CREATE TABLE pets ( name varchar(34), owner varchar(34), kind varchar(34) );
-- INSERT INTO pets VALUES ('fido', 'bob', 'woofer');
-- INSERT INTO pets VALUES ('tommy', 'bob', 'meower');
-- SELECT * FROM pets;
-- SELECT * FROM pets WHERE owner = 'bob';
-- SELECT * FROM pets JOIN users ON pets.owner = users.name;
-- SELECT * FROM pets JOIN users ON pets.owner = users.name WHERE owner = 'bob';
-- UPDATE pets SET owner = 'ken' WHERE name = 'tommy';
-- DELETE FROM pets WHERE name = 'tommy';
