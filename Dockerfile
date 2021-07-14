FROM composer:2
RUN composer global require "laravel/lumen-installer"
ENV PATH $PATH:/tmp/vendor/bin