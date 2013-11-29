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
-- Name: clusters; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE clusters (
    id integer NOT NULL,
    cluster text NOT NULL
);


ALTER TABLE public.clusters OWNER TO postgres;

--
-- Name: clusters_domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE clusters_domains_grades (
    id integer NOT NULL,
    cluster_id integer NOT NULL,
    domain_grade_id integer NOT NULL
);


ALTER TABLE public.clusters_domains_grades OWNER TO postgres;

--
-- Name: clusters_domains_grades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clusters_domains_grades_id_seq OWNER TO postgres;

--
-- Name: clusters_domains_grades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE clusters_domains_grades_id_seq OWNED BY clusters_domains_grades.id;


--
-- Name: clusters_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE clusters_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clusters_id_seq OWNER TO postgres;

--
-- Name: clusters_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE clusters_id_seq OWNED BY clusters.id;


--
-- Name: domains; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE domains (
    id integer NOT NULL,
    domain text NOT NULL
);


ALTER TABLE public.domains OWNER TO postgres;

--
-- Name: domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE domains_grades (
    id integer NOT NULL,
    domain_id integer,
    grade_id integer
);


ALTER TABLE public.domains_grades OWNER TO postgres;

--
-- Name: domains_grades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.domains_grades_id_seq OWNER TO postgres;

--
-- Name: domains_grades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE domains_grades_id_seq OWNED BY domains_grades.id;


--
-- Name: domains_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE domains_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.domains_id_seq OWNER TO postgres;

--
-- Name: domains_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE domains_id_seq OWNED BY domains.id;


--
-- Name: domains_subjects; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE domains_subjects (
    domain_id integer NOT NULL,
    subject_id integer NOT NULL
);


ALTER TABLE public.domains_subjects OWNER TO postgres;

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
-- Name: games; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE games (
    id integer NOT NULL,
    game text NOT NULL,
    url text NOT NULL,
    picture_open text NOT NULL,
    picture_closed text NOT NULL
);


ALTER TABLE public.games OWNER TO postgres;

--
-- Name: games_attempts; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE games_attempts (
    id integer NOT NULL,
    game_attempt_time_start timestamp without time zone,
    game_attempt_time_end timestamp without time zone,
    user_id integer NOT NULL,
    level_id double precision NOT NULL,
    score integer DEFAULT 0 NOT NULL,
    time_warning boolean DEFAULT false NOT NULL
);


ALTER TABLE public.games_attempts OWNER TO postgres;

--
-- Name: games_attempts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE games_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.games_attempts_id_seq OWNER TO postgres;

--
-- Name: games_attempts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE games_attempts_id_seq OWNED BY games_attempts.id;


--
-- Name: games_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE games_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.games_id_seq OWNER TO postgres;

--
-- Name: games_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE games_id_seq OWNED BY games.id;


--
-- Name: grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE grades (
    id integer NOT NULL,
    grade text
);


ALTER TABLE public.grades OWNER TO postgres;

--
-- Name: grades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grades_id_seq OWNER TO postgres;

--
-- Name: grades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE grades_id_seq OWNED BY grades.id;


--
-- Name: levels; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels (
    id double precision NOT NULL,
    description text NOT NULL
);


ALTER TABLE public.levels OWNER TO postgres;

--
-- Name: levels_standards_clusters_domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_standards_clusters_domains_grades (
    level_id double precision NOT NULL,
    standard_cluster_domain_grade_id integer NOT NULL
);


ALTER TABLE public.levels_standards_clusters_domains_grades OWNER TO postgres;

--
-- Name: levels_transactions; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_transactions (
    id integer NOT NULL,
    advancement_time timestamp without time zone,
    level_id double precision NOT NULL,
    user_id integer NOT NULL
);


ALTER TABLE public.levels_transactions OWNER TO postgres;

--
-- Name: levels_transactions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE levels_transactions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.levels_transactions_id_seq OWNER TO postgres;

--
-- Name: levels_transactions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE levels_transactions_id_seq OWNED BY levels_transactions.id;


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
-- Name: rooms; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE rooms (
    id integer NOT NULL,
    room text NOT NULL,
    school_id integer NOT NULL
);


ALTER TABLE public.rooms OWNER TO postgres;

--
-- Name: rooms_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE rooms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rooms_id_seq OWNER TO postgres;

--
-- Name: rooms_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE rooms_id_seq OWNED BY rooms.id;


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
-- Name: standards; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE standards (
    id integer NOT NULL,
    standard text NOT NULL
);


ALTER TABLE public.standards OWNER TO postgres;

--
-- Name: standards_clusters_domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE standards_clusters_domains_grades (
    id integer NOT NULL,
    standard_id integer NOT NULL,
    cluster_domain_grade_id integer NOT NULL
);


ALTER TABLE public.standards_clusters_domains_grades OWNER TO postgres;

--
-- Name: standards_clusters_domains_grades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE standards_clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.standards_clusters_domains_grades_id_seq OWNER TO postgres;

--
-- Name: standards_clusters_domains_grades_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE standards_clusters_domains_grades_id_seq OWNED BY standards_clusters_domains_grades.id;


--
-- Name: standards_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.standards_id_seq OWNER TO postgres;

--
-- Name: standards_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE standards_id_seq OWNED BY standards.id;


--
-- Name: students; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE students (
    id integer NOT NULL,
    teacher_id integer
);


ALTER TABLE public.students OWNER TO postgres;

--
-- Name: subjects; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE subjects (
    id integer NOT NULL,
    subject text NOT NULL
);


ALTER TABLE public.subjects OWNER TO postgres;

--
-- Name: subjects_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE subjects_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.subjects_id_seq OWNER TO postgres;

--
-- Name: subjects_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE subjects_id_seq OWNED BY subjects.id;


--
-- Name: subtraction; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE subtraction (
    id integer NOT NULL,
    score_needed integer DEFAULT 10 NOT NULL,
    minuend_min integer NOT NULL,
    minuend_max integer NOT NULL,
    subtrahend_min integer NOT NULL,
    subtrahend_max integer NOT NULL,
    number_of_subtrahends integer DEFAULT 1 NOT NULL,
    negative_difference boolean DEFAULT false NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.subtraction OWNER TO postgres;

--
-- Name: subtraction_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE subtraction_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.subtraction_id_seq OWNER TO postgres;

--
-- Name: subtraction_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE subtraction_id_seq OWNED BY subtraction.id;


--
-- Name: teachers; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE teachers (
    id integer NOT NULL,
    room_id integer
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
    school_id integer NOT NULL
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

ALTER TABLE ONLY clusters ALTER COLUMN id SET DEFAULT nextval('clusters_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('clusters_domains_grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains ALTER COLUMN id SET DEFAULT nextval('domains_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains_grades ALTER COLUMN id SET DEFAULT nextval('domains_grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games ALTER COLUMN id SET DEFAULT nextval('games_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games_attempts ALTER COLUMN id SET DEFAULT nextval('games_attempts_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY grades ALTER COLUMN id SET DEFAULT nextval('grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_transactions ALTER COLUMN id SET DEFAULT nextval('levels_transactions_id_seq'::regclass);


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

ALTER TABLE ONLY rooms ALTER COLUMN id SET DEFAULT nextval('rooms_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY schools ALTER COLUMN id SET DEFAULT nextval('schools_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY standards ALTER COLUMN id SET DEFAULT nextval('standards_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY standards_clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('standards_clusters_domains_grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY subjects ALTER COLUMN id SET DEFAULT nextval('subjects_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY subtraction ALTER COLUMN id SET DEFAULT nextval('subtraction_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: clusters; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY clusters (id, cluster) FROM stdin;
1	Know number names and the count sequence.
2	Analyze, compare, create, and compose shapes.
\.


--
-- Data for Name: clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY clusters_domains_grades (id, cluster_id, domain_grade_id) FROM stdin;
1	1	1
\.


--
-- Name: clusters_domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clusters_domains_grades_id_seq', 1, true);


--
-- Name: clusters_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clusters_id_seq', 2, true);


--
-- Data for Name: domains; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains (id, domain) FROM stdin;
1	Counting and Cardinality
\.


--
-- Data for Name: domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains_grades (id, domain_id, grade_id) FROM stdin;
1	1	1
\.


--
-- Name: domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('domains_grades_id_seq', 1, true);


--
-- Name: domains_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('domains_id_seq', 1, true);


--
-- Data for Name: domains_subjects; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains_subjects (domain_id, subject_id) FROM stdin;
1	1
\.


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
-- Data for Name: games; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games (id, game, url, picture_open, picture_closed) FROM stdin;
1	Dungeon	/web/game/dungeon.php	/images/doors/door_open.png	/images/doors/door_closed.png
2	Dungeon Count	/web/game/represent.php	/images/doors/door_open.png	/images/doors/door_closed.png
3	Click	/web/game/clicky.php	/images/doors/door_open.png	/images/doors/door_closed.png
4	Network	/web/game/network.php	/images/doors/door_open.png	/images/doors/door_closed.png
5	Racer	/web/game/racer.php	/images/doors/door_open.png	/images/doors/door_closed.png
6	NumberPad	/web/game/number_pad.php	/images/doors/door_open.png	/images/doors/door_closed.png
\.


--
-- Data for Name: games_attempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games_attempts (id, game_attempt_time_start, game_attempt_time_end, user_id, level_id, score, time_warning) FROM stdin;
1	2013-11-26 21:09:43	\N	13	130	1	f
22	2013-11-27 10:00:18	2013-11-27 10:00:28	270	100	20	f
24	2013-11-27 10:00:28	\N	263	100	1	f
7	2013-11-26 21:12:15	\N	13	131	5	f
8	2013-11-26 21:12:33	\N	13	131	0	f
23	2013-11-27 10:00:24	\N	252	100	1	f
102	2013-11-27 10:09:29	\N	252	102	15	f
2	2013-11-26 21:09:59	\N	13	130	9	f
9	2013-11-26 21:13:04	\N	13	131	4	f
10	2013-11-26 21:13:27	\N	13	131	1	f
11	2013-11-26 21:13:40	\N	13	131	1	f
40	2013-11-27 10:02:16	\N	263	100	2	f
41	2013-11-27 10:02:17	\N	263	100	0	f
25	2013-11-27 10:00:38	\N	270	101	4	f
27	2013-11-27 10:00:43	\N	252	100	1	f
100	2013-11-27 10:09:17	\N	255	104	8	f
80	2013-11-27 10:07:30	\N	263	101	2	f
50	2013-11-27 10:03:14	\N	252	101	8	f
26	2013-11-27 10:00:43	\N	263	100	5	f
3	2013-11-26 21:10:24	2013-11-26 21:10:53	13	130	20	f
28	2013-11-27 10:00:50	\N	270	101	3	f
4	2013-11-26 21:11:03	\N	13	131	2	f
39	2013-11-27 10:01:56	2013-11-27 10:02:24	270	101	20	f
29	2013-11-27 10:00:58	\N	252	100	3	f
5	2013-11-26 21:11:20	\N	13	131	6	f
12	2013-11-26 21:14:06	2013-11-26 21:14:14	255	100	20	f
13	2013-11-26 21:14:24	\N	255	101	1	f
14	2013-11-26 21:14:37	\N	255	101	0	f
15	2013-11-27 09:55:47	\N	263	100	1	f
16	2013-11-27 09:56:11	\N	263	100	1	f
17	2013-11-27 09:56:33	\N	263	100	2	f
30	2013-11-27 10:01:04	\N	263	100	2	f
6	2013-11-26 21:11:42	\N	13	131	14	f
31	2013-11-27 10:01:11	\N	270	101	1	f
32	2013-11-27 10:01:16	\N	252	100	1	f
18	2013-11-27 09:59:31	\N	263	100	3	f
19	2013-11-27 09:59:52	\N	263	100	1	f
20	2013-11-27 10:00:08	\N	252	100	0	f
56	2013-11-27 10:03:50	2013-11-27 10:04:13	263	100	20	f
51	2013-11-27 10:03:19	\N	263	100	7	f
21	2013-11-27 10:00:09	\N	263	100	6	f
54	2013-11-27 10:03:37	\N	263	100	0	f
33	2013-11-27 10:01:17	\N	263	100	8	f
53	2013-11-27 10:03:35	\N	252	101	2	f
70	2013-11-27 10:06:03	\N	252	101	8	f
36	2013-11-27 10:01:31	\N	263	100	2	f
35	2013-11-27 10:01:30	\N	252	100	4	f
62	2013-11-27 10:04:54	\N	270	104	12	f
34	2013-11-27 10:01:27	\N	270	101	2	f
69	2013-11-27 10:05:52	\N	270	104	17	f
71	2013-11-27 10:06:23	\N	252	101	0	f
42	2013-11-27 10:02:17	\N	252	101	4	f
78	2013-11-27 10:07:16	\N	263	101	2	f
43	2013-11-27 10:02:26	\N	263	100	1	f
81	2013-11-27 10:07:39	\N	255	103	1	f
44	2013-11-27 10:02:35	\N	270	102	3	f
64	2013-11-27 10:05:07	\N	252	101	9	f
65	2013-11-27 10:05:20	\N	270	104	1	f
66	2013-11-27 10:05:27	\N	252	101	0	f
45	2013-11-27 10:02:41	\N	252	101	6	f
46	2013-11-27 10:02:43	\N	263	100	2	f
72	2013-11-27 10:06:24	2013-11-27 10:06:52	270	104	20	f
37	2013-11-27 10:01:50	2013-11-27 10:02:07	252	100	20	f
67	2013-11-27 10:05:35	\N	270	104	4	f
48	2013-11-27 10:03:00	\N	252	101	1	f
83	2013-11-27 10:07:44	\N	252	102	1	f
38	2013-11-27 10:01:50	\N	263	100	10	f
82	2013-11-27 10:07:44	\N	263	101	1	f
98	2013-11-27 10:08:59	\N	263	101	1	f
79	2013-11-27 10:07:19	2013-11-27 10:07:47	270	105	20	f
68	2013-11-27 10:05:39	\N	252	101	10	f
49	2013-11-27 10:03:05	\N	263	100	1	f
73	2013-11-27 10:06:34	2013-11-27 10:06:57	255	101	20	f
58	2013-11-27 10:04:21	\N	252	101	16	f
90	2013-11-27 10:08:25	\N	252	102	1	f
57	2013-11-27 10:04:17	\N	270	104	17	f
59	2013-11-27 10:04:23	\N	263	101	2	f
52	2013-11-27 10:03:29	2013-11-27 10:04:07	270	103	20	f
60	2013-11-27 10:04:45	\N	263	101	0	f
47	2013-11-27 10:02:52	2013-11-27 10:03:18	270	102	20	f
63	2013-11-27 10:04:55	\N	263	101	0	f
55	2013-11-27 10:03:50	\N	252	101	16	f
74	2013-11-27 10:06:38	2013-11-27 10:07:04	252	101	20	f
75	2013-11-27 10:07:03	\N	270	105	2	f
61	2013-11-27 10:04:50	\N	252	101	4	f
95	2013-11-27 10:08:55	\N	252	102	2	f
101	2013-11-27 10:09:28	\N	270	107	10	f
76	2013-11-27 10:07:07	2013-11-27 10:07:28	255	102	20	f
85	2013-11-27 10:07:56	\N	263	101	2	f
86	2013-11-27 10:07:57	2013-11-27 10:08:29	270	106	20	f
97	2013-11-27 10:08:58	\N	270	107	12	f
77	2013-11-27 10:07:14	\N	252	102	12	f
87	2013-11-27 10:07:58	\N	252	102	5	f
89	2013-11-27 10:08:24	\N	255	104	18	f
92	2013-11-27 10:08:39	\N	252	102	3	f
91	2013-11-27 10:08:25	\N	263	101	4	f
99	2013-11-27 10:09:12	\N	252	102	4	f
96	2013-11-27 10:08:56	\N	255	104	8	f
84	2013-11-27 10:07:52	2013-11-27 10:08:14	255	103	20	f
88	2013-11-27 10:08:09	\N	263	101	4	f
93	2013-11-27 10:08:40	\N	270	107	5	f
105	2013-11-27 10:09:51	\N	263	101	5	f
94	2013-11-27 10:08:41	\N	263	101	3	f
103	2013-11-27 10:09:37	\N	263	101	1	f
106	2013-11-27 10:09:54	\N	270	107	6	f
108	2013-11-27 10:10:02	\N	281	100	1	f
104	2013-11-27 10:09:37	\N	255	104	7	f
111	2013-11-27 10:10:18	\N	252	102	1	f
117	2013-11-27 10:10:36	\N	281	100	1	f
109	2013-11-27 10:10:04	\N	252	102	1	f
107	2013-11-27 10:09:57	\N	255	104	7	f
112	2013-11-27 10:10:18	\N	263	101	1	f
113	2013-11-27 10:10:20	\N	281	100	0	f
116	2013-11-27 10:10:33	\N	263	101	5	f
115	2013-11-27 10:10:31	2013-11-27 10:10:54	255	104	20	f
114	2013-11-27 10:10:31	\N	252	102	7	f
120	2013-11-27 10:10:53	\N	281	100	1	f
110	2013-11-27 10:10:14	2013-11-27 10:10:48	270	107	20	f
118	2013-11-27 10:10:51	\N	252	102	0	f
123	2013-11-27 10:11:05	\N	252	102	4	f
122	2013-11-27 10:11:04	\N	255	105	6	f
119	2013-11-27 10:10:52	\N	263	101	8	f
125	2013-11-27 10:11:16	\N	263	101	3	f
124	2013-11-27 10:11:08	\N	281	100	0	f
121	2013-11-27 10:10:58	\N	270	108	9	f
225	2013-11-27 10:25:21	\N	72	105	16	f
126	2013-11-27 10:11:21	\N	252	102	2	f
176	2013-11-27 10:14:41	\N	263	101	3	f
177	2013-11-27 10:14:41	\N	255	107	6	f
179	2013-11-27 10:14:54	\N	252	102	1	f
144	2013-11-27 10:12:27	\N	252	102	2	f
143	2013-11-27 10:12:20	\N	255	106	11	f
129	2013-11-27 10:11:26	\N	270	108	2	f
145	2013-11-27 10:12:30	\N	281	101	1	f
158	2013-11-27 10:13:25	\N	281	101	1	f
146	2013-11-27 10:12:31	\N	270	108	4	f
130	2013-11-27 10:11:31	\N	263	101	0	f
147	2013-11-27 10:12:34	\N	263	101	2	f
148	2013-11-27 10:12:43	\N	252	102	0	f
155	2013-11-27 10:13:12	2013-11-27 10:13:36	255	106	20	f
159	2013-11-27 10:13:33	\N	270	108	2	f
161	2013-11-27 10:13:37	\N	252	102	2	f
202	2013-11-27 10:19:52	2013-11-27 10:20:08	129	101	20	f
204	2013-11-27 10:20:15	\N	458	101	0	f
160	2013-11-27 10:13:37	\N	263	101	6	f
127	2013-11-27 10:11:24	2013-11-27 10:11:37	281	100	20	f
163	2013-11-27 10:13:47	\N	281	101	0	f
191	2013-11-27 10:16:25	\N	252	102	4	f
180	2013-11-27 10:15:03	\N	263	101	4	f
164	2013-11-27 10:13:49	\N	270	108	1	f
229	2013-11-27 10:27:06	\N	72	106	10	f
220	2013-11-27 10:23:12	\N	72	104	14	f
150	2013-11-27 10:12:45	\N	281	101	9	f
131	2013-11-27 10:11:36	\N	252	102	6	f
165	2013-11-27 10:13:52	\N	252	102	1	f
219	2013-11-27 10:23:12	\N	129	106	13	f
128	2013-11-27 10:11:24	2013-11-27 10:11:48	255	105	20	f
166	2013-11-27 10:13:56	\N	263	101	1	f
149	2013-11-27 10:12:45	\N	255	106	12	f
182	2013-11-27 10:15:09	\N	252	102	2	f
132	2013-11-27 10:11:41	\N	270	108	6	f
134	2013-11-27 10:11:47	\N	281	101	2	f
133	2013-11-27 10:11:47	\N	263	101	1	f
162	2013-11-27 10:13:46	\N	255	107	11	f
167	2013-11-27 10:14:03	\N	281	101	0	f
135	2013-11-27 10:11:55	\N	252	102	3	f
152	2013-11-27 10:12:54	\N	263	101	3	f
153	2013-11-27 10:12:54	\N	252	102	6	f
169	2013-11-27 10:14:04	\N	252	102	0	f
181	2013-11-27 10:15:04	\N	255	107	9	f
138	2013-11-27 10:12:04	\N	281	101	2	f
139	2013-11-27 10:12:07	\N	263	101	0	f
136	2013-11-27 10:11:59	\N	255	106	8	f
154	2013-11-27 10:13:09	\N	281	101	1	f
228	2013-11-27 10:26:35	2013-11-27 10:26:55	72	105	20	f
140	2013-11-27 10:12:10	\N	252	102	3	f
137	2013-11-27 10:12:03	\N	270	108	8	f
170	2013-11-27 10:14:10	\N	263	101	1	f
193	2013-11-27 10:16:32	\N	263	101	4	f
141	2013-11-27 10:12:16	\N	281	101	4	f
197	2013-11-27 10:18:31	2013-11-27 10:18:44	129	100	20	f
187	2013-11-27 10:16:01	\N	255	107	13	f
142	2013-11-27 10:12:17	\N	263	101	4	f
168	2013-11-27 10:14:04	\N	270	108	8	f
201	2013-11-27 10:19:44	2013-11-27 10:19:52	458	100	20	f
221	2013-11-27 10:23:40	\N	72	104	2	f
184	2013-11-27 10:15:25	\N	252	102	2	f
172	2013-11-27 10:14:17	\N	252	102	2	f
198	2013-11-27 10:18:54	\N	129	101	6	f
151	2013-11-27 10:12:51	\N	270	108	17	f
185	2013-11-27 10:15:28	\N	255	107	16	f
157	2013-11-27 10:13:14	\N	252	102	1	f
156	2013-11-27 10:13:14	\N	263	101	10	f
173	2013-11-27 10:14:25	\N	263	101	2	f
207	2013-11-27 10:20:27	2013-11-27 10:20:41	458	101	20	f
171	2013-11-27 10:14:12	\N	255	107	15	f
174	2013-11-27 10:14:30	\N	270	108	0	f
208	2013-11-27 10:20:42	2013-11-27 10:21:04	129	102	20	f
175	2013-11-27 10:14:34	\N	252	102	3	f
212	2013-11-27 10:21:28	2013-11-27 10:21:50	72	102	20	f
186	2013-11-27 10:15:56	\N	252	102	2	f
205	2013-11-27 10:20:19	\N	129	102	11	f
226	2013-11-27 10:25:52	\N	72	105	4	f
213	2013-11-27 10:21:48	2013-11-27 10:22:11	129	104	20	f
214	2013-11-27 10:22:01	\N	72	103	9	f
178	2013-11-27 10:14:42	\N	270	108	3	f
206	2013-11-27 10:20:24	2013-11-27 10:20:44	72	100	20	f
183	2013-11-27 10:15:21	\N	263	101	7	f
188	2013-11-27 10:16:12	\N	252	102	1	f
189	2013-11-27 10:16:15	\N	270	108	1	f
190	2013-11-27 10:16:18	\N	263	101	1	f
192	2013-11-27 10:16:29	\N	270	108	0	f
199	2013-11-27 10:19:09	\N	129	101	14	f
194	2013-11-27 10:17:01	2013-11-27 10:17:27	255	107	20	f
195	2013-11-27 10:17:38	\N	255	108	0	f
196	2013-11-27 10:17:51	\N	1	100	0	f
200	2013-11-27 10:19:38	\N	129	101	2	f
223	2013-11-27 10:23:55	\N	72	104	4	f
218	2013-11-27 10:22:39	2013-11-27 10:23:01	129	105	20	f
203	2013-11-27 10:20:02	\N	458	101	5	f
209	2013-11-27 10:20:51	\N	458	102	0	f
233	2013-11-27 11:25:57	\N	46	102	8	f
216	2013-11-27 10:22:23	\N	72	103	2	f
217	2013-11-27 10:22:38	2013-11-27 10:23:01	72	103	20	f
210	2013-11-27 10:20:54	2013-11-27 10:21:18	72	101	20	f
211	2013-11-27 10:21:14	2013-11-27 10:21:38	129	103	20	f
215	2013-11-27 10:22:21	\N	129	105	6	f
227	2013-11-27 10:26:08	\N	72	105	13	f
237	2013-11-27 12:28:28	\N	137	100	7	f
234	2013-11-27 12:26:45	2013-11-27 12:27:07	147	100	20	f
231	2013-11-27 11:24:41	2013-11-27 11:25:04	46	100	20	f
222	2013-11-27 10:23:41	\N	129	106	17	f
224	2013-11-27 10:24:17	2013-11-27 10:25:11	72	104	20	f
230	2013-11-27 11:23:44	\N	46	100	1	f
232	2013-11-27 11:25:15	2013-11-27 11:25:46	46	101	20	f
239	2013-11-27 12:28:50	2013-11-27 12:28:57	137	100	20	f
235	2013-11-27 12:27:18	\N	147	101	2	f
236	2013-11-27 12:27:28	2013-11-27 12:28:23	147	101	20	f
240	2013-11-27 12:29:07	\N	137	101	1	f
242	2013-11-27 12:29:26	\N	147	103	1	f
238	2013-11-27 12:28:32	2013-11-27 12:29:15	147	102	20	f
241	2013-11-27 12:29:23	\N	137	101	0	f
245	2013-11-27 12:29:53	\N	137	101	1	f
246	2013-11-27 12:30:05	\N	137	101	5	f
243	2013-11-27 12:29:36	\N	137	101	4	f
244	2013-11-27 12:29:40	2013-11-27 12:30:01	147	103	20	f
247	2013-11-27 12:30:11	2013-11-27 12:30:35	147	104	20	f
248	2013-11-27 12:30:23	\N	137	101	5	f
249	2013-11-27 12:30:44	\N	137	101	8	f
266	2013-11-27 12:36:17	2013-11-27 12:37:21	147	110	20	f
267	2013-11-27 12:37:27	\N	136	100	1	f
259	2013-11-27 12:33:36	\N	137	101	5	f
350	2013-11-27 12:58:34	\N	147	132	4	f
298	2013-11-27 12:43:47	\N	136	101	3	f
329	2013-11-27 12:51:02	\N	136	102	2	f
313	2013-11-27 12:47:56	\N	147	118	9	f
251	2013-11-27 12:31:07	\N	137	101	1	f
288	2013-11-27 12:41:13	\N	136	101	11	f
287	2013-11-27 12:40:59	2013-11-27 12:41:27	147	114	20	f
269	2013-11-27 12:37:44	\N	136	100	1	f
250	2013-11-27 12:30:45	2013-11-27 12:31:15	147	105	20	f
290	2013-11-27 12:41:38	\N	136	101	1	f
349	2013-11-27 12:57:49	2013-11-27 12:58:23	147	131	20	f
320	2013-11-27 12:49:21	\N	136	102	4	f
297	2013-11-27 12:43:28	2013-11-27 12:44:02	147	115	20	f
278	2013-11-27 12:39:33	2013-11-27 12:39:41	136	100	20	f
252	2013-11-27 12:31:20	\N	137	101	8	f
314	2013-11-27 12:48:10	\N	136	102	4	f
306	2013-11-27 12:46:16	2013-11-27 12:47:13	147	117	20	f
268	2013-11-27 12:37:32	2013-11-27 12:38:03	147	111	20	f
309	2013-11-27 12:47:10	\N	136	101	2	f
270	2013-11-27 12:38:00	\N	136	100	2	f
254	2013-11-27 12:31:42	\N	137	101	3	f
291	2013-11-27 12:41:51	\N	136	101	10	f
279	2013-11-27 12:39:51	\N	136	101	1	f
260	2013-11-27 12:33:37	2013-11-27 12:34:12	147	107	20	f
276	2013-11-27 12:39:18	2013-11-27 12:39:54	147	112	20	f
280	2013-11-27 12:40:03	\N	136	101	0	f
261	2013-11-27 12:33:52	2013-11-27 12:34:16	137	101	20	f
253	2013-11-27 12:31:26	2013-11-27 12:32:04	147	106	20	f
272	2013-11-27 12:38:18	\N	136	100	9	f
263	2013-11-27 12:34:26	\N	137	102	1	f
299	2013-11-27 12:44:05	\N	136	101	6	f
301	2013-11-27 12:44:21	\N	136	101	0	f
302	2013-11-27 12:44:33	\N	136	101	0	f
292	2013-11-27 12:42:12	\N	136	101	5	f
273	2013-11-27 12:38:38	\N	136	100	5	f
293	2013-11-27 12:42:31	\N	136	101	2	f
294	2013-11-27 12:42:46	\N	136	101	0	f
295	2013-11-27 12:42:58	\N	136	101	1	f
316	2013-11-27 12:48:27	\N	136	102	0	f
255	2013-11-27 12:31:59	\N	137	101	19	f
300	2013-11-27 12:44:12	\N	147	116	3	f
262	2013-11-27 12:34:22	2013-11-27 12:34:51	147	108	20	f
282	2013-11-27 12:40:14	\N	136	101	5	f
318	2013-11-27 12:48:53	2013-11-27 12:49:27	147	118	20	f
274	2013-11-27 12:38:51	\N	136	100	7	f
330	2013-11-27 12:51:18	\N	136	102	4	f
283	2013-11-27 12:40:31	\N	136	101	0	f
311	2013-11-27 12:47:26	\N	136	101	6	f
257	2013-11-27 12:32:48	\N	137	101	11	f
289	2013-11-27 12:41:37	\N	147	115	9	f
281	2013-11-27 12:40:05	2013-11-27 12:40:35	147	113	20	f
271	2013-11-27 12:38:13	\N	147	112	19	f
322	2013-11-27 12:49:39	\N	136	102	3	f
284	2013-11-27 12:40:42	\N	136	101	2	f
265	2013-11-27 12:35:01	2013-11-27 12:36:07	147	109	20	f
275	2013-11-27 12:39:07	\N	136	100	4	f
258	2013-11-27 12:33:21	\N	137	101	2	f
256	2013-11-27 12:32:14	\N	147	107	19	f
285	2013-11-27 12:40:45	\N	147	114	1	f
315	2013-11-27 12:48:26	\N	147	118	9	f
277	2013-11-27 12:39:19	\N	136	100	5	f
344	2013-11-27 12:55:10	\N	136	102	5	f
286	2013-11-27 12:40:58	\N	136	101	2	f
333	2013-11-27 12:52:10	\N	147	130	18	f
310	2013-11-27 12:47:24	\N	147	118	10	f
332	2013-11-27 12:51:54	\N	136	102	11	f
304	2013-11-27 12:45:59	\N	136	101	1	f
317	2013-11-27 12:48:41	\N	136	102	7	f
303	2013-11-27 12:45:22	2013-11-27 12:46:06	147	116	20	f
296	2013-11-27 12:43:12	\N	136	101	19	f
323	2013-11-27 12:49:55	\N	136	102	0	f
305	2013-11-27 12:46:15	\N	136	101	5	f
307	2013-11-27 12:46:33	\N	136	101	0	f
339	2013-11-27 12:53:55	\N	147	130	11	f
345	2013-11-27 12:55:12	\N	147	131	18	f
331	2013-11-27 12:51:38	\N	136	102	2	f
334	2013-11-27 12:52:28	\N	136	102	6	f
342	2013-11-27 12:54:33	\N	136	102	8	f
351	2013-11-27 12:58:56	\N	136	102	1	f
308	2013-11-27 12:46:55	\N	136	101	0	f
312	2013-11-27 12:47:43	2013-11-27 12:48:00	136	101	20	f
319	2013-11-27 12:49:03	\N	136	102	4	f
340	2013-11-27 12:54:07	\N	136	102	6	f
321	2013-11-27 12:49:38	2013-11-27 12:50:14	147	119	20	f
324	2013-11-27 12:50:11	\N	136	102	4	f
346	2013-11-27 12:56:03	\N	136	102	3	f
336	2013-11-27 12:53:12	\N	136	102	12	f
326	2013-11-27 12:50:33	\N	136	102	1	f
328	2013-11-27 12:50:51	2013-11-27 12:51:59	147	120	20	f
325	2013-11-27 12:50:24	\N	147	120	2	f
327	2013-11-27 12:50:46	\N	136	102	1	f
337	2013-11-27 12:53:24	\N	147	130	2	f
338	2013-11-27 12:53:49	\N	136	102	1	f
347	2013-11-27 12:57:15	\N	147	131	2	f
335	2013-11-27 12:52:53	\N	136	102	5	f
343	2013-11-27 12:54:57	\N	136	102	0	f
352	2013-11-27 12:59:07	\N	147	132	1	f
355	2013-11-27 13:00:01	\N	136	103	1	f
348	2013-11-27 12:57:39	\N	136	102	7	f
357	2013-11-27 13:00:37	\N	136	103	10	f
341	2013-11-27 12:54:22	2013-11-27 12:55:01	147	130	20	f
264	2013-11-27 12:34:42	\N	137	102	1	f
360	2013-11-27 13:02:12	\N	136	103	1	f
353	2013-11-27 12:59:14	2013-11-27 12:59:49	136	102	20	f
359	2013-11-27 13:01:48	\N	136	103	3	f
358	2013-11-27 13:01:20	\N	136	103	6	f
354	2013-11-27 12:59:31	2013-11-27 13:00:08	147	132	20	f
361	2013-11-27 13:02:28	\N	136	103	1	f
362	2013-11-27 13:02:43	\N	136	103	1	f
367	2013-11-27 13:04:09	\N	136	103	1	f
363	2013-11-27 13:02:59	\N	136	103	4	f
364	2013-11-27 13:03:23	\N	136	103	0	f
356	2013-11-27 13:00:18	\N	147	133	2	f
365	2013-11-27 13:03:35	\N	136	103	10	f
366	2013-11-27 13:03:51	\N	147	133	3	f
368	2013-11-27 13:04:31	\N	136	103	7	f
371	2013-11-27 13:05:59	\N	136	103	3	f
369	2013-11-27 13:04:35	\N	147	133	4	f
370	2013-11-27 13:04:59	\N	136	103	5	f
373	2013-11-27 13:06:34	\N	136	103	10	f
372	2013-11-27 13:06:04	\N	147	133	6	f
387	2013-11-27 13:11:03	\N	262	100	17	f
449	2013-11-27 13:21:45	\N	277	105	1	f
393	2013-11-27 13:12:22	\N	147	133	2	f
374	2013-11-27 13:07:08	\N	136	103	4	f
404	2013-11-27 13:14:00	\N	136	105	4	f
375	2013-11-27 13:07:30	\N	136	103	7	f
451	2013-11-27 13:21:57	\N	262	103	0	f
484	2013-11-27 13:26:03	\N	255	110	1	f
392	2013-11-27 13:12:11	2013-11-27 13:12:47	277	103	20	f
458	2013-11-27 13:22:51	\N	262	103	1	f
401	2013-11-27 13:13:42	2013-11-27 13:14:18	262	102	20	f
385	2013-11-27 13:10:40	2013-11-27 13:11:38	277	102	20	f
405	2013-11-27 13:14:18	\N	277	104	1	f
425	2013-11-27 13:17:36	\N	277	104	6	f
413	2013-11-27 13:15:15	2013-11-27 13:15:46	136	105	20	f
406	2013-11-27 13:14:20	\N	136	105	3	f
407	2013-11-27 13:14:28	\N	262	103	0	f
408	2013-11-27 13:14:33	\N	277	104	1	f
410	2013-11-27 13:14:41	\N	262	103	0	f
395	2013-11-27 13:12:27	2013-11-27 13:12:55	136	103	20	f
376	2013-11-27 13:07:49	2013-11-27 13:08:09	277	100	20	f
431	2013-11-27 13:18:56	\N	262	103	14	f
377	2013-11-27 13:07:58	\N	136	103	7	f
378	2013-11-27 13:08:19	\N	277	101	1	f
379	2013-11-27 13:08:30	\N	136	103	0	f
434	2013-11-27 13:19:20	\N	136	106	9	f
389	2013-11-27 13:11:27	\N	262	100	9	f
381	2013-11-27 13:08:45	\N	147	133	0	f
439	2013-11-27 13:20:26	\N	277	105	6	f
380	2013-11-27 13:08:37	\N	277	101	4	f
390	2013-11-27 13:11:48	\N	277	103	5	f
428	2013-11-27 13:17:59	\N	277	104	4	f
416	2013-11-27 13:15:48	\N	262	103	5	f
468	2013-11-27 13:24:17	\N	275	100	4	f
427	2013-11-27 13:17:51	\N	136	106	3	f
415	2013-11-27 13:15:30	\N	277	104	14	f
382	2013-11-27 13:08:59	\N	277	101	11	f
396	2013-11-27 13:12:44	2013-11-27 13:13:05	262	101	20	f
388	2013-11-27 13:11:05	\N	147	133	16	f
417	2013-11-27 13:15:57	\N	136	106	2	f
383	2013-11-27 13:09:33	\N	277	101	7	f
461	2013-11-27 13:23:23	\N	277	105	12	f
418	2013-11-27 13:16:01	\N	262	103	4	f
435	2013-11-27 13:19:38	\N	262	103	0	f
464	2013-11-27 13:23:46	\N	262	103	0	f
391	2013-11-27 13:12:09	\N	262	100	1	f
409	2013-11-27 13:14:36	\N	136	105	14	f
412	2013-11-27 13:14:52	\N	262	103	5	f
463	2013-11-27 13:23:44	\N	275	100	1	f
433	2013-11-27 13:19:04	2013-11-27 13:19:43	277	104	20	f
397	2013-11-27 13:12:58	\N	277	104	11	f
384	2013-11-27 13:09:57	2013-11-27 13:10:29	277	101	20	f
419	2013-11-27 13:16:10	\N	277	104	5	f
386	2013-11-27 13:10:42	\N	262	100	2	f
426	2013-11-27 13:17:39	\N	147	133	11	f
420	2013-11-27 13:16:14	\N	136	106	6	f
411	2013-11-27 13:14:48	\N	277	104	17	f
399	2013-11-27 13:13:15	\N	262	102	2	f
398	2013-11-27 13:13:06	2013-11-27 13:13:33	136	104	20	f
400	2013-11-27 13:13:34	\N	277	104	2	f
421	2013-11-27 13:16:24	\N	262	103	4	f
430	2013-11-27 13:18:46	\N	277	104	4	f
423	2013-11-27 13:16:35	\N	136	106	0	f
402	2013-11-27 13:13:44	\N	136	105	3	f
394	2013-11-27 13:12:23	2013-11-27 13:12:34	262	100	20	f
441	2013-11-27 13:20:40	\N	262	103	7	f
403	2013-11-27 13:13:51	\N	277	104	0	f
452	2013-11-27 13:21:59	\N	277	105	10	f
453	2013-11-27 13:22:10	\N	262	103	2	f
459	2013-11-27 13:23:05	\N	262	103	1	f
470	2013-11-27 13:24:26	\N	277	105	15	f
432	2013-11-27 13:19:00	\N	147	133	1	f
414	2013-11-27 13:15:17	\N	262	103	8	f
444	2013-11-27 13:21:06	\N	262	103	0	f
457	2013-11-27 13:22:51	\N	277	105	13	f
450	2013-11-27 13:21:47	\N	136	106	5	f
422	2013-11-27 13:16:31	\N	277	104	19	f
429	2013-11-27 13:18:24	\N	136	106	11	f
443	2013-11-27 13:20:49	\N	277	105	16	f
445	2013-11-27 13:21:17	\N	262	103	0	f
473	2013-11-27 13:24:47	\N	262	103	3	f
424	2013-11-27 13:17:14	\N	277	104	6	f
437	2013-11-27 13:19:54	\N	277	105	13	f
460	2013-11-27 13:23:18	\N	262	103	2	f
436	2013-11-27 13:19:52	\N	262	103	12	f
438	2013-11-27 13:20:18	\N	147	133	0	f
447	2013-11-27 13:21:28	\N	262	103	0	f
466	2013-11-27 13:23:56	\N	277	105	11	f
440	2013-11-27 13:20:28	\N	262	103	0	f
446	2013-11-27 13:21:26	\N	277	105	4	f
456	2013-11-27 13:22:38	\N	275	100	1	f
442	2013-11-27 13:20:47	\N	136	106	5	f
472	2013-11-27 13:24:40	2013-11-27 13:25:00	275	100	20	f
448	2013-11-27 13:21:41	\N	262	103	2	f
454	2013-11-27 13:22:25	\N	277	105	9	f
455	2013-11-27 13:22:28	\N	262	103	5	f
462	2013-11-27 13:23:32	\N	262	103	1	f
471	2013-11-27 13:24:29	\N	255	109	9	f
467	2013-11-27 13:24:04	\N	275	100	0	f
465	2013-11-27 13:23:52	2013-11-27 13:24:18	255	108	20	f
478	2013-11-27 13:25:11	\N	262	103	1	f
469	2013-11-27 13:24:19	\N	262	103	9	f
483	2013-11-27 13:25:59	\N	266	100	5	f
474	2013-11-27 13:24:54	2013-11-27 13:25:27	255	109	20	f
480	2013-11-27 13:25:28	\N	262	103	0	f
475	2013-11-27 13:25:01	\N	277	105	13	f
479	2013-11-27 13:25:27	\N	275	101	1	f
477	2013-11-27 13:25:10	\N	275	101	1	f
481	2013-11-27 13:25:36	\N	266	100	15	f
476	2013-11-27 13:25:07	\N	266	100	7	f
487	2013-11-27 15:36:07	2013-11-27 15:36:18	142	100	10	f
485	2013-11-27 13:26:18	\N	255	110	0	f
486	2013-11-27 13:26:26	\N	266	100	0	f
482	2013-11-27 13:25:38	\N	255	110	4	f
488	2013-11-27 15:36:28	2013-11-27 15:36:42	142	101	10	f
489	2013-11-27 15:36:53	2013-11-27 15:37:08	142	102	10	f
491	2013-11-27 15:37:31	2013-11-27 15:37:55	142	103	10	f
490	2013-11-27 15:37:19	\N	142	103	0	f
492	2013-11-27 15:38:05	2013-11-27 15:39:16	142	104	10	f
493	2013-11-27 15:38:37	\N	177	100	6	f
496	2013-11-27 15:39:26	2013-11-27 15:39:49	142	105	10	f
494	2013-11-27 15:39:00	2013-11-27 15:39:10	177	100	10	f
495	2013-11-27 15:39:21	\N	177	101	0	f
498	2013-11-27 15:40:02	\N	177	101	1	f
497	2013-11-27 15:39:59	2013-11-27 15:41:08	142	106	10	f
513	2013-11-27 15:44:06	2013-11-27 15:44:20	152	102	10	f
594	2013-11-27 16:04:43	\N	162	106	2	f
580	2013-11-27 15:59:32	2013-11-27 15:59:47	170	106	10	f
499	2013-11-27 15:40:16	\N	177	101	4	f
500	2013-11-27 15:40:36	\N	177	101	1	f
538	2013-11-27 15:49:51	\N	142	107	0	f
548	2013-11-27 15:53:46	2013-11-27 15:53:55	162	100	10	f
501	2013-11-27 15:40:51	\N	177	101	5	f
526	2013-11-27 15:46:17	2013-11-27 15:46:30	152	106	10	f
514	2013-11-27 15:44:20	\N	177	104	8	f
515	2013-11-27 15:44:30	\N	152	103	3	f
554	2013-11-27 15:55:44	2013-11-27 15:55:56	152	110	10	f
549	2013-11-27 15:54:06	\N	162	101	2	f
502	2013-11-27 15:41:08	2013-11-27 15:41:21	177	101	10	f
561	2013-11-27 15:57:13	\N	170	101	3	f
537	2013-11-27 15:49:47	2013-11-27 15:50:05	177	108	10	f
504	2013-11-27 15:41:32	\N	177	102	7	f
517	2013-11-27 15:44:45	\N	152	103	7	f
595	2013-11-27 16:04:54	\N	144	101	0	f
527	2013-11-27 15:46:31	2013-11-27 15:46:45	177	106	10	f
555	2013-11-27 15:55:46	2013-11-27 15:56:01	162	103	10	f
528	2013-11-27 15:46:41	\N	152	107	3	f
516	2013-11-27 15:44:44	2013-11-27 15:44:59	177	104	10	f
505	2013-11-27 15:41:53	2013-11-27 15:42:34	177	102	10	f
570	2013-11-27 15:58:16	2013-11-27 15:58:29	152	115	10	f
519	2013-11-27 15:45:09	\N	177	105	1	f
506	2013-11-27 15:42:44	\N	177	103	8	f
550	2013-11-27 15:54:24	2013-11-27 15:54:41	162	101	10	f
540	2013-11-27 15:50:16	2013-11-27 15:50:29	177	109	10	f
539	2013-11-27 15:50:04	\N	142	107	3	f
518	2013-11-27 15:45:02	2013-11-27 15:45:17	152	103	10	f
571	2013-11-27 15:58:30	\N	170	104	1	f
566	2013-11-27 15:57:46	2013-11-27 15:57:59	170	102	10	f
508	2013-11-27 15:43:11	2013-11-27 15:43:18	152	100	10	f
572	2013-11-27 15:58:33	\N	162	105	1	f
529	2013-11-27 15:46:55	\N	177	107	9	f
507	2013-11-27 15:43:08	\N	177	103	8	f
541	2013-11-27 15:50:40	\N	177	110	6	f
509	2013-11-27 15:43:29	\N	152	101	2	f
530	2013-11-27 15:46:59	2013-11-27 15:47:16	152	107	10	f
542	2013-11-27 15:50:46	\N	142	107	1	f
510	2013-11-27 15:43:34	\N	177	103	6	f
598	2013-11-27 16:09:10	2013-11-27 16:09:20	159	100	10	f
544	2013-11-27 15:51:07	\N	142	107	0	f
532	2013-11-27 15:47:26	\N	152	108	3	f
556	2013-11-27 15:56:07	2013-11-27 15:56:18	152	111	10	f
551	2013-11-27 15:54:52	2013-11-27 15:55:15	162	102	10	f
531	2013-11-27 15:47:25	\N	177	107	7	f
520	2013-11-27 15:45:25	2013-11-27 15:45:41	177	105	10	f
511	2013-11-27 15:43:43	2013-11-27 15:43:56	152	101	10	f
533	2013-11-27 15:47:40	\N	152	108	1	f
521	2013-11-27 15:45:28	2013-11-27 15:45:42	152	104	10	f
503	2013-11-27 15:41:18	\N	142	107	7	f
562	2013-11-27 15:57:14	2013-11-27 15:57:24	152	113	10	f
522	2013-11-27 15:45:52	\N	177	106	2	f
512	2013-11-27 15:43:54	2013-11-27 15:44:09	177	103	10	f
578	2013-11-27 15:59:20	\N	162	105	0	f
543	2013-11-27 15:51:03	2013-11-27 15:51:21	177	110	10	f
557	2013-11-27 15:56:12	2013-11-27 15:57:27	162	104	10	f
567	2013-11-27 15:57:55	2013-11-27 15:58:06	152	114	10	f
523	2013-11-27 15:45:52	2013-11-27 15:46:07	152	105	10	f
590	2013-11-27 16:02:08	2013-11-27 16:02:24	152	130	10	f
545	2013-11-27 15:51:32	\N	177	111	7	f
558	2013-11-27 15:56:28	2013-11-27 15:56:41	152	112	10	f
525	2013-11-27 15:46:09	\N	177	106	5	f
577	2013-11-27 15:59:08	2013-11-27 15:59:21	170	105	10	f
535	2013-11-27 15:47:56	2013-11-27 15:49:33	152	108	10	f
552	2013-11-27 15:55:20	2013-11-27 15:55:33	152	109	10	f
585	2013-11-27 16:00:35	\N	170	108	0	f
553	2013-11-27 15:55:25	\N	162	103	8	f
546	2013-11-27 15:51:55	2013-11-27 15:52:18	177	111	10	f
534	2013-11-27 15:47:50	2013-11-27 15:49:37	177	107	10	f
524	2013-11-27 15:45:56	\N	142	107	7	f
536	2013-11-27 15:49:44	\N	152	109	0	f
547	2013-11-27 15:52:29	\N	177	112	1	f
592	2013-11-27 16:04:23	2013-11-27 16:04:30	144	100	10	f
584	2013-11-27 16:00:21	2013-11-27 16:00:36	152	118	10	f
563	2013-11-27 15:57:26	2013-11-27 15:57:36	170	101	10	f
559	2013-11-27 15:56:51	\N	152	113	8	f
586	2013-11-27 16:00:47	\N	152	119	2	f
573	2013-11-27 15:58:39	\N	152	116	8	f
588	2013-11-27 16:01:27	2013-11-27 16:01:41	152	120	10	f
565	2013-11-27 15:57:37	\N	162	105	1	f
564	2013-11-27 15:57:34	\N	152	114	9	f
560	2013-11-27 15:56:55	2013-11-27 15:57:03	170	100	10	f
574	2013-11-27 15:58:43	2013-11-27 15:58:57	170	104	10	f
603	2013-11-27 16:28:15	2013-11-27 16:28:51	142	108	10	f
604	2013-11-27 16:29:01	\N	142	109	0	f
568	2013-11-27 15:57:55	\N	162	105	9	f
569	2013-11-27 15:58:09	2013-11-27 15:58:20	170	103	10	f
579	2013-11-27 15:59:21	2013-11-27 15:59:36	152	116	10	f
576	2013-11-27 15:59:03	\N	152	116	4	f
575	2013-11-27 15:58:45	\N	162	105	1	f
582	2013-11-27 15:59:57	2013-11-27 16:00:10	170	107	10	f
589	2013-11-27 16:01:51	\N	152	130	4	f
581	2013-11-27 15:59:47	2013-11-27 16:00:11	152	117	10	f
583	2013-11-27 16:00:21	\N	170	108	1	f
599	2013-11-27 16:09:30	\N	159	101	4	f
591	2013-11-27 16:04:21	2013-11-27 16:04:32	162	105	10	f
587	2013-11-27 16:01:02	2013-11-27 16:01:15	152	119	10	f
600	2013-11-27 16:09:51	\N	159	101	0	f
601	2013-11-27 16:18:55	\N	1	100	0	f
593	2013-11-27 16:04:40	\N	144	101	2	f
597	2013-11-27 16:05:16	2013-11-27 16:05:26	144	102	10	f
596	2013-11-27 16:04:56	2013-11-27 16:05:05	144	101	10	f
602	2013-11-27 16:27:47	2013-11-27 16:28:04	142	107	10	f
606	2013-11-29 10:44:26	2013-11-29 10:44:39	255	111	1	f
605	2013-11-29 10:44:11	2013-11-29 10:44:25	255	110	10	f
607	2013-11-29 10:44:39	\N	255	112	0	f
\.


--
-- Name: games_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_attempts_id_seq', 607, true);


--
-- Name: games_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_id_seq', 6, true);


--
-- Data for Name: grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY grades (id, grade) FROM stdin;
1	K
\.


--
-- Name: grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('grades_id_seq', 1, true);


--
-- Data for Name: levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels (id, description) FROM stdin;
0	Start of Journey
100	Pad
101	Pad
102	Pad
103	Pad
104	Pad
105	Pad
106	Pad
107	Pad
108	Pad
109	Pad
110	Pad
111	Pad
112	Pad
113	Pad
114	Pad
115	Pad
116	Pad
117	Pad
118	Pad
119	Pad
120	Pad
130	Pad
131	Pad
132	Pad
133	Pad
134	Pad
135	Pad
136	Pad
137	Pad
139	Pad
140	Pad
141	Pad
142	Pad
143	Pad
144	Pad
145	Pad
146	Pad
147	Pad
148	Pad
149	Pad
150	Pad
151	Pad
152	Pad
153	Pad
154	Pad
155	Pad
156	Pad
157	Pad
158	Pad
159	Pad
160	Pad
161	Pad
162	Pad
163	Pad
164	Pad
165	Pad
166	Pad
167	Pad
168	Pad
169	Pad
170	Pad
171	Pad
172	Pad
173	Pad
174	Pad
175	Pad
176	Pad
177	Pad
178	Pad
179	Pad
190	Pad
191	Pad
192	Pad
193	Pad
194	Pad
195	Pad
196	Pad
197	Pad
198	Pad
199	Pad
200	Pad
201	Pad
202	Pad
203	Pad
204	Pad
205	Pad
206	Pad
207	Pad
208	Pad
209	Pad
210	Pad
211	Pad
212	Pad
213	Pad
214	Pad
215	Pad
216	Pad
217	Pad
218	Pad
219	Pad
220	Pad
221	Pad
222	Pad
223	Pad
224	Pad
225	Pad
226	Pad
227	Pad
228	Pad
229	Pad
230	Pad
231	Pad
232	Pad
233	Pad
234	Pad
235	Pad
236	Pad
237	Pad
238	Pad
239	Pad
240	Pad
241	Pad
242	Pad
243	Pad
244	Pad
245	Pad
246	Pad
247	Pad
248	Pad
249	Pad
250	Pad
251	Pad
252	Pad
253	Pad
254	Pad
255	Pad
256	Pad
257	Pad
258	Pad
259	Pad
260	Pad
261	Pad
262	Pad
263	Pad
264	Pad
265	Pad
266	Pad
267	Pad
268	Pad
269	Pad
270	Pad
271	Pad
272	Pad
273	Pad
274	Pad
275	Pad
276	Pad
277	Pad
278	Pad
279	Pad
290	Pad
291	Pad
292	Pad
293	Pad
294	Pad
295	Pad
296	Pad
297	Pad
298	Pad
299	Pad
301	Pad
302	Pad
303	Pad
304	Pad
305	Pad
306	Pad
307	Pad
308	Pad
309	Pad
310	Pad
311	Pad
312	Pad
313	Pad
314	Pad
315	Pad
316	Pad
317	Pad
318	Pad
319	Pad
320	Pad
321	Pad
322	Pad
323	Pad
324	Pad
325	Pad
326	Pad
327	Pad
328	Pad
329	Pad
330	Pad
331	Pad
332	Pad
333	Pad
334	Pad
335	Pad
336	Pad
337	Pad
338	Pad
339	Pad
340	Pad
341	Pad
342	Pad
343	Pad
344	Pad
345	Pad
346	Pad
347	Pad
348	Pad
349	Pad
350	Pad
351	Pad
352	Pad
353	Pad
354	Pad
355	Pad
356	Pad
357	Pad
358	Pad
359	Pad
360	Pad
361	Pad
362	Pad
363	Pad
364	Pad
365	Pad
366	Pad
367	Pad
368	Pad
369	Pad
370	Pad
371	Pad
372	Pad
373	Pad
374	Pad
375	Pad
376	Pad
377	Pad
378	Pad
379	Pad
390	Pad
391	Pad
392	Pad
393	Pad
394	Pad
395	Pad
396	Pad
397	Pad
398	Pad
399	Pad
401	Pad
402	Pad
403	Pad
404	Pad
405	Pad
406	Pad
407	Pad
408	Pad
409	Pad
410	Pad
411	Pad
412	Pad
413	Pad
414	Pad
415	Pad
416	Pad
417	Pad
418	Pad
419	Pad
420	Pad
421	Pad
422	Pad
423	Pad
424	Pad
425	Pad
426	Pad
427	Pad
428	Pad
429	Pad
430	Pad
431	Pad
432	Pad
433	Pad
434	Pad
435	Pad
436	Pad
437	Pad
438	Pad
439	Pad
440	Pad
441	Pad
442	Pad
443	Pad
444	Pad
445	Pad
446	Pad
447	Pad
448	Pad
449	Pad
450	Pad
451	Pad
452	Pad
453	Pad
454	Pad
455	Pad
456	Pad
457	Pad
458	Pad
459	Pad
460	Pad
461	Pad
462	Pad
463	Pad
464	Pad
465	Pad
466	Pad
467	Pad
468	Pad
469	Pad
470	Pad
471	Pad
472	Pad
473	Pad
474	Pad
475	Pad
476	Pad
477	Pad
478	Pad
479	Pad
490	Pad
491	Pad
492	Pad
493	Pad
494	Pad
495	Pad
496	Pad
497	Pad
498	Pad
499	Pad
501	Pad
502	Pad
503	Pad
504	Pad
505	Pad
506	Pad
507	Pad
508	Pad
509	Pad
510	Pad
511	Pad
512	Pad
513	Pad
514	Pad
515	Pad
516	Pad
517	Pad
518	Pad
519	Pad
520	Pad
521	Pad
522	Pad
523	Pad
524	Pad
525	Pad
526	Pad
527	Pad
528	Pad
529	Pad
530	Pad
531	Pad
532	Pad
533	Pad
534	Pad
535	Pad
536	Pad
537	Pad
538	Pad
539	Pad
540	Pad
541	Pad
542	Pad
543	Pad
544	Pad
545	Pad
546	Pad
547	Pad
548	Pad
549	Pad
550	Pad
551	Pad
552	Pad
553	Pad
554	Pad
555	Pad
556	Pad
557	Pad
558	Pad
559	Pad
560	Pad
561	Pad
562	Pad
563	Pad
564	Pad
565	Pad
566	Pad
567	Pad
568	Pad
569	Pad
570	Pad
571	Pad
572	Pad
573	Pad
574	Pad
575	Pad
576	Pad
577	Pad
578	Pad
579	Pad
590	Pad
591	Pad
592	Pad
593	Pad
594	Pad
595	Pad
596	Pad
597	Pad
598	Pad
599	Pad
\.


--
-- Data for Name: levels_standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
\.


--
-- Data for Name: levels_transactions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_transactions (id, advancement_time, level_id, user_id) FROM stdin;
1	2013-11-26 21:03:29.100545	0	1
2	2013-11-26 21:04:01.51448	0	2
3	2013-11-26 21:04:01.528489	0	3
4	2013-11-26 21:04:01.537373	0	4
5	2013-11-26 21:04:01.543777	0	5
6	2013-11-26 21:04:01.550183	0	6
7	2013-11-26 21:04:01.555397	0	7
8	2013-11-26 21:04:01.560382	0	8
9	2013-11-26 21:04:01.566749	0	9
10	2013-11-26 21:04:01.572029	0	10
11	2013-11-26 21:04:01.577212	0	11
12	2013-11-26 21:04:01.584998	0	12
13	2013-11-26 21:04:01.590002	0	13
14	2013-11-26 21:04:01.595181	0	14
15	2013-11-26 21:04:01.60048	0	15
16	2013-11-26 21:04:01.610689	0	16
17	2013-11-26 21:04:01.620024	0	17
18	2013-11-26 21:04:01.625107	0	18
19	2013-11-26 21:04:01.631662	0	19
20	2013-11-26 21:04:01.636649	0	20
21	2013-11-26 21:04:01.641787	0	21
22	2013-11-26 21:04:01.649316	0	22
23	2013-11-26 21:04:01.654308	0	23
24	2013-11-26 21:04:01.659825	0	24
25	2013-11-26 21:04:01.665175	0	25
26	2013-11-26 21:04:01.671301	0	26
27	2013-11-26 21:04:01.677739	0	27
28	2013-11-26 21:04:01.683158	0	28
29	2013-11-26 21:04:01.688098	0	29
30	2013-11-26 21:04:01.694504	0	30
31	2013-11-26 21:04:01.699705	0	31
32	2013-11-26 21:04:01.710455	0	32
33	2013-11-26 21:04:01.7176	0	33
34	2013-11-26 21:04:01.733613	0	34
35	2013-11-26 21:04:01.742966	0	35
36	2013-11-26 21:04:01.753599	0	36
37	2013-11-26 21:04:01.764804	0	37
38	2013-11-26 21:04:01.770212	0	38
39	2013-11-26 21:04:01.776206	0	39
40	2013-11-26 21:04:01.781491	0	40
41	2013-11-26 21:04:01.786618	0	41
42	2013-11-26 21:04:01.79311	0	42
43	2013-11-26 21:04:01.799254	0	43
44	2013-11-26 21:04:01.808618	0	44
45	2013-11-26 21:04:01.814736	0	45
46	2013-11-26 21:04:01.822573	0	46
47	2013-11-26 21:04:01.827576	0	47
48	2013-11-26 21:04:01.833033	0	48
49	2013-11-26 21:04:01.83801	0	49
50	2013-11-26 21:04:01.844415	0	50
51	2013-11-26 21:04:01.849374	0	51
52	2013-11-26 21:04:01.855996	0	52
53	2013-11-26 21:04:01.862132	0	53
54	2013-11-26 21:04:01.86707	0	54
55	2013-11-26 21:04:01.872508	0	55
56	2013-11-26 21:04:01.877462	0	56
57	2013-11-26 21:04:01.885033	0	57
58	2013-11-26 21:04:01.890018	0	58
59	2013-11-26 21:04:01.895319	0	59
60	2013-11-26 21:04:01.90054	0	60
61	2013-11-26 21:04:01.911689	0	61
62	2013-11-26 21:04:01.918412	0	62
63	2013-11-26 21:04:01.923647	0	63
64	2013-11-26 21:04:01.929535	0	64
65	2013-11-26 21:04:01.935069	0	65
66	2013-11-26 21:04:01.940061	0	66
67	2013-11-26 21:04:01.947525	0	67
68	2013-11-26 21:04:01.952508	0	68
69	2013-11-26 21:04:01.957711	0	69
70	2013-11-26 21:04:01.962998	0	70
71	2013-11-26 21:04:01.969369	0	71
72	2013-11-26 21:04:01.974467	0	72
73	2013-11-26 21:04:01.980935	0	73
74	2013-11-26 21:04:01.986121	0	74
75	2013-11-26 21:04:01.992641	0	75
76	2013-11-26 21:04:01.997847	0	76
77	2013-11-26 21:04:02.002807	0	77
78	2013-11-26 21:04:02.020542	0	78
79	2013-11-26 21:04:02.02955	0	79
80	2013-11-26 21:04:02.040866	0	80
81	2013-11-26 21:04:02.050682	0	81
82	2013-11-26 21:04:02.057392	0	82
83	2013-11-26 21:04:02.062563	0	83
84	2013-11-26 21:04:02.067523	0	84
85	2013-11-26 21:04:02.072649	0	85
86	2013-11-26 21:04:02.080478	0	86
87	2013-11-26 21:04:02.085545	0	87
88	2013-11-26 21:04:02.090723	0	88
89	2013-11-26 21:04:02.096605	0	89
90	2013-11-26 21:04:02.101915	0	90
91	2013-11-26 21:04:02.112555	0	91
92	2013-11-26 21:04:02.118554	0	92
93	2013-11-26 21:04:02.12372	0	93
94	2013-11-26 21:04:02.128633	0	94
95	2013-11-26 21:04:02.133888	0	95
96	2013-11-26 21:04:02.141578	0	96
97	2013-11-26 21:04:02.146706	0	97
98	2013-11-26 21:04:02.151648	0	98
99	2013-11-26 21:04:02.15682	0	99
100	2013-11-26 21:04:02.163046	0	100
101	2013-11-26 21:04:02.169571	0	101
102	2013-11-26 21:04:02.175114	0	102
103	2013-11-26 21:04:02.180101	0	103
104	2013-11-26 21:04:02.186285	0	104
105	2013-11-26 21:04:02.191231	0	105
106	2013-11-26 21:04:02.196353	0	106
107	2013-11-26 21:04:02.204226	0	107
108	2013-11-26 21:04:02.214961	0	108
109	2013-11-26 21:04:02.21997	0	109
110	2013-11-26 21:04:02.226082	0	110
111	2013-11-26 21:04:02.23274	0	111
112	2013-11-26 21:04:02.238089	0	112
113	2013-11-26 21:04:02.243426	0	113
114	2013-11-26 21:04:02.249601	0	114
115	2013-11-26 21:04:02.25454	0	115
116	2013-11-26 21:04:02.261352	0	116
117	2013-11-26 21:04:02.267484	0	117
118	2013-11-26 21:04:02.272497	0	118
119	2013-11-26 21:04:02.277617	0	119
120	2013-11-26 21:04:02.282597	0	120
121	2013-11-26 21:04:02.28863	0	121
122	2013-11-26 21:04:02.295371	0	122
123	2013-11-26 21:04:02.300831	0	123
124	2013-11-26 21:04:02.310044	0	124
125	2013-11-26 21:04:02.326122	0	125
126	2013-11-26 21:04:02.335551	0	126
127	2013-11-26 21:04:02.345902	0	127
128	2013-11-26 21:04:02.355754	0	128
129	2013-11-26 21:04:02.360919	0	129
130	2013-11-26 21:04:02.365872	0	130
131	2013-11-26 21:04:02.371182	0	131
132	2013-11-26 21:04:02.377103	0	132
133	2013-11-26 21:04:02.383761	0	133
134	2013-11-26 21:04:02.389409	0	134
135	2013-11-26 21:04:02.395263	0	135
136	2013-11-26 21:04:02.400447	0	136
137	2013-11-26 21:04:02.405436	0	137
138	2013-11-26 21:04:02.418841	0	138
139	2013-11-26 21:04:02.423849	0	139
140	2013-11-26 21:04:02.429156	0	140
141	2013-11-26 21:04:02.43414	0	141
142	2013-11-26 21:04:02.440169	0	142
143	2013-11-26 21:04:02.447039	0	143
144	2013-11-26 21:04:02.452419	0	144
145	2013-11-26 21:04:02.457556	0	145
146	2013-11-26 21:04:02.464497	0	146
147	2013-11-26 21:04:02.469535	0	147
148	2013-11-26 21:04:02.474737	0	148
149	2013-11-26 21:04:02.482519	0	149
150	2013-11-26 21:04:02.487493	0	150
151	2013-11-26 21:04:02.492796	0	151
152	2013-11-26 21:04:02.497753	0	152
153	2013-11-26 21:04:02.503968	0	153
154	2013-11-26 21:04:02.516174	0	154
155	2013-11-26 21:04:02.521242	0	155
156	2013-11-26 21:04:02.527302	0	156
157	2013-11-26 21:04:02.532274	0	157
158	2013-11-26 21:04:02.538974	0	158
159	2013-11-26 21:04:02.545842	0	159
160	2013-11-26 21:04:02.550808	0	160
161	2013-11-26 21:04:02.555926	0	161
162	2013-11-26 21:04:02.560903	0	162
163	2013-11-26 21:04:02.567108	0	163
164	2013-11-26 21:04:02.57391	0	164
165	2013-11-26 21:04:02.579002	0	165
166	2013-11-26 21:04:02.584425	0	166
167	2013-11-26 21:04:02.590635	0	167
168	2013-11-26 21:04:02.595948	0	168
169	2013-11-26 21:04:02.602915	0	169
170	2013-11-26 21:04:02.612554	0	170
171	2013-11-26 21:04:02.626191	0	171
172	2013-11-26 21:04:02.638064	0	172
173	2013-11-26 21:04:02.646373	0	173
174	2013-11-26 21:04:02.657838	0	174
175	2013-11-26 21:04:02.663455	0	175
176	2013-11-26 21:04:02.668519	0	176
177	2013-11-26 21:04:02.674661	0	177
178	2013-11-26 21:04:02.681135	0	178
179	2013-11-26 21:04:02.686343	0	179
180	2013-11-26 21:04:02.69127	0	180
181	2013-11-26 21:04:02.697769	0	181
182	2013-11-26 21:04:02.702716	0	182
183	2013-11-26 21:04:02.71313	0	183
184	2013-11-26 21:04:02.719338	0	184
185	2013-11-26 21:04:02.724587	0	185
186	2013-11-26 21:04:02.729765	0	186
187	2013-11-26 21:04:02.734724	0	187
188	2013-11-26 21:04:02.742295	0	188
189	2013-11-26 21:04:02.747465	0	189
190	2013-11-26 21:04:02.752411	0	190
191	2013-11-26 21:04:02.758873	0	191
192	2013-11-26 21:04:02.763832	0	192
193	2013-11-26 21:04:02.770628	0	193
194	2013-11-26 21:04:02.775623	0	194
195	2013-11-26 21:04:02.78179	0	195
196	2013-11-26 21:04:02.787099	0	196
197	2013-11-26 21:04:02.792185	0	197
198	2013-11-26 21:04:02.797175	0	198
199	2013-11-26 21:04:02.804866	0	199
200	2013-11-26 21:04:02.815449	0	200
201	2013-11-26 21:04:02.821546	0	201
202	2013-11-26 21:04:02.826537	0	202
203	2013-11-26 21:04:02.833335	0	203
204	2013-11-26 21:04:02.838335	0	204
205	2013-11-26 21:04:02.844814	0	205
206	2013-11-26 21:04:02.849929	0	206
207	2013-11-26 21:04:02.854876	0	207
208	2013-11-26 21:04:02.860018	0	208
209	2013-11-26 21:04:02.867826	0	209
210	2013-11-26 21:04:02.873109	0	210
211	2013-11-26 21:04:02.878421	0	211
212	2013-11-26 21:04:02.883643	0	212
213	2013-11-26 21:04:02.889557	0	213
214	2013-11-26 21:04:02.896127	0	214
215	2013-11-26 21:04:02.901515	0	215
216	2013-11-26 21:04:02.910974	0	216
217	2013-11-26 21:04:02.924843	0	217
218	2013-11-26 21:04:02.937345	0	218
219	2013-11-26 21:04:02.945846	0	219
220	2013-11-26 21:04:02.95383	0	220
221	2013-11-26 21:04:02.96038	0	221
222	2013-11-26 21:04:02.965724	0	222
223	2013-11-26 21:04:02.972103	0	223
224	2013-11-26 21:04:02.977215	0	224
225	2013-11-26 21:04:02.982175	0	225
226	2013-11-26 21:04:02.988891	0	226
227	2013-11-26 21:04:02.995531	0	227
228	2013-11-26 21:04:03.000779	0	228
229	2013-11-26 21:04:03.005837	0	229
230	2013-11-26 21:04:03.018807	0	230
231	2013-11-26 21:04:03.024277	0	231
232	2013-11-26 21:04:03.029714	0	232
233	2013-11-26 21:04:03.035598	0	233
234	2013-11-26 21:04:03.040752	0	234
235	2013-11-26 21:04:03.045765	0	235
236	2013-11-26 21:04:03.052443	0	236
237	2013-11-26 21:04:03.058677	0	237
238	2013-11-26 21:04:03.063895	0	238
239	2013-11-26 21:04:03.068861	0	239
240	2013-11-26 21:04:03.07462	0	240
241	2013-11-26 21:04:03.082234	0	241
242	2013-11-26 21:04:03.087574	0	242
243	2013-11-26 21:04:03.092805	0	243
244	2013-11-26 21:04:03.098672	0	244
245	2013-11-26 21:04:03.104019	0	245
246	2013-11-26 21:04:03.114428	0	246
247	2013-11-26 21:04:03.121331	0	247
248	2013-11-26 21:04:03.126248	0	248
249	2013-11-26 21:04:03.131483	0	249
250	2013-11-26 21:04:03.136559	0	250
251	2013-11-26 21:04:03.144342	0	251
252	2013-11-26 21:04:03.149411	0	252
253	2013-11-26 21:04:03.154508	0	253
254	2013-11-26 21:04:03.159436	0	254
255	2013-11-26 21:04:03.165694	0	255
256	2013-11-26 21:04:03.172149	0	256
257	2013-11-26 21:04:03.17789	0	257
258	2013-11-26 21:04:03.182854	0	258
259	2013-11-26 21:04:03.18906	0	259
260	2013-11-26 21:04:03.194019	0	260
261	2013-11-26 21:04:03.199195	0	261
262	2013-11-26 21:04:03.207282	0	262
263	2013-11-26 21:04:03.224475	0	263
264	2013-11-26 21:04:03.234877	0	264
265	2013-11-26 21:04:03.245475	0	265
266	2013-11-26 21:04:03.255264	0	266
267	2013-11-26 21:04:03.260515	0	267
268	2013-11-26 21:04:03.265816	0	268
269	2013-11-26 21:04:03.271912	0	269
270	2013-11-26 21:04:03.276865	0	270
271	2013-11-26 21:04:03.283891	0	271
272	2013-11-26 21:04:03.2891	0	272
273	2013-11-26 21:04:03.295575	0	273
274	2013-11-26 21:04:03.300696	0	274
275	2013-11-26 21:04:03.306053	0	275
276	2013-11-26 21:04:03.316726	0	276
277	2013-11-26 21:04:03.322678	0	277
278	2013-11-26 21:04:03.327949	0	278
279	2013-11-26 21:04:03.334085	0	279
280	2013-11-26 21:04:03.339029	0	280
281	2013-11-26 21:04:03.345757	0	281
282	2013-11-26 21:04:03.350766	0	282
283	2013-11-26 21:04:03.357164	0	283
284	2013-11-26 21:04:03.36211	0	284
285	2013-11-26 21:04:03.367404	0	285
286	2013-11-26 21:04:03.373986	0	286
287	2013-11-26 21:04:03.379911	0	287
288	2013-11-26 21:04:03.385521	0	288
289	2013-11-26 21:04:03.390466	0	289
290	2013-11-26 21:04:03.395623	0	290
291	2013-11-26 21:04:03.401551	0	291
292	2013-11-26 21:04:03.408117	0	292
293	2013-11-26 21:04:03.420506	0	293
294	2013-11-26 21:04:03.425874	0	294
295	2013-11-26 21:04:03.430844	0	295
296	2013-11-26 21:04:03.437514	0	296
297	2013-11-26 21:04:03.443411	0	297
298	2013-11-26 21:04:03.448894	0	298
299	2013-11-26 21:04:03.453893	0	299
300	2013-11-26 21:04:03.458969	0	300
301	2013-11-26 21:04:03.466408	0	301
302	2013-11-26 21:04:03.471752	0	302
303	2013-11-26 21:04:03.477227	0	303
304	2013-11-26 21:04:03.483146	0	304
305	2013-11-26 21:04:03.488261	0	305
306	2013-11-26 21:04:03.493376	0	306
307	2013-11-26 21:04:03.500585	0	307
308	2013-11-26 21:04:03.506945	0	308
309	2013-11-26 21:04:03.523775	0	309
310	2013-11-26 21:04:03.534928	0	310
311	2013-11-26 21:04:03.544817	0	311
312	2013-11-26 21:04:03.555714	0	312
313	2013-11-26 21:04:03.564053	0	313
314	2013-11-26 21:04:03.570352	0	314
315	2013-11-26 21:04:03.575463	0	315
316	2013-11-26 21:04:03.580852	0	316
317	2013-11-26 21:04:03.586902	0	317
318	2013-11-26 21:04:03.594901	0	318
319	2013-11-26 21:04:03.600188	0	319
320	2013-11-26 21:04:03.605339	0	320
321	2013-11-26 21:04:03.61548	0	321
322	2013-11-26 21:04:03.624501	0	322
323	2013-11-26 21:04:03.630497	0	323
324	2013-11-26 21:04:03.636782	0	324
325	2013-11-26 21:04:03.641885	0	325
326	2013-11-26 21:04:03.646865	0	326
327	2013-11-26 21:04:03.655619	0	327
328	2013-11-26 21:04:03.661165	0	328
329	2013-11-26 21:04:03.666256	0	329
330	2013-11-26 21:04:03.671431	0	330
331	2013-11-26 21:04:03.677378	0	331
332	2013-11-26 21:04:03.684263	0	332
333	2013-11-26 21:04:03.689784	0	333
334	2013-11-26 21:04:03.696825	0	334
335	2013-11-26 21:04:03.702181	0	335
336	2013-11-26 21:04:03.707315	0	336
337	2013-11-26 21:04:03.718201	0	337
338	2013-11-26 21:04:03.72412	0	338
339	2013-11-26 21:04:03.729458	0	339
340	2013-11-26 21:04:03.735094	0	340
341	2013-11-26 21:04:03.741181	0	341
342	2013-11-26 21:04:03.747994	0	342
343	2013-11-26 21:04:03.753301	0	343
344	2013-11-26 21:04:03.758228	0	344
345	2013-11-26 21:04:03.765045	0	345
346	2013-11-26 21:04:03.770974	0	346
347	2013-11-26 21:04:03.777985	0	347
348	2013-11-26 21:04:03.784093	0	348
349	2013-11-26 21:04:03.789203	0	349
350	2013-11-26 21:04:03.794368	0	350
351	2013-11-26 21:04:03.799657	0	351
352	2013-11-26 21:04:03.807449	0	352
353	2013-11-26 21:04:03.818295	0	353
354	2013-11-26 21:04:03.831225	0	354
355	2013-11-26 21:04:03.842569	0	355
356	2013-11-26 21:04:03.851355	0	356
357	2013-11-26 21:04:03.859861	0	357
358	2013-11-26 21:04:03.865126	0	358
359	2013-11-26 21:04:03.871267	0	359
360	2013-11-26 21:04:03.87639	0	360
361	2013-11-26 21:04:03.881393	0	361
362	2013-11-26 21:04:03.889024	0	362
363	2013-11-26 21:04:03.894416	0	363
364	2013-11-26 21:04:03.899745	0	364
365	2013-11-26 21:04:03.904891	0	365
366	2013-11-26 21:04:03.910802	0	366
367	2013-11-26 21:04:03.922678	0	367
368	2013-11-26 21:04:03.928244	0	368
369	2013-11-26 21:04:03.934194	0	369
370	2013-11-26 21:04:03.939333	0	370
371	2013-11-26 21:04:03.944299	0	371
372	2013-11-26 21:04:03.950904	0	372
373	2013-11-26 21:04:03.957406	0	373
374	2013-11-26 21:04:03.962946	0	374
375	2013-11-26 21:04:03.968293	0	375
376	2013-11-26 21:04:03.974277	0	376
377	2013-11-26 21:04:03.979422	0	377
378	2013-11-26 21:04:03.986096	0	378
379	2013-11-26 21:04:03.991557	0	379
380	2013-11-26 21:04:03.997794	0	380
381	2013-11-26 21:04:04.002776	0	381
382	2013-11-26 21:04:04.007978	0	382
383	2013-11-26 21:04:04.020498	0	383
384	2013-11-26 21:04:04.026414	0	384
385	2013-11-26 21:04:04.031778	0	385
386	2013-11-26 21:04:04.037694	0	386
387	2013-11-26 21:04:04.044383	0	387
388	2013-11-26 21:04:04.050028	0	388
389	2013-11-26 21:04:04.054946	0	389
390	2013-11-26 21:04:04.061098	0	390
391	2013-11-26 21:04:04.066107	0	391
392	2013-11-26 21:04:04.075334	0	392
393	2013-11-26 21:04:04.081853	0	393
394	2013-11-26 21:04:04.086778	0	394
395	2013-11-26 21:04:04.091973	0	395
396	2013-11-26 21:04:04.096955	0	396
397	2013-11-26 21:04:04.103155	0	397
398	2013-11-26 21:04:04.10999	0	398
399	2013-11-26 21:04:04.124818	0	399
400	2013-11-26 21:04:04.135271	0	400
401	2013-11-26 21:04:04.148619	0	401
402	2013-11-26 21:04:04.155856	0	402
403	2013-11-26 21:04:04.162334	0	403
404	2013-11-26 21:04:04.168953	0	404
405	2013-11-26 21:04:04.173913	0	405
406	2013-11-26 21:04:04.179624	0	406
407	2013-11-26 21:04:04.187191	0	407
408	2013-11-26 21:04:04.192393	0	408
409	2013-11-26 21:04:04.197765	0	409
410	2013-11-26 21:04:04.20292	0	410
411	2013-11-26 21:04:04.209003	0	411
412	2013-11-26 21:04:04.21877	0	412
413	2013-11-26 21:04:04.224477	0	413
414	2013-11-26 21:04:04.231116	0	414
415	2013-11-26 21:04:04.236064	0	415
416	2013-11-26 21:04:04.241225	0	416
417	2013-11-26 21:04:04.247646	0	417
418	2013-11-26 21:04:04.253783	0	418
419	2013-11-26 21:04:04.259088	0	419
420	2013-11-26 21:04:04.264321	0	420
421	2013-11-26 21:04:04.26932	0	421
422	2013-11-26 21:04:04.275332	0	422
423	2013-11-26 21:04:04.281816	0	423
424	2013-11-26 21:04:04.287282	0	424
425	2013-11-26 21:04:04.293538	0	425
426	2013-11-26 21:04:04.298552	0	426
427	2013-11-26 21:04:04.303715	0	427
428	2013-11-26 21:04:04.310237	0	428
429	2013-11-26 21:04:04.321093	0	429
430	2013-11-26 21:04:04.32706	0	430
431	2013-11-26 21:04:04.332057	0	431
432	2013-11-26 21:04:04.33967	0	432
433	2013-11-26 21:04:04.344973	0	433
434	2013-11-26 21:04:04.350334	0	434
435	2013-11-26 21:04:04.355436	0	435
436	2013-11-26 21:04:04.36142	0	436
437	2013-11-26 21:04:04.366717	0	437
438	2013-11-26 21:04:04.374163	0	438
439	2013-11-26 21:04:04.380565	0	439
440	2013-11-26 21:04:04.386195	0	440
441	2013-11-26 21:04:04.391305	0	441
442	2013-11-26 21:04:04.396488	0	442
443	2013-11-26 21:04:04.403919	0	443
444	2013-11-26 21:04:04.409441	0	444
445	2013-11-26 21:04:04.420791	0	445
446	2013-11-26 21:04:04.433035	0	446
447	2013-11-26 21:04:04.443161	0	447
448	2013-11-26 21:04:04.452576	0	448
449	2013-11-26 21:04:04.461511	0	449
450	2013-11-26 21:04:04.46916	0	450
451	2013-11-26 21:04:04.474375	0	451
452	2013-11-26 21:04:04.479359	0	452
453	2013-11-26 21:04:04.485532	0	453
454	2013-11-26 21:04:04.490597	0	454
455	2013-11-26 21:04:04.495959	0	455
456	2013-11-26 21:04:04.503038	0	456
457	2013-11-26 21:04:04.50901	0	457
460	2013-11-26 21:09:11.793888	120	13
461	2013-11-26 21:10:53.501689	130	13
462	2013-11-26 21:14:14.381421	100	255
463	2013-11-27 10:00:28.347233	100	270
464	2013-11-27 10:02:07.189802	100	252
465	2013-11-27 10:02:24.652724	101	270
466	2013-11-27 10:03:18.537682	102	270
467	2013-11-27 10:04:06.96323	103	270
468	2013-11-27 10:04:12.947393	100	263
469	2013-11-27 10:06:52.735121	104	270
470	2013-11-27 10:06:56.961698	101	255
471	2013-11-27 10:07:03.916278	101	252
472	2013-11-27 10:07:28.697207	102	255
473	2013-11-27 10:07:46.853716	105	270
474	2013-11-27 10:08:14.350785	103	255
475	2013-11-27 10:08:29.458257	106	270
476	2013-11-27 10:10:48.109146	107	270
477	2013-11-27 10:10:54.123423	104	255
478	2013-11-27 10:11:37.443055	100	281
479	2013-11-27 10:11:48.684827	105	255
480	2013-11-27 10:13:36.19692	106	255
481	2013-11-27 10:17:27.760267	107	255
482	2013-11-27 10:18:44.184975	100	129
483	2013-11-27 10:19:41.220522	0	458
484	2013-11-27 10:19:52.271852	100	458
485	2013-11-27 10:20:08.91853	101	129
486	2013-11-27 10:20:41.26919	101	458
487	2013-11-27 10:20:44.44936	100	72
488	2013-11-27 10:21:03.950863	102	129
489	2013-11-27 10:21:18.348853	101	72
490	2013-11-27 10:21:38.534549	103	129
491	2013-11-27 10:21:50.900928	102	72
492	2013-11-27 10:22:11.067405	104	129
493	2013-11-27 10:23:01.614748	105	129
494	2013-11-27 10:23:02.085701	103	72
495	2013-11-27 10:25:11.195967	104	72
496	2013-11-27 10:26:55.589627	105	72
497	2013-11-27 11:25:04.664331	100	46
498	2013-11-27 11:25:46.570881	101	46
499	2013-11-27 12:27:08.029753	100	147
500	2013-11-27 12:28:23.075628	101	147
501	2013-11-27 12:28:56.898502	100	137
502	2013-11-27 12:29:15.598915	102	147
503	2013-11-27 12:30:01.177699	103	147
504	2013-11-27 12:30:35.046924	104	147
505	2013-11-27 12:31:15.588024	105	147
506	2013-11-27 12:32:04.307133	106	147
507	2013-11-27 12:34:12.108401	107	147
508	2013-11-27 12:34:16.325994	101	137
509	2013-11-27 12:34:51.211369	108	147
510	2013-11-27 12:36:07.162864	109	147
511	2013-11-27 12:37:21.6725	110	147
512	2013-11-27 12:38:02.984359	111	147
513	2013-11-27 12:39:41.319741	100	136
514	2013-11-27 12:39:54.857621	112	147
515	2013-11-27 12:40:35.042894	113	147
516	2013-11-27 12:41:27.435052	114	147
517	2013-11-27 12:44:02.210957	115	147
518	2013-11-27 12:46:06.509711	116	147
519	2013-11-27 12:47:13.840609	117	147
520	2013-11-27 12:48:00.40673	101	136
521	2013-11-27 12:49:27.429153	118	147
522	2013-11-27 12:50:13.993709	119	147
523	2013-11-27 12:51:59.731415	120	147
524	2013-11-27 12:55:01.744928	130	147
525	2013-11-27 12:58:23.509694	131	147
526	2013-11-27 12:59:49.918286	102	136
527	2013-11-27 13:00:08.107763	132	147
528	2013-11-27 13:08:09.515451	100	277
529	2013-11-27 13:10:29.627605	101	277
530	2013-11-27 13:11:38.140597	102	277
531	2013-11-27 13:12:34.423958	100	262
532	2013-11-27 13:12:47.601964	103	277
533	2013-11-27 13:12:55.798465	103	136
534	2013-11-27 13:13:05.197367	101	262
535	2013-11-27 13:13:33.584586	104	136
536	2013-11-27 13:14:18.167432	102	262
537	2013-11-27 13:15:46.656799	105	136
538	2013-11-27 13:19:43.67359	104	277
539	2013-11-27 13:24:18.616929	108	255
540	2013-11-27 13:25:00.24577	100	275
541	2013-11-27 13:25:27.458452	109	255
542	2013-11-27 15:36:18.303173	100	142
543	2013-11-27 15:36:42.98135	101	142
544	2013-11-27 15:37:08.724852	102	142
545	2013-11-27 15:37:55.343256	103	142
546	2013-11-27 15:39:10.838137	100	177
547	2013-11-27 15:39:16.03389	104	142
548	2013-11-27 15:39:49.056215	105	142
549	2013-11-27 15:41:08.296791	106	142
550	2013-11-27 15:41:21.641995	101	177
551	2013-11-27 15:42:34.522981	102	177
552	2013-11-27 15:43:18.605427	100	152
553	2013-11-27 15:43:56.088974	101	152
554	2013-11-27 15:44:09.671037	103	177
555	2013-11-27 15:44:20.359835	102	152
556	2013-11-27 15:44:59.265665	104	177
557	2013-11-27 15:45:17.72306	103	152
558	2013-11-27 15:45:41.387652	105	177
559	2013-11-27 15:45:42.403378	104	152
560	2013-11-27 15:46:06.912426	105	152
561	2013-11-27 15:46:30.800546	106	152
562	2013-11-27 15:46:45.163715	106	177
563	2013-11-27 15:47:16.48606	107	152
564	2013-11-27 15:49:33.669392	108	152
565	2013-11-27 15:49:37.071902	107	177
566	2013-11-27 15:50:05.48233	108	177
567	2013-11-27 15:50:30.052026	109	177
568	2013-11-27 15:51:21.264242	110	177
569	2013-11-27 15:52:18.351748	111	177
570	2013-11-27 15:53:55.746561	100	162
571	2013-11-27 15:54:41.907717	101	162
572	2013-11-27 15:55:15.571018	102	162
573	2013-11-27 15:55:33.805959	109	152
574	2013-11-27 15:55:56.221412	110	152
575	2013-11-27 15:56:01.86849	103	162
576	2013-11-27 15:56:17.938164	111	152
577	2013-11-27 15:56:41.337773	112	152
578	2013-11-27 15:57:03.45495	100	170
579	2013-11-27 15:57:24.055972	113	152
580	2013-11-27 15:57:27.136825	104	162
581	2013-11-27 15:57:36.403164	101	170
582	2013-11-27 15:57:58.995599	102	170
583	2013-11-27 15:58:06.450912	114	152
584	2013-11-27 15:58:20.321912	103	170
585	2013-11-27 15:58:29.232734	115	152
586	2013-11-27 15:58:57.700699	104	170
587	2013-11-27 15:59:21.986836	105	170
588	2013-11-27 15:59:37.01419	116	152
589	2013-11-27 15:59:47.112995	106	170
590	2013-11-27 16:00:10.853224	107	170
591	2013-11-27 16:00:11.435466	117	152
592	2013-11-27 16:00:36.541612	118	152
593	2013-11-27 16:01:15.821655	119	152
594	2013-11-27 16:01:41.1902	120	152
595	2013-11-27 16:02:23.909953	130	152
596	2013-11-27 16:04:30.052358	100	144
597	2013-11-27 16:04:32.816297	105	162
598	2013-11-27 16:05:05.762914	101	144
599	2013-11-27 16:05:05.98272	0	459
600	2013-11-27 16:05:24.030185	0	460
601	2013-11-27 16:05:26.44495	102	144
602	2013-11-27 16:06:17.00909	0	461
603	2013-11-27 16:09:20.163473	100	159
604	2013-11-27 16:28:04.638289	107	142
605	2013-11-27 16:28:51.322253	108	142
606	2013-11-29 10:44:25.599572	110	255
607	2013-11-29 10:44:39.291292	111	255
\.


--
-- Name: levels_transactions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_transactions_id_seq', 607, true);


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
-- Data for Name: rooms; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY rooms (id, room, school_id) FROM stdin;
\.


--
-- Name: rooms_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('rooms_id_seq', 1, false);


--
-- Data for Name: schools; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY schools (id, school_name) FROM stdin;
1	visitationbvm
2	crojas
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 2, true);


--
-- Data for Name: standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY standards (id, standard) FROM stdin;
1	Count to 100 by ones and by tens.
\.


--
-- Data for Name: standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY standards_clusters_domains_grades (id, standard_id, cluster_domain_grade_id) FROM stdin;
1	1	1
\.


--
-- Name: standards_clusters_domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('standards_clusters_domains_grades_id_seq', 1, true);


--
-- Name: standards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('standards_id_seq', 1, true);


--
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY students (id, teacher_id) FROM stdin;
1	0
2	1
3	1
4	1
5	1
6	1
7	1
8	1
9	1
10	1
11	1
12	1
13	1
14	1
15	1
16	1
17	1
18	1
19	1
20	1
21	1
22	1
23	1
24	1
25	1
26	1
27	1
28	1
29	1
30	1
31	1
32	1
33	1
34	1
35	1
36	1
37	1
38	1
39	1
40	1
41	1
42	1
43	1
44	1
45	1
46	1
47	1
48	1
49	1
50	1
51	1
52	1
53	1
54	1
55	1
56	1
57	1
58	1
59	1
60	1
61	1
62	1
63	1
64	1
65	1
66	1
67	1
68	1
69	1
70	1
71	1
72	1
73	1
74	1
75	1
76	1
77	1
78	1
79	1
80	1
81	1
82	1
83	1
84	1
85	1
86	1
87	1
88	1
89	1
90	1
91	1
92	1
93	1
94	1
95	1
96	1
97	1
98	1
99	1
100	1
101	1
102	1
103	1
104	1
105	1
106	1
107	1
108	1
109	1
110	1
111	1
112	1
113	1
114	1
115	1
116	1
117	1
118	1
119	1
120	1
121	1
122	1
123	1
124	1
125	1
126	1
127	1
128	1
129	1
130	1
131	1
132	1
133	1
134	1
135	1
136	1
137	1
138	1
139	1
140	1
141	1
142	1
143	1
144	1
145	1
146	1
147	1
148	1
149	1
150	1
151	1
152	1
153	1
154	1
155	1
156	1
157	1
158	1
159	1
160	1
161	1
162	1
163	1
164	1
165	1
166	1
167	1
168	1
169	1
170	1
171	1
172	1
173	1
174	1
175	1
176	1
177	1
178	1
179	1
180	1
181	1
182	1
183	1
184	1
185	1
186	1
187	1
188	1
189	1
190	1
191	1
192	1
193	1
194	1
195	1
196	1
197	1
198	1
199	1
200	1
201	1
202	1
203	1
204	1
205	1
206	1
207	1
208	1
209	1
210	1
211	1
212	1
213	1
214	1
215	1
216	1
217	1
218	1
219	1
220	1
221	1
222	1
223	1
224	1
225	1
226	1
227	1
228	1
229	1
230	1
231	1
232	1
233	1
234	1
235	1
236	1
237	1
238	1
239	1
240	1
241	1
242	1
243	1
244	1
245	1
246	1
247	1
248	1
249	1
250	1
251	1
252	1
253	1
254	1
255	1
256	1
257	1
258	1
259	1
260	1
261	1
262	1
263	1
264	1
265	1
266	1
267	1
268	1
269	1
270	1
271	1
272	1
273	1
274	1
275	1
276	1
277	1
278	1
279	1
280	1
281	1
282	1
283	1
284	1
285	1
286	1
287	1
288	1
289	1
290	1
291	1
292	1
293	1
294	1
295	1
296	1
297	1
298	1
299	1
300	1
301	1
302	1
303	1
304	1
305	1
306	1
307	1
308	1
309	1
310	1
311	1
312	1
313	1
314	1
315	1
316	1
317	1
318	1
319	1
320	1
321	1
322	1
323	1
324	1
325	1
326	1
327	1
328	1
329	1
330	1
331	1
332	1
333	1
334	1
335	1
336	1
337	1
338	1
339	1
340	1
341	1
342	1
343	1
344	1
345	1
346	1
347	1
348	1
349	1
350	1
351	1
352	1
353	1
354	1
355	1
356	1
357	1
358	1
359	1
360	1
361	1
362	1
363	1
364	1
365	1
366	1
367	1
368	1
369	1
370	1
371	1
372	1
373	1
374	1
375	1
376	1
377	1
378	1
379	1
380	1
381	1
382	1
383	1
384	1
385	1
386	1
387	1
388	1
389	1
390	1
391	1
392	1
393	1
394	1
395	1
396	1
397	1
398	1
399	1
400	1
401	1
402	1
403	1
404	1
405	1
406	1
407	1
408	1
409	1
410	1
411	1
412	1
413	1
414	1
415	1
416	1
417	1
418	1
419	1
420	1
421	1
422	1
423	1
424	1
425	1
426	1
427	1
428	1
429	1
430	1
431	1
432	1
433	1
434	1
435	1
436	1
437	1
438	1
439	1
440	1
441	1
442	1
443	1
444	1
445	1
446	1
447	1
448	1
449	1
450	1
451	1
452	1
453	1
454	1
455	1
456	1
457	1
458	0
459	0
460	0
461	0
\.


--
-- Data for Name: subjects; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY subjects (id, subject) FROM stdin;
1	Math
\.


--
-- Name: subjects_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('subjects_id_seq', 1, true);


--
-- Data for Name: subtraction; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY subtraction (id, score_needed, minuend_min, minuend_max, subtrahend_min, subtrahend_max, number_of_subtrahends, negative_difference, level_id) FROM stdin;
1	10	0	1	0	1	2	f	500
2	10	0	2	0	2	2	f	500.009999999999991
3	10	0	3	0	3	2	f	500.019999999999982
4	10	0	4	0	4	2	f	500.029999999999973
5	10	0	5	0	5	2	f	500.04000000000002
6	10	0	6	0	6	2	f	500.050000000000011
7	10	0	7	0	7	2	f	500.060000000000002
8	10	0	8	0	8	2	f	500.069999999999993
9	10	0	9	0	9	2	f	500.079999999999984
10	10	0	10	0	10	2	f	500.089999999999975
\.


--
-- Name: subtraction_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('subtraction_id_seq', 10, true);


--
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY teachers (id, room_id) FROM stdin;
1	\N
458	\N
460	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id) FROM stdin;
1	root	Iggles_13	\N	\N	\N	\N	\N	1
2	v1401	ahh	Anthony				Arvelo	1
3	v1402	abs	Damyer				Batties	1
4	v1403	ace	Johnson				Chieu	1
5	v1404	add	Carina				Cintron	1
6	v1405	aft	Edward	Clark			Jr	1
7	v1406	ape	Michael				Colon	1
8	v1407	and	Annalyse				Feliciano	1
9	v1408	aim	Khayree				Hurst	1
10	v1409	aid	Oscar	Lomeli			Avalos	1
11	v1410	air	Alex	Lopez			Pineda	1
12	v1411	all	Curtis				McCoy	1
13	v1412	amp	Junior	Tommy			Nguyen	1
14	v1413	ant	Richard				Nguyen	1
15	v1414	app	Ashley				Norwood	1
16	v1415	apt	Yamilex				Ortiz	1
17	v1416	arc	Christina				Perez	1
18	v1417	arf	Melanie				Posada	1
19	v1418	ark	Briana				Poulterer	1
20	v1419	arm	Darien				Quinones	1
21	v1420	art	Roberto				Ramos	1
22	v1421	ash	Jasmin				Rivera	1
23	v1422	ask	Cindy				Trinidad	1
24	v1423	ate	Jasibel				Vasquez-Gonzalez	1
25	v1424	ave	Andres				Adames	1
26	v1425	awe	Nashyra				Burgess	1
27	v1426	axe	Jose				Burgos	1
28	v1427	aye	Lucilenny				Florentino	1
29	v1428	ays	Frailyn				Francisco	1
30	v1429	baa	Kastiani	Gonzalez			Solano	1
31	v1430	bit	Johnny				Hua	1
32	v1431	bag	Shu				Lin	1
33	v1432	bam	Jennifer				Morales	1
34	v1433	ban	Rafael				Ortiz	1
35	v1434	bap	Caroline				Pena	1
36	v1435	bar	Jason				Ramirez	1
37	v1436	bat	Tiffany				Ramirez	1
38	v1437	bay	Tommy				Ramos	1
39	v1438	bed	Martin				Redanauer	1
40	v1439	bee	Joseph				Rivera	1
41	v1440	beg	Alexis				Rodriquez	1
42	v1441	ben	Emanuel				Rodriquez	1
43	v1442	bet	Isaura				Sanguinetti	1
44	v1443	bib	Vitylia				Santigo	1
45	v1444	bid	Kylik				Taylor	1
46	v1445	big	Luis				Torres	1
47	v1446	bin	Caroline				Trinidad	1
48	v1447	bee	Mayralee				Maldonado	1
49	v1501	ahh	Keaira				Archie	1
50	v1502	abs	Jacin				Aviles	1
51	v1503	ace	Tony				Boose	1
52	v1504	add	Tiara				Bounyarith	1
53	v1505	aft	Ledys				Chavez	1
54	v1506	ape	Natalie				Colon	1
55	v1507	and	Pablo	Manuel			Diaz	1
56	v1508	aim	Dang	Thanh			Duong	1
57	v1509	aid	Eliannie				Figueroa	1
58	v1510	air	Thomas				Flynn	1
59	v1511	all	Alexandria	Luz			Medina	1
60	v1512	amp	Javier				Morales	1
61	v1513	ant	Destiny				Nunez	1
62	v1514	app	Kelly				Pickering	1
63	v1515	apt	Miguel				Reyes	1
64	v1516	arc	Christopher				Rivera	1
65	v1517	arf	Rajah				Williams	1
66	v1518	ark	Pamela				Bonifacio	1
67	v1519	arm	Marlon				Castillo	1
68	v1520	art	Kiara				Figuereo	1
69	v1521	ash	Nicole				Garcia	1
70	v1522	ask	Kiara				Gomez	1
71	v1523	ate	Nicola				Izzard	1
72	v1524	ave	Howard				Jiang	1
73	v1525	awe	Neshaiyah				Loney	1
74	v1526	axe	Luis				Maldonado	1
75	v1527	aye	Ashley				Meregildo	1
76	v1528	ays	An				Nguyen	1
77	v1529	baa	Marilee				Reyes	1
78	v1530	bit	Nathaniel				Rivera	1
79	v1531	bag	Christian				Rojas	1
80	v1532	bam	Christina	Marie			Santana	1
81	v1533	ban	Joseph				Wetherill	1
82	v1534	bag	Chuong				Pham	1
83	v1535	bat	Deja				Mason	1
84	v1536	bat	Hunter				Doan	1
85	v1601	ahh	Ruben				Avalos	1
86	v1602	abs	Paula	Barbot			Santana	1
87	v1603	ace	Gregory				Dillon	1
88	v1604	add	Shaun				Doyle	1
89	v1605	aft	Joshua				Figueroa	1
90	v1606	ape	Diosmairi				Gonzalez	1
91	v1607	and	Emely				Jimenez	1
92	v1608	aim	Genesis				Jimenez	1
93	v1609	aid	Sharon				Kelly	1
94	v1610	air	Maximo				Lebron	1
95	v1611	all	William				Lewandowski	1
96	v1612	amp	Jonathan				Mejia	1
97	v1613	ant	Magalis				Mota	1
98	v1614	app	Thanh				Nguyen	1
99	v1615	apt	Maria				Nolasco	1
100	v1616	arc	Thuy				Pham	1
101	v1617	arf	Timothy				Poulterer	1
102	v1618	ark	Zachary				Quinones	1
103	v1619	arm	Ryan				Ramirez	1
104	v1620	art	Ciara				Skinner	1
105	v1621	ash	Sasha				Vidro	1
106	v1622	ask	Christopher	Campverde			Pacheco	1
107	v1623	ate	Lily				Chieu	1
108	v1624	ave	Lukas				Cruz	1
109	v1625	awe	Layani				Fermin	1
110	v1626	axe	Alexandria				Furlow	1
111	v1627	aye	Abigale				Gibson	1
112	v1628	ays	Andre				Gonzalez	1
113	v1629	baa	Timothy				Gordon	1
114	v1630	bit	Wylid				Harmon	1
115	v1631	bag	Robert				Hiciano	1
116	v1632	bam	Destiny				Knight	1
117	v1633	ban	Francis	Lowry			III	1
118	v1634	bap	Destiny	Ngo			Maysonet	1
119	v1635	bar	Randy				Nguyen	1
120	v1636	bat	Andres				Perez	1
121	v1637	bay	Hailey				Ramirez	1
122	v1638	bed	Anthony				Rivera	1
123	v1639	bee	Alexandra				Rodriguez	1
124	v1642	bet	Anna				Truong	1
125	v1643	bit	Amber				Diaz	1
126	v1644	bit	Marcos				Alexander	1
127	v1645	bit	Bryan				Doan	1
128	v1646	bit	Sandra				Nguyen	1
129	v1701	ahh	Jared				Alston	1
130	v1702	abs	Celine				Beltran	1
131	v1703	ace	Tytiona				Booker	1
132	v1704	add	Donte				Burton	1
133	v1705	aft	Brandon				Castillo	1
134	v1706	ape	Waleska	Chaves			Quesada	1
135	v1707	and	Joshua	Dela			Cruz	1
136	v1708	aim	Ciennali				Gonzalez	1
137	v1709	aid	Genesis				Gonzalez	1
138	v1710	air	Angie				Gutierrez	1
139	v1711	all	Justine				Jones	1
140	v1712	amp	Jaden				Jordan	1
141	v1713	ant	Jesse	Magobet			Jr	1
142	v1714	app	Jordan				Medina	1
143	v1715	apt	Paola	Munoz			Navarro	1
144	v1716	arc	Tamthu				Nguyen	1
145	v1717	arf	Chaneli				Nolasco	1
146	v1718	ark	Aidan				Ramirez	1
147	v1719	arm	Victor				Rivera	1
148	v1720	art	Evelyn				Rivera	1
149	v1721	ash	Samir				Sullivan	1
150	v1722	ask	Jonathan	E			Torres	1
151	v1723	ate	Nataly				Torres	1
152	v1724	ave	Wilson				Torres	1
153	v1725	awe	Tattianna				Zelaya	1
154	v1726	axe	Jonathan	A			Torres	1
155	v1727	aye	Yassel				Baez	1
156	v1728	ays	Marina				Burgos	1
157	v1729	baa	Richard				Cintron	1
158	v1730	bit	Aryana				Colon	1
159	v1731	bag	Meira				Coston	1
160	v1732	bam	Ollie				Days	1
161	v1733	ban	Louis				Delvalle	1
162	v1734	bap	Britney				Do	1
163	v1735	bar	Jack				Flynn	1
164	v1736	bat	Gisselle				Gerena	1
165	v1737	bay	Nicholas				Gonzalez	1
166	v1738	bed	Nicole				Gonzalez	1
167	v1739	bee	Serenity				Haley	1
168	v1740	beg	Gianna				Hernandez	1
169	v1741	ben	Sameer				Hill	1
170	v1742	bet	Jason				Hua	1
171	v1743	bib	Natavia				Lewis	1
172	v1744	bid	Najalie				Medina	1
173	v1745	big	Annalley				Portillo	1
174	v1746	bin	Jorden				Richards	1
175	v1747	bip	Jaslin				Seck	1
176	v1748	bip	Vy				Nuguyen	1
177	v1749	bio	William				Santana	1
178	v1750	bit	Floridei				Jovel	1
179	v1751	bin	Calvin				Nguyen	1
180	v1752	bin	Alexander				Nguyen	1
181	v1753	bin	Gabby				Franklin	1
182	v1801	ahh	Juan				Ayala	1
183	v1802	abs	Lanya				Bell	1
184	v1803	ace	Angel				Bernardy	1
185	v1804	add	Daniel				Diaz	1
186	v1805	aft	Stephanie				Donato	1
187	v1806	ape	Desmond				Dowling	1
188	v1807	and	Fabiana				Fred	1
189	v1808	aim	Ledyn				Gonzalez	1
190	v1809	aid	Jonathan	Guerrero			Melchor	1
191	v1810	air	Isael				Jimenez	1
192	v1811	all	Jenny				Le	1
193	v1812	amp	Nicholas				Lewandowski	1
194	v1813	ant	Victor				Luna	1
195	v1814	app	Christopher				Martinez	1
196	v1815	apt	Miguel				Martinez	1
197	v1816	arc	Milagros				Mejia	1
198	v1817	arf	Christina				Negron	1
199	v1818	ark	Minh	Tai			Nguyen	1
200	v1819	arm	Charil				Nolasco	1
201	v1820	art	Brian				Ramos	1
202	v1821	ash	Ashley				Rivera	1
203	v1822	ask	Serenety				Rivera	1
204	v1823	ate	Adrian				Terrero	1
205	v1824	ave	Cecilia				Valentin	1
206	v1825	awe	Adriana				Burgos	1
207	v1826	axe	Leilani				Burgos	1
208	v1827	aye	Fernando	Cargua			Buestan	1
209	v1828	ays	Miguel				Collazo	1
210	v1829	baa	Karina				Cotto	1
211	v1830	bit	Jefferson				Delorbe	1
212	v1831	bag	Reece	Gibson			Gonzalez	1
213	v1832	bam	Halle				Jimenez	1
214	v1833	ban	Vivian				Le	1
215	v1834	bap	Richard				Lillo	1
216	v1835	bar	Wei				Lin	1
217	v1836	bat	Israel				Lugo	1
218	v1837	bay	Makel				Martin	1
219	v1838	bed	Elias				Merced	1
220	v1839	bee	Valerie				Montiel	1
221	v1840	beg	Ai	Nhi			Nguyen	1
222	v1841	ben	Juliza				Portillo	1
223	v1842	bet	Jacelynne	Quinones			Castro	1
224	v1843	bib	Markus				Richards	1
225	v1844	bid	Joel	Rivera			Jr	1
226	v1845	big	Brianna				Rodriquez	1
227	v1846	bin	Joshua				Rojas	1
228	v1847	bin	Abrianna				Santiago	1
229	v1848	bin	Christopher				Serrano	1
230	v1849	bin	Terrell				Wood	1
231	v1850	bit	Ashanti				Lopez	1
232	v1851	bit	Bangelis				Cosma	1
233	v1901	ahh	Angelis				Bernardy	1
234	v1902	abs	Julio				Bristol	1
235	v1903	ace	Rafael	Cargua			Buestan	1
236	v1904	add	Alexander				Caseres	1
237	v1905	aft	Luis				Caseres	1
238	v1906	ape	Tam				Lee	1
239	v1907	and	Lesly				Ceballos	1
240	v1908	aim	Bryan				Delorbe	1
241	v1909	aid	Daniel				DelRosario	1
242	v1910	air	Phoenix				Diaz	1
243	v1911	all	Christ				Guzman	1
244	v1912	amp	Destiny				Haley	1
245	v1913	ant	Diveah				Henry	1
246	v1914	app	Adam				Moore	1
247	v1915	apt	Jose				Morales	1
248	v1916	arc	Rachel				Nguyen	1
249	v1917	arf	Richel				Nunez	1
250	v1918	ark	Dasha				Rios	1
251	v1919	arm	Erik				Sanchez	1
252	v1920	art	Jaslin	Vasquez			Gonzalez	1
253	v1921	ash	Brandon				Alston	1
254	v1922	ask	Lily				Billarrial	1
255	v1923	bot	Luke				Breslin	1
256	v1924	ave	Genesis				Castro	1
257	v1925	awe	Edwin	Colon			III	1
258	v1926	axe	Carlos				Diaz	1
259	v1927	aye	Zamantha				Garro	1
260	v1928	ays	Gabriella	Gibson			Gonzalez	1
261	v1929	baa	James				Harris	1
262	v1930	bit	Matthew	Lampert			Dimperio	1
263	v1931	bag	Mya				Lowry	1
264	v1932	bam	Isabel				Lugo	1
265	v1933	ban	Jada				Mack	1
266	v1934	bap	Carleigh				Marsilio	1
267	v1935	bar	Lamanh				Nguyen	1
268	v1936	bat	Tamthi				Nguyen	1
269	v1937	bay	Nicholas	Nguyen			Do	1
270	v1938	bed	Aldo				Rodriguez	1
271	v1939	bee	Joshua				Rojas	1
272	v1940	beg	Ricardo				Taveras	1
273	v1941	ben	Quan				Tran	1
274	v1942	bet	Imani				Velazquez	1
275	v1943	bib	Michael				Zelaya	1
276	v1944	big	Ethan				Garcia	1
277	v1945	big	Carlos				Jovel	1
278	v1946	bag	Suzi				Lin	1
279	v1947	bet	Astrid				Cordero	1
280	v1948	ben	Christian				Perez	1
281	v1949	abc	Omar				Balouch	1
282	v1950	bat	Nathaniel				Hamilton	1
283	v1951	cat	Ahmir				Porter	1
284	v1952	cat	Joseph				Mejia	1
285	v2001	ahh	Yandel				Alvarez	1
286	v2002	abs	Shadir				Brown	1
287	v2003	ace	Eliyah				Clark	1
288	v2004	add	Richard	Compres			Taveras	1
289	v2005	aft	Amirrah				Conde	1
290	v2006	ape	Patrick				Daly	1
291	v2007	and	Leanny				Delacruz	1
292	v2008	aim	Elijah				Desamour	1
293	v2009	aid	Allessandra				Lilo	1
294	v2010	air	Lamir				Moore	1
295	v2011	all	Brianna	Munoz			Navarro	1
296	v2012	amp	Gabriella				Mystil	1
297	v2013	ant	Devin				Nguyen	1
298	v2014	app	He				Nguyen	1
299	v2015	apt	Frank	Nguyen			Do	1
300	v2016	arc	Jordan				Pipkin	1
301	v2017	arf	Unique				Rodriquez	1
302	v2018	ark	Alex				Santiago	1
303	v2019	arm	Jesus				Terreforte	1
304	v2020	art	Donathan				Truong	1
305	v2021	ash	Alex				Acevedo	1
306	v2022	ask	Zeannalie				Bobe	1
307	v2023	ate	Desiray				Cartegna	1
308	v2024	ave	Jasnelly				Castillo	1
309	v2025	awe	Randy				Ceballos	1
310	v2026	axe	Jason	Compres			Taveras	1
311	v2027	aye	Crystal				Conway	1
312	v2028	ays	Antonio				Delvalle	1
313	v2029	baa	Jaelynn				Garcia	1
314	v2030	bit	Christian				Gonzalez	1
315	v2031	bag	Daniel				Le	1
316	v2032	bam	Lymari				Loftus	1
317	v2033	ban	Lilah				Martinez	1
318	v2034	bap	Joshua				Mcafee	1
319	v2035	bar	Faith				Mendendez	1
320	v2036	bat	Adrianna				Morales	1
321	v2037	bay	Diego				Morales	1
322	v2038	bed	Danny				Nguyen	1
323	v2039	bee	Chaveliz	Reyes			Pacheco	1
324	v2040	beg	Kalah				Rosario	1
325	v2041	ben	Alexis				Sanchez	1
326	v2042	bet	Antonio				Santiago	1
327	v2043	bib	Isis				Torres	1
328	v2044	bib	Jaden				Camillo	1
329	v2045	bib	Allan				Ortiz	1
330	v2046	bib	Mariah				Alicea	1
331	v2047	bib	Shawnese				Kervin	1
332	v2048	bib	Bre				Rivera	1
333	v2049	bib	Hugh				Lin	1
334	v2050	cat	David				Amigon	1
335	v2051	cat	Aryana				Rosario	1
336	v2101	ahh	Kayla				Aponte	1
337	v2102	abs	Julian				Aviles	1
338	v2103	ace	Yvanna				Burgos	1
339	v2104	add	Yanely				Collado	1
340	v2105	aft	Anthony				Colon	1
341	v2106	ape	Marielis				Colon	1
342	v2107	and	John				Colon	1
343	v2108	aim	Michael				Colon	1
344	v2109	aid	Ebrianna				Cruz	1
345	v2110	air	Klaritza				Delarosa	1
346	v2111	all	Michael				Delorbe	1
347	v2112	amp	Yurielis				Delorbe	1
348	v2113	ant	Genesis				Galvez	1
349	v2114	app	Nelson				Garcia	1
350	v2115	apt	Melaney				Gonzalez	1
351	v2116	arc	Azora				Goodwin	1
352	v2117	arf	Heaven				Hernandez	1
353	v2118	ark	Francis				Hillsee	1
354	v2119	arm	Paula				Jarmul	1
355	v2120	art	Alexis	Tina			McLeod	1
356	v2121	ash	Guy	Mystil			III	1
357	v2122	ask	Devin				Nugyen	1
358	v2123	ate	Miaizabella				Nicasio	1
359	v2124	ave	Alina				Ortiz	1
360	v2125	awe	Siani				Pagan	1
361	v2126	axe	Edgardo				Rivera	1
362	v2127	aye	Chastity				Rivera	1
363	v2128	ays	Nicholas				Torres	1
364	v2129	baa	Jayzn				Vargas	1
365	v2130	bit	Kirian	Vargas			Calcano	1
366	v2131	bag	Lianna				Adames	1
367	v2132	bam	Guadalupe				Avalos	1
368	v2133	ban	Jesus	Avalos			Jr	1
369	v2134	bap	Mariah				Bristol	1
370	v2135	bar	Amairlys				Caseras	1
371	v2136	bat	Catherine				Cortez	1
372	v2137	bay	Samara				Cruz	1
373	v2138	bed	Millie				Delorbe	1
374	v2139	bee	Luz				Delvalle	1
375	v2140	beg	Kaydence				Dillon	1
376	v2141	ben	Brayner				Estevez	1
377	v2142	bet	Javier				Garcia	1
378	v2143	bib	Michael				German	1
379	v2144	bid	Bo				Greenfield	1
380	v2145	big	India	Mari	Izzard		Salas	1
381	v2146	bin	Wilgerleez	Mercedes			Marte	1
382	v2147	bio	Giaminh				Nuguyen	1
383	v2148	bio	Danny				Nguyen	1
384	v2149	bio	Javier				Oquendo	1
385	v2150	bio	Marcos				Perez	1
386	v2151	bio	Duy				Pham	1
387	v2152	bio	Reinayah				Ramos	1
388	v2153	bio	Israel				Santiago	1
389	v2154	bio	Jenavi				Severino	1
390	v2155	bio	Justin	Suchite			Velazquez	1
391	v2156	bio	Emilio				Tapia	1
392	v2201	ahh	Christopher				Barton	1
393	v2202	abc	Zuyanah				Berdicia	1
394	v2203	ace	Albert				Bobe	1
395	v2204	add	Jaavon				Brown	1
396	v2205	aft	Iris				Castro	1
397	v2206	ape	Jasmine				Castro	1
398	v2207	and	Leah				Castro	1
399	v2208	aim	Liany				Collado	1
400	v2209	aid	Michael				Do	1
401	v2210	air	Zabriana				Garro	1
402	v2211	all	Tanya				Lin	1
403	v2212	amp	Devin				Nguyen	1
404	v2213	ant	Ny				Nguyen	1
405	v2214	app	Jason				Nieves	1
406	v2215	apt	Jeremiah				Ortiz	1
407	v2216	arc	Anthony				Pham	1
408	v2217	arf	Kiera				Reilly	1
409	v2218	ark	Elijah				Rios	1
410	v2219	arm	Edgardo				Rivera	1
411	v2220	art	Madison				Rodriquez	1
412	v2221	ash	Adrian				Rodriquez	1
413	v2222	ask	Alejandro				Santiago	1
414	v2223	big	Selene				Torres	1
415	v2224	ave	Jennelyce				Valera	1
416	v2225	awe	Dominis				Zapata	1
417	v2226	axe	Marcus				Alicea	1
418	v2227	aye	Ailany				Asencio	1
419	v2228	ays	Luigi				Baez	1
420	v2229	baa	Mariah				Bristol	1
421	v2230	bit	Emilia				Burgos	1
422	v2231	bag	Yamel				Burgos	1
423	v2232	bam	Juan				Delarosa	1
424	v2233	ban	Luz				Delvalle	1
425	v2234	bap	LOuverture				Desamour	1
426	v2235	bar	Azavier				Gonzalez	1
427	v2236	bat	Maya				Jarmul	1
428	v2237	bay	Sean				Lopez	1
429	v2238	bed	Larissa				Mejia	1
430	v2239	bee	Paola				Montiel	1
431	v2240	beg	Michael				Moore	1
432	v2241	ben	Genesis				Morales	1
433	v2242	bet	Danny				Nguyen	1
434	v2243	bib	Giaminh				Nguyen	1
435	v2244	bid	Rodney				Montiz	1
436	v2245	big	Serenity				Montiz	1
437	v2246	bin	Serenity				Rodriquez	1
438	v2247	bio	Aiden				Smith	1
439	v2248	big	Haylee				Trinh	1
440	v2249	cat	Sashalynn				Alicea	1
441	v2250	bat	David				Andujar	1
442	v2251	hat	Rashad				Burgess	1
443	v2252	sat	Dan				Doan	1
444	v2253	bat	Jan				Gomez	1
445	v2254	cat	Imani				Hansberry	1
446	v2255	cat	Chloe				Mack	1
447	v2256	cat	Alyssa				Mao	1
448	v2257	sat	Lisnett				Nolasco	1
449	v2258	cat	Elmer				Peralta	1
450	v2259	bat	Ryan				Perfidio	1
451	v2260	cat	Aiden				Quin	1
452	v2261	bat	Connor				Rivera	1
453	v2262	cat	Giana				Rodriquez	1
454	v2263	cat	Ricardo				Santos	1
455	v2264	bat	Kristian				Serrano	1
456	v2265	cat	Mya				Torres	1
457	v2266	cat	Anna				Van	1
458	root	lolman111	\N	\N	\N	\N	\N	2
459	457	abs	\N	\N	\N	\N	\N	1
460	458	add	\N	\N	\N	\N	\N	1
461	459	ace	\N	\N	\N	\N	\N	1
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 461, true);


--
-- Name: clusters_domains_grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_pkey PRIMARY KEY (id);


--
-- Name: clusters_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clusters
    ADD CONSTRAINT clusters_pkey PRIMARY KEY (id);


--
-- Name: domains_grades_domain_id_grade_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_domain_id_grade_id_key UNIQUE (domain_id, grade_id);


--
-- Name: domains_grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_pkey PRIMARY KEY (id);


--
-- Name: domains_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY domains
    ADD CONSTRAINT domains_pkey PRIMARY KEY (id);


--
-- Name: domains_subjects_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_pkey PRIMARY KEY (domain_id, subject_id);


--
-- Name: error_log_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY error_log
    ADD CONSTRAINT error_log_pkey PRIMARY KEY (id);


--
-- Name: games_attempts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_pkey PRIMARY KEY (id);


--
-- Name: games_game_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games
    ADD CONSTRAINT games_game_key UNIQUE (game);


--
-- Name: games_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games
    ADD CONSTRAINT games_pkey PRIMARY KEY (id);


--
-- Name: grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY grades
    ADD CONSTRAINT grades_pkey PRIMARY KEY (id);


--
-- Name: levels_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels
    ADD CONSTRAINT levels_id_key UNIQUE (id);


--
-- Name: levels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels
    ADD CONSTRAINT levels_pkey PRIMARY KEY (id);


--
-- Name: levels_standards_clusters_domains_grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_domains_grades_pkey PRIMARY KEY (level_id, standard_cluster_domain_grade_id);


--
-- Name: levels_transactions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_pkey PRIMARY KEY (id);


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
-- Name: rooms_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_pkey PRIMARY KEY (id);


--
-- Name: rooms_school_id_room_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key UNIQUE (school_id, room);


--
-- Name: rooms_school_id_room_key1; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key1 UNIQUE (school_id, room);


--
-- Name: rooms_school_id_room_key2; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key2 UNIQUE (school_id, room);


--
-- Name: rooms_school_id_room_key3; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key3 UNIQUE (school_id, room);


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
-- Name: standards_clusters_domains_gr_standard_id_cluster_domain_gr_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_gr_standard_id_cluster_domain_gr_key UNIQUE (standard_id, cluster_domain_grade_id);


--
-- Name: standards_clusters_domains_grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_pkey PRIMARY KEY (id);


--
-- Name: standards_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY standards
    ADD CONSTRAINT standards_pkey PRIMARY KEY (id);


--
-- Name: students_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY students
    ADD CONSTRAINT students_pkey PRIMARY KEY (id);


--
-- Name: subjects_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY subjects
    ADD CONSTRAINT subjects_pkey PRIMARY KEY (id);


--
-- Name: subtraction_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY subtraction
    ADD CONSTRAINT subtraction_pkey PRIMARY KEY (id);


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
-- Name: clusters_domains_grades_cluster_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_cluster_id_fkey FOREIGN KEY (cluster_id) REFERENCES clusters(id);


--
-- Name: clusters_domains_grades_domain_grade_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_domain_grade_id_fkey FOREIGN KEY (domain_grade_id) REFERENCES domains_grades(id);


--
-- Name: domains_grades_domain_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_domain_id_fkey FOREIGN KEY (domain_id) REFERENCES domains(id);


--
-- Name: domains_grades_grade_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_grade_id_fkey FOREIGN KEY (grade_id) REFERENCES grades(id);


--
-- Name: domains_subjects_domain_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_domain_id_fkey FOREIGN KEY (domain_id) REFERENCES domains(id);


--
-- Name: domains_subjects_subject_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_subject_id_fkey FOREIGN KEY (subject_id) REFERENCES subjects(id);


--
-- Name: games_attempts_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


--
-- Name: games_attempts_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: levels_standards_clusters_dom_standard_cluster_domain_grad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_dom_standard_cluster_domain_grad_fkey FOREIGN KEY (standard_cluster_domain_grade_id) REFERENCES standards_clusters_domains_grades(id);


--
-- Name: levels_standards_clusters_domains_grades_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_domains_grades_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


--
-- Name: levels_transactions_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


--
-- Name: levels_transactions_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: permissions_users_permission_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_permission_id_fkey FOREIGN KEY (permission_id) REFERENCES permissions(id);


--
-- Name: permissions_users_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);


--
-- Name: rooms_school_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_fkey FOREIGN KEY (school_id) REFERENCES schools(id);


--
-- Name: standards_clusters_domains_grades_cluster_domain_grade_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_cluster_domain_grade_id_fkey FOREIGN KEY (cluster_domain_grade_id) REFERENCES clusters_domains_grades(id);


--
-- Name: standards_clusters_domains_grades_standard_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_standard_id_fkey FOREIGN KEY (standard_id) REFERENCES standards(id);


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

