ALTER TABLE schools ADD username text UNIQUE;
ALTER TABLE schools ADD city text;
ALTER TABLE schools ADD state text;
ALTER TABLE schools ADD zip text;

ALTER TABLE schools ADD UNIQUE (name,city,state,zip); 

delete from schools where id > 2;
update schools set username = 'jfield' where id = 2; 
update schools set city = 'Philadelphia' where id = 2; 
update schools set state = 'Pennsylvannia' where id = 2; 
update schools set state = '19125' where id = 2; 
update schools set username = 'jbreslin' where id = 1; 
update schools set city = 'Philadelphia' where id = 1; 
update schools set state = 'Pennsylvannia' where id = 1; 
update schools set state = '19125' where id = 1; 
