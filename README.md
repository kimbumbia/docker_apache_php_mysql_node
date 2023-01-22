# Docker + Apache + PHP + Mysql + Node


This project defines a basic docker environment for those web developers that need to work
with the following stack:

- Apache
- PHP
- Mysql
- Node

### Docker images

- PHP: 7.4 Pulled from the image php:7.4-apache 
- Apache/2.4.38 (Debian) Pulled from the image php:7.4-apache
- MySql 8.0 Pulled from the image mysql:8.0
- NodeJs: Pulled from the latest image version of the official Image.  
- PHPMyAdmin: Pulled from the latest image version of the official Image.


### Demo application

In addition, it is created a small demo application in order to combine the facilities offered by those technologies.

#### Scenario:
There is a webpage named `index.html`. Every time `index.html` is loaded are going to be saved on DB the records 'php' 'js' 'java'. 

#### Structure

./web: Contains the test-app code.  
./docker: Contains those Docker files for theirs respective containers

#### Install 

**Note**: Docker should be installed. 

Run the containers:

    docker-compose up --build -d