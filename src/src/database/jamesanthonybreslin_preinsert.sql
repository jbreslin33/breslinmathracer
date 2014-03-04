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

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: error_log; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY error_log (id, error, error_time, username) FROM stdin;
1		2014-02-28 08:25:22.169569	v1401
2		2014-02-28 08:25:53.641803	v1401
3		2014-02-28 08:25:54.745186	v1401
4		2014-02-28 08:25:54.964779	v1401
5		2014-02-28 08:25:55.160391	v1401
\.


--
-- Name: error_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('error_log_id_seq', 5, true);


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

SELECT pg_catalog.setval('level_attempts_id_seq', 2, true);


--
-- Data for Name: levelattempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levelattempts (id, start_time, end_time, user_id, level, ref_id, score, time_warning, passed) FROM stdin;
1	2014-02-28 08:33:57.108942	2014-02-28 08:36:33.562583	7	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	t
2	2014-02-28 08:36:51.363692	\N	7	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level, failed_attempts) FROM stdin;
1	jbreslin33	Iggles_13	James	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
2	k	k		\N	\N	\N	kindergarten	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
3	jbreslin	Iggles_13	Jim	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
4	v1202	bio	Jim	\N	\N	\N	Roache	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
5	v1203	bio	Sister	\N	\N	\N	Terri	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
6	v1204	bio	Sister	\N	\N	\N	Margaret	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
8	v1402	abs	Damyer	\N	\N	\N	Batties	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
9	v1403	ace	Johnson	\N	\N	\N	Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
10	v1404	add	Carina	\N	\N	\N	Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
11	v1405	aft	Edward	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
12	v1406	ape	Michael	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
13	v1407	and	Annalyse	\N	\N	\N	Feliciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
14	v1408	aim	Khayree	\N	\N	\N	Hurst	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
15	v1409	aid	Oscar	\N	\N	\N	Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
16	v1410	air	Alex	\N	\N	\N	Pineda	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
17	v1411	all	Curtis	\N	\N	\N	McCoy	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
18	v1412	amp	Junior	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
19	v1413	ant	Richard	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
20	v1414	app	Ashley	\N	\N	\N	Norwood	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
21	v1415	apt	Yamilex	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
22	v1416	arc	Christina	\N	\N	\N	Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
23	v1417	arf	Melanie	\N	\N	\N	Posada	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
24	v1418	ark	Briana	\N	\N	\N	Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
25	v1419	arm	Darien	\N	\N	\N	Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
26	v1420	art	Roberto	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
27	v1421	ash	Jasmin	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
28	v1422	ask	Cindy	\N	\N	\N	Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
29	v1423	ate	Jasibel	\N	\N	\N	Vasquez-Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
30	v1424	ave	Andres	\N	\N	\N	Adames	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
31	v1425	awe	Nashyra	\N	\N	\N	Burgess	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
32	v1426	axe	Jose	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
33	v1427	aye	Lucilenny	\N	\N	\N	Florentino	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
34	v1428	ays	Frailyn	\N	\N	\N	Francisco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
35	v1429	baa	Kastiani	\N	\N	\N	Solano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
36	v1430	bit	Johnny	\N	\N	\N	Hua	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
37	v1431	bag	Shu	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
38	v1432	bam	Jennifer	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
39	v1433	ban	Rafael	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
40	v1434	bap	Caroline	\N	\N	\N	Pena	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
41	v1435	bar	Jason	\N	\N	\N	Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
42	v1436	bat	Tiffany	\N	\N	\N	Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
43	v1437	bay	Tommy	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
44	v1438	bed	Martin	\N	\N	\N	Redanauer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
45	v1439	bee	Joseph	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
46	v1440	beg	Alexis	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
47	v1441	ben	Emanuel	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
48	v1442	bet	Isaura	\N	\N	\N	Sanguinetti	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
49	v1443	bib	Vitylia	\N	\N	\N	Santigo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
50	v1444	bid	Kylik	\N	\N	\N	Taylor	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
51	v1445	big	Luis	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
52	v1446	bin	Caroline	\N	\N	\N	Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
53	v1447	bee	Mayralee	\N	\N	\N	Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
54	v1501	ahh	Keaira	\N	\N	\N	Archie	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
55	v1502	abs	Jacin	\N	\N	\N	Aviles	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
56	v1503	ace	Tony	\N	\N	\N	Boose	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
57	v1504	add	Tiara	\N	\N	\N	Bounyarith	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
58	v1505	aft	Ledys	\N	\N	\N	Chavez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
59	v1506	ape	Natalie	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
60	v1507	and	Pablo	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
61	v1508	aim	Dang	\N	\N	\N	Duong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
62	v1509	aid	Eliannie	\N	\N	\N	Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
63	v1510	air	Thomas	\N	\N	\N	Flynn	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
64	v1511	all	Alexandria	\N	\N	\N	Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
65	v1512	amp	Javier	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
66	v1513	ant	Destiny	\N	\N	\N	Nunez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
67	v1514	app	Kelly	\N	\N	\N	Pickering	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
68	v1515	apt	Miguel	\N	\N	\N	Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
69	v1516	arc	Christopher	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
70	v1517	arf	Rajah	\N	\N	\N	Williams	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
71	v1518	ark	Pamela	\N	\N	\N	Bonifacio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
72	v1519	arm	Marlon	\N	\N	\N	Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
73	v1520	art	Kiara	\N	\N	\N	Figuereo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
74	v1521	ash	Nicole	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
75	v1522	ask	Kiara	\N	\N	\N	Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
76	v1523	ate	Nicola	\N	\N	\N	Izzard	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
77	v1524	ave	Howard	\N	\N	\N	Jiang	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
78	v1525	awe	Neshaiyah	\N	\N	\N	Loney	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
79	v1526	axe	Luis	\N	\N	\N	Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
80	v1527	aye	Ashley	\N	\N	\N	Meregildo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
81	v1528	ays	An	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
82	v1529	baa	Marilee	\N	\N	\N	Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
83	v1530	bit	Nathaniel	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
84	v1531	bag	Christian	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
85	v1532	bam	Christina	\N	\N	\N	Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
86	v1533	ban	Joseph	\N	\N	\N	Wetherill	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
87	v1534	bag	Chuong	\N	\N	\N	Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
88	v1535	bat	Deja	\N	\N	\N	Mason	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
89	v1536	bat	Hunter	\N	\N	\N	Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
90	v1537	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
91	v1538	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
92	v1539	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
93	v1540	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
94	v1541	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
95	v1542	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
96	v1543	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
97	v1544	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
98	v1545	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
99	v1601	ahh	Ruben	\N	\N	\N	Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
100	v1602	abs	Paula	\N	\N	\N	Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
101	v1603	ace	Gregory	\N	\N	\N	Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
102	v1604	add	Shaun	\N	\N	\N	Doyle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
103	v1605	aft	Joshua	\N	\N	\N	Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
104	v1606	ape	Diosmairi	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
105	v1607	and	Emely	\N	\N	\N	Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
106	v1608	aim	Genesis	\N	\N	\N	Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
107	v1609	aid	Sharon	\N	\N	\N	Kelly	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
108	v1610	air	Maximo	\N	\N	\N	Lebron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
109	v1611	all	William	\N	\N	\N	Lewandowski	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
110	v1612	amp	Jonathan	\N	\N	\N	Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
111	v1613	ant	Magalis	\N	\N	\N	Mota	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
112	v1614	app	Thanh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
113	v1615	apt	Maria	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
114	v1616	arc	Thuy	\N	\N	\N	Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
115	v1617	arf	Timothy	\N	\N	\N	Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
116	v1618	ark	Zachary	\N	\N	\N	Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
117	v1619	arm	Ryan	\N	\N	\N	Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
118	v1620	art	Ciara	\N	\N	\N	Skinner	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
119	v1621	ash	Sasha	\N	\N	\N	Vidro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
120	v1622	ask	Christopher	\N	\N	\N	Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
121	v1623	ate	Lily	\N	\N	\N	Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
122	v1624	ave	Lukas	\N	\N	\N	Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
123	v1625	awe	Layani	\N	\N	\N	Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
124	v1626	axe	Alexandria	\N	\N	\N	Furlow	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
125	v1627	aye	Abigale	\N	\N	\N	Gibson	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
126	v1628	ays	Andre	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
127	v1629	baa	Timothy	\N	\N	\N	Gordon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
128	v1630	bit	Wylid	\N	\N	\N	Harmon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
129	v1631	bag	Robert	\N	\N	\N	Hiciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
130	v1632	bam	Destiny	\N	\N	\N	Knight	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
131	v1633	ban	Francis	\N	\N	\N	III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
132	v1634	bap	Destiny	\N	\N	\N	Maysonet	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
133	v1635	bar	Randy	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
134	v1636	bat	Andres	\N	\N	\N	Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
135	v1637	bay	Hailey	\N	\N	\N	Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
136	v1638	bed	Anthony	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
137	v1639	bee	Alexandra	\N	\N	\N	Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
138	v1642	bet	Anna	\N	\N	\N	Truong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
139	v1643	bit	Amber	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
140	v1644	bit	Marcos	\N	\N	\N	Alexander	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
141	v1645	bit	Bryan	\N	\N	\N	Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
142	v1646	bit	Sandra	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
143	v1647	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
144	v1648	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
145	v1649	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
146	v1650	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
147	v1651	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
148	v1652	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
149	v1653	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
150	v1654	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
151	v1655	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
152	v1656	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
153	v1657	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
154	v1701	ahh	Jared	\N	\N	\N	Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
155	v1702	abs	Celine	\N	\N	\N	Beltran	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
156	v1703	ace	Tytiona	\N	\N	\N	Booker	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
157	v1704	add	Donte	\N	\N	\N	Burton	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
158	v1705	aft	Brandon	\N	\N	\N	Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
159	v1706	ape	Waleska	\N	\N	\N	Quesada	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
160	v1707	and	Joshua	\N	\N	\N	Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
161	v1708	aim	Ciennali	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
162	v1709	aid	Genesis	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
163	v1710	air	Angie	\N	\N	\N	Gutierrez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
164	v1711	all	Justine	\N	\N	\N	Jones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
165	v1712	amp	Jaden	\N	\N	\N	Jordan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
166	v1713	ant	Jesse	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
167	v1714	app	Jordan	\N	\N	\N	Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
168	v1715	apt	Paola	\N	\N	\N	Navarro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
169	v1716	arc	Tamthu	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
170	v1717	arf	Chaneli	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
171	v1718	ark	Aidan	\N	\N	\N	Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
172	v1719	arm	Victor	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
173	v1720	art	Evelyn	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
174	v1721	ash	Samir	\N	\N	\N	Sullivan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
175	v1722	ask	Jonathan	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
176	v1723	ate	Nataly	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
177	v1724	ave	Wilson	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
178	v1725	awe	Tattianna	\N	\N	\N	Zelaya	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
179	v1726	axe	Jonathan	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
180	v1727	aye	Yassel	\N	\N	\N	Baez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
181	v1728	ays	Marina	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
182	v1729	baa	Richard	\N	\N	\N	Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
183	v1730	bit	Aryana	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
184	v1731	bag	Meira	\N	\N	\N	Coston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
185	v1732	bam	Ollie	\N	\N	\N	Days	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
186	v1733	ban	Louis	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
187	v1734	bap	Britney	\N	\N	\N	Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
188	v1735	bar	Jack	\N	\N	\N	Flynn	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
189	v1736	bat	Gisselle	\N	\N	\N	Gerena	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
190	v1737	bay	Nicholas	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
191	v1738	bed	Nicole	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
192	v1739	bee	Serenity	\N	\N	\N	Haley	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
193	v1740	beg	Gianna	\N	\N	\N	Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
194	v1741	ben	Sameer	\N	\N	\N	Hill	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
195	v1742	bet	Jason	\N	\N	\N	Hua	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
196	v1743	bib	Natavia	\N	\N	\N	Lewis	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
197	v1744	bid	Najalie	\N	\N	\N	Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
198	v1745	big	Annalley	\N	\N	\N	Portillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
199	v1746	bin	Jorden	\N	\N	\N	Richards	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
200	v1747	bip	Jaslin	\N	\N	\N	Seck	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
201	v1748	bip	Vy	\N	\N	\N	Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
202	v1749	bio	William	\N	\N	\N	Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
203	v1750	bit	Floridei	\N	\N	\N	Jovel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
204	v1751	bin	Calvin	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
205	v1752	bin	Alexander	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
206	v1753	bat	Hanna	\N	\N	\N	Oliveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
207	v1754	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
208	v1755	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
209	v1756	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
210	v1757	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
211	v1758	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
212	v1759	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
213	v1760	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
214	v1761	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
215	v1762	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
216	v1763	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
217	v1801	ahh	Juan	\N	\N	\N	Ayala	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
218	v1802	abs	Lanya	\N	\N	\N	Bell	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
219	v1803	ace	Angel	\N	\N	\N	Bernardy	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
220	v1804	add	Daniel	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
221	v1805	aft	Stephanie	\N	\N	\N	Donato	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
222	v1806	ape	Desmond	\N	\N	\N	Dowling	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
223	v1807	and	Fabiana	\N	\N	\N	Fred	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
224	v1808	aim	Ledyn	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
225	v1809	aid	Jonathan	\N	\N	\N	Melchor	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
226	v1810	air	Isael	\N	\N	\N	Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
227	v1811	all	Jenny	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
228	v1812	amp	Nicholas	\N	\N	\N	Lewandowski	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
229	v1813	ant	Victor	\N	\N	\N	Luna	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
230	v1814	app	Christopher	\N	\N	\N	Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
231	v1815	apt	Miguel	\N	\N	\N	Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
232	v1816	arc	Milagros	\N	\N	\N	Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
233	v1817	arf	Christina	\N	\N	\N	Negron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
234	v1818	ark	Minh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
235	v1819	arm	Charil	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
236	v1820	art	Brian	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
237	v1821	ash	Ashley	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
238	v1822	ask	Serenety	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
239	v1823	ate	Adrian	\N	\N	\N	Terrero	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
240	v1824	ave	Cecilia	\N	\N	\N	Valentin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
241	v1825	awe	Adriana	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
242	v1826	axe	Leilani	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
243	v1827	aye	Fernando	\N	\N	\N	Buestan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
244	v1828	ays	Miguel	\N	\N	\N	Collazo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
245	v1829	baa	Karina	\N	\N	\N	Cotto	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
246	v1830	bit	Jefferson	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
247	v1831	bag	Reece	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
248	v1832	bam	Halle	\N	\N	\N	Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
249	v1833	ban	Vivian	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
250	v1834	bap	Richard	\N	\N	\N	Lillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
251	v1835	bar	Wei	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
252	v1836	bat	Israel	\N	\N	\N	Lugo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
253	v1837	bay	Makel	\N	\N	\N	Martin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
254	v1838	bed	Elias	\N	\N	\N	Merced	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
255	v1839	bee	Valerie	\N	\N	\N	Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
256	v1840	beg	Ai	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
257	v1841	ben	Juliza	\N	\N	\N	Portillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
258	v1842	bet	Jacelynne	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
259	v1843	bib	Markus	\N	\N	\N	Richards	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
260	v1844	bid	Joel	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
261	v1845	big	Brianna	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
262	v1846	bin	Joshua	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
263	v1847	bin	Abrianna	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
264	v1848	bin	Christopher	\N	\N	\N	Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
265	v1849	bin	Terrell	\N	\N	\N	Wood	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
266	v1850	bit	Ashanti	\N	\N	\N	Lopez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
267	v1851	bit	Bangelis	\N	\N	\N	Cosma	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
268	v1852	bat	Jose	\N	\N	\N	Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
269	v1853	bat	Scott	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
270	v1854	bat	Alejandro	\N	\N	\N	Amigan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
271	v1855	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
272	v1856	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
273	v1857	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
274	v1858	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
275	v1859	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
276	v1860	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
277	v1861	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
278	v1862	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
279	v1901	ahh	Angelis	\N	\N	\N	Bernardy	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
280	v1902	abs	Julio	\N	\N	\N	Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
281	v1903	ace	Rafael	\N	\N	\N	Buestan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
282	v1904	add	Alexander	\N	\N	\N	Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
283	v1905	aft	Luis	\N	\N	\N	Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
284	v1906	ape	Tam	\N	\N	\N	Lee	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
285	v1907	and	Lesly	\N	\N	\N	Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
286	v1908	aim	Bryan	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
287	v1909	aid	Daniel	\N	\N	\N	DelRosario	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
288	v1910	air	Phoenix	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
289	v1911	all	Christ	\N	\N	\N	Guzman	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
290	v1912	amp	Destiny	\N	\N	\N	Haley	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
291	v1913	ant	Diveah	\N	\N	\N	Henry	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
292	v1914	app	Adam	\N	\N	\N	Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
293	v1915	apt	Jose	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
294	v1916	arc	Rachel	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
295	v1917	arf	Richel	\N	\N	\N	Nunez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
296	v1918	ark	Dasha	\N	\N	\N	Rios	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
297	v1919	arm	Erik	\N	\N	\N	Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
298	v1920	art	Jaslin	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
299	v1921	ash	Brandon	\N	\N	\N	Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
300	v1922	ask	Lily	\N	\N	\N	Billarrial	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
301	v1923	bot	Luke	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
302	v1924	ave	Genesis	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
303	v1925	awe	Edwin	\N	\N	\N	III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
304	v1926	axe	Carlos	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
305	v1927	aye	Zamantha	\N	\N	\N	Garro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
306	v1928	ays	Gabriella	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
307	v1929	baa	James	\N	\N	\N	Harris	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
308	v1930	bit	Matthew	\N	\N	\N	Dimperio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
309	v1931	bag	Mya	\N	\N	\N	Lowry	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
310	v1932	bam	Isabel	\N	\N	\N	Lugo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
311	v1933	ban	Jada	\N	\N	\N	Mack	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
312	v1934	bap	Carleigh	\N	\N	\N	Marsilio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
313	v1935	bar	Lamanh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
314	v1936	bat	Tamthi	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
315	v1937	bay	Nicholas	\N	\N	\N	Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
316	v1938	bed	Aldo	\N	\N	\N	Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
317	v1939	bee	Joshua	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
318	v1940	beg	Ricardo	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
319	v1941	ben	Quan	\N	\N	\N	Tran	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
320	v1942	bet	Imani	\N	\N	\N	Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
321	v1943	bib	Michael	\N	\N	\N	Zelaya	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
322	v1944	big	Ethan	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
323	v1945	big	Carlos	\N	\N	\N	Jovel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
324	v1946	bag	Suzi	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
325	v1947	bet	Astrid	\N	\N	\N	Cordero	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
326	v1948	ben	Christian	\N	\N	\N	Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
327	v1949	abc	Omar	\N	\N	\N	Balouch	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
328	v1950	bat	Nathaniel	\N	\N	\N	Hamilton	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
329	v1951	cat	Ahmir	\N	\N	\N	Porter	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
330	v1952	cat	Joseph	\N	\N	\N	Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
331	v1953	cat	Lyanelis	\N	\N	\N	Oquendo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
332	v1954	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
333	v1955	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
334	v1956	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
335	v1957	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
336	v1958	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
337	v1959	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
338	v1960	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
339	v1961	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
340	v1962	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
341	v2001	ahh	Yandel	\N	\N	\N	Alvarez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
342	v2002	abs	Shadir	\N	\N	\N	Brown	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
343	v2003	ace	Eliyah	\N	\N	\N	Clark	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
344	v2004	add	Richard	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
345	v2005	aft	Amirrah	\N	\N	\N	Conde	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
346	v2006	ape	Patrick	\N	\N	\N	Daly	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
347	v2007	and	Leanny	\N	\N	\N	Delacruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
348	v2008	aim	Elijah	\N	\N	\N	Desamour	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
349	v2009	aid	Allessandra	\N	\N	\N	Lilo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
350	v2010	air	Lamir	\N	\N	\N	Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
351	v2011	all	Brianna	\N	\N	\N	Navarro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
352	v2012	amp	Gabriella	\N	\N	\N	Mystil	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
353	v2013	ant	Devin	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
354	v2014	app	He	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
355	v2015	apt	Frank	\N	\N	\N	Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
356	v2016	arc	Jordan	\N	\N	\N	Pipkin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
357	v2017	arf	Unique	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
358	v2018	ark	Alex	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
359	v2019	arm	Jesus	\N	\N	\N	Terreforte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
360	v2020	art	Donathan	\N	\N	\N	Truong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
361	v2021	ash	Alex	\N	\N	\N	Acevedo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
362	v2022	ask	Zeannalie	\N	\N	\N	Bobe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
363	v2023	ate	Desiray	\N	\N	\N	Cartegna	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
364	v2024	ave	Jasnelly	\N	\N	\N	Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
365	v2025	awe	Randy	\N	\N	\N	Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
366	v2026	axe	Jason	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
367	v2027	aye	Crystal	\N	\N	\N	Conway	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
368	v2028	ays	Antonio	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
369	v2029	baa	Jaelynn	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
370	v2030	bit	Christian	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
371	v2031	bag	Daniel	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
372	v2032	bam	Lymari	\N	\N	\N	Loftus	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
373	v2033	ban	Lilah	\N	\N	\N	Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
374	v2034	bap	Joshua	\N	\N	\N	Mcafee	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
375	v2035	bar	Faith	\N	\N	\N	Mendendez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
376	v2036	bat	Adrianna	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
377	v2037	bay	Diego	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
378	v2038	bed	Danny	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
379	v2039	bee	Chaveliz	\N	\N	\N	Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
380	v2040	beg	Kalah	\N	\N	\N	Rosario	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
381	v2041	ben	Alexis	\N	\N	\N	Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
382	v2042	bet	Antonio	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
383	v2043	bib	Isis	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
384	v2044	bib	Jaden	\N	\N	\N	Camillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
385	v2045	bib	Allan	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
386	v2046	bib	Mariah	\N	\N	\N	Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
387	v2047	bib	Shawnese	\N	\N	\N	Kervin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
388	v2048	bib	Bre	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
389	v2049	bib	Hugh	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
390	v2050	cat	David	\N	\N	\N	Amigon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
391	v2051	cat	Aryana	\N	\N	\N	Rosario	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
392	v2052	cat	Alex	\N	\N	\N	Oliveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
393	v2053	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
394	v2054	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
395	v2055	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
396	v2056	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
397	v2057	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
398	v2058	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
399	v2059	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
400	v2060	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
401	v2101	ahh	Kayla	\N	\N	\N	Aponte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
402	v2102	abs	Julian	\N	\N	\N	Aviles	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
403	v2103	ace	Yvanna	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
404	v2104	add	Yanely	\N	\N	\N	Collado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
405	v2105	aft	Anthony	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
406	v2106	ape	Marielis	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
407	v2107	and	John	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
408	v2108	aim	Michael	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
409	v2109	aid	Ebrianna	\N	\N	\N	Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
410	v2110	air	Klaritza	\N	\N	\N	Delarosa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
411	v2111	all	Michael	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
412	v2112	amp	Yurielis	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
413	v2113	ant	Genesis	\N	\N	\N	Galvez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
414	v2114	app	Nelson	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
415	v2115	apt	Melaney	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
416	v2116	arc	Azora	\N	\N	\N	Goodwin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
417	v2117	arf	Heaven	\N	\N	\N	Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
418	v2118	ark	Francis	\N	\N	\N	Hillsee	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
419	v2119	arm	Paula	\N	\N	\N	Jarmul	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
420	v2120	art	Alexis	\N	\N	\N	McLeod	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
421	v2121	ash	Guy	\N	\N	\N	III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
422	v2122	ask	Devin	\N	\N	\N	Nugyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
423	v2123	ate	Miaizabella	\N	\N	\N	Nicasio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
424	v2124	ave	Alina	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
425	v2125	awe	Siani	\N	\N	\N	Pagan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
426	v2126	axe	Edgardo	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
427	v2127	aye	Chastity	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
428	v2128	ays	Nicholas	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
429	v2129	baa	Jayzn	\N	\N	\N	Vargas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
430	v2130	bit	Kirian	\N	\N	\N	Calcano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
431	v2131	bag	Lianna	\N	\N	\N	Adames	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
432	v2132	bam	Guadalupe	\N	\N	\N	Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
433	v2133	ban	Jesus	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
434	v2134	bap	Mariah	\N	\N	\N	Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
435	v2135	bar	Amairlys	\N	\N	\N	Caseras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
436	v2136	bat	Catherine	\N	\N	\N	Cortez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
437	v2137	bay	Samara	\N	\N	\N	Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
438	v2138	bed	Millie	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
439	v2139	bee	Luz	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
440	v2140	beg	Kaydence	\N	\N	\N	Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
441	v2141	ben	Brayner	\N	\N	\N	Estevez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
442	v2142	bet	Javier	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
443	v2143	bib	Michael	\N	\N	\N	German	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
444	v2144	bid	Bo	\N	\N	\N	Greenfield	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
445	v2145	big	India	\N	\N	\N	Salas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
446	v2146	bin	Wilgerleez	\N	\N	\N	Marte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
447	v2147	bio	Giaminh	\N	\N	\N	Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
448	v2148	bio	Danny	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
449	v2149	bio	Javier	\N	\N	\N	Oquendo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
450	v2150	bio	Marcos	\N	\N	\N	Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
451	v2151	bio	Duy	\N	\N	\N	Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
452	v2152	bio	Julio	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
453	v2153	bio	Cassandra	\N	\N	\N	Torress	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
454	v2154	bio	Unique	\N	\N	\N	Pierre	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
455	v2155	bio	Reinayah	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
456	v2156	bio	Israel	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
457	v2157	bio	Jenavi	\N	\N	\N	Severino	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
458	v2158	bio	Justin	\N	\N	\N	Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
459	v2159	bio	Emilio	\N	\N	\N	Tapia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
460	v2160	bio	Henry	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
461	v2161	bio	Luis	\N	\N	\N	III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
462	v2162	bio	Samuel	\N	\N	\N	Frazier	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
463	v2163	big	Bianka	\N	\N	\N	Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
464	v2164	big	Madison	\N	\N	\N	Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
465	v2165	bio	Alexander	\N	\N	\N	Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
466	v2166	bio	Layla	\N	\N	\N	Hill	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
467	v2167	bio	Samual	\N	\N	\N	Dowling	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
468	v2168	bio	Brandon	\N	\N	\N	Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
469	v2169	bio	Jimmy	\N	\N	\N	Wong	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
470	v2170	bio	Kyla	\N	\N	\N	Broken	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
471	v2171	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
472	v2172	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
473	v2173	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
474	v2174	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
475	v2175	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
476	v2176	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
477	v2177	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
478	v2178	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
479	v2179	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
480	v2180	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
481	v2181	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
482	v2182	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
483	v2201	ahh	Christopher	\N	\N	\N	Barton	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
484	v2202	abc	Zuyanah	\N	\N	\N	Berdicia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
485	v2203	ace	Albert	\N	\N	\N	Bobe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
486	v2204	add	Jaavon	\N	\N	\N	Brown	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
487	v2205	aft	Iris	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
488	v2206	ape	Jasmine	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
489	v2207	and	Leah	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
490	v2208	aim	Liany	\N	\N	\N	Collado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
491	v2209	aid	Michael	\N	\N	\N	Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
492	v2210	air	Zabriana	\N	\N	\N	Garro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
493	v2211	all	Tanya	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
494	v2212	amp	Devin	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
495	v2213	ant	Ny	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
496	v2214	app	Jason	\N	\N	\N	Nieves	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
497	v2215	apt	Jeremiah	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
498	v2216	arc	Anthony	\N	\N	\N	Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
499	v2217	arf	Kiera	\N	\N	\N	Reilly	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
500	v2218	ark	Elijah	\N	\N	\N	Rios	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
501	v2219	arm	Edgardo	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
502	v2220	art	Madison	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
503	v2221	ash	Adrian	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
504	v2222	ask	Alejandro	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
505	v2223	big	Selene	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
506	v2224	ave	Jennelyce	\N	\N	\N	Valera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
507	v2225	awe	Dominis	\N	\N	\N	Zapata	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
508	v2226	axe	Marcus	\N	\N	\N	Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
509	v2227	aye	Ailany	\N	\N	\N	Asencio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
510	v2228	ays	Luigi	\N	\N	\N	Baez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
511	v2229	baa	Mariah	\N	\N	\N	Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
512	v2230	bit	Emilia	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
513	v2231	bag	Yamel	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
514	v2232	bam	Juan	\N	\N	\N	Delarosa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
515	v2233	ban	Luz	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
516	v2234	bap	LOuverture	\N	\N	\N	Desamour	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
517	v2235	bar	Azavier	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
518	v2236	bat	Maya	\N	\N	\N	Jarmul	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
519	v2237	bay	Sean	\N	\N	\N	Lopez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
520	v2238	bed	Larissa	\N	\N	\N	Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
521	v2239	bee	Paola	\N	\N	\N	Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
522	v2240	beg	Michael	\N	\N	\N	Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
523	v2241	ben	Genesis	\N	\N	\N	Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
524	v2242	bet	Danny	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
525	v2243	bib	Giaminh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
526	v2244	bid	Rodney	\N	\N	\N	Montiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
527	v2245	big	Serenity	\N	\N	\N	Montiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
528	v2246	bin	Serenity	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
529	v2247	bio	Aiden	\N	\N	\N	Smith	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
530	v2248	big	Haylee	\N	\N	\N	Trinh	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
531	v2249	cat	Sashalynn	\N	\N	\N	Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
532	v2250	bat	David	\N	\N	\N	Andujar	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
533	v2251	hat	Rashad	\N	\N	\N	Burgess	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
534	v2252	sat	Dan	\N	\N	\N	Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
535	v2253	bat	Jan	\N	\N	\N	Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
536	v2254	cat	Imani	\N	\N	\N	Hansberry	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
537	v2255	cat	Chloe	\N	\N	\N	Mack	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
538	v2256	cat	Alyssa	\N	\N	\N	Mao	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
539	v2257	sat	Lisnett	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
540	v2258	cat	Elmer	\N	\N	\N	Peralta	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
541	v2259	bat	Ryan	\N	\N	\N	Perfidio	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
542	v2260	cat	Aiden	\N	\N	\N	Quin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
543	v2261	bat	Connor	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
544	v2262	cat	Giana	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
545	v2263	cat	Ricardo	\N	\N	\N	Santos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
546	v2264	bat	Kristian	\N	\N	\N	Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
547	v2265	cat	Mya	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
548	v2266	cat	Anna	\N	\N	\N	Van	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
549	v2267	cat	Pedro	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
550	v2268	cat	Jaden	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
551	v2269	cat	Justin	\N	\N	\N	Valesquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
552	v2270	cat	Genesis	\N	\N	\N	Zapata	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
553	v2271	cat	Valerie	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
554	v2272	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
555	v2273	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
556	v2274	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
557	v2275	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
558	v2276	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
559	v2277	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
560	v2278	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
561	v2279	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
562	v2280	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
563	v2301	ahh	Joshua	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
564	v2302	abc	Carlos	\N	\N	\N	Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
565	v2303	ace	Desiree	\N	\N	\N	Guevera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
566	v2304	add	Isabella	\N	\N	\N	Grace	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
567	v2305	aft	Jason	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
568	v2306	ape	Madelyn	\N	\N	\N	Obrien	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
569	v2307	and	Fransisco	\N	\N	\N	Olmeda	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
570	v2308	aim	Gio	\N	\N	\N	Pierre	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
571	v2309	aid	Haily	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
572	v2310	air	Chael	\N	\N	\N	Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
573	v2311	all	Iyana	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
574	v2312	amp	Isabella	\N	\N	\N	Rosada	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
575	v2313	ant	Leon	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
576	v2314	app	Savian	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
577	v2315	apt	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
578	v2316	arc	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
579	v2317	arf	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
580	v2318	ark	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
581	v2319	arm	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
582	v2320	art	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
583	v2321	ash	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
584	v2322	ask	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
585	v2323	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
586	v2324	ave	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
587	v2325	awe	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
588	v2326	axe	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
589	v2327	aye	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
590	v2328	ays	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
591	v2329	baa	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
592	v2330	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
593	v2331	bag	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
594	v2332	bam	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
595	v2333	ban	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
596	v2334	bap	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
597	v2335	bar	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
598	v2336	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
599	v2337	bay	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
600	v2338	bed	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
601	v2339	bee	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
602	v2340	beg	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
603	v2341	ben	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
604	v2342	bet	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
605	v2343	bib	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
606	v2344	bid	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
607	v2345	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
608	v2346	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
609	v2347	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
610	v2348	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
611	v2349	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
612	v2350	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
613	v2351	hat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
614	v2352	sat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
615	v2353	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
616	v2354	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
617	v2355	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
618	v2356	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
619	v2357	sat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
620	v2358	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
621	v2359	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
622	v2360	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
623	v2361	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
624	v2362	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
625	v2363	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
626	v2364	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
627	v2365	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
628	v2366	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
629	v2367	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
630	v2368	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
631	v2369	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
632	v2370	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
633	v2371	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
634	v2372	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
635	v2373	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
636	v2374	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
637	v2375	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
638	v2376	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
639	v2377	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
640	v2378	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
641	v2379	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
642	v2380	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
643	v2381	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
644	v2382	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
645	v2383	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
646	v2384	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
647	v2385	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
648	v2386	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
649	v2387	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
650	v2388	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
651	v2389	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
652	v2390	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
653	v2391	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
654	v2392	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
655	v2393	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
656	v2394	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
657	v2395	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
658	v2396	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
659	v2397	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
660	v2398	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
661	v2399	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
662	v2401	ahh	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
663	v2402	abc	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
664	v2403	ace	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
665	v2404	add	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
666	v2405	aft	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
667	v2406	ape	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
668	v2407	and	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
669	v2408	aim	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
670	v2409	aid	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
671	v2410	air	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
672	v2411	all	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
673	v2412	amp	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
674	v2413	ant	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
675	v2414	app	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
676	v2415	apt	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
677	v2416	arc	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
678	v2417	arf	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
679	v2418	ark	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
680	v2419	arm	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
681	v2420	art	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
682	v2421	ash	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
683	v2422	ask	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
684	v2423	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
685	v2424	ave	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
686	v2425	awe	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
687	v2426	axe	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
688	v2427	aye	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
689	v2428	ays	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
690	v2429	baa	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
691	v2430	bit	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
692	v2431	bag	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
693	v2432	bam	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
694	v2433	ban	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
695	v2434	bap	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
696	v2435	bar	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
697	v2436	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
698	v2437	bay	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
699	v2438	bed	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
700	v2439	bee	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
701	v2440	beg	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
702	v2441	ben	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
703	v2442	bet	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
704	v2443	bib	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
705	v2444	bid	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
706	v2445	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
707	v2446	bin	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
708	v2447	bio	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
709	v2448	big	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
710	v2449	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
711	v2450	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
712	v2451	hat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
713	v2452	sat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
714	v2453	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
715	v2454	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
716	v2455	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
717	v2456	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
718	v2457	sat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
719	v2458	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
720	v2459	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
721	v2460	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
722	v2461	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
723	v2462	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
724	v2463	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
725	v2464	bat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
726	v2465	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
727	v2466	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
728	v2467	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
729	v2468	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
730	v2469	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
731	v2470	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
732	v2471	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
733	v2472	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
734	v2473	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
735	v2474	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
736	v2475	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
737	v2476	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
738	v2477	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
739	v2478	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
740	v2479	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
741	v2480	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
742	v2481	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
743	v2482	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
744	v2483	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
745	v2484	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
746	v2485	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
747	v2486	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
748	v2487	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
749	v2488	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
750	v2489	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
751	v2490	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
752	v2491	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
753	v2492	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
754	v2493	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
755	v2494	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
756	v2495	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
757	v2496	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
758	v2497	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
759	v2498	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
760	v2499	cat	New	\N	\N	\N	Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
7	v1401	ahh	Anthony	\N	\N	\N	Arvelo	1	6F4455B55B4240F3B4738DD9DB3EAF40	1	0
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 760, true);


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
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users_school_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_school_id_fkey FOREIGN KEY (school_id) REFERENCES users(id);


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

