insert into core_standards (id,core_clusters_id,description) values ('4.nbt.a.1',1,'Recognize that in a multi-digit whole number, a digit in one place represents ten times what it represents in the place to its right.');
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.a.2',1,'Read and write multi-digit whole numbers using base-ten numerals, number names, and expanded form. Compare two multi-digit numbers based on meanings of the digits in each place, using >, =, and < symbols to record the results of comparisons.');
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.b.4',1,' Fluently add and subtract multi-digit whole numbers using the standard algorithm.');
insert into core_standards (id,core_clusters_id,description) values ('4.nbt.b.5',1,' Multiply a whole number of up to four digits by a one-digit whole number, and multiply two two-digit numbers, using strategies based on place value and the properties of operations. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.');
insert into core_standards (id,core_clusters_id,description) values ('4.md.a.3',1,' Apply the area and perimeter formulas for rectangles in real world and mathematical problems.');


--4.nbt.a.1
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_1',11001,'4.nbt.a.1','This type will ask which digit is in the ones column');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_2',11002,'4.nbt.a.1','This type will ask which digit is in the tens column');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_3',11003,'4.nbt.a.1','This type will ask which digit is in the hundreds column');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_4',11004,'4.nbt.a.1','This type will ask which digit is in the thousands column');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_5',11005,'4.nbt.a.1','This type will give thousands and ask for hundreds');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_6',11006,'4.nbt.a.1','This type will give thousands and ask for tens');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_7',11007,'4.nbt.a.1','This type will give thousands and ask for ones');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_8',11008,'4.nbt.a.1','This type will give hundreds and ask for tens');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_9',11009,'4.nbt.a.1','This type will give hundreds and ask for ones');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_10',11010,'4.nbt.a.1','This type will give tens and ask for ones');

--4.nbt.a.2
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_1',10001,'4.nbt.a.2','This type will give the name and ask for number');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_2',10002,'4.nbt.a.2','This type will give the number and ask for name');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_3',10003,'4.nbt.a.2','This type will give number and ask for expanded form');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_4',10004,'4.nbt.a.2','This type will give expanded form and ask for number');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_5',10005,'4.nbt.a.2','This type will will ask >, <, = based on place value');

--4.nbt.b.4
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_1',12001,'4.nbt.b.4','adding numbers up to 6 digits');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_2',12002,'4.nbt.b.4','subtracting numbers up to 6 digits');

--4.nbt.b.5
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_1',13001,'4.nbt.b.5','multiply numbers up to 2 digits');
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.5_2',13002,'4.nbt.b.5','multiply numbers up to 4 digits');

--4.md.a.3
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.3_1',14001,'4.md.a.3','calculate area of a rectangle');
