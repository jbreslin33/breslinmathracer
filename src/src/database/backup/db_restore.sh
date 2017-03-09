sudo -u postgres psql -d jamesanthonybreslin -f src/database/backup/drop_db.sql
sudo -u postgres dropdb jamesanthonybreslin
cat src/database/backup/partial* > src/database/backup/restore
sudo -u postgres pg_restore -C -d postgres src/database/backup/restore
