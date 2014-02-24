--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE students cascade;
DROP TABLE users cascade;
DROP TABLE schools cascade;

--==================================================================
--=========================== CORE CURRICULUM  ========================
--==================================================================
DROP TABLE learning_standards;
DROP TABLE level_transactions;
DROP TABLE LevelAttempts;

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
    	school_id integer NOT NULL,
    	ref_id text NOT NULL default 'CA9EE2E34F384E95A5FA26769C5864B8',
	level integer NOT NULL default 1 
);

--alter
alter table users add column failed_attempts integer NOT NULL default 0;

--STUDENTS
CREATE TABLE students (
    id integer NOT NULL,
    teacher_id integer 
);


--==================================================================
--==================== CORE CURRICULUM  ========================
--==================================================================
--LEARNING_STANDARDS
CREATE TABLE learning_standards (
	id text NOT NULL UNIQUE,
	ref_id text NOT NULL UNIQUE,
	progression NUMERIC(9,3) NOT NULL, -- for us to determine order
	levels integer NOT NULL -- for us to determine number of levels till next LearningStandard	
);	
alter table learning_standards add column standard text;


--LEVEL_ATTEMPTS
CREATE TABLE LevelAttempts (
	id integer NOT NULL,
    	start_time timestamp,
    	end_time timestamp,
    	user_id integer NOT NULL,
    	level integer NOT NULL, 
    	ref_id text NOT NULL, --FK 
	score integer DEFAULT 0 NOT NULL,
	time_warning boolean DEFAULT false NOT NULL,
	passed boolean DEFAULT false NOT NULL
);

--LEVEL_TRANSACTIONS
CREATE TABLE level_transactions (
        id integer NOT NULL,
        transaction_time timestamp,
        user_id integer NOT NULL,
        level integer NOT NULL,
        ref_id text NOT NULL --FK
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

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--LEVELS_ATTEMPTS
CREATE SEQUENCE level_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--LEVEL_TRANSACTIONS
CREATE SEQUENCE level_transactions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--****************************************************************
--***************************************************************
--****************** ALTER OWNER  *************************

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

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--LEVEL_ATTEMPTS
ALTER TABLE public.level_attempts_id_seq OWNER TO postgres;
ALTER SEQUENCE level_attempts_id_seq OWNED BY LevelAttempts.id;
ALTER TABLE ONLY LevelAttempts ALTER COLUMN id SET DEFAULT nextval('level_attempts_id_seq'::regclass);

--LEVEL_TRANSACTIONS
ALTER TABLE public.level_transactions_id_seq OWNER TO postgres;
ALTER SEQUENCE level_transactions_id_seq OWNED BY Level_transactions.id;
ALTER TABLE ONLY level_transactions ALTER COLUMN id SET DEFAULT nextval('level_transactions_id_seq'::regclass);

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

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--LEVEL_ATTEMPTS
ALTER TABLE LevelAttempts ADD PRIMARY KEY (id);

ALTER TABLE level_transactions ADD PRIMARY KEY (id);

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

--==================================================================
--================= CORE CURRICULUM  ====================================
--==================================================================

--****************************************************************
--***************************************************************
--****************** UNIQUE CONSTRAINT  *************************
--**************************************************************
--**************************************************************

--==================================================================
--================= PEOPLE  ====================================
--==================================================================

--USERS
ALTER TABLE users ADD UNIQUE (username,school_id);

