# Docker cloudera/quickstart with mapReduce testing

Getting up and running
------------------------

## Requirements

- [Docker](https://www.docker.com/)


Deployment
------------

For the 1st time Run these commands in where Dockerfile located:
- `docker run -p 80:80 -d -v [project_location]:/var/www/html -it --name my-webserver php:5.6-apache`

[ For another time in case docker container already created `docker start my-webserver` ]

For enter terminal
- `docker exec -it my-webserver bash`


Reference
-----------
- https://github.com/docker-library/docs/tree/master/php
- https://github.com/sitdh/phpunit-demo
