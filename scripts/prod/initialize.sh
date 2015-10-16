#! /bin/sh

composer install -vv --prefer-dist --no-dev --optimize-autoloader
npm install
npm run bower install -- --allow-root -p
npm run task build
