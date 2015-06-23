ALTER TABLE schools ADD username text UNIQUE;
ALTER TABLE schools ADD city text;
ALTER TABLE schools ADD state text;
ALTER TABLE schools ADD zip text;
ALTER TABLE schools ADD email text;
ALTER TABLE schools ADD student_code text;

ALTER TABLE schools ALTER COLUMN city set NOT NULL;
ALTER TABLE schools ALTER COLUMN state set NOT NULL;
ALTER TABLE schools ALTER COLUMN zip set NOT NULL;
ALTER TABLE schools ALTER COLUMN email set NOT NULL;
ALTER TABLE schools ALTER COLUMN student_code set NOT NULL;

ALTER TABLE schools ADD UNIQUE (name,city,state,zip); 

update schools set username = 'jfield' where id = 2; 
update schools set city = 'Philadelphia' where id = 2; 
update schools set state = 'Pennsylvannia' where id = 2; 
update schools set state = '19125' where id = 2; 
update schools set email = 'jfield@visitationbvm.com' where id = 1; 
update schools set student_code = 'learn' where id = 1; 

update schools set username = 'jbreslin' where id = 1; 
update schools set city = 'Philadelphia' where id = 1; 
update schools set state = 'Pennsylvannia' where id = 1; 
update schools set zip = '19125' where id = 1; 
update schools set email = 'jbreslin33@gmail.com' where id = 1; 
update schools set student_code = 'mathcore' where id = 1; 
