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

echo "wake up!" >> src/database/dev_user.sql

