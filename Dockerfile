FROM romainprignon/php-cli-base:5.6.14

WORKDIR /usr/src/app
EXPOSE 80

CMD composer run-script start

# install dependencies
RUN curl -sL https://deb.nodesource.com/setup_4.x | bash -
# TODO: fix node version
RUN apt-get install -y --force-yes nodejs

COPY . /usr/src/app

RUN composer run-script initialize

################################################################

# build
# docker build -t romainprignon/starter-symfony-front .

# push
# docker push romainprignon/starter-symfony-front

# run dev
# docker run -it -p 8000:80 -e "env=dev" -e "SYMFONY_ENV=dev" -v $(pwd):/usr/src/app --name starter-symfony-front romainprignon/starter-symfony-front

# run prod
# docker run -p 80:80 -e "env=prod" -e "SYMFONY_ENV=prod" --name starter-symfony-front romainprignon/starter-symfony-front
