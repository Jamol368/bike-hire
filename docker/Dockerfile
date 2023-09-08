FROM php:8.2-fpm

# Copy composer.lock and composer.json
COPY composer.* /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --enable-gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd --force -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
COPY --chown=www:www . /var/www/html

#RUN chown -R www-data:www-data .

# Change current user to www
#USER www

# Expose port 9000 and start php-fpm server
#EXPOSE 9000
#CMD ["php-fpm"]

#COPY ./entrypoint /
RUN chmod +x /var/www/html/docker/entrypoint

#ENV PORT=8000

ENTRYPOINT [ "entrypoint" ]

# Start PHP-FPM
CMD ["/bin/bash"]
