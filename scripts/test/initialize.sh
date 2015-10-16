#! /bin/sh

composer install -vv --prefer-dist --optimize-autoloader
npm install
npm run bower install -- --allow-root -p
npm run task build
