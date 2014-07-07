--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE error_log; 
DROP TABLE item_attempts;

DROP TABLE item_types;

DROP TABLE levelattempts;

DROP TABLE learning_standards;

DROP TABLE core_standards;
DROP TABLE core_clusters;

DROP TABLE core_domains_subjects_grades;
DROP TABLE core_domains;


DROP TABLE core_subjects_grades;
DROP TABLE core_grades;
DROP TABLE core_subjects;

DROP TABLE users;

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
	PRIMARY KEY (id) 	
	--FOREIGN KEY (school_id) REFERENCES users(id)
);

--==================================================================
--==================== CORE CURRICULUM  ========================
--==================================================================

CREATE TABLE core_subjects (
        id integer NOT NULL UNIQUE,
	description text,	
	PRIMARY KEY (id) 	
);

CREATE TABLE core_grades (
        id integer NOT NULL UNIQUE,
	description text,	
	PRIMARY KEY (id)	
);

CREATE TABLE core_subjects_grades (
        id integer NOT NULL UNIQUE,
	core_subjects_id integer NOT NULL,
	core_grades_id integer NOT NULL,
	PRIMARY KEY (id), 	
        FOREIGN KEY (core_subjects_id) REFERENCES core_subjects(id),
        FOREIGN KEY (core_grades_id) REFERENCES core_grades(id)
);

CREATE TABLE core_domains (
        id integer NOT NULL UNIQUE,
	description text,	
	PRIMARY KEY (id)	
);

CREATE TABLE core_domains_subjects_grades (
        id integer NOT NULL UNIQUE,
        core_domains_id integer NOT NULL,
        core_subjects_grades_id integer NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (core_domains_id) REFERENCES core_domains(id),
        FOREIGN KEY (core_subjects_grades_id) REFERENCES core_subjects_grades(id)
);

CREATE TABLE core_clusters (
        id integer NOT NULL UNIQUE,
	description text,	
	core_domains_subjects_grades_id integer NOT NULL,
	PRIMARY KEY (id), 	
        FOREIGN KEY (core_domains_subjects_grades_id) REFERENCES core_domains_subjects_grades(id)
);

CREATE TABLE core_standards (
        id text NOT NULL UNIQUE,
	description text,	
	core_clusters_id integer NOT NULL,
	PRIMARY KEY (id),	
        FOREIGN KEY (core_clusters_id) REFERENCES core_clusters(id)
);


--==================================================================
--==================== LEARNING CURRICULUM  ========================
--==================================================================
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

CREATE TABLE item_types (
        id integer NOT NULL UNIQUE,
	learning_standards_id text NOT NULL,
	description text,	
        PRIMARY KEY (id),
	FOREIGN KEY (learning_standards_id) REFERENCES learning_standards(id)
);

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
