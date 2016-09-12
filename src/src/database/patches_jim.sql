--alter table users add core_standards_pass_id integer;

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


