sudo -u postgres psql -d jamesanthonybreslin -f src/database/backup/drop_db.sql
sudo -u postgres dropdb jamesanthonybreslin
sudo -u postgres pg_restore -C -d postgres src/database/backup/jamesanthonybreslin.dump
