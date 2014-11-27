--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE error_log cascade; 
DROP TABLE item_attempts;
DROP TABLE levelattempts;

DROP TABLE learning_standards;
DROP TABLE core_standards;

DROP TABLE evaluation_attempts;

DROP TABLE users cascade;

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
CREATE TABLE error_log
(
	id SERIAL,
    	error text,
    	error_time timestamp,
    	username text,
	PRIMARY KEY (id) 	
);

--USERS
CREATE TABLE users (
	id SERIAL,
    	username text, 
    	password text,
    	first_name text,
    	middle_name1 text,
    	middle_name2 text,
    	middle_name3 text,
    	last_name text,
    	school_id integer NOT NULL,
    	last_activity timestamp,
    	score integer NOT NULL default 0,
    	umastered integer NOT NULL default 0,
	PRIMARY KEY (id) 	
	--FOREIGN KEY (school_id) REFERENCES users(id)
);

--==================================================================
--==================== CORE CURRICULUM  ========================
--==================================================================

CREATE TABLE core_standards (
        id text NOT NULL UNIQUE,
	description text,	
	subject_id integer default 1,
	PRIMARY KEY (id) 	
);

CREATE TABLE learning_standards (
        id text NOT NULL UNIQUE,
	progression NUMERIC(9,3) NOT NULL, -- for us to determine order
	levels integer NOT NULL, -- for us to determine number of levels till next LearningStandard	
	core_standards_id text NOT NULL,
	PRIMARY KEY (id),	
	FOREIGN KEY (core_standards_id) REFERENCES core_standards(id)
);	

CREATE TABLE levelattempts (
	id SERIAL,
    	start_time timestamp,
    	end_time timestamp,
    	user_id integer NOT NULL,
    	level integer NOT NULL, 
    	learning_standards_id text NOT NULL,  
	transaction_code integer DEFAULT 0 NOT NULL,
	score integer DEFAULT 0 NOT NULL,
	score_needed integer DEFAULT 0 NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (learning_standards_id) REFERENCES learning_standards(id)
);

--ITEM_ATTEMPTS
CREATE TABLE item_attempts (
        id SERIAL,
        start_time timestamp,
        end_time timestamp,
	levelattempts_id integer NOT NULL,
	type_id integer DEFAULT 0 NOT NULL, -- 0 means no type identified
        transaction_code integer DEFAULT 0 NOT NULL, --were you correct?? 0 not answered yet   1 correct    2 incorrect
        PRIMARY KEY (id),
	FOREIGN KEY (levelattempts_id) REFERENCES levelattempts(id)
);

--EVALUATION_ATTEMPTS
CREATE TABLE evaluation_attempts (
        id SERIAL,
        start_time timestamp,
        end_time timestamp,
        user_id integer NOT NULL,
	PRIMARY KEY (id),	
	FOREIGN KEY (user_id) REFERENCES users(id)
);

