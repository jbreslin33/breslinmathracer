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
    game text NOT NULL
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
-- Name: games_levels; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE games_levels (
    id integer NOT NULL,
    game_id integer NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.games_levels OWNER TO postgres;

--
-- Name: games_levels_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE games_levels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.games_levels_id_seq OWNER TO postgres;

--
-- Name: games_levels_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE games_levels_id_seq OWNED BY games_levels.id;


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
-- Name: levels_standards; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_standards (
    id integer NOT NULL,
    level_id double precision NOT NULL,
    standard_id integer NOT NULL
);


ALTER TABLE public.levels_standards OWNER TO postgres;

--
-- Name: levels_standards_clusters_domains_grades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_standards_clusters_domains_grades (
    level_id double precision NOT NULL,
    standard_cluster_domain_grade_id integer NOT NULL
);


ALTER TABLE public.levels_standards_clusters_domains_grades OWNER TO postgres;

--
-- Name: levels_standards_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE levels_standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.levels_standards_id_seq OWNER TO postgres;

--
-- Name: levels_standards_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE levels_standards_id_seq OWNED BY levels_standards.id;


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
    standard text NOT NULL,
    description text NOT NULL
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

ALTER TABLE ONLY games_levels ALTER COLUMN id SET DEFAULT nextval('games_levels_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY grades ALTER COLUMN id SET DEFAULT nextval('grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_standards ALTER COLUMN id SET DEFAULT nextval('levels_standards_id_seq'::regclass);


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
2	Count to tell the number of objects.
3	Compare Numbers.
4	Understand addition as putting together and adding to, and understand subtraction as taking apart and taking from.
5	Work with numbers 11-19 to gain foundations for place value
6	Describe and compare measurable attributes
7	Classify objects and count the number of objects in each category.
8	Identify and describe shapes (squares, circles, triangles, rectangles, hexagons, cubes, cones, cylinders, and spheres).
9	Analyze, compare, create, and compose shapes.
\.


--
-- Data for Name: clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY clusters_domains_grades (id, cluster_id, domain_grade_id) FROM stdin;
\.


--
-- Name: clusters_domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clusters_domains_grades_id_seq', 1, false);


--
-- Name: clusters_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clusters_id_seq', 9, true);


--
-- Data for Name: domains; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains (id, domain) FROM stdin;
1	Counting and Cardinality
2	Opererations & Algebraic Thinking
3	Number & Opererations in Base Ten
4	Measurement & DataNumber
5	Geometry
\.


--
-- Data for Name: domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains_grades (id, domain_id, grade_id) FROM stdin;
\.


--
-- Name: domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('domains_grades_id_seq', 1, false);


--
-- Name: domains_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('domains_id_seq', 5, true);


--
-- Data for Name: domains_subjects; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domains_subjects (domain_id, subject_id) FROM stdin;
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

COPY games (id, game) FROM stdin;
1	Dungeon_k_cc_a_1
2	Dungeon_k_cc_a_2
3	Count_k_cc_a_3
4	Pad_k_oa_a_5
5	Pad_1_oa_c_6
\.


--
-- Data for Name: games_attempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games_attempts (id, game_attempt_time_start, game_attempt_time_end, user_id, level_id, score, time_warning) FROM stdin;
\.


--
-- Name: games_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_attempts_id_seq', 1, false);


--
-- Name: games_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_id_seq', 5, true);


--
-- Data for Name: games_levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games_levels (id, game_id, level_id) FROM stdin;
1	1	1
2	1	1.01000000000000001
3	1	1.02000000000000002
4	1	1.03000000000000003
5	1	1.04000000000000004
6	1	1.05000000000000004
7	1	1.06000000000000005
8	1	1.07000000000000006
9	1	1.08000000000000007
10	1	1.09000000000000008
11	1	1.10000000000000009
12	2	2
13	2	2.00999999999999979
14	2	2.02000000000000002
15	2	2.0299999999999998
16	2	2.04000000000000004
17	2	2.04999999999999982
18	3	3
19	4	14
20	4	14.0099999999999998
21	4	14.0199999999999996
22	4	14.0299999999999994
23	4	14.0399999999999991
24	4	14.0500000000000007
25	4	14.0600000000000005
26	4	14.0700000000000003
27	4	14.0800000000000001
28	4	14.0899999999999999
29	4	14.0999999999999996
30	4	14.1099999999999994
31	4	14.1199999999999992
32	4	14.1300000000000008
33	4	14.1400000000000006
34	4	14.1500000000000004
35	4	14.1600000000000001
36	4	14.1699999999999999
37	4	14.1799999999999997
38	4	14.1899999999999995
39	4	14.1999999999999993
40	5	100
41	5	100.010000000000005
42	5	100.019999999999996
43	5	100.030000000000001
\.


--
-- Name: games_levels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_levels_id_seq', 43, true);


--
-- Data for Name: grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY grades (id, grade) FROM stdin;
1	K
2	1
3	2
4	3
5	4
6	5
7	6
8	7
9	8
10	9
11	10
12	11
13	12
\.


--
-- Name: grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('grades_id_seq', 13, true);


--
-- Data for Name: levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels (id, description) FROM stdin;
0	Start of Journey
1	
1.01000000000000001	
1.02000000000000002	
1.03000000000000003	
1.04000000000000004	
1.05000000000000004	
1.06000000000000005	
1.07000000000000006	
1.08000000000000007	
1.09000000000000008	
1.10000000000000009	
2	
2.00999999999999979	
2.02000000000000002	
2.0299999999999998	
2.04000000000000004	
2.04999999999999982	
3	K_CC_A_3
14	
14.0099999999999998	
14.0199999999999996	
14.0299999999999994	
14.0399999999999991	
14.0500000000000007	
14.0600000000000005	
14.0700000000000003	
14.0800000000000001	
14.0899999999999999	
14.0999999999999996	
14.1099999999999994	
14.1199999999999992	
14.1300000000000008	
14.1400000000000006	
14.1500000000000004	
14.1600000000000001	
14.1699999999999999	
14.1799999999999997	
14.1899999999999995	
14.1999999999999993	
100	
100.010000000000005	
100.019999999999996	
100.030000000000001	
\.


--
-- Data for Name: levels_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards (id, level_id, standard_id) FROM stdin;
1	1	1
2	1.01000000000000001	1
3	1.02000000000000002	1
4	1.03000000000000003	1
5	1.04000000000000004	1
6	1.05000000000000004	1
7	1.06000000000000005	1
8	1.07000000000000006	1
9	1.08000000000000007	1
10	1.09000000000000008	1
11	1.10000000000000009	1
12	2	2
13	2.00999999999999979	2
14	2.02000000000000002	2
15	2.0299999999999998	2
16	2.04000000000000004	2
17	2.04999999999999982	2
18	3	3
19	14	14
20	14.0099999999999998	14
21	14.0199999999999996	14
22	14.0299999999999994	14
23	14.0399999999999991	14
24	14.0500000000000007	14
25	14.0600000000000005	14
26	14.0700000000000003	14
27	14.0800000000000001	14
28	14.0899999999999999	14
29	14.0999999999999996	14
30	14.1099999999999994	14
31	14.1199999999999992	14
32	14.1300000000000008	14
33	14.1400000000000006	14
34	14.1500000000000004	14
35	14.1600000000000001	14
36	14.1699999999999999	14
37	14.1799999999999997	14
38	14.1899999999999995	14
39	14.1999999999999993	14
40	100	30
41	100.010000000000005	30
42	100.019999999999996	30
43	100.030000000000001	30
\.


--
-- Data for Name: levels_standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
\.


--
-- Name: levels_standards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_standards_id_seq', 43, true);


--
-- Data for Name: levels_transactions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_transactions (id, advancement_time, level_id, user_id) FROM stdin;
1	2013-11-30 17:42:34.203159	0	1
2	2013-11-30 17:42:48.121861	1	1
3	2013-11-30 17:43:12.349734	1.01000000000000001	1
4	2013-12-02 15:44:35.924905	0	2
5	2013-12-02 15:47:48.004239	1	2
6	2013-12-02 15:49:03.954131	1.01000000000000001	2
7	2013-12-02 15:50:22.836626	1.02000000000000002	2
8	2013-12-02 15:54:18.657156	1.03000000000000003	2
9	2013-12-02 15:57:24.697504	1.04000000000000004	2
10	2013-12-02 15:59:59.939341	1.05000000000000004	2
11	2013-12-02 16:01:54.045404	1.06000000000000005	2
12	2013-12-02 16:02:39.135246	1.07000000000000006	2
13	2013-12-02 16:04:03.246242	1.08000000000000007	2
14	2013-12-02 16:04:41.204775	1.09000000000000008	2
15	2013-12-02 16:05:12.636918	1.10000000000000009	2
16	2013-12-02 16:05:49.917923	2	2
17	2013-12-02 16:06:22.944291	2.00999999999999979	2
18	2013-12-02 16:07:27.556486	2.02000000000000002	2
19	2013-12-02 16:08:42.840609	2.0299999999999998	2
20	2013-12-02 16:09:31.300145	2.04000000000000004	2
21	2013-12-02 16:10:15.275874	2.04999999999999982	2
22	2013-12-02 16:11:15.292047	3	2
23	2013-12-03 09:27:09.265434	0	1
24	2013-12-03 09:28:26.060398	0	2
25	2013-12-03 09:28:26.068927	0	3
26	2013-12-03 09:28:26.076351	0	4
27	2013-12-03 09:28:26.083837	0	5
28	2013-12-03 09:28:26.091707	0	6
29	2013-12-03 09:28:26.099191	0	7
30	2013-12-03 09:28:26.106646	0	8
31	2013-12-03 09:28:26.11419	0	9
32	2013-12-03 09:28:26.121769	0	10
33	2013-12-03 09:28:26.129188	0	11
34	2013-12-03 09:28:26.136608	0	12
35	2013-12-03 09:28:26.144074	0	13
36	2013-12-03 09:28:26.151491	0	14
37	2013-12-03 09:28:26.160866	0	15
38	2013-12-03 09:28:26.165611	0	16
39	2013-12-03 09:28:26.170382	0	17
40	2013-12-03 09:28:26.175149	0	18
41	2013-12-03 09:28:26.179881	0	19
42	2013-12-03 09:28:26.184651	0	20
43	2013-12-03 09:28:26.189458	0	21
44	2013-12-03 09:28:26.194217	0	22
45	2013-12-03 09:28:26.198966	0	23
46	2013-12-03 09:28:26.203765	0	24
47	2013-12-03 09:28:26.208548	0	25
48	2013-12-03 09:28:26.213421	0	26
49	2013-12-03 09:28:26.218181	0	27
50	2013-12-03 09:28:26.222949	0	28
51	2013-12-03 09:28:26.227693	0	29
52	2013-12-03 09:28:26.232425	0	30
53	2013-12-03 09:28:26.237218	0	31
54	2013-12-03 09:28:26.241987	0	32
55	2013-12-03 09:28:26.246736	0	33
56	2013-12-03 09:28:26.25151	0	34
57	2013-12-03 09:28:26.256288	0	35
58	2013-12-03 09:28:26.285343	0	36
59	2013-12-03 09:28:26.290131	0	37
60	2013-12-03 09:28:26.294885	0	38
61	2013-12-03 09:28:26.299632	0	39
62	2013-12-03 09:28:26.304393	0	40
63	2013-12-03 09:28:26.309203	0	41
64	2013-12-03 09:28:26.322727	0	42
65	2013-12-03 09:28:26.327505	0	43
66	2013-12-03 09:28:26.340601	0	44
67	2013-12-03 09:28:26.345389	0	45
68	2013-12-03 09:28:26.358465	0	46
69	2013-12-03 09:28:26.363243	0	47
70	2013-12-03 09:28:26.368048	0	48
71	2013-12-03 09:28:26.372872	0	49
72	2013-12-03 09:28:26.377645	0	50
73	2013-12-03 09:28:26.382385	0	51
74	2013-12-03 09:28:26.387148	0	52
75	2013-12-03 09:28:26.391904	0	53
76	2013-12-03 09:28:26.396645	0	54
77	2013-12-03 09:28:26.401468	0	55
78	2013-12-03 09:28:26.406251	0	56
79	2013-12-03 09:28:26.411045	0	57
80	2013-12-03 09:28:26.415841	0	58
81	2013-12-03 09:28:26.420624	0	59
82	2013-12-03 09:28:26.425433	0	60
83	2013-12-03 09:28:26.430179	0	61
84	2013-12-03 09:28:26.434937	0	62
85	2013-12-03 09:28:26.439698	0	63
86	2013-12-03 09:28:26.444451	0	64
87	2013-12-03 09:28:26.449242	0	65
88	2013-12-03 09:28:26.45401	0	66
89	2013-12-03 09:28:26.45883	0	67
90	2013-12-03 09:28:26.463575	0	68
91	2013-12-03 09:28:26.468446	0	69
92	2013-12-03 09:28:26.473307	0	70
93	2013-12-03 09:28:26.478072	0	71
94	2013-12-03 09:28:26.482829	0	72
95	2013-12-03 09:28:26.487637	0	73
96	2013-12-03 09:28:26.492422	0	74
97	2013-12-03 09:28:26.497194	0	75
98	2013-12-03 09:28:26.501992	0	76
99	2013-12-03 09:28:26.506795	0	77
100	2013-12-03 09:28:26.511564	0	78
101	2013-12-03 09:28:26.516335	0	79
102	2013-12-03 09:28:26.521151	0	80
103	2013-12-03 09:28:26.526364	0	81
104	2013-12-03 09:28:26.531197	0	82
105	2013-12-03 09:28:26.535978	0	83
106	2013-12-03 09:28:26.540964	0	84
107	2013-12-03 09:28:26.545713	0	85
108	2013-12-03 09:28:26.550475	0	86
109	2013-12-03 09:28:26.555233	0	87
110	2013-12-03 09:28:26.560024	0	88
111	2013-12-03 09:28:26.564797	0	89
112	2013-12-03 09:28:26.56958	0	90
113	2013-12-03 09:28:26.574367	0	91
114	2013-12-03 09:28:26.579113	0	92
115	2013-12-03 09:28:26.583902	0	93
116	2013-12-03 09:28:26.588727	0	94
117	2013-12-03 09:28:26.593511	0	95
118	2013-12-03 09:28:26.598247	0	96
119	2013-12-03 09:28:26.603002	0	97
120	2013-12-03 09:28:26.607857	0	98
121	2013-12-03 09:28:26.612862	0	99
122	2013-12-03 09:28:26.617637	0	100
123	2013-12-03 09:28:26.622424	0	101
124	2013-12-03 09:28:26.627177	0	102
125	2013-12-03 09:28:26.631931	0	103
126	2013-12-03 09:28:26.636716	0	104
127	2013-12-03 09:28:26.641478	0	105
128	2013-12-03 09:28:26.646227	0	106
129	2013-12-03 09:28:26.651016	0	107
130	2013-12-03 09:28:26.6558	0	108
131	2013-12-03 09:28:26.660584	0	109
132	2013-12-03 09:28:26.66542	0	110
133	2013-12-03 09:28:26.670195	0	111
134	2013-12-03 09:28:26.675013	0	112
135	2013-12-03 09:28:26.679747	0	113
136	2013-12-03 09:28:26.684521	0	114
137	2013-12-03 09:28:26.689324	0	115
138	2013-12-03 09:28:26.694066	0	116
139	2013-12-03 09:28:26.698888	0	117
140	2013-12-03 09:28:26.703701	0	118
141	2013-12-03 09:28:26.708545	0	119
142	2013-12-03 09:28:26.713329	0	120
143	2013-12-03 09:28:26.718095	0	121
144	2013-12-03 09:28:26.722872	0	122
145	2013-12-03 09:28:26.728028	0	123
146	2013-12-03 09:28:26.732876	0	124
147	2013-12-03 09:28:26.752788	0	125
148	2013-12-03 09:28:26.757575	0	126
149	2013-12-03 09:28:26.762378	0	127
150	2013-12-03 09:28:26.767166	0	128
151	2013-12-03 09:28:26.771931	0	129
152	2013-12-03 09:28:26.776736	0	130
153	2013-12-03 09:28:26.781525	0	131
154	2013-12-03 09:28:26.786324	0	132
155	2013-12-03 09:28:26.791113	0	133
156	2013-12-03 09:28:26.795845	0	134
157	2013-12-03 09:28:26.800619	0	135
158	2013-12-03 09:28:26.805439	0	136
159	2013-12-03 09:28:26.810541	0	137
160	2013-12-03 09:28:26.81543	0	138
161	2013-12-03 09:28:26.8202	0	139
162	2013-12-03 09:28:26.825048	0	140
163	2013-12-03 09:28:26.829818	0	141
164	2013-12-03 09:28:26.834605	0	142
165	2013-12-03 09:28:26.839406	0	143
166	2013-12-03 09:28:26.844147	0	144
167	2013-12-03 09:28:26.848964	0	145
168	2013-12-03 09:28:26.854417	0	146
169	2013-12-03 09:28:26.859236	0	147
170	2013-12-03 09:28:26.863981	0	148
171	2013-12-03 09:28:26.868775	0	149
172	2013-12-03 09:28:26.873591	0	150
173	2013-12-03 09:28:26.878345	0	151
174	2013-12-03 09:28:26.883129	0	152
175	2013-12-03 09:28:26.887909	0	153
176	2013-12-03 09:28:26.892716	0	154
177	2013-12-03 09:28:26.897485	0	155
178	2013-12-03 09:28:26.902283	0	156
179	2013-12-03 09:28:26.90707	0	157
180	2013-12-03 09:28:26.911814	0	158
181	2013-12-03 09:28:26.916584	0	159
182	2013-12-03 09:28:26.921385	0	160
183	2013-12-03 09:28:26.926197	0	161
184	2013-12-03 09:28:26.930987	0	162
185	2013-12-03 09:28:26.936054	0	163
186	2013-12-03 09:28:26.941034	0	164
187	2013-12-03 09:28:26.945811	0	165
188	2013-12-03 09:28:26.950599	0	166
189	2013-12-03 09:28:26.955492	0	167
190	2013-12-03 09:28:26.960217	0	168
191	2013-12-03 09:28:26.965036	0	169
192	2013-12-03 09:28:26.969834	0	170
193	2013-12-03 09:28:26.974639	0	171
194	2013-12-03 09:28:26.979376	0	172
195	2013-12-03 09:28:26.984145	0	173
196	2013-12-03 09:28:26.988956	0	174
197	2013-12-03 09:28:26.993703	0	175
198	2013-12-03 09:28:26.998475	0	176
199	2013-12-03 09:28:27.003248	0	177
200	2013-12-03 09:28:27.008037	0	178
201	2013-12-03 09:28:27.01282	0	179
202	2013-12-03 09:28:27.017668	0	180
203	2013-12-03 09:28:27.022472	0	181
204	2013-12-03 09:28:27.027223	0	182
205	2013-12-03 09:28:27.031992	0	183
206	2013-12-03 09:28:27.036823	0	184
207	2013-12-03 09:28:27.041707	0	185
208	2013-12-03 09:28:27.046452	0	186
209	2013-12-03 09:28:27.051222	0	187
210	2013-12-03 09:28:27.055993	0	188
211	2013-12-03 09:28:27.060768	0	189
212	2013-12-03 09:28:27.065567	0	190
213	2013-12-03 09:28:27.070365	0	191
214	2013-12-03 09:28:27.075167	0	192
215	2013-12-03 09:28:27.079912	0	193
216	2013-12-03 09:28:27.084724	0	194
217	2013-12-03 09:28:27.089515	0	195
218	2013-12-03 09:28:27.094275	0	196
219	2013-12-03 09:28:27.099056	0	197
220	2013-12-03 09:28:27.103841	0	198
221	2013-12-03 09:28:27.108619	0	199
222	2013-12-03 09:28:27.113411	0	200
223	2013-12-03 09:28:27.118183	0	201
224	2013-12-03 09:28:27.122991	0	202
225	2013-12-03 09:28:27.127745	0	203
226	2013-12-03 09:28:27.132523	0	204
227	2013-12-03 09:28:27.137334	0	205
228	2013-12-03 09:28:27.142092	0	206
229	2013-12-03 09:28:27.146872	0	207
230	2013-12-03 09:28:27.15172	0	208
231	2013-12-03 09:28:27.156964	0	209
232	2013-12-03 09:28:27.161836	0	210
233	2013-12-03 09:28:27.166625	0	211
234	2013-12-03 09:28:27.171441	0	212
235	2013-12-03 09:28:27.176196	0	213
236	2013-12-03 09:28:27.181012	0	214
237	2013-12-03 09:28:27.185806	0	215
238	2013-12-03 09:28:27.190586	0	216
239	2013-12-03 09:28:27.195322	0	217
240	2013-12-03 09:28:27.200102	0	218
241	2013-12-03 09:28:27.20491	0	219
242	2013-12-03 09:28:27.209678	0	220
243	2013-12-03 09:28:27.214519	0	221
244	2013-12-03 09:28:27.21929	0	222
245	2013-12-03 09:28:27.224108	0	223
246	2013-12-03 09:28:27.228901	0	224
247	2013-12-03 09:28:27.233672	0	225
248	2013-12-03 09:28:27.238464	0	226
249	2013-12-03 09:28:27.243572	0	227
250	2013-12-03 09:28:27.248363	0	228
251	2013-12-03 09:28:27.253192	0	229
252	2013-12-03 09:28:27.257965	0	230
253	2013-12-03 09:28:27.262734	0	231
254	2013-12-03 09:28:27.267519	0	232
255	2013-12-03 09:28:27.272339	0	233
256	2013-12-03 09:28:27.277124	0	234
257	2013-12-03 09:28:27.281918	0	235
258	2013-12-03 09:28:27.286704	0	236
259	2013-12-03 09:28:27.291469	0	237
260	2013-12-03 09:28:27.296242	0	238
261	2013-12-03 09:28:27.301044	0	239
262	2013-12-03 09:28:27.305821	0	240
263	2013-12-03 09:28:27.310566	0	241
264	2013-12-03 09:28:27.315352	0	242
265	2013-12-03 09:28:27.320187	0	243
266	2013-12-03 09:28:27.324964	0	244
267	2013-12-03 09:28:27.32975	0	245
268	2013-12-03 09:28:27.334536	0	246
269	2013-12-03 09:28:27.339316	0	247
270	2013-12-03 09:28:27.344066	0	248
271	2013-12-03 09:28:27.348877	0	249
272	2013-12-03 09:28:27.353807	0	250
273	2013-12-03 09:28:27.358562	0	251
274	2013-12-03 09:28:27.363748	0	252
275	2013-12-03 09:28:27.368527	0	253
276	2013-12-03 09:28:27.373498	0	254
277	2013-12-03 09:28:27.378261	0	255
278	2013-12-03 09:28:27.383047	0	256
279	2013-12-03 09:28:27.387836	0	257
280	2013-12-03 09:28:27.392592	0	258
281	2013-12-03 09:28:27.397424	0	259
282	2013-12-03 09:28:27.402211	0	260
283	2013-12-03 09:28:27.406984	0	261
284	2013-12-03 09:28:27.411737	0	262
285	2013-12-03 09:28:27.416618	0	263
286	2013-12-03 09:28:27.421472	0	264
287	2013-12-03 09:28:27.426218	0	265
288	2013-12-03 09:28:27.431006	0	266
289	2013-12-03 09:28:27.435778	0	267
290	2013-12-03 09:28:27.440562	0	268
291	2013-12-03 09:28:27.445347	0	269
292	2013-12-03 09:28:27.450151	0	270
293	2013-12-03 09:28:27.454932	0	271
294	2013-12-03 09:28:27.459695	0	272
295	2013-12-03 09:28:27.464474	0	273
296	2013-12-03 09:28:27.469322	0	274
297	2013-12-03 09:28:27.474138	0	275
298	2013-12-03 09:28:27.4789	0	276
299	2013-12-03 09:28:27.483672	0	277
300	2013-12-03 09:28:27.488482	0	278
301	2013-12-03 09:28:27.493267	0	279
302	2013-12-03 09:28:27.498069	0	280
303	2013-12-03 09:28:27.502869	0	281
304	2013-12-03 09:28:27.507608	0	282
305	2013-12-03 09:28:27.512392	0	283
306	2013-12-03 09:28:27.517235	0	284
307	2013-12-03 09:28:27.522052	0	285
308	2013-12-03 09:28:27.526788	0	286
309	2013-12-03 09:28:27.531574	0	287
310	2013-12-03 09:28:27.536362	0	288
311	2013-12-03 09:28:27.541249	0	289
312	2013-12-03 09:28:27.546041	0	290
313	2013-12-03 09:28:27.550814	0	291
314	2013-12-03 09:28:27.555607	0	292
315	2013-12-03 09:28:27.561123	0	293
316	2013-12-03 09:28:27.566033	0	294
317	2013-12-03 09:28:27.571257	0	295
318	2013-12-03 09:28:27.576004	0	296
319	2013-12-03 09:28:27.58091	0	297
320	2013-12-03 09:28:27.585693	0	298
321	2013-12-03 09:28:27.59046	0	299
322	2013-12-03 09:28:27.595233	0	300
323	2013-12-03 09:28:27.600037	0	301
324	2013-12-03 09:28:27.604868	0	302
325	2013-12-03 09:28:27.609838	0	303
326	2013-12-03 09:28:27.614791	0	304
327	2013-12-03 09:28:27.619591	0	305
328	2013-12-03 09:28:27.624359	0	306
329	2013-12-03 09:28:27.629184	0	307
330	2013-12-03 09:28:27.633973	0	308
331	2013-12-03 09:28:27.638769	0	309
332	2013-12-03 09:28:27.643527	0	310
333	2013-12-03 09:28:27.648329	0	311
334	2013-12-03 09:28:27.653155	0	312
335	2013-12-03 09:28:27.657908	0	313
336	2013-12-03 09:28:27.662692	0	314
337	2013-12-03 09:28:27.667472	0	315
338	2013-12-03 09:28:27.672336	0	316
339	2013-12-03 09:28:27.67713	0	317
340	2013-12-03 09:28:27.681926	0	318
341	2013-12-03 09:28:27.686715	0	319
342	2013-12-03 09:28:27.691485	0	320
343	2013-12-03 09:28:27.696286	0	321
344	2013-12-03 09:28:27.701122	0	322
345	2013-12-03 09:28:27.705926	0	323
346	2013-12-03 09:28:27.710698	0	324
347	2013-12-03 09:28:27.715482	0	325
348	2013-12-03 09:28:27.720286	0	326
349	2013-12-03 09:28:27.725109	0	327
350	2013-12-03 09:28:27.729896	0	328
351	2013-12-03 09:28:27.734691	0	329
352	2013-12-03 09:28:27.739468	0	330
353	2013-12-03 09:28:27.744223	0	331
354	2013-12-03 09:28:27.749051	0	332
355	2013-12-03 09:28:27.753839	0	333
356	2013-12-03 09:28:27.758592	0	334
357	2013-12-03 09:28:27.76338	0	335
358	2013-12-03 09:28:27.76815	0	336
359	2013-12-03 09:28:27.772992	0	337
360	2013-12-03 09:28:27.777773	0	338
361	2013-12-03 09:28:27.783002	0	339
362	2013-12-03 09:28:27.788377	0	340
363	2013-12-03 09:28:27.79318	0	341
364	2013-12-03 09:28:27.797968	0	342
365	2013-12-03 09:28:27.802766	0	343
366	2013-12-03 09:28:27.807522	0	344
367	2013-12-03 09:28:27.812297	0	345
368	2013-12-03 09:28:27.817281	0	346
369	2013-12-03 09:28:27.822115	0	347
370	2013-12-03 09:28:27.826888	0	348
371	2013-12-03 09:28:27.831682	0	349
372	2013-12-03 09:28:27.836471	0	350
373	2013-12-03 09:28:27.84127	0	351
374	2013-12-03 09:28:27.846075	0	352
375	2013-12-03 09:28:27.850874	0	353
376	2013-12-03 09:28:27.855676	0	354
377	2013-12-03 09:28:27.860428	0	355
378	2013-12-03 09:28:27.865307	0	356
379	2013-12-03 09:28:27.870148	0	357
380	2013-12-03 09:28:27.874917	0	358
381	2013-12-03 09:28:27.87972	0	359
382	2013-12-03 09:28:27.884505	0	360
383	2013-12-03 09:28:27.889331	0	361
384	2013-12-03 09:28:27.894114	0	362
385	2013-12-03 09:28:27.898905	0	363
386	2013-12-03 09:28:27.903688	0	364
387	2013-12-03 09:28:27.908446	0	365
388	2013-12-03 09:28:27.913291	0	366
389	2013-12-03 09:28:27.918171	0	367
390	2013-12-03 09:28:27.924184	0	368
391	2013-12-03 09:28:27.929185	0	369
392	2013-12-03 09:28:27.939314	0	370
393	2013-12-03 09:28:27.944131	0	371
394	2013-12-03 09:28:27.952871	0	372
395	2013-12-03 09:28:27.959495	0	373
396	2013-12-03 09:28:27.964437	0	374
397	2013-12-03 09:28:27.969297	0	375
398	2013-12-03 09:28:27.974078	0	376
399	2013-12-03 09:28:27.978925	0	377
400	2013-12-03 09:28:27.983714	0	378
401	2013-12-03 09:28:27.988956	0	379
402	2013-12-03 09:28:27.993726	0	380
403	2013-12-03 09:28:27.998515	0	381
404	2013-12-03 09:28:28.003377	0	382
405	2013-12-03 09:28:28.008156	0	383
406	2013-12-03 09:28:28.013003	0	384
407	2013-12-03 09:28:28.017912	0	385
408	2013-12-03 09:28:28.02268	0	386
409	2013-12-03 09:28:28.027461	0	387
410	2013-12-03 09:28:28.032294	0	388
411	2013-12-03 09:28:28.03712	0	389
412	2013-12-03 09:28:28.041984	0	390
413	2013-12-03 09:28:28.046796	0	391
414	2013-12-03 09:28:28.059531	0	392
415	2013-12-03 09:28:28.064473	0	393
416	2013-12-03 09:28:28.072455	0	394
417	2013-12-03 09:28:28.077386	0	395
418	2013-12-03 09:28:28.082216	0	396
419	2013-12-03 09:28:28.087043	0	397
420	2013-12-03 09:28:28.091867	0	398
421	2013-12-03 09:28:28.096703	0	399
422	2013-12-03 09:28:28.101493	0	400
423	2013-12-03 09:28:28.10626	0	401
424	2013-12-03 09:28:28.111047	0	402
425	2013-12-03 09:28:28.115847	0	403
426	2013-12-03 09:28:28.120638	0	404
427	2013-12-03 09:28:28.125424	0	405
428	2013-12-03 09:28:28.130216	0	406
429	2013-12-03 09:28:28.135013	0	407
430	2013-12-03 09:28:28.139815	0	408
431	2013-12-03 09:28:28.144622	0	409
432	2013-12-03 09:28:28.149472	0	410
433	2013-12-03 09:28:28.154266	0	411
434	2013-12-03 09:28:28.159055	0	412
435	2013-12-03 09:28:28.163838	0	413
436	2013-12-03 09:28:28.168637	0	414
437	2013-12-03 09:28:28.173422	0	415
438	2013-12-03 09:28:28.178219	0	416
439	2013-12-03 09:28:28.183022	0	417
440	2013-12-03 09:28:28.187828	0	418
441	2013-12-03 09:28:28.192618	0	419
442	2013-12-03 09:28:28.197463	0	420
443	2013-12-03 09:28:28.202248	0	421
444	2013-12-03 09:28:28.207459	0	422
445	2013-12-03 09:28:28.212261	0	423
446	2013-12-03 09:28:28.217164	0	424
447	2013-12-03 09:28:28.222052	0	425
448	2013-12-03 09:28:28.226849	0	426
449	2013-12-03 09:28:28.23165	0	427
450	2013-12-03 09:28:28.236451	0	428
451	2013-12-03 09:28:28.24129	0	429
452	2013-12-03 09:28:28.246083	0	430
453	2013-12-03 09:28:28.250861	0	431
454	2013-12-03 09:28:28.255613	0	432
455	2013-12-03 09:28:28.260402	0	433
456	2013-12-03 09:28:28.265237	0	434
457	2013-12-03 09:28:28.270069	0	435
458	2013-12-03 09:28:28.274837	0	436
459	2013-12-03 09:28:28.279625	0	437
460	2013-12-03 09:28:28.285379	0	438
461	2013-12-03 09:28:28.290172	0	439
462	2013-12-03 09:28:28.29498	0	440
463	2013-12-03 09:28:28.299781	0	441
464	2013-12-03 09:28:28.304552	0	442
465	2013-12-03 09:28:28.30936	0	443
466	2013-12-03 09:28:28.314141	0	444
467	2013-12-03 09:28:28.318959	0	445
468	2013-12-03 09:28:28.323724	0	446
469	2013-12-03 09:28:28.328544	0	447
470	2013-12-03 09:28:28.333391	0	448
471	2013-12-03 09:28:28.338155	0	449
472	2013-12-03 09:28:28.342995	0	450
473	2013-12-03 09:28:28.347928	0	451
474	2013-12-03 09:28:28.352756	0	452
475	2013-12-03 09:28:28.35767	0	453
476	2013-12-03 09:28:28.362469	0	454
477	2013-12-03 09:28:28.367266	0	455
478	2013-12-03 09:28:28.372015	0	456
479	2013-12-03 09:28:28.376857	0	457
\.


--
-- Name: levels_transactions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_transactions_id_seq', 479, true);


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
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 1, true);


--
-- Data for Name: standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY standards (id, standard, description) FROM stdin;
1	K.CC.A.1	Count to 100 by ones and by tens.
2	K.CC.A.2	Count forward beginning from a given number within the known sequence (instead of having to begin at 1).
3	K.CC.A.3	Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects.
4	K.CC.B.4A	When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.
5	K.CC.B.4B	Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.
6	K.CC.B.4C	Understand that each successive number name refers to a quantity that is one larger.
7	K.CC.B.5	Count to answer “how many?” questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1–20, count out that many objects.
8	K.CC.C.6	Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies. Includes groups with up to ten objects.
9	K.CC.C.7	Compare two numbers between 1 and 10 presented as written numerals.
10	K.OA.A.1	Compare two numbers between 1 and 10 presented as written numerals.
11	K.OA.A.2	Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.
12	K.OA.A.3	Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each  decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1.
13	K.OA.A.4	For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.
14	K.OA.A.5	Fluently add and subtract within 5.
15	K.NBT.A.1	Compose and decompose numbers from 11 to 19 into ten ones and some further ones. Understand that numbers 11 to 19 are made up of 1 ten and x amount of ones.
16	K.MD.A.1	Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.
17	K.MD.A.2	Directly compare two objects with a measurable attribute in common...
18	K.MD.B.3	Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.
19	K.G.A.1	Describe objects in the environment using names of shapes...
20	K.G.A.2	Correctly name shapes regardless of their orientations or overall size.
21	K.G.A.3	Identify shapes as two-dimensional....
22	K.G.B.4	Analyze and compare two- and three-dimensional shapes...
23	K.G.B.5	Model shapes in the world by building shapes from components...
24	K.G.B.6	Compose simple shapes to form..
25	1.OA.A.1	 Use addition and subtraction within 20 to solve word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.
26	1.O.A.2	Solve word problems that call for addition of three whole numbers whose sum is less than or equal to 20, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.
27	1.OA.B.3	Apply properties of operations as strategies to add and subtract.2 Examples: If 8 + 3 = 11 is known, then 3 + 8 = 11 is also known. (Commutative property of addition.) To add 2 + 6 + 4, the second two numbers can be added to make a ten, so 2 + 6 + 4 = 2 + 10 = 12. (Associative property of addition.)
28	1.OA.B.4	Understand subtraction as an unknown-addend problem. For example, subtract 10 – 8 by finding the number that makes 10 when added to 8.
29	1.OA.C.5	Relate counting to addition and subtraction (e.g., by counting on 2 to add 2).
30	1.OA.C.6	Add and subtract within 20, demonstrating fluency for addition and subtraction within 10. Use strategies such as counting on; making ten (e.g., 8 + 6 = 8 + 2 + 4 = 10 + 4 = 14); decomposing a number leading to a ten (e.g., 13 – 4 = 13 – 3 – 1 = 10 – 1 = 9); using the relationship between addition and subtraction (e.g., knowing that 8 + 4 = 12, one knows 12 – 8 = 4); and creating equivalent but easier or known sums (e.g., adding 6 + 7 by creating the known equivalent 6 + 6 + 1 = 12 + 1 = 13).
31	1.OA.D.7	Understand the meaning of the equal sign, and determine if equations involving addition and subtraction are true or false. For example, which of the following equations are true and which are false? 6 = 6, 7 = 8 – 1, 5 + 2 = 2 + 5, 4 + 1 = 5 + 2.
32	1.OA.D.8	Determine the unknown whole number in an addition or subtraction equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 + ? = 11, 5 = _ – 3, 6 + 6 = _.
33	1.NBT.A.1	Count to 120, starting at any number less than 120. In this range, read and write numerals and represent a number of objects with a written numeral.
34	1.NBT.B.2	Understand that the two digits of a two-digit number represent amounts of tens and ones. Understand the following as special cases:
35	1.NBT.B.2b	10 can be thought of as a bundle of ten ones — called a “ten.”
36	1.NBT.B.2c	The numbers 10, 20, 30, 40, 50, 60, 70, 80, 90 refer to one, two, three, four, five, six, seven, eight, or nine tens (and 0 ones).
37	1.NBT.B.3	iCompare two two-digit numbers based on meanings of the tens and ones digits, recording the results of comparisons with the symbols >, =, and <.
38	1.NBT.C.4	Add within 100, including adding a two-digit number and a one-digit number, and adding a two-digit number and a multiple of 10, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used. Understand that in adding two-digit numbers, one adds tens and tens, ones and ones; and sometimes it is necessary to compose a ten.
39	1.NBT.C.5	Given a two-digit number, mentally find 10 more or 10 less than the number, without having to count; explain the reasoning used.
40	1.NBT.C.6	Subtract multiples of 10 in the range 10-90 from multiples of 10 in the range 10-90 (positive or zero differences), using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used.
41	1.MD.A.1	Order three objects by length; compare the lengths of two objects indirectly by using a third object.
42	1.MD.A.2	 Express the length of an object as a whole number of length units, by laying multiple copies of a shorter object (the length unit) end to end; understand that the length measurement of an object is the number of same-size length units that span it with no gaps or overlaps. Limit to contexts where the object being measured is spanned by a whole number of length units with no gaps or overlaps.
43	1.MD.C.4	Organize, represent, and interpret data with up to three categories; ask and answer questions about the total number of data points, how many in each category, and how many more or less are in one category than in another.
44	1.G.A.1	Distinguish between defining attributes (e.g., triangles are closed and three-sided) versus non-defining attributes (e.g., color, orientation, overall size); build and draw shapes to possess defining attributes.
45	1.G.A.2	Compose two-dimensional shapes (rectangles, squares, trapezoids, triangles, half-circles, and quarter-circles) or three-dimensional shapes (cubes, right rectangular prisms, right circular cones, and right circular cylinders) to create a composite shape, and compose new shapes from the composite shape.
46	1.G.A.3	Partition circles and rectangles into two and four equal shares, describe the shares using the words halves, fourths, and quarters, and use the phrases half of, fourth of, and quarter of. Describe the whole as two of, or four of the shares. Understand for these examples that decomposing into more equal shares creates smaller shares.
\.


--
-- Data for Name: standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY standards_clusters_domains_grades (id, standard_id, cluster_domain_grade_id) FROM stdin;
\.


--
-- Name: standards_clusters_domains_grades_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('standards_clusters_domains_grades_id_seq', 1, false);


--
-- Name: standards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('standards_id_seq', 46, true);


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
\.


--
-- Data for Name: subjects; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY subjects (id, subject) FROM stdin;
1	Mathematics
2	English Language Arts
\.


--
-- Name: subjects_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('subjects_id_seq', 2, true);


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
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id) FROM stdin;
1	root	secret	\N	\N	\N	\N	\N	1
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
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 457, true);


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
-- Name: games_levels_level_id_game_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_level_id_game_id_key UNIQUE (level_id, game_id);


--
-- Name: games_levels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_pkey PRIMARY KEY (id);


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
-- Name: levels_standards_level_id_standard_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_level_id_standard_id_key UNIQUE (level_id, standard_id);


--
-- Name: levels_standards_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_pkey PRIMARY KEY (id);


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
-- Name: games_levels_game_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_game_id_fkey FOREIGN KEY (game_id) REFERENCES games(id);


--
-- Name: games_levels_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


--
-- Name: levels_standards_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


--
-- Name: levels_standards_standard_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_standard_id_fkey FOREIGN KEY (standard_id) REFERENCES standards(id);


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

