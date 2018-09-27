# enrollment-orm

# SET UP DATABASE
cd bin
./generate_entities.sh
./generate_migrations.sh
./run_migrations.sh

# NOT USED
update_db_schema.sh


# EXTRA STUFF TO BE DEALT WITH; IGNORE FROM NOW

php vendor/bin/doctrine orm:generate-entities src
php vendor/bin/doctrine orm:schema-tool:update --force

