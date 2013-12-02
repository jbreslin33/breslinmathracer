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

SELECT pg_catalog.setval('games_id_seq', 4, true);


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
\.


--
-- Name: games_levels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_levels_id_seq', 39, true);


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
14	K_OA_A_5
14.0099999999999998	K_OA_A_5
14.0199999999999996	K_OA_A_5
14.0299999999999994	K_OA_A_5
14.0399999999999991	K_OA_A_5
14.0500000000000007	K_OA_A_5
14.0600000000000005	K_OA_A_5
14.0700000000000003	K_OA_A_5
14.0800000000000001	K_OA_A_5
14.0899999999999999	K_OA_A_5
14.0999999999999996	K_OA_A_5
14.1099999999999994	K_OA_A_5
14.1199999999999992	K_OA_A_5
14.1300000000000008	K_OA_A_5
14.1400000000000006	K_OA_A_5
14.1500000000000004	K_OA_A_5
14.1600000000000001	K_OA_A_5
14.1699999999999999	K_OA_A_5
14.1799999999999997	K_OA_A_5
14.1899999999999995	K_OA_A_5
14.1999999999999993	K_OA_A_5
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
\.


--
-- Data for Name: levels_standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
\.


--
-- Name: levels_standards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_standards_id_seq', 39, true);


--
-- Data for Name: levels_transactions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_transactions (id, advancement_time, level_id, user_id) FROM stdin;
1	2013-12-02 08:19:23.093179	0	1
2	2013-12-02 08:19:46.161963	1	1
\.


--
-- Name: levels_transactions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_transactions_id_seq', 2, true);


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
1	j
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 1, true);


--
-- Data for Name: standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY standards (id, standard, description) FROM stdin;
1	K_CC_A_1	Count to 100 by ones and by tens.
2	K_CC_A_2	Count forward beginning from a given number within the known sequence (instead of having to begin at 1).
3	K_CC_A_3	Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects.
4	K_CC_B_4A	When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.
5	K_CC_B_4B	Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.
6	K_CC_B_4C	Understand that each successive number name refers to a quantity that is one larger.
7	K_CC_B_5	Count to answer “how many?” questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1–20, count out that many objects.
8	K_CC_C_6	Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies. Includes groups with up to ten objects.
9	K_CC_C_7	Compare two numbers between 1 and 10 presented as written numerals.
10	K_OA_A_1	Compare two numbers between 1 and 10 presented as written numerals.
11	K_OA_A_2	Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.
12	K_OA_A_3	Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each  decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1.
13	K_OA_A_4	For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.
14	K_OA_A_5	Fluently add and subtract within 5.
15	K_NBT_A_1	Compose and decompose numbers from 11 to 19 into ten ones and some further ones. Understand that numbers 11 to 19 are made up of 1 ten and x amount of ones.
16	K_MD_A_1	Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.
17	K_MD_A_2	Directly compare two objects with a measurable attribute in common...
18	K_MD_B_3	Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.
19	K_G_A_1	Describe objects in the environment using names of shapes...
20	K_G_A_2	Correctly name shapes regardless of their orientations or overall size.
21	K_G_A_3	Identify shapes as two-dimensional....
22	K_G_B_4	Analyze and compare two- and three-dimensional shapes...
23	K_G_B_5	Model shapes in the world by building shapes from components...
24	K_G_B_6	Compose simple shapes to form..
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

SELECT pg_catalog.setval('standards_id_seq', 24, true);


--
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY students (id, teacher_id) FROM stdin;
1	0
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
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY teachers (id, room_id) FROM stdin;
1	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id) FROM stdin;
1	root		\N	\N	\N	\N	\N	1
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


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

