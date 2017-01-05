sudo -u postgres pg_dump -Fc jamesanthonybreslin > src/database/backup/jamesanthonybreslin.dump
#OLD sudo -u postgres pg_dump -Fc jamesanthonybreslin > src/database/jamesanthonybreslin.dump
#pg_dump dbname | split -b 1m - filename

#remove files
#sudo rm *.dump*
#sudo rm db.sql

#make backup and split it into files
#sudo -u postgres pg_dump jamesanthonybreslin > full.sql 

#split -b 40m full.sql mini 


#cat files into 1 big one db.sql
#cat miniaa  miniab  miniac  miniad  miniae  miniaf  miniag  miniah  miniai  miniaj  miniak > db.sql

#split big work file db.sql into small permanent files to put to git
#split -b 40m db.sql big.data

