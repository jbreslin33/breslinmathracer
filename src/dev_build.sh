./src/database/drop_db.sh
./src/database/build.sh
./src/database/insert.sh
sudo -u postgres psql -d jamesanthonybreslin -f src/database/dev_user.sql
