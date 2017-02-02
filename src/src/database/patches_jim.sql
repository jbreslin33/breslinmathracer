--add table
CREATE TABLE evaluations_items (
        id SERIAL,
        item_types_id text NOT NULL,
        evaluations_id integer NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (evaluations_id) REFERENCES evaluations(id),
        FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);
--add table
CREATE TABLE evaluations_items (
        id SERIAL,
        item_types_id text NOT NULL,
        evaluations_id integer NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (evaluations_id) REFERENCES evaluations(id),
        FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);


--terra nova update
update evaluations SET (questions,score_needed) = (8,8,) where description = 'TerraNovaTest';

alter table evaluations add grade_a integer default 90;  --cyan 
alter table evaluations add grade_b integer default 80;  --green 
alter table evaluations add grade_c integer default 70;  --yellow 
alter table evaluations add grade_d integer default 60;  --orange 
alter table evaluations add grade_f integer default 59;  --red fail 

--tables
--izzy 
--green 100
--yellow 90 
--red 80 


update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'k.oa.a.4',1) where description = 'k_cc';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (18,18,'k.oa.a.5',2) where description = 'k_oa_a_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (20,20,'1.oa.a.1',3) where description = 'k_oa_a_5';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'1.oa.c.6',4) where description = '1_oa_b_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (70,70,'1.oa.c.6',5) where description = '1_oa_c_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (12,12,'2.oa.a.1',6) where description = '1_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'2.nbt.a.1',7) where description = '2_oa_b_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (16,16,'3.oa.a.1',8) where description = '2_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (64,64,'3.nbt.a.1',9,100,88,76,64,59) where description = '3_oa_c_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'4.oa.a.1',10) where description = '3_nbt';


update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (17,17,'4.nbt.b.4',11,71,68,65,62,59) where description = '4_oa_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (14,14,'4.nbt.b.5',12,79,74,69,64,59) where description = '4_nbt_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (5,5,'4.nbt.b.6',13,80,75,70,65,59) where description = '4_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (16,16,'4.nf.b.3.c',14,79,74,69,64,59) where description = '4_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'5.oa.a.1',15,80,75,70,65,59) where description = '4_nf_b_3_c';


update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'5.nbt.b.5',16,69,67,65,63,59) where description = '5_oa_a_1';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (5,5,'5.nbt.b.6',17,80,75,70,65,59) where description = '5_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (4,4,'5.nbt.b.7',18) where description = '5_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'5.nf.a.1',19,80,75,70,65,59) where description = '5_nbt_b_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'6.rp.a.1',20,80,75,70,65,59) where description = '5_nf_a_1';


--keep runing if you want for update
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (11,11,'6.ns.a.1',21,80,75,70,65,59) where description = '6_rp';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (11,11,'6.ee.a.1',22,80,75,70,65,59) where description = '6_ns';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'6.g.a.1',23,80,75,70,65,59) where description = '6_ee';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (11,11,'6.sp.a.1',24,80,75,70,65,59) where description = '6_g';
--so it cant be completed set it too high...
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (13,13,'7.rp.a.1',25,80,75,70,65,59) where description = '6_sp';


--tables
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.1,100,88,76,64,59) where description = 'timestables_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.2,100,88,76,64,59) where description = 'timestables_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.3,100,88,76,64,59) where description = 'timestables_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.4,100,88,76,64,59) where description = 'timestables_8';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.5,100,88,76,64,59) where description = 'timestables_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.6,100,88,76,64,59) where description = 'timestables_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.7,100,88,76,64,59) where description = 'timestables_9';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.8,100,88,76,64,59) where description = 'timestables_7';



--r2 k 
update users set core_grades_id = 1 where room_id = 7;

--r4 g1
update users set core_grades_id = 2 where room_id = 8;

--r5 g1
update users set core_grades_id = 2 where room_id = 23;

--r6 k 
update users set core_grades_id = 1 where room_id = 9;

--r7 pk 
update users set core_grades_id = 1 where room_id = 10;

--r8 pk 
update users set core_grades_id = 1 where room_id = 6;

--r21 g7
update users set core_grades_id = 8 where room_id = 22;

--r22 g7
update users set core_grades_id = 8 where room_id = 19;

--r23 g6 
update users set core_grades_id = 7 where room_id = 24;

--r24 g8
update users set core_grades_id = 9 where room_id = 25;

--r25 g6
update users set core_grades_id = 7 where room_id = 26;

--r28 g8
update users set core_grades_id = 9 where room_id = 18;

--r31 g3
update users set core_grades_id = 4 where room_id = 5;

--r32 g4
update users set core_grades_id = 5 where room_id = 15;

--r33 g5
update users set core_grades_id = 6 where room_id = 1;

--r34 g5
update users set core_grades_id = 6 where room_id = 2;

--r35 g4
update users set core_grades_id = 5 where room_id = 16;

--r36 g3
update users set core_grades_id = 4 where room_id = 17;

--r37 g2
update users set core_grades_id = 3 where room_id = 14;

--r39 g2
update users set core_grades_id = 3 where room_id = 13;

--RR8
update users set core_grades_id = 9 where room_id = 107;

--RR7
update users set core_grades_id = 8 where room_id = 106;

--RR6
update users set core_grades_id = 7 where room_id = 105;

--RR5
update users set core_grades_id = 6 where room_id = 104;

--RR4
update users set core_grades_id = 5 where room_id = 103;

--RR3
update users set core_grades_id = 4 where room_id = 108;

--begin temp 
--insert into rooms (name,school_id) VALUES ('AM3',2);
--insert into rooms (name,school_id) VALUES ('AM7',2);
--end temp

--AM3
--update users set core_grades_id = 4 where room_id = 109;

--AM7
--update users set core_grades_id = 8 where room_id = 110;

--update rooms
--update rooms set name = 'AM2' where id = 109;

--update users set score = 0;
--update users set core_standards_overide_id = '';
--update users set core_standards_id = 'k.cc.a.1';
