--id | progression | levels | core_standard_id
-- id | description | subject_id 
--LEARNING_STANDARDS
delete from core_standards;
delete from learning_standards;


--ELA
insert into core_standards (id,subject_id,description) values ('rl.k.1',2,'With prompting and support, ask and answer questions about key details in a text.');

--MATH
insert into core_standards (id,subject_id,description) values ('k.cc.a.1',1,'Count to 100 by ones and by tens.');
insert into core_standards (id,subject_id,description) values ('k.cc.a.2',2,'Count forward beginning from a given number within the known sequence (instead of having to begin at 1).');
insert into core_standards (id,subject_id,description) values ('k.cc.a.3',2,'Write numbers from 0 to 20. Represent a number of objects with a written numeral 0-20 (with 0 representing a count of no objects).');
insert into core_standards (id,subject_id,description) values ('k.cc.b.4',2,'Understand the relationship between numbers and quantities; connect counting to cardinality.');
insert into core_standards (id,subject_id,description) values ('k.cc.b.4.a',2,'When counting objects, say the number names in the standard order, pairing each object with one and only one number name and each number name with one and only one object.');
insert into core_standards (id,subject_id,description) values ('g4.nbt.a.1',2,'Recognize that in a multi-digit whole number, a digit in one place represents ten times what it represents in the place to its right.');
insert into core_standards (id,subject_id,description) values ('g4.nbt.a.2',2,'Read and write multi-digit whole numbers using base-ten numerals, number names, and expanded form. Compare two multi-digit numbers based on meanings of the digits in each place, using >, =, and < symbols to record the results of comparisons.');


insert into learning_standards (id,core_standards_id,progression,levels) values ('rl.k.1','rl.k.1',1,10); 

insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.1','k.cc.a.1',1,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.2','k.cc.a.2',2,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.a.3','k.cc.a.3',3,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('k.cc.b.4.a','k.cc.b.4.a',4,4); 
insert into learning_standards (id,core_standards_id,progression,levels) values ('g4.nbt.a.1','g4.nbt.a.1',5,4);
insert into learning_standards (id,core_standards_id,progression,levels) values ('g4.nbt.a.2','g4.nbt.a.2',5,4); 
