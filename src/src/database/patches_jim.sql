
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'k.oa.a.4',1) where description = 'k_cc';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (18,18,'k.oa.a.5',2) where description = 'k_oa_a_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (20,20,'1.oa.a.1',3) where description = 'k_oa_a_5';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'1.oa.c.6',4) where description = '1_oa_b_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (70,70,'1.oa.c.6',5) where description = '1_oa_c_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (12,12,'2.oa.a.1',6) where description = '1_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'2.nbt.a.1',7) where description = '2_oa_b_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'3.oa.a.1',8) where description = '2_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (64,64,'3.nbt.a.1',9) where description = '3_oa_c_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'4.oa.a.1',10) where description = '3_nbt';


update evaluations SET (questions,score_needed,standard_jump_id,progression) = (17,17,'4.nbt.b.4',11) where description = '4_oa_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (14,14,'4.nbt.b.5',12) where description = '4_nbt_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (5,5,'4.nbt.b.6',13) where description = '4_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (16,16,'4.nf.b.3.c',14) where description = '4_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'5.oa.a.1',15) where description = '4_nf_b_3_c';


update evaluations SET (questions,score_needed,standard_jump_id,progression) = (22,22,'5.nbt.b.5',16) where description = '5_oa_a_1';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (5,5,'5.nbt.b.6',17) where description = '5_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (4,4,'5.nbt.b.7',18) where description = '5_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'5.nf.a.1',19) where description = '5_nbt_b_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'6.rp.a.1',20) where description = '5_nf_a_1';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'6.ns.a.1',21) where description = '6_rp';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'6.ee.a.1',22) where description = '6_ns';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'6.g.a.1',23) where description = '6_ee';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'6.sp.a.1',24) where description = '6_g';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (3,3,'7.rp.a.1',25) where description = '6_sp';


--tables
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.1) where description = 'timestables_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.2) where description = 'timestables_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.3) where description = 'timestables_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.4) where description = 'timestables_8';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.5) where description = 'timestables_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.6) where description = 'timestables_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.7) where description = 'timestables_9';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.8) where description = 'timestables_7';


--run once
--6
insert into evaluations (id,description) values (36,'6_rp_a_1');
insert into evaluations (id,description) values (37,'6_ns_a_1');
insert into evaluations (id,description) values (38,'6_ee_a_1');
insert into evaluations (id,description) values (39,'6_g_a_1');
insert into evaluations (id,description) values (40,'6_sp_a_1');

--g6_rp integer NOT NULL default 0, --36

ALTER TABLE users ADD COLUMN g6_rp integer default 0;
ALTER TABLE users ADD COLUMN g6_ns integer default 0;
ALTER TABLE users ADD COLUMN g6_ee integer default 0;
ALTER TABLE users ADD COLUMN g6_g integer default 0;
ALTER TABLE users ADD COLUMN g6_sp integer default 0;

