update item_types SET active_code = 2 WHERE core_standards_id = '5.nbt.a.3';
update item_types SET type_mastery = 4 WHERE core_standards_id = '3.oa.c.7';
update item_types set speed = 5 where core_standards_id = '3.oa.c.7';
update users set core_standards_id = '5.oa.a.1';
delete FROM item_attempts where item_types_id = '4.nf.a.2_1';
delete from item_types where progression  > 8;
