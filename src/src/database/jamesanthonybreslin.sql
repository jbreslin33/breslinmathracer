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
    levels integer NOT NULL,
    standard text
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
    level integer DEFAULT 1 NOT NULL,
    failed_attempts integer DEFAULT 0 NOT NULL
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
1	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-08 08:51:50.606579	root
2	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-08 08:52:07.093296	root
3	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-08 08:52:12.629994	root
4	ERROR:  relation "games_attempts" does not exist\nLINE 1: select * from games_attempts where user_id = 309 AND game_at...\n                      ^	2014-01-08 08:52:13.878235	root
5	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:32:38.842704	v1749
6	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:32:44.859084	v1749
7	ERROR:  relation "levels_transactions" does not exist\nLINE 1: select * from levels_transactions where user_id = 309 ORDER ...\n                      ^	2014-01-14 12:32:46.091356	v1749
8	ERROR:  relation "games_attempts" does not exist\nLINE 1: select * from games_attempts where user_id = 309 AND game_at...\n                      ^	2014-01-14 12:32:47.633707	v1749
9	ERROR:  relation "games_attempts" does not exist\nLINE 1: select * from games_attempts where user_id = 309 AND game_at...\n                      ^	2014-01-14 12:44:41.067215	v1808
10	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:44:46.005341	v1808
11	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:49:27.674585	v1808
12	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:51:25.558723	v1808
13	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 12:52:40.096734	v1808
14	ERROR:  relation "games_attempts" does not exist\nLINE 1: ...sers.first_name, users.last_name from users  join games_atte...\n                                                             ^	2014-01-14 15:59:34.297507	v1718
15	ERROR:  relation "levels_transactions" does not exist\nLINE 1: select * from levels_transactions where user_id = 309 ORDER ...\n                      ^	2014-01-14 15:59:36.667455	v1718
16	ERROR:  syntax error at or near ";"\nLINE 1: select username from users where school_id = ;\n                                                     ^	2014-01-16 14:37:11.10816	
17	ERROR:  relation "games_attempts" does not exist\nLINE 1: select * from games_attempts where user_id = 65 AND game_att...\n                      ^	2014-01-17 11:12:28.317545	v1739
18	ERROR:  relation "games_attempts" does not exist\nLINE 1: select * from games_attempts where user_id = 65 AND game_att...\n                      ^	2014-01-17 11:12:40.115972	v1739
19	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-01-19 17:35:02.28915	
20	ERROR:  syntax error at or near ";"\nLINE 1: ...in users on students.id = users.id where users.school_id = ;\n                                                                      ^	2014-01-29 13:39:24.368036	
21	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-05 13:01:31.482294	
22	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-18 12:52:01.025211	
23	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-25 19:20:55.315997	
24	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-25 19:21:10.156959	
25	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-25 19:29:58.88248	
26	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-26 09:53:31.898515	
27	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-26 09:53:37.645504	
28	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-26 09:53:41.244712	
29	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-02-26 09:53:43.940845	
\.


--
-- Name: error_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('error_log_id_seq', 29, true);


--
-- Data for Name: learning_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY learning_standards (id, ref_id, progression, levels, standard) FROM stdin;
k.cc.a.1	CA9EE2E34F384E95A5FA26769C5864B8	1.000	11	Count to 100 by ones and by tens.
k.cc.a.2	5E6A3E3B939B4577B104FA8658206E9E	2.000	6	Count forward beginning from a given number within the known sequence (instead of having to begin at 1).
k.cc.a.3	C11F30815A9C49B9A83B61A285EA11F9	3.000	10	Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).
k.cc.b.4a	7B20214AA4AA445AA720062C6F1B5C58	4.000	10	When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.
k.cc.b.4b	3DEE205D86BC461FA4271EF4BD190A0C	5.000	10	Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.
k.cc.b.5	6F4455B55B4240F3B4738DD9DB3EAF40	6.000	10	Count to answer “how many?” questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1–20, count out that many objects.
k.cc.c.6	66626D8AEE4E474B8CFEC8A4B68AA51C	7.000	10	Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies.
k.cc.c.7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	8.000	10	Compare two numbers between 1 and 10 presented as written numerals.
k.oa.a.1	C815B29CD8F546BBBB4C647B9D163942	9.000	21	Represent addition and subtraction with objects, fingers, mental images, drawings1, sounds (e.g., claps), acting out situations, verbal explanations, expressions, or equations
k.oa.a.2	695A7607FE8A4E27AB80652C45C84FA8	10.000	10	Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.
k.oa.a.3	9EC218587C01452C9EB49F52EB2DD1DD	11.000	10	Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1).
k.oa.a.4	0CFFCBC851984A4281C23D34FC400445	12.000	18	For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.
k.oa.a.5	1353E9D5614D460FA32E67853B6BA6D8	13.000	42	Fluently add and subtract within 5.
k.nbt.a.1	ED150B29EFD14FF8B655FA3F2CA4FE6D	14.000	19	Compose and decompose numbers from 11 to 19 into ten ones and some further ones, e.g., by using objects or drawings, and record each composition or decomposition by a drawing or equation (such as 18 = 10 + 8); understand that these numbers are composed of ten ones and one, two, three, four, five, six, seven, eight, or nine ones.
k.md.a.1	017AAEA9D22543A59A60C697FEBADD1B	15.000	10	Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.
k.md.a.2	4D3953649C704D4CAFC97E99C7A83EE9	16.000	10	Directly compare two objects with a measurable attribute in common, to see which object has “more of”/“less of” the attribute, and describe the difference. For example, directly compare the heights of two children and describe one child as taller/shorter.
k.md.b.3	C655A9B714CB481EB9D88759DD9BD0D1	17.000	10	Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.
k.g.a.1	D55BE0EDAFBC47B0BBDB1B88F9DF8781	18.000	10	Describe objects in the environment using names of shapes, and describe the relative positions of these objects using terms such as above, below, beside, in front of, behind, and next to.
k.g.a.2	4F0A52E0906841DFA13739BFC87B330B	19.000	10	Correctly name shapes regardless of their orientations or overall size.
k.g.a.3	01938BB1EE4E47319738DAC239A2B141	20.000	10	Identify shapes as two-dimensional (lying in a plane, “flat”) or three-dimensional (“solid”).
k.g.b.4	C712BAA86FEF4BFAB703AD2EB402B2DE	21.000	10	Analyze and compare two- and three-dimensional shapes, in different sizes and orientations, using informal language to describe their similarities, differences, parts (e.g., number of sides and vertices/“corners”) and other attributes (e.g., having sides of equal length).
1.oa.a.1	C712BAA86FEF4BFAB703AD2EB402B2DD	101.000	10	Use addition and subtraction within 20 to solve word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.
1.oa.a.2	AF4F218991664833853239C29DCE8521	102.000	10	Solve word problems that call for addition of three whole numbers whose sum is less than or equal to 20, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.
1.oa.b.3	FC21412A7C92444EA50B30A09729330F	103.000	19	Apply properties of operations as strategies to add and subtract.2 Examples: If 8 + 3 = 11 is known, then 3 + 8 = 11 is also known. (Commutative property of addition.) To add 2 + 6 + 4, the second two numbers can be added to make a ten, so 2 + 6 + 4 = 2 + 10 = 12. (Associative property of addition.)
1.oa.b.4	6929CC4620B54F1692E2C20D8FAA12F8	104.000	10	Understand subtraction as an unknown-addend problem. For example, subtract 10 – 8 by finding the number that makes 10 when added to 8.
1.oa.c.5	2688E9D1A3FA4B689A3D9E41A1071C0E	105.000	30	Relate counting to addition and subtraction (e.g., by counting on 2 to add 2).
1.oa.c.6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	106.000	79	Add and subtract within 20, demonstrating fluency for addition and subtraction within 10. Use strategies such as counting on; making ten (e.g., 8 + 6 = 8 + 2 + 4 = 10 + 4 = 14); decomposing a number leading to a ten (e.g., 13 – 4 = 13 – 3 – 1 = 10 – 1 = 9); using the relationship between addition and subtraction (e.g., knowing that 8 + 4 = 12, one knows 12 – 8 = 4); and creating equivalent but easier or known sums (e.g., adding 6 + 7 by creating the known equivalent 6 + 6 + 1 = 12 + 1 = 13).
1.oa.d.7	2A26EE660F72412EA29765D79C367F0B	107.000	10	Understand the meaning of the equal sign, and determine if equations involving addition and subtraction are true or false. For example, which of the following equations are true and which are false? 6 = 6, 7 = 8 – 1, 5 + 2 = 2 + 5, 4 + 1 = 5 + 2.
1.oa.d.8	626EB1B1473A47E28445F7E8DBDDC269	108.000	10	Determine the unknown whole number in an addition or subtraction equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 + ? = 11, 5 = _ – 3, 6 + 6 = _.
1.nbt.a.1	19A6BEFD554245118E73E9D4E6048E30	109.000	6	Count to 120, starting at any number less than 120. In this range, read and write numerals and represent a number of objects with a written numeral.
1.nbt.b.2	0B8F8764427D4A1D9FE9EBA6D2EC0C95	110.000	10	Understand that the two digits of a two-digit number represent amounts of tens and ones. Understand the following as special cases
1.nbt.b.3	C20A87396FC74159818466765D45D084	111.000	10	Compare two two-digit numbers based on meanings of the tens and ones digits, recording the results of comparisons with the symbols >, =, and <.
1.nbt.c.4	41064C0B98A4460181333BF337E74EF3	112.000	10	Add within 100, including adding a two-digit number and a one-digit number, and adding a two-digit number and a multiple of 10, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used. Understand that in adding two-digit numbers, one adds tens and tens, ones and ones; and sometimes it is necessary to compose a ten.
1.nbt.c.5	B26DE2515D35459792503137FBF1BAC5	113.000	10	Given a two-digit number, mentally find 10 more or 10 less than the number, without having to count; explain the reasoning used.
1.nbt.c.6	884F1851E494434DB4B70D01A077363D	114.000	10	Subtract multiples of 10 in the range 10-90 from multiples of 10 in the range 10-90 (positive or zero differences), using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used.
1.md.b.3	87CBA4CAA0F6481DA4CE599F6B368E13	115.000	10	Tell and write time in hours and half-hours using analog and digital clocks.
2.oa.a.1	800715566B824BB3A5A8C464E961C2B3	201.000	10	Use addition and subtraction within 100 to solve one- and two-step word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.
2.oa.b.2	800715566B824BB3A5A8C464E961C2B4	202.000	364	Fluently add and subtract within 20 using mental strategies.2 By end of Grade 2, know from memory all sums of two one-digit numbers.
2.oa.c.3a	C7ECD7455B7D46E89CF07EB8C0A2337Aa	203.000	10	Determine whether a group of objects (up to 20) has an odd or even number of members, e.g., by pairing objects or counting them by 2s; write an equation to express an even number as a sum of two equal addends.
2.oa.c.3b	C7ECD7455B7D46E89CF07EB8C0A2337Ab	204.000	10	Write an equation to express an even number as a sum of two equal addends.
2.oa.c.4	A4531EC480FA4835AF9E3F9348FC5EC1	205.000	10	Use addition to find the total number of objects arranged in rectangular arrays with up to 5 rows and up to 5 columns; write an equation to express the total as a sum of equal addends.
2.nbt.a.1	3B25AF48C22D4668A6085998F847B56E	206.000	10	Understand that the three digits of a three-digit number represent amounts of hundreds, tens, and ones; e.g., 706 equals 7 hundreds, 0 tens, and 6 ones.
2.nbt.a.2	EE88A59EFD4348C28C56A49E61A673A8	207.000	10	Count within 1000; skip-count by 5s, 10s, and 100s.
3.oa.c.7	3D384CB2349B41299A3B5A133AB9E3F8	301.000	218	Fluently multiply and divide within 100, using strategies such as the relationship between multiplication and division (e.g., knowing that 8 × 5 = 40, one knows 40 ÷ 5 = 8) or properties of operations. By the end of Grade 3, know from memory all products of two one-digit numbers.
4.oa.a.1	7828B4F15ABD40E19EF14DDE0EB399DF	401.000	20	Interpret a multiplication equation as a comparison, e.g., interpret 35 = 5 × 7 as a statement that 35 is 5 times as many as 7 and 7 times as many as 5. Represent verbal statements of multiplicative comparisons as multiplication equations.
4.oa.a.2	062925BDC19347E8890A6D7390DF3842	402.000	20	Multiply or divide to solve word problems involving multiplicative comparison, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem, distinguishing multiplicative comparison from additive comparison.
\.


--
-- Name: level_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('level_attempts_id_seq', 4230, true);


--
-- Data for Name: levelattempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levelattempts (id, start_time, end_time, user_id, level, ref_id, score, time_warning, passed) FROM stdin;
2	2014-02-24 08:54:11.724714	\N	254	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3	2014-02-24 08:54:23.33797	\N	279	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
5	2014-02-24 08:54:44.341529	\N	279	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
1	2014-02-24 08:53:39.619064	2014-02-24 08:54:44.460769	273	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
6	2014-02-24 08:54:58.56271	\N	273	2	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
7	2014-02-24 08:55:36.608564	\N	254	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
4	2014-02-24 08:54:31.279685	2014-02-24 08:55:37.165531	251	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
8	2014-02-24 08:55:57.134214	\N	251	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
10	2014-02-24 08:56:28.523853	\N	273	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
9	2014-02-24 08:56:22.606962	2014-02-24 08:56:35.279301	261	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
11	2014-02-24 08:56:40.852074	\N	279	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
12	2014-02-24 08:56:46.652328	\N	273	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
13	2014-02-24 08:56:47.493268	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
14	2014-02-24 08:56:50.248861	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
15	2014-02-24 08:56:51.973393	\N	282	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
16	2014-02-24 08:56:54.471155	\N	270	6	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
17	2014-02-24 08:56:58.113304	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
18	2014-02-24 08:56:59.992674	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
20	2014-02-24 08:57:09.336487	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
19	2014-02-24 08:57:00.295776	2014-02-24 08:57:10.573742	273	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
21	2014-02-24 08:57:14.002195	\N	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
22	2014-02-24 08:57:16.612526	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
23	2014-02-24 08:57:19.682187	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
24	2014-02-24 08:57:24.714515	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
25	2014-02-24 08:57:30.550336	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
26	2014-02-24 08:57:41.423306	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
27	2014-02-24 08:57:50.06245	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
28	2014-02-24 08:57:52.101961	\N	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
29	2014-02-24 08:57:55.940089	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
30	2014-02-24 08:57:58.475838	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
31	2014-02-24 08:58:08.950605	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
32	2014-02-24 08:58:12.457064	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
33	2014-02-24 08:58:13.014242	\N	251	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
34	2014-02-24 08:58:14.683725	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
35	2014-02-24 08:58:20.923707	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
36	2014-02-24 08:58:23.425616	\N	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
37	2014-02-24 08:58:27.899367	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
38	2014-02-24 08:58:33.239395	\N	251	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
39	2014-02-24 08:58:44.777017	\N	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
40	2014-02-24 08:58:47.0814	\N	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
41	2014-02-24 08:58:48.174008	\N	251	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
42	2014-02-24 08:58:56.935373	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
43	2014-02-24 08:58:57.964355	\N	266	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
44	2014-02-24 08:59:04.946684	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
45	2014-02-24 08:59:05.473123	\N	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
46	2014-02-24 08:59:05.997882	\N	284	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
47	2014-02-24 08:59:07.543352	\N	251	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
48	2014-02-24 08:59:08.990675	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
49	2014-02-24 08:59:10.634567	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
50	2014-02-24 08:59:11.621361	\N	266	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
51	2014-02-24 08:59:17.235429	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
52	2014-02-24 08:59:20.196771	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
53	2014-02-24 08:59:21.875073	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
55	2014-02-24 08:59:24.697846	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
56	2014-02-24 08:59:25.609817	\N	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
58	2014-02-24 08:59:28.182558	\N	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
54	2014-02-24 08:59:22.709739	2014-02-24 08:59:33.980123	251	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
60	2014-02-24 08:59:34.788045	\N	239	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
62	2014-02-24 08:59:35.822825	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
63	2014-02-24 08:59:41.289728	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
61	2014-02-24 08:59:35.236249	2014-02-24 08:59:42.650818	258	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
57	2014-02-24 08:59:26.427557	2014-02-24 08:59:43.540346	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
64	2014-02-24 08:59:48.275718	\N	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
59	2014-02-24 08:59:33.979096	2014-02-24 08:59:48.998801	266	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
65	2014-02-24 08:59:51.856268	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
66	2014-02-24 08:59:51.859796	\N	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
68	2014-02-24 08:59:56.253496	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
69	2014-02-24 08:59:57.064245	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
70	2014-02-24 08:59:58.878799	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
71	2014-02-24 09:00:00.44485	\N	284	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
72	2014-02-24 09:00:01.159673	\N	266	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
73	2014-02-24 09:00:04.951716	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
74	2014-02-24 09:00:06.146593	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
75	2014-02-24 09:00:08.393222	\N	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
76	2014-02-24 09:00:08.574293	\N	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
77	2014-02-24 09:00:10.511312	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
78	2014-02-24 09:00:11.620761	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
80	2014-02-24 09:00:15.40262	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
81	2014-02-24 09:00:20.488133	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
67	2014-02-24 08:59:52.643363	2014-02-24 09:00:20.835917	239	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
83	2014-02-24 09:00:24.470126	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
84	2014-02-24 09:00:24.868702	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
79	2014-02-24 09:00:13.492289	2014-02-24 09:00:41.434343	266	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
85	2014-02-24 09:00:25.085675	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
86	2014-02-24 09:00:25.519185	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
82	2014-02-24 09:00:20.939917	2014-02-24 09:00:33.553517	265	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
88	2014-02-24 09:00:35.158305	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
90	2014-02-24 09:00:37.60662	\N	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
91	2014-02-24 09:00:37.912104	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
92	2014-02-24 09:00:38.582821	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
89	2014-02-24 09:00:37.029039	2014-02-24 09:00:41.696132	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
93	2014-02-24 09:00:46.924016	\N	265	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
94	2014-02-24 09:00:47.716713	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
95	2014-02-24 09:00:48.869281	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
96	2014-02-24 09:00:50.330536	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
98	2014-02-24 09:00:51.498644	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
99	2014-02-24 09:00:51.735355	\N	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
87	2014-02-24 09:00:34.018306	2014-02-24 09:00:54.295757	254	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
100	2014-02-24 09:00:54.689775	\N	266	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
101	2014-02-24 09:00:57.860657	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
102	2014-02-24 09:00:59.953459	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
103	2014-02-24 09:01:00.153647	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
104	2014-02-24 09:01:01.900205	\N	265	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
107	2014-02-24 09:01:07.196895	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
108	2014-02-24 09:01:07.200807	\N	266	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
105	2014-02-24 09:01:02.989024	2014-02-24 09:01:07.232283	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
109	2014-02-24 09:01:07.345845	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
110	2014-02-24 09:01:08.428776	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
111	2014-02-24 09:01:13.456196	\N	254	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
112	2014-02-24 09:01:13.787168	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
113	2014-02-24 09:01:15.082946	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
106	2014-02-24 09:01:05.910587	2014-02-24 09:01:15.428073	270	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
114	2014-02-24 09:01:16.041479	\N	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
115	2014-02-24 09:01:16.089975	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
116	2014-02-24 09:01:19.280743	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
117	2014-02-24 09:01:19.659405	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
118	2014-02-24 09:01:20.397477	\N	266	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
119	2014-02-24 09:01:20.759645	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
97	2014-02-24 09:00:51.279172	2014-02-24 09:01:21.550899	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
121	2014-02-24 09:01:22.878623	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
122	2014-02-24 09:01:27.199019	\N	270	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
123	2014-02-24 09:01:29.337257	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
124	2014-02-24 09:01:31.03988	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
125	2014-02-24 09:01:31.150686	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
126	2014-02-24 09:01:32.057576	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
128	2014-02-24 09:01:32.400475	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
130	2014-02-24 09:01:34.967892	\N	254	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
132	2014-02-24 09:01:38.376661	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
133	2014-02-24 09:01:40.401786	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
135	2014-02-24 09:01:42.306483	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
136	2014-02-24 09:01:47.541458	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
120	2014-02-24 09:01:21.739908	2014-02-24 09:01:48.822768	265	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
134	2014-02-24 09:01:42.129269	2014-02-24 09:01:49.620068	270	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
137	2014-02-24 09:01:49.64044	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
127	2014-02-24 09:01:32.289656	2014-02-24 09:01:51.647647	251	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
139	2014-02-24 09:01:54.36462	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
140	2014-02-24 09:01:54.377727	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
141	2014-02-24 09:01:55.77154	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
142	2014-02-24 09:02:01.379587	\N	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
129	2014-02-24 09:01:34.224262	2014-02-24 09:02:02.213532	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
143	2014-02-24 09:02:02.608163	\N	265	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
144	2014-02-24 09:02:03.303418	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
145	2014-02-24 09:02:04.304648	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
146	2014-02-24 09:02:04.494186	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
147	2014-02-24 09:02:05.931428	\N	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
148	2014-02-24 09:02:06.174389	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
131	2014-02-24 09:01:35.763553	2014-02-24 09:02:09.09857	266	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
138	2014-02-24 09:01:51.44836	2014-02-24 09:02:14.915008	254	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
149	2014-02-24 09:02:15.171725	\N	279	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
150	2014-02-24 09:02:16.440255	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
152	2014-02-24 09:02:17.613488	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
153	2014-02-24 09:02:17.668576	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
154	2014-02-24 09:02:20.78815	\N	265	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
155	2014-02-24 09:02:21.147385	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
156	2014-02-24 09:02:22.418636	\N	266	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
157	2014-02-24 09:02:23.084513	\N	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
158	2014-02-24 09:02:23.693466	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
151	2014-02-24 09:02:17.602477	2014-02-24 09:02:24.326761	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
159	2014-02-24 09:02:25.016742	\N	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
161	2014-02-24 09:02:27.71639	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
163	2014-02-24 09:02:30.389839	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
164	2014-02-24 09:02:31.012409	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
166	2014-02-24 09:02:36.348639	\N	266	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
162	2014-02-24 09:02:28.642503	2014-02-24 09:02:36.365653	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
160	2014-02-24 09:02:25.849412	2014-02-24 09:03:43.266577	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
168	2014-02-24 09:02:37.242133	\N	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
170	2014-02-24 09:02:41.922525	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
167	2014-02-24 09:02:36.711432	2014-02-24 09:02:43.987093	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
171	2014-02-24 09:02:44.78195	\N	265	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
172	2014-02-24 09:02:45.649506	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
173	2014-02-24 09:02:49.106875	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
174	2014-02-24 09:02:53.179289	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
175	2014-02-24 09:02:53.733576	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
177	2014-02-24 09:02:55.054901	\N	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
178	2014-02-24 09:02:55.510838	\N	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
165	2014-02-24 09:02:31.629948	2014-02-24 09:02:57.15436	254	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
179	2014-02-24 09:02:58.865626	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
180	2014-02-24 09:03:01.101523	\N	270	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
169	2014-02-24 09:02:41.399082	2014-02-24 09:03:01.103843	237	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
181	2014-02-24 09:03:03.150222	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
182	2014-02-24 09:03:05.086254	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
183	2014-02-24 09:03:05.851845	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
184	2014-02-24 09:03:11.514285	\N	266	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
185	2014-02-24 09:03:12.523801	\N	265	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
186	2014-02-24 09:03:15.303339	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
188	2014-02-24 09:03:16.240266	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
189	2014-02-24 09:03:16.428264	\N	270	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
190	2014-02-24 09:03:18.645569	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
191	2014-02-24 09:03:20.03248	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
192	2014-02-24 09:03:21.24944	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
176	2014-02-24 09:02:54.201303	2014-02-24 09:03:22.315317	279	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
194	2014-02-24 09:03:24.743054	\N	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
195	2014-02-24 09:03:24.925261	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
196	2014-02-24 09:03:29.361302	\N	266	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
187	2014-02-24 09:03:15.597304	2014-02-24 09:03:30.309675	289	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
197	2014-02-24 09:03:31.34176	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
198	2014-02-24 09:03:35.282588	\N	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
200	2014-02-24 09:03:35.679773	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
202	2014-02-24 09:03:44.152637	\N	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
203	2014-02-24 09:03:44.368678	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
204	2014-02-24 09:03:44.848644	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
205	2014-02-24 09:03:45.175787	\N	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
206	2014-02-24 09:03:47.794935	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
193	2014-02-24 09:03:22.307883	2014-02-24 09:03:47.922378	254	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
207	2014-02-24 09:03:52.690191	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
208	2014-02-24 09:03:57.672169	\N	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
209	2014-02-24 09:03:58.97825	\N	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
212	2014-02-24 09:04:00.509348	\N	254	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
213	2014-02-24 09:04:01.763726	\N	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
214	2014-02-24 09:04:02.144763	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
215	2014-02-24 09:04:02.700943	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
216	2014-02-24 09:04:05.985763	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
201	2014-02-24 09:03:42.516965	2014-02-24 09:04:06.29462	251	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
217	2014-02-24 09:04:11.65919	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
199	2014-02-24 09:03:35.613042	2014-02-24 09:04:12.423075	265	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
218	2014-02-24 09:04:15.564368	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
219	2014-02-24 09:04:16.288694	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
220	2014-02-24 09:04:17.117616	\N	254	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
221	2014-02-24 09:04:18.740818	\N	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
222	2014-02-24 09:04:21.952751	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
211	2014-02-24 09:03:59.574401	2014-02-24 09:04:26.615521	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
223	2014-02-24 09:04:27.819368	\N	265	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
210	2014-02-24 09:03:59.086904	2014-02-24 09:04:28.535809	266	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
224	2014-02-24 09:04:29.833495	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
225	2014-02-24 09:04:30.270489	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
226	2014-02-24 09:04:31.402874	\N	251	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
227	2014-02-24 09:04:34.158382	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
229	2014-02-24 09:04:40.58781	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
230	2014-02-24 09:04:41.920105	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
232	2014-02-24 09:04:43.497791	\N	254	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
233	2014-02-24 09:04:43.674569	\N	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
234	2014-02-24 09:04:44.046901	\N	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
237	2014-02-24 09:05:00.42723	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
238	2014-02-24 09:05:02.878919	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
240	2014-02-24 09:05:04.301482	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
228	2014-02-24 09:04:38.992809	2014-02-24 09:05:05.366556	279	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
241	2014-02-24 09:05:06.345399	\N	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
242	2014-02-24 09:05:09.054363	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
239	2014-02-24 09:05:03.399425	2014-02-24 09:05:09.666755	262	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
243	2014-02-24 09:05:11.731164	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
245	2014-02-24 09:05:16.773821	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
236	2014-02-24 09:04:49.534856	2014-02-24 09:05:17.5742	251	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
246	2014-02-24 09:05:17.642515	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
248	2014-02-24 09:05:21.608626	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
231	2014-02-24 09:04:42.168046	2014-02-24 09:05:43.483686	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
247	2014-02-24 09:05:20.135181	2014-02-24 09:05:49.302183	254	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
249	2014-02-24 09:05:22.219403	2014-02-24 09:05:50.416621	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
250	2014-02-24 09:05:22.770293	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
244	2014-02-24 09:05:16.36226	2014-02-24 09:05:23.078598	263	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
251	2014-02-24 09:05:25.497841	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
253	2014-02-24 09:05:27.283933	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
254	2014-02-24 09:05:27.287819	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
235	2014-02-24 09:04:49.529573	2014-02-24 09:05:27.888045	265	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
255	2014-02-24 09:05:33.732468	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
256	2014-02-24 09:05:34.30477	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
257	2014-02-24 09:05:36.041775	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
258	2014-02-24 09:05:38.950777	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
259	2014-02-24 09:05:43.481511	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
260	2014-02-24 09:05:45.236602	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
261	2014-02-24 09:05:46.270593	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
262	2014-02-24 09:05:50.248866	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
263	2014-02-24 09:05:50.317972	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
252	2014-02-24 09:05:25.494917	2014-02-24 09:05:52.184006	289	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
265	2014-02-24 09:05:52.933096	\N	273	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
266	2014-02-24 09:05:53.902386	\N	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
267	2014-02-24 09:05:54.625753	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
268	2014-02-24 09:05:57.055151	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
269	2014-02-24 09:05:57.445213	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
270	2014-02-24 09:06:02.00905	\N	254	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
271	2014-02-24 09:06:04.64316	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
272	2014-02-24 09:06:05.521094	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
273	2014-02-24 09:06:07.727498	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
274	2014-02-24 09:06:07.954473	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
275	2014-02-24 09:06:09.378639	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
276	2014-02-24 09:06:10.808665	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
264	2014-02-24 09:05:52.161791	2014-02-24 09:06:13.124475	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
277	2014-02-24 09:06:13.927908	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
278	2014-02-24 09:06:18.403347	\N	261	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
279	2014-02-24 09:06:20.801009	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
280	2014-02-24 09:06:20.967016	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
281	2014-02-24 09:06:21.463335	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
282	2014-02-24 09:06:22.815056	\N	254	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
283	2014-02-24 09:06:26.889636	\N	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
285	2014-02-24 09:06:29.107951	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
287	2014-02-24 09:06:36.185628	\N	273	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
288	2014-02-24 09:06:36.232476	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
289	2014-02-24 09:06:36.576686	\N	261	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
290	2014-02-24 09:06:37.639035	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
291	2014-02-24 09:06:39.237489	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
293	2014-02-24 09:06:46.000105	\N	270	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
294	2014-02-24 09:06:47.281832	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
295	2014-02-24 09:06:47.55332	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
297	2014-02-24 09:06:49.501618	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
298	2014-02-24 09:06:49.914686	\N	261	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
284	2014-02-24 09:06:28.050253	2014-02-24 09:06:51.511387	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
299	2014-02-24 09:06:52.052389	\N	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
300	2014-02-24 09:06:53.292095	\N	254	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
301	2014-02-24 09:06:53.582536	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
303	2014-02-24 09:06:55.674634	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
286	2014-02-24 09:06:30.289314	2014-02-24 09:06:57.048066	281	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
304	2014-02-24 09:06:57.09286	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
302	2014-02-24 09:06:53.809476	2014-02-24 09:07:00.190515	282	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
306	2014-02-24 09:07:00.755208	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
307	2014-02-24 09:07:03.904143	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
309	2014-02-24 09:07:04.957308	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
310	2014-02-24 09:07:07.214048	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
296	2014-02-24 09:06:49.107145	2014-02-24 09:07:08.068404	273	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
292	2014-02-24 09:06:40.403814	2014-02-24 09:07:10.473534	258	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
312	2014-02-24 09:07:10.526745	\N	281	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
315	2014-02-24 09:07:13.042917	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
308	2014-02-24 09:07:04.273464	2014-02-24 09:07:15.29887	261	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
316	2014-02-24 09:07:15.454361	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
317	2014-02-24 09:07:16.349336	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
318	2014-02-24 09:07:16.791565	\N	282	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
313	2014-02-24 09:07:12.107941	2014-02-24 09:07:19.720369	270	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
305	2014-02-24 09:06:59.17065	2014-02-24 09:07:26.298514	263	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
321	2014-02-24 09:07:26.433358	\N	281	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
322	2014-02-24 09:07:26.720553	\N	258	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
323	2014-02-24 09:07:27.613647	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
324	2014-02-24 09:07:28.340778	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
325	2014-02-24 09:07:29.850916	\N	282	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
326	2014-02-24 09:07:31.897455	\N	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
327	2014-02-24 09:07:33.998059	\N	270	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
311	2014-02-24 09:07:10.260591	2014-02-24 09:07:34.369154	254	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
328	2014-02-24 09:07:37.987227	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
314	2014-02-24 09:07:12.307916	2014-02-24 09:07:38.8472	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
329	2014-02-24 09:07:39.462338	\N	263	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
330	2014-02-24 09:07:42.062207	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
331	2014-02-24 09:07:42.956097	\N	282	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
333	2014-02-24 09:07:43.349335	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
319	2014-02-24 09:07:20.93335	2014-02-24 09:07:44.83145	273	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
334	2014-02-24 09:07:45.690222	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
337	2014-02-24 09:07:50.453206	\N	258	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
338	2014-02-24 09:07:53.586019	\N	251	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
339	2014-02-24 09:07:53.774268	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
320	2014-02-24 09:07:23.058198	2014-02-24 09:07:54.753928	266	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
336	2014-02-24 09:07:48.781904	2014-02-24 09:07:58.709472	270	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
342	2014-02-24 09:08:04.708956	\N	263	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
343	2014-02-24 09:08:05.422803	\N	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
344	2014-02-24 09:08:06.637573	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
345	2014-02-24 09:08:06.917707	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
346	2014-02-24 09:08:07.321797	\N	266	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
347	2014-02-24 09:08:07.961476	\N	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
332	2014-02-24 09:07:43.340134	2014-02-24 09:08:10.496097	281	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
349	2014-02-24 09:08:10.499926	\N	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
350	2014-02-24 09:08:12.329477	\N	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
351	2014-02-24 09:08:12.733559	\N	251	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
353	2014-02-24 09:08:14.898487	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
354	2014-02-24 09:08:16.802129	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
335	2014-02-24 09:07:47.757538	2014-02-24 09:08:17.035567	254	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
340	2014-02-24 09:07:57.1376	2014-02-24 09:08:20.827519	273	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
355	2014-02-24 09:08:22.886025	\N	266	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
356	2014-02-24 09:08:23.848328	\N	281	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
341	2014-02-24 09:08:03.266885	2014-02-24 09:08:28.670981	282	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
359	2014-02-24 09:08:28.675815	\N	251	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
360	2014-02-24 09:08:30.737533	\N	254	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
348	2014-02-24 09:08:08.513175	2014-02-24 09:08:32.152906	262	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
361	2014-02-24 09:08:35.002159	\N	263	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
358	2014-02-24 09:08:27.750237	2014-02-24 09:08:35.637622	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
363	2014-02-24 09:08:42.523772	\N	282	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
365	2014-02-24 09:08:45.169756	\N	262	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
352	2014-02-24 09:08:14.105276	2014-02-24 09:08:46.176972	258	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
366	2014-02-24 09:08:47.972719	\N	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
367	2014-02-24 09:08:49.714295	\N	281	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
368	2014-02-24 09:08:50.933117	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
369	2014-02-24 09:08:52.741583	\N	263	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
370	2014-02-24 09:08:54.022155	\N	266	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
371	2014-02-24 09:08:54.48454	\N	251	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
372	2014-02-24 09:08:55.426567	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
373	2014-02-24 09:08:56.748806	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
357	2014-02-24 09:08:24.873349	2014-02-24 09:09:00.320139	289	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
362	2014-02-24 09:08:36.578472	2014-02-24 09:09:01.654864	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
364	2014-02-24 09:08:43.254857	2014-02-24 09:09:02.397793	261	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
375	2014-02-24 09:09:02.74247	\N	262	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
376	2014-02-24 09:09:04.753777	\N	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
378	2014-02-24 09:09:07.213248	\N	281	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
379	2014-02-24 09:09:07.54551	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
381	2014-02-24 09:09:10.679027	\N	266	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
382	2014-02-24 09:09:12.642621	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
386	2014-02-24 09:09:15.971296	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
387	2014-02-24 09:09:17.201131	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
388	2014-02-24 09:09:18.520791	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
389	2014-02-24 09:09:21.73658	\N	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
390	2014-02-24 09:09:25.536038	\N	262	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
374	2014-02-24 09:08:59.657567	2014-02-24 09:09:29.120142	258	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
380	2014-02-24 09:09:07.597445	2014-02-24 09:09:29.584704	263	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
392	2014-02-24 09:09:30.893332	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
393	2014-02-24 09:09:32.238767	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
395	2014-02-24 09:09:33.190891	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
385	2014-02-24 09:09:14.979048	2014-02-24 09:09:33.941988	261	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
377	2014-02-24 09:09:05.443605	2014-02-24 09:09:36.032544	254	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
383	2014-02-24 09:09:13.351836	2014-02-24 09:09:41.164102	282	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
396	2014-02-24 09:09:41.236297	\N	258	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
397	2014-02-24 09:09:42.546271	\N	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
384	2014-02-24 09:09:13.546579	2014-02-24 09:09:45.709537	289	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
400	2014-02-24 09:09:46.565051	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
401	2014-02-24 09:09:46.858942	\N	261	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
403	2014-02-24 09:09:51.507366	\N	254	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
404	2014-02-24 09:09:54.155205	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
406	2014-02-24 09:09:57.055629	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
407	2014-02-24 09:10:00.200624	\N	258	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
391	2014-02-24 09:09:29.557575	2014-02-24 09:10:00.353288	265	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
408	2014-02-24 09:10:01.113468	\N	289	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
409	2014-02-24 09:10:01.150389	\N	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
394	2014-02-24 09:09:32.659571	2014-02-24 09:10:01.786179	266	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
410	2014-02-24 09:10:02.958524	\N	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
412	2014-02-24 09:10:07.912506	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
398	2014-02-24 09:09:42.808187	2014-02-24 09:10:12.443522	262	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
402	2014-02-24 09:09:49.952515	2014-02-24 09:10:17.959677	281	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
405	2014-02-24 09:09:55.31232	2014-02-24 09:10:24.670841	282	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
411	2014-02-24 09:10:05.516237	2014-02-24 09:10:25.30853	261	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
399	2014-02-24 09:09:43.754998	2014-02-24 09:10:09.117594	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
413	2014-02-24 09:10:13.061001	\N	289	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
414	2014-02-24 09:10:13.553504	\N	265	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
415	2014-02-24 09:10:14.036743	\N	266	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
418	2014-02-24 09:10:20.265357	\N	258	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
419	2014-02-24 09:10:23.451896	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
420	2014-02-24 09:10:27.297143	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
421	2014-02-24 09:10:28.721141	\N	289	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
422	2014-02-24 09:10:29.741003	\N	262	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
423	2014-02-24 09:10:30.206977	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
424	2014-02-24 09:10:31.816333	\N	281	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
426	2014-02-24 09:10:33.047513	\N	258	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
427	2014-02-24 09:10:36.4828	\N	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
428	2014-02-24 09:10:39.035423	\N	282	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
429	2014-02-24 09:10:44.21335	\N	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
431	2014-02-24 09:10:46.501784	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
432	2014-02-24 09:10:48.206622	\N	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
433	2014-02-24 09:10:48.961684	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
417	2014-02-24 09:10:19.701175	2014-02-24 09:10:48.969293	254	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
434	2014-02-24 09:10:51.908393	\N	262	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
435	2014-02-24 09:10:54.129784	\N	282	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
436	2014-02-24 09:10:54.141042	\N	266	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
437	2014-02-24 09:10:54.143899	\N	261	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
439	2014-02-24 09:11:00.276995	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
440	2014-02-24 09:11:01.483217	\N	281	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
441	2014-02-24 09:11:01.497371	\N	254	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
442	2014-02-24 09:11:04.45791	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
425	2014-02-24 09:10:31.88685	2014-02-24 09:11:06.118301	265	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
438	2014-02-24 09:10:57.791695	2014-02-24 09:11:06.120851	270	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
443	2014-02-24 09:11:09.592207	\N	261	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
430	2014-02-24 09:10:45.439908	2014-02-24 09:11:16.148213	258	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
446	2014-02-24 09:11:18.401857	\N	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
447	2014-02-24 09:11:19.106182	\N	265	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
449	2014-02-24 09:11:21.207331	\N	289	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
450	2014-02-24 09:11:21.84405	\N	261	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
451	2014-02-24 09:11:23.345855	\N	266	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
452	2014-02-24 09:11:25.486407	\N	281	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
453	2014-02-24 09:11:27.160381	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
454	2014-02-24 09:11:30.088478	\N	279	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
455	2014-02-24 09:11:31.392834	\N	258	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
458	2014-02-24 09:11:34.643051	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
457	2014-02-24 09:11:34.033454	2014-02-24 09:11:37.694722	272	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
461	2014-02-24 09:11:40.765744	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
444	2014-02-24 09:11:15.285387	2014-02-24 09:11:42.908781	254	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
485	2014-02-24 09:12:24.363125	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
459	2014-02-24 09:11:37.838238	2014-02-24 09:11:45.090959	270	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
445	2014-02-24 09:11:18.034195	2014-02-24 09:11:45.696726	262	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
448	2014-02-24 09:11:19.66227	2014-02-24 09:11:47.232206	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
466	2014-02-24 09:11:49.388089	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
467	2014-02-24 09:11:54.575508	\N	258	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
468	2014-02-24 09:11:56.525794	\N	254	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
470	2014-02-24 09:11:58.025707	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
464	2014-02-24 09:11:43.993854	2014-02-24 09:11:58.470446	253	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
471	2014-02-24 09:11:59.539136	\N	263	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
472	2014-02-24 09:11:59.680554	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
473	2014-02-24 09:12:03.825436	\N	262	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
469	2014-02-24 09:11:57.513467	2014-02-24 09:12:04.382369	270	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
456	2014-02-24 09:11:33.708536	2014-02-24 09:12:04.767014	282	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
463	2014-02-24 09:11:42.727136	2014-02-24 09:12:08.212463	273	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
474	2014-02-24 09:12:09.144731	\N	254	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
475	2014-02-24 09:12:09.441427	\N	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
462	2014-02-24 09:11:42.179435	2014-02-24 09:12:09.55239	281	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
460	2014-02-24 09:11:39.888381	2014-02-24 09:12:09.830933	266	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
476	2014-02-24 09:12:11.847619	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
484	2014-02-24 09:12:23.257162	2014-02-24 09:12:51.069909	262	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
479	2014-02-24 09:12:16.988452	\N	263	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
480	2014-02-24 09:12:20.757191	\N	273	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
481	2014-02-24 09:12:21.251729	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
482	2014-02-24 09:12:21.546768	\N	282	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
483	2014-02-24 09:12:22.378731	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
478	2014-02-24 09:12:16.277624	2014-02-24 09:12:22.743368	270	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
486	2014-02-24 09:12:24.578382	\N	266	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
465	2014-02-24 09:11:47.446395	2014-02-24 09:12:25.264058	265	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
477	2014-02-24 09:12:12.366755	2014-02-24 09:12:33.383266	253	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
487	2014-02-24 09:12:33.562236	\N	258	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
488	2014-02-24 09:12:33.629022	\N	261	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
489	2014-02-24 09:12:34.402976	\N	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
490	2014-02-24 09:12:36.54596	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
491	2014-02-24 09:12:38.23885	\N	265	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
492	2014-02-24 09:12:38.812777	\N	263	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
493	2014-02-24 09:12:38.821574	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
494	2014-02-24 09:12:40.28563	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
495	2014-02-24 09:12:41.611175	\N	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
496	2014-02-24 09:12:42.775548	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
497	2014-02-24 09:12:44.344165	\N	282	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
498	2014-02-24 09:12:45.556613	\N	266	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
499	2014-02-24 09:12:46.6802	\N	253	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
500	2014-02-24 09:12:51.954847	\N	254	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
501	2014-02-24 09:12:53.17392	\N	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
502	2014-02-24 09:12:53.659573	\N	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
504	2014-02-24 09:12:56.484609	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
505	2014-02-24 09:12:56.64237	\N	258	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
506	2014-02-24 09:12:58.243246	\N	265	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
507	2014-02-24 09:12:58.651386	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
508	2014-02-24 09:12:59.173022	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
509	2014-02-24 09:12:59.526746	\N	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
510	2014-02-24 09:13:04.466436	\N	262	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
512	2014-02-24 09:13:06.720735	\N	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
514	2014-02-24 09:13:09.904386	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
515	2014-02-24 09:13:10.876358	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
517	2014-02-24 09:13:14.411729	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
513	2014-02-24 09:13:09.778342	2014-02-24 09:13:16.656705	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
519	2014-02-24 09:13:20.884516	\N	262	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
503	2014-02-24 09:12:56.064804	2014-02-24 09:13:20.962357	261	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
560	2014-02-24 09:35:46.673314	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
520	2014-02-24 09:13:24.031951	\N	282	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
521	2014-02-24 09:13:24.622352	\N	265	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
522	2014-02-24 09:13:25.494266	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
524	2014-02-24 09:13:28.333451	\N	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
511	2014-02-24 09:13:04.506873	2014-02-24 09:13:28.413908	254	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
525	2014-02-24 09:13:28.608746	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
526	2014-02-24 09:13:30.828047	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
518	2014-02-24 09:13:14.593849	2014-02-24 09:13:32.371672	283	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
527	2014-02-24 09:13:33.909928	\N	266	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
516	2014-02-24 09:13:11.743721	2014-02-24 09:13:37.523798	253	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
528	2014-02-24 09:13:38.02357	\N	279	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
529	2014-02-24 09:13:40.367298	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
530	2014-02-24 09:13:41.570553	\N	254	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
532	2014-02-24 09:13:42.898325	\N	265	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
533	2014-02-24 09:13:43.803114	\N	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
534	2014-02-24 09:13:45.183295	\N	262	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
535	2014-02-24 09:13:46.058058	\N	258	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
536	2014-02-24 09:13:49.870438	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
537	2014-02-24 09:13:50.805672	\N	253	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
523	2014-02-24 09:13:25.693563	2014-02-24 09:13:51.014774	273	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
416	2014-02-24 09:10:18.637235	2014-02-24 09:13:52.462629	237	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
538	2014-02-24 09:13:53.857376	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
539	2014-02-24 09:13:56.622832	\N	283	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
540	2014-02-24 09:13:59.59803	\N	282	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
531	2014-02-24 09:13:42.76162	2014-02-24 09:13:59.609488	284	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
542	2014-02-24 09:14:07.37283	\N	272	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
543	2014-02-24 09:14:24.477411	\N	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
541	2014-02-24 09:14:01.425813	2014-02-24 09:14:32.325506	265	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
544	2014-02-24 09:14:38.168945	\N	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
545	2014-02-24 09:14:50.669478	\N	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
546	2014-02-24 09:32:22.946854	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
547	2014-02-24 09:32:39.719216	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
548	2014-02-24 09:32:55.81305	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
549	2014-02-24 09:33:11.845641	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
550	2014-02-24 09:34:52.48612	\N	339	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
552	2014-02-24 09:35:07.987433	\N	294	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
551	2014-02-24 09:34:59.06386	2014-02-24 09:35:10.704088	293	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
553	2014-02-24 09:35:12.847261	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
554	2014-02-24 09:35:13.12074	\N	339	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
555	2014-02-24 09:35:24.433633	\N	294	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
556	2014-02-24 09:35:24.727596	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
557	2014-02-24 09:35:32.535417	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
558	2014-02-24 09:35:33.651282	\N	339	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
559	2014-02-24 09:35:40.795332	\N	294	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
561	2014-02-24 09:35:52.874636	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
562	2014-02-24 09:35:59.990042	2014-02-24 09:36:12.270403	294	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
563	2014-02-24 09:36:15.089042	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
564	2014-02-24 09:36:25.081232	\N	339	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
565	2014-02-24 09:36:37.813277	\N	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
566	2014-02-24 09:36:37.839299	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
567	2014-02-24 09:36:38.197563	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
569	2014-02-24 09:36:54.628437	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
570	2014-02-24 09:36:54.680636	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
568	2014-02-24 09:36:44.525525	2014-02-24 09:37:00.023169	339	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
572	2014-02-24 09:37:00.505599	\N	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
571	2014-02-24 09:36:58.951707	2014-02-24 09:37:04.908061	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
573	2014-02-24 09:37:08.083153	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
574	2014-02-24 09:37:12.528863	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
575	2014-02-24 09:37:16.200979	\N	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
576	2014-02-24 09:37:21.975834	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
577	2014-02-24 09:37:26.340798	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
578	2014-02-24 09:37:35.436471	\N	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
579	2014-02-24 09:37:38.947868	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
580	2014-02-24 09:37:45.474504	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
581	2014-02-24 09:37:55.545572	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
583	2014-02-24 09:37:59.504123	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
585	2014-02-24 09:38:19.023758	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
582	2014-02-24 09:37:55.549967	2014-02-24 09:38:23.361627	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
584	2014-02-24 09:38:03.420963	2014-02-24 09:38:28.32988	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
586	2014-02-24 09:38:35.311689	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
587	2014-02-24 09:38:43.057738	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
589	2014-02-24 09:38:46.693207	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
590	2014-02-24 09:38:59.257179	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
591	2014-02-24 09:38:59.503366	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
592	2014-02-24 09:39:04.82143	\N	309	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
593	2014-02-24 09:39:16.427747	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
594	2014-02-24 09:39:18.029691	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
595	2014-02-24 09:39:19.03455	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
588	2014-02-24 09:38:45.919938	2014-02-24 09:39:19.050433	293	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
596	2014-02-24 09:39:29.729601	\N	309	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
597	2014-02-24 09:39:32.919118	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
598	2014-02-24 09:39:37.51295	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
599	2014-02-24 09:39:41.358568	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
601	2014-02-24 09:39:53.906372	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
602	2014-02-24 09:39:56.936523	\N	313	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
603	2014-02-24 09:39:58.13979	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
604	2014-02-24 09:39:58.638335	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
605	2014-02-24 09:40:02.75458	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
600	2014-02-24 09:39:47.108734	2014-02-24 09:40:06.152828	309	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
606	2014-02-24 09:40:12.176941	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
607	2014-02-24 09:40:17.151644	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
609	2014-02-24 09:40:31.893049	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
610	2014-02-24 09:40:36.055653	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
608	2014-02-24 09:40:18.474257	2014-02-24 09:40:40.617401	309	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
611	2014-02-24 09:40:45.194372	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
613	2014-02-24 09:41:03.499221	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
614	2014-02-24 09:41:06.219224	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
615	2014-02-24 09:41:10.413018	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
612	2014-02-24 09:40:52.927956	2014-02-24 09:41:11.044623	309	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
616	2014-02-24 09:41:22.0748	\N	309	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
617	2014-02-24 09:41:29.286435	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
619	2014-02-24 09:41:36.243063	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
622	2014-02-24 09:41:51.596407	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
618	2014-02-24 09:41:34.854585	2014-02-24 09:42:00.776226	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
621	2014-02-24 09:41:46.185128	2014-02-24 09:42:03.365502	309	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
620	2014-02-24 09:41:38.490423	2014-02-24 09:42:10.836384	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
623	2014-02-24 09:42:12.291465	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
625	2014-02-24 09:42:16.633022	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
626	2014-02-24 09:42:22.550528	\N	293	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
624	2014-02-24 09:42:15.27486	2014-02-24 09:42:28.260137	309	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
627	2014-02-24 09:42:37.056846	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
629	2014-02-24 09:42:40.164559	2014-02-24 09:42:53.248939	309	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
630	2014-02-24 09:42:54.223539	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
631	2014-02-24 09:42:56.929253	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
628	2014-02-24 09:42:39.151187	2014-02-24 09:43:10.61583	293	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
632	2014-02-24 09:43:05.00128	2014-02-24 09:43:17.193552	309	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
633	2014-02-24 09:43:17.568446	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
634	2014-02-24 09:43:25.656386	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
635	2014-02-24 09:43:28.870029	\N	309	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
636	2014-02-24 09:43:41.442457	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
638	2014-02-24 09:43:47.3787	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
639	2014-02-24 09:43:58.720836	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
637	2014-02-24 09:43:46.55247	2014-02-24 09:44:00.199364	309	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
640	2014-02-24 09:44:06.578344	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
641	2014-02-24 09:44:13.21493	2014-02-24 09:44:27.368128	309	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
642	2014-02-24 09:44:30.95882	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
643	2014-02-24 09:44:34.942852	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
644	2014-02-24 09:44:37.40087	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
645	2014-02-24 09:44:40.189501	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
646	2014-02-24 09:44:41.876286	2014-02-24 09:44:57.347315	309	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
647	2014-02-24 09:44:57.515615	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
648	2014-02-24 09:45:09.53098	2014-02-24 09:45:21.646805	309	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
651	2014-02-24 09:45:36.15139	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
652	2014-02-24 09:45:36.703558	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
649	2014-02-24 09:45:18.987928	2014-02-24 09:45:47.004921	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
653	2014-02-24 09:45:50.248668	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
654	2014-02-24 09:45:50.293381	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
650	2014-02-24 09:45:33.314552	2014-02-24 09:45:50.844392	309	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
655	2014-02-24 09:46:00.209486	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
657	2014-02-24 09:46:03.664799	2014-02-24 09:46:17.019131	309	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
658	2014-02-24 09:46:20.508951	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
659	2014-02-24 09:46:24.837091	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
660	2014-02-24 09:46:31.841895	2014-02-24 09:46:45.238512	309	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
656	2014-02-24 09:46:00.254064	2014-02-24 09:46:34.861423	293	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
661	2014-02-24 09:46:39.138689	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
662	2014-02-24 09:46:41.57535	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
663	2014-02-24 09:46:47.883115	\N	293	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
665	2014-02-24 09:47:08.020827	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
666	2014-02-24 09:47:10.080224	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
664	2014-02-24 09:46:57.344133	2014-02-24 09:47:10.092085	309	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
668	2014-02-24 09:47:21.710957	2014-02-24 09:47:33.762737	309	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
669	2014-02-24 09:47:42.932803	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
667	2014-02-24 09:47:14.468869	2014-02-24 09:47:47.046129	293	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
670	2014-02-24 09:47:45.308253	2014-02-24 09:47:58.197726	309	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
672	2014-02-24 09:48:09.664106	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
674	2014-02-24 09:48:15.039932	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
675	2014-02-24 09:48:23.168575	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
673	2014-02-24 09:48:10.043151	2014-02-24 09:48:23.226807	309	18	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
671	2014-02-24 09:48:00.019471	2014-02-24 09:48:29.192883	293	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
677	2014-02-24 09:48:42.407816	\N	293	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
678	2014-02-24 09:48:45.233664	\N	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
676	2014-02-24 09:48:37.608599	2014-02-24 09:48:48.682677	309	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
679	2014-02-24 09:48:52.395557	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
680	2014-02-24 09:48:59.063921	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
681	2014-02-24 09:49:01.013574	\N	309	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
683	2014-02-24 09:49:15.070948	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
684	2014-02-24 09:49:17.063153	2014-02-24 09:49:29.229888	309	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
686	2014-02-24 09:49:31.970153	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
687	2014-02-24 09:49:33.29908	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
682	2014-02-24 09:49:15.049129	2014-02-24 09:49:35.910264	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
688	2014-02-24 09:49:37.850711	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
690	2014-02-24 09:49:43.883496	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
685	2014-02-24 09:49:18.359952	2014-02-24 09:49:50.129199	293	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
691	2014-02-24 09:49:51.517001	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
689	2014-02-24 09:49:43.32882	2014-02-24 09:49:54.573748	309	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
692	2014-02-24 09:49:55.850906	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
693	2014-02-24 09:49:57.693279	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
694	2014-02-24 09:50:01.503527	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
695	2014-02-24 09:50:02.813458	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
696	2014-02-24 09:50:04.291322	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
697	2014-02-24 09:50:11.035574	\N	309	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
698	2014-02-24 09:50:17.824689	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
699	2014-02-24 09:50:17.980314	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
700	2014-02-24 09:50:23.328085	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
701	2014-02-24 09:50:35.129293	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
702	2014-02-24 09:50:35.585267	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
703	2014-02-24 09:50:35.783308	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
704	2014-02-24 09:50:36.551323	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
705	2014-02-24 09:50:40.236776	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
706	2014-02-24 09:50:41.375843	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
708	2014-02-24 09:50:53.063711	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
709	2014-02-24 09:51:00.26565	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
707	2014-02-24 09:50:44.049839	2014-02-24 09:51:05.677449	309	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
710	2014-02-24 09:51:05.814144	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
711	2014-02-24 09:51:11.584505	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
712	2014-02-24 09:51:17.565558	\N	309	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
713	2014-02-24 09:51:21.187646	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
714	2014-02-24 09:51:25.222881	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
715	2014-02-24 09:51:28.641594	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
716	2014-02-24 09:51:38.548521	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
717	2014-02-24 09:51:39.082153	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
718	2014-02-24 09:51:39.202693	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
719	2014-02-24 09:51:39.359035	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
720	2014-02-24 09:51:47.807305	\N	309	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
721	2014-02-24 09:51:52.17063	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
722	2014-02-24 09:51:52.983696	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
723	2014-02-24 09:51:53.151763	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
724	2014-02-24 09:51:53.926485	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
725	2014-02-24 09:51:55.331037	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
726	2014-02-24 09:51:57.103873	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
727	2014-02-24 09:52:06.476719	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
728	2014-02-24 09:52:11.089739	\N	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
729	2014-02-24 09:52:11.970411	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
731	2014-02-24 09:52:15.680136	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
732	2014-02-24 09:52:17.47853	\N	309	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
733	2014-02-24 09:52:17.715922	\N	294	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
734	2014-02-24 09:52:19.053203	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
735	2014-02-24 09:52:23.409043	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
736	2014-02-24 09:52:27.218636	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
737	2014-02-24 09:52:29.86523	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
739	2014-02-24 09:52:32.852218	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
740	2014-02-24 09:52:33.4802	\N	294	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
741	2014-02-24 09:52:42.485826	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
730	2014-02-24 09:52:12.749807	2014-02-24 09:52:43.555882	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
738	2014-02-24 09:52:32.313987	2014-02-24 09:53:08.499443	293	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
743	2014-02-24 09:52:48.365634	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
744	2014-02-24 09:52:51.230926	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
745	2014-02-24 09:52:53.03129	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
742	2014-02-24 09:52:43.27908	2014-02-24 09:52:55.470433	291	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
747	2014-02-24 09:52:57.557633	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
748	2014-02-24 09:52:58.651261	\N	323	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
749	2014-02-24 09:52:59.030888	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
746	2014-02-24 09:52:54.361132	2014-02-24 09:53:03.136341	294	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
750	2014-02-24 09:53:05.55931	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
751	2014-02-24 09:53:10.523835	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
752	2014-02-24 09:53:16.313496	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
753	2014-02-24 09:53:17.453846	\N	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
754	2014-02-24 09:53:20.664306	\N	291	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
756	2014-02-24 09:53:21.836691	\N	293	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
757	2014-02-24 09:53:22.243812	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
758	2014-02-24 09:53:26.284983	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
759	2014-02-24 09:53:29.797459	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
760	2014-02-24 09:53:35.274581	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
761	2014-02-24 09:53:37.115432	\N	336	3	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
762	2014-02-24 09:53:38.29912	\N	291	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
763	2014-02-24 09:53:38.533691	\N	293	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
764	2014-02-24 09:53:39.874	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
765	2014-02-24 09:53:44.066361	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
767	2014-02-24 09:53:52.110082	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
768	2014-02-24 09:53:56.697641	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
766	2014-02-24 09:53:47.139182	2014-02-24 09:54:10.693467	294	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
770	2014-02-24 09:54:10.980276	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
771	2014-02-24 09:54:12.502667	\N	336	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
772	2014-02-24 09:54:12.569089	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
773	2014-02-24 09:54:12.715156	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
774	2014-02-24 09:54:13.080843	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
775	2014-02-24 09:54:20.283169	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
822	2014-02-24 09:56:06.632772	2014-02-24 09:56:29.582312	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
776	2014-02-24 09:54:27.3795	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
777	2014-02-24 09:54:27.47753	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
769	2014-02-24 09:54:00.78501	2014-02-24 09:54:28.539398	291	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
778	2014-02-24 09:54:28.843926	\N	336	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
779	2014-02-24 09:54:35.95413	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
780	2014-02-24 09:54:39.409801	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
782	2014-02-24 09:54:42.27166	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
783	2014-02-24 09:54:43.069479	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
784	2014-02-24 09:54:43.564506	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
781	2014-02-24 09:54:40.966552	2014-02-24 09:54:48.351363	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
786	2014-02-24 09:54:53.849446	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
787	2014-02-24 09:54:56.000039	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
788	2014-02-24 09:54:57.224327	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
789	2014-02-24 09:54:59.451662	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
790	2014-02-24 09:54:59.476986	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
791	2014-02-24 09:55:00.597962	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
817	2014-02-24 09:55:52.932147	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
792	2014-02-24 09:55:12.030584	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
793	2014-02-24 09:55:13.177469	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
794	2014-02-24 09:55:13.225598	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
795	2014-02-24 09:55:15.570969	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
796	2014-02-24 09:55:15.730725	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
797	2014-02-24 09:55:16.202568	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
785	2014-02-24 09:54:45.0729	2014-02-24 09:55:17.922646	336	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
798	2014-02-24 09:55:19.487509	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
799	2014-02-24 09:55:25.324387	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
800	2014-02-24 09:55:25.765968	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
801	2014-02-24 09:55:28.399275	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
802	2014-02-24 09:55:30.258644	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
803	2014-02-24 09:55:30.521529	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
804	2014-02-24 09:55:30.981873	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
805	2014-02-24 09:55:31.051219	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
806	2014-02-24 09:55:32.945958	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
808	2014-02-24 09:55:34.815402	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
809	2014-02-24 09:55:35.893444	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
810	2014-02-24 09:55:36.740532	\N	339	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
811	2014-02-24 09:55:36.837473	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
812	2014-02-24 09:55:46.672842	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
813	2014-02-24 09:55:47.215416	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
814	2014-02-24 09:55:48.543759	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
815	2014-02-24 09:55:51.610004	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
816	2014-02-24 09:55:52.769649	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
818	2014-02-24 09:55:55.11938	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
819	2014-02-24 09:56:02.205767	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
821	2014-02-24 09:56:05.296214	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
823	2014-02-24 09:56:06.660686	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
824	2014-02-24 09:56:06.684636	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
825	2014-02-24 09:56:10.082428	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
807	2014-02-24 09:55:33.205798	2014-02-24 09:57:07.009473	323	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
755	2014-02-24 09:53:21.323507	2014-02-24 09:57:28.4199	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
826	2014-02-24 09:56:14.137682	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
820	2014-02-24 09:56:03.11792	2014-02-24 09:56:19.572649	338	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
827	2014-02-24 09:56:20.570364	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
828	2014-02-24 09:56:22.08721	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
829	2014-02-24 09:56:23.146178	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
830	2014-02-24 09:56:23.488424	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
831	2014-02-24 09:56:23.658533	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
832	2014-02-24 09:56:24.906753	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
833	2014-02-24 09:56:25.548909	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
834	2014-02-24 09:56:30.069827	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
835	2014-02-24 09:56:31.336945	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
836	2014-02-24 09:56:33.480589	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
839	2014-02-24 09:56:39.955039	\N	305	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
840	2014-02-24 09:56:40.109172	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
841	2014-02-24 09:56:41.904342	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
842	2014-02-24 09:56:42.975504	\N	305	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
843	2014-02-24 09:56:43.386593	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
844	2014-02-24 09:56:44.970102	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
845	2014-02-24 09:56:45.294199	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
838	2014-02-24 09:56:38.217793	2014-02-24 09:56:47.153094	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
846	2014-02-24 09:56:48.966203	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
847	2014-02-24 09:56:51.578224	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
848	2014-02-24 09:56:52.302555	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
850	2014-02-24 09:56:53.339514	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
837	2014-02-24 09:56:33.972499	2014-02-24 09:56:55.238622	309	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
851	2014-02-24 09:56:55.795055	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
852	2014-02-24 09:56:58.891256	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
853	2014-02-24 09:56:58.906568	\N	305	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
854	2014-02-24 09:57:02.208524	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
855	2014-02-24 09:57:06.37968	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
857	2014-02-24 09:57:08.681568	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
849	2014-02-24 09:56:53.08485	2014-02-24 09:57:09.357626	305	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
858	2014-02-24 09:57:11.362433	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
859	2014-02-24 09:57:14.670758	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
860	2014-02-24 09:57:17.534518	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
861	2014-02-24 09:57:18.964582	\N	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
862	2014-02-24 09:57:21.230504	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
863	2014-02-24 09:57:22.018184	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
864	2014-02-24 09:57:23.837441	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
866	2014-02-24 09:57:25.309752	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
867	2014-02-24 09:57:25.472537	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
856	2014-02-24 09:57:08.60417	2014-02-24 09:57:31.144708	309	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
868	2014-02-24 09:57:32.146893	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
869	2014-02-24 09:57:34.620163	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
870	2014-02-24 09:57:37.128258	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
871	2014-02-24 09:57:37.85807	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
872	2014-02-24 09:57:41.394908	\N	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
873	2014-02-24 09:57:42.714718	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
875	2014-02-24 09:57:46.109381	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
876	2014-02-24 09:57:50.924365	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
877	2014-02-24 09:57:51.955465	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
878	2014-02-24 09:57:53.203859	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
879	2014-02-24 09:57:54.377845	2014-02-24 09:58:00.951183	337	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
881	2014-02-24 09:58:05.353697	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
882	2014-02-24 09:58:05.709017	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
883	2014-02-24 09:58:05.714534	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
884	2014-02-24 09:58:06.817286	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
874	2014-02-24 09:57:44.599118	2014-02-24 09:58:08.013875	309	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
885	2014-02-24 09:58:10.301981	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
886	2014-02-24 09:58:10.427581	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
887	2014-02-24 09:58:10.630562	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
888	2014-02-24 09:58:14.614991	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
865	2014-02-24 09:57:24.520429	2014-02-24 09:58:16.925452	323	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
889	2014-02-24 09:58:18.092513	\N	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
890	2014-02-24 09:58:18.888735	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
891	2014-02-24 09:58:19.16824	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
880	2014-02-24 09:57:55.105412	2014-02-24 09:58:19.50332	339	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
892	2014-02-24 09:58:19.848895	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
893	2014-02-24 09:58:20.623212	\N	309	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
894	2014-02-24 09:58:20.987443	\N	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
895	2014-02-24 09:58:25.267549	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
896	2014-02-24 09:58:25.799889	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
897	2014-02-24 09:58:27.977793	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
898	2014-02-24 09:58:28.19057	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
899	2014-02-24 09:58:29.984883	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
900	2014-02-24 09:58:31.145524	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
902	2014-02-24 09:58:31.644669	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
903	2014-02-24 09:58:32.633946	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
904	2014-02-24 09:58:33.840622	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
905	2014-02-24 09:58:34.96203	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
906	2014-02-24 09:58:36.932187	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
907	2014-02-24 09:58:38.027481	\N	339	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
901	2014-02-24 09:58:31.595373	2014-02-24 09:59:55.577082	323	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
909	2014-02-24 09:58:42.078419	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
910	2014-02-24 09:58:43.077578	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
912	2014-02-24 09:58:45.520662	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
913	2014-02-24 09:58:48.455215	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
914	2014-02-24 09:58:48.473277	\N	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
915	2014-02-24 09:58:49.266082	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
917	2014-02-24 09:58:51.049588	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
918	2014-02-24 09:58:54.219223	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
919	2014-02-24 09:58:54.480415	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
920	2014-02-24 09:58:54.825486	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
922	2014-02-24 09:58:58.618979	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
923	2014-02-24 09:58:59.111271	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
924	2014-02-24 09:59:01.490708	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
925	2014-02-24 09:59:02.615722	\N	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
926	2014-02-24 09:59:05.883846	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
928	2014-02-24 09:59:07.360663	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
929	2014-02-24 09:59:08.243011	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
911	2014-02-24 09:58:45.078033	2014-02-24 09:59:08.923323	294	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
908	2014-02-24 09:58:38.207156	2014-02-24 09:59:10.654727	291	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
930	2014-02-24 09:59:11.544168	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
916	2014-02-24 09:58:49.762902	2014-02-24 09:59:11.556407	309	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
932	2014-02-24 09:59:20.133842	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
931	2014-02-24 09:59:15.544386	2014-02-24 09:59:21.915784	332	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
933	2014-02-24 09:59:22.187803	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
921	2014-02-24 09:58:56.391919	2014-02-24 09:59:23.181145	339	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
934	2014-02-24 09:59:23.417477	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
935	2014-02-24 09:59:23.454163	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
937	2014-02-24 09:59:24.175233	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
938	2014-02-24 09:59:24.69483	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
939	2014-02-24 09:59:26.249362	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
940	2014-02-24 09:59:26.311672	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
941	2014-02-24 09:59:26.90077	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
942	2014-02-24 09:59:27.606451	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
943	2014-02-24 09:59:29.427192	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
927	2014-02-24 09:59:06.425306	2014-02-24 09:59:30.305794	336	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
944	2014-02-24 09:59:32.920106	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
945	2014-02-24 09:59:37.479101	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
947	2014-02-24 09:59:40.464141	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
948	2014-02-24 09:59:43.739207	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
949	2014-02-24 09:59:43.925423	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
950	2014-02-24 09:59:45.472706	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
951	2014-02-24 09:59:46.544144	\N	336	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
952	2014-02-24 09:59:47.600399	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
953	2014-02-24 09:59:47.728373	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
954	2014-02-24 09:59:48.985131	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
936	2014-02-24 09:59:24.067344	2014-02-24 09:59:49.708651	309	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
955	2014-02-24 09:59:50.928955	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
956	2014-02-24 09:59:54.443156	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
957	2014-02-24 09:59:55.802523	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
958	2014-02-24 09:59:55.995145	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
959	2014-02-24 09:59:58.344049	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
960	2014-02-24 10:00:00.321542	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
961	2014-02-24 10:00:00.469811	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
963	2014-02-24 10:00:02.973927	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
964	2014-02-24 10:00:04.754341	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
965	2014-02-24 10:00:06.950315	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
966	2014-02-24 10:00:07.787455	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
967	2014-02-24 10:00:10.175256	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
946	2014-02-24 09:59:39.967915	2014-02-24 10:00:11.339629	339	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
968	2014-02-24 10:00:12.353625	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
969	2014-02-24 10:00:13.662632	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
970	2014-02-24 10:00:13.734588	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
972	2014-02-24 10:00:15.975615	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
973	2014-02-24 10:00:16.700728	\N	313	1	4D3953649C704D4CAFC97E99C7A83EE9	0	f	f
975	2014-02-24 10:00:20.84998	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
976	2014-02-24 10:00:25.733607	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
962	2014-02-24 10:00:01.779659	2014-02-24 10:00:25.753445	309	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
977	2014-02-24 10:00:28.195046	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
978	2014-02-24 10:00:30.959907	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
974	2014-02-24 10:00:20.267277	2014-02-24 10:00:32.176064	338	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
979	2014-02-24 10:00:33.469707	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
980	2014-02-24 10:00:33.549307	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
981	2014-02-24 10:00:34.00166	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
982	2014-02-24 10:00:36.322189	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
983	2014-02-24 10:00:36.489148	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
971	2014-02-24 10:00:14.520369	2014-02-24 10:00:37.880974	336	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
984	2014-02-24 10:00:39.115767	\N	309	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
985	2014-02-24 10:00:43.089354	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
986	2014-02-24 10:00:44.743532	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
987	2014-02-24 10:00:44.871386	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
988	2014-02-24 10:00:47.022042	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
989	2014-02-24 10:00:48.845576	\N	313	1	4D3953649C704D4CAFC97E99C7A83EE9	0	f	f
990	2014-02-24 10:00:48.849881	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
992	2014-02-24 10:00:50.024079	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
993	2014-02-24 10:00:50.04344	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
994	2014-02-24 10:00:50.392591	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
995	2014-02-24 10:00:51.417645	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
996	2014-02-24 10:00:53.61399	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
991	2014-02-24 10:00:48.93475	2014-02-24 10:00:54.528265	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
997	2014-02-24 10:00:56.554803	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
998	2014-02-24 10:00:57.346576	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1002	2014-02-24 10:01:00.71067	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1003	2014-02-24 10:01:01.358953	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1004	2014-02-24 10:01:02.705052	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1005	2014-02-24 10:01:04.795235	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1000	2014-02-24 10:00:58.274709	2014-02-24 10:01:05.766083	293	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1006	2014-02-24 10:01:05.777562	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1007	2014-02-24 10:01:08.398473	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1008	2014-02-24 10:01:08.4799	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1009	2014-02-24 10:01:09.264847	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1010	2014-02-24 10:01:10.1101	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1011	2014-02-24 10:01:10.639665	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1012	2014-02-24 10:01:11.350548	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1013	2014-02-24 10:01:11.734255	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1014	2014-02-24 10:01:13.014498	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1015	2014-02-24 10:01:13.050937	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1016	2014-02-24 10:01:14.573311	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1017	2014-02-24 10:01:15.511098	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1018	2014-02-24 10:01:18.150564	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1020	2014-02-24 10:01:20.779628	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1001	2014-02-24 10:00:58.712356	2014-02-24 10:01:20.947123	309	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1021	2014-02-24 10:01:22.004582	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
999	2014-02-24 10:00:57.394065	2014-02-24 10:01:24.071105	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1022	2014-02-24 10:01:24.588965	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1023	2014-02-24 10:01:25.669846	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1024	2014-02-24 10:01:27.139767	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1026	2014-02-24 10:01:27.71354	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1027	2014-02-24 10:01:27.877947	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1028	2014-02-24 10:01:29.759139	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1029	2014-02-24 10:01:31.817457	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1030	2014-02-24 10:01:32.543314	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1031	2014-02-24 10:01:33.013602	\N	309	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1032	2014-02-24 10:01:36.143594	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1033	2014-02-24 10:01:37.231033	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1034	2014-02-24 10:01:37.298333	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1035	2014-02-24 10:01:37.734402	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1019	2014-02-24 10:01:18.662725	2014-02-24 10:01:43.316137	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1036	2014-02-24 10:01:44.373838	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1037	2014-02-24 10:01:45.238554	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1038	2014-02-24 10:01:45.689923	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1039	2014-02-24 10:01:46.831651	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1040	2014-02-24 10:01:49.321603	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1041	2014-02-24 10:01:49.393707	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1042	2014-02-24 10:01:50.087364	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1043	2014-02-24 10:01:52.3595	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1044	2014-02-24 10:01:53.787432	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1025	2014-02-24 10:01:27.459671	2014-02-24 10:01:55.278676	313	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1045	2014-02-24 10:01:56.628697	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1046	2014-02-24 10:01:58.096842	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1047	2014-02-24 10:01:58.753091	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1048	2014-02-24 10:01:58.762577	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1049	2014-02-24 10:01:59.87192	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1050	2014-02-24 10:02:02.04815	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1052	2014-02-24 10:02:04.691426	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1053	2014-02-24 10:02:05.612908	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1054	2014-02-24 10:02:07.857949	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1055	2014-02-24 10:02:08.257411	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1056	2014-02-24 10:02:09.95052	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1057	2014-02-24 10:02:10.527735	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1058	2014-02-24 10:02:10.563646	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1060	2014-02-24 10:02:12.074236	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1061	2014-02-24 10:02:14.009578	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1062	2014-02-24 10:02:14.903507	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1063	2014-02-24 10:02:15.393529	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1064	2014-02-24 10:02:16.149319	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1065	2014-02-24 10:02:16.493063	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1066	2014-02-24 10:02:16.689415	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1067	2014-02-24 10:02:18.389506	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1068	2014-02-24 10:02:18.880737	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1069	2014-02-24 10:02:24.949013	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1070	2014-02-24 10:02:25.55511	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1071	2014-02-24 10:02:30.253365	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1072	2014-02-24 10:02:31.693874	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1073	2014-02-24 10:02:32.300205	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1051	2014-02-24 10:02:04.618816	2014-02-24 10:02:38.291912	293	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1074	2014-02-24 10:02:32.610547	2014-02-24 10:02:47.434439	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1075	2014-02-24 10:02:33.096216	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1076	2014-02-24 10:02:33.324358	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1077	2014-02-24 10:02:33.329567	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1078	2014-02-24 10:02:36.150423	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1059	2014-02-24 10:02:11.903885	2014-02-24 10:02:36.613187	309	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1080	2014-02-24 10:02:39.345635	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1081	2014-02-24 10:02:40.474862	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1082	2014-02-24 10:02:44.443102	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1083	2014-02-24 10:02:44.855334	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1084	2014-02-24 10:02:46.554393	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1085	2014-02-24 10:02:47.904398	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1087	2014-02-24 10:02:50.910381	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1088	2014-02-24 10:02:53.196043	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1090	2014-02-24 10:02:57.617694	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1091	2014-02-24 10:02:59.862229	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1092	2014-02-24 10:03:01.124288	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1079	2014-02-24 10:02:38.884708	2014-02-24 10:03:03.490242	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1093	2014-02-24 10:03:04.97093	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1094	2014-02-24 10:03:05.689222	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1095	2014-02-24 10:03:07.974674	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1096	2014-02-24 10:03:08.18054	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1097	2014-02-24 10:03:08.25283	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1098	2014-02-24 10:03:08.807912	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1099	2014-02-24 10:03:09.155085	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1100	2014-02-24 10:03:10.643604	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1101	2014-02-24 10:03:11.78168	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1102	2014-02-24 10:03:14.303784	\N	310	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1089	2014-02-24 10:02:56.865712	2014-02-24 10:03:14.796471	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1103	2014-02-24 10:03:15.315456	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1104	2014-02-24 10:03:16.472443	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1086	2014-02-24 10:02:48.990077	2014-02-24 10:03:18.166879	309	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1105	2014-02-24 10:03:19.39389	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1106	2014-02-24 10:03:22.129741	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1107	2014-02-24 10:03:27.906254	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1108	2014-02-24 10:03:28.346453	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1109	2014-02-24 10:03:28.48836	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1110	2014-02-24 10:03:29.162863	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1112	2014-02-24 10:03:30.901635	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1113	2014-02-24 10:03:33.214677	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1114	2014-02-24 10:03:35.029956	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1115	2014-02-24 10:03:35.419441	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1116	2014-02-24 10:03:35.840661	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1117	2014-02-24 10:03:36.069138	\N	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1118	2014-02-24 10:03:39.56017	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1119	2014-02-24 10:03:40.015874	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1120	2014-02-24 10:03:43.733789	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1121	2014-02-24 10:03:46.121313	\N	338	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1122	2014-02-24 10:03:46.397283	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1123	2014-02-24 10:03:47.658118	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1124	2014-02-24 10:03:48.544144	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1125	2014-02-24 10:03:48.699884	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1126	2014-02-24 10:03:50.169287	\N	337	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1127	2014-02-24 10:03:50.243902	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1111	2014-02-24 10:03:30.483277	2014-02-24 10:04:01.143258	309	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1129	2014-02-24 10:04:02.439052	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1130	2014-02-24 10:04:02.450591	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1131	2014-02-24 10:04:03.159717	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1132	2014-02-24 10:04:03.672356	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1133	2014-02-24 10:04:07.72977	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1134	2014-02-24 10:04:09.895949	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1136	2014-02-24 10:04:15.464039	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1137	2014-02-24 10:04:16.231598	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1138	2014-02-24 10:04:16.754326	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1140	2014-02-24 10:04:21.981889	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1128	2014-02-24 10:03:55.213736	2014-02-24 10:04:22.926018	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1141	2014-02-24 10:04:26.035309	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1142	2014-02-24 10:04:29.769911	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1143	2014-02-24 10:04:31.556523	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1135	2014-02-24 10:04:14.033396	2014-02-24 10:04:38.786875	309	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1144	2014-02-24 10:04:39.76978	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1145	2014-02-24 10:04:39.875397	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1146	2014-02-24 10:04:39.887409	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1147	2014-02-24 10:04:40.762726	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1148	2014-02-24 10:04:41.865626	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1149	2014-02-24 10:04:44.963774	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1139	2014-02-24 10:04:17.19848	2014-02-24 10:04:47.986576	313	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1150	2014-02-24 10:04:53.586215	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1151	2014-02-24 10:04:55.708059	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1152	2014-02-24 10:04:56.064974	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1153	2014-02-24 10:04:56.764765	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1154	2014-02-24 10:05:01.242357	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1155	2014-02-24 10:05:05.396069	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1157	2014-02-24 10:05:08.433583	2014-02-24 10:05:40.300133	309	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1158	2014-02-24 10:05:13.142502	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1159	2014-02-24 10:05:14.235018	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1160	2014-02-24 10:05:14.822688	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1156	2014-02-24 10:05:06.22249	2014-02-24 10:05:15.121463	338	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1161	2014-02-24 10:05:20.321107	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1162	2014-02-24 10:05:21.178062	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1163	2014-02-24 10:05:26.744765	\N	338	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1164	2014-02-24 10:05:33.028214	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1165	2014-02-24 10:05:37.605135	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1166	2014-02-24 10:05:42.111226	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1167	2014-02-24 10:05:42.140823	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1168	2014-02-24 10:05:42.688235	\N	338	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1169	2014-02-24 10:05:45.849562	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1170	2014-02-24 10:05:47.382184	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1171	2014-02-24 10:05:50.287518	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1172	2014-02-24 10:05:51.5793	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1175	2014-02-24 10:05:57.038573	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1176	2014-02-24 10:05:58.853466	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1177	2014-02-24 10:05:59.989345	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1178	2014-02-24 10:06:02.160562	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1174	2014-02-24 10:05:56.647806	2014-02-24 10:06:08.966643	338	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1180	2014-02-24 10:06:09.234613	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1181	2014-02-24 10:06:16.909614	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1182	2014-02-24 10:06:17.721659	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1173	2014-02-24 10:05:52.007532	2014-02-24 10:06:19.546059	309	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1183	2014-02-24 10:06:22.614851	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1184	2014-02-24 10:06:22.889055	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1185	2014-02-24 10:06:23.025006	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1187	2014-02-24 10:06:28.747316	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1190	2014-02-24 10:06:32.934846	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1191	2014-02-24 10:06:34.595606	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1192	2014-02-24 10:06:35.485799	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1193	2014-02-24 10:06:39.128828	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1194	2014-02-24 10:06:40.424082	\N	305	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
1188	2014-02-24 10:06:30.043545	2014-02-24 10:06:41.156091	338	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1179	2014-02-24 10:06:06.845711	2014-02-24 10:06:41.420317	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1195	2014-02-24 10:06:48.741459	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1196	2014-02-24 10:06:51.39362	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1198	2014-02-24 10:06:54.491457	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1189	2014-02-24 10:06:31.904987	2014-02-24 10:06:55.810896	309	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1199	2014-02-24 10:06:57.326848	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1186	2014-02-24 10:06:27.309475	2014-02-24 10:06:59.790789	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1200	2014-02-24 10:07:02.665982	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1197	2014-02-24 10:06:53.347113	2014-02-24 10:07:04.684861	338	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1201	2014-02-24 10:07:04.865261	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1202	2014-02-24 10:07:05.765623	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1203	2014-02-24 10:07:06.925822	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1204	2014-02-24 10:07:13.670445	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1206	2014-02-24 10:07:14.99099	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1207	2014-02-24 10:07:16.912864	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1208	2014-02-24 10:07:17.116463	\N	338	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1210	2014-02-24 10:07:20.195936	\N	305	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
1211	2014-02-24 10:07:23.071924	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1212	2014-02-24 10:07:25.340887	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1213	2014-02-24 10:07:25.955139	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1214	2014-02-24 10:07:26.888172	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1215	2014-02-24 10:07:29.145858	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1216	2014-02-24 10:07:33.961032	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1205	2014-02-24 10:07:13.857093	2014-02-24 10:07:36.805235	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1218	2014-02-24 10:07:37.676873	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1219	2014-02-24 10:07:38.046556	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1209	2014-02-24 10:07:17.17973	2014-02-24 10:07:40.005606	309	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1220	2014-02-24 10:07:41.590032	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1217	2014-02-24 10:07:34.889288	2014-02-24 10:07:41.967169	338	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1221	2014-02-24 10:07:46.473027	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1222	2014-02-24 10:07:49.17885	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1223	2014-02-24 10:07:50.886462	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1224	2014-02-24 10:07:50.913834	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1227	2014-02-24 10:07:52.678585	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1228	2014-02-24 10:07:57.261037	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1229	2014-02-24 10:07:59.968217	\N	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1230	2014-02-24 10:08:08.005176	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1231	2014-02-24 10:08:09.245211	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1232	2014-02-24 10:08:10.6909	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1233	2014-02-24 10:08:12.485525	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1226	2014-02-24 10:07:52.204339	2014-02-24 10:08:12.914469	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1234	2014-02-24 10:08:15.629654	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1235	2014-02-24 10:08:17.580487	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1225	2014-02-24 10:07:52.112807	2014-02-24 10:08:18.812994	309	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1236	2014-02-24 10:08:19.688987	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1237	2014-02-24 10:08:20.881488	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1238	2014-02-24 10:08:22.540604	\N	338	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1239	2014-02-24 10:08:25.704955	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1240	2014-02-24 10:08:25.766864	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1241	2014-02-24 10:08:28.925766	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1243	2014-02-24 10:08:32.422961	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1244	2014-02-24 10:08:36.495005	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1245	2014-02-24 10:08:37.205481	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1246	2014-02-24 10:08:40.441982	\N	338	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1247	2014-02-24 10:08:45.258925	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1248	2014-02-24 10:08:45.460098	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1249	2014-02-24 10:08:47.812516	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1250	2014-02-24 10:08:48.93982	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1251	2014-02-24 10:08:49.686966	\N	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1252	2014-02-24 10:08:49.995515	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1253	2014-02-24 10:08:53.788806	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1242	2014-02-24 10:08:31.172691	2014-02-24 10:08:54.568605	309	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1254	2014-02-24 10:09:02.362844	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1255	2014-02-24 10:09:02.605561	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1256	2014-02-24 10:09:02.602702	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1257	2014-02-24 10:09:06.266011	\N	309	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1258	2014-02-24 10:09:06.652913	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1259	2014-02-24 10:09:06.656537	\N	294	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1261	2014-02-24 10:09:07.721044	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1262	2014-02-24 10:09:08.479393	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1263	2014-02-24 10:09:09.085545	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1264	2014-02-24 10:09:15.949296	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1265	2014-02-24 10:09:17.734281	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1266	2014-02-24 10:09:20.909203	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1267	2014-02-24 10:09:23.194577	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1269	2014-02-24 10:09:28.110414	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1271	2014-02-24 10:09:31.006607	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1272	2014-02-24 10:09:33.349639	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1273	2014-02-24 10:09:34.389399	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1270	2014-02-24 10:09:28.715273	2014-02-24 10:09:34.469734	305	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1274	2014-02-24 10:09:37.565598	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1260	2014-02-24 10:09:07.514885	2014-02-24 10:09:38.063227	306	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1275	2014-02-24 10:09:38.375007	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1276	2014-02-24 10:09:39.517881	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1278	2014-02-24 10:09:49.350443	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1279	2014-02-24 10:09:49.436199	\N	301	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1268	2014-02-24 10:09:25.731441	2014-02-24 10:09:50.463681	309	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1281	2014-02-24 10:09:52.589731	\N	306	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1282	2014-02-24 10:09:54.585356	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1283	2014-02-24 10:09:56.473859	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1284	2014-02-24 10:10:02.720063	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1285	2014-02-24 10:10:03.307718	\N	309	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1286	2014-02-24 10:10:03.37574	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1287	2014-02-24 10:10:06.102329	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1288	2014-02-24 10:10:08.078369	\N	306	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1289	2014-02-24 10:10:13.908883	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1290	2014-02-24 10:10:15.328068	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1291	2014-02-24 10:10:15.919682	\N	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1292	2014-02-24 10:10:16.637264	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1293	2014-02-24 10:10:18.728262	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1280	2014-02-24 10:09:51.829581	2014-02-24 10:10:18.736406	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1277	2014-02-24 10:09:39.670534	2014-02-24 10:10:19.410386	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1294	2014-02-24 10:10:25.857329	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1295	2014-02-24 10:10:26.330503	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1296	2014-02-24 10:10:30.299882	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1297	2014-02-24 10:10:32.304108	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1298	2014-02-24 10:10:32.422208	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1301	2014-02-24 10:10:38.220275	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1302	2014-02-24 10:10:38.681717	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1303	2014-02-24 10:10:40.124741	\N	305	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1304	2014-02-24 10:10:42.353553	\N	309	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1305	2014-02-24 10:10:43.0714	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1300	2014-02-24 10:10:37.505422	2014-02-24 10:10:43.628731	338	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1306	2014-02-24 10:10:51.392227	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1307	2014-02-24 10:10:55.930049	\N	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1308	2014-02-24 10:10:56.711572	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1309	2014-02-24 10:10:59.639806	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1310	2014-02-24 10:10:59.992165	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1299	2014-02-24 10:10:35.192216	2014-02-24 10:11:01.951638	313	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1311	2014-02-24 10:11:03.042378	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1312	2014-02-24 10:11:04.382109	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1313	2014-02-24 10:11:06.725186	\N	305	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1315	2014-02-24 10:11:08.837025	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1314	2014-02-24 10:11:08.10387	2014-02-24 10:11:13.966219	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1316	2014-02-24 10:11:14.643953	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1317	2014-02-24 10:11:15.571336	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1318	2014-02-24 10:11:17.656897	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1319	2014-02-24 10:11:23.328485	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1320	2014-02-24 10:11:24.345565	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1321	2014-02-24 10:11:24.364328	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1322	2014-02-24 10:11:24.596769	\N	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1323	2014-02-24 10:11:25.071155	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1324	2014-02-24 10:11:25.544969	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1325	2014-02-24 10:11:25.551529	\N	338	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1326	2014-02-24 10:11:25.579737	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1327	2014-02-24 10:11:31.687379	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1328	2014-02-24 10:11:34.234365	\N	305	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1329	2014-02-24 10:11:36.629892	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1330	2014-02-24 10:11:46.708985	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1332	2014-02-24 10:11:47.785726	\N	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1333	2014-02-24 10:11:48.498772	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1334	2014-02-24 10:11:49.40615	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1331	2014-02-24 10:11:46.839393	2014-02-24 10:11:51.923353	319	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1335	2014-02-24 10:11:52.709932	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1336	2014-02-24 10:11:53.07961	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1337	2014-02-24 10:11:53.559766	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1338	2014-02-24 10:12:00.839309	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1339	2014-02-24 10:12:03.132686	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1340	2014-02-24 10:12:04.27356	\N	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1341	2014-02-24 10:12:04.851507	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1342	2014-02-24 10:12:07.414236	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1343	2014-02-24 10:12:08.415809	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1344	2014-02-24 10:12:09.109098	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1345	2014-02-24 10:12:10.893102	\N	305	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1346	2014-02-24 10:12:12.208793	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1347	2014-02-24 10:12:12.345576	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1348	2014-02-24 10:12:13.937965	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1349	2014-02-24 10:12:17.391225	\N	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1350	2014-02-24 10:12:18.808985	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1351	2014-02-24 10:12:23.755535	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1352	2014-02-24 10:12:26.071281	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1353	2014-02-24 10:12:28.219531	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1354	2014-02-24 10:12:29.199804	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1355	2014-02-24 10:12:30.254056	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1356	2014-02-24 10:12:30.679327	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1358	2014-02-24 10:12:33.41503	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1359	2014-02-24 10:12:34.316254	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1360	2014-02-24 10:12:44.870136	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1361	2014-02-24 10:12:46.615279	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1362	2014-02-24 10:12:49.253072	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1363	2014-02-24 10:12:50.840338	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1364	2014-02-24 10:12:54.753077	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1357	2014-02-24 10:12:30.938277	2014-02-24 10:12:55.709168	309	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1365	2014-02-24 10:12:57.537685	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1366	2014-02-24 10:12:57.545776	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1367	2014-02-24 10:12:59.137353	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1368	2014-02-24 10:13:02.009329	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1369	2014-02-24 10:13:03.760702	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1370	2014-02-24 10:13:07.821536	\N	309	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1371	2014-02-24 10:13:07.905608	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1374	2014-02-24 10:13:15.144658	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1375	2014-02-24 10:13:17.379112	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1373	2014-02-24 10:13:09.167308	2014-02-24 10:13:18.130047	338	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1376	2014-02-24 10:13:18.360533	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1377	2014-02-24 10:13:18.708914	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1378	2014-02-24 10:13:18.973932	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1379	2014-02-24 10:13:25.373456	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1380	2014-02-24 10:13:26.271539	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1381	2014-02-24 10:13:26.776233	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1382	2014-02-24 10:13:28.633194	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1385	2014-02-24 10:13:35.073716	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1386	2014-02-24 10:13:35.921657	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1387	2014-02-24 10:13:39.085406	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1383	2014-02-24 10:13:29.944606	2014-02-24 10:13:41.593702	338	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1388	2014-02-24 10:13:43.741252	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1389	2014-02-24 10:13:44.060638	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1390	2014-02-24 10:13:44.7511	\N	301	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1391	2014-02-24 10:13:45.462782	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1392	2014-02-24 10:13:45.982423	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1372	2014-02-24 10:13:07.902985	2014-02-24 10:13:49.218467	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1393	2014-02-24 10:13:50.089745	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1394	2014-02-24 10:13:50.785036	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1395	2014-02-24 10:13:51.153455	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1384	2014-02-24 10:13:35.069849	2014-02-24 10:13:59.511899	309	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1397	2014-02-24 10:14:00.912147	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1398	2014-02-24 10:14:04.678546	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1396	2014-02-24 10:13:53.001839	2014-02-24 10:14:04.857599	338	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1400	2014-02-24 10:14:06.455509	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1401	2014-02-24 10:14:08.370087	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1402	2014-02-24 10:14:09.38981	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1404	2014-02-24 10:14:13.241459	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1405	2014-02-24 10:14:14.987711	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1407	2014-02-24 10:14:18.871522	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1408	2014-02-24 10:14:23.148409	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1399	2014-02-24 10:14:05.793087	2014-02-24 10:14:38.036684	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1403	2014-02-24 10:14:12.060985	2014-02-24 10:14:38.291925	309	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1409	2014-02-24 10:14:25.124703	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1410	2014-02-24 10:14:25.823516	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1411	2014-02-24 10:14:29.232392	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1412	2014-02-24 10:14:29.551414	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1406	2014-02-24 10:14:18.657227	2014-02-24 10:14:30.808612	338	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1413	2014-02-24 10:14:32.070577	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1415	2014-02-24 10:14:43.777163	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1416	2014-02-24 10:14:45.777662	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1417	2014-02-24 10:14:48.819079	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1418	2014-02-24 10:14:52.574275	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1419	2014-02-24 10:14:53.526006	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1421	2014-02-24 10:14:53.558277	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1422	2014-02-24 10:14:55.676369	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1414	2014-02-24 10:14:41.901064	2014-02-24 10:14:56.942508	338	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1423	2014-02-24 10:14:58.311541	\N	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1424	2014-02-24 10:15:03.193841	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1425	2014-02-24 10:15:03.198012	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1426	2014-02-24 10:15:03.841845	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1427	2014-02-24 10:15:05.245248	\N	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1428	2014-02-24 10:15:14.055832	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1420	2014-02-24 10:14:53.543477	2014-02-24 10:15:16.751481	309	42	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1430	2014-02-24 10:15:20.749258	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1431	2014-02-24 10:15:21.303658	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1432	2014-02-24 10:15:26.034654	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1433	2014-02-24 10:15:26.874698	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1429	2014-02-24 10:15:19.174248	2014-02-24 10:15:29.769607	338	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1436	2014-02-24 10:15:32.045718	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1437	2014-02-24 10:15:32.148489	\N	339	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1439	2014-02-24 10:15:37.977006	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1440	2014-02-24 10:15:39.51971	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1441	2014-02-24 10:15:42.087856	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1442	2014-02-24 10:15:42.184278	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1443	2014-02-24 10:15:43.318483	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1444	2014-02-24 10:15:44.613062	\N	338	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1445	2014-02-24 10:15:46.869911	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1446	2014-02-24 10:15:49.497507	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1434	2014-02-24 10:15:28.690034	2014-02-24 10:15:53.454296	309	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1447	2014-02-24 10:15:53.983515	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1448	2014-02-24 10:15:54.339808	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1449	2014-02-24 10:15:55.951046	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1438	2014-02-24 10:15:32.653428	2014-02-24 10:15:58.620204	291	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1450	2014-02-24 10:16:02.499675	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1451	2014-02-24 10:16:02.945517	\N	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1452	2014-02-24 10:16:05.138898	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1453	2014-02-24 10:16:05.470592	\N	309	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1435	2014-02-24 10:15:30.773646	2014-02-24 10:16:08.659875	313	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1455	2014-02-24 10:16:10.108663	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1456	2014-02-24 10:16:10.521159	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1457	2014-02-24 10:16:13.897288	\N	338	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1458	2014-02-24 10:16:15.169957	\N	339	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1459	2014-02-24 10:16:18.914381	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1461	2014-02-24 10:16:21.012197	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1463	2014-02-24 10:16:21.814324	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1464	2014-02-24 10:16:25.141879	\N	291	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1465	2014-02-24 10:16:25.616381	\N	313	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1466	2014-02-24 10:16:26.980132	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1454	2014-02-24 10:16:06.700696	2014-02-24 10:16:34.748955	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1467	2014-02-24 10:16:37.545932	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1468	2014-02-24 10:16:38.44558	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1462	2014-02-24 10:16:21.486808	2014-02-24 10:16:43.510785	332	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1469	2014-02-24 10:16:44.059342	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1460	2014-02-24 10:16:20.938961	2014-02-24 10:16:44.656053	309	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1470	2014-02-24 10:16:44.993645	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1471	2014-02-24 10:16:45.171559	\N	313	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1472	2014-02-24 10:16:45.608688	\N	291	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1473	2014-02-24 10:16:48.366815	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1474	2014-02-24 10:16:54.652559	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1475	2014-02-24 10:16:56.765303	\N	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1476	2014-02-24 10:16:57.094899	\N	309	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1477	2014-02-24 10:16:58.685524	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1478	2014-02-24 10:16:59.061574	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1479	2014-02-24 10:16:59.137011	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1480	2014-02-24 10:16:59.352741	\N	313	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1481	2014-02-24 10:17:04.961815	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1483	2014-02-24 10:17:14.563006	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1484	2014-02-24 10:17:14.824747	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1482	2014-02-24 10:17:09.771099	2014-02-24 10:17:16.581703	338	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1487	2014-02-24 10:17:24.289787	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1488	2014-02-24 10:17:25.582658	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1489	2014-02-24 10:17:26.616741	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1491	2014-02-24 10:17:29.995095	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1485	2014-02-24 10:17:15.143657	2014-02-24 10:17:40.264631	309	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1486	2014-02-24 10:17:17.426994	2014-02-24 10:17:50.297365	332	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1490	2014-02-24 10:17:28.413395	2014-02-24 10:17:40.248075	338	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1493	2014-02-24 10:17:43.879465	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1494	2014-02-24 10:17:44.154956	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1496	2014-02-24 10:17:47.813827	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1497	2014-02-24 10:17:51.176298	\N	338	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1499	2014-02-24 10:17:53.849995	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1500	2014-02-24 10:17:55.737082	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1502	2014-02-24 10:18:07.61049	\N	338	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1503	2014-02-24 10:18:11.996494	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1504	2014-02-24 10:18:12.742888	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1492	2014-02-24 10:17:41.34733	2014-02-24 10:18:14.240596	313	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1505	2014-02-24 10:18:14.285489	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1495	2014-02-24 10:17:46.690657	2014-02-24 10:18:16.378916	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1506	2014-02-24 10:18:16.740864	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1507	2014-02-24 10:18:17.908841	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1498	2014-02-24 10:17:52.497452	2014-02-24 10:18:19.984834	309	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1508	2014-02-24 10:18:28.864777	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1510	2014-02-24 10:18:31.834777	\N	309	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1511	2014-02-24 10:18:33.804251	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1501	2014-02-24 10:18:02.889444	2014-02-24 10:18:34.741399	332	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1512	2014-02-24 10:18:35.314182	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1509	2014-02-24 10:18:28.979236	2014-02-24 10:18:41.263279	338	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1513	2014-02-24 10:18:41.818993	\N	313	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1514	2014-02-24 10:18:42.430502	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1515	2014-02-24 10:18:45.154752	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1516	2014-02-24 10:18:47.784851	\N	332	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1517	2014-02-24 10:18:50.275042	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1520	2014-02-24 10:18:56.171561	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1518	2014-02-24 10:18:52.842617	2014-02-24 10:19:03.714408	338	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1521	2014-02-24 10:19:04.179738	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1522	2014-02-24 10:19:06.302071	\N	332	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1523	2014-02-24 10:19:08.039793	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1524	2014-02-24 10:19:09.093226	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1526	2014-02-24 10:19:18.057176	\N	313	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1519	2014-02-24 10:18:55.596486	2014-02-24 10:19:20.045682	309	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1527	2014-02-24 10:19:20.281316	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1528	2014-02-24 10:19:20.684724	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1525	2014-02-24 10:19:15.370987	2014-02-24 10:19:27.530621	338	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1530	2014-02-24 10:19:31.518953	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1531	2014-02-24 10:19:31.819231	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1532	2014-02-24 10:19:33.034452	\N	309	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1533	2014-02-24 10:19:33.123885	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1534	2014-02-24 10:19:38.420155	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1535	2014-02-24 10:19:39.005116	\N	338	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1536	2014-02-24 10:19:45.038803	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1538	2014-02-24 10:19:54.282046	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1539	2014-02-24 10:19:57.05911	\N	309	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1529	2014-02-24 10:19:22.274871	2014-02-24 10:19:58.805559	332	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1540	2014-02-24 10:20:01.89302	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1541	2014-02-24 10:20:02.260723	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1542	2014-02-24 10:20:03.525401	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1543	2014-02-24 10:20:09.154584	\N	338	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1544	2014-02-24 10:20:12.648788	\N	332	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1545	2014-02-24 10:20:16.27222	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1546	2014-02-24 10:20:18.450121	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1537	2014-02-24 10:19:51.694344	2014-02-24 10:20:20.932161	313	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1548	2014-02-24 10:20:21.679666	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1549	2014-02-24 10:20:22.020229	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1550	2014-02-24 10:20:29.927119	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1551	2014-02-24 10:20:32.116736	\N	332	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1552	2014-02-24 10:20:32.418914	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1553	2014-02-24 10:20:42.160225	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1554	2014-02-24 10:20:42.287791	\N	313	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1555	2014-02-24 10:20:42.349659	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1556	2014-02-24 10:20:46.027649	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1547	2014-02-24 10:20:19.655482	2014-02-24 10:20:48.802473	309	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1557	2014-02-24 10:20:50.24372	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1558	2014-02-24 10:20:53.340921	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1559	2014-02-24 10:20:54.712625	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1560	2014-02-24 10:21:00.294623	\N	332	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1562	2014-02-24 10:21:02.817723	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1564	2014-02-24 10:21:07.389023	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1565	2014-02-24 10:21:08.259324	\N	313	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1566	2014-02-24 10:21:08.834318	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1567	2014-02-24 10:21:10.054999	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1563	2014-02-24 10:21:04.184766	2014-02-24 10:21:14.169526	338	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1568	2014-02-24 10:21:17.673242	\N	332	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1569	2014-02-24 10:21:17.895238	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1570	2014-02-24 10:21:22.025399	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1571	2014-02-24 10:21:22.249869	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1573	2014-02-24 10:21:27.001138	\N	313	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1561	2014-02-24 10:21:01.872701	2014-02-24 10:21:30.2248	309	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1572	2014-02-24 10:21:26.120588	2014-02-24 10:21:36.442585	338	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1574	2014-02-24 10:21:40.97058	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1577	2014-02-24 10:21:44.931587	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1578	2014-02-24 10:21:48.370319	\N	338	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1579	2014-02-24 10:21:51.124254	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1580	2014-02-24 10:21:52.360659	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1581	2014-02-24 10:21:58.327253	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1582	2014-02-24 10:21:58.359399	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1583	2014-02-24 10:22:01.009409	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1585	2014-02-24 10:22:10.380169	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1575	2014-02-24 10:21:42.213335	2014-02-24 10:22:10.780041	309	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1584	2014-02-24 10:22:04.610644	2014-02-24 10:22:15.51056	338	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1587	2014-02-24 10:22:15.906923	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1576	2014-02-24 10:21:44.296442	2014-02-24 10:22:18.06108	332	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1588	2014-02-24 10:22:18.284723	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1589	2014-02-24 10:22:21.599582	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1590	2014-02-24 10:22:22.849937	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1593	2014-02-24 10:22:30.018193	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1594	2014-02-24 10:22:32.282895	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1591	2014-02-24 10:22:25.14042	2014-02-24 10:22:32.640366	338	18	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1595	2014-02-24 10:22:34.888446	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1596	2014-02-24 10:22:38.71423	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1598	2014-02-24 10:22:44.159518	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1599	2014-02-24 10:22:46.820229	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1592	2014-02-24 10:22:25.216117	2014-02-24 10:22:47.788368	309	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1586	2014-02-24 10:22:14.456865	2014-02-24 10:22:49.563887	313	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1597	2014-02-24 10:22:43.937273	2014-02-24 10:22:50.185346	338	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1600	2014-02-24 10:22:53.500477	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1601	2014-02-24 10:22:55.375	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1602	2014-02-24 10:22:58.094154	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1605	2014-02-24 10:23:01.405984	\N	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1606	2014-02-24 10:23:04.262938	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1604	2014-02-24 10:23:01.272434	2014-02-24 10:23:07.893776	338	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1608	2014-02-24 10:23:09.135065	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1609	2014-02-24 10:23:11.058765	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1610	2014-02-24 10:23:14.231025	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1612	2014-02-24 10:23:18.161485	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1614	2014-02-24 10:23:21.717484	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1615	2014-02-24 10:23:23.703589	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1603	2014-02-24 10:22:59.972762	2014-02-24 10:23:23.717661	309	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1613	2014-02-24 10:23:19.315654	2014-02-24 10:23:26.258065	338	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1616	2014-02-24 10:23:30.131142	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1617	2014-02-24 10:23:30.563549	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1618	2014-02-24 10:23:33.678527	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1619	2014-02-24 10:23:33.971674	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1621	2014-02-24 10:23:36.891535	\N	338	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1611	2014-02-24 10:23:17.779347	2014-02-24 10:23:39.018327	336	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1607	2014-02-24 10:23:07.89151	2014-02-24 10:23:40.846968	313	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1622	2014-02-24 10:23:48.054153	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1623	2014-02-24 10:23:48.274786	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1624	2014-02-24 10:23:49.098039	\N	338	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1625	2014-02-24 10:23:49.441668	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1626	2014-02-24 10:23:53.661225	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1627	2014-02-24 10:24:00.56468	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1620	2014-02-24 10:23:35.961096	2014-02-24 10:24:01.846419	309	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1628	2014-02-24 10:24:01.945515	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1629	2014-02-24 10:24:03.189906	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1630	2014-02-24 10:24:06.015125	\N	338	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1631	2014-02-24 10:24:07.403225	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1632	2014-02-24 10:24:11.730302	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1635	2014-02-24 10:24:14.594291	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1636	2014-02-24 10:24:14.721695	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1637	2014-02-24 10:24:24.620734	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1638	2014-02-24 10:24:26.101525	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1639	2014-02-24 10:24:29.00425	\N	338	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1640	2014-02-24 10:24:29.71778	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1641	2014-02-24 10:24:30.428268	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1634	2014-02-24 10:24:14.587413	2014-02-24 10:24:34.363056	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1642	2014-02-24 10:24:34.996742	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1633	2014-02-24 10:24:14.072418	2014-02-24 10:24:40.052226	309	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1643	2014-02-24 10:24:40.521347	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1644	2014-02-24 10:24:44.133649	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1645	2014-02-24 10:24:47.536862	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1646	2014-02-24 10:24:51.517335	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1648	2014-02-24 10:24:54.116182	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1649	2014-02-24 10:24:54.88984	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1650	2014-02-24 10:24:56.44572	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1651	2014-02-24 10:24:57.747278	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1652	2014-02-24 10:25:08.741346	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1653	2014-02-24 10:25:11.155188	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1654	2014-02-24 10:25:13.998997	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1655	2014-02-24 10:25:16.985954	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1656	2014-02-24 10:25:19.265266	\N	319	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1657	2014-02-24 10:25:19.703383	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1647	2014-02-24 10:24:52.031132	2014-02-24 10:25:20.372069	309	55	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1658	2014-02-24 10:25:20.412311	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1659	2014-02-24 10:25:22.291461	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1660	2014-02-24 10:25:32.341682	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1662	2014-02-24 10:25:40.409383	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1663	2014-02-24 10:25:43.849471	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1664	2014-02-24 10:25:47.054346	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1665	2014-02-24 10:25:49.291596	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1666	2014-02-24 10:25:54.287556	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1667	2014-02-24 10:25:57.621241	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1668	2014-02-24 10:26:00.658618	\N	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1669	2014-02-24 10:26:01.982097	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1661	2014-02-24 10:25:32.445755	2014-02-24 10:26:03.320143	309	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1670	2014-02-24 10:26:06.529998	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1672	2014-02-24 10:26:18.230244	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1673	2014-02-24 10:26:18.880967	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1675	2014-02-24 10:26:27.831125	\N	335	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1676	2014-02-24 10:26:41.110617	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1677	2014-02-24 10:26:44.48946	\N	336	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1678	2014-02-24 10:26:45.7326	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1671	2014-02-24 10:26:15.856991	2014-02-24 10:26:51.029887	309	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1679	2014-02-24 10:27:00.051753	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1674	2014-02-24 10:26:24.426199	2014-02-24 10:27:00.262512	321	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1680	2014-02-24 10:27:02.657798	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1682	2014-02-24 10:27:11.641125	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1683	2014-02-24 10:27:13.603651	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1684	2014-02-24 10:27:15.301694	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1685	2014-02-24 10:27:17.637053	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1686	2014-02-24 10:27:22.009957	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1687	2014-02-24 10:27:26.111009	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1688	2014-02-24 10:27:27.183491	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1689	2014-02-24 10:27:29.62696	\N	313	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1690	2014-02-24 10:27:35.113836	\N	321	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1691	2014-02-24 10:27:36.365812	\N	336	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1681	2014-02-24 10:27:03.421833	2014-02-24 10:27:36.545087	309	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1692	2014-02-24 10:27:36.908227	\N	332	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1693	2014-02-24 10:27:39.263375	\N	319	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1694	2014-02-24 10:27:39.268733	\N	335	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1695	2014-02-24 10:27:43.359431	\N	294	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1696	2014-02-24 10:27:44.324588	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1697	2014-02-24 10:27:48.681329	\N	309	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1698	2014-02-24 10:27:51.979422	\N	309	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1699	2014-02-24 11:30:01.441446	\N	183	101	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1700	2014-02-24 11:30:17.104453	\N	183	101	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1701	2014-02-24 11:30:31.257262	\N	183	101	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1702	2014-02-24 11:31:00.678824	\N	183	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1703	2014-02-24 11:31:12.921688	\N	183	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1704	2014-02-24 11:31:33.103944	\N	183	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1705	2014-02-24 11:31:56.497542	\N	183	99	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1706	2014-02-24 11:32:20.637255	\N	183	99	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1707	2014-02-24 11:32:36.799807	\N	183	99	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1708	2014-02-24 11:32:58.578068	\N	183	98	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1709	2014-02-24 11:33:21.055929	\N	183	98	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1710	2014-02-24 11:33:36.581574	\N	183	98	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1711	2014-02-24 11:33:49.952488	\N	183	98	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1712	2014-02-24 11:34:13.345763	\N	183	97	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1713	2014-02-24 11:34:30.401717	\N	183	97	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1714	2014-02-24 11:35:16.826971	\N	183	97	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1715	2014-02-24 11:35:46.340122	\N	183	96	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1716	2014-02-24 11:38:34.556237	\N	183	96	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1717	2014-02-24 11:38:53.391857	\N	183	96	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1718	2014-02-24 11:39:06.47456	\N	183	96	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1719	2014-02-24 11:39:29.542286	\N	183	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1720	2014-02-24 11:39:52.563792	\N	183	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1721	2014-02-24 11:40:19.925544	\N	183	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1722	2014-02-24 11:40:33.901143	\N	183	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1723	2014-02-24 11:40:47.292982	\N	183	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1724	2014-02-24 11:41:22.081002	\N	183	94	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1725	2014-02-24 11:41:44.381797	\N	101	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1726	2014-02-24 11:43:58.219419	\N	183	94	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1727	2014-02-24 11:44:25.004353	\N	183	94	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1728	2014-02-24 11:44:38.810142	\N	183	94	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1729	2014-02-24 13:15:31.160015	2014-02-24 13:15:37.860515	270	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1730	2014-02-24 13:15:51.739148	2014-02-24 13:15:57.957257	270	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1731	2014-02-24 13:16:12.15215	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1732	2014-02-24 13:16:27.968997	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1733	2014-02-24 13:16:47.363377	2014-02-24 13:16:54.455195	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1734	2014-02-24 13:17:10.941688	\N	270	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1735	2014-02-24 13:17:11.766787	\N	259	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1737	2014-02-24 13:17:27.552716	\N	270	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1736	2014-02-24 13:17:24.945273	2014-02-24 13:17:39.676466	259	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1738	2014-02-24 13:17:47.351842	\N	270	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1739	2014-02-24 13:17:51.247717	\N	259	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1741	2014-02-24 13:18:13.735267	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1740	2014-02-24 13:18:10.787395	2014-02-24 13:18:21.325033	259	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1743	2014-02-24 13:18:35.18838	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1742	2014-02-24 13:18:33.163154	2014-02-24 13:18:47.592572	259	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1744	2014-02-24 13:18:48.971978	2014-02-24 13:18:56.507522	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1746	2014-02-24 13:19:10.949602	\N	270	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1745	2014-02-24 13:18:59.198565	2014-02-24 13:19:13.240688	259	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1748	2014-02-24 13:19:39.421724	\N	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1747	2014-02-24 13:19:24.667553	2014-02-24 13:19:40.492166	259	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1749	2014-02-24 13:20:16.287254	2014-02-24 13:20:30.898435	259	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1750	2014-02-24 13:20:38.787064	2014-02-24 13:20:44.720443	270	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1752	2014-02-24 13:20:55.876296	2014-02-24 13:21:01.595642	270	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1751	2014-02-24 13:20:49.908803	2014-02-24 13:21:04.792812	259	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1753	2014-02-24 13:21:14.218813	2014-02-24 13:21:20.087745	270	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1754	2014-02-24 13:21:17.292382	2014-02-24 13:21:31.06044	259	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1755	2014-02-24 13:21:32.341612	2014-02-24 13:21:38.398553	270	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1757	2014-02-24 13:21:50.522142	2014-02-24 13:21:56.835991	270	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1756	2014-02-24 13:21:42.42863	2014-02-24 13:21:59.531801	259	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1758	2014-02-24 13:22:08.880153	2014-02-24 13:22:15.095084	270	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1759	2014-02-24 13:22:12.886513	2014-02-24 13:22:27.622435	259	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1760	2014-02-24 13:22:26.610944	2014-02-24 13:22:33.08115	270	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1762	2014-02-24 13:22:45.206735	2014-02-24 13:22:51.616113	270	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1761	2014-02-24 13:22:39.826505	2014-02-24 13:22:52.975671	259	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1763	2014-02-24 13:23:04.497609	2014-02-24 13:23:11.36589	270	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1764	2014-02-24 13:23:05.285026	2014-02-24 13:23:23.555641	259	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1765	2014-02-24 13:23:24.040709	\N	270	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1767	2014-02-24 13:23:36.178128	2014-02-24 13:23:42.510011	270	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1766	2014-02-24 13:23:35.109605	2014-02-24 13:23:49.591807	259	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1768	2014-02-24 13:23:54.698486	2014-02-24 13:24:01.023829	270	18	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1769	2014-02-24 13:24:01.713815	2014-02-24 13:24:18.177758	259	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1770	2014-02-24 13:24:13.337616	2014-02-24 13:24:20.972406	270	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1772	2014-02-24 13:24:32.534704	2014-02-24 13:24:38.446689	270	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1771	2014-02-24 13:24:30.043503	2014-02-24 13:24:47.974042	259	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1773	2014-02-24 13:24:50.358006	2014-02-24 13:24:56.837045	270	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1775	2014-02-24 13:25:08.635392	\N	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1774	2014-02-24 13:24:59.700951	2014-02-24 13:25:15.151818	259	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1776	2014-02-24 13:25:27.080767	2014-02-24 13:25:36.963086	259	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1777	2014-02-24 13:25:48.91989	2014-02-24 13:26:03.139503	259	18	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1778	2014-02-24 13:26:15.066355	2014-02-24 13:26:37.030113	259	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1779	2014-02-24 13:26:49.525745	2014-02-24 13:27:03.688459	259	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1780	2014-02-24 13:27:17.214911	2014-02-24 13:27:32.798354	259	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1781	2014-02-24 13:27:46.064552	\N	259	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1782	2014-02-24 13:29:25.826025	2014-02-24 13:29:51.273061	259	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1783	2014-02-24 13:30:02.703325	\N	259	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1784	2014-02-24 13:30:28.112586	2014-02-24 13:30:53.536583	259	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1785	2014-02-24 13:31:06.554438	2014-02-24 13:31:33.330247	259	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1786	2014-02-24 13:31:25.30578	2014-02-24 13:31:40.340858	270	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1787	2014-02-24 13:31:46.337474	\N	259	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1788	2014-02-24 13:31:54.319786	\N	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1789	2014-02-24 13:32:08.263316	\N	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1790	2014-02-24 13:32:11.744975	\N	259	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1791	2014-02-24 13:32:22.053237	2014-02-24 13:32:42.133696	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1793	2014-02-24 13:32:54.837633	\N	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1792	2014-02-24 13:32:42.154304	2014-02-24 13:33:07.405967	259	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1794	2014-02-24 13:33:21.509617	\N	259	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1795	2014-02-24 13:34:53.291854	2014-02-24 13:35:20.384417	259	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1796	2014-02-24 13:35:33.25557	2014-02-24 13:35:59.975898	259	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1797	2014-02-24 13:38:27.63011	\N	259	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1798	2014-02-24 13:40:34.486462	\N	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1799	2014-02-24 13:41:37.092661	\N	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1800	2014-02-24 13:42:51.465441	\N	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1801	2014-02-24 13:43:21.240577	\N	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1802	2014-02-24 13:43:50.39572	\N	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1803	2014-02-24 13:44:43.292975	2014-02-24 13:45:05.54923	259	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1804	2014-02-24 13:45:17.765539	2014-02-24 13:45:44.833549	259	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1805	2014-02-24 13:46:00.88259	2014-02-24 13:46:25.631822	259	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1806	2014-02-24 13:46:37.571267	\N	259	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1807	2014-02-24 13:47:03.956875	\N	259	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1808	2014-02-24 13:47:31.474329	2014-02-24 13:47:58.134169	259	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1809	2014-02-24 13:48:10.977228	2014-02-24 13:48:34.153181	259	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1810	2014-02-24 13:48:47.284647	2014-02-24 13:49:16.440109	259	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1811	2014-02-24 13:49:33.878317	\N	259	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1812	2014-02-24 13:49:47.740659	\N	259	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1813	2014-02-24 13:50:20.539254	\N	259	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1814	2014-02-24 13:51:02.263728	2014-02-24 13:51:10.653053	270	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1815	2014-02-24 13:51:40.676594	2014-02-24 13:52:07.936428	259	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1816	2014-02-24 13:52:20.004574	\N	259	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1817	2014-02-24 13:52:43.584206	\N	259	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1818	2014-02-24 13:53:10.654161	2014-02-24 13:53:20.425926	270	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1820	2014-02-24 13:53:32.883136	\N	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1819	2014-02-24 13:53:27.135258	2014-02-24 13:53:54.279152	259	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1821	2014-02-24 13:54:05.835715	2014-02-24 13:54:32.636336	259	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1822	2014-02-24 13:55:18.607753	\N	259	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1823	2014-02-24 13:56:09.001896	2014-02-24 13:56:35.25646	259	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1824	2014-02-24 13:56:56.807947	2014-02-24 13:57:21.571271	259	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1825	2014-02-24 13:57:32.888526	2014-02-24 13:57:54.367608	259	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1826	2014-02-24 13:58:08.706323	2014-02-24 13:58:33.311288	259	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1828	2014-02-24 13:58:49.306311	\N	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1827	2014-02-24 13:58:45.740517	2014-02-24 13:59:12.873248	259	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1829	2014-02-24 13:59:02.959125	2014-02-24 13:59:19.411091	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1830	2014-02-24 13:59:25.731984	\N	259	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1831	2014-02-24 13:59:31.762248	\N	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1832	2014-02-24 13:59:44.736654	2014-02-24 14:00:09.287119	259	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1833	2014-02-24 13:59:59.807677	2014-02-24 14:00:19.730618	270	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1835	2014-02-24 14:00:31.418292	\N	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1834	2014-02-24 14:00:21.229326	2014-02-24 14:00:46.316676	259	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1836	2014-02-24 14:00:59.064591	\N	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1837	2014-02-24 14:01:30.804191	2014-02-24 14:01:50.799149	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1838	2014-02-24 14:02:11.615684	\N	270	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1839	2014-02-24 14:03:34.78821	\N	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1840	2014-02-24 14:03:47.32954	2014-02-24 14:04:06.429135	270	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1841	2014-02-24 14:04:18.127109	\N	270	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1842	2014-02-24 14:04:22.703422	2014-02-24 14:04:43.931206	259	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1843	2014-02-24 14:04:36.629199	2014-02-24 14:04:59.007119	270	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1844	2014-02-24 14:05:11.01494	\N	270	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1845	2014-02-24 14:06:49.470454	\N	259	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1847	2014-02-24 14:07:19.369333	\N	270	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1846	2014-02-24 14:07:14.066118	2014-02-24 14:07:36.696124	259	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1848	2014-02-24 14:08:07.382655	2014-02-24 14:08:35.170247	259	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1849	2014-02-24 14:08:37.333801	\N	270	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1850	2014-02-24 14:09:38.684668	2014-02-24 14:10:02.319632	259	42	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1851	2014-02-24 15:29:50.067742	\N	183	93	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1852	2014-02-24 15:35:42.492795	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1853	2014-02-24 15:35:47.432787	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1854	2014-02-24 15:36:00.151969	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1855	2014-02-24 15:36:05.64854	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1856	2014-02-24 15:36:24.881547	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1857	2014-02-24 15:36:34.640146	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1858	2014-02-24 15:37:38.197765	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1859	2014-02-24 15:37:53.587815	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1860	2014-02-24 15:38:36.18276	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1861	2014-02-24 15:39:01.773944	2014-02-24 15:39:23.93912	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1862	2014-02-24 15:39:36.651533	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1863	2014-02-24 15:40:09.907376	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1864	2014-02-24 15:40:27.366293	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1865	2014-02-24 15:40:46.302107	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1866	2014-02-24 15:42:14.521243	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1867	2014-02-24 15:43:23.161264	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1868	2014-02-24 15:55:23.416873	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1869	2014-02-24 15:56:01.603886	2014-02-24 15:56:22.970601	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1870	2014-02-24 15:58:33.460073	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1871	2014-02-24 16:00:09.800534	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1872	2014-02-24 16:02:25.61355	2014-02-24 16:02:54.240589	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1873	2014-02-24 16:03:41.447734	2014-02-24 16:04:08.003198	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1874	2014-02-24 16:05:02.508527	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1875	2014-02-24 16:06:17.19974	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1876	2014-02-24 16:10:40.569511	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1877	2014-02-24 16:15:26.852634	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1878	2014-02-24 16:16:13.66673	2014-02-24 16:16:37.203127	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1879	2014-02-24 16:19:11.612547	2014-02-24 16:19:39.592816	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1880	2014-02-24 16:20:06.239543	\N	480	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1881	2014-02-24 16:20:33.448496	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
1883	2014-02-24 16:23:12.860518	\N	480	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1882	2014-02-24 16:23:01.336501	2014-02-24 16:23:29.797336	147	30	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1884	2014-02-24 16:25:00.592546	\N	147	31	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1885	2014-02-24 16:25:10.558668	\N	480	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1886	2014-02-24 16:26:04.65267	\N	147	30	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1887	2014-02-24 16:26:27.737503	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1888	2014-02-24 17:10:34.619421	\N	183	92	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1889	2014-02-24 17:12:02.953512	\N	144	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1890	2014-02-24 17:12:16.406335	2014-02-24 17:12:22.021435	144	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1891	2014-02-24 17:12:33.464668	2014-02-24 17:12:42.829017	144	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1892	2014-02-24 17:12:54.13723	2014-02-24 17:13:05.787096	144	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1893	2014-02-24 17:13:45.793555	2014-02-24 17:13:52.020517	144	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1894	2014-02-24 17:14:03.297312	\N	144	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1895	2014-02-24 17:14:18.700801	\N	183	91	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1896	2014-02-24 17:14:28.473359	\N	144	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1897	2014-02-24 17:14:44.588577	\N	183	90	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1898	2014-02-24 17:14:52.802293	2014-02-24 17:15:01.819017	144	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1900	2014-02-24 17:15:20.409817	\N	183	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1899	2014-02-24 17:15:12.921254	2014-02-24 17:15:25.38652	144	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1902	2014-02-24 17:15:46.117523	\N	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1901	2014-02-24 17:15:37.225509	2014-02-24 17:15:51.403119	144	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1903	2014-02-24 17:16:03.127118	2014-02-24 17:16:14.571557	144	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1905	2014-02-24 17:16:26.237563	2014-02-24 17:16:39.270674	144	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1904	2014-02-24 17:16:14.074274	2014-02-24 17:16:43.821847	183	87	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1906	2014-02-24 17:16:50.490872	2014-02-24 17:17:02.546862	144	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1907	2014-02-24 17:17:13.937596	2014-02-24 17:17:25.259155	144	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1908	2014-02-24 17:17:36.460563	2014-02-24 17:17:47.383186	144	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1909	2014-02-24 17:17:58.776416	\N	144	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1910	2014-02-24 17:18:26.339706	2014-02-24 17:18:33.095132	144	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1911	2014-02-24 17:18:44.325346	2014-02-24 17:18:51.07024	144	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1912	2014-02-24 17:19:02.27686	2014-02-24 17:19:10.253177	144	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1913	2014-02-24 17:19:21.492544	2014-02-24 17:19:29.142218	144	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1914	2014-02-24 17:19:40.4764	2014-02-24 17:19:46.771353	144	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1915	2014-02-24 17:19:58.317563	2014-02-24 17:20:05.311098	144	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1916	2014-02-24 17:20:17.803277	\N	144	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1917	2014-02-24 17:20:43.988574	\N	144	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1918	2014-02-24 17:39:12.036584	\N	480	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1919	2014-02-25 07:42:56.677665	\N	254	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1920	2014-02-25 07:43:23.138464	2014-02-25 07:43:51.253846	254	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1921	2014-02-25 07:44:04.56297	2014-02-25 07:44:32.679789	254	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1922	2014-02-25 07:44:52.181278	2014-02-25 07:45:18.628364	254	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1923	2014-02-25 07:45:33.140187	\N	254	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1924	2014-02-25 08:13:39.560447	\N	136	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1925	2014-02-25 08:14:01.285499	2014-02-25 08:14:15.507344	136	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1926	2014-02-25 08:14:27.503506	2014-02-25 08:14:42.008319	136	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1927	2014-02-25 08:14:54.025002	\N	136	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1928	2014-02-25 08:15:19.760132	\N	136	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1929	2014-02-25 08:15:44.73842	2014-02-25 08:15:58.57312	136	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1930	2014-02-25 08:16:13.488882	2014-02-25 08:16:27.304496	136	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1931	2014-02-25 08:16:42.320626	2014-02-25 08:16:53.005449	136	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1932	2014-02-25 08:17:05.750298	2014-02-25 08:17:15.348976	136	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1933	2014-02-25 08:17:55.969734	\N	136	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1934	2014-02-25 08:44:42.636017	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1935	2014-02-25 08:46:15.284002	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1936	2014-02-25 08:48:43.795182	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1937	2014-02-25 08:52:16.942113	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1938	2014-02-25 08:52:57.775107	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1939	2014-02-25 08:55:34.645633	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1940	2014-02-25 08:56:29.656968	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1941	2014-02-25 08:57:27.467924	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
1942	2014-02-25 08:57:45.213446	2014-02-25 08:59:26.387198	141	16	FC21412A7C92444EA50B30A09729330F	0	f	t
1943	2014-02-25 09:00:23.044179	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1944	2014-02-25 09:03:19.394515	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1945	2014-02-25 09:08:26.358399	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1946	2014-02-25 09:08:36.644732	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1947	2014-02-25 09:08:49.995939	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1948	2014-02-25 09:12:50.683965	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1949	2014-02-25 09:15:12.153315	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1950	2014-02-25 09:29:28.974833	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
1951	2014-02-25 09:35:05.31823	2014-02-25 09:35:30.870667	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1952	2014-02-25 09:35:40.358336	\N	136	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1954	2014-02-25 09:36:06.088703	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1953	2014-02-25 09:36:04.815995	2014-02-25 09:36:22.298955	136	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1955	2014-02-25 09:36:07.955488	2014-02-25 09:36:35.327071	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1956	2014-02-25 09:36:48.942113	\N	183	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1957	2014-02-25 09:37:17.308115	2014-02-25 09:37:27.456511	136	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1959	2014-02-25 09:37:43.169456	\N	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1958	2014-02-25 09:37:26.335451	2014-02-25 09:37:55.140026	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1960	2014-02-25 09:39:02.7749	2014-02-25 09:39:27.129303	179	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1961	2014-02-25 09:39:24.79655	2014-02-25 09:39:35.385259	136	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1963	2014-02-25 09:39:47.564216	\N	136	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1962	2014-02-25 09:39:38.927422	2014-02-25 09:40:08.909031	179	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1966	2014-02-25 09:40:32.991404	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1964	2014-02-25 09:40:26.635163	2014-02-25 09:40:40.287497	136	6	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1967	2014-02-25 09:40:53.681089	\N	136	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1968	2014-02-25 09:40:54.974571	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1965	2014-02-25 09:40:27.386805	2014-02-25 09:40:57.30705	179	39	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1970	2014-02-25 09:41:16.983702	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1971	2014-02-25 09:41:17.903077	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1969	2014-02-25 09:41:09.887731	2014-02-25 09:41:35.438917	179	40	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1973	2014-02-25 09:41:43.056698	2014-02-25 09:41:54.423342	136	7	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1975	2014-02-25 09:41:56.219289	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
1972	2014-02-25 09:41:41.13323	2014-02-25 09:42:04.056194	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1974	2014-02-25 09:41:51.010285	2014-02-25 09:42:16.058797	179	41	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1977	2014-02-25 09:42:11.060783	2014-02-25 09:42:21.094929	136	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1979	2014-02-25 09:42:31.309004	2014-02-25 09:42:55.015177	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1976	2014-02-25 09:42:02.067163	2014-02-25 09:42:57.826214	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1980	2014-02-25 09:42:40.468044	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
1981	2014-02-25 09:42:48.38448	\N	136	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1978	2014-02-25 09:42:27.915177	2014-02-25 09:42:50.798105	179	42	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1982	2014-02-25 09:43:00.422736	\N	155	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
1983	2014-02-25 09:43:04.215822	\N	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
1985	2014-02-25 09:43:17.943271	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1984	2014-02-25 09:43:14.982827	2014-02-25 09:43:26.906477	136	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1986	2014-02-25 09:43:22.514545	2014-02-25 09:43:38.141424	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
1987	2014-02-25 09:43:38.848096	\N	136	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1988	2014-02-25 09:43:52.758126	\N	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1989	2014-02-25 09:43:56.136973	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
1990	2014-02-25 09:44:13.175634	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
1991	2014-02-25 09:44:18.365813	\N	155	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
1992	2014-02-25 09:44:21.440492	2014-02-25 09:44:33.189804	136	8	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1993	2014-02-25 09:44:35.361583	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1995	2014-02-25 09:44:52.427387	2014-02-25 09:44:59.623822	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
1997	2014-02-25 09:45:04.069185	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
1994	2014-02-25 09:44:50.909744	2014-02-25 09:45:08.508028	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
1996	2014-02-25 09:44:57.79645	2014-02-25 09:45:12.527926	136	9	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1998	2014-02-25 09:45:13.746605	2014-02-25 09:45:19.832218	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
2001	2014-02-25 09:45:31.793263	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2002	2014-02-25 09:45:38.363149	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2000	2014-02-25 09:45:25.317767	2014-02-25 09:45:39.541034	136	10	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1999	2014-02-25 09:45:21.111899	2014-02-25 09:45:44.348588	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
2004	2014-02-25 09:45:56.338795	\N	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2003	2014-02-25 09:45:53.104856	2014-02-25 09:46:05.226035	136	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2005	2014-02-25 09:46:18.401182	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2006	2014-02-25 09:46:25.520916	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2007	2014-02-25 09:46:37.986835	\N	136	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2008	2014-02-25 09:46:45.261515	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2009	2014-02-25 09:47:06.154292	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
2011	2014-02-25 09:47:21.572589	\N	147	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2012	2014-02-25 09:47:25.305353	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2010	2014-02-25 09:47:11.887167	2014-02-25 09:47:25.765809	136	11	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2013	2014-02-25 09:47:35.169361	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
2015	2014-02-25 09:47:48.006288	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2014	2014-02-25 09:47:37.622889	2014-02-25 09:47:49.463609	136	12	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2016	2014-02-25 09:48:00.960147	\N	136	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2017	2014-02-25 09:48:14.894454	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2020	2014-02-25 09:48:25.816334	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
2021	2014-02-25 09:48:30.086497	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2019	2014-02-25 09:48:23.293591	2014-02-25 09:48:36.476404	136	13	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2018	2014-02-25 09:48:19.037407	2014-02-25 09:48:50.056639	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
2023	2014-02-25 09:48:53.429615	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
2022	2014-02-25 09:48:43.312969	2014-02-25 09:49:13.412933	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
2024	2014-02-25 09:49:05.841432	2014-02-25 09:49:20.153927	136	14	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2025	2014-02-25 09:49:26.464199	\N	155	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2026	2014-02-25 09:49:29.091615	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2027	2014-02-25 09:49:59.008549	2014-02-25 09:50:10.094733	136	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2029	2014-02-25 09:50:24.240787	\N	155	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2028	2014-02-25 09:50:13.679921	2014-02-25 09:50:33.201453	147	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
2030	2014-02-25 09:50:48.119847	\N	136	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2033	2014-02-25 09:51:10.385979	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
2031	2014-02-25 09:50:51.274283	2014-02-25 09:51:15.793449	155	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
2032	2014-02-25 09:51:09.723156	2014-02-25 09:51:20.999544	136	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2034	2014-02-25 09:51:37.859299	\N	155	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2035	2014-02-25 09:51:56.605833	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2037	2014-02-25 09:52:56.171909	\N	136	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2036	2014-02-25 09:52:11.809006	2014-02-25 09:53:24.366767	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	t
2039	2014-02-25 09:53:21.720807	2014-02-25 09:53:33.639837	136	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2038	2014-02-25 09:53:06.281975	2014-02-25 09:53:34.770794	147	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
2040	2014-02-25 09:53:45.520593	2014-02-25 09:54:00.509893	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
2042	2014-02-25 09:54:28.322451	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2043	2014-02-25 09:54:34.469216	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2044	2014-02-25 09:55:00.753399	2014-02-25 09:55:10.910852	136	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2045	2014-02-25 09:55:17.319921	\N	155	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2046	2014-02-25 09:55:33.301765	\N	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2047	2014-02-25 09:55:41.26822	2014-02-25 09:55:51.108055	136	17	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2041	2014-02-25 09:54:16.546264	2014-02-25 09:56:02.067795	174	2	01938BB1EE4E47319738DAC239A2B141	0	f	t
2049	2014-02-25 09:56:09.324073	2014-02-25 09:56:17.774809	136	18	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2048	2014-02-25 09:55:57.578347	2014-02-25 09:56:19.569619	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
2051	2014-02-25 09:56:35.342334	\N	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2050	2014-02-25 09:56:30.10798	2014-02-25 09:56:42.970569	136	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2052	2014-02-25 09:56:54.402881	\N	136	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2053	2014-02-25 09:57:17.150907	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2054	2014-02-25 09:57:31.122111	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2055	2014-02-25 09:57:38.36279	\N	136	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2056	2014-02-25 09:58:06.802137	2014-02-25 09:58:18.216388	136	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2057	2014-02-25 09:58:24.000631	2014-02-25 09:58:39.272116	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
2058	2014-02-25 09:58:32.823917	2014-02-25 09:58:41.592292	136	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2059	2014-02-25 09:59:23.420636	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2060	2014-02-25 09:59:31.480777	\N	136	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2061	2014-02-25 09:59:54.652492	2014-02-25 10:00:06.348539	136	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2062	2014-02-25 10:00:09.332642	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2063	2014-02-25 10:00:18.408619	\N	136	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2065	2014-02-25 10:00:53.354659	\N	147	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2064	2014-02-25 10:00:43.124537	2014-02-25 10:01:01.659208	136	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2066	2014-02-25 10:01:20.978262	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2067	2014-02-25 10:01:23.055173	\N	136	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2068	2014-02-25 10:01:45.111171	2014-02-25 10:02:00.130057	136	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2069	2014-02-25 10:02:12.49088	2014-02-25 10:02:41.15772	136	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2070	2014-02-25 10:02:53.368876	\N	136	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2071	2014-02-25 10:02:54.892699	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2072	2014-02-25 10:03:05.240322	\N	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2073	2014-02-25 10:03:29.051679	2014-02-25 10:03:56.685971	136	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2074	2014-02-25 10:04:14.848835	\N	136	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2076	2014-02-25 10:04:29.610832	\N	172	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2075	2014-02-25 10:04:20.272769	2014-02-25 10:04:49.117049	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
2077	2014-02-25 10:04:50.046862	2014-02-25 10:05:14.532921	136	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2078	2014-02-25 10:05:28.5925	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2079	2014-02-25 10:06:56.653638	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2080	2014-02-25 10:06:57.746938	\N	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2081	2014-02-25 10:08:44.986237	\N	136	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2082	2014-02-25 10:09:00.695726	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2084	2014-02-25 10:09:27.110351	\N	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2083	2014-02-25 10:09:02.324696	2014-02-25 10:09:27.514976	136	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2085	2014-02-25 10:09:40.251303	2014-02-25 10:10:10.172945	136	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2086	2014-02-25 10:10:25.072204	\N	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2087	2014-02-25 10:10:43.443805	\N	147	23	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2088	2014-02-25 10:10:53.853198	\N	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2089	2014-02-25 10:11:03.734859	\N	147	23	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2090	2014-02-25 10:11:25.979247	\N	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2091	2014-02-25 10:11:45.899688	2014-02-25 10:12:20.155533	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2092	2014-02-25 10:13:32.418097	\N	136	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2093	2014-02-25 10:13:43.128616	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2094	2014-02-25 10:13:45.322662	2014-02-25 10:14:08.504544	147	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
2095	2014-02-25 10:14:48.409685	\N	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2096	2014-02-25 10:15:29.994518	2014-02-25 10:15:56.617355	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2097	2014-02-25 10:16:10.216511	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2098	2014-02-25 11:28:35.441296	2014-02-25 11:29:07.853089	183	87	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2099	2014-02-25 11:29:22.366198	2014-02-25 11:29:47.648093	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2100	2014-02-25 11:30:01.799302	\N	183	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2101	2014-02-25 11:32:46.896119	\N	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2102	2014-02-25 11:33:16.974678	2014-02-25 11:33:46.391063	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2103	2014-02-25 11:34:21.247771	\N	183	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2104	2014-02-25 11:34:51.845057	2014-02-25 11:35:21.414	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2105	2014-02-25 11:36:13.070096	\N	183	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2106	2014-02-25 11:36:56.354738	\N	183	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2107	2014-02-25 11:37:20.497651	\N	183	87	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2108	2014-02-25 11:38:38.958746	\N	183	86	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2109	2014-02-25 11:39:07.924075	\N	183	85	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2110	2014-02-25 11:40:09.923289	\N	183	84	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2111	2014-02-25 11:40:40.39116	\N	183	84	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2112	2014-02-25 11:41:36.435119	\N	183	83	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2113	2014-02-25 11:42:11.689561	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2114	2014-02-25 11:42:34.053339	\N	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2115	2014-02-25 11:43:17.502225	\N	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2116	2014-02-25 11:44:00.791622	2014-02-25 11:44:37.118144	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2117	2014-02-25 11:52:25.408898	\N	121	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2118	2014-02-25 11:52:53.940458	2014-02-25 11:53:12.322192	121	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2119	2014-02-25 11:53:24.77704	\N	121	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2120	2014-02-25 11:53:40.682151	\N	121	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2121	2014-02-25 11:53:58.798044	2014-02-25 11:54:32.235176	121	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2122	2014-02-25 11:54:44.809281	2014-02-25 11:55:14.853647	121	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2123	2014-02-25 11:55:29.015329	\N	121	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2124	2014-02-25 11:55:53.469883	2014-02-25 11:56:32.944705	121	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2125	2014-02-25 11:56:54.369534	2014-02-25 11:57:28.757535	121	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2126	2014-02-25 11:57:40.489185	2014-02-25 11:58:15.144415	121	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2127	2014-02-25 11:58:29.361657	2014-02-25 11:58:58.177667	121	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2128	2014-02-25 11:59:11.629516	2014-02-25 11:59:43.151573	121	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2129	2014-02-25 11:59:59.281153	2014-02-25 12:00:33.310549	121	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2130	2014-02-25 12:00:46.006126	2014-02-25 12:01:16.430633	121	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2131	2014-02-25 12:01:29.171589	\N	121	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2132	2014-02-25 12:02:02.254219	2014-02-25 12:02:33.79457	121	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2133	2014-02-25 12:02:48.090093	2014-02-25 12:03:19.954825	121	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2134	2014-02-25 12:03:36.628846	2014-02-25 12:04:19.837449	121	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2135	2014-02-25 12:04:31.795681	\N	121	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2136	2014-02-25 12:04:46.131474	\N	121	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2137	2014-02-25 12:05:12.87865	2014-02-25 12:05:49.626704	121	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2138	2014-02-25 12:06:05.139683	2014-02-25 12:06:41.139734	121	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2139	2014-02-25 12:07:03.939722	\N	121	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2140	2014-02-25 12:07:24.115364	2014-02-25 12:08:05.739442	121	15	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2141	2014-02-25 12:08:20.319918	2014-02-25 12:08:56.48494	121	16	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2142	2014-02-25 12:09:19.9599	\N	121	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2143	2014-02-25 12:10:03.974405	\N	121	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2144	2014-02-25 12:10:43.369674	2014-02-25 12:11:12.544777	121	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2145	2014-02-25 12:11:30.620054	2014-02-25 12:12:09.999063	121	18	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2146	2014-02-25 12:12:27.005596	\N	141	17	FC21412A7C92444EA50B30A09729330F	0	f	f
2147	2014-02-25 12:12:51.773582	2014-02-25 12:13:24.452653	121	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2149	2014-02-25 12:14:05.140919	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
2148	2014-02-25 12:13:43.024366	2014-02-25 12:14:16.586909	121	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2150	2014-02-25 12:14:29.904389	2014-02-25 12:15:07.064674	121	21	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2151	2014-02-25 12:15:52.944159	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
2152	2014-02-25 12:16:01.126104	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
2153	2014-02-25 12:35:39.551537	\N	136	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2154	2014-02-25 12:36:18.053571	\N	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2155	2014-02-25 12:38:13.917548	2014-02-25 12:38:34.110111	136	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2156	2014-02-25 12:38:48.066009	2014-02-25 12:39:14.394923	136	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2157	2014-02-25 12:39:36.066488	\N	136	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2159	2014-02-25 12:40:15.425706	2014-02-25 12:40:22.340794	197	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2160	2014-02-25 12:40:34.651068	\N	197	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2158	2014-02-25 12:40:11.979183	2014-02-25 12:40:41.263875	136	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2161	2014-02-25 12:41:00.022477	2014-02-25 12:41:14.02334	197	19	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2162	2014-02-25 12:41:11.125052	2014-02-25 12:41:32.018154	136	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2163	2014-02-25 12:41:30.607816	2014-02-25 12:41:44.754248	197	20	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2165	2014-02-25 12:41:57.888084	2014-02-25 12:42:12.858875	197	21	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2164	2014-02-25 12:41:45.006095	2014-02-25 12:42:18.677171	136	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2166	2014-02-25 12:42:23.997359	\N	209	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2169	2014-02-25 12:42:52.512601	\N	235	8	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2167	2014-02-25 12:42:26.73262	2014-02-25 12:42:55.499104	197	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2168	2014-02-25 12:42:34.737957	2014-02-25 12:43:02.633754	136	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2170	2014-02-25 12:43:04.572696	\N	209	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2171	2014-02-25 12:43:08.497493	\N	197	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2172	2014-02-25 12:43:21.818313	\N	136	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2173	2014-02-25 12:43:47.298467	2014-02-25 12:44:12.976902	197	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2174	2014-02-25 12:44:20.58847	\N	136	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2178	2014-02-25 12:45:18.373744	\N	188	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2175	2014-02-25 12:44:45.014211	2014-02-25 12:45:27.325343	186	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2177	2014-02-25 12:45:08.177441	2014-02-25 12:45:34.265832	197	23	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2176	2014-02-25 12:45:04.461559	2014-02-25 12:45:40.068854	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2181	2014-02-25 12:45:55.324874	\N	188	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2184	2014-02-25 12:46:00.341644	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2183	2014-02-25 12:45:55.95642	2014-02-25 12:46:18.084513	197	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2180	2014-02-25 12:45:46.262059	2014-02-25 12:46:25.892108	186	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2182	2014-02-25 12:45:55.824204	2014-02-25 12:46:25.898533	136	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2185	2014-02-25 12:46:19.670229	2014-02-25 12:46:26.837855	188	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2186	2014-02-25 12:46:30.66261	\N	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2179	2014-02-25 12:45:37.815464	2014-02-25 12:46:34.762063	235	8	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
2188	2014-02-25 12:46:41.911324	\N	186	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2189	2014-02-25 12:46:47.538156	\N	188	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2187	2014-02-25 12:46:32.269863	2014-02-25 12:46:59.474191	197	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2190	2014-02-25 12:47:05.857663	\N	235	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2191	2014-02-25 12:47:08.647794	\N	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2193	2014-02-25 12:47:21.778377	\N	188	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2192	2014-02-25 12:47:14.75559	2014-02-25 12:47:36.827551	136	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2194	2014-02-25 12:47:31.44495	2014-02-25 12:47:53.819248	197	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2196	2014-02-25 12:47:36.998677	2014-02-25 12:48:04.827628	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2197	2014-02-25 12:47:43.646978	2014-02-25 12:48:13.089274	188	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2198	2014-02-25 12:47:50.636106	2014-02-25 12:48:16.331924	136	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2195	2014-02-25 12:47:35.321611	2014-02-25 12:48:21.74906	186	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2199	2014-02-25 12:48:06.067688	2014-02-25 12:48:29.438372	197	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2200	2014-02-25 12:48:16.771233	2014-02-25 12:48:54.124539	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2203	2014-02-25 12:48:39.645576	2014-02-25 12:49:04.809451	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2201	2014-02-25 12:48:28.631299	2014-02-25 12:49:05.637083	188	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2202	2014-02-25 12:48:35.095629	2014-02-25 12:49:19.250419	186	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2206	2014-02-25 12:49:20.084831	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2204	2014-02-25 12:49:01.062372	2014-02-25 12:49:28.467322	197	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2208	2014-02-25 12:49:32.965272	\N	186	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2210	2014-02-25 12:49:44.07637	\N	197	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2205	2014-02-25 12:49:17.483923	2014-02-25 12:49:46.453481	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2207	2014-02-25 12:49:20.396556	2014-02-25 12:49:47.005493	188	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2212	2014-02-25 12:49:57.600091	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2215	2014-02-25 12:50:03.456423	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2209	2014-02-25 12:49:33.539076	2014-02-25 12:50:03.47394	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2216	2014-02-25 12:50:10.709428	\N	209	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2211	2014-02-25 12:49:52.47516	2014-02-25 12:50:23.530448	186	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2218	2014-02-25 12:50:27.620812	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2214	2014-02-25 12:50:00.142489	2014-02-25 12:50:33.011873	188	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2217	2014-02-25 12:50:23.736286	2014-02-25 12:50:52.927989	136	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2219	2014-02-25 12:50:30.369127	2014-02-25 12:50:56.651809	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2220	2014-02-25 12:50:36.812768	2014-02-25 12:51:06.425294	186	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2221	2014-02-25 12:50:47.781056	2014-02-25 12:51:18.820704	188	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2213	2014-02-25 12:50:00.13859	2014-02-25 12:51:20.823358	235	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
2222	2014-02-25 12:50:56.031961	\N	197	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2223	2014-02-25 12:51:06.143959	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2225	2014-02-25 12:51:24.753821	\N	209	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2227	2014-02-25 12:51:32.17415	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2229	2014-02-25 12:51:35.574863	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2230	2014-02-25 12:51:44.576297	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2226	2014-02-25 12:51:24.802779	2014-02-25 12:51:46.765897	197	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2224	2014-02-25 12:51:18.788001	2014-02-25 12:51:49.806536	186	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2232	2014-02-25 12:51:51.62831	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2228	2014-02-25 12:51:32.80073	2014-02-25 12:52:00.857441	188	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2234	2014-02-25 12:52:20.556615	\N	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2235	2014-02-25 12:52:21.177198	\N	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2238	2014-02-25 12:52:28.889487	\N	209	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2233	2014-02-25 12:52:02.988166	2014-02-25 12:52:30.402879	186	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2231	2014-02-25 12:51:45.075402	2014-02-25 12:52:31.522387	235	10	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
2237	2014-02-25 12:52:24.152562	2014-02-25 12:52:48.157692	197	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2236	2014-02-25 12:52:23.990142	2014-02-25 12:52:54.221597	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2243	2014-02-25 12:53:04.793486	\N	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2239	2014-02-25 12:52:42.864596	2014-02-25 12:53:13.30266	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2240	2014-02-25 12:52:43.403326	2014-02-25 12:53:17.433773	186	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2242	2014-02-25 12:53:02.380577	2014-02-25 12:53:25.207604	197	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2244	2014-02-25 12:53:27.040922	\N	188	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2241	2014-02-25 12:52:45.661441	2014-02-25 12:53:30.173156	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2247	2014-02-25 12:53:42.826127	\N	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2248	2014-02-25 12:53:55.371443	\N	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2245	2014-02-25 12:53:30.573484	2014-02-25 12:53:59.458883	186	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2246	2014-02-25 12:53:37.789158	2014-02-25 12:54:00.460178	197	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2249	2014-02-25 12:54:06.13914	\N	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2251	2014-02-25 12:54:19.270645	\N	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2252	2014-02-25 12:54:20.465295	\N	209	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2255	2014-02-25 12:54:36.546539	\N	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2250	2014-02-25 12:54:13.011177	2014-02-25 12:54:48.467191	186	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2256	2014-02-25 12:54:54.028586	\N	136	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2254	2014-02-25 12:54:33.697728	2014-02-25 12:54:56.541949	197	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2253	2014-02-25 12:54:20.900261	2014-02-25 12:54:58.497341	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2258	2014-02-25 12:55:05.769882	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2260	2014-02-25 12:55:11.162243	\N	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2261	2014-02-25 12:55:12.378562	\N	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2263	2014-02-25 12:55:26.508443	\N	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2264	2014-02-25 12:55:28.874234	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2259	2014-02-25 12:55:10.268106	2014-02-25 12:55:32.839312	197	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2257	2014-02-25 12:55:03.205407	2014-02-25 12:55:36.838544	186	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2262	2014-02-25 12:55:21.745828	2014-02-25 12:55:46.410252	209	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2265	2014-02-25 12:55:42.678729	2014-02-25 12:56:13.012478	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2266	2014-02-25 12:55:46.980623	2014-02-25 12:56:19.710795	197	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2267	2014-02-25 12:55:51.095197	2014-02-25 12:56:24.836777	186	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2269	2014-02-25 12:55:56.022844	2014-02-25 12:56:26.503225	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2268	2014-02-25 12:55:55.399174	2014-02-25 12:56:30.311601	188	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2270	2014-02-25 12:56:36.165676	\N	209	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2271	2014-02-25 12:56:38.833433	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2274	2014-02-25 12:56:43.277577	\N	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2275	2014-02-25 12:56:44.599068	\N	188	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2276	2014-02-25 12:57:02.372728	\N	209	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2273	2014-02-25 12:56:41.632847	2014-02-25 12:57:04.03869	197	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2277	2014-02-25 12:57:14.342631	\N	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2272	2014-02-25 12:56:39.125918	2014-02-25 12:57:15.090001	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2278	2014-02-25 12:57:28.725562	\N	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2280	2014-02-25 12:57:33.8734	\N	209	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2281	2014-02-25 12:57:36.435893	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2283	2014-02-25 12:57:57.791551	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2284	2014-02-25 12:58:03.747568	\N	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2282	2014-02-25 12:57:44.569107	2014-02-25 12:58:11.82761	197	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2279	2014-02-25 12:57:32.590329	2014-02-25 12:58:12.343084	235	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2285	2014-02-25 12:58:12.411634	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2286	2014-02-25 12:58:24.88358	\N	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2290	2014-02-25 12:58:37.603818	\N	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2287	2014-02-25 12:58:25.143717	2014-02-25 12:58:47.961808	197	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2289	2014-02-25 12:58:31.814186	2014-02-25 12:59:02.229637	209	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2291	2014-02-25 12:59:03.39845	\N	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2292	2014-02-25 12:59:11.075849	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2294	2014-02-25 12:59:16.593526	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2295	2014-02-25 12:59:19.318122	\N	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2296	2014-02-25 12:59:32.019744	\N	197	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2288	2014-02-25 12:58:28.06992	2014-02-25 12:59:32.318163	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2297	2014-02-25 12:59:35.779157	\N	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2293	2014-02-25 12:59:13.748447	2014-02-25 12:59:45.298426	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2298	2014-02-25 12:59:46.420239	\N	235	3	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2299	2014-02-25 12:59:47.47496	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2300	2014-02-25 12:59:49.477763	\N	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2303	2014-02-25 13:00:12.183448	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2302	2014-02-25 13:00:08.301203	2014-02-25 13:00:40.32694	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2301	2014-02-25 12:59:53.76009	2014-02-25 13:00:17.065621	197	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2305	2014-02-25 13:00:27.518924	\N	209	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2306	2014-02-25 13:00:34.036365	\N	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2307	2014-02-25 13:00:41.21211	\N	232	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2304	2014-02-25 13:00:16.868897	2014-02-25 13:00:46.357692	186	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2310	2014-02-25 13:01:01.171295	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2308	2014-02-25 13:00:49.477944	2014-02-25 13:01:11.54894	197	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2309	2014-02-25 13:00:58.489597	2014-02-25 13:01:31.687666	186	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2312	2014-02-25 13:01:05.674311	2014-02-25 13:01:34.377028	209	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
2313	2014-02-25 13:01:34.960859	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2314	2014-02-25 13:01:45.490391	\N	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2315	2014-02-25 13:01:56.533761	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2311	2014-02-25 13:01:02.111165	2014-02-25 13:02:36.073631	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
2316	2014-02-25 13:18:25.733346	2014-02-25 13:18:50.381568	259	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2317	2014-02-25 13:19:27.070483	2014-02-25 13:19:56.32358	259	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2318	2014-02-25 13:20:09.931569	2014-02-25 13:20:36.358471	259	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2319	2014-02-25 13:20:31.233067	2014-02-25 13:20:49.769045	909	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2321	2014-02-25 13:21:51.949823	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2320	2014-02-25 13:21:32.549008	2014-02-25 13:21:58.045788	259	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2324	2014-02-25 13:22:23.914298	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2322	2014-02-25 13:22:02.124055	2014-02-25 13:22:25.738961	270	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2325	2014-02-25 13:22:32.826832	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2323	2014-02-25 13:22:10.359555	2014-02-25 13:22:33.474703	259	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2328	2014-02-25 13:22:56.37566	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2329	2014-02-25 13:22:56.449348	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2326	2014-02-25 13:22:38.245794	2014-02-25 13:22:58.295733	270	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2331	2014-02-25 13:23:05.624584	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2332	2014-02-25 13:23:10.46601	\N	270	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2333	2014-02-25 13:23:12.236135	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2327	2014-02-25 13:22:45.360563	2014-02-25 13:23:12.971163	259	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2335	2014-02-25 13:23:28.068029	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2336	2014-02-25 13:23:38.794087	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2334	2014-02-25 13:23:24.580767	2014-02-25 13:23:50.126916	259	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2338	2014-02-25 13:23:51.232025	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2339	2014-02-25 13:23:54.618218	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2341	2014-02-25 13:24:01.428126	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2342	2014-02-25 13:24:06.953182	\N	259	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2343	2014-02-25 13:24:12.173144	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2337	2014-02-25 13:23:50.803604	2014-02-25 13:24:12.476596	270	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2344	2014-02-25 13:24:20.808935	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2346	2014-02-25 13:24:27.389133	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2347	2014-02-25 13:24:34.165878	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2349	2014-02-25 13:24:38.250002	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2351	2014-02-25 13:24:43.449542	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2352	2014-02-25 13:24:44.499848	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2345	2014-02-25 13:24:24.585221	2014-02-25 13:24:48.782022	270	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2353	2014-02-25 13:24:56.229598	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2354	2014-02-25 13:24:56.817249	\N	911	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2356	2014-02-25 13:25:01.98812	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2357	2014-02-25 13:25:06.849021	\N	905	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2358	2014-02-25 13:25:11.915955	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2350	2014-02-25 13:24:42.205653	2014-02-25 13:25:13.200234	259	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2359	2014-02-25 13:25:14.547887	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2360	2014-02-25 13:25:18.715429	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2355	2014-02-25 13:24:59.142221	2014-02-25 13:25:22.719097	270	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2363	2014-02-25 13:25:26.406152	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2364	2014-02-25 13:25:33.554693	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2365	2014-02-25 13:25:33.715927	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2366	2014-02-25 13:25:34.636541	\N	270	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2367	2014-02-25 13:25:41.780871	\N	891	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2368	2014-02-25 13:25:42.604495	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2369	2014-02-25 13:25:42.651687	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2370	2014-02-25 13:25:49.106583	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2362	2014-02-25 13:25:25.320124	2014-02-25 13:25:49.942064	259	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2371	2014-02-25 13:25:55.441442	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2372	2014-02-25 13:25:58.677215	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2373	2014-02-25 13:25:59.230516	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2340	2014-02-25 13:24:00.983349	2014-02-25 13:25:59.53392	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2374	2014-02-25 13:26:04.236618	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2375	2014-02-25 13:26:04.457317	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2376	2014-02-25 13:26:11.52321	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2378	2014-02-25 13:26:13.902609	\N	896	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2379	2014-02-25 13:26:14.408223	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2380	2014-02-25 13:26:15.755981	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2381	2014-02-25 13:26:15.868936	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2383	2014-02-25 13:26:19.38455	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2330	2014-02-25 13:23:05.616716	2014-02-25 13:26:28.75716	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2377	2014-02-25 13:26:13.865623	2014-02-25 13:26:34.661949	270	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2384	2014-02-25 13:26:27.287063	2014-02-25 13:26:52.099102	259	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2348	2014-02-25 13:24:37.073956	2014-02-25 13:26:59.356218	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2382	2014-02-25 13:26:17.82723	2014-02-25 13:28:19.915804	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2385	2014-02-25 13:26:30.83716	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2386	2014-02-25 13:26:33.259808	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2387	2014-02-25 13:26:41.205835	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2388	2014-02-25 13:26:48.058953	\N	907	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2389	2014-02-25 13:26:48.617273	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2391	2014-02-25 13:26:51.447125	\N	905	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2392	2014-02-25 13:26:53.225838	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2393	2014-02-25 13:26:56.197677	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2394	2014-02-25 13:26:57.926801	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2395	2014-02-25 13:27:00.61577	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2396	2014-02-25 13:27:04.719448	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2390	2014-02-25 13:26:49.75626	2014-02-25 13:27:08.459577	270	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2397	2014-02-25 13:27:12.273907	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2398	2014-02-25 13:27:12.69234	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2399	2014-02-25 13:27:12.917435	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2400	2014-02-25 13:27:14.2217	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2361	2014-02-25 13:25:19.266623	2014-02-25 13:27:19.322886	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2403	2014-02-25 13:27:22.31552	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2404	2014-02-25 13:27:22.735889	\N	895	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2405	2014-02-25 13:27:27.07939	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2406	2014-02-25 13:27:30.127355	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2407	2014-02-25 13:27:31.267966	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2408	2014-02-25 13:27:36.961066	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2402	2014-02-25 13:27:20.466625	2014-02-25 13:27:40.934612	270	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2401	2014-02-25 13:27:15.555891	2014-02-25 13:27:45.42623	259	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2409	2014-02-25 13:27:51.032675	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2411	2014-02-25 13:27:53.490723	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2412	2014-02-25 13:27:53.762728	\N	900	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2413	2014-02-25 13:27:54.270296	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2414	2014-02-25 13:27:55.514921	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2416	2014-02-25 13:27:56.711165	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2418	2014-02-25 13:27:58.108512	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2419	2014-02-25 13:27:58.193091	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2420	2014-02-25 13:28:01.137635	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2421	2014-02-25 13:28:01.608678	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2422	2014-02-25 13:28:07.238307	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2423	2014-02-25 13:28:10.343777	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2424	2014-02-25 13:28:11.735922	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2425	2014-02-25 13:28:13.971651	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2410	2014-02-25 13:27:53.098033	2014-02-25 13:28:15.120769	270	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2426	2014-02-25 13:28:19.44118	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2427	2014-02-25 13:28:22.570378	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2428	2014-02-25 13:28:29.172521	\N	270	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2417	2014-02-25 13:27:57.260816	2014-02-25 13:28:30.459067	259	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2429	2014-02-25 13:28:32.29627	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2430	2014-02-25 13:28:32.608346	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2431	2014-02-25 13:28:36.154841	\N	905	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2432	2014-02-25 13:28:36.401598	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2433	2014-02-25 13:28:37.239874	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2434	2014-02-25 13:28:40.630543	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2436	2014-02-25 13:28:47.823333	\N	906	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2437	2014-02-25 13:28:48.731669	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2438	2014-02-25 13:28:56.477156	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2439	2014-02-25 13:28:59.153469	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2440	2014-02-25 13:29:01.520895	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2441	2014-02-25 13:29:02.011366	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2447	2014-02-25 13:29:12.775389	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2448	2014-02-25 13:29:14.959397	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2449	2014-02-25 13:29:16.23417	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2435	2014-02-25 13:28:47.26773	2014-02-25 13:29:18.319727	259	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2450	2014-02-25 13:29:23.363033	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2451	2014-02-25 13:29:24.176294	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2444	2014-02-25 13:29:08.125149	2014-02-25 13:29:30.785179	270	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2453	2014-02-25 13:29:32.297765	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2454	2014-02-25 13:29:39.778394	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2455	2014-02-25 13:29:42.892196	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2458	2014-02-25 13:29:55.005134	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2459	2014-02-25 13:29:57.578748	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2460	2014-02-25 13:30:01.265083	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2461	2014-02-25 13:30:03.337478	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2452	2014-02-25 13:29:32.228155	2014-02-25 13:30:03.512063	259	55	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2462	2014-02-25 13:30:03.614372	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2463	2014-02-25 13:30:05.263693	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2456	2014-02-25 13:29:43.01618	2014-02-25 13:30:07.670546	270	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2464	2014-02-25 13:30:07.811797	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2442	2014-02-25 13:29:04.776297	2014-02-25 13:30:08.088957	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2465	2014-02-25 13:30:11.333603	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2466	2014-02-25 13:30:14.290001	\N	911	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2443	2014-02-25 13:29:06.342573	2014-02-25 13:30:51.168793	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2446	2014-02-25 13:29:12.061625	2014-02-25 13:31:11.879485	905	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2415	2014-02-25 13:27:55.996269	2014-02-25 13:31:24.591878	891	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2457	2014-02-25 13:29:45.25142	2014-02-25 13:32:02.3071	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2468	2014-02-25 13:30:20.844035	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2470	2014-02-25 13:30:24.789829	\N	907	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2471	2014-02-25 13:30:26.53226	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2472	2014-02-25 13:30:29.035959	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2473	2014-02-25 13:30:31.673923	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2474	2014-02-25 13:30:38.825044	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2469	2014-02-25 13:30:21.637869	2014-02-25 13:30:43.285265	270	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2467	2014-02-25 13:30:17.610173	2014-02-25 13:30:45.768438	259	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2475	2014-02-25 13:30:46.465512	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2476	2014-02-25 13:30:52.31067	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2477	2014-02-25 13:30:55.946127	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2478	2014-02-25 13:30:56.235694	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2479	2014-02-25 13:30:58.593674	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2480	2014-02-25 13:31:00.803616	\N	270	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2481	2014-02-25 13:31:02.157907	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2482	2014-02-25 13:31:09.903648	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2484	2014-02-25 13:31:12.491608	\N	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2485	2014-02-25 13:31:13.300614	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2486	2014-02-25 13:31:16.524593	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2487	2014-02-25 13:31:16.529676	\N	895	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2488	2014-02-25 13:31:17.125122	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2445	2014-02-25 13:29:11.501235	2014-02-25 13:31:18.694448	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2489	2014-02-25 13:31:33.816857	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2491	2014-02-25 13:31:39.831438	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2492	2014-02-25 13:31:41.781334	\N	891	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2493	2014-02-25 13:31:42.355301	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2494	2014-02-25 13:31:42.609211	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2495	2014-02-25 13:31:43.572982	\N	900	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2497	2014-02-25 13:31:46.409839	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2483	2014-02-25 13:31:12.070406	2014-02-25 13:31:51.691085	259	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2500	2014-02-25 13:31:52.151649	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2502	2014-02-25 13:32:01.472495	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2503	2014-02-25 13:32:07.912487	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2498	2014-02-25 13:31:49.549091	2014-02-25 13:32:07.941234	270	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2504	2014-02-25 13:32:11.008258	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2506	2014-02-25 13:32:17.050215	\N	164	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2507	2014-02-25 13:32:19.401355	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2508	2014-02-25 13:32:19.608962	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2510	2014-02-25 13:32:26.465977	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2511	2014-02-25 13:32:26.534619	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2512	2014-02-25 13:32:31.410825	\N	912	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2513	2014-02-25 13:32:32.052813	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2514	2014-02-25 13:32:34.65799	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2515	2014-02-25 13:32:35.265622	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2516	2014-02-25 13:32:38.194439	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2509	2014-02-25 13:32:19.659261	2014-02-25 13:32:39.386494	270	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2517	2014-02-25 13:32:39.828714	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2518	2014-02-25 13:32:39.954363	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2519	2014-02-25 13:32:41.827597	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2520	2014-02-25 13:32:48.748664	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2505	2014-02-25 13:32:13.519899	2014-02-25 13:32:49.525458	259	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2524	2014-02-25 13:33:03.469027	\N	891	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2525	2014-02-25 13:33:08.521213	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2521	2014-02-25 13:32:51.66697	2014-02-25 13:33:13.215658	270	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2526	2014-02-25 13:33:15.528494	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2527	2014-02-25 13:33:16.32728	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2528	2014-02-25 13:33:21.515903	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2530	2014-02-25 13:33:28.666406	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2523	2014-02-25 13:33:01.505982	2014-02-25 13:33:29.053848	259	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2490	2014-02-25 13:31:39.351368	2014-02-25 13:33:39.514241	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2532	2014-02-25 13:33:41.985394	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2533	2014-02-25 13:33:42.664522	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2496	2014-02-25 13:31:44.021507	2014-02-25 13:33:43.252552	893	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2534	2014-02-25 13:33:43.884744	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2535	2014-02-25 13:33:44.161683	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2529	2014-02-25 13:33:25.229014	2014-02-25 13:33:46.028347	270	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2499	2014-02-25 13:31:51.713992	2014-02-25 13:33:50.221945	905	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2538	2014-02-25 13:33:58.915086	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2539	2014-02-25 13:33:59.231389	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2540	2014-02-25 13:34:02.441062	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2541	2014-02-25 13:34:04.128968	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2542	2014-02-25 13:34:12.80896	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2543	2014-02-25 13:34:13.964829	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2531	2014-02-25 13:33:41.169542	2014-02-25 13:34:16.580096	259	60	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2544	2014-02-25 13:34:19.301422	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2545	2014-02-25 13:34:19.393725	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2537	2014-02-25 13:33:58.58999	2014-02-25 13:34:20.137592	270	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2546	2014-02-25 13:34:20.409105	\N	905	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2547	2014-02-25 13:34:25.591399	\N	903	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2548	2014-02-25 13:34:31.886859	2014-02-25 13:34:54.474492	270	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2501	2014-02-25 13:31:55.772924	2014-02-25 13:34:56.362766	909	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2536	2014-02-25 13:33:56.709374	2014-02-25 13:36:22.347929	893	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2549	2014-02-25 13:34:32.932499	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2522	2014-02-25 13:32:51.955232	2014-02-25 13:34:32.952059	911	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2550	2014-02-25 13:34:40.35171	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2551	2014-02-25 13:34:47.905539	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2552	2014-02-25 13:34:49.990696	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2553	2014-02-25 13:34:52.923136	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2554	2014-02-25 13:35:04.233229	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2556	2014-02-25 13:35:07.385085	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2557	2014-02-25 13:35:07.688959	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2558	2014-02-25 13:35:12.836772	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2559	2014-02-25 13:35:14.903747	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2560	2014-02-25 13:35:20.573926	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2561	2014-02-25 13:35:27.714177	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2562	2014-02-25 13:35:28.80882	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2563	2014-02-25 13:35:29.250792	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2555	2014-02-25 13:35:06.372474	2014-02-25 13:35:29.484881	270	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2565	2014-02-25 13:35:32.288644	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2566	2014-02-25 13:35:40.172901	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2568	2014-02-25 13:35:45.371912	\N	909	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2569	2014-02-25 13:35:46.371981	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2570	2014-02-25 13:35:52.942159	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2571	2014-02-25 13:35:54.491825	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2572	2014-02-25 13:35:55.957493	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2573	2014-02-25 13:35:57.756018	\N	164	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2574	2014-02-25 13:35:57.834813	\N	891	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2575	2014-02-25 13:35:59.071228	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2576	2014-02-25 13:35:59.955534	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2564	2014-02-25 13:35:31.564513	2014-02-25 13:36:00.855254	259	61	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2577	2014-02-25 13:36:01.778066	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2578	2014-02-25 13:36:01.948765	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2567	2014-02-25 13:35:41.241698	2014-02-25 13:36:01.996501	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2579	2014-02-25 13:36:09.888415	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2581	2014-02-25 13:36:13.272029	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2582	2014-02-25 13:36:19.011978	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2583	2014-02-25 13:36:23.543743	\N	899	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2584	2014-02-25 13:36:25.641841	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2585	2014-02-25 13:36:28.421274	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2586	2014-02-25 13:36:37.980135	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2587	2014-02-25 13:36:43.285906	\N	913	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2588	2014-02-25 13:36:43.34238	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2580	2014-02-25 13:36:12.800311	2014-02-25 13:36:45.628679	259	62	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2589	2014-02-25 13:36:49.144021	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2590	2014-02-25 13:36:55.302817	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2591	2014-02-25 13:36:56.381502	\N	893	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2592	2014-02-25 13:36:56.611996	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2593	2014-02-25 13:36:56.620586	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2594	2014-02-25 13:36:58.002518	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2595	2014-02-25 13:37:00.359537	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2596	2014-02-25 13:37:01.301606	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2597	2014-02-25 13:37:01.377601	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2599	2014-02-25 13:37:12.90744	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2600	2014-02-25 13:37:26.223808	\N	164	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2601	2014-02-25 13:37:32.887189	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2603	2014-02-25 13:37:42.557423	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2604	2014-02-25 13:37:44.31405	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2605	2014-02-25 13:37:49.791679	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2606	2014-02-25 13:37:53.37637	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2607	2014-02-25 13:37:56.077729	\N	270	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2608	2014-02-25 13:38:01.779828	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2609	2014-02-25 13:38:07.378038	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2610	2014-02-25 13:38:08.475858	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2611	2014-02-25 13:38:09.206084	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2612	2014-02-25 13:38:13.57306	\N	893	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2613	2014-02-25 13:38:15.71873	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2614	2014-02-25 13:38:17.586358	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2615	2014-02-25 13:38:18.013935	\N	909	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2602	2014-02-25 13:37:41.567843	2014-02-25 13:38:18.374768	259	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2616	2014-02-25 13:38:18.48385	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2617	2014-02-25 13:38:19.600493	\N	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2618	2014-02-25 13:38:23.443082	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2619	2014-02-25 13:38:30.199958	\N	259	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2620	2014-02-25 13:38:37.027177	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2621	2014-02-25 13:38:39.018759	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2622	2014-02-25 13:38:44.222944	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2623	2014-02-25 13:38:52.69041	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2624	2014-02-25 13:38:56.317842	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2626	2014-02-25 13:39:06.734825	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2627	2014-02-25 13:39:12.465237	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2628	2014-02-25 13:39:13.041649	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2629	2014-02-25 13:39:14.507667	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2630	2014-02-25 13:39:18.66542	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2625	2014-02-25 13:39:05.604621	2014-02-25 13:39:24.744558	270	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2598	2014-02-25 13:37:11.447889	2014-02-25 13:41:11.411831	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2631	2014-02-25 13:39:25.03353	\N	911	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2632	2014-02-25 13:39:25.772397	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2633	2014-02-25 13:39:26.440789	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2634	2014-02-25 13:39:29.94916	\N	164	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2635	2014-02-25 13:39:32.173153	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2636	2014-02-25 13:39:36.221438	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2637	2014-02-25 13:39:38.297292	\N	909	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2638	2014-02-25 13:39:47.110193	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2639	2014-02-25 13:39:49.73655	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2640	2014-02-25 13:39:54.121386	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2641	2014-02-25 13:39:59.982789	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2642	2014-02-25 13:40:15.668685	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2643	2014-02-25 13:40:31.417974	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2644	2014-02-25 13:40:31.432955	\N	892	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2645	2014-02-25 13:40:32.82734	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2646	2014-02-25 13:40:33.127729	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2647	2014-02-25 13:40:33.292164	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2648	2014-02-25 13:40:37.380434	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2650	2014-02-25 13:40:43.433989	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2651	2014-02-25 13:40:45.655626	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2652	2014-02-25 13:40:52.149609	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2653	2014-02-25 13:40:52.50053	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2654	2014-02-25 13:41:03.586158	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2649	2014-02-25 13:40:40.689931	2014-02-25 13:41:04.359778	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2655	2014-02-25 13:41:08.748784	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2656	2014-02-25 13:41:10.03295	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2657	2014-02-25 13:41:23.19891	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2658	2014-02-25 13:41:25.056713	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2659	2014-02-25 13:41:31.280696	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2661	2014-02-25 13:41:35.501416	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2662	2014-02-25 13:41:38.007897	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2664	2014-02-25 13:41:55.447312	\N	895	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2665	2014-02-25 13:41:57.494609	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2660	2014-02-25 13:41:32.252642	2014-02-25 13:41:59.969011	259	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2666	2014-02-25 13:42:03.595147	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2667	2014-02-25 13:42:04.088801	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2668	2014-02-25 13:42:04.842821	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2669	2014-02-25 13:42:06.088439	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2670	2014-02-25 13:42:09.531108	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2663	2014-02-25 13:41:38.739637	2014-02-25 13:42:16.33569	270	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2672	2014-02-25 13:42:19.115931	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2673	2014-02-25 13:42:20.233515	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2674	2014-02-25 13:42:26.900713	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2675	2014-02-25 13:42:27.012197	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2676	2014-02-25 13:42:30.876597	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2677	2014-02-25 13:42:33.430853	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2678	2014-02-25 13:42:33.762497	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2679	2014-02-25 13:42:34.877738	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2680	2014-02-25 13:42:37.378778	\N	896	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2681	2014-02-25 13:42:39.378319	\N	270	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2682	2014-02-25 13:42:43.379419	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2683	2014-02-25 13:42:44.821591	\N	901	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2684	2014-02-25 13:42:46.346464	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2671	2014-02-25 13:42:12.75567	2014-02-25 13:42:46.357123	259	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2685	2014-02-25 13:42:49.44755	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2686	2014-02-25 13:42:49.789439	\N	910	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2687	2014-02-25 13:42:57.72709	\N	259	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2688	2014-02-25 13:43:07.162426	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2689	2014-02-25 13:43:07.853949	\N	909	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2690	2014-02-25 13:43:09.310122	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2691	2014-02-25 13:43:09.622037	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2692	2014-02-25 13:43:12.411906	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2693	2014-02-25 13:43:13.318425	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2694	2014-02-25 13:43:14.985677	\N	259	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2696	2014-02-25 13:43:26.817025	\N	898	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2697	2014-02-25 13:43:30.801546	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2698	2014-02-25 13:43:31.480459	\N	906	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2699	2014-02-25 13:43:33.176335	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2700	2014-02-25 13:43:33.917309	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2701	2014-02-25 13:43:34.940259	\N	907	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2702	2014-02-25 13:43:40.825487	\N	909	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2703	2014-02-25 13:43:47.225724	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2704	2014-02-25 13:43:55.730244	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2705	2014-02-25 13:43:56.232477	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2695	2014-02-25 13:43:25.398089	2014-02-25 13:43:58.284785	259	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2706	2014-02-25 13:43:58.514058	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2707	2014-02-25 13:44:00.799111	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2708	2014-02-25 13:44:00.932004	\N	895	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2709	2014-02-25 13:44:01.966915	\N	902	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2710	2014-02-25 13:44:07.467916	\N	897	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2711	2014-02-25 13:44:15.665936	\N	259	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2712	2014-02-25 13:44:26.477658	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2713	2014-02-25 13:44:29.011529	\N	903	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2714	2014-02-25 13:44:31.010234	\N	914	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2715	2014-02-25 13:44:33.480539	\N	900	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2717	2014-02-25 13:44:51.994893	\N	912	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2718	2014-02-25 13:44:58.011606	\N	894	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2719	2014-02-25 13:45:07.346092	\N	908	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2716	2014-02-25 13:44:39.278804	2014-02-25 13:45:11.058492	259	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2721	2014-02-25 13:45:55.367316	\N	270	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2720	2014-02-25 13:45:30.01157	2014-02-25 13:45:59.200524	259	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2722	2014-02-25 13:46:11.400811	2014-02-25 13:46:39.315998	259	69	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2724	2014-02-25 13:47:41.764654	\N	270	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2723	2014-02-25 13:47:28.036076	2014-02-25 13:47:57.24316	259	70	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2725	2014-02-25 13:48:26.355479	2014-02-25 13:49:00.834589	259	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2727	2014-02-25 13:49:48.262537	\N	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2726	2014-02-25 13:49:14.854599	2014-02-25 13:49:50.077966	259	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2728	2014-02-25 13:50:02.892983	2014-02-25 13:50:42.336852	259	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2729	2014-02-25 13:50:54.708696	2014-02-25 13:51:28.281828	259	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2730	2014-02-25 13:51:15.223715	2014-02-25 13:51:39.163772	270	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2731	2014-02-25 13:51:42.04751	2014-02-25 13:52:16.364036	259	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2732	2014-02-25 13:52:34.659168	2014-02-25 13:53:05.825383	259	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2733	2014-02-25 13:53:26.528538	\N	259	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2734	2014-02-25 13:53:42.789577	2014-02-25 13:54:10.365177	259	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2736	2014-02-25 13:54:25.694338	2014-02-25 13:54:48.943221	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2737	2014-02-25 13:55:01.747871	\N	270	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2735	2014-02-25 13:54:25.182523	2014-02-25 13:55:03.749757	259	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2738	2014-02-25 13:55:15.775233	2014-02-25 13:55:55.338549	259	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2739	2014-02-25 13:55:27.468091	2014-02-25 13:56:08.780464	270	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2740	2014-02-25 13:56:45.29013	2014-02-25 13:57:06.943422	270	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2742	2014-02-25 13:57:40.240191	\N	259	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2741	2014-02-25 13:57:21.22747	2014-02-25 13:57:46.158166	270	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2743	2014-02-25 13:57:57.619342	2014-02-25 13:58:38.120167	259	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2744	2014-02-25 13:58:12.14899	2014-02-25 13:58:41.841597	270	42	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2745	2014-02-25 13:59:03.52096	\N	270	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2746	2014-02-25 13:59:58.111414	2014-02-25 14:00:27.369776	259	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2747	2014-02-25 14:00:38.755797	2014-02-25 14:01:10.10695	259	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
2749	2014-02-25 14:09:48.308345	\N	354	6	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2750	2014-02-25 14:10:05.138437	\N	354	6	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2753	2014-02-25 14:10:25.679282	\N	513	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2754	2014-02-25 14:10:27.473764	\N	345	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2752	2014-02-25 14:10:14.845363	2014-02-25 14:10:36.271594	393	7	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2748	2014-02-25 14:09:46.403199	2014-02-25 14:10:52.533201	359	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2758	2014-02-25 14:11:06.337209	\N	341	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2756	2014-02-25 14:10:50.096966	2014-02-25 14:11:12.147259	393	8	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2755	2014-02-25 14:10:45.1693	2014-02-25 14:11:13.140482	354	6	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2760	2014-02-25 14:11:27.20928	\N	359	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2751	2014-02-25 14:10:13.642595	2014-02-25 14:11:30.870088	368	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2761	2014-02-25 14:11:31.951341	\N	372	5	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2762	2014-02-25 14:11:36.056005	\N	354	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2759	2014-02-25 14:11:26.197215	2014-02-25 14:11:48.834726	393	9	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2763	2014-02-25 14:11:53.482632	\N	368	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2765	2014-02-25 14:12:07.933876	\N	513	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2767	2014-02-25 14:12:09.364359	\N	354	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2764	2014-02-25 14:12:01.683921	2014-02-25 14:12:19.901187	393	10	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2768	2014-02-25 14:12:20.897891	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2769	2014-02-25 14:12:21.513155	\N	359	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2770	2014-02-25 14:12:22.00291	\N	355	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
2771	2014-02-25 14:12:28.946145	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2772	2014-02-25 14:12:32.373423	\N	377	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2757	2014-02-25 14:10:55.216411	2014-02-25 14:12:40.824755	361	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2773	2014-02-25 14:12:41.018669	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2774	2014-02-25 14:12:41.517785	\N	393	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
2775	2014-02-25 14:12:43.227398	\N	354	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2776	2014-02-25 14:12:46.422236	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2777	2014-02-25 14:12:47.199385	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2779	2014-02-25 14:12:55.37875	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2766	2014-02-25 14:12:08.958448	2014-02-25 14:13:01.287399	372	4	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2781	2014-02-25 14:13:01.313335	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2778	2014-02-25 14:12:47.462013	2014-02-25 14:13:12.663136	355	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2785	2014-02-25 14:13:18.957531	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2780	2014-02-25 14:12:55.746773	2014-02-25 14:13:21.430148	393	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2787	2014-02-25 14:13:21.854454	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2788	2014-02-25 14:13:22.638158	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2782	2014-02-25 14:13:04.562178	2014-02-25 14:13:32.372966	354	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2792	2014-02-25 14:13:42.119492	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2793	2014-02-25 14:13:52.291369	\N	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2786	2014-02-25 14:13:19.737103	2014-02-25 14:13:55.130763	372	5	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2794	2014-02-25 14:13:57.454038	\N	377	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2789	2014-02-25 14:13:29.512501	2014-02-25 14:14:02.829632	355	7	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2791	2014-02-25 14:13:37.345027	2014-02-25 14:14:05.550219	393	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2796	2014-02-25 14:14:07.625761	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2795	2014-02-25 14:14:06.110099	2014-02-25 14:15:23.41289	359	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2784	2014-02-25 14:13:14.013139	2014-02-25 14:15:28.372963	361	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2797	2014-02-25 14:14:17.756198	\N	393	3	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
2799	2014-02-25 14:14:19.590802	\N	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2800	2014-02-25 14:14:19.616779	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2802	2014-02-25 14:14:33.631763	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2804	2014-02-25 14:14:38.433631	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2805	2014-02-25 14:14:39.408624	\N	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2790	2014-02-25 14:13:29.960891	2014-02-25 14:14:55.891126	368	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2803	2014-02-25 14:14:37.114876	2014-02-25 14:14:58.011144	393	3	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2783	2014-02-25 14:13:12.737391	2014-02-25 14:15:02.613484	513	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2801	2014-02-25 14:14:21.926455	2014-02-25 14:15:05.017746	355	8	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2807	2014-02-25 14:15:05.300321	\N	357	8	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2798	2014-02-25 14:14:18.198792	2014-02-25 14:15:14.236091	372	6	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2809	2014-02-25 14:15:17.753887	\N	363	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2811	2014-02-25 14:15:19.550786	\N	350	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2812	2014-02-25 14:15:21.569148	\N	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2813	2014-02-25 14:15:22.906489	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2814	2014-02-25 14:15:23.272572	\N	341	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2816	2014-02-25 14:15:32.011611	\N	368	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2817	2014-02-25 14:15:33.463695	\N	372	7	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2808	2014-02-25 14:15:11.030806	2014-02-25 14:15:37.925943	393	4	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2818	2014-02-25 14:15:41.093855	\N	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2815	2014-02-25 14:15:23.304519	2014-02-25 14:15:49.40172	355	9	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2820	2014-02-25 14:15:50.965354	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2822	2014-02-25 14:15:54.144055	\N	361	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2823	2014-02-25 14:16:01.120945	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2824	2014-02-25 14:16:02.429498	\N	357	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2827	2014-02-25 14:16:08.33929	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2828	2014-02-25 14:16:10.452645	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2829	2014-02-25 14:16:18.63017	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2821	2014-02-25 14:15:53.072001	2014-02-25 14:16:18.970486	393	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2830	2014-02-25 14:16:26.039373	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2831	2014-02-25 14:16:26.608241	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2806	2014-02-25 14:14:51.208809	2014-02-25 14:16:30.618897	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2826	2014-02-25 14:16:05.860367	2014-02-25 14:16:37.52032	355	10	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2833	2014-02-25 14:16:41.09568	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2825	2014-02-25 14:16:04.847579	2014-02-25 14:16:41.245479	354	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2834	2014-02-25 14:16:41.321527	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2835	2014-02-25 14:16:41.71834	\N	341	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2838	2014-02-25 14:16:45.864316	\N	372	6	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2839	2014-02-25 14:16:47.498298	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2810	2014-02-25 14:15:17.760681	2014-02-25 14:16:49.886355	513	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2840	2014-02-25 14:16:51.383306	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2841	2014-02-25 14:16:51.494367	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2832	2014-02-25 14:16:32.352514	2014-02-25 14:16:56.812804	393	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2843	2014-02-25 14:16:59.515852	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2846	2014-02-25 14:17:07.025459	\N	341	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2847	2014-02-25 14:17:07.196466	\N	350	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2848	2014-02-25 14:17:09.924706	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2849	2014-02-25 14:17:10.138521	\N	357	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2819	2014-02-25 14:15:42.894747	2014-02-25 14:17:16.026814	359	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2837	2014-02-25 14:16:45.694056	2014-02-25 14:17:19.917562	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2852	2014-02-25 14:17:28.696553	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2842	2014-02-25 14:16:59.512232	2014-02-25 14:17:30.100225	354	9	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2853	2014-02-25 14:17:34.297977	\N	382	3	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2850	2014-02-25 14:17:10.453566	2014-02-25 14:17:36.720608	393	7	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2854	2014-02-25 14:17:39.19522	\N	359	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2855	2014-02-25 14:17:42.774285	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2851	2014-02-25 14:17:15.354104	2014-02-25 14:17:46.931079	372	5	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2856	2014-02-25 14:17:46.949842	\N	354	10	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2857	2014-02-25 14:17:49.960864	\N	393	8	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
2836	2014-02-25 14:16:42.158316	2014-02-25 14:17:50.391189	391	5	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2858	2014-02-25 14:17:51.952803	\N	341	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2859	2014-02-25 14:18:00.89487	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2860	2014-02-25 14:18:03.32407	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2862	2014-02-25 14:18:03.512698	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2863	2014-02-25 14:18:04.657167	\N	350	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2864	2014-02-25 14:18:07.683718	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2865	2014-02-25 14:18:07.695106	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2866	2014-02-25 14:18:08.790942	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2870	2014-02-25 14:18:22.635817	\N	350	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2871	2014-02-25 14:18:28.489779	\N	341	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2872	2014-02-25 14:18:29.228819	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2861	2014-02-25 14:18:03.498515	2014-02-25 14:18:36.933899	372	6	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2874	2014-02-25 14:18:39.530187	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2875	2014-02-25 14:18:41.878557	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2876	2014-02-25 14:18:47.46634	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2868	2014-02-25 14:18:13.545141	2014-02-25 14:18:49.015089	354	9	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2844	2014-02-25 14:17:05.488432	2014-02-25 14:19:01.953736	361	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2845	2014-02-25 14:17:06.118319	2014-02-25 14:19:02.578439	513	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2873	2014-02-25 14:18:38.082166	2014-02-25 14:19:05.677815	393	8	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2867	2014-02-25 14:18:12.956636	2014-02-25 14:19:22.422061	391	6	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2869	2014-02-25 14:18:13.888671	2014-02-25 14:19:51.449612	359	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2877	2014-02-25 14:18:50.785842	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2878	2014-02-25 14:18:59.402259	\N	368	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2879	2014-02-25 14:18:59.694916	\N	341	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2880	2014-02-25 14:19:03.758911	\N	357	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2881	2014-02-25 14:19:04.723561	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2882	2014-02-25 14:19:08.027475	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2884	2014-02-25 14:19:17.316396	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2885	2014-02-25 14:19:19.913436	\N	354	10	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2886	2014-02-25 14:19:24.424382	\N	361	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2887	2014-02-25 14:19:27.446356	\N	513	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2888	2014-02-25 14:19:30.539185	\N	514	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2883	2014-02-25 14:19:13.321566	2014-02-25 14:19:32.339225	372	7	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2889	2014-02-25 14:19:33.944625	\N	357	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2890	2014-02-25 14:19:35.146932	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2891	2014-02-25 14:19:37.295126	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2893	2014-02-25 14:19:39.248155	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2894	2014-02-25 14:19:39.985827	\N	391	7	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2895	2014-02-25 14:19:40.14851	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2898	2014-02-25 14:19:42.430021	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2899	2014-02-25 14:19:43.474521	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2900	2014-02-25 14:19:47.598253	\N	341	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2901	2014-02-25 14:19:49.26897	\N	363	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2903	2014-02-25 14:19:54.335988	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2904	2014-02-25 14:19:57.688855	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2906	2014-02-25 14:20:02.907737	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2892	2014-02-25 14:19:38.508953	2014-02-25 14:20:07.97271	393	9	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2907	2014-02-25 14:20:10.385765	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2909	2014-02-25 14:20:12.370791	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2911	2014-02-25 14:20:16.887984	\N	363	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2914	2014-02-25 14:20:21.771579	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2916	2014-02-25 14:20:23.590297	\N	357	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2917	2014-02-25 14:20:24.937224	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2902	2014-02-25 14:19:50.327198	2014-02-25 14:20:27.566969	354	10	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
2918	2014-02-25 14:20:41.17487	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2919	2014-02-25 14:20:42.381048	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2920	2014-02-25 14:20:43.407152	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2910	2014-02-25 14:20:13.896361	2014-02-25 14:20:43.423082	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2921	2014-02-25 14:20:45.392172	\N	363	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2922	2014-02-25 14:20:45.395921	\N	354	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2923	2014-02-25 14:20:46.641863	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2915	2014-02-25 14:20:21.873679	2014-02-25 14:20:47.667974	393	10	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2905	2014-02-25 14:19:58.724215	2014-02-25 14:20:49.516364	372	8	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2896	2014-02-25 14:19:40.679501	2014-02-25 14:20:53.237018	513	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2924	2014-02-25 14:20:55.064483	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2925	2014-02-25 14:20:56.206533	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2926	2014-02-25 14:20:59.473451	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2927	2014-02-25 14:21:00.473969	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2928	2014-02-25 14:21:01.193372	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2929	2014-02-25 14:21:02.306774	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2931	2014-02-25 14:21:07.867768	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2932	2014-02-25 14:21:08.614848	\N	372	9	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2912	2014-02-25 14:20:20.233882	2014-02-25 14:21:11.365879	391	7	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2933	2014-02-25 14:21:12.979052	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2934	2014-02-25 14:21:14.603199	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2935	2014-02-25 14:21:15.292808	\N	368	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2936	2014-02-25 14:21:17.152177	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2937	2014-02-25 14:21:17.941033	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2938	2014-02-25 14:21:19.11848	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2939	2014-02-25 14:21:24.263107	\N	513	7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2940	2014-02-25 14:21:25.901387	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2942	2014-02-25 14:21:29.842109	\N	354	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2943	2014-02-25 14:21:33.59363	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2944	2014-02-25 14:21:34.436009	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2908	2014-02-25 14:20:11.238802	2014-02-25 14:21:35.99847	359	7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2945	2014-02-25 14:21:37.028458	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2947	2014-02-25 14:21:44.561987	\N	354	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2949	2014-02-25 14:21:47.338158	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2913	2014-02-25 14:20:21.693822	2014-02-25 14:21:47.408134	361	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2950	2014-02-25 14:21:54.958149	\N	393	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2951	2014-02-25 14:21:55.664964	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2941	2014-02-25 14:21:28.236283	2014-02-25 14:21:57.048034	391	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2952	2014-02-25 14:21:58.109203	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2954	2014-02-25 14:22:04.017699	\N	361	5	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2955	2014-02-25 14:22:11.681781	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2957	2014-02-25 14:22:14.508005	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2958	2014-02-25 14:22:14.557394	\N	359	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2960	2014-02-25 14:22:15.143171	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2953	2014-02-25 14:21:59.517988	2014-02-25 14:22:28.753387	372	8	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2948	2014-02-25 14:21:45.583855	2014-02-25 14:22:38.556402	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2959	2014-02-25 14:22:14.568651	2014-02-25 14:23:22.080167	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2930	2014-02-25 14:21:06.272144	2014-02-25 14:24:05.299855	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2946	2014-02-25 14:21:42.908266	2014-02-25 14:24:44.559464	513	7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2961	2014-02-25 14:22:16.139394	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2897	2014-02-25 14:19:42.228086	2014-02-25 14:22:16.516795	350	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2964	2014-02-25 14:22:23.415636	\N	363	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2965	2014-02-25 14:22:24.974082	\N	357	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2967	2014-02-25 14:22:39.029522	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2970	2014-02-25 14:22:56.157642	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2971	2014-02-25 14:22:56.678565	\N	359	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2972	2014-02-25 14:22:58.324848	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2973	2014-02-25 14:23:02.36586	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2956	2014-02-25 14:22:13.765336	2014-02-25 14:23:02.949141	391	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2968	2014-02-25 14:22:42.479256	2014-02-25 14:23:04.290623	372	9	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2974	2014-02-25 14:23:11.727387	\N	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2975	2014-02-25 14:23:13.830012	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2977	2014-02-25 14:23:15.38577	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2978	2014-02-25 14:23:16.577593	\N	359	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2979	2014-02-25 14:23:16.66967	\N	391	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2966	2014-02-25 14:22:31.677399	2014-02-25 14:23:21.769794	361	5	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2981	2014-02-25 14:23:25.98694	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2963	2014-02-25 14:22:22.716714	2014-02-25 14:23:26.353056	354	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
2982	2014-02-25 14:23:34.716162	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2983	2014-02-25 14:23:36.961257	\N	392	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2980	2014-02-25 14:23:22.890643	2014-02-25 14:23:43.665358	372	10	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2987	2014-02-25 14:23:57.992691	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
2988	2014-02-25 14:24:01.999625	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2989	2014-02-25 14:24:03.032331	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2990	2014-02-25 14:24:03.352745	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2991	2014-02-25 14:24:04.219787	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2993	2014-02-25 14:24:06.04006	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2994	2014-02-25 14:24:07.242531	\N	391	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2995	2014-02-25 14:24:07.256364	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2996	2014-02-25 14:24:14.781221	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2997	2014-02-25 14:24:20.466804	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2998	2014-02-25 14:24:21.66706	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
2962	2014-02-25 14:22:18.270089	2014-02-25 14:24:23.571065	393	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2999	2014-02-25 14:24:23.583412	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3000	2014-02-25 14:24:25.995406	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3001	2014-02-25 14:24:27.959862	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
2984	2014-02-25 14:23:37.524536	2014-02-25 14:24:30.223083	361	6	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3002	2014-02-25 14:24:34.58036	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3003	2014-02-25 14:24:37.834234	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3004	2014-02-25 14:24:38.131541	\N	377	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3005	2014-02-25 14:24:38.505737	\N	393	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2969	2014-02-25 14:22:51.465218	2014-02-25 14:24:38.884869	350	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3006	2014-02-25 14:24:39.078914	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2992	2014-02-25 14:24:05.433426	2014-02-25 14:24:41.535074	372	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
2985	2014-02-25 14:23:40.741401	2014-02-25 14:24:42.670058	354	2	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3010	2014-02-25 14:24:56.862065	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3011	2014-02-25 14:24:56.868863	\N	372	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
3012	2014-02-25 14:24:56.994589	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3013	2014-02-25 14:24:58.990319	\N	391	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3014	2014-02-25 14:25:00.519403	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3016	2014-02-25 14:25:06.748301	\N	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3017	2014-02-25 14:25:12.438808	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3018	2014-02-25 14:25:15.018328	\N	513	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3019	2014-02-25 14:25:16.176477	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3020	2014-02-25 14:25:16.390419	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3021	2014-02-25 14:25:18.016773	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3022	2014-02-25 14:25:23.927851	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3023	2014-02-25 14:25:27.416658	\N	392	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3024	2014-02-25 14:25:28.486588	\N	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
2976	2014-02-25 14:23:14.108764	2014-02-25 14:25:29.21907	368	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3025	2014-02-25 14:25:35.508577	\N	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3009	2014-02-25 14:24:52.168199	2014-02-25 14:25:39.673008	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3008	2014-02-25 14:24:44.546401	2014-02-25 14:25:43.093451	361	7	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
2986	2014-02-25 14:23:46.18757	2014-02-25 14:25:48.978099	359	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3026	2014-02-25 14:25:50.709601	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3027	2014-02-25 14:25:52.186013	\N	391	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3029	2014-02-25 14:25:53.592595	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3030	2014-02-25 14:25:57.424597	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3031	2014-02-25 14:25:58.775657	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3032	2014-02-25 14:26:00.974335	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3033	2014-02-25 14:26:06.430273	\N	361	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3034	2014-02-25 14:26:06.851169	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3035	2014-02-25 14:26:07.655431	\N	359	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3015	2014-02-25 14:25:04.168521	2014-02-25 14:26:25.962404	350	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3039	2014-02-25 14:26:27.276418	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3040	2014-02-25 14:26:32.243503	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3041	2014-02-25 14:26:33.907737	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3007	2014-02-25 14:24:41.586511	2014-02-25 14:26:50.011482	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3028	2014-02-25 14:25:52.522469	2014-02-25 14:31:59.946764	393	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3037	2014-02-25 14:26:17.526091	2014-02-25 14:31:11.547325	391	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3038	2014-02-25 14:26:18.010949	2014-02-25 14:31:44.677064	368	5	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3042	2014-02-25 14:26:35.26013	\N	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3044	2014-02-25 14:26:48.213632	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3045	2014-02-25 14:26:50.352852	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3046	2014-02-25 14:26:50.758383	\N	350	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3048	2014-02-25 14:26:52.056577	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3049	2014-02-25 14:26:53.310565	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3050	2014-02-25 14:31:11.691724	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3036	2014-02-25 14:26:08.058175	2014-02-25 14:31:11.747078	372	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3047	2014-02-25 14:26:51.383127	2014-02-25 14:31:13.719099	359	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3051	2014-02-25 14:31:14.756088	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3043	2014-02-25 14:26:46.651986	2014-02-25 14:31:16.3609	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3052	2014-02-25 14:31:16.532556	\N	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3053	2014-02-25 14:31:20.454375	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3055	2014-02-25 14:31:28.253635	\N	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3056	2014-02-25 14:31:28.894098	\N	361	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3057	2014-02-25 14:31:29.960101	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3058	2014-02-25 14:31:30.148609	\N	345	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3061	2014-02-25 14:31:33.712144	\N	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3062	2014-02-25 14:31:36.476629	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3063	2014-02-25 14:31:41.582138	\N	359	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3064	2014-02-25 14:31:43.591596	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3066	2014-02-25 14:31:47.651311	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3067	2014-02-25 14:31:49.389031	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3068	2014-02-25 14:31:49.777205	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3069	2014-02-25 14:31:50.361153	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3054	2014-02-25 14:31:20.504468	2014-02-25 14:31:59.77445	372	4	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3070	2014-02-25 14:32:00.316958	\N	394	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3071	2014-02-25 14:32:02.131648	\N	514	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3072	2014-02-25 14:32:02.867485	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3059	2014-02-25 14:31:30.535079	2014-02-25 14:32:07.581751	391	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3075	2014-02-25 14:32:13.863989	\N	393	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3060	2014-02-25 14:31:30.672661	2014-02-25 14:32:20.661731	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3079	2014-02-25 14:32:20.776947	\N	383	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3080	2014-02-25 14:32:23.134266	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3081	2014-02-25 14:32:24.7159	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3083	2014-02-25 14:32:34.208213	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3084	2014-02-25 14:32:42.392482	\N	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3085	2014-02-25 14:32:42.437604	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3086	2014-02-25 14:32:46.51401	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3087	2014-02-25 14:32:52.439667	\N	514	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3078	2014-02-25 14:32:20.735726	2014-02-25 14:32:52.645643	391	2	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3082	2014-02-25 14:32:27.339907	2014-02-25 14:32:54.475921	372	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3088	2014-02-25 14:32:58.912149	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3089	2014-02-25 14:33:06.475121	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3090	2014-02-25 14:33:07.394657	\N	391	3	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3092	2014-02-25 14:33:20.761408	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3093	2014-02-25 14:33:21.068083	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3095	2014-02-25 14:33:23.982849	\N	359	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3097	2014-02-25 14:33:30.290279	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3076	2014-02-25 14:32:15.032433	2014-02-25 14:33:31.035723	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3065	2014-02-25 14:31:45.046068	2014-02-25 14:33:36.05443	350	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3098	2014-02-25 14:33:42.952223	\N	359	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3073	2014-02-25 14:32:04.750349	2014-02-25 14:33:44.524075	513	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3099	2014-02-25 14:33:45.280043	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3091	2014-02-25 14:33:11.260662	2014-02-25 14:33:53.033706	372	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3077	2014-02-25 14:32:17.613796	2014-02-25 14:33:56.633763	368	7	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3103	2014-02-25 14:33:57.150282	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3104	2014-02-25 14:34:05.074029	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3106	2014-02-25 14:34:07.169844	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3107	2014-02-25 14:34:10.836865	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3109	2014-02-25 14:34:13.572524	\N	368	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3096	2014-02-25 14:33:30.250218	2014-02-25 14:34:16.877908	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3110	2014-02-25 14:34:18.186056	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3111	2014-02-25 14:34:18.669198	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3112	2014-02-25 14:34:21.664971	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3094	2014-02-25 14:33:22.006769	2014-02-25 14:34:25.445478	393	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3113	2014-02-25 14:34:27.046821	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3105	2014-02-25 14:34:07.16625	2014-02-25 14:34:27.957968	372	7	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3114	2014-02-25 14:34:28.416125	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3101	2014-02-25 14:33:49.970013	2014-02-25 14:34:36.561711	391	3	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3074	2014-02-25 14:32:05.765876	2014-02-25 14:34:37.317092	361	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3116	2014-02-25 14:34:38.637609	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3100	2014-02-25 14:33:49.957699	2014-02-25 14:34:47.733689	354	3	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3119	2014-02-25 14:34:48.264584	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3121	2014-02-25 14:34:56.230609	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3122	2014-02-25 14:34:57.792548	\N	361	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3123	2014-02-25 14:35:00.167267	\N	363	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3117	2014-02-25 14:34:44.255336	2014-02-25 14:35:17.296831	372	8	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3120	2014-02-25 14:34:49.483933	2014-02-25 14:35:18.124809	391	4	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3118	2014-02-25 14:34:47.974596	2014-02-25 14:35:45.093383	393	4	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3108	2014-02-25 14:34:12.335703	2014-02-25 14:35:51.285364	350	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3102	2014-02-25 14:33:56.589509	2014-02-25 14:35:53.973471	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3115	2014-02-25 14:34:29.847526	2014-02-25 14:35:03.737642	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3124	2014-02-25 14:35:26.248474	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3125	2014-02-25 14:35:26.290039	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3126	2014-02-25 14:35:30.21776	\N	368	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3127	2014-02-25 14:35:30.603186	\N	382	3	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3128	2014-02-25 14:35:32.002236	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3131	2014-02-25 14:35:44.231715	\N	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3132	2014-02-25 14:35:46.706046	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3133	2014-02-25 14:35:48.228391	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3135	2014-02-25 14:36:00.668615	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3130	2014-02-25 14:35:34.814841	2014-02-25 14:36:14.021931	372	9	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3139	2014-02-25 14:36:14.914637	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3140	2014-02-25 14:36:15.829062	\N	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3141	2014-02-25 14:36:20.39488	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3142	2014-02-25 14:36:20.39847	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3143	2014-02-25 14:36:25.615342	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3145	2014-02-25 14:36:28.916979	\N	383	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3129	2014-02-25 14:35:32.027647	2014-02-25 14:36:33.028045	391	5	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3146	2014-02-25 14:36:36.6978	\N	341	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3147	2014-02-25 14:36:38.550258	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3134	2014-02-25 14:35:58.745487	2014-02-25 14:36:49.199216	393	5	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3148	2014-02-25 14:36:38.553893	2014-02-25 14:37:00.095331	372	10	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
3153	2014-02-25 14:37:05.060888	\N	393	6	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3154	2014-02-25 14:37:06.598413	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3155	2014-02-25 14:37:20.920855	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3156	2014-02-25 14:37:21.069679	\N	368	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3157	2014-02-25 14:37:24.919619	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3158	2014-02-25 14:37:24.991307	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3152	2014-02-25 14:36:55.318541	2014-02-25 14:37:25.08815	382	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3159	2014-02-25 14:37:26.214233	\N	393	6	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3137	2014-02-25 14:36:06.893011	2014-02-25 14:37:38.409973	355	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3149	2014-02-25 14:36:45.132707	2014-02-25 14:37:39.158137	354	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3151	2014-02-25 14:36:52.033525	2014-02-25 14:37:43.387098	361	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3150	2014-02-25 14:36:49.818085	2014-02-25 14:37:45.512799	391	6	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3161	2014-02-25 14:37:50.317074	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3162	2014-02-25 14:37:51.188134	\N	372	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3166	2014-02-25 14:37:54.731336	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3167	2014-02-25 14:37:58.076713	\N	391	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3168	2014-02-25 14:37:59.30269	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3169	2014-02-25 14:38:03.813028	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3170	2014-02-25 14:38:04.416117	\N	377	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3171	2014-02-25 14:38:04.538771	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3172	2014-02-25 14:38:12.469353	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3173	2014-02-25 14:38:12.543291	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3175	2014-02-25 14:38:21.838513	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3136	2014-02-25 14:36:03.423419	2014-02-25 14:38:29.324152	359	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3178	2014-02-25 14:38:31.685819	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3179	2014-02-25 14:38:36.489525	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3160	2014-02-25 14:37:42.758495	2014-02-25 14:38:38.245663	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3180	2014-02-25 14:38:40.842329	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3181	2014-02-25 14:38:44.019336	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3138	2014-02-25 14:36:08.35642	2014-02-25 14:38:45.713198	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3163	2014-02-25 14:37:51.45773	2014-02-25 14:38:47.245524	368	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3144	2014-02-25 14:36:26.727747	2014-02-25 14:38:47.562771	350	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3176	2014-02-25 14:38:26.695619	2014-02-25 14:38:51.911692	391	7	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3182	2014-02-25 14:38:53.213089	\N	359	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3183	2014-02-25 14:38:54.812525	\N	382	3	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3174	2014-02-25 14:38:17.025627	2014-02-25 14:38:55.172548	361	10	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3184	2014-02-25 14:39:02.059095	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3165	2014-02-25 14:37:53.339946	2014-02-25 14:39:02.334853	354	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3185	2014-02-25 14:39:03.674863	\N	368	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3186	2014-02-25 14:39:06.129776	\N	350	7	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3187	2014-02-25 14:39:10.268776	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3188	2014-02-25 14:39:11.329454	\N	361	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3189	2014-02-25 14:39:11.345612	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3190	2014-02-25 14:39:11.685661	\N	363	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3191	2014-02-25 14:39:16.122363	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3177	2014-02-25 14:38:30.995232	2014-02-25 14:39:17.809821	393	6	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3193	2014-02-25 14:39:20.668495	\N	359	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3194	2014-02-25 14:39:21.037056	\N	391	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3195	2014-02-25 14:39:31.511942	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3197	2014-02-25 14:39:35.675434	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3198	2014-02-25 14:39:37.964401	\N	514	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3200	2014-02-25 14:39:44.291675	\N	361	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3201	2014-02-25 14:39:45.456564	\N	357	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3202	2014-02-25 14:39:46.842617	\N	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3204	2014-02-25 14:39:51.372358	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3205	2014-02-25 14:39:53.867749	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3196	2014-02-25 14:39:35.622288	2014-02-25 14:40:09.728522	393	7	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3192	2014-02-25 14:39:16.895621	2014-02-25 14:40:13.935391	354	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3164	2014-02-25 14:37:52.366461	2014-02-25 14:40:14.39435	355	2	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3203	2014-02-25 14:39:48.741624	2014-02-25 14:42:04.51709	372	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3199	2014-02-25 14:39:40.559772	2014-02-25 14:40:05.671932	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3208	2014-02-25 14:40:09.465617	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3209	2014-02-25 14:40:17.323209	\N	359	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3210	2014-02-25 14:40:22.473536	\N	382	3	7B20214AA4AA445AA720062C6F1B5C58	0	f	f
3212	2014-02-25 14:40:27.535368	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3214	2014-02-25 14:40:32.481465	\N	514	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3215	2014-02-25 14:40:33.584863	\N	513	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3216	2014-02-25 14:40:39.757566	\N	355	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3217	2014-02-25 14:40:43.167706	\N	350	6	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3218	2014-02-25 14:40:47.050414	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3219	2014-02-25 14:40:49.86149	\N	365	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3206	2014-02-25 14:39:56.438712	2014-02-25 14:40:58.823406	391	8	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3220	2014-02-25 14:41:00.285912	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3211	2014-02-25 14:40:25.54141	2014-02-25 14:41:02.766814	393	8	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3222	2014-02-25 14:41:03.795798	\N	368	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3223	2014-02-25 14:41:05.483115	\N	513	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3207	2014-02-25 14:40:03.635544	2014-02-25 14:41:06.958206	361	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3224	2014-02-25 14:41:13.037033	\N	391	9	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3225	2014-02-25 14:41:13.156766	\N	355	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3226	2014-02-25 14:41:13.849243	\N	363	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3228	2014-02-25 14:41:18.229168	\N	501	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3230	2014-02-25 14:41:21.142812	\N	394	3	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3221	2014-02-25 14:41:01.836878	2014-02-25 14:41:21.422523	359	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3231	2014-02-25 14:41:23.987872	\N	368	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
3232	2014-02-25 14:41:24.131747	\N	341	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3233	2014-02-25 14:41:27.207275	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3213	2014-02-25 14:40:30.653718	2014-02-25 14:41:30.877172	354	7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3235	2014-02-25 14:41:34.683611	\N	345	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3236	2014-02-25 14:41:37.197925	\N	359	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3237	2014-02-25 14:41:42.359354	\N	350	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3238	2014-02-25 14:41:42.559948	\N	503	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3239	2014-02-25 14:41:46.490056	\N	343	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3227	2014-02-25 14:41:15.474855	2014-02-25 14:41:52.152047	382	2	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
3229	2014-02-25 14:41:18.848492	2014-02-25 14:41:57.641862	393	9	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	t
3240	2014-02-25 14:41:57.869167	\N	359	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3234	2014-02-25 14:41:29.344547	2014-02-25 14:42:11.736925	361	2	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	t
3241	2014-02-25 14:42:25.785955	\N	361	3	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
3242	2014-02-25 15:34:28.924667	2014-02-25 15:34:57.820463	259	83	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3243	2014-02-25 15:35:12.413467	2014-02-25 15:35:43.128772	259	84	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3244	2014-02-25 15:36:02.62558	2014-02-25 15:36:36.728334	259	85	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3245	2014-02-25 15:36:50.291325	2014-02-25 15:37:24.533219	259	86	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3246	2014-02-25 15:37:37.373293	2014-02-25 15:38:04.81874	259	87	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3247	2014-02-25 15:38:22.352114	2014-02-25 15:38:53.824593	259	88	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3248	2014-02-25 15:39:05.733844	\N	259	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3249	2014-02-25 15:39:28.486332	2014-02-25 15:39:57.048773	259	89	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3250	2014-02-25 15:40:22.476148	2014-02-25 15:40:56.143164	259	90	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3251	2014-02-25 15:41:20.618324	\N	259	91	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3252	2014-02-25 15:41:34.884473	2014-02-25 15:42:10.625095	259	91	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3253	2014-02-25 15:42:24.491073	\N	259	92	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3254	2014-02-25 15:42:34.519194	2014-02-25 15:43:06.474592	259	92	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3255	2014-02-25 15:43:18.888411	2014-02-25 15:43:50.915466	259	93	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3256	2014-02-25 15:44:45.369044	2014-02-25 15:45:18.997665	259	94	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3257	2014-02-25 15:45:36.870375	2014-02-25 15:46:05.192841	259	95	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3258	2014-02-25 15:46:32.861452	2014-02-25 15:46:58.174568	259	96	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3259	2014-02-25 15:47:31.03916	2014-02-25 15:48:11.806814	259	97	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3260	2014-02-25 15:48:28.076988	2014-02-25 15:48:59.926185	259	98	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3261	2014-02-25 15:49:57.715631	2014-02-25 15:50:25.894257	259	99	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3262	2014-02-25 15:50:55.793963	2014-02-25 15:51:26.772297	259	100	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3263	2014-02-25 15:51:44.606377	2014-02-25 15:52:24.502827	259	101	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3264	2014-02-25 15:52:25.498666	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3265	2014-02-25 15:52:37.2259	\N	259	102	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3266	2014-02-25 15:52:50.475492	\N	259	102	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3267	2014-02-25 15:53:13.880994	2014-02-25 15:53:45.074329	259	102	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3268	2014-02-25 15:53:53.439705	\N	136	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3269	2014-02-25 15:54:10.889055	\N	259	103	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3270	2014-02-25 15:54:35.44225	\N	259	103	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3271	2014-02-25 15:54:54.112434	2014-02-25 15:55:20.832066	259	103	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3272	2014-02-25 15:55:36.68527	\N	259	104	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3273	2014-02-25 15:55:57.39582	2014-02-25 15:56:31.846042	259	104	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3274	2014-02-25 15:56:45.619843	2014-02-25 15:57:22.400272	259	105	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3275	2014-02-25 15:57:59.728495	\N	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3276	2014-02-25 15:58:11.8225	\N	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3277	2014-02-25 15:58:18.146204	2014-02-25 15:58:51.936594	259	106	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3278	2014-02-25 15:58:35.744339	2014-02-25 15:58:52.327652	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3279	2014-02-25 15:59:04.734841	\N	568	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3280	2014-02-25 15:59:19.210188	\N	568	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3281	2014-02-25 15:59:56.378977	\N	568	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3282	2014-02-25 16:00:14.085068	\N	568	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3283	2014-02-25 16:00:16.356003	2014-02-25 16:00:45.92498	259	107	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3284	2014-02-25 16:01:35.508045	\N	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3285	2014-02-25 16:01:35.832671	\N	259	108	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3286	2014-02-25 16:01:53.593121	\N	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3287	2014-02-25 16:02:19.42296	\N	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3288	2014-02-25 16:03:16.37127	2014-02-25 16:03:25.54422	568	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3289	2014-02-25 16:03:37.20343	\N	568	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3290	2014-02-25 16:05:30.777631	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3291	2014-02-25 16:06:36.33732	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3292	2014-02-25 16:06:59.059362	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3293	2014-02-25 16:14:47.194702	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3294	2014-02-25 16:20:38.202471	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3295	2014-02-25 21:25:08.2228	\N	261	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3296	2014-02-26 07:26:39.772833	2014-02-26 07:27:28.135322	265	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3297	2014-02-26 07:27:41.787478	\N	265	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3298	2014-02-26 07:28:10.803188	\N	265	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3299	2014-02-26 07:36:14.628599	\N	259	108	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3300	2014-02-26 07:36:51.235683	\N	259	108	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3301	2014-02-26 07:37:09.387742	2014-02-26 07:37:47.422227	259	108	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3302	2014-02-26 07:38:07.60292	\N	259	109	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3303	2014-02-26 07:38:25.374034	\N	259	109	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3304	2014-02-26 07:39:13.660328	\N	259	109	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3305	2014-02-26 07:39:22.279123	2014-02-26 07:40:01.590782	259	109	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3306	2014-02-26 07:40:16.107707	2014-02-26 07:41:04.630179	259	110	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3307	2014-02-26 07:41:29.562531	\N	259	111	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3308	2014-02-26 07:42:41.95296	2014-02-26 07:43:21.756331	259	111	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3309	2014-02-26 07:43:34.692643	\N	259	112	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3310	2014-02-26 07:44:23.18456	2014-02-26 07:45:11.309848	259	112	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3311	2014-02-26 07:45:29.20913	\N	259	113	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3312	2014-02-26 08:23:38.70376	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3313	2014-02-26 08:24:15.661087	2014-02-26 08:24:42.040585	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3314	2014-02-26 08:24:57.937463	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3316	2014-02-26 08:44:26.130692	2014-02-26 08:44:52.657068	197	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3315	2014-02-26 08:44:18.505512	2014-02-26 08:45:24.217802	216	4	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3319	2014-02-26 08:45:30.707994	\N	235	3	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3317	2014-02-26 08:45:09.9931	2014-02-26 08:45:42.168293	186	15	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3320	2014-02-26 08:45:43.439942	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3318	2014-02-26 08:45:23.047859	2014-02-26 08:45:48.747215	197	39	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3322	2014-02-26 08:46:01.700128	\N	197	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3323	2014-02-26 08:46:06.342156	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3321	2014-02-26 08:45:54.94646	2014-02-26 08:46:28.62825	186	16	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3324	2014-02-26 08:46:29.18452	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3326	2014-02-26 08:46:52.057188	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3327	2014-02-26 08:47:47.988275	2014-02-26 08:48:04.341703	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3329	2014-02-26 08:48:27.345961	\N	217	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3328	2014-02-26 08:48:04.693948	2014-02-26 08:48:31.42427	226	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3330	2014-02-26 08:49:10.250604	\N	216	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3331	2014-02-26 08:49:12.516447	\N	217	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3332	2014-02-26 08:49:26.32051	\N	226	20	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3325	2014-02-26 08:46:51.759696	2014-02-26 08:49:48.997794	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
3333	2014-02-26 08:50:13.18974	\N	217	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3334	2014-02-26 08:50:32.054398	\N	235	3	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3336	2014-02-26 08:50:58.420034	\N	480	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3337	2014-02-26 08:51:17.710557	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3335	2014-02-26 08:50:47.430346	2014-02-26 08:51:30.909562	217	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3338	2014-02-26 08:51:35.048803	\N	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3339	2014-02-26 08:51:44.041887	\N	223	6	0CFFCBC851984A4281C23D34FC400445	0	f	f
3341	2014-02-26 08:52:05.935625	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3342	2014-02-26 08:52:09.732312	2014-02-26 08:52:28.140475	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3340	2014-02-26 08:51:44.941323	2014-02-26 08:52:36.635174	217	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3346	2014-02-26 08:52:44.117898	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3345	2014-02-26 08:52:32.762852	2014-02-26 08:52:54.006189	197	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3344	2014-02-26 08:52:28.686736	2014-02-26 08:52:56.639272	186	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3343	2014-02-26 08:52:24.001138	2014-02-26 08:53:14.165593	216	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3348	2014-02-26 08:53:16.420896	\N	226	19	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3349	2014-02-26 08:53:19.465571	\N	197	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3350	2014-02-26 08:53:34.38152	\N	216	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3347	2014-02-26 08:52:50.243192	2014-02-26 08:53:41.942247	217	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3354	2014-02-26 08:54:13.263119	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3351	2014-02-26 08:53:54.245017	2014-02-26 08:54:21.712449	197	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3355	2014-02-26 08:54:27.772969	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3352	2014-02-26 08:53:54.905021	2014-02-26 08:54:30.830568	217	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3358	2014-02-26 08:54:35.448369	\N	226	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3353	2014-02-26 08:54:06.504799	2014-02-26 08:54:39.434976	186	18	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3360	2014-02-26 08:54:58.711703	\N	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3357	2014-02-26 08:54:33.671218	2014-02-26 08:55:01.397195	197	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3359	2014-02-26 08:54:43.321252	2014-02-26 08:55:26.136539	217	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3356	2014-02-26 08:54:32.666013	2014-02-26 08:55:30.179974	216	5	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3361	2014-02-26 08:55:13.688737	2014-02-26 08:55:33.704653	197	42	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3362	2014-02-26 08:55:32.232307	2014-02-26 08:55:42.49937	232	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3365	2014-02-26 08:56:04.065654	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3364	2014-02-26 08:55:52.116177	2014-02-26 08:56:15.276677	197	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3363	2014-02-26 08:55:40.410174	2014-02-26 08:56:28.785911	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3366	2014-02-26 08:56:41.942426	\N	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3368	2014-02-26 08:57:00.87801	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3367	2014-02-26 08:56:46.089835	2014-02-26 08:57:07.711695	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3371	2014-02-26 08:57:33.473608	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3369	2014-02-26 08:57:06.098723	2014-02-26 08:57:46.653272	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3373	2014-02-26 08:57:57.11335	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3370	2014-02-26 08:57:27.345436	2014-02-26 08:58:11.794142	223	5	0CFFCBC851984A4281C23D34FC400445	0	f	t
3372	2014-02-26 08:57:46.122222	2014-02-26 08:58:17.10984	197	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3377	2014-02-26 08:58:31.472602	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3374	2014-02-26 08:57:59.148026	2014-02-26 08:58:41.161287	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3375	2014-02-26 08:58:19.048164	2014-02-26 08:58:51.889508	186	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3379	2014-02-26 08:58:54.149218	\N	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3380	2014-02-26 08:59:02.734464	\N	197	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3376	2014-02-26 08:58:26.087617	2014-02-26 08:59:05.424929	223	6	0CFFCBC851984A4281C23D34FC400445	0	f	t
3381	2014-02-26 08:59:19.532196	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3378	2014-02-26 08:58:49.299163	2014-02-26 08:59:49.105811	216	6	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3384	2014-02-26 08:59:51.890574	\N	197	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3382	2014-02-26 08:59:23.865234	2014-02-26 08:59:59.988465	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3383	2014-02-26 08:59:31.098105	2014-02-26 09:00:14.738723	223	7	0CFFCBC851984A4281C23D34FC400445	0	f	t
3387	2014-02-26 09:00:31.757974	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3388	2014-02-26 09:00:32.655474	\N	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3385	2014-02-26 09:00:13.523594	2014-02-26 09:00:54.354684	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3386	2014-02-26 09:00:25.141674	2014-02-26 09:00:56.268284	186	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3391	2014-02-26 09:00:57.417186	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3390	2014-02-26 09:00:37.968756	2014-02-26 09:01:18.088577	223	8	0CFFCBC851984A4281C23D34FC400445	0	f	t
3392	2014-02-26 09:01:05.159227	2014-02-26 09:01:27.024132	197	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3389	2014-02-26 09:00:35.997193	2014-02-26 09:01:42.504796	216	7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3393	2014-02-26 09:01:07.078082	2014-02-26 09:01:43.551111	217	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3394	2014-02-26 09:01:20.38879	2014-02-26 09:01:48.310763	226	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3397	2014-02-26 09:02:00.122265	\N	217	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3396	2014-02-26 09:01:41.710478	2014-02-26 09:02:05.102149	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3395	2014-02-26 09:01:33.558136	2014-02-26 09:02:09.678322	223	9	0CFFCBC851984A4281C23D34FC400445	0	f	t
3398	2014-02-26 09:02:12.952948	\N	186	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3399	2014-02-26 09:02:20.698071	\N	197	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3400	2014-02-26 09:02:27.544488	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3402	2014-02-26 09:02:37.033821	\N	217	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3403	2014-02-26 09:02:41.709254	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3404	2014-02-26 09:02:59.435135	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3405	2014-02-26 09:03:03.672822	\N	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3401	2014-02-26 09:02:31.061759	2014-02-26 09:03:05.924246	223	10	0CFFCBC851984A4281C23D34FC400445	0	f	t
3407	2014-02-26 09:03:18.757431	\N	223	11	0CFFCBC851984A4281C23D34FC400445	0	f	f
3408	2014-02-26 09:03:18.884827	\N	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3409	2014-02-26 09:03:25.678633	\N	226	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3406	2014-02-26 09:03:13.61329	2014-02-26 09:03:50.341531	186	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3410	2014-02-26 09:03:50.034916	2014-02-26 09:04:12.260213	197	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3414	2014-02-26 09:04:37.012665	\N	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3415	2014-02-26 09:04:37.658905	\N	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3412	2014-02-26 09:04:01.435925	2014-02-26 09:04:38.386123	223	10	0CFFCBC851984A4281C23D34FC400445	0	f	t
3413	2014-02-26 09:04:01.446247	2014-02-26 09:04:40.562922	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3417	2014-02-26 09:04:54.073189	\N	186	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3411	2014-02-26 09:03:54.11702	2014-02-26 09:05:00.388996	216	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3418	2014-02-26 09:04:55.827222	2014-02-26 09:05:08.8425	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3420	2014-02-26 09:05:10.23287	\N	223	5	0CFFCBC851984A4281C23D34FC400445	0	f	f
3416	2014-02-26 09:04:53.032702	2014-02-26 09:05:29.878933	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3421	2014-02-26 09:05:17.275577	2014-02-26 09:05:40.060264	197	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3419	2014-02-26 09:04:56.529311	2014-02-26 09:05:41.637435	223	11	0CFFCBC851984A4281C23D34FC400445	0	f	t
3422	2014-02-26 09:05:42.265114	\N	217	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3423	2014-02-26 09:05:44.774363	\N	223	5	0CFFCBC851984A4281C23D34FC400445	0	f	f
3424	2014-02-26 09:05:52.727648	\N	186	20	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3426	2014-02-26 09:06:02.897049	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3430	2014-02-26 09:06:15.598205	\N	223	5	0CFFCBC851984A4281C23D34FC400445	0	f	f
3431	2014-02-26 09:06:28.678261	\N	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3425	2014-02-26 09:05:54.016183	2014-02-26 09:06:31.378512	223	12	0CFFCBC851984A4281C23D34FC400445	0	f	t
3427	2014-02-26 09:06:06.127372	2014-02-26 09:06:36.101295	197	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3428	2014-02-26 09:06:06.513519	2014-02-26 09:06:47.701419	217	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3434	2014-02-26 09:06:54.681091	\N	223	13	0CFFCBC851984A4281C23D34FC400445	0	f	f
3435	2014-02-26 09:07:01.606084	\N	217	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3432	2014-02-26 09:06:48.089348	2014-02-26 09:07:13.470593	232	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3433	2014-02-26 09:06:51.020635	2014-02-26 09:07:21.09166	197	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3429	2014-02-26 09:06:13.945736	2014-02-26 09:07:34.227501	216	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3438	2014-02-26 09:07:43.380413	\N	217	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3439	2014-02-26 09:07:46.478952	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3436	2014-02-26 09:07:29.904342	2014-02-26 09:07:58.579434	232	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3437	2014-02-26 09:07:35.882255	2014-02-26 09:07:58.586236	197	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3444	2014-02-26 09:08:14.458075	2014-02-26 09:08:33.916695	193	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3443	2014-02-26 09:08:11.900496	2014-02-26 09:08:37.552749	197	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3445	2014-02-26 09:08:37.922069	\N	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3446	2014-02-26 09:08:41.169108	\N	226	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3440	2014-02-26 09:07:51.412993	2014-02-26 09:08:44.247707	216	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3441	2014-02-26 09:08:06.12063	2014-02-26 09:08:44.896686	223	13	0CFFCBC851984A4281C23D34FC400445	0	f	t
3447	2014-02-26 09:08:47.674643	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3442	2014-02-26 09:08:10.632245	2014-02-26 09:08:51.198946	232	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3450	2014-02-26 09:09:13.424502	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3451	2014-02-26 09:09:16.901646	\N	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3449	2014-02-26 09:09:10.698239	2014-02-26 09:09:38.16339	197	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3448	2014-02-26 09:09:08.093638	2014-02-26 09:09:50.546523	223	14	0CFFCBC851984A4281C23D34FC400445	0	f	t
3453	2014-02-26 09:09:54.101231	\N	220	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3452	2014-02-26 09:09:52.103619	2014-02-26 09:10:19.052898	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3458	2014-02-26 09:10:21.455631	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3454	2014-02-26 09:09:55.986296	2014-02-26 09:10:26.13559	197	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3460	2014-02-26 09:10:31.099537	\N	226	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3461	2014-02-26 09:10:36.204609	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3455	2014-02-26 09:09:59.385123	2014-02-26 09:10:40.053718	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3459	2014-02-26 09:10:25.029329	2014-02-26 09:10:43.343889	216	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3456	2014-02-26 09:10:06.266191	2014-02-26 09:10:48.90063	223	15	0CFFCBC851984A4281C23D34FC400445	0	f	t
3457	2014-02-26 09:10:18.073686	2014-02-26 09:10:52.448443	220	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
3465	2014-02-26 09:10:58.876826	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3462	2014-02-26 09:10:40.341587	2014-02-26 09:11:00.140647	197	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3467	2014-02-26 09:11:19.065976	\N	220	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
3469	2014-02-26 09:11:21.517655	\N	197	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3464	2014-02-26 09:10:58.480913	2014-02-26 09:11:21.67701	216	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3463	2014-02-26 09:10:52.86153	2014-02-26 09:11:31.766136	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3466	2014-02-26 09:11:02.086527	2014-02-26 09:11:39.863968	223	16	0CFFCBC851984A4281C23D34FC400445	0	f	t
3471	2014-02-26 09:11:43.288453	\N	197	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3472	2014-02-26 09:11:45.558751	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3473	2014-02-26 09:11:47.503681	\N	217	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3474	2014-02-26 09:11:49.484807	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3468	2014-02-26 09:11:19.800429	2014-02-26 09:11:53.336206	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3476	2014-02-26 09:12:05.627715	\N	232	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3477	2014-02-26 09:12:05.987956	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3470	2014-02-26 09:11:42.39578	2014-02-26 09:12:16.205095	186	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3478	2014-02-26 09:12:17.438538	\N	217	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3479	2014-02-26 09:12:23.32878	\N	197	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3480	2014-02-26 09:12:24.540133	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3481	2014-02-26 09:12:25.969365	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3482	2014-02-26 09:12:32.277815	\N	232	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3475	2014-02-26 09:11:53.309185	2014-02-26 09:12:34.508004	223	17	0CFFCBC851984A4281C23D34FC400445	0	f	t
3483	2014-02-26 09:12:37.12482	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3487	2014-02-26 09:12:52.03505	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3484	2014-02-26 09:12:39.302584	2014-02-26 09:13:09.987427	186	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3486	2014-02-26 09:12:46.554218	2014-02-26 09:13:16.8609	223	18	0CFFCBC851984A4281C23D34FC400445	0	f	t
3489	2014-02-26 09:13:17.705479	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3490	2014-02-26 09:13:19.554935	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3485	2014-02-26 09:12:40.840342	2014-02-26 09:13:23.286141	216	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3488	2014-02-26 09:13:10.624754	2014-02-26 09:13:37.689943	197	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3493	2014-02-26 09:13:41.480351	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3494	2014-02-26 09:13:42.094343	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3491	2014-02-26 09:13:31.760176	2014-02-26 09:13:49.339311	223	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3495	2014-02-26 09:13:57.102625	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3496	2014-02-26 09:14:01.268912	\N	223	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3492	2014-02-26 09:13:32.070239	2014-02-26 09:14:04.556479	186	21	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3498	2014-02-26 09:14:11.785816	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3499	2014-02-26 09:14:26.067124	\N	186	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3502	2014-02-26 09:14:30.996707	\N	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3500	2014-02-26 09:14:26.35387	2014-02-26 09:14:31.241822	223	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3497	2014-02-26 09:14:01.845301	2014-02-26 09:14:32.531535	197	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3504	2014-02-26 09:14:32.696416	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3505	2014-02-26 09:14:41.415186	\N	226	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3508	2014-02-26 09:15:01.986767	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3506	2014-02-26 09:14:43.460544	2014-02-26 09:15:08.857353	223	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3507	2014-02-26 09:14:56.351509	2014-02-26 09:15:15.766851	197	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3509	2014-02-26 09:15:19.770875	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3511	2014-02-26 09:15:22.442441	\N	186	19	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3512	2014-02-26 09:15:24.281969	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3513	2014-02-26 09:15:25.962531	\N	186	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3516	2014-02-26 09:15:45.560051	\N	226	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3503	2014-02-26 09:14:32.196264	2014-02-26 09:15:50.098674	211	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3515	2014-02-26 09:15:31.229371	2014-02-26 09:15:53.285813	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3510	2014-02-26 09:15:21.710673	2014-02-26 09:15:53.931908	223	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3514	2014-02-26 09:15:28.825103	2014-02-26 09:16:02.155183	197	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3517	2014-02-26 09:16:06.740604	\N	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3518	2014-02-26 09:16:06.814018	\N	211	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3520	2014-02-26 09:16:10.129268	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3501	2014-02-26 09:14:29.925931	2014-02-26 09:16:31.319079	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
3519	2014-02-26 09:16:07.999852	2014-02-26 09:16:36.282514	223	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3524	2014-02-26 09:16:37.970484	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3521	2014-02-26 09:16:15.053941	2014-02-26 09:16:42.042429	197	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3523	2014-02-26 09:16:25.985785	2014-02-26 09:16:49.240515	226	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3525	2014-02-26 09:16:55.084615	\N	235	3	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3526	2014-02-26 09:16:58.741337	\N	197	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3527	2014-02-26 09:17:07.419351	\N	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3528	2014-02-26 09:17:13.791607	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3522	2014-02-26 09:16:24.868155	2014-02-26 09:18:31.011185	186	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
3530	2014-02-26 09:17:17.304285	\N	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3532	2014-02-26 09:17:28.492692	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3529	2014-02-26 09:17:16.659395	2014-02-26 09:17:43.469553	226	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3535	2014-02-26 09:17:57.033977	\N	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3533	2014-02-26 09:17:39.215511	2014-02-26 09:18:04.99515	197	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3531	2014-02-26 09:17:22.234907	2014-02-26 09:18:07.850107	211	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3534	2014-02-26 09:17:41.894857	2014-02-26 09:18:12.052364	193	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3540	2014-02-26 09:18:25.531247	\N	226	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3536	2014-02-26 09:17:58.155578	2014-02-26 09:18:42.048966	217	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3539	2014-02-26 09:18:21.435142	2014-02-26 09:18:48.789663	211	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3538	2014-02-26 09:18:18.592889	2014-02-26 09:18:49.26342	197	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3541	2014-02-26 09:18:26.107916	2014-02-26 09:18:53.663606	193	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3543	2014-02-26 09:18:54.615984	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3544	2014-02-26 09:18:57.823873	\N	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3542	2014-02-26 09:18:26.862586	2014-02-26 09:18:57.832848	232	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3537	2014-02-26 09:18:02.66092	2014-02-26 09:19:12.540759	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
3551	2014-02-26 09:19:22.990493	\N	201	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3545	2014-02-26 09:19:01.05697	2014-02-26 09:19:27.365553	197	55	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3552	2014-02-26 09:19:27.726129	\N	235	3	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3548	2014-02-26 09:19:07.948732	2014-02-26 09:19:34.855208	211	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3549	2014-02-26 09:19:09.71619	2014-02-26 09:19:36.117398	232	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3547	2014-02-26 09:19:05.790853	2014-02-26 09:19:36.559573	193	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3550	2014-02-26 09:19:12.136171	2014-02-26 09:19:40.707176	226	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3555	2014-02-26 09:19:44.766675	\N	480	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3556	2014-02-26 09:19:49.983649	\N	232	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3558	2014-02-26 09:19:57.188751	\N	226	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3559	2014-02-26 09:19:58.527141	\N	235	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3546	2014-02-26 09:19:01.936479	2014-02-26 09:20:02.492003	191	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
3560	2014-02-26 09:20:05.235717	\N	211	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3554	2014-02-26 09:19:39.454053	2014-02-26 09:20:06.773161	197	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3553	2014-02-26 09:19:28.596215	2014-02-26 09:20:14.665978	217	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3561	2014-02-26 09:20:21.036412	\N	191	2	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3563	2014-02-26 09:20:24.336593	\N	226	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3564	2014-02-26 09:20:24.370263	\N	232	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3557	2014-02-26 09:19:52.990619	2014-02-26 09:20:26.332098	193	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3565	2014-02-26 09:20:28.05728	\N	217	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3567	2014-02-26 09:20:51.610326	\N	217	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3562	2014-02-26 09:20:23.766359	2014-02-26 09:20:53.763139	197	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3566	2014-02-26 09:20:38.001545	2014-02-26 09:21:02.05714	193	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3568	2014-02-26 09:26:30.563593	\N	259	113	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3569	2014-02-26 09:26:53.630953	\N	259	113	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3570	2014-02-26 09:27:51.177238	\N	259	113	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3571	2014-02-26 09:30:43.460718	2014-02-26 09:31:11.34515	259	113	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3572	2014-02-26 09:31:23.766313	2014-02-26 09:31:54.641772	259	114	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3573	2014-02-26 09:32:41.730963	\N	259	115	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3574	2014-02-26 09:33:56.744763	\N	259	115	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3575	2014-02-26 09:34:11.44872	2014-02-26 09:34:43.033014	259	115	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3576	2014-02-26 09:35:01.673183	2014-02-26 09:35:43.107283	259	116	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3577	2014-02-26 09:35:55.258499	2014-02-26 09:36:28.749044	259	117	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3578	2014-02-26 09:36:40.430791	2014-02-26 09:37:18.491163	259	118	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3579	2014-02-26 09:37:32.849462	2014-02-26 09:38:06.337788	259	119	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3580	2014-02-26 09:38:19.505494	2014-02-26 09:38:54.883816	259	120	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3581	2014-02-26 09:39:07.614185	2014-02-26 09:39:35.715431	259	121	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3582	2014-02-26 09:39:48.049644	2014-02-26 09:40:17.118692	259	122	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3583	2014-02-26 09:40:37.359963	2014-02-26 09:41:16.506689	259	123	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3584	2014-02-26 09:41:46.512658	2014-02-26 09:42:14.567087	259	124	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3585	2014-02-26 09:42:37.469532	2014-02-26 09:43:11.334576	259	125	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3586	2014-02-26 09:43:26.251916	2014-02-26 09:43:59.103245	259	126	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3587	2014-02-26 09:44:08.931708	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3588	2014-02-26 09:44:11.227942	\N	259	127	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3589	2014-02-26 09:44:29.784876	2014-02-26 09:45:01.39973	259	127	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3590	2014-02-26 09:45:14.085115	\N	259	128	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3591	2014-02-26 09:46:40.747951	2014-02-26 09:47:03.503332	259	128	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3592	2014-02-26 09:47:15.572778	2014-02-26 09:47:46.739151	259	129	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3593	2014-02-26 09:47:59.663362	2014-02-26 09:48:25.299982	259	130	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3594	2014-02-26 09:48:38.419927	2014-02-26 09:49:01.098058	259	131	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3595	2014-02-26 09:49:12.885846	2014-02-26 09:49:44.317213	259	132	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3596	2014-02-26 09:52:29.726245	2014-02-26 09:53:02.300593	259	133	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3597	2014-02-26 09:53:14.614953	2014-02-26 09:53:45.895557	259	134	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3598	2014-02-26 09:53:59.379338	\N	259	135	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3599	2014-02-26 09:56:00.692092	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3600	2014-02-26 09:56:10.53632	2014-02-26 09:56:35.464964	259	135	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3601	2014-02-26 09:56:48.174879	\N	259	136	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3603	2014-02-26 09:57:11.213533	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3602	2014-02-26 09:57:08.920963	2014-02-26 09:57:36.971882	259	136	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3604	2014-02-26 09:57:48.860007	\N	259	137	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3605	2014-02-26 09:59:25.76978	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3606	2014-02-26 09:59:28.156363	2014-02-26 09:59:55.807699	259	137	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3607	2014-02-26 10:00:47.299593	\N	259	138	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3608	2014-02-26 10:08:08.943313	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3609	2014-02-26 10:13:26.60343	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3610	2014-02-26 10:15:58.149746	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3611	2014-02-26 10:19:09.593709	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3612	2014-02-26 11:28:39.619439	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3613	2014-02-26 11:29:06.744505	2014-02-26 11:29:36.938284	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3614	2014-02-26 11:29:51.858078	2014-02-26 11:30:21.036375	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3615	2014-02-26 11:30:57.786081	\N	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3616	2014-02-26 11:31:50.250677	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3617	2014-02-26 11:33:07.033956	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3618	2014-02-26 11:34:08.834852	2014-02-26 11:34:39.239562	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3619	2014-02-26 11:35:10.329601	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3620	2014-02-26 11:36:00.170496	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3621	2014-02-26 11:36:37.312497	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3622	2014-02-26 11:37:10.056683	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3623	2014-02-26 11:37:33.11001	2014-02-26 11:38:00.193283	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3624	2014-02-26 11:40:06.678288	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3625	2014-02-26 11:59:03.84416	2014-02-26 11:59:21.198975	296	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3626	2014-02-26 11:59:36.523355	\N	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3627	2014-02-26 12:00:00.391603	2014-02-26 12:00:28.415761	296	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3628	2014-02-26 12:00:42.517082	\N	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3629	2014-02-26 12:01:10.152018	2014-02-26 12:01:30.001079	296	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3630	2014-02-26 12:01:43.178371	\N	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3631	2014-02-26 12:02:38.664506	2014-02-26 12:02:58.215959	296	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3632	2014-02-26 12:03:11.513045	2014-02-26 12:03:53.147126	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3633	2014-02-26 12:04:07.989531	\N	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3634	2014-02-26 12:04:48.682672	2014-02-26 12:05:35.879591	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3635	2014-02-26 12:06:06.368288	\N	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3636	2014-02-26 12:07:02.062013	\N	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3637	2014-02-26 12:07:42.348397	2014-02-26 12:08:24.121884	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3638	2014-02-26 12:08:37.573713	\N	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3639	2014-02-26 12:09:08.818023	2014-02-26 12:09:52.727231	296	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3640	2014-02-26 12:13:28.221955	2014-02-26 12:14:12.232531	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3641	2014-02-26 12:14:25.257197	2014-02-26 12:15:09.815643	296	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3642	2014-02-26 12:15:22.692656	2014-02-26 12:16:08.973458	296	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3643	2014-02-26 12:16:22.722533	\N	296	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3644	2014-02-26 12:30:30.875551	\N	141	16	FC21412A7C92444EA50B30A09729330F	0	f	f
3645	2014-02-26 12:31:33.355897	\N	141	15	FC21412A7C92444EA50B30A09729330F	0	f	f
3646	2014-02-26 12:33:19.99298	\N	141	14	FC21412A7C92444EA50B30A09729330F	0	f	f
3647	2014-02-26 12:42:46.95683	\N	141	14	FC21412A7C92444EA50B30A09729330F	0	f	f
3648	2014-02-26 12:45:56.033103	2014-02-26 12:46:07.622777	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3649	2014-02-26 12:46:19.67173	\N	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3651	2014-02-26 12:46:51.618587	\N	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3650	2014-02-26 12:46:48.49629	2014-02-26 12:47:01.281222	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3652	2014-02-26 12:47:12.509119	\N	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3653	2014-02-26 12:47:14.076623	\N	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3654	2014-02-26 12:47:35.298468	2014-02-26 12:47:43.798823	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3655	2014-02-26 12:47:39.769333	2014-02-26 12:47:50.353581	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3656	2014-02-26 12:48:00.674228	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3658	2014-02-26 12:48:24.231971	\N	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3657	2014-02-26 12:48:02.337459	2014-02-26 12:48:32.217354	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3660	2014-02-26 12:48:37.9248	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3659	2014-02-26 12:48:36.103924	2014-02-26 12:49:12.794165	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3661	2014-02-26 12:48:44.481687	2014-02-26 12:49:14.364332	182	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3662	2014-02-26 12:49:25.238184	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3663	2014-02-26 12:49:27.868418	2014-02-26 12:49:56.216948	182	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3664	2014-02-26 12:49:58.618633	2014-02-26 12:50:05.65006	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3666	2014-02-26 12:50:21.313341	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3665	2014-02-26 12:50:08.777469	2014-02-26 12:50:48.263046	182	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3668	2014-02-26 12:50:47.311374	2014-02-26 12:50:53.102126	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3667	2014-02-26 12:50:31.187895	2014-02-26 12:50:59.535902	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3669	2014-02-26 12:51:00.578259	\N	182	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3670	2014-02-26 12:51:05.157964	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3672	2014-02-26 12:51:53.546619	\N	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3673	2014-02-26 12:52:01.865965	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3671	2014-02-26 12:51:40.368772	2014-02-26 12:52:04.413375	182	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3675	2014-02-26 12:52:16.444259	\N	182	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3674	2014-02-26 12:52:10.138078	2014-02-26 12:52:17.783319	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3678	2014-02-26 12:52:46.585311	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3676	2014-02-26 12:52:33.98815	2014-02-26 12:52:57.599566	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3677	2014-02-26 12:52:40.960438	2014-02-26 12:52:59.471137	182	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3680	2014-02-26 12:53:18.732369	\N	141	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3679	2014-02-26 12:53:12.019997	2014-02-26 12:53:42.863415	182	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3681	2014-02-26 12:53:47.928266	\N	141	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3682	2014-02-26 12:53:55.097925	2014-02-26 12:54:23.067242	182	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3685	2014-02-26 12:54:36.094084	\N	182	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3683	2014-02-26 12:54:26.830755	2014-02-26 12:54:49.364773	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3684	2014-02-26 12:54:26.835915	2014-02-26 12:54:54.990135	141	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3686	2014-02-26 12:55:09.677498	\N	141	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3687	2014-02-26 12:55:21.676969	\N	182	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3688	2014-02-26 12:55:44.248363	2014-02-26 12:56:06.363384	182	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3689	2014-02-26 12:56:06.578677	\N	141	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3690	2014-02-26 12:56:18.788721	2014-02-26 12:56:54.873734	182	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3692	2014-02-26 12:57:21.422033	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3691	2014-02-26 12:57:07.366499	2014-02-26 12:57:42.326624	182	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3693	2014-02-26 12:57:54.967956	\N	182	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3694	2014-02-26 12:58:03.084083	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3695	2014-02-26 12:58:15.944558	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3697	2014-02-26 12:58:37.58154	2014-02-26 12:58:44.645312	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3696	2014-02-26 12:58:25.004377	2014-02-26 12:58:56.859702	182	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3698	2014-02-26 12:59:03.609661	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3699	2014-02-26 12:59:08.649564	\N	182	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3700	2014-02-26 12:59:27.607858	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3701	2014-02-26 12:59:30.647298	\N	182	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3703	2014-02-26 13:00:16.42183	\N	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3702	2014-02-26 12:59:51.173599	2014-02-26 13:00:28.268829	182	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3705	2014-02-26 13:00:49.82187	2014-02-26 13:01:04.736373	141	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3704	2014-02-26 13:00:40.023421	2014-02-26 13:01:15.131758	182	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3707	2014-02-26 13:01:27.663159	\N	182	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3706	2014-02-26 13:01:21.907824	2014-02-26 13:01:55.186337	141	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3708	2014-02-26 13:02:22.346521	2014-02-26 13:02:54.989408	182	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3709	2014-02-26 13:02:24.482196	2014-02-26 13:02:55.370525	141	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3710	2014-02-26 13:03:07.082701	2014-02-26 13:03:38.152716	182	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3711	2014-02-26 13:03:34.983136	2014-02-26 13:04:11.999518	141	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3712	2014-02-26 13:04:17.886487	\N	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3714	2014-02-26 13:04:59.286429	\N	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3713	2014-02-26 13:04:24.125117	2014-02-26 13:05:02.201277	141	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3715	2014-02-26 13:05:03.400931	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3716	2014-02-26 13:05:15.555605	\N	141	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3718	2014-02-26 13:05:52.878734	\N	141	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3717	2014-02-26 13:05:27.170314	2014-02-26 13:06:01.996793	182	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3719	2014-02-26 13:06:14.85918	2014-02-26 13:06:49.196877	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3722	2014-02-26 13:07:01.732508	\N	182	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3720	2014-02-26 13:06:29.35824	2014-02-26 13:07:09.114574	141	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3721	2014-02-26 13:07:00.032821	2014-02-26 13:07:25.086107	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3724	2014-02-26 13:07:43.872846	\N	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3725	2014-02-26 13:07:59.958235	2014-02-26 13:08:07.346884	151	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3723	2014-02-26 13:07:39.413318	2014-02-26 13:08:09.211486	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3728	2014-02-26 13:08:27.597291	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3729	2014-02-26 13:08:28.493477	\N	141	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3727	2014-02-26 13:08:19.135299	2014-02-26 13:08:30.434559	151	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3726	2014-02-26 13:08:09.81698	2014-02-26 13:08:46.060518	182	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3730	2014-02-26 13:08:42.453568	2014-02-26 13:08:49.692913	151	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3732	2014-02-26 13:09:00.500353	\N	151	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3733	2014-02-26 13:09:02.319417	\N	141	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3734	2014-02-26 13:09:08.56848	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3735	2014-02-26 13:09:22.49699	2014-02-26 13:09:27.20524	151	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3736	2014-02-26 13:09:38.844654	\N	151	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3731	2014-02-26 13:08:58.194382	2014-02-26 13:09:43.425063	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3737	2014-02-26 13:09:43.974425	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3738	2014-02-26 13:09:48.916837	\N	141	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3740	2014-02-26 13:10:03.19642	2014-02-26 13:10:14.873498	151	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3741	2014-02-26 13:10:21.456505	\N	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3739	2014-02-26 13:09:55.258959	2014-02-26 13:10:25.666776	182	15	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3742	2014-02-26 13:10:26.836956	2014-02-26 13:10:36.925455	151	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3745	2014-02-26 13:10:48.935665	2014-02-26 13:11:00.956183	151	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3743	2014-02-26 13:10:37.583716	2014-02-26 13:11:07.642922	182	16	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3744	2014-02-26 13:10:48.813097	2014-02-26 13:11:15.852768	270	42	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3746	2014-02-26 13:11:28.129069	2014-02-26 13:11:50.151859	270	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3747	2014-02-26 13:18:38.886501	2014-02-26 13:19:04.309167	270	44	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3748	2014-02-26 13:19:59.569185	2014-02-26 13:20:24.854831	270	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3749	2014-02-26 13:20:43.52051	2014-02-26 13:21:13.078372	270	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3751	2014-02-26 13:21:27.904914	\N	270	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3750	2014-02-26 13:21:22.970769	2014-02-26 13:21:53.248253	259	138	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3753	2014-02-26 13:22:33.829152	\N	158	9	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3754	2014-02-26 13:22:45.750602	\N	259	139	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3752	2014-02-26 13:22:25.757931	2014-02-26 13:22:51.219999	270	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3755	2014-02-26 13:23:00.978563	\N	259	139	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3756	2014-02-26 13:23:02.905372	2014-02-26 13:23:30.159564	270	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3759	2014-02-26 13:23:45.764742	\N	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3760	2014-02-26 13:23:47.34492	\N	158	8	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3757	2014-02-26 13:23:13.497518	2014-02-26 13:23:54.243682	259	139	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3762	2014-02-26 13:24:01.885082	\N	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3758	2014-02-26 13:23:45.752887	2014-02-26 13:24:14.394922	270	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3761	2014-02-26 13:23:47.704668	2014-02-26 13:24:15.641114	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3765	2014-02-26 13:24:36.084324	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3764	2014-02-26 13:24:23.018193	2014-02-26 13:24:38.74257	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3763	2014-02-26 13:24:06.478552	2014-02-26 13:24:46.008032	259	140	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3767	2014-02-26 13:24:47.479901	\N	155	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
3768	2014-02-26 13:24:52.14577	\N	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3770	2014-02-26 13:25:13.348868	\N	155	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
3771	2014-02-26 13:25:14.183347	\N	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3769	2014-02-26 13:25:12.667469	2014-02-26 13:25:42.669256	259	141	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3766	2014-02-26 13:24:44.805686	2014-02-26 13:25:16.856976	270	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3772	2014-02-26 13:25:29.439588	\N	270	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3773	2014-02-26 13:25:38.553086	\N	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3775	2014-02-26 13:25:52.868796	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
3774	2014-02-26 13:25:50.917515	2014-02-26 13:26:06.401998	179	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3776	2014-02-26 13:26:07.933544	\N	259	142	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3779	2014-02-26 13:26:19.263313	\N	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3780	2014-02-26 13:26:28.647442	2014-02-26 13:26:36.189447	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
3778	2014-02-26 13:26:18.738928	2014-02-26 13:26:36.843892	179	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3777	2014-02-26 13:26:16.396558	2014-02-26 13:26:48.634697	259	142	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3781	2014-02-26 13:26:30.275547	2014-02-26 13:26:56.086093	270	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3783	2014-02-26 13:26:59.558628	\N	136	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3784	2014-02-26 13:27:00.979384	\N	259	143	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3785	2014-02-26 13:27:06.276342	\N	183	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3782	2014-02-26 13:26:50.069879	2014-02-26 13:27:16.973797	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3788	2014-02-26 13:27:33.059171	\N	179	4	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3790	2014-02-26 13:27:39.710499	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3787	2014-02-26 13:27:32.205543	2014-02-26 13:27:55.522578	183	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3786	2014-02-26 13:27:29.652494	2014-02-26 13:28:07.881945	259	143	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3789	2014-02-26 13:27:39.208143	2014-02-26 13:28:07.886681	270	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3791	2014-02-26 13:28:16.502741	\N	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3794	2014-02-26 13:28:38.452552	\N	183	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3793	2014-02-26 13:28:36.984434	2014-02-26 13:29:00.299275	270	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3792	2014-02-26 13:28:33.295894	2014-02-26 13:29:06.936273	259	144	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3795	2014-02-26 13:28:57.525704	2014-02-26 13:29:23.158303	183	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3798	2014-02-26 13:29:35.098374	\N	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3796	2014-02-26 13:29:18.706112	2014-02-26 13:29:51.203256	259	145	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3797	2014-02-26 13:29:30.377358	2014-02-26 13:29:54.682668	270	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3799	2014-02-26 13:30:03.713204	\N	259	146	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3801	2014-02-26 13:30:18.914237	\N	259	146	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3800	2014-02-26 13:30:09.215712	2014-02-26 13:30:39.463554	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3802	2014-02-26 13:30:19.216074	2014-02-26 13:30:44.657687	270	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3804	2014-02-26 13:30:44.746032	\N	158	8	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3805	2014-02-26 13:31:01.6557	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
3803	2014-02-26 13:30:44.648405	2014-02-26 13:31:23.982484	259	146	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3806	2014-02-26 13:31:01.926834	2014-02-26 13:31:34.790848	270	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3809	2014-02-26 13:31:40.819827	\N	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
3808	2014-02-26 13:31:40.790697	2014-02-26 13:32:05.106762	270	55	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3807	2014-02-26 13:31:34.947059	2014-02-26 13:32:10.28132	259	147	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3811	2014-02-26 13:32:23.429833	\N	259	148	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3810	2014-02-26 13:32:18.330936	2014-02-26 13:32:43.147359	270	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3812	2014-02-26 13:32:48.996045	\N	259	148	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3813	2014-02-26 13:33:02.340377	2014-02-26 13:33:31.324351	270	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3814	2014-02-26 13:33:38.861424	\N	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3815	2014-02-26 13:33:43.193115	2014-02-26 13:34:10.789654	270	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3816	2014-02-26 13:35:17.44101	\N	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3817	2014-02-26 13:35:21.816088	2014-02-26 13:35:47.853448	147	23	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3818	2014-02-26 13:36:05.055121	2014-02-26 13:36:30.326657	270	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3819	2014-02-26 13:36:11.874123	2014-02-26 13:36:40.531131	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3820	2014-02-26 13:37:24.130472	\N	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3821	2014-02-26 13:37:56.570246	\N	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3822	2014-02-26 13:38:47.340168	2014-02-26 13:39:15.065615	270	60	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3823	2014-02-26 13:39:03.543113	2014-02-26 13:39:29.521048	136	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3824	2014-02-26 13:39:59.204396	\N	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3825	2014-02-26 13:40:09.68968	2014-02-26 13:40:33.092239	147	24	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3826	2014-02-26 13:40:16.848696	2014-02-26 13:40:37.278043	136	34	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3827	2014-02-26 13:41:21.640808	\N	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3828	2014-02-26 13:41:21.845139	2014-02-26 13:41:49.183753	136	35	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3829	2014-02-26 13:41:53.045352	2014-02-26 13:42:19.63515	147	25	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3830	2014-02-26 13:43:46.627144	\N	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3832	2014-02-26 13:44:12.801693	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3831	2014-02-26 13:44:02.344452	2014-02-26 13:44:29.740674	270	61	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3833	2014-02-26 13:44:36.681446	\N	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3834	2014-02-26 13:45:00.029259	\N	171	17	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3836	2014-02-26 13:45:35.632637	\N	169	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3835	2014-02-26 13:45:24.552879	2014-02-26 13:45:37.819311	171	16	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3837	2014-02-26 13:46:01.715783	2014-02-26 13:46:16.669638	171	17	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3838	2014-02-26 13:46:06.763618	2014-02-26 13:46:29.132282	147	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3839	2014-02-26 13:46:32.95043	2014-02-26 13:46:45.986109	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3840	2014-02-26 13:46:50.748238	\N	136	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3841	2014-02-26 13:46:58.856756	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3843	2014-02-26 13:47:30.896795	\N	136	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3842	2014-02-26 13:47:23.606806	2014-02-26 13:47:38.130657	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3846	2014-02-26 13:47:52.080909	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3844	2014-02-26 13:47:32.211296	2014-02-26 13:47:55.787233	147	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3845	2014-02-26 13:47:45.040254	2014-02-26 13:48:07.849104	270	62	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3848	2014-02-26 13:48:28.850495	\N	270	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3847	2014-02-26 13:48:16.69591	2014-02-26 13:48:29.901936	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3851	2014-02-26 13:48:53.951176	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3850	2014-02-26 13:48:49.320094	2014-02-26 13:49:14.75548	147	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3849	2014-02-26 13:48:38.393218	2014-02-26 13:49:10.384133	136	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3852	2014-02-26 13:49:12.777772	\N	259	148	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3856	2014-02-26 13:49:44.79641	\N	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3854	2014-02-26 13:49:34.08867	2014-02-26 13:49:59.083687	270	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3858	2014-02-26 13:50:11.485474	\N	270	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3853	2014-02-26 13:49:29.244029	2014-02-26 13:50:16.626239	136	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3855	2014-02-26 13:49:42.356899	2014-02-26 13:50:22.773493	259	148	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3859	2014-02-26 13:50:24.037932	\N	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3857	2014-02-26 13:50:02.471631	2014-02-26 13:50:24.865895	147	29	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3861	2014-02-26 13:50:35.743067	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3862	2014-02-26 13:50:40.192677	2014-02-26 13:50:51.753819	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3860	2014-02-26 13:50:35.090768	2014-02-26 13:51:11.712806	259	149	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3863	2014-02-26 13:51:07.101748	2014-02-26 13:51:18.619367	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3866	2014-02-26 13:51:21.789462	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3867	2014-02-26 13:51:32.277454	\N	259	150	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3868	2014-02-26 13:51:32.366551	\N	147	30	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3864	2014-02-26 13:51:07.604541	2014-02-26 13:51:33.580144	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3865	2014-02-26 13:51:08.451687	2014-02-26 13:51:39.638097	270	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3869	2014-02-26 13:51:49.140455	\N	179	4	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3871	2014-02-26 13:52:19.089325	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3872	2014-02-26 13:52:31.281249	\N	259	150	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3870	2014-02-26 13:52:06.217523	2014-02-26 13:52:31.375848	270	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3874	2014-02-26 13:52:59.926357	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3873	2014-02-26 13:52:37.617215	2014-02-26 13:53:01.295539	179	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3875	2014-02-26 13:53:07.292237	\N	147	30	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3876	2014-02-26 13:53:09.266221	\N	270	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3878	2014-02-26 13:53:17.482749	2014-02-26 13:53:42.98736	147	30	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3877	2014-02-26 13:53:15.077758	2014-02-26 13:53:43.497828	179	4	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3879	2014-02-26 13:53:17.683277	2014-02-26 13:53:50.475794	259	150	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3880	2014-02-26 13:53:36.392915	2014-02-26 13:54:05.103763	270	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3882	2014-02-26 13:54:15.12184	\N	259	151	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3883	2014-02-26 13:54:19.137523	\N	270	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3881	2014-02-26 13:53:59.788557	2014-02-26 13:54:25.169079	179	5	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3884	2014-02-26 13:54:29.664731	2014-02-26 13:54:56.360918	147	31	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3886	2014-02-26 13:54:38.51636	2014-02-26 13:55:01.222703	179	6	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3885	2014-02-26 13:54:36.608741	2014-02-26 13:55:11.470753	259	151	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3887	2014-02-26 13:54:57.447135	2014-02-26 13:55:28.151355	270	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3889	2014-02-26 13:55:33.103197	2014-02-26 13:55:44.26389	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3888	2014-02-26 13:55:16.172532	2014-02-26 13:55:44.570229	179	7	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3892	2014-02-26 13:56:07.431863	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3893	2014-02-26 13:56:14.700548	\N	259	152	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3890	2014-02-26 13:55:53.229967	2014-02-26 13:56:20.397009	270	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3891	2014-02-26 13:55:57.240839	2014-02-26 13:56:24.347803	179	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3895	2014-02-26 13:56:36.651221	\N	179	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3896	2014-02-26 13:56:47.44015	\N	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3894	2014-02-26 13:56:33.439842	2014-02-26 13:57:00.248072	147	32	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3897	2014-02-26 13:57:04.783806	\N	270	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3898	2014-02-26 13:57:25.326046	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3899	2014-02-26 13:57:27.724586	2014-02-26 13:57:53.38952	179	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3900	2014-02-26 13:57:44.457446	2014-02-26 13:58:11.726944	147	33	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3902	2014-02-26 13:58:16.45995	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3901	2014-02-26 13:58:07.280052	2014-02-26 13:58:33.585288	179	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3904	2014-02-26 13:58:41.365348	\N	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3905	2014-02-26 13:58:45.725531	\N	259	152	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3903	2014-02-26 13:58:23.006652	2014-02-26 13:58:50.016695	179	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3908	2014-02-26 13:59:03.955993	\N	179	10	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3906	2014-02-26 13:58:46.252658	2014-02-26 13:59:09.906351	179	10	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3910	2014-02-26 13:59:17.200268	\N	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3907	2014-02-26 13:58:47.232098	2014-02-26 13:59:22.924942	147	34	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3912	2014-02-26 13:59:22.929229	\N	179	11	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3909	2014-02-26 13:59:12.641381	2014-02-26 13:59:38.137261	270	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3913	2014-02-26 13:59:45.777077	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3911	2014-02-26 13:59:22.860133	2014-02-26 13:59:46.641011	259	152	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3914	2014-02-26 14:00:56.825411	\N	179	10	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
3915	2014-02-26 14:01:33.163748	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3916	2014-02-26 14:01:36.79033	2014-02-26 14:02:04.749743	179	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3919	2014-02-26 14:02:36.350957	\N	172	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3917	2014-02-26 14:02:09.140786	2014-02-26 14:02:39.503237	147	35	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3918	2014-02-26 14:02:17.928028	2014-02-26 14:02:46.141244	179	10	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
3920	2014-02-26 15:21:13.938869	\N	182	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3921	2014-02-26 15:21:34.514336	2014-02-26 15:22:07.839505	182	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3922	2014-02-26 15:22:20.329923	\N	182	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3923	2014-02-26 15:22:30.202524	\N	147	36	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3924	2014-02-26 15:22:41.517711	2014-02-26 15:23:11.903825	182	18	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3925	2014-02-26 15:23:05.579796	2014-02-26 15:23:31.509334	147	36	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3926	2014-02-26 15:23:24.603654	2014-02-26 15:23:59.020067	182	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3928	2014-02-26 15:24:18.028379	\N	147	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3927	2014-02-26 15:24:11.244669	2014-02-26 15:24:45.1304	182	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3930	2014-02-26 15:24:57.433726	\N	182	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3929	2014-02-26 15:24:28.778262	2014-02-26 15:25:00.530158	147	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3931	2014-02-26 15:25:20.176474	\N	182	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3933	2014-02-26 15:25:42.770304	\N	182	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3932	2014-02-26 15:25:29.333357	2014-02-26 15:26:07.951514	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3934	2014-02-26 15:26:24.421923	2014-02-26 15:26:36.197546	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3935	2014-02-26 15:26:49.750182	\N	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3936	2014-02-26 15:27:19.791106	\N	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3937	2014-02-26 15:28:13.938516	2014-02-26 15:28:23.920438	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3938	2014-02-26 15:28:36.749702	\N	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3939	2014-02-26 15:29:17.336777	2014-02-26 15:29:24.973029	182	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3940	2014-02-26 15:29:40.473558	\N	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3941	2014-02-26 15:29:51.633246	\N	147	39	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3942	2014-02-26 15:29:56.473315	2014-02-26 15:30:17.584149	182	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3944	2014-02-26 15:30:30.724585	\N	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3943	2014-02-26 15:30:29.90905	2014-02-26 15:30:54.791912	182	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3945	2014-02-26 15:30:55.85034	2014-02-26 15:31:26.305922	147	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3946	2014-02-26 15:31:07.355324	2014-02-26 15:31:32.548952	182	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3947	2014-02-26 15:31:44.725948	2014-02-26 15:32:11.565244	182	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3948	2014-02-26 15:31:59.166479	2014-02-26 15:32:34.62825	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3949	2014-02-26 15:32:24.318544	2014-02-26 15:32:48.769485	182	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3951	2014-02-26 15:33:06.582783	\N	147	39	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3950	2014-02-26 15:33:00.76782	2014-02-26 15:33:25.991239	182	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3953	2014-02-26 15:33:44.753999	\N	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3952	2014-02-26 15:33:39.150847	2014-02-26 15:34:05.26804	182	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3955	2014-02-26 15:34:21.393721	\N	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
3954	2014-02-26 15:34:17.516502	2014-02-26 15:34:45.489221	182	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3957	2014-02-26 15:35:01.301007	2014-02-26 15:35:25.990115	147	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
3956	2014-02-26 15:34:57.504808	2014-02-26 15:35:26.810134	182	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3958	2014-02-26 15:35:39.82202	2014-02-26 15:36:06.260491	182	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3959	2014-02-26 15:36:18.464492	2014-02-26 15:36:45.855231	182	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3960	2014-02-26 15:36:59.338458	2014-02-26 15:37:27.352457	182	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3961	2014-02-26 15:37:39.280361	\N	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3962	2014-02-26 15:38:07.126491	2014-02-26 15:38:35.629454	182	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3963	2014-02-26 15:38:48.836155	2014-02-26 15:39:13.282116	182	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3964	2014-02-26 15:39:25.884668	2014-02-26 15:39:56.129786	182	15	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3965	2014-02-26 15:40:08.604109	2014-02-26 15:40:43.023973	182	16	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3966	2014-02-26 15:40:55.129592	2014-02-26 15:41:28.348167	182	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3967	2014-02-26 15:41:40.974264	2014-02-26 15:42:06.669625	182	18	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3968	2014-02-26 15:42:19.193495	2014-02-26 15:42:51.111611	182	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3969	2014-02-26 15:43:05.791232	2014-02-26 15:43:34.229092	182	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3970	2014-02-26 15:43:46.81441	2014-02-26 15:44:21.24249	182	21	C815B29CD8F546BBBB4C647B9D163942	0	f	t
3971	2014-02-26 15:45:17.934079	2014-02-26 15:50:28.807382	182	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
3972	2014-02-26 15:50:47.472497	\N	182	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3974	2014-02-26 15:56:49.315469	\N	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3975	2014-02-26 15:57:13.011252	2014-02-26 15:57:47.781759	183	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3973	2014-02-26 15:54:00.967199	2014-02-26 15:58:22.070741	182	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
3977	2014-02-26 16:00:19.328932	2014-02-26 16:00:45.4899	183	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3976	2014-02-26 15:58:42.355169	2014-02-26 16:03:41.69232	182	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
3978	2014-02-26 16:51:07.073704	\N	171	17	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3979	2014-02-26 16:52:08.659147	\N	171	16	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3980	2014-02-26 16:55:37.357558	2014-02-26 16:55:46.933628	171	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3981	2014-02-26 16:55:59.723951	\N	171	16	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3982	2014-02-26 16:56:32.80775	\N	171	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3983	2014-02-26 16:57:12.646863	\N	171	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3984	2014-02-26 16:57:38.022218	\N	171	13	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3985	2014-02-26 16:58:02.641427	2014-02-26 16:58:11.883149	171	12	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3986	2014-02-26 16:58:29.448624	2014-02-26 16:58:40.300551	171	13	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3987	2014-02-26 16:58:55.732377	2014-02-26 16:59:07.707735	171	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3988	2014-02-26 16:59:20.177501	\N	171	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3989	2014-02-26 16:59:48.037585	2014-02-26 17:00:00.062089	171	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3990	2014-02-26 17:00:12.913804	\N	171	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
3991	2014-02-26 17:00:39.073027	2014-02-26 17:00:50.52524	171	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3993	2014-02-26 17:01:06.13911	2014-02-26 17:01:18.685664	171	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3994	2014-02-26 17:01:31.70472	2014-02-26 17:01:42.878471	171	16	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
3992	2014-02-26 17:01:04.261065	2014-02-26 17:02:13.244578	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
3995	2014-02-26 17:02:25.757545	\N	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3996	2014-02-26 17:02:42.285972	2014-02-26 17:02:53.045874	144	15	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
3997	2014-02-26 17:03:04.283946	\N	144	16	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3998	2014-02-26 17:05:27.757909	\N	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
3999	2014-02-26 17:06:12.78254	\N	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4000	2014-02-26 17:06:49.432192	2014-02-26 17:07:35.871339	158	5	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4001	2014-02-26 17:07:51.673145	\N	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4002	2014-02-26 17:08:17.372692	2014-02-26 17:09:02.192494	158	5	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4003	2014-02-26 17:09:21.307052	\N	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4004	2014-02-26 19:07:28.586083	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4005	2014-02-26 19:09:39.68941	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4006	2014-02-26 19:12:00.315147	\N	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4007	2014-02-26 19:13:02.628528	2014-02-26 19:15:52.133422	360	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4008	2014-02-26 19:16:10.669731	\N	360	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4009	2014-02-26 20:42:47.781843	\N	259	153	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4010	2014-02-27 10:40:57.841799	\N	179	11	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4011	2014-02-27 10:41:03.371541	2014-02-27 10:41:28.120705	147	38	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4013	2014-02-27 10:41:43.401589	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4012	2014-02-27 10:41:24.720624	2014-02-27 10:41:56.170801	179	11	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4014	2014-02-27 10:41:59.348623	2014-02-27 10:42:07.196936	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4017	2014-02-27 10:42:17.994267	\N	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4016	2014-02-27 10:42:09.252187	2014-02-27 10:42:37.684635	147	39	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4018	2014-02-27 10:42:41.166081	\N	158	5	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4015	2014-02-27 10:42:08.386491	2014-02-27 10:42:42.315655	179	12	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4019	2014-02-27 10:42:56.323862	2014-02-27 10:43:30.864575	179	13	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4020	2014-02-27 10:43:14.51746	2014-02-27 10:43:47.393865	147	40	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4021	2014-02-27 10:43:55.927635	2014-02-27 10:44:09.638194	171	17	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4023	2014-02-27 10:44:27.696678	2014-02-27 10:44:42.410007	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4022	2014-02-27 10:44:21.791486	2014-02-27 10:44:58.430239	179	14	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4024	2014-02-27 10:45:07.774003	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4025	2014-02-27 10:45:14.835829	\N	147	41	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
4026	2014-02-27 10:45:49.434469	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4027	2014-02-27 10:45:59.942389	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4028	2014-02-27 10:46:31.948529	2014-02-27 10:47:42.973799	158	4	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4030	2014-02-27 10:47:52.109743	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4029	2014-02-27 10:47:39.753241	2014-02-27 10:48:10.666477	147	40	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4031	2014-02-27 10:48:18.414212	2014-02-27 10:48:27.246434	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4033	2014-02-27 10:48:31.84316	\N	179	15	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4034	2014-02-27 10:48:39.450682	\N	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4035	2014-02-27 10:49:02.175234	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4032	2014-02-27 10:48:30.246565	2014-02-27 10:49:32.753689	158	5	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4036	2014-02-27 10:49:41.326641	\N	179	14	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4038	2014-02-27 10:50:19.639526	\N	179	14	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4039	2014-02-27 10:50:22.983289	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4040	2014-02-27 10:50:45.487886	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4041	2014-02-27 10:51:29.568363	\N	179	13	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4037	2014-02-27 10:50:10.661057	2014-02-27 10:51:33.212141	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4043	2014-02-27 10:52:28.812409	\N	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4044	2014-02-27 10:52:34.710213	2014-02-27 10:52:44.558448	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4045	2014-02-27 10:52:58.477719	2014-02-27 10:53:06.229607	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4042	2014-02-27 10:52:24.320323	2014-02-27 10:53:11.194097	174	3	01938BB1EE4E47319738DAC239A2B141	0	f	t
4046	2014-02-27 10:53:19.878707	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4048	2014-02-27 10:54:03.260443	\N	174	4	01938BB1EE4E47319738DAC239A2B141	0	f	f
4047	2014-02-27 10:53:38.21791	2014-02-27 10:54:06.238488	136	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4049	2014-02-27 10:54:23.879356	\N	136	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4050	2014-02-27 10:55:11.8281	2014-02-27 10:55:20.333872	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4051	2014-02-27 10:55:34.5041	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4052	2014-02-27 10:55:43.644687	\N	174	3	01938BB1EE4E47319738DAC239A2B141	0	f	f
4053	2014-02-27 10:55:57.544939	2014-02-27 10:56:11.398019	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4054	2014-02-27 10:56:25.079313	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4056	2014-02-27 10:57:11.076808	2014-02-27 10:57:20.181828	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4058	2014-02-27 10:57:25.411324	\N	136	37	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4055	2014-02-27 10:57:03.853361	2014-02-27 10:57:32.773134	147	41	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4059	2014-02-27 10:57:34.78034	2014-02-27 10:57:53.79946	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	t
4060	2014-02-27 10:58:08.485849	\N	155	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4061	2014-02-27 10:58:51.743755	\N	136	36	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4057	2014-02-27 10:57:14.80532	2014-02-27 10:58:52.125024	158	6	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4063	2014-02-27 10:59:50.082739	2014-02-27 11:00:20.825021	147	42	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
4065	2014-02-27 11:00:23.434612	\N	155	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4062	2014-02-27 10:59:37.371565	2014-02-27 11:01:45.008622	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4066	2014-02-27 11:01:29.254608	2014-02-27 11:01:48.508881	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4067	2014-02-27 11:01:47.660908	2014-02-27 11:02:12.342449	147	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4064	2014-02-27 10:59:51.458272	2014-02-27 11:02:12.370705	148	8	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
4068	2014-02-27 11:02:12.850288	\N	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4071	2014-02-27 11:02:59.122509	2014-02-27 11:03:13.549732	171	18	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4074	2014-02-27 11:03:34.027934	\N	147	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4072	2014-02-27 11:03:29.450782	2014-02-27 11:03:41.67663	171	19	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4069	2014-02-27 11:02:24.238415	2014-02-27 11:04:00.072645	148	9	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
4075	2014-02-27 11:03:55.527768	2014-02-27 11:04:08.740771	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4073	2014-02-27 11:03:31.352035	2014-02-27 11:04:09.031096	174	2	01938BB1EE4E47319738DAC239A2B141	0	f	t
4076	2014-02-27 11:04:29.039548	\N	174	3	01938BB1EE4E47319738DAC239A2B141	0	f	f
4077	2014-02-27 11:04:30.409185	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4070	2014-02-27 11:02:56.24759	2014-02-27 11:04:35.911657	158	8	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4079	2014-02-27 11:04:54.762719	\N	158	9	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4080	2014-02-27 11:05:28.922122	\N	147	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4078	2014-02-27 11:04:30.64225	2014-02-27 11:06:25.39845	148	10	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	t
4082	2014-02-27 11:06:27.343772	\N	158	8	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4081	2014-02-27 11:06:00.019344	2014-02-27 11:06:47.329796	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4083	2014-02-27 11:07:01.543821	\N	171	22	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4085	2014-02-27 11:07:35.586502	2014-02-27 11:07:57.040493	147	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4084	2014-02-27 11:07:23.022944	2014-02-27 11:07:57.105967	179	12	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4087	2014-02-27 11:08:10.467633	\N	179	13	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4086	2014-02-27 11:08:02.156918	2014-02-27 11:08:17.660204	148	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4088	2014-02-27 11:08:10.904358	2014-02-27 11:08:37.611563	147	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4089	2014-02-27 11:08:30.732377	2014-02-27 11:08:51.724913	148	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4090	2014-02-27 11:08:58.667978	\N	174	2	01938BB1EE4E47319738DAC239A2B141	0	f	f
4093	2014-02-27 11:09:41.754343	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
4091	2014-02-27 11:09:29.373465	2014-02-27 11:10:00.175717	148	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4094	2014-02-27 11:10:13.977496	\N	155	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4095	2014-02-27 11:10:22.089488	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4096	2014-02-27 11:10:32.258157	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4098	2014-02-27 11:10:48.592182	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4099	2014-02-27 11:11:07.593397	\N	155	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
4092	2014-02-27 11:09:41.430785	2014-02-27 11:11:14.890619	158	7	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4097	2014-02-27 11:10:37.080688	2014-02-27 11:11:16.857853	147	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4101	2014-02-27 11:11:26.24113	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4100	2014-02-27 11:11:12.689768	2014-02-27 11:11:36.866905	148	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4103	2014-02-27 11:12:22.348356	2014-02-27 11:12:40.689978	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4102	2014-02-27 11:12:18.944153	2014-02-27 11:12:53.682102	148	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4104	2014-02-27 11:12:57.958022	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4105	2014-02-27 11:12:58.946869	\N	158	8	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4106	2014-02-27 11:13:10.163143	\N	148	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4107	2014-02-27 11:13:21.459252	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
4108	2014-02-27 11:13:35.061766	\N	148	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4109	2014-02-27 11:13:46.785298	2014-02-27 11:14:02.321218	169	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4110	2014-02-27 11:14:17.221582	\N	169	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4112	2014-02-27 11:15:16.71714	2014-02-27 11:15:28.205701	158	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4113	2014-02-27 11:15:29.142519	\N	169	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4111	2014-02-27 11:14:35.055813	2014-02-27 11:15:57.985374	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	t
4114	2014-02-27 11:15:46.484258	2014-02-27 11:16:07.964288	158	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4115	2014-02-27 11:16:21.639174	\N	158	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4116	2014-02-27 11:16:45.480131	\N	174	2	01938BB1EE4E47319738DAC239A2B141	0	f	f
4117	2014-02-27 11:17:04.667689	\N	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	f
4118	2014-02-27 11:17:09.467697	2014-02-27 11:17:24.981994	171	20	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	t
4119	2014-02-27 11:17:41.154895	\N	171	21	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
4121	2014-02-27 11:19:40.40055	\N	169	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4120	2014-02-27 11:19:16.439502	2014-02-27 11:19:47.333066	158	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4122	2014-02-27 11:21:12.780577	\N	158	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4123	2014-02-27 11:21:55.134477	\N	158	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4124	2014-02-27 11:22:46.815362	\N	158	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4125	2014-02-27 11:22:48.215627	2014-02-27 11:23:22.524228	147	4	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	t
4126	2014-02-27 11:23:20.274214	2014-02-27 11:24:25.482433	148	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4127	2014-02-27 11:24:41.48673	\N	148	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
4129	2014-02-27 11:28:17.122573	\N	147	5	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
4128	2014-02-27 11:28:03.514445	2014-02-27 11:28:59.490031	158	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4130	2014-02-27 11:29:12.076369	2014-02-27 11:29:42.169717	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4131	2014-02-27 11:29:22.018693	2014-02-27 11:30:05.381274	158	2	9EC218587C01452C9EB49F52EB2DD1DD	0	f	t
4132	2014-02-27 11:30:17.087417	\N	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4133	2014-02-27 11:32:52.536903	\N	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4134	2014-02-27 11:33:30.993568	2014-02-27 11:34:05.257006	183	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4135	2014-02-27 11:34:27.035117	2014-02-27 11:34:53.034282	183	79	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4136	2014-02-27 11:35:06.212787	2014-02-27 11:35:34.460709	183	80	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4137	2014-02-27 11:35:46.469813	2014-02-27 11:36:14.536335	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4138	2014-02-27 11:36:32.870952	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4139	2014-02-27 11:38:46.228478	2014-02-27 11:39:17.959115	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4140	2014-02-27 11:39:30.292566	\N	183	82	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4141	2014-02-27 11:40:34.017259	\N	183	81	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4142	2014-02-27 12:41:22.965529	2014-02-27 12:41:29.061447	7	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4143	2014-02-27 12:41:48.4609	\N	7	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4144	2014-02-27 12:42:36.262337	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4145	2014-02-27 12:42:54.004974	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4146	2014-02-27 13:02:10.854565	2014-02-27 13:02:41.335153	259	153	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4147	2014-02-27 13:02:53.93384	\N	259	154	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4149	2014-02-27 13:03:01.804136	2014-02-27 13:03:20.78313	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4148	2014-02-27 13:02:55.943139	2014-02-27 13:03:24.628478	270	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4150	2014-02-27 13:03:32.870473	2014-02-27 13:03:56.965142	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4151	2014-02-27 13:03:41.247461	2014-02-27 13:04:09.49651	281	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4153	2014-02-27 13:04:21.679215	\N	281	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4152	2014-02-27 13:04:01.232646	2014-02-27 13:04:26.415152	270	69	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4154	2014-02-27 13:04:38.162258	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4155	2014-02-27 13:04:44.60459	\N	259	129	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4157	2014-02-27 13:04:59.008878	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4156	2014-02-27 13:04:53.262041	2014-02-27 13:05:09.803313	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4158	2014-02-27 13:05:16.385612	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4159	2014-02-27 13:05:21.766141	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4160	2014-02-27 13:05:29.467722	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4162	2014-02-27 13:05:48.574297	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4161	2014-02-27 13:05:48.195651	2014-02-27 13:06:02.231127	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4163	2014-02-27 13:06:04.757302	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4165	2014-02-27 13:06:15.107896	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4164	2014-02-27 13:06:14.218727	2014-02-27 13:06:34.687079	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4166	2014-02-27 13:06:27.116763	2014-02-27 13:06:34.748018	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4167	2014-02-27 13:06:46.784611	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4168	2014-02-27 13:06:48.109384	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4169	2014-02-27 13:06:52.882001	\N	259	129	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4170	2014-02-27 13:08:33.648597	2014-02-27 13:08:43.62504	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4171	2014-02-27 13:08:55.407309	2014-02-27 13:09:16.857791	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4172	2014-02-27 13:09:28.090327	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4173	2014-02-27 13:09:37.217064	\N	270	70	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4174	2014-02-27 13:10:40.061525	2014-02-27 13:10:48.539544	270	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4175	2014-02-27 13:18:32.285022	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4176	2014-02-27 14:02:22.884714	2014-02-27 14:02:58.849017	174	1	01938BB1EE4E47319738DAC239A2B141	0	f	t
4177	2014-02-27 14:03:11.381921	2014-02-27 14:03:58.874345	174	2	01938BB1EE4E47319738DAC239A2B141	0	f	t
4178	2014-02-27 14:04:14.06936	2014-02-27 14:04:44.504935	174	3	01938BB1EE4E47319738DAC239A2B141	0	f	t
4179	2014-02-27 14:04:58.180523	2014-02-27 14:05:32.194311	174	4	01938BB1EE4E47319738DAC239A2B141	0	f	t
4180	2014-02-27 14:06:29.215099	2014-02-27 14:07:10.269612	174	5	01938BB1EE4E47319738DAC239A2B141	0	f	t
4181	2014-02-27 14:07:50.965548	2014-02-27 14:08:27.465554	174	6	01938BB1EE4E47319738DAC239A2B141	0	f	t
4182	2014-02-27 14:08:44.854972	2014-02-27 14:09:21.255214	174	7	01938BB1EE4E47319738DAC239A2B141	0	f	t
4183	2014-02-27 14:09:35.39325	2014-02-27 14:10:11.181111	174	8	01938BB1EE4E47319738DAC239A2B141	0	f	t
4184	2014-02-27 14:10:24.232601	\N	174	9	01938BB1EE4E47319738DAC239A2B141	0	f	f
4185	2014-02-27 14:50:45.624134	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4186	2014-02-27 15:32:12.626257	\N	151	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4187	2014-02-27 15:32:24.962147	2014-02-27 15:32:30.690258	151	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4188	2014-02-27 15:32:53.176831	2014-02-27 15:32:58.782575	151	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4189	2014-02-27 15:33:18.014813	2014-02-27 15:33:25.505191	151	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4190	2014-02-27 15:33:56.15561	\N	151	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4191	2014-02-27 15:33:56.180126	\N	157	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4192	2014-02-27 15:34:09.43059	\N	151	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4193	2014-02-27 15:34:10.039849	2014-02-27 15:34:15.13785	157	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4194	2014-02-27 15:34:27.414588	\N	157	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4195	2014-02-27 15:34:29.462188	2014-02-27 15:34:37.923154	151	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4196	2014-02-27 15:34:40.473189	2014-02-27 15:34:46.591393	157	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4197	2014-02-27 15:35:02.28144	\N	151	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4198	2014-02-27 15:35:16.310884	\N	157	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4199	2014-02-27 15:36:17.788162	2014-02-27 15:36:22.887865	157	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4200	2014-02-27 15:36:43.96004	\N	157	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4201	2014-02-27 15:37:04.602844	2014-02-27 15:37:09.435274	157	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
4202	2014-02-27 16:02:32.300757	\N	189	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4203	2014-02-27 16:03:12.929574	2014-02-27 16:04:24.259444	189	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4204	2014-02-27 16:05:01.71753	2014-02-27 16:06:31.733988	189	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4205	2014-02-27 16:06:49.844192	2014-02-27 16:08:26.729505	189	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4206	2014-02-27 16:09:07.414189	2014-02-27 16:10:17.713063	189	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4207	2014-02-27 16:10:43.917551	\N	189	5	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4208	2014-02-27 16:12:28.953492	2014-02-27 16:13:16.645508	189	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
4209	2014-02-27 16:13:41.354904	\N	189	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
4210	2014-02-27 18:25:06.016571	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4211	2014-02-27 18:25:22.627768	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4212	2014-02-27 18:26:54.628778	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4213	2014-02-27 19:23:06.540012	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4214	2014-02-27 19:23:25.890417	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4215	2014-02-27 19:37:46.947232	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4216	2014-02-27 19:38:02.988038	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4217	2014-02-27 19:40:18.788576	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4218	2014-02-27 19:40:32.768704	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4219	2014-02-27 19:43:55.256668	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4220	2014-02-27 19:44:39.267488	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4221	2014-02-27 19:50:50.188997	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4222	2014-02-27 19:51:06.697937	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4223	2014-02-27 19:57:12.378308	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4224	2014-02-27 20:25:51.844589	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4225	2014-02-27 20:33:17.77576	\N	7	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4226	2014-02-27 20:33:35.934245	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4227	2014-02-27 20:33:52.97114	2014-02-27 20:34:01.107952	7	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
4228	2014-02-27 20:34:13.788968	\N	7	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4229	2014-02-27 20:34:25.855712	\N	7	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4230	2014-02-27 20:34:37.792547	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
\.


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
1	visitationbvm
2	Cameron
3	Kaitlyn
4	Alexis
5	Bailey
6	Anna
7	Michelle
8	Hailey
9	Chloe
10	Landon
11	goodboy
12	jimenez
13	makelmartin
14	pedro
15	minh
16	justin
17	jayala
18	pedrorojas
19	genesiszapata
20	jadengonzolas
21	ja
22	justinveiazcuaz
23	j
24	valerieisant
25	mayajarmul
26	saintanselm
27	Ian
28	Robert
29	Jack
30	Hannah
31	Kaden
32	Jackson
33	luke
34	asdfghjkl
35	Gavin
36	Kayla
37	Devin
38	Jose
39	amigon
40	serenety
41	alejandro
42	aamigon
43	Kimberly
44	Jocelyn
45	Adrian
46	Amelia
47	Ricky
48	juaneudg
49	dino
50	jgonzalez
51	lololololololololol
52	ssrivera
53	mmartinez
54	Josiah
55	Aidan
56	Victoria
57	Henry
58	Nilson
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 58, true);


--
-- Data for Name: students; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY students (id, teacher_id) FROM stdin;
860	0
861	0
862	0
863	0
864	0
\.


--
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY teachers (id) FROM stdin;
860
861
862
863
864
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level, failed_attempts) FROM stdin;
771	v2411	all	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
65	v1512	amp	Javier				Morales	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
541	root	TTDinw	\N	\N	\N	\N	\N	27	CA9EE2E34F384E95A5FA26769C5864B8	1	0
772	v2412	amp	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
625	root	bat	\N	\N	\N	\N	\N	41	CA9EE2E34F384E95A5FA26769C5864B8	2	0
773	v2413	ant	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
774	v2414	app	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
775	v2415	apt	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
776	v2416	arc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
618	root	sLDVJB	\N	\N	\N	\N	\N	35	CA9EE2E34F384E95A5FA26769C5864B8	1	0
2	k	k					kindergarten	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
777	v2417	arf	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
778	v2418	ark	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
1	root	Paul_1768	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
779	v2419	arm	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
780	v2420	art	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
781	v2421	ash	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
782	v2422	ask	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
783	v2423	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
784	v2424	ave	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
785	v2425	awe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
485	root	asdfghjkl	\N	\N	\N	\N	\N	17	C11F30815A9C49B9A83B61A285EA11F9	1	0
786	v2426	axe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
787	v2427	aye	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
4	v1202	bio	Jim				Roache	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
788	v2428	ays	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
789	v2429	baa	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
790	v2430	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
791	v2431	bag	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
496	root		\N	\N	\N	\N	\N	23	CA9EE2E34F384E95A5FA26769C5864B8	8	0
792	v2432	bam	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
793	v2433	ban	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
794	v2434	bap	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
795	v2435	bar	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
796	v2436	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
797	v2437	bay	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
798	v2438	bed	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
799	v2439	bee	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
800	v2440	beg	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
801	v2441	ben	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
802	v2442	bet	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
803	v2443	bib	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
5	v1203	bio	Sister				Terri	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
6	v1204	bio	Sister				Margaret	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
3	jbreslin	Iggles_13	Jim				Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
469	root	IkUf0	\N	\N	\N	\N	\N	6	CA9EE2E34F384E95A5FA26769C5864B8	1	0
474	root	KA4gC	\N	\N	\N	\N	\N	11	CA9EE2E34F384E95A5FA26769C5864B8	1	0
311	v2022	ask	Zeannalie				Bobe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
312	v2023	ate	Desiray				Cartegna	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
314	v2025	awe	Randy				Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
315	v2026	axe	Jason	Compres			Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
316	v2027	aye	Crystal				Conway	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
317	v2028	ays	Antonio				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
54	v1501	ahh	Keaira				Archie	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
55	v1502	abs	Jacin				Aviles	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
56	v1503	ace	Tony				Boose	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
57	v1504	add	Tiara				Bounyarith	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
58	v1505	aft	Ledys				Chavez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
59	v1506	ape	Natalie				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
60	v1507	and	Pablo	Manuel			Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
61	v1508	aim	Dang	Thanh			Duong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
62	v1509	aid	Eliannie				Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
63	v1510	air	Thomas				Flynn	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
64	v1511	all	Alexandria	Luz			Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
66	v1513	ant	Destiny				Nunez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
67	v1514	app	Kelly				Pickering	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
68	v1515	apt	Miguel				Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
69	v1516	arc	Christopher				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
70	v1517	arf	Rajah				Williams	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
143	v1710	air	Angie				Gutierrez	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
804	v2444	bid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
309	v2020	art	Donathan				Truong	1	3D384CB2349B41299A3B5A133AB9E3F8	59	2
310	v2021	ash	Alex				Acevedo	1	C815B29CD8F546BBBB4C647B9D163942	1	0
7	v1401	ahh	Anthony				Arvelo	1	C815B29CD8F546BBBB4C647B9D163942	1	0
142	v1709	aid	Genesis				Gonzalez	1	5E6A3E3B939B4577B104FA8658206E9E	3	0
805	v2445	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
806	v2446	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
542	root	ysswTE	\N	\N	\N	\N	\N	28	CA9EE2E34F384E95A5FA26769C5864B8	1	0
807	v2447	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
808	v2448	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
619	root	kHZpKG	\N	\N	\N	\N	\N	36	CA9EE2E34F384E95A5FA26769C5864B8	1	0
470	root	avp9z	\N	\N	\N	\N	\N	7	CA9EE2E34F384E95A5FA26769C5864B8	1	0
637	root	cat	\N	\N	\N	\N	\N	50	CA9EE2E34F384E95A5FA26769C5864B8	2	0
809	v2449	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
465	root	1E8ph	\N	\N	\N	\N	\N	2	CA9EE2E34F384E95A5FA26769C5864B8	1	0
810	v2450	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
90	v1601	ahh	Ruben				Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
91	v1602	abs	Paula	Barbot			Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
92	v1603	ace	Gregory				Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
811	v2451	hat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
93	v1604	add	Shaun				Doyle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
812	v2452	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
94	v1605	aft	Joshua				Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
95	v1606	ape	Diosmairi				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
96	v1607	and	Emely				Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
97	v1608	aim	Genesis				Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
98	v1609	aid	Sharon				Kelly	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
99	v1610	air	Maximo				Lebron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
100	v1611	all	William				Lewandowski	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
134	v1701	ahh	Jared				Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
813	v2453	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
814	v2454	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
497	root		\N	\N	\N	\N	\N	24	CA9EE2E34F384E95A5FA26769C5864B8	3	0
815	v2455	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
816	v2456	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
623	root	vi85	\N	\N	\N	\N	\N	39	C11F30815A9C49B9A83B61A285EA11F9	3	0
817	v2457	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
818	v2458	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
819	v2459	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
820	v2460	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
821	v2461	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
152	v1719	arm	Victor				Rivera	1	3DEE205D86BC461FA4271EF4BD190A0C	10	0
822	v2462	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
823	v2463	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
824	v2464	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
825	v2465	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
826	v2466	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
135	v1702	abs	Celine				Beltran	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
827	v2467	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
828	v2468	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
137	v1704	add	Donte				Burton	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
829	v2469	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
138	v1705	aft	Brandon				Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
139	v1706	ape	Waleska	Chaves			Quesada	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
830	v2470	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
831	v2471	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
140	v1707	and	Joshua	Dela			Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
626	root	vl85y bat	\N	\N	\N	\N	\N	42	5E6A3E3B939B4577B104FA8658206E9E	1	0
832	v2472	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
833	v2473	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
834	v2474	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
145	v1712	amp	Jaden				Jordan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
835	v2475	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
836	v2476	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
837	v2477	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
838	v2478	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
839	v2479	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
840	v2480	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
71	v1518	ark	Pamela				Bonifacio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
72	v1519	arm	Marlon				Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
73	v1520	art	Kiara				Figuereo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
74	v1521	ash	Nicole				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
75	v1522	ask	Kiara				Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
76	v1523	ate	Nicola				Izzard	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
136	v1703	ace	Tytiona				Booker	1	3D384CB2349B41299A3B5A133AB9E3F8	35	1
144	v1711	all	Justine				Jones	1	3D384CB2349B41299A3B5A133AB9E3F8	15	0
141	v1708	aim	Ciennali				Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	4	0
148	v1715	apt	Paola	Munoz			Navarro	1	9EC218587C01452C9EB49F52EB2DD1DD	1	0
77	v1524	ave	Howard				Jiang	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
153	v1720	art	Evelyn				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
150	v1717	arf	Chaneli				Nolasco	1	5E6A3E3B939B4577B104FA8658206E9E	3	0
841	v2481	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
842	v2482	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
843	v2483	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
844	v2484	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
845	v2485	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
846	v2486	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
847	v2487	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
848	v2488	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
885	aamigon-jose	v185 bat	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	3	0
849	v2489	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
850	v2490	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
851	v2491	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
852	v2492	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
624	root	v1822ask	\N	\N	\N	\N	\N	40	5E6A3E3B939B4577B104FA8658206E9E	3	0
853	v2493	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
146	v1713	ant	Jesse	Magobet			Jr	1	3DEE205D86BC461FA4271EF4BD190A0C	1	0
854	v2494	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
855	v2495	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
856	v2496	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
857	v2497	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
858	v2498	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
859	v2499	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
863	root	cQ4jn	\N	\N	\N	\N	\N	57	CA9EE2E34F384E95A5FA26769C5864B8	1	0
620	root	jM808	\N	\N	\N	\N	\N	37	CA9EE2E34F384E95A5FA26769C5864B8	1	0
889	Mary	Xd1sb	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
870	r		\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
200	v1815	apt	Miguel				Martinez	1	0CFFCBC851984A4281C23D34FC400445	9	0
149	v1716	arc	Tamthu				Nguyen	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
543	root	TkWAh3	\N	\N	\N	\N	\N	29	CA9EE2E34F384E95A5FA26769C5864B8	1	0
874	Ethan	lqhMm	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
627	root	AckQU	\N	\N	\N	\N	\N	43	CA9EE2E34F384E95A5FA26769C5864B8	1	0
878	Hailey	pzwaz3	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
466	root	28TMm	\N	\N	\N	\N	\N	3	CA9EE2E34F384E95A5FA26769C5864B8	1	0
471	root	Mu8xDj	\N	\N	\N	\N	\N	8	CA9EE2E34F384E95A5FA26769C5864B8	1	0
318	v2029	baa	Jaelynn				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
638	root	lolololololololo	\N	\N	\N	\N	\N	51	CA9EE2E34F384E95A5FA26769C5864B8	1	0
867	V2004	add	\N	\N	\N	\N	\N	1	5E6A3E3B939B4577B104FA8658206E9E	3	0
881	Haley	mfSMe2	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
320	v2031	bag	Daniel				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
467	root	YTRpH	\N	\N	\N	\N	\N	4	CA9EE2E34F384E95A5FA26769C5864B8	1	0
472	root	bpBV6	\N	\N	\N	\N	\N	9	CA9EE2E34F384E95A5FA26769C5864B8	1	0
290	v2001	ahh	Yandel				Alvarez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
292	v2003	ace	Eliyah				Clark	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
295	v2006	ape	Patrick				Daly	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
304	v2015	apt	Frank	Nguyen			Do	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
298	v2009	aid	Allessandra				Lilo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
299	v2010	air	Lamir				Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
302	v2013	ant	Devin				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
303	v2014	app	He				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
628	root	t4Uotf	\N	\N	\N	\N	\N	44	CA9EE2E34F384E95A5FA26769C5864B8	1	0
860	root	LSMJhd	\N	\N	\N	\N	\N	54	CA9EE2E34F384E95A5FA26769C5864B8	1	0
327	v2038	bed	Danny				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	3	0
875	Nicole	EHddV	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
864	root	aZourj	\N	\N	\N	\N	\N	58	CA9EE2E34F384E95A5FA26769C5864B8	1	0
475	root	81555916	\N	\N	\N	\N	\N	12	CA9EE2E34F384E95A5FA26769C5864B8	10	0
498	root	abc	\N	\N	\N	\N	\N	25	5E6A3E3B939B4577B104FA8658206E9E	4	0
322	v2033	ban	Lilah				Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
328	v2039	bee	Chaveliz	Reyes			Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
329	v2040	beg	Kalah				Rosario	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
330	v2041	ben	Alexis				Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
319	v2030	bit	Christian				Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	2	1
301	v2012	amp	Gabriella				Mystil	1	CA9EE2E34F384E95A5FA26769C5864B8	2	0
326	v2037	bay	Diego				Morales	1	C815B29CD8F546BBBB4C647B9D163942	1	0
321	v2032	bam	Lymari				Loftus	1	C815B29CD8F546BBBB4C647B9D163942	2	1
154	v1721	ash	Samir				Sullivan	1	CA9EE2E34F384E95A5FA26769C5864B8	8	0
305	v2016	arc	Jordan				Pipkin	1	C815B29CD8F546BBBB4C647B9D163942	3	3
294	v2005	aft	Amirrah				Conde	1	C815B29CD8F546BBBB4C647B9D163942	4	7
323	v2034	bap	Joshua				Mcafee	1	C815B29CD8F546BBBB4C647B9D163942	1	0
151	v1718	ark	Aidan				Ramirez	1	3D384CB2349B41299A3B5A133AB9E3F8	1	0
223	v1838	bed	Elias				Merced	1	1353E9D5614D460FA32E67853B6BA6D8	5	0
211	v1826	axe	Leilani				Burgos	1	C815B29CD8F546BBBB4C647B9D163942	3	0
296	v2007	and	Leanny				Delacruz	1	C815B29CD8F546BBBB4C647B9D163942	6	0
538	root	mibesfat	\N	\N	\N	\N	\N	26	CA9EE2E34F384E95A5FA26769C5864B8	1	0
544	root	4ibQH3	\N	\N	\N	\N	\N	30	CA9EE2E34F384E95A5FA26769C5864B8	1	0
621	root	1Nkucc	\N	\N	\N	\N	\N	38	CA9EE2E34F384E95A5FA26769C5864B8	1	0
331	v2042	bet	Antonio				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	7	0
325	v2036	bat	Adrianna				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	10	0
307	v2018	ark	Alex				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
308	v2019	arm	Jesus				Terreforte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
238	v1902	abs	Julio				Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
240	v1904	add	Alexander				Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
241	v1905	aft	Luis				Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
297	v2008	aim	Elijah				Desamour	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
871	slenderman	jeff the  killer	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	6	0
879	cool	cool	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	9	0
882	Alexa	G2TSB	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
886	Emily	2h67T	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
476	root	power	\N	\N	\N	\N	\N	13	CA9EE2E34F384E95A5FA26769C5864B8	3	0
861	root	teH8y6	\N	\N	\N	\N	\N	55	CA9EE2E34F384E95A5FA26769C5864B8	1	0
629	root	pD7KH	\N	\N	\N	\N	\N	45	CA9EE2E34F384E95A5FA26769C5864B8	1	0
868	juaneudg	dino	\N	\N	\N	\N	\N	1	6F4455B55B4240F3B4738DD9DB3EAF40	1	0
539	1	ark	\N	\N	\N	\N	\N	26	CA9EE2E34F384E95A5FA26769C5864B8	1	0
545	root	pBGMb0	\N	\N	\N	\N	\N	31	CA9EE2E34F384E95A5FA26769C5864B8	1	0
872	jquinones-castro	blue	\N	\N	\N	\N	\N	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
883	Eli	XQ7EYP	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
347	v2107	and	John				Colon	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
371	v2131	bag	Lianna				Adames	1	C11F30815A9C49B9A83B61A285EA11F9	7	0
367	v2127	aye	Chastity				Rivera	1	C11F30815A9C49B9A83B61A285EA11F9	9	0
370	v2130	bit	Kirian	Vargas			Calcano	1	CA9EE2E34F384E95A5FA26769C5864B8	6	0
344	v2104	add	Yanely				Collado	1	C11F30815A9C49B9A83B61A285EA11F9	10	0
887	Ryan	dCRdsZ	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
346	v2106	ape	Marielis				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
348	v2108	aim	Michael				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
351	v2111	all	Michael				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
352	v2112	amp	Yurielis				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
353	v2113	ant	Genesis				Galvez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
342	v2102	abs	Julian				Aviles	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
356	v2116	arc	Azora				Goodwin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
362	v2122	ask	Devin				Nugyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
364	v2124	ave	Alina				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
366	v2126	axe	Edgardo				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
369	v2129	baa	Jayzn				Vargas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
349	v2109	aid	Ebrianna				Cruz	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
358	v2118	ark	Francis				Hillsee	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
876	Lucky	CQIqT	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
477	root		\N	\N	\N	\N	\N	14	CA9EE2E34F384E95A5FA26769C5864B8	3	0
630	root	JHm0pA	\N	\N	\N	\N	\N	46	CA9EE2E34F384E95A5FA26769C5864B8	1	0
490	root	abc	\N	\N	\N	\N	\N	18	CA9EE2E34F384E95A5FA26769C5864B8	4	0
546	root	gyuYpl	\N	\N	\N	\N	\N	32	CA9EE2E34F384E95A5FA26769C5864B8	1	0
862	root	LjL1e	\N	\N	\N	\N	\N	56	CA9EE2E34F384E95A5FA26769C5864B8	1	0
866	v200		\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	2	0
869	cs.fhbrb	msvjhbergtbjkrt	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
640	root	v1822\\	\N	\N	\N	\N	\N	52	C11F30815A9C49B9A83B61A285EA11F9	2	0
873	Brianeudg	DragonZrow	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	9	0
877	freeman	AIDngT	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
880	Gabriella	54f3QZ	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
884	Luke	sorVb	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
332	v2043	bib	Isis				Torres	1	C815B29CD8F546BBBB4C647B9D163942	7	10
237	v1901	ahh	Angelis				Bernardy	1	CA9EE2E34F384E95A5FA26769C5864B8	6	0
324	v2035	bar	Faith				Mendendez	1	C815B29CD8F546BBBB4C647B9D163942	2	5
355	v2115	apt	Melaney				Gonzalez	1	6F4455B55B4240F3B4738DD9DB3EAF40	3	2
291	v2002	abs	Shadir				Brown	1	C815B29CD8F546BBBB4C647B9D163942	5	8
306	v2017	arf	Unique				Rodriquez	1	C815B29CD8F546BBBB4C647B9D163942	2	2
365	v2125	awe	Siani				Pagan	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
354	v2114	app	Nelson				Garcia	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	8	5
350	v2110	air	Klaritza				Delarosa	1	C11F30815A9C49B9A83B61A285EA11F9	5	0
368	v2128	ays	Nicholas				Torres	1	6F4455B55B4240F3B4738DD9DB3EAF40	9	6
343	v2103	ace	Yvanna				Burgos	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
359	v2119	arm	Paula				Jarmul	1	C815B29CD8F546BBBB4C647B9D163942	2	10
357	v2117	arf	Heaven				Hernandez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
363	v2123	ate	Miaizabella				Nicasio	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
345	v2105	aft	Anthony				Colon	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
361	v2121	ash	Guy	Mystil			III	1	66626D8AEE4E474B8CFEC8A4B68AA51C	3	5
226	v1841	ben	Juliza				Portillo	1	C815B29CD8F546BBBB4C647B9D163942	13	0
341	v2101	ahh	Kayla				Aponte	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
360	v2120	art	Alexis	Tina			McLeod	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
216	v1831	bag	Reece	Gibson			Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	4	0
888	gobiz	L8S3id	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
386	v2146	bin	Wilgerleez	Mercedes			Marte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
478	root		\N	\N	\N	\N	\N	15	CA9EE2E34F384E95A5FA26769C5864B8	2	0
505	v2161	bio	Luis	Vidro			III	1	C11F30815A9C49B9A83B61A285EA11F9	3	0
510	v2166	bio	Layla				Hill	1	C11F30815A9C49B9A83B61A285EA11F9	7	0
491	root	abc	\N	\N	\N	\N	\N	19	CA9EE2E34F384E95A5FA26769C5864B8	4	0
502	v2158	bio	Justin	Suchite			Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
504	v2160	bio	Henry				Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
515	v2171	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
516	v2172	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
508	v2164	big	Madison				Fermin	1	5E6A3E3B939B4577B104FA8658206E9E	4	0
506	v2162	bio	Samuel	Whitman			Frazier	1	5E6A3E3B939B4577B104FA8658206E9E	6	0
547	root	breslin	\N	\N	\N	\N	\N	33	CA9EE2E34F384E95A5FA26769C5864B8	2	0
662	v2301	ahh	Jason				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
663	v2302	abc	Haily				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
664	v2303	ace	Giovanna				Pierre	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
512	v2168	bio	New				Student	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
665	v2304	add	Carlos				Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
666	v2305	aft	Desiree				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
667	v2306	ape	Mariline				Obrien	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
511	v2167	bio	Samual				Dowling	1	C11F30815A9C49B9A83B61A285EA11F9	5	0
668	v2307	and	Trial				Trial	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
669	v2308	aim	Fransisco				Fransisco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
670	v2309	aid	Iyana				Iyana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
671	v2310	air	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
631	root	hq9FA	\N	\N	\N	\N	\N	47	CA9EE2E34F384E95A5FA26769C5864B8	1	0
672	v2311	all	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
673	v2312	amp	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
674	v2313	ant	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
675	v2314	app	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
509	v2165	bio	Alexander				Sanchez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
676	v2315	apt	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
677	v2316	arc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
678	v2317	arf	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
679	v2318	ark	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
680	v2319	arm	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
681	v2320	art	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
682	v2321	ash	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
683	v2322	ask	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
684	v2323	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
641	root	v1821	\N	\N	\N	\N	\N	53	C11F30815A9C49B9A83B61A285EA11F9	2	0
685	v2324	ave	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
686	v2325	awe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
687	v2326	axe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
688	v2327	aye	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
689	v2328	ays	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
690	v2329	baa	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
691	v2330	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
692	v2331	bag	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
501	v2157	bio	Jenavi				Severino	1	66626D8AEE4E474B8CFEC8A4B68AA51C	1	0
693	v2332	bam	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
694	v2333	ban	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
695	v2334	bap	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
696	v2335	bar	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
697	v2336	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
698	v2337	bay	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
699	v2338	bed	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
700	v2339	bee	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
701	v2340	beg	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
702	v2341	ben	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
703	v2342	bet	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
704	v2343	bib	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
705	v2344	bid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
706	v2345	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
507	v2163	big	Bianka				Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	7	0
548	v1537	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
549	v1538	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
550	v1539	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
479	root		\N	\N	\N	\N	\N	16	CA9EE2E34F384E95A5FA26769C5864B8	8	0
551	v1540	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
552	v1541	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
553	v1542	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
514	v2170	bio	New				Student	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
503	v2159	bio	Emilio				Tapia	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
554	v1543	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
555	v1544	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
556	v1545	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
557	v1647	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
558	v1648	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
559	v1649	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
560	v1650	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
561	v1651	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
562	v1652	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
563	v1653	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
564	v1654	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
565	v1655	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
566	v1656	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
567	v1657	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
569	v1754	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
570	v1755	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
571	v1756	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
572	v1757	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
573	v1758	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
574	v1759	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
575	v1760	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
576	v1761	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
577	v1762	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
578	v1763	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
579	v1854	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
580	v1855	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
581	v1856	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
582	v1857	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
583	v1858	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
584	v1859	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
585	v1860	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
586	v1861	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
587	v1862	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
588	v1954	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
589	v1955	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
590	v1956	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
591	v1957	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
592	v1958	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
593	v1959	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
594	v1960	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
595	v1961	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
596	v1962	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
597	v2052	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
598	v2053	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
599	v2054	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
600	v2055	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
601	v2056	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
602	v2057	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
603	v2058	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
604	v2059	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
605	v2060	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
606	v2173	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
607	v2174	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
608	v2175	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
609	v2176	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
610	v2177	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
611	v2178	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
612	v2179	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
613	v2180	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
614	v2181	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
615	v2182	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
632	root	asdfghjkl	\N	\N	\N	\N	\N	48	CA9EE2E34F384E95A5FA26769C5864B8	6	0
707	v2346	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
708	v2347	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
709	v2348	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
710	v2349	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
120	v1631	bag	Robert				Hiciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
711	v2350	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
334	v2045	bib	Allan				Ortiz	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
712	v2351	hat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
713	v2352	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
714	v2353	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
568	v1753	bin	New				Student	1	C815B29CD8F546BBBB4C647B9D163942	2	1
186	v1801	ahh	Juan				Ayala	1	695A7607FE8A4E27AB80652C45C84FA8	2	0
195	v1810	air	Isael				Jimenez	1	C815B29CD8F546BBBB4C647B9D163942	7	0
493	root	abcu	\N	\N	\N	\N	\N	20	CA9EE2E34F384E95A5FA26769C5864B8	1	0
715	v2354	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
716	v2355	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
717	v2356	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
718	v2357	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
719	v2358	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
720	v2359	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
721	v2360	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
722	v2361	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
723	v2362	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
724	v2363	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
187	v1802	abs	Lanya				Bell	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
255	v1919	arm	Erik				Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
256	v1920	art	Jaslin	Vasquez			Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
257	v1921	ash	Brandon				Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
260	v1924	ave	Genesis				Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
264	v1928	ays	Gabriella	Gibson			Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
633	root	asdfghjkl	\N	\N	\N	\N	\N	49	CA9EE2E34F384E95A5FA26769C5864B8	8	0
267	v1931	bag	Mya				Lowry	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
725	v2364	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
333	v2044	bib	Jaden				Camillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
726	v2365	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
727	v2366	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
190	v1805	aft	Stephanie				Donato	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
194	v1809	aid	Jonathan	Guerrero			Melchor	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
196	v1811	all	Jenny				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
198	v1813	ant	Victor				Luna	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
202	v1817	arf	Christina				Negron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
728	v2367	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
729	v2368	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
730	v2369	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
731	v2370	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
732	v2371	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
733	v2372	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
734	v2373	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
192	v1807	and	Fabiana				Fred	1	CA9EE2E34F384E95A5FA26769C5864B8	2	0
735	v2374	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
736	v2375	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
737	v2376	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
738	v2377	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
739	v2378	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
740	v2379	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
741	v2380	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
742	v2381	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
743	v2382	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
340	v2051	cat	Aryana				Rosario	1	6F4455B55B4240F3B4738DD9DB3EAF40	2	0
160	v1727	aye	Yassel				Baez	1	6F4455B55B4240F3B4738DD9DB3EAF40	6	0
199	v1814	app	Christopher				Martinez	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
206	v1821	ash	Ashley				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
210	v1825	awe	Adriana				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
212	v1827	aye	Fernando	Cargua			Buestan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
213	v1828	ays	Miguel				Collazo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
214	v1829	baa	Karina				Cotto	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
215	v1830	bit	Jefferson				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
374	v2134	bap	Mariah				Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
375	v2135	bar	Amairlys				Caseras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
376	v2136	bat	Catherine				Cortez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
261	v1925	awe	Edwin	Colon			III	1	C815B29CD8F546BBBB4C647B9D163942	6	4
193	v1808	aim	Ledyn				Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	7	0
262	v1926	axe	Carlos				Diaz	1	C815B29CD8F546BBBB4C647B9D163942	6	8
266	v1930	bit	Matthew	Lampert			Dimperio	1	C815B29CD8F546BBBB4C647B9D163942	7	0
253	v1917	arf	Richel				Nunez	1	C815B29CD8F546BBBB4C647B9D163942	4	1
337	v2048	bib	Bre				Rivera	1	C815B29CD8F546BBBB4C647B9D163942	2	8
191	v1806	ape	Desmond				Dowling	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	2	0
336	v2047	bib	Shawnese				Kervin	1	C815B29CD8F546BBBB4C647B9D163942	5	2
339	v2050	cat	David				Amigon	1	C815B29CD8F546BBBB4C647B9D163942	5	0
338	v2049	bib	Hugh				Lin	1	3D384CB2349B41299A3B5A133AB9E3F8	21	0
201	v1816	arc	Milagros				Mejia	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	1	0
265	v1929	baa	James				Harris	1	C815B29CD8F546BBBB4C647B9D163942	8	0
188	v1803	ace	Angel				Bernardy	1	C815B29CD8F546BBBB4C647B9D163942	8	0
197	v1812	amp	Nicholas				Lewandowski	1	3D384CB2349B41299A3B5A133AB9E3F8	58	0
189	v1804	add	Daniel				Diaz	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
378	v2138	bed	Millie				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
379	v2139	bee	Luz				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
380	v2140	beg	Kaydence				Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
384	v2144	bid	Bo				Greenfield	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
387	v2147	bio	Giaminh				Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
388	v2148	bio	Danny				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
395	v2155	bio	Justin	Suchite			Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
744	v2383	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
208	v1823	ate	Adrian				Terrero	1	5E6A3E3B939B4577B104FA8658206E9E	3	0
373	v2133	ban	Jesus	Avalos			Jr	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
390	v2150	bio	Marcos				Perez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
494	root		\N	\N	\N	\N	\N	21	CA9EE2E34F384E95A5FA26769C5864B8	1	0
745	v2384	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
389	v2149	bio	Javier				Oquendo	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
385	v2145	big	India	Mari	Izzard		Salas	1	6F4455B55B4240F3B4738DD9DB3EAF40	4	0
396	v2156	bio	Emilio				Tapia	1	6F4455B55B4240F3B4738DD9DB3EAF40	1	0
207	v1822	ask	Serenety				Rivera	1	3DEE205D86BC461FA4271EF4BD190A0C	4	0
205	v1820	art	Brian				Ramos	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
381	v2141	ben	Brayner				Estevez	1	CA9EE2E34F384E95A5FA26769C5864B8	11	0
203	v1818	ark	Minh	Tai			Nguyen	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
204	v1819	arm	Charil				Nolasco	1	C11F30815A9C49B9A83B61A285EA11F9	8	0
746	v2385	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
8	v1402	abs	Damyer				Batties	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
9	v1403	ace	Johnson				Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
10	v1404	add	Carina				Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
11	v1405	aft	Edward	Clark			Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
12	v1406	ape	Michael				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
13	v1407	and	Annalyse				Feliciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
14	v1408	aim	Khayree				Hurst	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
15	v1409	aid	Oscar	Lomeli			Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
16	v1410	air	Alex	Lopez			Pineda	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
17	v1411	all	Curtis				McCoy	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
18	v1412	amp	Junior	Tommy			Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
19	v1413	ant	Richard				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
20	v1414	app	Ashley				Norwood	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
21	v1415	apt	Yamilex				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
22	v1416	arc	Christina				Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
23	v1417	arf	Melanie				Posada	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
24	v1418	ark	Briana				Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
25	v1419	arm	Darien				Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
26	v1420	art	Roberto				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
27	v1421	ash	Jasmin				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
28	v1422	ask	Cindy				Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
29	v1423	ate	Jasibel				Vasquez-Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
30	v1424	ave	Andres				Adames	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
31	v1425	awe	Nashyra				Burgess	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
32	v1426	axe	Jose				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
33	v1427	aye	Lucilenny				Florentino	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
34	v1428	ays	Frailyn				Francisco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
35	v1429	baa	Kastiani	Gonzalez			Solano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
36	v1430	bit	Johnny				Hua	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
37	v1431	bag	Shu				Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
38	v1432	bam	Jennifer				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
39	v1433	ban	Rafael				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
40	v1434	bap	Caroline				Pena	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
41	v1435	bar	Jason				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
42	v1436	bat	Tiffany				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
43	v1437	bay	Tommy				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
44	v1438	bed	Martin				Redanauer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
45	v1439	bee	Joseph				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
46	v1440	beg	Alexis				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
47	v1441	ben	Emanuel				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
48	v1442	bet	Isaura				Sanguinetti	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
49	v1443	bib	Vitylia				Santigo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
50	v1444	bid	Kylik				Taylor	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
392	v2152	bio	Reinayah				Ramos	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
382	v2142	bet	Javier				Garcia	1	7B20214AA4AA445AA720062C6F1B5C58	3	0
394	v2154	bio	Jenavi				Severino	1	6F4455B55B4240F3B4738DD9DB3EAF40	3	5
383	v2143	bib	Michael				German	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
391	v2151	bio	Duy				Pham	1	66626D8AEE4E474B8CFEC8A4B68AA51C	9	8
377	v2137	bay	Samara				Cruz	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
372	v2132	bam	Guadalupe				Avalos	1	6F4455B55B4240F3B4738DD9DB3EAF40	2	1
393	v2153	bio	Israel				Santiago	1	6F4455B55B4240F3B4738DD9DB3EAF40	10	6
51	v1445	big	Luis				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
52	v1446	bin	Caroline				Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
53	v1447	bee	Mayralee				Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
78	v1525	awe	Neshaiyah				Loney	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
79	v1526	axe	Luis				Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
80	v1527	aye	Ashley				Meregildo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
81	v1528	ays	An				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
82	v1529	baa	Marilee				Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
83	v1530	bit	Nathaniel				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
84	v1531	bag	Christian				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
85	v1532	bam	Christina	Marie			Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
86	v1533	ban	Joseph				Wetherill	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
87	v1534	bag	Chuong				Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
88	v1535	bat	Deja				Mason	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
89	v1536	bat	Hunter				Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
102	v1613	ant	Magalis				Mota	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
103	v1614	app	Thanh				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
106	v1617	arf	Timothy				Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
107	v1618	ark	Zachary				Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
108	v1619	arm	Ryan				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
109	v1620	art	Ciara				Skinner	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
110	v1621	ash	Sasha				Vidro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
111	v1622	ask	Christopher	Campverde			Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
112	v1623	ate	Lily				Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
113	v1624	ave	Lukas				Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
114	v1625	awe	Layani				Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
115	v1626	axe	Alexandria				Furlow	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
116	v1627	aye	Abigale				Gibson	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
118	v1629	baa	Timothy				Gordon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
119	v1630	bit	Wylid				Harmon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
122	v1633	ban	Francis	Lowry			III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
123	v1634	bap	Destiny	Ngo			Maysonet	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
124	v1635	bar	Randy				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
125	v1636	bat	Andres				Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
126	v1637	bay	Hailey				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
127	v1638	bed	Anthony				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
128	v1639	bee	Alexandra				Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
129	v1642	bet	Anna				Truong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
130	v1643	bit	Amber				Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
131	v1644	bit	Marcos				Alexander	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
132	v1645	bit	Bryan				Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
133	v1646	bit	Sandra				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
156	v1723	ate	Nataly				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
159	v1726	axe	Jonathan	A			Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
242	v1906	ape	Tam				Lee	1	3DEE205D86BC461FA4271EF4BD190A0C	5	0
162	v1729	baa	Richard				Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
163	v1730	bit	Aryana				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
165	v1732	bam	Ollie				Days	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
166	v1733	ban	Louis				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
170	v1737	bay	Nicholas				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
173	v1740	beg	Gianna				Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
180	v1747	bip	Jaslin				Seck	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
184	v1751	bin	Calvin				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
185	v1752	bin	Alexander				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
218	v1833	ban	Vivian				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
222	v1837	bay	Makel				Martin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
747	v2386	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
224	v1839	bee	Valerie				Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
225	v1840	beg	Ai	Nhi			Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
748	v2387	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
227	v1842	bet	Jacelynne	Quinones			Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
229	v1844	bid	Joel	Rivera			Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
230	v1845	big	Brianna				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
231	v1846	bin	Joshua				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
233	v1848	bin	Christopher				Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
234	v1849	bin	Terrell				Wood	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
236	v1851	bit	Bangelis				Cosma	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
243	v1907	and	Lesly				Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
168	v1735	bar	Jack				Flynn	1	6F4455B55B4240F3B4738DD9DB3EAF40	1	0
228	v1843	bib	Markus				Richards	1	66626D8AEE4E474B8CFEC8A4B68AA51C	10	0
121	v1632	bam	Destiny				Knight	1	695A7607FE8A4E27AB80652C45C84FA8	1	3
220	v1835	bar	Wei				Lin	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
235	v1850	bit	Ashanti				Lopez	1	9EC218587C01452C9EB49F52EB2DD1DD	2	0
117	v1628	ays	Andre				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	5	0
104	v1615	apt	Maria				Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	6	0
219	v1834	bap	Richard				Lillo	1	3DEE205D86BC461FA4271EF4BD190A0C	5	0
175	v1742	bet	Jason				Hua	1	5E6A3E3B939B4577B104FA8658206E9E	2	0
105	v1616	arc	Thuy				Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	3	0
221	v1836	bat	Israel				Lugo	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
244	v1908	aim	Bryan				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
246	v1910	air	Phoenix				Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
247	v1911	all	Christ				Guzman	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
249	v1913	ant	Diveah				Henry	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
250	v1914	app	Adam				Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
252	v1916	arc	Rachel				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
167	v1734	bap	Britney				Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
181	v1748	bip	Vy				Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
177	v1744	bid	Najalie				Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
274	v1938	bed	Aldo				Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
276	v1940	beg	Ricardo				Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
285	v1949	abc	Omar				Balouch	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
286	v1950	bat	Nathaniel				Hamilton	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
287	v1951	cat	Ahmir				Porter	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
468	root	RssnDJ	\N	\N	\N	\N	\N	5	CA9EE2E34F384E95A5FA26769C5864B8	1	0
473	root	wywWVK	\N	\N	\N	\N	\N	10	CA9EE2E34F384E95A5FA26769C5864B8	1	0
271	v1935	bar	Lamanh				Nguyen	1	7B20214AA4AA445AA720062C6F1B5C58	2	0
268	v1932	bam	Isabel				Lugo	1	CA9EE2E34F384E95A5FA26769C5864B8	9	0
749	v2388	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
750	v2389	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
269	v1933	ban	Jada				Mack	1	CA9EE2E34F384E95A5FA26769C5864B8	7	0
481	v1853	bat	Scott				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
751	v2390	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
752	v2391	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
248	v1912	amp	Destiny				Haley	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
288	v1952	cat	Joseph				Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	9	0
245	v1909	aid	Daniel				DelRosario	1	CA9EE2E34F384E95A5FA26769C5864B8	4	0
753	v2392	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
176	v1743	bib	Natavia				Lewis	1	C11F30815A9C49B9A83B61A285EA11F9	4	0
161	v1728	ays	Marina				Burgos	1	0CFFCBC851984A4281C23D34FC400445	7	0
754	v2393	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
755	v2394	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
495	root	abc	\N	\N	\N	\N	\N	22	CA9EE2E34F384E95A5FA26769C5864B8	11	0
756	v2395	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
757	v2396	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
178	v1745	big	Annalley				Portillo	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
758	v2397	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
617	root	abc	\N	\N	\N	\N	\N	34	CA9EE2E34F384E95A5FA26769C5864B8	6	0
759	v2398	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
277	v1941	ben	Quan				Tran	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
760	v2399	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
761	v2401	ahh	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
762	v2402	abc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
763	v2403	ace	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
272	v1936	bat	Tamthi				Nguyen	1	C815B29CD8F546BBBB4C647B9D163942	2	10
282	v1946	bag	Suzi				Lin	1	C815B29CD8F546BBBB4C647B9D163942	6	5
157	v1724	ave	Wilson				Torres	1	3D384CB2349B41299A3B5A133AB9E3F8	2	0
179	v1746	bin	Jorden				Richards	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	12	0
283	v1947	bet	Astrid				Cordero	1	C815B29CD8F546BBBB4C647B9D163942	2	0
258	v1922	ask	Lily				Billarrial	1	C815B29CD8F546BBBB4C647B9D163942	7	11
101	v1612	amp	Jonathan				Mejia	1	C815B29CD8F546BBBB4C647B9D163942	1	0
289	v1953	cat	Lyanelis				Oquendo	1	C815B29CD8F546BBBB4C647B9D163942	4	0
280	v1944	big	Ethan				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
251	v1915	apt	Jose				Morales	1	C815B29CD8F546BBBB4C647B9D163942	1	0
217	v1832	bam	Halle				Jimenez	1	C815B29CD8F546BBBB4C647B9D163942	9	0
182	v1749	bio	William				Santana	1	695A7607FE8A4E27AB80652C45C84FA8	3	0
158	v1725	awe	Tattianna				Zelaya	1	9EC218587C01452C9EB49F52EB2DD1DD	3	0
232	v1847	bin	Abrianna				Santiago	1	C815B29CD8F546BBBB4C647B9D163942	7	0
174	v1741	ben	Sameer				Hill	1	01938BB1EE4E47319738DAC239A2B141	1	0
172	v1739	bee	Serenity				Haley	1	695A7607FE8A4E27AB80652C45C84FA8	1	0
164	v1731	bag	Meira				Coston	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
279	v1943	bib	Michael				Zelaya	1	C815B29CD8F546BBBB4C647B9D163942	3	0
169	v1736	bat	Gisselle				Gerena	1	695A7607FE8A4E27AB80652C45C84FA8	1	0
480	v1852	bat	Jose				Jimenez	1	695A7607FE8A4E27AB80652C45C84FA8	1	0
171	v1738	bed	Nicole				Gonzalez	1	2688E9D1A3FA4B689A3D9E41A1071C0E	20	1
275	v1939	bee	Joshua				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	4	0
259	v1923	bot	Luke				Breslin	1	3D384CB2349B41299A3B5A133AB9E3F8	160	1
764	v2404	add	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
765	v2405	aft	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
766	v2406	ape	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
767	v2407	and	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
768	v2408	aim	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
769	v2409	aid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
770	v2410	air	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
278	v1942	bet	Imani				Velazquez	1	5E6A3E3B939B4577B104FA8658206E9E	4	0
900	v2238	bed	Larissa	\N	\N	\N	Mejia	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
155	v1722	ask	Jonathan	E			Torres	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	0
254	v1918	ark	Dasha				Rios	1	C815B29CD8F546BBBB4C647B9D163942	14	0
893	v2237	bay	sean	\N	\N	\N	lopez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
896	v2242	bet	danny	\N	\N	\N	nguyen	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
890	v2253	bat	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
904	v2244			\N	\N	\N		1	CA9EE2E34F384E95A5FA26769C5864B8	2	0
281	v1945	big	Carlos				Jovel	1	C815B29CD8F546BBBB4C647B9D163942	1	0
901	v2232	ban	juan	\N	\N	\N	dei	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
270	v1934	bap	Carleigh				Marsilio	1	3D384CB2349B41299A3B5A133AB9E3F8	67	0
313	v2024	ave	Jasnelly				Castillo	1	C815B29CD8F546BBBB4C647B9D163942	9	7
209	v1824	ave	Cecilia				Valentin	1	C815B29CD8F546BBBB4C647B9D163942	4	3
293	v2004	add	Richard	Compres			Taveras	1	C815B29CD8F546BBBB4C647B9D163942	4	1
335	v2046	bib	Mariah				Alicea	1	C815B29CD8F546BBBB4C647B9D163942	1	0
300	v2011	all	Brianna	Munoz			Navarro	1	C815B29CD8F546BBBB4C647B9D163942	4	2
891	v2270	cat	genesis	\N	\N	\N	zapata	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
183	v1750	bit	Floridei				Jovel	1	3D384CB2349B41299A3B5A133AB9E3F8	80	1
895	v2269	cat	Justin	\N	\N	\N	Valesquez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
921	jbreslin33	Iggles_13	James	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
263	v1927	aye	Zamantha				Garro	1	C815B29CD8F546BBBB4C647B9D163942	4	0
513	v2169	bio	New				Student	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	8	0
914	v2246	bin	serenity	\N	\N	\N	rodriguez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
239	v1903	ace	Rafael	Cargua			Buestan	1	C815B29CD8F546BBBB4C647B9D163942	3	2
913	v2230	bit	emilia	\N	\N	\N	burgos.	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
897	v2239	bee	paola 	\N	\N	\N	montiei	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
915	1234567890	1234567890	1234567890	\N	\N	\N	1234567890	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
908	v2226	axe	marcus	\N	\N	\N	alicea	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
273	v1937	bay	Nicholas	Nguyen			Do	1	C815B29CD8F546BBBB4C647B9D163942	7	7
284	v1948	ben	Christian				Perez	1	C815B29CD8F546BBBB4C647B9D163942	2	0
909	v2228	ays	luigie	\N	\N	\N	baez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
892	v2268			\N	\N	\N		1	C11F30815A9C49B9A83B61A285EA11F9	1	0
912	v2247	bio	aiden	\N	\N	\N	smith	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
902	v2241	ben	genesis	\N	\N	\N	morales	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
911	v2248	big	haylee	\N	\N	\N	trinh	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
910	v2231	bag	Yamel	\N	\N	\N	bugos	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
916	Adam	9Zeo8i	Adam	\N	\N	\N	mzIVmtqMQRUwAHm	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
906	v2267	cat	pedro	\N	\N	\N	rojas	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
917	Isaac	MNJf6Q	Isaac	\N	\N	\N	vjHcfCuspByWLxLCTv	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
905	v2234	bap	louverture	\N	\N	\N	desamour	1	C11F30815A9C49B9A83B61A285EA11F9	2	0
903	v2240	beg	michael	\N	\N	\N	moore	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
918	coco888	KT5z1	coco888	\N	\N	\N	bDdefjUEypwNiXibcq	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
919	Madison	ybb2ZW	Madison	\N	\N	\N	nIWRhXuerSGOZB	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
920	Sebastian	oNj7L8	Sebastian	\N	\N	\N	yQCtbTnuBwFOxOs	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
894	v2233	ban	luz	\N	\N	\N	delvalle	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
147	v1714	app	Jordan				Medina	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	4	1
898	v2235	bar	azavier	\N	\N	\N	gonzalez	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
899	v2243	bib	giaminh	\N	\N	\N	nguyen	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
907	v2229	baa	mariah	\N	\N	\N	bristol	1	C11F30815A9C49B9A83B61A285EA11F9	1	0
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 921, true);


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

