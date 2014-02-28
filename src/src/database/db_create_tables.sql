--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE users cascade;

DROP TABLE learning_standards;
DROP TABLE LevelAttempts;

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

--ERROR_LOG
CREATE SEQUENCE error_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

--USERS
CREATE SEQUENCE users_id_seq
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

--ERROR_LOG
ALTER TABLE public.error_log OWNER TO postgres;

--USERS
ALTER TABLE public.users OWNER TO postgres;

--ERROR_LOG
ALTER TABLE public.error_log_id_seq OWNER TO postgres;
ALTER SEQUENCE error_log_id_seq OWNED BY error_log.id;
ALTER TABLE ONLY error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);

--==================================================================
--================= PEOPLE   ====================================
--==================================================================

--USERS
ALTER TABLE public.users_id_seq OWNER TO postgres;
ALTER SEQUENCE users_id_seq OWNED BY users.id;
ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);

--LEVEL_ATTEMPTS
ALTER TABLE public.level_attempts_id_seq OWNER TO postgres;
ALTER SEQUENCE level_attempts_id_seq OWNED BY LevelAttempts.id;
ALTER TABLE ONLY LevelAttempts ALTER COLUMN id SET DEFAULT nextval('level_attempts_id_seq'::regclass);

--ERROR_LOG
ALTER TABLE error_log ADD PRIMARY KEY (id);

--USERS
ALTER TABLE users ADD PRIMARY KEY (id);

--LEVEL_ATTEMPTS
ALTER TABLE LevelAttempts ADD PRIMARY KEY (id);

--USERS
ALTER TABLE users ADD FOREIGN KEY (school_id) REFERENCES users(id);
