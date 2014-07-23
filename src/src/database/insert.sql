
delete from core_subjects;
delete from core_grades;
delete from core_domains;

delete from core_subjects_grades;

delete from core_domains_subjects_grades;
delete from core_clusters;

delete from item_types;


insert into core_subjects(id,description) values (1,'Math'); 
insert into core_subjects(id,description) values (2,'ELA'); 

insert into core_grades(id,description) values (1,'k'); 
insert into core_grades(id,description) values (2,'1'); 
insert into core_grades(id,description) values (3,'2'); 
insert into core_grades(id,description) values (4,'3'); 
insert into core_grades(id,description) values (5,'4'); 
insert into core_grades(id,description) values (6,'5'); 
insert into core_grades(id,description) values (7,'6'); 
insert into core_grades(id,description) values (8,'7'); 
insert into core_grades(id,description) values (9,'8'); 
insert into core_grades(id,description) values (10,'9'); 
insert into core_grades(id,description) values (11,'10'); 
insert into core_grades(id,description) values (12,'11'); 
insert into core_grades(id,description) values (13,'12'); 
insert into core_grades(id,description) values (10000,'evaluation'); 
insert into core_grades(id,description) values (10001,'remediate'); 

insert into core_domains(id,description) values (1,'Counting and Cardinality'); 
insert into core_domains(id,description) values (2,'Operations and Algebraic Thinking'); 
insert into core_domains(id,description) values (3,'Number and Operations in Base Ten'); 
insert into core_domains(id,description) values (4,'Measurement and Data'); 
insert into core_domains(id,description) values (5,'Geometry'); 
insert into core_domains(id,description) values (6,'Numbers and Operations Fractions'); 
insert into core_domains(id,description) values (7,'Ratios and Proportional Relationships'); 
insert into core_domains(id,description) values (8,'The Number System'); 
insert into core_domains(id,description) values (9,'Expressions and Equations'); 
insert into core_domains(id,description) values (10,'Statistics and Probability'); 
insert into core_domains(id,description) values (11,'Functions'); 
insert into core_domains(id,description) values (10000,'Evaluation'); 
insert into core_domains(id,description) values (10001,'Remediate'); 

insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (1,1,1); -- (s:m g:k)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (2,2,1); -- (s:e g:k)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (3,1,2); -- (s:m g:1)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (4,2,2); -- (s:e g:1)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (5,1,3); -- (s:m g:2)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (6,2,3); -- (s:e g:2)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (7,1,4); -- (s:m g:3)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (8,2,4); -- (s:e g:3)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (9,1,5); -- (s:m g:4)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(10,2,5); -- (s:e g:4)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(11,1,6); -- (s:m g:5)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(12,2,6); -- (s:e g:5)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(13,1,7); -- (s:m g:6)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(14,2,7); -- (s:e g:6)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(15,1,8); -- (s:m g:7)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(16,2,8); -- (s:e g:7)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(17,1,9); -- (s:m g:8)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(18,2,9); -- (s:e g:8)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(19,1,10); -- (s:m g:9)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(20,2,10); -- (s:e g:9)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(21,1,11); -- (s:m g:10)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(22,2,11); -- (s:e g:10)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(23,1,12); -- (s:m g:11)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(24,2,12); -- (s:e g:11)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(25,1,13); -- (s:m g:12)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(26,2,13); -- (s:e g:12)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(10000,1,10000); -- (s:m g:evaluation)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values(10001,1,10001); -- (s:m g:remediate)

insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (1,1,1); -- k.cc  
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (2,2,2); -- k.oa  
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (3,3,2); -- k.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (4,4,2); -- k.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (5,5,2); -- k.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (6,2,4); -- 1.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (7,3,4); -- 1.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (8,4,4); -- 1.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (9,5,4); -- 1.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (10,2,6); -- 2.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (11,3,6); -- 2.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (12,4,6); -- 2.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (13,5,6); -- 2.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (14,2,8); -- 3.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (15,3,8); -- 3.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (16,6,8); -- 3.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (17,4,8); -- 3.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (18,5,8); -- 3.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (19,2,10); -- 4.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (20,3,10); -- 4.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (21,6,10); -- 4.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (22,4,10); -- 4.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (23,5,10); -- 4.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (24,2,12); -- 5.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (25,3,12); -- 5.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (26,6,12); -- 5.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (27,4,12); -- 5.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (28,5,12); -- 5.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (10000,10000,10000); --evaluation 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (10001,10001,10001); --remediate

insert into core_clusters(id,core_domains_subjects_grades_id,description) values (1,1,'Know number names and the count sequence.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (2,1,'Count to tell the number of objects.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (3,1,'Compare numbers.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (4,2,'Understand addition, and understand subtraction.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (5,3,'Work with numbers 11-19 to gain foundations for place value.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (6,4,'Describe and compare measurable attributes.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (7,4,'Classify objects and count the number of objects in each category.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (8,5,'Identify and describe shapes.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (9,5,'Analyze, compare, create, and compose shapes.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (10000,10000,'evaluation');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (10001,10001,'remediate');

--MATH
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.1',1,'Count to 100 by ones and by tens.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.2',1,'Count forward beginning from a given number within the known sequence (instead of having to begin at 1).');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.3',1,'Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).');

insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4',2,'Understand the relationship between numbers and quantities; connect counting to cardinality.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.a',2,'When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.b',2,'Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.c',2,'Understand that each successive number name refers to a quantity that is one larger.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.5',2,'Count to answer "how many?" questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1-20, count out that many objects.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.6',3,'Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.7',3,'Compare two numbers between 1 and 10 presented as written numerals.');
insert into core_standards (id,core_clusters_id,description) values ('g4.nbt.a.1',2,'Recognize that in a multi-digit whole number, a digit in one place represents ten times what it represents in the place to its right.');
insert into core_standards (id,core_clusters_id,description) values ('g4.nbt.a.2',2,'Read and write multi-digit whole numbers using base-ten numerals, number names, and expanded form. Compare two multi-digit numbers based on meanings of the digits in each place, using >, =, and < symbols to record the results of comparisons.');
insert into core_standards (id,core_clusters_id,description) values ('evaluation',10000,'Evaluation');
insert into core_standards (id,core_clusters_id,description) values ('remediate',10001,'Remediate');

insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.1','k.cc.a.1',1,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.2','k.cc.a.2',2,3); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.3','k.cc.a.3',3,4); 
--insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.b.4.a','k.cc.b.4.a',4,2); 
--insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.b.4.b','k.cc.b.4.b',5,2); 
--insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.b.4.c','k.cc.b.4.c',6,2); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.b.5','k.cc.b.5',7,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.c.6','k.cc.c.6',8,1); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.c.7','k.cc.c.7',9,1); 

insert into learning_standards (id,core_standards_id,progression,levels) values ('g4.nbt.a.1','g4.nbt.a.1',401,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('g4.nbt.a.2','g4.nbt.a.2',402,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('evaluation','evaluation',10000,1); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('remediate','remediate',10001,3); 

--k.cc.a.1
insert into item_types(id,progression,learning_standards_id,description) values (1,1,'k.cc.a.1','This type will ask what comes next after a number from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (2,2,'k.cc.a.1','This type will ask what comes next after a number ending in 9 from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (3,3,'k.cc.a.1','This type will ask what comes next after a number ending in 0 from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (4,4,'k.cc.a.1','When couning by ten from numbers that end in zero. What comes next. Numbers range from 0-100.');

--k.cc.a.2
insert into item_types(id,progression,learning_standards_id,description) values (101,101,'k.cc.a.2','This type will ask what 2 numbers come next after a number from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (102,102,'k.cc.a.2','This type will ask what 3 numbers come next after a number from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (103,103,'k.cc.a.2','This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100.');

--k.cc.a.3
insert into item_types(id,progression,learning_standards_id,description) values (201,201,'k.cc.a.3','Count the objects up to 20.');
insert into item_types(id,progression,learning_standards_id,description) values (202,202,'k.cc.a.3','Count the objects up to 20. Make answer zero. ');
insert into item_types(id,progression,learning_standards_id,description) values (203,203,'k.cc.a.3','Count the objects up to 20. make sure answer is between 11-15');
insert into item_types(id,progression,learning_standards_id,description) values (204,204,'k.cc.a.3','Count the objects up to 20. make sure answer is between 16-20');


--k.cc.b.4.a
--insert into item_types(id,progression,learning_standards_id,description) values (301,301,'k.cc.b.4.a','Match counting sequence with number of objects.');
--insert into item_types(id,progression,learning_standards_id,description) values (302,302,'k.cc.b.4.a','When given counting words in order pick the group with that many items.');

--k.cc.b.4.b
--insert into item_types(id,progression,learning_standards_id,description) values (401,401,'k.cc.b.4.b','Count the objects up to 20.');
--insert into item_types(id,progression,learning_standards_id,description) values (402,402,'k.cc.b.4.b','Count the objects up to 20. Make answer zero. ');
--insert into item_types(id,progression,learning_standards_id,description) values (403,403,'k.cc.b.4.b','Count the objects up to 20. make sure answer is between 11-15');
--insert into item_types(id,progression,learning_standards_id,description) values (404,404,'k.cc.b.4.b','Count the objects up to 20. make sure answer is between 16-20');

--k.cc.b.5
insert into item_types(id,progression,learning_standards_id,description) values (601,601,'k.cc.b.5','Count the objects up to 20 in a rectangular array.');
insert into item_types(id,progression,learning_standards_id,description) values (602,602,'k.cc.b.5','Count the objects up to 20 in a line.');
insert into item_types(id,progression,learning_standards_id,description) values (603,603,'k.cc.b.5','Count the objects up to 20 in a circle.');
insert into item_types(id,progression,learning_standards_id,description) values (604,604,'k.cc.b.5','Count the objects up to 10 in scattered pattern.');

--k.cc.c.6
insert into item_types(id,progression,learning_standards_id,description) values (701,701,'k.cc.c.6','Compare 2 groups of of items from 1-10 with greater than, equal to or less than.');

--k.cc.c.7
insert into item_types(id,progression,learning_standards_id,description) values (801,801,'k.cc.c.7','Compare 2 numbers from 1-10 with greater than, equal to or less than.');
