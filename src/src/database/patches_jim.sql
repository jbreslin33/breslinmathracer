
alter table teachers ADD UNIQUE(name,school_id);
alter table rooms ADD UNIQUE(name,school_id);

--schools
insert into schools (name,password) values ('mathcore elementary','34gigidya_8');

--teachers
insert into teachers (name,password,school_id) values ('Professor Bob','drtu866',1);

--rooms
insert into rooms (name,school_id,teacher_id) values ('13',1,1);

--teams
insert into teams (name) values ('Numerical Ninjas');

alter table users ALTER school_id SET DEFAULT 1;
alter table users ALTER teacher_id SET DEFAULT 1;
alter table users ALTER room_id SET DEFAULT 1;
alter table users ALTER team_id SET DEFAULT 1;
