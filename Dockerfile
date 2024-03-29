# Dockerfile
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libicu-dev \
        libzip-dev \
        unzip \
        zip \
        git \
        curl
        
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - &&\
        apt-get install -y nodejs
        
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql intl zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy application code
COPY . /app

# Install application dependencies
RUN composer install --no-interaction --no-progress --prefer-dist

# Clear Laravel Cache
RUN php artisan cache:clear

# Clear Laravel Config Cache
RUN php artisan config:clear

# Generate Laravel Mix
RUN npm install && npm run build

# Expose port 80
EXPOSE 80
