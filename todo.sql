-- The statement below sets the collation of the database to utf8
ALTER DATABASE your_database_name_CHANGE_ME CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- this is a comment in SQL (yes, the space is needed!)
-- these statements will drop the tables and re-add them
-- this is akin to reformatting and reinstalling Windows (OS X never needs a reinstall...) ;)
-- never do this on live data!!!!
DROP TABLE IF EXISTS todo;

-- the CREATE TABLE function is a function that takes tons of arguments to layout the table's schema
create table author(
todoId binary(16) not null,
todovAuthor varchar(255),
tododate char(32),
todotask varchar(128) not null,
todoHash char(97) not null,
todoUsername varchar(32) not null,
unique(todoAuthor),
unique(todoDate),
INDEX(todoTask),
primary key(todoId)
);