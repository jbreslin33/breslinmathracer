sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
> src/database/insert_types.sql
grep -rhI 'insert into item_types' ./ >> src/database/insert_types.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert_types.sql

