#
# PHP
#
FROM phpdockerio/php:8.2-fpm
WORKDIR "/application"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php8.2-decimal \
        php8.2-yaml \
        php8.2-mysql \
        php8.2-gd \
        php8.2-intl \
        php8.2-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#
# Supervisor
#
#RUN apt-get update && apt-get install -y openssh-server apache2 supervisor
#RUN mkdir -p /var/lock/apache2 /var/run/apache2 /var/run/sshd /var/log/supervisor
#
#COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf