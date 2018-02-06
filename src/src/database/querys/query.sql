select item_types.id, item_types.description from item_types where active_code = 1 AND progression > 1.02 AND progression < 1.04 order by progression asc;
