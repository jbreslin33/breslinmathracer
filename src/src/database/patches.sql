update item_types SET active_code = 2 WHERE core_standards_id = '5.nbt.a.3';
update item_types SET type_mastery = 4 WHERE core_standards_id = '3.oa.c.7';
alter table item_types add speed integer NOT NULL DEFAULT 0;
