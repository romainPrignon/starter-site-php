FROM romainprignon/php-cli-base:5.6.14

ENV env prod
ENV SYMFONY_ENV prod

WORKDIR /usr/src/app

EXPOSE 80

CMD composer run-script initialize && composer run-script start


# install dependencies
RUN curl -sL https://deb.nodesource.com/setup_4.x | bash -
# TODO: fix node version
RUN apt-get install -y --force-yes nodejs

COPY . /usr/src/app


################################################################

# build
# docker build -t romainprignon/starter-site-php .

# push
# docker push romainprignon/starter-site-php

# run dev
# docker run -it -p 8000:80 -e "env=dev" -e "SYMFONY_ENV=dev" -v $(pwd):/usr/src/app --name starter-site-php romainprignon/starter-site-php

# run test
# docker run -p 80:80 -e "env=test" -e "SYMFONY_ENV=test" romainprignon/starter-site-php

# run prod
# docker run -p 80:80 -e "env=prod" -e "SYMFONY_ENV=prod" --name starter-site-php romainprignon/starter-site-php
