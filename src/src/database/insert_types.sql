insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_22',5022,'5.oa.a.1','f(d(b(a)c)e)g');
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_1',4.502,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_4',4.204,'k.oa.a.2','Subtraction word problems within 10.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_3',4.203,'k.oa.a.2','Addition word problems within 10.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_2',4.202,'k.oa.a.2','Subtract within 10.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_1',4.201,'k.oa.a.2','Add within 10.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_1',1.201,'k.cc.a.2','This type will ask what 2 numbers come next after a number from 0-99.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_2',1.202,'k.cc.a.2','This type will ask what 3 numbers come next after a number from 0-99.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_3',1.203,'k.cc.a.2','This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100.');
        insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_4',1.204,'k.cc.a.2','What comes next after a number from 0-10 that does not end in 0 or 9.');
        insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_5',1.205,'k.cc.a.2','What comes next after a number from 11-99 that does not end in 0 or 9.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_6',1.206,'k.cc.a.2','What comes next after 9.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_7',1.207,'k.cc.a.2','What comes next after a number ending in 9 from 11-99.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_8',1.208,'k.cc.a.2','What comes next after zero.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_9',1.209,'k.cc.a.2','What comes next after 10.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.2_10',1.210,'k.cc.a.2','What comes next after number ending in zero from 11-99.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.4_1',4.401,'k.oa.a.4','');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_1',3.101,'k.cc.c.6','Compare 10 objects with greater than.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_2',3.102,'k.cc.c.6','Compare 10 objects with equal to.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_3',3.103,'k.cc.c.6','Compare 10 objects with less than.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_4',2.04,'k.cc.b.5','Count the objects up to 10 in scattered pattern.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_3',2.03,'k.cc.b.5','Count the objects up to 20 in a circle.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_2',2.02,'k.cc.b.5','Count the objects up to 20 in a line.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_1',2.01,'k.cc.b.5','Count the objects up to 20 in a rectangular array.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.a.1_1',1.101,'k.cc.a.1','What comes next when counting by ten from numbers that end in zero from 10 to 100.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_1',3.201,'k.cc.c.7','Compare 2 numbers with greater than.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_2',3.202,'k.cc.c.7','Compare 2 numbers with equal to.');
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_3',3.203,'k.cc.c.7','Compare 2 numbers with less than.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_2',4.502,'k.oa.a.5','Subtract within 5.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_1',4.501,'k.oa.a.5','Add within 5.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_1',4.101,'k.oa.a.1','Add within 5 with pictures to help.');
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_2',4.102,'k.oa.a.1','Subtract within 5 with pictures to help
grep -rhI 'insert into item_types' ./ >> src/database/insert_types.sql
