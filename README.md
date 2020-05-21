# docker_apache_php_mysql_node
Setting Up a development environment using Docker containers.

In a try about to configure a web development environment its is created the following Docker configurations.

Are used so far the followings Technologies: 
- PHP: 7.4 Pulled from the image php:7.4-apache 
- Apache/2.4.38 (Debian) Pulled from the image php:7.4-apache
- MySql 8.0 Pulled from the image mysql:8.0
- NodeJs: Pulled from the latest image version of the official Image.  
- PHPMyAdmin: Pulled from the latest image version of the official Image.


In addition is created an small Test-Application in order to combine the facilities that offers that technologies.
Test-App requirements: 
Each time the index.html page is loaded are going to be saved on DB the records 'php' 'js' 'java' 

Structure:
composer.json: requires the component "illuminate/support" to have access to those defined helpers functions. It's use 
by composer container.

package.json: Requires some components to be used by the test-app

./web: Contains the test-app code.  
./docker: Contains those Docker files for theirs respective containers

Requisites: 
 - install docker 

Steps to run the containers:
- docker-compose up --build -d