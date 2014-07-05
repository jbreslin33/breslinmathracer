echo first lets backup db to src/database/jamesanthonybreslin_prebuild.sql
echo sudo -u postgres pg_dump jamesanthonybreslin > src/database/jamesanthonybreslin_prebuild.sql
echo now we can build it again
sudo -u postgres psql -d jamesanthonybreslin -f src/database/db_create_tables.sql
