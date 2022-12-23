FROM php:8.1-fpm
COPY docker-php-entrypoint /usr/local/bin/
WORKDIR /var/www/html/
RUN apt-get -y update && apt-get -y upgrade \
&& apt-get install -y build-essential libpng-dev libjpeg62-turbo-dev libfreetype6-dev locales zip jpegoptim \
optipng pngquant gifsicle vim libzip-dev unzip git libonig-dev curl cron gzip libbz2-dev libicu-dev \
libwebp-dev libmcrypt-dev libsodium-dev libssh2-1-dev libxslt1-dev lsof default-mysql-client procps \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
&& docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
&& docker-php-ext-install bcmath bz2 calendar exif gd gettext intl mbstring mysqli opcache pcntl \
pdo_mysql soap sockets sodium sysvmsg sysvsem sysvshm xsl zip \
&& chmod +x /usr/local/bin/docker-php-entrypoint
COPY app .
COPY .config /root/.config
COPY env.php app/etc/
COPY php.ini /usr/local/etc/php/conf.d/
EXPOSE 9000
CMD ["php-fpm"]