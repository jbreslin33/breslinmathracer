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
-- Name: addition; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE addition (
    id integer NOT NULL,
    score_needed integer DEFAULT 10 NOT NULL,
    addend_a integer NOT NULL,
    addend_b integer NOT NULL,
    number_of_addends integer DEFAULT 2 NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.addition OWNER TO postgres;

--
-- Name: addition_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE addition_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.addition_id_seq OWNER TO postgres;

--
-- Name: addition_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE addition_id_seq OWNED BY addition.id;


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
-- Name: counting; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE counting (
    id integer NOT NULL,
    score_needed integer DEFAULT 10 NOT NULL,
    start_number integer NOT NULL,
    end_number integer NOT NULL,
    count_by integer DEFAULT 1 NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.counting OWNER TO postgres;

--
-- Name: counting_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE counting_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.counting_id_seq OWNER TO postgres;

--
-- Name: counting_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE counting_id_seq OWNED BY counting.id;


--
-- Name: division; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE division (
    id integer NOT NULL,
    score_needed integer DEFAULT 10 NOT NULL,
    factor_min integer NOT NULL,
    factor_max integer NOT NULL,
    number_of_factors integer DEFAULT 2 NOT NULL,
    level_id double precision NOT NULL
);


ALTER TABLE public.division OWNER TO postgres;

--
-- Name: division_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE division_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.division_id_seq OWNER TO postgres;

--
-- Name: division_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE division_id_seq OWNED BY division.id;


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
    level_id numeric(9,3) NOT NULL,
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
    level_id numeric(9,3) NOT NULL
);


ALTER TABLE public.games_levels OWNER TO postgres;

--
-- Name: games_levels_dungeon; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE games_levels_dungeon (
    id integer NOT NULL,
    chasers integer NOT NULL,
    games_levels_id integer NOT NULL
);


ALTER TABLE public.games_levels_dungeon OWNER TO postgres;

--
-- Name: games_levels_dungeon_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE games_levels_dungeon_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.games_levels_dungeon_id_seq OWNER TO postgres;

--
-- Name: games_levels_dungeon_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE games_levels_dungeon_id_seq OWNED BY games_levels_dungeon.id;


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
-- Name: levels; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels (
    id numeric(9,3) NOT NULL,
    description text NOT NULL
);


ALTER TABLE public.levels OWNER TO postgres;

--
-- Name: levels_standards; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE levels_standards (
    id integer NOT NULL,
    level_id numeric(9,3) NOT NULL,
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
    level_id numeric(9,3) NOT NULL,
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
-- Name: questions; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE questions (
    id integer NOT NULL,
    question text NOT NULL,
    answer text NOT NULL,
    level_id double precision NOT NULL,
    question_order double precision NOT NULL
);


ALTER TABLE public.questions OWNER TO postgres;

--
-- Name: questions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE questions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.questions_id_seq OWNER TO postgres;

--
-- Name: questions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE questions_id_seq OWNED BY questions.id;


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

ALTER TABLE ONLY addition ALTER COLUMN id SET DEFAULT nextval('addition_id_seq'::regclass);


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

ALTER TABLE ONLY counting ALTER COLUMN id SET DEFAULT nextval('counting_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY division ALTER COLUMN id SET DEFAULT nextval('division_id_seq'::regclass);


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

ALTER TABLE ONLY games_levels_dungeon ALTER COLUMN id SET DEFAULT nextval('games_levels_dungeon_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY grades ALTER COLUMN id SET DEFAULT nextval('grades_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levelattempts ALTER COLUMN id SET DEFAULT nextval('level_attempts_id_seq'::regclass);


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

ALTER TABLE ONLY questions ALTER COLUMN id SET DEFAULT nextval('questions_id_seq'::regclass);


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
-- Data for Name: addition; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY addition (id, score_needed, addend_a, addend_b, number_of_addends, level_id) FROM stdin;
1	10	0	0	2	14
2	10	1	0	2	14.0099999999999998
3	10	2	0	2	14.0199999999999996
4	10	3	0	2	14.0299999999999994
5	10	4	0	2	14.0399999999999991
6	10	5	0	2	14.0500000000000007
7	10	0	1	2	14.0600000000000005
8	10	0	2	2	14.0700000000000003
9	10	0	3	2	14.0800000000000001
10	10	0	4	2	14.0899999999999999
11	10	0	5	2	14.0999999999999996
12	10	1	1	2	14.1099999999999994
13	10	2	1	2	14.1199999999999992
14	10	3	1	2	14.1300000000000008
15	10	4	1	2	14.1400000000000006
16	10	5	1	2	14.1500000000000004
17	10	1	2	2	14.1600000000000001
18	10	1	3	2	14.1699999999999999
19	10	1	4	2	14.1799999999999997
20	10	1	5	2	14.1899999999999995
21	10	2	2	2	14.1999999999999993
22	10	3	2	2	14.2100000000000009
23	10	4	2	2	14.2200000000000006
24	10	5	2	2	14.2300000000000004
25	10	2	3	2	14.2400000000000002
26	10	2	4	2	14.25
27	10	2	5	2	14.2599999999999998
28	10	3	3	2	14.3000000000000007
29	10	4	3	2	14.3100000000000005
30	10	5	3	2	14.3200000000000003
31	10	3	4	2	14.3300000000000001
32	10	3	5	2	14.3399999999999999
33	10	4	4	2	14.4000000000000004
34	10	5	4	2	14.4100000000000001
35	10	4	5	2	14.4199999999999999
36	10	5	5	2	14.5
37	10	10	0	2	15
38	10	9	1	2	15.0099999999999998
39	10	8	2	2	15.0199999999999996
40	10	7	3	2	15.0299999999999994
41	10	6	4	2	15.0399999999999991
42	10	4	6	2	15.0500000000000007
43	10	3	7	2	15.0600000000000005
44	10	2	8	2	15.0700000000000003
45	10	1	9	2	15.0800000000000001
46	10	0	10	2	15.0899999999999999
47	10	10	0	2	15.0999999999999996
48	10	9	1	2	15.1099999999999994
49	10	0	6	2	16.1000000000000014
50	10	1	6	2	16.1099999999999994
51	10	2	6	2	16.120000000000001
52	10	3	6	2	16.129999999999999
53	10	5	6	2	16.1400000000000006
54	10	6	6	2	16.1499999999999986
55	10	7	6	2	16.1600000000000001
56	10	8	6	2	16.1700000000000017
57	10	9	6	2	16.1799999999999997
\.


--
-- Name: addition_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('addition_id_seq', 57, true);


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
-- Data for Name: counting; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY counting (id, score_needed, start_number, end_number, count_by, level_id) FROM stdin;
1	1	0	1	1	1
2	2	0	2	1	1.01000000000000001
3	3	0	3	1	1.02000000000000002
4	4	0	4	1	1.03000000000000003
5	5	0	5	1	1.04000000000000004
6	6	0	6	1	1.05000000000000004
7	7	0	7	1	1.06000000000000005
8	8	0	8	1	1.07000000000000006
9	9	0	9	1	1.08000000000000007
10	10	0	10	1	1.09000000000000008
11	1	10	11	1	1.10000000000000009
12	2	10	12	1	1.1100000000000001
13	3	10	13	1	1.12000000000000011
14	4	10	14	1	1.12999999999999989
15	5	10	15	1	1.1399999999999999
16	10	0	100	10	1.89999999999999991
17	10	87	97	1	2
18	10	23	33	1	2.10000000000000009
19	10	55	65	1	2.20000000000000018
20	10	4	14	1	2.29999999999999982
\.


--
-- Name: counting_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('counting_id_seq', 20, true);


--
-- Data for Name: division; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY division (id, score_needed, factor_min, factor_max, number_of_factors, level_id) FROM stdin;
1	10	1	12	2	700
\.


--
-- Name: division_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('division_id_seq', 1, true);


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
6	Pad_2_oa_b_2
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

SELECT pg_catalog.setval('games_id_seq', 6, true);


--
-- Data for Name: games_levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games_levels (id, game_id, level_id) FROM stdin;
1	1	1.000
2	1	1.010
3	1	1.020
4	1	1.030
5	1	1.040
6	1	1.050
7	1	1.060
8	1	1.070
9	1	1.080
10	1	1.090
11	1	1.100
12	2	2.000
13	2	2.010
14	2	2.020
15	2	2.030
16	2	2.040
17	2	2.050
18	3	3.000
19	4	14.000
20	4	14.010
21	4	14.020
22	4	14.030
23	4	14.040
24	4	14.050
25	4	14.060
26	4	14.070
27	4	14.080
28	4	14.090
29	4	14.100
30	4	14.110
31	4	14.120
32	4	14.130
33	4	14.140
34	4	14.150
35	4	14.160
36	4	14.170
37	4	14.180
38	4	14.190
39	4	14.200
40	4	14.210
41	4	14.220
42	4	14.230
43	4	14.240
44	4	14.250
45	4	14.260
46	4	14.270
47	4	14.280
48	4	14.290
49	4	14.300
50	4	14.310
51	4	14.320
52	4	14.330
53	4	14.340
54	4	14.350
55	4	14.360
56	4	14.370
57	4	14.380
58	4	14.390
59	4	14.400
60	4	14.410
61	5	30.000
62	5	30.010
63	5	30.020
64	5	30.030
65	5	30.040
66	5	30.050
67	5	30.060
68	5	30.070
69	5	30.080
70	5	30.090
71	5	30.100
72	5	30.110
73	5	30.120
74	5	30.130
75	5	30.140
76	5	30.150
77	5	30.160
78	5	30.170
79	5	30.180
80	5	30.190
81	5	30.200
82	5	30.210
83	5	30.220
84	5	30.230
85	5	30.240
86	5	30.250
87	5	30.260
88	5	30.270
89	5	30.280
90	5	30.290
91	5	30.300
92	5	30.310
93	5	30.320
94	5	30.330
95	5	30.340
96	5	30.350
97	5	30.360
98	5	30.370
99	5	30.380
100	5	30.390
101	5	30.400
102	5	30.410
103	5	30.420
104	5	30.430
105	5	30.440
106	5	30.450
107	5	30.460
108	5	30.470
109	5	30.480
110	5	30.490
111	5	30.500
112	5	30.510
113	5	30.520
114	5	30.530
115	5	30.540
116	5	30.550
117	5	30.560
118	5	30.570
119	5	30.580
120	5	30.590
121	5	30.600
122	5	30.610
123	5	30.620
124	5	30.630
125	5	30.640
126	5	30.650
127	5	30.660
128	5	30.670
129	5	30.680
130	5	30.690
131	5	30.700
132	5	30.710
133	5	30.720
134	5	30.730
135	5	30.740
136	5	30.750
137	5	30.760
138	5	30.770
139	5	30.780
140	6	48.000
141	6	48.001
142	6	48.002
143	6	48.003
144	6	48.004
145	6	48.005
146	6	48.006
147	6	48.007
148	6	48.008
149	6	48.009
150	6	48.010
151	6	48.011
152	6	48.012
153	6	48.013
154	6	48.014
155	6	48.015
156	6	48.016
157	6	48.017
158	6	48.018
159	6	48.019
160	6	48.020
161	6	48.021
162	6	48.022
163	6	48.023
164	6	48.024
165	6	48.025
166	6	48.026
167	6	48.027
168	6	48.028
169	6	48.029
170	6	48.030
171	6	48.031
172	6	48.032
173	6	48.033
174	6	48.034
175	6	48.035
176	6	48.036
177	6	48.037
178	6	48.038
179	6	48.039
180	6	48.040
181	6	48.041
182	6	48.042
183	6	48.043
184	6	48.044
185	6	48.045
186	6	48.046
187	6	48.047
188	6	48.048
189	6	48.049
190	6	48.050
191	6	48.051
192	6	48.052
193	6	48.053
194	6	48.054
195	6	48.055
196	6	48.056
197	6	48.057
198	6	48.058
199	6	48.059
200	6	48.060
201	6	48.061
202	6	48.062
203	6	48.063
204	6	48.064
205	6	48.065
206	6	48.066
207	6	48.067
208	6	48.068
209	6	48.069
210	6	48.070
211	6	48.071
212	6	48.072
213	6	48.073
214	6	48.074
215	6	48.075
216	6	48.076
217	6	48.077
218	6	48.078
219	6	48.079
220	6	48.080
221	6	48.081
222	6	48.082
223	6	48.083
224	6	48.084
225	6	48.085
226	6	48.086
227	6	48.087
228	6	48.088
229	6	48.089
230	6	48.090
231	6	48.091
232	6	48.092
233	6	48.093
234	6	48.094
235	6	48.095
236	6	48.096
237	6	48.097
238	6	48.098
239	6	48.099
240	6	48.100
241	6	48.101
242	6	48.102
243	6	48.103
244	6	48.104
245	6	48.105
246	6	48.106
247	6	48.107
248	6	48.108
249	6	48.109
250	6	48.110
251	6	48.111
252	6	48.112
253	6	48.113
254	6	48.114
255	6	48.115
256	6	48.116
257	6	48.117
258	6	48.118
259	6	48.119
260	6	48.120
261	6	48.121
262	6	48.122
263	6	48.123
264	6	48.124
265	6	48.125
266	6	48.126
267	6	48.127
268	6	48.128
269	6	48.129
270	6	48.130
271	6	48.131
272	6	48.132
273	6	48.133
274	6	48.134
275	6	48.135
276	6	48.136
277	6	48.137
278	6	48.138
279	6	48.139
280	6	48.140
281	6	48.141
282	6	48.142
283	6	48.143
284	6	48.144
285	6	48.145
286	6	48.146
287	6	48.147
288	6	48.148
289	6	48.149
290	6	48.150
291	6	48.151
292	6	48.152
293	6	48.153
294	6	48.154
295	6	48.155
296	6	48.156
297	6	48.157
298	6	48.158
299	6	48.159
300	6	48.160
301	6	48.161
302	6	48.162
303	6	48.163
304	6	48.164
305	6	48.165
306	6	48.166
307	6	48.167
308	6	48.168
309	6	48.169
310	6	48.170
311	6	48.171
312	6	48.172
313	6	48.173
314	6	48.174
315	6	48.175
316	6	48.176
317	6	48.177
318	6	48.178
319	6	48.179
320	6	48.180
321	6	48.181
322	6	48.182
323	6	48.183
324	6	48.184
325	6	48.185
326	6	48.186
327	6	48.187
328	6	48.188
329	6	48.189
330	6	48.190
331	6	48.191
332	6	48.192
333	6	48.193
334	6	48.194
335	6	48.195
336	6	48.196
337	6	48.197
338	6	48.198
339	6	48.199
340	6	48.200
341	6	48.201
342	6	48.202
343	6	48.203
344	6	48.204
345	6	48.205
346	6	48.206
347	6	48.207
348	6	48.208
349	6	48.209
350	6	48.210
351	6	48.211
352	6	48.212
353	6	48.213
354	6	48.214
355	6	48.215
356	6	48.216
357	6	48.217
358	6	48.218
359	6	48.219
360	6	48.220
361	6	48.221
362	6	48.222
363	6	48.223
364	6	48.224
365	6	48.225
366	6	48.226
367	6	48.227
368	6	48.228
369	6	48.229
370	6	48.230
371	6	48.231
372	6	48.232
373	6	48.233
374	6	48.234
375	6	48.235
376	6	48.236
377	6	48.237
378	6	48.238
379	6	48.239
380	6	48.240
381	6	48.241
382	6	48.242
383	6	48.243
384	6	48.244
385	6	48.245
386	6	48.246
387	6	48.247
388	6	48.248
389	6	48.249
390	6	48.250
391	6	48.251
392	6	48.252
393	6	48.253
394	6	48.254
395	6	48.255
396	6	48.256
397	6	48.257
398	6	48.258
399	6	48.259
400	6	48.260
401	6	48.261
402	6	48.262
403	6	48.263
404	6	48.264
405	6	48.265
406	6	48.266
407	6	48.267
408	6	48.268
409	6	48.269
410	6	48.270
411	6	48.271
412	6	48.272
413	6	48.273
414	6	48.274
415	6	48.275
416	6	48.276
417	6	48.277
418	6	48.278
419	6	48.279
420	6	48.280
421	6	48.281
422	6	48.282
423	6	48.283
424	6	48.284
425	6	48.285
426	6	48.286
427	6	48.287
428	6	48.288
429	6	48.289
430	6	48.290
431	6	48.291
432	6	48.292
433	6	48.293
434	6	48.294
435	6	48.295
436	6	48.296
437	6	48.297
438	6	48.298
439	6	48.299
440	6	48.300
441	6	48.301
442	6	48.302
443	6	48.303
\.


--
-- Data for Name: games_levels_dungeon; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games_levels_dungeon (id, chasers, games_levels_id) FROM stdin;
1	3	1
\.


--
-- Name: games_levels_dungeon_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_levels_dungeon_id_seq', 1, true);


--
-- Name: games_levels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('games_levels_id_seq', 443, true);


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
-- Data for Name: learning_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY learning_standards (id, ref_id, progression, levels) FROM stdin;
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
-- Data for Name: levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels (id, description) FROM stdin;
0.000	Start of Journey
1.000	
1.010	
1.020	
1.030	
1.040	
1.050	
1.060	
1.070	
1.080	
1.090	
1.100	
2.000	
2.010	
2.020	
2.030	
2.040	
2.050	
3.000	K_CC_A_3
14.000	
14.010	
14.020	
14.030	
14.040	
14.050	
14.060	
14.070	
14.080	
14.090	
14.100	
14.110	
14.120	
14.130	
14.140	
14.150	
14.160	
14.170	
14.180	
14.190	
14.200	
14.210	
14.220	
14.230	
14.240	
14.250	
14.260	
14.270	
14.280	
14.290	
14.300	
14.310	
14.320	
14.330	
14.340	
14.350	
14.360	
14.370	
14.380	
14.390	
14.400	
14.410	
30.000	
30.010	
30.020	
30.030	
30.040	
30.050	
30.060	
30.070	
30.080	
30.090	
30.100	
30.110	
30.120	
30.130	
30.140	
30.150	
30.160	
30.170	
30.180	
30.190	
30.200	
30.210	
30.220	
30.230	
30.240	
30.250	
30.260	
30.270	
30.280	
30.290	
30.300	
30.310	
30.320	
30.330	
30.340	
30.350	
30.360	
30.370	
30.380	
30.390	
30.400	
30.410	
30.420	
30.430	
30.440	
30.450	
30.460	
30.470	
30.480	
30.490	
30.500	
30.510	
30.520	
30.530	
30.540	
30.550	
30.560	
30.570	
30.580	
30.590	
30.600	
30.610	
30.620	
30.630	
30.640	
30.650	
30.660	
30.670	
30.680	
30.690	
30.700	
30.710	
30.720	
30.730	
30.740	
30.750	
30.760	
30.770	
30.780	
48.000	
48.001	
48.002	
48.003	
48.004	
48.005	
48.006	
48.007	
48.008	
48.009	
48.010	
48.011	
48.012	
48.013	
48.014	
48.015	
48.016	
48.017	
48.018	
48.019	
48.020	
48.021	
48.022	
48.023	
48.024	
48.025	
48.026	
48.027	
48.028	
48.029	
48.030	
48.031	
48.032	
48.033	
48.034	
48.035	
48.036	
48.037	
48.038	
48.039	
48.040	
48.041	
48.042	
48.043	
48.044	
48.045	
48.046	
48.047	
48.048	
48.049	
48.050	
48.051	
48.052	
48.053	
48.054	
48.055	
48.056	
48.057	
48.058	
48.059	
48.060	
48.061	
48.062	
48.063	
48.064	
48.065	
48.066	
48.067	
48.068	
48.069	
48.070	
48.071	
48.072	
48.073	
48.074	
48.075	
48.076	
48.077	
48.078	
48.079	
48.080	
48.081	
48.082	
48.083	
48.084	
48.085	
48.086	
48.087	
48.088	
48.089	
48.090	
48.091	
48.092	
48.093	
48.094	
48.095	
48.096	
48.097	
48.098	
48.099	
48.100	
48.101	
48.102	
48.103	
48.104	
48.105	
48.106	
48.107	
48.108	
48.109	
48.110	
48.111	
48.112	
48.113	
48.114	
48.115	
48.116	
48.117	
48.118	
48.119	
48.120	
48.121	
48.122	
48.123	
48.124	
48.125	
48.126	
48.127	
48.128	
48.129	
48.130	
48.131	
48.132	
48.133	
48.134	
48.135	
48.136	
48.137	
48.138	
48.139	
48.140	
48.141	
48.142	
48.143	
48.144	
48.145	
48.146	
48.147	
48.148	
48.149	
48.150	
48.151	
48.152	
48.153	
48.154	
48.155	
48.156	
48.157	
48.158	
48.159	
48.160	
48.161	
48.162	
48.163	
48.164	
48.165	
48.166	
48.167	
48.168	
48.169	
48.170	
48.171	
48.172	
48.173	
48.174	
48.175	
48.176	
48.177	
48.178	
48.179	
48.180	
48.181	
48.182	
48.183	
48.184	
48.185	
48.186	
48.187	
48.188	
48.189	
48.190	
48.191	
48.192	
48.193	
48.194	
48.195	
48.196	
48.197	
48.198	
48.199	
48.200	
48.201	
48.202	
48.203	
48.204	
48.205	
48.206	
48.207	
48.208	
48.209	
48.210	
48.211	
48.212	
48.213	
48.214	
48.215	
48.216	
48.217	
48.218	
48.219	
48.220	
48.221	
48.222	
48.223	
48.224	
48.225	
48.226	
48.227	
48.228	
48.229	
48.230	
48.231	
48.232	
48.233	
48.234	
48.235	
48.236	
48.237	
48.238	
48.239	
48.240	
48.241	
48.242	
48.243	
48.244	
48.245	
48.246	
48.247	
48.248	
48.249	
48.250	
48.251	
48.252	
48.253	
48.254	
48.255	
48.256	
48.257	
48.258	
48.259	
48.260	
48.261	
48.262	
48.263	
48.264	
48.265	
48.266	
48.267	
48.268	
48.269	
48.270	
48.271	
48.272	
48.273	
48.274	
48.275	
48.276	
48.277	
48.278	
48.279	
48.280	
48.281	
48.282	
48.283	
48.284	
48.285	
48.286	
48.287	
48.288	
48.289	
48.290	
48.291	
48.292	
48.293	
48.294	
48.295	
48.296	
48.297	
48.298	
48.299	
48.300	
48.301	
48.302	
48.303	
\.


--
-- Data for Name: levels_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards (id, level_id, standard_id) FROM stdin;
1	1.000	1
2	1.010	1
3	1.020	1
4	1.030	1
5	1.040	1
6	1.050	1
7	1.060	1
8	1.070	1
9	1.080	1
10	1.090	1
11	1.100	1
12	2.000	2
13	2.010	2
14	2.020	2
15	2.030	2
16	2.040	2
17	2.050	2
18	3.000	3
19	14.000	14
20	14.010	14
21	14.020	14
22	14.030	14
23	14.040	14
24	14.050	14
25	14.060	14
26	14.070	14
27	14.080	14
28	14.090	14
29	14.100	14
30	14.110	14
31	14.120	14
32	14.130	14
33	14.140	14
34	14.150	14
35	14.160	14
36	14.170	14
37	14.180	14
38	14.190	14
39	14.200	14
40	14.210	14
41	14.220	14
42	14.230	14
43	14.240	14
44	14.250	14
45	14.260	14
46	14.270	14
47	14.280	14
48	14.290	14
49	14.300	14
50	14.310	14
51	14.320	14
52	14.330	14
53	14.340	14
54	14.350	14
55	14.360	14
56	14.370	14
57	14.380	14
58	14.390	14
59	14.400	14
60	14.410	14
61	30.000	30
62	30.010	30
63	30.020	30
64	30.030	30
65	30.040	30
66	30.050	30
67	30.060	30
68	30.070	30
69	30.080	30
70	30.090	30
71	30.100	30
72	30.110	30
73	30.120	30
74	30.130	30
75	30.140	30
76	30.150	30
77	30.160	30
78	30.170	30
79	30.180	30
80	30.190	30
81	30.200	30
82	30.210	30
83	30.220	30
84	30.230	30
85	30.240	30
86	30.250	30
87	30.260	30
88	30.270	30
89	30.280	30
90	30.290	30
91	30.300	30
92	30.310	30
93	30.320	30
94	30.330	30
95	30.340	30
96	30.350	30
97	30.360	30
98	30.370	30
99	30.380	30
100	30.390	30
101	30.400	30
102	30.410	30
103	30.420	30
104	30.430	30
105	30.440	30
106	30.450	30
107	30.460	30
108	30.470	30
109	30.480	30
110	30.490	30
111	30.500	30
112	30.510	30
113	30.520	30
114	30.530	30
115	30.540	30
116	30.550	30
117	30.560	30
118	30.570	30
119	30.580	30
120	30.590	30
121	30.600	30
122	30.610	30
123	30.620	30
124	30.630	30
125	30.640	30
126	30.650	30
127	30.660	30
128	30.670	30
129	30.680	30
130	30.690	30
131	30.700	30
132	30.710	30
133	30.720	30
134	30.730	30
135	30.740	30
136	30.750	30
137	30.760	30
138	30.770	30
139	30.780	30
140	48.000	48
141	48.001	48
142	48.002	48
143	48.003	48
144	48.004	48
145	48.005	48
146	48.006	48
147	48.007	48
148	48.008	48
149	48.009	48
150	48.010	48
151	48.011	48
152	48.012	48
153	48.013	48
154	48.014	48
155	48.015	48
156	48.016	48
157	48.017	48
158	48.018	48
159	48.019	48
160	48.020	48
161	48.021	48
162	48.022	48
163	48.023	48
164	48.024	48
165	48.025	48
166	48.026	48
167	48.027	48
168	48.028	48
169	48.029	48
170	48.030	48
171	48.031	48
172	48.032	48
173	48.033	48
174	48.034	48
175	48.035	48
176	48.036	48
177	48.037	48
178	48.038	48
179	48.039	48
180	48.040	48
181	48.041	48
182	48.042	48
183	48.043	48
184	48.044	48
185	48.045	48
186	48.046	48
187	48.047	48
188	48.048	48
189	48.049	48
190	48.050	48
191	48.051	48
192	48.052	48
193	48.053	48
194	48.054	48
195	48.055	48
196	48.056	48
197	48.057	48
198	48.058	48
199	48.059	48
200	48.060	48
201	48.061	48
202	48.062	48
203	48.063	48
204	48.064	48
205	48.065	48
206	48.066	48
207	48.067	48
208	48.068	48
209	48.069	48
210	48.070	48
211	48.071	48
212	48.072	48
213	48.073	48
214	48.074	48
215	48.075	48
216	48.076	48
217	48.077	48
218	48.078	48
219	48.079	48
220	48.080	48
221	48.081	48
222	48.082	48
223	48.083	48
224	48.084	48
225	48.085	48
226	48.086	48
227	48.087	48
228	48.088	48
229	48.089	48
230	48.090	48
231	48.091	48
232	48.092	48
233	48.093	48
234	48.094	48
235	48.095	48
236	48.096	48
237	48.097	48
238	48.098	48
239	48.099	48
240	48.100	48
241	48.101	48
242	48.102	48
243	48.103	48
244	48.104	48
245	48.105	48
246	48.106	48
247	48.107	48
248	48.108	48
249	48.109	48
250	48.110	48
251	48.111	48
252	48.112	48
253	48.113	48
254	48.114	48
255	48.115	48
256	48.116	48
257	48.117	48
258	48.118	48
259	48.119	48
260	48.120	48
261	48.121	48
262	48.122	48
263	48.123	48
264	48.124	48
265	48.125	48
266	48.126	48
267	48.127	48
268	48.128	48
269	48.129	48
270	48.130	48
271	48.131	48
272	48.132	48
273	48.133	48
274	48.134	48
275	48.135	48
276	48.136	48
277	48.137	48
278	48.138	48
279	48.139	48
280	48.140	48
281	48.141	48
282	48.142	48
283	48.143	48
284	48.144	48
285	48.145	48
286	48.146	48
287	48.147	48
288	48.148	48
289	48.149	48
290	48.150	48
291	48.151	48
292	48.152	48
293	48.153	48
294	48.154	48
295	48.155	48
296	48.156	48
297	48.157	48
298	48.158	48
299	48.159	48
300	48.160	48
301	48.161	48
302	48.162	48
303	48.163	48
304	48.164	48
305	48.165	48
306	48.166	48
307	48.167	48
308	48.168	48
309	48.169	48
310	48.170	48
311	48.171	48
312	48.172	48
313	48.173	48
314	48.174	48
315	48.175	48
316	48.176	48
317	48.177	48
318	48.178	48
319	48.179	48
320	48.180	48
321	48.181	48
322	48.182	48
323	48.183	48
324	48.184	48
325	48.185	48
326	48.186	48
327	48.187	48
328	48.188	48
329	48.189	48
330	48.190	48
331	48.191	48
332	48.192	48
333	48.193	48
334	48.194	48
335	48.195	48
336	48.196	48
337	48.197	48
338	48.198	48
339	48.199	48
340	48.200	48
341	48.201	48
342	48.202	48
343	48.203	48
344	48.204	48
345	48.205	48
346	48.206	48
347	48.207	48
348	48.208	48
349	48.209	48
350	48.210	48
351	48.211	48
352	48.212	48
353	48.213	48
354	48.214	48
355	48.215	48
356	48.216	48
357	48.217	48
358	48.218	48
359	48.219	48
360	48.220	48
361	48.221	48
362	48.222	48
363	48.223	48
364	48.224	48
365	48.225	48
366	48.226	48
367	48.227	48
368	48.228	48
369	48.229	48
370	48.230	48
371	48.231	48
372	48.232	48
373	48.233	48
374	48.234	48
375	48.235	48
376	48.236	48
377	48.237	48
378	48.238	48
379	48.239	48
380	48.240	48
381	48.241	48
382	48.242	48
383	48.243	48
384	48.244	48
385	48.245	48
386	48.246	48
387	48.247	48
388	48.248	48
389	48.249	48
390	48.250	48
391	48.251	48
392	48.252	48
393	48.253	48
394	48.254	48
395	48.255	48
396	48.256	48
397	48.257	48
398	48.258	48
399	48.259	48
400	48.260	48
401	48.261	48
402	48.262	48
403	48.263	48
404	48.264	48
405	48.265	48
406	48.266	48
407	48.267	48
408	48.268	48
409	48.269	48
410	48.270	48
411	48.271	48
412	48.272	48
413	48.273	48
414	48.274	48
415	48.275	48
416	48.276	48
417	48.277	48
418	48.278	48
419	48.279	48
420	48.280	48
421	48.281	48
422	48.282	48
423	48.283	48
424	48.284	48
425	48.285	48
426	48.286	48
427	48.287	48
428	48.288	48
429	48.289	48
430	48.290	48
431	48.291	48
432	48.292	48
433	48.293	48
434	48.294	48
435	48.295	48
436	48.296	48
437	48.297	48
438	48.298	48
439	48.299	48
440	48.300	48
441	48.301	48
442	48.302	48
443	48.303	48
\.


--
-- Data for Name: levels_standards_clusters_domains_grades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
\.


--
-- Name: levels_standards_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_standards_id_seq', 443, true);


--
-- Data for Name: levels_transactions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levels_transactions (id, advancement_time, level_id, user_id) FROM stdin;
\.


--
-- Name: levels_transactions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('levels_transactions_id_seq', 1, false);


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
\.


--
-- Name: passwords_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('passwords_id_seq', 1, false);


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
-- Data for Name: questions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY questions (id, question, answer, level_id, question_order) FROM stdin;
\.


--
-- Name: questions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('questions_id_seq', 1, false);


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
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 1, false);


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
47	2.OA.A.1	Use addition and subtraction within 100 to solve one- and two-step word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.
48	2.OA.B.2	Fluently add and subtract within 20 using mental strategies.2 By end of Grade 2, know from memory all sums of two one-digit numbers.
49	2.OA.C.3	Determine whether a group of objects (up to 20) has an odd or even number of members, e.g., by pairing objects or counting them by 2s; write an equation to express an even number as a sum of two equal addends.
50	2.OA.C.4	Use addition to find the total number of objects arranged in rectangular arrays with up to 5 rows and up to 5 columns; write an equation to express the total as a sum of equal addends.
51	2.NBT.A.1	Understand that the three digits of a three-digit number represent amounts of hundreds, tens, and ones; e.g., 706 equals 7 hundreds, 0 tens, and 6 ones. Understand the following as special cases:
52	2.NBT.A.1a	100 can be thought of as a bundle of ten tens — called a “hundred.”
53	2.NBT.A.1b	The numbers 100, 200, 300, 400, 500, 600, 700, 800, 900 refer to one, two, three, four, five, six, seven, eight, or nine hundreds (and 0 tens and 0 ones).
54	2.NBT.A.2	Count within 1000; skip-count by 5s, 10s, and 100s.
55	2.NBT.A.3	Read and write numbers to 1000 using base-ten numerals, number names, and expanded form.
56	2.NBT.A.4	Compare two three-digit numbers based on meanings of the hundreds, tens, and ones digits, using >, =, and < symbols to record the results of comparisons.
57	2.NBT.B.5	Fluently add and subtract within 100 using strategies based on place value, properties of operations, and/or the relationship between addition and subtraction.\n
58	2.NBT.B.6	Add up to four two-digit numbers using strategies based on place value and properties of operations.
59	2.NBT.B.7	Add and subtract within 1000, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method. Understand that in adding or subtracting three-digit numbers, one adds or subtracts hundreds and hundreds, tens and tens, ones and ones; and sometimes it is necessary to compose or decompose tens or hundreds.
60	2.NBT.B.8	Mentally add 10 or 100 to a given number 100–900, and mentally subtract 10 or 100 from a given number 100–900.
61	2.NBT.B.9	Explain why addition and subtraction strategies work, using place value and the properties of operations.
62	2.MD.A.1	Measure the length of an object by selecting and using appropriate tools such as rulers, yardsticks, meter sticks, and measuring tapes.
63	2.MD.A.2	 Measure the length of an object twice, using length units of different lengths for the two measurements; describe how the two measurements relate to the size of the unit chosen.
64	2.MD.A.3	Estimate lengths using units of inches, feet, centimeters, and meters.
65	2.MD.A.4	Measure to determine how much longer one object is than another, expressing the length difference in terms of a standard length unit.
66	2.MD.B.5	Use addition and subtraction within 100 to solve word problems involving lengths that are given in the same units, e.g., by using drawings (such as drawings of rulers) and equations with a symbol for the unknown number to represent the problem.
67	2.MD.B.6	Represent whole numbers as lengths from 0 on a number line diagram with equally spaced points corresponding to the numbers 0, 1, 2, ..., and represent whole-number sums and differences within 100 on a number line diagram.
68	2.MD.C.7	Tell and write time from analog and digital clocks to the nearest five minutes, using a.m. and p.m.
69	2.MD.C.8	Solve word problems involving dollar bills, quarters, dimes, nickels, and pennies, using $ and ¢ symbols appropriately. Example: If you have 2 dimes and 3 pennies, how many cents do you have?
70	2.MD.C.9	Generate measurement data by measuring lengths of several objects to the nearest whole unit, or by making repeated measurements of the same object. Show the measurements by making a line plot, where the horizontal scale is marked off in whole-number units.
71	2.MD.C.10	Draw a picture graph and a bar graph (with single-unit scale) to represent a data set with up to four categories. Solve simple put-together, take-apart, and compare problems1 using information presented in a bar graph.
72	2.MD.G.A.1	Recognize and draw shapes having specified attributes, such as a given number of angles or a given number of equal faces.1 Identify triangles, quadrilaterals, pentagons, hexagons, and cubes.
73	2.G.A.2	Partition a rectangle into rows and columns of same-size squares and count to find the total number of them.
74	2.G.A.3	Partition circles and rectangles into two, three, or four equal shares, describe the shares using the words halves, thirds, half of, a third of, etc., and describe the whole as two halves, three thirds, four fourths. Recognize that equal shares of identical wholes need not have the same shape.
75	3.OA.A.1	Interpret products of whole numbers, e.g., interpret 5 × 7 as the total number of objects in 5 groups of 7 objects each. For example, describe a context in which a total number of objects can be expressed as 5 × 7.
76	3.OA.A.2	Interpret whole-number quotients of whole numbers, e.g., interpret 56 ÷ 8 as the number of objects in each share when 56 objects are partitioned equally into 8 shares, or as a number of shares when 56 objects are partitioned into equal shares of 8 objects each. For example, describe a context in which a number of  shares or a number of groups can be expressed as 56 ÷ 8.
77	3.OA.A.3	Use multiplication and division within 100 to solve word problems in situations involving equal groups, arrays, and measurement quantities, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.
78	3.OA.A.4	Determine the unknown whole number in a multiplication or division equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 × ? = 48, 5 = _ ÷ 3, 6 × 6 = ?
79	3.OA.B.5	Apply properties of operations as strategies to multiply and divide.2 Examples: If 6 × 4 = 24 is known, then 4 × 6 = 24 is also known. (Commutative property of multiplication.) 3 × 5 × 2 can be found by 3 × 5 = 15, then 15 × 2 = 30, or by 5 × 2 = 10, then 3 × 10 = 30. (Associative property of multiplication.) Knowing that 8 × 5 = 40 and 8 × 2 = 16, one can find 8 × 7 as 8 × (5 + 2) = (8 × 5) + (8 × 2) = 40 + 16 = 56. (Distributive property.)
80	3.OA.B.6	Understand division as an unknown-factor problem. For example, find 32 ÷ 8 by finding the number that makes 32 when multiplied by 8.
81	3.OA.C.7	Fluently multiply and divide within 100, using strategies such as the relationship between multiplication and division (e.g., knowing that 8 × 5 = 40, one knows 40 ÷ 5 = 8) or properties of operations. By the end of Grade 3, know from memory all products of two one-digit numbers.
82	3.OA.D.8	Solve two-step word problems using the four operations. Represent these problems using equations with a letter standing for the unknown quantity. Assess the reasonableness of answers using mental computation and estimation strategies including rounding.
83	3.OA.D.9	Identify arithmetic patterns (including patterns in the addition table or multiplication table), and explain them using properties of operations. For example, observe that 4 times a number is always even, and explain why 4 times a number can be decomposed into two equal addends.
84	3.NBT.A.1	Use place value understanding to round whole numbers to the nearest 10 or 100.
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

SELECT pg_catalog.setval('standards_id_seq', 84, true);


--
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY students (id, teacher_id) FROM stdin;
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
-- Name: addition_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY addition
    ADD CONSTRAINT addition_pkey PRIMARY KEY (id);


--
-- Name: clusters_cluster_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clusters
    ADD CONSTRAINT clusters_cluster_key UNIQUE (cluster);


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
-- Name: counting_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY counting
    ADD CONSTRAINT counting_pkey PRIMARY KEY (id);


--
-- Name: division_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY division
    ADD CONSTRAINT division_pkey PRIMARY KEY (id);


--
-- Name: domains_domain_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY domains
    ADD CONSTRAINT domains_domain_key UNIQUE (domain);


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
-- Name: games_levels_dungeon_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY games_levels_dungeon
    ADD CONSTRAINT games_levels_dungeon_pkey PRIMARY KEY (id);


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
-- Name: grades_grade_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY grades
    ADD CONSTRAINT grades_grade_key UNIQUE (grade);


--
-- Name: grades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY grades
    ADD CONSTRAINT grades_pkey PRIMARY KEY (id);


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
-- Name: levels_transactions_advancement_time_level_id_user_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_advancement_time_level_id_user_id_key UNIQUE (advancement_time, level_id, user_id);


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
-- Name: questions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY questions
    ADD CONSTRAINT questions_pkey PRIMARY KEY (id);


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
-- Name: standards_standard_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY standards
    ADD CONSTRAINT standards_standard_key UNIQUE (standard);


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
-- Name: subjects_subject_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY subjects
    ADD CONSTRAINT subjects_subject_key UNIQUE (subject);


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
-- Name: levels_transactions_level_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);


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

