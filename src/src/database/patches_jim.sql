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



--all none 1 set 0 
update users set k_cc = 0 where k_cc > 1;
update users set k_oa_a_4 = 0 where k_oa_a_4 > 1;
update users set k_oa_a_5 = 0 where k_oa_a_5 > 1;

update users set g1_oa_b_3 = 0 where g1_oa_b_3 > 1;
update users set g1_oa_c_6 = 0 where g1_oa_c_6 > 1;
update users set g1_nbt = 0 where g1_nbt > 1;

update users set g2_oa_b_2 = 0 where g2_oa_b_2 > 1;
update users set g2_nbt = 0 where g2_nbt > 1;



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


--update users set k_cc = 0 where k_cc > 1;
--update users set k_oa_a_4 = 0 where k_oa_a_4 > 1;
--update users set k_oa_a_5 = 0 where k_oa_a_5 > 1;

--update users set g1_oa_b_3 = 0 where g1_oa_b_3 > 1;
--update users set g1_oa_c_6 = 0 where g1_oa_c_6 > 1;
--update users set g1_nbt = 0 where g1_nbt > 1;

--update users set g2_oa_b_2 = 0 where g2_oa_b_2 > 1;
--update users set g2_nbt = 0 where g2_nbt > 1;

--update users set g3_oa_c_7 = 0 where g3_oa_c_7 > 1;
--update users set g3_nbt = 0 where g3_nbt > 1;
