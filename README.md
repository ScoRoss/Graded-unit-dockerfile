
Graded-unit-dockerfile
This repository contains the Dockerfile and Docker Compose configuration files to set up a development environment for the Graded Unit project.

Installation
To install and run this project on your local machine, you will need to have Docker and Docker Compose installed.

clone git repo https://github.com/ScoRoss/Graded-unit-dockerfile.git
modify the docker-compose yml volumes, for your file system

i.e

volumes /var/www/site

docker-compose build
docker-compose up

log into phpadmin, load database 

go to localhost/

Usage
Once the containers are running, you can access the application by visiting http://localhost:8000 in your web browser. The default username and password for the application are admin and password, respectively.

To stop the containers, run docker-compose down.

Troubleshooting
If you encounter any issues with the installation or usage of this project, please refer to the official Docker and Docker Compose documentation or open an issue on this repository.
