

--****************************************************************
--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
--**************************************************************


--==================================================================
--====================== GAMES  =============================
--==================================================================

DROP TABLE games_levels cascade;
DROP TABLE games_attempts cascade;
DROP TABLE games cascade;

--==================================================================
--====================== LEVELS  =============================
--==================================================================

DROP TABLE levels_standards_clusters_domains_grades cascade;
DROP TABLE levels_transactions cascade;
DROP TABLE levels cascade;

--==================================================================
--====================== PEOPLE  =============================
--==================================================================

DROP TABLE permissions_users cascade;
DROP TABLE permissions cascade;
DROP TABLE rooms cascade;
DROP TABLE teachers cascade;
DROP TABLE students cascade;
DROP TABLE users cascade;
DROP TABLE schools cascade;

--==================================================================
--=========================== CORE CURRICULUM  ========================
--==================================================================

DROP TABLE standards_clusters_domains_grades cascade;
DROP TABLE standards cascade;

DROP TABLE clusters_domains_grades cascade;
DROP TABLE clusters cascade;

DROP TABLE domains_grades cascade;
DROP TABLE domains_subjects cascade;
DROP TABLE domains cascade;

DROP TABLE grades cascade;

DROP TABLE subjects cascade;

--==================================================================
--=========================== HELPER  ========================
--==================================================================

DROP TABLE passwords cascade;
DROP TABLE error_log cascade; 


--****************************************************************
--***************************************************************
--******************  POSTGRESQL SETTINGS *************************
--**************************************************************
--**************************************************************

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--****************************************************************
--***************************************************************
--******************  CREATE TABLES *************************
--**************************************************************
--**************************************************************

--==================================================================
--=========================== HELPER  ========================
--==================================================================

--ERROR_LOG
CREATE TABLE error_log (
    id integer NOT NULL,
    error text,
    error_time timestamp,
    username text
);

--PASSWORDS
CREATE TABLE passwords (
    id integer NOT NULL,
    password text UNIQUE 
);

--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--SCHOOLS
CREATE TABLE schools (
    id integer NOT NULL,
    school_name text NOT NULL UNIQUE 
);

--USERS
CREATE TABLE users (
    id integer NOT NULL,
    username text, 
    password text,
    first_name text,
    middle_name1 text,
    middle_name2 text,
    middle_name3 text,
    last_name text,
    school_id integer NOT NULL 
);

--TEACHERS
CREATE TABLE teachers (
    id integer NOT NULL,
    room_id integer
);

--STUDENTS
CREATE TABLE students (
    id integer NOT NULL,
    teacher_id integer 
);

--ROOMS
CREATE TABLE rooms (
    id integer NOT NULL,
    room text NOT NULL,
    school_id integer NOT NULL
);

--PERMISSIONS
CREATE TABLE permissions (
    id integer NOT NULL,
    permission text NOT NULL UNIQUE 
);

--PERMISSIONS_USERS
CREATE TABLE permissions_users (
    permission_id integer NOT NULL,
    user_id integer NOT NULL  
);

--==================================================================
--==================== CORE CURRICULUM  ========================
--==================================================================

--*************************
--GRADE
CREATE TABLE grades (
    id integer NOT NULL,
    grade text  
);

--*************************
--SUBJECTS
CREATE TABLE subjects (
    id integer NOT NULL,
    subject text NOT NULL
);

--*************************
--DOMAINS
CREATE TABLE domains (
    id integer NOT NULL,
    domain text NOT NULL
);

--DOMAINS_SUBJECTS
CREATE TABLE domains_subjects (
    domain_id integer,
    subject_id integer
);

--DOMAINS_GRADES
CREATE TABLE domains_grades (
    id integer NOT NULL,
    domain_id integer,
    grade_id integer 
);

--*************************
--CLUSTERS
CREATE TABLE clusters (
    id integer NOT NULL,
    cluster text NOT NULL -- Know number names and the count sequence. | Key ideas and details 
);

--CLUSTERS_DOMAINS_GRADES
CREATE TABLE clusters_domains_grades (
    id integer NOT NULL,
    cluster_id integer NOT NULL, 
    domain_grade_id integer NOT NULL  
);

--*************************
--STANDARDS
CREATE TABLE standards (
    id integer NOT NULL,
    standard text NOT NULL,
    description text NOT NULL
);

--STANDARDS_CLUSTERS_DOMAINS_GRADES
CREATE TABLE standards_clusters_domains_grades (
    id integer NOT NULL,
    standard_id integer NOT NULL,
    cluster_domain_grade_id integer NOT NULL
);


--==================================================================
--====================== LEVELS  =============================
--==================================================================

--LEVELS
CREATE TABLE levels (
    id double precision NOT NULL UNIQUE, 
    description text NOT NULL
);

--LEVELS_TRANSACTIONS
CREATE TABLE levels_transactions (
    id integer NOT NULL,
    advancement_time timestamp,
    level_id double precision NOT NULL,
    user_id integer NOT NULL
);

--LEVELS_STANDARDS_CLUSTERS_DOMAINS_GRADES
CREATE TABLE levels_standards_clusters_domains_grades (
    level_id double precision NOT NULL,
    standard_cluster_domain_grade_id integer NOT NULL
);

--==================================================================
--===================== GAMES =====================================
--==================================================================

--GAMES
CREATE TABLE games (
    id integer NOT NULL,
    game text NOT NULL UNIQUE
);

--GAMES_LEVELS
CREATE TABLE games_levels (
    id integer NOT NULL,
    game_id integer NOT NULL,
    level_id double precision NOT NULL
);

--GAMES_ATTEMPTS
CREATE TABLE games_attempts (
    id integer NOT NULL,
    game_attempt_time_start timestamp,
    game_attempt_time_end timestamp,
    user_id integer NOT NULL,
    level_id double precision NOT NULL, --should this be standard_id?
	score integer DEFAULT 0 NOT NULL,
	time_warning boolean DEFAULT false NOT NULL
);

--==================================================================
--================= ENVIRONMENT  ====================================
--==================================================================

--BROWSERS
--CREATE TABLE browsers (
 --   id integer NOT NULL,
  --  browser text NOT NULL UNIQUE
--);

--Modenizr should help make stuff compatible but we still need webistie to hide certain games.
-- Lets go step by step
-- you have to goto abcandyou.com...when you do...
--i think for now this should be left alone till needed.

--DROP TABLE os cascade; --win98,win2000,winxp,win7,vista,win8,debian3,ubuntu,redhat,fedora,android,mac,etc
--DROP TABLE browser cascade; --ie6,ie7,ie8,ie9,ie10,opera9,opera10,firefox8,firefox9
--DROP TABLE engine cascade; --ogre,torque,javascript,2d_brengine,jmonkey
--i am thinking to show all?






--****************************************************************
--***************************************************************
--******************  CREATE SEQUENCES *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--ERROR_LOG
CREATE SEQUENCE error_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--PASSWORDS
CREATE SEQUENCE passwords_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--SCHOOLS
CREATE SEQUENCE schools_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--STUDENTS

--TEACHERS

--ROOMS
CREATE SEQUENCE rooms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--PERMISSIONS
CREATE SEQUENCE permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--PERMISSIONS_USERS

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--SUBJECTS
CREATE SEQUENCE subjects_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--DOMAINS_GRADES
CREATE SEQUENCE domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--DOMAINS
CREATE SEQUENCE domains_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--CLUSTERS
CREATE SEQUENCE clusters_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--CLUSTERS_DOMAINS_GRADES
CREATE SEQUENCE clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--STANDARDS
CREATE SEQUENCE standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--STANDARDS_CLUSTERS_DOMAINS_GRADES
CREATE SEQUENCE standards_clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--GRADES
CREATE SEQUENCE grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS

--LEVELS_TRANSACTIONS
CREATE SEQUENCE levels_transactions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--LEVELS_STANDARDS

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES
CREATE SEQUENCE games_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--GAMES_LEVELS
CREATE SEQUENCE games_levels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--GAMES_ATTEMPTS
CREATE SEQUENCE games_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--****************************************************************
--***************************************************************
--****************** ALTER OWNER  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--PASSWORDS
ALTER TABLE public.passwords OWNER TO postgres;

--ERROR_LOG
ALTER TABLE public.error_log OWNER TO postgres;


--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
ALTER TABLE public.users OWNER TO postgres;

--SCHOOLS
ALTER TABLE public.schools OWNER TO postgres;

--STUDENTS
ALTER TABLE public.students OWNER TO postgres;

--TEACHERS
ALTER TABLE public.teachers OWNER TO postgres;

--ROOMS
ALTER TABLE public.rooms OWNER TO postgres;

--PERMISSIONS
ALTER TABLE public.permissions OWNER TO postgres;

--PERMISSIONS_USERS
ALTER TABLE public.permissions_users OWNER TO postgres;


--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--SUBJECTS
ALTER TABLE public.subjects OWNER TO postgres;

--GRADES
ALTER TABLE public.grades OWNER TO postgres;

--DOMAINS
ALTER TABLE public.domains OWNER TO postgres;

--DOMAINS_SUBJECTS
ALTER TABLE public.domains_subjects OWNER TO postgres;

--DOMAINS_GRADES
ALTER TABLE public.domains_grades OWNER TO postgres;

--CLUSTERS
ALTER TABLE public.clusters OWNER TO postgres;

--CLUSTERS_DOMAINS_GRADES
ALTER TABLE public.clusters_domains_grades OWNER TO postgres;

--STANDARDS
ALTER TABLE public.standards OWNER TO postgres;

--STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE public.standards_clusters_domains_grades OWNER TO postgres;

--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS
ALTER TABLE public.levels OWNER TO postgres;

--LEVELS_TRANSACTIONS
ALTER TABLE public.levels_transactions OWNER TO postgres;

--LEVELS_STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE public.levels_standards_clusters_domains_grades OWNER TO postgres;

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES
ALTER TABLE public.games OWNER TO postgres;

--GAMES_LEVELS
ALTER TABLE public.games_levels OWNER TO postgres;

--GAMES_ATTEMPTS
ALTER TABLE public.games_attempts OWNER TO postgres;

--****************************************************************
--***************************************************************
--****************** ALTER SEQUENCE  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--ERROR_LOG
ALTER TABLE public.error_log_id_seq OWNER TO postgres;
ALTER SEQUENCE error_log_id_seq OWNED BY error_log.id;
ALTER TABLE ONLY error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);

--PASSWORDS
ALTER TABLE public.passwords_id_seq OWNER TO postgres;
ALTER SEQUENCE passwords_id_seq OWNED BY passwords.id;
ALTER TABLE ONLY passwords ALTER COLUMN id SET DEFAULT nextval('passwords_id_seq'::regclass);


--==================================================================
--================= PEOPLE   ====================================
--==================================================================

--USERS
ALTER TABLE public.users_id_seq OWNER TO postgres;
ALTER SEQUENCE users_id_seq OWNED BY users.id;
ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);

--SCHOOLS
ALTER TABLE public.schools_id_seq OWNER TO postgres;
ALTER SEQUENCE schools_id_seq OWNED BY schools.id;
ALTER TABLE ONLY schools ALTER COLUMN id SET DEFAULT nextval('schools_id_seq'::regclass);

--STUDENTS

--TEACHERS

--ROOMS
ALTER TABLE public.rooms_id_seq OWNER TO postgres;
ALTER SEQUENCE rooms_id_seq OWNED BY rooms.id;
ALTER TABLE ONLY rooms ALTER COLUMN id SET DEFAULT nextval('rooms_id_seq'::regclass);

--PERMISSIONS
ALTER TABLE public.permissions_id_seq OWNER TO postgres;
ALTER SEQUENCE permissions_id_seq OWNED BY permissions.id;
ALTER TABLE ONLY permissions ALTER COLUMN id SET DEFAULT nextval('permissions_id_seq'::regclass);

--PERMISSIONS_USERS


--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--GRADES
ALTER TABLE public.grades_id_seq OWNER TO postgres;
ALTER SEQUENCE grades_id_seq OWNED BY grades.id;
ALTER TABLE ONLY grades ALTER COLUMN id SET DEFAULT nextval('grades_id_seq'::regclass);

--SUBJECTS
ALTER TABLE public.subjects_id_seq OWNER TO postgres;
ALTER SEQUENCE subjects_id_seq OWNED BY subjects.id;
ALTER TABLE ONLY subjects ALTER COLUMN id SET DEFAULT nextval('subjects_id_seq'::regclass);

--DOMAINS_GRADES
ALTER TABLE public.domains_grades_id_seq OWNER TO postgres;
ALTER SEQUENCE domains_grades_id_seq OWNED BY domains_grades.id;
ALTER TABLE ONLY domains_grades ALTER COLUMN id SET DEFAULT nextval('domains_grades_id_seq'::regclass);

--DOMAINS
ALTER TABLE public.domains_id_seq OWNER TO postgres;
ALTER SEQUENCE domains_id_seq OWNED BY domains.id;
ALTER TABLE ONLY domains ALTER COLUMN id SET DEFAULT nextval('domains_id_seq'::regclass);

--CLUSTERS
ALTER TABLE public.clusters_id_seq OWNER TO postgres;
ALTER SEQUENCE clusters_id_seq OWNED BY clusters.id;
ALTER TABLE ONLY clusters ALTER COLUMN id SET DEFAULT nextval('clusters_id_seq'::regclass);

--CLUSTERS_DOMAINS_GRADES
ALTER TABLE public.clusters_domains_grades_id_seq OWNER TO postgres;
ALTER SEQUENCE clusters_domains_grades_id_seq OWNED BY clusters_domains_grades.id;
ALTER TABLE ONLY clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('clusters_domains_grades_id_seq'::regclass);

--STANDARDS
ALTER TABLE public.standards_id_seq OWNER TO postgres;
ALTER SEQUENCE standards_id_seq OWNED BY standards.id;
ALTER TABLE ONLY standards ALTER COLUMN id SET DEFAULT nextval('standards_id_seq'::regclass);

--STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE public.standards_clusters_domains_grades_id_seq OWNER TO postgres;
ALTER SEQUENCE standards_clusters_domains_grades_id_seq OWNED BY standards_clusters_domains_grades.id;
ALTER TABLE ONLY standards_clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('standards_clusters_domains_grades_id_seq'::regclass);

--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS

--LEVELS_TRANSACTIONS
ALTER TABLE public.levels_transactions_id_seq OWNER TO postgres;
ALTER SEQUENCE levels_transactions_id_seq OWNED BY levels_transactions.id;
ALTER TABLE ONLY levels_transactions ALTER COLUMN id SET DEFAULT nextval('levels_transactions_id_seq'::regclass);

--LEVELS_STANDARDS

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES
ALTER TABLE public.games_id_seq OWNER TO postgres;
ALTER SEQUENCE games_id_seq OWNED BY games.id;
ALTER TABLE ONLY games ALTER COLUMN id SET DEFAULT nextval('games_id_seq'::regclass);

--GAMES_LEVELS
ALTER TABLE public.games_levels_id_seq OWNER TO postgres;
ALTER SEQUENCE games_levels_id_seq OWNED BY games_levels.id;
ALTER TABLE ONLY games_levels ALTER COLUMN id SET DEFAULT nextval('games_levels_id_seq'::regclass);

--GAMES_ATTEMPTS
ALTER TABLE public.games_attempts_id_seq OWNER TO postgres;
ALTER SEQUENCE games_attempts_id_seq OWNED BY games_attempts.id;
ALTER TABLE ONLY games_attempts ALTER COLUMN id SET DEFAULT nextval('games_attempts_id_seq'::regclass);

--****************************************************************
--***************************************************************
--****************** PRIMARY KEY  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--PASSWORDS
ALTER TABLE passwords ADD PRIMARY KEY (password);

--ERROR_LOG
ALTER TABLE error_log ADD PRIMARY KEY (id);

--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
ALTER TABLE users ADD PRIMARY KEY (id);

--SCHOOLS
ALTER TABLE schools ADD PRIMARY KEY (id);

--STUDENTS
ALTER TABLE students ADD PRIMARY KEY (id);

--TEACHERS
ALTER TABLE teachers ADD PRIMARY KEY (id);

--ROOMS
ALTER TABLE rooms ADD PRIMARY KEY (id);

--PERMISSIONS
ALTER TABLE permissions ADD PRIMARY KEY (id);

--PERMISSIONS_USERS
ALTER TABLE permissions_users ADD PRIMARY KEY (permission_id,user_id);


--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--SUBJECTS
ALTER TABLE subjects ADD PRIMARY KEY (id);

--GRADES
ALTER TABLE grades ADD PRIMARY KEY (id);

--DOMAINS
ALTER TABLE domains ADD PRIMARY KEY (id);

--DOMAINS_SUBJECTS
ALTER TABLE domains_subjects ADD PRIMARY KEY (domain_id, subject_id);

--DOMAINS_GRADES
ALTER TABLE domains_grades ADD PRIMARY KEY (id);

--CLUSTERS
ALTER TABLE clusters ADD PRIMARY KEY (id);

--CLUSTERS_DOMAINS_GRADES
ALTER TABLE clusters_domains_grades ADD PRIMARY KEY (id);

--STANDARDS
ALTER TABLE standards ADD PRIMARY KEY (id);

--STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE standards_clusters_domains_grades ADD PRIMARY KEY (id);

--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS
ALTER TABLE levels ADD PRIMARY KEY (id);

--LEVELS_TRANSACTIONS
ALTER TABLE levels_transactions ADD PRIMARY KEY (id);

--LEVELS_STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE levels_standards_clusters_domains_grades ADD PRIMARY KEY (level_id, standard_cluster_domain_grade_id);

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES
ALTER TABLE games ADD PRIMARY KEY (id);

--GAMES_LEVELS
ALTER TABLE games_levels ADD PRIMARY KEY (id);

--GAMES_ATTEMPTS
ALTER TABLE games_attempts ADD PRIMARY KEY (id);

--****************************************************************
--***************************************************************
--****************** FOREIGN KEY  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--PASSWORDS
--NO FOREIGN KEY

--ERROR_LOG
--NO FOREIGN KEY


--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
ALTER TABLE users ADD FOREIGN KEY (school_id) REFERENCES schools(id);

--SCHOOLS

--STUDENTS
ALTER TABLE students ADD FOREIGN KEY (id) REFERENCES users(id);

--TEACHERS
ALTER TABLE teachers ADD FOREIGN KEY (id) REFERENCES users(id);

--ROOMS
ALTER TABLE rooms ADD FOREIGN KEY (school_id) REFERENCES schools(id);
ALTER TABLE rooms ADD UNIQUE (school_id,room);

--PERMISSIONS

--PERMISSIONS_USERS
ALTER TABLE permissions_users ADD FOREIGN KEY (permission_id) REFERENCES permissions(id);
ALTER TABLE permissions_users ADD FOREIGN KEY (user_id) REFERENCES users(id);

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--GRADES

--SUBJECTS

--DOMAINS

--DOMAINS_SUBJECTS
ALTER TABLE domains_subjects ADD FOREIGN KEY (domain_id) REFERENCES domains(id);
ALTER TABLE domains_subjects ADD FOREIGN KEY (subject_id) REFERENCES subjects(id);

--DOMAINS_GRADES
ALTER TABLE domains_grades ADD FOREIGN KEY (domain_id) REFERENCES domains(id);
ALTER TABLE domains_grades ADD FOREIGN KEY (grade_id) REFERENCES grades(id);

--CLUSTERS_DOMAINS_GRADES
ALTER TABLE clusters_domains_grades ADD FOREIGN KEY (cluster_id) REFERENCES clusters(id);
ALTER TABLE clusters_domains_grades ADD FOREIGN KEY (domain_grade_id) REFERENCES domains_grades(id);

--STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE standards_clusters_domains_grades ADD FOREIGN KEY (standard_id) REFERENCES standards(id);
ALTER TABLE standards_clusters_domains_grades ADD FOREIGN KEY (cluster_domain_grade_id) REFERENCES clusters_domains_grades(id);

--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS

--LEVELS_TRANSACTIONS
ALTER TABLE levels_transactions ADD FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE levels_transactions ADD FOREIGN KEY (level_id) REFERENCES levels(id);

--LEVELS_STANDARDS_CLUSTERS_DOMAINS_GRADES
ALTER TABLE levels_standards_clusters_domains_grades ADD FOREIGN KEY (level_id) REFERENCES levels(id);
ALTER TABLE levels_standards_clusters_domains_grades ADD FOREIGN KEY (standard_cluster_domain_grade_id) REFERENCES standards_clusters_domains_grades(id);

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES_LEVELS
ALTER TABLE games_levels ADD FOREIGN KEY (game_id) REFERENCES games(id);
ALTER TABLE games_levels ADD FOREIGN KEY (level_id) REFERENCES levels(id);

--GAMES_ATTEMPTS
ALTER TABLE games_attempts ADD FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE games_attempts ADD FOREIGN KEY (level_id) REFERENCES levels(id);


--****************************************************************
--***************************************************************
--****************** UNIQUE CONSTRAINT  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--PASSWORDS

--ERROR_LOG


--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
ALTER TABLE users ADD UNIQUE (username,school_id);

--SCHOOLS

--STUDENTS

--TEACHERS

--ROOMS
ALTER TABLE rooms ADD UNIQUE (school_id,room);

--PERMISSIONS

--PERMISSIONS_USERS


--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--GRADES
ALTER TABLE rooms ADD UNIQUE (school_id,room);

--SUBJECTS

--DOMAINS

--DOMAINS_SUBJECTS

--DOMAINS_GRADES
ALTER TABLE domains_grades ADD UNIQUE (domain_id, grade_id);

--ROOMS
ALTER TABLE rooms ADD UNIQUE (school_id,room);

--CLUSTERS

--STANDARDS
ALTER TABLE standards_clusters_domains_grades ADD UNIQUE (standard_id, cluster_domain_grade_id);


--==================================================================
--================= LEVELS  ====================================
--==================================================================

--LEVELS

--LEVELS_TRANSACTIONS

--LEVELS_STANDARDS

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES
insert into games (game) values ('Dungeon_k_cc_a_1');
insert into games (game) values ('Dungeon_k_cc_a_2');
insert into games (game) values ('Count_k_cc_a_3');
insert into games (game) values ('Pad_k_oa_a_5');

--GAMES_ATTEMPTS

--****************************************************************
--***************************************************************
--****************** INSERTS  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= HELPER  ====================================
--==================================================================

--PASSWORDS !!!!!!!!!!!! LISTED BELOW BECAUSE THEY ARE HUGE !!!!!!!!!

--ERROR_LOG

--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--SCHOOLS

--USERS

--TEACHERS

--STUDENTS

--PERMISSIONS
insert into permissions(permission) values ('INSERT');       

--PERMISSIONS_USERS

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================


--****************************************
--		GAMES	
--****************************************

--****************************************
--		LEVELS	
--****************************************

--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
--GRADE #1
--			KINDERGARTEN             
--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
insert into grades (grade) values ('K'); --id = 1 

--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
--SUBJECT #1
--			MATH	
--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
insert into subjects (subject) values ('Math'); --id = 1

--START LEVEL
insert into levels(id,description) values (0,'Start of Journey');       

--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
--DOMAIN #1
--	Counting and Cardinality
--	K.CC
--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
insert into domains (domain) values ('Counting and Cardinality');   

-- DOMAIN_SUBJECTS #1
insert into domains_subjects (domain_id, subject_id) values (1,1); 

-- DOMAIN_GRADES #1
insert into domains_grades (domain_id, grade_id) values (1,1);     

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #1
--	Know number names and the count sequence.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Know number names and the count sequence.'); 

--CLUSTER_DOMAIN_GRADES #1
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (1,1);      


----------------------------------------------------------------------------
--STANDARD #1
--   	1.	 Count to 100 by ones and by tens.
----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_A_1','Count to 100 by ones and by tens.');  
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (1,1); 

insert into levels(id,description) values (1,'K_CC_A_1');          
insert into games_levels (level_id,game_id) values  (1,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1,1);      

insert into levels(id,description) values (1.01,'K_CC_A_1');         
insert into games_levels (level_id,game_id) values  (1.01,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.01,1);       

insert into levels(id,description) values (1.02,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.02,1);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.02,1);       

insert into levels(id,description) values (1.03,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.03,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.03,1);       

insert into levels(id,description) values (1.04,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.04,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.04,1);        

insert into levels(id,description) values (1.05,'K_CC_A_1');         
insert into games_levels (level_id,game_id) values  (1.05,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.05,1);        

insert into levels(id,description) values (1.06,'K_CC_A_1');         
insert into games_levels (level_id,game_id) values  (1.06,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.06,1);       

insert into levels(id,description) values (1.07,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.07,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.07,1);       

insert into levels(id,description) values (1.08,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.08,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.08,1);       

insert into levels(id,description) values (1.09,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.09,1);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.09,1);       

insert into levels(id,description) values (1.10,'K_CC_A_1');        
insert into games_levels (level_id,game_id) values  (1.10,1); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (1.10,1);     

--------------------------------------------------------------------------------
--STANDARD #2
--   	2.	 Count forward beginning from a given number within the known
--   	sequence (instead of having to begin at 1).
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_A_2','Count forward beginning from a given number within the known sequence (instead of having to begin at 1).'); 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (2,1);   

insert into levels(id,description) values (2,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2,2);       

insert into levels(id,description) values (2.01,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2.01,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2.01,2);       

insert into levels(id,description) values (2.02,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2.02,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2.02,2);       

insert into levels(id,description) values (2.03,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2.03,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2.03,2);       

insert into levels(id,description) values (2.04,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2.04,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2.04,2);       

insert into levels(id,description) values (2.05,'K_CC_A_2'); 
insert into games_levels (level_id,game_id) values  (2.05,2); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (2.05,2);       


--------------------------------------------------------------------------------
--STANDARD #3
--   	3.	 Write numbers from 0 to 20. Represent a number of objects with a
--	written numeral 0-20 (with 0 representing a count of no objects).
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_A_3','Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects.'); --id=3 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (3,1); --id=3 

insert into levels(id,description) values (3,'K_CC_A_3'); 
insert into games_levels (level_id,game_id) values  (3,3); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (3,3);       


--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #2
--	Count to tell the number of objects. 	
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Count to tell the number of objects.'); --2

--CLUSTERS_DOMAINS_GRADES #2
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (2,1);  

--------------------------------------------------------------------------------
--	4.	 Understand the relationship between numbers and quantities; connect
--	counting to cardinality.
--------------------------------------------------------------------------------
--Skip this as it is not a standard but a heading posing as a standard.

--------------------------------------------------------------------------------
--STANDARD #4
--	a.	 When counting objects, say the number names in the standard
--	order, pairing each object with one and only one number name
--	and each number name with one and only one object.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_B_4A','When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.'); 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (4,2); 

insert into levels(id,description) values (4,'K_CC_B_4A'); 
--insert into games_levels (level_id,game_id) values  (4,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (4,4);       

--------------------------------------------------------------------------------
--STANDARD #5
--	b.	 Understand that the last number name said tells the number of
--	objects counted. The number of objects is the same regardless of
--	their arrangement or the order in which they were counted.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_B_4B','Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.'); 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (5,2); 

insert into levels(id,description) values (5,'K_CC_B_4B'); 
--insert into games_levels (level_id,game_id) values  (5,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (5,5);       

--------------------------------------------------------------------------------
--STANDARD #6
--	c.	 Understand that each successive number name refers to a quantity
--	that is one larger.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_B_4C','Understand that each successive number name refers to a quantity that is one larger.'); 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (6,2); 

insert into levels(id,description) values (6,'K_CC_B_4C');
--insert into games_levels (level_id,game_id) values  (6,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (6,6);       

--------------------------------------------------------------------------------
--STANDARD #7
--	5.	 Count to answer “how many?” questions about as many as 20 things
--	arranged in a line, a rectangular array, or a circle, or as many as 10
--	things in a scattered configuration; given a number from 1–20, count
--	out that many objects.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_B_5','Count to answer “how many?” questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1–20, count out that many objects.'); 
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (7,2); 

insert into levels(id,description) values (7,'K_CC_B_5'); 
--insert into games_levels (level_id,game_id) values  (7,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (7,7);       

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #3
--	Compare numbers.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Compare numbers.');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (3,1); 

--------------------------------------------------------------------------------
--STANDARD #8
--	6.	 Identify whether the number of objects in one group is greater than,
--	less than, or equal to the number of objects in another group, e.g., by
--	using matching and counting strategies.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_C_6','Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies. Includes groups with up to ten objects.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (8,3);

insert into levels(id,description) values (8,'K_CC_C_6'); 
--insert into games_levels (level_id,game_id) values  (8,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (8,8);       


--------------------------------------------------------------------------------
--STANDARD #9
--	7.	 Compare two numbers between 1 and 10 presented as written
--	numerals.
--------------------------------------------------------------------------------
insert into standards (standard,description) values ('K_CC_C_7','Compare two numbers between 1 and 10 presented as written numerals.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (9,3);

insert into levels(id,description) values (9,'K_CC_C_7'); 
--insert into games_levels (level_id,game_id) values  (9,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (9,9);       





--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
--DOMAIN #2
--	Operations and Algebraic Thinking
--	K.OA	
--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
insert into domains (domain) values ('Operations and Algebraic Thinking'); 

--DOMAINS_SUBJECTS #2
insert into domains_subjects (domain_id, subject_id) values (2,1); 

--DOMAINS_GRADES #2
insert into domains_grades (domain_id, grade_id) values (2,1); 

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #4
--	Understand addition as putting together and adding to, and under-
--	stand subtraction as taking apart and taking from.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Understand addition as putting together and adding to, and understand subtraction as taking apart and taking from.');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (4,2); 

-----------------------------------------------------------------------------
--STANDARD #10
--	1.	 Represent addition and subtraction with objects, fingers, mental
--	images, drawings2, sounds (e.g., claps), acting out situations, verbal
--	explanations, expressions, or equations.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_OA_A_1','Compare two numbers between 1 and 10 presented as written numerals.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (10,4);

insert into levels(id,description) values (10,'K_OA_A_1'); 
--insert into games_levels (level_id,game_id) values  (10,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (10,10);       

-----------------------------------------------------------------------------
--STANDARD #11
--	2.	 Solve addition and subtraction word problems, and add and subtract
--	within 10, e.g., by using objects or drawings to represent the problem.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_OA_A_2','Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (11,4);

insert into levels(id,description) values (11,'K_OA_A_2'); 
--insert into games_levels (level_id,game_id) values  (11,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (11,11);       

-----------------------------------------------------------------------------
--STANDARD #12
--	3.	 Decompose numbers less than or equal to 10 into pairs in more
--	than one way, e.g., by using objects or drawings, and record each
--	decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1).
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_OA_A_3','Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each  decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (12,4);

insert into levels(id,description) values (12,'K_OA_A_3'); 
--insert into games_levels (level_id,game_id) values  (12,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (12,12);       
-----------------------------------------------------------------------------
--STANDARD #13
--	4.	 For any number from 1 to 9, find the number that makes 10 when
--	added to the given number, e.g., by using objects or drawings, and
--	record the answer with a drawing or equation.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_OA_A_4','For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (13,4);

insert into levels(id,description) values (13,'K_OA_A_4'); 
--insert into games_levels (level_id,game_id) values  (13,0); 
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (13,13);       

-----------------------------------------------------------------------------
--	5.	 Fluently add and subtract within 5.
-----------------------------------------------------------------------------

insert into standards (standard,description) values ('K_OA_A_5','Fluently add and subtract within 5.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (14,4);

insert into levels(id,description) values (14,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14,14);       

insert into levels(id,description) values (14.01,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.01,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.01,14);       

insert into levels(id,description) values (14.02,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.02,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.02,14);       

insert into levels(id,description) values (14.03,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.03,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.03,14);       

insert into levels(id,description) values (14.04,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.04,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.04,14);       

insert into levels(id,description) values (14.05,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.05,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.05,14);       

insert into levels(id,description) values (14.06,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.06,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.06,14);       

insert into levels(id,description) values (14.07,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.07,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.07,14);       

insert into levels(id,description) values (14.08,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.08,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.08,14);       

insert into levels(id,description) values (14.09,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.09,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.09,14);       

insert into levels(id,description) values (14.10,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.10,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.10,14);       

insert into levels(id,description) values (14.11,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.11,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.11,14);       

insert into levels(id,description) values (14.12,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.12,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.12,14);       

insert into levels(id,description) values (14.13,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.13,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.13,14);       

insert into levels(id,description) values (14.14,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.14,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.14,14);       

insert into levels(id,description) values (14.15,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.15,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.15,14);       

insert into levels(id,description) values (14.16,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.16,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.16,14);       

insert into levels(id,description) values (14.17,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.17,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.17,14);       

insert into levels(id,description) values (14.18,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.18,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.18,14);       

insert into levels(id,description) values (14.19,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.19,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.19,14);       

insert into levels(id,description) values (14.20,'K_OA_A_5');
insert into games_levels (level_id,game_id) values  (14.20,4);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (14.20,14);       


--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
-- DOMAIN #3 "The fiend was here."
--	Number and Operations in Base Ten
--	K.NBT	
--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
insert into domains (domain) values ('Number and Operations in Base Ten'); 
insert into domains_subjects (domain_id, subject_id) values (3,1); 
insert into domains_grades (domain_id, grade_id) values (3,1); 

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #5
--	Work with numbers 11–19 to gain foundations for place value.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Work with numbers 11-19 to gain foundations for place value');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (5,3); 

-----------------------------------------------------------------------------
--STANDARD #15
--	1.	 Compose and decompose numbers from 11 to 19 into ten ones and
--	some further ones, e.g., by using objects or drawings, and record each
--	composition or decomposition by a drawing or equation (e.g., 18 = 10 +
--	8); understand that these numbers are composed of ten ones and one,
--	two, three, four, five, six, seven, eight, or nine ones.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_NBT_A_1','Compose and decompose numbers from 11 to 19 into ten ones and some further ones. Understand that numbers 11 to 19 are made up of 1 ten and x amount of ones.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (15,5);

insert into levels(id,description) values (15,'K_NBT_A_1');
--insert into games_levels (level_id,game_id) values  (15,5);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (15,15);       


--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
--DOMAIN #4
--	Measurement and Data	
--	K.MD
--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
insert into domains (domain) values ('Measurement and Data'); 

--DOMAINS_SUBJECTS #4
insert into domains_subjects (domain_id, subject_id) values (4,1); 

--DOMAINS_GRADES #4
insert into domains_grades (domain_id, grade_id) values (4,1); 

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #6
--	Describe and compare measurable attributes.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Describe and compare measurable attributes');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (6,4); 

-----------------------------------------------------------------------------
--STANDARD #16
--	1.	 Describe measurable attributes of objects, such as length or weight.
--	Describe several measurable attributes of a single object.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_MD_A_1','Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (16,5);

insert into levels(id,description) values (16,'K_MD_A_1');
--insert into games_levels (level_id,game_id) values  (16,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (16,16);       


-----------------------------------------------------------------------------
--STANDARD #17
--	2.	 Directly compare two objects with a measurable attribute in common,
--	to see which object has “more of”/“less of” the attribute, and describe
--	the difference. For example, directly compare the heights of two
--	children and describe one child as taller/shorter.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_MD_A_2','Directly compare two objects with a measurable attribute in common...');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (17,6);

insert into levels(id,description) values (17,'K_MD_A_2');
--insert into games_levels (level_id,game_id) values  (17,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (17,17);       


--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #7
--	Classify objects and count the number of objects in each category.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Classify objects and count the number of objects in each category.');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (7,4); 


-----------------------------------------------------------------------------
--STANDARD #18
--	3.	 Classify objects into given categories; count the numbers of objects in
--	each category and sort the categories by count.3
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_MD_B_3','Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (18,7);

insert into levels(id,description) values (18,'K_MD_B_3');
--insert into games_levels (level_id,game_id) values  (18,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (18,18);       


--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
--DOMAIN #5
--	Geometry	
--	K.G
--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
insert into domains (domain) values ('Geometry'); 
insert into domains_subjects (domain_id, subject_id) values (5,1); 
insert into domains_grades (domain_id, grade_id) values (5,1); 


--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #8
--	Identify and describe shapes (squares, circles, triangles, rectangles,
--	hexagons, cubes, cones, cylinders, and spheres).
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Identify and describe shapes (squares, circles, triangles, rectangles, hexagons, cubes, cones, cylinders, and spheres).'); 
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (8,5); 


-----------------------------------------------------------------------------
--STANDARD #19
--	1.	 Describe objects in the environment using names of shapes, and
--	describe the relative positions of these objects using terms such as
--	above, below, beside, in front of, behind, and next to.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_A_1','Describe objects in the environment using names of shapes...');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (19,8);

insert into levels(id,description) values (19,'K_G_A_1');
--insert into games_levels (level_id,game_id) values  (19,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (19,19);       


-----------------------------------------------------------------------------
--STANDARD #20
--	2.	 Correctly name shapes regardless of their orientations or overall size.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_A_2','Correctly name shapes regardless of their orientations or overall size.');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (20,8);

insert into levels(id,description) values (20,'K_G_A_2');
--insert into games_levels (level_id,game_id) values  (20,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (20,20);       

-----------------------------------------------------------------------------
--STANDARD #21
--	3.	 Identify shapes as two-dimensional (lying in a plane, “flat”) or three-
--	dimensional (“solid”).
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_A_3','Identify shapes as two-dimensional....');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (21,8);

insert into levels(id,description) values (21,'K_G_A_3');
--insert into games_levels (level_id,game_id) values  (21,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (21,21);       

-----------------------------------------------------------------------------

--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
--CLUSTER #9
--	Analyze, compare, create, and compose shapes.
--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
insert into clusters (cluster) values ('Analyze, compare, create, and compose shapes.');
insert into clusters_domains_grades (cluster_id, domain_grade_id) values (9,5); 


-----------------------------------------------------------------------------
--STANDARD #22
--	4.	 Analyze and compare two- and three-dimensional shapes, in
--	different sizes and orientations, using informal language to describe
--	their similarities, differences, parts (e.g., number of sides and
--	vertices/“corners”) and other attributes (e.g., having sides of equal
--	length).
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_B_4','Analyze and compare two- and three-dimensional shapes...');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (22,9);

insert into levels(id,description) values (22,'K_G_B_4');
--insert into games_levels (level_id,game_id) values  (22,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (22,22);       


-----------------------------------------------------------------------------
--STANDARD #23
--	5.	 Model shapes in the world by building shapes from components (e.g.,
--	sticks and clay balls) and drawing shapes.
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_B_5','Model shapes in the world by building shapes from components...');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (23,9);

insert into levels(id,description) values (23,'K_G_B_5');
--insert into games_levels (level_id,game_id) values  (23,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (23,23);       


-----------------------------------------------------------------------------
--STANDARD #24
--	6.	 Compose simple shapes to form larger shapes. For example, “Can you
--	join these two triangles with full sides touching to make a rectangle?”
-----------------------------------------------------------------------------
insert into standards (standard,description) values ('K_G_B_6','Compose simple shapes to form..');
insert into standards_clusters_domains_grades (standard_id, cluster_domain_grade_id) values (24,9);

insert into levels(id,description) values (24,'K_G_B_6');
--insert into games_levels (level_id,game_id) values  (24,0);
insert into levels_standards_clusters_domains_grades(level_id, standard_cluster_domain_grade_id) values (24,24);       




----*****-----%%%%%%-----&&&&&&------######-------@@@@@ SKIP AHEAD SECTION FOR LEVELS

--(CONTINUED PASSWORDS).......

--PASSWORDS
--3 letter easy words
insert into passwords (password) values ('ahh'); 
insert into passwords (password) values ('abs'); 
insert into passwords (password) values ('ace'); 
insert into passwords (password) values ('add'); 
insert into passwords (password) values ('aft'); 
insert into passwords (password) values ('ape'); 
insert into passwords (password) values ('and'); 
insert into passwords (password) values ('aim'); 
insert into passwords (password) values ('aid'); 
insert into passwords (password) values ('air'); 
insert into passwords (password) values ('all'); 
insert into passwords (password) values ('amp'); 
insert into passwords (password) values ('ant'); 
insert into passwords (password) values ('app'); 
insert into passwords (password) values ('apt'); 
insert into passwords (password) values ('arc'); 
insert into passwords (password) values ('arf'); 
insert into passwords (password) values ('ark'); 
insert into passwords (password) values ('arm'); 
insert into passwords (password) values ('art'); 
insert into passwords (password) values ('ash'); 
insert into passwords (password) values ('ask'); 
insert into passwords (password) values ('ate'); 
insert into passwords (password) values ('ave'); 
insert into passwords (password) values ('awe'); 
insert into passwords (password) values ('axe'); 
insert into passwords (password) values ('aye'); 
insert into passwords (password) values ('ays'); 
/*
insert into passwords (password) values ('baa'); 
insert into passwords (password) values ('bad'); 
insert into passwords (password) values ('bag'); 
insert into passwords (password) values ('bam'); 
insert into passwords (password) values ('ban'); 
insert into passwords (password) values ('bap'); 
insert into passwords (password) values ('bar'); 
insert into passwords (password) values ('bat'); 
insert into passwords (password) values ('bay'); 
insert into passwords (password) values ('bed'); 
insert into passwords (password) values ('bee'); 
insert into passwords (password) values ('beg'); 
insert into passwords (password) values ('ben'); 
insert into passwords (password) values ('bet'); 
insert into passwords (password) values ('bib'); 
insert into passwords (password) values ('bid'); 
insert into passwords (password) values ('big'); 
insert into passwords (password) values ('bin'); 
insert into passwords (password) values ('bio'); 
insert into passwords (password) values ('bit'); 
insert into passwords (password) values ('biz'); 
insert into passwords (password) values ('boa'); 
insert into passwords (password) values ('bob'); 
insert into passwords (password) values ('bod'); 
insert into passwords (password) values ('bog'); 
insert into passwords (password) values ('boo'); 
insert into passwords (password) values ('bop'); 
insert into passwords (password) values ('bot'); 
insert into passwords (password) values ('bow'); 
insert into passwords (password) values ('box'); 
insert into passwords (password) values ('boy'); 
insert into passwords (password) values ('bro'); 
insert into passwords (password) values ('brr'); 
insert into passwords (password) values ('bub'); 
insert into passwords (password) values ('bud'); 
insert into passwords (password) values ('bug'); 
insert into passwords (password) values ('bum'); 
insert into passwords (password) values ('bun'); 
insert into passwords (password) values ('bur'); 
insert into passwords (password) values ('bus'); 
insert into passwords (password) values ('but'); 
insert into passwords (password) values ('buy'); 


insert into passwords (password) values ('cab'); 
insert into passwords (password) values ('cad'); 
insert into passwords (password) values ('cam'); 
insert into passwords (password) values ('can'); 
insert into passwords (password) values ('cap'); 
insert into passwords (password) values ('car'); 
insert into passwords (password) values ('cat'); 
insert into passwords (password) values ('caw'); 
insert into passwords (password) values ('cee'); 
insert into passwords (password) values ('cob'); 
insert into passwords (password) values ('cod'); 
insert into passwords (password) values ('cog'); 
insert into passwords (password) values ('col'); 
insert into passwords (password) values ('con'); 
insert into passwords (password) values ('coo'); 
insert into passwords (password) values ('cop'); 
insert into passwords (password) values ('cor'); 
insert into passwords (password) values ('cos'); 
insert into passwords (password) values ('cot'); 
insert into passwords (password) values ('cow'); 
insert into passwords (password) values ('coy'); 
insert into passwords (password) values ('coz'); 
insert into passwords (password) values ('cry'); 
insert into passwords (password) values ('cub'); 
insert into passwords (password) values ('cud'); 
insert into passwords (password) values ('cue'); 
insert into passwords (password) values ('cup'); 
insert into passwords (password) values ('cut'); 

insert into passwords (password) values ('dab'); 
insert into passwords (password) values ('dad'); 
insert into passwords (password) values ('dag'); 
insert into passwords (password) values ('dah'); 
insert into passwords (password) values ('dak'); 
insert into passwords (password) values ('dal'); 
insert into passwords (password) values ('dam'); 
insert into passwords (password) values ('dan'); 
insert into passwords (password) values ('dap'); 
insert into passwords (password) values ('daw'); 
insert into passwords (password) values ('day'); 
insert into passwords (password) values ('deb'); 
insert into passwords (password) values ('dee'); 
insert into passwords (password) values ('def'); 
insert into passwords (password) values ('del'); 
insert into passwords (password) values ('den'); 
insert into passwords (password) values ('dev'); 
insert into passwords (password) values ('dew'); 
insert into passwords (password) values ('dex'); 
insert into passwords (password) values ('dey'); 
insert into passwords (password) values ('dib'); 
insert into passwords (password) values ('did'); 
insert into passwords (password) values ('die'); 
insert into passwords (password) values ('dif'); 
insert into passwords (password) values ('dig'); 
insert into passwords (password) values ('dim'); 
insert into passwords (password) values ('din'); 
insert into passwords (password) values ('dip'); 
insert into passwords (password) values ('dis'); 
insert into passwords (password) values ('dit'); 
insert into passwords (password) values ('doc'); 
insert into passwords (password) values ('doe'); 
insert into passwords (password) values ('dog'); 
insert into passwords (password) values ('dol'); 
insert into passwords (password) values ('dom'); 
insert into passwords (password) values ('don'); 
insert into passwords (password) values ('dor'); 
insert into passwords (password) values ('dos'); 
insert into passwords (password) values ('dot'); 
insert into passwords (password) values ('dow'); 
insert into passwords (password) values ('dry'); 
insert into passwords (password) values ('dub'); 
insert into passwords (password) values ('dud'); 
insert into passwords (password) values ('due'); 
insert into passwords (password) values ('dug'); 
insert into passwords (password) values ('duh'); 
insert into passwords (password) values ('dun'); 
insert into passwords (password) values ('duo'); 
insert into passwords (password) values ('dup'); 
insert into passwords (password) values ('dye'); 

insert into passwords (password) values ('ear'); 
insert into passwords (password) values ('eat'); 
insert into passwords (password) values ('ebb'); 
insert into passwords (password) values ('eds'); 
insert into passwords (password) values ('eek'); 
insert into passwords (password) values ('eel'); 
insert into passwords (password) values ('egg'); 
insert into passwords (password) values ('ego'); 
insert into passwords (password) values ('eke'); 
insert into passwords (password) values ('eld'); 
insert into passwords (password) values ('elf'); 
insert into passwords (password) values ('elk'); 
insert into passwords (password) values ('ell'); 
insert into passwords (password) values ('elm'); 
insert into passwords (password) values ('end'); 
insert into passwords (password) values ('eon'); 
insert into passwords (password) values ('era'); 
insert into passwords (password) values ('ere'); 
insert into passwords (password) values ('err'); 
insert into passwords (password) values ('eve'); 
insert into passwords (password) values ('eye'); 

insert into passwords (password) values ('fab'); 
insert into passwords (password) values ('fad'); 
insert into passwords (password) values ('fan'); 
insert into passwords (password) values ('far'); 
insert into passwords (password) values ('fat'); 
insert into passwords (password) values ('fax'); 
insert into passwords (password) values ('fay'); 
insert into passwords (password) values ('fed'); 
insert into passwords (password) values ('fee'); 
insert into passwords (password) values ('fen'); 
insert into passwords (password) values ('fer'); 
insert into passwords (password) values ('fes'); 
insert into passwords (password) values ('fet'); 
insert into passwords (password) values ('few'); 
insert into passwords (password) values ('fey'); 
insert into passwords (password) values ('fez'); 
insert into passwords (password) values ('fib'); 
insert into passwords (password) values ('fid'); 
insert into passwords (password) values ('fie'); 
insert into passwords (password) values ('fig'); 
insert into passwords (password) values ('fin'); 
insert into passwords (password) values ('fir'); 
insert into passwords (password) values ('fit'); 
insert into passwords (password) values ('fix'); 
insert into passwords (password) values ('fiz'); 
insert into passwords (password) values ('flu'); 
insert into passwords (password) values ('fly'); 
insert into passwords (password) values ('fob'); 
insert into passwords (password) values ('foe'); 
insert into passwords (password) values ('fog'); 
insert into passwords (password) values ('foh'); 
insert into passwords (password) values ('fon'); 
insert into passwords (password) values ('fop'); 
insert into passwords (password) values ('for'); 
insert into passwords (password) values ('fox'); 
insert into passwords (password) values ('foy'); 
insert into passwords (password) values ('fro'); 
insert into passwords (password) values ('fry'); 
insert into passwords (password) values ('fub'); 
insert into passwords (password) values ('fud'); 
insert into passwords (password) values ('fun'); 
insert into passwords (password) values ('fur'); 

insert into passwords (password) values ('gab'); 
insert into passwords (password) values ('gad'); 
insert into passwords (password) values ('gag'); 
insert into passwords (password) values ('gal'); 
insert into passwords (password) values ('gam'); 
insert into passwords (password) values ('gan'); 
insert into passwords (password) values ('gap'); 
insert into passwords (password) values ('gar'); 
insert into passwords (password) values ('gas'); 
insert into passwords (password) values ('gat'); 
insert into passwords (password) values ('ged'); 
insert into passwords (password) values ('gee'); 
insert into passwords (password) values ('gel'); 
insert into passwords (password) values ('gem'); 
insert into passwords (password) values ('gen'); 
insert into passwords (password) values ('get'); 
insert into passwords (password) values ('gey'); 
insert into passwords (password) values ('gib'); 
insert into passwords (password) values ('gid'); 
insert into passwords (password) values ('gie'); 
insert into passwords (password) values ('gig'); 
insert into passwords (password) values ('gin'); 
insert into passwords (password) values ('gip'); 
insert into passwords (password) values ('git'); 
insert into passwords (password) values ('gnu'); 
insert into passwords (password) values ('goa'); 
insert into passwords (password) values ('gob'); 
insert into passwords (password) values ('god'); 
insert into passwords (password) values ('goo'); 
insert into passwords (password) values ('gor'); 
insert into passwords (password) values ('gos'); 
insert into passwords (password) values ('got'); 
insert into passwords (password) values ('gox'); 
insert into passwords (password) values ('goy'); 
insert into passwords (password) values ('gul'); 
insert into passwords (password) values ('gum'); 
insert into passwords (password) values ('gun'); 
insert into passwords (password) values ('gut'); 
insert into passwords (password) values ('guv'); 
insert into passwords (password) values ('guy'); 
insert into passwords (password) values ('gym'); 
insert into passwords (password) values ('gyp'); 

insert into passwords (password) values ('had'); 
insert into passwords (password) values ('hag'); 
insert into passwords (password) values ('hah'); 
insert into passwords (password) values ('ham'); 
insert into passwords (password) values ('hap'); 
insert into passwords (password) values ('has'); 
insert into passwords (password) values ('hat'); 
insert into passwords (password) values ('haw'); 
insert into passwords (password) values ('hay'); 
insert into passwords (password) values ('heh'); 
insert into passwords (password) values ('hem'); 
insert into passwords (password) values ('hen'); 
insert into passwords (password) values ('hep'); 
insert into passwords (password) values ('her'); 
insert into passwords (password) values ('hes'); 
insert into passwords (password) values ('hew'); 
insert into passwords (password) values ('hex'); 
insert into passwords (password) values ('hey'); 
insert into passwords (password) values ('hic'); 
insert into passwords (password) values ('hid'); 
insert into passwords (password) values ('hie'); 
insert into passwords (password) values ('him'); 
insert into passwords (password) values ('hin'); 
insert into passwords (password) values ('hip'); 
insert into passwords (password) values ('his'); 
insert into passwords (password) values ('hit'); 
insert into passwords (password) values ('hmm'); 
insert into passwords (password) values ('hob'); 
insert into passwords (password) values ('hod'); 
insert into passwords (password) values ('hoe'); 
insert into passwords (password) values ('hog'); 
insert into passwords (password) values ('hon'); 
insert into passwords (password) values ('hop'); 
insert into passwords (password) values ('hot'); 
insert into passwords (password) values ('how'); 
insert into passwords (password) values ('hoy'); 
insert into passwords (password) values ('hub'); 
insert into passwords (password) values ('hue'); 
insert into passwords (password) values ('hug'); 
insert into passwords (password) values ('huh'); 
insert into passwords (password) values ('hun'); 
insert into passwords (password) values ('hup'); 
insert into passwords (password) values ('hut'); 
insert into passwords (password) values ('hyp'); 

insert into passwords (password) values ('ice'); 
insert into passwords (password) values ('ich'); 
insert into passwords (password) values ('ick'); 
insert into passwords (password) values ('icy'); 
insert into passwords (password) values ('ids'); 
insert into passwords (password) values ('iff'); 
insert into passwords (password) values ('ifs'); 
insert into passwords (password) values ('igg'); 
insert into passwords (password) values ('ilk'); 
insert into passwords (password) values ('ill'); 
insert into passwords (password) values ('imp'); 
insert into passwords (password) values ('ink'); 
insert into passwords (password) values ('inn'); 
insert into passwords (password) values ('ins'); 
insert into passwords (password) values ('ion'); 
insert into passwords (password) values ('ire'); 
insert into passwords (password) values ('irk'); 
insert into passwords (password) values ('ism'); 
insert into passwords (password) values ('its'); 
insert into passwords (password) values ('ivy'); 

insert into passwords (password) values ('jab'); 
insert into passwords (password) values ('jag'); 
insert into passwords (password) values ('jam'); 
insert into passwords (password) values ('jar'); 
insert into passwords (password) values ('jaw'); 
insert into passwords (password) values ('jay'); 
insert into passwords (password) values ('jee'); 
insert into passwords (password) values ('jet'); 
insert into passwords (password) values ('jib'); 
insert into passwords (password) values ('jig'); 
insert into passwords (password) values ('jin'); 
insert into passwords (password) values ('job'); 
insert into passwords (password) values ('joe'); 
insert into passwords (password) values ('jog'); 
insert into passwords (password) values ('jot'); 
insert into passwords (password) values ('jow'); 
insert into passwords (password) values ('joy'); 
insert into passwords (password) values ('jug'); 
insert into passwords (password) values ('jun'); 
insert into passwords (password) values ('jus'); 
insert into passwords (password) values ('jut'); 

insert into passwords (password) values ('kab'); 
insert into passwords (password) values ('kae'); 
insert into passwords (password) values ('kaf'); 
insert into passwords (password) values ('kas'); 
insert into passwords (password) values ('kat'); 
insert into passwords (password) values ('kea'); 
insert into passwords (password) values ('keg'); 
insert into passwords (password) values ('ken'); 
insert into passwords (password) values ('kep'); 
insert into passwords (password) values ('kex'); 
insert into passwords (password) values ('key'); 
insert into passwords (password) values ('kid'); 
insert into passwords (password) values ('kin'); 
insert into passwords (password) values ('kip'); 
insert into passwords (password) values ('kis'); 
insert into passwords (password) values ('kit'); 
insert into passwords (password) values ('koa'); 
insert into passwords (password) values ('kob'); 
insert into passwords (password) values ('koi'); 
insert into passwords (password) values ('kop'); 
insert into passwords (password) values ('kor'); 
insert into passwords (password) values ('kos'); 
insert into passwords (password) values ('lab'); 
insert into passwords (password) values ('lad'); 
insert into passwords (password) values ('lag'); 
insert into passwords (password) values ('lam'); 
insert into passwords (password) values ('lap'); 
insert into passwords (password) values ('lar'); 
insert into passwords (password) values ('las'); 
insert into passwords (password) values ('lat'); 
insert into passwords (password) values ('lav'); 
insert into passwords (password) values ('law'); 
insert into passwords (password) values ('lax'); 
insert into passwords (password) values ('lay'); 
insert into passwords (password) values ('lea'); 
insert into passwords (password) values ('led'); 
insert into passwords (password) values ('lee'); 
insert into passwords (password) values ('leg'); 
insert into passwords (password) values ('lei'); 
insert into passwords (password) values ('lek'); 
insert into passwords (password) values ('let'); 
insert into passwords (password) values ('lex'); 
insert into passwords (password) values ('ley'); 
insert into passwords (password) values ('lib'); 
insert into passwords (password) values ('lid'); 
insert into passwords (password) values ('lie'); 
insert into passwords (password) values ('lin'); 
insert into passwords (password) values ('lip'); 
insert into passwords (password) values ('lit'); 
insert into passwords (password) values ('lob'); 
insert into passwords (password) values ('log'); 
insert into passwords (password) values ('loo'); 
insert into passwords (password) values ('lop'); 
insert into passwords (password) values ('lot'); 
insert into passwords (password) values ('low'); 
insert into passwords (password) values ('lox'); 
insert into passwords (password) values ('lug'); 
insert into passwords (password) values ('lum'); 
insert into passwords (password) values ('luv'); 
insert into passwords (password) values ('lux'); 
insert into passwords (password) values ('lye'); 

insert into passwords (password) values ('mac'); 
insert into passwords (password) values ('mad'); 
insert into passwords (password) values ('mae'); 
insert into passwords (password) values ('mag'); 
insert into passwords (password) values ('man'); 
insert into passwords (password) values ('map'); 
insert into passwords (password) values ('mar'); 
insert into passwords (password) values ('mas'); 
insert into passwords (password) values ('mat'); 
insert into passwords (password) values ('maw'); 
insert into passwords (password) values ('max'); 
insert into passwords (password) values ('may'); 
insert into passwords (password) values ('med'); 
insert into passwords (password) values ('mel'); 
insert into passwords (password) values ('men'); 
insert into passwords (password) values ('met'); 
insert into passwords (password) values ('mew'); 
insert into passwords (password) values ('mib'); 
insert into passwords (password) values ('mic'); 
insert into passwords (password) values ('mid'); 
insert into passwords (password) values ('mig'); 
insert into passwords (password) values ('mil'); 
insert into passwords (password) values ('mim'); 
insert into passwords (password) values ('mir'); 
insert into passwords (password) values ('mis'); 
insert into passwords (password) values ('mix'); 
insert into passwords (password) values ('moa'); 
insert into passwords (password) values ('mob'); 
insert into passwords (password) values ('moc'); 
insert into passwords (password) values ('mod'); 
insert into passwords (password) values ('mog'); 
insert into passwords (password) values ('mol'); 
insert into passwords (password) values ('mom'); 
insert into passwords (password) values ('mon'); 
insert into passwords (password) values ('moo'); 
insert into passwords (password) values ('mop'); 
insert into passwords (password) values ('mor'); 
insert into passwords (password) values ('mos'); 
insert into passwords (password) values ('mot'); 
insert into passwords (password) values ('mow'); 
insert into passwords (password) values ('mud'); 
insert into passwords (password) values ('mug'); 
insert into passwords (password) values ('mum'); 
insert into passwords (password) values ('mun'); 
insert into passwords (password) values ('mut'); 

insert into passwords (password) values ('nab'); 
insert into passwords (password) values ('nag'); 
insert into passwords (password) values ('nah'); 
insert into passwords (password) values ('nam'); 
insert into passwords (password) values ('nan'); 
insert into passwords (password) values ('nap'); 
insert into passwords (password) values ('naw'); 
insert into passwords (password) values ('nay'); 
insert into passwords (password) values ('neb'); 
insert into passwords (password) values ('nee'); 
insert into passwords (password) values ('neg'); 
insert into passwords (password) values ('net'); 
insert into passwords (password) values ('new'); 
insert into passwords (password) values ('nib'); 
insert into passwords (password) values ('nil'); 
insert into passwords (password) values ('nim'); 
insert into passwords (password) values ('nip'); 
insert into passwords (password) values ('nit'); 
insert into passwords (password) values ('nix'); 
insert into passwords (password) values ('nob'); 
insert into passwords (password) values ('nod'); 
insert into passwords (password) values ('nog'); 
insert into passwords (password) values ('nom'); 
insert into passwords (password) values ('noo'); 
insert into passwords (password) values ('nor'); 
insert into passwords (password) values ('nos'); 
insert into passwords (password) values ('not'); 
insert into passwords (password) values ('now'); 
insert into passwords (password) values ('nub'); 
insert into passwords (password) values ('nun'); 
insert into passwords (password) values ('nut'); 

insert into passwords (password) values ('oaf'); 
insert into passwords (password) values ('oak'); 
insert into passwords (password) values ('oar'); 
insert into passwords (password) values ('oat'); 
insert into passwords (password) values ('obe'); 
insert into passwords (password) values ('odd'); 
insert into passwords (password) values ('off'); 
insert into passwords (password) values ('oil'); 
insert into passwords (password) values ('old'); 
insert into passwords (password) values ('one'); 
insert into passwords (password) values ('ono'); 
insert into passwords (password) values ('opt'); 
insert into passwords (password) values ('orc'); 
insert into passwords (password) values ('ore'); 
insert into passwords (password) values ('our'); 
insert into passwords (password) values ('out'); 
insert into passwords (password) values ('owe'); 
insert into passwords (password) values ('owl'); 
insert into passwords (password) values ('own'); 
insert into passwords (password) values ('oxy'); 

insert into passwords (password) values ('pac'); 
insert into passwords (password) values ('pad'); 
insert into passwords (password) values ('pal'); 
insert into passwords (password) values ('pam'); 
insert into passwords (password) values ('pan'); 
insert into passwords (password) values ('pap'); 
insert into passwords (password) values ('par'); 
insert into passwords (password) values ('pas'); 
insert into passwords (password) values ('pat'); 
insert into passwords (password) values ('paw'); 
insert into passwords (password) values ('pax'); 
insert into passwords (password) values ('pay'); 
insert into passwords (password) values ('pec'); 
insert into passwords (password) values ('ped'); 
insert into passwords (password) values ('peg'); 
insert into passwords (password) values ('pen'); 
insert into passwords (password) values ('pep'); 
insert into passwords (password) values ('per'); 
insert into passwords (password) values ('pes'); 
insert into passwords (password) values ('pet'); 
insert into passwords (password) values ('pew'); 
insert into passwords (password) values ('pic'); 
insert into passwords (password) values ('pie'); 
insert into passwords (password) values ('pig'); 
insert into passwords (password) values ('pin'); 
insert into passwords (password) values ('pip'); 
insert into passwords (password) values ('pit'); 
insert into passwords (password) values ('ply'); 
insert into passwords (password) values ('pod'); 
insert into passwords (password) values ('pol'); 
insert into passwords (password) values ('pom'); 
insert into passwords (password) values ('pop'); 
insert into passwords (password) values ('pot'); 
insert into passwords (password) values ('pow'); 
insert into passwords (password) values ('pox'); 
insert into passwords (password) values ('pro'); 
insert into passwords (password) values ('pry'); 
insert into passwords (password) values ('pug'); 
insert into passwords (password) values ('pun'); 
insert into passwords (password) values ('pup'); 
insert into passwords (password) values ('pur'); 
insert into passwords (password) values ('put'); 

insert into passwords (password) values ('rad'); 
insert into passwords (password) values ('rag'); 
insert into passwords (password) values ('rah'); 
insert into passwords (password) values ('raj'); 
insert into passwords (password) values ('ram'); 
insert into passwords (password) values ('ran'); 
insert into passwords (password) values ('rap'); 
insert into passwords (password) values ('rat'); 
insert into passwords (password) values ('raw'); 
insert into passwords (password) values ('rax'); 
insert into passwords (password) values ('ray'); 
insert into passwords (password) values ('reb'); 
insert into passwords (password) values ('rec'); 
insert into passwords (password) values ('red'); 
insert into passwords (password) values ('ref'); 
insert into passwords (password) values ('reg'); 
insert into passwords (password) values ('rem'); 
insert into passwords (password) values ('rep'); 
insert into passwords (password) values ('res'); 
insert into passwords (password) values ('ret'); 
insert into passwords (password) values ('rev'); 
insert into passwords (password) values ('rex'); 
insert into passwords (password) values ('rib'); 
insert into passwords (password) values ('rid'); 
insert into passwords (password) values ('rif'); 
insert into passwords (password) values ('rig'); 
insert into passwords (password) values ('rim'); 
insert into passwords (password) values ('rin'); 
insert into passwords (password) values ('rip'); 
insert into passwords (password) values ('rob'); 
insert into passwords (password) values ('roc'); 
insert into passwords (password) values ('rod'); 
insert into passwords (password) values ('rom'); 
insert into passwords (password) values ('rot'); 
insert into passwords (password) values ('row'); 
insert into passwords (password) values ('rub'); 
insert into passwords (password) values ('rue'); 
insert into passwords (password) values ('rug'); 
insert into passwords (password) values ('run'); 
insert into passwords (password) values ('rut'); 
insert into passwords (password) values ('rye'); 

insert into passwords (password) values ('sab'); 
insert into passwords (password) values ('sac'); 
insert into passwords (password) values ('sad'); 
insert into passwords (password) values ('sag'); 
insert into passwords (password) values ('sal'); 
insert into passwords (password) values ('sap'); 
insert into passwords (password) values ('sat'); 
insert into passwords (password) values ('saw'); 
insert into passwords (password) values ('sax'); 
insert into passwords (password) values ('say'); 
insert into passwords (password) values ('sea'); 
insert into passwords (password) values ('sec'); 
insert into passwords (password) values ('see'); 
insert into passwords (password) values ('set'); 
insert into passwords (password) values ('sew'); 
insert into passwords (password) values ('she'); 
insert into passwords (password) values ('shy'); 
insert into passwords (password) values ('sib'); 
insert into passwords (password) values ('sic'); 
insert into passwords (password) values ('sim'); 
insert into passwords (password) values ('sin'); 
insert into passwords (password) values ('sip'); 
insert into passwords (password) values ('sir'); 
insert into passwords (password) values ('sis'); 
insert into passwords (password) values ('sit'); 
insert into passwords (password) values ('six'); 
insert into passwords (password) values ('ska'); 
insert into passwords (password) values ('ski'); 
insert into passwords (password) values ('sky'); 
insert into passwords (password) values ('sly'); 
insert into passwords (password) values ('sob'); 
insert into passwords (password) values ('sod'); 
insert into passwords (password) values ('sol'); 
insert into passwords (password) values ('son'); 
insert into passwords (password) values ('sop'); 
insert into passwords (password) values ('sos'); 
insert into passwords (password) values ('sow'); 
insert into passwords (password) values ('sox'); 
insert into passwords (password) values ('soy'); 
insert into passwords (password) values ('spa'); 
insert into passwords (password) values ('spy'); 
insert into passwords (password) values ('sub'); 
insert into passwords (password) values ('sue'); 
insert into passwords (password) values ('sum'); 
insert into passwords (password) values ('sun'); 
insert into passwords (password) values ('sup'); 
insert into passwords (password) values ('syn'); 
insert into passwords (password) values ('tab'); 
insert into passwords (password) values ('tad'); 
insert into passwords (password) values ('tag'); 
insert into passwords (password) values ('taj'); 
insert into passwords (password) values ('tam'); 
insert into passwords (password) values ('tan'); 
insert into passwords (password) values ('tao'); 
insert into passwords (password) values ('tap'); 
insert into passwords (password) values ('tar'); 
insert into passwords (password) values ('tat'); 
insert into passwords (password) values ('taw'); 
insert into passwords (password) values ('tax'); 
insert into passwords (password) values ('tea'); 
insert into passwords (password) values ('ted'); 
insert into passwords (password) values ('tee'); 
insert into passwords (password) values ('teg'); 
insert into passwords (password) values ('tel'); 
insert into passwords (password) values ('ten'); 
insert into passwords (password) values ('the'); 
insert into passwords (password) values ('thy'); 
insert into passwords (password) values ('tic'); 
insert into passwords (password) values ('tie'); 
insert into passwords (password) values ('til'); 
insert into passwords (password) values ('tin'); 
insert into passwords (password) values ('tip'); 
insert into passwords (password) values ('tis'); 
insert into passwords (password) values ('tod'); 
insert into passwords (password) values ('toe'); 
insert into passwords (password) values ('tog'); 
insert into passwords (password) values ('tom'); 
insert into passwords (password) values ('ton'); 
insert into passwords (password) values ('too'); 
insert into passwords (password) values ('top'); 
insert into passwords (password) values ('tor'); 
insert into passwords (password) values ('tot'); 
insert into passwords (password) values ('tow'); 
insert into passwords (password) values ('toy'); 
insert into passwords (password) values ('try'); 
insert into passwords (password) values ('tub'); 
insert into passwords (password) values ('tug'); 
insert into passwords (password) values ('tun'); 
insert into passwords (password) values ('tup'); 
insert into passwords (password) values ('tut'); 
insert into passwords (password) values ('tux'); 
insert into passwords (password) values ('two'); 
insert into passwords (password) values ('tye'); 
insert into passwords (password) values ('ugh'); 
insert into passwords (password) values ('uke'); 
insert into passwords (password) values ('ulu'); 
insert into passwords (password) values ('umm'); 
insert into passwords (password) values ('ump'); 
insert into passwords (password) values ('upo'); 
insert into passwords (password) values ('use'); 
insert into passwords (password) values ('vac'); 
insert into passwords (password) values ('van'); 
insert into passwords (password) values ('var'); 
insert into passwords (password) values ('vas'); 
insert into passwords (password) values ('vat'); 
insert into passwords (password) values ('veg'); 
insert into passwords (password) values ('vet'); 
insert into passwords (password) values ('vex'); 
insert into passwords (password) values ('via'); 
insert into passwords (password) values ('vid'); 
insert into passwords (password) values ('vie'); 
insert into passwords (password) values ('vim'); 
insert into passwords (password) values ('vis'); 
insert into passwords (password) values ('voe'); 
insert into passwords (password) values ('vow'); 
insert into passwords (password) values ('vox'); 
insert into passwords (password) values ('vug'); 
insert into passwords (password) values ('vum'); 
insert into passwords (password) values ('wab'); 
insert into passwords (password) values ('wad'); 
insert into passwords (password) values ('wag'); 
insert into passwords (password) values ('wan'); 
insert into passwords (password) values ('wap'); 
insert into passwords (password) values ('war'); 
insert into passwords (password) values ('was'); 
insert into passwords (password) values ('wat'); 
insert into passwords (password) values ('wax'); 
insert into passwords (password) values ('way'); 
insert into passwords (password) values ('web'); 
insert into passwords (password) values ('wed'); 
insert into passwords (password) values ('wee'); 
insert into passwords (password) values ('wet'); 
insert into passwords (password) values ('wha'); 
insert into passwords (password) values ('who'); 
insert into passwords (password) values ('why'); 
insert into passwords (password) values ('wig'); 
insert into passwords (password) values ('win'); 
insert into passwords (password) values ('wis'); 
insert into passwords (password) values ('wit'); 
insert into passwords (password) values ('wiz'); 
insert into passwords (password) values ('woe'); 
insert into passwords (password) values ('wok'); 
insert into passwords (password) values ('won'); 
insert into passwords (password) values ('woo'); 
insert into passwords (password) values ('wot'); 
insert into passwords (password) values ('wow'); 
insert into passwords (password) values ('wry'); 
insert into passwords (password) values ('wud'); 
insert into passwords (password) values ('wyn'); 
insert into passwords (password) values ('yag'); 
insert into passwords (password) values ('yah'); 
insert into passwords (password) values ('yak'); 
insert into passwords (password) values ('yam'); 
insert into passwords (password) values ('yap'); 
insert into passwords (password) values ('yar'); 
insert into passwords (password) values ('yaw'); 
insert into passwords (password) values ('yay'); 
insert into passwords (password) values ('yea'); 
insert into passwords (password) values ('yen'); 
insert into passwords (password) values ('yep'); 
insert into passwords (password) values ('yes'); 
insert into passwords (password) values ('yet'); 
insert into passwords (password) values ('yew'); 
insert into passwords (password) values ('yin'); 
insert into passwords (password) values ('yip'); 
insert into passwords (password) values ('yob'); 
insert into passwords (password) values ('yok'); 
insert into passwords (password) values ('yom'); 
insert into passwords (password) values ('yon'); 
insert into passwords (password) values ('you'); 
insert into passwords (password) values ('yow'); 
insert into passwords (password) values ('yuk'); 
insert into passwords (password) values ('yum'); 
insert into passwords (password) values ('yup'); 
insert into passwords (password) values ('zag'); 
insert into passwords (password) values ('zap'); 
insert into passwords (password) values ('zas'); 
insert into passwords (password) values ('zax'); 
insert into passwords (password) values ('zed'); 
insert into passwords (password) values ('zee'); 
insert into passwords (password) values ('zek'); 
insert into passwords (password) values ('zep'); 
insert into passwords (password) values ('zig'); 
insert into passwords (password) values ('zin'); 
insert into passwords (password) values ('zip'); 
insert into passwords (password) values ('zoa'); 
insert into passwords (password) values ('zuz'); 
insert into passwords (password) values ('zzz'); 
*/
--------------------REVOKE AND GRANT---------------------------------------
REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;

--
-- PostgreSQL database dump complete
--

--select * from clusters;
--select students.id,  users.username, users.password, users.first_name, users.last_name from students join users on students.id = users.id where users.school_id = 
--select clusters_domains.cluster_id from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_domains.domain_id = 1; 
--select clusters_domains.cluster_id from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_domains.domain_id = 2; 
--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 


--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 
--add standards_grades standards_domains.

--select standards.standard from clusters_domains join clusters_grades on clusters_domains.cluster_id = clusters_grades.cluster_id where clusters_grades.grade_id = 1; 

--select standards_clusters.standard_id, standards_clusters.cluster_id  from standards_clusters, clusters_grades, clusters_domains where standards_clusters.cluster_id = clusters_grades.cluster_id and clusters_grades.cluster_id = clusters_domains.cluster_id  and clusters_grades.grade_id = 1 and clusters_domains.domain_id = 1; 












