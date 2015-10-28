# starter-site-php

[![Build Status](https://travis-ci.org/romainPrignon/starter-site-php.svg?branch=master)](https://travis-ci.org/romainPrignon/starter-site-php)  [![Code Climate](https://codeclimate.com/github/romainPrignon/starter-site-php/badges/gpa.svg)](https://codeclimate.com/github/romainPrignon/starter-site-php)  [![Test Coverage](https://codeclimate.com/github/romainPrignon/starter-site-php/badges/coverage.svg)](https://codeclimate.com/github/romainPrignon/starter-site-php/coverage)  [![SensioLabsInsight](https://insight.sensiolabs.com/projects/3d1b1d81-92ca-4043-ad74-f6cc5e2ee6c7/mini.png)](https://insight.sensiolabs.com/projects/3d1b1d81-92ca-4043-ad74-f6cc5e2ee6c7)

starter for symfony frontend app


# TODO

 * Actuellement, chaque partner fait son propre build docker. A terme => par par le hub et lancer des hook avec le tag associé


## Installation

```sh
git clone https://github.com/romainprignon/starter-site-php.git
cd starter-site-php
rm -rf .git
git init
git remote add origin <repo_url>
composer run-script initialize
```
time for coffee... :)


## Usage

```sh
set env=dev
composer run-script start
```


## environment variable
env => dev || test || prod


## Docker

You should use docker instead of local development

### dev
```sh
$ docker-compose -f docker-compose-dev.yml up (-d)
```

### test
```sh
$ docker-compose -f docker-compose-test.yml up -d
```

### prod
```sh
docker-compose -f docker-compose-prod.yml up -d
```


## Test

```sh
composer run-script test
```


## Debug


## Documentation

Take a look at the [documentation table of contents](doc/TOC.md).


## License

The code is available under the [MIT license](LICENSE.md).


## frontend dependency

We use gulp for frontend dependency
```sh
npm run task build
```
