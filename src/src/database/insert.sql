
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


--LEARNING_STANDARDS :right now these are essentially our games  
insert into learning_standards (id,levels) values ('evaluation',1); 
insert into learning_standards (id,levels) values ('remediate',3); 
insert into learning_standards (id,levels) values ('practice',3); 
insert into learning_standards (id,levels) values ('normal',1); 

--     FINER TYPES 
--borrow_types
insert into borrow_types(description) values ('borrow from 1 to 9');
insert into borrow_types(description) values ('borrow from zero');
insert into borrow_types(description) values ('borrow from two or more zeros in a row');
insert into borrow_types(description) values ('no borrow');
	
--carry_types
insert into carry_types(description) values ('carry');
insert into carry_types(description) values ('no carry');

--operation_types
insert into operation_types(description) values ('parenthesis');
insert into operation_types(description) values ('exponents');
insert into operation_types(description) values ('multiplication');
insert into operation_types(description) values ('division');
insert into operation_types(description) values ('addition');
insert into operation_types(description) values ('subtraction');

--problem_types
insert into problem_types(description) values ('calculation');
insert into problem_types(description) values ('word');

--remainder_types
insert into remainder_types(description) values ('no remainders');
insert into remainder_types(description) values ('remainders');

--speed_types
insert into speed_types(description) values ('fast');
insert into speed_types(description) values ('slow');

--step_types
insert into step_types(description) values ('one step');
insert into step_types(description) values ('two step');
insert into step_types(description) values ('three step');
insert into step_types(description) values ('four or more steps');

--counting_types
insert into counting_types(description) values ('start at 0');
insert into counting_types(description) values ('start at 9');
insert into counting_types(description) values ('start at 10');
insert into counting_types(description) values ('start at number ending in 9 that is greater than 10 but less than 100');
insert into counting_types(description) values ('start at number ending in 0 that is greater than 10 but less than 100');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (1,1,'Know number names and the count sequence.');
--------------------------------------CLUSTER------------------------------------------- 
--k.cc.a.1
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.1',1,'Count to 100 by ones and by tens.');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',1.101,'k.cc.a.1','What comes next when counting by ten from numbers that end in zero from 10 to 100.');


--k.cc.a.2
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.2',1,'Count forward beginning from a given number within the known sequence (instead of having to begin at 1).');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_1',1.201,'k.cc.a.2','This type will ask what 2 numbers come next after a number from 0-99.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_2',1.202,'k.cc.a.2','This type will ask what 3 numbers come next after a number from 0-99.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_3',1.203,'k.cc.a.2','This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_4',1.204,'k.cc.a.2','What comes next after a number from 0-10 that does not end in 0 or 9.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_5',1.205,'k.cc.a.2','What comes next after a number from 11-99 that does not end in 0 or 9.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_6',1.206,'k.cc.a.2','What comes next after 9.');
		insert into item_types_counting_types(item_types_id, counting_types_id) values ('k.cc.a.2_1',2);
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_7',1.207,'k.cc.a.2','What comes next after a number ending in 9 from 11-99.');
		insert into item_types_counting_types(item_types_id, counting_types_id) values ('k.cc.a.2_1',4);
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_8',1.208,'k.cc.a.2','What comes next after zero.');
		insert into item_types_counting_types(item_types_id, counting_types_id) values ('k.cc.a.2_1',1);
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_9',1.209,'k.cc.a.2','What comes next after 10.');
		insert into item_types_counting_types(item_types_id, counting_types_id) values ('k.cc.a.2_1',3);
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_10',1.210,'k.cc.a.2','What comes next after number ending in zero from 11-99.');
		insert into item_types_counting_types(item_types_id, counting_types_id) values ('k.cc.a.2_1',5);


--k.cc.a.3
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.3',1,'Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.3_1',1.301,'k.cc.a.3','Count the objects up to 20.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.3_2',1.302,'k.cc.a.3','Count the objects up to 20. Make answer zero. ');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.3_3',1.303,'k.cc.a.3','Count the objects up to 20. make sure answer is between 11-15');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.3_4',1.304,'k.cc.a.3','Count the objects up to 20. make sure answer is between 16-20');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (2,1,'Count to tell the number of objects.');
--------------------------------------CLUSTER------------------------------------------- 
--k.cc.b.4
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4',2,'Understand the relationship between numbers and quantities; connect counting to cardinality.');
	--types NONE this is actually a heading with a,b,c subheadings below

--k.cc.b.4.a
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.a',2,'When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.');
	--types NONE YET NOT DOING 


--k.cc.b.4.b
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.b',2,'Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.');
	--types NONE YET NOT DOING 


--k.cc.b.4.c
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.c',2,'Understand that each successive number name refers to a quantity that is one larger.');
	--types NONE YET NOT DOING 

--k.cc.b.5
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.5',2,'Count to answer "how many?" questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1-20, count out that many objects.');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_1',2.01,'k.cc.b.5','Count the objects up to 20 in a rectangular array.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_2',2.02,'k.cc.b.5','Count the objects up to 20 in a line.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_3',2.03,'k.cc.b.5','Count the objects up to 20 in a circle.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_4',2.04,'k.cc.b.5','Count the objects up to 10 in scattered pattern.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (3,1,'Compare numbers.');
--------------------------------------CLUSTER------------------------------------------- 
--k.cc.c.6
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.6',3,'Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies.');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_1',3.101,'k.cc.c.6','Compare 10 objects with greater than.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_2',3.102,'k.cc.c.6','Compare 10 objects with equal to.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_3',3.103,'k.cc.c.6','Compare 10 objects with less than.');

--k.cc.c.7
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.7',3,'Compare two numbers between 1 and 10 presented as written numerals.');
	--types
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_1',3.201,'k.cc.c.7','Compare 2 numbers with greater than.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_2',3.202,'k.cc.c.7','Compare 2 numbers with equal to.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_3',3.203,'k.cc.c.7','Compare 2 numbers with less than.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (4,2,'Understand addition, and understand subtraction.');
--------------------------------------CLUSTER------------------------------------------- 
--k.oa.a.1
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.1',4,'Represent addition and subtraction with objects, fingers, mental images, drawings1, sounds (e.g., claps), acting out situations, verbal explanations, expressions, or equations.');
	--types I am leaving these out. This is something that should be done in traditional class....
	--insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_1',4.101,'k.oa.a.1','Add within 5 with pictures to help.');
	--insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_2',4.102,'k.oa.a.1','Subtract within 5 with pictures to help.');

--k.oa.a.2
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.2',4,'Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.');
	insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_1',4.201,'k.oa.a.2','Add within 10.');
		insert into item_types_operation_types(item_types_id, operation_types_id) values ('k.oa.a.2_1',5);
		insert into item_types_problem_types(item_types_id, problem_types_id) values ('k.oa.a.2_1',1);
	insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_2',4.202,'k.oa.a.2','Subtract within 10.');
		insert into item_types_operation_types(item_types_id, operation_types_id) values ('k.oa.a.2_2',6);
		insert into item_types_problem_types(item_types_id, problem_types_id) values ('k.oa.a.2_2',1);
	insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_3',4.203,'k.oa.a.2','Addition word problems within 10.');
		insert into item_types_operation_types(item_types_id, operation_types_id) values ('k.oa.a.2_3',5);
		insert into item_types_problem_types(item_types_id, problem_types_id) values ('k.oa.a.2_3',2);
	insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_4',4.204,'k.oa.a.2','Subtraction word problems within 10.');
		insert into item_types_operation_types(item_types_id, operation_types_id) values ('k.oa.a.2_4',6);
		insert into item_types_problem_types(item_types_id, problem_types_id) values ('k.oa.a.2_4',2);


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (5,3,'Work with numbers 11-19 to gain foundations for place value.');
--------------------------------------CLUSTER------------------------------------------- 


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (6,4,'Describe and compare measurable attributes.');
--------------------------------------CLUSTER------------------------------------------- 



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (7,4,'Classify objects and count the number of objects in each category.');
--------------------------------------CLUSTER------------------------------------------- 


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (8,5,'Identify and describe shapes.');
--------------------------------------CLUSTER------------------------------------------- 


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (9,5,'Analyze, compare, create, and compose shapes.');
--------------------------------------CLUSTER------------------------------------------- 



--PRACTICE BUDDY

--PREREQUISITE

--ITEM_TYPE_COUNTING_TYPE
--insert into item_type_counting_type(
