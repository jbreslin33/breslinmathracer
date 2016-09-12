
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'k.oa.a.4',1) where description = 'k_cc';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (18,18,'k.oa.a.5',2) where description = 'k_oa_a_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (20,20,'1.oa.a.1',3) where description = 'k_oa_a_5';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (39,39,'1.oa.c.6',4) where description = '1_oa_b_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (70,70,'1.oa.c.6',5) where description = '1_oa_c_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (12,12,'2.oa.a.1',6) where description = '1_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'2.nbt.a.1',7) where description = '2_oa_b_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'3.oa.a.1',8) where description = '2_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (64,64,'3.nbt.a.1',9) where description = '3_oa_c_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'4.oa.a.1',10) where description = '3_nbt';


--just drop all milestones 
alter table users drop k_cc;
alter table users drop k_oa_a_4;
alter table users drop k_oa_a_5;

alter table users drop g1_oa_b_3;
alter table users drop g1_oa_c_6;
alter table users drop g1_nbt;

alter table users drop g2_oa_b_2;
alter table users drop g2_nbt;

alter table users drop g3_oa_c_7;
alter table users drop g3_nbt;

alter table users drop g4_oa_b_4;
alter table users drop g4_nbt_b_4;
alter table users drop g4_nbt_b_5;
alter table users drop g4_nbt_b_6;
alter table users drop g4_nf_b_3_c;

alter table users drop g5_oa_a_1;
alter table users drop g5_nbt_b_5;
alter table users drop g5_nbt_b_6;
alter table users drop g5_nbt_b_7;
alter table users drop g5_nf_a_1;


--re add all milestones
alter table users add k_cc integer;
alter table users add k_oa_a_4 integer;
alter table users add k_oa_a_5 integer;

alter table users add g1_oa_b_3 integer;
alter table users add g1_oa_c_6 integer;
alter table users add g1_nbt integer;

alter table users add g2_oa_b_2 integer;
alter table users add g2_nbt integer;

alter table users add g3_oa_c_7 integer;
alter table users add g3_nbt integer;

alter table users add g4_oa_b_4 integer;
alter table users add g4_nbt_b_4 integer;
alter table users add g4_nbt_b_5 integer;
alter table users add g4_nbt_b_6 integer;
alter table users add g4_nf_b_3_c integer;

alter table users add g5_oa_a_1 integer;
alter table users add g5_nbt_b_5 integer;
alter table users add g5_nbt_b_6 integer;
alter table users add g5_nbt_b_7 integer;
alter table users add g5_nf_a_1 integer;

