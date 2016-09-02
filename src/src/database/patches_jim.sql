--alter table users add core_standards_pass_id integer;
alter table evaluations add questions integer default 10;
alter table evaluations add score_needed integer default 10;
alter table evaluations add standard_jump_id text default 'k.cc.a.1';
