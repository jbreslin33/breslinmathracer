

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
DROP TABLE levels_transactions;
DROP TABLE levels_standards cascade;
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
DROP TABLE LearningStandards;
DROP TABLE LevelAttempts;

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
--LEARNING_STANDARDS
CREATE TABLE LearningStandards (
	RefID text NOT NULL UNIQUE,
	progression NUMERIC(9,3) NOT NULL, -- for us to determine order
	levels integer NOT NULL -- for us to determine number of levels till next LearningStandard	
);	

--LEVEL_ATTEMPTS
CREATE TABLE LevelAttempts (
	id integer NOT NULL,
    	start_time timestamp,
    	end_time timestamp,
    	user_id integer NOT NULL,
    	level integer NOT NULL, 
    	standard_id integer NOT NULL, 
	score integer DEFAULT 0 NOT NULL,
	time_warning boolean DEFAULT false NOT NULL,
	passed boolean DEFAULT false NOT NULL
);



--*************************
--GRADE
CREATE TABLE grades (
    id integer NOT NULL,
    grade text UNIQUE 
);

--*************************
--SUBJECTS
CREATE TABLE subjects (
    id integer NOT NULL,
    subject text NOT NULL UNIQUE
);

--*************************
--DOMAINS
CREATE TABLE domains (
    id integer NOT NULL,
    domain text NOT NULL UNIQUE
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
    cluster text NOT NULL UNIQUE -- Know number names and the count sequence. | Key ideas and details 
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
    standard text NOT NULL UNIQUE,
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

--LEVELS_TRANSACTIONS
CREATE TABLE levels_transactions (
    id integer NOT NULL,
    advancement_time timestamp,
    level_id NUMERIC(9,3) NOT NULL,
    user_id integer NOT NULL
);

--LEVELS
CREATE TABLE levels (
    id NUMERIC(9,3) NOT NULL UNIQUE, 
    description text NOT NULL
);

--LEVELS_STANDARDS
CREATE TABLE levels_standards (
    id integer NOT NULL,
    level_id NUMERIC(9,3) NOT NULL,
    standard_id integer NOT NULL
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
    level_id NUMERIC(9,3) NOT NULL
);

--GAMES_ATTEMPTS
CREATE TABLE games_attempts (
    id integer NOT NULL,
    game_attempt_time_start timestamp,
    game_attempt_time_end timestamp,
    user_id integer NOT NULL,
    level_id NUMERIC(9,3) NOT NULL, --should this be standard_id?
	score integer DEFAULT 0 NOT NULL,
	time_warning boolean DEFAULT false NOT NULL
);


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
--LEVELS_TRANSACTIONS
CREATE SEQUENCE levels_transactions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--LEVELS_STANDARDS
CREATE SEQUENCE levels_standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

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
--LEVELS_TRANSACTIONS
ALTER TABLE public.levels_transactions OWNER TO postgres;

--LEVELS
ALTER TABLE public.levels OWNER TO postgres;

--LEVELS_STANDARDS
ALTER TABLE public.levels_standards OWNER TO postgres;

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
--LEVELS_TRANSACTIONS
ALTER TABLE public.levels_transactions_id_seq OWNER TO postgres;
ALTER SEQUENCE levels_transactions_id_seq OWNED BY levels_transactions.id;
ALTER TABLE ONLY levels_transactions ALTER COLUMN id SET DEFAULT nextval('levels_transactions_id_seq'::regclass);

--LEVELS_STANDARDS
ALTER TABLE public.levels_standards_id_seq OWNER TO postgres;
ALTER SEQUENCE levels_standards_id_seq OWNED BY levels_standards.id;
ALTER TABLE ONLY levels_standards ALTER COLUMN id SET DEFAULT nextval('levels_standards_id_seq'::regclass);

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
--LEVELS_TRANSACTIONS
ALTER TABLE levels_transactions ADD PRIMARY KEY (id);

--LEVELS
ALTER TABLE levels ADD PRIMARY KEY (id);

--LEVELS_STANDARDS
ALTER TABLE levels_standards ADD PRIMARY KEY (id);
ALTER TABLE levels_standards ADD UNIQUE (level_id,standard_id);

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

--==================================================================
--LEVELS_TRANSACTIONS
ALTER TABLE levels_transactions ADD FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE levels_transactions ADD FOREIGN KEY (level_id) REFERENCES levels(id);
ALTER TABLE levels_transactions ADD UNIQUE (advancement_time,level_id,user_id);

--LEVELS_STANDARDS
ALTER TABLE levels_standards ADD FOREIGN KEY (level_id) REFERENCES levels(id);
ALTER TABLE levels_standards ADD FOREIGN KEY (standard_id) REFERENCES standards(id);

--==================================================================
--================= GAMES  ====================================
--==================================================================
--GAMES_LEVELS
ALTER TABLE games_levels ADD FOREIGN KEY (game_id) REFERENCES games(id);
ALTER TABLE games_levels ADD FOREIGN KEY (level_id) REFERENCES levels(id);
ALTER TABLE games_levels ADD UNIQUE (level_id,game_id);

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
