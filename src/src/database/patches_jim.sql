--alter table users add core_standards_pass_id integer;
alter table users add core_standards_overide_id text;

alter table evaluations add questions integer default 10;
alter table evaluations add score_needed integer default 10;
alter table evaluations add standard_jump_id text default 'k.cc.a.1';
alter table evaluations add progression NUMERIC(12,10) NOT NULL default 0;

--alltimebasicskillskindergarten
update evaluations set standard_jump_id = 'k.oa.a.3' where id = 25;
update evaluations set questions = 13 where id = 25;
update evaluations set score_needed = 13 where id = 25;
update evaluations set progression = 0.1 where id = 25;

--alltimemaketen
update evaluations set standard_jump_id = 'k.oa.a.5' where id = 26;
update evaluations set questions = 18 where id = 26;
update evaluations set score_needed = 18 where id = 26;
update evaluations set progression = 0.3 where id = 26;

--alltimekoaa5
update evaluations set standard_jump_id = '1.oa.a.1' where id = 13;
update evaluations set questions = 20 where id = 13;
update evaluations set score_needed = 20 where id = 13;
update evaluations set progression = 0.6 where id = 13;


update evaluations set progression = 10.0 where progression = 0;


--renames
--k
ALTER TABLE users RENAME COLUMN alltimebasicskillskindergarten to k_cc;
ALTER TABLE users RENAME COLUMN alltimemaketen to k_oa_a_4;
ALTER TABLE users RENAME COLUMN alltimekoaa5 to k_oa_a_5;

--1
ALTER TABLE users RENAME COLUMN alltimebasicskillsfirst to g1_oa_b_3;
ALTER TABLE users RENAME COLUMN alltimeproperties to g1_oa_c_6;
ALTER TABLE users RENAME COLUMN alltimeaddsubtractwithinten to g1_nbt;

--2
ALTER TABLE users RENAME COLUMN alltimebasicskillssecond to g2_oa_b_2;
ALTER TABLE users RENAME COLUMN alltimeaddsubtractwithintwenty to g2_nbt;

--3
ALTER TABLE users RENAME COLUMN alltimeizzy to g3_oa_c_7;
ALTER TABLE users RENAME COLUMN alltimebasicskillsthird to g3_nbt;

--4
ALTER TABLE users RENAME COLUMN alltimebasicskillsfourth to g4_oa_b_4;
ALTER TABLE users RENAME COLUMN alltimebasicskillsfourthbosslevel to g4_nbt_b_4;
alter table users add g4_nbt_b_5 text;
alter table users add g4_nbt_b_6 text;
alter table users add g4_nf_b_3_c text;

--5
ALTER TABLE users RENAME COLUMN alltimebasicskillsfifth to g5_oa_a_1;
ALTER TABLE users RENAME COLUMN alltimebasicskillsfifthbosslevel to g5_nbt_b_5;

alter table users add g5_nbt_b_6 text;
alter table users add g5_nbt_b_7 text;
alter table users add g5_nf_a_1 text;


--create inserts of evaluations
--4
insert into evaluations (id,description) values (11,'4_oa_b_4');
insert into evaluations (id,description) values (14,'4_nbt_b_4');
insert into evaluations (id,description) values (20,'4_nbt_b_5');
insert into evaluations (id,description) values (21,'4_nbt_b_6');
insert into evaluations (id,description) values (30,'4_nf_b_3_c');

--5
insert into evaluations (id,description) values (31,'5_oa_a_1');
insert into evaluations (id,description) values (32,'5_nbt_b_5');
insert into evaluations (id,description) values (33,'5_nbt_b_6');
insert into evaluations (id,description) values (34,'5_nbt_b_7');
insert into evaluations (id,description) values (35,'5_nf_a_1');


--rename description in evaluations
--k
update evaluations set description = 'k_cc' where id = 25;
update evaluations set description = 'k_oa_a_4' where id = 26;
update evaluations set description = 'k_oa_a_5' where id = 13;

--1
update evaluations set description = '1_oa_b_3' where id = 29;
update evaluations set description = '1_oa_c_6' where id = 27;
update evaluations set description = '1_nbt' where id = 24;

--2
update evaluations set description = '2_oa_b_2' where id = 28;
update evaluations set description = '2_nbt' where id = 23;

--3
update evaluations set description = '3_oa_c_7' where id = 12;
update evaluations set description = '3_nbt' where id = 22;

--4
update evaluations set description = '4_oa_b_4' where id = 11;
update evaluations set description = '4_nbt_b_4' where id = 14;
update evaluations set description = '4_nbt_b_5' where id = 20;
update evaluations set description = '4_nbt_b_6' where id = 21;
update evaluations set description = '4_nf_b_3_c' where id = 30;

--5
update evaluations set description = '5_oa_a_1' where id = 31;
update evaluations set description = '5_nbt_b_5' where id = 32;
update evaluations set description = '5_nbt_b_6' where id = 33;
update evaluations set description = '5_nbt_b_7' where id = 34;
update evaluations set description = '5_nf_a_1' where id = 35;

