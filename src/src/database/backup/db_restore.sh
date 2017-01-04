sudo -u postgres psql -d jamesanthonybreslin -f drop_db.sql
sudo -u postgres dropdb jamesanthonybreslin
sudo -u postgres psql jamesanthonybreslin < db.dump


#sudo -u postgres pg_restore -C -d postgres src/database/jamesanthonybreslin.dump
#createdb jamesanthonybreslin cat src/database/backup/jamesanthonybreslin* | psql jamesanthonybreslin
