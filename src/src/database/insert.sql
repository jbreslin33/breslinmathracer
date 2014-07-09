
delete from core_subjects;
delete from core_grades;
delete from core_domains;

delete from core_subjects_grades;

delete from core_domains_subjects_grades;
delete from core_clusters;

delete from item_types;


insert into core_subjects(id,description) values (1,'Math'); 
insert into core_subjects(id,description) values (2,'ELA'); 

insert into core_grades(id,description) values (1,'e'); 
insert into core_grades(id,description) values (2,'k'); 
insert into core_grades(id,description) values (3,'1'); 
insert into core_grades(id,description) values (4,'2'); 
insert into core_grades(id,description) values (5,'3'); 
insert into core_grades(id,description) values (6,'4'); 
insert into core_grades(id,description) values (7,'5'); 
insert into core_grades(id,description) values (8,'6'); 
insert into core_grades(id,description) values (9,'7'); 
insert into core_grades(id,description) values (10,'8'); 
insert into core_grades(id,description) values (11,'9'); 

insert into core_domains(id,description) values (1,'Evaluation'); 
insert into core_domains(id,description) values (2,'Counting and Cardinality'); 
insert into core_domains(id,description) values (3,'Operations and Algebraic Thinking'); 
insert into core_domains(id,description) values (4,'Number and Operations in Base Ten'); 
insert into core_domains(id,description) values (5,'Measurement and Data'); 
insert into core_domains(id,description) values (6,'Geometry'); 
insert into core_domains(id,description) values (7,'Numbers and Operations Fractions'); 
insert into core_domains(id,description) values (8,'Ratios and Proportional Relationships'); 
insert into core_domains(id,description) values (9,'The Number System'); 
insert into core_domains(id,description) values (10,'Expressions and Equations'); 
insert into core_domains(id,description) values (11,'Statistics and Probability'); 
insert into core_domains(id,description) values (12,'Functions'); 


insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (1,1,1); -- (s:m g:e)

insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (2,1,2); -- (s:m g:k)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (3,2,2); -- (s:e g:k)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (4,1,3); -- (s:m g:1)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (5,2,3); -- (s:e g:1)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (6,1,4); -- (s:m g:2)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (7,2,4); -- (s:e g:2)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (8,1,5); -- (s:m g:3)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (9,2,5); -- (s:e g:3)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (10,1,6); -- (s:m g:4)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (11,2,6); -- (s:e g:4)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (12,1,7); -- (s:m g:5)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (13,2,7); -- (s:e g:5)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (14,1,8); -- (s:m g:6)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (15,2,8); -- (s:e g:6)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (16,1,9); -- (s:m g:7)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (17,2,9); -- (s:e g:7)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (18,1,10); -- (s:m g:8)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (19,2,10); -- (s:e g:8)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (20,1,11); -- (s:m g:9)
insert into core_subjects_grades(id,core_subjects_id,core_grades_id) values (21,2,11); -- (s:e g:9)

insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (1,1,1); -- e  

insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (2,2,2); -- k.cc  
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (3,3,2); -- k.oa  
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (4,4,2); -- k.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (5,5,2); -- k.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (6,6,2); -- k.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (7,3,4); -- 1.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (8,4,4); -- 1.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (9,5,4); -- 1.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (10,6,4); -- 1.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (11,3,6); -- 2.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (12,4,6); -- 2.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (13,5,6); -- 2.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (14,6,6); -- 2.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (15,3,8); -- 3.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (16,4,8); -- 3.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (17,7,8); -- 3.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (18,5,8); -- 3.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (19,6,8); -- 3.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (20,3,10); -- 4.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (21,3,10); -- 4.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (22,6,10); -- 4.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (23,4,10); -- 4.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (24,5,10); -- 4.g 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (25,2,12); -- 5.oa 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (26,3,12); -- 5.nbt 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (27,6,12); -- 5.f 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (28,4,12); -- 5.md 
insert into core_domains_subjects_grades(id,core_domains_id,core_subjects_grades_id) values (29,5,12); -- 5.g 


insert into core_clusters(id,core_domains_subjects_grades_id,description) values (1,1,'Evaluation');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (2,2,'Know number names and the count sequence.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (3,2,'Count to tell the number of objects.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (4,2,'Compare numbers.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (5,3,'Understand addition, and understand subtraction.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (6,4,'Work with numbers 11-19 to gain foundations for place value.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (7,5,'Describe and compare measurable attributes.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (8,5,'Classify objects and count the number of objects in each category.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (9,6,'Identify and describe shapes.');
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (10,6,'Analyze, compare, create, and compose shapes.');


--ELA
--insert into core_standards (id,subject_id,description) values ('rl.k.1',2,'With prompting and support, ask and answer questions about key details in a text.');

--MATH
insert into core_standards (id,core_clusters_id,description) values ('evaluation',1,'Evaluation.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.1',2,'Count to 100 by ones and by tens.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.2',2,'Count forward beginning from a given number within the known sequence (instead of having to begin at 1).');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.3',2,'Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).');

insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4',3,'Understand the relationship between numbers and quantities; connect counting to cardinality.');
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.a',3,'When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.');
insert into core_standards (id,core_clusters_id,description) values ('g4.nbt.a.1',3,'Recognize that in a multi-digit whole number, a digit in one place represents ten times what it represents in the place to its right.');


--insert into learning_standards (id,core_standards_id,progression,levels) values ('rl.k.1','rl.k.1',1,10); 

insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.1','k.cc.a.1',1,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('evaluation','evaluation',2,1); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.2','k.cc.a.2',3,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.3','k.cc.a.3',4,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('g4.nbt.a.1','g4.nbt.a.1',5,4); 

insert into item_types(id,progression,learning_standards_id,description) values (1,1,'k.cc.a.1','This type will ask what comes next after a number from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (2,2,'k.cc.a.1','This type will ask what comes next after a number ending in 9 from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (3,3,'k.cc.a.1','This type will ask what comes next after a number ending in 0 from 0-99.');
insert into item_types(id,progression,learning_standards_id,description) values (4,4,'k.cc.a.1','When couning by ten from numbers that end in zero. What comes next. Numbers range from 0-100.');
--insert into item_types(id,progression,learning_standards_id,description) values (1,1,'k.cc.a.1','');
