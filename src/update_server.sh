hg pull
hg update
./src/database/db_dump.sh
./src/database/rebuild.sh skip
hg commit -u jbreslin33
./src/database/db_dump.sh
hg commit -u jbreslin33
hg push
