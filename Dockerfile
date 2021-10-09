
#specify base image
FROM php:7.4-cli

#copy filles and set working directory
COPY . /usr/src/7d
WORKDIR /usr/src/7d

#run index.php
CMD [ "php", "./index.php" ]