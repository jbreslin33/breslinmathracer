insert into evaluations (id,description) values (19,'The Super Izzy');
alter table users add alltimesuperizzy integer;
insert into evaluations (id,description) values (20,'Basic Skills Fourth');
alter table users add alltimebasicskillsfourth integer;
insert into evaluations (id,description) values (21,'Basic Skills Fifth');
alter table users add alltimebasicskillsfifth integer;
update evaluations set description = 'Basic Skills 5th' where id = 21;
insert into evaluations (id,description) values (22,'Basic Skills Third');
alter table users add alltimebasicskillsthird integer;
update evaluations set description = 'Basic Skills 3rd' where id = 22;
insert into evaluations (id,description) values (23,'Basic Skills Second');
alter table users add alltimebasicskillssecond integer;

update evaluations set description = 'Basic Skills 2nd' where id = 23;
insert into evaluations (id,description) values (24,'Basic Skills First');
alter table users add alltimebasicskillsfirst integer;

update evaluations set description = 'Basic Skills 1st' where id = 24;
insert into evaluations (id,description) values (25,'Basic Skills Kindergarten');
alter table users add alltimebasicskillskindergarten integer;
update evaluations set description = 'Basic Skills K' where id = 25;
insert into evaluations (id,description) values (26,'Make Ten');
alter table users add alltimemaketen integer;
update evaluations set description = 'Make Ten' where id = 26;
insert into evaluations (id,description) values (27,'Add Subtract Within 10');
alter table users add alltimeaddsubtractwithinten integer;
update evaluations set description = 'Add subtract within 10' where id = 27;
insert into evaluations (id,description) values (28,'Add Subtract Within 20');
alter table users add alltimeaddsubtractwithintwenty integer;
update evaluations set description = 'Add subtract within 20' where id = 28;
insert into evaluations (id,description) values (29,'Propterites');
alter table users add alltimeproperties integer;
update evaluations set description = 'Properties' where id = 29;
update item_types set active_code = 0 where id = '1.nbt.c.4_11';
update item_types set active_code = 0 where id = '1.nbt.c.4_12';
update item_types set active_code = 0 where id = '1.nbt.c.4_7';
update item_types set active_code = 0 where id = '1.nbt.c.4_8';
update users set room_id = 12 where score < 400 AND room_id = 18;
 update users set room_id = 12 where last_name = 'kent';

update evaluations set description = 'Basic Skills Fourth Boss Level' where id = 30;
insert into evaluations (id,description) values (30,'Basic Skills Fourth Boss Level');
alter table users add alltimebasicskillsfourthbosslevel integer;

update evaluations set description = 'Basic Skills Fifth Boss Level' where id = 31;
insert into evaluations (id,description) values (31,'Basic Skills Fifth Boss Level');
alter table users add alltimebasicskillsfifthbosslevel integer;

