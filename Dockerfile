# Dockerfile
FROM php:8.0-apache

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libicu-dev \
        libzip-dev \
        unzip \
        zip \
        git \
        curl \
        nodejs \
        npm

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

# Generate Laravel Mix
RUN npm install && npm run dev

# Expose port 80
EXPOSE 80
