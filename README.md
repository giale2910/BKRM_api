***BKRM API - Bach Khoa Retail Management System API***
_Updated at : 22 Oct 2022 by Hai Ly._

A. INTRODUCTION
This is backend implementation of our project for graduation thesis: BUILD A RETAIL MANAGEMENT SYSTEM SUPPORTING AUTOMATION.
30 June 2022 - Ho Chi Minh University of Technology
Supervisor: 
- Assoc. Professor Tran Minh Quang
Members: 
- Ly Quoc Hai (Backend)
- Dang Gia Le (Frontend)
- Mai Truong Khang (Frontend)

B. HOW TO RUN THIS CODE
1. Requirements
Docker installed: https://docs.docker.com/desktop

2. Steps to run this code for the first time
- Create a copy of ```.env.sample``` and named it ```.env```
- Build the app image with the following command
```docker-compose build app```
- Run the environment in background mode
```docker-compose up -d```
- (Optional) Show information about the state of your active service
```docker-compose ps```
- Run composer install to install the application dependencies.
```docker-compose exec app rm -rf vendor composer.lock```
```docker-compose exec app composer install```
- Generate a unique application key with the artisan Laravel command-line tool.
```docker-compose exec app php artisan key:generate```
- Link storage to update images
```docker-compose exec app php artisan storage:link```
Finally you now can access BKRM backend through:
- http://server_domain_or_IP:8000/api
- http://localhost:8000/api

3. Code changes are automatically sync with the deploy code in the container
3. Restart when updating docker-compose.yml or Dockerfile
```docker-compose up -d```

4. Database persistence folder:
- Database on a run session is store in folder bkrm_persistent_data.
- If you delete this folder, the database will be refreshed back to the init_db.sql in docker_composer/mariadb

OTHER USEFUL DOCKER COMMANDS:
- Command to check the logs generated by docker services. ie: nginx
```docker-compose logs nginx```
- Pause your Docker Compose environment while keeping the state of all its services, run:
```docker-compose pause```
- Resume your services with:
```docker-compose unpause```
- Shut down your Docker Compose environment and remove all of its containers, networks, and volumes, run:
```docker-compose down```
- Execute commands in a docker container:
```docker-compose exec {service name} {command}```
Ex: ```docker-compose exec app composer install```: Run ```composer install``` inside ```app``` container

For an overview of all Docker Compose commands, please check the Docker Compose command-line reference:
https://docs.docker.com/compose/reference/

C. CODE STRUCTURE:
An general explaination of the meaning of main folder and files. For detail, please read Laravel Docs
