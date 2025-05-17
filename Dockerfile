FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libonig-dev \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    ca-certificates \
    vim \
    tmux \
    unzip \
    git \
    cron \
    supervisor \
    curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install gd \
    && pecl install redis \
    && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Copy konfigurasi Apache
COPY Docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www

# Copy project ke container dan set hak milik
COPY --chown=www-data:www-data . /var/www

# Buat direktori log supervisor
RUN mkdir -p /var/log/supervisor && chown -R www-data:www-data /var/log/supervisor

# Install dependency Laravel
USER www-data
RUN composer install --no-interaction --prefer-dist --optimize-autoloader || true

# Kembali ke root user
USER root

# Copy konfigurasi Supervisor
COPY Docker/supervisor/supervisord.conf /etc/supervisord.conf

# Expose port 80
EXPOSE 80

# Install Node.js (untuk Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Install npm dependencies dan build
WORKDIR /var/www
COPY package*.json ./
RUN npm install && npm run build


# Jalankan Supervisor saat container start
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
