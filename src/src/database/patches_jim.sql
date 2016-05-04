insert into evaluations (id,description) values (19,'The Super Izzy');
alter table users add alltimesuperizzy integer;
insert into evaluations (id,description) values (20,'Basic Skills Fourth');
alter table users add alltimebasicskillsfourth integer;
insert into evaluations (id,description) values (21,'Basic Skills Fifth');
alter table users add alltimebasicskillsfifth integer;
update evaluations set description = 'Basic Skills 5th' where id = 21;
