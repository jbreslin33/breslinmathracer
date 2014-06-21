sudo -u postgres dropdb jamesanthonybreslin
sudo -u postgres pg_restore -C -d postgres src/database/jamesanthonybreslin.dump
