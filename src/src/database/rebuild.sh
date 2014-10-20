if [ "$1" = "skip" ];
then
echo skipping build and insert
else
echo running build and insert
sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
fi

if [ -e all.php ]; 
then
rm all.php
else
touch all.php
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

echo core
cat src/core/math/*.php >> all.php
cat src/math/*.php >> all.php
cat src/bounds/*.php >> all.php
cat src/fsm/*.php >> all.php
cat src/application/*.php >> all.php
cat src/application/states/*.php >> all.php
cat src/game/*.php >> all.php
cat src/game/states/*.php >> all.php
cat src/login/*.php >> all.php
cat src/signup/*.php >> all.php
cat src/shape/*.php >> all.php
cat src/polygon/*.php >> all.php
cat src/div/*.php >> all.php
cat src/item/*.php >> all.php
cat src/sheet/*.php >> all.php
cat src/sheet/states/*.php >> all.php
cat src/hud/*.php >> all.php
cat src/widgets/*.php >> all.php
cat src/wordproblems/*.php >> all.php
cat src/utility/*.php >> all.php






echo 
