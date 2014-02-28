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
\.


--
-- Name: error_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('error_log_id_seq', 1, false);


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

SELECT pg_catalog.setval('level_attempts_id_seq', 1, false);


--
-- Data for Name: levelattempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levelattempts (id, start_time, end_time, user_id, level, ref_id, score, time_warning, passed) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level, failed_attempts) FROM stdin;
1	jbreslin33	Iggles_13	James	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


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

