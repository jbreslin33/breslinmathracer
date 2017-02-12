--add table
CREATE TABLE evaluations_items (
        id SERIAL,
        item_types_id text NOT NULL,
        evaluations_id integer NOT NULL,
	progression NUMERIC(12,10) NOT NULL default 0,
        PRIMARY KEY (id),
        FOREIGN KEY (evaluations_id) REFERENCES evaluations(id),
        FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);
--add prog
alter table evaluations_items add column progression NUMERIC(12,10) NOT NULL default 0;

--insert
--k_cc
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.1_1',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.1_2',25);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_1',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_2',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_3',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_4',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_5',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_6',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_7',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_8',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_9',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_10',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_11',25);

--k.oa.a.4
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_1',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_2',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_3',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_4',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_5',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_6',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_7',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_8',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_9',26);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_21',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_22',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_23',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_24',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_25',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_26',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_27',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_28',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_29',26);

--k.oa.a.5
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_12',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_13',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_14',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_15',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_16',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_17',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_18',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_19',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_20',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_21',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_29',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_30',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_31',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_32',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_34',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_35',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_36',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_38',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_39',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_41',13);

--1.oa.b.3
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_1',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_2',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_3',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_4',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_5',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_6',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_7',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_8',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_9',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_10',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_11',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_12',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_13',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_14',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_15',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_16',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_17',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_18',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_19',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_20',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_21',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_22',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_23',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_24',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_25',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_26',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_27',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_28',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_29',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_30',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_31',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_32',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_33',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_34',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_35',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_36',29);


--1.oa.c.6
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_12',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_13',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_14',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_33',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_34',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_35',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_36',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_37',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_38',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_39',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_40',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_41',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_42',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_45',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_46',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_47',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_48',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_49',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_50',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_52',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_53',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_54',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_55',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_56',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_57',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_60',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_61',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_62',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_63',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_65',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_66',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_67',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_69',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_70',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_72',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_79',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_80',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_81',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_82',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_83',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_84',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_85',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_86',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_87',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_88',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_89',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_90',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_91',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_92',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_93',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_94',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_95',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_96',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_97',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_98',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_101',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_102',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_103',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_104',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_105',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_107',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_108',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_109',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_110',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_112',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_113',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_114',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_116',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_117',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_119',27);

--1_nbt
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_1',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_2',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_3',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_4',24);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_1',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_2',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_3',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_4',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_5',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_6',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_9',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_10',24);

--terra nova update
update evaluations SET (questions,score_needed) = (8,8) where description = 'TerraNovaTest';

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
