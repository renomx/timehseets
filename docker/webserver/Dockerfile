FROM php:7.0-apache

RUN mkdir /var/www/html/public
COPY apache/php.ini /usr/local/etc/php/
COPY apache/timesheets.conf /etc/apache2/sites-available
RUN a2ensite timesheets.conf
RUN a2dissite 000-default.conf
RUN service apache2 restart
VOLUME "/var/www/html"

