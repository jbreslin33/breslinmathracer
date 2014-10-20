if [ "$1" = "skip" ];
then
echo skipping build and insert
else
echo running build and insert
sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
fi

if [ -e min.js ]; 
then
rm min.js
else
touch min.js
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

echo minimize javascript to min.js file

cat src/math/point2D.php >> min.js
cat src/math/fraction.php >> min.js

cat src/bounds/bounds.php >> min.js

cat src/fsm/state.php >> min.js
cat src/fsm/state_machine.php >> min.js

cat src/application/application.php >> min.js
cat src/application/core_application.php >> min.js
cat src/application/states/application_states.php >> min.js
cat src/application/states/core_application_states.php >> min.js

cat src/game/game.php >> min.js
cat src/login/login.php >> min.js
cat src/signup/signup.php >> min.js
cat src/core/math/game_sheet.php >> min.js
cat src/game/states/states.php >> min.js

cat src/animation/animation.php >> min.js
cat src/animation/animation_advanced.php >> min.js

cat src/polygon/polygon.php >> min.js

cat src/polygon/raphael_polygon.php >> min.js

cat src/shape/shape.php >> min.js












