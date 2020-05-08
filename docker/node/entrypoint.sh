#!/bin/sh
cp -R /usr/src/app/app_backup/node_modules /usr/src/app/
cp -R /usr/src/app/app_backup/public /usr/src/app/
exec "$@"