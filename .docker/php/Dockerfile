# Stage 1: Base PHP environment
FROM php:8.2-fpm-alpine AS base

# Set working directory
WORKDIR /var/www/html

# 1. Install semua dependensi: Nginx, Supervisor, Node.js, dan ekstensi PHP
RUN apk add --no-cache \
    nginx \
    supervisor \
    nodejs \
    npm \
    build-base \
    linux-headers \
    freetype-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    jpeg-dev \
    libzip-dev \
    zip \
    unzip \
    oniguruma-dev \
    libxml2-dev \
    curl \
    git

# Install ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip xml

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 2. Hapus konfigurasi default dan salin konfigurasi kustom kita
# Pastikan path ini sesuai dengan struktur proyek Anda
COPY .docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY .docker/php/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# 3. Salin kode aplikasi dan install dependensi
COPY . .

# Install dependensi Composer
RUN composer install --no-interaction --no-plugins --no-scripts --prefer-dist

# Install dependensi NPM dan build aset
RUN npm install
RUN npm run build

# 4. Atur izin folder
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 5. Expose port 80 (untuk Nginx)
EXPOSE 80

# 6. Jalankan supervisord sebagai perintah utama
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
