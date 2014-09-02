--***************************************************************
--******************  DROP TABLES *************************
--**************************************************************
DROP TABLE error_log; 
DROP TABLE item_attempts;

--finer types
DROP TABLE finer_types_item_types;

DROP TABLE finer_types;

--linkage
DROP TABLE practice_buddy; --you need these make practice more effiecient without adding too many links as other tables will.
--natural groupings are already the core_standards keep in mind... 
DROP TABLE prerequisites;
DROP TABLE evaluations;

DROP TABLE evaluations_attempts;

DROP TABLE item_types;

DROP TABLE users;

DROP TABLE core_standards;
DROP TABLE core_clusters;

DROP TABLE core_domains_subjects_grades;
DROP TABLE core_domains;

DROP TABLE core_subjects_grades;
DROP TABLE core_grades;
DROP TABLE core_subjects;



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
    	core_grades_id integer NOT NULL,
    	school_id integer NOT NULL,
	PRIMARY KEY (id),	
	FOREIGN KEY (core_grades_id) REFERENCES core_grades(id)
);


--==================================================================
--==================== LEARNING CURRICULUM  ========================
--==================================================================

--addition,subtraction,mult,div,parens,exponents
CREATE TABLE finer_types (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

--normal,practice
CREATE TABLE evaluations (
	id SERIAL,
	description text,	
        PRIMARY KEY (id)
);

--for now this will be everytime you switch up... later you could add number of questions score needed etc...
CREATE TABLE evaluations_attempts (
	id SERIAL,
        start_time timestamp,
        end_time timestamp,
	evaluations_id integer NOT NULL,	
    	user_id integer NOT NULL,
        PRIMARY KEY (id),
	FOREIGN KEY (evaluations_id) REFERENCES evaluations(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE item_types (
        id text NOT NULL UNIQUE,
	progression NUMERIC(8,4) NOT NULL, -- for us to determine order
	core_standards_id text NOT NULL,
	active_code integer NOT NULL DEFAULT 1, -- 0 not active, 1 active to let you know its not in application any more
	description text,	
	mastery integer DEFAULT 10,	
        PRIMARY KEY (id),
	FOREIGN KEY (core_standards_id) REFERENCES core_standards(id)
);

CREATE TABLE finer_types_item_types (
	id SERIAL,
	finer_types_id integer NOT NULL,
	item_types_id text NOT NULL,
	FOREIGN KEY (finer_types_id) REFERENCES finer_types(id),
	FOREIGN KEY (item_types_id) REFERENCES item_types(id),
        PRIMARY KEY (id)
);


---------- WE TALKIN BOUT PRACTICE
--select item_type_buddy_id from practice_buddy where item_type_id = 'k_cc_a_1_4'; 
--practice buddy 
CREATE TABLE practice_buddy (
	id SERIAL,
	item_type_id text,	
	item_type_buddy_id text,	
	FOREIGN KEY (item_type_id) REFERENCES item_types(id),
	FOREIGN KEY (item_type_buddy_id) REFERENCES item_types(id),
        PRIMARY KEY (id)
);
--working on 2nd grade word problems..having trouble lets try prerequisite of 1st grade word problems.
--having trouble???
--select item_type_prerequisite_id from prerequisite where item_type id = '2.oa.a.1_14';
CREATE TABLE prerequisites (
	id SERIAL,
	item_type_id text,	
	prerequisite_id text,	
	FOREIGN KEY (item_type_id) REFERENCES item_types(id),
	FOREIGN KEY (prerequisite_id) REFERENCES item_types(id),
        PRIMARY KEY (id)
);


CREATE TABLE item_attempts (
        id SERIAL,
        start_time timestamp,
        end_time timestamp,
	evaluations_attempts_id integer NOT NULL, 
	item_types_id text NOT NULL, 
        transaction_code integer DEFAULT 0 NOT NULL, --were you correct?? 0 not answered yet   1 correct    2 incorrect
        PRIMARY KEY (id),
	FOREIGN KEY (evaluations_attempts_id) REFERENCES evaluations_attempts(id),
	FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);
