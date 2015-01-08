update item_types SET type_mastery = 10 where progression > 3.07 and progression < 3.08;
insert into evaluations (description) values ('The Izzy');
alter table users add alltimeizzy integer default 0;
alter table users add room_id  integer default 0;
