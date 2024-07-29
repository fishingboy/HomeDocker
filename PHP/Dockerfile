# 從php建置鏡像檔
FROM php:fpm-alpine
#php:8.2-fpm-alpine

# 複製 php.ini 到容器中
#COPY docker/php.ini /usr/local/etc/php/

# 更新並安装依賴
RUN apk update; \
    apk add --no-cache \
    $PHPIZE_DEPS \
    curl-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    oniguruma-dev \
    openssl-dev \
    cronie \
    bash

# 安装GD擴展
RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/; \
    docker-php-ext-install gd

# 安装其他PHP擴展
RUN docker-php-ext-install curl fileinfo mbstring mysqli pdo pdo_mysql

# 安装Redis擴展
RUN pecl install redis; \
    docker-php-ext-enable redis

# 調整 listen port -> 8081
#RUN sed -i 's/listen = 9000/listen = 8081/' /usr/local/etc/php-fpm.d/zz-docker.conf

# 安裝 xdebug
RUN apk add --no-cache autoconf g++ make linux-headers
RUN pecl install xdebug && docker-php-ext-enable xdebug

# 清理
RUN apk del $PHPIZE_DEPS; \
    rm -rf /var/cache/apk/*

# 安裝 composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# 設定  alias
RUN echo "alias ll='ls -al'" >> /root/.bashrc
RUN echo "alias vim='vi'" >> /root/.bashrc

# 設定進入點
ENTRYPOINT crond && docker-php-entrypoint php-fpm