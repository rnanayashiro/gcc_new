# PHP 8.2 FPM
FROM php:8.2-fpm

# 必要なパッケージ
RUN apt-get update && apt-get install -y \
  git unzip zip libpng-dev libonig-dev libxml2-dev curl \
  curl gnupg \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer インストール
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Node.js + npm インストール
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get install -y nodejs

# 作業ディレクトリ
WORKDIR /var/www

# アプリファイルをコピー
COPY . .

# PHP 依存関係インストール
RUN composer install --no-dev --optimize-autoloader

# Node 依存関係インストール & Vite ビルド
RUN npm install
RUN npm run build

# 権限修正
RUN chown -R www-data:www-data /var/www

# PHP サービス起動
CMD ["php-fpm"]
