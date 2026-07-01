#!/bin/bash

# ออกจากสคริปต์ทันทีหากเกิดข้อผิดพลาด
set -e

echo "กำลังอัปเดตระบบและติดตั้งแพ็กเกจพื้นฐาน..."
sudo apt-get update
sudo apt-get install -y software-properties-common curl zip unzip sqlite3

echo "กำลังเพิ่ม Repository สำหรับ PHP 8.3..."
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update

echo "กำลังติดตั้ง PHP 8.3 และส่วนเสริมที่จำเป็นสำหรับ Laravel..."
sudo apt-get install -y php8.3 php8.3-cli php8.3-common php8.3-mysql php8.3-zip php8.3-gd php8.3-mbstring php8.3-curl php8.3-xml php8.3-bcmath php8.3-sqlite3

echo "กำลังติดตั้ง Node.js (v20)..."
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt-get install -y nodejs

echo "กำลังตั้งค่าโปรเจกต์ Laravel..."
cd ~/k

# สร้างไฟล์ .env หากยังไม่มี
if [ ! -f .env ]; then
    cp .env.example .env
fi

# สร้างไฟล์ฐานข้อมูล SQLite หากยังไม่มี
if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
fi

echo "กำลังติดตั้ง Composer dependencies..."
php composer.phar install

echo "กำลังสร้าง App Key..."
php artisan key:generate

echo "กำลังรัน Database Migrations..."
php artisan migrate --force

echo "กำลังติดตั้ง NPM dependencies..."
npm install

echo "การติดตั้งเสร็จสมบูรณ์! กำลังรันเซิร์ฟเวอร์..."
echo "=========================================="
echo "หลังจากเซิร์ฟเวอร์เริ่มทำงาน คุณสามารถเข้าดูเว็บไซต์ได้ที่ URL ที่ปรากฏขึ้นมา"
echo "=========================================="

# ใน composer.json มีสคริปต์ dev ที่จะรันทั้ง php artisan serve และ npm run dev พร้อมกัน
npm run dev
