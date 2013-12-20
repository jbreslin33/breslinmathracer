--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: error_log; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE error_log (
    id integer NOT NULL,
    error text,
    error_time timestamp without time zone,
    username text
);


ALTER TABLE public.error_log OWNER TO postgres;

--
-- Name: error_log_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE error_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.error_log_id_seq OWNER TO postgres;

--
-- Name: error_log_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE error_log_id_seq OWNED BY error_log.id;


--
-- Name: learning_standards; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE learning_standards (
    id text NOT NULL,
    ref_id text NOT NULL,
    progression numeric(9,3) NOT NULL,
    levels integer NOT NULL
);


ALTER TABLE public.learning_standards OWNER TO postgres;

--
-- Name: levelattempts; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levelattempts (
    id integer NOT NULL,
    start_time timestamp without time zone,
    end_time timestamp without time zone,
    user_id integer NOT NULL,
    level integer NOT NULL,
    ref_id text NOT NULL,
    score integer DEFAULT 0 NOT NULL,
    time_warning boolean DEFAULT false NOT NULL,
    passed boolean DEFAULT false NOT NULL
);


ALTER TABLE public.levelattempts OWNER TO postgres;

--
-- Name: level_attempts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE level_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.level_attempts_id_seq OWNER TO postgres;

--
-- Name: level_attempts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE level_attempts_id_seq OWNED BY levelattempts.id;


--
-- Name: levels_standards_clusters_domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_standards_clusters_domains_grades (
    level_id double precision NOT NULL,
    standard_cluster_domain_grade_id integer NOT NULL
);


ALTER TABLE public.levels_standards_clusters_domains_grades OWNER TO postgres;

--
-- Name: multiplication; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE multiplication (
    id integer NOT NULL,
    score_needed integer DEFAULT 10 NOT NULL,
    factor_min integer NOT NULL,
    factor_max integer NOT NULL,
    number_of_factors integer DEFAULT 2 NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.multiplication OWNER TO postgres;

--
-- Name: multiplication_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE multiplication_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.multiplication_id_seq OWNER TO postgres;

--
-- Name: multiplication_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE multiplication_id_seq OWNED BY multiplication.id;


--
-- Name: passwords; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE passwords (
    id integer NOT NULL,
    password text NOT NULL
);


ALTER TABLE public.passwords OWNER TO postgres;

--
-- Name: passwords_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE passwords_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.passwords_id_seq OWNER TO postgres;

--
-- Name: passwords_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE passwords_id_seq OWNED BY passwords.id;


--
-- Name: permissions; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE permissions (
    id integer NOT NULL,
    permission text NOT NULL
);


ALTER TABLE public.permissions OWNER TO postgres;

--
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permissions_id_seq OWNER TO postgres;

--
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE permissions_id_seq OWNED BY permissions.id;


--
-- Name: permissions_users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE permissions_users (
    permission_id integer NOT NULL,
    user_id integer NOT NULL
);


ALTER TABLE public.permissions_users OWNER TO postgres;

--
-- Name: schools; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE schools (
    id integer NOT NULL,
    school_name text NOT NULL
);


ALTER TABLE public.schools OWNER TO postgres;

--
-- Name: schools_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE schools_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.schools_id_seq OWNER TO postgres;

--
-- Name: schools_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE schools_id_seq OWNED BY schools.id;


--
-- Name: students; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE students (
    id integer NOT NULL,
    teacher_id integer
);


ALTER TABLE public.students OWNER TO postgres;

--
-- Name: teachers; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE teachers (
    id integer NOT NULL
);


ALTER TABLE public.teachers OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

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
    ref_id text DEFAULT 'CA9EE2E34F384E95A5FA26769C5864B8'::text NOT NULL,
    level integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levelattempts ALTER COLUMN id SET DEFAULT nextval('level_attempts_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY multiplication ALTER COLUMN id SET DEFAULT nextval('multiplication_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY passwords ALTER COLUMN id SET DEFAULT nextval('passwords_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permissions ALTER COLUMN id SET DEFAULT nextval('permissions_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY schools ALTER COLUMN id SET DEFAULT nextval('schools_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: error_log; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY error_log (id, error, error_time, username) FROM stdin;
\.


--
-- Name: error_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('error_log_id_seq', 1, false);


--
-- Data for Name: learning_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY learning_standards (id, ref_id, progression, levels) FROM stdin;
k.cc.a.1	CA9EE2E34F384E95A5FA26769C5864B8	1.000	11
k.cc.a.2	5E6A3E3B939B4577B104FA8658206E9E	2.000	6
k.cc.a.3	C11F30815A9C49B9A83B61A285EA11F9	3.000	1
k.cc.c.6	66626D8AEE4E474B8CFEC8A4B68AA51C	4.000	1
k.cc.c.7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	5.000	1
k.oa.a.4	0CFFCBC851984A4281C23D34FC400445	7.000	18
k.oa.a.5	1353E9D5614D460FA32E67853B6BA6D8	8.000	42
k.nbt.a.1	ED150B29EFD14FF8B655FA3F2CA4FE6D	8.000	9
1.oa.c.6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	9.000	79
2.oa.b.2	800715566B824BB3A5A8C464E961C2B4	10.000	304
3.oa.c.7	3D384CB2349B41299A3B5A133AB9E3F8	11.000	218
\.


--
-- Name: level_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('level_attempts_id_seq', 1, false);


--
-- Data for Name: levelattempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levelattempts (id, start_time, end_time, user_id, level, ref_id, score, time_warning, passed) FROM stdin;
\.


--
-- Data for Name: levels_standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
\.


--
-- Data for Name: multiplication; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY multiplication (id, score_needed, factor_min, factor_max, number_of_factors, level_id) FROM stdin;
1	10	0	1	2	600
2	10	0	2	2	600.009999999999991
3	10	0	3	2	600.019999999999982
4	10	0	4	2	600.029999999999973
5	10	0	5	2	600.039999999999964
6	10	0	6	2	600.049999999999955
7	10	0	7	2	600.059999999999945
8	10	0	8	2	600.07000000000005
9	10	0	9	2	600.080000000000041
10	10	0	10	2	600.090000000000032
11	10	0	11	2	600.100000000000023
12	10	0	12	2	600.110000000000014
\.


--
-- Name: multiplication_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('multiplication_id_seq', 12, true);


--
-- Data for Name: passwords; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY passwords (id, password) FROM stdin;
1	ahh
2	abs
3	ace
4	add
5	aft
6	ape
7	and
8	aim
9	aid
10	air
11	all
12	amp
13	ant
14	app
15	apt
16	arc
17	arf
18	ark
19	arm
20	art
21	ash
22	ask
23	ate
24	ave
25	awe
26	axe
27	aye
28	ays
\.


--
-- Name: passwords_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('passwords_id_seq', 28, true);


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY permissions (id, permission) FROM stdin;
1	INSERT
\.


--
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('permissions_id_seq', 1, true);


--
-- Data for Name: permissions_users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY permissions_users (permission_id, user_id) FROM stdin;
\.


--
-- Data for Name: schools; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY schools (id, school_name) FROM stdin;
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 1, false);


--
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY students (id, teacher_id) FROM stdin;
\.


--
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY teachers (id) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level) FROM stdin;
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, false);


--
-- Name: error_log_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY error_log
    ADD CONSTRAINT error_log_pkey PRIMARY KEY (id);


--
-- Name: learning_standards_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY learning_standards
    ADD CONSTRAINT learning_standards_id_key UNIQUE (id);


--
-- Name: learning_standards_ref_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY learning_standards
    ADD CONSTRAINT learning_standards_ref_id_key UNIQUE (ref_id);


--
-- Name: levelattempts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levelattempts
    ADD CONSTRAINT levelattempts_pkey PRIMARY KEY (id);


--
-- Name: levels_standards_clusters_domains_grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_domains_grades_pkey PRIMARY KEY (level_id, standard_cluster_domain_grade_id);


--
-- Name: multiplication_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY multiplication
    ADD CONSTRAINT multiplication_pkey PRIMARY KEY (id);


--
-- Name: passwords_password_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY passwords
    ADD CONSTRAINT passwords_password_key UNIQUE (password);


--
-- Name: passwords_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY passwords
    ADD CONSTRAINT passwords_pkey PRIMARY KEY (password);


--
-- Name: permissions_permission_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permissions
    ADD CONSTRAINT permissions_permission_key UNIQUE (permission);


--
-- Name: permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- Name: permissions_users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_pkey PRIMARY KEY (permission_id, user_id);


--
-- Name: schools_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY schools
    ADD CONSTRAINT schools_pkey PRIMARY KEY (id);


--
-- Name: schools_school_name_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY schools
    ADD CONSTRAINT schools_school_name_key UNIQUE (school_name);


--
-- Name: students_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY students
    ADD CONSTRAINT students_pkey PRIMARY KEY (id);


--
-- Name: teachers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY teachers
    ADD CONSTRAINT teachers_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users_username_school_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_school_id_key UNIQUE (username, school_id);


--
-- Name: permissions_users_permission_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_permission_id_fkey FOREIGN KEY (permission_id) REFERENCES permissions(id);


--
-- Name: students_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY students
    ADD CONSTRAINT students_id_fkey FOREIGN KEY (id) REFERENCES users(id);


--
-- Name: teachers_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY teachers
    ADD CONSTRAINT teachers_id_fkey FOREIGN KEY (id) REFERENCES users(id);


--
-- Name: users_school_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_school_id_fkey FOREIGN KEY (school_id) REFERENCES schools(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

