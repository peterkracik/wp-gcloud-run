FROM php:8.0-apache

RUN apt-get update && apt-get upgrade -yy \
    && apt-get install --no-install-recommends apt-utils libjpeg-dev libpng-dev libwebp-dev \
    libzip-dev zlib1g-dev libfreetype6-dev supervisor zip \
    unzip software-properties-common -yy \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install zip \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-install exif \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j "$(nproc)" gd \
    && a2enmod rewrite
    
RUN mkdir -p /etc/X11/fs/.wp-cli/cache/
RUN chown -R www-data:www-data /etc/X11/fs/.wp-cli/cache/
RUN find /etc/X11/fs/.wp-cli/ -type d -exec chmod 0755 {} \;
RUN find /etc/X11/fs/.wp-cli/ -type f -exec chmod 644 {} \;

RUN mkdir -p /var/www/html/wp-content/plugins
RUN mkdir -p /var/www/html/wp-content/uploads
RUN chown -R www-data:www-data /var/www
RUN find /var/www/ -type d -exec chmod 0755 {} \;
RUN find /var/www/ -type f -exec chmod 644 {} \;



WORKDIR /var/www/html
COPY ./app /var/www/html/ 
