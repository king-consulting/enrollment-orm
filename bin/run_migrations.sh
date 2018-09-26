#!/bin/sh
cd ..
php vendor/bin/doctrine migrations:migrate  --configuration=config/migrations.yml
