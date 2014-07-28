sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert_jim.sql
