if [ -e min.js ]; 
then
rm min.js
else
touch min.js
fi

if [ -e min.php ]; 
then
rm min.php
else
touch min.php
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

cat src/math/point2D.php >> min.js
cat src/math/fraction.php >> min.js
cat src/math/decimal.php >> min.js
cat src/math/utility.php >> min.js

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
cat src/polygon/circle.php >> min.js
cat src/polygon/triangle.php >> min.js
cat src/polygon/pentagon.php >> min.js
cat src/polygon/hexagon.php >> min.js
cat src/polygon/cube.php >> min.js
cat src/polygon/arc.php >> min.js
cat src/polygon/angle_arc.php >> min.js
cat src/polygon/angle_degree.php >> min.js
cat src/polygon/raphael_text.php >> min.js
cat src/polygon/rectangle.php >> min.js
cat src/polygon/parallelogram.php >> min.js
cat src/polygon/rhombus.php >> min.js
cat src/polygon/line_one.php >> min.js
cat src/polygon/ray.php >> min.js
cat src/polygon/angle.php >> min.js
cat src/polygon/line_chart.php >> min.js
cat src/polygon/table.php >> min.js
cat src/polygon/ruler_centimeter.php >> min.js
cat src/polygon/ruler_inch.php >> min.js
cat src/polygon/ruler_quarterinch.php >> min.js
cat src/polygon/volume_liter.php >> min.js

cat src/shape/shape_ai.php >> min.js
cat src/shape/shape_victory.php >> min.js

cat src/div/div.php >> min.js

cat src/item/item.php >> min.js
cat src/item/text_item.php >> min.js
cat src/item/numberpad_item.php >> min.js
cat src/item/text_item_fraction.php >> min.js
cat src/item/text_item_mixed_number.php >> min.js
cat src/item/text_item2.php >> min.js
cat src/item/text_item3.php >> min.js
cat src/item/text_item4.php >> min.js
cat src/item/three_button_item.php >> min.js
cat src/item/item_button.php >> min.js
cat src/item/continue_correct_button.php >> min.js
cat src/item/continue_incorrect_button.php >> min.js
cat src/item/submit_practice_item_button.php >> min.js
cat src/item/submit_core_item_button.php >> min.js
cat src/item/leave_practice_button.php >> min.js
cat src/item/submit_times_tables_info_button.php >> min.js
cat src/item/states/states.php >> min.js

cat src/sheet/sheet.php >> min.js
cat src/sheet/states/states.php >> min.js

cat src/hud/hud.php >> min.js

cat src/widgets/timer.php >> min.js
cat src/widgets/clocktimer.php >> min.js
cat src/widgets/clock.php >> min.js
cat src/item/clock_item.php >> min.js
cat src/widgets/circles.php >> min.js
cat src/wordproblems/wordproblems.php >> min.js
cat src/core/math/core_game.php >> min.js
cat src/core/math/picker.php >> min.js
cat src/core/math/picker_brian.php >> min.js
cat src/core/math/picker_jim.php >> min.js
cat src/core/math/items.php >> min.js
cat src/core/math/items_brian.php >> min.js
cat src/core/math/items_jim.php >> min.js

cat src/utility/name_machine.php >> min.js
cat src/utility/analog_clock.php >> min.js
cat src/utility/time.php >> min.js

cat src/core/math/*.php >> min.js

gcc jsmin.c -o jsmin
./jsmin <min.js >min.php ""
echo run db patches 
sudo -u postgres psql -d jamesanthonybreslin -f src/database/patches.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/patches_brian.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/patches_jim.sql
