cat db.dumpaa db.dumpab db.dumpac db.dumpad db.dumpae db.dumpaf db.dumpag db.dumpah db.dumpai db.dumpaj db.dumpak > cat.dump
sudo -u postgres psql -d jamesanthonybreslin -f drop_db.sql
sudo -u postgres dropdb jamesanthonybreslin
sudo -u postgres psql jamesanthonybreslin < cat.dump


#sudo -u postgres pg_restore -C -d postgres src/database/jamesanthonybreslin.dump
#createdb jamesanthonybreslin cat src/database/backup/jamesanthonybreslin* | psql jamesanthonybreslin
