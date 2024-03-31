FROM php:8.3.0-alpine3.19

# set our environment variable and fix iconv
ENV PHPIZE_DEPS='autoconf dpkg-dev dpkg file g++ gcc libc-dev make pkgconf re2c'
ENV PHP_CFLAGS='-fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64'
ENV PHP_CPPFLAGS=' -fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64'
ENV PHP_LDFLAGS='-pthread -Wl,-O1 -pie'
ENV MUSL_LOCPATH="/usr/share/i18n/locales/musl"

# https://issueexplorer.com/issue/docker-library/php/1121
# libiconv 1.16 fubr?
RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/v3.13/community/ gnu-libiconv=1.15-r3
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php
RUN php -r 'error_reporting(E_ALL); echo iconv("UTF-8", "ASCII//TRANSLIT", "a väry ßpecif String");'

# install basics
RUN  apk --no-cache update \
     && apk --no-cache upgrade  \
     && apk add --no-cache --allow-untrusted --virtual .deps \
      bash libintl freetds unixodbc \
      nano tzdata bind-tools \
      libzip libxml2 icu imap-dev git inotify-tools mariadb-client libgomp npm openssl-dev \
    && set -xe \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS  \
               unixodbc-dev freetds-dev cmake make musl-dev gcc gettext-dev \
               libzip-dev libxml2-dev curl-dev libedit-dev \
               libtool icu-dev patch \
               zlib-dev \
    && export CFLAGS="$PHP_CFLAGS" CPPFLAGS="$PHP_CPPFLAGS" LDFLAGS="$PHP_LDFLAGS" \
    && export MAKEFLAGS="-j $((`nproc`+1))" \
    && git clone https://gitlab.com/rilian-la-te/musl-locales \
    && cd musl-locales && cmake -DLOCALE_PROFILE=OFF -DCMAKE_INSTALL_PREFIX:PATH=/usr . && make && make install \
    && cd .. && rm -r musl-locales \
    && docker-php-source extract \
    && pecl install -o -f apcu redis \
    && docker-php-ext-enable apcu \
    && docker-php-ext-enable redis \
    && docker-php-ext-configure imap --with-imap-ssl \
    && docker-php-ext-install -j $((`nproc`+1)) imap \
    && docker-php-ext-install -j $((`nproc`+1)) pdo_mysql \
    && docker-php-ext-install -j $((`nproc`+1)) bcmath \
    && docker-php-ext-install -j $((`nproc`+1)) intl \
    && docker-php-ext-install -j $((`nproc`+1)) pcntl \
    && docker-php-ext-install -j $((`nproc`+1)) zip \
    &&  git clone https://github.com/openswoole/ext-openswoole.git \
    && cd ext-openswoole \
    && git checkout v22.1.0 \
    && phpize \
    && ./configure --enable-openssl --enable-http2 \
    #patch source (4th parameter NULL => 0)
    &&  sed -i '1050 c\php_url_encode_hash_ex(HASH_OF(zdata), formstr, NULL, 0, NULL, NULL, NULL, (int) PHP_QUERY_RFC1738);'  ext-src/php_swoole_private.h \
    && make -j $((`nproc`+1)) \
    && make install \
    && mkdir -p /usr/local/lib/php/extensions/no-debug-non-zts-20230831/modules/ \
    && cp /ext-openswoole/modules/openswoole.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/modules/openswoole.so \
    && echo 'extension=modules/openswoole' > /usr/local/etc/php/conf.d/20-openswoole.ini  \
    && cd /  \
    && rm -r ext-openswoole \
    && npm install pm2 -g \
    && npm update -g \
    #clear build deps
    && apk del .build-deps  \
    && docker-php-source delete  \
    && rm /usr/src/php.tar.xz

# set timezone
RUN cp /usr/share/zoneinfo/Europe/Berlin /etc/localtime \
  && echo "Europe/Berlin" > /etc/timezone

#install composer
RUN curl -s https://getcomposer.org/download/2.5.4/composer.phar -o /usr/bin/composer && chmod 755 /usr/bin/composer

WORKDIR /var/www/app

#configs

RUN rm /etc/crontabs/root

ARG UID=1000
ARG GID=1000
RUN addgroup -S school-reports -g $GID && adduser -S school-reports -G school-reports -u $UID && chown school-reports:school-reports /var/www/app

RUN chown -R school-reports:school-reports /var/log

COPY  --chmod=444 ../docker_config/php.ini /usr/local/etc/php/php.ini

USER school-reports

COPY --chown=school-reports docker_config/entry.sh /entry.sh
ENTRYPOINT ["/entry.sh"]
HEALTHCHECK --interval=10s --timeout=2s --start-period=10s --retries=3 CMD curl --silent --fail localhost
EXPOSE 80
