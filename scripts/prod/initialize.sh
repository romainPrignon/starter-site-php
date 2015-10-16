#! /bin/sh

composer install -vv --prefer-dist --no-dev
npm install
npm run bower install -- --allow-root -p
npm run task build
