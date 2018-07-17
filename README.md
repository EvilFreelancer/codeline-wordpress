# Codeline Wordpress

Project fully ready to work inside the docker container.

## How to begin to use

### 1. Preparation

You need clone project to filesystem

    git clone https://github.com/EvilFreelancer/codeline-wordpress.git
    cd codeline-wordpress

Now you need prepare docker compose config file:

    cp docker-compose.yml.dist docker-compose.yml

Inside `docker-compose.yml` you need change the values to the ones you
need, for example you do not want to tun this project on `80` port, to
fix that you need just change this line `80:80` to what you need (`7777:80`).

### 2. Compile and run composition of containers

You need build the container with this project and donload MySQL
database, for this just type following commands:

    docker-compose build
    docker-compose up -d

### 3. Import database dump

Now you need import database dump into the MySQL inside container:

    mysql -uroot -proot_pass -h 127.0.0.1 wordpress < wordpress/wordpress.dump

## The End

Now you just need open following page http://localhost in your browser
and you will get the result of my work.

Thanks for reading!
