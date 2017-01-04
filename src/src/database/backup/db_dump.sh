#OLD sudo -u postgres pg_dump -Fc jamesanthonybreslin > src/database/jamesanthonybreslin.dump
sudo -u postgres pg_dump jamesanthonybreslin | split -b 40m - src/database/backup/db.dump
#pg_dump dbname | split -b 1m - filename
