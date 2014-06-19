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
    transaction_code integer DEFAULT 0 NOT NULL,
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
1	ERROR:  syntax error at or near "where"\nLINE 1: update users SET failed_attempts=0, level =  where username ...\n                                                     ^	2014-03-04 17:15:36.301516	v1822
2	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-03-06 11:15:18.371826	
3	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-03-06 11:15:23.360443	
4	ERROR:  syntax error at or near "order"\nLINE 1: ...ds.ref_id = users.ref_id where users.school_id =  order by l...\n                                                             ^	2014-03-06 11:15:28.77601	
5	ERROR:  syntax error at or near "order"\nLINE 1: ... username, password from users where school_id =  order by u...\n                                                             ^	2014-03-10 11:05:37.192956	
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
2.nbt.a.3	EE06B2E4211C4C8EB432A5448DA82C77	208.000	10	Read and write numbers to 1000 using base-ten numerals, number names, and expanded form.
2.nbt.a.4	B9615D5AFE1A46C3B0AD4E517ECB0C9E	209.000	10	Compare two three-digit numbers based on meanings of the hundreds, tens, and ones digits, using &gt;, =, and &lt; symbols to record the results of comparisons.
2.nbt.b.5	7C9ACFC70C934A229B447804D6A1C0FC	210.000	10	Fluently add and subtract within 100 using strategies based on place value, properties of operations, and/or the relationship between addition and subtraction.
2.nbt.b.6	70CC6A0456AB4CD1A86BC8EA43B447BA	211.000	10	Add up to four two-digit numbers using strategies based on place value and properties of operations.
2.nbt.b.7	29E245BF9A144F5B96C6DE0A626622A7	212.000	10	Add and subtract within 1000, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method. Understand that in adding or subtracting three-digit numbers, one adds or subtracts hundreds and hundreds, tens and tens, ones and ones; and sometimes it is necessary to compose or decompose tens or hundreds.
2.nbt.b.8	D7C98BF1710A476BAFD20AEC169E9DC3	213.000	10	Mentally add 10 or 100 to a given number 100&ndash;900, and mentally subtract 10 or 100 from a given number 100&ndash;900.
3.oa.a.1	1F72443D6AC449C7B959047522ED087B	301.000	10	Interpret products of whole numbers, e.g., interpret 5 &times; 7 as the total number of objects in 5 groups of 7 objects each. <i>For example, describe a context in which a total number of objects can be expressed as 5 &times; 7</i>.
3.oa.a.2	D9008C43187E44DDA9B676FFEAA78311	302.000	10	Interpret whole-number quotients of whole numbers, e.g., interpret 56 &divide; 8 as the number of objects in each share when 56 objects are partitioned equally into 8 shares, or as a number of shares when 56 objects are partitioned into equal shares of 8 objects each. <i>For example, describe a context in which a number of&nbsp; shares or a number of groups can be expressed as 56 &divide; 8</i>.
3.oa.a.3	1F2BFEA5A0204D71A7FD29883E22CB9D	303.000	10	Use multiplication and division within 100 to solve word problems in situations involving equal groups, arrays, and measurement quantities, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.<sup>1</sup>
3.oa.a.4	ACB26A2ED7114E59911EE985D8D02B6D	304.000	10	Determine the unknown whole number in a multiplication or division equation relating three whole numbers. <i>For example, determine the unknown number that makes the equation true in each of the equations 8 &times; ? = 48, 5 = _ &divide; 3, 6 &times; 6 = ?</i>
3.oa.c.7	3D384CB2349B41299A3B5A133AB9E3F8	305.000	218	Fluently multiply and divide within 100, using strategies such as the relationship between multiplication and division (e.g., knowing that 8 × 5 = 40, one knows 40 ÷ 5 = 8) or properties of operations. By the end of Grade 3, know from memory all products of two one-digit numbers.
4.oa.a.1	7828B4F15ABD40E19EF14DDE0EB399DF	401.000	20	Interpret a multiplication equation as a comparison, e.g., interpret 35 = 5 × 7 as a statement that 35 is 5 times as many as 7 and 7 times as many as 5. Represent verbal statements of multiplicative comparisons as multiplication equations.
4.oa.a.2	062925BDC19347E8890A6D7390DF3842	402.000	20	Multiply or divide to solve word problems involving multiplicative comparison, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem, distinguishing multiplicative comparison from additive comparison.
\.


--
-- Name: level_attempts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('level_attempts_id_seq', 6158, true);


--
-- Data for Name: levelattempts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY levelattempts (id, start_time, end_time, user_id, level, ref_id, transaction_code, time_warning, passed) FROM stdin;
1	2014-02-27 22:06:51.24187	2014-02-27 22:07:03.919087	1	1	7B20214AA4AA445AA720062C6F1B5C58	0	f	t
2	2014-02-27 22:08:26.413764	\N	1	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
3	2014-02-27 22:09:32.249794	\N	1	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
4	2014-02-27 22:11:11.839741	\N	1	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
5	2014-02-27 22:16:27.873814	\N	1	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
6	2014-02-27 22:18:24.853541	\N	1	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
7	2014-02-27 22:19:41.07983	\N	1	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
8	2014-02-27 22:20:15.095693	\N	1	1	66626D8AEE4E474B8CFEC8A4B68AA51C	0	f	f
9	2014-02-27 22:20:41.117593	\N	1	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
10	2014-02-27 22:21:34.305375	\N	1	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
11	2014-02-27 22:33:41.829622	\N	7	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
12	2014-02-27 22:36:01.770413	2014-02-27 22:36:31.554022	7	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
13	2014-02-27 22:52:32.581743	\N	1	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
14	2014-02-27 22:58:38.910726	2014-02-27 22:59:00.65578	7	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
15	2014-02-27 22:59:15.617804	\N	7	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
16	2014-02-27 22:59:28.360178	\N	7	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
17	2014-02-27 23:00:38.800876	2014-02-27 23:00:53.218072	1	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
18	2014-02-27 23:01:14.933391	\N	1	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
19	2014-02-27 23:07:18.881788	\N	1	1	6929CC4620B54F1692E2C20D8FAA12F8	0	f	f
20	2014-02-27 23:10:55.789664	\N	1	1	41064C0B98A4460181333BF337E74EF3	0	f	f
21	2014-02-27 23:12:42.060664	2014-02-27 23:13:04.850666	1	1	884F1851E494434DB4B70D01A077363D	0	f	t
22	2014-02-27 23:15:28.369983	\N	1	2	884F1851E494434DB4B70D01A077363D	0	f	f
23	2014-02-27 23:16:43.784489	\N	1	2	884F1851E494434DB4B70D01A077363D	0	f	f
24	2014-03-03 07:54:08.126192	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
25	2014-03-03 07:54:28.238888	2014-03-03 07:54:39.700638	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
26	2014-03-03 07:54:52.864877	2014-03-03 07:55:19.818235	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
27	2014-03-03 07:55:34.435512	2014-03-03 07:56:02.144229	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
28	2014-03-03 07:56:20.668312	2014-03-03 07:56:47.998934	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
29	2014-03-03 07:57:00.439255	2014-03-03 07:57:37.12057	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
30	2014-03-03 07:57:52.149057	2014-03-03 07:58:29.548575	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
31	2014-03-03 07:58:42.15579	2014-03-03 07:59:21.461493	300	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
32	2014-03-03 07:59:37.120266	2014-03-03 08:00:08.578458	300	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
33	2014-03-03 08:00:21.019439	2014-03-03 08:00:54.742196	300	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
34	2014-03-03 08:01:08.915138	\N	300	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
35	2014-03-03 08:01:23.004378	\N	300	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
36	2014-03-04 09:33:42.703831	\N	2	1	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
37	2014-03-04 09:36:31.927866	2014-03-04 09:37:43.532702	2	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
38	2014-03-04 09:38:00.725863	\N	2	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
39	2014-03-04 09:38:27.917984	\N	2	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
40	2014-03-04 09:38:42.324931	\N	2	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
41	2014-03-04 09:43:41.521161	\N	2	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
42	2014-03-04 11:16:53.612118	\N	194	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
43	2014-03-04 11:18:43.086638	\N	194	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
44	2014-03-04 12:28:13.546988	\N	202	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
45	2014-03-04 12:28:40.352238	2014-03-04 12:28:52.415146	202	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
46	2014-03-04 12:29:07.997547	2014-03-04 12:29:30.359488	202	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
47	2014-03-04 12:33:20.431083	2014-03-04 12:33:41.077338	202	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
49	2014-03-04 12:34:46.62307	2014-03-04 12:34:53.850328	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
48	2014-03-04 12:34:33.861393	2014-03-04 12:34:58.021315	202	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
50	2014-03-04 12:35:10.970394	2014-03-04 12:35:42.932138	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
51	2014-03-04 12:35:57.622981	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
52	2014-03-04 12:36:39.151352	\N	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
53	2014-03-04 12:37:09.408573	2014-03-04 12:37:19.431231	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
54	2014-03-04 12:37:09.543324	2014-03-04 12:37:33.935975	202	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
55	2014-03-04 12:37:53.131824	2014-03-04 12:38:33.736225	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
56	2014-03-04 12:38:22.099024	2014-03-04 12:38:46.307041	202	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
58	2014-03-04 12:39:27.471966	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
57	2014-03-04 12:39:10.211725	2014-03-04 12:39:39.933456	202	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
60	2014-03-04 12:39:55.05151	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
61	2014-03-04 12:40:12.402813	\N	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
59	2014-03-04 12:39:53.316324	2014-03-04 12:40:22.742467	202	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
62	2014-03-04 12:40:26.72	\N	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
64	2014-03-04 12:41:09.358554	2014-03-04 12:41:15.674052	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
63	2014-03-04 12:40:43.19553	2014-03-04 12:41:16.546462	202	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
65	2014-03-04 12:41:28.8602	\N	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
66	2014-03-04 12:41:43.990997	\N	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
67	2014-03-04 12:41:55.691818	2014-03-04 12:42:01.125892	217	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
68	2014-03-04 12:41:57.127045	2014-03-04 12:42:03.285925	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
70	2014-03-04 12:42:24.091119	\N	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
69	2014-03-04 12:42:21.695071	2014-03-04 12:42:49.435228	217	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
71	2014-03-04 12:43:03.436692	\N	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
73	2014-03-04 12:43:22.25813	\N	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
72	2014-03-04 12:43:09.349544	2014-03-04 12:43:41.641858	217	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
75	2014-03-04 12:43:53.731701	2014-03-04 12:44:02.287058	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
74	2014-03-04 12:43:50.67038	2014-03-04 12:44:14.27566	202	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
77	2014-03-04 12:44:17.807153	\N	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
76	2014-03-04 12:44:01.926444	2014-03-04 12:44:29.93891	217	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
78	2014-03-04 12:44:42.981934	2014-03-04 12:44:51.113803	161	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
81	2014-03-04 12:45:16.486977	2014-03-04 12:45:43.959267	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
80	2014-03-04 12:45:02.585637	2014-03-04 12:46:24.37328	268	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
79	2014-03-04 12:44:49.014341	2014-03-04 12:45:30.092216	217	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
82	2014-03-04 12:45:42.957905	\N	236	1	C655A9B714CB481EB9D88759DD9BD0D1	0	f	f
84	2014-03-04 12:45:58.226168	\N	236	1	C655A9B714CB481EB9D88759DD9BD0D1	0	f	f
85	2014-03-04 12:46:05.801976	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
86	2014-03-04 12:46:27.083287	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
83	2014-03-04 12:45:55.032718	2014-03-04 12:46:33.403331	217	6	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
89	2014-03-04 12:46:49.166625	\N	228	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
90	2014-03-04 12:47:06.690818	\N	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
88	2014-03-04 12:46:40.913926	2014-03-04 12:47:12.558906	202	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
92	2014-03-04 12:47:10.92628	2014-03-04 12:47:42.361349	228	49	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
91	2014-03-04 12:47:08.651081	2014-03-04 12:47:50.303727	217	7	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
93	2014-03-04 12:47:39.882873	2014-03-04 12:48:05.636842	161	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
94	2014-03-04 12:47:49.914327	2014-03-04 12:48:22.282338	202	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
97	2014-03-04 12:48:24.350286	\N	228	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
95	2014-03-04 12:48:21.651119	2014-03-04 12:48:53.274164	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
96	2014-03-04 12:48:22.897001	2014-03-04 12:48:55.563667	217	8	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
98	2014-03-04 12:48:58.304595	2014-03-04 12:49:20.334701	228	50	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
99	2014-03-04 12:49:05.235587	2014-03-04 12:49:28.787296	161	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
100	2014-03-04 12:49:06.531266	2014-03-04 12:49:34.125803	202	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
103	2014-03-04 12:49:47.476769	\N	161	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
104	2014-03-04 12:50:00.403073	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
105	2014-03-04 12:50:05.686207	\N	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
101	2014-03-04 12:49:39.566245	2014-03-04 12:50:07.570801	228	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
102	2014-03-04 12:49:47.035479	2014-03-04 12:50:15.722704	202	14	C815B29CD8F546BBBB4C647B9D163942	0	f	t
107	2014-03-04 12:50:20.373497	\N	228	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
109	2014-03-04 12:50:32.003398	\N	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
108	2014-03-04 12:50:25.086757	2014-03-04 12:50:33.437244	236	1	0CFFCBC851984A4281C23D34FC400445	0	f	t
106	2014-03-04 12:50:09.118615	2014-03-04 12:50:40.355007	161	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
111	2014-03-04 12:50:34.869966	2014-03-04 12:50:57.200286	228	51	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
112	2014-03-04 12:50:53.962905	2014-03-04 12:51:05.623236	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
114	2014-03-04 12:51:06.457978	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
113	2014-03-04 12:51:00.525986	2014-03-04 12:51:10.266641	236	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
110	2014-03-04 12:50:34.694191	2014-03-04 12:51:15.505354	202	15	C815B29CD8F546BBBB4C647B9D163942	0	f	t
116	2014-03-04 12:51:16.846158	\N	161	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
117	2014-03-04 12:51:18.824494	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
122	2014-03-04 12:51:34.379203	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
118	2014-03-04 12:51:23.834416	2014-03-04 12:51:37.219088	236	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
115	2014-03-04 12:51:15.541365	2014-03-04 12:51:37.573764	228	52	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
87	2014-03-04 12:46:40.456358	2014-03-04 12:51:47.442527	268	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
123	2014-03-04 12:51:51.02068	\N	236	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
121	2014-03-04 12:51:33.977532	2014-03-04 12:51:53.705069	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
119	2014-03-04 12:51:31.800926	2014-03-04 12:52:01.711422	202	16	C815B29CD8F546BBBB4C647B9D163942	0	f	t
120	2014-03-04 12:51:33.211503	2014-03-04 12:52:04.220352	161	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
126	2014-03-04 12:52:07.855811	\N	268	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
128	2014-03-04 12:52:12.956462	\N	263	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
125	2014-03-04 12:52:05.661599	2014-03-04 12:52:14.794016	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
124	2014-03-04 12:51:52.129444	2014-03-04 12:52:19.977037	228	53	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
130	2014-03-04 12:52:23.182994	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
131	2014-03-04 12:52:28.30822	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
127	2014-03-04 12:52:08.806092	2014-03-04 12:52:33.70107	236	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
129	2014-03-04 12:52:16.589252	2014-03-04 12:52:46.726692	161	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
133	2014-03-04 12:52:42.690784	2014-03-04 12:52:48.110086	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
132	2014-03-04 12:52:33.651335	2014-03-04 12:53:00.894955	228	54	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
135	2014-03-04 12:52:46.902191	2014-03-04 12:53:02.694994	236	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
138	2014-03-04 12:53:15.958569	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
134	2014-03-04 12:52:45.219337	2014-03-04 12:53:16.786109	226	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
139	2014-03-04 12:53:19.321675	\N	268	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
137	2014-03-04 12:53:12.125321	2014-03-04 12:53:23.071392	263	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
136	2014-03-04 12:53:00.248919	2014-03-04 12:53:36.719331	161	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
142	2014-03-04 12:53:39.023423	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
140	2014-03-04 12:53:22.091475	2014-03-04 12:53:47.763294	228	55	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
141	2014-03-04 12:53:24.227556	2014-03-04 12:53:55.81247	202	17	C815B29CD8F546BBBB4C647B9D163942	0	f	t
143	2014-03-04 12:53:41.410507	2014-03-04 12:54:10.86578	263	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
145	2014-03-04 12:54:14.46556	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
146	2014-03-04 12:54:31.349314	\N	263	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
148	2014-03-04 12:54:33.942012	\N	161	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
144	2014-03-04 12:54:13.462251	2014-03-04 12:54:34.438472	228	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
149	2014-03-04 12:54:43.329748	\N	263	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
150	2014-03-04 12:54:47.446934	\N	228	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
152	2014-03-04 12:54:55.098093	\N	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
147	2014-03-04 12:54:32.079242	2014-03-04 12:54:57.29195	226	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
154	2014-03-04 12:55:06.892945	\N	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
155	2014-03-04 12:55:11.36759	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
151	2014-03-04 12:54:52.912768	2014-03-04 12:55:24.301147	202	18	C815B29CD8F546BBBB4C647B9D163942	0	f	t
157	2014-03-04 12:55:21.206884	2014-03-04 12:55:26.620579	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
159	2014-03-04 12:55:26.747325	\N	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
153	2014-03-04 12:55:00.923151	2014-03-04 12:55:28.36398	228	56	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
158	2014-03-04 12:55:21.211747	2014-03-04 12:55:30.424268	219	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
161	2014-03-04 12:55:40.386412	2014-03-04 12:56:04.758569	228	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
160	2014-03-04 12:55:37.682709	2014-03-04 12:56:11.467891	202	19	C815B29CD8F546BBBB4C647B9D163942	0	f	t
162	2014-03-04 12:55:41.130397	\N	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
163	2014-03-04 12:55:43.764566	\N	263	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
156	2014-03-04 12:55:18.609949	2014-03-04 12:55:55.033003	161	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
164	2014-03-04 12:55:44.02436	2014-03-04 12:56:05.850269	219	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
166	2014-03-04 12:56:18.861234	\N	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
165	2014-03-04 12:56:09.191604	2014-03-04 12:56:21.954836	224	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
168	2014-03-04 12:56:23.932339	\N	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
170	2014-03-04 12:56:36.178955	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
172	2014-03-04 12:56:41.043559	2014-03-04 12:56:45.13054	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
167	2014-03-04 12:56:19.756558	2014-03-04 12:56:45.489678	219	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
173	2014-03-04 12:56:45.904019	2014-03-04 12:56:53.853818	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
174	2014-03-04 12:56:56.118259	\N	161	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
169	2014-03-04 12:56:25.746935	2014-03-04 12:56:58.409827	202	20	C815B29CD8F546BBBB4C647B9D163942	0	f	t
171	2014-03-04 12:56:38.2199	2014-03-04 12:57:07.791374	228	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
177	2014-03-04 12:57:08.28448	\N	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
178	2014-03-04 12:57:09.533647	\N	268	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
180	2014-03-04 12:57:20.4708	\N	228	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
176	2014-03-04 12:57:00.572606	2014-03-04 12:57:21.990249	219	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
175	2014-03-04 12:56:58.110061	2014-03-04 12:57:25.232821	266	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
182	2014-03-04 12:57:26.180346	\N	263	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
181	2014-03-04 12:57:23.689462	2014-03-04 12:57:35.887537	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
183	2014-03-04 12:57:36.335215	\N	228	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
185	2014-03-04 12:57:41.550536	\N	161	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
184	2014-03-04 12:57:37.489647	2014-03-04 12:57:43.291274	171	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
187	2014-03-04 12:57:47.724545	\N	219	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
188	2014-03-04 12:57:48.194915	\N	268	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
179	2014-03-04 12:57:17.310399	2014-03-04 12:57:48.71511	202	21	C815B29CD8F546BBBB4C647B9D163942	0	f	t
190	2014-03-04 12:58:02.479824	2014-03-04 12:58:05.92645	263	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
189	2014-03-04 12:57:50.669422	2014-03-04 12:58:10.141013	224	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
186	2014-03-04 12:57:46.868643	2014-03-04 12:58:13.585831	266	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
192	2014-03-04 12:58:07.014014	2014-03-04 12:58:20.238328	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
191	2014-03-04 12:58:04.219521	2014-03-04 12:58:29.861903	219	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
194	2014-03-04 12:58:24.366789	2014-03-04 12:58:33.995114	263	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
193	2014-03-04 12:58:09.519441	2014-03-04 12:58:35.352114	228	57	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
197	2014-03-04 12:58:49.380358	\N	266	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
195	2014-03-04 12:58:30.935889	2014-03-04 12:58:54.859362	224	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
199	2014-03-04 12:58:54.882997	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
201	2014-03-04 12:59:07.5202	\N	224	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
198	2014-03-04 12:58:51.152858	2014-03-04 12:59:08.80458	263	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
196	2014-03-04 12:58:43.670068	2014-03-04 12:59:09.376446	219	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
203	2014-03-04 12:59:23.731131	\N	263	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
204	2014-03-04 12:59:24.009941	\N	219	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
200	2014-03-04 12:58:57.582012	2014-03-04 12:59:25.990444	228	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
205	2014-03-04 12:59:31.203306	\N	161	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
202	2014-03-04 12:59:19.758529	2014-03-04 12:59:33.759141	266	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
210	2014-03-04 13:00:05.5816	\N	228	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
206	2014-03-04 12:59:40.231099	2014-03-04 13:00:07.396491	219	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
207	2014-03-04 12:59:45.160515	2014-03-04 13:00:07.530089	224	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
209	2014-03-04 12:59:56.353593	2014-03-04 13:00:22.103458	263	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
212	2014-03-04 13:00:22.293248	\N	224	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
213	2014-03-04 13:00:27.088936	\N	161	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
211	2014-03-04 13:00:06.547341	2014-03-04 13:00:29.786632	226	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
215	2014-03-04 13:00:46.572853	\N	224	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
217	2014-03-04 13:00:56.486321	\N	226	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
214	2014-03-04 13:00:30.291939	2014-03-04 13:00:57.241324	228	58	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
208	2014-03-04 12:59:50.829825	2014-03-04 13:01:00.735185	266	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
220	2014-03-04 13:01:11.473457	\N	268	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
219	2014-03-04 13:01:00.719703	2014-03-04 13:01:18.185736	263	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
216	2014-03-04 13:00:47.571188	2014-03-04 13:01:19.066178	219	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
218	2014-03-04 13:00:59.874465	2014-03-04 13:01:27.907551	224	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
223	2014-03-04 13:01:33.00345	\N	219	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
224	2014-03-04 13:01:33.625793	\N	263	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
225	2014-03-04 13:01:35.103709	\N	217	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
226	2014-03-04 13:01:41.016275	\N	161	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
227	2014-03-04 13:01:41.901546	\N	224	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
222	2014-03-04 13:01:21.242563	2014-03-04 13:01:47.230196	266	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
228	2014-03-04 13:01:49.731179	\N	228	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
221	2014-03-04 13:01:18.481567	2014-03-04 13:01:49.850876	226	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
229	2014-03-04 13:01:50.210988	\N	263	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
230	2014-03-04 13:02:06.625104	\N	266	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
231	2014-03-04 13:05:43.315972	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
232	2014-03-04 13:06:14.524057	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
233	2014-03-04 13:06:17.192946	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
234	2014-03-04 13:06:32.648362	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
235	2014-03-04 13:06:49.047258	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
236	2014-03-04 13:06:50.889864	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
237	2014-03-04 13:07:09.583624	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
238	2014-03-04 13:07:15.42011	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
239	2014-03-04 13:07:27.782504	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
240	2014-03-04 13:07:42.849814	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
241	2014-03-04 13:07:45.221962	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
242	2014-03-04 13:07:52.848524	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
243	2014-03-04 13:08:04.362724	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
244	2014-03-04 13:08:07.304076	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
245	2014-03-04 13:08:10.604506	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
246	2014-03-04 13:08:16.650229	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
247	2014-03-04 13:08:21.679257	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
248	2014-03-04 13:08:35.699814	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
249	2014-03-04 13:08:36.611259	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
250	2014-03-04 13:08:36.89155	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
251	2014-03-04 13:08:42.602266	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
252	2014-03-04 13:08:42.833489	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
253	2014-03-04 13:09:03.505918	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
254	2014-03-04 13:09:07.682904	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
255	2014-03-04 13:09:07.710501	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
256	2014-03-04 13:09:08.689783	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
257	2014-03-04 13:09:12.148215	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
258	2014-03-04 13:09:23.417858	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
259	2014-03-04 13:09:31.744175	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
260	2014-03-04 13:09:33.964747	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
261	2014-03-04 13:09:35.108399	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
262	2014-03-04 13:09:39.700429	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
264	2014-03-04 13:09:40.755051	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
265	2014-03-04 13:09:42.428156	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
266	2014-03-04 13:09:51.128776	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
267	2014-03-04 13:09:51.917073	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
268	2014-03-04 13:09:53.027721	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
269	2014-03-04 13:09:54.201106	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
270	2014-03-04 13:09:54.505505	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
271	2014-03-04 13:09:58.10479	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
272	2014-03-04 13:10:02.182161	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
263	2014-03-04 13:09:40.029818	2014-03-04 13:10:04.594077	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
273	2014-03-04 13:10:08.147104	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
274	2014-03-04 13:10:08.41229	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
275	2014-03-04 13:10:18.467242	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
276	2014-03-04 13:10:22.002035	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
277	2014-03-04 13:10:23.17706	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
278	2014-03-04 13:10:23.205907	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
279	2014-03-04 13:10:25.228412	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
280	2014-03-04 13:10:33.19469	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
281	2014-03-04 13:10:33.83003	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
282	2014-03-04 13:10:35.547816	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
283	2014-03-04 13:10:35.871071	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
284	2014-03-04 13:10:36.369725	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
285	2014-03-04 13:10:36.739877	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
286	2014-03-04 13:10:37.328057	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
287	2014-03-04 13:10:38.661827	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
288	2014-03-04 13:10:44.886216	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
289	2014-03-04 13:10:46.163703	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
290	2014-03-04 13:10:47.297759	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
291	2014-03-04 13:10:47.449816	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
292	2014-03-04 13:10:50.302353	\N	312	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
293	2014-03-04 13:10:52.189019	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
294	2014-03-04 13:10:53.751514	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
295	2014-03-04 13:10:55.750379	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
296	2014-03-04 13:11:01.112194	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
297	2014-03-04 13:11:02.012617	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
298	2014-03-04 13:11:02.0551	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
299	2014-03-04 13:11:04.481738	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
300	2014-03-04 13:11:07.560304	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
301	2014-03-04 13:11:07.603509	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
302	2014-03-04 13:11:08.587462	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
303	2014-03-04 13:11:08.675611	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
304	2014-03-04 13:11:14.191783	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
305	2014-03-04 13:11:14.481669	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
306	2014-03-04 13:11:14.880282	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
307	2014-03-04 13:11:19.42153	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
308	2014-03-04 13:11:19.909892	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
309	2014-03-04 13:11:21.265966	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
311	2014-03-04 13:11:24.843508	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
312	2014-03-04 13:11:25.470419	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
313	2014-03-04 13:11:26.229316	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
314	2014-03-04 13:11:26.591737	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
315	2014-03-04 13:11:28.371749	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
316	2014-03-04 13:11:29.638908	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
317	2014-03-04 13:11:30.266762	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
318	2014-03-04 13:11:34.221754	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
319	2014-03-04 13:11:34.281926	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
320	2014-03-04 13:11:34.971949	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
321	2014-03-04 13:11:35.047017	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
322	2014-03-04 13:11:36.827514	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
323	2014-03-04 13:11:36.977081	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
324	2014-03-04 13:11:39.317946	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
325	2014-03-04 13:11:39.833158	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
326	2014-03-04 13:11:40.319257	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
327	2014-03-04 13:11:44.158041	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
328	2014-03-04 13:11:44.284128	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
329	2014-03-04 13:11:45.356699	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
330	2014-03-04 13:11:50.93576	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
331	2014-03-04 13:11:51.499428	\N	517	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
332	2014-03-04 13:11:51.946865	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
333	2014-03-04 13:11:51.944339	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
334	2014-03-04 13:11:53.085552	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
335	2014-03-04 13:11:53.089257	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
336	2014-03-04 13:11:53.629653	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
337	2014-03-04 13:11:54.949021	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
338	2014-03-04 13:12:01.489433	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
339	2014-03-04 13:12:01.542815	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
310	2014-03-04 13:11:22.280643	2014-03-04 13:12:02.898416	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
340	2014-03-04 13:12:03.485922	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
341	2014-03-04 13:12:03.69886	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
342	2014-03-04 13:12:03.763692	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
343	2014-03-04 13:12:04.93665	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
344	2014-03-04 13:12:11.23735	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
346	2014-03-04 13:12:14.180042	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
347	2014-03-04 13:12:15.269871	\N	312	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
348	2014-03-04 13:12:16.288076	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
349	2014-03-04 13:12:22.41939	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
350	2014-03-04 13:12:23.098832	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
351	2014-03-04 13:12:27.035204	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
352	2014-03-04 13:12:27.327211	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
354	2014-03-04 13:12:28.431536	\N	550	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
355	2014-03-04 13:12:29.65949	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
356	2014-03-04 13:12:32.516152	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
357	2014-03-04 13:12:34.929079	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
358	2014-03-04 13:12:34.973595	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
359	2014-03-04 13:12:35.636065	\N	517	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
360	2014-03-04 13:12:38.550037	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
361	2014-03-04 13:12:40.857088	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
362	2014-03-04 13:12:43.087245	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
363	2014-03-04 13:12:43.26143	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
364	2014-03-04 13:12:43.520532	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
365	2014-03-04 13:12:44.067768	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
366	2014-03-04 13:12:47.03961	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
367	2014-03-04 13:12:49.827374	\N	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
353	2014-03-04 13:12:27.719291	2014-03-04 13:12:51.546787	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
345	2014-03-04 13:12:11.665431	2014-03-04 13:12:52.917865	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
368	2014-03-04 13:12:54.445158	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
369	2014-03-04 13:12:54.774702	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
370	2014-03-04 13:12:57.472126	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
371	2014-03-04 13:13:00.022497	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
372	2014-03-04 13:13:04.423568	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
373	2014-03-04 13:13:05.211794	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
374	2014-03-04 13:13:05.629551	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
375	2014-03-04 13:13:08.307749	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
376	2014-03-04 13:13:09.896704	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
377	2014-03-04 13:13:10.935257	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
378	2014-03-04 13:13:11.679655	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
381	2014-03-04 13:13:19.018484	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
382	2014-03-04 13:13:20.626628	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
383	2014-03-04 13:13:23.566931	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
384	2014-03-04 13:13:24.946739	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
385	2014-03-04 13:13:26.478923	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
386	2014-03-04 13:13:28.458632	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
387	2014-03-04 13:13:29.233687	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
388	2014-03-04 13:13:29.356896	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
389	2014-03-04 13:13:33.663708	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
390	2014-03-04 13:13:34.65377	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
379	2014-03-04 13:13:15.306731	2014-03-04 13:13:34.894693	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
393	2014-03-04 13:13:42.328223	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
394	2014-03-04 13:13:42.910576	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
380	2014-03-04 13:13:15.318043	2014-03-04 13:13:42.917883	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
395	2014-03-04 13:13:43.991824	\N	550	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
396	2014-03-04 13:13:44.066629	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
397	2014-03-04 13:13:47.522305	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
398	2014-03-04 13:13:48.861725	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
399	2014-03-04 13:13:50.247017	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
391	2014-03-04 13:13:38.647977	2014-03-04 13:13:54.396352	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
401	2014-03-04 13:13:59.218231	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
402	2014-03-04 13:13:59.837077	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
392	2014-03-04 13:13:42.306065	2014-03-04 13:14:00.76882	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
403	2014-03-04 13:14:00.984354	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
406	2014-03-04 13:14:04.126325	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
408	2014-03-04 13:14:08.060147	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
404	2014-03-04 13:14:02.011091	2014-03-04 13:14:10.253257	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
409	2014-03-04 13:14:10.59477	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
410	2014-03-04 13:14:11.235601	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
405	2014-03-04 13:14:03.53542	2014-03-04 13:14:46.218584	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
407	2014-03-04 13:14:05.28082	2014-03-04 13:14:47.253888	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
411	2014-03-04 13:14:13.374636	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
412	2014-03-04 13:14:13.420086	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
413	2014-03-04 13:14:14.198004	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
414	2014-03-04 13:14:15.716644	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
415	2014-03-04 13:14:16.290864	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
416	2014-03-04 13:14:17.584397	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
417	2014-03-04 13:14:20.172495	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
418	2014-03-04 13:14:20.444067	\N	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
419	2014-03-04 13:14:21.349877	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
421	2014-03-04 13:14:28.212003	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
400	2014-03-04 13:13:55.190525	2014-03-04 13:14:29.018329	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
422	2014-03-04 13:14:29.851557	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
423	2014-03-04 13:14:31.30774	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
424	2014-03-04 13:14:32.364321	\N	521	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
425	2014-03-04 13:14:33.47984	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
426	2014-03-04 13:14:35.181231	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
427	2014-03-04 13:14:35.892644	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
428	2014-03-04 13:14:36.789014	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
429	2014-03-04 13:14:38.982497	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
430	2014-03-04 13:14:38.986271	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
431	2014-03-04 13:14:40.803031	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
432	2014-03-04 13:14:44.82416	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
433	2014-03-04 13:14:45.985529	\N	551	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
434	2014-03-04 13:14:46.038353	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
435	2014-03-04 13:14:47.246349	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
420	2014-03-04 13:14:21.699959	2014-03-04 13:14:48.287535	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
436	2014-03-04 13:14:51.418526	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
437	2014-03-04 13:14:54.349021	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
438	2014-03-04 13:14:54.64147	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
439	2014-03-04 13:14:56.710975	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
441	2014-03-04 13:14:59.452306	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
443	2014-03-04 13:15:02.422019	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
444	2014-03-04 13:15:02.581799	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
445	2014-03-04 13:15:04.463074	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
446	2014-03-04 13:15:05.135425	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
447	2014-03-04 13:15:05.640935	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
448	2014-03-04 13:15:07.455838	\N	551	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
449	2014-03-04 13:15:07.763184	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
450	2014-03-04 13:15:08.273428	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
451	2014-03-04 13:15:08.59075	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
452	2014-03-04 13:15:10.539549	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
440	2014-03-04 13:14:59.15398	2014-03-04 13:15:11.390273	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
453	2014-03-04 13:15:15.835736	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
454	2014-03-04 13:15:18.467437	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
455	2014-03-04 13:15:19.261032	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
442	2014-03-04 13:15:01.339742	2014-03-04 13:15:23.115288	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
456	2014-03-04 13:15:23.854863	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
457	2014-03-04 13:15:29.380107	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
458	2014-03-04 13:15:30.380071	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
459	2014-03-04 13:15:31.40554	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
460	2014-03-04 13:15:32.510023	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
461	2014-03-04 13:15:32.523173	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
463	2014-03-04 13:15:35.313334	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
464	2014-03-04 13:15:35.413734	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
465	2014-03-04 13:15:40.941455	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
466	2014-03-04 13:15:41.480129	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
467	2014-03-04 13:15:43.78367	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
468	2014-03-04 13:15:45.096608	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
469	2014-03-04 13:15:46.867709	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
470	2014-03-04 13:15:47.132257	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
471	2014-03-04 13:15:48.688341	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
472	2014-03-04 13:15:50.663844	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
462	2014-03-04 13:15:35.258348	2014-03-04 13:15:50.728821	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
473	2014-03-04 13:15:52.08264	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
474	2014-03-04 13:15:52.347855	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
475	2014-03-04 13:15:56.535108	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
476	2014-03-04 13:15:58.46255	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
477	2014-03-04 13:16:00.372423	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
478	2014-03-04 13:16:01.050777	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
480	2014-03-04 13:16:05.517468	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
481	2014-03-04 13:16:05.700673	\N	551	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
479	2014-03-04 13:16:01.054487	2014-03-04 13:16:07.024681	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
482	2014-03-04 13:16:08.842212	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
484	2014-03-04 13:16:11.110862	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
485	2014-03-04 13:16:14.083213	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
486	2014-03-04 13:16:16.854455	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
487	2014-03-04 13:16:17.41255	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
488	2014-03-04 13:16:18.859363	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
489	2014-03-04 13:16:20.684748	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
490	2014-03-04 13:16:25.000999	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
491	2014-03-04 13:16:27.318903	\N	301	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
492	2014-03-04 13:16:28.230366	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
493	2014-03-04 13:16:31.526185	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
494	2014-03-04 13:16:33.984193	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
495	2014-03-04 13:16:34.515774	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
496	2014-03-04 13:16:35.059936	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
497	2014-03-04 13:16:35.37431	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
500	2014-03-04 13:16:37.334154	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
501	2014-03-04 13:16:37.745308	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
502	2014-03-04 13:16:40.185343	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
504	2014-03-04 13:16:44.701804	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
505	2014-03-04 13:16:46.163098	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
506	2014-03-04 13:16:46.167958	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
507	2014-03-04 13:16:48.775733	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
508	2014-03-04 13:16:49.974806	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
509	2014-03-04 13:16:50.118787	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
503	2014-03-04 13:16:44.649438	2014-03-04 13:16:50.562325	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
510	2014-03-04 13:16:51.365023	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
499	2014-03-04 13:16:36.020291	2014-03-04 13:16:52.957441	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
511	2014-03-04 13:16:54.494548	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
483	2014-03-04 13:16:09.590902	2014-03-04 13:16:54.635142	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
512	2014-03-04 13:16:54.657064	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
514	2014-03-04 13:17:00.194828	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
515	2014-03-04 13:17:01.132737	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
516	2014-03-04 13:17:01.399117	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
517	2014-03-04 13:17:04.180967	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
518	2014-03-04 13:17:04.51403	\N	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
519	2014-03-04 13:17:06.730672	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
521	2014-03-04 13:17:11.745816	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
522	2014-03-04 13:17:11.794281	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
524	2014-03-04 13:17:18.351363	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
525	2014-03-04 13:17:18.4211	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
527	2014-03-04 13:17:19.649174	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
528	2014-03-04 13:17:22.277952	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
498	2014-03-04 13:16:35.495861	2014-03-04 13:17:23.101681	312	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
529	2014-03-04 13:17:23.311445	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
513	2014-03-04 13:16:55.578775	2014-03-04 13:17:24.778315	301	172	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
530	2014-03-04 13:17:27.212478	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
531	2014-03-04 13:17:29.066222	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
532	2014-03-04 13:17:30.086447	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
523	2014-03-04 13:17:17.372371	2014-03-04 13:17:30.22213	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
534	2014-03-04 13:17:34.076133	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
536	2014-03-04 13:17:34.916068	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
537	2014-03-04 13:17:35.175479	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
538	2014-03-04 13:17:36.895433	\N	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
539	2014-03-04 13:17:37.319514	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
540	2014-03-04 13:17:37.411814	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
541	2014-03-04 13:17:37.460994	\N	550	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
526	2014-03-04 13:17:19.575773	2014-03-04 13:17:37.690922	551	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
520	2014-03-04 13:17:11.561521	2014-03-04 13:17:38.501144	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
533	2014-03-04 13:17:31.446783	2014-03-04 13:17:39.375996	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
542	2014-03-04 13:17:40.090481	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
544	2014-03-04 13:17:45.608505	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
545	2014-03-04 13:17:45.687152	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
546	2014-03-04 13:17:50.706802	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
548	2014-03-04 13:17:53.026977	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
543	2014-03-04 13:17:42.276745	2014-03-04 13:17:54.508529	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
549	2014-03-04 13:17:55.980559	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
550	2014-03-04 13:17:56.140036	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
551	2014-03-04 13:17:56.320436	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
552	2014-03-04 13:17:57.532881	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
553	2014-03-04 13:17:58.515284	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
554	2014-03-04 13:18:00.072624	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
556	2014-03-04 13:18:04.942853	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
557	2014-03-04 13:18:04.940569	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
558	2014-03-04 13:18:07.342458	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
559	2014-03-04 13:18:07.676	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
560	2014-03-04 13:18:09.132882	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
561	2014-03-04 13:18:09.575166	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
562	2014-03-04 13:18:10.040673	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
563	2014-03-04 13:18:11.461745	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
535	2014-03-04 13:17:34.374671	2014-03-04 13:18:13.655429	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
565	2014-03-04 13:18:17.685812	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
566	2014-03-04 13:18:19.116749	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
564	2014-03-04 13:18:16.364326	2014-03-04 13:18:21.396666	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
568	2014-03-04 13:18:21.885825	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
569	2014-03-04 13:18:22.199934	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
572	2014-03-04 13:18:29.38478	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
547	2014-03-04 13:17:52.475596	2014-03-04 13:18:29.857989	551	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
574	2014-03-04 13:18:30.815444	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
555	2014-03-04 13:18:02.027063	2014-03-04 13:18:32.764945	301	172	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
575	2014-03-04 13:18:33.26746	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
571	2014-03-04 13:18:27.151388	2014-03-04 13:18:39.407664	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
567	2014-03-04 13:18:20.07415	2014-03-04 13:18:42.161637	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
573	2014-03-04 13:18:30.589519	2014-03-04 13:19:27.410614	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
576	2014-03-04 13:18:33.860455	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
577	2014-03-04 13:18:34.239203	\N	516	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
570	2014-03-04 13:18:25.834352	2014-03-04 13:18:35.793869	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
578	2014-03-04 13:18:36.035936	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
579	2014-03-04 13:18:37.490502	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
580	2014-03-04 13:18:40.458565	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
581	2014-03-04 13:18:40.943152	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
582	2014-03-04 13:18:44.728128	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
584	2014-03-04 13:18:46.23491	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
585	2014-03-04 13:18:47.19049	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
587	2014-03-04 13:18:48.361327	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
588	2014-03-04 13:18:50.263145	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
586	2014-03-04 13:18:47.660509	2014-03-04 13:18:53.732792	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
589	2014-03-04 13:18:56.809032	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
590	2014-03-04 13:18:57.169559	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
591	2014-03-04 13:18:57.429779	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
592	2014-03-04 13:18:57.788904	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
593	2014-03-04 13:18:59.32635	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
594	2014-03-04 13:18:59.417565	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
595	2014-03-04 13:18:59.799388	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
596	2014-03-04 13:19:00.676838	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
597	2014-03-04 13:19:00.689019	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
598	2014-03-04 13:19:01.698644	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
599	2014-03-04 13:19:01.703078	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
600	2014-03-04 13:19:02.715774	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
601	2014-03-04 13:19:06.154654	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
602	2014-03-04 13:19:06.975821	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
603	2014-03-04 13:19:10.335642	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
604	2014-03-04 13:19:10.859595	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
606	2014-03-04 13:19:12.670178	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
607	2014-03-04 13:19:12.809851	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
583	2014-03-04 13:18:45.051133	2014-03-04 13:19:14.263384	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
609	2014-03-04 13:19:15.148642	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
611	2014-03-04 13:19:18.202117	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
612	2014-03-04 13:19:18.884065	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
613	2014-03-04 13:19:20.108796	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
614	2014-03-04 13:19:22.064532	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
615	2014-03-04 13:19:23.774841	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
616	2014-03-04 13:19:28.665881	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
617	2014-03-04 13:19:30.91741	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
610	2014-03-04 13:19:17.239009	2014-03-04 13:19:31.986616	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
605	2014-03-04 13:19:10.925258	2014-03-04 13:19:33.248594	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
619	2014-03-04 13:19:33.480967	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
620	2014-03-04 13:19:34.559923	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
621	2014-03-04 13:19:34.702541	\N	301	174	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
608	2014-03-04 13:19:15.075871	2014-03-04 13:19:35.491274	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
622	2014-03-04 13:19:35.755675	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
618	2014-03-04 13:19:32.315733	2014-03-04 13:19:38.216378	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
624	2014-03-04 13:19:40.110778	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
625	2014-03-04 13:19:42.43114	\N	520	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
626	2014-03-04 13:19:42.981756	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
627	2014-03-04 13:19:43.12429	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
628	2014-03-04 13:19:45.674489	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
629	2014-03-04 13:19:46.416695	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
630	2014-03-04 13:19:47.091161	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
631	2014-03-04 13:19:47.260291	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
632	2014-03-04 13:19:48.995006	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
623	2014-03-04 13:19:39.797797	2014-03-04 13:19:50.529606	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
634	2014-03-04 13:19:50.746674	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
635	2014-03-04 13:19:52.327405	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
636	2014-03-04 13:19:54.474843	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
637	2014-03-04 13:19:56.107801	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
638	2014-03-04 13:19:56.150787	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
639	2014-03-04 13:19:57.741297	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
642	2014-03-04 13:20:02.650641	\N	530	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
644	2014-03-04 13:20:04.148866	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
645	2014-03-04 13:20:05.691223	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
633	2014-03-04 13:19:49.89047	2014-03-04 13:20:06.818894	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
647	2014-03-04 13:20:09.69536	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
648	2014-03-04 13:20:11.492022	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
650	2014-03-04 13:20:15.38328	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
651	2014-03-04 13:20:17.134676	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
652	2014-03-04 13:20:17.35085	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
653	2014-03-04 13:20:17.89542	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
643	2014-03-04 13:20:03.521886	2014-03-04 13:20:18.721875	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
654	2014-03-04 13:20:19.688978	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
655	2014-03-04 13:20:20.296251	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
657	2014-03-04 13:20:24.230015	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
658	2014-03-04 13:20:24.41172	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
649	2014-03-04 13:20:12.881808	2014-03-04 13:20:40.530228	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
641	2014-03-04 13:20:01.886378	2014-03-04 13:20:44.530031	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
656	2014-03-04 13:20:22.569703	2014-03-04 13:20:45.230182	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
659	2014-03-04 13:20:24.922146	\N	516	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
660	2014-03-04 13:20:27.271428	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
646	2014-03-04 13:20:09.432176	2014-03-04 13:20:29.07363	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
661	2014-03-04 13:20:29.326174	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
662	2014-03-04 13:20:29.339771	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
663	2014-03-04 13:20:33.146927	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
664	2014-03-04 13:20:34.050906	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
665	2014-03-04 13:20:34.12277	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
666	2014-03-04 13:20:34.442144	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
667	2014-03-04 13:20:34.805924	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
668	2014-03-04 13:20:39.928679	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
671	2014-03-04 13:20:46.941378	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
669	2014-03-04 13:20:41.764537	2014-03-04 13:20:49.243214	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
672	2014-03-04 13:20:50.746455	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
673	2014-03-04 13:20:52.030711	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
674	2014-03-04 13:20:52.862181	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
640	2014-03-04 13:20:00.886918	2014-03-04 13:20:53.639374	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
675	2014-03-04 13:20:54.295554	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
676	2014-03-04 13:20:54.769407	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
678	2014-03-04 13:20:56.401592	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
679	2014-03-04 13:20:57.014456	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
680	2014-03-04 13:21:00.526458	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
682	2014-03-04 13:21:03.77428	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
683	2014-03-04 13:21:04.135222	\N	516	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
670	2014-03-04 13:20:43.730836	2014-03-04 13:21:04.747206	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
686	2014-03-04 13:21:07.900563	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
687	2014-03-04 13:21:08.560316	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
688	2014-03-04 13:21:08.751106	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
689	2014-03-04 13:21:10.955678	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
690	2014-03-04 13:21:11.340352	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
691	2014-03-04 13:21:13.642558	\N	523	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
692	2014-03-04 13:21:15.364879	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
693	2014-03-04 13:21:16.711718	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
694	2014-03-04 13:21:17.662608	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
696	2014-03-04 13:21:19.510657	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
697	2014-03-04 13:21:20.198565	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
684	2014-03-04 13:21:06.256927	2014-03-04 13:21:22.815612	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
700	2014-03-04 13:21:26.045267	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
701	2014-03-04 13:21:27.024021	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
702	2014-03-04 13:21:28.205904	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
703	2014-03-04 13:21:28.996058	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
704	2014-03-04 13:21:29.073809	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
685	2014-03-04 13:21:06.882226	2014-03-04 13:21:29.554749	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
705	2014-03-04 13:21:29.751627	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
706	2014-03-04 13:21:30.781892	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
695	2014-03-04 13:21:18.065975	2014-03-04 13:21:32.818045	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
707	2014-03-04 13:21:33.247507	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
681	2014-03-04 13:21:03.719089	2014-03-04 13:21:33.251159	301	174	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
708	2014-03-04 13:21:34.274732	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
709	2014-03-04 13:21:35.245103	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
711	2014-03-04 13:21:38.599348	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
699	2014-03-04 13:21:25.385341	2014-03-04 13:21:39.023919	553	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
712	2014-03-04 13:21:39.623375	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
713	2014-03-04 13:21:40.501034	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
698	2014-03-04 13:21:22.845078	2014-03-04 13:21:42.000221	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
714	2014-03-04 13:21:46.68846	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
715	2014-03-04 13:21:47.095555	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
716	2014-03-04 13:21:47.390535	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
717	2014-03-04 13:21:47.51332	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
718	2014-03-04 13:21:48.707243	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
719	2014-03-04 13:21:48.779088	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
720	2014-03-04 13:21:51.075672	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
722	2014-03-04 13:21:53.814695	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
677	2014-03-04 13:20:56.338233	2014-03-04 13:21:54.743718	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
723	2014-03-04 13:21:55.350786	\N	553	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
724	2014-03-04 13:21:55.675114	\N	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
725	2014-03-04 13:21:58.359568	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
726	2014-03-04 13:21:58.870835	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
728	2014-03-04 13:22:02.998908	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
730	2014-03-04 13:22:04.754199	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
731	2014-03-04 13:22:04.930528	\N	301	175	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
733	2014-03-04 13:22:07.131627	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
735	2014-03-04 13:22:11.475155	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
736	2014-03-04 13:22:12.521842	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
738	2014-03-04 13:22:18.020607	\N	553	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
727	2014-03-04 13:22:02.016728	2014-03-04 13:22:19.03862	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
739	2014-03-04 13:22:19.444412	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
740	2014-03-04 13:22:20.022788	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
729	2014-03-04 13:22:04.459967	2014-03-04 13:22:20.970575	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
721	2014-03-04 13:21:51.446896	2014-03-04 13:22:28.094364	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
732	2014-03-04 13:22:06.509507	2014-03-04 13:23:01.743089	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
737	2014-03-04 13:22:13.013741	2014-03-04 13:23:10.437263	520	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
710	2014-03-04 13:21:37.604529	2014-03-04 13:22:20.562467	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
742	2014-03-04 13:22:22.829394	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
743	2014-03-04 13:22:27.530682	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
734	2014-03-04 13:22:08.549332	2014-03-04 13:22:29.182415	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
744	2014-03-04 13:22:29.595017	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
741	2014-03-04 13:22:20.54869	2014-03-04 13:22:29.822786	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
745	2014-03-04 13:22:31.275238	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
746	2014-03-04 13:22:31.757073	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
747	2014-03-04 13:22:32.689063	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
748	2014-03-04 13:22:33.331275	\N	301	174	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
749	2014-03-04 13:22:34.807178	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
750	2014-03-04 13:22:36.722771	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
751	2014-03-04 13:22:36.772615	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
752	2014-03-04 13:22:39.177956	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
753	2014-03-04 13:22:41.404085	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
754	2014-03-04 13:22:41.844503	\N	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
755	2014-03-04 13:22:43.71951	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
756	2014-03-04 13:22:44.081702	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
757	2014-03-04 13:22:45.286473	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
758	2014-03-04 13:22:45.554162	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
760	2014-03-04 13:22:46.36291	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
761	2014-03-04 13:22:46.954247	\N	523	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
763	2014-03-04 13:22:52.376442	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
766	2014-03-04 13:22:57.302921	\N	553	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
767	2014-03-04 13:22:58.936562	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
768	2014-03-04 13:23:00.579314	\N	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
759	2014-03-04 13:22:46.354867	2014-03-04 13:23:01.23037	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
769	2014-03-04 13:23:04.395472	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
770	2014-03-04 13:23:05.519256	\N	550	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
772	2014-03-04 13:23:06.519971	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
764	2014-03-04 13:22:52.958758	2014-03-04 13:23:08.903513	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
774	2014-03-04 13:23:10.351791	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
775	2014-03-04 13:23:12.748185	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
762	2014-03-04 13:22:49.039647	2014-03-04 13:23:15.858878	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
778	2014-03-04 13:23:18.029325	\N	551	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
765	2014-03-04 13:22:55.500677	2014-03-04 13:23:19.145772	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
779	2014-03-04 13:23:20.898676	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
780	2014-03-04 13:23:21.534384	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
782	2014-03-04 13:23:22.648412	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
784	2014-03-04 13:23:23.182719	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
785	2014-03-04 13:23:23.250383	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
771	2014-03-04 13:23:06.205113	2014-03-04 13:23:23.626329	511	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
786	2014-03-04 13:23:24.530227	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
783	2014-03-04 13:23:22.755612	2014-03-04 13:23:29.428656	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
773	2014-03-04 13:23:08.329746	2014-03-04 13:23:32.01744	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
787	2014-03-04 13:23:33.130824	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
788	2014-03-04 13:23:33.571322	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
789	2014-03-04 13:23:34.914968	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
790	2014-03-04 13:23:37.827617	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
791	2014-03-04 13:23:38.213016	\N	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
794	2014-03-04 13:23:41.830899	\N	520	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
795	2014-03-04 13:23:43.60147	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
796	2014-03-04 13:23:43.960706	\N	516	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
781	2014-03-04 13:23:22.080548	2014-03-04 13:23:44.583675	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
797	2014-03-04 13:23:45.588132	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
798	2014-03-04 13:23:46.454577	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
799	2014-03-04 13:23:47.128646	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
800	2014-03-04 13:23:48.638841	\N	512	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
792	2014-03-04 13:23:38.580769	2014-03-04 13:23:48.647725	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
801	2014-03-04 13:23:53.011341	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
776	2014-03-04 13:23:13.48355	2014-03-04 13:23:55.857425	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
803	2014-03-04 13:23:59.874304	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
804	2014-03-04 13:24:01.949884	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
777	2014-03-04 13:23:15.179912	2014-03-04 13:24:02.128346	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
805	2014-03-04 13:24:03.23612	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
806	2014-03-04 13:24:03.687507	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
807	2014-03-04 13:24:04.722857	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
809	2014-03-04 13:24:06.160533	\N	510	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
802	2014-03-04 13:23:54.41605	2014-03-04 13:24:08.457773	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
811	2014-03-04 13:24:08.800642	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
812	2014-03-04 13:24:11.325103	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
813	2014-03-04 13:24:11.530971	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
814	2014-03-04 13:24:13.471939	\N	553	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
815	2014-03-04 13:24:14.355573	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
816	2014-03-04 13:24:15.084968	\N	551	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
817	2014-03-04 13:24:15.714919	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
818	2014-03-04 13:24:15.810804	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
819	2014-03-04 13:24:17.734646	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
820	2014-03-04 13:24:18.272047	\N	529	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
821	2014-03-04 13:24:20.138022	\N	520	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
810	2014-03-04 13:24:08.389968	2014-03-04 13:24:24.217248	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
808	2014-03-04 13:24:04.796711	2014-03-04 13:24:43.040036	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
822	2014-03-04 13:24:20.23051	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
823	2014-03-04 13:24:20.634824	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
824	2014-03-04 13:24:20.753493	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
825	2014-03-04 13:24:20.813235	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
826	2014-03-04 13:24:21.37246	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
793	2014-03-04 13:23:39.845894	2014-03-04 13:24:23.471194	511	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
827	2014-03-04 13:24:24.616124	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
828	2014-03-04 13:24:25.229043	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
829	2014-03-04 13:24:31.120316	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
830	2014-03-04 13:24:31.704039	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
831	2014-03-04 13:24:31.77571	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
832	2014-03-04 13:24:34.128364	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
833	2014-03-04 13:24:34.39903	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
834	2014-03-04 13:24:34.404319	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
835	2014-03-04 13:24:34.588767	\N	511	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
836	2014-03-04 13:24:36.670259	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
837	2014-03-04 13:24:38.311279	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
838	2014-03-04 13:24:40.285993	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
839	2014-03-04 13:24:43.030856	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
840	2014-03-04 13:24:47.809639	\N	551	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
841	2014-03-04 13:24:48.508448	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
842	2014-03-04 13:24:49.160463	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
843	2014-03-04 13:24:51.320101	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
844	2014-03-04 13:24:51.720726	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
845	2014-03-04 13:24:54.174425	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
846	2014-03-04 13:24:55.760937	\N	511	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
847	2014-03-04 13:24:57.272817	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
849	2014-03-04 13:25:01.271226	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
850	2014-03-04 13:25:01.815687	\N	520	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
851	2014-03-04 13:25:01.951077	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
852	2014-03-04 13:25:03.020346	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
853	2014-03-04 13:25:03.181899	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
854	2014-03-04 13:25:07.870158	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
848	2014-03-04 13:24:59.420323	2014-03-04 13:25:08.310522	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
855	2014-03-04 13:25:13.244627	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
856	2014-03-04 13:25:13.684405	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
857	2014-03-04 13:25:14.896334	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
858	2014-03-04 13:25:15.023781	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
859	2014-03-04 13:25:16.086483	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
861	2014-03-04 13:25:19.273731	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
862	2014-03-04 13:25:20.940625	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
863	2014-03-04 13:25:21.048276	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
864	2014-03-04 13:25:22.476425	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
865	2014-03-04 13:25:26.725781	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
866	2014-03-04 13:25:27.878691	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
867	2014-03-04 13:25:27.882411	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
868	2014-03-04 13:25:29.554287	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
870	2014-03-04 13:25:31.733683	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
871	2014-03-04 13:25:32.44718	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
872	2014-03-04 13:25:32.444102	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
860	2014-03-04 13:25:17.67021	2014-03-04 13:25:34.942015	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
873	2014-03-04 13:25:35.403215	\N	529	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
876	2014-03-04 13:25:37.31105	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
879	2014-03-04 13:25:38.530726	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
880	2014-03-04 13:25:41.376071	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
881	2014-03-04 13:25:42.599585	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
882	2014-03-04 13:25:42.950631	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
869	2014-03-04 13:25:30.532885	2014-03-04 13:25:43.360281	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
884	2014-03-04 13:25:47.03179	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
878	2014-03-04 13:25:38.060223	2014-03-04 13:25:52.442919	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
886	2014-03-04 13:25:53.109808	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
887	2014-03-04 13:25:54.675488	\N	551	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
888	2014-03-04 13:25:54.958395	\N	525	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
889	2014-03-04 13:25:56.300422	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
875	2014-03-04 13:25:37.243789	2014-03-04 13:25:56.883431	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
890	2014-03-04 13:25:59.192177	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
891	2014-03-04 13:26:00.292979	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
892	2014-03-04 13:26:01.196563	\N	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
893	2014-03-04 13:26:02.613369	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
894	2014-03-04 13:26:04.374826	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
895	2014-03-04 13:26:05.990715	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
896	2014-03-04 13:26:06.096075	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
885	2014-03-04 13:25:52.891085	2014-03-04 13:26:08.953287	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
877	2014-03-04 13:25:37.404455	2014-03-04 13:26:08.990701	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
897	2014-03-04 13:26:08.998497	\N	312	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
898	2014-03-04 13:26:12.075795	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
874	2014-03-04 13:25:36.175052	2014-03-04 13:26:18.092315	511	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
900	2014-03-04 13:26:18.439431	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
883	2014-03-04 13:25:44.766077	2014-03-04 13:26:19.192613	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
902	2014-03-04 13:26:21.592444	\N	519	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
904	2014-03-04 13:26:22.893837	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
903	2014-03-04 13:26:22.746761	2014-03-04 13:26:33.760286	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
899	2014-03-04 13:26:15.097486	2014-03-04 13:26:35.461042	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
905	2014-03-04 13:26:23.450794	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
906	2014-03-04 13:26:27.20173	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
907	2014-03-04 13:26:28.049438	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
908	2014-03-04 13:26:28.55957	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
910	2014-03-04 13:26:31.345737	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
911	2014-03-04 13:26:31.645466	\N	530	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
901	2014-03-04 13:26:19.860341	2014-03-04 13:26:31.85095	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
912	2014-03-04 13:26:33.397597	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
913	2014-03-04 13:26:34.224669	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
915	2014-03-04 13:26:40.044385	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
917	2014-03-04 13:26:40.532968	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
918	2014-03-04 13:26:41.62628	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
919	2014-03-04 13:26:43.446093	\N	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
920	2014-03-04 13:26:45.540596	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
921	2014-03-04 13:26:46.068688	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
922	2014-03-04 13:26:46.148588	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
923	2014-03-04 13:26:46.943572	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
924	2014-03-04 13:26:47.066764	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
925	2014-03-04 13:26:47.109419	\N	520	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
914	2014-03-04 13:26:36.531617	2014-03-04 13:26:48.44093	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
926	2014-03-04 13:26:49.675044	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
927	2014-03-04 13:26:49.918226	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
928	2014-03-04 13:26:52.396602	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
929	2014-03-04 13:26:54.897536	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
930	2014-03-04 13:26:55.459492	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
931	2014-03-04 13:26:56.769065	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
932	2014-03-04 13:26:58.772161	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
933	2014-03-04 13:26:59.439666	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
935	2014-03-04 13:27:03.65579	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
916	2014-03-04 13:26:40.115595	2014-03-04 13:27:04.530136	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
936	2014-03-04 13:27:06.759354	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
937	2014-03-04 13:27:06.797131	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
938	2014-03-04 13:27:06.912706	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
939	2014-03-04 13:27:09.011343	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
940	2014-03-04 13:27:11.153568	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
909	2014-03-04 13:26:30.519492	2014-03-04 13:27:12.364645	511	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
941	2014-03-04 13:27:12.550939	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
942	2014-03-04 13:27:12.741911	\N	518	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
934	2014-03-04 13:27:00.85659	2014-03-04 13:27:14.500794	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
943	2014-03-04 13:27:15.889959	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
946	2014-03-04 13:27:19.904535	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
947	2014-03-04 13:27:22.280171	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
950	2014-03-04 13:27:23.976119	\N	512	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
951	2014-03-04 13:27:24.222703	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
953	2014-03-04 13:27:25.187669	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
954	2014-03-04 13:27:25.61126	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
955	2014-03-04 13:27:25.706869	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
956	2014-03-04 13:27:25.7109	\N	511	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
944	2014-03-04 13:27:17.472429	2014-03-04 13:27:31.162309	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
958	2014-03-04 13:27:32.420118	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
959	2014-03-04 13:27:34.073481	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
960	2014-03-04 13:27:34.518567	\N	523	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
961	2014-03-04 13:27:34.757412	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
952	2014-03-04 13:27:25.119743	2014-03-04 13:27:35.402004	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
948	2014-03-04 13:27:23.294677	2014-03-04 13:27:35.739193	509	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
962	2014-03-04 13:27:35.886077	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
963	2014-03-04 13:27:41.056247	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
964	2014-03-04 13:27:45.319346	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
949	2014-03-04 13:27:23.367887	2014-03-04 13:27:45.653663	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
965	2014-03-04 13:27:46.524561	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
966	2014-03-04 13:27:48.411093	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
967	2014-03-04 13:27:48.904796	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
945	2014-03-04 13:27:19.571945	2014-03-04 13:27:49.161683	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
969	2014-03-04 13:27:50.734418	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
970	2014-03-04 13:27:54.055161	\N	511	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
971	2014-03-04 13:27:57.824871	\N	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
972	2014-03-04 13:27:58.072476	\N	516	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
973	2014-03-04 13:27:59.145703	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
974	2014-03-04 13:27:59.863664	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
957	2014-03-04 13:27:26.513841	2014-03-04 13:28:00.248386	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
975	2014-03-04 13:28:02.669913	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
976	2014-03-04 13:28:03.5061	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
977	2014-03-04 13:28:03.614969	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
968	2014-03-04 13:27:49.800524	2014-03-04 13:28:04.783986	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
978	2014-03-04 13:28:05.587683	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
979	2014-03-04 13:28:06.736883	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
980	2014-03-04 13:28:07.214781	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
981	2014-03-04 13:28:07.404307	\N	522	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
982	2014-03-04 13:28:07.880687	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
984	2014-03-04 13:28:13.640741	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
985	2014-03-04 13:28:14.391801	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
986	2014-03-04 13:28:14.780961	\N	530	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
987	2014-03-04 13:28:16.681806	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
988	2014-03-04 13:28:18.216687	\N	528	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
991	2014-03-04 13:28:22.729308	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
993	2014-03-04 13:28:24.325927	\N	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
983	2014-03-04 13:28:13.415729	2014-03-04 13:28:24.536214	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
994	2014-03-04 13:28:25.430355	\N	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
995	2014-03-04 13:28:25.763228	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
996	2014-03-04 13:28:27.198756	\N	511	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
997	2014-03-04 13:28:27.900718	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
998	2014-03-04 13:28:28.432194	\N	529	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
990	2014-03-04 13:28:19.373511	2014-03-04 13:28:28.786901	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
999	2014-03-04 13:28:33.323302	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
989	2014-03-04 13:28:19.089896	2014-03-04 13:28:34.469238	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1000	2014-03-04 13:28:35.091458	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1001	2014-03-04 13:28:36.559341	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1002	2014-03-04 13:28:37.416701	\N	551	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1003	2014-03-04 13:28:43.218351	\N	518	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1005	2014-03-04 13:28:43.348509	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1006	2014-03-04 13:28:44.468416	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1007	2014-03-04 13:28:44.964609	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1009	2014-03-04 13:28:46.946546	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1010	2014-03-04 13:28:48.089798	\N	517	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1011	2014-03-04 13:28:48.711967	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1012	2014-03-04 13:28:50.253102	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1013	2014-03-04 13:28:50.797853	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1014	2014-03-04 13:28:51.008266	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1004	2014-03-04 13:28:43.344603	2014-03-04 13:28:53.377304	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1016	2014-03-04 13:28:54.398354	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1017	2014-03-04 13:28:57.760156	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1018	2014-03-04 13:28:59.055919	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1020	2014-03-04 13:29:00.154804	\N	519	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1021	2014-03-04 13:29:00.256028	\N	525	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1023	2014-03-04 13:29:02.101951	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1024	2014-03-04 13:29:03.219049	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1025	2014-03-04 13:29:05.545256	\N	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1015	2014-03-04 13:28:53.121537	2014-03-04 13:29:06.101489	526	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1026	2014-03-04 13:29:06.184143	\N	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1027	2014-03-04 13:29:06.372504	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1028	2014-03-04 13:29:09.362342	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
992	2014-03-04 13:28:24.01882	2014-03-04 13:29:09.948553	509	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1029	2014-03-04 13:29:11.095555	\N	530	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1030	2014-03-04 13:29:12.515112	\N	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1031	2014-03-04 13:29:12.544487	\N	312	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1022	2014-03-04 13:29:01.600126	2014-03-04 13:29:13.50877	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1032	2014-03-04 13:29:15.773707	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1033	2014-03-04 13:29:16.024065	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1034	2014-03-04 13:29:16.515081	\N	549	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1036	2014-03-04 13:29:16.603513	\N	517	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1008	2014-03-04 13:28:46.647398	2014-03-04 13:29:17.336447	522	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1039	2014-03-04 13:29:18.669003	\N	550	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1040	2014-03-04 13:29:24.468858	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1035	2014-03-04 13:29:16.534644	2014-03-04 13:29:25.556275	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1043	2014-03-04 13:29:30.887037	\N	530	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1038	2014-03-04 13:29:18.429118	2014-03-04 13:29:32.006616	553	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1044	2014-03-04 13:29:32.554132	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1045	2014-03-04 13:29:32.91282	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1037	2014-03-04 13:29:17.795969	2014-03-04 13:29:33.659423	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1019	2014-03-04 13:28:59.461318	2014-03-04 13:29:33.73172	511	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1046	2014-03-04 13:29:34.690033	\N	526	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1047	2014-03-04 13:29:34.753176	\N	515	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1048	2014-03-04 13:29:38.607172	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1049	2014-03-04 13:29:39.372973	\N	522	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1050	2014-03-04 13:29:39.768285	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1053	2014-03-04 13:29:43.319012	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1054	2014-03-04 13:29:43.577082	\N	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1055	2014-03-04 13:29:44.147167	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1056	2014-03-04 13:29:44.462391	\N	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1057	2014-03-04 13:29:47.462011	\N	512	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1058	2014-03-04 13:29:47.474142	\N	518	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1059	2014-03-04 13:29:51.150907	\N	511	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1060	2014-03-04 13:29:51.797329	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1041	2014-03-04 13:29:27.60352	2014-03-04 13:29:52.083772	508	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1051	2014-03-04 13:29:39.842291	2014-03-04 13:29:55.049905	513	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1061	2014-03-04 13:29:55.70678	\N	520	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1063	2014-03-04 13:29:56.600278	\N	530	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1064	2014-03-04 13:29:56.837436	\N	516	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1067	2014-03-04 13:30:00.849773	\N	523	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1068	2014-03-04 13:30:02.960226	\N	509	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1069	2014-03-04 13:30:03.192344	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1042	2014-03-04 13:29:29.343	2014-03-04 13:30:12.849281	551	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1062	2014-03-04 13:29:55.733745	2014-03-04 13:30:12.889042	510	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1065	2014-03-04 13:29:57.622147	2014-03-04 13:30:18.774029	529	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1066	2014-03-04 13:29:58.510098	2014-03-04 13:30:23.607403	549	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1070	2014-03-04 13:30:03.961627	\N	521	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1052	2014-03-04 13:29:40.255219	2014-03-04 13:30:04.508631	552	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1071	2014-03-04 13:30:07.473302	\N	522	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1072	2014-03-04 13:30:08.015501	\N	517	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1073	2014-03-04 13:30:10.883394	\N	518	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1074	2014-03-04 13:30:12.233844	\N	508	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1075	2014-03-04 13:30:13.425935	\N	511	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1076	2014-03-04 13:30:13.79695	\N	524	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1077	2014-03-04 13:30:14.377805	\N	512	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1079	2014-03-04 13:30:19.011394	\N	513	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1080	2014-03-04 13:30:21.031365	\N	515	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1081	2014-03-04 13:30:24.970203	\N	552	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1082	2014-03-04 13:30:30.163265	\N	528	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1083	2014-03-04 13:30:32.996143	\N	529	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1078	2014-03-04 13:30:17.831259	2014-03-04 13:30:51.504083	312	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1084	2014-03-04 13:31:04.438573	2014-03-04 13:31:32.783219	312	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1085	2014-03-04 13:31:46.683154	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1086	2014-03-04 13:32:30.915679	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1087	2014-03-04 13:34:29.185297	2014-03-04 13:34:58.969771	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1088	2014-03-04 13:35:10.93041	\N	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1089	2014-03-04 13:36:31.042558	\N	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1090	2014-03-04 13:36:57.491559	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1091	2014-03-04 13:37:09.314824	2014-03-04 13:37:37.026711	312	64	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1092	2014-03-04 13:37:52.524533	\N	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1093	2014-03-04 13:38:29.410121	2014-03-04 13:38:58.32477	312	65	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1094	2014-03-04 13:40:16.185348	2014-03-04 13:40:51.113371	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1095	2014-03-04 13:41:53.627928	\N	312	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1096	2014-03-04 13:43:22.390996	\N	312	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1097	2014-03-04 13:43:59.208864	2014-03-04 13:44:31.703589	312	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1098	2014-03-04 13:45:27.957996	2014-03-04 13:45:58.407916	312	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1099	2014-03-04 13:46:10.858764	2014-03-04 13:46:34.78015	312	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1100	2014-03-04 13:46:46.819163	2014-03-04 13:47:20.994768	312	69	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1101	2014-03-04 13:47:34.724328	2014-03-04 13:48:07.741268	312	70	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1102	2014-03-04 13:48:20.134303	2014-03-04 13:48:53.484771	312	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1103	2014-03-04 13:49:05.89002	\N	312	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1104	2014-03-04 13:49:47.575132	2014-03-04 13:50:22.076101	312	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1105	2014-03-04 13:50:42.471061	2014-03-04 13:51:08.432942	312	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1106	2014-03-04 13:51:24.415942	2014-03-04 13:51:53.571014	312	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1107	2014-03-04 13:52:06.129864	2014-03-04 13:52:32.920817	312	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1108	2014-03-04 13:52:45.88055	\N	312	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1109	2014-03-04 13:53:37.10372	\N	312	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1110	2014-03-04 13:53:56.891915	2014-03-04 13:54:29.620561	312	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	t
1111	2014-03-04 14:08:11.839425	\N	549	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1112	2014-03-04 14:08:32.900676	\N	549	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1113	2014-03-04 14:10:37.481367	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1114	2014-03-04 14:10:43.607275	\N	451	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
1116	2014-03-04 14:11:05.181845	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1117	2014-03-04 14:11:15.10745	\N	451	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
1115	2014-03-04 14:10:54.528469	2014-03-04 14:11:16.167071	419	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1118	2014-03-04 14:11:33.704515	\N	419	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1119	2014-03-04 14:11:34.679666	2014-03-04 14:11:48.710599	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1120	2014-03-04 14:11:52.648567	\N	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1121	2014-03-04 14:11:52.677807	\N	428	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1123	2014-03-04 14:12:11.943875	\N	419	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1124	2014-03-04 14:12:22.114776	\N	549	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1126	2014-03-04 14:12:26.570556	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1127	2014-03-04 14:12:30.383368	\N	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1128	2014-03-04 14:12:31.278585	\N	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1129	2014-03-04 14:12:33.278311	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1122	2014-03-04 14:12:03.291746	2014-03-04 14:12:41.781467	457	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1131	2014-03-04 14:12:47.424906	\N	419	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1130	2014-03-04 14:12:41.813583	2014-03-04 14:12:49.0264	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1132	2014-03-04 14:12:54.252999	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1133	2014-03-04 14:12:58.252632	\N	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1134	2014-03-04 14:13:02.614237	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1136	2014-03-04 14:13:07.458457	\N	457	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1137	2014-03-04 14:13:15.725655	\N	419	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1125	2014-03-04 14:12:23.182778	2014-03-04 14:13:16.592874	428	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1140	2014-03-04 14:13:16.96413	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1139	2014-03-04 14:13:16.468518	2014-03-04 14:13:23.104862	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1141	2014-03-04 14:13:23.446512	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1143	2014-03-04 14:13:29.040337	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1144	2014-03-04 14:13:29.661569	\N	428	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1138	2014-03-04 14:13:15.891647	2014-03-04 14:13:31.139987	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1147	2014-03-04 14:13:38.560287	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1142	2014-03-04 14:13:24.110481	2014-03-04 14:13:41.530797	457	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1135	2014-03-04 14:13:07.000697	2014-03-04 14:13:43.837423	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1148	2014-03-04 14:13:44.583022	\N	451	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1149	2014-03-04 14:13:44.938827	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1145	2014-03-04 14:13:30.479518	2014-03-04 14:13:47.097796	419	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1146	2014-03-04 14:13:36.268276	2014-03-04 14:14:11.073535	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1151	2014-03-04 14:13:54.938171	\N	457	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1152	2014-03-04 14:13:58.516684	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1153	2014-03-04 14:13:58.884961	\N	414	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1155	2014-03-04 14:14:02.958003	\N	419	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1156	2014-03-04 14:14:12.518865	\N	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1159	2014-03-04 14:14:21.630472	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1157	2014-03-04 14:14:12.798053	2014-03-04 14:14:22.852445	457	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1160	2014-03-04 14:14:25.818903	\N	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1161	2014-03-04 14:14:30.294285	\N	442	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
1162	2014-03-04 14:14:32.339271	\N	419	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1163	2014-03-04 14:14:37.23781	\N	457	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1154	2014-03-04 14:13:59.735153	2014-03-04 14:14:41.601417	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1150	2014-03-04 14:13:51.722542	2014-03-04 14:14:46.212456	428	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1164	2014-03-04 14:14:49.996721	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1165	2014-03-04 14:14:53.643745	\N	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1166	2014-03-04 14:14:59.338754	\N	428	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1167	2014-03-04 14:14:59.606238	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1168	2014-03-04 14:15:01.919309	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1169	2014-03-04 14:15:04.839045	\N	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1158	2014-03-04 14:14:18.770797	2014-03-04 14:15:05.044609	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1170	2014-03-04 14:15:05.306939	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1171	2014-03-04 14:15:11.632416	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1172	2014-03-04 14:15:13.688364	\N	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1174	2014-03-04 14:15:20.348506	\N	442	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
1175	2014-03-04 14:15:22.856884	\N	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1176	2014-03-04 14:15:25.317078	\N	428	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1177	2014-03-04 14:15:25.330906	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1178	2014-03-04 14:15:31.01627	2014-03-04 14:15:45.030484	457	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1180	2014-03-04 14:15:45.91607	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1181	2014-03-04 14:15:46.308259	\N	401	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1173	2014-03-04 14:15:17.090916	2014-03-04 14:15:49.850549	419	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1183	2014-03-04 14:15:50.046882	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1185	2014-03-04 14:15:53.076968	\N	405	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1187	2014-03-04 14:15:59.076809	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1184	2014-03-04 14:15:51.156188	2014-03-04 14:16:01.958426	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1179	2014-03-04 14:15:31.395377	2014-03-04 14:16:07.989311	414	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1191	2014-03-04 14:16:08.070366	\N	442	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1192	2014-03-04 14:16:08.074202	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1194	2014-03-04 14:16:12.427895	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1195	2014-03-04 14:16:15.308598	\N	451	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1196	2014-03-04 14:16:18.598249	\N	401	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1197	2014-03-04 14:16:19.324877	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1182	2014-03-04 14:15:48.080934	2014-03-04 14:16:25.337492	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1193	2014-03-04 14:16:12.215929	2014-03-04 14:16:34.424375	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1199	2014-03-04 14:16:34.910816	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1186	2014-03-04 14:15:54.620898	2014-03-04 14:16:36.668393	428	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1200	2014-03-04 14:16:37.555143	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1201	2014-03-04 14:16:41.435686	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1189	2014-03-04 14:16:02.011436	2014-03-04 14:16:44.210533	457	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1188	2014-03-04 14:15:59.995733	2014-03-04 14:16:44.857289	453	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1203	2014-03-04 14:16:45.521771	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1204	2014-03-04 14:16:47.56859	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1190	2014-03-04 14:16:04.398197	2014-03-04 14:16:48.286134	419	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1205	2014-03-04 14:16:50.48572	\N	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1206	2014-03-04 14:16:50.878692	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1209	2014-03-04 14:16:56.458151	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1212	2014-03-04 14:16:58.429543	\N	453	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1213	2014-03-04 14:16:58.665744	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1214	2014-03-04 14:16:58.723393	\N	457	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1215	2014-03-04 14:16:59.973635	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1216	2014-03-04 14:17:03.135456	\N	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1198	2014-03-04 14:16:22.426185	2014-03-04 14:17:04.265517	414	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1217	2014-03-04 14:17:09.327373	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1218	2014-03-04 14:17:10.07391	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1219	2014-03-04 14:17:14.236056	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1207	2014-03-04 14:16:54.011617	2014-03-04 14:17:18.603734	451	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1223	2014-03-04 14:17:18.74764	\N	414	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1208	2014-03-04 14:16:55.635763	2014-03-04 14:17:19.775669	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1224	2014-03-04 14:17:20.114967	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1225	2014-03-04 14:17:20.99	\N	459	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
1226	2014-03-04 14:17:22.599394	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1227	2014-03-04 14:17:25.648959	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1202	2014-03-04 14:16:42.639346	2014-03-04 14:17:26.879922	442	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1228	2014-03-04 14:17:28.627767	\N	419	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1229	2014-03-04 14:17:29.6484	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1230	2014-03-04 14:17:31.471671	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1220	2014-03-04 14:17:16.219832	2014-03-04 14:17:35.793135	453	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1210	2014-03-04 14:16:56.836019	2014-03-04 14:17:38.716487	428	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1221	2014-03-04 14:17:16.79812	2014-03-04 14:17:49.167652	401	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1211	2014-03-04 14:16:57.494738	2014-03-04 14:17:50.823326	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1231	2014-03-04 14:17:31.896837	2014-03-04 14:17:57.664918	451	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1232	2014-03-04 14:17:35.029055	2014-03-04 14:18:07.47894	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1222	2014-03-04 14:17:17.562567	2014-03-04 14:17:35.393143	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1234	2014-03-04 14:17:41.79593	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1236	2014-03-04 14:17:44.495104	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1237	2014-03-04 14:17:44.722664	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1238	2014-03-04 14:17:45.355296	\N	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1239	2014-03-04 14:17:46.382381	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1240	2014-03-04 14:17:49.710018	\N	453	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1241	2014-03-04 14:17:51.909801	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1242	2014-03-04 14:17:53.023938	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1233	2014-03-04 14:17:35.186872	2014-03-04 14:17:54.796838	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1244	2014-03-04 14:18:01.479471	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1245	2014-03-04 14:18:03.428132	\N	414	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1246	2014-03-04 14:18:04.255003	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1248	2014-03-04 14:18:05.83878	\N	469	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1249	2014-03-04 14:18:07.412421	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1250	2014-03-04 14:18:09.206366	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1251	2014-03-04 14:18:10.129041	\N	443	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1252	2014-03-04 14:18:11.529482	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1253	2014-03-04 14:18:14.487385	\N	451	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1235	2014-03-04 14:17:43.458515	2014-03-04 14:18:17.060034	457	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1255	2014-03-04 14:18:22.897575	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1257	2014-03-04 14:18:24.139803	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1258	2014-03-04 14:18:25.252424	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1259	2014-03-04 14:18:30.04444	\N	470	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1260	2014-03-04 14:18:31.326781	\N	457	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1261	2014-03-04 14:18:31.347344	\N	423	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1262	2014-03-04 14:18:31.362864	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1264	2014-03-04 14:18:33.758922	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1265	2014-03-04 14:18:36.584079	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1266	2014-03-04 14:18:36.947879	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1243	2014-03-04 14:17:54.557456	2014-03-04 14:18:38.88383	428	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1247	2014-03-04 14:18:05.013279	2014-03-04 14:18:40.54419	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1256	2014-03-04 14:18:23.21829	2014-03-04 14:18:44.375833	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1268	2014-03-04 14:18:46.599749	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1269	2014-03-04 14:18:46.764604	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1270	2014-03-04 14:18:47.376465	\N	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1271	2014-03-04 14:18:48.675544	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1272	2014-03-04 14:18:50.327789	\N	457	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1273	2014-03-04 14:18:52.048952	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1275	2014-03-04 14:18:54.186148	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1276	2014-03-04 14:18:54.594737	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1277	2014-03-04 14:18:58.094364	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1279	2014-03-04 14:19:04.841849	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1280	2014-03-04 14:19:07.16968	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1281	2014-03-04 14:19:08.031589	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1283	2014-03-04 14:19:09.675658	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1254	2014-03-04 14:18:17.478542	2014-03-04 14:19:11.724219	401	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1263	2014-03-04 14:18:32.618608	2014-03-04 14:19:12.315199	419	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1285	2014-03-04 14:19:12.582669	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1278	2014-03-04 14:18:58.73316	2014-03-04 14:19:17.43209	453	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1267	2014-03-04 14:18:38.658826	2014-03-04 14:19:20.355367	414	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1287	2014-03-04 14:19:22.274515	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1288	2014-03-04 14:19:24.271931	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1289	2014-03-04 14:19:31.332028	\N	453	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1291	2014-03-04 14:19:35.11973	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1282	2014-03-04 14:19:08.180503	2014-03-04 14:19:36.071149	451	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1274	2014-03-04 14:18:53.163852	2014-03-04 14:19:37.63266	428	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1292	2014-03-04 14:19:38.26718	\N	414	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1293	2014-03-04 14:19:38.794717	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1294	2014-03-04 14:19:41.073982	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1295	2014-03-04 14:19:41.628084	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1296	2014-03-04 14:19:42.103322	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1284	2014-03-04 14:19:11.690848	2014-03-04 14:19:42.56937	457	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1297	2014-03-04 14:19:42.65615	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1298	2014-03-04 14:19:42.703136	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1286	2014-03-04 14:19:19.204221	2014-03-04 14:19:43.121167	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1302	2014-03-04 14:19:49.929502	\N	470	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1303	2014-03-04 14:19:52.33513	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1304	2014-03-04 14:19:53.06439	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1306	2014-03-04 14:19:55.835755	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1307	2014-03-04 14:20:01.832635	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1310	2014-03-04 14:20:06.682664	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1311	2014-03-04 14:20:07.230744	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1312	2014-03-04 14:20:08.79244	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1313	2014-03-04 14:20:08.871904	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1300	2014-03-04 14:19:47.647268	2014-03-04 14:20:12.65373	453	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1305	2014-03-04 14:19:55.081689	2014-03-04 14:20:18.256837	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1290	2014-03-04 14:19:32.197952	2014-03-04 14:20:21.398709	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1301	2014-03-04 14:19:49.843856	2014-03-04 14:20:25.348058	451	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1309	2014-03-04 14:20:03.267737	2014-03-04 14:20:46.85132	457	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1308	2014-03-04 14:20:02.089252	2014-03-04 14:20:50.984551	428	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1299	2014-03-04 14:19:46.861042	2014-03-04 14:20:51.871218	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1315	2014-03-04 14:20:24.317103	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1317	2014-03-04 14:20:26.31232	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1318	2014-03-04 14:20:28.156698	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1319	2014-03-04 14:20:29.258711	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1320	2014-03-04 14:20:29.715518	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1321	2014-03-04 14:20:31.353516	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1322	2014-03-04 14:20:32.792102	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1323	2014-03-04 14:20:32.971778	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1324	2014-03-04 14:20:35.993135	\N	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1314	2014-03-04 14:20:22.745843	2014-03-04 14:20:38.145415	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1325	2014-03-04 14:20:38.678842	\N	443	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1327	2014-03-04 14:20:41.409013	\N	451	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1328	2014-03-04 14:20:42.313618	\N	401	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1329	2014-03-04 14:20:42.579922	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1326	2014-03-04 14:20:39.313587	2014-03-04 14:20:48.778074	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1330	2014-03-04 14:20:48.987861	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1331	2014-03-04 14:20:53.889155	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1332	2014-03-04 14:20:55.583328	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1334	2014-03-04 14:20:56.754628	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1335	2014-03-04 14:21:02.400811	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1338	2014-03-04 14:21:06.219893	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1339	2014-03-04 14:21:06.742312	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1316	2014-03-04 14:20:25.55989	2014-03-04 14:21:08.08207	453	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1340	2014-03-04 14:21:08.924415	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1343	2014-03-04 14:21:12.332681	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1344	2014-03-04 14:21:12.384498	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1345	2014-03-04 14:21:12.895582	\N	428	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1333	2014-03-04 14:20:56.491608	2014-03-04 14:21:16.888806	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1347	2014-03-04 14:21:22.037891	\N	451	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1348	2014-03-04 14:21:26.027912	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1336	2014-03-04 14:21:02.508914	2014-03-04 14:21:33.241134	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1350	2014-03-04 14:21:37.135704	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1351	2014-03-04 14:21:37.260023	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1352	2014-03-04 14:21:41.274223	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1353	2014-03-04 14:21:42.528057	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1355	2014-03-04 14:21:46.067053	\N	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1356	2014-03-04 14:21:46.653944	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1357	2014-03-04 14:21:46.853347	\N	401	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1341	2014-03-04 14:21:09.743847	2014-03-04 14:21:52.647168	457	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1360	2014-03-04 14:21:55.448114	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1337	2014-03-04 14:21:03.088313	2014-03-04 14:21:58.333469	414	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1363	2014-03-04 14:21:59.115304	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1349	2014-03-04 14:21:27.550131	2014-03-04 14:21:59.824056	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1342	2014-03-04 14:21:11.289761	2014-03-04 14:22:03.225121	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1346	2014-03-04 14:21:20.924442	2014-03-04 14:22:07.79996	453	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1361	2014-03-04 14:21:55.723473	2014-03-04 14:22:08.794326	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1364	2014-03-04 14:22:09.386355	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1365	2014-03-04 14:22:11.004104	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1367	2014-03-04 14:22:18.669604	\N	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1368	2014-03-04 14:22:20.408004	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1370	2014-03-04 14:22:24.983592	\N	453	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1371	2014-03-04 14:22:26.630077	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1362	2014-03-04 14:21:57.879608	2014-03-04 14:22:27.212568	451	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1372	2014-03-04 14:22:29.363593	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1373	2014-03-04 14:22:32.272536	\N	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1375	2014-03-04 14:22:37.657922	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1358	2014-03-04 14:21:46.924781	2014-03-04 14:22:37.973174	428	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1359	2014-03-04 14:21:47.753812	2014-03-04 14:22:41.879992	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1354	2014-03-04 14:21:43.872781	2014-03-04 14:22:44.099232	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1379	2014-03-04 14:22:49.732675	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1382	2014-03-04 14:22:57.981963	\N	442	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1383	2014-03-04 14:22:59.890537	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1384	2014-03-04 14:23:00.026757	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1385	2014-03-04 14:23:00.659033	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1386	2014-03-04 14:23:01.471876	\N	428	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1380	2014-03-04 14:22:52.567891	2014-03-04 14:23:02.541758	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1374	2014-03-04 14:22:35.973881	2014-03-04 14:23:08.020408	457	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1387	2014-03-04 14:23:09.732816	\N	401	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1377	2014-03-04 14:22:45.682622	2014-03-04 14:23:11.040756	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1388	2014-03-04 14:23:11.145705	\N	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1376	2014-03-04 14:22:42.163364	2014-03-04 14:23:12.268344	451	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1366	2014-03-04 14:22:16.424503	2014-03-04 14:23:13.5839	469	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1369	2014-03-04 14:22:24.686966	2014-03-04 14:23:13.916281	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1389	2014-03-04 14:23:16.412763	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1390	2014-03-04 14:23:17.647843	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1391	2014-03-04 14:23:23.655181	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1392	2014-03-04 14:23:25.62278	\N	451	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1393	2014-03-04 14:23:26.323585	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1394	2014-03-04 14:23:28.772744	\N	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1395	2014-03-04 14:23:29.331221	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1396	2014-03-04 14:23:30.071764	\N	469	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1378	2014-03-04 14:22:46.422637	2014-03-04 14:23:35.704691	453	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1381	2014-03-04 14:22:57.258887	2014-03-04 14:23:33.280607	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1398	2014-03-04 14:23:35.303948	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1399	2014-03-04 14:23:39.65418	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1402	2014-03-04 14:23:48.744831	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1397	2014-03-04 14:23:34.543309	2014-03-04 14:23:52.741335	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1405	2014-03-04 14:23:54.729437	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1406	2014-03-04 14:23:57.582387	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1407	2014-03-04 14:24:00.165306	\N	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1408	2014-03-04 14:24:01.883191	\N	401	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1409	2014-03-04 14:24:04.492848	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1410	2014-03-04 14:24:06.645895	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1411	2014-03-04 14:24:07.623343	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1412	2014-03-04 14:24:08.978593	\N	451	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1413	2014-03-04 14:24:09.920911	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1414	2014-03-04 14:24:10.484337	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1415	2014-03-04 14:24:11.227084	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1416	2014-03-04 14:24:14.687931	\N	442	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1417	2014-03-04 14:24:15.193393	\N	428	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1418	2014-03-04 14:24:21.644366	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1419	2014-03-04 14:24:22.428935	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1401	2014-03-04 14:23:47.014489	2014-03-04 14:24:24.359148	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1420	2014-03-04 14:24:25.182482	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1421	2014-03-04 14:24:26.659084	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1400	2014-03-04 14:23:39.968044	2014-03-04 14:24:26.704555	457	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1422	2014-03-04 14:24:28.663765	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1423	2014-03-04 14:24:32.32164	\N	451	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1424	2014-03-04 14:24:33.304745	\N	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1425	2014-03-04 14:24:33.509959	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1426	2014-03-04 14:24:42.506082	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1428	2014-03-04 14:24:47.819552	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1429	2014-03-04 14:24:48.518905	\N	457	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1430	2014-03-04 14:24:49.017123	\N	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1404	2014-03-04 14:23:53.536794	2014-03-04 14:24:51.922243	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1432	2014-03-04 14:24:52.343968	\N	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1403	2014-03-04 14:23:52.494556	2014-03-04 14:24:56.496071	453	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1434	2014-03-04 14:24:58.183313	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1433	2014-03-04 14:24:56.374804	2014-03-04 14:25:01.931372	423	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1435	2014-03-04 14:25:05.578682	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1436	2014-03-04 14:25:05.665288	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1438	2014-03-04 14:25:07.197802	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1427	2014-03-04 14:24:46.819443	2014-03-04 14:25:09.472319	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1441	2014-03-04 14:25:14.484265	\N	453	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1442	2014-03-04 14:25:15.213159	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1445	2014-03-04 14:25:24.623396	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1449	2014-03-04 14:25:27.382803	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1450	2014-03-04 14:25:28.779576	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1451	2014-03-04 14:25:29.842462	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1440	2014-03-04 14:25:13.604746	2014-03-04 14:25:37.169767	423	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1437	2014-03-04 14:25:06.471422	2014-03-04 14:25:37.958876	451	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1447	2014-03-04 14:25:26.819988	2014-03-04 14:25:38.748044	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1452	2014-03-04 14:25:38.987317	\N	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1431	2014-03-04 14:24:51.913851	2014-03-04 14:25:41.719157	428	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1454	2014-03-04 14:25:44.034023	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1455	2014-03-04 14:25:46.145621	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1443	2014-03-04 14:25:21.987715	2014-03-04 14:25:50.099567	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1439	2014-03-04 14:25:11.744136	2014-03-04 14:25:51.392009	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1456	2014-03-04 14:25:54.094771	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1457	2014-03-04 14:25:54.115623	\N	451	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1458	2014-03-04 14:25:55.05216	\N	428	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1459	2014-03-04 14:25:55.458269	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1461	2014-03-04 14:25:57.987302	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1462	2014-03-04 14:26:03.20393	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1463	2014-03-04 14:26:04.417899	\N	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1464	2014-03-04 14:26:08.337354	\N	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1465	2014-03-04 14:26:08.335772	\N	443	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1446	2014-03-04 14:25:25.493848	2014-03-04 14:26:08.535182	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1444	2014-03-04 14:25:22.376408	2014-03-04 14:26:08.913573	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1448	2014-03-04 14:25:27.307435	2014-03-04 14:26:11.348766	457	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1466	2014-03-04 14:26:11.426288	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1467	2014-03-04 14:26:12.787295	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1468	2014-03-04 14:26:14.064009	\N	451	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1469	2014-03-04 14:26:16.129037	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1473	2014-03-04 14:26:24.209435	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1475	2014-03-04 14:26:25.67515	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1453	2014-03-04 14:25:39.167942	2014-03-04 14:26:27.05153	453	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1478	2014-03-04 14:26:30.9417	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1474	2014-03-04 14:26:24.589463	2014-03-04 14:26:38.32349	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1471	2014-03-04 14:26:22.946811	2014-03-04 14:26:44.044932	469	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1470	2014-03-04 14:26:19.638412	2014-03-04 14:26:48.357054	432	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1476	2014-03-04 14:26:28.256915	2014-03-04 14:27:08.104851	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1477	2014-03-04 14:26:30.839178	2014-03-04 14:27:10.6017	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1472	2014-03-04 14:26:22.977983	2014-03-04 14:27:20.585951	442	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1479	2014-03-04 14:26:31.572395	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1460	2014-03-04 14:25:57.06787	2014-03-04 14:26:35.229652	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1482	2014-03-04 14:26:38.717906	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1483	2014-03-04 14:26:38.881557	\N	451	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1485	2014-03-04 14:26:42.760027	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1486	2014-03-04 14:26:48.324264	\N	423	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1487	2014-03-04 14:26:50.217358	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1488	2014-03-04 14:26:52.811211	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1489	2014-03-04 14:26:54.243571	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1491	2014-03-04 14:26:59.349877	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1493	2014-03-04 14:27:02.490984	\N	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1494	2014-03-04 14:27:07.620428	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1480	2014-03-04 14:26:32.234933	2014-03-04 14:27:16.791539	428	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1495	2014-03-04 14:27:19.721333	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1481	2014-03-04 14:26:36.325368	2014-03-04 14:27:19.905004	457	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1497	2014-03-04 14:27:25.25376	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1498	2014-03-04 14:27:26.867835	\N	451	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1499	2014-03-04 14:27:29.663178	\N	428	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1500	2014-03-04 14:27:30.371379	\N	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1484	2014-03-04 14:26:41.880166	2014-03-04 14:27:33.041469	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1502	2014-03-04 14:27:34.539352	\N	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1503	2014-03-04 14:27:35.929884	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1504	2014-03-04 14:27:40.200829	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1490	2014-03-04 14:26:57.857306	2014-03-04 14:27:41.708534	469	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1505	2014-03-04 14:27:42.272005	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1492	2014-03-04 14:27:01.892885	2014-03-04 14:27:49.300448	432	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1510	2014-03-04 14:27:54.290088	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1496	2014-03-04 14:27:21.133833	2014-03-04 14:27:56.918917	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1509	2014-03-04 14:27:52.990976	2014-03-04 14:27:58.714808	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1512	2014-03-04 14:28:04.169045	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1514	2014-03-04 14:28:05.883198	\N	432	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1516	2014-03-04 14:28:10.171889	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1517	2014-03-04 14:28:10.240516	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1518	2014-03-04 14:28:16.925634	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1507	2014-03-04 14:27:47.381095	2014-03-04 14:28:19.080094	457	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1501	2014-03-04 14:27:31.255894	2014-03-04 14:28:22.89544	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1520	2014-03-04 14:28:29.727343	\N	425	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1521	2014-03-04 14:28:30.3432	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1506	2014-03-04 14:27:47.187352	2014-03-04 14:28:33.711867	453	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1508	2014-03-04 14:27:48.895985	2014-03-04 14:28:35.540263	428	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1522	2014-03-04 14:28:36.123771	\N	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1513	2014-03-04 14:28:04.741654	2014-03-04 14:28:36.511164	419	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1515	2014-03-04 14:28:09.62383	2014-03-04 14:28:36.569861	423	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1511	2014-03-04 14:27:55.735078	2014-03-04 14:28:40.058291	469	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1523	2014-03-04 14:28:41.223633	\N	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1524	2014-03-04 14:28:43.8158	\N	421	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1525	2014-03-04 14:28:46.849565	\N	453	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1527	2014-03-04 14:28:50.57189	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1530	2014-03-04 14:28:55.682851	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1519	2014-03-04 14:28:26.100693	2014-03-04 14:28:59.978352	451	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1531	2014-03-04 14:29:00.348208	\N	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1533	2014-03-04 14:29:03.69733	\N	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1534	2014-03-04 14:29:04.882315	\N	421	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1538	2014-03-04 14:29:12.200433	\N	469	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1540	2014-03-04 14:29:15.259317	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1541	2014-03-04 14:29:17.530896	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1542	2014-03-04 14:29:17.925802	\N	457	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1543	2014-03-04 14:29:21.641637	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1544	2014-03-04 14:29:24.839266	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1545	2014-03-04 14:29:25.86808	\N	453	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1529	2014-03-04 14:28:52.30854	2014-03-04 14:29:28.60926	423	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1546	2014-03-04 14:29:27.576964	2014-03-04 14:29:37.097049	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1526	2014-03-04 14:28:48.869353	2014-03-04 14:29:40.552569	428	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1528	2014-03-04 14:28:51.427646	2014-03-04 14:29:42.654772	419	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1548	2014-03-04 14:29:46.322339	\N	423	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1549	2014-03-04 14:29:49.833168	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1532	2014-03-04 14:29:02.193947	2014-03-04 14:29:50.555762	442	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1536	2014-03-04 14:29:07.959992	2014-03-04 14:29:52.678282	432	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1550	2014-03-04 14:29:53.532658	\N	428	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1539	2014-03-04 14:29:12.875996	2014-03-04 14:29:53.683478	451	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1537	2014-03-04 14:29:09.169667	2014-03-04 14:29:55.281989	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1552	2014-03-04 14:29:56.650991	\N	419	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1547	2014-03-04 14:29:39.844615	2014-03-04 14:30:00.753302	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1535	2014-03-04 14:29:06.432996	2014-03-04 14:30:01.831515	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1555	2014-03-04 14:30:02.86505	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1556	2014-03-04 14:30:04.736181	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1557	2014-03-04 14:30:06.832728	\N	432	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1558	2014-03-04 14:30:08.892021	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1559	2014-03-04 14:30:08.976694	2014-03-04 14:30:43.709733	451	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1554	2014-03-04 14:29:59.949583	2014-03-04 14:30:46.924955	415	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1553	2014-03-04 14:29:57.485361	2014-03-04 14:30:47.633965	469	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1561	2014-03-04 14:30:19.99043	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1551	2014-03-04 14:29:54.091958	2014-03-04 14:30:34.540121	457	8	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1564	2014-03-04 14:30:34.830778	\N	453	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1565	2014-03-04 14:30:34.843626	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1566	2014-03-04 14:30:44.386509	\N	419	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1567	2014-03-04 14:30:46.328572	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1568	2014-03-04 14:30:46.338858	\N	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1569	2014-03-04 14:30:50.499039	\N	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1572	2014-03-04 14:30:58.002756	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1563	2014-03-04 14:30:22.642894	2014-03-04 14:30:59.146836	442	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1573	2014-03-04 14:31:00.606873	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1560	2014-03-04 14:30:13.93879	2014-03-04 14:31:03.476696	428	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1575	2014-03-04 14:31:04.148651	\N	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1562	2014-03-04 14:30:21.618538	2014-03-04 14:31:05.537281	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1577	2014-03-04 14:31:15.818182	\N	442	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1580	2014-03-04 14:31:20.275745	\N	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1571	2014-03-04 14:30:56.043479	2014-03-04 14:31:29.576013	451	10	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1570	2014-03-04 14:30:51.349517	2014-03-04 14:31:43.373442	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1583	2014-03-04 14:31:48.903349	\N	451	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1574	2014-03-04 14:31:00.6123	2014-03-04 14:31:50.986146	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1584	2014-03-04 14:31:52.593626	\N	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1586	2014-03-04 14:31:59.682699	\N	443	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1588	2014-03-04 14:32:01.162987	\N	454	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1578	2014-03-04 14:31:17.774645	2014-03-04 14:32:02.858732	432	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1589	2014-03-04 14:32:03.43303	\N	420	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1576	2014-03-04 14:31:07.277619	2014-03-04 14:32:06.460256	469	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1579	2014-03-04 14:31:18.20925	2014-03-04 14:32:08.534523	428	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1590	2014-03-04 14:32:13.323562	\N	415	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1581	2014-03-04 14:31:30.590225	2014-03-04 14:32:13.794832	419	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1592	2014-03-04 14:32:19.549525	\N	469	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1593	2014-03-04 14:32:21.491952	\N	454	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1594	2014-03-04 14:32:24.275048	\N	428	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1582	2014-03-04 14:31:40.153529	2014-03-04 14:32:24.285571	453	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1595	2014-03-04 14:32:26.6277	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1596	2014-03-04 14:32:28.214911	\N	451	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1597	2014-03-04 14:32:28.672204	\N	419	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1585	2014-03-04 14:31:57.838969	2014-03-04 14:32:33.599747	442	3	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1587	2014-03-04 14:32:00.500327	2014-03-04 14:32:37.353957	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1599	2014-03-04 14:32:40.211503	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1601	2014-03-04 14:32:45.286434	\N	415	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1602	2014-03-04 14:32:46.435031	\N	470	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1603	2014-03-04 14:32:46.965881	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1604	2014-03-04 14:32:48.07149	\N	442	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1606	2014-03-04 14:32:56.205827	\N	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1607	2014-03-04 14:32:57.096957	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1608	2014-03-04 14:32:57.718409	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1609	2014-03-04 14:33:00.186275	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1591	2014-03-04 14:32:16.645607	2014-03-04 14:33:02.259762	457	9	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1610	2014-03-04 14:33:03.161692	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1611	2014-03-04 14:33:08.384263	\N	469	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1614	2014-03-04 14:33:11.568667	\N	415	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1616	2014-03-04 14:33:14.258966	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1612	2014-03-04 14:33:09.669504	2014-03-04 14:33:15.716628	459	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1617	2014-03-04 14:33:16.893714	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1618	2014-03-04 14:33:20.394624	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1598	2014-03-04 14:32:37.341347	2014-03-04 14:33:20.692884	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1620	2014-03-04 14:33:34.174979	\N	453	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1621	2014-03-04 14:33:35.056283	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1605	2014-03-04 14:32:50.929681	2014-03-04 14:33:36.699872	428	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1622	2014-03-04 14:33:36.903302	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1623	2014-03-04 14:33:39.056601	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1600	2014-03-04 14:32:40.773705	2014-03-04 14:33:42.050097	432	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1615	2014-03-04 14:33:13.899079	2014-03-04 14:33:47.754088	442	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1613	2014-03-04 14:33:11.136837	2014-03-04 14:33:51.432541	451	11	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1627	2014-03-04 14:34:06.799785	\N	442	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1628	2014-03-04 14:34:08.963431	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1624	2014-03-04 14:33:39.312148	2014-03-04 14:34:12.151792	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1629	2014-03-04 14:34:14.276899	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1630	2014-03-04 14:34:15.152765	\N	453	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1631	2014-03-04 14:34:15.866605	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1632	2014-03-04 14:34:16.166087	\N	432	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1633	2014-03-04 14:34:21.514068	\N	405	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1634	2014-03-04 14:34:22.3176	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1635	2014-03-04 14:34:22.908788	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1619	2014-03-04 14:33:33.035591	2014-03-04 14:34:23.331097	469	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1636	2014-03-04 14:34:27.347739	\N	470	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1637	2014-03-04 14:34:28.120446	\N	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1639	2014-03-04 14:34:31.435051	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1641	2014-03-04 14:34:36.167397	\N	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1625	2014-03-04 14:33:51.048274	2014-03-04 14:34:51.051859	428	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1640	2014-03-04 14:34:31.971919	2014-03-04 14:34:56.334924	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1642	2014-03-04 14:34:37.114477	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1643	2014-03-04 14:34:40.219683	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1626	2014-03-04 14:34:05.235946	2014-03-04 14:34:41.34105	451	12	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1644	2014-03-04 14:34:47.664381	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1645	2014-03-04 14:34:52.604379	\N	469	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1646	2014-03-04 14:34:56.628573	\N	451	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1649	2014-03-04 14:35:06.150321	\N	428	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1650	2014-03-04 14:35:06.330011	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1647	2014-03-04 14:34:58.355614	2014-03-04 14:35:07.294823	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1638	2014-03-04 14:34:30.218729	2014-03-04 14:35:09.064177	442	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1651	2014-03-04 14:35:09.979695	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1652	2014-03-04 14:35:10.156292	\N	432	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1653	2014-03-04 14:35:16.594831	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1654	2014-03-04 14:35:16.616735	\N	459	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1655	2014-03-04 14:35:18.210761	\N	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1656	2014-03-04 14:35:21.609263	\N	437	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1657	2014-03-04 14:35:24.153429	\N	451	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1658	2014-03-04 14:35:25.148458	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1660	2014-03-04 14:35:32.79555	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1648	2014-03-04 14:35:03.744287	2014-03-04 14:35:39.724673	414	4	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1663	2014-03-04 14:35:41.774024	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1665	2014-03-04 14:35:46.329263	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1666	2014-03-04 14:35:49.029721	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1662	2014-03-04 14:35:39.68754	2014-03-04 14:35:49.715076	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1667	2014-03-04 14:35:50.242553	\N	428	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1661	2014-03-04 14:35:37.394516	2014-03-04 14:35:52.485314	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1668	2014-03-04 14:35:54.478053	\N	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1670	2014-03-04 14:35:58.052965	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1671	2014-03-04 14:35:58.484147	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1672	2014-03-04 14:36:02.375142	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1673	2014-03-04 14:36:03.270126	\N	437	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1674	2014-03-04 14:36:05.882069	\N	469	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1675	2014-03-04 14:36:12.227221	\N	443	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1664	2014-03-04 14:35:44.313409	2014-03-04 14:36:13.798509	451	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1659	2014-03-04 14:35:28.379615	2014-03-04 14:36:14.528036	442	6	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1677	2014-03-04 14:36:20.774818	\N	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1669	2014-03-04 14:35:56.332387	2014-03-04 14:36:27.83419	414	5	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1679	2014-03-04 14:36:31.142031	\N	469	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1678	2014-03-04 14:36:23.421471	2014-03-04 14:36:31.711053	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1680	2014-03-04 14:36:33.987434	\N	428	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1681	2014-03-04 14:36:33.991368	\N	442	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1676	2014-03-04 14:36:17.26389	2014-03-04 14:36:34.274098	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1683	2014-03-04 14:36:34.738372	\N	451	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1684	2014-03-04 14:36:36.533893	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1685	2014-03-04 14:36:38.819814	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1686	2014-03-04 14:36:45.754014	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1687	2014-03-04 14:36:47.714939	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1688	2014-03-04 14:36:49.211297	\N	414	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1682	2014-03-04 14:36:34.255575	2014-03-04 14:36:49.217356	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1689	2014-03-04 14:36:51.059064	\N	442	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1690	2014-03-04 14:36:51.313137	\N	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1691	2014-03-04 14:36:51.70764	\N	469	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1692	2014-03-04 14:36:51.88208	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1693	2014-03-04 14:37:01.67236	\N	437	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1694	2014-03-04 14:37:10.063097	\N	469	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1695	2014-03-04 14:37:10.670382	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1696	2014-03-04 14:37:13.57013	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1698	2014-03-04 14:37:20.897449	\N	453	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1697	2014-03-04 14:37:20.718889	2014-03-04 14:37:29.192797	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1701	2014-03-04 14:37:34.420889	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1699	2014-03-04 14:37:26.11358	2014-03-04 14:37:36.591431	437	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1702	2014-03-04 14:37:41.560436	\N	420	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1703	2014-03-04 14:37:43.756199	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1704	2014-03-04 14:37:45.573669	\N	428	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1705	2014-03-04 14:37:46.580261	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1706	2014-03-04 14:37:49.280684	\N	442	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1707	2014-03-04 14:37:49.290567	\N	459	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1708	2014-03-04 14:37:51.36467	\N	437	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1710	2014-03-04 14:37:57.275124	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1711	2014-03-04 14:38:04.062072	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1712	2014-03-04 14:38:06.266507	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1713	2014-03-04 14:38:06.31958	\N	457	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1700	2014-03-04 14:37:31.422984	2014-03-04 14:38:09.956539	451	13	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1709	2014-03-04 14:37:54.923498	2014-03-04 14:38:11.328643	443	1	C815B29CD8F546BBBB4C647B9D163942	0	f	t
1714	2014-03-04 14:38:13.615014	\N	420	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1715	2014-03-04 14:38:19.826423	\N	403	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1716	2014-03-04 14:38:20.764811	\N	454	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1717	2014-03-04 14:38:23.339429	\N	421	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1718	2014-03-04 14:38:34.366728	\N	469	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1719	2014-03-04 17:11:35.278626	\N	266	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1720	2014-03-04 17:13:05.593943	\N	266	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1722	2014-03-04 17:15:08.546524	\N	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1723	2014-03-04 17:16:02.663932	2014-03-04 17:16:11.819577	268	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1724	2014-03-04 17:16:29.02901	2014-03-04 17:16:49.432999	268	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1725	2014-03-04 17:17:03.682817	2014-03-04 17:17:28.73595	268	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1721	2014-03-04 17:15:05.937736	2014-03-04 17:17:29.40143	266	3	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1726	2014-03-04 17:17:41.342834	\N	268	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1727	2014-03-04 17:17:50.76904	2014-03-04 17:18:14.319411	266	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1729	2014-03-04 17:17:56.971717	2014-03-04 17:18:19.715164	268	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1728	2014-03-04 17:17:52.986263	2014-03-04 17:18:28.120827	2	1	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
1730	2014-03-04 17:18:32.49461	2014-03-04 17:19:04.160494	268	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1731	2014-03-04 17:18:40.374786	2014-03-04 17:19:12.369367	2	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
1733	2014-03-04 17:19:19.96353	\N	268	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1734	2014-03-04 17:19:24.499175	2014-03-04 17:19:54.20053	2	3	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
1732	2014-03-04 17:18:42.134004	2014-03-04 17:20:11.907158	266	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1735	2014-03-04 17:19:48.82596	2014-03-04 17:20:12.133053	268	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1738	2014-03-04 17:20:27.519694	\N	266	6	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1736	2014-03-04 17:20:06.579028	2014-03-04 17:20:40.824697	2	4	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
1737	2014-03-04 17:20:24.822674	2014-03-04 17:21:05.327499	268	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1739	2014-03-04 17:20:53.604322	2014-03-04 17:21:24.314321	2	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	t
1741	2014-03-04 17:21:36.912171	\N	2	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
1742	2014-03-04 17:21:43.559488	\N	266	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1740	2014-03-04 17:21:17.642224	2014-03-04 17:21:44.139901	268	6	1353E9D5614D460FA32E67853B6BA6D8	0	f	t
1743	2014-03-04 17:21:56.376995	\N	268	7	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1745	2014-03-04 17:22:08.957625	\N	268	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1746	2014-03-04 17:22:21.47967	\N	268	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1744	2014-03-04 17:22:04.232585	2014-03-04 17:22:27.404037	266	4	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1748	2014-03-04 17:22:52.811232	\N	268	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
1747	2014-03-04 17:22:40.880587	2014-03-04 17:23:16.881579	266	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	t
1749	2014-03-05 12:27:33.338315	\N	161	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1750	2014-03-05 12:28:35.128461	\N	161	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1751	2014-03-05 12:29:06.537628	2014-03-05 12:29:27.410208	161	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1752	2014-03-05 12:30:04.416297	2014-03-05 12:30:29.851995	202	20	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1754	2014-03-05 12:30:43.637024	2014-03-05 12:31:05.110334	161	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1753	2014-03-05 12:30:42.566372	2014-03-05 12:31:07.748141	202	21	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1755	2014-03-05 12:31:07.749922	\N	202	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1756	2014-03-05 12:31:50.022286	2014-03-05 12:32:07.941921	202	1	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1757	2014-03-05 12:32:03.870543	2014-03-05 12:32:43.793082	161	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1758	2014-03-05 12:33:19.266251	\N	202	2	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1759	2014-03-05 12:33:39.352069	2014-03-05 12:33:57.971037	202	2	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1760	2014-03-05 12:34:13.996026	2014-03-05 12:34:43.127341	161	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1762	2014-03-05 12:34:56.052783	\N	161	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1763	2014-03-05 12:35:08.732244	\N	161	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1761	2014-03-05 12:34:29.650511	2014-03-05 12:35:36.778548	202	3	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1764	2014-03-05 12:35:49.951378	2014-03-05 12:36:23.750991	161	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1765	2014-03-05 12:36:16.067936	2014-03-05 12:36:36.150134	202	4	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1767	2014-03-05 12:36:56.153713	\N	202	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1766	2014-03-05 12:36:36.926583	2014-03-05 12:37:12.96408	161	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1768	2014-03-05 12:37:14.407157	2014-03-05 12:37:52.11177	202	5	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1769	2014-03-05 12:38:12.747914	2014-03-05 12:38:49.862091	161	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1770	2014-03-05 12:38:54.230272	2014-03-05 12:39:11.948603	202	6	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1771	2014-03-05 12:39:06.617659	2014-03-05 12:39:40.96049	161	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1772	2014-03-05 12:39:54.156618	2014-03-05 12:40:36.579328	161	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1773	2014-03-05 12:40:09.619885	2014-03-05 12:40:46.212128	202	7	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1775	2014-03-05 12:41:16.152765	2014-03-05 12:41:51.388076	161	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1774	2014-03-05 12:41:08.066458	2014-03-05 12:41:55.948375	202	8	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
1776	2014-03-05 12:42:22.704644	2014-03-05 12:42:57.550424	161	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1777	2014-03-05 12:43:20.282686	\N	202	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1778	2014-03-05 12:43:30.760565	\N	161	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1779	2014-03-05 12:44:10.62989	\N	202	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1780	2014-03-05 12:44:35.006797	2014-03-05 12:45:08.678816	161	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1782	2014-03-05 12:45:45.082264	\N	202	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1781	2014-03-05 12:45:29.738233	2014-03-05 12:46:07.391812	161	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1784	2014-03-05 12:46:47.256644	\N	202	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1783	2014-03-05 12:46:23.006543	2014-03-05 12:46:59.753359	161	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1786	2014-03-05 12:47:48.174427	\N	202	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1785	2014-03-05 12:47:33.501918	2014-03-05 12:48:12.334143	161	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1787	2014-03-05 12:48:35.438473	2014-03-05 12:49:10.98614	161	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1788	2014-03-05 12:49:51.887254	2014-03-05 12:50:24.873628	161	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1789	2014-03-05 12:51:46.433746	\N	161	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1790	2014-03-05 12:51:58.98134	2014-03-05 12:52:36.180299	161	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1791	2014-03-05 12:53:25.669945	\N	161	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1792	2014-03-05 12:53:42.577357	2014-03-05 12:54:21.203423	161	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1793	2014-03-05 12:54:41.60985	2014-03-05 12:55:17.610889	161	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1794	2014-03-05 12:55:41.316598	2014-03-05 12:56:16.398079	161	18	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1795	2014-03-05 12:56:32.020181	2014-03-05 12:57:13.264321	161	19	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1796	2014-03-05 12:57:54.345661	\N	161	20	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1797	2014-03-05 12:59:01.143546	\N	161	20	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1798	2014-03-05 12:59:20.948226	\N	161	19	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1799	2014-03-05 12:59:50.20431	2014-03-05 13:00:32.113261	161	18	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1800	2014-03-05 13:04:05.787258	2014-03-05 13:04:53.671369	161	19	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1801	2014-03-05 13:05:10.095023	2014-03-05 13:05:56.89772	161	20	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1802	2014-03-05 13:07:00.24285	2014-03-05 13:07:35.897902	161	21	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1803	2014-03-05 13:07:35.899663	\N	161	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
1804	2014-03-05 13:24:52.561521	2014-03-05 13:25:23.663139	312	72	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
1805	2014-03-05 13:26:41.304919	\N	312	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1806	2014-03-05 13:28:07.288845	\N	312	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1807	2014-03-05 13:42:49.757341	\N	301	172	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1808	2014-03-05 13:51:15.338443	2014-03-05 13:51:43.944443	312	72	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
1809	2014-03-05 13:51:56.371909	\N	312	73	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1810	2014-03-05 13:52:46.504114	\N	312	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1811	2014-03-05 13:53:08.298917	2014-03-05 13:53:36.788338	312	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
1812	2014-03-05 13:53:48.74635	\N	312	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1813	2014-03-05 18:54:26.95649	\N	7	1	( select ref_id from learning_standards where id = k.cc.a.2)	2	f	f
1814	2014-03-05 19:11:45.554965	\N	7	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
1815	2014-03-05 19:13:07.375198	\N	7	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1816	2014-03-05 19:15:34.52946	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1817	2014-03-05 20:09:32.156846	\N	7	1	19A6BEFD554245118E73E9D4E6048E30	2	f	f
1818	2014-03-05 20:26:42.701144	\N	7	1	ACB26A2ED7114E59911EE985D8D02B6D	2	f	f
1819	2014-03-05 20:27:01.068508	2014-03-05 20:27:55.146141	7	1	ACB26A2ED7114E59911EE985D8D02B6D	1	f	f
1820	2014-03-05 21:06:52.862501	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1821	2014-03-05 21:07:26.860515	2014-03-05 21:07:37.897555	7	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1822	2014-03-05 21:07:59.022047	\N	7	1	ACB26A2ED7114E59911EE985D8D02B6D	2	f	f
1823	2014-03-05 21:11:43.797838	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1824	2014-03-05 21:15:30.073338	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1825	2014-03-05 21:15:39.091677	2014-03-05 21:15:43.224725	7	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1826	2014-03-05 21:16:00.877704	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1827	2014-03-05 21:16:10.239347	2014-03-05 21:16:30.513296	7	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1828	2014-03-05 21:17:23.950452	2014-03-05 21:17:46.419026	7	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1829	2014-03-05 21:18:52.949424	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1830	2014-03-05 21:22:33.035222	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1831	2014-03-05 21:22:43.492118	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1832	2014-03-05 21:22:56.092008	2014-03-05 21:23:04.555845	7	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1833	2014-03-05 21:23:17.39592	2014-03-05 21:23:28.157079	7	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1834	2014-03-05 21:23:40.527123	\N	7	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1835	2014-03-05 21:23:59.293104	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1836	2014-03-05 21:24:15.733904	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1837	2014-03-05 21:28:46.254052	2014-03-05 21:28:52.429313	7	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1838	2014-03-05 21:29:08.998947	2014-03-05 21:29:20.906712	7	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1839	2014-03-05 21:30:11.299301	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1840	2014-03-05 21:30:20.179698	2014-03-05 21:30:30.182068	7	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1841	2014-03-05 21:30:46.341948	2014-03-05 21:31:07.360127	7	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1842	2014-03-05 21:31:19.250641	2014-03-05 21:31:44.73637	7	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1843	2014-03-05 21:31:56.343337	2014-03-05 21:32:20.032108	7	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1844	2014-03-05 21:32:31.859367	2014-03-05 21:32:58.025341	7	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1845	2014-03-05 21:33:22.179623	\N	7	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1846	2014-03-05 21:33:36.839592	\N	7	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1847	2014-03-05 21:41:23.140832	\N	301	171	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1848	2014-03-05 21:41:42.26294	\N	301	171	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
1849	2014-03-05 21:42:26.516202	\N	203	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1850	2014-03-05 21:42:37.266645	\N	203	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
1851	2014-03-05 21:50:41.128115	\N	203	70	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
1852	2014-03-06 08:45:32.13268	\N	565	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1853	2014-03-06 08:45:48.947326	\N	571	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1855	2014-03-06 08:46:18.0598	\N	566	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1856	2014-03-06 08:47:14.328766	\N	566	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1857	2014-03-06 08:47:54.743458	\N	564	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1858	2014-03-06 08:47:58.629772	\N	564	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1859	2014-03-06 08:48:27.669455	\N	566	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1860	2014-03-06 08:49:13.008618	\N	567	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1861	2014-03-06 08:49:14.009328	\N	570	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1862	2014-03-06 08:49:20.345696	\N	567	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1863	2014-03-06 08:50:11.303651	\N	567	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1864	2014-03-06 08:50:42.797235	\N	567	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1854	2014-03-06 08:45:51.042833	2014-03-06 08:51:36.94575	565	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1865	2014-03-06 08:51:58.839814	\N	567	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1866	2014-03-06 08:52:05.805957	\N	565	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1867	2014-03-06 08:52:36.719928	\N	571	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1868	2014-03-06 08:52:40.542676	\N	565	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1869	2014-03-06 08:52:50.777601	\N	570	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1870	2014-03-06 08:52:58.323927	\N	571	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1871	2014-03-06 08:53:03.203704	\N	564	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1872	2014-03-06 08:53:21.591018	\N	571	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1873	2014-03-06 08:53:24.276903	\N	570	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1874	2014-03-06 08:53:36.910445	\N	571	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1875	2014-03-06 09:43:42.329082	\N	250	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1876	2014-03-06 09:43:43.926194	\N	240	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1877	2014-03-06 09:43:47.317903	\N	223	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1879	2014-03-06 09:43:57.759425	\N	240	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1880	2014-03-06 09:44:01.50335	\N	2	5	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
1878	2014-03-06 09:43:50.628263	2014-03-06 09:44:12.005718	250	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1883	2014-03-06 09:44:32.409045	\N	239	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1882	2014-03-06 09:44:25.434138	2014-03-06 09:44:37.829815	250	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1884	2014-03-06 09:44:41.87273	\N	252	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1885	2014-03-06 09:44:42.821139	\N	768	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1886	2014-03-06 09:44:52.260791	\N	250	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1887	2014-03-06 09:44:53.491778	\N	235	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1881	2014-03-06 09:44:18.064644	2014-03-06 09:44:54.045276	2	5	3DEE205D86BC461FA4271EF4BD190A0C	1	f	f
1888	2014-03-06 09:45:05.576315	\N	235	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1889	2014-03-06 09:45:06.7672	\N	768	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1890	2014-03-06 09:45:14.236124	2014-03-06 09:45:26.65685	250	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1893	2014-03-06 09:45:50.253775	\N	768	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1892	2014-03-06 09:45:40.945745	2014-03-06 09:45:54.923681	250	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1894	2014-03-06 09:46:07.449576	\N	223	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1896	2014-03-06 09:46:22.009007	\N	223	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1895	2014-03-06 09:46:12.458621	2014-03-06 09:46:26.75895	250	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1897	2014-03-06 09:46:34.625358	\N	768	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1891	2014-03-06 09:45:18.177597	2014-03-06 09:46:56.249017	2	6	3DEE205D86BC461FA4271EF4BD190A0C	1	f	f
1898	2014-03-06 09:46:54.319949	2014-03-06 09:47:06.334677	250	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1899	2014-03-06 09:47:08.97847	\N	2	7	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
1900	2014-03-06 09:47:26.192265	\N	250	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1901	2014-03-06 09:47:31.944974	\N	235	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1902	2014-03-06 09:47:54.774764	\N	250	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1903	2014-03-06 09:47:58.514713	\N	235	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1904	2014-03-06 09:48:01.830772	\N	250	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1905	2014-03-06 09:48:06.450852	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1907	2014-03-06 09:48:15.465991	\N	768	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1908	2014-03-06 09:48:20.425059	\N	250	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1906	2014-03-06 09:48:12.559746	2014-03-06 09:48:25.359233	239	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1911	2014-03-06 09:48:36.285156	2014-03-06 09:48:50.622041	250	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1909	2014-03-06 09:48:20.428933	2014-03-06 09:48:53.153824	2	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1910	2014-03-06 09:48:24.982841	2014-03-06 09:48:54.42202	768	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1912	2014-03-06 09:48:42.517518	2014-03-06 09:48:55.64033	239	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1914	2014-03-06 09:49:06.823982	\N	240	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1915	2014-03-06 09:49:08.918123	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1917	2014-03-06 09:49:15.4538	\N	768	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1916	2014-03-06 09:49:11.981462	2014-03-06 09:49:24.246257	239	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1913	2014-03-06 09:49:03.47375	2014-03-06 09:49:27.792158	250	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1918	2014-03-06 09:49:20.105832	2014-03-06 09:49:38.361669	240	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1920	2014-03-06 09:49:37.72641	2014-03-06 09:49:50.499487	239	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1922	2014-03-06 09:49:51.409878	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1919	2014-03-06 09:49:32.824271	2014-03-06 09:50:02.547902	768	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1924	2014-03-06 09:50:02.723622	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	2	f	f
1921	2014-03-06 09:49:40.415926	2014-03-06 09:50:11.691102	250	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1923	2014-03-06 09:49:53.489975	2014-03-06 09:50:15.936813	2	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1926	2014-03-06 09:50:17.212408	\N	768	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1929	2014-03-06 09:50:31.65271	\N	768	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1925	2014-03-06 09:50:14.112562	2014-03-06 09:50:34.886488	239	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1928	2014-03-06 09:50:28.378077	2014-03-06 09:50:52.026353	2	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1927	2014-03-06 09:50:23.920759	2014-03-06 09:50:57.596011	250	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1931	2014-03-06 09:51:04.088274	\N	2	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1930	2014-03-06 09:50:54.593462	2014-03-06 09:51:05.612107	239	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1932	2014-03-06 09:51:09.64912	\N	250	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1935	2014-03-06 09:51:29.81994	\N	239	7	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1934	2014-03-06 09:51:15.140389	2014-03-06 09:51:32.352309	240	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1933	2014-03-06 09:51:11.724444	2014-03-06 09:51:36.826781	768	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1938	2014-03-06 09:51:54.323947	\N	768	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1936	2014-03-06 09:51:33.47558	2014-03-06 09:51:55.980353	2	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1939	2014-03-06 09:52:07.000513	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1941	2014-03-06 09:52:07.639719	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
1937	2014-03-06 09:51:44.372041	2014-03-06 09:52:18.292939	250	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1942	2014-03-06 09:52:08.989366	2014-03-06 09:52:19.609911	239	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1940	2014-03-06 09:52:07.559409	2014-03-06 09:52:29.407337	2	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1943	2014-03-06 09:52:31.053978	\N	250	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1945	2014-03-06 09:52:45.129894	\N	2	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1944	2014-03-06 09:52:37.08003	2014-03-06 09:52:58.218973	768	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1947	2014-03-06 09:53:03.250151	\N	2	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1948	2014-03-06 09:53:07.384757	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
1946	2014-03-06 09:52:55.905408	2014-03-06 09:53:17.501158	250	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1950	2014-03-06 09:53:19.648668	\N	238	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1951	2014-03-06 09:53:25.982662	\N	239	7	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1952	2014-03-06 09:53:32.707099	\N	238	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1953	2014-03-06 09:53:33.366298	\N	2	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1954	2014-03-06 09:53:33.560676	2014-03-06 09:53:41.818953	240	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1957	2014-03-06 09:53:42.209791	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1949	2014-03-06 09:53:17.922122	2014-03-06 09:53:47.534249	768	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1958	2014-03-06 09:53:48.709123	\N	238	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1959	2014-03-06 09:53:48.768701	\N	239	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1960	2014-03-06 09:53:56.32358	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1962	2014-03-06 09:54:00.909747	\N	768	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1955	2014-03-06 09:53:34.968767	2014-03-06 09:54:06.961779	250	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1963	2014-03-06 09:54:12.714291	\N	239	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1961	2014-03-06 09:53:59.068567	2014-03-06 09:54:23.576717	2	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1964	2014-03-06 09:54:19.017609	\N	250	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1956	2014-03-06 09:53:39.719124	2014-03-06 09:54:20.550562	223	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1965	2014-03-06 09:54:19.427047	2014-03-06 09:54:27.396395	238	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1968	2014-03-06 09:54:39.921309	\N	238	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1969	2014-03-06 09:54:40.484842	\N	226	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
1970	2014-03-06 09:54:41.652066	\N	223	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
1971	2014-03-06 09:54:43.042233	\N	250	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1966	2014-03-06 09:54:20.930272	2014-03-06 09:54:46.239933	239	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1974	2014-03-06 09:54:54.229397	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1967	2014-03-06 09:54:37.503107	2014-03-06 09:54:58.992919	2	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1975	2014-03-06 09:55:02.970307	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1973	2014-03-06 09:54:52.700451	2014-03-06 09:55:05.464489	226	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
1976	2014-03-06 09:55:13.463582	\N	238	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1977	2014-03-06 09:55:13.957727	\N	2	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1978	2014-03-06 09:55:17.868761	\N	239	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1972	2014-03-06 09:54:47.542908	2014-03-06 09:55:27.348376	768	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1981	2014-03-06 09:55:27.78078	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1982	2014-03-06 09:55:29.966462	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1983	2014-03-06 09:55:35.185142	\N	2	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1984	2014-03-06 09:55:35.508775	\N	239	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1980	2014-03-06 09:55:27.49781	2014-03-06 09:55:35.781384	238	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1985	2014-03-06 09:55:40.435793	\N	768	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1986	2014-03-06 09:55:48.009785	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1990	2014-03-06 09:55:57.430689	\N	226	1	062925BDC19347E8890A6D7390DF3842	2	f	f
1991	2014-03-06 09:55:59.096134	\N	2	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1979	2014-03-06 09:55:24.693562	2014-03-06 09:56:05.335289	250	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1987	2014-03-06 09:55:53.322663	2014-03-06 09:56:11.443957	239	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1992	2014-03-06 09:56:05.094688	2014-03-06 09:56:13.587666	238	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1993	2014-03-06 09:56:17.123617	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
1994	2014-03-06 09:56:20.425409	\N	250	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1995	2014-03-06 09:56:22.636423	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1996	2014-03-06 09:56:26.116711	\N	2	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1988	2014-03-06 09:55:56.003115	2014-03-06 09:56:26.634593	219	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1997	2014-03-06 09:56:29.876513	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1998	2014-03-06 09:56:30.55615	\N	240	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
1989	2014-03-06 09:55:57.294878	2014-03-06 09:56:35.54554	768	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
1999	2014-03-06 09:56:35.756737	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2002	2014-03-06 09:56:42.93973	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2003	2014-03-06 09:56:44.822597	\N	244	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2000	2014-03-06 09:56:37.226358	2014-03-06 09:56:52.937153	239	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2005	2014-03-06 09:56:53.673977	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2006	2014-03-06 09:56:57.970549	\N	240	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2009	2014-03-06 09:57:05.269661	\N	239	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2001	2014-03-06 09:56:40.266704	2014-03-06 09:57:08.937629	219	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2007	2014-03-06 09:56:59.037175	2014-03-06 09:57:15.178407	238	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2004	2014-03-06 09:56:52.394686	2014-03-06 09:57:29.281151	768	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2010	2014-03-06 09:57:18.017332	2014-03-06 09:57:29.543669	240	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2008	2014-03-06 09:56:59.041361	2014-03-06 09:57:31.255717	250	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2012	2014-03-06 09:57:39.052605	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2013	2014-03-06 09:57:41.467283	\N	2	1	3DEE205D86BC461FA4271EF4BD190A0C	2	f	f
2014	2014-03-06 09:57:44.407305	\N	768	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2011	2014-03-06 09:57:30.43894	2014-03-06 09:57:47.073611	239	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2016	2014-03-06 09:57:47.93504	\N	2	6	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
2020	2014-03-06 09:58:12.834366	\N	2	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2015	2014-03-06 09:57:46.294073	2014-03-06 09:58:20.470226	250	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2017	2014-03-06 09:57:50.062199	2014-03-06 09:58:24.175677	219	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2021	2014-03-06 09:58:24.816132	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2022	2014-03-06 09:58:33.827586	\N	250	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2018	2014-03-06 09:58:04.070746	2014-03-06 09:58:34.086338	239	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2019	2014-03-06 09:58:12.347348	2014-03-06 09:58:42.631603	768	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2023	2014-03-06 09:58:35.599306	2014-03-06 09:58:43.349814	238	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2024	2014-03-06 09:58:43.472293	\N	219	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2025	2014-03-06 09:58:45.899702	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2026	2014-03-06 09:58:47.220515	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2027	2014-03-06 09:58:51.084632	\N	240	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2030	2014-03-06 09:59:00.874962	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2031	2014-03-06 09:59:01.570513	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2034	2014-03-06 09:59:09.124017	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2033	2014-03-06 09:59:04.349735	2014-03-06 09:59:09.166328	240	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2036	2014-03-06 09:59:16.356507	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2029	2014-03-06 09:58:58.463047	2014-03-06 09:59:24.123432	238	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2028	2014-03-06 09:58:56.084024	2014-03-06 09:59:27.831323	768	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2032	2014-03-06 09:59:02.637829	2014-03-06 09:59:28.800022	219	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2038	2014-03-06 09:59:31.785747	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2035	2014-03-06 09:59:09.285703	2014-03-06 09:59:40.527902	239	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2040	2014-03-06 09:59:42.991816	\N	219	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2041	2014-03-06 09:59:45.085908	2014-03-06 09:59:49.043373	2	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2042	2014-03-06 09:59:54.060763	\N	238	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2037	2014-03-06 09:59:20.820202	2014-03-06 09:59:56.784263	250	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2043	2014-03-06 10:00:01.885396	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2044	2014-03-06 10:00:05.814683	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2045	2014-03-06 10:00:10.671485	\N	250	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2039	2014-03-06 09:59:41.249287	2014-03-06 10:00:17.952157	768	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2047	2014-03-06 10:00:25.115346	\N	250	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2048	2014-03-06 10:00:32.454983	\N	768	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2049	2014-03-06 10:00:41.522609	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2050	2014-03-06 10:00:45.071368	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2051	2014-03-06 10:00:45.750952	\N	253	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2052	2014-03-06 10:00:46.93826	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2054	2014-03-06 10:00:49.801003	\N	250	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2055	2014-03-06 10:00:51.848804	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2046	2014-03-06 10:00:23.648801	2014-03-06 10:00:52.612805	219	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2053	2014-03-06 10:00:48.19963	2014-03-06 10:01:11.644432	240	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2057	2014-03-06 10:01:16.761809	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2058	2014-03-06 10:01:24.648628	\N	219	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2059	2014-03-06 10:01:25.852715	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2056	2014-03-06 10:01:02.952521	2014-03-06 10:01:33.168822	768	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2061	2014-03-06 10:01:41.919309	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2063	2014-03-06 10:01:57.190341	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2064	2014-03-06 10:01:57.483266	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2060	2014-03-06 10:01:25.891703	2014-03-06 10:02:01.983724	250	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2065	2014-03-06 10:02:07.232839	\N	240	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2066	2014-03-06 10:02:08.441	2014-03-06 10:02:14.020958	2	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2067	2014-03-06 10:02:15.271622	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2062	2014-03-06 10:01:45.839924	2014-03-06 10:02:28.836167	768	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2070	2014-03-06 10:02:33.289676	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2069	2014-03-06 10:02:26.90415	2014-03-06 10:02:45.430609	2	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2068	2014-03-06 10:02:15.33008	2014-03-06 10:02:48.911127	250	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2072	2014-03-06 10:02:56.45803	\N	219	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2073	2014-03-06 10:02:57.972308	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2074	2014-03-06 10:02:59.804495	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2071	2014-03-06 10:02:41.509273	2014-03-06 10:03:15.120715	768	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2075	2014-03-06 10:03:15.432542	\N	253	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2076	2014-03-06 10:03:26.50188	\N	2	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2077	2014-03-06 10:03:29.438751	\N	253	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2079	2014-03-06 10:03:34.910947	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2081	2014-03-06 10:03:42.819825	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2082	2014-03-06 10:03:51.145714	\N	250	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2083	2014-03-06 10:03:55.630432	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
2078	2014-03-06 10:03:30.560956	2014-03-06 10:04:02.642949	768	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2084	2014-03-06 10:04:03.25163	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2085	2014-03-06 10:04:03.351443	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2086	2014-03-06 10:04:03.380772	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2080	2014-03-06 10:03:38.696623	2014-03-06 10:04:05.009281	219	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2090	2014-03-06 10:04:15.917768	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2091	2014-03-06 10:04:17.649524	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2092	2014-03-06 10:04:17.879309	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2093	2014-03-06 10:04:20.116168	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2087	2014-03-06 10:04:07.455464	2014-03-06 10:04:25.363863	240	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2094	2014-03-06 10:04:35.816389	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2088	2014-03-06 10:04:10.952838	2014-03-06 10:04:37.117637	250	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2095	2014-03-06 10:04:41.632306	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2089	2014-03-06 10:04:14.833301	2014-03-06 10:04:52.111291	768	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2097	2014-03-06 10:04:52.593768	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2098	2014-03-06 10:04:52.768556	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2099	2014-03-06 10:04:58.51692	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2101	2014-03-06 10:05:04.877547	\N	768	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2102	2014-03-06 10:05:04.949536	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2100	2014-03-06 10:05:04.604669	2014-03-06 10:05:17.631048	253	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2096	2014-03-06 10:04:50.008547	2014-03-06 10:05:19.155643	250	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2103	2014-03-06 10:05:29.908536	\N	253	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2104	2014-03-06 10:05:31.877347	\N	240	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2107	2014-03-06 10:05:47.42183	\N	258	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2109	2014-03-06 10:05:49.228575	\N	2	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2108	2014-03-06 10:05:48.270475	2014-03-06 10:06:01.283288	253	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2110	2014-03-06 10:06:02.599688	\N	258	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2111	2014-03-06 10:06:08.703548	\N	245	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2113	2014-03-06 10:06:16.939197	\N	253	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2105	2014-03-06 10:05:34.99336	2014-03-06 10:06:20.93876	250	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2106	2014-03-06 10:05:42.448675	2014-03-06 10:06:25.317452	768	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2114	2014-03-06 10:06:27.03448	\N	240	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2112	2014-03-06 10:06:08.891779	2014-03-06 10:06:29.716158	2	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2116	2014-03-06 10:06:39.015706	\N	250	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2117	2014-03-06 10:06:50.254368	\N	258	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2118	2014-03-06 10:06:51.179687	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2119	2014-03-06 10:06:56.522731	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2121	2014-03-06 10:07:03.696839	\N	250	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2122	2014-03-06 10:07:06.504799	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2115	2014-03-06 10:06:38.148543	2014-03-06 10:07:10.800455	768	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2124	2014-03-06 10:07:18.196728	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2125	2014-03-06 10:07:19.817388	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2126	2014-03-06 10:07:22.510333	\N	239	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2123	2014-03-06 10:07:13.307733	2014-03-06 10:07:43.897035	219	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2127	2014-03-06 10:07:23.863234	\N	768	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2120	2014-03-06 10:07:03.061996	2014-03-06 10:07:26.763065	2	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2128	2014-03-06 10:07:34.828696	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2130	2014-03-06 10:07:46.532143	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2131	2014-03-06 10:07:50.425911	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2129	2014-03-06 10:07:39.995259	2014-03-06 10:07:50.919207	253	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2133	2014-03-06 10:07:59.182438	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2135	2014-03-06 10:08:31.733594	\N	2	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2132	2014-03-06 10:07:52.800292	2014-03-06 10:08:39.045435	250	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2137	2014-03-06 10:08:39.052158	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2185	2014-03-06 10:11:14.816185	\N	768	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2134	2014-03-06 10:08:06.426303	2014-03-06 10:08:40.185332	219	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2138	2014-03-06 10:08:40.619735	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2139	2014-03-06 10:08:40.627644	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2143	2014-03-06 10:08:50.745066	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2144	2014-03-06 10:08:54.569136	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2141	2014-03-06 10:08:41.800873	2014-03-06 10:08:57.624452	253	3	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2140	2014-03-06 10:08:41.364827	2014-03-06 10:09:03.319364	2	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2136	2014-03-06 10:08:38.986125	2014-03-06 10:09:08.276167	768	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2142	2014-03-06 10:08:43.805398	2014-03-06 10:09:10.280047	250	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2146	2014-03-06 10:09:14.664891	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2147	2014-03-06 10:09:18.87104	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2145	2014-03-06 10:09:04.101046	2014-03-06 10:09:24.340876	2	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2149	2014-03-06 10:09:26.154775	\N	250	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2150	2014-03-06 10:09:29.641469	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2151	2014-03-06 10:09:37.156642	\N	2	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2152	2014-03-06 10:09:38.057328	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2153	2014-03-06 10:09:41.192172	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2148	2014-03-06 10:09:19.193431	2014-03-06 10:09:46.684421	219	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2155	2014-03-06 10:09:53.199874	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2156	2014-03-06 10:09:57.967083	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2157	2014-03-06 10:10:02.992072	\N	253	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2158	2014-03-06 10:10:04.291942	\N	258	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2159	2014-03-06 10:10:04.349504	\N	223	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2160	2014-03-06 10:10:05.06586	\N	768	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2161	2014-03-06 10:10:05.281169	\N	2	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2163	2014-03-06 10:10:06.735374	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2164	2014-03-06 10:10:06.732273	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2165	2014-03-06 10:10:19.853033	\N	2	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2166	2014-03-06 10:10:20.518371	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2162	2014-03-06 10:10:05.646517	2014-03-06 10:10:20.535419	226	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2168	2014-03-06 10:10:21.176576	\N	768	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2170	2014-03-06 10:10:23.839035	\N	219	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2171	2014-03-06 10:10:25.84458	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2154	2014-03-06 10:09:44.863473	2014-03-06 10:10:27.272377	250	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2169	2014-03-06 10:10:23.357682	2014-03-06 10:10:30.506689	253	3	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2175	2014-03-06 10:10:43.954628	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2174	2014-03-06 10:10:42.69605	2014-03-06 10:10:47.997501	253	4	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2176	2014-03-06 10:10:49.992349	\N	226	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2173	2014-03-06 10:10:40.517113	2014-03-06 10:10:52.713283	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2177	2014-03-06 10:10:56.575661	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2167	2014-03-06 10:10:20.791616	2014-03-06 10:10:57.975398	258	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2178	2014-03-06 10:10:58.929329	\N	238	1	062925BDC19347E8890A6D7390DF3842	2	f	f
2172	2014-03-06 10:10:38.111847	2014-03-06 10:10:58.981464	223	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2179	2014-03-06 10:10:59.821016	\N	253	5	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2180	2014-03-06 10:11:05.283869	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2181	2014-03-06 10:11:06.102354	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2182	2014-03-06 10:11:07.937307	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2184	2014-03-06 10:11:13.822951	\N	258	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2186	2014-03-06 10:11:16.390782	\N	226	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2187	2014-03-06 10:11:16.485388	\N	253	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2188	2014-03-06 10:11:18.099725	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2190	2014-03-06 10:11:21.438938	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2191	2014-03-06 10:11:33.428228	\N	253	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2193	2014-03-06 10:11:35.281055	\N	768	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2189	2014-03-06 10:11:19.125617	2014-03-06 10:11:35.56563	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2195	2014-03-06 10:11:37.682584	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2196	2014-03-06 10:11:38.798829	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2183	2014-03-06 10:11:12.131177	2014-03-06 10:11:43.581319	223	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2192	2014-03-06 10:11:34.707705	2014-03-06 10:11:47.521815	226	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2198	2014-03-06 10:11:50.010853	\N	219	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2199	2014-03-06 10:11:52.553713	\N	253	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2200	2014-03-06 10:11:53.636319	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2201	2014-03-06 10:11:54.089262	\N	239	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2202	2014-03-06 10:11:54.639383	\N	768	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2194	2014-03-06 10:11:36.425055	2014-03-06 10:12:06.628391	258	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2206	2014-03-06 10:12:12.047681	\N	253	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2197	2014-03-06 10:11:43.634183	2014-03-06 10:12:16.587851	250	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2207	2014-03-06 10:12:21.690541	\N	219	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2204	2014-03-06 10:12:00.581172	2014-03-06 10:12:24.309434	226	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2203	2014-03-06 10:11:57.174297	2014-03-06 10:12:27.884429	223	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2208	2014-03-06 10:12:21.879395	2014-03-06 10:12:45.62634	258	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2205	2014-03-06 10:12:09.184615	2014-03-06 10:12:22.896758	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2209	2014-03-06 10:12:23.089556	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2210	2014-03-06 10:12:25.263294	\N	238	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2211	2014-03-06 10:12:29.104996	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2212	2014-03-06 10:12:34.785907	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2213	2014-03-06 10:12:36.321973	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2217	2014-03-06 10:12:42.150635	\N	250	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2218	2014-03-06 10:12:47.888418	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2220	2014-03-06 10:12:52.570541	\N	238	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2221	2014-03-06 10:12:59.928468	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2222	2014-03-06 10:13:01.692995	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2214	2014-03-06 10:12:38.197925	2014-03-06 10:13:02.398683	226	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2219	2014-03-06 10:12:49.466177	2014-03-06 10:13:03.850207	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2216	2014-03-06 10:12:40.712779	2014-03-06 10:13:08.517768	223	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2215	2014-03-06 10:12:38.245308	2014-03-06 10:13:11.843155	768	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2224	2014-03-06 10:13:13.05569	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2225	2014-03-06 10:13:13.44503	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2226	2014-03-06 10:13:13.976416	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2227	2014-03-06 10:13:18.779026	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2228	2014-03-06 10:13:18.843689	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2229	2014-03-06 10:13:20.163723	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2230	2014-03-06 10:13:21.871187	\N	226	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2231	2014-03-06 10:13:29.177012	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2223	2014-03-06 10:13:03.433012	2014-03-06 10:13:31.774078	258	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2233	2014-03-06 10:13:38.35407	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2234	2014-03-06 10:13:40.378631	\N	244	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2235	2014-03-06 10:13:41.50568	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2238	2014-03-06 10:13:52.008276	\N	258	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2239	2014-03-06 10:13:54.055857	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2237	2014-03-06 10:13:45.356042	2014-03-06 10:13:56.873664	238	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2232	2014-03-06 10:13:32.522101	2014-03-06 10:13:57.36423	239	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2240	2014-03-06 10:14:07.59739	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2241	2014-03-06 10:14:07.60417	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2236	2014-03-06 10:13:42.864537	2014-03-06 10:14:08.957015	226	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2243	2014-03-06 10:14:11.702164	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2242	2014-03-06 10:14:08.91523	2014-03-06 10:14:30.490738	238	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2244	2014-03-06 10:14:24.754712	2014-03-06 10:14:33.460942	252	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2247	2014-03-06 10:14:41.633649	\N	219	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2248	2014-03-06 10:14:46.122328	\N	252	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2252	2014-03-06 10:14:47.670376	\N	238	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2246	2014-03-06 10:14:41.252731	2014-03-06 10:14:49.352451	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2254	2014-03-06 10:14:52.242979	\N	245	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2249	2014-03-06 10:14:46.384934	2014-03-06 10:14:53.362664	253	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2256	2014-03-06 10:14:56.098034	\N	250	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2250	2014-03-06 10:14:47.001105	2014-03-06 10:14:57.589331	271	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2245	2014-03-06 10:14:31.736192	2014-03-06 10:15:02.973141	258	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2253	2014-03-06 10:14:49.996185	2014-03-06 10:15:12.78403	226	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2257	2014-03-06 10:14:59.595775	2014-03-06 10:15:18.000185	252	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2255	2014-03-06 10:14:54.131365	2014-03-06 10:15:18.943242	219	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2261	2014-03-06 10:15:19.822758	\N	258	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2258	2014-03-06 10:15:01.65704	2014-03-06 10:15:23.480834	244	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2262	2014-03-06 10:15:25.495959	\N	271	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2263	2014-03-06 10:15:26.490434	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2251	2014-03-06 10:14:47.455304	2014-03-06 10:15:28.25164	223	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2266	2014-03-06 10:15:31.036283	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2259	2014-03-06 10:15:03.266935	2014-03-06 10:15:31.826297	239	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2267	2014-03-06 10:15:39.927072	\N	244	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2269	2014-03-06 10:15:43.710646	\N	238	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2260	2014-03-06 10:15:14.797802	2014-03-06 10:15:47.955319	250	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2265	2014-03-06 10:15:28.573406	2014-03-06 10:15:49.108255	240	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2270	2014-03-06 10:15:49.343761	\N	252	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2264	2014-03-06 10:15:28.565363	2014-03-06 10:15:54.22613	226	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2268	2014-03-06 10:15:40.290638	2014-03-06 10:16:16.214424	768	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2273	2014-03-06 10:16:04.158648	2014-03-06 10:16:18.702499	271	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2276	2014-03-06 10:16:30.399136	\N	238	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2277	2014-03-06 10:16:31.37009	\N	271	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2274	2014-03-06 10:16:27.41407	2014-03-06 10:16:31.45789	252	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2278	2014-03-06 10:16:32.027742	\N	235	1	29E245BF9A144F5B96C6DE0A626622A7	0	f	f
2271	2014-03-06 10:15:55.789467	2014-03-06 10:16:35.888451	258	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2272	2014-03-06 10:16:03.041525	2014-03-06 10:16:36.415253	250	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2279	2014-03-06 10:16:41.91733	\N	252	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2281	2014-03-06 10:16:48.618944	\N	238	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2282	2014-03-06 10:16:49.076534	\N	250	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2284	2014-03-06 10:16:50.32012	\N	253	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2275	2014-03-06 10:16:29.262336	2014-03-06 10:16:58.611379	768	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2286	2014-03-06 10:16:58.930273	\N	244	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2287	2014-03-06 10:16:58.992063	\N	219	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2288	2014-03-06 10:16:59.82893	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2285	2014-03-06 10:16:55.25165	2014-03-06 10:17:13.45834	271	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2280	2014-03-06 10:16:47.129435	2014-03-06 10:17:15.571101	240	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2283	2014-03-06 10:16:49.859984	2014-03-06 10:17:32.571458	258	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2289	2014-03-06 10:17:05.275726	2014-03-06 10:17:10.392332	253	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2290	2014-03-06 10:17:12.480249	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2291	2014-03-06 10:17:14.572214	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2294	2014-03-06 10:17:16.564999	\N	219	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2295	2014-03-06 10:17:21.65466	\N	253	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2297	2014-03-06 10:17:31.557358	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2299	2014-03-06 10:17:33.154912	\N	253	2	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2298	2014-03-06 10:17:31.732832	2014-03-06 10:17:37.56659	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2302	2014-03-06 10:17:48.746729	\N	219	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2296	2014-03-06 10:17:25.693527	2014-03-06 10:17:49.042663	271	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2293	2014-03-06 10:17:15.462442	2014-03-06 10:17:50.235688	250	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2303	2014-03-06 10:17:54.771554	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2301	2014-03-06 10:17:47.243305	2014-03-06 10:17:55.564387	252	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2304	2014-03-06 10:17:56.104048	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2292	2014-03-06 10:17:15.349245	2014-03-06 10:17:57.808666	768	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2307	2014-03-06 10:18:02.386146	\N	240	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2310	2014-03-06 10:18:13.603886	\N	252	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2311	2014-03-06 10:18:16.130735	\N	253	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2300	2014-03-06 10:17:45.838895	2014-03-06 10:18:19.505083	258	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2305	2014-03-06 10:18:01.972032	2014-03-06 10:18:24.020691	271	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2312	2014-03-06 10:18:26.282339	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2314	2014-03-06 10:18:35.21797	\N	244	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2313	2014-03-06 10:18:32.694735	2014-03-06 10:18:37.457551	253	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2309	2014-03-06 10:18:11.345531	2014-03-06 10:18:47.21671	223	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2317	2014-03-06 10:18:50.240709	\N	258	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2322	2014-03-06 10:18:51.491947	\N	252	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2306	2014-03-06 10:18:02.295765	2014-03-06 10:18:51.704037	250	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2316	2014-03-06 10:18:47.966149	2014-03-06 10:18:53.764355	253	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2323	2014-03-06 10:18:53.773345	\N	239	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2308	2014-03-06 10:18:10.176612	2014-03-06 10:18:53.847112	768	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2318	2014-03-06 10:18:50.392374	2014-03-06 10:18:57.318734	244	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2315	2014-03-06 10:18:38.072688	2014-03-06 10:19:06.241551	219	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2320	2014-03-06 10:18:51.326003	2014-03-06 10:19:12.478775	271	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2321	2014-03-06 10:18:51.486125	2014-03-06 10:19:15.668481	240	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2319	2014-03-06 10:18:50.807037	2014-03-06 10:19:18.782831	226	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2324	2014-03-06 10:42:43.017056	\N	167	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2325	2014-03-06 10:43:14.721383	\N	167	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2326	2014-03-06 10:43:27.950371	\N	167	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2327	2014-03-06 10:43:45.894997	2014-03-06 10:43:57.111856	167	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2328	2014-03-06 10:44:23.996171	\N	167	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2329	2014-03-06 10:44:33.488881	\N	194	1	6F4455B55B4240F3B4738DD9DB3EAF40	0	f	f
2330	2014-03-06 10:44:35.57539	\N	199	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2331	2014-03-06 10:44:47.223982	\N	199	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2332	2014-03-06 10:44:52.008882	\N	194	1	062925BDC19347E8890A6D7390DF3842	2	f	f
2333	2014-03-06 10:45:03.705788	\N	194	1	062925BDC19347E8890A6D7390DF3842	0	f	f
2334	2014-03-06 10:45:04.958662	2014-03-06 10:45:20.905111	167	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2335	2014-03-06 10:45:29.623797	2014-03-06 10:45:38.666805	199	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2336	2014-03-06 10:45:52.752519	\N	167	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2337	2014-03-06 10:46:04.129263	\N	192	1	9EC218587C01452C9EB49F52EB2DD1DD	2	f	f
2338	2014-03-06 10:46:37.465733	\N	199	1	9EC218587C01452C9EB49F52EB2DD1DD	2	f	f
2340	2014-03-06 10:46:53.686477	\N	192	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
2341	2014-03-06 10:46:55.828644	\N	2	1	884F1851E494434DB4B70D01A077363D	2	f	f
2342	2014-03-06 10:47:07.53907	\N	2	1	884F1851E494434DB4B70D01A077363D	0	f	f
2343	2014-03-06 10:47:07.901311	\N	167	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2339	2014-03-06 10:46:48.74704	2014-03-06 10:47:13.551468	199	1	9EC218587C01452C9EB49F52EB2DD1DD	1	f	f
2344	2014-03-06 10:47:45.040019	\N	2	1	884F1851E494434DB4B70D01A077363D	0	f	f
2345	2014-03-06 10:47:56.939882	\N	192	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2346	2014-03-06 10:47:58.631546	\N	199	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2347	2014-03-06 10:48:06.029264	\N	199	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2348	2014-03-06 10:48:08.631479	2014-03-06 10:48:16.263583	192	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2349	2014-03-06 10:48:18.040735	\N	167	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2350	2014-03-06 10:48:29.260264	2014-03-06 10:48:39.241377	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2351	2014-03-06 10:48:48.119354	2014-03-06 10:49:01.776663	192	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2352	2014-03-06 10:49:14.853593	\N	199	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2353	2014-03-06 10:49:18.572386	2014-03-06 10:49:38.749734	192	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2354	2014-03-06 10:49:44.149731	\N	199	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2355	2014-03-06 10:49:50.171605	\N	191	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2357	2014-03-06 10:49:58.079768	\N	167	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	2	f	f
2356	2014-03-06 10:49:56.526778	2014-03-06 10:50:10.888391	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2358	2014-03-06 10:49:58.250062	2014-03-06 10:50:11.728918	191	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2360	2014-03-06 10:50:21.169661	\N	192	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2361	2014-03-06 10:50:22.529713	\N	199	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2362	2014-03-06 10:50:28.878083	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2359	2014-03-06 10:50:11.807073	2014-03-06 10:50:29.878341	167	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2364	2014-03-06 10:50:36.829043	\N	2	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2363	2014-03-06 10:50:31.524023	2014-03-06 10:50:42.430269	191	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2366	2014-03-06 10:50:48.897368	\N	2	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2368	2014-03-06 10:50:56.631979	\N	191	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2365	2014-03-06 10:50:45.598107	2014-03-06 10:50:59.653943	167	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2367	2014-03-06 10:50:50.221085	2014-03-06 10:51:03.11543	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2369	2014-03-06 10:51:04.758572	\N	192	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2371	2014-03-06 10:51:13.913488	\N	167	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2372	2014-03-06 10:51:14.72866	\N	2	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2370	2014-03-06 10:51:13.006214	2014-03-06 10:51:23.933032	191	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2375	2014-03-06 10:51:36.818825	\N	2	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2376	2014-03-06 10:51:37.4822	\N	192	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2373	2014-03-06 10:51:18.972924	2014-03-06 10:51:38.884802	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2374	2014-03-06 10:51:36.459824	2014-03-06 10:51:48.251598	191	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2377	2014-03-06 10:51:53.248129	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2378	2014-03-06 10:51:55.848857	\N	192	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2379	2014-03-06 10:51:56.489115	\N	2	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2380	2014-03-06 10:52:01.614132	\N	191	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2383	2014-03-06 10:52:20.101166	\N	199	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2384	2014-03-06 10:52:20.642396	\N	191	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2381	2014-03-06 10:52:12.618232	2014-03-06 10:52:23.211654	192	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2382	2014-03-06 10:52:16.573534	2014-03-06 10:52:28.051631	2	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2387	2014-03-06 10:52:36.663138	\N	192	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2385	2014-03-06 10:52:32.889824	2014-03-06 10:52:41.049945	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2386	2014-03-06 10:52:34.312041	2014-03-06 10:52:45.451085	191	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2389	2014-03-06 10:52:52.003936	\N	167	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2391	2014-03-06 10:53:05.385971	\N	199	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2390	2014-03-06 10:53:01.943825	2014-03-06 10:53:12.240605	191	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2388	2014-03-06 10:52:44.680564	2014-03-06 10:53:13.832853	2	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2394	2014-03-06 10:53:25.583054	\N	192	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2395	2014-03-06 10:53:27.108658	\N	2	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2392	2014-03-06 10:53:17.817955	2014-03-06 10:53:29.488646	167	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2393	2014-03-06 10:53:19.762792	2014-03-06 10:53:33.013858	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2396	2014-03-06 10:53:34.437566	\N	189	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2397	2014-03-06 10:53:37.960071	\N	192	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2398	2014-03-06 10:53:48.50733	\N	191	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2399	2014-03-06 10:53:50.98742	\N	167	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2400	2014-03-06 10:53:55.033077	\N	191	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2401	2014-03-06 10:53:55.424141	\N	2	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2402	2014-03-06 10:53:57.253989	2014-03-06 10:54:19.107326	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2403	2014-03-06 10:54:11.251048	2014-03-06 10:54:21.721037	191	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2404	2014-03-06 10:54:14.164622	2014-03-06 10:54:25.339462	167	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2405	2014-03-06 10:54:33.567167	\N	189	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2407	2014-03-06 10:54:47.620134	\N	2	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2406	2014-03-06 10:54:40.206673	2014-03-06 10:54:56.624247	191	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2408	2014-03-06 10:54:47.874103	2014-03-06 10:55:01.445453	167	2	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2409	2014-03-06 10:55:06.358756	\N	2	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2410	2014-03-06 10:55:08.210105	\N	189	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2412	2014-03-06 10:55:10.233717	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2413	2014-03-06 10:55:15.097497	\N	178	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2411	2014-03-06 10:55:09.763644	2014-03-06 10:55:28.659091	191	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2417	2014-03-06 10:55:32.459532	\N	189	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2418	2014-03-06 10:55:33.372313	2014-03-06 10:55:41.044559	192	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2414	2014-03-06 10:55:21.766422	2014-03-06 10:55:41.638448	167	3	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2420	2014-03-06 10:55:48.282951	\N	178	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2415	2014-03-06 10:55:26.527133	2014-03-06 10:55:48.63839	2	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2421	2014-03-06 10:55:55.064588	\N	192	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2416	2014-03-06 10:55:31.219785	2014-03-06 10:55:55.251957	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2422	2014-03-06 10:56:00.69394	\N	189	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2419	2014-03-06 10:55:41.612675	2014-03-06 10:56:05.142008	191	4	0CFFCBC851984A4281C23D34FC400445	1	f	f
2425	2014-03-06 10:56:15.463836	\N	2	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2423	2014-03-06 10:56:12.212154	2014-03-06 10:56:32.201723	167	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2424	2014-03-06 10:56:15.244211	2014-03-06 10:56:36.885802	199	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2426	2014-03-06 10:56:27.957011	2014-03-06 10:56:51.421453	191	5	0CFFCBC851984A4281C23D34FC400445	1	f	f
2427	2014-03-06 10:56:55.027366	\N	167	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2429	2014-03-06 10:57:00.548828	\N	199	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2431	2014-03-06 10:57:12.659539	2014-03-06 10:57:19.921662	189	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2432	2014-03-06 10:57:24.413575	\N	192	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2433	2014-03-06 10:57:28.645546	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2430	2014-03-06 10:57:06.969277	2014-03-06 10:57:31.954533	191	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2428	2014-03-06 10:56:56.499305	2014-03-06 10:57:41.863881	2	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2434	2014-03-06 10:57:35.877741	2014-03-06 10:57:57.242243	167	4	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2436	2014-03-06 10:57:58.23964	\N	2	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2437	2014-03-06 10:58:05.665337	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2435	2014-03-06 10:57:48.346613	2014-03-06 10:58:13.210504	191	7	0CFFCBC851984A4281C23D34FC400445	1	f	f
2439	2014-03-06 10:58:35.97728	\N	189	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2438	2014-03-06 10:58:12.460187	2014-03-06 10:58:36.738947	167	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2441	2014-03-06 10:58:44.132809	\N	191	8	0CFFCBC851984A4281C23D34FC400445	0	f	f
2442	2014-03-06 10:58:50.478368	\N	189	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2440	2014-03-06 10:58:43.848453	2014-03-06 10:59:07.206143	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2443	2014-03-06 10:59:13.277277	\N	191	7	0CFFCBC851984A4281C23D34FC400445	0	f	f
2444	2014-03-06 10:59:16.706319	\N	167	6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2447	2014-03-06 10:59:33.383599	\N	191	7	0CFFCBC851984A4281C23D34FC400445	0	f	f
2445	2014-03-06 10:59:19.704879	2014-03-06 10:59:36.101251	189	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2446	2014-03-06 10:59:22.603279	2014-03-06 10:59:47.563695	199	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2448	2014-03-06 10:59:48.723549	\N	189	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2451	2014-03-06 11:00:22.807488	\N	178	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2450	2014-03-06 11:00:15.07744	2014-03-06 11:00:41.660177	191	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2449	2014-03-06 11:00:03.669707	2014-03-06 11:00:26.440782	199	4	0CFFCBC851984A4281C23D34FC400445	1	f	f
2452	2014-03-06 11:00:35.712662	\N	178	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2453	2014-03-06 11:00:49.217411	\N	199	5	0CFFCBC851984A4281C23D34FC400445	0	f	f
2454	2014-03-06 11:00:55.989044	2014-03-06 11:01:18.676038	191	7	0CFFCBC851984A4281C23D34FC400445	1	f	f
2455	2014-03-06 11:01:24.63094	\N	199	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2459	2014-03-06 11:01:41.172584	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2458	2014-03-06 11:01:38.139405	2014-03-06 11:01:48.998344	189	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2456	2014-03-06 11:01:31.422875	2014-03-06 11:01:55.921153	191	8	0CFFCBC851984A4281C23D34FC400445	1	f	f
2461	2014-03-06 11:02:07.273373	\N	192	1	0CFFCBC851984A4281C23D34FC400445	0	f	f
2462	2014-03-06 11:02:11.667051	\N	199	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2460	2014-03-06 11:02:06.665363	2014-03-06 11:02:26.572918	178	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2457	2014-03-06 11:01:35.827845	2014-03-06 11:02:34.225488	2	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2463	2014-03-06 11:02:12.593534	2014-03-06 11:02:34.298119	189	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2465	2014-03-06 11:02:26.965115	2014-03-06 11:02:43.840569	199	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2464	2014-03-06 11:02:23.807766	2014-03-06 11:02:45.25914	191	9	0CFFCBC851984A4281C23D34FC400445	1	f	f
2466	2014-03-06 11:02:42.888362	2014-03-06 11:02:47.836786	192	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2467	2014-03-06 11:02:56.356726	2014-03-06 11:03:19.525257	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2469	2014-03-06 11:03:08.152075	2014-03-06 11:03:22.934757	192	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2468	2014-03-06 11:02:58.12696	2014-03-06 11:03:26.3729	191	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2470	2014-03-06 11:03:31.29937	\N	199	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2472	2014-03-06 11:03:38.244691	\N	192	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2471	2014-03-06 11:03:31.819433	2014-03-06 11:03:48.337363	178	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2475	2014-03-06 11:04:00.163425	\N	192	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
2473	2014-03-06 11:03:44.728188	2014-03-06 11:04:07.761305	191	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2474	2014-03-06 11:03:57.944088	2014-03-06 11:04:16.890615	199	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2476	2014-03-06 11:04:18.600623	2014-03-06 11:04:24.08834	192	1	0CFFCBC851984A4281C23D34FC400445	1	f	f
2479	2014-03-06 11:04:42.677723	\N	2	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2477	2014-03-06 11:04:23.897363	2014-03-06 11:04:53.705396	191	12	0CFFCBC851984A4281C23D34FC400445	1	f	f
2478	2014-03-06 11:04:34.600113	2014-03-06 11:05:05.38959	199	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2481	2014-03-06 11:05:13.340557	2014-03-06 11:05:26.552393	192	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2483	2014-03-06 11:05:30.700605	\N	2	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2480	2014-03-06 11:05:09.55811	2014-03-06 11:05:34.385165	191	13	0CFFCBC851984A4281C23D34FC400445	1	f	f
2482	2014-03-06 11:05:26.497983	2014-03-06 11:05:55.072484	199	4	0CFFCBC851984A4281C23D34FC400445	1	f	f
2484	2014-03-06 11:05:46.407283	2014-03-06 11:06:07.668757	191	14	0CFFCBC851984A4281C23D34FC400445	1	f	f
2487	2014-03-06 11:06:21.155692	\N	191	15	0CFFCBC851984A4281C23D34FC400445	0	f	f
2488	2014-03-06 11:06:25.777544	\N	192	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2486	2014-03-06 11:06:19.181514	2014-03-06 11:06:34.909426	178	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2485	2014-03-06 11:06:11.498851	2014-03-06 11:06:37.634934	199	5	0CFFCBC851984A4281C23D34FC400445	1	f	f
2490	2014-03-06 11:06:38.592356	2014-03-06 11:06:54.106695	192	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
2492	2014-03-06 11:06:58.935497	\N	199	6	0CFFCBC851984A4281C23D34FC400445	0	f	f
2489	2014-03-06 11:06:38.279465	2014-03-06 11:07:04.971575	191	14	0CFFCBC851984A4281C23D34FC400445	1	f	f
2496	2014-03-06 11:07:26.05735	\N	2	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2493	2014-03-06 11:07:06.344391	2014-03-06 11:07:28.399728	192	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2497	2014-03-06 11:07:40.655923	\N	2	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2495	2014-03-06 11:07:20.757265	2014-03-06 11:07:52.897145	199	5	0CFFCBC851984A4281C23D34FC400445	1	f	f
2494	2014-03-06 11:07:19.588054	2014-03-06 11:07:52.967954	191	15	0CFFCBC851984A4281C23D34FC400445	1	f	f
2498	2014-03-06 11:07:45.082875	2014-03-06 11:08:06.612488	192	4	0CFFCBC851984A4281C23D34FC400445	1	f	f
2500	2014-03-06 11:08:20.662182	\N	199	6	0CFFCBC851984A4281C23D34FC400445	0	f	f
2499	2014-03-06 11:08:05.564094	2014-03-06 11:08:33.400819	191	16	0CFFCBC851984A4281C23D34FC400445	1	f	f
2501	2014-03-06 11:08:22.196878	2014-03-06 11:08:45.332812	192	5	0CFFCBC851984A4281C23D34FC400445	1	f	f
2502	2014-03-06 11:08:48.178988	\N	191	17	0CFFCBC851984A4281C23D34FC400445	0	f	f
2504	2014-03-06 11:09:01.935905	\N	192	6	0CFFCBC851984A4281C23D34FC400445	0	f	f
2503	2014-03-06 11:08:50.608665	2014-03-06 11:09:16.144145	199	5	0CFFCBC851984A4281C23D34FC400445	1	f	f
2506	2014-03-06 11:09:28.030328	\N	199	6	0CFFCBC851984A4281C23D34FC400445	0	f	f
2505	2014-03-06 11:09:23.001709	2014-03-06 11:09:46.888392	191	16	0CFFCBC851984A4281C23D34FC400445	1	f	f
2508	2014-03-06 11:09:46.032672	2014-03-06 11:10:08.093677	192	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2491	2014-03-06 11:06:52.535947	2014-03-06 11:10:08.879533	178	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2507	2014-03-06 11:09:44.783166	2014-03-06 11:10:10.069787	199	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2511	2014-03-06 11:10:23.742535	\N	192	7	0CFFCBC851984A4281C23D34FC400445	0	f	f
2509	2014-03-06 11:10:01.761333	2014-03-06 11:10:27.614358	191	17	0CFFCBC851984A4281C23D34FC400445	1	f	f
2513	2014-03-06 11:10:36.810606	\N	192	7	0CFFCBC851984A4281C23D34FC400445	0	f	f
2510	2014-03-06 11:10:22.164984	2014-03-06 11:10:44.010859	167	5	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2512	2014-03-06 11:10:28.37182	2014-03-06 11:10:54.087569	199	7	0CFFCBC851984A4281C23D34FC400445	1	f	f
2514	2014-03-06 11:10:41.646845	2014-03-06 11:11:06.305641	191	18	0CFFCBC851984A4281C23D34FC400445	1	f	f
2515	2014-03-06 11:11:06.30839	\N	191	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2518	2014-03-06 11:11:16.50096	\N	199	8	0CFFCBC851984A4281C23D34FC400445	0	f	f
2519	2014-03-06 11:11:18.451942	\N	191	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2516	2014-03-06 11:11:07.227203	2014-03-06 11:11:33.315933	167	6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
2517	2014-03-06 11:11:07.266549	2014-03-06 11:11:33.80615	192	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2520	2014-03-06 11:11:33.365911	2014-03-06 11:11:42.552026	191	1	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2521	2014-03-06 11:11:47.057908	\N	192	7	0CFFCBC851984A4281C23D34FC400445	0	f	f
2522	2014-03-06 11:11:54.802894	2014-03-06 11:12:11.785132	191	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2525	2014-03-06 11:12:37.162608	\N	191	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2523	2014-03-06 11:12:05.544776	2014-03-06 11:12:43.062752	199	8	0CFFCBC851984A4281C23D34FC400445	1	f	f
2528	2014-03-06 11:12:57.208319	\N	199	9	0CFFCBC851984A4281C23D34FC400445	0	f	f
2524	2014-03-06 11:12:25.735773	2014-03-06 11:12:57.621866	192	6	0CFFCBC851984A4281C23D34FC400445	1	f	f
2526	2014-03-06 11:12:43.22028	2014-03-06 11:12:58.201835	178	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2527	2014-03-06 11:12:52.182981	2014-03-06 11:13:08.454688	191	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2529	2014-03-06 11:13:22.372111	\N	191	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2530	2014-03-06 11:13:23.6574	2014-03-06 11:13:59.159073	199	9	0CFFCBC851984A4281C23D34FC400445	1	f	f
2531	2014-03-06 11:13:51.693021	2014-03-06 11:14:11.944877	191	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2532	2014-03-06 11:14:06.351911	2014-03-06 11:14:28.836921	192	7	0CFFCBC851984A4281C23D34FC400445	1	f	f
2533	2014-03-06 11:14:16.716303	2014-03-06 11:14:42.099363	199	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2534	2014-03-06 11:14:29.467683	2014-03-06 11:14:54.200331	191	3	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2535	2014-03-06 11:14:47.552819	2014-03-06 11:15:10.888516	192	8	0CFFCBC851984A4281C23D34FC400445	1	f	f
2536	2014-03-06 11:14:54.502315	2014-03-06 11:15:20.553384	199	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2537	2014-03-06 11:15:15.126561	2014-03-06 11:15:37.038782	191	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2538	2014-03-06 11:15:40.7604	\N	199	12	0CFFCBC851984A4281C23D34FC400445	0	f	f
2539	2014-03-06 11:15:45.267432	\N	192	9	0CFFCBC851984A4281C23D34FC400445	0	f	f
2541	2014-03-06 11:15:49.036	\N	191	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2542	2014-03-06 11:15:53.141346	\N	199	11	0CFFCBC851984A4281C23D34FC400445	0	f	f
2540	2014-03-06 11:15:45.478056	2014-03-06 11:16:06.18706	178	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2544	2014-03-06 11:16:15.978227	\N	199	10	0CFFCBC851984A4281C23D34FC400445	0	f	f
2543	2014-03-06 11:16:08.424807	2014-03-06 11:16:30.393439	191	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2547	2014-03-06 11:16:51.851022	\N	199	10	0CFFCBC851984A4281C23D34FC400445	0	f	f
2545	2014-03-06 11:16:40.652735	2014-03-06 11:16:54.593756	178	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2546	2014-03-06 11:16:42.515837	2014-03-06 11:17:05.348904	191	5	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2548	2014-03-06 11:17:18.842654	2014-03-06 11:17:39.239125	191	6	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2549	2014-03-06 11:17:21.435474	2014-03-06 11:17:44.287439	192	9	0CFFCBC851984A4281C23D34FC400445	1	f	f
2551	2014-03-06 11:17:44.271392	2014-03-06 11:18:00.73072	178	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2550	2014-03-06 11:17:37.681024	2014-03-06 11:18:07.035641	199	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2552	2014-03-06 11:18:00.527752	2014-03-06 11:18:29.664988	191	7	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2553	2014-03-06 11:18:12.36211	2014-03-06 11:18:37.367917	192	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2554	2014-03-06 11:18:19.711831	2014-03-06 11:18:47.178491	199	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2556	2014-03-06 11:18:51.886066	\N	192	11	0CFFCBC851984A4281C23D34FC400445	0	f	f
2557	2014-03-06 11:19:00.295009	\N	199	12	0CFFCBC851984A4281C23D34FC400445	0	f	f
2555	2014-03-06 11:18:41.45714	2014-03-06 11:19:06.316143	191	8	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2561	2014-03-06 11:19:26.205351	\N	199	11	0CFFCBC851984A4281C23D34FC400445	0	f	f
2558	2014-03-06 11:19:19.467459	2014-03-06 11:19:46.164608	191	9	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2560	2014-03-06 11:19:25.300841	2014-03-06 11:19:47.46788	192	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2559	2014-03-06 11:19:23.043905	2014-03-06 11:19:49.412976	203	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2564	2014-03-06 11:20:02.250655	\N	203	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2565	2014-03-06 11:20:02.790055	\N	192	11	0CFFCBC851984A4281C23D34FC400445	0	f	f
2562	2014-03-06 11:19:48.06344	2014-03-06 11:20:06.817351	178	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2567	2014-03-06 11:20:15.263953	\N	166	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2563	2014-03-06 11:19:59.771582	2014-03-06 11:20:26.159717	191	10	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2569	2014-03-06 11:20:28.772309	\N	166	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2570	2014-03-06 11:20:31.254193	\N	203	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2566	2014-03-06 11:20:06.811689	2014-03-06 11:20:36.377828	199	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2568	2014-03-06 11:20:15.556038	2014-03-06 11:20:40.24804	192	10	0CFFCBC851984A4281C23D34FC400445	1	f	f
2574	2014-03-06 11:20:58.351374	\N	203	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2572	2014-03-06 11:20:49.542362	2014-03-06 11:21:11.814186	199	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2571	2014-03-06 11:20:42.662429	2014-03-06 11:21:13.048073	191	11	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2573	2014-03-06 11:20:52.107655	2014-03-06 11:21:17.904911	192	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2575	2014-03-06 11:21:02.547998	2014-03-06 11:21:37.225424	178	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2578	2014-03-06 11:21:24.988045	2014-03-06 11:21:46.105127	191	12	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2576	2014-03-06 11:21:10.340974	2014-03-06 11:21:49.15921	203	70	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2579	2014-03-06 11:21:52.205788	\N	178	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2577	2014-03-06 11:21:23.693405	2014-03-06 11:21:56.1715	199	12	0CFFCBC851984A4281C23D34FC400445	1	f	f
2580	2014-03-06 11:21:58.291354	\N	191	13	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2581	2014-03-06 11:22:02.890823	\N	203	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2584	2014-03-06 11:22:11.842929	\N	192	12	0CFFCBC851984A4281C23D34FC400445	0	f	f
2582	2014-03-06 11:22:05.584179	2014-03-06 11:22:18.155756	178	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2585	2014-03-06 11:22:23.847191	\N	191	12	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2583	2014-03-06 11:22:08.907961	2014-03-06 11:22:37.526993	199	13	0CFFCBC851984A4281C23D34FC400445	1	f	f
2586	2014-03-06 11:22:30.696958	2014-03-06 11:22:50.50684	178	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2588	2014-03-06 11:22:50.509692	\N	178	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
2589	2014-03-06 11:22:51.520448	\N	199	14	0CFFCBC851984A4281C23D34FC400445	0	f	f
2587	2014-03-06 11:22:35.63834	2014-03-06 11:22:56.148661	191	11	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2593	2014-03-06 11:23:10.697797	\N	203	70	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2590	2014-03-06 11:23:01.62897	2014-03-06 11:23:23.216156	192	11	0CFFCBC851984A4281C23D34FC400445	1	f	f
2592	2014-03-06 11:23:08.621441	2014-03-06 11:23:28.377899	191	12	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2591	2014-03-06 11:23:03.375835	2014-03-06 11:23:32.723014	199	14	0CFFCBC851984A4281C23D34FC400445	1	f	f
2595	2014-03-06 11:23:35.224717	\N	203	69	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2594	2014-03-06 11:23:26.262878	2014-03-06 11:23:47.375615	189	3	0CFFCBC851984A4281C23D34FC400445	1	f	f
2596	2014-03-06 11:23:41.920196	2014-03-06 11:24:05.271374	191	13	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2597	2014-03-06 11:23:45.850606	2014-03-06 11:24:14.906807	199	15	0CFFCBC851984A4281C23D34FC400445	1	f	f
2599	2014-03-06 11:24:21.626964	\N	191	14	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2598	2014-03-06 11:24:03.086494	2014-03-06 11:24:26.662828	192	12	0CFFCBC851984A4281C23D34FC400445	1	f	f
2600	2014-03-06 11:24:27.881074	2014-03-06 11:24:55.9973	199	16	0CFFCBC851984A4281C23D34FC400445	1	f	f
2603	2014-03-06 11:24:56.041239	\N	189	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2601	2014-03-06 11:24:40.645151	2014-03-06 11:25:09.051581	192	13	0CFFCBC851984A4281C23D34FC400445	1	f	f
2602	2014-03-06 11:24:53.210775	2014-03-06 11:25:16.564494	191	13	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2604	2014-03-06 11:25:11.01258	2014-03-06 11:25:46.380808	199	17	0CFFCBC851984A4281C23D34FC400445	1	f	f
2605	2014-03-06 11:25:18.663019	2014-03-06 11:25:47.544759	203	68	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2606	2014-03-06 11:25:30.156915	2014-03-06 11:25:55.725445	191	14	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2607	2014-03-06 11:25:59.017992	\N	192	14	0CFFCBC851984A4281C23D34FC400445	0	f	f
2608	2014-03-06 11:26:04.148694	2014-03-06 11:26:38.841595	199	18	0CFFCBC851984A4281C23D34FC400445	1	f	f
2609	2014-03-06 11:26:10.402247	2014-03-06 11:26:35.46697	191	15	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2611	2014-03-06 11:26:38.844395	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2610	2014-03-06 11:26:32.697134	2014-03-06 11:26:58.371731	203	69	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2613	2014-03-06 11:26:55.753581	2014-03-06 11:27:04.386649	199	1	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2612	2014-03-06 11:26:48.532474	2014-03-06 11:27:12.479901	191	16	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2616	2014-03-06 11:27:20.816177	\N	199	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2618	2014-03-06 11:27:24.629384	\N	189	4	0CFFCBC851984A4281C23D34FC400445	0	f	f
2614	2014-03-06 11:27:02.937539	2014-03-06 11:27:33.221529	192	13	0CFFCBC851984A4281C23D34FC400445	1	f	f
2619	2014-03-06 11:27:34.244214	\N	178	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
2620	2014-03-06 11:27:40.917294	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2621	2014-03-06 11:27:41.140202	\N	167	7	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
2615	2014-03-06 11:27:11.043112	2014-03-06 11:27:41.937412	203	70	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2617	2014-03-06 11:27:24.260742	2014-03-06 11:27:47.201935	191	17	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2622	2014-03-06 11:27:50.021998	\N	189	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
2623	2014-03-06 11:28:00.267238	2014-03-06 11:28:23.557481	191	18	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2624	2014-03-06 12:16:08.320657	2014-03-06 12:16:28.275015	191	19	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2625	2014-03-06 12:16:41.150293	2014-03-06 12:17:06.633637	191	20	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2626	2014-03-06 12:17:28.831447	2014-03-06 12:17:57.010708	191	21	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2627	2014-03-06 12:18:31.84976	2014-03-06 12:18:59.307726	191	22	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2628	2014-03-06 12:19:12.556351	\N	191	23	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2629	2014-03-06 13:12:34.850723	\N	312	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2630	2014-03-06 13:13:39.385112	\N	312	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2631	2014-03-06 13:15:27.965799	\N	312	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2632	2014-03-06 13:16:44.371381	2014-03-06 13:16:47.922103	312	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2633	2014-03-06 13:17:45.06926	2014-03-06 13:18:07.377328	312	72	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2634	2014-03-06 13:19:00.251448	2014-03-06 13:19:29.970987	312	73	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2635	2014-03-06 13:20:29.566304	2014-03-06 13:20:56.041904	312	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2636	2014-03-06 13:21:46.152511	2014-03-06 13:22:14.771902	312	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2637	2014-03-06 13:22:55.131644	2014-03-06 13:23:21.006728	312	76	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2638	2014-03-06 13:24:02.16804	\N	312	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2639	2014-03-06 13:24:20.895321	2014-03-06 13:24:48.098921	312	77	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2640	2014-03-06 13:25:40.834034	\N	312	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2641	2014-03-06 13:27:13.808354	\N	312	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2642	2014-03-06 13:28:34.824683	\N	312	77	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2643	2014-03-06 13:33:00.434689	2014-03-06 13:33:32.252389	301	170	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2644	2014-03-06 13:33:57.37687	2014-03-06 13:34:39.951605	301	171	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2645	2014-03-06 13:35:01.829475	\N	301	172	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2646	2014-03-06 13:36:53.418101	2014-03-06 13:37:32.101104	301	172	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2647	2014-03-06 13:37:44.576537	2014-03-06 13:38:25.277389	301	173	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2648	2014-03-06 13:38:51.045688	\N	301	174	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2649	2014-03-06 13:39:21.454244	\N	301	173	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2650	2014-03-06 13:40:03.239092	\N	301	172	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2651	2014-03-06 13:40:46.477674	2014-03-06 13:41:11.725316	312	77	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2652	2014-03-06 14:06:19.743988	\N	161	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2653	2014-03-06 14:06:35.297404	\N	161	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2654	2014-03-06 14:06:59.946337	\N	161	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2655	2014-03-06 14:07:30.136743	2014-03-06 14:07:37.660106	161	1	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2656	2014-03-06 14:07:51.151091	2014-03-06 14:08:17.325677	161	2	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2657	2014-03-06 14:08:34.924834	2014-03-06 14:08:51.617025	161	3	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2658	2014-03-06 14:09:10.607883	2014-03-06 14:09:23.219662	161	4	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2659	2014-03-06 14:09:44.786975	\N	161	5	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2660	2014-03-06 14:11:22.079906	2014-03-06 14:12:28.700873	161	4	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2661	2014-03-06 14:12:52.245831	2014-03-06 14:13:17.63822	161	5	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2662	2014-03-06 14:13:39.887497	2014-03-06 14:14:33.365873	161	6	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2663	2014-03-06 14:15:54.230819	2014-03-06 14:16:58.241933	161	7	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2664	2014-03-06 14:17:20.434768	\N	161	8	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2665	2014-03-06 14:19:08.708174	2014-03-06 14:19:54.42076	161	7	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2666	2014-03-06 14:20:20.744492	2014-03-06 14:21:09.326447	161	8	695A7607FE8A4E27AB80652C45C84FA8	1	f	f
2667	2014-03-06 14:21:29.388527	\N	161	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2668	2014-03-06 14:22:10.598185	\N	161	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2669	2014-03-06 14:22:26.570554	\N	161	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2670	2014-03-06 14:25:46.710624	\N	161	9	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
2671	2014-03-06 15:18:12.31169	\N	164	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
2673	2014-03-06 15:18:44.659492	2014-03-06 15:18:54.577457	164	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2672	2014-03-06 15:18:29.759566	2014-03-06 15:19:04.544394	203	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2674	2014-03-06 15:19:05.881805	2014-03-06 15:19:20.830064	164	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2675	2014-03-06 15:19:23.681989	\N	203	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2676	2014-03-06 15:19:39.865065	2014-03-06 15:19:57.394512	164	3	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2677	2014-03-06 15:20:27.845076	2014-03-06 15:20:36.852978	164	4	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2678	2014-03-06 15:26:39.668559	\N	192	14	0CFFCBC851984A4281C23D34FC400445	0	f	f
2679	2014-03-06 15:27:00.910766	2014-03-06 15:27:30.739999	192	14	0CFFCBC851984A4281C23D34FC400445	1	f	f
2680	2014-03-06 15:27:49.064361	\N	192	15	0CFFCBC851984A4281C23D34FC400445	0	f	f
2681	2014-03-06 15:28:03.736484	2014-03-06 15:28:22.168165	192	14	0CFFCBC851984A4281C23D34FC400445	1	f	f
2682	2014-03-06 15:28:36.33766	2014-03-06 15:29:00.331355	192	15	0CFFCBC851984A4281C23D34FC400445	1	f	f
2683	2014-03-06 15:29:18.272148	\N	192	16	0CFFCBC851984A4281C23D34FC400445	0	f	f
2684	2014-03-06 15:32:57.949076	2014-03-06 15:33:29.742918	203	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2685	2014-03-06 15:34:34.832778	\N	203	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2686	2014-03-06 15:35:36.559225	2014-03-06 15:36:04.401423	203	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
2687	2014-03-06 15:37:01.166676	\N	203	72	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2688	2014-03-06 15:38:03.438073	\N	203	71	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2689	2014-03-06 15:39:03.164021	\N	203	70	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2690	2014-03-06 15:39:19.893984	\N	203	69	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2691	2014-03-06 15:39:33.413383	\N	203	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2692	2014-03-06 15:41:19.34382	\N	203	68	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2693	2014-03-06 16:33:31.595527	\N	175	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2694	2014-03-06 16:33:58.439085	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2695	2014-03-06 16:34:13.480856	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2696	2014-03-06 16:34:36.461261	2014-03-06 16:34:44.216683	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2697	2014-03-06 16:34:57.652827	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2698	2014-03-06 16:35:28.076462	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2699	2014-03-06 16:35:44.111001	2014-03-06 16:35:49.863937	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2700	2014-03-06 16:36:24.993815	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2701	2014-03-06 16:36:44.258775	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2702	2014-03-06 16:36:57.85649	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2703	2014-03-06 16:37:12.608645	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2704	2014-03-06 16:38:05.078641	2014-03-06 16:38:11.244778	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2705	2014-03-06 16:38:23.756359	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2706	2014-03-06 16:39:02.067752	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2707	2014-03-06 16:40:22.354946	2014-03-06 16:40:28.902249	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2708	2014-03-06 16:44:01.593969	2014-03-06 16:44:25.87098	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2709	2014-03-06 16:44:55.205939	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2710	2014-03-06 16:46:39.990285	2014-03-06 16:46:56.023683	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2711	2014-03-06 16:47:13.045106	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2712	2014-03-06 16:47:41.885838	2014-03-06 16:48:16.40097	175	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2713	2014-03-06 16:48:45.559834	\N	175	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2714	2014-03-06 16:54:48.268233	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2715	2014-03-06 16:55:26.797014	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2716	2014-03-06 16:56:07.794469	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2717	2014-03-06 16:56:31.594523	2014-03-06 16:56:40.3564	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2718	2014-03-06 16:56:53.984847	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2719	2014-03-06 16:57:09.706844	2014-03-06 16:57:19.300976	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2720	2014-03-06 16:57:44.662686	\N	175	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2721	2014-03-06 16:58:30.809254	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2722	2014-03-06 17:01:15.504503	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2723	2014-03-06 17:16:53.973921	\N	268	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2724	2014-03-06 17:17:11.493666	\N	268	3	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2725	2014-03-06 23:49:08.909308	\N	7	13	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2726	2014-03-06 23:49:50.759576	\N	7	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2727	2014-03-06 23:50:04.186023	\N	7	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2728	2014-03-06 23:50:19.713311	\N	7	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2729	2014-03-07 12:29:24.890099	\N	1	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
2730	2014-03-07 12:30:24.170336	\N	203	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2731	2014-03-07 12:30:36.541683	\N	203	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2732	2014-03-07 18:36:56.828846	\N	383	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2733	2014-03-07 20:17:24.091715	\N	370	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2734	2014-03-07 20:17:36.517853	\N	370	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2735	2014-03-08 19:12:24.238794	2014-03-08 19:12:54.752802	191	22	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2736	2014-03-08 19:13:24.577843	\N	191	23	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2737	2014-03-08 19:13:42.819861	\N	191	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2738	2014-03-08 19:14:40.990654	\N	191	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2739	2014-03-08 19:15:43.196981	2014-03-08 19:16:08.177923	191	21	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2740	2014-03-08 19:16:20.98781	\N	191	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2741	2014-03-08 19:20:46.316519	2014-03-08 19:21:16.867854	191	21	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2742	2014-03-08 19:21:30.774594	\N	191	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2743	2014-03-08 19:22:23.362415	2014-03-08 19:22:48.473357	191	21	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2744	2014-03-08 19:23:02.382377	2014-03-08 19:24:18.981156	191	22	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2745	2014-03-08 19:24:30.41199	2014-03-08 19:24:54.517077	191	23	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2746	2014-03-08 19:25:05.923916	2014-03-08 19:25:27.594837	191	24	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2747	2014-03-08 19:25:39.111072	2014-03-08 19:26:05.288083	191	25	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2748	2014-03-08 19:26:18.328569	\N	191	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2749	2014-03-08 19:26:44.445337	2014-03-08 19:27:15.012004	191	25	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2750	2014-03-08 19:27:45.316575	\N	191	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2751	2014-03-08 19:29:13.248866	\N	191	26	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2752	2014-03-08 19:29:52.361829	2014-03-08 19:30:23.110321	191	26	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2753	2014-03-08 19:30:55.380006	\N	191	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2754	2014-03-08 19:31:46.7418	\N	191	27	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2755	2014-03-08 19:33:21.686759	2014-03-08 19:33:46.281814	191	27	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2756	2014-03-08 19:34:07.29343	\N	191	28	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2757	2014-03-08 19:34:40.741659	2014-03-08 19:35:04.660496	191	28	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2758	2014-03-08 19:35:25.381535	2014-03-08 19:35:47.694655	191	29	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2759	2014-03-08 19:37:08.904743	2014-03-08 19:37:40.144029	191	30	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2760	2014-03-08 19:37:53.309385	2014-03-08 19:38:24.345016	191	31	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2761	2014-03-08 19:38:52.597343	2014-03-08 19:39:30.008727	191	32	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2762	2014-03-08 19:39:41.849717	2014-03-08 19:40:13.930687	191	33	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2763	2014-03-08 19:40:25.569972	\N	191	34	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2764	2014-03-08 19:40:50.963544	2014-03-08 19:41:16.689661	191	33	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2765	2014-03-08 19:41:33.099537	2014-03-08 19:42:29.807341	191	34	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2766	2014-03-08 19:43:36.780007	2014-03-08 19:44:02.884543	191	35	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2767	2014-03-08 19:44:20.502376	2014-03-08 19:45:03.878608	191	36	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2768	2014-03-08 19:45:21.534696	\N	191	37	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2769	2014-03-08 19:45:56.70354	2014-03-08 19:46:26.153297	191	37	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2770	2014-03-08 19:46:38.171393	2014-03-08 19:47:27.502548	191	38	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2771	2014-03-08 19:47:42.996754	2014-03-08 19:48:28.325518	191	39	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2772	2014-03-08 19:48:54.498606	2014-03-08 19:49:25.894142	191	40	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2773	2014-03-08 19:49:51.629119	\N	191	41	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2774	2014-03-08 19:50:33.748145	\N	191	40	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2775	2014-03-08 21:34:49.963328	\N	191	39	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
2776	2014-03-08 21:35:22.206952	2014-03-08 21:35:53.487047	191	39	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2777	2014-03-08 21:36:13.445472	2014-03-08 21:38:24.840949	191	40	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2778	2014-03-08 21:38:37.291552	2014-03-08 21:39:11.809823	191	41	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2779	2014-03-08 21:39:30.810821	2014-03-08 21:39:56.310225	191	42	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
2780	2014-03-08 21:39:56.31299	\N	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2781	2014-03-08 21:40:11.643701	\N	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2782	2014-03-08 21:40:49.587556	\N	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2783	2014-03-08 21:41:07.737281	\N	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2784	2014-03-08 21:41:29.746966	2014-03-08 21:41:49.062732	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2785	2014-03-08 21:42:02.829529	\N	191	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2786	2014-03-08 21:42:15.596341	\N	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2787	2014-03-08 21:42:46.420196	2014-03-08 21:43:03.395469	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2788	2014-03-08 21:43:15.636939	\N	191	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2789	2014-03-08 21:43:30.916965	2014-03-08 21:43:49.893431	191	1	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2790	2014-03-08 21:44:02.695482	2014-03-08 21:44:26.708836	191	2	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2791	2014-03-08 21:44:39.134709	2014-03-08 21:45:03.852954	191	3	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2792	2014-03-08 21:45:17.543286	2014-03-08 21:45:46.144012	191	4	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2793	2014-03-08 21:46:00.985273	2014-03-08 21:46:30.106623	191	5	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2794	2014-03-08 21:46:45.546145	2014-03-08 21:47:12.709458	191	6	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2795	2014-03-08 21:47:24.855064	2014-03-08 21:47:56.419529	191	7	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2796	2014-03-08 21:48:08.836092	2014-03-08 21:48:36.666001	191	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2797	2014-03-08 21:48:48.512523	\N	191	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2798	2014-03-08 21:49:19.267783	\N	191	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2799	2014-03-09 09:47:14.594803	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2800	2014-03-09 09:47:33.325365	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2801	2014-03-09 09:47:45.801242	\N	421	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2802	2014-03-09 09:51:37.129834	2014-03-09 09:52:08.13703	191	7	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2803	2014-03-09 09:52:20.608908	\N	191	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	0	f	f
2804	2014-03-09 09:52:50.153667	2014-03-09 09:53:23.823424	191	7	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2805	2014-03-09 09:53:36.783274	2014-03-09 09:54:08.559678	191	8	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2806	2014-03-09 09:54:22.017874	2014-03-09 09:54:53.015698	191	9	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2807	2014-03-09 09:55:06.717041	2014-03-09 09:55:37.352482	191	10	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2808	2014-03-09 09:55:50.050456	2014-03-09 09:56:22.915675	191	11	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2809	2014-03-09 09:56:35.266589	2014-03-09 09:57:05.925099	191	12	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2810	2014-03-09 09:57:19.100391	2014-03-09 09:57:54.74227	191	13	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2811	2014-03-09 09:58:06.946572	2014-03-09 09:58:39.960736	191	14	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2812	2014-03-09 09:58:55.025176	2014-03-09 09:59:25.183802	191	15	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2813	2014-03-09 09:59:39.062227	2014-03-09 10:00:11.739945	191	16	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2814	2014-03-09 10:00:23.936839	2014-03-09 10:00:53.416405	191	17	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2815	2014-03-09 10:01:05.752201	2014-03-09 10:01:35.79477	191	18	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2816	2014-03-09 10:01:50.155304	2014-03-09 10:02:17.706048	191	19	ED150B29EFD14FF8B655FA3F2CA4FE6D	1	f	f
2817	2014-03-09 10:02:17.708792	\N	191	1	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2818	2014-03-09 10:02:31.800576	2014-03-09 10:02:59.479719	191	1	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
2819	2014-03-09 10:03:14.675787	2014-03-09 10:04:00.865282	191	2	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
2820	2014-03-09 10:04:39.011618	2014-03-09 10:05:11.436007	191	3	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
2821	2014-03-09 10:05:23.246118	2014-03-09 10:05:49.412004	191	4	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
2822	2014-03-09 10:06:02.316117	2014-03-09 10:06:35.766951	191	5	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
2823	2014-03-09 10:06:48.84602	\N	191	6	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2824	2014-03-09 10:07:01.126095	\N	191	6	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2825	2014-03-09 12:11:25.209297	\N	191	5	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2826	2014-03-09 12:12:02.216153	\N	191	5	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2827	2014-03-09 12:12:28.895577	\N	191	4	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2828	2014-03-09 12:12:52.663194	\N	191	3	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2829	2014-03-09 12:13:23.804823	\N	191	2	017AAEA9D22543A59A60C697FEBADD1B	0	f	f
2830	2014-03-10 08:44:15.843252	\N	324	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2831	2014-03-10 08:44:22.542804	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2832	2014-03-10 08:44:24.848281	\N	324	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2833	2014-03-10 08:44:28.595957	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2834	2014-03-10 08:44:36.429786	\N	305	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2835	2014-03-10 08:44:40.281746	\N	324	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2836	2014-03-10 08:44:40.930417	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2837	2014-03-10 08:44:48.660056	\N	300	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2838	2014-03-10 08:44:50.729077	\N	305	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2839	2014-03-10 08:44:52.893353	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2840	2014-03-10 08:45:04.400338	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2841	2014-03-10 08:45:04.893502	\N	305	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2842	2014-03-10 08:45:05.157161	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2843	2014-03-10 08:45:06.040744	\N	295	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2844	2014-03-10 08:45:12.835922	\N	324	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2845	2014-03-10 08:45:15.428142	\N	312	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
2847	2014-03-10 08:45:18.65015	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2848	2014-03-10 08:45:19.539991	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2846	2014-03-10 08:45:17.151097	2014-03-10 08:45:31.029138	295	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2849	2014-03-10 08:45:34.295716	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2850	2014-03-10 08:45:42.249439	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2851	2014-03-10 08:45:44.958061	\N	295	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2852	2014-03-10 08:45:45.809323	\N	304	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2853	2014-03-10 08:45:46.699998	\N	323	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2856	2014-03-10 08:46:00.258435	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2857	2014-03-10 08:46:00.532447	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2854	2014-03-10 08:45:52.359945	2014-03-10 08:46:09.616309	324	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2858	2014-03-10 08:46:09.655128	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2860	2014-03-10 08:46:15.756768	\N	325	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2855	2014-03-10 08:45:55.063178	2014-03-10 08:46:18.268534	323	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2861	2014-03-10 08:46:23.609154	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2859	2014-03-10 08:46:14.846429	2014-03-10 08:46:27.063155	305	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2862	2014-03-10 08:46:27.9671	\N	281	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2863	2014-03-10 08:46:29.825155	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2865	2014-03-10 08:46:34.575323	\N	304	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2866	2014-03-10 08:46:36.720446	2014-03-10 08:46:44.065165	303	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2869	2014-03-10 08:46:45.898632	\N	312	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2870	2014-03-10 08:46:46.277268	\N	293	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2871	2014-03-10 08:46:48.547474	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2872	2014-03-10 08:46:48.902956	\N	300	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2873	2014-03-10 08:46:52.396258	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2874	2014-03-10 08:46:54.171017	\N	315	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2868	2014-03-10 08:46:44.294801	2014-03-10 08:46:57.208878	304	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2877	2014-03-10 08:46:57.646968	\N	325	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2878	2014-03-10 08:46:57.677176	\N	303	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2864	2014-03-10 08:46:31.583568	2014-03-10 08:46:57.867346	323	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2879	2014-03-10 08:47:01.63391	\N	315	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2867	2014-03-10 08:46:41.886875	2014-03-10 08:47:02.145359	295	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2880	2014-03-10 08:47:04.276162	\N	324	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2876	2014-03-10 08:46:55.381426	2014-03-10 08:47:05.08329	312	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2881	2014-03-10 08:47:05.131284	\N	293	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2882	2014-03-10 08:47:08.574146	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2875	2014-03-10 08:46:55.027816	2014-03-10 08:47:12.572616	281	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2885	2014-03-10 08:47:13.659295	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2889	2014-03-10 08:47:17.645052	\N	324	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2886	2014-03-10 08:47:14.305135	2014-03-10 08:47:23.267731	315	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2891	2014-03-10 08:47:27.350176	\N	281	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2893	2014-03-10 08:47:28.211738	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2884	2014-03-10 08:47:12.077815	2014-03-10 08:47:31.284651	323	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2890	2014-03-10 08:47:19.979193	2014-03-10 08:47:32.666973	293	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2894	2014-03-10 08:47:35.159115	\N	300	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2883	2014-03-10 08:47:09.217435	2014-03-10 08:47:35.221312	304	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2888	2014-03-10 08:47:17.288075	2014-03-10 08:47:37.496636	312	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2892	2014-03-10 08:47:27.43475	2014-03-10 08:47:40.057579	305	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2896	2014-03-10 08:47:41.826135	\N	281	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2897	2014-03-10 08:47:42.536225	\N	325	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2887	2014-03-10 08:47:16.017705	2014-03-10 08:47:44.816913	295	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2900	2014-03-10 08:47:49.93013	\N	293	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2902	2014-03-10 08:47:51.825363	\N	305	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2895	2014-03-10 08:47:37.595889	2014-03-10 08:47:54.190522	324	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2899	2014-03-10 08:47:47.352602	2014-03-10 08:47:56.778888	303	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2904	2014-03-10 08:47:58.886638	\N	325	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2906	2014-03-10 08:48:01.793282	\N	293	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2908	2014-03-10 08:48:06.791733	\N	281	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2898	2014-03-10 08:47:47.036684	2014-03-10 08:48:07.470897	323	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2901	2014-03-10 08:47:49.990064	2014-03-10 08:48:12.144929	312	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2910	2014-03-10 08:48:13.161445	\N	300	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2911	2014-03-10 08:48:13.552386	\N	293	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2909	2014-03-10 08:48:06.970147	2014-03-10 08:48:20.811999	305	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2912	2014-03-10 08:48:25.334915	\N	312	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2903	2014-03-10 08:47:53.882767	2014-03-10 08:48:25.648121	304	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2905	2014-03-10 08:48:00.090576	2014-03-10 08:48:28.991225	295	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2916	2014-03-10 08:48:32.740991	\N	300	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2907	2014-03-10 08:48:06.729696	2014-03-10 08:48:36.228294	324	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2918	2014-03-10 08:48:36.239621	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2914	2014-03-10 08:48:25.77452	2014-03-10 08:48:36.531935	325	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2919	2014-03-10 08:48:37.654453	\N	303	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2913	2014-03-10 08:48:25.713093	2014-03-10 08:48:37.793822	281	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2915	2014-03-10 08:48:27.75737	2014-03-10 08:48:39.731488	293	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2921	2014-03-10 08:48:42.328885	\N	295	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2923	2014-03-10 08:48:46.463102	\N	317	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2917	2014-03-10 08:48:32.764438	2014-03-10 08:48:50.46685	305	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2926	2014-03-10 08:48:52.207694	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2927	2014-03-10 08:48:52.287211	\N	325	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2922	2014-03-10 08:48:44.629689	2014-03-10 08:48:53.389982	323	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2928	2014-03-10 08:48:55.647101	\N	281	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2929	2014-03-10 08:48:56.596295	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2930	2014-03-10 08:48:57.452913	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2932	2014-03-10 08:48:59.149157	\N	293	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2934	2014-03-10 08:49:06.534519	\N	323	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2925	2014-03-10 08:48:51.312691	2014-03-10 08:49:11.632757	317	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2924	2014-03-10 08:48:48.061452	2014-03-10 08:49:17.130259	324	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2931	2014-03-10 08:48:57.534352	2014-03-10 08:49:17.57746	312	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2933	2014-03-10 08:49:03.025859	2014-03-10 08:49:25.983606	305	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2935	2014-03-10 08:49:06.56102	\N	295	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2936	2014-03-10 08:49:07.862509	\N	325	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2938	2014-03-10 08:49:09.784525	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2920	2014-03-10 08:48:38.924307	2014-03-10 08:49:11.019343	304	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2939	2014-03-10 08:49:15.892734	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2940	2014-03-10 08:49:16.820517	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2942	2014-03-10 08:49:20.667283	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2937	2014-03-10 08:49:09.333705	2014-03-10 08:49:20.763546	303	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2944	2014-03-10 08:49:24.719443	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2945	2014-03-10 08:49:29.836553	\N	324	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2946	2014-03-10 08:49:30.178073	\N	312	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2941	2014-03-10 08:49:19.448726	2014-03-10 08:49:32.990867	325	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2949	2014-03-10 08:49:34.504142	\N	323	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2950	2014-03-10 08:49:37.66591	\N	295	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2952	2014-03-10 08:49:41.813621	\N	324	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2953	2014-03-10 08:49:41.947952	\N	293	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2954	2014-03-10 08:49:43.8955	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2955	2014-03-10 08:49:46.141788	\N	325	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2947	2014-03-10 08:49:31.772857	2014-03-10 08:49:49.467318	317	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2943	2014-03-10 08:49:24.364226	2014-03-10 08:49:50.164717	304	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2951	2014-03-10 08:49:37.671205	2014-03-10 08:49:58.853472	305	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2948	2014-03-10 08:49:33.688455	2014-03-10 08:49:59.525489	303	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2957	2014-03-10 08:49:49.41964	2014-03-10 08:50:01.833922	323	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2961	2014-03-10 08:50:03.98512	\N	304	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2956	2014-03-10 08:49:48.726362	2014-03-10 08:50:06.828175	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2963	2014-03-10 08:50:07.72105	\N	296	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
2964	2014-03-10 08:50:10.695752	\N	293	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2965	2014-03-10 08:50:14.662661	\N	323	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2962	2014-03-10 08:50:04.887127	2014-03-10 08:50:14.66478	325	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2966	2014-03-10 08:50:15.375445	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2968	2014-03-10 08:50:17.64937	\N	312	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2970	2014-03-10 08:50:20.721015	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2971	2014-03-10 08:50:22.569893	\N	296	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2973	2014-03-10 08:50:22.925357	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2958	2014-03-10 08:49:53.782001	2014-03-10 08:50:23.821293	324	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2960	2014-03-10 08:50:02.999045	2014-03-10 08:50:25.232371	317	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2975	2014-03-10 08:50:28.815283	\N	293	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2976	2014-03-10 08:50:33.718504	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2981	2014-03-10 08:50:39.319848	\N	317	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
2983	2014-03-10 08:50:41.883611	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
2967	2014-03-10 08:50:15.695944	2014-03-10 08:50:43.460888	303	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2977	2014-03-10 08:50:34.895014	2014-03-10 08:50:46.660132	296	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2980	2014-03-10 08:50:38.546771	2014-03-10 08:50:49.231981	293	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2969	2014-03-10 08:50:19.537629	2014-03-10 08:50:50.999849	305	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2979	2014-03-10 08:50:36.183994	2014-03-10 08:50:52.269274	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2974	2014-03-10 08:50:27.264199	2014-03-10 08:50:53.067498	325	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2959	2014-03-10 08:49:59.091343	2014-03-10 08:50:54.266421	295	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2982	2014-03-10 08:50:40.503385	2014-03-10 08:50:57.641599	323	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2972	2014-03-10 08:50:22.869897	2014-03-10 08:50:59.504638	304	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2978	2014-03-10 08:50:35.712877	2014-03-10 08:51:02.61619	324	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2987	2014-03-10 08:51:04.215414	\N	293	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2984	2014-03-10 08:50:57.425663	2014-03-10 08:51:10.699331	331	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2996	2014-03-10 08:51:18.093791	\N	293	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2997	2014-03-10 08:51:19.021044	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2985	2014-03-10 08:51:03.275495	2014-03-10 08:51:22.090799	317	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2998	2014-03-10 08:51:23.786131	\N	331	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2986	2014-03-10 08:51:03.4037	2014-03-10 08:51:29.089267	305	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2988	2014-03-10 08:51:04.507309	2014-03-10 08:51:29.167172	281	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2993	2014-03-10 08:51:14.175647	2014-03-10 08:51:31.561373	296	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2989	2014-03-10 08:51:04.88768	2014-03-10 08:51:33.628728	300	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2991	2014-03-10 08:51:10.3034	2014-03-10 08:51:35.274378	323	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2992	2014-03-10 08:51:11.569749	2014-03-10 08:51:36.237318	303	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3001	2014-03-10 08:51:36.553084	\N	331	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3003	2014-03-10 08:51:38.123774	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3004	2014-03-10 08:51:41.150788	\N	305	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2999	2014-03-10 08:51:30.180971	2014-03-10 08:51:43.210181	293	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
2994	2014-03-10 08:51:14.974683	2014-03-10 08:51:43.417165	324	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3006	2014-03-10 08:51:46.459131	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
2995	2014-03-10 08:51:18.011734	2014-03-10 08:51:47.367562	304	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3009	2014-03-10 08:51:48.150578	\N	303	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3000	2014-03-10 08:51:34.901315	2014-03-10 08:51:53.841939	317	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
2990	2014-03-10 08:51:07.843976	2014-03-10 08:51:59.942064	295	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3008	2014-03-10 08:51:48.056389	2014-03-10 08:52:05.179819	296	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3002	2014-03-10 08:51:37.02481	2014-03-10 08:52:10.094414	325	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3005	2014-03-10 08:51:41.342846	2014-03-10 08:52:10.996211	281	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3007	2014-03-10 08:51:47.85422	2014-03-10 08:52:12.155225	323	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3012	2014-03-10 08:51:57.793884	2014-03-10 08:52:12.290411	315	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3011	2014-03-10 08:51:57.725449	2014-03-10 08:52:18.855796	293	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3010	2014-03-10 08:51:56.195667	2014-03-10 08:52:22.800844	324	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3014	2014-03-10 08:51:59.764698	2014-03-10 08:52:25.832201	305	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3016	2014-03-10 08:52:03.760515	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3013	2014-03-10 08:51:58.536745	2014-03-10 08:52:12.097338	331	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3019	2014-03-10 08:52:12.596332	\N	295	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3020	2014-03-10 08:52:16.238054	\N	303	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3021	2014-03-10 08:52:18.978475	\N	296	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3022	2014-03-10 08:52:24.042255	\N	281	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3017	2014-03-10 08:52:07.384033	2014-03-10 08:52:24.905516	317	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3015	2014-03-10 08:52:00.832242	2014-03-10 08:52:27.527693	304	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3028	2014-03-10 08:52:32.523677	\N	295	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3029	2014-03-10 08:52:33.988641	\N	293	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3030	2014-03-10 08:52:37.654512	\N	305	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3018	2014-03-10 08:52:09.709339	2014-03-10 08:52:38.125957	300	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3031	2014-03-10 08:52:38.693598	\N	317	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3033	2014-03-10 08:52:41.108939	\N	281	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3034	2014-03-10 08:52:43.296497	\N	322	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3036	2014-03-10 08:52:49.99292	\N	317	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3027	2014-03-10 08:52:32.104493	2014-03-10 08:52:51.238844	296	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3037	2014-03-10 08:52:52.234415	\N	300	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3023	2014-03-10 08:52:24.502009	2014-03-10 08:52:52.272948	323	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3038	2014-03-10 08:52:52.290701	\N	304	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3039	2014-03-10 08:52:53.783619	\N	312	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3040	2014-03-10 08:52:54.254792	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3024	2014-03-10 08:52:24.927013	2014-03-10 08:52:55.292008	331	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3026	2014-03-10 08:52:32.002971	2014-03-10 08:52:57.890061	303	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3041	2014-03-10 08:52:58.219963	\N	317	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3025	2014-03-10 08:52:28.622186	2014-03-10 08:52:58.986531	325	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3042	2014-03-10 08:53:00.916802	\N	281	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3044	2014-03-10 08:53:07.169627	\N	295	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3032	2014-03-10 08:52:38.745356	2014-03-10 08:53:09.71213	324	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3046	2014-03-10 08:53:10.448279	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3035	2014-03-10 08:52:46.341484	2014-03-10 08:53:11.571175	293	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3047	2014-03-10 08:53:12.602776	\N	296	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3049	2014-03-10 08:53:14.131011	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3050	2014-03-10 08:53:15.793237	\N	325	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3051	2014-03-10 08:53:17.363347	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3055	2014-03-10 08:53:24.119861	\N	324	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3056	2014-03-10 08:53:24.404327	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3057	2014-03-10 08:53:25.327311	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3043	2014-03-10 08:53:04.140012	2014-03-10 08:53:25.904139	323	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3045	2014-03-10 08:53:09.343465	2014-03-10 08:53:30.531714	279	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3048	2014-03-10 08:53:14.081806	2014-03-10 08:53:42.501087	331	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3058	2014-03-10 08:53:34.526793	2014-03-10 08:53:44.785303	317	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3053	2014-03-10 08:53:20.482416	2014-03-10 08:53:46.420712	305	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3064	2014-03-10 08:53:49.26438	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3052	2014-03-10 08:53:19.58661	2014-03-10 08:53:49.326223	303	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3060	2014-03-10 08:53:38.848182	2014-03-10 08:53:49.814099	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3054	2014-03-10 08:53:21.033347	2014-03-10 08:53:53.103282	304	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3061	2014-03-10 08:53:38.856827	2014-03-10 08:53:57.111423	296	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3069	2014-03-10 08:53:59.561342	\N	317	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3070	2014-03-10 08:54:00.744103	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3071	2014-03-10 08:54:01.247849	\N	303	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3072	2014-03-10 08:54:02.434593	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3059	2014-03-10 08:53:38.843858	2014-03-10 08:54:05.160053	323	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3074	2014-03-10 08:54:07.802435	\N	307	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3062	2014-03-10 08:53:43.909151	2014-03-10 08:54:09.581116	279	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3075	2014-03-10 08:54:12.204381	\N	315	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3079	2014-03-10 08:54:17.583776	\N	323	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3063	2014-03-10 08:53:45.879491	2014-03-10 08:54:18.208843	324	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3080	2014-03-10 08:54:18.644225	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3081	2014-03-10 08:54:19.872148	\N	307	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3066	2014-03-10 08:53:56.024361	2014-03-10 08:54:19.903299	293	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3082	2014-03-10 08:54:23.737105	\N	312	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3068	2014-03-10 08:53:59.004744	2014-03-10 08:54:25.470598	331	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3076	2014-03-10 08:54:13.054638	2014-03-10 08:54:26.547945	317	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3065	2014-03-10 08:53:55.584969	2014-03-10 08:54:27.141728	325	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3067	2014-03-10 08:53:58.216192	2014-03-10 08:54:30.421325	305	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3077	2014-03-10 08:54:13.364639	2014-03-10 08:54:30.836868	296	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3086	2014-03-10 08:54:32.686827	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3087	2014-03-10 08:54:33.655376	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3084	2014-03-10 08:54:25.954592	2014-03-10 08:54:38.283155	315	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3091	2014-03-10 08:54:39.950654	\N	317	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3092	2014-03-10 08:54:41.076214	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3078	2014-03-10 08:54:17.577149	2014-03-10 08:54:46.030928	303	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3095	2014-03-10 08:54:43.590724	2014-03-10 08:54:52.618573	326	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3085	2014-03-10 08:54:31.729038	2014-03-10 08:54:57.124586	293	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3088	2014-03-10 08:54:33.740279	2014-03-10 08:55:03.940753	324	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3083	2014-03-10 08:54:24.126635	2014-03-10 08:55:06.300161	279	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3089	2014-03-10 08:54:35.928361	2014-03-10 08:55:06.867938	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3094	2014-03-10 08:54:43.124131	2014-03-10 08:55:10.596721	305	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3093	2014-03-10 08:54:41.089295	2014-03-10 08:55:20.967192	325	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3073	2014-03-10 08:54:05.543615	2014-03-10 08:54:44.173096	304	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3100	2014-03-10 08:54:55.644766	\N	307	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3101	2014-03-10 08:54:57.087808	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3096	2014-03-10 08:54:43.86199	2014-03-10 08:54:59.460007	296	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3103	2014-03-10 08:55:00.07132	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3102	2014-03-10 08:54:57.550373	2014-03-10 08:55:03.076694	312	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3099	2014-03-10 08:54:50.733534	2014-03-10 08:55:03.742854	315	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3106	2014-03-10 08:55:06.816022	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3107	2014-03-10 08:55:10.440227	\N	293	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3090	2014-03-10 08:54:38.279824	2014-03-10 08:55:11.188496	331	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3108	2014-03-10 08:55:12.413876	\N	308	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3109	2014-03-10 08:55:13.720802	\N	307	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3110	2014-03-10 08:55:13.730526	\N	296	7	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3115	2014-03-10 08:55:20.039987	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3117	2014-03-10 08:55:22.367625	\N	279	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3119	2014-03-10 08:55:22.911156	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3098	2014-03-10 08:54:49.700526	2014-03-10 08:55:23.049056	323	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3097	2014-03-10 08:54:48.929428	2014-03-10 08:55:24.505102	295	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3111	2014-03-10 08:55:13.751129	2014-03-10 08:55:26.057268	317	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3121	2014-03-10 08:55:26.563759	\N	293	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3112	2014-03-10 08:55:15.915261	2014-03-10 08:55:27.511653	315	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3114	2014-03-10 08:55:19.853168	2014-03-10 08:55:33.614464	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3104	2014-03-10 08:55:01.754276	2014-03-10 08:55:34.289083	304	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3123	2014-03-10 08:55:34.556209	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3105	2014-03-10 08:55:02.650086	2014-03-10 08:55:34.84135	303	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3124	2014-03-10 08:55:34.839797	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3126	2014-03-10 08:55:35.888514	\N	325	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3116	2014-03-10 08:55:21.69388	2014-03-10 08:55:36.310438	312	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3132	2014-03-10 08:55:42.112245	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3122	2014-03-10 08:55:27.485675	2014-03-10 08:55:45.833405	296	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3134	2014-03-10 08:55:48.357312	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3113	2014-03-10 08:55:16.603999	2014-03-10 08:55:49.905491	324	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3131	2014-03-10 08:55:40.075981	2014-03-10 08:55:53.239583	315	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3118	2014-03-10 08:55:22.60474	2014-03-10 08:55:54.703601	305	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3136	2014-03-10 08:55:55.352745	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3120	2014-03-10 08:55:23.763775	2014-03-10 08:55:56.335731	331	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3137	2014-03-10 08:55:58.077658	\N	308	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3130	2014-03-10 08:55:39.583392	2014-03-10 08:55:58.882363	307	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3129	2014-03-10 08:55:39.492019	2014-03-10 08:56:00.413276	293	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3139	2014-03-10 08:56:02.060297	\N	326	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3128	2014-03-10 08:55:38.145567	2014-03-10 08:56:02.220887	317	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3127	2014-03-10 08:55:36.822046	2014-03-10 08:56:02.778734	295	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3140	2014-03-10 08:56:04.207838	\N	303	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3141	2014-03-10 08:56:06.776484	\N	305	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3125	2014-03-10 08:55:35.514833	2014-03-10 08:56:06.821058	323	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3133	2014-03-10 08:55:45.46999	2014-03-10 08:56:07.932655	281	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3143	2014-03-10 08:56:09.558726	\N	331	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3145	2014-03-10 08:56:12.194132	\N	308	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3146	2014-03-10 08:56:13.75791	\N	307	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3138	2014-03-10 08:55:59.010602	2014-03-10 08:56:14.811311	296	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3144	2014-03-10 08:56:09.823889	2014-03-10 08:56:15.498533	300	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3151	2014-03-10 08:56:18.198579	\N	303	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3142	2014-03-10 08:56:07.14658	2014-03-10 08:56:25.658084	312	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3154	2014-03-10 08:56:26.832165	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3158	2014-03-10 08:56:29.89908	\N	300	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3135	2014-03-10 08:55:50.343643	2014-03-10 08:56:30.184935	304	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3148	2014-03-10 08:56:14.100749	2014-03-10 08:56:37.509331	317	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3147	2014-03-10 08:56:13.849733	2014-03-10 08:56:37.549021	293	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3162	2014-03-10 08:56:40.837261	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3157	2014-03-10 08:56:28.277589	2014-03-10 08:56:40.889726	315	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3149	2014-03-10 08:56:15.176706	2014-03-10 08:56:41.935385	295	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3155	2014-03-10 08:56:27.261323	2014-03-10 08:56:43.786633	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3153	2014-03-10 08:56:23.516791	2014-03-10 08:56:44.161716	326	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3163	2014-03-10 08:56:44.364673	\N	304	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3150	2014-03-10 08:56:16.118309	2014-03-10 08:56:46.270304	325	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3165	2014-03-10 08:56:49.300759	\N	317	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3159	2014-03-10 08:56:30.828849	2014-03-10 08:56:51.091687	296	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3152	2014-03-10 08:56:19.680404	2014-03-10 08:56:53.635783	323	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3170	2014-03-10 08:56:58.714783	\N	326	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3156	2014-03-10 08:56:27.272329	2014-03-10 08:57:00.034888	305	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3172	2014-03-10 08:57:00.191729	\N	295	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3173	2014-03-10 08:57:00.861111	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3174	2014-03-10 08:57:04.10898	\N	296	9	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3161	2014-03-10 08:56:35.787753	2014-03-10 08:57:07.274719	331	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3164	2014-03-10 08:56:46.3135	2014-03-10 08:57:08.286108	312	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3168	2014-03-10 08:56:56.979989	2014-03-10 08:57:11.561342	315	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3166	2014-03-10 08:56:50.448035	2014-03-10 08:57:15.465144	293	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3167	2014-03-10 08:56:52.521621	2014-03-10 08:57:19.054788	281	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3169	2014-03-10 08:56:57.178428	2014-03-10 08:57:23.455491	307	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3171	2014-03-10 08:57:00.104361	2014-03-10 08:57:40.205119	325	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3160	2014-03-10 08:56:31.231772	2014-03-10 08:57:05.014175	324	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3175	2014-03-10 08:57:05.931717	\N	323	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3176	2014-03-10 08:57:06.282014	\N	279	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3178	2014-03-10 08:57:15.739975	\N	305	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3181	2014-03-10 08:57:20.178526	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3184	2014-03-10 08:57:29.860305	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3185	2014-03-10 08:57:31.528979	\N	281	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3177	2014-03-10 08:57:12.181145	2014-03-10 08:57:33.321359	317	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3187	2014-03-10 08:57:34.659529	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3182	2014-03-10 08:57:27.913331	2014-03-10 08:57:36.26148	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3188	2014-03-10 08:57:37.385539	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3193	2014-03-10 08:57:43.546065	\N	323	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3198	2014-03-10 08:57:48.863373	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3183	2014-03-10 08:57:29.580995	2014-03-10 08:57:49.195207	296	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3200	2014-03-10 08:57:50.811269	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3201	2014-03-10 08:57:52.784737	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3180	2014-03-10 08:57:19.813437	2014-03-10 08:57:55.146686	331	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3179	2014-03-10 08:57:17.904026	2014-03-10 08:57:55.300732	324	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3195	2014-03-10 08:57:44.9733	2014-03-10 08:57:56.319218	279	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3186	2014-03-10 08:57:32.649516	2014-03-10 08:57:59.883229	312	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3203	2014-03-10 08:58:02.437693	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3196	2014-03-10 08:57:46.760905	2014-03-10 08:58:04.591537	315	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3194	2014-03-10 08:57:44.976949	2014-03-10 08:58:08.329163	317	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3208	2014-03-10 08:58:09.390637	\N	281	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3191	2014-03-10 08:57:41.159047	2014-03-10 08:58:09.832488	305	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3192	2014-03-10 08:57:42.270135	2014-03-10 08:58:11.557506	295	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3197	2014-03-10 08:57:48.337421	2014-03-10 08:58:13.703089	293	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3205	2014-03-10 08:58:03.963636	2014-03-10 08:58:14.585863	303	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3190	2014-03-10 08:57:40.135035	2014-03-10 08:58:16.69202	326	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3204	2014-03-10 08:58:03.922507	2014-03-10 08:58:18.63159	296	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3213	2014-03-10 08:58:19.387067	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3189	2014-03-10 08:57:39.69574	2014-03-10 08:58:19.576931	307	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3214	2014-03-10 08:58:20.143808	\N	317	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3199	2014-03-10 08:57:49.300176	2014-03-10 08:58:20.641567	304	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3210	2014-03-10 08:58:16.614048	2014-03-10 08:58:20.909031	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3216	2014-03-10 08:58:25.837692	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3218	2014-03-10 08:58:29.68847	\N	303	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3211	2014-03-10 08:58:18.795005	2014-03-10 08:58:30.186379	315	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3202	2014-03-10 08:57:58.982651	2014-03-10 08:58:30.920709	325	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3220	2014-03-10 08:58:31.187875	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3209	2014-03-10 08:58:11.019705	2014-03-10 08:58:33.015483	279	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3224	2014-03-10 08:58:38.429387	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3207	2014-03-10 08:58:09.080038	2014-03-10 08:58:40.017601	324	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3225	2014-03-10 08:58:40.047105	\N	293	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3212	2014-03-10 08:58:19.224073	2014-03-10 08:58:40.131718	312	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3226	2014-03-10 08:58:43.6439	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3227	2014-03-10 08:58:44.168858	\N	317	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3229	2014-03-10 08:58:46.078308	\N	300	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3230	2014-03-10 08:58:47.913343	\N	315	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3231	2014-03-10 08:58:48.237522	\N	325	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3221	2014-03-10 08:58:32.583725	2014-03-10 08:58:49.966164	296	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3206	2014-03-10 08:58:07.899172	2014-03-10 08:58:50.350234	331	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3217	2014-03-10 08:58:26.137852	2014-03-10 08:58:53.800983	295	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3215	2014-03-10 08:58:22.152067	2014-03-10 08:58:55.928712	305	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3235	2014-03-10 08:58:56.789112	\N	303	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3236	2014-03-10 08:59:00.530751	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3222	2014-03-10 08:58:33.374898	2014-03-10 08:59:05.185701	304	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3240	2014-03-10 08:59:05.511329	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3223	2014-03-10 08:58:34.761068	2014-03-10 08:59:05.580868	307	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3237	2014-03-10 08:59:02.061033	2014-03-10 08:59:06.019077	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3242	2014-03-10 08:59:06.740511	\N	296	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3219	2014-03-10 08:58:30.584179	2014-03-10 08:59:07.444812	326	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3243	2014-03-10 08:59:08.062479	\N	295	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3244	2014-03-10 08:59:08.129477	\N	305	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3241	2014-03-10 08:59:06.086968	2014-03-10 08:59:11.140053	300	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3238	2014-03-10 08:59:02.863813	2014-03-10 08:59:15.648184	315	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3228	2014-03-10 08:58:46.010957	2014-03-10 08:59:16.426232	279	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3234	2014-03-10 08:58:56.76822	2014-03-10 08:59:19.179417	293	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3249	2014-03-10 08:59:20.891163	\N	296	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3233	2014-03-10 08:58:54.63974	2014-03-10 08:59:21.678287	312	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3252	2014-03-10 08:59:22.828878	\N	307	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3232	2014-03-10 08:58:52.587637	2014-03-10 08:59:23.596934	324	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3239	2014-03-10 08:59:05.390799	2014-03-10 08:59:33.12426	317	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3253	2014-03-10 08:59:23.017623	2014-03-10 08:59:36.161783	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3248	2014-03-10 08:59:20.835741	2014-03-10 08:59:44.11628	322	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3246	2014-03-10 08:59:17.872881	2014-03-10 08:59:48.529323	304	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3245	2014-03-10 08:59:14.256675	2014-03-10 08:59:50.42245	331	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3250	2014-03-10 08:59:21.615674	2014-03-10 08:59:56.015052	326	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3247	2014-03-10 08:59:20.11209	2014-03-10 08:59:56.10402	308	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3254	2014-03-10 08:59:26.436525	2014-03-10 09:00:06.764939	325	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3255	2014-03-10 08:59:28.722261	\N	315	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3251	2014-03-10 08:59:21.943982	2014-03-10 08:59:30.203275	303	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3259	2014-03-10 08:59:34.293708	\N	305	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3258	2014-03-10 08:59:33.992563	2014-03-10 08:59:49.594892	296	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3264	2014-03-10 08:59:52.636879	\N	281	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3257	2014-03-10 08:59:32.995741	2014-03-10 08:59:54.498734	293	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3267	2014-03-10 08:59:57.176109	\N	307	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3268	2014-03-10 08:59:57.666627	\N	322	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3260	2014-03-10 08:59:42.87153	2014-03-10 09:00:00.084689	303	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3269	2014-03-10 09:00:02.683507	\N	304	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3271	2014-03-10 09:00:03.957423	\N	331	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3256	2014-03-10 08:59:29.585658	2014-03-10 09:00:04.171126	279	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3272	2014-03-10 09:00:04.342651	\N	305	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3261	2014-03-10 08:59:42.96584	2014-03-10 09:00:06.19686	312	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3274	2014-03-10 09:00:09.096802	\N	308	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3275	2014-03-10 09:00:09.442948	\N	326	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3277	2014-03-10 09:00:13.443834	\N	281	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3265	2014-03-10 08:59:53.12726	2014-03-10 09:00:16.624884	300	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3262	2014-03-10 08:59:45.075685	2014-03-10 09:00:17.831089	317	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3278	2014-03-10 09:00:18.322447	\N	312	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3279	2014-03-10 09:00:19.700464	\N	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3270	2014-03-10 09:00:03.548151	2014-03-10 09:00:21.831351	296	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3281	2014-03-10 09:00:21.834365	\N	296	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
3266	2014-03-10 08:59:53.303321	2014-03-10 09:00:23.284931	295	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3263	2014-03-10 08:59:45.094513	2014-03-10 09:00:24.128994	324	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3282	2014-03-10 09:00:24.679295	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3276	2014-03-10 09:00:12.785466	2014-03-10 09:00:28.447908	303	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3283	2014-03-10 09:00:28.567129	\N	326	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3273	2014-03-10 09:00:07.379637	2014-03-10 09:00:29.360623	293	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3284	2014-03-10 09:00:29.587126	\N	317	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3287	2014-03-10 09:00:37.60882	\N	324	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3288	2014-03-10 09:00:40.385612	\N	304	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3289	2014-03-10 09:00:40.802299	\N	279	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3291	2014-03-10 09:00:41.680579	\N	296	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3294	2014-03-10 09:00:43.05888	\N	293	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3286	2014-03-10 09:00:34.355722	2014-03-10 09:00:49.080271	281	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3298	2014-03-10 09:00:54.290929	\N	307	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3280	2014-03-10 09:00:20.525913	2014-03-10 09:00:57.669601	325	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3296	2014-03-10 09:00:43.211966	2014-03-10 09:00:58.833414	303	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3301	2014-03-10 09:00:59.918881	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3285	2014-03-10 09:00:31.655104	2014-03-10 09:01:00.889837	300	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3303	2014-03-10 09:01:01.020564	\N	317	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3295	2014-03-10 09:00:43.20193	2014-03-10 09:01:03.08393	308	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3297	2014-03-10 09:00:51.728105	2014-03-10 09:01:06.364393	296	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3293	2014-03-10 09:00:43.003772	2014-03-10 09:01:12.269354	305	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3306	2014-03-10 09:01:12.267715	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3307	2014-03-10 09:01:14.103057	\N	325	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3308	2014-03-10 09:01:15.181565	\N	317	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3304	2014-03-10 09:01:04.697353	2014-03-10 09:01:16.829489	315	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3309	2014-03-10 09:01:17.824106	\N	307	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3290	2014-03-10 09:00:41.405515	2014-03-10 09:01:18.573702	312	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3310	2014-03-10 09:01:19.040511	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3314	2014-03-10 09:01:19.498746	\N	303	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3315	2014-03-10 09:01:19.857034	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3316	2014-03-10 09:01:19.867862	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3292	2014-03-10 09:00:42.244908	2014-03-10 09:01:20.449431	295	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3302	2014-03-10 09:01:00.853419	2014-03-10 09:01:22.293516	281	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3299	2014-03-10 09:00:56.130146	2014-03-10 09:01:30.00382	326	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3318	2014-03-10 09:01:30.703762	\N	325	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3319	2014-03-10 09:01:31.499364	\N	305	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3320	2014-03-10 09:01:32.040489	\N	279	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3321	2014-03-10 09:01:32.17753	\N	315	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3324	2014-03-10 09:01:39.58255	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3305	2014-03-10 09:01:04.696235	2014-03-10 09:01:39.995609	304	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3300	2014-03-10 09:00:58.146507	2014-03-10 09:01:41.404728	331	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3326	2014-03-10 09:01:42.943046	\N	326	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3313	2014-03-10 09:01:19.235875	2014-03-10 09:01:44.115467	296	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3327	2014-03-10 09:01:44.551971	\N	307	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3328	2014-03-10 09:01:44.899304	\N	295	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3329	2014-03-10 09:01:45.634453	\N	315	10	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3312	2014-03-10 09:01:19.224014	2014-03-10 09:01:52.035661	324	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3311	2014-03-10 09:01:19.179659	2014-03-10 09:01:52.038314	308	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3323	2014-03-10 09:01:38.400323	2014-03-10 09:01:54.354496	303	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3317	2014-03-10 09:01:26.892591	2014-03-10 09:01:55.586279	312	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3334	2014-03-10 09:01:56.330384	\N	296	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3322	2014-03-10 09:01:34.446007	2014-03-10 09:02:06.721509	281	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3335	2014-03-10 09:01:58.783196	2014-03-10 09:02:23.683446	300	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3330	2014-03-10 09:01:53.14036	2014-03-10 09:02:24.405083	304	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3332	2014-03-10 09:01:53.796201	2014-03-10 09:02:29.542488	293	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3331	2014-03-10 09:01:53.793473	2014-03-10 09:02:34.002832	331	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3325	2014-03-10 09:01:39.636216	2014-03-10 09:02:01.461264	317	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3338	2014-03-10 09:02:02.356606	\N	323	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3341	2014-03-10 09:02:04.852766	\N	307	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3342	2014-03-10 09:02:05.475257	\N	308	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3337	2014-03-10 09:02:01.962196	2014-03-10 09:02:15.639701	315	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3346	2014-03-10 09:02:16.175098	\N	317	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3343	2014-03-10 09:02:07.528218	2014-03-10 09:02:21.158089	303	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3349	2014-03-10 09:02:21.171375	\N	307	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3351	2014-03-10 09:02:21.939258	\N	279	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3336	2014-03-10 09:02:01.547834	2014-03-10 09:02:25.319927	305	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3345	2014-03-10 09:02:15.045911	2014-03-10 09:02:33.747513	296	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3339	2014-03-10 09:02:02.835156	2014-03-10 09:02:35.503866	295	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3333	2014-03-10 09:01:54.583388	2014-03-10 09:02:36.835439	325	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3355	2014-03-10 09:02:37.24737	\N	305	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3340	2014-03-10 09:02:04.655632	2014-03-10 09:02:38.951298	324	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3352	2014-03-10 09:02:28.526811	2014-03-10 09:02:42.683796	315	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3350	2014-03-10 09:02:21.584274	2014-03-10 09:02:44.803738	323	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3358	2014-03-10 09:02:46.029611	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3359	2014-03-10 09:02:46.254283	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3348	2014-03-10 09:02:19.175043	2014-03-10 09:02:46.982976	281	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3354	2014-03-10 09:02:34.943534	2014-03-10 09:02:50.187	303	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3363	2014-03-10 09:02:51.597047	\N	305	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3344	2014-03-10 09:02:14.503613	2014-03-10 09:02:53.621658	326	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3347	2014-03-10 09:02:18.789968	2014-03-10 09:02:53.673534	308	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3353	2014-03-10 09:02:32.464258	2014-03-10 09:02:54.565266	312	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3365	2014-03-10 09:02:56.204639	\N	315	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3367	2014-03-10 09:02:59.407813	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3366	2014-03-10 09:02:58.161597	2014-03-10 09:03:03.092907	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3372	2014-03-10 09:03:04.369973	\N	317	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3357	2014-03-10 09:02:44.560675	2014-03-10 09:03:07.204813	293	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3375	2014-03-10 09:03:09.004654	\N	315	10	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3356	2014-03-10 09:02:37.245342	2014-03-10 09:03:11.596926	304	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3377	2014-03-10 09:03:12.373117	\N	317	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3360	2014-03-10 09:02:46.538097	2014-03-10 09:03:14.286946	296	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3379	2014-03-10 09:03:15.916221	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3362	2014-03-10 09:02:47.462223	2014-03-10 09:03:16.601313	295	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3380	2014-03-10 09:03:16.65543	\N	326	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3371	2014-03-10 09:03:00.817157	2014-03-10 09:03:19.704404	307	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3368	2014-03-10 09:02:59.543497	2014-03-10 09:03:19.831977	323	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3361	2014-03-10 09:02:47.267393	2014-03-10 09:03:24.093857	331	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3364	2014-03-10 09:02:51.794785	2014-03-10 09:03:26.289029	324	18	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3376	2014-03-10 09:03:12.343012	2014-03-10 09:03:26.710227	303	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3373	2014-03-10 09:03:05.107445	2014-03-10 09:03:27.008644	305	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3369	2014-03-10 09:02:59.627238	2014-03-10 09:03:30.257407	325	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3370	2014-03-10 09:03:00.797445	2014-03-10 09:03:31.692149	281	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3383	2014-03-10 09:03:29.750924	2014-03-10 09:03:34.792142	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3386	2014-03-10 09:03:34.886223	\N	323	7	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3382	2014-03-10 09:03:22.018498	2014-03-10 09:03:35.182772	315	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3378	2014-03-10 09:03:12.808639	2014-03-10 09:03:40.072946	279	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3393	2014-03-10 09:03:41.633943	\N	324	19	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3374	2014-03-10 09:03:06.470846	2014-03-10 09:03:44.525383	308	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3381	2014-03-10 09:03:20.000031	2014-03-10 09:03:46.975892	293	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3401	2014-03-10 09:03:57.071431	\N	308	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3388	2014-03-10 09:03:37.765615	2014-03-10 09:03:57.148256	317	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3403	2014-03-10 09:03:58.442517	\N	324	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3384	2014-03-10 09:03:30.365162	2014-03-10 09:03:59.275962	296	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3399	2014-03-10 09:03:49.050687	2014-03-10 09:04:01.892818	315	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3394	2014-03-10 09:03:44.06016	2014-03-10 09:04:02.41591	303	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3392	2014-03-10 09:03:40.278332	2014-03-10 09:04:04.638636	312	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3398	2014-03-10 09:03:46.734376	2014-03-10 09:04:04.956793	322	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3389	2014-03-10 09:03:38.104394	2014-03-10 09:04:05.697077	326	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3406	2014-03-10 09:04:06.206829	\N	317	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	2	f	f
3391	2014-03-10 09:03:39.028727	2014-03-10 09:04:07.866689	305	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3396	2014-03-10 09:03:44.085349	2014-03-10 09:04:09.994469	281	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3390	2014-03-10 09:03:38.708551	2014-03-10 09:04:11.984293	300	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3407	2014-03-10 09:04:12.68723	\N	296	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3385	2014-03-10 09:03:34.178506	2014-03-10 09:04:12.882258	307	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3387	2014-03-10 09:03:36.343305	2014-03-10 09:04:13.581891	331	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3395	2014-03-10 09:03:44.07846	2014-03-10 09:04:16.957645	295	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3410	2014-03-10 09:04:17.676475	\N	322	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3397	2014-03-10 09:03:45.21054	2014-03-10 09:04:18.966656	325	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3411	2014-03-10 09:04:19.458427	\N	315	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3412	2014-03-10 09:04:19.551802	\N	305	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3405	2014-03-10 09:04:01.708642	2014-03-10 09:04:21.242813	323	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3414	2014-03-10 09:04:24.445326	\N	317	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3409	2014-03-10 09:04:17.545026	2014-03-10 09:04:34.534828	303	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3400	2014-03-10 09:03:55.702768	2014-03-10 09:04:35.225549	279	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3408	2014-03-10 09:04:16.548761	2014-03-10 09:04:37.027082	312	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3413	2014-03-10 09:04:22.943522	2014-03-10 09:04:59.162076	281	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3415	2014-03-10 09:04:25.441355	\N	296	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3417	2014-03-10 09:04:28.011464	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3404	2014-03-10 09:04:00.906535	2014-03-10 09:04:31.776621	293	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3419	2014-03-10 09:04:31.783696	\N	315	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3420	2014-03-10 09:04:32.037018	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3421	2014-03-10 09:04:32.411003	\N	305	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3422	2014-03-10 09:04:35.656001	\N	307	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3402	2014-03-10 09:03:57.204232	2014-03-10 09:04:36.69541	304	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3428	2014-03-10 09:04:39.641926	\N	317	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3431	2014-03-10 09:04:43.927704	\N	293	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3429	2014-03-10 09:04:40.128453	2014-03-10 09:04:53.896543	315	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3435	2014-03-10 09:04:57.783682	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3416	2014-03-10 09:04:26.064225	2014-03-10 09:04:59.164772	331	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3436	2014-03-10 09:05:00.14386	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3418	2014-03-10 09:04:28.868082	2014-03-10 09:05:01.530261	324	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3437	2014-03-10 09:05:02.1516	\N	293	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3424	2014-03-10 09:04:36.707585	2014-03-10 09:05:02.654986	323	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3423	2014-03-10 09:04:35.687586	2014-03-10 09:05:03.114593	295	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3430	2014-03-10 09:04:42.675527	2014-03-10 09:05:05.147822	296	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3425	2014-03-10 09:04:37.719739	2014-03-10 09:05:07.079046	308	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3442	2014-03-10 09:05:12.234596	\N	281	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3426	2014-03-10 09:04:38.388264	2014-03-10 09:05:13.724431	326	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3434	2014-03-10 09:04:55.413917	2014-03-10 09:05:16.089313	312	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3444	2014-03-10 09:05:16.143192	\N	317	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	0	f	f
3427	2014-03-10 09:04:38.586901	2014-03-10 09:05:18.140728	325	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3446	2014-03-10 09:05:19.277764	\N	293	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3439	2014-03-10 09:05:07.152329	2014-03-10 09:05:24.657729	315	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3433	2014-03-10 09:04:52.774355	2014-03-10 09:05:25.511732	304	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3440	2014-03-10 09:05:09.577167	2014-03-10 09:05:28.206695	303	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3451	2014-03-10 09:05:23.893556	2014-03-10 09:05:28.259554	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3452	2014-03-10 09:05:30.389129	\N	326	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3438	2014-03-10 09:05:03.379835	2014-03-10 09:05:31.199127	305	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3453	2014-03-10 09:05:33.503411	\N	293	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3432	2014-03-10 09:04:50.104512	2014-03-10 09:05:34.449628	279	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3456	2014-03-10 09:05:40.484939	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3449	2014-03-10 09:05:19.90902	2014-03-10 09:05:41.197022	323	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3445	2014-03-10 09:05:17.763082	2014-03-10 09:05:41.942863	296	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3443	2014-03-10 09:05:14.154839	2014-03-10 09:05:45.249261	324	18	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3448	2014-03-10 09:05:19.617877	2014-03-10 09:05:46.098023	307	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3460	2014-03-10 09:05:49.142188	\N	326	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3461	2014-03-10 09:05:50.108702	\N	293	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3462	2014-03-10 09:05:50.919771	\N	303	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3441	2014-03-10 09:05:11.579076	2014-03-10 09:05:52.792474	331	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3447	2014-03-10 09:05:19.282289	2014-03-10 09:05:53.233784	308	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3454	2014-03-10 09:05:36.630187	2014-03-10 09:05:57.972579	315	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3450	2014-03-10 09:05:23.48085	2014-03-10 09:06:00.176646	295	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3469	2014-03-10 09:06:02.145875	\N	317	1	3DEE205D86BC461FA4271EF4BD190A0C	2	f	f
3457	2014-03-10 09:05:43.374864	2014-03-10 09:06:07.883662	305	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3472	2014-03-10 09:06:08.176184	\N	308	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3473	2014-03-10 09:06:10.437819	\N	303	10	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3463	2014-03-10 09:05:51.564601	2014-03-10 09:06:16.458882	312	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3466	2014-03-10 09:05:56.010747	2014-03-10 09:06:17.120647	323	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3478	2014-03-10 09:06:18.763561	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3458	2014-03-10 09:05:45.68377	2014-03-10 09:06:19.321077	281	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3455	2014-03-10 09:05:39.743243	2014-03-10 09:06:20.244882	325	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3464	2014-03-10 09:05:54.824505	2014-03-10 09:06:21.212367	300	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3467	2014-03-10 09:05:56.816845	2014-03-10 09:06:21.530436	296	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3480	2014-03-10 09:06:27.14453	\N	303	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3459	2014-03-10 09:05:46.951618	2014-03-10 09:06:28.502355	279	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3465	2014-03-10 09:05:55.438048	2014-03-10 09:06:30.148098	304	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3482	2014-03-10 09:06:30.69878	\N	312	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3484	2014-03-10 09:06:31.981637	\N	323	10	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3474	2014-03-10 09:06:11.161453	2014-03-10 09:06:35.361692	315	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3470	2014-03-10 09:06:04.082635	2014-03-10 09:06:35.87286	307	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3486	2014-03-10 09:06:36.448798	\N	308	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3477	2014-03-10 09:06:16.411847	2014-03-10 09:06:37.83355	293	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3468	2014-03-10 09:05:58.723578	2014-03-10 09:06:39.315084	324	19	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3488	2014-03-10 09:06:40.794299	\N	279	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3490	2014-03-10 09:06:43.304659	\N	300	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3491	2014-03-10 09:06:46.028636	\N	304	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3471	2014-03-10 09:06:04.824025	2014-03-10 09:06:47.71796	331	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3492	2014-03-10 09:06:46.603415	2014-03-10 09:06:50.809927	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3479	2014-03-10 09:06:20.7166	2014-03-10 09:06:53.311785	305	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3475	2014-03-10 09:06:12.226734	2014-03-10 09:06:54.418111	317	1	3DEE205D86BC461FA4271EF4BD190A0C	1	f	f
3485	2014-03-10 09:06:33.778939	2014-03-10 09:06:56.727737	296	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3476	2014-03-10 09:06:14.781797	2014-03-10 09:06:59.864627	326	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3487	2014-03-10 09:06:40.062152	2014-03-10 09:07:03.990998	303	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3483	2014-03-10 09:06:31.833623	2014-03-10 09:07:05.69095	281	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3481	2014-03-10 09:06:30.580892	2014-03-10 09:07:06.057936	295	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3489	2014-03-10 09:06:43.224784	2014-03-10 09:07:15.329321	325	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3496	2014-03-10 09:06:51.063126	\N	308	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3500	2014-03-10 09:07:04.002098	\N	331	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3502	2014-03-10 09:07:05.862419	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3503	2014-03-10 09:07:10.362322	\N	308	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3493	2014-03-10 09:06:47.848572	2014-03-10 09:07:10.433793	323	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3505	2014-03-10 09:07:13.054521	\N	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3506	2014-03-10 09:07:13.050329	\N	317	2	3DEE205D86BC461FA4271EF4BD190A0C	0	f	f
3494	2014-03-10 09:06:48.436772	2014-03-10 09:07:13.507638	315	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3495	2014-03-10 09:06:50.49835	2014-03-10 09:07:15.239302	293	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3499	2014-03-10 09:06:56.375558	2014-03-10 09:07:18.721036	300	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3512	2014-03-10 09:07:23.718284	\N	308	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3498	2014-03-10 09:06:53.327993	2014-03-10 09:07:23.826495	307	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3497	2014-03-10 09:06:51.899929	2014-03-10 09:07:26.217119	324	20	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3501	2014-03-10 09:07:04.803559	2014-03-10 09:07:28.086435	305	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3518	2014-03-10 09:07:32.380818	\N	325	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3519	2014-03-10 09:07:33.774706	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3520	2014-03-10 09:07:38.247921	\N	324	21	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3504	2014-03-10 09:07:10.59494	2014-03-10 09:07:38.707044	296	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3521	2014-03-10 09:07:39.428887	\N	308	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3523	2014-03-10 09:07:41.841712	\N	307	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3524	2014-03-10 09:07:43.586689	\N	331	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3507	2014-03-10 09:07:15.639574	2014-03-10 09:07:44.50702	326	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3525	2014-03-10 09:07:45.78504	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3508	2014-03-10 09:07:18.0683	2014-03-10 09:07:46.882037	303	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3511	2014-03-10 09:07:23.713763	2014-03-10 09:07:48.546973	312	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3526	2014-03-10 09:07:49.911055	\N	308	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3513	2014-03-10 09:07:25.507112	2014-03-10 09:07:50.595492	323	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3516	2014-03-10 09:07:27.557696	2014-03-10 09:07:51.949924	293	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3510	2014-03-10 09:07:21.449869	2014-03-10 09:07:52.848292	295	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3514	2014-03-10 09:07:25.679747	2014-03-10 09:07:53.675806	315	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3509	2014-03-10 09:07:19.706085	2014-03-10 09:07:56.62021	281	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3529	2014-03-10 09:08:00.148764	\N	326	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3528	2014-03-10 09:07:56.311756	2014-03-10 09:08:00.197518	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3531	2014-03-10 09:08:00.557817	\N	312	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3532	2014-03-10 09:08:01.2061	\N	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3534	2014-03-10 09:08:01.99747	\N	317	1	5E6A3E3B939B4577B104FA8658206E9E	2	f	f
3535	2014-03-10 09:08:02.568971	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3536	2014-03-10 09:08:04.267176	\N	293	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3517	2014-03-10 09:07:31.076865	2014-03-10 09:08:07.066163	300	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3515	2014-03-10 09:07:26.214669	2014-03-10 09:08:07.747455	304	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3522	2014-03-10 09:07:39.874142	2014-03-10 09:08:08.670551	305	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3540	2014-03-10 09:08:11.705493	\N	323	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3541	2014-03-10 09:08:12.292011	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3527	2014-03-10 09:07:52.342179	2014-03-10 09:08:17.175696	296	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3544	2014-03-10 09:08:21.628563	\N	305	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3546	2014-03-10 09:08:25.043537	\N	323	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3547	2014-03-10 09:08:26.243687	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3537	2014-03-10 09:08:06.020538	2014-03-10 09:08:28.63602	315	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3550	2014-03-10 09:08:28.77763	\N	326	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3530	2014-03-10 09:08:00.178039	2014-03-10 09:08:30.653129	324	20	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3553	2014-03-10 09:08:31.461826	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3533	2014-03-10 09:08:01.805364	2014-03-10 09:08:32.283725	303	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3554	2014-03-10 09:08:37.096035	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3538	2014-03-10 09:08:07.670317	2014-03-10 09:08:41.173331	295	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3557	2014-03-10 09:08:44.325355	\N	326	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3558	2014-03-10 09:08:44.986549	\N	322	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3542	2014-03-10 09:08:14.087717	2014-03-10 09:08:45.619093	307	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3545	2014-03-10 09:08:22.619766	2014-03-10 09:08:48.095474	293	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3559	2014-03-10 09:08:49.018636	\N	312	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3539	2014-03-10 09:08:09.883542	2014-03-10 09:08:49.633379	281	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3561	2014-03-10 09:08:51.082881	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3562	2014-03-10 09:08:54.300428	\N	300	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3563	2014-03-10 09:08:54.333758	\N	295	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3543	2014-03-10 09:08:16.413642	2014-03-10 09:08:55.789401	325	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3564	2014-03-10 09:08:57.35301	\N	317	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	2	f	f
3551	2014-03-10 09:08:29.116726	2014-03-10 09:08:58.106702	279	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3552	2014-03-10 09:08:30.825598	2014-03-10 09:08:58.119672	296	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3548	2014-03-10 09:08:26.426252	2014-03-10 09:09:01.94082	331	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3565	2014-03-10 09:08:58.463774	2014-03-10 09:09:03.462477	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3555	2014-03-10 09:08:41.07083	2014-03-10 09:09:05.653241	315	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3568	2014-03-10 09:09:06.733097	\N	305	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3573	2014-03-10 09:09:11.750654	\N	308	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3549	2014-03-10 09:08:28.313676	2014-03-10 09:09:12.562122	304	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3574	2014-03-10 09:09:14.391753	\N	331	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3556	2014-03-10 09:08:43.090755	2014-03-10 09:09:19.261811	324	21	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3566	2014-03-10 09:09:02.416214	2014-03-10 09:09:33.220595	293	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3570	2014-03-10 09:09:07.355115	2014-03-10 09:09:36.147348	323	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3572	2014-03-10 09:09:10.363739	2014-03-10 09:09:39.960841	296	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3571	2014-03-10 09:09:10.352572	2014-03-10 09:09:43.237298	325	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3569	2014-03-10 09:09:07.270403	2014-03-10 09:09:51.340366	281	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3575	2014-03-10 09:09:16.327155	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3560	2014-03-10 09:08:50.307527	2014-03-10 09:09:17.34234	303	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3577	2014-03-10 09:09:19.265031	\N	324	1	695A7607FE8A4E27AB80652C45C84FA8	0	f	f
3578	2014-03-10 09:09:21.369045	\N	279	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3580	2014-03-10 09:09:23.090799	\N	317	1	C712BAA86FEF4BFAB703AD2EB402B2DE	2	f	f
3583	2014-03-10 09:09:31.099212	\N	317	1	C712BAA86FEF4BFAB703AD2EB402B2DE	0	f	f
3582	2014-03-10 09:09:28.226768	2014-03-10 09:09:32.173785	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3567	2014-03-10 09:09:06.168729	2014-03-10 09:09:35.377908	307	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3576	2014-03-10 09:09:17.75942	2014-03-10 09:09:45.132118	315	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3588	2014-03-10 09:09:45.341818	\N	317	1	C655A9B714CB481EB9D88759DD9BD0D1	2	f	f
3589	2014-03-10 09:09:45.737407	\N	293	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3590	2014-03-10 09:09:46.637373	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3591	2014-03-10 09:09:47.914681	\N	331	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3579	2014-03-10 09:09:21.515645	2014-03-10 09:09:48.636049	312	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3594	2014-03-10 09:09:54.518193	\N	317	1	C655A9B714CB481EB9D88759DD9BD0D1	0	f	f
3581	2014-03-10 09:09:24.848621	2014-03-10 09:09:59.16838	295	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3585	2014-03-10 09:09:33.834635	2014-03-10 09:09:59.830472	303	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3584	2014-03-10 09:09:33.412299	2014-03-10 09:10:00.915965	300	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3596	2014-03-10 09:09:57.395943	2014-03-10 09:10:04.567274	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3586	2014-03-10 09:09:41.007361	2014-03-10 09:10:05.778223	305	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3600	2014-03-10 09:10:10.648236	\N	281	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3592	2014-03-10 09:09:49.529718	2014-03-10 09:10:12.795244	323	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
3601	2014-03-10 09:10:12.798108	\N	323	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
3603	2014-03-10 09:10:15.76955	\N	322	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3604	2014-03-10 09:10:16.296576	\N	300	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3605	2014-03-10 09:10:16.724059	\N	295	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3587	2014-03-10 09:09:43.507565	2014-03-10 09:10:17.157365	304	18	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3606	2014-03-10 09:10:17.713366	\N	305	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3599	2014-03-10 09:10:03.620465	2014-03-10 09:10:21.946215	308	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3593	2014-03-10 09:09:54.472564	2014-03-10 09:10:23.714821	296	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3595	2014-03-10 09:09:56.572978	2014-03-10 09:10:25.099439	307	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3607	2014-03-10 09:10:25.889476	\N	281	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3598	2014-03-10 09:10:02.394989	2014-03-10 09:10:26.563069	312	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3608	2014-03-10 09:10:26.811946	\N	293	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3609	2014-03-10 09:10:26.845845	\N	323	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
3597	2014-03-10 09:09:58.32755	2014-03-10 09:10:27.059339	315	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3610	2014-03-10 09:10:31.514249	2014-03-10 09:10:35.639943	322	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3611	2014-03-10 09:10:37.046901	\N	304	19	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3612	2014-03-10 09:10:43.110164	\N	315	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3602	2014-03-10 09:10:13.167266	2014-03-10 09:10:53.749498	325	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3613	2014-03-10 09:10:55.508721	\N	307	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3614	2014-03-10 09:11:01.284674	\N	323	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
3615	2014-03-10 09:18:09.774441	2014-03-10 09:18:32.40134	189	2	0CFFCBC851984A4281C23D34FC400445	1	f	f
3616	2014-03-10 09:18:50.421645	\N	189	3	0CFFCBC851984A4281C23D34FC400445	0	f	f
3617	2014-03-10 09:22:05.370284	\N	189	2	0CFFCBC851984A4281C23D34FC400445	0	f	f
3618	2014-03-10 09:23:51.624194	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3619	2014-03-10 09:24:17.383936	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3620	2014-03-10 09:24:40.942733	2014-03-10 09:24:55.672368	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3621	2014-03-10 09:25:10.679388	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3622	2014-03-10 09:25:26.080707	2014-03-10 09:25:41.133348	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3623	2014-03-10 09:25:54.421658	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3624	2014-03-10 09:26:35.707921	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3625	2014-03-10 09:26:57.612738	2014-03-10 09:27:08.785352	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3626	2014-03-10 09:27:26.609159	2014-03-10 09:27:48.185306	189	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3627	2014-03-10 09:27:50.114697	\N	360	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3628	2014-03-10 09:27:54.957546	\N	389	1	1F2BFEA5A0204D71A7FD29883E22CB9D	2	f	f
3629	2014-03-10 09:28:12.260913	\N	189	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3630	2014-03-10 09:28:29.137873	\N	387	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3631	2014-03-10 09:28:37.085744	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3632	2014-03-10 09:28:45.799361	\N	360	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
3633	2014-03-10 09:28:59.456508	2014-03-10 09:29:11.310669	360	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3634	2014-03-10 09:29:14.344671	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3635	2014-03-10 09:29:23.208886	2014-03-10 09:29:35.201835	360	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3636	2014-03-10 09:29:46.411057	2014-03-10 09:29:57.654951	360	3	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3637	2014-03-10 09:30:07.692122	\N	344	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3638	2014-03-10 09:30:10.135148	2014-03-10 09:30:25.654287	360	4	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3640	2014-03-10 09:30:26.598727	\N	345	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3639	2014-03-10 09:30:16.583746	2014-03-10 09:30:27.604925	344	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3641	2014-03-10 09:30:34.633316	\N	342	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3645	2014-03-10 09:30:45.889586	\N	370	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3642	2014-03-10 09:30:36.764884	2014-03-10 09:30:46.430936	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3643	2014-03-10 09:30:37.884554	2014-03-10 09:30:50.543174	360	5	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3646	2014-03-10 09:30:59.202867	\N	370	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3647	2014-03-10 09:30:59.563061	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3648	2014-03-10 09:31:00.629388	\N	342	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3649	2014-03-10 09:31:00.665768	\N	386	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3644	2014-03-10 09:30:45.852155	2014-03-10 09:31:12.444478	344	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3651	2014-03-10 09:31:12.534146	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3650	2014-03-10 09:31:02.825798	2014-03-10 09:31:13.435585	360	6	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3652	2014-03-10 09:31:14.587642	\N	386	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3653	2014-03-10 09:31:14.613804	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3656	2014-03-10 09:31:25.351005	\N	344	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3658	2014-03-10 09:31:28.219886	\N	356	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3654	2014-03-10 09:31:17.586977	2014-03-10 09:31:36.593637	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3657	2014-03-10 09:31:25.920218	2014-03-10 09:31:38.696215	360	7	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3659	2014-03-10 09:31:39.175729	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3660	2014-03-10 09:31:39.250527	\N	344	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3662	2014-03-10 09:31:41.624545	\N	364	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3663	2014-03-10 09:31:44.240091	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3655	2014-03-10 09:31:22.194603	2014-03-10 09:31:51.648997	351	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3664	2014-03-10 09:31:51.675769	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3661	2014-03-10 09:31:41.005402	2014-03-10 09:31:51.876387	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3665	2014-03-10 09:31:53.18828	\N	356	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3667	2014-03-10 09:31:57.825724	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3668	2014-03-10 09:32:02.819187	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3669	2014-03-10 09:32:03.509272	\N	356	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
3672	2014-03-10 09:32:06.846552	\N	351	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3666	2014-03-10 09:31:54.894724	2014-03-10 09:32:07.050985	360	8	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3673	2014-03-10 09:32:14.743078	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3674	2014-03-10 09:32:16.640358	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3677	2014-03-10 09:32:19.357709	\N	351	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3678	2014-03-10 09:32:24.619348	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3670	2014-03-10 09:32:04.749652	2014-03-10 09:32:27.281593	189	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3679	2014-03-10 09:32:27.368456	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3676	2014-03-10 09:32:18.138354	2014-03-10 09:32:29.450428	360	9	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3671	2014-03-10 09:32:04.892951	2014-03-10 09:32:31.849316	345	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3680	2014-03-10 09:32:33.435732	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3681	2014-03-10 09:32:33.83481	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3682	2014-03-10 09:32:40.250505	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3684	2014-03-10 09:32:41.289022	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3685	2014-03-10 09:32:45.128525	\N	345	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3675	2014-03-10 09:32:16.907937	2014-03-10 09:32:45.411205	344	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3687	2014-03-10 09:32:50.852448	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3688	2014-03-10 09:32:51.556702	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3683	2014-03-10 09:32:41.245756	2014-03-10 09:32:51.894211	360	10	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3689	2014-03-10 09:32:56.246556	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3690	2014-03-10 09:32:57.598543	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3694	2014-03-10 09:33:07.023291	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3695	2014-03-10 09:33:11.132313	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3696	2014-03-10 09:33:11.710443	\N	364	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3686	2014-03-10 09:32:46.061386	2014-03-10 09:33:14.831789	351	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3693	2014-03-10 09:33:04.098007	2014-03-10 09:33:16.028774	360	11	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3691	2014-03-10 09:33:00.6301	2014-03-10 09:33:17.819043	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3697	2014-03-10 09:33:22.982558	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3702	2014-03-10 09:33:32.395369	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3698	2014-03-10 09:33:23.300679	2014-03-10 09:33:33.793011	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3692	2014-03-10 09:33:01.777773	2014-03-10 09:33:33.96673	344	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3699	2014-03-10 09:33:27.65306	2014-03-10 09:33:40.241548	360	12	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3703	2014-03-10 09:33:40.259489	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3704	2014-03-10 09:33:41.707467	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3705	2014-03-10 09:33:44.98281	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3706	2014-03-10 09:33:50.053613	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3707	2014-03-10 09:33:50.327507	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3709	2014-03-10 09:33:55.508356	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3701	2014-03-10 09:33:30.184651	2014-03-10 09:33:55.654592	383	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3711	2014-03-10 09:33:56.991168	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3708	2014-03-10 09:33:51.854212	2014-03-10 09:34:02.589334	360	13	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3713	2014-03-10 09:34:05.614279	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3714	2014-03-10 09:34:08.197919	\N	383	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3715	2014-03-10 09:34:09.11327	\N	375	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3700	2014-03-10 09:33:28.177292	2014-03-10 09:34:09.160421	351	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3716	2014-03-10 09:34:09.728486	\N	357	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
3717	2014-03-10 09:34:12.772236	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3719	2014-03-10 09:34:14.749768	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3712	2014-03-10 09:34:03.870425	2014-03-10 09:34:19.649898	364	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3722	2014-03-10 09:34:21.045273	\N	389	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
3721	2014-03-10 09:34:16.67624	2014-03-10 09:34:21.164332	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3724	2014-03-10 09:34:21.300374	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3725	2014-03-10 09:34:22.013629	\N	351	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3710	2014-03-10 09:33:56.579053	2014-03-10 09:34:24.425162	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3720	2014-03-10 09:34:15.732066	2014-03-10 09:34:26.023084	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3718	2014-03-10 09:34:14.24892	2014-03-10 09:34:26.503815	360	14	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3726	2014-03-10 09:34:28.018072	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3727	2014-03-10 09:34:28.467513	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3729	2014-03-10 09:34:34.710874	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3730	2014-03-10 09:34:35.169041	\N	364	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3731	2014-03-10 09:34:36.866573	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3732	2014-03-10 09:34:37.209257	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3734	2014-03-10 09:34:39.433083	\N	344	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3735	2014-03-10 09:34:39.794018	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3736	2014-03-10 09:34:41.304348	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3723	2014-03-10 09:34:21.241763	2014-03-10 09:34:44.378492	383	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3728	2014-03-10 09:34:30.632512	2014-03-10 09:34:42.820418	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3737	2014-03-10 09:34:43.664642	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3738	2014-03-10 09:34:44.310619	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3739	2014-03-10 09:34:44.671273	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3740	2014-03-10 09:34:45.523938	\N	351	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3741	2014-03-10 09:34:45.56415	\N	375	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3742	2014-03-10 09:34:49.083361	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3743	2014-03-10 09:34:49.587241	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3744	2014-03-10 09:34:50.81041	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3745	2014-03-10 09:34:51.714001	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3733	2014-03-10 09:34:38.500475	2014-03-10 09:34:51.763265	360	15	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3746	2014-03-10 09:34:53.147696	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3747	2014-03-10 09:34:53.170655	\N	344	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3749	2014-03-10 09:34:55.237432	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3751	2014-03-10 09:34:58.019626	\N	389	1	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3752	2014-03-10 09:34:59.638454	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3753	2014-03-10 09:34:59.703657	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3755	2014-03-10 09:35:00.732554	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3757	2014-03-10 09:35:02.045156	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3759	2014-03-10 09:35:05.595485	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3758	2014-03-10 09:35:02.803768	2014-03-10 09:35:08.752235	360	16	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3748	2014-03-10 09:34:53.522686	2014-03-10 09:35:10.16102	364	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3760	2014-03-10 09:35:11.913894	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3761	2014-03-10 09:35:13.081265	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3762	2014-03-10 09:35:13.79587	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3763	2014-03-10 09:35:14.40352	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3756	2014-03-10 09:35:01.968415	2014-03-10 09:35:16.869596	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3764	2014-03-10 09:35:16.875175	\N	344	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3769	2014-03-10 09:35:25.509064	\N	364	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3770	2014-03-10 09:35:26.323126	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3771	2014-03-10 09:35:26.64755	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3767	2014-03-10 09:35:20.67824	2014-03-10 09:35:26.891808	360	17	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3765	2014-03-10 09:35:16.934777	2014-03-10 09:35:27.480859	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3766	2014-03-10 09:35:18.817685	2014-03-10 09:35:28.78468	389	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3754	2014-03-10 09:35:00.230168	2014-03-10 09:35:29.929538	351	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3750	2014-03-10 09:34:57.642606	2014-03-10 09:35:35.130713	383	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3778	2014-03-10 09:35:38.092164	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3773	2014-03-10 09:35:27.59732	2014-03-10 09:35:38.406982	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3768	2014-03-10 09:35:21.407629	2014-03-10 09:35:42.88548	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3781	2014-03-10 09:35:45.849443	\N	351	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3776	2014-03-10 09:35:30.647502	2014-03-10 09:35:45.897087	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3782	2014-03-10 09:35:47.95664	\N	383	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3783	2014-03-10 09:35:48.775028	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3779	2014-03-10 09:35:38.316391	2014-03-10 09:35:48.785316	360	18	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3784	2014-03-10 09:35:49.642204	\N	345	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3785	2014-03-10 09:35:50.686167	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3786	2014-03-10 09:35:52.102773	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3780	2014-03-10 09:35:44.038032	2014-03-10 09:35:52.429994	389	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3787	2014-03-10 09:35:55.860727	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3772	2014-03-10 09:35:26.965943	2014-03-10 09:35:56.171341	357	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3788	2014-03-10 09:35:58.830796	\N	387	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3789	2014-03-10 09:35:59.574755	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3774	2014-03-10 09:35:29.845946	2014-03-10 09:36:00.584189	388	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3791	2014-03-10 09:36:00.632492	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3793	2014-03-10 09:36:00.67333	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3775	2014-03-10 09:35:30.149693	2014-03-10 09:36:00.92538	189	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3795	2014-03-10 09:36:01.813316	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3796	2014-03-10 09:36:01.872731	\N	383	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3777	2014-03-10 09:35:33.075871	2014-03-10 09:36:04.206656	375	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3798	2014-03-10 09:36:05.21768	\N	389	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3799	2014-03-10 09:36:05.563938	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3800	2014-03-10 09:36:05.974825	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3801	2014-03-10 09:36:07.408987	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3792	2014-03-10 09:36:00.648577	2014-03-10 09:36:07.593452	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3790	2014-03-10 09:36:00.053669	2014-03-10 09:36:08.400461	360	19	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3797	2014-03-10 09:36:02.647324	2014-03-10 09:36:11.387206	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3803	2014-03-10 09:36:13.585757	\N	189	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3804	2014-03-10 09:36:15.774603	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3794	2014-03-10 09:36:00.687488	2014-03-10 09:36:16.870197	364	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3806	2014-03-10 09:36:18.554959	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3809	2014-03-10 09:36:19.775258	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3812	2014-03-10 09:36:20.862289	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3813	2014-03-10 09:36:20.905344	\N	388	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3814	2014-03-10 09:36:23.665976	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3810	2014-03-10 09:36:19.879136	2014-03-10 09:36:26.46755	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3816	2014-03-10 09:36:28.017019	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3815	2014-03-10 09:36:24.919772	2014-03-10 09:36:33.18898	389	2	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3805	2014-03-10 09:36:18.380926	2014-03-10 09:36:35.170322	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3802	2014-03-10 09:36:08.734628	2014-03-10 09:36:38.07485	344	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3808	2014-03-10 09:36:19.066352	2014-03-10 09:36:39.594789	345	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3807	2014-03-10 09:36:18.608247	2014-03-10 09:36:58.10447	375	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3818	2014-03-10 09:36:29.211564	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3811	2014-03-10 09:36:20.500858	2014-03-10 09:36:30.378959	360	20	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3819	2014-03-10 09:36:30.519644	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3820	2014-03-10 09:36:33.156014	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3821	2014-03-10 09:36:35.097311	\N	364	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3822	2014-03-10 09:36:35.206233	\N	383	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3817	2014-03-10 09:36:28.595196	2014-03-10 09:36:36.888951	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3823	2014-03-10 09:36:38.603614	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3824	2014-03-10 09:36:41.738725	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3827	2014-03-10 09:36:49.716466	\N	189	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3828	2014-03-10 09:36:50.182433	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3830	2014-03-10 09:36:50.78796	\N	387	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3831	2014-03-10 09:36:52.092069	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3832	2014-03-10 09:36:52.226417	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3825	2014-03-10 09:36:42.526306	2014-03-10 09:36:52.597975	360	21	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3834	2014-03-10 09:36:53.122579	\N	345	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3826	2014-03-10 09:36:44.662228	2014-03-10 09:36:53.422546	389	3	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3835	2014-03-10 09:36:54.350596	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3836	2014-03-10 09:36:54.502871	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3837	2014-03-10 09:36:55.677267	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3829	2014-03-10 09:36:50.712287	2014-03-10 09:36:55.840151	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3840	2014-03-10 09:36:58.825599	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3842	2014-03-10 09:37:03.853394	\N	360	22	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3843	2014-03-10 09:37:03.880586	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3844	2014-03-10 09:37:04.500755	\N	389	4	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3848	2014-03-10 09:37:09.190579	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3846	2014-03-10 09:37:06.041424	2014-03-10 09:37:12.928496	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3839	2014-03-10 09:36:57.827574	2014-03-10 09:37:14.343566	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3850	2014-03-10 09:37:14.342985	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3838	2014-03-10 09:36:57.253452	2014-03-10 09:37:15.327118	364	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3847	2014-03-10 09:37:07.140018	2014-03-10 09:37:16.376371	386	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3845	2014-03-10 09:37:05.878849	2014-03-10 09:37:20.324253	351	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3833	2014-03-10 09:36:52.877964	2014-03-10 09:37:26.416724	344	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3852	2014-03-10 09:37:26.843729	\N	389	3	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3854	2014-03-10 09:37:29.589121	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3855	2014-03-10 09:37:30.154056	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3851	2014-03-10 09:37:25.96741	2014-03-10 09:37:31.100844	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3857	2014-03-10 09:37:34.842792	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3859	2014-03-10 09:37:38.856295	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3841	2014-03-10 09:37:03.512519	2014-03-10 09:37:39.144974	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3860	2014-03-10 09:37:39.523167	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3861	2014-03-10 09:37:40.427864	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3865	2014-03-10 09:37:47.767186	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3849	2014-03-10 09:37:12.610535	2014-03-10 09:37:47.805686	375	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3863	2014-03-10 09:37:43.020219	2014-03-10 09:37:47.881606	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3864	2014-03-10 09:37:44.020079	2014-03-10 09:37:48.953789	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3866	2014-03-10 09:37:50.978471	\N	387	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3867	2014-03-10 09:37:51.61513	\N	383	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3868	2014-03-10 09:37:52.23631	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3853	2014-03-10 09:37:28.20384	2014-03-10 09:37:53.654955	364	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3869	2014-03-10 09:37:56.243209	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3870	2014-03-10 09:37:56.28571	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3871	2014-03-10 09:37:59.657226	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3856	2014-03-10 09:37:33.072383	2014-03-10 09:38:00.822576	351	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3873	2014-03-10 09:38:03.40198	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3875	2014-03-10 09:38:04.884945	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3877	2014-03-10 09:38:08.797477	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3879	2014-03-10 09:38:10.310087	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3881	2014-03-10 09:38:10.657517	\N	389	30	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
3882	2014-03-10 09:38:11.902107	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3883	2014-03-10 09:38:12.335821	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3858	2014-03-10 09:37:37.609429	2014-03-10 09:38:12.903779	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3874	2014-03-10 09:38:04.421574	2014-03-10 09:38:14.65591	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3862	2014-03-10 09:37:42.470502	2014-03-10 09:38:15.418385	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3878	2014-03-10 09:38:09.243816	2014-03-10 09:38:17.53385	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3885	2014-03-10 09:38:19.418073	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3888	2014-03-10 09:38:26.16637	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3880	2014-03-10 09:38:10.596237	2014-03-10 09:38:26.238869	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3889	2014-03-10 09:38:28.500009	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3890	2014-03-10 09:38:29.942308	\N	344	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3884	2014-03-10 09:38:15.605114	2014-03-10 09:38:30.565651	374	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3887	2014-03-10 09:38:25.765753	2014-03-10 09:38:30.848276	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3894	2014-03-10 09:38:34.557508	\N	357	1	5E6A3E3B939B4577B104FA8658206E9E	2	f	f
3876	2014-03-10 09:38:06.352178	2014-03-10 09:38:35.937749	364	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3895	2014-03-10 09:38:37.194042	\N	360	59	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
3891	2014-03-10 09:38:30.118099	2014-03-10 09:38:39.641924	386	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3896	2014-03-10 09:38:40.102522	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3893	2014-03-10 09:38:33.333113	2014-03-10 09:38:54.372142	345	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3886	2014-03-10 09:38:24.903037	2014-03-10 09:38:58.092087	351	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3892	2014-03-10 09:38:31.594996	2014-03-10 09:39:03.824775	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3897	2014-03-10 09:38:41.590351	2014-03-10 09:39:09.039665	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3900	2014-03-10 09:38:45.307721	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3902	2014-03-10 09:38:46.918442	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3903	2014-03-10 09:38:48.809254	\N	374	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3904	2014-03-10 09:38:48.889373	\N	364	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3872	2014-03-10 09:38:02.795154	2014-03-10 09:38:51.031957	375	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3905	2014-03-10 09:38:52.774662	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3906	2014-03-10 09:38:54.377853	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3907	2014-03-10 09:38:59.224789	2014-03-10 09:39:03.627191	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3911	2014-03-10 09:39:05.018922	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3912	2014-03-10 09:39:05.919764	\N	345	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3914	2014-03-10 09:39:07.552002	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3901	2014-03-10 09:38:45.982713	2014-03-10 09:39:09.02742	387	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3898	2014-03-10 09:38:44.27636	2014-03-10 09:39:12.412337	370	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3916	2014-03-10 09:39:12.492584	\N	360	59	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3917	2014-03-10 09:39:12.968024	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3918	2014-03-10 09:39:13.940647	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3919	2014-03-10 09:39:16.547756	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3921	2014-03-10 09:39:19.850444	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3899	2014-03-10 09:38:44.685906	2014-03-10 09:39:20.32254	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3924	2014-03-10 09:39:25.584984	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3925	2014-03-10 09:39:25.635478	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3926	2014-03-10 09:39:26.735936	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3909	2014-03-10 09:39:03.12627	2014-03-10 09:39:26.838254	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3927	2014-03-10 09:39:27.274438	\N	389	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
3928	2014-03-10 09:39:27.79154	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3929	2014-03-10 09:39:27.796023	\N	370	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3923	2014-03-10 09:39:24.130133	2014-03-10 09:39:29.198452	390	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3930	2014-03-10 09:39:30.529331	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3908	2014-03-10 09:39:02.432367	2014-03-10 09:39:31.929524	364	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3910	2014-03-10 09:39:03.139159	2014-03-10 09:39:35.247711	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3931	2014-03-10 09:39:37.180072	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3932	2014-03-10 09:39:37.764573	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3933	2014-03-10 09:39:38.164376	\N	383	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3937	2014-03-10 09:39:41.977065	\N	345	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3922	2014-03-10 09:39:22.70261	2014-03-10 09:39:42.038329	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3934	2014-03-10 09:39:39.885849	2014-03-10 09:39:46.210575	374	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3915	2014-03-10 09:39:10.928489	2014-03-10 09:39:46.513741	351	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3940	2014-03-10 09:39:47.757612	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3942	2014-03-10 09:39:50.600161	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3920	2014-03-10 09:39:17.501894	2014-03-10 09:39:51.269601	377	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3945	2014-03-10 09:39:55.3673	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3946	2014-03-10 09:39:55.69165	\N	390	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3947	2014-03-10 09:39:56.367365	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3948	2014-03-10 09:39:57.387132	\N	374	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3913	2014-03-10 09:39:07.501813	2014-03-10 09:39:57.459649	375	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3944	2014-03-10 09:39:55.126432	2014-03-10 09:40:05.037506	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3953	2014-03-10 09:40:05.210395	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3954	2014-03-10 09:40:07.256009	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3955	2014-03-10 09:40:07.721555	\N	374	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3956	2014-03-10 09:40:09.364252	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3952	2014-03-10 09:40:03.981559	2014-03-10 09:40:09.663659	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3938	2014-03-10 09:39:43.321423	2014-03-10 09:40:12.25046	360	59	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3959	2014-03-10 09:40:13.494773	\N	375	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3957	2014-03-10 09:40:09.733416	2014-03-10 09:40:15.598186	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3958	2014-03-10 09:40:10.636969	2014-03-10 09:40:16.285094	390	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3960	2014-03-10 09:40:17.752091	\N	189	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3939	2014-03-10 09:39:45.240471	2014-03-10 09:40:18.315481	364	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3936	2014-03-10 09:39:40.783529	2014-03-10 09:40:19.941588	389	30	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3962	2014-03-10 09:40:21.468085	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3963	2014-03-10 09:40:21.919107	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3941	2014-03-10 09:39:48.572053	2014-03-10 09:40:21.933992	344	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3964	2014-03-10 09:40:23.369808	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
3949	2014-03-10 09:39:58.002336	2014-03-10 09:40:25.113347	387	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3943	2014-03-10 09:39:51.586549	2014-03-10 09:40:25.733522	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3961	2014-03-10 09:40:19.533125	2014-03-10 09:40:27.024055	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3935	2014-03-10 09:39:40.347314	2014-03-10 09:40:28.289006	386	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3967	2014-03-10 09:40:31.68795	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3950	2014-03-10 09:40:00.582542	2014-03-10 09:40:33.335954	351	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3970	2014-03-10 09:40:34.058657	\N	375	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3951	2014-03-10 09:40:03.762707	2014-03-10 09:40:34.127616	377	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3968	2014-03-10 09:40:31.683752	2014-03-10 09:40:35.951321	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3972	2014-03-10 09:40:36.788643	\N	390	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3973	2014-03-10 09:40:36.941449	\N	344	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3974	2014-03-10 09:40:38.186891	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3976	2014-03-10 09:40:39.437359	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3966	2014-03-10 09:40:25.742907	2014-03-10 09:40:52.593089	345	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3977	2014-03-10 09:40:40.33735	2014-03-10 09:41:04.296485	370	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3978	2014-03-10 09:40:41.014292	2014-03-10 09:41:04.863776	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3969	2014-03-10 09:40:33.04558	2014-03-10 09:41:06.529348	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3971	2014-03-10 09:40:35.148849	2014-03-10 09:41:10.337173	389	31	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3975	2014-03-10 09:40:38.58439	2014-03-10 09:41:14.232551	364	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3979	2014-03-10 09:40:41.802582	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3980	2014-03-10 09:40:44.513881	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3981	2014-03-10 09:40:47.107862	\N	377	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3983	2014-03-10 09:40:48.112376	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3984	2014-03-10 09:40:50.179472	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3965	2014-03-10 09:40:25.111469	2014-03-10 09:40:52.029495	360	60	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
3986	2014-03-10 09:40:53.863157	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3987	2014-03-10 09:40:54.635216	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3988	2014-03-10 09:40:58.705517	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3985	2014-03-10 09:40:50.51947	2014-03-10 09:40:59.04323	390	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
3989	2014-03-10 09:41:02.261038	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3992	2014-03-10 09:41:08.701728	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3993	2014-03-10 09:41:08.823222	\N	344	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3994	2014-03-10 09:41:10.811119	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3995	2014-03-10 09:41:12.564492	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3996	2014-03-10 09:41:12.692236	\N	375	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3997	2014-03-10 09:41:13.62058	\N	390	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3998	2014-03-10 09:41:15.195093	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3999	2014-03-10 09:41:17.40709	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4000	2014-03-10 09:41:18.482809	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4001	2014-03-10 09:41:20.054383	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4002	2014-03-10 09:41:21.466268	\N	374	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3982	2014-03-10 09:40:47.111959	2014-03-10 09:41:21.928665	351	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4003	2014-03-10 09:41:24.174456	\N	389	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4006	2014-03-10 09:41:27.003482	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4007	2014-03-10 09:41:29.597689	\N	390	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3991	2014-03-10 09:41:04.577785	2014-03-10 09:41:30.063651	345	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4008	2014-03-10 09:41:30.228253	\N	364	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4009	2014-03-10 09:41:32.062112	\N	377	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4010	2014-03-10 09:41:32.910151	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4011	2014-03-10 09:41:33.748995	\N	375	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4005	2014-03-10 09:41:26.663665	2014-03-10 09:41:33.955008	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4012	2014-03-10 09:41:34.211435	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4013	2014-03-10 09:41:35.063601	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
3990	2014-03-10 09:41:04.287364	2014-03-10 09:41:35.791421	360	61	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4018	2014-03-10 09:41:45.508366	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4020	2014-03-10 09:41:47.059124	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4021	2014-03-10 09:41:47.941621	\N	383	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4019	2014-03-10 09:41:46.268668	2014-03-10 09:41:52.653566	390	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4025	2014-03-10 09:41:53.769103	\N	344	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4027	2014-03-10 09:41:58.140194	\N	364	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4004	2014-03-10 09:41:24.757709	2014-03-10 09:41:58.783677	370	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4028	2014-03-10 09:42:00.392087	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4029	2014-03-10 09:42:01.291464	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4023	2014-03-10 09:41:49.762302	2014-03-10 09:42:01.669349	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4014	2014-03-10 09:41:38.123678	2014-03-10 09:42:01.67621	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4016	2014-03-10 09:41:42.747178	2014-03-10 09:42:03.373936	374	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4032	2014-03-10 09:42:07.892753	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4030	2014-03-10 09:42:05.233823	2014-03-10 09:42:10.146132	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4015	2014-03-10 09:41:40.985623	2014-03-10 09:42:12.234198	357	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4035	2014-03-10 09:42:16.590316	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4017	2014-03-10 09:41:43.442552	2014-03-10 09:42:17.183811	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4036	2014-03-10 09:42:18.147758	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4037	2014-03-10 09:42:18.284693	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4039	2014-03-10 09:42:19.404885	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4022	2014-03-10 09:41:49.342704	2014-03-10 09:42:19.886809	360	62	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4040	2014-03-10 09:42:22.410135	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4041	2014-03-10 09:42:22.796294	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4042	2014-03-10 09:42:24.388041	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4024	2014-03-10 09:41:51.87913	2014-03-10 09:42:27.102207	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4026	2014-03-10 09:41:53.774029	2014-03-10 09:42:28.252561	389	31	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4031	2014-03-10 09:42:06.048722	2014-03-10 09:42:28.821293	390	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4044	2014-03-10 09:42:29.880045	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4045	2014-03-10 09:42:30.77804	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4046	2014-03-10 09:42:30.835415	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4047	2014-03-10 09:42:33.36551	\N	375	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4048	2014-03-10 09:42:34.396301	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4049	2014-03-10 09:42:34.593321	\N	360	63	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4050	2014-03-10 09:42:35.663041	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4043	2014-03-10 09:42:24.902403	2014-03-10 09:42:36.803337	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4051	2014-03-10 09:42:41.947053	\N	389	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4053	2014-03-10 09:42:42.371538	\N	364	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4055	2014-03-10 09:42:45.089865	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4058	2014-03-10 09:42:46.867856	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4033	2014-03-10 09:42:16.134721	2014-03-10 09:42:47.491636	370	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4059	2014-03-10 09:42:48.892433	\N	383	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4057	2014-03-10 09:42:46.787081	2014-03-10 09:42:52.625809	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4038	2014-03-10 09:42:19.351426	2014-03-10 09:42:58.19578	377	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4052	2014-03-10 09:42:42.09561	2014-03-10 09:43:11.02903	390	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4054	2014-03-10 09:42:43.77215	2014-03-10 09:43:12.384169	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4056	2014-03-10 09:42:46.298666	2014-03-10 09:43:14.071556	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4034	2014-03-10 09:42:16.359539	2014-03-10 09:42:52.090112	374	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4061	2014-03-10 09:42:52.678801	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4064	2014-03-10 09:42:55.454447	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4066	2014-03-10 09:42:56.808135	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4063	2014-03-10 09:42:54.675967	2014-03-10 09:42:59.133553	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4068	2014-03-10 09:43:00.156744	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4069	2014-03-10 09:43:02.570984	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4072	2014-03-10 09:43:13.150291	\N	377	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4065	2014-03-10 09:42:56.599035	2014-03-10 09:43:13.701433	386	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4073	2014-03-10 09:43:14.221695	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4074	2014-03-10 09:43:14.829582	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4075	2014-03-10 09:43:16.817152	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4060	2014-03-10 09:42:50.121939	2014-03-10 09:43:18.891596	360	62	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4078	2014-03-10 09:43:21.599336	\N	364	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4079	2014-03-10 09:43:22.004012	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4067	2014-03-10 09:42:59.707088	2014-03-10 09:43:23.591726	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4080	2014-03-10 09:43:24.683334	\N	344	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4081	2014-03-10 09:43:25.46442	\N	189	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4082	2014-03-10 09:43:25.616349	\N	383	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4083	2014-03-10 09:43:26.9729	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4084	2014-03-10 09:43:27.223863	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4085	2014-03-10 09:43:29.023575	\N	377	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4070	2014-03-10 09:43:06.894404	2014-03-10 09:43:31.749359	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4062	2014-03-10 09:42:54.428411	2014-03-10 09:43:36.497918	351	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4088	2014-03-10 09:43:36.913599	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4089	2014-03-10 09:43:37.819691	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4077	2014-03-10 09:43:18.294527	2014-03-10 09:43:37.870943	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4071	2014-03-10 09:43:08.930878	2014-03-10 09:43:41.665073	374	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4094	2014-03-10 09:43:42.126435	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4095	2014-03-10 09:43:43.639869	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4096	2014-03-10 09:43:46.962507	\N	364	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4091	2014-03-10 09:43:40.778445	2014-03-10 09:43:50.651917	189	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4099	2014-03-10 09:43:51.648644	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4100	2014-03-10 09:43:52.23017	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4093	2014-03-10 09:43:41.968834	2014-03-10 09:43:53.845054	383	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4092	2014-03-10 09:43:40.783954	2014-03-10 09:43:54.492524	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4104	2014-03-10 09:43:56.150929	\N	387	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4105	2014-03-10 09:43:56.478397	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4086	2014-03-10 09:43:30.470977	2014-03-10 09:43:57.108624	390	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4076	2014-03-10 09:43:17.860817	2014-03-10 09:43:58.019028	389	31	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4101	2014-03-10 09:43:54.222329	2014-03-10 09:43:58.99729	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4087	2014-03-10 09:43:31.911068	2014-03-10 09:43:59.390539	360	63	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4090	2014-03-10 09:43:40.771686	2014-03-10 09:44:07.179639	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4109	2014-03-10 09:44:10.587491	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4114	2014-03-10 09:44:14.339246	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4115	2014-03-10 09:44:15.183096	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4116	2014-03-10 09:44:15.881849	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4117	2014-03-10 09:44:19.220679	\N	344	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4106	2014-03-10 09:44:03.526919	2014-03-10 09:44:22.333123	189	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4119	2014-03-10 09:44:26.898457	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4098	2014-03-10 09:43:49.822031	2014-03-10 09:44:27.976567	375	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4120	2014-03-10 09:44:30.548703	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4103	2014-03-10 09:43:55.540565	2014-03-10 09:44:33.767331	374	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4121	2014-03-10 09:44:35.265254	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4122	2014-03-10 09:44:36.468916	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4097	2014-03-10 09:43:48.767851	2014-03-10 09:44:36.672163	351	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4123	2014-03-10 09:44:36.743648	\N	189	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4112	2014-03-10 09:44:12.413411	2014-03-10 09:44:38.4464	360	64	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4108	2014-03-10 09:44:06.747268	2014-03-10 09:44:38.886808	383	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4111	2014-03-10 09:44:11.335092	2014-03-10 09:44:39.625132	389	32	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4102	2014-03-10 09:43:54.395875	2014-03-10 09:44:39.815221	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4107	2014-03-10 09:44:06.034286	2014-03-10 09:44:39.81733	356	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4125	2014-03-10 09:44:41.961028	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4110	2014-03-10 09:44:11.055184	2014-03-10 09:44:42.306899	390	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4113	2014-03-10 09:44:13.724901	2014-03-10 09:44:42.459528	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4127	2014-03-10 09:44:44.659038	\N	375	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4128	2014-03-10 09:44:45.379293	\N	344	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4134	2014-03-10 09:44:51.622163	\N	377	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4137	2014-03-10 09:44:53.287586	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4138	2014-03-10 09:44:53.840632	\N	389	33	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4124	2014-03-10 09:44:41.064062	2014-03-10 09:45:02.291436	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4129	2014-03-10 09:44:47.463841	2014-03-10 09:45:06.988148	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4131	2014-03-10 09:44:48.843488	2014-03-10 09:45:14.780452	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4126	2014-03-10 09:44:42.356496	2014-03-10 09:45:17.519697	370	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4132	2014-03-10 09:44:50.278993	2014-03-10 09:45:18.945298	360	65	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4133	2014-03-10 09:44:51.255895	2014-03-10 09:45:22.826478	383	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4139	2014-03-10 09:44:55.040017	2014-03-10 09:45:23.817403	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4136	2014-03-10 09:44:52.93616	2014-03-10 09:45:26.895086	351	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4130	2014-03-10 09:44:48.16795	2014-03-10 09:45:27.948884	374	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4140	2014-03-10 09:44:55.198218	2014-03-10 09:45:28.022874	345	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4118	2014-03-10 09:44:21.833324	2014-03-10 09:44:55.604692	364	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4141	2014-03-10 09:44:57.360819	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4143	2014-03-10 09:45:03.178282	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4144	2014-03-10 09:45:04.687573	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4142	2014-03-10 09:44:59.736707	2014-03-10 09:45:05.872648	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4146	2014-03-10 09:45:08.464633	\N	364	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4147	2014-03-10 09:45:11.155585	2014-03-10 09:45:15.925622	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4150	2014-03-10 09:45:17.974069	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4151	2014-03-10 09:45:19.796969	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4153	2014-03-10 09:45:29.196662	\N	389	32	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4154	2014-03-10 09:45:29.834536	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4155	2014-03-10 09:45:29.987225	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4156	2014-03-10 09:45:30.17393	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4157	2014-03-10 09:45:31.732981	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4158	2014-03-10 09:45:31.80344	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4160	2014-03-10 09:45:35.543521	\N	383	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4162	2014-03-10 09:45:35.837275	\N	352	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4163	2014-03-10 09:45:37.949803	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4164	2014-03-10 09:45:41.127668	\N	374	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4149	2014-03-10 09:45:17.413435	2014-03-10 09:45:41.579267	189	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4165	2014-03-10 09:45:41.827866	\N	351	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4166	2014-03-10 09:45:42.83708	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4148	2014-03-10 09:45:11.327932	2014-03-10 09:45:43.277336	344	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4167	2014-03-10 09:45:44.430087	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4168	2014-03-10 09:45:44.433388	\N	389	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4169	2014-03-10 09:45:45.280507	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4159	2014-03-10 09:45:34.589704	2014-03-10 09:45:48.260907	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4171	2014-03-10 09:45:50.449845	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4135	2014-03-10 09:44:52.325808	2014-03-10 09:45:51.276362	386	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4145	2014-03-10 09:45:06.838508	2014-03-10 09:45:51.520571	375	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4152	2014-03-10 09:45:24.024212	2014-03-10 09:45:52.12241	387	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4174	2014-03-10 09:46:00.343588	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4161	2014-03-10 09:45:35.73566	2014-03-10 09:46:04.152501	360	66	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4178	2014-03-10 09:46:05.996708	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4179	2014-03-10 09:46:06.453456	\N	375	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4182	2014-03-10 09:46:08.816392	\N	370	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4183	2014-03-10 09:46:09.545143	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4180	2014-03-10 09:46:07.287487	2014-03-10 09:46:11.739495	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4170	2014-03-10 09:45:45.283734	2014-03-10 09:46:12.418385	364	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4173	2014-03-10 09:45:58.99139	2014-03-10 09:46:15.907245	357	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4176	2014-03-10 09:46:02.230298	2014-03-10 09:46:22.209142	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4181	2014-03-10 09:46:08.306576	2014-03-10 09:46:25.2246	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4172	2014-03-10 09:45:57.173452	2014-03-10 09:46:25.994372	189	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4190	2014-03-10 09:46:26.411059	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4191	2014-03-10 09:46:26.759909	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4175	2014-03-10 09:46:00.963467	2014-03-10 09:46:26.882146	344	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4192	2014-03-10 09:46:28.352013	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4193	2014-03-10 09:46:30.467142	\N	351	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4184	2014-03-10 09:46:11.134284	2014-03-10 09:46:37.210049	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4177	2014-03-10 09:46:05.692125	2014-03-10 09:46:38.666001	383	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4195	2014-03-10 09:46:39.164379	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4197	2014-03-10 09:46:39.835889	\N	375	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4200	2014-03-10 09:46:42.506913	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4201	2014-03-10 09:46:45.028767	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4186	2014-03-10 09:46:17.711272	2014-03-10 09:46:45.509749	360	67	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4194	2014-03-10 09:46:34.294377	2014-03-10 09:46:46.235204	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4188	2014-03-10 09:46:19.882144	2014-03-10 09:46:48.892842	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4203	2014-03-10 09:46:51.996695	\N	383	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4204	2014-03-10 09:46:52.38198	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4185	2014-03-10 09:46:12.077781	2014-03-10 09:46:52.95428	374	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4189	2014-03-10 09:46:24.863162	2014-03-10 09:46:53.944411	364	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4187	2014-03-10 09:46:19.117738	2014-03-10 09:46:54.397956	389	30	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4207	2014-03-10 09:46:57.229426	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4208	2014-03-10 09:46:57.389064	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4211	2014-03-10 09:46:59.141419	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4212	2014-03-10 09:47:01.672141	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4213	2014-03-10 09:47:03.880324	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4205	2014-03-10 09:46:52.500644	2014-03-10 09:47:05.122007	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4214	2014-03-10 09:47:05.180086	\N	370	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4215	2014-03-10 09:47:06.947863	\N	364	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4196	2014-03-10 09:46:39.827634	2014-03-10 09:47:07.532817	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4217	2014-03-10 09:47:08.871876	\N	389	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4198	2014-03-10 09:46:40.389737	2014-03-10 09:47:10.695559	344	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4199	2014-03-10 09:46:41.540095	2014-03-10 09:47:12.253827	189	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4202	2014-03-10 09:46:51.347153	2014-03-10 09:47:13.244565	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4209	2014-03-10 09:46:58.500649	2014-03-10 09:47:15.215423	357	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4219	2014-03-10 09:47:12.576085	2014-03-10 09:47:17.571637	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4206	2014-03-10 09:46:55.447913	2014-03-10 09:47:29.54048	375	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4210	2014-03-10 09:46:58.740715	2014-03-10 09:47:36.60843	360	68	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4218	2014-03-10 09:47:11.89998	2014-03-10 09:47:39.423765	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4216	2014-03-10 09:47:07.245896	2014-03-10 09:47:41.178099	374	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4220	2014-03-10 09:47:14.694865	\N	345	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4221	2014-03-10 09:47:18.621449	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4222	2014-03-10 09:47:19.030471	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4225	2014-03-10 09:47:25.763666	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4228	2014-03-10 09:47:28.009349	\N	383	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4229	2014-03-10 09:47:30.947983	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4231	2014-03-10 09:47:32.352288	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4232	2014-03-10 09:47:33.667923	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4237	2014-03-10 09:47:44.171432	\N	351	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4240	2014-03-10 09:47:55.081916	\N	374	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4241	2014-03-10 09:47:55.161837	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4224	2014-03-10 09:47:24.643508	2014-03-10 09:47:55.165336	189	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4233	2014-03-10 09:47:36.159241	2014-03-10 09:47:55.176837	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4230	2014-03-10 09:47:31.433769	2014-03-10 09:47:56.663209	364	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4242	2014-03-10 09:47:57.289037	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4243	2014-03-10 09:47:57.961448	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4223	2014-03-10 09:47:23.369126	2014-03-10 09:47:59.958716	344	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4227	2014-03-10 09:47:28.0008	2014-03-10 09:48:01.789857	357	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4234	2014-03-10 09:47:39.713759	2014-03-10 09:48:05.187221	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4226	2014-03-10 09:47:25.855232	2014-03-10 09:48:06.202506	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4235	2014-03-10 09:47:40.132361	2014-03-10 09:48:06.731085	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4244	2014-03-10 09:48:07.362197	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4245	2014-03-10 09:48:10.284492	\N	189	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4247	2014-03-10 09:48:13.140473	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4239	2014-03-10 09:47:49.419158	2014-03-10 09:48:14.776001	360	69	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4251	2014-03-10 09:48:18.445889	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4236	2014-03-10 09:47:43.076517	2014-03-10 09:48:19.838139	375	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4255	2014-03-10 09:48:27.508762	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4238	2014-03-10 09:47:46.928943	2014-03-10 09:48:28.692796	345	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4257	2014-03-10 09:48:30.066169	\N	351	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4258	2014-03-10 09:48:30.915012	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4253	2014-03-10 09:48:24.663923	2014-03-10 09:48:34.070886	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4261	2014-03-10 09:48:38.620798	\N	375	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4260	2014-03-10 09:48:33.628701	2014-03-10 09:48:39.641651	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4262	2014-03-10 09:48:39.67496	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4246	2014-03-10 09:48:12.408732	2014-03-10 09:48:40.753875	364	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4264	2014-03-10 09:48:46.225407	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4265	2014-03-10 09:48:47.533672	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4266	2014-03-10 09:48:49.648179	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4248	2014-03-10 09:48:14.308545	2014-03-10 09:48:50.808544	357	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4259	2014-03-10 09:48:32.025015	2014-03-10 09:48:51.153844	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4250	2014-03-10 09:48:17.440048	2014-03-10 09:48:52.707899	344	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4270	2014-03-10 09:48:55.513454	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4249	2014-03-10 09:48:17.416017	2014-03-10 09:48:55.874156	374	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4271	2014-03-10 09:48:56.484616	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4256	2014-03-10 09:48:28.141405	2014-03-10 09:48:57.175821	360	70	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4272	2014-03-10 09:48:57.621153	\N	351	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4254	2014-03-10 09:48:27.147194	2014-03-10 09:48:58.075391	390	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4268	2014-03-10 09:48:53.886182	2014-03-10 09:49:02.675988	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4252	2014-03-10 09:48:23.133442	2014-03-10 09:49:03.450202	383	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4275	2014-03-10 09:49:03.927777	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4274	2014-03-10 09:49:02.387468	2014-03-10 09:49:07.125249	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4281	2014-03-10 09:49:10.050852	\N	344	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4273	2014-03-10 09:49:01.445327	2014-03-10 09:49:10.980349	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4277	2014-03-10 09:49:07.291178	2014-03-10 09:49:11.434819	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4263	2014-03-10 09:48:42.103061	2014-03-10 09:49:16.53367	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4284	2014-03-10 09:49:19.577021	\N	387	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4285	2014-03-10 09:49:19.654955	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4286	2014-03-10 09:49:21.080798	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4287	2014-03-10 09:49:22.644655	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4288	2014-03-10 09:49:23.455339	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4267	2014-03-10 09:48:53.408829	2014-03-10 09:49:25.883796	364	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4290	2014-03-10 09:49:29.89251	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4269	2014-03-10 09:48:55.195538	2014-03-10 09:49:31.549349	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4293	2014-03-10 09:49:31.548086	\N	351	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4279	2014-03-10 09:49:08.970842	2014-03-10 09:49:34.636814	360	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4294	2014-03-10 09:49:36.639396	\N	344	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4297	2014-03-10 09:49:39.317241	\N	364	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4282	2014-03-10 09:49:14.324357	2014-03-10 09:49:41.191907	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4278	2014-03-10 09:49:08.127772	2014-03-10 09:49:41.360951	389	30	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4299	2014-03-10 09:49:41.774245	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4276	2014-03-10 09:49:04.919154	2014-03-10 09:49:43.922974	357	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4298	2014-03-10 09:49:39.654225	2014-03-10 09:49:45.549108	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4289	2014-03-10 09:49:23.908731	2014-03-10 09:49:47.173706	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4295	2014-03-10 09:49:37.223474	2014-03-10 09:49:47.24635	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4296	2014-03-10 09:49:39.202772	2014-03-10 09:49:48.669073	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4280	2014-03-10 09:49:09.760054	2014-03-10 09:49:59.35453	374	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4283	2014-03-10 09:49:18.220072	2014-03-10 09:50:01.042529	383	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4291	2014-03-10 09:49:29.960545	2014-03-10 09:50:02.068781	345	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4300	2014-03-10 09:49:47.242536	2014-03-10 09:50:26.042538	360	72	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4304	2014-03-10 09:49:54.147869	\N	377	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4306	2014-03-10 09:49:55.021357	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4307	2014-03-10 09:49:59.975767	\N	357	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4292	2014-03-10 09:49:30.976149	2014-03-10 09:49:59.989579	375	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4308	2014-03-10 09:50:00.039222	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4310	2014-03-10 09:50:01.025442	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4312	2014-03-10 09:50:02.177099	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4313	2014-03-10 09:50:03.899555	\N	364	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4314	2014-03-10 09:50:04.352329	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4316	2014-03-10 09:50:08.10453	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4301	2014-03-10 09:49:50.818817	2014-03-10 09:50:11.111993	387	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4318	2014-03-10 09:50:14.628849	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4320	2014-03-10 09:50:16.868387	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4321	2014-03-10 09:50:17.253824	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4322	2014-03-10 09:50:18.754295	\N	375	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4302	2014-03-10 09:49:53.795925	2014-03-10 09:50:21.456613	189	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4317	2014-03-10 09:50:12.878563	2014-03-10 09:50:21.622254	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4323	2014-03-10 09:50:24.130518	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4324	2014-03-10 09:50:24.510312	\N	387	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4325	2014-03-10 09:50:27.277741	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4311	2014-03-10 09:50:01.582425	2014-03-10 09:50:27.427226	390	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4326	2014-03-10 09:50:28.592404	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4327	2014-03-10 09:50:28.976265	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4305	2014-03-10 09:49:54.259587	2014-03-10 09:50:30.163101	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4309	2014-03-10 09:50:01.015764	2014-03-10 09:50:33.707479	351	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4332	2014-03-10 09:50:34.15682	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4303	2014-03-10 09:49:53.834567	2014-03-10 09:50:34.815211	389	31	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4333	2014-03-10 09:50:35.235539	\N	357	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4315	2014-03-10 09:50:07.928529	2014-03-10 09:50:37.858846	344	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4328	2014-03-10 09:50:29.739235	2014-03-10 09:50:39.068601	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4330	2014-03-10 09:50:30.584307	2014-03-10 09:50:43.131699	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4336	2014-03-10 09:50:43.295537	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4337	2014-03-10 09:50:44.569777	\N	342	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4339	2014-03-10 09:50:47.555631	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4340	2014-03-10 09:50:47.602905	\N	189	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4342	2014-03-10 09:50:48.949924	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4319	2014-03-10 09:50:14.696652	2014-03-10 09:50:49.086523	383	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4344	2014-03-10 09:50:52.308108	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4345	2014-03-10 09:50:52.312316	\N	344	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4348	2014-03-10 09:50:56.222606	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4350	2014-03-10 09:51:01.162704	\N	189	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4349	2014-03-10 09:50:58.520118	2014-03-10 09:51:03.10665	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4354	2014-03-10 09:51:06.33826	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4356	2014-03-10 09:51:09.448383	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4352	2014-03-10 09:51:03.097352	2014-03-10 09:51:10.67552	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4329	2014-03-10 09:50:30.325523	2014-03-10 09:51:11.169774	364	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4331	2014-03-10 09:50:30.900528	2014-03-10 09:51:11.810923	374	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4335	2014-03-10 09:50:43.141401	2014-03-10 09:51:14.402333	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4334	2014-03-10 09:50:39.525112	2014-03-10 09:51:15.396658	360	73	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4357	2014-03-10 09:51:17.547942	\N	357	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4343	2014-03-10 09:50:49.850075	2014-03-10 09:51:18.397328	390	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4341	2014-03-10 09:50:48.833943	2014-03-10 09:51:19.834658	351	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4338	2014-03-10 09:50:46.842715	2014-03-10 09:51:19.881645	389	32	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4358	2014-03-10 09:51:23.47127	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4346	2014-03-10 09:50:52.498615	2014-03-10 09:51:23.889631	370	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4359	2014-03-10 09:51:23.997456	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4361	2014-03-10 09:51:27.613369	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4355	2014-03-10 09:51:06.581338	2014-03-10 09:51:27.665509	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4364	2014-03-10 09:51:28.470217	\N	374	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4351	2014-03-10 09:51:02.063701	2014-03-10 09:51:28.928039	383	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4360	2014-03-10 09:51:26.198106	2014-03-10 09:51:30.10055	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4365	2014-03-10 09:51:31.663972	\N	344	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4347	2014-03-10 09:50:53.279895	2014-03-10 09:51:35.027937	345	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4367	2014-03-10 09:51:36.061714	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4368	2014-03-10 09:51:36.069456	\N	189	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4369	2014-03-10 09:51:36.517334	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4370	2014-03-10 09:51:36.585943	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4371	2014-03-10 09:51:36.896979	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4353	2014-03-10 09:51:03.278623	2014-03-10 09:51:40.45849	375	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4373	2014-03-10 09:51:41.674611	\N	383	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4374	2014-03-10 09:51:43.614918	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4375	2014-03-10 09:51:43.900308	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4376	2014-03-10 09:51:43.979833	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4378	2014-03-10 09:51:47.169289	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4363	2014-03-10 09:51:28.160119	2014-03-10 09:51:53.392107	360	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4380	2014-03-10 09:51:55.360705	\N	375	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4381	2014-03-10 09:51:55.791948	2014-03-10 09:52:04.527312	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4372	2014-03-10 09:51:39.650466	2014-03-10 09:52:06.873756	342	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4377	2014-03-10 09:51:44.491722	2014-03-10 09:52:09.385645	390	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4366	2014-03-10 09:51:33.983398	2014-03-10 09:52:14.600271	389	33	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4379	2014-03-10 09:51:48.900984	2014-03-10 09:52:22.759354	345	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4382	2014-03-10 09:51:57.625782	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4362	2014-03-10 09:51:27.675147	2014-03-10 09:52:00.935256	364	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4384	2014-03-10 09:52:02.94345	\N	357	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4385	2014-03-10 09:52:03.719729	\N	374	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4387	2014-03-10 09:52:12.139718	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4388	2014-03-10 09:52:13.518269	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4391	2014-03-10 09:52:23.627676	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4392	2014-03-10 09:52:23.677299	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4398	2014-03-10 09:52:29.031879	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4400	2014-03-10 09:52:36.853309	\N	345	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4383	2014-03-10 09:52:00.475282	2014-03-10 09:52:41.308047	344	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4386	2014-03-10 09:52:07.440488	2014-03-10 09:52:44.512	360	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4401	2014-03-10 09:52:37.224828	2014-03-10 09:52:45.835959	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4389	2014-03-10 09:52:16.933302	2014-03-10 09:52:46.439716	364	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4403	2014-03-10 09:52:51.048777	\N	390	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4395	2014-03-10 09:52:28.022859	2014-03-10 09:52:55.495765	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4406	2014-03-10 09:52:56.710878	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4407	2014-03-10 09:52:56.721581	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4408	2014-03-10 09:52:57.9801	\N	375	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4393	2014-03-10 09:52:26.599763	2014-03-10 09:52:58.173731	370	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4409	2014-03-10 09:52:58.555112	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4390	2014-03-10 09:52:18.68886	2014-03-10 09:52:59.667408	374	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4397	2014-03-10 09:52:28.501485	2014-03-10 09:53:02.444495	383	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4394	2014-03-10 09:52:27.948447	2014-03-10 09:53:05.747445	389	34	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4402	2014-03-10 09:52:39.90317	2014-03-10 09:53:08.762803	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4414	2014-03-10 09:53:11.264817	\N	390	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4396	2014-03-10 09:52:28.453625	2014-03-10 09:53:13.790122	357	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4416	2014-03-10 09:53:14.719383	\N	374	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4411	2014-03-10 09:53:04.38569	2014-03-10 09:53:15.375435	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4399	2014-03-10 09:52:36.140949	2014-03-10 09:53:18.598413	351	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4415	2014-03-10 09:53:12.886617	2014-03-10 09:53:19.768152	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4422	2014-03-10 09:53:26.063377	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4405	2014-03-10 09:52:56.584462	2014-03-10 09:53:26.998539	360	76	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4404	2014-03-10 09:52:54.314239	2014-03-10 09:53:29.189948	344	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4426	2014-03-10 09:53:32.162845	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4427	2014-03-10 09:53:32.53198	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4413	2014-03-10 09:53:08.768198	2014-03-10 09:53:35.648562	342	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4428	2014-03-10 09:53:37.739446	\N	390	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4429	2014-03-10 09:53:38.991891	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4410	2014-03-10 09:53:00.674198	2014-03-10 09:53:39.012458	364	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4412	2014-03-10 09:53:07.789842	2014-03-10 09:53:39.216551	356	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4431	2014-03-10 09:53:48.179827	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4419	2014-03-10 09:53:18.531367	2014-03-10 09:53:48.591151	389	35	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4425	2014-03-10 09:53:27.404112	2014-03-10 09:53:48.681261	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4434	2014-03-10 09:53:51.980497	\N	364	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4418	2014-03-10 09:53:16.020232	2014-03-10 09:53:53.41006	383	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4417	2014-03-10 09:53:14.893058	2014-03-10 09:53:55.077458	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4420	2014-03-10 09:53:19.607181	2014-03-10 09:53:56.823517	375	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4423	2014-03-10 09:53:27.081216	2014-03-10 09:54:01.270663	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4421	2014-03-10 09:53:21.269291	2014-03-10 09:54:02.78812	388	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4430	2014-03-10 09:53:39.271182	2014-03-10 09:54:03.233628	360	77	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4437	2014-03-10 09:54:03.885624	\N	390	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4438	2014-03-10 09:54:04.202738	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4439	2014-03-10 09:54:04.907508	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4424	2014-03-10 09:53:27.091653	2014-03-10 09:54:05.453119	357	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4440	2014-03-10 09:54:07.984238	\N	374	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4441	2014-03-10 09:54:10.086524	\N	383	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4442	2014-03-10 09:54:10.640654	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4444	2014-03-10 09:54:13.307733	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4445	2014-03-10 09:54:13.371083	\N	377	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4433	2014-03-10 09:53:51.919031	2014-03-10 09:54:23.352513	356	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4450	2014-03-10 09:54:24.306295	\N	357	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4451	2014-03-10 09:54:25.588351	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4432	2014-03-10 09:53:48.536486	2014-03-10 09:54:26.337249	344	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4435	2014-03-10 09:54:01.574548	2014-03-10 09:54:31.019816	389	36	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4454	2014-03-10 09:54:32.810782	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4458	2014-03-10 09:54:38.492515	\N	356	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4436	2014-03-10 09:54:01.855754	2014-03-10 09:54:38.630005	370	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4459	2014-03-10 09:54:39.547859	\N	374	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4449	2014-03-10 09:54:21.198662	2014-03-10 09:54:42.473322	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4447	2014-03-10 09:54:15.855054	2014-03-10 09:54:45.741291	360	78	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4446	2014-03-10 09:54:15.818703	2014-03-10 09:54:47.727018	390	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4456	2014-03-10 09:54:38.453117	2014-03-10 09:54:47.992905	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4443	2014-03-10 09:54:12.445637	2014-03-10 09:54:52.829842	375	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4453	2014-03-10 09:54:30.624699	2014-03-10 09:54:59.325496	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4461	2014-03-10 09:54:43.700035	2014-03-10 09:55:09.099917	389	37	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4457	2014-03-10 09:54:38.47702	2014-03-10 09:55:09.699036	364	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4452	2014-03-10 09:54:29.990579	2014-03-10 09:55:11.07198	383	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4460	2014-03-10 09:54:40.36375	2014-03-10 09:55:12.580592	344	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4455	2014-03-10 09:54:33.463225	2014-03-10 09:55:13.679926	345	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4462	2014-03-10 09:54:52.145105	\N	342	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4463	2014-03-10 09:54:55.327634	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4464	2014-03-10 09:54:55.332142	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4448	2014-03-10 09:54:15.86386	2014-03-10 09:54:56.854504	388	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4465	2014-03-10 09:55:00.048764	\N	357	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4467	2014-03-10 09:55:05.770887	\N	390	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4468	2014-03-10 09:55:05.988123	\N	356	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4469	2014-03-10 09:55:06.951326	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4470	2014-03-10 09:55:10.104217	\N	388	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4471	2014-03-10 09:55:10.313528	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4473	2014-03-10 09:55:12.904644	\N	387	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4474	2014-03-10 09:55:16.24382	\N	375	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4476	2014-03-10 09:55:20.693378	\N	389	38	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4477	2014-03-10 09:55:20.828179	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4480	2014-03-10 09:55:22.740432	\N	364	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4478	2014-03-10 09:55:22.124888	2014-03-10 09:55:28.652585	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4484	2014-03-10 09:55:29.629377	\N	387	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4466	2014-03-10 09:55:00.254898	2014-03-10 09:55:31.476424	360	79	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4488	2014-03-10 09:55:42.279483	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4472	2014-03-10 09:55:11.383392	2014-03-10 09:55:43.097295	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4489	2014-03-10 09:55:43.160228	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4490	2014-03-10 09:55:43.51173	\N	390	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4487	2014-03-10 09:55:34.135399	2014-03-10 09:55:44.768017	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4492	2014-03-10 09:55:46.583043	\N	388	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4493	2014-03-10 09:55:49.422864	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4481	2014-03-10 09:55:24.412264	2014-03-10 09:55:54.724882	356	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4494	2014-03-10 09:55:55.49191	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4495	2014-03-10 09:55:55.598755	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4496	2014-03-10 09:55:57.648903	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4497	2014-03-10 09:55:58.599151	\N	364	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4498	2014-03-10 09:55:59.577648	\N	357	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4499	2014-03-10 09:56:00.38867	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4482	2014-03-10 09:55:25.914028	2014-03-10 09:56:00.619258	383	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4475	2014-03-10 09:55:18.560241	2014-03-10 09:56:00.797034	351	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4483	2014-03-10 09:55:26.968533	2014-03-10 09:56:02.351164	344	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4479	2014-03-10 09:55:22.530266	2014-03-10 09:56:05.433347	342	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4485	2014-03-10 09:55:32.13119	2014-03-10 09:56:05.461476	375	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4486	2014-03-10 09:55:33.589432	2014-03-10 09:56:06.110893	389	37	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4500	2014-03-10 09:56:07.377398	\N	356	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4491	2014-03-10 09:55:43.574129	2014-03-10 09:56:11.705366	360	80	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4502	2014-03-10 09:56:13.930615	\N	383	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4503	2014-03-10 09:56:15.597077	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4504	2014-03-10 09:56:16.254928	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4501	2014-03-10 09:56:10.463066	2014-03-10 09:56:16.357131	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4505	2014-03-10 09:56:17.047923	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4507	2014-03-10 09:56:18.43375	\N	374	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4508	2014-03-10 09:56:19.606293	\N	344	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4510	2014-03-10 09:56:23.624344	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4514	2014-03-10 09:56:27.497756	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4515	2014-03-10 09:56:29.891256	\N	383	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4516	2014-03-10 09:56:33.287185	\N	388	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4517	2014-03-10 09:56:33.372641	\N	345	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4518	2014-03-10 09:56:33.516029	\N	344	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4519	2014-03-10 09:56:35.830146	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4520	2014-03-10 09:56:38.059652	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4521	2014-03-10 09:56:40.432055	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4522	2014-03-10 09:56:42.501556	\N	357	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4511	2014-03-10 09:56:23.94155	2014-03-10 09:56:45.113447	360	81	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4506	2014-03-10 09:56:17.732668	2014-03-10 09:56:49.943003	389	38	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4525	2014-03-10 09:56:50.941153	\N	383	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4523	2014-03-10 09:56:42.76687	2014-03-10 09:56:55.14073	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4528	2014-03-10 09:56:55.737005	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4512	2014-03-10 09:56:24.53302	2014-03-10 09:56:57.098978	364	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4527	2014-03-10 09:56:55.692496	2014-03-10 09:57:00.116352	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4513	2014-03-10 09:56:24.930692	2014-03-10 09:57:01.230541	370	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4530	2014-03-10 09:57:01.442837	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4533	2014-03-10 09:57:04.449535	\N	388	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4534	2014-03-10 09:57:06.815729	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4509	2014-03-10 09:56:21.404757	2014-03-10 09:57:08.393854	375	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4535	2014-03-10 09:57:10.605346	\N	342	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4537	2014-03-10 09:57:17.714412	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4538	2014-03-10 09:57:18.695321	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4524	2014-03-10 09:56:48.584263	2014-03-10 09:57:20.777119	356	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4539	2014-03-10 09:57:20.946021	\N	352	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4540	2014-03-10 09:57:21.639707	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4529	2014-03-10 09:56:58.104987	2014-03-10 09:57:25.514468	360	82	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4541	2014-03-10 09:57:26.920031	\N	375	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4542	2014-03-10 09:57:28.138013	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4543	2014-03-10 09:57:30.603543	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4526	2014-03-10 09:56:51.674345	2014-03-10 09:57:31.85656	374	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4532	2014-03-10 09:57:03.860575	2014-03-10 09:57:42.519189	351	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4531	2014-03-10 09:57:02.619771	2014-03-10 09:57:31.523938	389	39	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4544	2014-03-10 09:57:33.098409	\N	356	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4546	2014-03-10 09:57:39.714048	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4536	2014-03-10 09:57:13.137709	2014-03-10 09:57:47.138557	364	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4549	2014-03-10 09:57:48.621766	\N	374	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4547	2014-03-10 09:57:43.547638	2014-03-10 09:57:49.119743	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4550	2014-03-10 09:57:49.624734	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4552	2014-03-10 09:57:51.128481	\N	344	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4553	2014-03-10 09:57:54.328779	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4551	2014-03-10 09:57:50.718268	2014-03-10 09:58:00.076567	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4558	2014-03-10 09:58:03.22854	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4545	2014-03-10 09:57:39.615222	2014-03-10 09:58:08.777362	360	83	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4554	2014-03-10 09:57:54.848029	2014-03-10 09:58:09.603314	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4561	2014-03-10 09:58:12.285443	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4548	2014-03-10 09:57:43.599128	2014-03-10 09:58:14.669338	389	40	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4563	2014-03-10 09:58:14.676156	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4565	2014-03-10 09:58:23.027665	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4566	2014-03-10 09:58:24.853167	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4556	2014-03-10 09:57:59.276189	2014-03-10 09:58:25.849342	388	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4568	2014-03-10 09:58:28.41595	\N	389	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4560	2014-03-10 09:58:04.345549	2014-03-10 09:58:29.190297	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4562	2014-03-10 09:58:13.523454	2014-03-10 09:58:31.575314	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4571	2014-03-10 09:58:36.346506	\N	374	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4572	2014-03-10 09:58:36.730353	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4557	2014-03-10 09:58:01.471776	2014-03-10 09:58:37.468876	364	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4555	2014-03-10 09:57:55.820213	2014-03-10 09:58:38.002218	351	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4570	2014-03-10 09:58:34.460104	2014-03-10 09:58:41.229552	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4577	2014-03-10 09:58:46.716925	\N	342	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4567	2014-03-10 09:58:25.836852	2014-03-10 09:58:47.2754	189	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4578	2014-03-10 09:58:50.312337	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4573	2014-03-10 09:58:39.391949	2014-03-10 09:58:53.631875	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4564	2014-03-10 09:58:21.277887	2014-03-10 09:58:56.370888	360	84	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4582	2014-03-10 09:58:58.880951	\N	387	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4583	2014-03-10 09:59:00.40241	\N	189	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4559	2014-03-10 09:58:03.2977	2014-03-10 09:59:01.179811	383	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4574	2014-03-10 09:58:39.891806	2014-03-10 09:59:04.410045	388	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4585	2014-03-10 09:59:05.106479	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4586	2014-03-10 09:59:07.490919	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4575	2014-03-10 09:58:43.847827	2014-03-10 09:59:07.850718	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4569	2014-03-10 09:58:30.746234	2014-03-10 09:59:09.266722	375	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4588	2014-03-10 09:59:09.335551	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4590	2014-03-10 09:59:13.436093	\N	383	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4591	2014-03-10 09:59:16.818442	\N	389	40	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4579	2014-03-10 09:58:51.943841	2014-03-10 09:59:18.736651	364	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4594	2014-03-10 09:59:21.831666	\N	352	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4581	2014-03-10 09:58:53.543968	2014-03-10 09:59:21.897552	356	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4595	2014-03-10 09:59:24.104375	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4593	2014-03-10 09:59:19.602272	2014-03-10 09:59:24.469002	342	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4576	2014-03-10 09:58:43.858641	2014-03-10 09:59:31.53944	344	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4598	2014-03-10 09:59:33.920199	\N	364	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4599	2014-03-10 09:59:35.054481	\N	342	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4589	2014-03-10 09:59:10.015193	2014-03-10 09:59:35.924552	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4580	2014-03-10 09:58:52.221039	2014-03-10 09:59:35.982103	351	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4600	2014-03-10 09:59:38.284428	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4587	2014-03-10 09:59:08.924187	2014-03-10 09:59:44.796926	360	85	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4605	2014-03-10 09:59:46.701763	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4584	2014-03-10 09:59:01.739779	2014-03-10 09:59:47.764167	374	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4607	2014-03-10 09:59:49.002987	\N	377	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4608	2014-03-10 09:59:49.086671	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4609	2014-03-10 09:59:50.980405	\N	356	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4601	2014-03-10 09:59:40.599505	2014-03-10 09:59:52.112499	387	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4597	2014-03-10 09:59:31.950638	2014-03-10 09:59:57.056674	370	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4592	2014-03-10 09:59:18.461536	2014-03-10 09:59:57.486403	388	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4612	2014-03-10 09:59:58.653584	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4613	2014-03-10 10:00:02.607376	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4610	2014-03-10 09:59:55.355898	2014-03-10 10:00:07.019015	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4616	2014-03-10 10:00:11.235764	\N	388	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4602	2014-03-10 09:59:43.455214	2014-03-10 10:00:13.422249	389	39	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4618	2014-03-10 10:00:14.490618	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4596	2014-03-10 09:59:28.024827	2014-03-10 10:00:16.989683	375	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4621	2014-03-10 10:00:20.576324	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4622	2014-03-10 10:00:26.77953	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4623	2014-03-10 10:00:27.110384	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4606	2014-03-10 09:59:48.357969	2014-03-10 10:00:27.67141	344	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4615	2014-03-10 10:00:04.428354	2014-03-10 10:00:34.972688	364	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4603	2014-03-10 09:59:44.448219	2014-03-10 10:00:35.029618	386	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4617	2014-03-10 10:00:12.10899	2014-03-10 10:00:37.717157	387	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4619	2014-03-10 10:00:18.761352	2014-03-10 10:00:40.755959	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4614	2014-03-10 10:00:02.727976	2014-03-10 10:00:43.28209	374	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4620	2014-03-10 10:00:20.571517	2014-03-10 10:00:57.560597	342	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4611	2014-03-10 09:59:57.889926	2014-03-10 10:00:27.439286	360	86	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4625	2014-03-10 10:00:29.670356	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4626	2014-03-10 10:00:36.653656	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4604	2014-03-10 09:59:46.452456	2014-03-10 10:00:40.062583	383	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4628	2014-03-10 10:00:42.924897	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4629	2014-03-10 10:00:46.595016	\N	375	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4630	2014-03-10 10:00:47.684239	\N	364	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4631	2014-03-10 10:00:49.031732	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4632	2014-03-10 10:00:50.13632	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4634	2014-03-10 10:00:52.712404	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4635	2014-03-10 10:00:52.79491	\N	383	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4637	2014-03-10 10:00:56.942712	\N	387	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4638	2014-03-10 10:00:58.697629	\N	374	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4639	2014-03-10 10:01:00.565014	\N	388	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4624	2014-03-10 10:00:28.411886	2014-03-10 10:01:01.25192	389	40	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4640	2014-03-10 10:01:01.603391	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4641	2014-03-10 10:01:02.130948	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4642	2014-03-10 10:01:03.36779	\N	375	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4627	2014-03-10 10:00:39.17113	2014-03-10 10:01:07.705114	360	87	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4643	2014-03-10 10:01:10.655384	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4644	2014-03-10 10:01:15.487178	\N	389	41	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4646	2014-03-10 10:01:16.455801	\N	375	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4647	2014-03-10 10:01:17.316156	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4648	2014-03-10 10:01:18.985487	\N	374	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4633	2014-03-10 10:00:50.534764	2014-03-10 10:01:26.633026	344	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4636	2014-03-10 10:00:54.024966	2014-03-10 10:01:27.86037	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4653	2014-03-10 10:01:33.953363	\N	374	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4650	2014-03-10 10:01:24.286231	2014-03-10 10:01:35.310715	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4654	2014-03-10 10:01:35.501817	\N	370	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4657	2014-03-10 10:01:42.941583	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4660	2014-03-10 10:01:45.074656	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4649	2014-03-10 10:01:19.485027	2014-03-10 10:01:46.600298	360	88	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4661	2014-03-10 10:01:47.865043	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4651	2014-03-10 10:01:26.08536	2014-03-10 10:01:48.176931	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4652	2014-03-10 10:01:26.876032	2014-03-10 10:01:51.503659	387	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4662	2014-03-10 10:01:52.204574	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4645	2014-03-10 10:01:16.111762	2014-03-10 10:01:53.748864	364	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4663	2014-03-10 10:01:54.100477	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4666	2014-03-10 10:02:01.531225	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4667	2014-03-10 10:02:04.065682	\N	342	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4656	2014-03-10 10:01:39.762553	2014-03-10 10:02:07.30934	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4658	2014-03-10 10:01:43.344428	2014-03-10 10:02:10.330467	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4671	2014-03-10 10:02:10.987199	\N	375	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4672	2014-03-10 10:02:11.037367	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4664	2014-03-10 10:01:56.985622	2014-03-10 10:02:18.108367	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4676	2014-03-10 10:02:21.565539	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4677	2014-03-10 10:02:22.077635	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4674	2014-03-10 10:02:16.181715	2014-03-10 10:02:22.334914	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4678	2014-03-10 10:02:25.355733	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4655	2014-03-10 10:01:39.446058	2014-03-10 10:02:25.984055	344	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4668	2014-03-10 10:02:06.385504	2014-03-10 10:02:28.741883	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4679	2014-03-10 10:02:28.753474	\N	388	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4665	2014-03-10 10:02:00.577866	2014-03-10 10:02:34.184648	360	89	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4680	2014-03-10 10:02:35.428912	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4681	2014-03-10 10:02:37.640946	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4682	2014-03-10 10:02:37.777919	\N	375	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4659	2014-03-10 10:01:44.56625	2014-03-10 10:02:41.249697	383	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4685	2014-03-10 10:02:41.450873	\N	387	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4686	2014-03-10 10:02:41.979708	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4687	2014-03-10 10:02:42.279072	\N	345	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4670	2014-03-10 10:02:06.608522	2014-03-10 10:02:43.085173	389	41	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4673	2014-03-10 10:02:13.151564	2014-03-10 10:02:43.095031	356	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4688	2014-03-10 10:02:43.107211	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4689	2014-03-10 10:02:43.441754	\N	342	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4669	2014-03-10 10:02:06.441774	2014-03-10 10:02:43.893337	364	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4683	2014-03-10 10:02:38.220349	2014-03-10 10:02:49.988697	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4690	2014-03-10 10:02:51.293291	\N	370	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4692	2014-03-10 10:02:55.053097	\N	383	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4675	2014-03-10 10:02:19.540638	2014-03-10 10:02:55.390344	374	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4695	2014-03-10 10:02:59.972577	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4697	2014-03-10 10:03:00.688378	\N	388	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4698	2014-03-10 10:03:03.609042	\N	377	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4699	2014-03-10 10:03:04.045165	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4691	2014-03-10 10:02:51.601328	2014-03-10 10:03:17.990577	360	90	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4684	2014-03-10 10:02:40.635321	2014-03-10 10:03:31.444387	344	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4696	2014-03-10 10:03:00.053568	2014-03-10 10:03:38.359681	351	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4703	2014-03-10 10:03:21.542793	2014-03-10 10:03:41.859012	387	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4701	2014-03-10 10:03:14.641387	2014-03-10 10:03:42.408682	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4704	2014-03-10 10:03:24.246931	2014-03-10 10:03:49.597274	342	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4700	2014-03-10 10:03:14.599715	2014-03-10 10:03:58.549327	374	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4702	2014-03-10 10:03:16.626408	2014-03-10 10:04:06.379868	372	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4706	2014-03-10 10:03:28.239838	\N	375	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4707	2014-03-10 10:03:29.685604	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4693	2014-03-10 10:02:56.681368	2014-03-10 10:03:30.896699	389	42	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4709	2014-03-10 10:03:33.602717	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4694	2014-03-10 10:02:57.424106	2014-03-10 10:03:35.517566	364	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4711	2014-03-10 10:03:44.817714	\N	389	43	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4705	2014-03-10 10:03:26.295726	2014-03-10 10:03:46.425348	189	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4713	2014-03-10 10:03:50.185335	\N	364	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4714	2014-03-10 10:03:50.750399	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4715	2014-03-10 10:03:53.638116	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4716	2014-03-10 10:03:55.25194	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4718	2014-03-10 10:03:58.537818	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4720	2014-03-10 10:04:00.322853	\N	375	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4721	2014-03-10 10:04:01.561757	\N	377	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4708	2014-03-10 10:03:31.239012	2014-03-10 10:04:02.893832	360	91	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4725	2014-03-10 10:04:15.104556	\N	364	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4728	2014-03-10 10:04:17.351042	\N	370	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4719	2014-03-10 10:03:59.311526	2014-03-10 10:04:18.967469	189	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4717	2014-03-10 10:03:57.204563	2014-03-10 10:04:19.911111	387	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4710	2014-03-10 10:03:38.292512	2014-03-10 10:04:23.171609	383	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4730	2014-03-10 10:04:24.478751	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4722	2014-03-10 10:04:01.846438	2014-03-10 10:04:24.519704	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4727	2014-03-10 10:04:16.286624	2014-03-10 10:04:26.193026	377	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4712	2014-03-10 10:03:46.619937	2014-03-10 10:04:34.829318	344	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4723	2014-03-10 10:04:08.908766	2014-03-10 10:04:36.392955	389	43	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4736	2014-03-10 10:04:40.098128	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4726	2014-03-10 10:04:15.780959	2014-03-10 10:04:42.07611	360	92	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4738	2014-03-10 10:04:44.02472	\N	189	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4729	2014-03-10 10:04:21.620459	2014-03-10 10:04:47.766746	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4724	2014-03-10 10:04:13.495106	2014-03-10 10:04:49.181827	374	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4742	2014-03-10 10:04:55.252697	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4744	2014-03-10 10:05:01.977818	\N	374	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4733	2014-03-10 10:04:37.513521	2014-03-10 10:05:02.401708	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4735	2014-03-10 10:04:39.399612	2014-03-10 10:05:09.554796	377	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4745	2014-03-10 10:05:09.998252	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4731	2014-03-10 10:04:25.087517	2014-03-10 10:05:10.438584	372	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4747	2014-03-10 10:05:10.743236	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4734	2014-03-10 10:04:38.133603	2014-03-10 10:05:14.635207	345	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4732	2014-03-10 10:04:35.592267	2014-03-10 10:05:20.093267	383	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4741	2014-03-10 10:04:54.728604	2014-03-10 10:05:22.700154	360	93	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4749	2014-03-10 10:05:24.388734	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4737	2014-03-10 10:04:41.295349	2014-03-10 10:05:24.878288	375	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4740	2014-03-10 10:04:49.924488	2014-03-10 10:05:26.93453	389	44	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4750	2014-03-10 10:05:27.811941	\N	372	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4743	2014-03-10 10:04:59.59388	2014-03-10 10:05:30.354787	352	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4739	2014-03-10 10:04:49.262309	2014-03-10 10:05:32.236156	344	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4752	2014-03-10 10:05:34.416934	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4753	2014-03-10 10:05:34.901619	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4755	2014-03-10 10:05:36.691335	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4757	2014-03-10 10:05:42.604516	\N	389	45	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4746	2014-03-10 10:05:10.493497	2014-03-10 10:05:46.492473	364	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4758	2014-03-10 10:05:47.070696	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4748	2014-03-10 10:05:14.326536	2014-03-10 10:05:49.226264	189	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4759	2014-03-10 10:05:50.405381	\N	352	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4751	2014-03-10 10:05:28.601168	2014-03-10 10:05:52.839703	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4761	2014-03-10 10:05:59.765862	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4762	2014-03-10 10:06:00.309453	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4763	2014-03-10 10:06:01.717661	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4764	2014-03-10 10:06:02.107023	\N	189	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4754	2014-03-10 10:05:35.666945	2014-03-10 10:06:05.095127	360	94	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4766	2014-03-10 10:06:06.223591	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4768	2014-03-10 10:06:13.012343	\N	356	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4769	2014-03-10 10:06:15.810712	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4771	2014-03-10 10:06:27.171725	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4772	2014-03-10 10:06:30.625267	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4756	2014-03-10 10:05:41.600902	2014-03-10 10:06:31.080948	375	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4765	2014-03-10 10:06:03.080948	2014-03-10 10:06:31.470799	364	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4773	2014-03-10 10:06:31.730405	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4760	2014-03-10 10:05:58.844415	2014-03-10 10:06:35.286485	372	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4774	2014-03-10 10:06:43.177232	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4777	2014-03-10 10:06:48.57134	\N	364	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4770	2014-03-10 10:06:17.770073	2014-03-10 10:06:49.043052	360	95	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4778	2014-03-10 10:06:50.003268	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4779	2014-03-10 10:06:50.193081	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4780	2014-03-10 10:06:58.20786	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4782	2014-03-10 10:06:58.976789	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4767	2014-03-10 10:06:10.904289	2014-03-10 10:07:00.693541	389	45	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4783	2014-03-10 10:07:01.626283	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4775	2014-03-10 10:06:44.3524	2014-03-10 10:07:20.874352	351	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4784	2014-03-10 10:07:02.550824	2014-03-10 10:07:30.974004	360	96	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4781	2014-03-10 10:06:58.542163	2014-03-10 10:07:36.869904	372	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4776	2014-03-10 10:06:45.052146	2014-03-10 10:07:08.832285	189	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4789	2014-03-10 10:07:12.68013	\N	389	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4785	2014-03-10 10:07:04.366412	2014-03-10 10:07:17.864114	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4791	2014-03-10 10:07:20.219987	\N	352	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4788	2014-03-10 10:07:12.132646	2014-03-10 10:07:21.186174	386	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4794	2014-03-10 10:07:33.078928	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4787	2014-03-10 10:07:09.337147	2014-03-10 10:07:34.964318	342	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4795	2014-03-10 10:07:35.914815	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4797	2014-03-10 10:07:40.302767	\N	351	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4790	2014-03-10 10:07:18.830775	2014-03-10 10:07:44.771911	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4800	2014-03-10 10:07:45.236561	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4792	2014-03-10 10:07:26.393106	2014-03-10 10:07:51.375326	189	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4801	2014-03-10 10:07:51.953819	\N	372	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4793	2014-03-10 10:07:31.739869	2014-03-10 10:07:54.379913	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4803	2014-03-10 10:07:56.29927	\N	351	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4804	2014-03-10 10:07:58.635981	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4786	2014-03-10 10:07:05.745657	2014-03-10 10:07:58.940508	375	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4805	2014-03-10 10:08:01.947388	\N	342	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4798	2014-03-10 10:07:40.928925	2014-03-10 10:08:04.632775	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4808	2014-03-10 10:08:06.253508	\N	372	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4809	2014-03-10 10:08:06.290937	\N	352	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4806	2014-03-10 10:08:02.073387	2014-03-10 10:08:07.595497	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4796	2014-03-10 10:07:38.791724	2014-03-10 10:08:14.835629	364	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4799	2014-03-10 10:07:44.76536	2014-03-10 10:08:18.897266	360	97	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4812	2014-03-10 10:08:20.248885	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4813	2014-03-10 10:08:22.420633	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4807	2014-03-10 10:08:04.272831	2014-03-10 10:08:28.003284	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4802	2014-03-10 10:07:54.882762	2014-03-10 10:08:28.911055	389	45	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4815	2014-03-10 10:08:31.375782	\N	342	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4816	2014-03-10 10:08:31.687687	\N	372	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4817	2014-03-10 10:08:35.981366	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4818	2014-03-10 10:08:36.590817	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4819	2014-03-10 10:08:37.685776	\N	364	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4820	2014-03-10 10:08:42.527762	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4811	2014-03-10 10:08:19.962882	2014-03-10 10:08:43.893634	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4810	2014-03-10 10:08:08.738756	2014-03-10 10:08:45.436612	189	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4822	2014-03-10 10:08:50.990753	\N	342	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4824	2014-03-10 10:08:54.11802	\N	372	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4825	2014-03-10 10:08:57.107578	\N	352	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4814	2014-03-10 10:08:30.848866	2014-03-10 10:08:58.82453	360	98	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4826	2014-03-10 10:09:02.31162	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4827	2014-03-10 10:09:03.566529	\N	345	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4828	2014-03-10 10:09:06.911597	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4830	2014-03-10 10:09:09.359876	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4831	2014-03-10 10:09:09.36375	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4832	2014-03-10 10:09:11.097802	\N	360	99	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4821	2014-03-10 10:08:43.632818	2014-03-10 10:09:12.905937	389	46	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4833	2014-03-10 10:09:19.104	\N	390	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4823	2014-03-10 10:08:52.598811	2014-03-10 10:09:28.100975	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4834	2014-03-10 10:09:29.242841	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4835	2014-03-10 10:09:29.538438	\N	372	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4837	2014-03-10 10:09:32.124925	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4838	2014-03-10 10:09:33.757358	\N	345	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4839	2014-03-10 10:09:34.167699	\N	352	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4841	2014-03-10 10:09:38.999235	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4829	2014-03-10 10:09:08.003881	2014-03-10 10:09:45.343498	189	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4842	2014-03-10 10:09:45.776215	\N	372	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4844	2014-03-10 10:09:48.619995	\N	345	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4846	2014-03-10 10:09:54.436933	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4836	2014-03-10 10:09:30.501287	2014-03-10 10:09:58.346954	360	99	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4847	2014-03-10 10:09:54.468116	2014-03-10 10:10:03.364542	352	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4849	2014-03-10 10:10:06.549512	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4850	2014-03-10 10:10:07.322167	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4853	2014-03-10 10:10:15.311228	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4843	2014-03-10 10:09:48.560522	2014-03-10 10:10:15.377368	390	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4854	2014-03-10 10:10:17.813713	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4840	2014-03-10 10:09:38.747745	2014-03-10 10:10:24.6784	386	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4848	2014-03-10 10:10:01.146178	2014-03-10 10:10:29.651809	189	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4855	2014-03-10 10:10:30.671454	\N	389	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4856	2014-03-10 10:10:30.67975	\N	351	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4857	2014-03-10 10:10:32.248547	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4858	2014-03-10 10:10:36.221398	\N	345	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4859	2014-03-10 10:10:36.286479	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4852	2014-03-10 10:10:14.714963	2014-03-10 10:10:36.67779	352	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4845	2014-03-10 10:09:53.402242	2014-03-10 10:10:38.791198	364	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4861	2014-03-10 10:10:40.17617	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4862	2014-03-10 10:10:44.685132	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4851	2014-03-10 10:10:11.450986	2014-03-10 10:10:44.688931	360	100	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4864	2014-03-10 10:10:47.457766	\N	383	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4865	2014-03-10 10:10:48.28542	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4863	2014-03-10 10:10:46.819722	2014-03-10 10:11:32.896288	189	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4867	2014-03-10 10:10:53.13541	\N	364	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4869	2014-03-10 10:10:59.600656	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4870	2014-03-10 10:11:04.639206	\N	345	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4860	2014-03-10 10:10:36.750354	2014-03-10 10:11:06.724097	390	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4872	2014-03-10 10:11:08.573405	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4866	2014-03-10 10:10:50.07175	2014-03-10 10:11:19.711921	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4873	2014-03-10 10:11:25.632021	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4868	2014-03-10 10:10:57.673322	2014-03-10 10:11:28.39082	360	101	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4875	2014-03-10 10:11:30.497717	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4871	2014-03-10 10:11:05.253604	2014-03-10 10:11:35.043051	389	45	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4878	2014-03-10 10:11:35.837887	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4879	2014-03-10 10:11:38.000516	2014-03-10 10:11:44.062059	345	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4881	2014-03-10 10:11:45.57352	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4883	2014-03-10 10:11:47.090743	\N	389	46	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4885	2014-03-10 10:11:50.425246	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4886	2014-03-10 10:11:50.899076	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4887	2014-03-10 10:11:53.527626	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4882	2014-03-10 10:11:47.033446	2014-03-10 10:11:54.741419	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4876	2014-03-10 10:11:32.607201	2014-03-10 10:12:00.81051	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4880	2014-03-10 10:11:41.947479	2014-03-10 10:12:06.630627	360	102	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4891	2014-03-10 10:12:08.062471	\N	390	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4892	2014-03-10 10:12:08.168064	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4893	2014-03-10 10:12:13.542493	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4874	2014-03-10 10:11:26.686915	2014-03-10 10:12:15.079714	383	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4894	2014-03-10 10:12:17.775125	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4884	2014-03-10 10:11:48.759787	2014-03-10 10:12:22.913666	189	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4877	2014-03-10 10:11:33.565427	2014-03-10 10:12:24.463218	364	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4888	2014-03-10 10:11:55.210932	2014-03-10 10:12:24.895491	345	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4889	2014-03-10 10:12:00.468297	2014-03-10 10:12:25.72953	387	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4898	2014-03-10 10:12:27.356164	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4897	2014-03-10 10:12:24.791881	2014-03-10 10:12:30.391615	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4899	2014-03-10 10:12:31.939805	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4900	2014-03-10 10:12:33.904504	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
4901	2014-03-10 10:12:34.343336	\N	370	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4902	2014-03-10 10:12:36.4163	\N	189	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4903	2014-03-10 10:12:38.160672	\N	364	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4904	2014-03-10 10:12:40.634827	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4906	2014-03-10 10:12:41.900867	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4908	2014-03-10 10:12:45.032709	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4909	2014-03-10 10:12:45.936702	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4895	2014-03-10 10:12:19.461655	2014-03-10 10:12:48.688297	360	103	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4896	2014-03-10 10:12:22.266476	2014-03-10 10:12:49.584541	390	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4890	2014-03-10 10:12:05.236381	2014-03-10 10:12:53.025924	389	46	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4910	2014-03-10 10:12:56.361843	\N	189	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4913	2014-03-10 10:13:02.130187	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4915	2014-03-10 10:13:05.372226	\N	372	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4907	2014-03-10 10:12:42.726505	2014-03-10 10:13:08.073177	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4917	2014-03-10 10:13:11.277062	\N	364	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4918	2014-03-10 10:13:14.604786	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4905	2014-03-10 10:12:41.828198	2014-03-10 10:13:21.284225	345	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4919	2014-03-10 10:13:20.667302	2014-03-10 10:13:26.539985	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4922	2014-03-10 10:13:28.759347	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4912	2014-03-10 10:13:00.672791	2014-03-10 10:13:29.305714	360	104	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4921	2014-03-10 10:13:25.820213	2014-03-10 10:13:30.702907	370	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4914	2014-03-10 10:13:04.746908	2014-03-10 10:13:32.145853	389	47	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4923	2014-03-10 10:13:35.851951	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4911	2014-03-10 10:12:57.16412	2014-03-10 10:13:37.985393	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4916	2014-03-10 10:13:10.300282	2014-03-10 10:13:39.407629	390	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4926	2014-03-10 10:13:43.93998	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4927	2014-03-10 10:13:46.81824	\N	389	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4928	2014-03-10 10:13:49.240976	\N	342	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4929	2014-03-10 10:13:49.570297	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4930	2014-03-10 10:13:51.206947	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4931	2014-03-10 10:13:51.504812	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4932	2014-03-10 10:13:54.99549	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4920	2014-03-10 10:13:23.652831	2014-03-10 10:13:59.976723	387	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4933	2014-03-10 10:14:00.892745	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4935	2014-03-10 10:14:04.643304	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4924	2014-03-10 10:13:37.266241	2014-03-10 10:14:07.56493	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4936	2014-03-10 10:14:08.505144	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4937	2014-03-10 10:14:13.397375	\N	389	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4925	2014-03-10 10:13:41.63429	2014-03-10 10:14:17.13604	360	105	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4939	2014-03-10 10:14:26.007228	\N	390	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4941	2014-03-10 10:14:30.332257	\N	387	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4942	2014-03-10 10:14:31.599531	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4934	2014-03-10 10:14:02.230164	2014-03-10 10:14:32.902178	189	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4943	2014-03-10 10:14:33.063382	\N	389	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4944	2014-03-10 10:14:50.4027	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4938	2014-03-10 10:14:16.613693	2014-03-10 10:14:52.549626	364	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4940	2014-03-10 10:14:29.522934	2014-03-10 10:15:08.293931	360	106	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4945	2014-03-10 10:14:52.529613	2014-03-10 10:15:20.849222	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4946	2014-03-10 10:14:52.983672	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4948	2014-03-10 10:14:54.204185	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4947	2014-03-10 10:14:53.936196	2014-03-10 10:14:58.62141	372	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4949	2014-03-10 10:14:59.998359	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4950	2014-03-10 10:15:00.855993	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4951	2014-03-10 10:15:09.207146	\N	364	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4953	2014-03-10 10:15:16.767286	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4956	2014-03-10 10:15:23.598476	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4957	2014-03-10 10:15:26.360639	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4959	2014-03-10 10:15:47.33335	\N	387	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4955	2014-03-10 10:15:20.740386	2014-03-10 10:15:51.583052	360	107	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4952	2014-03-10 10:15:16.765337	2014-03-10 10:15:54.490093	389	46	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4954	2014-03-10 10:15:18.509452	2014-03-10 10:15:57.133596	383	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4958	2014-03-10 10:15:33.11058	2014-03-10 10:16:04.251315	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4961	2014-03-10 10:16:16.002939	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4964	2014-03-10 10:16:23.977739	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4965	2014-03-10 10:16:28.061447	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4960	2014-03-10 10:16:05.987899	2014-03-10 10:16:37.885477	360	108	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4962	2014-03-10 10:16:17.892036	2014-03-10 10:16:49.647457	352	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4963	2014-03-10 10:16:22.382135	2014-03-10 10:16:51.395964	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4966	2014-03-10 10:16:52.839563	\N	360	109	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4967	2014-03-10 10:16:59.979189	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4968	2014-03-10 10:17:02.297706	\N	352	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4971	2014-03-10 10:17:12.74872	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4972	2014-03-10 10:17:18.503767	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4973	2014-03-10 10:17:27.715169	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4970	2014-03-10 10:17:09.931377	2014-03-10 10:17:31.416712	345	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4974	2014-03-10 10:17:36.095824	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4977	2014-03-10 10:17:47.431476	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4969	2014-03-10 10:17:09.735421	2014-03-10 10:17:47.887307	372	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4978	2014-03-10 10:17:57.799631	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4979	2014-03-10 10:17:58.767982	\N	352	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4975	2014-03-10 10:17:37.270544	2014-03-10 10:18:07.9307	360	108	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4976	2014-03-10 10:17:43.89764	2014-03-10 10:18:14.372537	345	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4980	2014-03-10 10:18:48.570123	\N	387	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
4981	2014-03-10 10:19:53.007872	2014-03-10 10:20:04.584868	386	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4982	2014-03-10 10:20:05.295287	\N	175	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
4983	2014-03-10 10:20:24.699132	2014-03-10 10:20:36.893245	175	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4984	2014-03-10 10:20:57.454008	2014-03-10 10:21:13.791144	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4985	2014-03-10 10:21:19.441844	\N	357	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
4986	2014-03-10 10:21:27.850893	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4988	2014-03-10 10:21:32.576484	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4989	2014-03-10 10:21:33.648077	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4991	2014-03-10 10:21:48.134596	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4992	2014-03-10 10:21:54.835411	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4987	2014-03-10 10:21:29.043213	2014-03-10 10:21:56.875586	360	109	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4994	2014-03-10 10:22:09.735131	\N	360	110	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
4993	2014-03-10 10:22:08.812834	2014-03-10 10:22:12.740277	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4990	2014-03-10 10:21:46.865741	2014-03-10 10:22:16.695167	389	46	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4996	2014-03-10 10:22:29.322821	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5000	2014-03-10 10:22:51.340917	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4995	2014-03-10 10:22:25.928321	2014-03-10 10:22:52.774012	360	109	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
4997	2014-03-10 10:22:31.608658	2014-03-10 10:22:53.511059	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
4998	2014-03-10 10:22:32.824266	2014-03-10 10:23:05.217355	345	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5004	2014-03-10 10:23:07.013665	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5007	2014-03-10 10:23:17.81413	\N	345	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5001	2014-03-10 10:23:01.954132	2014-03-10 10:23:18.591583	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5008	2014-03-10 10:23:24.843529	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
4999	2014-03-10 10:22:51.032022	2014-03-10 10:23:25.685557	389	47	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5002	2014-03-10 10:23:03.811756	2014-03-10 10:23:34.563444	352	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5009	2014-03-10 10:23:36.370906	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5010	2014-03-10 10:23:40.260467	\N	389	48	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5011	2014-03-10 10:23:41.65623	\N	357	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5003	2014-03-10 10:23:05.961505	2014-03-10 10:23:42.094144	360	110	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5014	2014-03-10 10:23:47.729782	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5015	2014-03-10 10:23:49.782466	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5006	2014-03-10 10:23:15.959435	2014-03-10 10:23:51.811911	364	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5016	2014-03-10 10:23:52.498885	\N	375	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5005	2014-03-10 10:23:12.092817	2014-03-10 10:24:01.875655	386	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5019	2014-03-10 10:24:09.019765	\N	364	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5020	2014-03-10 10:24:12.932714	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5022	2014-03-10 10:24:14.688722	\N	386	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5013	2014-03-10 10:23:46.5046	2014-03-10 10:24:16.315304	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5023	2014-03-10 10:24:16.936131	\N	375	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5012	2014-03-10 10:23:44.177674	2014-03-10 10:24:22.249705	351	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5018	2014-03-10 10:23:54.146859	2014-03-10 10:24:23.235582	360	111	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5024	2014-03-10 10:24:24.634493	\N	356	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5021	2014-03-10 10:24:14.261659	2014-03-10 10:24:27.848878	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5025	2014-03-10 10:24:28.694493	\N	352	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5017	2014-03-10 10:23:53.102657	2014-03-10 10:24:31.18238	345	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5027	2014-03-10 10:24:35.324603	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5028	2014-03-10 10:24:35.331764	\N	356	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5029	2014-03-10 10:24:36.501264	\N	360	112	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5031	2014-03-10 10:24:40.696781	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5032	2014-03-10 10:24:47.283824	\N	372	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5033	2014-03-10 10:24:47.829112	\N	345	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5036	2014-03-10 10:25:01.676995	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5035	2014-03-10 10:24:57.296235	2014-03-10 10:25:02.046428	356	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5026	2014-03-10 10:24:34.57483	2014-03-10 10:25:03.831341	268	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5039	2014-03-10 10:25:12.190766	\N	360	111	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5040	2014-03-10 10:25:12.714876	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5042	2014-03-10 10:25:15.523878	\N	372	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5043	2014-03-10 10:25:16.862687	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5044	2014-03-10 10:25:19.085681	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5030	2014-03-10 10:24:40.406358	2014-03-10 10:25:20.136246	357	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5045	2014-03-10 10:25:23.602834	\N	386	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5046	2014-03-10 10:25:34.431522	\N	357	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5034	2014-03-10 10:24:54.557272	2014-03-10 10:25:35.323886	364	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5047	2014-03-10 10:25:37.796544	\N	370	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5037	2014-03-10 10:25:02.944653	2014-03-10 10:25:38.350149	352	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5049	2014-03-10 10:25:40.707752	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5041	2014-03-10 10:25:14.441688	2014-03-10 10:25:41.543935	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5051	2014-03-10 10:25:51.611272	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5052	2014-03-10 10:25:54.80426	\N	364	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5038	2014-03-10 10:25:10.430023	2014-03-10 10:25:58.746779	375	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5053	2014-03-10 10:26:01.728995	\N	356	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5054	2014-03-10 10:26:04.365428	\N	383	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5056	2014-03-10 10:26:11.215719	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5057	2014-03-10 10:26:13.880404	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5058	2014-03-10 10:26:13.916346	\N	351	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5048	2014-03-10 10:25:40.407619	2014-03-10 10:26:14.597334	360	110	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5050	2014-03-10 10:25:50.351194	2014-03-10 10:26:17.325489	352	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5061	2014-03-10 10:26:21.775388	\N	345	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5062	2014-03-10 10:26:23.165091	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5055	2014-03-10 10:26:05.375753	2014-03-10 10:26:26.810397	370	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5066	2014-03-10 10:26:33.546927	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5067	2014-03-10 10:26:35.163404	\N	383	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5068	2014-03-10 10:26:41.130151	\N	375	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5069	2014-03-10 10:26:42.010891	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5070	2014-03-10 10:26:44.519243	\N	370	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5064	2014-03-10 10:26:31.183897	2014-03-10 10:26:45.269067	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5060	2014-03-10 10:26:20.4247	2014-03-10 10:26:46.332523	387	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5072	2014-03-10 10:26:50.153964	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5063	2014-03-10 10:26:26.655035	2014-03-10 10:26:55.921509	360	111	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5073	2014-03-10 10:26:57.240521	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5074	2014-03-10 10:26:58.700393	\N	372	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5075	2014-03-10 10:27:01.176584	\N	351	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5065	2014-03-10 10:26:32.750855	2014-03-10 10:27:02.530707	352	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5076	2014-03-10 10:27:02.583825	\N	345	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5071	2014-03-10 10:26:44.553603	2014-03-10 10:27:07.2604	356	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5077	2014-03-10 10:27:08.095104	\N	360	112	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5078	2014-03-10 10:27:09.685803	\N	351	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5079	2014-03-10 10:27:14.114183	\N	386	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5059	2014-03-10 10:26:20.422786	2014-03-10 10:27:14.683797	364	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5080	2014-03-10 10:27:22.896283	\N	387	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5081	2014-03-10 10:27:39.60813	2014-03-10 10:28:01.681619	175	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5082	2014-03-10 10:29:38.304354	2014-03-10 10:30:02.325447	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5083	2014-03-10 10:30:17.428771	\N	175	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5084	2014-03-10 10:30:47.678231	\N	175	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5085	2014-03-10 10:31:01.137759	2014-03-10 10:31:28.233031	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5086	2014-03-10 10:32:08.283663	\N	175	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5087	2014-03-10 10:32:41.714216	2014-03-10 10:33:02.997113	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5088	2014-03-10 10:33:15.995386	\N	175	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5089	2014-03-10 10:33:43.117348	2014-03-10 10:34:07.333054	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5090	2014-03-10 10:34:20.162247	2014-03-10 10:34:36.649347	175	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5091	2014-03-10 10:34:49.125152	\N	175	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5092	2014-03-10 10:35:39.205117	\N	175	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5093	2014-03-10 10:36:02.525325	\N	175	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5094	2014-03-10 10:36:29.274658	\N	175	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5095	2014-03-10 10:37:09.889435	2014-03-10 10:37:31.54133	175	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5096	2014-03-10 10:38:17.591465	2014-03-10 10:38:42.178905	175	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5097	2014-03-10 10:38:56.250912	2014-03-10 10:39:25.242782	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5098	2014-03-10 10:39:41.114353	\N	175	5	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5099	2014-03-10 10:40:03.50392	2014-03-10 10:40:24.724327	175	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5100	2014-03-10 10:40:38.879652	2014-03-10 10:41:08.267178	175	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5101	2014-03-10 10:41:51.275871	2014-03-10 10:42:26.683935	175	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5102	2014-03-10 10:42:43.712445	2014-03-10 10:43:25.364787	175	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5103	2014-03-10 10:45:39.920755	\N	175	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5104	2014-03-10 10:46:17.18208	\N	175	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5105	2014-03-10 10:46:34.945466	\N	175	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5106	2014-03-10 10:47:17.338672	2014-03-10 10:47:41.380615	175	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5107	2014-03-10 10:47:56.517052	2014-03-10 10:48:28.350003	175	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5108	2014-03-10 10:48:48.712027	\N	175	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5109	2014-03-10 10:49:23.321337	2014-03-10 10:50:00.154581	175	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5110	2014-03-10 10:50:11.523995	2014-03-10 10:50:43.799685	175	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5111	2014-03-10 10:51:07.562837	2014-03-10 10:51:41.551345	175	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5112	2014-03-10 10:52:02.953564	\N	175	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5113	2014-03-10 10:53:05.949049	2014-03-10 10:53:31.771288	175	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5114	2014-03-10 10:53:44.032807	2014-03-10 10:54:07.633062	175	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5115	2014-03-10 10:54:22.275864	\N	175	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5116	2014-03-10 10:54:39.987754	2014-03-10 10:55:12.387381	175	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5117	2014-03-10 10:55:48.658691	\N	175	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5118	2014-03-10 10:56:13.599982	2014-03-10 10:56:39.5648	175	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5119	2014-03-10 10:56:53.895802	2014-03-10 10:57:18.819952	175	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5120	2014-03-10 10:57:49.220518	2014-03-10 10:58:14.137277	175	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5121	2014-03-10 10:58:32.410005	\N	175	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5122	2014-03-10 10:59:10.740171	\N	175	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5123	2014-03-10 10:59:54.243892	\N	175	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5124	2014-03-10 11:01:51.272491	2014-03-10 11:02:20.190278	175	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5125	2014-03-10 11:02:33.385407	2014-03-10 11:03:00.016393	175	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5126	2014-03-10 11:03:13.181871	\N	175	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5127	2014-03-10 11:03:25.987794	\N	175	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5128	2014-03-10 11:03:48.03305	\N	113	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5129	2014-03-10 11:03:57.244386	2014-03-10 11:04:11.084755	113	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5130	2014-03-10 11:04:24.511297	2014-03-10 11:04:48.934245	113	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5132	2014-03-10 11:05:07.949724	\N	123	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5131	2014-03-10 11:05:02.009676	2014-03-10 11:05:36.693277	113	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5134	2014-03-10 11:06:07.546886	\N	123	20	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
5135	2014-03-10 11:06:12.107326	\N	123	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
5133	2014-03-10 11:05:54.38039	2014-03-10 11:06:26.282581	113	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5137	2014-03-10 11:06:41.500728	\N	132	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5139	2014-03-10 11:06:51.145727	2014-03-10 11:07:02.446892	123	1	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5138	2014-03-10 11:06:50.885978	2014-03-10 11:07:02.520984	132	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5136	2014-03-10 11:06:39.24346	2014-03-10 11:07:09.882258	113	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5140	2014-03-10 11:07:14.285838	\N	132	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5141	2014-03-10 11:07:27.620614	\N	132	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5142	2014-03-10 11:07:43.541016	\N	132	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5143	2014-03-10 11:07:56.309562	\N	132	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5144	2014-03-10 11:08:07.396686	\N	123	21	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
5145	2014-03-10 11:08:11.706181	2014-03-10 11:08:21.144342	132	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5148	2014-03-10 11:08:32.508181	2014-03-10 11:08:49.640688	132	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5146	2014-03-10 11:08:21.403711	2014-03-10 11:08:50.151463	113	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5147	2014-03-10 11:08:29.122837	2014-03-10 11:08:52.30186	123	21	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5150	2014-03-10 11:09:05.409487	\N	113	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5149	2014-03-10 11:09:01.436412	2014-03-10 11:09:20.899418	132	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5151	2014-03-10 11:09:07.01643	2014-03-10 11:09:28.687906	123	22	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5153	2014-03-10 11:09:32.376152	\N	132	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5155	2014-03-10 11:09:43.760325	\N	132	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5154	2014-03-10 11:09:41.871204	2014-03-10 11:10:02.477892	123	23	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5152	2014-03-10 11:09:23.192376	2014-03-10 11:10:07.697444	113	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5156	2014-03-10 11:10:09.060239	2014-03-10 11:10:24.489229	132	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5157	2014-03-10 11:10:35.778278	\N	132	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5158	2014-03-10 11:10:37.596501	2014-03-10 11:11:00.585691	123	24	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5160	2014-03-10 11:11:13.380196	\N	123	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5159	2014-03-10 11:11:01.889334	2014-03-10 11:11:19.525511	132	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5161	2014-03-10 11:11:30.823581	\N	132	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5163	2014-03-10 11:12:02.159703	\N	123	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5162	2014-03-10 11:11:54.514472	2014-03-10 11:12:10.934453	132	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5166	2014-03-10 11:12:25.169349	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5164	2014-03-10 11:12:18.393092	2014-03-10 11:12:36.300339	123	24	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5165	2014-03-10 11:12:22.455522	2014-03-10 11:12:49.3697	132	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5167	2014-03-10 11:12:59.857986	\N	123	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5169	2014-03-10 11:13:02.160671	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5170	2014-03-10 11:13:18.911637	\N	123	24	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5168	2014-03-10 11:13:00.95702	2014-03-10 11:13:21.527642	132	4	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5171	2014-03-10 11:13:34.851409	2014-03-10 11:13:57.084175	132	5	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5172	2014-03-10 11:13:46.089516	2014-03-10 11:14:12.930706	123	24	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5174	2014-03-10 11:14:13.011185	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5175	2014-03-10 11:14:24.962905	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5176	2014-03-10 11:14:25.44176	\N	123	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5173	2014-03-10 11:14:08.304042	2014-03-10 11:14:28.848769	132	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5177	2014-03-10 11:14:41.374774	2014-03-10 11:15:11.161871	132	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5178	2014-03-10 11:15:03.384337	2014-03-10 11:15:27.508439	123	24	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5180	2014-03-10 11:15:32.044269	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5181	2014-03-10 11:15:38.937176	\N	123	25	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5179	2014-03-10 11:15:23.391739	2014-03-10 11:15:48.093926	132	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5183	2014-03-10 11:16:00.591486	\N	132	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5184	2014-03-10 11:16:12.811357	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5182	2014-03-10 11:15:54.51561	2014-03-10 11:16:16.245053	123	24	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5185	2014-03-10 11:16:25.91311	2014-03-10 11:16:50.190549	132	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5186	2014-03-10 11:16:30.415467	2014-03-10 11:16:56.027785	123	25	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5188	2014-03-10 11:17:03.744136	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5187	2014-03-10 11:17:02.123517	2014-03-10 11:17:24.943223	132	9	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5190	2014-03-10 11:17:31.943353	\N	113	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5189	2014-03-10 11:17:09.323932	2014-03-10 11:17:35.582459	123	26	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5192	2014-03-10 11:17:43.110505	\N	113	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5194	2014-03-10 11:17:57.0329	\N	126	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5191	2014-03-10 11:17:37.31049	2014-03-10 11:17:58.103973	132	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5195	2014-03-10 11:18:03.546529	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5196	2014-03-10 11:18:11.949925	\N	132	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5193	2014-03-10 11:17:48.011091	2014-03-10 11:18:12.500404	123	27	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5197	2014-03-10 11:18:23.726735	\N	123	28	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5198	2014-03-10 11:18:24.366652	\N	126	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5199	2014-03-10 11:18:25.626386	\N	132	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5200	2014-03-10 11:18:44.008944	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5201	2014-03-10 11:18:44.554566	\N	126	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5203	2014-03-10 11:18:51.880295	\N	113	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5204	2014-03-10 11:18:59.024238	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5205	2014-03-10 11:19:01.970391	\N	123	27	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5206	2014-03-10 11:19:11.231851	\N	113	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5202	2014-03-10 11:18:48.976623	2014-03-10 11:19:12.579649	132	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5207	2014-03-10 11:19:22.116835	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5209	2014-03-10 11:19:31.805383	\N	126	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5210	2014-03-10 11:19:34.023947	\N	123	26	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5211	2014-03-10 11:19:34.847151	2014-03-10 11:19:46.799807	108	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5208	2014-03-10 11:19:24.592418	2014-03-10 11:19:47.984739	132	11	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5213	2014-03-10 11:19:50.16736	\N	113	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5215	2014-03-10 11:20:02.290835	\N	113	6	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5216	2014-03-10 11:20:02.303969	\N	126	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5217	2014-03-10 11:20:03.227913	\N	108	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5212	2014-03-10 11:19:47.659139	2014-03-10 11:20:11.502447	123	25	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5219	2014-03-10 11:20:13.27578	\N	110	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5214	2014-03-10 11:20:00.063107	2014-03-10 11:20:23.023216	132	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5218	2014-03-10 11:20:10.380207	2014-03-10 11:20:27.046821	126	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5220	2014-03-10 11:20:15.853282	2014-03-10 11:20:28.99553	108	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5223	2014-03-10 11:20:42.154009	\N	108	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5221	2014-03-10 11:20:22.439195	2014-03-10 11:20:51.407015	123	26	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5222	2014-03-10 11:20:34.755379	2014-03-10 11:20:56.88307	132	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5226	2014-03-10 11:21:01.549109	\N	108	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5228	2014-03-10 11:21:08.311071	\N	132	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5224	2014-03-10 11:20:46.620893	2014-03-10 11:21:15.822079	113	6	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5227	2014-03-10 11:21:03.067	2014-03-10 11:21:25.953673	123	27	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5229	2014-03-10 11:21:27.433603	\N	132	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5225	2014-03-10 11:20:57.885293	2014-03-10 11:21:27.565771	126	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5231	2014-03-10 11:21:32.682905	2014-03-10 11:21:44.862444	108	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5233	2014-03-10 11:21:56.976815	\N	108	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5230	2014-03-10 11:21:31.383553	2014-03-10 11:21:57.536993	113	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5232	2014-03-10 11:21:37.652038	2014-03-10 11:22:00.800654	123	28	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5234	2014-03-10 11:21:59.025334	2014-03-10 11:22:23.845337	132	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5237	2014-03-10 11:22:19.767738	2014-03-10 11:22:29.597907	108	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5236	2014-03-10 11:22:12.755268	2014-03-10 11:22:34.463675	123	29	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5238	2014-03-10 11:22:35.287385	\N	132	13	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5235	2014-03-10 11:22:10.218377	2014-03-10 11:22:41.519125	113	8	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5239	2014-03-10 11:22:42.383028	\N	108	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5241	2014-03-10 11:22:49.575127	\N	110	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5244	2014-03-10 11:22:58.509479	\N	126	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5246	2014-03-10 11:23:10.592215	\N	113	9	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5242	2014-03-10 11:22:50.912567	2014-03-10 11:23:10.872238	132	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5240	2014-03-10 11:22:47.834486	2014-03-10 11:23:10.898533	123	30	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5243	2014-03-10 11:22:56.997529	2014-03-10 11:23:11.279117	108	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5245	2014-03-10 11:22:59.677357	2014-03-10 11:23:20.02022	110	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5249	2014-03-10 11:23:28.26345	\N	123	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5250	2014-03-10 11:23:35.462753	\N	110	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5247	2014-03-10 11:23:22.213413	2014-03-10 11:23:42.696689	132	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5251	2014-03-10 11:23:47.828004	\N	123	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5248	2014-03-10 11:23:23.510765	2014-03-10 11:23:54.213285	108	2	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5253	2014-03-10 11:23:54.636385	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5252	2014-03-10 11:23:54.265007	2014-03-10 11:24:19.622081	132	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5256	2014-03-10 11:24:21.508316	\N	123	30	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5257	2014-03-10 11:24:27.155983	\N	113	7	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5254	2014-03-10 11:23:55.086715	2014-03-10 11:24:27.15821	110	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5258	2014-03-10 11:24:29.233486	\N	126	3	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5260	2014-03-10 11:24:38.479693	\N	123	29	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5255	2014-03-10 11:24:09.456525	2014-03-10 11:24:41.017796	108	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5261	2014-03-10 11:24:44.386852	\N	110	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5262	2014-03-10 11:24:54.594284	\N	108	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5259	2014-03-10 11:24:34.047409	2014-03-10 11:25:00.268788	132	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5264	2014-03-10 11:25:21.442867	\N	132	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5263	2014-03-10 11:25:04.336637	2014-03-10 11:25:23.806435	123	28	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5267	2014-03-10 11:25:25.634238	2014-03-10 11:25:50.91681	108	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5268	2014-03-10 11:25:27.74143	2014-03-10 11:25:51.300468	110	1	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5265	2014-03-10 11:25:22.614071	2014-03-10 11:25:53.752973	113	7	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5266	2014-03-10 11:25:23.373168	2014-03-10 11:25:50.264172	126	3	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5269	2014-03-10 11:25:35.767601	2014-03-10 11:25:56.583402	123	29	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5270	2014-03-10 11:25:40.135925	2014-03-10 11:26:03.112031	132	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5271	2014-03-10 11:26:04.467121	\N	110	2	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5272	2014-03-10 11:26:06.766281	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5274	2014-03-10 11:26:17.843661	\N	132	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5273	2014-03-10 11:26:08.911939	2014-03-10 11:26:31.506344	123	30	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5275	2014-03-10 11:26:38.434942	\N	126	4	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5276	2014-03-10 11:26:40.478712	\N	132	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5277	2014-03-10 11:26:43.356799	\N	123	31	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5278	2014-03-10 11:27:00.28417	\N	113	8	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5279	2014-03-10 11:34:31.487297	2014-03-10 11:35:01.718937	203	66	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5280	2014-03-10 11:35:14.779399	\N	203	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5281	2014-03-10 11:35:44.25249	2014-03-10 11:36:11.445983	203	66	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5282	2014-03-10 11:36:26.847037	\N	203	67	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5283	2014-03-10 11:37:05.729818	\N	203	66	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5284	2014-03-10 11:37:31.487376	2014-03-10 11:38:05.74556	203	66	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5285	2014-03-10 11:38:26.241076	2014-03-10 11:38:56.376983	203	67	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5286	2014-03-10 11:39:09.256346	2014-03-10 11:39:42.257842	203	68	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5287	2014-03-10 11:39:55.834775	2014-03-10 11:40:28.905538	203	69	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5288	2014-03-10 12:10:50.694748	2014-03-10 12:11:11.742154	192	15	0CFFCBC851984A4281C23D34FC400445	1	f	f
5289	2014-03-10 12:12:25.282519	\N	192	16	0CFFCBC851984A4281C23D34FC400445	0	f	f
5290	2014-03-10 12:12:31.023272	2014-03-10 12:12:44.352173	199	1	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5292	2014-03-10 12:13:10.623102	\N	199	2	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5291	2014-03-10 12:12:51.471074	2014-03-10 12:13:16.215671	192	15	0CFFCBC851984A4281C23D34FC400445	1	f	f
5293	2014-03-10 12:13:42.788118	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5295	2014-03-10 12:14:02.100147	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5294	2014-03-10 12:14:01.22644	2014-03-10 12:14:19.013517	192	16	0CFFCBC851984A4281C23D34FC400445	1	f	f
5296	2014-03-10 12:14:19.97684	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5297	2014-03-10 12:14:46.857832	2014-03-10 12:14:58.55119	199	1	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5299	2014-03-10 12:15:40.429594	2014-03-10 12:16:02.271382	192	17	0CFFCBC851984A4281C23D34FC400445	1	f	f
5298	2014-03-10 12:15:10.861456	2014-03-10 12:16:13.29482	199	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5300	2014-03-10 12:16:18.680281	2014-03-10 12:16:39.087655	192	18	0CFFCBC851984A4281C23D34FC400445	1	f	f
5302	2014-03-10 12:16:39.091003	\N	192	1	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5303	2014-03-10 12:16:50.735303	2014-03-10 12:16:56.472935	192	1	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5301	2014-03-10 12:16:27.570317	2014-03-10 12:17:00.215067	199	3	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5304	2014-03-10 12:17:26.289089	2014-03-10 12:17:51.377751	199	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5305	2014-03-10 13:12:29.105453	\N	541	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5306	2014-03-10 13:12:29.67107	\N	534	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5308	2014-03-10 13:12:36.045768	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5309	2014-03-10 13:12:52.586772	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5307	2014-03-10 13:12:32.823052	2014-03-10 13:13:02.886064	541	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5310	2014-03-10 13:13:04.829823	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5312	2014-03-10 13:13:13.172164	\N	547	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5313	2014-03-10 13:13:13.967204	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5314	2014-03-10 13:13:18.220444	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5315	2014-03-10 13:13:18.301967	\N	541	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5316	2014-03-10 13:13:19.938284	\N	534	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5317	2014-03-10 13:13:20.463642	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5311	2014-03-10 13:13:10.088858	2014-03-10 13:13:29.069257	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5318	2014-03-10 13:13:30.24196	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5319	2014-03-10 13:13:32.44943	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5320	2014-03-10 13:13:36.366012	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5322	2014-03-10 13:13:45.904324	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5323	2014-03-10 13:13:46.664209	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5324	2014-03-10 13:13:47.494373	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5325	2014-03-10 13:13:49.356002	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5326	2014-03-10 13:13:54.520029	\N	541	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5327	2014-03-10 13:13:54.569524	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5328	2014-03-10 13:13:56.261686	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5329	2014-03-10 13:14:00.09031	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5330	2014-03-10 13:14:02.524951	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5332	2014-03-10 13:14:08.881054	\N	547	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5321	2014-03-10 13:13:41.501552	2014-03-10 13:14:14.12184	534	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5333	2014-03-10 13:14:15.067979	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5334	2014-03-10 13:14:15.857551	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5335	2014-03-10 13:14:16.759293	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5336	2014-03-10 13:14:20.050339	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5337	2014-03-10 13:14:22.029143	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5338	2014-03-10 13:14:23.104122	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5339	2014-03-10 13:14:28.800887	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5341	2014-03-10 13:14:30.096301	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5331	2014-03-10 13:14:05.096605	2014-03-10 13:14:31.777931	312	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5344	2014-03-10 13:14:33.723974	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5345	2014-03-10 13:14:40.237028	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5346	2014-03-10 13:14:42.060758	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5347	2014-03-10 13:14:43.80853	\N	312	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5348	2014-03-10 13:14:50.342037	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5349	2014-03-10 13:14:51.638963	\N	547	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5350	2014-03-10 13:14:54.551817	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5342	2014-03-10 13:14:30.142889	2014-03-10 13:14:59.308875	534	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5343	2014-03-10 13:14:33.175778	2014-03-10 13:14:54.898389	541	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5351	2014-03-10 13:14:58.360406	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5352	2014-03-10 13:15:02.831582	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5353	2014-03-10 13:15:03.939999	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5340	2014-03-10 13:14:28.995065	2014-03-10 13:15:03.951635	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5354	2014-03-10 13:15:04.168015	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5355	2014-03-10 13:15:05.449523	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5356	2014-03-10 13:15:08.747852	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5358	2014-03-10 13:15:11.067717	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5359	2014-03-10 13:15:19.332572	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5360	2014-03-10 13:15:19.918452	\N	534	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5361	2014-03-10 13:15:21.910128	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5362	2014-03-10 13:15:27.134483	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5363	2014-03-10 13:15:31.020531	\N	312	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5364	2014-03-10 13:15:31.517407	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5365	2014-03-10 13:15:34.208769	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5366	2014-03-10 13:15:36.596668	\N	547	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5367	2014-03-10 13:15:40.828395	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5369	2014-03-10 13:15:43.203962	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5371	2014-03-10 13:15:47.921164	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5357	2014-03-10 13:15:09.501674	2014-03-10 13:15:50.426723	541	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5372	2014-03-10 13:15:54.895573	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5374	2014-03-10 13:15:58.514553	\N	547	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5376	2014-03-10 13:16:00.618711	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5377	2014-03-10 13:16:03.325499	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5368	2014-03-10 13:15:41.521652	2014-03-10 13:16:06.684366	534	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5378	2014-03-10 13:16:09.713698	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5370	2014-03-10 13:15:47.262603	2014-03-10 13:16:14.510951	312	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5380	2014-03-10 13:16:18.403889	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5381	2014-03-10 13:16:20.272965	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5382	2014-03-10 13:16:21.192659	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5373	2014-03-10 13:15:55.537412	2014-03-10 13:16:22.373641	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5384	2014-03-10 13:16:26.618554	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5385	2014-03-10 13:16:30.72011	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5387	2014-03-10 13:16:32.767764	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5375	2014-03-10 13:15:59.699361	2014-03-10 13:16:34.244313	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5389	2014-03-10 13:16:36.786739	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5390	2014-03-10 13:16:45.225439	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5391	2014-03-10 13:16:47.866118	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5392	2014-03-10 13:16:52.564327	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5386	2014-03-10 13:16:31.860266	2014-03-10 13:16:57.284762	312	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5393	2014-03-10 13:16:57.337913	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5383	2014-03-10 13:16:23.14114	2014-03-10 13:16:58.946358	534	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5388	2014-03-10 13:16:35.036003	2014-03-10 13:17:04.089631	547	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5394	2014-03-10 13:17:06.671256	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5395	2014-03-10 13:17:06.985357	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5396	2014-03-10 13:17:07.449645	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5398	2014-03-10 13:17:09.813513	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5399	2014-03-10 13:17:13.496435	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5400	2014-03-10 13:17:17.912169	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5401	2014-03-10 13:17:20.009348	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5402	2014-03-10 13:17:20.759535	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5403	2014-03-10 13:17:21.099065	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5405	2014-03-10 13:17:23.430533	\N	547	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5406	2014-03-10 13:17:25.850683	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5407	2014-03-10 13:17:29.356295	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5408	2014-03-10 13:17:30.615156	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5397	2014-03-10 13:17:09.772818	2014-03-10 13:17:34.897871	312	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5409	2014-03-10 13:17:37.224648	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5410	2014-03-10 13:17:38.458977	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5411	2014-03-10 13:17:44.681994	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5379	2014-03-10 13:16:11.143804	2014-03-10 13:17:46.514935	541	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5412	2014-03-10 13:17:47.061337	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5413	2014-03-10 13:17:47.296301	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
5415	2014-03-10 13:17:48.63986	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5404	2014-03-10 13:17:21.111372	2014-03-10 13:17:49.317553	534	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5416	2014-03-10 13:17:54.110383	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5417	2014-03-10 13:17:54.401928	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5418	2014-03-10 13:17:58.780667	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5419	2014-03-10 13:18:05.249972	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5414	2014-03-10 13:17:47.84083	2014-03-10 13:18:05.853911	547	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5421	2014-03-10 13:18:12.791027	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5422	2014-03-10 13:18:16.646229	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5423	2014-03-10 13:18:21.654123	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5425	2014-03-10 13:18:25.875318	\N	547	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5426	2014-03-10 13:18:25.961353	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5427	2014-03-10 13:18:28.521715	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5428	2014-03-10 13:18:30.079054	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5429	2014-03-10 13:18:31.741874	\N	312	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5430	2014-03-10 13:18:38.149016	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5431	2014-03-10 13:18:43.916179	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5420	2014-03-10 13:18:12.326898	2014-03-10 13:18:50.99596	541	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5424	2014-03-10 13:18:22.336413	2014-03-10 13:18:45.225446	534	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5432	2014-03-10 13:18:51.06236	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5433	2014-03-10 13:18:59.075121	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5434	2014-03-10 13:19:00.761382	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5435	2014-03-10 13:19:04.282535	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5436	2014-03-10 13:19:05.931328	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5438	2014-03-10 13:19:07.989013	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5439	2014-03-10 13:19:08.880166	\N	541	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5440	2014-03-10 13:19:10.370886	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5443	2014-03-10 13:19:23.237402	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5444	2014-03-10 13:19:23.989582	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5445	2014-03-10 13:19:24.52357	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5447	2014-03-10 13:19:25.684597	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5449	2014-03-10 13:19:37.773455	\N	541	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5451	2014-03-10 13:19:38.594076	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5441	2014-03-10 13:19:18.907326	2014-03-10 13:19:43.552343	312	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5452	2014-03-10 13:19:44.570614	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5446	2014-03-10 13:19:25.182588	2014-03-10 13:19:46.101299	534	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5453	2014-03-10 13:19:46.172829	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5442	2014-03-10 13:19:22.57614	2014-03-10 13:19:47.551396	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5454	2014-03-10 13:19:52.396327	\N	541	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5455	2014-03-10 13:19:52.83937	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5450	2014-03-10 13:19:37.96552	2014-03-10 13:19:53.298869	547	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5456	2014-03-10 13:19:53.637396	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5457	2014-03-10 13:19:57.784336	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5458	2014-03-10 13:20:05.151663	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5448	2014-03-10 13:19:36.967215	2014-03-10 13:20:06.814096	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5461	2014-03-10 13:20:09.111942	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5462	2014-03-10 13:20:12.537612	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5463	2014-03-10 13:20:15.513457	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5464	2014-03-10 13:20:22.896452	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5437	2014-03-10 13:19:06.507975	2014-03-10 13:20:24.47735	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5465	2014-03-10 13:20:25.386473	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5466	2014-03-10 13:20:28.6041	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5467	2014-03-10 13:20:30.627788	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5468	2014-03-10 13:20:33.826316	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5460	2014-03-10 13:20:08.075014	2014-03-10 13:20:41.161422	547	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5469	2014-03-10 13:20:43.233329	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5470	2014-03-10 13:20:45.060946	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5459	2014-03-10 13:20:05.16373	2014-03-10 13:20:46.089739	534	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5472	2014-03-10 13:20:58.135049	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5474	2014-03-10 13:21:00.02032	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5475	2014-03-10 13:21:03.323566	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5476	2014-03-10 13:21:05.73724	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5478	2014-03-10 13:21:11.789241	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5479	2014-03-10 13:21:12.527595	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5480	2014-03-10 13:21:12.963849	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5473	2014-03-10 13:20:58.712629	2014-03-10 13:21:12.973357	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5481	2014-03-10 13:21:16.865776	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5482	2014-03-10 13:21:17.823289	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5483	2014-03-10 13:21:18.943819	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5485	2014-03-10 13:21:27.15765	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5486	2014-03-10 13:21:28.8185	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5487	2014-03-10 13:21:29.738598	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5488	2014-03-10 13:21:32.704911	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5490	2014-03-10 13:21:38.417101	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5491	2014-03-10 13:21:42.03757	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5471	2014-03-10 13:20:56.189147	2014-03-10 13:21:42.733733	541	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5492	2014-03-10 13:21:43.82692	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5477	2014-03-10 13:21:07.594166	2014-03-10 13:21:44.576578	547	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5493	2014-03-10 13:21:45.761352	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5484	2014-03-10 13:21:21.720496	2014-03-10 13:21:47.010316	534	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5489	2014-03-10 13:21:37.166781	2014-03-10 13:21:56.11588	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5496	2014-03-10 13:22:02.107374	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5497	2014-03-10 13:22:07.032346	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5498	2014-03-10 13:22:08.92665	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5495	2014-03-10 13:21:58.911382	2014-03-10 13:22:10.51812	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5499	2014-03-10 13:22:11.628936	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5500	2014-03-10 13:22:15.26255	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5504	2014-03-10 13:22:22.314486	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5494	2014-03-10 13:21:57.793468	2014-03-10 13:22:30.200584	541	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5506	2014-03-10 13:22:33.343678	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5507	2014-03-10 13:22:37.110176	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5501	2014-03-10 13:22:15.665526	2014-03-10 13:22:37.125328	542	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5511	2014-03-10 13:22:50.759469	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5512	2014-03-10 13:22:59.180643	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5513	2014-03-10 13:23:01.869898	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5508	2014-03-10 13:22:41.533057	2014-03-10 13:23:23.124013	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5503	2014-03-10 13:22:16.318	2014-03-10 13:23:34.364703	534	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5510	2014-03-10 13:22:49.9709	2014-03-10 13:23:37.624231	541	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5509	2014-03-10 13:22:49.632332	2014-03-10 13:23:59.395681	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5502	2014-03-10 13:22:16.23055	2014-03-10 13:24:06.737692	547	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5514	2014-03-10 13:23:08.257723	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5515	2014-03-10 13:23:11.847248	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5516	2014-03-10 13:23:19.17565	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5505	2014-03-10 13:22:29.551996	2014-03-10 13:23:21.700132	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5517	2014-03-10 13:23:24.211887	\N	542	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5520	2014-03-10 13:23:35.308059	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5522	2014-03-10 13:23:47.925249	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5521	2014-03-10 13:23:36.627752	2014-03-10 13:23:51.577166	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5523	2014-03-10 13:23:52.884789	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5519	2014-03-10 13:23:27.516716	2014-03-10 13:23:54.255188	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5524	2014-03-10 13:23:56.346055	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5525	2014-03-10 13:23:58.159316	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5528	2014-03-10 13:24:04.203579	\N	541	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5518	2014-03-10 13:23:24.393505	2014-03-10 13:24:13.934988	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5529	2014-03-10 13:24:20.713909	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5530	2014-03-10 13:24:25.417788	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5531	2014-03-10 13:24:26.716452	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5526	2014-03-10 13:23:59.077619	2014-03-10 13:24:31.1151	534	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5533	2014-03-10 13:24:38.153176	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5534	2014-03-10 13:24:43.184074	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5535	2014-03-10 13:24:43.284533	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5536	2014-03-10 13:24:44.905351	\N	534	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5537	2014-03-10 13:24:52.349143	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5540	2014-03-10 13:25:01.08901	\N	547	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5542	2014-03-10 13:25:03.028714	\N	312	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5543	2014-03-10 13:25:04.29251	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5532	2014-03-10 13:24:31.09953	2014-03-10 13:25:05.478695	541	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5527	2014-03-10 13:24:03.512227	2014-03-10 13:25:07.61612	542	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5545	2014-03-10 13:25:08.117404	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5546	2014-03-10 13:25:11.182519	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5548	2014-03-10 13:25:12.200358	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5539	2014-03-10 13:24:55.195779	2014-03-10 13:25:15.159789	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5549	2014-03-10 13:25:21.690196	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5541	2014-03-10 13:25:01.691559	2014-03-10 13:25:25.369768	534	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5547	2014-03-10 13:25:11.4774	2014-03-10 13:25:26.726503	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5552	2014-03-10 13:25:34.783719	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5553	2014-03-10 13:25:37.577956	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5555	2014-03-10 13:25:41.289257	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5556	2014-03-10 13:25:41.964928	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5558	2014-03-10 13:25:43.322316	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5560	2014-03-10 13:25:49.835265	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5551	2014-03-10 13:25:26.993851	2014-03-10 13:25:51.68353	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5554	2014-03-10 13:25:39.204171	2014-03-10 13:25:53.090826	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5561	2014-03-10 13:26:00.303082	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5562	2014-03-10 13:26:09.596305	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5563	2014-03-10 13:26:10.360516	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5564	2014-03-10 13:26:11.424994	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5550	2014-03-10 13:25:23.067953	2014-03-10 13:26:14.095946	541	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5557	2014-03-10 13:25:42.041031	2014-03-10 13:26:33.771565	534	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5567	2014-03-10 13:26:33.77746	\N	534	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5568	2014-03-10 13:26:33.84305	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5566	2014-03-10 13:26:26.084728	2014-03-10 13:26:35.812937	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5565	2014-03-10 13:26:17.768429	2014-03-10 13:26:40.595087	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5570	2014-03-10 13:26:40.825585	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5538	2014-03-10 13:24:54.69391	2014-03-10 13:26:45.287197	537	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5573	2014-03-10 13:26:56.120784	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5574	2014-03-10 13:27:01.565336	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5575	2014-03-10 13:27:04.777054	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5577	2014-03-10 13:27:16.411722	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5571	2014-03-10 13:26:55.07599	2014-03-10 13:27:19.610069	534	1	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5572	2014-03-10 13:26:56.036846	2014-03-10 13:27:21.095139	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5569	2014-03-10 13:26:37.894005	2014-03-10 13:27:21.345332	541	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5578	2014-03-10 13:27:22.216057	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5579	2014-03-10 13:27:24.068091	\N	537	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5580	2014-03-10 13:27:24.141819	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5544	2014-03-10 13:25:05.773512	2014-03-10 13:27:33.40692	533	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5581	2014-03-10 13:27:36.46712	\N	547	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5583	2014-03-10 13:27:41.703157	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5585	2014-03-10 13:27:49.949852	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5586	2014-03-10 13:27:50.40601	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5587	2014-03-10 13:27:50.515636	\N	533	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5588	2014-03-10 13:27:51.876085	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5590	2014-03-10 13:27:54.122794	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5591	2014-03-10 13:27:57.621896	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5592	2014-03-10 13:28:03.880563	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5593	2014-03-10 13:28:07.56427	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5589	2014-03-10 13:27:52.623686	2014-03-10 13:28:09.947544	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5594	2014-03-10 13:28:10.015447	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5584	2014-03-10 13:27:44.399608	2014-03-10 13:28:11.783982	534	2	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5582	2014-03-10 13:27:37.477364	2014-03-10 13:28:36.075913	541	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5576	2014-03-10 13:27:05.162395	2014-03-10 13:28:39.054097	543	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5559	2014-03-10 13:25:49.295111	2014-03-10 13:29:04.841318	542	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5595	2014-03-10 13:28:12.955623	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5596	2014-03-10 13:28:14.970576	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5597	2014-03-10 13:28:19.90722	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5602	2014-03-10 13:28:38.032937	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5603	2014-03-10 13:28:38.493638	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5604	2014-03-10 13:28:39.85862	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5598	2014-03-10 13:28:26.031509	2014-03-10 13:28:49.419023	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5606	2014-03-10 13:28:52.58756	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5609	2014-03-10 13:29:05.436465	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5610	2014-03-10 13:29:11.191926	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5600	2014-03-10 13:28:34.72492	2014-03-10 13:29:12.833554	534	3	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5605	2014-03-10 13:28:48.008465	2014-03-10 13:29:18.768297	545	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5599	2014-03-10 13:28:28.591164	2014-03-10 13:29:26.969114	535	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5613	2014-03-10 13:29:38.465803	\N	543	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5608	2014-03-10 13:28:56.453001	2014-03-10 13:29:38.657873	541	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5614	2014-03-10 13:29:39.987854	\N	535	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5615	2014-03-10 13:29:48.080056	\N	545	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5618	2014-03-10 13:30:03.069388	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5619	2014-03-10 13:30:12.189919	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5620	2014-03-10 13:30:18.80277	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5601	2014-03-10 13:28:36.330595	2014-03-10 13:30:19.172683	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5621	2014-03-10 13:30:26.89763	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5622	2014-03-10 13:30:27.306784	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5623	2014-03-10 13:30:32.804686	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5624	2014-03-10 13:30:35.406192	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5625	2014-03-10 13:30:35.510607	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5626	2014-03-10 13:30:40.967852	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5627	2014-03-10 13:30:48.03574	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5611	2014-03-10 13:29:35.574153	2014-03-10 13:30:50.516445	534	4	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5629	2014-03-10 13:30:54.585727	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5617	2014-03-10 13:30:02.566007	2014-03-10 13:30:57.810569	541	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5630	2014-03-10 13:31:00.845797	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5632	2014-03-10 13:31:14.754185	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5616	2014-03-10 13:29:55.875317	2014-03-10 13:31:18.091882	535	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5628	2014-03-10 13:30:53.834377	2014-03-10 13:31:32.229293	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5634	2014-03-10 13:31:38.743978	\N	535	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5631	2014-03-10 13:31:06.971335	2014-03-10 13:31:39.978264	534	5	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5635	2014-03-10 13:31:51.828991	\N	541	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5633	2014-03-10 13:31:33.763084	2014-03-10 13:31:53.09454	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5612	2014-03-10 13:29:37.762925	2014-03-10 13:32:00.517972	542	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5636	2014-03-10 13:32:01.091035	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5638	2014-03-10 13:32:04.574604	\N	540	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5640	2014-03-10 13:32:13.61638	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5642	2014-03-10 13:32:21.297468	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5639	2014-03-10 13:32:08.428319	2014-03-10 13:32:30.147947	548	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5645	2014-03-10 13:32:37.509324	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5646	2014-03-10 13:32:38.63336	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5637	2014-03-10 13:32:03.344208	2014-03-10 13:32:51.644969	534	6	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5647	2014-03-10 13:32:51.651489	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5643	2014-03-10 13:32:29.190589	2014-03-10 13:32:58.803431	545	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5648	2014-03-10 13:33:04.133581	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5649	2014-03-10 13:33:04.306011	\N	535	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5651	2014-03-10 13:33:10.451932	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5652	2014-03-10 13:33:11.711233	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5653	2014-03-10 13:33:13.718477	\N	545	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5644	2014-03-10 13:32:35.961067	2014-03-10 13:33:27.403597	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5655	2014-03-10 13:33:27.645943	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5656	2014-03-10 13:33:27.828425	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5657	2014-03-10 13:33:29.575863	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5650	2014-03-10 13:33:04.661614	2014-03-10 13:33:51.592536	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5660	2014-03-10 13:33:57.529834	\N	548	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5661	2014-03-10 13:33:58.580065	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5658	2014-03-10 13:33:40.742418	2014-03-10 13:34:00.829172	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5662	2014-03-10 13:34:08.258912	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5659	2014-03-10 13:33:57.178942	2014-03-10 13:34:12.4657	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5664	2014-03-10 13:34:27.024952	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5666	2014-03-10 13:34:32.833	\N	543	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5667	2014-03-10 13:34:35.259781	\N	541	10	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5668	2014-03-10 13:34:36.612515	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5669	2014-03-10 13:34:39.636475	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5670	2014-03-10 13:34:41.611988	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5672	2014-03-10 13:34:45.095702	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5673	2014-03-10 13:34:46.252621	\N	538	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5675	2014-03-10 13:34:59.933406	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5671	2014-03-10 13:34:44.848529	2014-03-10 13:35:02.137165	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5676	2014-03-10 13:35:13.014258	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5677	2014-03-10 13:35:20.490646	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5663	2014-03-10 13:34:26.70334	2014-03-10 13:35:27.736924	540	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5674	2014-03-10 13:34:51.99285	2014-03-10 13:35:51.347326	541	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5654	2014-03-10 13:33:25.927126	2014-03-10 13:36:12.090247	534	1	C11F30815A9C49B9A83B61A285EA11F9	1	f	f
5641	2014-03-10 13:32:16.291369	2014-03-10 13:36:39.453097	542	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5665	2014-03-10 13:34:32.019444	2014-03-10 13:35:22.659887	546	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5681	2014-03-10 13:35:28.90307	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5678	2014-03-10 13:35:21.937509	2014-03-10 13:35:38.776531	545	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5679	2014-03-10 13:35:26.572239	2014-03-10 13:35:41.338658	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5684	2014-03-10 13:35:41.35824	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5686	2014-03-10 13:35:48.410874	\N	546	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5683	2014-03-10 13:35:36.882503	2014-03-10 13:35:50.08725	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5685	2014-03-10 13:35:42.622872	2014-03-10 13:35:54.890901	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5690	2014-03-10 13:36:11.387485	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5691	2014-03-10 13:36:11.409387	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5682	2014-03-10 13:35:35.286383	2014-03-10 13:36:11.675801	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5693	2014-03-10 13:36:21.564328	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5680	2014-03-10 13:35:28.198932	2014-03-10 13:36:23.298927	538	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5688	2014-03-10 13:36:01.03273	2014-03-10 13:36:24.182438	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5695	2014-03-10 13:36:37.691543	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5698	2014-03-10 13:36:48.041798	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5699	2014-03-10 13:36:50.3533	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5696	2014-03-10 13:36:40.871915	2014-03-10 13:36:57.749785	543	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5687	2014-03-10 13:35:51.324228	2014-03-10 13:37:00.068993	540	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5692	2014-03-10 13:36:13.988246	2014-03-10 13:37:03.368721	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5700	2014-03-10 13:37:04.591743	\N	542	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5701	2014-03-10 13:37:07.772449	\N	545	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5702	2014-03-10 13:37:14.773145	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5704	2014-03-10 13:37:21.32061	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5705	2014-03-10 13:37:22.812203	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5707	2014-03-10 13:37:24.589135	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5708	2014-03-10 13:37:29.212248	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5710	2014-03-10 13:37:43.595168	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5607	2014-03-10 13:28:56.250242	2014-03-10 13:37:44.901603	547	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5694	2014-03-10 13:36:23.86894	2014-03-10 13:37:58.935478	541	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5711	2014-03-10 13:37:58.938711	\N	541	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5713	2014-03-10 13:38:03.493744	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5715	2014-03-10 13:38:10.286974	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5716	2014-03-10 13:38:14.170753	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5717	2014-03-10 13:38:15.970714	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5712	2014-03-10 13:37:59.782065	2014-03-10 13:38:16.079871	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5718	2014-03-10 13:38:18.607255	\N	542	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5714	2014-03-10 13:38:07.468562	2014-03-10 13:38:19.583546	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5706	2014-03-10 13:37:24.492308	2014-03-10 13:38:24.649776	543	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5720	2014-03-10 13:38:32.544383	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5709	2014-03-10 13:37:33.162784	2014-03-10 13:38:47.294001	540	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5723	2014-03-10 13:38:47.363262	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5724	2014-03-10 13:38:49.641349	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5721	2014-03-10 13:38:32.908966	2014-03-10 13:38:52.392815	545	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5689	2014-03-10 13:36:06.509711	2014-03-10 13:38:59.692229	531	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5722	2014-03-10 13:38:36.916131	2014-03-10 13:38:59.702177	537	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5727	2014-03-10 13:39:05.302075	\N	545	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5725	2014-03-10 13:38:52.326876	2014-03-10 13:39:12.577564	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5703	2014-03-10 13:37:17.999642	2014-03-10 13:39:16.492459	538	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5726	2014-03-10 13:38:53.690486	2014-03-10 13:39:17.254814	548	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5730	2014-03-10 13:39:27.241905	\N	531	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5731	2014-03-10 13:39:27.998913	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5729	2014-03-10 13:39:21.446411	2014-03-10 13:39:32.25144	533	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5732	2014-03-10 13:39:32.895367	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5733	2014-03-10 13:39:34.559424	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5734	2014-03-10 13:39:35.204311	\N	538	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5735	2014-03-10 13:39:35.275918	\N	537	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5736	2014-03-10 13:39:41.273878	\N	548	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5737	2014-03-10 13:39:43.868	\N	533	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5738	2014-03-10 13:39:45.769847	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5697	2014-03-10 13:36:41.008937	2014-03-10 13:39:49.600182	534	2	C11F30815A9C49B9A83B61A285EA11F9	1	f	f
5739	2014-03-10 13:39:50.930105	\N	541	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5719	2014-03-10 13:38:29.943992	2014-03-10 13:39:53.908571	547	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5740	2014-03-10 13:39:54.307566	\N	533	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5741	2014-03-10 13:39:54.443167	\N	537	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5742	2014-03-10 13:39:57.791276	\N	538	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5728	2014-03-10 13:39:05.364261	2014-03-10 13:40:00.893572	540	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5746	2014-03-10 13:40:11.49117	\N	541	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5747	2014-03-10 13:40:18.823011	\N	537	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5743	2014-03-10 13:40:09.067363	2014-03-10 13:40:19.770579	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5745	2014-03-10 13:40:11.376092	2014-03-10 13:40:27.368857	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5753	2014-03-10 13:40:40.292437	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5755	2014-03-10 13:41:01.360364	\N	543	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5750	2014-03-10 13:40:31.255929	2014-03-10 13:41:10.663864	538	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5756	2014-03-10 13:41:03.766349	2014-03-10 13:41:17.225326	537	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5749	2014-03-10 13:40:27.848421	2014-03-10 13:41:20.14758	540	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5748	2014-03-10 13:40:24.319267	2014-03-10 13:41:29.411945	546	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5754	2014-03-10 13:40:50.835788	2014-03-10 13:42:32.219164	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5744	2014-03-10 13:40:10.366894	2014-03-10 13:43:02.654594	547	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5752	2014-03-10 13:40:35.131174	2014-03-10 13:43:32.44107	542	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5751	2014-03-10 13:40:32.638612	2014-03-10 13:45:24.405923	534	3	C11F30815A9C49B9A83B61A285EA11F9	1	f	f
5758	2014-03-10 13:41:37.393505	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5759	2014-03-10 13:41:39.204012	\N	538	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5760	2014-03-10 13:41:42.663567	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5762	2014-03-10 13:41:49.100148	\N	546	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5763	2014-03-10 13:41:56.672482	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5761	2014-03-10 13:41:43.080517	2014-03-10 13:42:04.477643	537	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5757	2014-03-10 13:41:37.297312	2014-03-10 13:42:12.861813	540	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5764	2014-03-10 13:42:09.987581	2014-03-10 13:42:19.253254	535	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5768	2014-03-10 13:42:30.203358	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5765	2014-03-10 13:42:19.172013	2014-03-10 13:42:43.716296	538	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5770	2014-03-10 13:42:55.633464	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5767	2014-03-10 13:42:26.90317	2014-03-10 13:42:55.649832	540	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5771	2014-03-10 13:42:56.735357	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5772	2014-03-10 13:42:57.048434	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5774	2014-03-10 13:43:21.730275	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5775	2014-03-10 13:43:23.900167	\N	540	8	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5777	2014-03-10 13:44:07.360373	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5778	2014-03-10 13:44:09.119204	\N	541	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5780	2014-03-10 13:44:09.984544	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5776	2014-03-10 13:43:27.379836	2014-03-10 13:44:10.022831	547	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5773	2014-03-10 13:43:12.296712	2014-03-10 13:44:10.627735	538	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5781	2014-03-10 13:44:21.932131	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5782	2014-03-10 13:44:25.994444	\N	541	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5766	2014-03-10 13:42:24.786996	2014-03-10 13:44:27.163285	537	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5783	2014-03-10 13:44:35.493936	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5785	2014-03-10 13:44:36.661437	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5779	2014-03-10 13:44:09.217266	2014-03-10 13:44:40.29326	540	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5769	2014-03-10 13:42:34.02629	2014-03-10 13:44:47.5175	535	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5788	2014-03-10 13:44:50.657039	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5793	2014-03-10 13:44:59.547001	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5786	2014-03-10 13:44:40.737437	2014-03-10 13:45:05.693526	547	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5790	2014-03-10 13:44:51.286474	2014-03-10 13:45:05.910977	532	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5794	2014-03-10 13:45:06.950774	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5787	2014-03-10 13:44:50.648769	2014-03-10 13:45:22.604561	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5789	2014-03-10 13:44:51.011946	2014-03-10 13:45:34.638634	537	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5798	2014-03-10 13:45:41.724248	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5799	2014-03-10 13:45:42.942098	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5800	2014-03-10 13:45:49.590428	\N	534	4	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5801	2014-03-10 13:45:55.418309	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5792	2014-03-10 13:44:57.916648	2014-03-10 13:45:58.572185	540	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5796	2014-03-10 13:45:24.790575	2014-03-10 13:46:01.509441	547	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5791	2014-03-10 13:44:53.673399	2014-03-10 13:46:08.007617	538	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5803	2014-03-10 13:46:15.707578	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5797	2014-03-10 13:45:31.254312	2014-03-10 13:46:16.140247	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5805	2014-03-10 13:46:30.992024	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5807	2014-03-10 13:46:34.238581	\N	534	3	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5802	2014-03-10 13:46:10.583253	2014-03-10 13:46:38.754267	541	1	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5808	2014-03-10 13:46:39.099242	\N	543	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5809	2014-03-10 13:46:41.734607	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5806	2014-03-10 13:46:33.088298	2014-03-10 13:46:42.335696	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5811	2014-03-10 13:46:47.143317	\N	548	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5804	2014-03-10 13:46:15.859955	2014-03-10 13:46:53.596738	540	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5795	2014-03-10 13:45:21.883806	2014-03-10 13:46:59.626289	535	3	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5814	2014-03-10 13:47:00.455386	\N	541	2	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5818	2014-03-10 13:47:24.412087	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5812	2014-03-10 13:46:49.723708	2014-03-10 13:47:25.425432	537	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5813	2014-03-10 13:46:57.509841	2014-03-10 13:47:25.502246	532	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5820	2014-03-10 13:47:32.101308	\N	535	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5810	2014-03-10 13:46:42.387103	2014-03-10 13:47:37.929967	538	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5784	2014-03-10 13:44:36.391108	2014-03-10 13:47:41.746659	542	4	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5821	2014-03-10 13:47:44.137018	\N	537	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5823	2014-03-10 13:47:52.99851	\N	532	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5824	2014-03-10 13:48:02.704291	\N	535	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5825	2014-03-10 13:48:03.508249	\N	531	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5817	2014-03-10 13:47:23.2198	2014-03-10 13:48:07.93729	547	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5816	2014-03-10 13:47:08.867256	2014-03-10 13:48:08.905069	540	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5822	2014-03-10 13:47:51.446643	2014-03-10 13:48:08.909329	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5819	2014-03-10 13:47:28.62323	2014-03-10 13:48:19.971959	548	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5827	2014-03-10 13:48:20.684141	\N	532	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5828	2014-03-10 13:48:25.371568	\N	542	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5826	2014-03-10 13:48:16.564149	2014-03-10 13:48:40.107339	531	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5830	2014-03-10 13:48:41.910272	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5831	2014-03-10 13:48:42.359384	\N	534	2	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5832	2014-03-10 13:48:57.308969	\N	540	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5829	2014-03-10 13:48:30.534559	2014-03-10 13:49:03.757847	538	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5833	2014-03-10 13:49:04.288164	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5836	2014-03-10 13:49:28.640665	\N	538	6	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5838	2014-03-10 13:49:38.375782	\N	542	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5835	2014-03-10 13:49:23.62642	2014-03-10 13:49:54.291289	540	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5834	2014-03-10 13:49:11.998162	2014-03-10 13:50:17.296023	547	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5815	2014-03-10 13:47:08.15055	2014-03-10 13:56:30.502384	543	2	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5837	2014-03-10 13:49:37.235213	2014-03-10 13:49:47.633064	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5839	2014-03-10 13:50:00.190851	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5840	2014-03-10 13:50:06.816166	\N	537	5	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5843	2014-03-10 13:50:15.495773	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5845	2014-03-10 13:50:29.482011	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5846	2014-03-10 13:50:30.713936	\N	548	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5847	2014-03-10 13:50:30.809823	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5848	2014-03-10 13:50:31.693167	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5844	2014-03-10 13:50:23.412233	2014-03-10 13:50:44.659158	538	5	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5849	2014-03-10 13:50:50.506036	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5842	2014-03-10 13:50:10.407384	2014-03-10 13:51:08.028742	541	1	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5852	2014-03-10 13:51:19.465047	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5853	2014-03-10 13:51:22.499984	\N	547	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5841	2014-03-10 13:50:08.521798	2014-03-10 13:51:23.736609	540	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5854	2014-03-10 13:51:23.740147	\N	540	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5855	2014-03-10 13:51:25.6398	\N	535	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5856	2014-03-10 13:51:32.711721	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5850	2014-03-10 13:51:08.831382	2014-03-10 13:51:32.71398	548	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5857	2014-03-10 13:51:44.261874	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5861	2014-03-10 13:52:18.822148	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5862	2014-03-10 13:52:24.928435	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5859	2014-03-10 13:52:11.03968	2014-03-10 13:52:32.703153	547	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5863	2014-03-10 13:52:38.924473	\N	541	2	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5851	2014-03-10 13:51:19.193897	2014-03-10 13:52:44.782481	538	6	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5864	2014-03-10 13:52:52.242548	\N	547	11	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5865	2014-03-10 13:52:58.667535	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5866	2014-03-10 13:53:10.301715	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5867	2014-03-10 13:53:19.112131	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5868	2014-03-10 13:53:20.415003	\N	537	4	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5869	2014-03-10 13:53:21.984009	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5860	2014-03-10 13:52:12.872133	2014-03-10 13:53:22.067876	546	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5858	2014-03-10 13:51:44.294837	2014-03-10 13:53:22.915153	540	1	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5871	2014-03-10 13:53:36.607463	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5874	2014-03-10 13:54:06.167053	\N	548	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5873	2014-03-10 13:53:50.090946	2014-03-10 13:54:09.224663	547	10	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5875	2014-03-10 13:54:15.890864	\N	542	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5876	2014-03-10 13:54:16.620756	\N	546	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5878	2014-03-10 13:54:30.072082	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5881	2014-03-10 13:54:43.277884	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5877	2014-03-10 13:54:28.469381	2014-03-10 13:54:50.536484	547	11	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5882	2014-03-10 13:54:50.539865	\N	547	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5879	2014-03-10 13:54:38.739039	2014-03-10 13:54:53.574926	545	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5883	2014-03-10 13:54:54.56727	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5880	2014-03-10 13:54:41.2593	2014-03-10 13:54:55.733703	544	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5884	2014-03-10 13:54:56.890476	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5885	2014-03-10 13:55:06.306748	\N	545	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5886	2014-03-10 13:55:10.393904	\N	544	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5887	2014-03-10 13:55:10.825292	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5872	2014-03-10 13:53:43.832998	2014-03-10 13:55:12.189496	540	2	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5888	2014-03-10 13:55:14.34398	\N	531	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5889	2014-03-10 13:55:15.036237	\N	532	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5890	2014-03-10 13:55:15.225068	\N	542	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5891	2014-03-10 13:55:17.070419	\N	534	1	C11F30815A9C49B9A83B61A285EA11F9	0	f	f
5870	2014-03-10 13:53:24.442254	2014-03-10 13:55:17.082015	538	7	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5893	2014-03-10 13:55:39.739791	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5895	2014-03-10 13:55:58.582938	2014-03-10 13:56:08.811105	542	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5892	2014-03-10 13:55:37.190852	2014-03-10 13:56:18.368082	538	8	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5896	2014-03-10 13:56:23.910838	\N	542	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5897	2014-03-10 13:56:27.12017	\N	544	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5898	2014-03-10 13:56:30.624698	\N	546	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5894	2014-03-10 13:55:47.206236	2014-03-10 13:56:31.21537	540	3	5E6A3E3B939B4577B104FA8658206E9E	1	f	f
5899	2014-03-10 13:56:33.064391	\N	535	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5901	2014-03-10 13:57:01.32309	\N	540	4	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5902	2014-03-10 13:57:06.889636	\N	545	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5903	2014-03-10 13:57:08.802549	\N	543	3	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5904	2014-03-10 13:57:27.591442	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5900	2014-03-10 13:56:33.069814	2014-03-10 13:57:29.546213	538	9	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
5905	2014-03-10 13:57:34.531987	\N	547	1	5E6A3E3B939B4577B104FA8658206E9E	0	f	f
5906	2014-03-10 13:57:45.298231	\N	542	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
5908	2014-03-10 14:17:07.096432	\N	175	12	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5907	2014-03-10 14:16:59.584335	2014-03-10 14:17:30.180612	203	70	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5909	2014-03-10 14:17:08.746236	2014-03-10 14:17:35.601565	191	1	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5910	2014-03-10 14:17:21.44871	2014-03-10 14:17:43.553369	175	12	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5911	2014-03-10 14:17:44.796567	2014-03-10 14:18:08.489401	203	71	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5912	2014-03-10 14:17:49.660288	2014-03-10 14:18:17.596584	191	2	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5914	2014-03-10 14:17:58.964461	2014-03-10 14:18:23.858464	192	2	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5913	2014-03-10 14:17:58.937229	2014-03-10 14:18:27.221092	175	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5917	2014-03-10 14:18:41.680657	\N	175	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5915	2014-03-10 14:18:30.736298	2014-03-10 14:19:00.777083	191	3	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5916	2014-03-10 14:18:31.514397	2014-03-10 14:19:05.02659	203	72	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5919	2014-03-10 14:19:12.75461	2014-03-10 14:19:39.189311	191	4	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5918	2014-03-10 14:19:06.044624	2014-03-10 14:19:30.604472	175	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5921	2014-03-10 14:19:47.413503	\N	192	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
5922	2014-03-10 14:19:54.238263	\N	175	14	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5924	2014-03-10 14:19:59.804181	\N	192	1	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5920	2014-03-10 14:19:38.140451	2014-03-10 14:20:09.186572	203	73	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5925	2014-03-10 14:20:18.325333	\N	192	1	9EC218587C01452C9EB49F52EB2DD1DD	2	f	f
5923	2014-03-10 14:19:55.127806	2014-03-10 14:20:25.742271	191	5	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5928	2014-03-10 14:20:36.286629	\N	192	1	9EC218587C01452C9EB49F52EB2DD1DD	0	f	f
5929	2014-03-10 14:20:46.699899	\N	192	1	0CFFCBC851984A4281C23D34FC400445	2	f	f
5926	2014-03-10 14:20:23.588872	2014-03-10 14:20:57.941059	203	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5927	2014-03-10 14:20:33.94107	2014-03-10 14:21:02.462274	175	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5930	2014-03-10 14:20:47.186078	2014-03-10 14:21:13.534653	191	6	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5931	2014-03-10 14:21:15.659229	\N	175	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5932	2014-03-10 14:21:26.811999	2014-03-10 14:21:51.376524	191	7	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5933	2014-03-10 14:21:33.90007	2014-03-10 14:22:05.927251	203	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5934	2014-03-10 14:21:36.584252	2014-03-10 14:22:06.173778	175	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5936	2014-03-10 14:22:14.028177	\N	192	1	1353E9D5614D460FA32E67853B6BA6D8	2	f	f
5938	2014-03-10 14:22:18.980684	\N	203	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5939	2014-03-10 14:22:30.078333	\N	199	1	1353E9D5614D460FA32E67853B6BA6D8	2	f	f
5935	2014-03-10 14:22:04.151939	2014-03-10 14:22:31.735917	191	8	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5941	2014-03-10 14:22:43.12572	\N	199	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5942	2014-03-10 14:22:45.167568	\N	203	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5937	2014-03-10 14:22:17.850776	2014-03-10 14:22:48.09343	175	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5940	2014-03-10 14:22:39.133485	2014-03-10 14:22:56.126707	192	3	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5944	2014-03-10 14:23:08.866832	2014-03-10 14:23:27.249633	192	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5945	2014-03-10 14:23:09.809074	2014-03-10 14:23:34.334307	199	5	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5943	2014-03-10 14:23:02.386494	2014-03-10 14:23:37.26389	175	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5946	2014-03-10 14:23:41.535724	\N	192	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5947	2014-03-10 14:23:51.474471	\N	175	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5948	2014-03-10 14:23:57.193848	\N	192	4	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5949	2014-03-10 14:24:04.304468	2014-03-10 14:24:22.77995	199	6	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5950	2014-03-10 14:24:11.918255	2014-03-10 14:24:36.537796	191	9	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5951	2014-03-10 14:24:14.76598	2014-03-10 14:24:37.647492	189	10	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5952	2014-03-10 14:24:18.52389	2014-03-10 14:24:47.87709	175	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5957	2014-03-10 14:25:02.583916	\N	175	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5954	2014-03-10 14:24:43.699998	2014-03-10 14:25:04.741362	192	3	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5953	2014-03-10 14:24:38.015161	2014-03-10 14:25:07.381266	167	6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
5955	2014-03-10 14:24:45.076736	2014-03-10 14:25:08.167706	199	7	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5956	2014-03-10 14:24:49.912628	2014-03-10 14:25:26.005776	191	10	017AAEA9D22543A59A60C697FEBADD1B	1	f	f
5960	2014-03-10 14:25:26.007559	\N	191	1	4D3953649C704D4CAFC97E99C7A83EE9	0	f	f
5961	2014-03-10 14:25:26.543052	\N	203	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5962	2014-03-10 14:25:35.238433	\N	189	11	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5959	2014-03-10 14:25:19.899778	2014-03-10 14:25:36.834246	192	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5963	2014-03-10 14:25:39.004628	\N	203	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5958	2014-03-10 14:25:19.626128	2014-03-10 14:25:44.661414	199	8	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5965	2014-03-10 14:25:55.744798	\N	192	5	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5964	2014-03-10 14:25:39.306599	2014-03-10 14:26:20.744496	191	1	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
5969	2014-03-10 14:26:12.860176	2014-03-10 14:26:30.741023	192	4	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5967	2014-03-10 14:26:01.630116	2014-03-10 14:26:34.069733	199	9	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5966	2014-03-10 14:26:01.37047	2014-03-10 14:26:36.53774	203	73	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5968	2014-03-10 14:26:07.890166	2014-03-10 14:26:37.982837	167	7	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
5970	2014-03-10 14:26:29.623103	2014-03-10 14:26:54.49281	175	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5971	2014-03-10 14:26:44.949241	2014-03-10 14:27:05.392083	192	5	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5975	2014-03-10 14:27:09.359067	\N	175	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5972	2014-03-10 14:26:46.090495	2014-03-10 14:27:11.711656	199	10	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5973	2014-03-10 14:26:49.766689	2014-03-10 14:27:14.20018	203	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5976	2014-03-10 14:27:18.449441	2014-03-10 14:27:35.082934	192	6	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5974	2014-03-10 14:26:56.945915	2014-03-10 14:27:42.526372	191	2	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
5980	2014-03-10 14:27:49.472275	\N	192	7	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5982	2014-03-10 14:27:57.056664	\N	175	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5977	2014-03-10 14:27:27.281628	2014-03-10 14:28:02.034268	199	11	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5978	2014-03-10 14:27:32.948997	2014-03-10 14:28:04.739899	203	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5979	2014-03-10 14:27:44.019764	2014-03-10 14:28:18.879324	167	8	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
5985	2014-03-10 14:28:34.859426	\N	203	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5981	2014-03-10 14:27:56.336607	2014-03-10 14:28:36.240747	191	3	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
5983	2014-03-10 14:28:14.968511	2014-03-10 14:28:46.957251	199	12	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5984	2014-03-10 14:28:23.252809	2014-03-10 14:28:55.445362	175	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
5987	2014-03-10 14:28:39.916141	2014-03-10 14:29:00.688159	192	6	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5991	2014-03-10 14:29:12.302954	\N	175	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5988	2014-03-10 14:28:52.705014	2014-03-10 14:29:25.600325	203	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
5986	2014-03-10 14:28:35.338279	2014-03-10 14:29:26.780824	167	9	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
5990	2014-03-10 14:28:59.839637	2014-03-10 14:29:31.935729	199	13	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5992	2014-03-10 14:29:15.682623	2014-03-10 14:29:34.716595	192	7	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5989	2014-03-10 14:28:53.50716	2014-03-10 14:29:38.785559	191	4	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
5993	2014-03-10 14:29:41.232919	\N	175	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
5997	2014-03-10 14:29:59.690184	\N	203	76	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
5994	2014-03-10 14:29:45.339443	2014-03-10 14:30:08.133497	199	14	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5995	2014-03-10 14:29:52.569676	2014-03-10 14:30:14.173773	192	8	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5998	2014-03-10 14:30:20.196475	2014-03-10 14:30:45.329238	199	15	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
5996	2014-03-10 14:29:54.762623	2014-03-10 14:30:29.605878	191	5	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
6001	2014-03-10 14:30:42.02004	\N	203	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6000	2014-03-10 14:30:30.973275	2014-03-10 14:30:49.724382	192	9	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6003	2014-03-10 14:30:59.535672	\N	199	16	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
5999	2014-03-10 14:30:30.858505	2014-03-10 14:31:04.145325	175	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6005	2014-03-10 14:31:23.936495	\N	199	15	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6002	2014-03-10 14:30:42.099978	2014-03-10 14:31:24.805269	191	6	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
6004	2014-03-10 14:31:01.790848	2014-03-10 14:31:24.857041	192	10	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6008	2014-03-10 14:31:41.898854	\N	175	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6009	2014-03-10 14:31:51.294825	\N	192	11	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6006	2014-03-10 14:31:37.672845	2014-03-10 14:32:11.250185	191	7	4D3953649C704D4CAFC97E99C7A83EE9	1	f	f
6007	2014-03-10 14:31:41.11337	2014-03-10 14:32:12.599953	199	14	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6010	2014-03-10 14:32:13.095727	\N	167	10	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6011	2014-03-10 14:32:15.030584	2014-03-10 14:32:32.377913	192	10	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6013	2014-03-10 14:32:26.408432	2014-03-10 14:33:01.135277	167	9	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
6012	2014-03-10 14:32:25.41425	2014-03-10 14:33:13.688388	199	15	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6014	2014-03-10 14:32:53.038664	2014-03-10 14:33:22.219553	175	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6015	2014-03-10 14:33:05.350743	2014-03-10 14:33:24.371097	192	11	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6016	2014-03-10 14:33:25.839507	\N	199	16	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6017	2014-03-10 14:33:44.20841	2014-03-10 14:34:05.849501	192	12	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6020	2014-03-10 14:34:08.910306	\N	191	1	FC21412A7C92444EA50B30A09729330F	2	f	f
6021	2014-03-10 14:34:20.621302	\N	191	1	FC21412A7C92444EA50B30A09729330F	0	f	f
6019	2014-03-10 14:33:55.903899	2014-03-10 14:34:20.641338	199	15	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6018	2014-03-10 14:33:54.029416	2014-03-10 14:34:22.966032	175	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6022	2014-03-10 14:34:37.684408	\N	192	13	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6023	2014-03-10 14:34:42.421026	2014-03-10 14:35:15.009052	199	16	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6024	2014-03-10 14:35:23.319598	2014-03-10 14:35:43.070323	192	12	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6026	2014-03-10 14:35:49.071125	\N	175	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6025	2014-03-10 14:35:28.124091	2014-03-10 14:36:00.806396	199	17	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6027	2014-03-10 14:36:01.783767	\N	192	13	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6028	2014-03-10 14:36:02.732695	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6030	2014-03-10 14:36:10.939751	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6029	2014-03-10 14:36:06.778956	2014-03-10 14:36:34.236171	203	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6032	2014-03-10 14:36:38.786735	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6033	2014-03-10 14:36:39.680756	\N	192	12	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6031	2014-03-10 14:36:33.397766	2014-03-10 14:36:57.564603	199	18	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6035	2014-03-10 14:37:15.313534	\N	167	10	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6037	2014-03-10 14:37:34.820093	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6034	2014-03-10 14:37:09.696914	2014-03-10 14:37:35.308988	199	19	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6038	2014-03-10 14:37:47.244876	\N	203	75	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6036	2014-03-10 14:37:24.532395	2014-03-10 14:37:47.990349	192	11	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6040	2014-03-10 14:38:06.68881	\N	192	12	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6039	2014-03-10 14:37:56.650861	2014-03-10 14:38:20.921844	199	20	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6041	2014-03-10 14:38:28.813871	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6042	2014-03-10 14:38:34.819581	\N	203	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6044	2014-03-10 14:38:42.559767	\N	192	11	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6045	2014-03-10 14:38:56.54369	\N	203	74	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6043	2014-03-10 14:38:38.078723	2014-03-10 14:39:09.324362	199	21	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6046	2014-03-10 14:39:22.788526	\N	199	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6047	2014-03-10 14:39:58.416924	\N	199	22	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6048	2014-03-10 14:40:09.076497	\N	192	10	1353E9D5614D460FA32E67853B6BA6D8	0	f	f
6049	2014-03-10 14:40:59.871531	2014-03-10 14:40:59.946447	199	22	1353E9D5614D460FA32E67853B6BA6D8	1	f	f
6050	2014-03-10 14:41:09.58373	\N	167	9	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6051	2014-03-10 14:41:13.244093	2014-03-10 14:41:49.822364	203	74	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6052	2014-03-10 14:42:14.893366	\N	194	1	062925BDC19347E8890A6D7390DF3842	0	f	f
6054	2014-03-10 14:43:41.044626	\N	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6053	2014-03-10 14:43:14.884239	2014-03-10 14:43:45.915484	203	75	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6056	2014-03-10 14:43:50.607137	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6057	2014-03-10 14:44:00.300301	\N	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6058	2014-03-10 14:44:06.502447	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6060	2014-03-10 14:44:13.651776	\N	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6055	2014-03-10 14:43:45.786118	2014-03-10 14:44:26.557439	167	9	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
6061	2014-03-10 14:44:31.751172	\N	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6062	2014-03-10 14:44:32.133369	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6059	2014-03-10 14:44:10.949396	2014-03-10 14:44:43.89945	203	76	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6063	2014-03-10 14:44:50.612391	\N	175	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6064	2014-03-10 14:45:01.452778	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6065	2014-03-10 14:45:02.125512	2014-03-10 14:45:23.083082	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	1	f	f
6066	2014-03-10 14:45:30.290309	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6067	2014-03-10 14:45:32.180796	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6068	2014-03-10 14:45:35.712066	2014-03-10 14:45:55.038768	192	2	2688E9D1A3FA4B689A3D9E41A1071C0E	1	f	f
6071	2014-03-10 14:46:01.06673	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6072	2014-03-10 14:46:07.422972	\N	192	3	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6073	2014-03-10 14:46:08.102469	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6069	2014-03-10 14:45:37.372148	2014-03-10 14:46:08.745335	167	10	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
6070	2014-03-10 14:45:41.992123	2014-03-10 14:46:14.059189	175	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6075	2014-03-10 14:46:38.667077	\N	191	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6076	2014-03-10 14:46:39.391285	\N	194	1	062925BDC19347E8890A6D7390DF3842	0	f	f
6074	2014-03-10 14:46:37.514915	2014-03-10 14:47:04.011526	203	77	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6078	2014-03-10 14:47:07.085997	\N	199	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	2	f	f
6077	2014-03-10 14:46:44.845783	2014-03-10 14:47:17.77236	175	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6079	2014-03-10 14:47:26.295131	\N	203	78	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6080	2014-03-10 14:47:29.546698	\N	137	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	2	f	f
6082	2014-03-10 14:47:42.591295	\N	199	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6081	2014-03-10 14:47:33.09252	2014-03-10 14:48:03.969659	175	17	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6084	2014-03-10 14:48:13.773067	\N	192	15	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6085	2014-03-10 14:48:17.529666	\N	175	18	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6083	2014-03-10 14:47:45.383843	2014-03-10 14:48:24.851706	203	78	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6087	2014-03-10 14:48:32.161776	\N	191	15	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6088	2014-03-10 14:48:54.602667	\N	192	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6089	2014-03-10 14:48:56.644436	\N	175	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6086	2014-03-10 14:48:27.214548	2014-03-10 14:48:59.095104	199	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
6090	2014-03-10 14:49:04.52917	\N	194	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
6091	2014-03-10 14:49:10.231871	\N	192	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6092	2014-03-10 14:49:11.472717	\N	199	16	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6093	2014-03-10 14:49:30.827809	\N	199	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6094	2014-03-10 14:49:34.91935	\N	175	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6095	2014-03-10 14:49:37.309041	\N	192	1	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	2	f	f
6096	2014-03-10 14:49:49.623255	\N	199	15	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6098	2014-03-10 14:50:19.907802	\N	199	14	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6097	2014-03-10 14:50:09.559181	2014-03-10 14:50:36.90805	175	15	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6100	2014-03-10 14:51:01.751203	\N	192	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6101	2014-03-10 14:51:13.914956	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6102	2014-03-10 14:51:14.206787	\N	192	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6103	2014-03-10 14:51:19.689496	\N	194	15	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6104	2014-03-10 14:51:20.989999	\N	191	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6105	2014-03-10 14:51:24.01343	\N	199	1	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6099	2014-03-10 14:50:54.251746	2014-03-10 14:51:31.064733	175	16	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6106	2014-03-10 14:51:46.546435	\N	192	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6107	2014-03-10 14:51:46.902016	\N	175	17	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6108	2014-03-10 14:51:54.386781	\N	199	15	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6109	2014-03-10 14:52:01.547343	\N	191	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6110	2014-03-10 14:52:02.207103	\N	192	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6111	2014-03-10 14:52:06.746951	\N	175	16	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6112	2014-03-10 14:52:14.83631	\N	167	11	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	0	f	f
6113	2014-03-10 14:52:19.874747	\N	192	13	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6114	2014-03-10 14:52:20.5287	\N	191	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6115	2014-03-10 14:52:22.959554	\N	194	1	2688E9D1A3FA4B689A3D9E41A1071C0E	2	f	f
6117	2014-03-10 14:52:42.464116	\N	199	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6118	2014-03-10 14:52:44.197908	\N	194	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6119	2014-03-10 14:52:47.513767	\N	192	12	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6120	2014-03-10 14:52:49.252522	\N	191	14	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6116	2014-03-10 14:52:41.085448	2014-03-10 14:53:10.201624	167	10	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	1	f	f
6122	2014-03-10 14:53:22.365524	\N	192	12	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6123	2014-03-10 14:53:35.563685	\N	192	11	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6124	2014-03-10 14:53:40.325895	\N	189	10	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6125	2014-03-10 14:53:48.891271	\N	192	10	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6126	2014-03-10 14:53:49.545432	\N	194	15	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6127	2014-03-10 14:53:52.206569	\N	175	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
6121	2014-03-10 14:53:13.667451	2014-03-10 14:53:57.322099	199	15	2688E9D1A3FA4B689A3D9E41A1071C0E	1	f	f
6128	2014-03-10 14:54:00.793656	\N	192	10	2688E9D1A3FA4B689A3D9E41A1071C0E	0	f	f
6129	2014-03-10 15:20:12.981925	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
6130	2014-03-10 15:21:24.418299	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6131	2014-03-10 15:21:50.411374	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6132	2014-03-10 15:22:15.882999	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6133	2014-03-10 15:22:58.058957	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6134	2014-03-10 15:23:14.367763	\N	170	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6135	2014-03-10 17:18:39.669655	2014-03-10 17:19:39.461029	360	111	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6136	2014-03-10 17:19:54.182427	2014-03-10 17:20:52.261423	360	112	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6137	2014-03-10 17:25:49.36902	2014-03-10 17:26:33.246901	360	113	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6138	2014-03-10 17:26:47.408929	2014-03-10 17:27:27.419639	360	114	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6139	2014-03-10 17:29:02.559028	2014-03-10 17:29:47.773423	360	115	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6140	2014-03-10 17:30:01.453288	2014-03-10 17:30:45.744209	360	116	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6141	2014-03-10 17:31:01.201527	2014-03-10 17:31:50.760675	360	117	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6142	2014-03-10 17:33:46.326458	2014-03-10 17:34:34.914968	360	118	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6143	2014-03-10 17:37:22.928375	2014-03-10 17:38:04.096382	360	119	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6144	2014-03-10 17:38:17.405128	2014-03-10 17:39:07.292867	360	120	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6145	2014-03-10 17:39:20.583349	2014-03-10 17:40:05.849881	360	121	3D384CB2349B41299A3B5A133AB9E3F8	1	f	f
6146	2014-03-10 17:49:54.55944	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
6147	2014-03-10 17:50:09.055943	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	2	f	f
6148	2014-03-10 17:50:53.984354	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6149	2014-03-10 17:51:05.13567	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6150	2014-03-10 17:51:18.054674	\N	377	1	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6151	2014-03-10 17:53:16.450758	2014-03-10 17:53:48.630307	377	1	CA9EE2E34F384E95A5FA26769C5864B8	1	f	f
6152	2014-03-10 17:54:03.695987	\N	377	2	CA9EE2E34F384E95A5FA26769C5864B8	0	f	f
6153	2014-03-10 18:15:23.020884	\N	389	1	3D384CB2349B41299A3B5A133AB9E3F8	2	f	f
6154	2014-03-10 18:15:35.726776	\N	389	47	3D384CB2349B41299A3B5A133AB9E3F8	0	f	f
6155	2014-03-10 18:16:49.244618	\N	305	1	C815B29CD8F546BBBB4C647B9D163942	2	f	f
6156	2014-03-10 18:17:00.33887	2014-03-10 18:17:27.735929	305	13	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6157	2014-03-10 18:17:43.226841	2014-03-10 18:18:12.902852	305	14	C815B29CD8F546BBBB4C647B9D163942	1	f	f
6158	2014-03-10 18:19:01.935515	\N	305	15	C815B29CD8F546BBBB4C647B9D163942	0	f	f
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level, failed_attempts) FROM stdin;
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
2	k	k		\N	\N	\N	kindergarten	1	3DEE205D86BC461FA4271EF4BD190A0C	6	1
7	v1401	ahh		\N	\N	\N	Arvelo	1	D7C98BF1710A476BAFD20AEC169E9DC3	1	1
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
162	v1709	aid	Genesis	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
163	v1710	air	Angie	\N	\N	\N	Gutierrez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
164	v1711	all	Justine	\N	\N	\N	Jones	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
165	v1712	amp	Jaden	\N	\N	\N	Jordan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
166	v1713	ant	Jesse	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
168	v1715	apt	Paola	\N	\N	\N	Navarro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
169	v1716	arc	Tamthu	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
170	v1717	arf	Chaneli	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
172	v1719	arm	Victor	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
173	v1720	art	Evelyn	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
174	v1721	ash	Samir	\N	\N	\N	Sullivan	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
190	v1737	bay	Nicholas	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
193	v1740	beg	Gianna	\N	\N	\N	Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
195	v1742	bet	Jason	\N	\N	\N	Hua	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
196	v1743	bib	Natavia	\N	\N	\N	Lewis	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
197	v1744	bid	Najalie	\N	\N	\N	Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
198	v1745	big	Annalley	\N	\N	\N	Portillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
200	v1747	bip	Jaslin	\N	\N	\N	Seck	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
201	v1748	bip	Vy	\N	\N	\N	Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
218	v1802	abs	Lanya	\N	\N	\N	Bell	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
220	v1804	add	Daniel	\N	\N	\N	Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
221	v1805	aft	Stephanie	\N	\N	\N	Donato	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
219	v1803	ace	Angel	\N	\N	\N	Bernardy	1	C815B29CD8F546BBBB4C647B9D163942	7	0
217	v1801	ahh	Juan	\N	\N	\N	Ayala	1	695A7607FE8A4E27AB80652C45C84FA8	8	0
189	v1736	bat	Gisselle	\N	\N	\N	Gerena	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
202	v1749	bio	William	\N	\N	\N	Santana	1	695A7607FE8A4E27AB80652C45C84FA8	1	0
161	v1708	aim	Ciennali	\N	\N	\N	Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	5	2
171	v1718	ark	Aidan	\N	\N	\N	Ramirez	1	3D384CB2349B41299A3B5A133AB9E3F8	2	0
192	v1739	bee	Serenity	\N	\N	\N	Haley	1	CA9EE2E34F384E95A5FA26769C5864B8	1	2
167	v1714	app	Jordan	\N	\N	\N	Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
191	v1738	bed	Nicole	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
203	v1750	bit	Floridei	\N	\N	\N	Jovel	1	3D384CB2349B41299A3B5A133AB9E3F8	101	1
175	v1722	ask	Jonathan	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
199	v1746	bin	Jorden	\N	\N	\N	Richards	1	CA9EE2E34F384E95A5FA26769C5864B8	1	3
222	v1806	ape	Desmond	\N	\N	\N	Dowling	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
223	v1807	and	Fabiana	\N	\N	\N	Fred	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
225	v1809	aid	Jonathan	\N	\N	\N	Melchor	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
227	v1811	all	Jenny	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
229	v1813	ant	Victor	\N	\N	\N	Luna	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
230	v1814	app	Christopher	\N	\N	\N	Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
231	v1815	apt	Miguel	\N	\N	\N	Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
232	v1816	arc	Milagros	\N	\N	\N	Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
233	v1817	arf	Christina	\N	\N	\N	Negron	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
234	v1818	ark	Minh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
235	v1819	arm	Charil	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
237	v1821	ash	Ashley	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
240	v1824	ave	Cecilia	\N	\N	\N	Valentin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
241	v1825	awe	Adriana	\N	\N	\N	Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
254	v1838	bed	Elias	\N	\N	\N	Merced	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
255	v1839	bee	Valerie	\N	\N	\N	Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
256	v1840	beg	Ai	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
257	v1841	ben	Juliza	\N	\N	\N	Portillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
258	v1842	bet	Jacelynne	\N	\N	\N	Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
259	v1843	bib	Markus	\N	\N	\N	Richards	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
260	v1844	bid	Joel	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
261	v1845	big	Brianna	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
262	v1846	bin	Joshua	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
264	v1848	bin	Christopher	\N	\N	\N	Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
265	v1849	bin	Terrell	\N	\N	\N	Wood	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
267	v1851	bit	Bangelis	\N	\N	\N	Cosma	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
226	v1810	air	Isael	\N	\N	\N	Jimenez	1	C815B29CD8F546BBBB4C647B9D163942	11	0
263	v1847	bin	Abrianna	\N	\N	\N	Santiago	1	695A7607FE8A4E27AB80652C45C84FA8	3	0
236	v1820	art	Brian	\N	\N	\N	Ramos	1	695A7607FE8A4E27AB80652C45C84FA8	4	0
228	v1812	amp	Nicholas	\N	\N	\N	Lewandowski	1	3D384CB2349B41299A3B5A133AB9E3F8	59	0
238	v1822	ask	Serenety	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	10	1
253	v1837	bay	Makel	\N	\N	\N	Martin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
224	v1808	aim	Ledyn	\N	\N	\N	Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	5	0
242	v1826	axe	Leilani	\N	\N	\N	Burgos	1	5E6A3E3B939B4577B104FA8658206E9E	1	0
266	v1850	bit	Ashanti	\N	\N	\N	Lopez	1	695A7607FE8A4E27AB80652C45C84FA8	6	0
239	v1823	ate	Adrian	\N	\N	\N	Terrero	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
296	v1918	ark	Dasha	\N	\N	\N	Rios	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
297	v1919	arm	Erik	\N	\N	\N	Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
298	v1920	art	Jaslin	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
299	v1921	ash	Brandon	\N	\N	\N	Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
313	v1935	bar	Lamanh	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
314	v1936	bat	Tamthi	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
316	v1938	bed	Aldo	\N	\N	\N	Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
318	v1940	beg	Ricardo	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
319	v1941	ben	Quan	\N	\N	\N	Tran	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
320	v1942	bet	Imani	\N	\N	\N	Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
321	v1943	bib	Michael	\N	\N	\N	Zelaya	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
322	v1944	big	Ethan	\N	\N	\N	Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
323	v1945	big	Carlos	\N	\N	\N	Jovel	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
301	v1923	bot	Luke	\N	\N	\N	Breslin	1	3D384CB2349B41299A3B5A133AB9E3F8	173	1
324	v1946	bag	Suzi	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
312	v1934	bap	Carleigh	\N	\N	\N	Marsilio	1	3D384CB2349B41299A3B5A133AB9E3F8	74	1
315	v1937	bay	Nicholas	\N	\N	\N	Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
317	v1939	bee	Joshua	\N	\N	\N	Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	2
356	v2016	arc	Jordan	\N	\N	\N	Pipkin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
357	v2017	arf	Unique	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	2
371	v2031	bag	Daniel	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
384	v2044	bib	Jaden	\N	\N	\N	Camillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
385	v2045	bib	Allan	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
386	v2046	bib	Mariah	\N	\N	\N	Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
387	v2047	bib	Shawnese	\N	\N	\N	Kervin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
388	v2048	bib	Bre	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
402	v2102	abs	Julian	\N	\N	\N	Aviles	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
404	v2104	add	Yanely	\N	\N	\N	Collado	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
406	v2106	ape	Marielis	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
407	v2107	and	John	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
408	v2108	aim	Michael	\N	\N	\N	Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
409	v2109	aid	Ebrianna	\N	\N	\N	Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
410	v2110	air	Klaritza	\N	\N	\N	Delarosa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
411	v2111	all	Michael	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
412	v2112	amp	Yurielis	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
413	v2113	ant	Genesis	\N	\N	\N	Galvez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
416	v2116	arc	Azora	\N	\N	\N	Goodwin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
417	v2117	arf	Heaven	\N	\N	\N	Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
418	v2118	ark	Francis	\N	\N	\N	Hillsee	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
422	v2122	ask	Devin	\N	\N	\N	Nugyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
424	v2124	ave	Alina	\N	\N	\N	Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
426	v2126	axe	Edgardo	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
427	v2127	aye	Chastity	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
429	v2129	baa	Jayzn	\N	\N	\N	Vargas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
430	v2130	bit	Kirian	\N	\N	\N	Calcano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
431	v2131	bag	Lianna	\N	\N	\N	Adames	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
433	v2133	ban	Jesus	\N	\N	\N	Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
434	v2134	bap	Mariah	\N	\N	\N	Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
435	v2135	bar	Amairlys	\N	\N	\N	Caseras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
436	v2136	bat	Catherine	\N	\N	\N	Cortez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
438	v2138	bed	Millie	\N	\N	\N	Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
439	v2139	bee	Luz	\N	\N	\N	Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
440	v2140	beg	Kaydence	\N	\N	\N	Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
441	v2141	ben	Brayner	\N	\N	\N	Estevez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
415	v2115	apt	Melaney	\N	\N	\N	Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	2	0
443	v2143	bib	Michael	\N	\N	\N	German	1	C815B29CD8F546BBBB4C647B9D163942	2	0
405	v2105	aft	Anthony	\N	\N	\N	Colon	1	C815B29CD8F546BBBB4C647B9D163942	1	0
437	v2137	bay	Samara	\N	\N	\N	Cruz	1	C815B29CD8F546BBBB4C647B9D163942	1	0
442	v2142	bet	Javier	\N	\N	\N	Garcia	1	C815B29CD8F546BBBB4C647B9D163942	5	0
420	v2120	art	Alexis	\N	\N	\N	McLeod	1	C815B29CD8F546BBBB4C647B9D163942	1	0
403	v2103	ace	Yvanna	\N	\N	\N	Burgos	1	C815B29CD8F546BBBB4C647B9D163942	1	0
401	v2101	ahh	Kayla	\N	\N	\N	Aponte	1	C815B29CD8F546BBBB4C647B9D163942	3	0
425	v2125	awe	Siani	\N	\N	\N	Pagan	1	C815B29CD8F546BBBB4C647B9D163942	1	0
428	v2128	ays	Nicholas	\N	\N	\N	Torres	1	C815B29CD8F546BBBB4C647B9D163942	13	0
432	v2132	bam	Guadalupe	\N	\N	\N	Avalos	1	C815B29CD8F546BBBB4C647B9D163942	6	0
389	v2049	bib	Hugh	\N	\N	\N	Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
419	v2119	arm	Paula	\N	\N	\N	Jarmul	1	C815B29CD8F546BBBB4C647B9D163942	7	0
414	v2114	app	Nelson	\N	\N	\N	Garcia	1	C815B29CD8F546BBBB4C647B9D163942	6	0
421	v2121	ash	Guy	\N	\N	\N	III	1	C815B29CD8F546BBBB4C647B9D163942	1	0
372	v2032	bam	Lymari	\N	\N	\N	Loftus	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
383	v2043	bib	Isis	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
444	v2144	bid	Bo	\N	\N	\N	Greenfield	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
445	v2145	big	India	\N	\N	\N	Salas	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
446	v2146	bin	Wilgerleez	\N	\N	\N	Marte	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
447	v2147	bio	Giaminh	\N	\N	\N	Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
448	v2148	bio	Danny	\N	\N	\N	Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
449	v2149	bio	Javier	\N	\N	\N	Oquendo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
450	v2150	bio	Marcos	\N	\N	\N	Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
452	v2152	bio	Julio	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
455	v2155	bio	Reinayah	\N	\N	\N	Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
456	v2156	bio	Israel	\N	\N	\N	Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
458	v2158	bio	Justin	\N	\N	\N	Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
460	v2160	bio	Henry	\N	\N	\N	Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
461	v2161	bio	Luis	\N	\N	\N	III	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
462	v2162	bio	Samuel	\N	\N	\N	Frazier	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
463	v2163	big	Bianka	\N	\N	\N	Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
464	v2164	big	Madison	\N	\N	\N	Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
465	v2165	bio	Alexander	\N	\N	\N	Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
466	v2166	bio	Layla	\N	\N	\N	Hill	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
467	v2167	bio	Samual	\N	\N	\N	Dowling	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
468	v2168	bio	Brandon	\N	\N	\N	Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
514	v2232	bam	Juan	\N	\N	\N	Delarosa	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
512	v2230	bit	Emilia	\N	\N	\N	Burgos	1	C815B29CD8F546BBBB4C647B9D163942	1	0
517	v2235	bar	Azavier	\N	\N	\N	Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	1	0
454	v2154	bio	Unique	\N	\N	\N	Pierre	1	C815B29CD8F546BBBB4C647B9D163942	1	0
508	v2226	axe	Marcus	\N	\N	\N	Alicea	1	C815B29CD8F546BBBB4C647B9D163942	1	0
516	v2234	bap	LOuverture	\N	\N	\N	Desamour	1	C815B29CD8F546BBBB4C647B9D163942	1	0
511	v2229	baa	Mariah	\N	\N	\N	Bristol	1	C815B29CD8F546BBBB4C647B9D163942	4	0
510	v2228	ays	Luigi	\N	\N	\N	Baez	1	C815B29CD8F546BBBB4C647B9D163942	2	0
515	v2233	ban	Luz	\N	\N	\N	Delvalle	1	C815B29CD8F546BBBB4C647B9D163942	1	0
513	v2231	bag	Yamel	\N	\N	\N	Burgos	1	C815B29CD8F546BBBB4C647B9D163942	1	0
451	v2151	bio	Duy	\N	\N	\N	Pham	1	C815B29CD8F546BBBB4C647B9D163942	14	0
470	v2170	bio	Kyla	\N	\N	\N	Broken	1	C815B29CD8F546BBBB4C647B9D163942	1	0
459	v2159	bio	Emilio	\N	\N	\N	Tapia	1	C815B29CD8F546BBBB4C647B9D163942	2	0
469	v2169	bio	Jimmy	\N	\N	\N	Wong	1	C815B29CD8F546BBBB4C647B9D163942	2	0
457	v2157	bio	Jenavi	\N	\N	\N	Severino	1	C815B29CD8F546BBBB4C647B9D163942	10	0
527	v2245	big	Serenity	\N	\N	\N	Montiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
545	v2263	cat	Ricardo	\N	\N	\N	Santos	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
546	v2264	bat	Kristian	\N	\N	\N	Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
547	v2265	cat	Mya	\N	\N	\N	Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
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
519	v2237	bay	Sean	\N	\N	\N	Lopez	1	C815B29CD8F546BBBB4C647B9D163942	1	0
552	v2270	cat	Genesis	\N	\N	\N	Zapata	1	C815B29CD8F546BBBB4C647B9D163942	1	0
553	v2271	cat	Valerie	\N	\N	\N	Santiago	1	C815B29CD8F546BBBB4C647B9D163942	2	0
518	v2236	bat	Maya	\N	\N	\N	Jarmul	1	C815B29CD8F546BBBB4C647B9D163942	1	0
549	v2267	cat	Pedro	\N	\N	\N	Rojas	1	C815B29CD8F546BBBB4C647B9D163942	2	0
529	v2247	bio	Aiden	\N	\N	\N	Smith	1	C815B29CD8F546BBBB4C647B9D163942	2	0
544	v2262	cat	Giana	\N	\N	\N	Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
523	v2241	ben	Genesis	\N	\N	\N	Morales	1	C815B29CD8F546BBBB4C647B9D163942	1	0
524	v2242	bet	Danny	\N	\N	\N	Nguyen	1	C815B29CD8F546BBBB4C647B9D163942	1	0
551	v2269	cat	Justin	\N	\N	\N	Valesquez	1	C815B29CD8F546BBBB4C647B9D163942	3	0
520	v2238	bed	Larissa	\N	\N	\N	Mejia	1	C815B29CD8F546BBBB4C647B9D163942	1	0
521	v2239	bee	Paola	\N	\N	\N	Montiel	1	C815B29CD8F546BBBB4C647B9D163942	1	0
525	v2243	bib	Giaminh	\N	\N	\N	Nguyen	1	C815B29CD8F546BBBB4C647B9D163942	1	0
530	v2248	big	Haylee	\N	\N	\N	Trinh	1	C815B29CD8F546BBBB4C647B9D163942	1	0
528	v2246	bin	Serenity	\N	\N	\N	Rodriquez	1	C815B29CD8F546BBBB4C647B9D163942	1	0
550	v2268	cat	Jaden	\N	\N	\N	Gonzalez	1	C815B29CD8F546BBBB4C647B9D163942	1	0
522	v2240	beg	Michael	\N	\N	\N	Moore	1	C815B29CD8F546BBBB4C647B9D163942	1	0
543	v2261	bat	Connor	\N	\N	\N	Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
531	v2249	cat	Sashalynn	\N	\N	\N	Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
548	v2266	cat	Anna	\N	\N	\N	Van	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
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
453	v2153	bio	Cassandra	\N	\N	\N	Torress	1	C815B29CD8F546BBBB4C647B9D163942	7	0
762	vle	pizzas1	Vivian	\N	\N	\N	Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
1	jbreslin33	Iggles_13	James	\N	\N	\N	Breslin	1	884F1851E494434DB4B70D01A077363D	2	0
194	v1741	ben	Sameer	\N	\N	\N	Hill	1	6F4455B55B4240F3B4738DD9DB3EAF40	1	0
763	Payton	Ong8Wr	Payton	\N	\N	\N	GzkXgHrtZBIJkG	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
764	Alexa	ouOxF	Alexa	\N	\N	\N	dkcCaHoetuWcTDFeu	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
765	John	Dy9s1	John	\N	\N	\N	GuscBXwcrDOj	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
766	Megan	Q1UNX	Megan	\N	\N	\N	OQqaDevtpNaqEFGXHCr	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
767	Audrey	oOxB4w	Audrey	\N	\N	\N	wRcHCctFWh	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
768	fcargua	east	fernando	\N	\N	\N	cargua	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
268	v1852	bat	Jose	\N	\N	\N	Jimenez	1	1353E9D5614D460FA32E67853B6BA6D8	4	1
300	v1922	ask	Lily	\N	\N	\N	Billarrial	1	C815B29CD8F546BBBB4C647B9D163942	9	1
370	v2030	bit	Christian	\N	\N	\N	Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1	1
526	v2244	bid	Rodney	\N	\N	\N	Montiz	1	C815B29CD8F546BBBB4C647B9D163942	2	0
509	v2227	aye	Ailany	\N	\N	\N	Asencio	1	C815B29CD8F546BBBB4C647B9D163942	2	0
761	lbreslin	toybot_6	Luke J.	\N	\N	\N	Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1	0
423	v2123	ate	Miaizabella	\N	\N	\N	Nicasio	1	C815B29CD8F546BBBB4C647B9D163942	4	0
113	v1615	apt	Maria	\N	\N	\N	Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1	3
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 768, true);


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

