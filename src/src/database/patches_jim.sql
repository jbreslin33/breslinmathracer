ALTER TABLE prerequisites ADD CONSTRAINT nodups_prerequisites UNIQUE (item_type_id,prerequisite_id);
