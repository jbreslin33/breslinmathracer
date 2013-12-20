echo first lets backup db to src/database/jamesanthonybreslin_preinsert.sql
sudo -u postgres pg_dump jamesanthonybreslin > src/database/jamesanthonybreslin_preinsert.sql
echo now do inserts
sudo -u postgres psql -d jamesanthonybreslin -f src/database/db_insert.sql
