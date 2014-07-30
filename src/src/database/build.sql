--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE error_log; 
DROP TABLE item_attempts;

DROP TABLE item_types_operation_types;
DROP TABLE item_types_problem_types;
DROP TABLE item_types_speed_types;
DROP TABLE item_types_step_types;
DROP TABLE item_types_carry_types;
DROP TABLE item_types_borrow_types;
DROP TABLE item_types_remainder_types;

DROP TABLE operation_types;
DROP TABLE problem_types;
DROP TABLE speed_types;
DROP TABLE step_types;
DROP TABLE carry_types;
DROP TABLE borrow_types;
DROP TABLE remainder_types;

DROP TABLE item_types;
DROP TABLE levelattempts;
DROP TABLE learning_standards_attempts;

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
	levels integer NOT NULL, -- for us to determine number of levels till next LearningStandard	
	PRIMARY KEY (id)	
);	

CREATE TABLE learning_standards_attempts (
	id SERIAL,
    	start_time timestamp,
    	end_time timestamp,
    	user_id integer NOT NULL,
    	learning_standards_id text NOT NULL,  
	transaction_code integer DEFAULT 3 NOT NULL,
	score integer DEFAULT 0 NOT NULL,
	score_needed integer DEFAULT 0 NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (learning_standards_id) REFERENCES learning_standards(id)
);

CREATE TABLE levelattempts (
	id SERIAL,
    	start_time timestamp,
    	end_time timestamp,
    	level integer NOT NULL, 
    	learning_standards_attempts_id integer NOT NULL,  
	transaction_code integer DEFAULT 3 NOT NULL,
	score integer DEFAULT 0 NOT NULL,
	score_needed integer DEFAULT 0 NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (learning_standards_attempts_id) REFERENCES learning_standards_attempts(id)
);


--addition,subtraction,mult,div,parens,exponents
CREATE TABLE operation_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

--word,calcuation
CREATE TABLE problem_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

--fast,slow
CREATE TABLE speed_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

CREATE TABLE step_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

CREATE TABLE carry_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

CREATE TABLE borrow_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

CREATE TABLE remainder_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

CREATE TABLE item_types (
        id text NOT NULL UNIQUE,
	progression NUMERIC(9,3) NOT NULL, -- for us to determine order
	core_standards_id text NOT NULL,
	active_code integer NOT NULL DEFAULT 1, -- 0 not active, 1 active to let you know its not in application any more
	description text,	
        PRIMARY KEY (id),
	FOREIGN KEY (core_standards_id) REFERENCES core_standards(id)
);

CREATE TABLE item_types_operation_types (
	id SERIAL,
	item_types_id text NOT NULL,
	operation_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (operation_types_id) REFERENCES operation_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_problem_types (
	id SERIAL,
	item_types_id text NOT NULL,
	problem_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (problem_types_id) REFERENCES problem_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_speed_types (
	id SERIAL,
	item_types_id text NOT NULL,
	speed_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (speed_types_id) REFERENCES speed_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_step_types (
	id SERIAL,
	item_types_id text NOT NULL,
	step_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (step_types_id) REFERENCES step_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_carry_types (
	id SERIAL,
	item_types_id text NOT NULL,
	carry_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (carry_types_id) REFERENCES carry_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_borrow_types (
	id SERIAL,
	item_types_id text NOT NULL,
	borrow_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (borrow_types_id) REFERENCES borrow_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_types_remainder_types (
	id SERIAL,
	item_types_id text NOT NULL,
	remainder_types_id integer NOT NULL,
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
	FOREIGN KEY (remainder_types_id) REFERENCES remainder_types(id),
        PRIMARY KEY (id)
);

CREATE TABLE item_attempts (
        id SERIAL,
        start_time timestamp,
        end_time timestamp,
	levelattempts_id integer NOT NULL,
	item_types_id text NOT NULL, 
        transaction_code integer DEFAULT 0 NOT NULL, --were you correct?? 0 not answered yet   1 correct    2 incorrect
        PRIMARY KEY (id),
	FOREIGN KEY (levelattempts_id) REFERENCES levelattempts(id),
	FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);
