# docker-volumes-permissions
Sample repo to play with Docker volumes

Running `docker-compose up` will run 2 containers:
**php** is for [php-fpm](https://hub.docker.com/_/php/) and **web** is for [nginx](https://hub.docker.com/_/nginx/)

`index.php` will produce a Warning because all files in `/src` have wrong owner:group and php has no permissions to write to this folders as it runs as www-data:www-data

I've tried to fix this by adding `RUN mkdir -p /src && chown -R www-data:www-data /src` to php Dockerfile but that didn't helped.

1. **Why the owner and the group of `/src` is 1000:staff?**
2. **How to fix this?**
