if [ "$1" = "skip" ];
then
echo skipping build and insert
else
echo running build and insert
sudo -u postgres psql -d jamesanthonybreslin -f src/database/build.sql
sudo -u postgres psql -d jamesanthonybreslin -f src/database/insert.sql
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

echo minimize javascript to min.php file

cat src/math/point2D.php >> min.php
cat src/math/fraction.php >> min.php

cat src/bounds/bounds.php >> min.php

cat src/fsm/state.php >> min.php
cat src/fsm/state_machine.php >> min.php

cat src/application/application.php >> min.php
cat src/application/core_application.php >> min.php
cat src/application/states/application_states.php >> min.php
cat src/application/states/core_application_states.php >> min.php

cat src/game/game.php >> min.php
cat src/login/login.php >> min.php
cat src/signup/signup.php >> min.php
cat src/core/math/game_sheet.php >> min.php
cat src/game/states/states.php >> min.php

cat src/animation/animation.php >> min.php
cat src/animation/animation_advanced.php >> min.php

cat src/polygon/polygon.php >> min.php

cat src/polygon/raphael_polygon.php >> min.php

cat src/shape/shape.php >> min.php
cat src/polygon/circle.php >> min.php
cat src/polygon/triangle.php >> min.php
cat src/polygon/pentagon.php >> min.php
cat src/polygon/hexagon.php >> min.php
cat src/polygon/cube.php >> min.php
cat src/polygon/arc.php >> min.php
cat src/polygon/rectangle.php >> min.php
cat src/polygon/parallelogram.php >> min.php
cat src/polygon/rhombus.php >> min.php
cat src/polygon/line_one.php >> min.php
cat src/polygon/line_chart.php >> min.php
cat src/polygon/table.php >> min.php
cat src/polygon/ruler_centimeter.php >> min.php
cat src/polygon/ruler_inch.php >> min.php
cat src/polygon/ruler_quarterinch.php >> min.php
cat src/polygon/volume_liter.php >> min.php

cat src/shape/shape_ai.php >> min.php
cat src/shape/shape_victory.php >> min.php

cat src/div/div.php >> min.php

cat src/item/item.php >> min.php
cat src/item/text_item.php >> min.php
cat src/item/text_item_fraction.php >> min.php
cat src/item/text_item2.php >> min.php
cat src/item/text_item4.php >> min.php
cat src/item/three_button_item.php >> min.php
cat src/item/item_button.php >> min.php
cat src/item/continue_correct_button.php >> min.php
cat src/item/continue_incorrect_button.php >> min.php
cat src/item/toggle_standard_info_button.php >> min.php
cat src/item/toggle_item_info_button.php >> min.php
cat src/item/toggle_practice_info_button.php >> min.php
cat src/item/submit_practice_item_button.php >> min.php
cat src/item/toggle_core_info_button.php >> min.php
cat src/item/submit_core_item_button.php >> min.php
cat src/item/leave_practice_button.php >> min.php
cat src/item/states/states.php >> min.php

cat src/sheet/sheet.php >> min.php
cat src/sheet/states/states.php >> min.php

cat src/hud/hud.php >> min.php

cat src/widgets/timer.php >> min.php
cat src/widgets/clocktimer.php >> min.php
cat src/widgets/clock.php >> min.php
cat src/item/clock_item.php >> min.php
cat src/widgets/circles.php >> min.php
cat src/wordproblems/wordproblems.php >> min.php
cat src/core/math/core_game.php >> min.php
cat src/core/math/picker.php >> min.php
cat src/core/math/picker_brian.php >> min.php
cat src/core/math/picker_jim.php >> min.php
cat src/core/math/items.php >> min.php
cat src/core/math/items_brian.php >> min.php
cat src/core/math/items_jim.php >> min.php

cat src/utility/name_machine.php >> min.php

