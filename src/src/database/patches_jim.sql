--SCHOOL
CREATE TABLE schools (
        id SERIAL,
        name text UNIQUE,
        password text,
        PRIMARY KEY (id)
);

--insert into schools
insert into schools (name,password) values ('visitationbvm','Iggles_13');

update users set school_id = 1;


--TEACHER
CREATE TABLE teachers (
        id SERIAL,
        name text,
        password text,
        school_id integer,
        PRIMARY KEY (id),
        FOREIGN KEY(school_id) REFERENCES schools(id)
);

ALTER TABLE users ADD COLUMN teacher_id integer;

--ROOM
CREATE TABLE rooms (
        id SERIAL,
        name text NOT NULL,
        school_id integer NOT NULL,
        teacher_id integer,
        PRIMARY KEY (id),
	UNIQUE (name,school_id),
        FOREIGN KEY(school_id) REFERENCES schools(id),
        FOREIGN KEY(teacher_id) REFERENCES teachers(id)
);


insert into rooms (name,school_id) values ('33',1);
insert into rooms (name,school_id) values ('34',1);

update users set room_id = 1 where room_id = 33;
update users set room_id = 2 where room_id = 34;
update users set room_id = NULL where room_id = 0;

--TEAM
CREATE TABLE teams (
        id SERIAL,
        name text UNIQUE,
        PRIMARY KEY (id)
);
update users set team_id = NULL where team_id = 0;

ALTER TABLE users ADD FOREIGN KEY (school_id) REFERENCES schools(id);
ALTER TABLE users ADD FOREIGN KEY (teacher_id) REFERENCES teachers(id);
ALTER TABLE users ADD FOREIGN KEY (room_id) REFERENCES rooms(id);
ALTER TABLE users ADD FOREIGN KEY (team_id) REFERENCES teams(id);

ALTER TABLE users ALTER COLUMN school_id DROP NOT NULL;
ALTER TABLE users ALTER COLUMN teacher_id DROP NOT NULL;
ALTER TABLE users ALTER COLUMN room_id DROP NOT NULL;
ALTER TABLE users ALTER COLUMN team_id DROP NOT NULL;
