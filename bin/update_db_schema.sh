#!/bin/sh

# YOU DONT NEED TO RUN THIS; USE MIGRATIONS INSTEAD
cd ..
php vendor/bin/doctrine orm:schema-tool:update --force
