# starter-symfony-front [![Build Status](https://travis-ci.org/romainPrignon/starter-symfony-front.svg?branch=master)](https://travis-ci.org/romainPrignon/starter-symfony-front)

starter for symfony frontend app


## Installation

```sh
git clone https://github.com/romainprignon/starter-symfony-front.git
cd starter-symfony-front
rm -rf .git
git init
git remote add origin <repo_url>
composer run-script initialize
```
time for coffee... :)


## Usage

```sh
composer run-script start
```


## Docker

You should use docker instead of local development

### build dev
```sh
docker-compose -f docker-compose-dev.yml build site-dev-build
```

### build prod
```sh
docker-compose -f docker-compose-prod.yml build site-prod-build
```

### run dev
```sh
docker-compose -f docker-compose-dev.yml up site-dev-run
```

### run prod
```sh
docker-compose -f docker-compose-prod.yml up site-prod-run
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
