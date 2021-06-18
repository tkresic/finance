FROM composer:1.10 as vendor

COPY database database
COPY tests tests
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
		--ignore-platform-reqs \
		--no-interaction \
		--no-plugins \
		--no-scripts \
		--prefer-dist


FROM php:7.4-alpine as base

RUN apk add --no-cache --update --virtual build-dependencies \
		autoconf make gcc libc-dev g++ postgresql-dev && \
		pecl install swoole && \
		docker-php-ext-enable swoole && \
		docker-php-ext-install pdo_pgsql


FROM php:7.4-alpine

RUN apk add --no-cache --update \
		cmake postgresql-dev

# check every 5s to ensure this service returns HTTP 200
# HEALTHCHECK --interval=5s --timeout=3s --start-period=10s --retries=3 \
# 	CMD curl -fs http://localhost/healthz || exit 1

COPY --from=base /usr/local/etc/php/conf.d/docker-php-ext-pdo_pgsql.ini /usr/local/etc/php/conf.d/docker-php-ext-pdo_pgsql.ini
COPY --from=base /usr/local/lib/php/extensions/no-debug-non-zts-20190902/pdo_pgsql.so /usr/local/lib/php/extensions/no-debug-non-zts-20190902/pdo_pgsql.so
COPY --from=base /usr/local/etc/php/conf.d/docker-php-ext-swoole.ini /usr/local/etc/php/conf.d/docker-php-ext-swoole.ini
COPY --from=base /usr/local/lib/php/extensions/no-debug-non-zts-20190902/swoole.so /usr/local/lib/php/extensions/no-debug-non-zts-20190902/swoole.so
COPY --from=vendor /app/vendor /var/www/vendor
COPY . /var/www
WORKDIR /var/www

RUN chmod +x docker-entrypoint.sh
ENTRYPOINT ["./docker-entrypoint.sh"]
