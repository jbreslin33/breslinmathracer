if [ "$1" = "skip" ];
then
echo skipping build and insert
else
echo running build and insert
sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
fi

if [ -e src/database/insert_types.sql ]; 
then
rm src/database/insert_types.sql
else
touch src/database/insert_types.sql
fi
> src/database/insert_types.sql
grep -rhI --exclude="*\.orig" --exclude-dir=database 'insert into item_types' ./ >> src/database/insert_types.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert_types.sql

if [ -e src/database/prerequisites.sql ]; 
then
rm src/database/prerequisites.sql
else
touch src/database/prerequisites.sql
fi
> src/database/prerequisites.sql
grep -rhI --exclude="*\.orig" --exclude-dir=database 'insert into prerequisites' ./ >> src/database/prerequisites.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/prerequisites.sql



