./src/database/drop_db.sh
./src/database/rebuild.sh
echo ./src/database/db_restore.sh

echo create dev user
if [ -e src/database/dev_user.sql ];
then
rm src/database/dev_user.sql
else
touch src/database/dev_user.sql
fi

echo "insert into users (username, password, first_name, last_name, school_id, core_standards_id) VALUES ('j','j','dev','user',1,'5.oa.a.1');" >> src/database/dev_user.sql

sudo -u postgres psql -d jamesanthonybreslin -f src/database/dev_user.sql


