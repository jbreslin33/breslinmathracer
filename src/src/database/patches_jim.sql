
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'k.oa.a.4',1) where description = 'k_cc';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (18,18,'k.oa.a.5',2) where description = 'k_oa_a_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (20,20,'1.oa.a.1',3) where description = 'k_oa_a_5';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'1.oa.c.6',4) where description = '1_oa_b_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (70,70,'1.oa.c.6',5) where description = '1_oa_c_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (12,12,'2.oa.a.1',6) where description = '1_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'2.nbt.a.1',7) where description = '2_oa_b_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (16,16,'3.oa.a.1',8) where description = '2_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (64,64,'3.nbt.a.1',9) where description = '3_oa_c_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'4.oa.a.1',10) where description = '3_nbt';


update evaluations SET (questions,score_needed,standard_jump_id,progression) = (17,17,'4.nbt.b.4',11) where description = '4_oa_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (14,14,'4.nbt.b.5',12) where description = '4_nbt_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (5,5,'4.nbt.b.6',13) where description = '4_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (16,16,'4.nf.b.3.c',14) where description = '4_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'5.oa.a.1',15) where description = '4_nf_b_3_c';


update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'5.nbt.b.5',16) where description = '5_oa_a_1';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (5,5,'5.nbt.b.6',17) where description = '5_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (4,4,'5.nbt.b.7',18) where description = '5_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'5.nf.a.1',19) where description = '5_nbt_b_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (9,9,'6.rp.a.1',20) where description = '5_nf_a_1';


--keep runing if you want for update
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (11,11,'6.ns.a.1',21) where description = '6_rp';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (11,11,'6.ee.a.1',22) where description = '6_ns';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'6.g.a.1',23) where description = '6_ee';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (11,11,'6.sp.a.1',24) where description = '6_g';
--so it cant be completed set it too high...
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'7.rp.a.1',25) where description = '6_sp';


--tables
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.1) where description = 'timestables_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.2) where description = 'timestables_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.3) where description = 'timestables_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.4) where description = 'timestables_8';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.5) where description = 'timestables_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.6) where description = 'timestables_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.7) where description = 'timestables_9';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'',8.8) where description = 'timestables_7';



--r2 k 
update users set core_standards_overide_id = 'k.cc.a.1' where room_id = 7;
update users set core_grades_id = 1 where room_id = 7;

--r4 g1
update users set core_standards_overide_id = '1.oa.a.1' where room_id = 8;
update users set core_grades_id = 2 where room_id = 8;

--r5 g1
update users set core_standards_overide_id = '1.oa.a.1' where room_id = 23;
update users set core_grades_id = 2 where room_id = 23;

--r6 k 
update users set core_standards_overide_id = 'k.cc.a.1' where room_id = 9;
update users set core_grades_id = 1 where room_id = 9;

--r7 pk 
update users set core_standards_overide_id = 'k.cc.a.1' where room_id = 10;
update users set core_grades_id = 1 where room_id = 10;

--r8 pk 
update users set core_standards_overide_id = 'k.cc.a.1' where room_id = 6;
update users set core_grades_id = 1 where room_id = 6;

--r21 g7
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 22;
update users set core_grades_id = 8 where room_id = 22;

--r22 g7
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 19;
update users set core_grades_id = 8 where room_id = 19;

--r23 g6 
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 24;
update users set core_grades_id = 7 where room_id = 24;

--r24 g8
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 25;
update users set core_grades_id = 9 where room_id = 25;

--r25 g6
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 26;
update users set core_grades_id = 7 where room_id = 26;

--r28 g8
update users set core_standards_overide_id = '6.rp.a.1' where room_id = 18;
update users set core_grades_id = 9 where room_id = 18;

--r31 g3
update users set core_standards_overide_id = '3.oa.a.1' where room_id = 5;
update users set core_grades_id = 4 where room_id = 5;

--r32 g4
update users set core_standards_overide_id = '4.oa.a.1' where room_id = 15;
update users set core_grades_id = 5 where room_id = 15;

--r33 g5
update users set core_standards_overide_id = '5.oa.a.1' where room_id = 1;
update users set core_grades_id = 6 where room_id = 1;

--r34 g5
update users set core_standards_overide_id = '5.oa.a.1' where room_id = 2;
update users set core_grades_id = 6 where room_id = 2;

--r35 g4
update users set core_standards_overide_id = '4.oa.a.1' where room_id = 16;
update users set core_grades_id = 5 where room_id = 16;

--r36 g3
update users set core_standards_overide_id = '3.oa.a.1' where room_id = 17;
update users set core_grades_id = 4 where room_id = 17;

--r37 g2
update users set core_standards_overide_id = '2.oa.a.1' where room_id = 14;
update users set core_grades_id = 3 where room_id = 14;

--r39 g2
update users set core_standards_overide_id = '2.oa.a.1' where room_id = 13;
update users set core_grades_id = 3 where room_id = 13;

update users set core_grades_id = 9 where first_name = 'Jason' and last_name = 'Voros';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Jason' and last_name = 'Voros'; 

update users set core_grades_id = 9 where first_name = 'Yassel' and last_name = 'baez';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Yassel' and last_name = 'baez'; 
update users set core_standards_id = '6.rp.a.1' where first_name = 'Yassel' and last_name = 'baez'; 

update users set core_grades_id = 9 where first_name = 'Marina' and last_name = 'Burgos';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Marina' and last_name = 'Burgos'; 

update users set core_grades_id = 9 where first_name = 'chaneli' and last_name = 'nolasco';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'chaneli' and last_name = 'nolasco'; 

update users set core_grades_id = 8 where first_name = 'Markus' and last_name = 'richards';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Markus' and last_name = 'richards'; 

update users set core_grades_id = 8 where first_name = 'Alejandro' and last_name = 'amigon';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Alejandro' and last_name = 'amigon'; 

update users set core_grades_id = 8 where first_name = 'halle' and last_name = 'jimenez';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'halle' and last_name = 'jimenez'; 

update users set core_grades_id = 7 where first_name = 'MICHAEL' and last_name = 'ZELAYA';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'MICHAEL' and last_name = 'ZELAYA'; 

update users set core_grades_id = 7 where first_name = 'cameron' and last_name = 'giscombe';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'cameron' and last_name = 'giscombe'; 

update users set core_grades_id = 7 where first_name = 'carlos' and last_name = 'jovel';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'carlos' and last_name = 'jovel'; 

update users set core_grades_id = 7 where first_name = 'Johnathan' and last_name = 'Valedon';
update users set core_standards_overide_id = '6.rp.a.1' where first_name = 'Johnathan' and last_name = 'Valedon'; 

update users set core_grades_id = 6 where first_name = 'Brian' and last_name = 'Hernandez';
update users set core_standards_overide_id = '5.oa.a.1' where first_name = 'Brian' and last_name = 'Hernandez'; 

update users set core_grades_id = 6 where first_name = 'Alex' and last_name = 'Acevedo';
update users set core_standards_overide_id = '5.oa.a.1' where first_name = 'Alex' and last_name = 'Acevedo'; 

update users set core_grades_id = 6 where first_name = 'iamir' and last_name = 'moore';
update users set core_standards_overide_id = '5.oa.a.1' where first_name = 'iamir' and last_name = 'moore'; 

update users set core_grades_id = 5 where first_name = 'Brayner' and last_name = 'Estevez';
update users set core_standards_overide_id = '5.oa.a.1' where first_name = 'Brayner' and last_name = 'Estevez'; 

update users set core_grades_id = 5 where first_name = 'Kirian' and last_name = 'Vargas';
update users set core_standards_overide_id = '5.oa.a.1' where first_name = 'Kirian' and last_name = 'Vargas'; 

update evaluations set description = 'Test Prep' where id = 18;


--temp

CREATE TABLE milestones (
        id SERIAL,
        milestones_id text NOT NULL,
        description text,
        PRIMARY KEY (id)
);

insert into milestones (milestones_id,description) values ('k_cc','k_cc');

drop table milestones;

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.1) where description = 'normal';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.2) where description = 'practice';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.3) where description = 'Test';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.4) where description = 'TerraNovaTest';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.5) where description = 'Homework';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.6) where description = 'The Super Izzy';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (10,10,'k.cc.a.1',0.7) where description = 'Test Prep';

