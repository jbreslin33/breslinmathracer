sudo -u postgres pg_dump -Fc jamesanthonybreslin > full
split -b 40m full partial
git add partial*
