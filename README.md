# PHP Triangle problem getting start and unit test

Getting up and running
------------------------

## Requirements

- [Docker](https://www.docker.com/)


Deployment
------------

Run php:5.6-apache docker image to creat docker container and start the server
- `docker run -p 80:80 -d -v [project_location]:/var/www/html -it --name my-webserver php:5.6-apache`
- (For the next time in case docker container already created `docker start my-webserver`)]


Usage
-------

Access via web browser
- [http://localhost:80](http://localhost:80)

To enter the shell of web-server
- `docker exec -it my-webserver bash`


Reference
-----------
- https://github.com/docker-library/docs/tree/master/php
- https://github.com/sitdh/phpunit-demo
