FROM php:8.3-apache

# อัปเดตแพ็กเกจและติดตั้ง dependencies ที่จำเป็นสำหรับ Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    sqlite3

# ติดตั้ง Node.js (สำหรับรัน Vite / npm run build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# ล้างแคชแพ็กเกจ
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# ติดตั้ง PHP Extensions สำหรับ Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip pdo_sqlite

# เปิดใช้งาน Apache mod_rewrite
RUN a2enmod rewrite

# เปลี่ยน DocumentRoot ของ Apache ไปที่โฟลเดอร์ /public ของ Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ตั้งค่า Working Directory
WORKDIR /var/www/html

# คัดลอกไฟล์ทั้งหมดในโปรเจกต์ลงใน Container
COPY . /var/www/html/

# ติดตั้ง Composer Dependencies
RUN composer install --no-dev --optimize-autoloader

# ติดตั้ง Node Dependencies และรัน Build (Vite)
RUN npm install
RUN npm run build

# ให้สิทธิ์ (Permissions) กับโฟลเดอร์ storage และ bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# รัน Migration อัตโนมัติ (ใส่ไว้ในสคริปต์ตอนรัน Container)
RUN echo '#!/bin/bash\n\
if [ ! -f .env ]; then cp .env.example .env && php artisan key:generate; fi\n\
touch database/database.sqlite\n\
php artisan migrate --force\n\
apache2-foreground' > /usr/local/bin/start.sh && chmod +x /usr/local/bin/start.sh

CMD ["/usr/local/bin/start.sh"]
