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
\.


--
-- Name: error_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('error_log_id_seq', 21, true);


--
-- Data for Name: learning_standards; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY learning_standards (id, ref_id, progression, levels) FROM stdin;
k.cc.a.1	CA9EE2E34F384E95A5FA26769C5864B8	1.000	11
k.cc.a.2	5E6A3E3B939B4577B104FA8658206E9E	2.000	6
k.cc.a.3	C11F30815A9C49B9A83B61A285EA11F9	3.000	10
k.cc.b.4a	7B20214AA4AA445AA720062C6F1B5C58	4.000	10
k.cc.b.4b	3DEE205D86BC461FA4271EF4BD190A0C	5.000	10
k.cc.b.5	6F4455B55B4240F3B4738DD9DB3EAF40	6.000	10
k.cc.c.6	66626D8AEE4E474B8CFEC8A4B68AA51C	7.000	10
k.cc.c.7	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	8.000	10
k.oa.a.1	C815B29CD8F546BBBB4C647B9D163942	9.000	21
k.oa.a.2	695A7607FE8A4E27AB80652C45C84FA8	10.000	10
k.oa.a.3	9EC218587C01452C9EB49F52EB2DD1DD	11.000	10
k.oa.a.4	0CFFCBC851984A4281C23D34FC400445	12.000	18
k.oa.a.5	1353E9D5614D460FA32E67853B6BA6D8	13.000	42
k.nbt.a.1	ED150B29EFD14FF8B655FA3F2CA4FE6D	14.000	9
k.md.a.1	017AAEA9D22543A59A60C697FEBADD1B	15.000	10
k.md.a.2	4D3953649C704D4CAFC97E99C7A83EE9	16.000	10
k.md.b.3	C655A9B714CB481EB9D88759DD9BD0D1	17.000	10
k.g.a.1	D55BE0EDAFBC47B0BBDB1B88F9DF8781	18.000	10
k.g.a.2	4F0A52E0906841DFA13739BFC87B330B	19.000	10
k.g.a.3	01938BB1EE4E47319738DAC239A2B141	20.000	10
k.g.b.4	C712BAA86FEF4BFAB703AD2EB402B2DE	21.000	10
1.oa.a.1	C712BAA86FEF4BFAB703AD2EB402B2DD	101.000	10
1.oa.a.2	AF4F218991664833853239C29DCE8521	102.000	10
1.oa.b.3	FC21412A7C92444EA50B30A09729330F	103.000	19
1.oa.b.4	6929CC4620B54F1692E2C20D8FAA12F8	104.000	10
1.oa.c.5	2688E9D1A3FA4B689A3D9E41A1071C0E	105.000	30
1.oa.c.6	6C33D2BEC1AC431C8FC4BF9FD4DD3DCA	106.000	79
1.oa.d.7	2A26EE660F72412EA29765D79C367F0B	107.000	10
1.oa.d.8	626EB1B1473A47E28445F7E8DBDDC269	108.000	10
1.nbt.a.1	19A6BEFD554245118E73E9D4E6048E30	109.000	6
1.nbt.b.2	0B8F8764427D4A1D9FE9EBA6D2EC0C95	110.000	10
1.nbt.b.3	C20A87396FC74159818466765D45D084	111.000	10
1.nbt.c.4	41064C0B98A4460181333BF337E74EF3	112.000	10
1.nbt.c.5	B26DE2515D35459792503137FBF1BAC5	113.000	10
1.nbt.c.6	884F1851E494434DB4B70D01A077363D	114.000	10
1.md.b.3	87CBA4CAA0F6481DA4CE599F6B368E13	115.000	10
2.oa.b.2	800715566B824BB3A5A8C464E961C2B4	116.000	364
3.oa.c.7	3D384CB2349B41299A3B5A133AB9E3F8	117.000	218
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
\.


--
-- Name: schools_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('schools_id_seq', 53, true);


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
458	1
459	1
460	1
461	1
462	1
463	0
464	0
465	0
466	0
467	0
468	0
469	0
470	0
471	0
472	0
473	0
474	0
475	0
476	0
477	0
478	0
479	0
480	1
481	1
485	0
486	0
487	0
488	0
489	0
490	0
491	0
492	0
493	0
494	0
495	0
496	0
497	0
498	0
499	0
500	0
501	1
502	1
503	1
504	1
505	1
506	1
507	1
508	1
509	1
510	1
511	1
512	1
513	1
514	1
515	1
516	1
517	1
520	0
521	0
522	0
523	0
524	0
525	0
526	0
527	0
528	0
529	0
530	0
531	0
532	0
533	0
534	0
535	0
536	0
537	0
538	0
539	0
540	0
541	0
542	0
543	0
544	0
545	0
546	0
547	0
548	1
549	1
550	1
551	1
552	1
553	1
554	1
555	1
556	1
557	1
558	1
559	1
560	1
561	1
562	1
563	1
564	1
565	1
566	1
567	1
568	1
569	1
570	1
571	1
572	1
573	1
574	1
575	1
576	1
577	1
578	1
579	1
580	1
581	1
582	1
583	1
584	1
585	1
586	1
587	1
588	1
589	1
590	1
591	1
592	1
593	1
594	1
595	1
596	1
597	1
598	1
599	1
600	1
601	1
602	1
603	1
604	1
605	1
606	1
607	1
608	1
609	1
610	1
611	1
612	1
613	1
614	1
615	1
617	0
618	0
619	0
620	0
621	0
623	0
624	0
625	0
626	0
627	0
628	0
629	0
630	0
631	0
632	0
633	0
637	0
638	0
639	0
640	0
641	0
642	1
644	1
646	1
648	1
650	1
652	1
653	1
654	1
655	1
656	1
657	1
658	1
659	1
660	1
661	1
662	1
663	1
664	1
665	1
666	1
667	1
668	1
669	1
670	1
671	1
672	1
673	1
674	1
675	1
676	1
677	1
678	1
679	1
680	1
681	1
682	1
683	1
684	1
685	1
686	1
687	1
688	1
689	1
690	1
691	1
692	1
693	1
694	1
695	1
696	1
697	1
698	1
699	1
700	1
701	1
702	1
703	1
704	1
705	1
706	1
707	1
708	1
709	1
710	1
711	1
712	1
713	1
714	1
715	1
716	1
717	1
718	1
719	1
720	1
721	1
722	1
723	1
724	1
725	1
726	1
727	1
728	1
729	1
730	1
731	1
732	1
733	1
734	1
735	1
736	1
737	1
738	1
739	1
740	1
741	1
742	1
743	1
744	1
745	1
746	1
747	1
748	1
749	1
750	1
751	1
752	1
753	1
754	1
755	1
756	1
757	1
758	1
759	1
760	1
761	1
762	1
763	1
764	1
765	1
766	1
767	1
768	1
769	1
770	1
771	1
772	1
773	1
774	1
775	1
776	1
777	1
778	1
779	1
780	1
781	1
782	1
783	1
784	1
785	1
786	1
787	1
788	1
789	1
790	1
791	1
792	1
793	1
794	1
795	1
796	1
797	1
798	1
799	1
800	1
801	1
802	1
803	1
804	1
805	1
806	1
807	1
808	1
809	1
810	1
811	1
812	1
813	1
814	1
815	1
816	1
817	1
818	1
819	1
820	1
821	1
822	1
823	1
824	1
825	1
826	1
827	1
828	1
829	1
830	1
831	1
832	1
833	1
834	1
835	1
836	1
837	1
838	1
839	1
840	1
841	1
842	1
843	1
844	1
845	1
846	1
847	1
848	1
849	1
850	1
851	1
852	1
853	1
854	1
855	1
856	1
857	1
858	1
859	1
\.


--
-- Data for Name: teachers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY teachers (id) FROM stdin;
1
464
465
466
467
468
469
470
471
472
473
474
475
476
477
478
479
485
490
491
493
494
495
496
497
498
522
523
524
525
526
527
528
529
530
531
532
533
534
535
536
537
538
539
540
541
542
543
544
545
546
547
617
618
619
620
621
623
624
625
626
627
628
629
630
631
632
633
637
638
640
641
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id, ref_id, level) FROM stdin;
642								1	CA9EE2E34F384E95A5FA26769C5864B8	1
771	v2411	all	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
65	v1512	amp	Javier				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	4
309	v2020	art	Donathan				Truong	1	CA9EE2E34F384E95A5FA26769C5864B8	5
522	496	add	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
535	509	aid	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
541	root	TTDinw	\N	\N	\N	\N	\N	27	CA9EE2E34F384E95A5FA26769C5864B8	1
772	v2412	amp	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
625	root	bat	\N	\N	\N	\N	\N	41	CA9EE2E34F384E95A5FA26769C5864B8	2
416	v2220	art	Madison				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	2
773	v2413	ant	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
774	v2414	app	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
461	v2265	cat	Mya				Torres	1	5E6A3E3B939B4577B104FA8658206E9E	2
775	v2415	apt	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
776	v2416	arc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
618	root	sLDVJB	\N	\N	\N	\N	\N	35	CA9EE2E34F384E95A5FA26769C5864B8	1
313	v2024	ave	Jasnelly				Castillo	1	C11F30815A9C49B9A83B61A285EA11F9	1
2	k	k					kindergarten	1	C11F30815A9C49B9A83B61A285EA11F9	4
777	v2417	arf	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
778	v2418	ark	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
1	root	Paul_1768	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
779	v2419	arm	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
780	v2420	art	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
781	v2421	ash	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
782	v2422	ask	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
783	v2423	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
784	v2424	ave	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
785	v2425	awe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
485	root	asdfghjkl	\N	\N	\N	\N	\N	17	C11F30815A9C49B9A83B61A285EA11F9	1
786	v2426	axe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
787	v2427	aye	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
4	v1202	bio	Jim				Roache	1	CA9EE2E34F384E95A5FA26769C5864B8	1
788	v2428	ays	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
789	v2429	baa	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
790	v2430	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
791	v2431	bag	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
496	root		\N	\N	\N	\N	\N	23	CA9EE2E34F384E95A5FA26769C5864B8	8
792	v2432	bam	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
793	v2433	ban	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
794	v2434	bap	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
795	v2435	bar	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
796	v2436	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
797	v2437	bay	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
798	v2438	bed	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
799	v2439	bee	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
800	v2440	beg	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
801	v2441	ben	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
802	v2442	bet	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
803	v2443	bib	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
5	v1203	bio	Sister				Terri	1	CA9EE2E34F384E95A5FA26769C5864B8	1
6	v1204	bio	Sister				Margaret	1	CA9EE2E34F384E95A5FA26769C5864B8	1
3	jbreslin	Iggles_13	Jim				Breslin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
469	root	IkUf0	\N	\N	\N	\N	\N	6	CA9EE2E34F384E95A5FA26769C5864B8	1
474	root	KA4gC	\N	\N	\N	\N	\N	11	CA9EE2E34F384E95A5FA26769C5864B8	1
310	v2021	ash	Alex				Acevedo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
311	v2022	ask	Zeannalie				Bobe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
312	v2023	ate	Desiray				Cartegna	1	CA9EE2E34F384E95A5FA26769C5864B8	1
314	v2025	awe	Randy				Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
315	v2026	axe	Jason	Compres			Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1
316	v2027	aye	Crystal				Conway	1	CA9EE2E34F384E95A5FA26769C5864B8	1
317	v2028	ays	Antonio				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1
54	v1501	ahh	Keaira				Archie	1	CA9EE2E34F384E95A5FA26769C5864B8	1
55	v1502	abs	Jacin				Aviles	1	CA9EE2E34F384E95A5FA26769C5864B8	1
56	v1503	ace	Tony				Boose	1	CA9EE2E34F384E95A5FA26769C5864B8	1
57	v1504	add	Tiara				Bounyarith	1	CA9EE2E34F384E95A5FA26769C5864B8	1
58	v1505	aft	Ledys				Chavez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
59	v1506	ape	Natalie				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
60	v1507	and	Pablo	Manuel			Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
61	v1508	aim	Dang	Thanh			Duong	1	CA9EE2E34F384E95A5FA26769C5864B8	1
62	v1509	aid	Eliannie				Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1
63	v1510	air	Thomas				Flynn	1	CA9EE2E34F384E95A5FA26769C5864B8	1
64	v1511	all	Alexandria	Luz			Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1
66	v1513	ant	Destiny				Nunez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
67	v1514	app	Kelly				Pickering	1	CA9EE2E34F384E95A5FA26769C5864B8	1
68	v1515	apt	Miguel				Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1
69	v1516	arc	Christopher				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
70	v1517	arf	Rajah				Williams	1	CA9EE2E34F384E95A5FA26769C5864B8	1
804	v2444	bid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
142	v1709	aid	Genesis				Gonzalez	1	5E6A3E3B939B4577B104FA8658206E9E	3
805	v2445	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
806	v2446	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
542	root	ysswTE	\N	\N	\N	\N	\N	28	CA9EE2E34F384E95A5FA26769C5864B8	1
807	v2447	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
808	v2448	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
619	root	kHZpKG	\N	\N	\N	\N	\N	36	CA9EE2E34F384E95A5FA26769C5864B8	1
470	root	avp9z	\N	\N	\N	\N	\N	7	CA9EE2E34F384E95A5FA26769C5864B8	1
143	v1710	air	Angie				Gutierrez	1	C11F30815A9C49B9A83B61A285EA11F9	2
457	v2261	bat	Connor				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	5
7	v1401	ahh	Anthony				Arvelo	1	7B20214AA4AA445AA720062C6F1B5C58	3
136	v1703	ace	Tytiona				Booker	1	C11F30815A9C49B9A83B61A285EA11F9	6
141	v1708	aim	Ciennali				Gonzalez	1	4D3953649C704D4CAFC97E99C7A83EE9	7
637	root	cat	\N	\N	\N	\N	\N	50	CA9EE2E34F384E95A5FA26769C5864B8	2
147	v1714	app	Jordan				Medina	1	0CFFCBC851984A4281C23D34FC400445	18
144	v1711	all	Justine				Jones	1	C11F30815A9C49B9A83B61A285EA11F9	2
809	v2449	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
465	root	1E8ph	\N	\N	\N	\N	\N	2	CA9EE2E34F384E95A5FA26769C5864B8	1
486	469	arm	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
810	v2450	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
90	v1601	ahh	Ruben				Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
91	v1602	abs	Paula	Barbot			Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1
92	v1603	ace	Gregory				Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
811	v2451	hat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
93	v1604	add	Shaun				Doyle	1	CA9EE2E34F384E95A5FA26769C5864B8	1
812	v2452	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
94	v1605	aft	Joshua				Figueroa	1	CA9EE2E34F384E95A5FA26769C5864B8	1
95	v1606	ape	Diosmairi				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
96	v1607	and	Emely				Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
97	v1608	aim	Genesis				Jimenez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
98	v1609	aid	Sharon				Kelly	1	CA9EE2E34F384E95A5FA26769C5864B8	1
99	v1610	air	Maximo				Lebron	1	CA9EE2E34F384E95A5FA26769C5864B8	1
100	v1611	all	William				Lewandowski	1	CA9EE2E34F384E95A5FA26769C5864B8	1
134	v1701	ahh	Jared				Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1
148	v1715	apt	Paola	Munoz			Navarro	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	3
813	v2453	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
814	v2454	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
497	root		\N	\N	\N	\N	\N	24	CA9EE2E34F384E95A5FA26769C5864B8	3
815	v2455	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
816	v2456	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
623	root	vi85	\N	\N	\N	\N	\N	39	C11F30815A9C49B9A83B61A285EA11F9	3
817	v2457	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
404	v2208	aim	Liany				Collado	1	CA9EE2E34F384E95A5FA26769C5864B8	3
818	v2458	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
819	v2459	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
820	v2460	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
821	v2461	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
152	v1719	arm	Victor				Rivera	1	3DEE205D86BC461FA4271EF4BD190A0C	10
822	v2462	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
823	v2463	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
824	v2464	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
825	v2465	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
826	v2466	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
135	v1702	abs	Celine				Beltran	1	CA9EE2E34F384E95A5FA26769C5864B8	1
523	497	app	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
536	510	aid	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
827	v2467	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
828	v2468	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
137	v1704	add	Donte				Burton	1	CA9EE2E34F384E95A5FA26769C5864B8	1
829	v2469	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
138	v1705	aft	Brandon				Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
139	v1706	ape	Waleska	Chaves			Quesada	1	CA9EE2E34F384E95A5FA26769C5864B8	1
830	v2470	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
831	v2471	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
140	v1707	and	Joshua	Dela			Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
626	root	vl85y bat	\N	\N	\N	\N	\N	42	5E6A3E3B939B4577B104FA8658206E9E	1
832	v2472	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
833	v2473	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
834	v2474	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
145	v1712	amp	Jaden				Jordan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
835	v2475	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
836	v2476	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
837	v2477	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
838	v2478	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
839	v2479	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
840	v2480	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
71	v1518	ark	Pamela				Bonifacio	1	CA9EE2E34F384E95A5FA26769C5864B8	1
72	v1519	arm	Marlon				Castillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
73	v1520	art	Kiara				Figuereo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
74	v1521	ash	Nicole				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1
75	v1522	ask	Kiara				Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
76	v1523	ate	Nicola				Izzard	1	CA9EE2E34F384E95A5FA26769C5864B8	1
77	v1524	ave	Howard				Jiang	1	CA9EE2E34F384E95A5FA26769C5864B8	1
153	v1720	art	Evelyn				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
154	v1721	ash	Samir				Sullivan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
150	v1717	arf	Chaneli				Nolasco	1	5E6A3E3B939B4577B104FA8658206E9E	3
644	v2267	cat	Pedro				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1
841	v2481	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
842	v2482	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
843	v2483	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
844	v2484	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
845	v2485	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
846	v2486	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
847	v2487	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
848	v2488	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
155	v1722	ask	Jonathan	E			Torres	1	3DEE205D86BC461FA4271EF4BD190A0C	3
849	v2489	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
487	470	and	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
850	v2490	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
851	v2491	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
852	v2492	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
624	root	v1822ask	\N	\N	\N	\N	\N	40	5E6A3E3B939B4577B104FA8658206E9E	3
853	v2493	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
146	v1713	ant	Jesse	Magobet			Jr	1	3DEE205D86BC461FA4271EF4BD190A0C	1
854	v2494	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
855	v2495	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
856	v2496	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
857	v2497	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
858	v2498	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
859	v2499	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
620	root	jM808	\N	\N	\N	\N	\N	37	CA9EE2E34F384E95A5FA26769C5864B8	1
200	v1815	apt	Miguel				Martinez	1	0CFFCBC851984A4281C23D34FC400445	9
151	v1718	ark	Aidan				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	7
149	v1716	arc	Tamthu				Nguyen	1	5E6A3E3B939B4577B104FA8658206E9E	1
524	498	arm	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
537	511	axe	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
543	root	TkWAh3	\N	\N	\N	\N	\N	29	CA9EE2E34F384E95A5FA26769C5864B8	1
627	root	AckQU	\N	\N	\N	\N	\N	43	CA9EE2E34F384E95A5FA26769C5864B8	1
223	v1838	bed	Elias				Merced	1	C11F30815A9C49B9A83B61A285EA11F9	1
466	root	28TMm	\N	\N	\N	\N	\N	3	CA9EE2E34F384E95A5FA26769C5864B8	1
471	root	Mu8xDj	\N	\N	\N	\N	\N	8	CA9EE2E34F384E95A5FA26769C5864B8	1
318	v2029	baa	Jaelynn				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1
319	v2030	bit	Christian				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
427	v2231	bag	Yamel				Burgos	1	C11F30815A9C49B9A83B61A285EA11F9	3
638	root	lolololololololo	\N	\N	\N	\N	\N	51	CA9EE2E34F384E95A5FA26769C5864B8	1
320	v2031	bag	Daniel				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1
463	462	axe	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
467	root	YTRpH	\N	\N	\N	\N	\N	4	CA9EE2E34F384E95A5FA26769C5864B8	1
472	root	bpBV6	\N	\N	\N	\N	\N	9	CA9EE2E34F384E95A5FA26769C5864B8	1
290	v2001	ahh	Yandel				Alvarez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
646	v2268	cat	Jaden				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
292	v2003	ace	Eliyah				Clark	1	CA9EE2E34F384E95A5FA26769C5864B8	1
293	v2004	add	Richard	Compres			Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1
488	471	app	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
295	v2006	ape	Patrick				Daly	1	CA9EE2E34F384E95A5FA26769C5864B8	1
296	v2007	and	Leanny				Delacruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
304	v2015	apt	Frank	Nguyen			Do	1	C11F30815A9C49B9A83B61A285EA11F9	4
298	v2009	aid	Allessandra				Lilo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
299	v2010	air	Lamir				Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1
300	v2011	all	Brianna	Munoz			Navarro	1	CA9EE2E34F384E95A5FA26769C5864B8	1
301	v2012	amp	Gabriella				Mystil	1	CA9EE2E34F384E95A5FA26769C5864B8	1
302	v2013	ant	Devin				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
303	v2014	app	He				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
628	root	t4Uotf	\N	\N	\N	\N	\N	44	CA9EE2E34F384E95A5FA26769C5864B8	1
327	v2038	bed	Danny				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	3
639	1	ahh	\N	\N	\N	\N	\N	51	CA9EE2E34F384E95A5FA26769C5864B8	1
332	v2043	bib	Isis				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	5
305	v2016	arc	Jordan				Pipkin	1	5E6A3E3B939B4577B104FA8658206E9E	1
291	v2002	abs	Shadir				Brown	1	5E6A3E3B939B4577B104FA8658206E9E	3
475	root	81555916	\N	\N	\N	\N	\N	12	CA9EE2E34F384E95A5FA26769C5864B8	10
306	v2017	arf	Unique				Rodriquez	1	C11F30815A9C49B9A83B61A285EA11F9	1
498	root	abc	\N	\N	\N	\N	\N	25	5E6A3E3B939B4577B104FA8658206E9E	4
321	v2032	bam	Lymari				Loftus	1	CA9EE2E34F384E95A5FA26769C5864B8	1
322	v2033	ban	Lilah				Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
323	v2034	bap	Joshua				Mcafee	1	CA9EE2E34F384E95A5FA26769C5864B8	1
324	v2035	bar	Faith				Mendendez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
326	v2037	bay	Diego				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1
328	v2039	bee	Chaveliz	Reyes			Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1
329	v2040	beg	Kalah				Rosario	1	CA9EE2E34F384E95A5FA26769C5864B8	1
330	v2041	ben	Alexis				Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
525	499	ahh	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
538	root	mibesfat	\N	\N	\N	\N	\N	26	CA9EE2E34F384E95A5FA26769C5864B8	1
544	root	4ibQH3	\N	\N	\N	\N	\N	30	CA9EE2E34F384E95A5FA26769C5864B8	1
621	root	1Nkucc	\N	\N	\N	\N	\N	38	CA9EE2E34F384E95A5FA26769C5864B8	1
331	v2042	bet	Antonio				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	7
325	v2036	bat	Adrianna				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	10
307	v2018	ark	Alex				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	1
308	v2019	arm	Jesus				Terreforte	1	CA9EE2E34F384E95A5FA26769C5864B8	1
237	v1901	ahh	Angelis				Bernardy	1	CA9EE2E34F384E95A5FA26769C5864B8	1
238	v1902	abs	Julio				Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1
239	v1903	ace	Rafael	Cargua			Buestan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
240	v1904	add	Alexander				Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1
241	v1905	aft	Luis				Caseres	1	CA9EE2E34F384E95A5FA26769C5864B8	1
297	v2008	aim	Elijah				Desamour	1	C11F30815A9C49B9A83B61A285EA11F9	1
294	v2005	aft	Amirrah				Conde	1	C11F30815A9C49B9A83B61A285EA11F9	1
489	472		\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
476	root	power	\N	\N	\N	\N	\N	13	CA9EE2E34F384E95A5FA26769C5864B8	3
499	473	ark	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
648	v2269	cat	Justin				Valesquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
629	root	pD7KH	\N	\N	\N	\N	\N	45	CA9EE2E34F384E95A5FA26769C5864B8	1
341	v2101	ahh	Kayla				Aponte	1	C11F30815A9C49B9A83B61A285EA11F9	5
358	v2118	ark	Francis				Hillsee	1	CA9EE2E34F384E95A5FA26769C5864B8	11
347	v2107	and	John				Colon	1	C11F30815A9C49B9A83B61A285EA11F9	1
342	v2102	abs	Julian				Aviles	1	5E6A3E3B939B4577B104FA8658206E9E	2
345	v2105	aft	Anthony				Colon	1	C11F30815A9C49B9A83B61A285EA11F9	1
349	v2109	aid	Ebrianna				Cruz	1	5E6A3E3B939B4577B104FA8658206E9E	3
526	500	arc	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
539	1	ark	\N	\N	\N	\N	\N	26	CA9EE2E34F384E95A5FA26769C5864B8	1
545	root	pBGMb0	\N	\N	\N	\N	\N	31	CA9EE2E34F384E95A5FA26769C5864B8	1
357	v2117	arf	Heaven				Hernandez	1	C11F30815A9C49B9A83B61A285EA11F9	5
365	v2125	awe	Siani				Pagan	1	CA9EE2E34F384E95A5FA26769C5864B8	8
350	v2110	air	Klaritza				Delarosa	1	CA9EE2E34F384E95A5FA26769C5864B8	11
371	v2131	bag	Lianna				Adames	1	C11F30815A9C49B9A83B61A285EA11F9	3
361	v2121	ash	Guy	Mystil			III	1	C11F30815A9C49B9A83B61A285EA11F9	8
355	v2115	apt	Melaney				Gonzalez	1	5E6A3E3B939B4577B104FA8658206E9E	6
452	v2256	cat	Alyssa				Mao	1	C11F30815A9C49B9A83B61A285EA11F9	1
367	v2127	aye	Chastity				Rivera	1	C11F30815A9C49B9A83B61A285EA11F9	5
354	v2114	app	Nelson				Garcia	1	C11F30815A9C49B9A83B61A285EA11F9	8
368	v2128	ays	Nicholas				Torres	1	C11F30815A9C49B9A83B61A285EA11F9	7
344	v2104	add	Yanely				Collado	1	C11F30815A9C49B9A83B61A285EA11F9	6
343	v2103	ace	Yvanna				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	2
359	v2119	arm	Paula				Jarmul	1	3DEE205D86BC461FA4271EF4BD190A0C	10
346	v2106	ape	Marielis				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
363	v2123	ate	Miaizabella				Nicasio	1	C11F30815A9C49B9A83B61A285EA11F9	3
348	v2108	aim	Michael				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
351	v2111	all	Michael				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
352	v2112	amp	Yurielis				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
353	v2113	ant	Genesis				Galvez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
356	v2116	arc	Azora				Goodwin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
226	v1841	ben	Juliza				Portillo	1	66626D8AEE4E474B8CFEC8A4B68AA51C	8
360	v2120	art	Alexis	Tina			McLeod	1	5E6A3E3B939B4577B104FA8658206E9E	2
362	v2122	ask	Devin				Nugyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
364	v2124	ave	Alina				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
366	v2126	axe	Edgardo				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
369	v2129	baa	Jayzn				Vargas	1	CA9EE2E34F384E95A5FA26769C5864B8	1
370	v2130	bit	Kirian	Vargas			Calcano	1	CA9EE2E34F384E95A5FA26769C5864B8	1
477	root		\N	\N	\N	\N	\N	14	CA9EE2E34F384E95A5FA26769C5864B8	3
630	root	JHm0pA	\N	\N	\N	\N	\N	46	CA9EE2E34F384E95A5FA26769C5864B8	1
490	root	abc	\N	\N	\N	\N	\N	18	CA9EE2E34F384E95A5FA26769C5864B8	4
500	474	abs	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
527	501	ate	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
540	512	ave	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
546	root	gyuYpl	\N	\N	\N	\N	\N	32	CA9EE2E34F384E95A5FA26769C5864B8	1
650	v2270	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
460	v2264	bat	Kristian				Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	8
640	root	v1822\\	\N	\N	\N	\N	\N	52	C11F30815A9C49B9A83B61A285EA11F9	2
386	v2146	bin	Wilgerleez	Mercedes			Marte	1	CA9EE2E34F384E95A5FA26769C5864B8	1
478	root		\N	\N	\N	\N	\N	15	CA9EE2E34F384E95A5FA26769C5864B8	2
506	v2162	bio	Samuel	Whitman			Frazier	1	CA9EE2E34F384E95A5FA26769C5864B8	5
510	v2166	bio	Layla				Hill	1	5E6A3E3B939B4577B104FA8658206E9E	2
491	root	abc	\N	\N	\N	\N	\N	19	CA9EE2E34F384E95A5FA26769C5864B8	4
501	v2157	bio	Jenavi				Severino	1	CA9EE2E34F384E95A5FA26769C5864B8	1
502	v2158	bio	Justin	Suchite			Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
504	v2160	bio	Henry				Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1
514	v2170	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
515	v2171	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
516	v2172	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
517	\n							1	CA9EE2E34F384E95A5FA26769C5864B8	1
508	v2164	big	Madison				Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	11
652	v2271	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
512	v2168	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	7
528	502	app	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
547	root	breslin	\N	\N	\N	\N	\N	33	CA9EE2E34F384E95A5FA26769C5864B8	2
653	v2272	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
654	v2273	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
655	v2274	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
656	v2275	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
657	v2276	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
658	v2277	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
659	v2278	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
660	v2279	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
661	v2280	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
662	v2301	ahh	Jason				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
663	v2302	abc	Haily				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
664	v2303	ace	Giovanna				Pierre	1	CA9EE2E34F384E95A5FA26769C5864B8	1
505	v2161	bio	Luis	Vidro			III	1	5E6A3E3B939B4577B104FA8658206E9E	5
665	v2304	add	Carlos				Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
666	v2305	aft	Desiree				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
667	v2306	ape	Mariline				Obrien	1	CA9EE2E34F384E95A5FA26769C5864B8	1
511	v2167	bio	Samual				Dowling	1	C11F30815A9C49B9A83B61A285EA11F9	5
668	v2307	and	Trial				Trial	1	CA9EE2E34F384E95A5FA26769C5864B8	1
669	v2308	aim	Fransisco				Fransisco	1	CA9EE2E34F384E95A5FA26769C5864B8	1
670	v2309	aid	Iyana				Iyana	1	CA9EE2E34F384E95A5FA26769C5864B8	1
509	v2165	bio	Alexander				Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	4
671	v2310	air	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
631	root	hq9FA	\N	\N	\N	\N	\N	47	CA9EE2E34F384E95A5FA26769C5864B8	1
672	v2311	all	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
673	v2312	amp	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
674	v2313	ant	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
675	v2314	app	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
507	v2163	big	Bianka				Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	2
676	v2315	apt	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
677	v2316	arc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
678	v2317	arf	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
679	v2318	ark	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
680	v2319	arm	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
681	v2320	art	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
682	v2321	ash	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
683	v2322	ask	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
684	v2323	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
641	root	v1821	\N	\N	\N	\N	\N	53	C11F30815A9C49B9A83B61A285EA11F9	2
685	v2324	ave	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
686	v2325	awe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
687	v2326	axe	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
688	v2327	aye	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
689	v2328	ays	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
690	v2329	baa	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
691	v2330	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
692	v2331	bag	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
503	v2159	bio	Emilio				Tapia	1	C11F30815A9C49B9A83B61A285EA11F9	3
513	v2169	bio	New				Student	1	C11F30815A9C49B9A83B61A285EA11F9	10
693	v2332	bam	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
694	v2333	ban	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
695	v2334	bap	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
696	v2335	bar	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
697	v2336	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
698	v2337	bay	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
699	v2338	bed	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
700	v2339	bee	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
701	v2340	beg	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
702	v2341	ben	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
703	v2342	bet	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
704	v2343	bib	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
705	v2344	bid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
706	v2345	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
492	1	amp	\N	\N	\N	\N	\N	19	CA9EE2E34F384E95A5FA26769C5864B8	1
520	494	aye	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
529	503	arc	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
548	v1537	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
549	v1538	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
550	v1539	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
479	root		\N	\N	\N	\N	\N	16	CA9EE2E34F384E95A5FA26769C5864B8	8
551	v1540	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
552	v1541	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
553	v1542	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
554	v1543	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
555	v1544	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
556	v1545	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
557	v1647	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
558	v1648	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
559	v1649	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
560	v1650	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
561	v1651	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
562	v1652	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
563	v1653	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
564	v1654	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
565	v1655	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
566	v1656	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
567	v1657	bit	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
569	v1754	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
570	v1755	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
571	v1756	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
572	v1757	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
573	v1758	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
574	v1759	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
575	v1760	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
576	v1761	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
577	v1762	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
578	v1763	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
579	v1854	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
580	v1855	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
581	v1856	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
582	v1857	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
583	v1858	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
584	v1859	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
585	v1860	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
586	v1861	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
587	v1862	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
588	v1954	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
589	v1955	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
590	v1956	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
591	v1957	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
592	v1958	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
593	v1959	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
594	v1960	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
595	v1961	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
596	v1962	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
597	v2052	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
598	v2053	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
599	v2054	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
600	v2055	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
601	v2056	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
602	v2057	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
603	v2058	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
604	v2059	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
605	v2060	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
606	v2173	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
607	v2174	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
608	v2175	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
609	v2176	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
610	v2177	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
611	v2178	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
612	v2179	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
613	v2180	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
614	v2181	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
615	v2182	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
568	v1753	bin	New				Student	1	C11F30815A9C49B9A83B61A285EA11F9	4
632	root	asdfghjkl	\N	\N	\N	\N	\N	48	CA9EE2E34F384E95A5FA26769C5864B8	6
707	v2346	bin	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
708	v2347	bio	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
709	v2348	big	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
710	v2349	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
120	v1631	bag	Robert				Hiciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1
711	v2350	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
201	v1816	arc	Milagros				Mejia	1	C11F30815A9C49B9A83B61A285EA11F9	2
335	v2046	bib	Mariah				Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	9
712	v2351	hat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
713	v2352	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
340	v2051	cat	Aryana				Rosario	1	5E6A3E3B939B4577B104FA8658206E9E	4
714	v2353	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
193	v1808	aim	Ledyn				Gonzalez	1	6F4455B55B4240F3B4738DD9DB3EAF40	1
493	root	abcu	\N	\N	\N	\N	\N	20	CA9EE2E34F384E95A5FA26769C5864B8	1
715	v2354	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
716	v2355	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
717	v2356	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
718	v2357	sat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
719	v2358	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
521	495	ays	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
530	504		\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
160	v1727	aye	Yassel				Baez	1	6F4455B55B4240F3B4738DD9DB3EAF40	2
720	v2359	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
721	v2360	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
722	v2361	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
723	v2362	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
724	v2363	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
253	v1917	arf	Richel				Nunez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
187	v1802	abs	Lanya				Bell	1	C11F30815A9C49B9A83B61A285EA11F9	1
254	v1918	ark	Dasha				Rios	1	CA9EE2E34F384E95A5FA26769C5864B8	1
255	v1919	arm	Erik				Sanchez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
256	v1920	art	Jaslin	Vasquez			Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
257	v1921	ash	Brandon				Alston	1	CA9EE2E34F384E95A5FA26769C5864B8	1
260	v1924	ave	Genesis				Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1
261	v1925	awe	Edwin	Colon			III	1	CA9EE2E34F384E95A5FA26769C5864B8	1
262	v1926	axe	Carlos				Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
263	v1927	aye	Zamantha				Garro	1	CA9EE2E34F384E95A5FA26769C5864B8	1
264	v1928	ays	Gabriella	Gibson			Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
633	root	asdfghjkl	\N	\N	\N	\N	\N	49	CA9EE2E34F384E95A5FA26769C5864B8	8
266	v1930	bit	Matthew	Lampert			Dimperio	1	CA9EE2E34F384E95A5FA26769C5864B8	1
267	v1931	bag	Mya				Lowry	1	CA9EE2E34F384E95A5FA26769C5864B8	1
725	v2364	bat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
333	v2044	bib	Jaden				Camillo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
334	v2045	bib	Allan				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
336	v2047	bib	Shawnese				Kervin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
337	v2048	bib	Bre				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
338	v2049	bib	Hugh				Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
339	v2050	cat	David				Amigon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
188	v1803	ace	Angel				Bernardy	1	CA9EE2E34F384E95A5FA26769C5864B8	4
726	v2365	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
727	v2366	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
186	v1801	ahh	Juan				Ayala	1	CA9EE2E34F384E95A5FA26769C5864B8	1
190	v1805	aft	Stephanie				Donato	1	CA9EE2E34F384E95A5FA26769C5864B8	1
191	v1806	ape	Desmond				Dowling	1	CA9EE2E34F384E95A5FA26769C5864B8	1
464	463	aim	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
194	v1809	aid	Jonathan	Guerrero			Melchor	1	CA9EE2E34F384E95A5FA26769C5864B8	1
196	v1811	all	Jenny				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1
197	v1812	amp	Nicholas				Lewandowski	1	CA9EE2E34F384E95A5FA26769C5864B8	1
198	v1813	ant	Victor				Luna	1	CA9EE2E34F384E95A5FA26769C5864B8	1
199	v1814	app	Christopher				Martinez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
202	v1817	arf	Christina				Negron	1	CA9EE2E34F384E95A5FA26769C5864B8	1
728	v2367	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
729	v2368	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
189	v1804	add	Daniel				Diaz	1	5E6A3E3B939B4577B104FA8658206E9E	1
430	v2234	bap	LOuverture				Desamour	1	C11F30815A9C49B9A83B61A285EA11F9	3
195	v1810	air	Isael				Jimenez	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	5
730	v2369	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
731	v2370	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
732	v2371	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
265	v1929	baa	James				Harris	1	CA9EE2E34F384E95A5FA26769C5864B8	4
733	v2372	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
734	v2373	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
192	v1807	and	Fabiana				Fred	1	CA9EE2E34F384E95A5FA26769C5864B8	2
735	v2374	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
736	v2375	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
737	v2376	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
738	v2377	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
739	v2378	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
740	v2379	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
741	v2380	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
742	v2381	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
743	v2382	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
206	v1821	ash	Ashley				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
210	v1825	awe	Adriana				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
212	v1827	aye	Fernando	Cargua			Buestan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
213	v1828	ays	Miguel				Collazo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
214	v1829	baa	Karina				Cotto	1	CA9EE2E34F384E95A5FA26769C5864B8	1
215	v1830	bit	Jefferson				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
374	v2134	bap	Mariah				Bristol	1	CA9EE2E34F384E95A5FA26769C5864B8	1
375	v2135	bar	Amairlys				Caseras	1	CA9EE2E34F384E95A5FA26769C5864B8	1
376	v2136	bat	Catherine				Cortez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
378	v2138	bed	Millie				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
379	v2139	bee	Luz				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1
380	v2140	beg	Kaydence				Dillon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
384	v2144	bid	Bo				Greenfield	1	CA9EE2E34F384E95A5FA26769C5864B8	1
387	v2147	bio	Giaminh				Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
388	v2148	bio	Danny				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
395	v2155	bio	Justin	Suchite			Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
409	v2213	ant	Ny				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
410	v2214	app	Jason				Nieves	1	CA9EE2E34F384E95A5FA26769C5864B8	1
744	v2383	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
424	v2228	ays	Luigi				Baez	1	5E6A3E3B939B4577B104FA8658206E9E	2
419	v2223	big	Selene				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	11
441	v2245	big	Serenity				Montiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
209	v1824	ave	Cecilia				Valentin	1	C11F30815A9C49B9A83B61A285EA11F9	6
207	v1822	ask	Serenety				Rivera	1	3DEE205D86BC461FA4271EF4BD190A0C	3
450	v2254	cat	Imani				Hansberry	1	CA9EE2E34F384E95A5FA26769C5864B8	5
451	v2255	cat	Chloe				Mack	1	C11F30815A9C49B9A83B61A285EA11F9	2
455	v2259	bat	Ryan				Perfidio	1	C11F30815A9C49B9A83B61A285EA11F9	2
448	v2252	sat	Dan				Doan	1	C11F30815A9C49B9A83B61A285EA11F9	1
456	v2260	cat	Aiden				Quin	1	5E6A3E3B939B4577B104FA8658206E9E	5
445	v2249	cat	Sashalynn				Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	5
203	v1818	ark	Minh	Tai			Nguyen	1	C11F30815A9C49B9A83B61A285EA11F9	1
449	v2253	bat	Jan				Gomez	1	CA9EE2E34F384E95A5FA26769C5864B8	4
453	v2257	sat	Lisnett				Nolasco	1	5E6A3E3B939B4577B104FA8658206E9E	3
446	v2250	bat	David				Andujar	1	CA9EE2E34F384E95A5FA26769C5864B8	6
447	v2251	hat	Rashad				Burgess	1	5E6A3E3B939B4577B104FA8658206E9E	3
422	v2226	axe	Marcus				Alicea	1	CA9EE2E34F384E95A5FA26769C5864B8	7
382	v2142	bet	Javier				Garcia	1	C11F30815A9C49B9A83B61A285EA11F9	1
439	v2243	bib	Giaminh				Nguyen	1	5E6A3E3B939B4577B104FA8658206E9E	2
394	v2154	bio	Jenavi				Severino	1	C11F30815A9C49B9A83B61A285EA11F9	8
443	v2247	bio	Aiden				Smith	1	5E6A3E3B939B4577B104FA8658206E9E	2
437	v2241	ben	Genesis				Morales	1	5E6A3E3B939B4577B104FA8658206E9E	5
390	v2150	bio	Marcos				Perez	1	C11F30815A9C49B9A83B61A285EA11F9	1
432	v2236	bat	Maya				Jarmul	1	C11F30815A9C49B9A83B61A285EA11F9	1
428	v2232	bam	Juan				Delarosa	1	C11F30815A9C49B9A83B61A285EA11F9	1
434	v2238	bed	Larissa				Mejia	1	5E6A3E3B939B4577B104FA8658206E9E	5
440	v2244	bid	Rodney				Montiz	1	CA9EE2E34F384E95A5FA26769C5864B8	8
436	v2240	beg	Michael				Moore	1	5E6A3E3B939B4577B104FA8658206E9E	2
494	root		\N	\N	\N	\N	\N	21	CA9EE2E34F384E95A5FA26769C5864B8	1
397	v2201	ahh	Christopher				Barton	1	CA9EE2E34F384E95A5FA26769C5864B8	4
444	v2248	big	Haylee				Trinh	1	C11F30815A9C49B9A83B61A285EA11F9	1
438	v2242	bet	Danny				Nguyen	1	C11F30815A9C49B9A83B61A285EA11F9	1
745	v2384	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
433	v2237	bay	Sean				Lopez	1	C11F30815A9C49B9A83B61A285EA11F9	2
429	v2233	ban	Luz				Delvalle	1	C11F30815A9C49B9A83B61A285EA11F9	2
435	v2239	bee	Paola				Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	5
431	v2235	bar	Azavier				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	7
425	v2229	baa	Mariah				Bristol	1	C11F30815A9C49B9A83B61A285EA11F9	2
442	v2246	bin	Serenity				Rodriquez	1	5E6A3E3B939B4577B104FA8658206E9E	2
531	505	ave	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
389	v2149	bio	Javier				Oquendo	1	C11F30815A9C49B9A83B61A285EA11F9	2
385	v2145	big	India	Mari	Izzard		Salas	1	7B20214AA4AA445AA720062C6F1B5C58	1
381	v2141	ben	Brayner				Estevez	1	CA9EE2E34F384E95A5FA26769C5864B8	6
211	v1826	axe	Leilani				Burgos	1	C11F30815A9C49B9A83B61A285EA11F9	8
373	v2133	ban	Jesus	Avalos			Jr	1	5E6A3E3B939B4577B104FA8658206E9E	3
454	v2258	cat	Elmer				Peralta	1	5E6A3E3B939B4577B104FA8658206E9E	4
393	v2153	bio	Israel				Santiago	1	5E6A3E3B939B4577B104FA8658206E9E	5
392	v2152	bio	Reinayah				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	8
204	v1819	arm	Charil				Nolasco	1	5E6A3E3B939B4577B104FA8658206E9E	1
372	v2132	bam	Guadalupe				Avalos	1	C11F30815A9C49B9A83B61A285EA11F9	1
391	v2151	bio	Duy				Pham	1	7B20214AA4AA445AA720062C6F1B5C58	5
205	v1820	art	Brian				Ramos	1	C11F30815A9C49B9A83B61A285EA11F9	1
383	v2143	bib	Michael				German	1	5E6A3E3B939B4577B104FA8658206E9E	2
377	v2137	bay	Samara				Cruz	1	C11F30815A9C49B9A83B61A285EA11F9	1
396	v2156	bio	Emilio				Tapia	1	C11F30815A9C49B9A83B61A285EA11F9	5
208	v1823	ate	Adrian				Terrero	1	CA9EE2E34F384E95A5FA26769C5864B8	3
423	v2227	aye	Ailany				Asencio	1	5E6A3E3B939B4577B104FA8658206E9E	3
746	v2385	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
413	v2217	arf	Kiera				Reilly	1	CA9EE2E34F384E95A5FA26769C5864B8	8
414	v2218	ark	Elijah				Rios	1	CA9EE2E34F384E95A5FA26769C5864B8	1
417	v2221	ash	Adrian				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
415	v2219	arm	Edgardo				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
8	v1402	abs	Damyer				Batties	1	CA9EE2E34F384E95A5FA26769C5864B8	1
9	v1403	ace	Johnson				Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1
10	v1404	add	Carina				Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1
11	v1405	aft	Edward	Clark			Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1
12	v1406	ape	Michael				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
13	v1407	and	Annalyse				Feliciano	1	CA9EE2E34F384E95A5FA26769C5864B8	1
14	v1408	aim	Khayree				Hurst	1	CA9EE2E34F384E95A5FA26769C5864B8	1
15	v1409	aid	Oscar	Lomeli			Avalos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
16	v1410	air	Alex	Lopez			Pineda	1	CA9EE2E34F384E95A5FA26769C5864B8	1
17	v1411	all	Curtis				McCoy	1	CA9EE2E34F384E95A5FA26769C5864B8	1
18	v1412	amp	Junior	Tommy			Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
19	v1413	ant	Richard				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
20	v1414	app	Ashley				Norwood	1	CA9EE2E34F384E95A5FA26769C5864B8	1
21	v1415	apt	Yamilex				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
22	v1416	arc	Christina				Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
23	v1417	arf	Melanie				Posada	1	CA9EE2E34F384E95A5FA26769C5864B8	1
24	v1418	ark	Briana				Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1
25	v1419	arm	Darien				Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1
26	v1420	art	Roberto				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
27	v1421	ash	Jasmin				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
28	v1422	ask	Cindy				Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1
29	v1423	ate	Jasibel				Vasquez-Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
30	v1424	ave	Andres				Adames	1	CA9EE2E34F384E95A5FA26769C5864B8	1
31	v1425	awe	Nashyra				Burgess	1	CA9EE2E34F384E95A5FA26769C5864B8	1
32	v1426	axe	Jose				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
33	v1427	aye	Lucilenny				Florentino	1	CA9EE2E34F384E95A5FA26769C5864B8	1
34	v1428	ays	Frailyn				Francisco	1	CA9EE2E34F384E95A5FA26769C5864B8	1
35	v1429	baa	Kastiani	Gonzalez			Solano	1	CA9EE2E34F384E95A5FA26769C5864B8	1
36	v1430	bit	Johnny				Hua	1	CA9EE2E34F384E95A5FA26769C5864B8	1
37	v1431	bag	Shu				Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
38	v1432	bam	Jennifer				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	1
39	v1433	ban	Rafael				Ortiz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
40	v1434	bap	Caroline				Pena	1	CA9EE2E34F384E95A5FA26769C5864B8	1
41	v1435	bar	Jason				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
42	v1436	bat	Tiffany				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
43	v1437	bay	Tommy				Ramos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
44	v1438	bed	Martin				Redanauer	1	CA9EE2E34F384E95A5FA26769C5864B8	1
45	v1439	bee	Joseph				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
46	v1440	beg	Alexis				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
47	v1441	ben	Emanuel				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
48	v1442	bet	Isaura				Sanguinetti	1	CA9EE2E34F384E95A5FA26769C5864B8	1
49	v1443	bib	Vitylia				Santigo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
50	v1444	bid	Kylik				Taylor	1	CA9EE2E34F384E95A5FA26769C5864B8	1
51	v1445	big	Luis				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1
52	v1446	bin	Caroline				Trinidad	1	CA9EE2E34F384E95A5FA26769C5864B8	1
53	v1447	bee	Mayralee				Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1
78	v1525	awe	Neshaiyah				Loney	1	CA9EE2E34F384E95A5FA26769C5864B8	1
79	v1526	axe	Luis				Maldonado	1	CA9EE2E34F384E95A5FA26769C5864B8	1
80	v1527	aye	Ashley				Meregildo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
81	v1528	ays	An				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
82	v1529	baa	Marilee				Reyes	1	CA9EE2E34F384E95A5FA26769C5864B8	1
83	v1530	bit	Nathaniel				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
403	v2207	and	Leah				Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	6
459	v2263	cat	Ricardo				Santos	1	CA9EE2E34F384E95A5FA26769C5864B8	6
462	v2266	cat	Anna				Van	1	5E6A3E3B939B4577B104FA8658206E9E	4
407	v2211	all	Tanya				Lin	1	5E6A3E3B939B4577B104FA8658206E9E	6
411	v2215	apt	Jeremiah				Ortiz	1	5E6A3E3B939B4577B104FA8658206E9E	1
400	v2204	add	Jaavon				Brown	1	CA9EE2E34F384E95A5FA26769C5864B8	5
402	v2206	ape	Jasmine				Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	4
418	v2222	ask	Alejandro				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	10
398	v2202	abc	Zuyanah				Berdicia	1	CA9EE2E34F384E95A5FA26769C5864B8	4
399	v2203	ace	Albert				Bobe	1	CA9EE2E34F384E95A5FA26769C5864B8	7
406	v2210	air	Zabriana				Garro	1	C11F30815A9C49B9A83B61A285EA11F9	1
412	v2216	arc	Anthony				Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	8
421	v2225	awe	Dominis				Zapata	1	CA9EE2E34F384E95A5FA26769C5864B8	5
408	v2212	amp	Devin				Nguyen	1	5E6A3E3B939B4577B104FA8658206E9E	3
405	v2209	aid	Michael				Do	1	CA9EE2E34F384E95A5FA26769C5864B8	5
420	v2224	ave	Jennelyce				Valera	1	CA9EE2E34F384E95A5FA26769C5864B8	4
401	v2205	aft	Iris				Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	6
532	506	awe	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
458	v2262	cat	Giana				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	8
84	v1531	bag	Christian				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1
85	v1532	bam	Christina	Marie			Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1
86	v1533	ban	Joseph				Wetherill	1	CA9EE2E34F384E95A5FA26769C5864B8	1
87	v1534	bag	Chuong				Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1
88	v1535	bat	Deja				Mason	1	CA9EE2E34F384E95A5FA26769C5864B8	1
89	v1536	bat	Hunter				Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
102	v1613	ant	Magalis				Mota	1	CA9EE2E34F384E95A5FA26769C5864B8	1
103	v1614	app	Thanh				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
104	v1615	apt	Maria				Nolasco	1	CA9EE2E34F384E95A5FA26769C5864B8	1
105	v1616	arc	Thuy				Pham	1	CA9EE2E34F384E95A5FA26769C5864B8	1
106	v1617	arf	Timothy				Poulterer	1	CA9EE2E34F384E95A5FA26769C5864B8	1
107	v1618	ark	Zachary				Quinones	1	CA9EE2E34F384E95A5FA26769C5864B8	1
108	v1619	arm	Ryan				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
109	v1620	art	Ciara				Skinner	1	CA9EE2E34F384E95A5FA26769C5864B8	1
110	v1621	ash	Sasha				Vidro	1	CA9EE2E34F384E95A5FA26769C5864B8	1
111	v1622	ask	Christopher	Campverde			Pacheco	1	CA9EE2E34F384E95A5FA26769C5864B8	1
112	v1623	ate	Lily				Chieu	1	CA9EE2E34F384E95A5FA26769C5864B8	1
113	v1624	ave	Lukas				Cruz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
114	v1625	awe	Layani				Fermin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
115	v1626	axe	Alexandria				Furlow	1	CA9EE2E34F384E95A5FA26769C5864B8	1
116	v1627	aye	Abigale				Gibson	1	CA9EE2E34F384E95A5FA26769C5864B8	1
118	v1629	baa	Timothy				Gordon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
119	v1630	bit	Wylid				Harmon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
121	v1632	bam	Destiny				Knight	1	CA9EE2E34F384E95A5FA26769C5864B8	1
122	v1633	ban	Francis	Lowry			III	1	CA9EE2E34F384E95A5FA26769C5864B8	1
123	v1634	bap	Destiny	Ngo			Maysonet	1	CA9EE2E34F384E95A5FA26769C5864B8	1
124	v1635	bar	Randy				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
125	v1636	bat	Andres				Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
126	v1637	bay	Hailey				Ramirez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
127	v1638	bed	Anthony				Rivera	1	CA9EE2E34F384E95A5FA26769C5864B8	1
128	v1639	bee	Alexandra				Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
129	v1642	bet	Anna				Truong	1	CA9EE2E34F384E95A5FA26769C5864B8	1
130	v1643	bit	Amber				Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
131	v1644	bit	Marcos				Alexander	1	CA9EE2E34F384E95A5FA26769C5864B8	1
132	v1645	bit	Bryan				Doan	1	CA9EE2E34F384E95A5FA26769C5864B8	1
133	v1646	bit	Sandra				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
156	v1723	ate	Nataly				Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1
159	v1726	axe	Jonathan	A			Torres	1	CA9EE2E34F384E95A5FA26769C5864B8	1
242	v1906	ape	Tam				Lee	1	3DEE205D86BC461FA4271EF4BD190A0C	5
162	v1729	baa	Richard				Cintron	1	CA9EE2E34F384E95A5FA26769C5864B8	1
163	v1730	bit	Aryana				Colon	1	CA9EE2E34F384E95A5FA26769C5864B8	1
165	v1732	bam	Ollie				Days	1	CA9EE2E34F384E95A5FA26769C5864B8	1
166	v1733	ban	Louis				Delvalle	1	CA9EE2E34F384E95A5FA26769C5864B8	1
170	v1737	bay	Nicholas				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
173	v1740	beg	Gianna				Hernandez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
180	v1747	bip	Jaslin				Seck	1	CA9EE2E34F384E95A5FA26769C5864B8	1
183	v1750	bit	Floridei				Jovel	1	CA9EE2E34F384E95A5FA26769C5864B8	1
184	v1751	bin	Calvin				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
185	v1752	bin	Alexander				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
216	v1831	bag	Reece	Gibson			Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
218	v1833	ban	Vivian				Le	1	CA9EE2E34F384E95A5FA26769C5864B8	1
222	v1837	bay	Makel				Martin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
747	v2386	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
224	v1839	bee	Valerie				Montiel	1	CA9EE2E34F384E95A5FA26769C5864B8	1
225	v1840	beg	Ai	Nhi			Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
748	v2387	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
227	v1842	bet	Jacelynne	Quinones			Castro	1	CA9EE2E34F384E95A5FA26769C5864B8	1
229	v1844	bid	Joel	Rivera			Jr	1	CA9EE2E34F384E95A5FA26769C5864B8	1
230	v1845	big	Brianna				Rodriquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
231	v1846	bin	Joshua				Rojas	1	CA9EE2E34F384E95A5FA26769C5864B8	1
233	v1848	bin	Christopher				Serrano	1	CA9EE2E34F384E95A5FA26769C5864B8	1
234	v1849	bin	Terrell				Wood	1	CA9EE2E34F384E95A5FA26769C5864B8	1
236	v1851	bit	Bangelis				Cosma	1	CA9EE2E34F384E95A5FA26769C5864B8	1
243	v1907	and	Lesly				Ceballos	1	CA9EE2E34F384E95A5FA26769C5864B8	1
220	v1835	bar	Wei				Lin	1	C11F30815A9C49B9A83B61A285EA11F9	1
168	v1735	bar	Jack				Flynn	1	3DEE205D86BC461FA4271EF4BD190A0C	7
221	v1836	bat	Israel				Lugo	1	CA9EE2E34F384E95A5FA26769C5864B8	2
217	v1832	bam	Halle				Jimenez	1	3DEE205D86BC461FA4271EF4BD190A0C	3
117	v1628	ays	Andre				Gonzalez	1	CA9EE2E34F384E95A5FA26769C5864B8	5
533	507	aid	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
175	v1742	bet	Jason				Hua	1	5E6A3E3B939B4577B104FA8658206E9E	2
235	v1850	bit	Ashanti				Lopez	1	6F4455B55B4240F3B4738DD9DB3EAF40	3
219	v1834	bap	Richard				Lillo	1	7B20214AA4AA445AA720062C6F1B5C58	1
157	v1724	ave	Wilson				Torres	1	C11F30815A9C49B9A83B61A285EA11F9	1
101	v1612	amp	Jonathan				Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	3
228	v1843	bib	Markus				Richards	1	66626D8AEE4E474B8CFEC8A4B68AA51C	9
232	v1847	bin	Abrianna				Santiago	1	CA9EE2E34F384E95A5FA26769C5864B8	11
244	v1908	aim	Bryan				Delorbe	1	CA9EE2E34F384E95A5FA26769C5864B8	1
246	v1910	air	Phoenix				Diaz	1	CA9EE2E34F384E95A5FA26769C5864B8	1
247	v1911	all	Christ				Guzman	1	CA9EE2E34F384E95A5FA26769C5864B8	1
249	v1913	ant	Diveah				Henry	1	CA9EE2E34F384E95A5FA26769C5864B8	1
250	v1914	app	Adam				Moore	1	CA9EE2E34F384E95A5FA26769C5864B8	1
252	v1916	arc	Rachel				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
167	v1734	bap	Britney				Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1
182	v1749	bio	William				Santana	1	CA9EE2E34F384E95A5FA26769C5864B8	1
181	v1748	bip	Vy				Nuguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
177	v1744	bid	Najalie				Medina	1	CA9EE2E34F384E95A5FA26769C5864B8	1
272	v1936	bat	Tamthi				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
273	v1937	bay	Nicholas	Nguyen			Do	1	CA9EE2E34F384E95A5FA26769C5864B8	1
274	v1938	bed	Aldo				Rodriguez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
276	v1940	beg	Ricardo				Taveras	1	CA9EE2E34F384E95A5FA26769C5864B8	1
278	v1942	bet	Imani				Velazquez	1	CA9EE2E34F384E95A5FA26769C5864B8	1
280	v1944	big	Ethan				Garcia	1	CA9EE2E34F384E95A5FA26769C5864B8	1
282	v1946	bag	Suzi				Lin	1	CA9EE2E34F384E95A5FA26769C5864B8	1
283	v1947	bet	Astrid				Cordero	1	CA9EE2E34F384E95A5FA26769C5864B8	1
285	v1949	abc	Omar				Balouch	1	CA9EE2E34F384E95A5FA26769C5864B8	1
286	v1950	bat	Nathaniel				Hamilton	1	CA9EE2E34F384E95A5FA26769C5864B8	1
287	v1951	cat	Ahmir				Porter	1	CA9EE2E34F384E95A5FA26769C5864B8	1
289	v1953	cat	Lyanelis				Oquendo	1	CA9EE2E34F384E95A5FA26769C5864B8	1
258	v1922	ask	Lily				Billarrial	1	CA9EE2E34F384E95A5FA26769C5864B8	1
468	root	RssnDJ	\N	\N	\N	\N	\N	5	CA9EE2E34F384E95A5FA26769C5864B8	1
473	root	wywWVK	\N	\N	\N	\N	\N	10	CA9EE2E34F384E95A5FA26769C5864B8	1
271	v1935	bar	Lamanh				Nguyen	1	7B20214AA4AA445AA720062C6F1B5C58	2
179	v1746	bin	Jorden				Richards	1	0CFFCBC851984A4281C23D34FC400445	7
171	v1738	bed	Nicole				Gonzalez	1	AF4F218991664833853239C29DCE8521	2
749	v2388	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
750	v2389	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
269	v1933	ban	Jada				Mack	1	CA9EE2E34F384E95A5FA26769C5864B8	7
481	v1853	bat	Scott				Nguyen	1	CA9EE2E34F384E95A5FA26769C5864B8	1
259	v1923	bot	Luke				Breslin	1	4D3953649C704D4CAFC97E99C7A83EE9	4
751	v2390	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
752	v2391	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
158	v1725	awe	Tattianna				Zelaya	1	695A7607FE8A4E27AB80652C45C84FA8	1
169	v1736	bat	Gisselle				Gerena	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	1
275	v1939	bee	Joshua				Rojas	1	C11F30815A9C49B9A83B61A285EA11F9	2
248	v1912	amp	Destiny				Haley	1	5E6A3E3B939B4577B104FA8658206E9E	1
164	v1731	bag	Meira				Coston	1	CA9EE2E34F384E95A5FA26769C5864B8	6
288	v1952	cat	Joseph				Mejia	1	CA9EE2E34F384E95A5FA26769C5864B8	9
268	v1932	bam	Isabel				Lugo	1	CA9EE2E34F384E95A5FA26769C5864B8	6
245	v1909	aid	Daniel				DelRosario	1	CA9EE2E34F384E95A5FA26769C5864B8	4
753	v2392	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
176	v1743	bib	Natavia				Lewis	1	C11F30815A9C49B9A83B61A285EA11F9	4
270	v1934	bap	Carleigh				Marsilio	1	695A7607FE8A4E27AB80652C45C84FA8	6
161	v1728	ays	Marina				Burgos	1	0CFFCBC851984A4281C23D34FC400445	7
279	v1943	bib	Michael				Zelaya	1	5E6A3E3B939B4577B104FA8658206E9E	1
754	v2393	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
251	v1915	apt	Jose				Morales	1	CA9EE2E34F384E95A5FA26769C5864B8	4
534	508	aim	\N	\N	\N	\N	\N	1	CA9EE2E34F384E95A5FA26769C5864B8	1
284	v1948	ben	Christian				Perez	1	CA9EE2E34F384E95A5FA26769C5864B8	2
755	v2394	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
495	root	abc	\N	\N	\N	\N	\N	22	CA9EE2E34F384E95A5FA26769C5864B8	11
172	v1739	bee	Serenity				Haley	1	C9B9CAD5BDE84CE2A7A0C441A3DF1A2D	2
756	v2395	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
281	v1945	big	Carlos				Jovel	1	66626D8AEE4E474B8CFEC8A4B68AA51C	1
757	v2396	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
178	v1745	big	Annalley				Portillo	1	5E6A3E3B939B4577B104FA8658206E9E	1
758	v2397	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
617	root	abc	\N	\N	\N	\N	\N	34	CA9EE2E34F384E95A5FA26769C5864B8	6
759	v2398	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
277	v1941	ben	Quan				Tran	1	C11F30815A9C49B9A83B61A285EA11F9	1
480	v1852	bat	Jose				Jimenez	1	C815B29CD8F546BBBB4C647B9D163942	1
426	v2230	bit	Emilia				Burgos	1	CA9EE2E34F384E95A5FA26769C5864B8	9
174	v1741	ben	Sameer				Hill	1	695A7607FE8A4E27AB80652C45C84FA8	2
760	v2399	cat	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
761	v2401	ahh	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
762	v2402	abc	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
763	v2403	ace	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
764	v2404	add	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
765	v2405	aft	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
766	v2406	ape	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
767	v2407	and	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
768	v2408	aim	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
769	v2409	aid	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
770	v2410	air	New				Student	1	CA9EE2E34F384E95A5FA26769C5864B8	1
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 859, true);


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

