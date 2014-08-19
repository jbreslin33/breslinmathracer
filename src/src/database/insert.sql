
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
insert into finer_types(description) values ('borrow from 1 to 9');
insert into finer_types(description) values ('borrow from zero');
insert into finer_types(description) values ('borrow from two or more zeros in a row');
insert into finer_types(description) values ('no borrow');
	
--carry_types
insert into finer_types(description) values ('carry');
insert into finer_types(description) values ('no carry');

--operation_types
insert into finer_types(description) values ('parenthesis');
insert into finer_types(description) values ('exponents');
insert into finer_types(description) values ('multiplication');
insert into finer_types(description) values ('division');
insert into finer_types(description) values ('addition');
insert into finer_types(description) values ('subtraction');

--problem_types
insert into finer_types(description) values ('calculation');
insert into finer_types(description) values ('word');

--remainder_types
insert into finer_types(description) values ('no remainders');
insert into finer_types(description) values ('remainders');

--speed_types
insert into finer_types(description) values ('fast');
insert into finer_types(description) values ('slow');

--step_types
insert into finer_types(description) values ('one step');
insert into finer_types(description) values ('two step');
insert into finer_types(description) values ('three step');
insert into finer_types(description) values ('four or more steps');

--counting_types
insert into finer_types(description) values ('start at 0');
insert into finer_types(description) values ('start at 9');
insert into finer_types(description) values ('start at 10');
insert into finer_types(description) values ('start at number ending in 9 that is greater than 10 but less than 100');
insert into finer_types(description) values ('start at number ending in 0 that is greater than 10 but less than 100');


-------------------------------------- KINDERGARTEN --------------------------------------------

-------------------------------------- CC --------------------------------------------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (1,1,'Know number names and the count sequence.');
--------------------------------------CLUSTER------------------------------------------- 
--1
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.1',1,'Count to 100 by ones and by tens.');

--2
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.2',1,'Count forward beginning from a given number within the known sequence (instead of having to begin at 1).');

--3
insert into core_standards (id,core_clusters_id,description) values ('k.cc.a.3',1,'Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (2,1,'Count to tell the number of objects.');
--------------------------------------CLUSTER------------------------------------------- 
--4
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4',2,'Understand the relationship between numbers and quantities; connect counting to cardinality.');
	--types NONE this is actually a heading with a,b,c subheadings below

--5
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.a',2,'When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.');
	--types NONE YET NOT DOING 


--6
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.b',2,'Understand that the last number name said tells the number of objects counted. The number of objects is the same regardless of their arrangement or the order in which they were counted.');
	--types NONE YET NOT DOING 


--7
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.4.c',2,'Understand that each successive number name refers to a quantity that is one larger.');
	--types NONE YET NOT DOING 

--8
insert into core_standards (id,core_clusters_id,description) values ('k.cc.b.5',2,'Count to answer "how many?" questions about as many as 20 things arranged in a line, a rectangular array, or a circle, or as many as 10 things in a scattered configuration; given a number from 1-20, count out that many objects.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (3,1,'Compare numbers.');
--------------------------------------CLUSTER------------------------------------------- 
--9
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.6',3,'Identify whether the number of objects in one group is greater than, less than, or equal to the number of objects in another group, e.g., by using matching and counting strategies.');

--10
insert into core_standards (id,core_clusters_id,description) values ('k.cc.c.7',3,'Compare two numbers between 1 and 10 presented as written numerals.');

-------------------------------------- OA --------------------------------------------



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (4,2,'Understand addition, and understand subtraction.');
--------------------------------------CLUSTER------------------------------------------- 
--11
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.1',4,'Represent addition and subtraction with objects, fingers, mental images, drawings1, sounds (e.g., claps), acting out situations, verbal explanations, expressions, or equations.');

--12
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.2',4,'Solve addition and subtraction word problems, and add and subtract within 10, e.g., by using objects or drawings to represent the problem.');

--13
--SKIPPING
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.3',4,'Decompose numbers less than or equal to 10 into pairs in more than one way, e.g., by using objects or drawings, and record each decomposition by a drawing or equation (e.g., 5 = 2 + 3 and 5 = 4 + 1).');


--14
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.4',4,'For any number from 1 to 9, find the number that makes 10 when added to the given number, e.g., by using objects or drawings, and record the answer with a drawing or equation.');

--15
insert into core_standards (id,core_clusters_id,description) values ('k.oa.a.5',4,'Fluently add and subtract within 5.');



-------------------------------------- NBT --------------------------------------------


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (5,3,'Work with numbers 11-19 to gain foundations for place value.');
--------------------------------------CLUSTER------------------------------------------- 
--16
insert into core_standards (id,core_clusters_id,description) values ('k.nbt.a.1',5,'Compose and decompose numbers from 11 to 19 into ten ones and some further ones, e.g., by using objects or drawings, and record each composition or decomposition by a drawing or equation (such as 18 = 10 + 8); understand that these numbers are composed of ten ones and one, two, three, four, five, six, seven, eight, or nine ones.');


-------------------------------------- MD --------------------------------------------


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (6,4,'Describe and compare measurable attributes.');
--------------------------------------CLUSTER------------------------------------------- 
--17
insert into core_standards (id,core_clusters_id,description) values ('k.md.a.1',6,'Describe measurable attributes of objects, such as length or weight. Describe several measurable attributes of a single object.');
	-- NO TYPES
--18
insert into core_standards (id,core_clusters_id,description) values ('k.md.a.2',6,'Directly compare two objects with a measurable attribute in common, to see which object has "more of"/"less of" the attribute, and describe the difference. For example, directly compare the heights of two children and describe one child as taller/shorter.');
	-- NO TYPES



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (7,4,'Classify objects and count the number of objects in each category.');
--------------------------------------CLUSTER------------------------------------------- 
--19
insert into core_standards (id,core_clusters_id,description) values ('k.md.b.3',7,'Classify objects into given categories; count the numbers of objects in each category and sort the categories by count.');
	-- NO TYPES

-------------------------------------- G --------------------------------------------


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (8,5,'Identify and describe shapes.');
--------------------------------------CLUSTER------------------------------------------- 
--20
insert into core_standards (id,core_clusters_id,description) values ('k.g.a.1',8,'Describe objects in the environment using names of shapes, and describe the relative positions of these objects using terms such as above, below, beside, in front of, behind, and next to.');
	-- NO TYPES

--21
insert into core_standards (id,core_clusters_id,description) values ('k.g.a.2',8,'Correctly name shapes regardless of their orientations or overall size.');
	-- NO TYPES

--22
insert into core_standards (id,core_clusters_id,description) values ('k.g.a.3',8,'Identify shapes as two-dimensional (lying in a plane, "flat") or three-dimensional ("solid").');
	-- NO TYPES



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (9,5,'Analyze, compare, create, and compose shapes.');
--------------------------------------CLUSTER------------------------------------------- 
--23
insert into core_standards (id,core_clusters_id,description) values ('k.g.b.4',9,'Analyze and compare two- and three-dimensional shapes, in different sizes and orientations, using informal language to describe their similarities, differences, parts (e.g., number of sides and vertices/"corners") and other attributes (e.g., having sides of equal length).');
	-- NO TYPES

--24
insert into core_standards (id,core_clusters_id,description) values ('k.g.b.5',9,'Model shapes in the world by building shapes from components (e.g., sticks and clay balls) and drawing shapes.');
	-- NO TYPES

--25
insert into core_standards (id,core_clusters_id,description) values ('k.g.b.6',9,'Compose simple shapes to form larger shapes. For example, "Can you join these two triangles with full sides touching to make a rectangle?"');
	-- NO TYPE
------------------------------GRADE 1------------------------------


-------------------------------------- OA --------------------------------------------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (10,6,'Represent and solve problems involving addition and subtraction.');
--------------------------------------CLUSTER------------------------------------------- 
--k.oa.a.1
insert into core_standards (id,core_clusters_id,description) values ('1.oa.a.1',10,'Use addition and subtraction within 20 to solve word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.');

--k.oa.a.2
insert into core_standards (id,core_clusters_id,description) values ('1.oa.a.2',10,'Solve word problems that call for addition of three whole numbers whose sum is less than or equal to 20, e.g., by using objects, drawings, and equations with a symbol for the unknown number to represent the problem.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (11,6,'Understand and apply properties of operations and the relationship between addition and subtraction.');
--------------------------------------CLUSTER------------------------------------------- 
--1.oa.b.3
insert into core_standards (id,core_clusters_id,description) values ('1.oa.b.3',11,'Apply properties of operations as strategies to add and subtract.2 Examples: If 8 + 3 = 11 is known, then 3 + 8 = 11 is also known. (Commutative property of addition.) To add 2 + 6 + 4, the second two numbers can be added to make a ten, so 2 + 6 + 4 = 2 + 10 = 12. (Associative property of addition.)');

--1.oa.b.4
insert into core_standards (id,core_clusters_id,description) values ('1.oa.b.4',11,'Understand subtraction as an unknown-addend problem. For example, subtract 10 - 8 by finding the number that makes 10 when added to 8.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (12,6,'Add and subtract within 20.');
--------------------------------------CLUSTER------------------------------------------- 
--1.oa.c.5
insert into core_standards (id,core_clusters_id,description) values ('1.oa.c.5',12,'Relate counting to addition and subtraction (e.g., by counting on 2 to add 2).');

--1.oa.c.6
insert into core_standards (id,core_clusters_id,description) values ('1.oa.c.6',12,'Add and subtract within 20, demonstrating fluency for addition and subtraction within 10. Use strategies such as counting on; making ten (e.g., 8 + 6 = 8 + 2 + 4 = 10 + 4 = 14); decomposing a number leading to a ten (e.g., 13 - 4 = 13 - 3 - 1 = 10 - 1 = 9); using the relationship between addition and subtraction (e.g., knowing that 8 + 4 = 12, one knows 12 - 8 = 4); and creating equivalent but easier or known sums (e.g., adding 6 + 7 by creating the known equivalent 6 + 6 + 1 = 12 + 1 = 13).');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (13,6,'Work with addition and subtraction equations.');
--------------------------------------CLUSTER------------------------------------------- 
--1.oa.d.7
insert into core_standards (id,core_clusters_id,description) values ('1.oa.d.7',13,'Understand the meaning of the equal sign, and determine if equations involving addition and subtraction are true or false. For example, which of the following equations are true and which are false? 6 = 6, 7 = 8 - 1, 5 + 2 = 2 + 5, 4 + 1 = 5 + 2.');

--1.oa.d.8
insert into core_standards (id,core_clusters_id,description) values ('1.oa.d.8',13,'Determine the unknown whole number in an addition or subtraction equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 + ? = 11, 5 = _ - 3, 6 + 6 = _.');


-------------------------------------- NBT --------------------------------------7------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (14,7,'Extend the counting sequence.');
--------------------------------------CLUSTER------------------------------------------- 
--1.nbt.a.1
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.a.1',14,'Count to 120, starting at any number less than 120. In this range, read and write numerals and represent a number of objects with a written numeral.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (15,7,'Understand place value.');
--------------------------------------CLUSTER------------------------------------------- 
--1.nbt.b.2
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.b.2',15,'Understand that the two digits of a two-digit number represent amounts of tens and ones. Understand the following as special cases:');

--1.nbt.b.2.a
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.b.2.a',15,'10 can be thought of as a bundle of ten ones — called a "ten."');

--1.nbt.b.2.b
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.b.2.b',15,'The numbers from 11 to 19 are composed of a ten and one, two, three, four, five, six, seven, eight, or nine ones.');

--1.nbt.b.2.c
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.b.2.c',15,'The numbers 10, 20, 30, 40, 50, 60, 70, 80, 90 refer to one, two, three, four, five, six, seven, eight, or nine tens (and 0 ones).');

--1.nbt.b.3
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.b.3',15,'Compare two two-digit numbers based on meanings of the tens and ones digits, recording the results of comparisons with the symbols >, =, and <.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (16,7,'Use place value understanding and properties of operations to add and subtract.');
--------------------------------------CLUSTER------------------------------------------- 
insert into core_standards (id,core_clusters_id,description) values ('1.nbt.c.4',16,'Add within 100, including adding a two-digit number and a one-digit number, and adding a two-digit number and a multiple of 10, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used. Understand that in adding two-digit numbers, one adds tens and tens, ones and ones; and sometimes it is necessary to compose a ten.');


insert into core_standards (id,core_clusters_id,description) values ('1.nbt.c.5',16,'Given a two-digit number, mentally find 10 more or 10 less than the number, without having to count; explain the reasoning used.');

insert into core_standards (id,core_clusters_id,description) values ('1.nbt.c.6',16,'Subtract multiples of 10 in the range 10-90 from multiples of 10 in the range 10-90 (positive or zero differences), using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used.');

-------------------------------------- MD --------------------------------------8------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (17,8,'Order three objects by length; compare the lengths of two objects indirectly by using a third object.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('1.md.a.1',17,'Order three objects by length; compare the lengths of two objects indirectly by using a third object.');

insert into core_standards (id,core_clusters_id,description) values ('1.md.a.2',17,'Express the length of an object as a whole number of length units, by laying multiple copies of a shorter object (the length unit) end to end; understand that the length measurement of an object is the number of same-size length units that span it with no gaps or overlaps. Limit to contexts where the object being measured is spanned by a whole number of length units with no gaps or overlaps.');



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (18,8,'Tell and write time.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('1.md.b.3',18,'Tell and write time in hours and half-hours using analog and digital clocks.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (19,8,'Represent and interpret data.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('1.md.c.4',19,'Organize, represent, and interpret data with up to three categories; ask and answer questions about the total number of data points, how many in each category, and how many more or less are in one category than in another.');


-------------------------------------- G --------------------------------------9------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (20,9,'Reason with shapes and their attributes.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('1.g.a.1',20,'Distinguish between defining attributes (e.g., triangles are closed and three-sided) versus non-defining attributes (e.g., color, orientation, overall size); build and draw shapes to possess defining attributes.');

insert into core_standards (id,core_clusters_id,description) values ('1.g.a.2',20,'Compose two-dimensional shapes (rectangles, squares, trapezoids, triangles, half-circles, and quarter-circles) or three-dimensional shapes (cubes, right rectangular prisms, right circular cones, and right circular cylinders) to create a composite shape, and compose new shapes from the composite shape.');

insert into core_standards (id,core_clusters_id,description) values ('1.g.a.3',20,'Partition circles and rectangles into two and four equal shares, describe the shares using the words halves, fourths, and quarters, and use the phrases half of, fourth of, and quarter of. Describe the whole as two of, or four of the shares. Understand for these examples that decomposing into more equal shares creates smaller shares.');

------------------------------------------------ g2 ----------------------------------

------------------------------------------------ oa ----------------------------10------

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (21,10,'Reason with shapes and their attributes.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.oa.a.1',21,'Use addition and subtraction within 100 to solve one- and two-step word problems involving situations of adding to, taking from, putting together, taking apart, and comparing, with unknowns in all positions, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (22,10,'Add and subtract within 20.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.oa.b.2',22,'Fluently add and subtract within 20 using mental strategies. By end of Grade 2, know from memory all sums of two one-digit numbers.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (23,10,'Work with equal groups of objects to gain foundations for multiplication.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.oa.c.3',23,'Determine whether a group of objects (up to 20) has an odd or even number of members, e.g., by pairing objects or counting them by 2s; write an equation to express an even number as a sum of two equal addends.');

insert into core_standards (id,core_clusters_id,description) values ('2.oa.c.4',23,'Use addition to find the total number of objects arranged in rectangular arrays with up to 5 rows and up to 5 columns; write an equation to express the total as a sum of equal addends.');

-----------------------------------------------nbt--------------- 11

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (24,11,'Understand place value.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.1',24,'Understand that the three digits of a three-digit number represent amounts of hundreds, tens, and ones; e.g., 706 equals 7 hundreds, 0 tens, and 6 ones. Understand the following as special cases:');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.1.a',24,'100 can be thought of as a bundle of ten tens — called a "hundred."');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.1.b',24,'The numbers 100, 200, 300, 400, 500, 600, 700, 800, 900 refer to one, two, three, four, five, six, seven, eight, or nine hundreds (and 0 tens and 0 ones).');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.2',24,'Count within 1000; skip-count by 5s, 10s, and 100s.');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.3',24,'Read and write numbers to 1000 using base-ten numerals, number names, and expanded form.');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.a.4',24,'Compare two three-digit numbers based on meanings of the hundreds, tens, and ones digits, using >, =, and < symbols to record the results of comparisons.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (25,11,'Use place value understanding and properties of operations to add and subtract.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.b.5',25,'Fluently add and subtract within 100 using strategies based on place value, properties of operations, and/or the relationship between addition and subtraction.');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.b.6',25,'Add up to four two-digit numbers using strategies based on place value and properties of operations.');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.b.7',25,'Add and subtract within 1000, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method. Understand that in adding or subtracting three-digit numbers, one adds or subtracts hundreds and hundreds, tens and tens, ones and ones; and sometimes it is necessary to compose or decompose tens or hundreds.');


insert into core_standards (id,core_clusters_id,description) values ('2.nbt.b.8',25,'Mentally add 10 or 100 to a given number 100-900, and mentally subtract 10 or 100 from a given number 100-900.');

insert into core_standards (id,core_clusters_id,description) values ('2.nbt.b.9',25,'Explain why addition and subtraction strategies work, using place value and the properties of operations.');


-----------------------------------------------md----------------------------12

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (26,12,'Measure and estimate lengths in standard units.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.md.a.1',26,'Measure the length of an object by selecting and using appropriate tools such as rulers, yardsticks, meter sticks, and measuring tapes.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.a.2',26,'Measure the length of an object twice, using length units of different lengths for the two measurements; describe how the two measurements relate to the size of the unit chosen.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.a.3',26,'Estimate lengths using units of inches, feet, centimeters, and meters.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.a.4',26,'Measure to determine how much longer one object is than another, expressing the length difference in terms of a standard length unit.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (27,12,'Relate addition and subtraction to length.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.md.b.5',27,'Use addition and subtraction within 100 to solve word problems involving lengths that are given in the same units, e.g., by using drawings (such as drawings of rulers) and equations with a symbol for the unknown number to represent the problem.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.b.6',27,'Represent whole numbers as lengths from 0 on a number line diagram with equally spaced points corresponding to the numbers 0, 1, 2, ..., and represent whole-number sums and differences within 100 on a number line diagram.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (28,12,'Work with time and money.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.md.c.7',28,'Tell and write time from analog and digital clocks to the nearest five minutes, using a.m. and p.m.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.c.8',28,'Solve word problems involving dollar bills, quarters, dimes, nickels, and pennies, using $ and ¢ symbols appropriately. Example: If you have 2 dimes and 3 pennies, how many cents do you have?');



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (29,12,'Represent and interpret data.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.md.d.9',29,'Generate measurement data by measuring lengths of several objects to the nearest whole unit, or by making repeated measurements of the same object. Show the measurements by making a line plot, where the horizontal scale is marked off in whole-number units.');

insert into core_standards (id,core_clusters_id,description) values ('2.md.d.10',29,'Draw a picture graph and a bar graph (with single-unit scale) to represent a data set with up to four categories. Solve simple put-together, take-apart, and compare problems1 using information presented in a bar graph.');


------------------------------------------------------- g ------------ 13

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (30,13,'Reason with shapes and their attributes.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('2.g.a.1',30,'Recognize and draw shapes having specified attributes, such as a given number of angles or a given number of equal faces.1 Identify triangles, quadrilaterals, pentagons, hexagons, and cubes.');

insert into core_standards (id,core_clusters_id,description) values ('2.g.a.2',30,'Partition a rectangle into rows and columns of same-size squares and count to find the total number of them.');

insert into core_standards (id,core_clusters_id,description) values ('2.g.a.3',30,'Partition circles and rectangles into two, three, or four equal shares, describe the shares using the words halves, thirds, half of, a third of, etc., and describe the whole as two halves, three thirds, four fourths. Recognize that equal shares of identical wholes need not have the same shape.');


------------------------------------------------------- GRADE 2  ------------ 

------------------------------------------------------- oa  ----14-------- 

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (31,14,'Represent and solve problems involving multiplication and division.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.oa.a.1',31,'Interpret products of whole numbers, e.g., interpret 5 × 7 as the total number of objects in 5 groups of 7 objects each. For example, describe a context in which a total number of objects can be expressed as 5 × 7.');

insert into core_standards (id,core_clusters_id,description) values ('3.oa.a.2',31,'Interpret whole-number quotients of whole numbers, e.g., interpret 56 ÷ 8 as the number of objects in each share when 56 objects are partitioned equally into 8 shares, or as a number of shares when 56 objects are partitioned into equal shares of 8 objects each. For example, describe a context in which a number of shares or a number of groups can be expressed as 56 ÷ 8.');

insert into core_standards (id,core_clusters_id,description) values ('3.oa.a.3',31,'Use multiplication and division within 100 to solve word problems in situations involving equal groups, arrays, and measurement quantities, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.');

insert into core_standards (id,core_clusters_id,description) values ('3.oa.a.4',31,'Determine the unknown whole number in a multiplication or division equation relating three whole numbers. For example, determine the unknown number that makes the equation true in each of the equations 8 × ? = 48, 5 = _ ÷ 3, 6 × 6 = ?');



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (32,14,'Understand properties of multiplication and the relationship between multiplication and division.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.oa.b.5',32,'Apply properties of operations as strategies to multiply and divide.2 Examples: If 6 × 4 = 24 is known, then 4 × 6 = 24 is also known. (Commutative property of multiplication.) 3 × 5 × 2 can be found by 3 × 5 = 15, then 15 × 2 = 30, or by 5 × 2 = 10, then 3 × 10 = 30. (Associative property of multiplication.) Knowing that 8 × 5 = 40 and 8 × 2 = 16, one can find 8 × 7 as 8 × (5 + 2) = (8 × 5) + (8 × 2) = 40 + 16 = 56. (Distributive property.)');


insert into core_standards (id,core_clusters_id,description) values ('3.oa.b.6',32,'Understand division as an unknown-factor problem. For example, find 32 ÷ 8 by finding the number that makes 32 when multiplied by 8.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (33,14,'Multiply and divide within 100.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.oa.c.7',33,'Fluently multiply and divide within 100, using strategies such as the relationship between multiplication and division (e.g., knowing that 8 × 5 = 40, one knows 40 ÷ 5 = 8) or properties of operations. By the end of Grade 3, know from memory all products of two one-digit numbers.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (34,14,'Solve problems involving the four operations, and identify and explain patterns in arithmetic.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.oa.d.8',34,'Solve two-step word problems using the four operations. Represent these problems using equations with a letter standing for the unknown quantity. Assess the reasonableness of answers using mental computation and estimation strategies including rounding.');

insert into core_standards (id,core_clusters_id,description) values ('3.oa.d.9',34,'Identify arithmetic patterns (including patterns in the addition table or multiplication table), and explain them using properties of operations. For example, observe that 4 times a number is always even, and explain why 4 times a number can be decomposed into two equal addends.');

----------------------------------------NBT----------- 15

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (35,15,'Use place value understanding and properties of operations to perform multi-digit arithmetic.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.nbt.a.1',35,'Use place value understanding to round whole numbers to the nearest 10 or 100.');

insert into core_standards (id,core_clusters_id,description) values ('3.nbt.a.2',35,'Fluently add and subtract within 1000 using strategies and algorithms based on place value, properties of operations, and/or the relationship between addition and subtraction.');

insert into core_standards (id,core_clusters_id,description) values ('3.nbt.a.3',35,'Multiply one-digit whole numbers by multiples of 10 in the range 10-90 (e.g., 9 × 80, 5 × 60) using strategies based on place value and properties of operations.');

-----------------------------------------NF--------------16

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (36,16,'Develop understanding of fractions as numbers.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.1',36,'Understand a fraction 1/b as the quantity formed by 1 part when a whole is partitioned into b equal parts; understand a fraction a/b as the quantity formed by a parts of size 1/b.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.2',36,'Understand a fraction as a number on the number line; represent fractions on a number line diagram.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.2.a',36,'Represent a fraction 1/b on a number line diagram by defining the interval from 0 to 1 as the whole and partitioning it into b equal parts. Recognize that each part has size 1/b and that the endpoint of the part based at 0 locates the number 1/b on the number line.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.2.b',36,'Represent a fraction a/b on a number line diagram by marking off a lengths 1/b from 0. Recognize that the resulting interval has size a/b and that its endpoint locates the number a/b on the number line.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.3',36,'Explain equivalence of fractions in special cases, and compare fractions by reasoning about their size.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.3.a',36,'Understand two fractions as equivalent (equal) if they are the same size, or the same point on a number line.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.3.b',36,'Recognize and generate simple equivalent fractions, e.g., 1/2 = 2/4, 4/6 = 2/3. Explain why the fractions are equivalent, e.g., by using a visual fraction model.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.3.c',36,'Express whole numbers as fractions, and recognize fractions that are equivalent to whole numbers. Examples: Express 3 in the form 3 = 3/1; recognize that 6/1 = 6; locate 4/4 and 1 at the same point of a number line diagram.');

insert into core_standards (id,core_clusters_id,description) values ('3.nf.a.3.d',36,'Compare two fractions with the same numerator or the same denominator by reasoning about their size. Recognize that comparisons are valid only when the two fractions refer to the same whole. Record the results of comparisons with the symbols >, =, or <, and justify the conclusions, e.g., by using a visual fraction model.');






---------------------------------------------md --------------------17

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (37,17,'Solve problems involving measurement and estimation.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.md.a.1',37,'Tell and write time to the nearest minute and measure time intervals in minutes. Solve word problems involving addition and subtraction of time intervals in minutes, e.g., by representing the problem on a number line diagram.');

insert into core_standards (id,core_clusters_id,description) values ('3.md.a.2',37,'Measure and estimate liquid volumes and masses of objects using standard units of grams (g), kilograms (kg), and liters (l).1 Add, subtract, multiply, or divide to solve one-step word problems involving masses or volumes that are given in the same units, e.g., by using drawings (such as a beaker with a measurement scale) to represent the problem.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (38,17,'Represent and interpret data.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.md.b.3',38,'Draw a scaled picture graph and a scaled bar graph to represent a data set with several categories. Solve one- and two-step "how many more" and "how many less" problems using information presented in scaled bar graphs. For example, draw a bar graph in which each square in the bar graph might represent 5 pets.');

insert into core_standards (id,core_clusters_id,description) values ('3.md.b.4',38,'Generate measurement data by measuring lengths using rulers marked with halves and fourths of an inch. Show the data by making a line plot, where the horizontal scale is marked off in appropriate units— whole numbers, halves, or quarters.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (39,17,'Geometric measurement: understand concepts of area and relate area to multiplication and to addition.');
--------------------------------------CLUSTER------------------------------------------- 


insert into core_standards (id,core_clusters_id,description) values ('3.md.c.5',39,'Recognize area as an attribute of plane figures and understand concepts of area measurement.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.5.a',39,'A square with side length 1 unit, called "a unit square," is said to have "one square unit" of area, and can be used to measure area.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.5.b',39,'A plane figure which can be covered without gaps or overlaps by n unit squares is said to have an area of n square units.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.6',39,'Measure areas by counting unit squares (square cm, square m, square in, square ft, and improvised units).');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.7',39,'Relate area to the operations of multiplication and addition.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.7.a',39,'Find the area of a rectangle with whole-number side lengths by tiling it, and show that the area is the same as would be found by multiplying the side lengths.');

insert into core_standards (id,core_clusters_id,description) values ('3.md.c.7.b',39,'Multiply side lengths to find areas of rectangles with whole-number side lengths in the context of solving real world and mathematical problems, and represent whole-number products as rectangular areas in mathematical reasoning.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.7.c',39,'Use tiling to show in a concrete case that the area of a rectangle with whole-number side lengths a and b + c is the sum of a × b and a × c. Use area models to represent the distributive property in mathematical reasoning.');
insert into core_standards (id,core_clusters_id,description) values ('3.md.c.7.d',39,'Recognize area as additive. Find areas of rectilinear figures by decomposing them into non-overlapping rectangles and adding the areas of the non-overlapping parts, applying this technique to solve real world problems.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (40,17,'Geometric measurement: recognize perimeter.');
--------------------------------------CLUSTER------------------------------------------- 


insert into core_standards (id,core_clusters_id,description) values ('3.md.d.8',40,'Solve real world and mathematical problems involving perimeters of polygons, including finding the perimeter given the side lengths, finding an unknown side length, and exhibiting rectangles with the same perimeter and different areas or with the same area and different perimeters.');


------------------------------------------------ G-----------   18


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (41,18,'Reason with shapes and their attributes.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('3.g.a.1',41,'Understand that shapes in different categories (e.g., rhombuses, rectangles, and others) may share attributes (e.g., having four sides), and that the shared attributes can define a larger category (e.g., quadrilaterals). Recognize rhombuses, rectangles, and squares as examples of quadrilaterals, and draw examples of quadrilaterals that do not belong to any of these subcategories.');

insert into core_standards (id,core_clusters_id,description) values ('3.g.a.2',41,'Partition shapes into parts with equal areas. Express the area of each part as a unit fraction of the whole. For example, partition a shape into 4 parts with equal area, and describe the area of each part as 1/4 of the area of the shape.');




------------------------------------------------ GRADE 4----------- 

------------------------------------------------ oa-----------  19 

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (42,19,'Use the four operations with whole numbers to solve problems.');
--------------------------------------CLUSTER------------------------------------------- 
--1
insert into core_standards (id,core_clusters_id,description) values ('4.oa.a.1',42,'Interpret a multiplication equation as a comparison, e.g., interpret 35 = 5 × 7 as a statement that 35 is 5 times as many as 7 and 7 times as many as 5. Represent verbal statements of multiplicative comparisons as multiplication equations.');
--2
insert into core_standards (id,core_clusters_id,description) values ('4.oa.a.2',42,'Multiply or divide to solve word problems involving multiplicative comparison, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem, distinguishing multiplicative comparison from additive comparison.');
--3
insert into core_standards (id,core_clusters_id,description) values ('4.oa.a.3',42,'Solve multistep word problems posed with whole numbers and having whole-number answers using the four operations, including problems in which remainders must be interpreted. Represent these problems using equations with a letter standing for the unknown quantity. Assess the reasonableness of answers using mental computation and estimation strategies including rounding.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (43,19,'Gain familiarity with factors and multiples.');
--------------------------------------CLUSTER------------------------------------------- 
--4
insert into core_standards (id,core_clusters_id,description) values ('4.oa.b.4',43,'Find all factor pairs for a whole number in the range 1-100. Recognize that a whole number is a multiple of each of its factors. Determine whether a given whole number in the range 1-100 is a multiple of a given one-digit number. Determine whether a given whole number in the range 1-100 is prime or composite.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (44,19,'Generate and analyze patterns.');
--------------------------------------CLUSTER------------------------------------------- 
--5
insert into core_standards (id,core_clusters_id,description) values ('4.oa.c.5',44,'Generate a number or shape pattern that follows a given rule. Identify apparent features of the pattern that were not explicit in the rule itself. For example, given the rule "Add 3" and the starting number 1, generate terms in the resulting sequence and observe that the terms appear to alternate between odd and even numbers. Explain informally why the numbers will continue to alternate in this way.');


-------------------------------------------------NBT--------20 


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (45,20,'Generalize place value understanding for multi-digit whole numbers.');
--------------------------------------CLUSTER------------------------------------------- 
--6
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.a.1',45,'Recognize that in a multi-digit whole number, a digit in one place represents ten times what it represents in the place to its right. For example, recognize that 700 ÷ 70 = 10 by applying concepts of place value and division.');
--7
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.a.2',45,'Read and write multi-digit whole numbers using base-ten numerals, number names, and expanded form. Compare two multi-digit numbers based on meanings of the digits in each place, using >, =, and < symbols to record the results of comparisons.');
--8
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.a.3',45,'Use place value understanding to round multi-digit whole numbers to any place.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (46,20,'Use place value understanding and properties of operations to perform multi-digit arithmetic.');
--------------------------------------CLUSTER------------------------------------------- 
--9
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.b.4',46,'Fluently add and subtract multi-digit whole numbers using the standard algorithm.');
--10
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.b.5',46,'Multiply a whole number of up to four digits by a one-digit whole number, and multiply two two-digit numbers, using strategies based on place value and the properties of operations. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.');
--11
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.b.6',46,'Find whole-number quotients and remainders with up to four-digit dividends and one-digit divisors, using strategies based on place value, the properties of operations, and/or the relationship between multiplication and division. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.');

-----------------------------------------------NF 21



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (47,21,'Extend understanding of fraction equivalence and ordering.');
--------------------------------------CLUSTER------------------------------------------- 
--12
insert into core_standards (id,core_clusters_id,description) values ('4.nf.a.1',47,'Explain why a fraction a/b is equivalent to a fraction (n × a)/(n × b) by using visual fraction models, with attention to how the number and size of the parts differ even though the two fractions themselves are the same size. Use this principle to recognize and generate equivalent fractions.');
--13
insert into core_standards (id,core_clusters_id,description) values ('4.nf.a.2',47,'Compare two fractions with different numerators and different denominators, e.g., by creating common denominators or numerators, or by comparing to a benchmark fraction such as 1/2. Recognize that comparisons are valid only when the two fractions refer to the same whole. Record the results of comparisons with symbols >, =, or <, and justify the conclusions, e.g., by using a visual fraction model.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (48,21,'Build fractions from unit fractions.');
--------------------------------------CLUSTER------------------------------------------- 
--14
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.3',48,'Understand a fraction a/b with a > 1 as a sum of fractions 1/b.');
--15
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.3.a',48,'Understand addition and subtraction of fractions as joining and separating parts referring to the same whole.');
--16
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.3.b',48,'Decompose a fraction into a sum of fractions with the same denominator in more than one way, recording each decomposition by an equation. Justify decompositions, e.g., by using a visual fraction model. Examples: 3/8 = 1/8 + 1/8 + 1/8 ; 3/8 = 1/8 + 2/8 ; 2 1/8 = 1 + 1 + 1/8 = 8/8 + 8/8 + 1/8.');
--17
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.3.c',48,'Add and subtract mixed numbers with like denominators, e.g., by replacing each mixed number with an equivalent fraction, and/or by using properties of operations and the relationship between addition and subtraction.');
--18
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.3.d',48,'Solve word problems involving addition and subtraction of fractions referring to the same whole and having like denominators, e.g., by using visual fraction models and equations to represent the problem.');
--19
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.4',48,'Apply and extend previous understandings of multiplication to multiply a fraction by a whole number.');
--20
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.4.a',48,'Understand a fraction a/b as a multiple of 1/b. For example, use a visual fraction model to represent 5/4 as the product 5 × (1/4), recording the conclusion by the equation 5/4 = 5 × (1/4).');
--21
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.4.b',48,'Understand a multiple of a/b as a multiple of 1/b, and use this understanding to multiply a fraction by a whole number. For example, use a visual fraction model to express 3 × (2/5) as 6 × (1/5), recognizing this product as 6/5. (In general, n × (a/b) = (n × a)/b.)');
--22
insert into core_standards (id,core_clusters_id,description) values ('4.nf.b.4.c',48,'Solve word problems involving multiplication of a fraction by a whole number, e.g., by using visual fraction models and equations to represent the problem. For example, if each person at a party will eat 3/8 of a pound of roast beef, and there will be 5 people at the party, how many pounds of roast beef will be needed? Between what two whole numbers does your answer lie?');



--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (49,21,'Understand decimal notation for fractions, and compare decimal fractions.');
--------------------------------------CLUSTER------------------------------------------- 
--23
insert into core_standards (id,core_clusters_id,description) values ('4.nf.c.5',49,'Express a fraction with denominator 10 as an equivalent fraction with denominator 100, and use this technique to add two fractions with respective denominators 10 and 100.2 For example, express 3/10 as 30/100, and add 3/10 + 4/100 = 34/100.');
--24
insert into core_standards (id,core_clusters_id,description) values ('4.nf.c.6',49,'Use decimal notation for fractions with denominators 10 or 100. For example, rewrite 0.62 as 62/100; describe a length as 0.62 meters; locate 0.62 on a number line diagram.');
--25
insert into core_standards (id,core_clusters_id,description) values ('4.nf.c.7',49,'Compare two decimals to hundredths by reasoning about their size. Recognize that comparisons are valid only when the two decimals refer to the same whole. Record the results of comparisons with the symbols >, =, or <, and justify the conclusions, e.g., by using a visual model.');

----------------------------------------------md ---------- 22


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (50,22,'Solve problems involving measurement and conversion of measurements.');
--------------------------------------CLUSTER------------------------------------------- 
--26
insert into core_standards (id,core_clusters_id,description) values ('4.md.a.1',50,'Know relative sizes of measurement units within one system of units including km, m, cm; kg, g; lb, oz.; l, ml; hr, min, sec. Within a single system of measurement, express measurements in a larger unit in terms of a smaller unit. Record measurement equivalents in a two-column table. For example, know that 1 ft is 12 times as long as 1 in. Express the length of a 4 ft snake as 48 in. Generate a conversion table for feet and inches listing the number pairs (1, 12), (2, 24), (3, 36), ...');

--27
insert into core_standards (id,core_clusters_id,description) values ('4.md.a.2',50,'Use the four operations to solve word problems involving distances, intervals of time, liquid volumes, masses of objects, and money, including problems involving simple fractions or decimals, and problems that require expressing measurements given in a larger unit in terms of a smaller unit. Represent measurement quantities using diagrams such as number line diagrams that feature a measurement scale.');

--28
insert into core_standards (id,core_clusters_id,description) values ('4.md.a.3',50,'Apply the area and perimeter formulas for rectangles in real world and mathematical problems. For example, find the width of a rectangular room given the area of the flooring and the length, by viewing the area formula as a multiplication equation with an unknown factor.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (51,22,'Represent and interpret data.');
--------------------------------------CLUSTER------------------------------------------- 
--29
insert into core_standards (id,core_clusters_id,description) values ('4.md.b.4',51,'Make a line plot to display a data set of measurements in fractions of a unit (1/2, 1/4, 1/8). Solve problems involving addition and subtraction of fractions by using information presented in line plots. For example, from a line plot find and interpret the difference in length between the longest and shortest specimens in an insect collection.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (52,22,'Geometric measurement: understand concepts of angle and measure angles.');
--------------------------------------CLUSTER------------------------------------------- 
--30
insert into core_standards (id,core_clusters_id,description) values ('4.md.c.5',52,'Recognize angles as geometric shapes that are formed wherever two rays share a common endpoint, and understand concepts of angle measurement:');
--31
insert into core_standards (id,core_clusters_id,description) values ('4.md.c.5.a',52,'An angle is measured with reference to a circle with its center at the common endpoint of the rays, by considering the fraction of the circular arc between the points where the two rays intersect the circle. An angle that turns through 1/360 of a circle is called a "one-degree angle," and can be used to measure angles.');
--32
insert into core_standards (id,core_clusters_id,description) values ('4.md.c.5.b',52,'An angle that turns through n one-degree angles is said to have an angle measure of n degrees.');
--33
insert into core_standards (id,core_clusters_id,description) values ('4.md.c.6',52,'Measure angles in whole-number degrees using a protractor. Sketch angles of specified measure.');
--34
insert into core_standards (id,core_clusters_id,description) values ('4.md.c.7',52,'Recognize angle measure as additive. When an angle is decomposed into non-overlapping parts, the angle measure of the whole is the sum of the angle measures of the parts. Solve addition and subtraction problems to find unknown angles on a diagram in real world and mathematical problems, e.g., by using an equation with a symbol for the unknown angle measure.');



-----------------------------------------g ---------- 23

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (53,23,'Draw and identify lines and angles, and classify shapes by properties of their lines and angles.');
--------------------------------------CLUSTER------------------------------------------- 
--35
insert into core_standards (id,core_clusters_id,description) values ('4.g.a.1',53,'Draw points, lines, line segments, rays, angles (right, acute, obtuse), and perpendicular and parallel lines. Identify these in two-dimensional figures.');
--36
insert into core_standards (id,core_clusters_id,description) values ('4.g.a.2',53,'Classify two-dimensional figures based on the presence or absence of parallel or perpendicular lines, or the presence or absence of angles of a specified size. Recognize right triangles as a category, and identify right triangles.');
--37
insert into core_standards (id,core_clusters_id,description) values ('4.g.a.3',53,'Recognize a line of symmetry for a two-dimensional figure as a line across the figure such that the figure can be folded along the line into matching parts. Identify line-symmetric figures and draw lines of symmetry.');


-----------------------------------------GRADE 5 ----------

-----------------------------------------oa ---------- 24

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (54,24,'Write and interpret numerical expressions.');
--------------------------------------CLUSTER------------------------------------------- 
--1
insert into core_standards (id,core_clusters_id,description) values ('5.oa.a.1',54,'Use parentheses, brackets, or braces in numerical expressions, and evaluate expressions with these symbols.');
--2
insert into core_standards (id,core_clusters_id,description) values ('5.oa.a.2',54,'Write simple expressions that record calculations with numbers, and interpret numerical expressions without evaluating them. For example, express the calculation "add 8 and 7, then multiply by 2" as 2 × (8 + 7). Recognize that 3 × (18932 + 921) is three times as large as 18932 + 921, without having to calculate the indicated sum or product.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (55,24,'Analyze patterns and relationships.');
--------------------------------------CLUSTER------------------------------------------- 

--3
insert into core_standards (id,core_clusters_id,description) values ('5.oa.b.3',55,'Generate two numerical patterns using two given rules. Identify apparent relationships between corresponding terms. Form ordered pairs consisting of corresponding terms from the two patterns, and graph the ordered pairs on a coordinate plane. For example, given the rule "Add 3" and the starting number 0, and given the rule "Add 6" and the starting number 0, generate terms in the resulting sequences, and observe that the terms in one sequence are twice the corresponding terms in the other sequence. Explain informally why this is so.');


-----------------------------------------nbt ---------- 25

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (56,25,'Understand the place value system.');
--------------------------------------CLUSTER------------------------------------------- 
--4
insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.1',56,'Recognize that in a multi-digit number, a digit in one place represents 10 times as much as it represents in the place to its right and 1/10 of what it represents in the place to its left.');
--5
insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.2',56,'Explain patterns in the number of zeros of the product when multiplying a number by powers of 10, and explain patterns in the placement of the decimal point when a decimal is multiplied or divided by a power of 10. Use whole-number exponents to denote powers of 10.');
--6
insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.3',56,'Read, write, and compare decimals to thousandths.');

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.3.a',56,'Read and write decimals to thousandths using base-ten numerals, number names, and expanded form, e.g., 347.392 = 3 × 100 + 4 × 10 + 7 × 1 + 3 × (1/10) + 9 × (1/100) + 2 × (1/1000).');

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.3.b',56,'Compare two decimals to thousandths based on meanings of the digits in each place, using >, =, and < symbols to record the results of comparisons.');

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.a.4',56,'Use place value understanding to round decimals to any place.');

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (57,25,'Perform operations with multi-digit whole numbers and with decimals to hundredths.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.b.5',57,'Fluently multiply multi-digit whole numbers using the standard algorithm.');

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.b.6',57,'Find whole-number quotients of whole numbers with up to four-digit dividends and two-digit divisors, using strategies based on place value, the properties of operations, and/or the relationship between multiplication and division. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.');

insert into core_standards (id,core_clusters_id,description) values ('5.nbt.b.7',57,'Add, subtract, multiply, and divide decimals to hundredths, using concrete models or drawings and strategies based on place value, properties of operations, and/or the relationship between addition and subtraction; relate the strategy to a written method and explain the reasoning used.');




-----------------------------------------nf ---------- 26

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (58,26,'Use equivalent fractions as a strategy to add and subtract fractions.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.nf.a.1',58,'Add and subtract fractions with unlike denominators (including mixed numbers) by replacing given fractions with equivalent fractions in such a way as to produce an equivalent sum or difference of fractions with like denominators. For example, 2/3 + 5/4 = 8/12 + 15/12 = 23/12. (In general, a/b + c/d = (ad + bc)/bd.)');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.a.2',58,'Solve word problems involving addition and subtraction of fractions referring to the same whole, including cases of unlike denominators, e.g., by using visual fraction models or equations to represent the problem. Use benchmark fractions and number sense of fractions to estimate mentally and assess the reasonableness of answers. For example, recognize an incorrect result 2/5 + 1/2 = 3/7, by observing that 3/7 < 1/2.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (59,26,'Apply and extend previous understandings of multiplication and division.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.3',59,'Interpret a fraction as division of the numerator by the denominator (a/b = a ÷ b). Solve word problems involving division of whole numbers leading to answers in the form of fractions or mixed numbers, e.g., by using visual fraction models or equations to represent the problem. For example, interpret 3/4 as the result of dividing 3 by 4, noting that 3/4 multiplied by 4 equals 3, and that when 3 wholes are shared equally among 4 people each person has a share of size 3/4. If 9 people want to share a 50-pound sack of rice equally by weight, how many pounds of rice should each person get? Between what two whole numbers does your answer lie?');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.4',59,'Apply and extend previous understandings of multiplication to multiply a fraction or whole number by a fraction.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.4.a',59,'Interpret the product (a/b) × q as a parts of a partition of q into b equal parts; equivalently, as the result of a sequence of operations a × q ÷ b. For example, use a visual fraction model to show (2/3) × 4 = 8/3, and create a story context for this equation. Do the same with (2/3) × (4/5) = 8/15. (In general, (a/b) × (c/d) = ac/bd.)');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.4.b',59,'Find the area of a rectangle with fractional side lengths by tiling it with unit squares of the appropriate unit fraction side lengths, and show that the area is the same as would be found by multiplying the side lengths. Multiply fractional side lengths to find areas of rectangles, and represent fraction products as rectangular areas.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.5',59,'Interpret multiplication as scaling (resizing), by:');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.5.a',59,'Comparing the size of a product to the size of one factor on the basis of the size of the other factor, without performing the indicated multiplication.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.5.b',59,'Explaining why multiplying a given number by a fraction greater than 1 results in a product greater than the given number (recognizing multiplication by whole numbers greater than 1 as a familiar case); explaining why multiplying a given number by a fraction less than 1 results in a product smaller than the given number; and relating the principle of fraction equivalence a/b = (n × a)/(n × b) to the effect of multiplying a/b by 1.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.6',59,'Solve real world problems involving multiplication of fractions and mixed numbers, e.g., by using visual fraction models or equations to represent the problem.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.7',59,'Apply and extend previous understandings of division to divide unit fractions by whole numbers and whole numbers by unit fractions.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.7.a',59,'Interpret division of a unit fraction by a non-zero whole number, and compute such quotients. For example, create a story context for (1/3) ÷ 4, and use a visual fraction model to show the quotient. Use the relationship between multiplication and division to explain that (1/3) ÷ 4 = 1/12 because (1/12) × 4 = 1/3.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.7.b',59,'Interpret division of a whole number by a unit fraction, and compute such quotients. For example, create a story context for 4 ÷ (1/5), and use a visual fraction model to show the quotient. Use the relationship between multiplication and division to explain that 4 ÷ (1/5) = 20 because 20 × (1/5) = 4.');

insert into core_standards (id,core_clusters_id,description) values ('5.nf.b.7.c',59,'Solve real world problems involving division of unit fractions by non-zero whole numbers and division of whole numbers by unit fractions, e.g., by using visual fraction models and equations to represent the problem. For example, how much chocolate will each person get if 3 people share 1/2 lb of chocolate equally? How many 1/3-cup servings are in 2 cups of raisins?');



-----------------------------------------md ---------- 27

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (60,27,'Convert like measurement units within a given measurement system.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.md.a.1',60,'Convert among different-sized standard measurement units within a given measurement system (e.g., convert 5 cm to 0.05 m), and use these conversions in solving multi-step, real world problems.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (61,27,'Represent and interpret data.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.md.b.1',61,'Make a line plot to display a data set of measurements in fractions of a unit (1/2, 1/4, 1/8). Use operations on fractions for this grade to solve problems involving information presented in line plots. For example, given different measurements of liquid in identical beakers, find the amount of liquid each beaker would contain if the total amount in all the beakers were redistributed equally.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (62,27,'Geometric measurement: understand concepts of volume.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.3',62,'Recognize volume as an attribute of solid figures and understand concepts of volume measurement.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.3.a',62,'A cube with side length 1 unit, called a "unit cube," is said to have "one cubic unit" of volume, and can be used to measure volume.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.3.b',62,'A solid figure which can be packed without gaps or overlaps using n unit cubes is said to have a volume of n cubic units.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.4',62,'Measure volumes by counting unit cubes, using cubic cm, cubic in, cubic ft, and improvised units.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.5',62,'Relate volume to the operations of multiplication and addition and solve real world and mathematical problems involving volume.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.5.a',62,'Find the volume of a right rectangular prism with whole-number side lengths by packing it with unit cubes, and show that the volume is the same as would be found by multiplying the edge lengths, equivalently by multiplying the height by the area of the base. Represent threefold whole-number products as volumes, e.g., to represent the associative property of multiplication.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.5.b',62,'Apply the formulas V = l × w × h and V = b × h for rectangular prisms to find volumes of right rectangular prisms with whole-number edge lengths in the context of solving real world and mathematical problems.');

insert into core_standards (id,core_clusters_id,description) values ('5.md.c.5.c',62,'Recognize volume as additive. Find volumes of solid figures composed of two non-overlapping right rectangular prisms by adding the volumes of the non-overlapping parts, applying this technique to solve real world problems.');



-----------------------------------------g ---------- 28

--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (63,28,'Graph points on the coordinate plane to solve real-world and mathematical problems.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.g.a.1',63,'Use a pair of perpendicular number lines, called axes, to define a coordinate system, with the intersection of the lines (the origin) arranged to coincide with the 0 on each line and a given point in the plane located by using an ordered pair of numbers, called its coordinates. Understand that the first number indicates how far to travel from the origin in the direction of one axis, and the second number indicates how far to travel in the direction of the second axis, with the convention that the names of the two axes and the coordinates correspond (e.g., x-axis and x-coordinate, y-axis and y-coordinate).');

insert into core_standards (id,core_clusters_id,description) values ('5.g.a.2',63,'Represent real world and mathematical problems by graphing points in the first quadrant of the coordinate plane, and interpret coordinate values of points in the context of the situation.');


--------------------------------------CLUSTER------------------------------------------- 
insert into core_clusters(id,core_domains_subjects_grades_id,description) values (64,28,'Classify two-dimensional figures into categories based on their properties.');
--------------------------------------CLUSTER------------------------------------------- 

insert into core_standards (id,core_clusters_id,description) values ('5.g.b.3',64,'Understand that attributes belonging to a category of two-dimensional figures also belong to all subcategories of that category. For example, all rectangles have four right angles and squares are rectangles, so all squares have four right angles.');

insert into core_standards (id,core_clusters_id,description) values ('5.g.b.4',64,'Classify two-dimensional figures in a hierarchy based on properties.');



