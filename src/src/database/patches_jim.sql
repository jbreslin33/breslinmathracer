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
