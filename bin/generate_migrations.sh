#!/bin/sh
cd ..
php vendor/bin/doctrine migrations:diff  --configuration=config/migrations.yml
