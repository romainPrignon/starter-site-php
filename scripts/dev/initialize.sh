#! /bin/sh

composer install -vv --prefer-source
npm install
npm run bower install -- --allow-root
npm run task build
