# Template for your website

This repository contains all files for the implementation phase of your project. 

You are free to re-structure this repository to your liking, but make sure that you have a system and it's not chaotic!

If you are unsure, just use the template as given. Your repository is structured the following way:

`./www`: here you can store the html or php files

`./www/images`: this is the folder in which you store all your images

`./www/css`: this is the folder for your css files

You can create more folders if you need them! Separate images from music files, find a good place to store documentation that you may need, and so on!

## Start the application

1. Install Docker Desktop
	- [Windows](https://docs.docker.com/desktop/install/windows-install/)
	- [MacOS - x86 chip](https://docs.docker.com/desktop/install/mac-install/)
	- [MacOS - Apple chip](https://docs.docker.com/desktop/mac/apple-silicon/)
2. Start Docker desktop    
3. Open a terminal (CMD) at the location of this README file
    - Open a terminal and use `cd` to get to the correct location
    - Or right click in finder/explorer and `Open in terminal`
4. To start the application type the following command:
    - `docker-compose up -d`
    - It may take a while on the first start :)
5. Open your favorite browser and go to [http://127.0.0.1/](http://127.0.0.1/) or [http://localhost/](http://localhost/) and it should show a page indicating that everything is working.
6. To stop the docker containters run the following command:
    - `docker-compose stop`
7. Now it is also possible to start/stop the container from Docker Desktop

Also you can use Database GUI phpMyAdmin via [http://localhost:8000/](http://localhost:8000/)

If your system has IIS running you can stop this using: `iisreset /stop` in an elevated command prompt (admin).
