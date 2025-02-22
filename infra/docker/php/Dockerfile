# 最新のPHP 8.3の公式イメージを使用
FROM php:8.3-fpm-bullseye

LABEL maintainer="your-name <your-email@example.com>"

SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# 環境変数の設定
ENV TZ=UTC \
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

# Composer の最新バージョンを取得
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 必要なパッケージをインストール
RUN apt-get update && \
  apt-get install -y \
  git \
  unzip \
  locales \
  libicu-dev \
  libonig-dev \
  libzip-dev \
  curl \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  && apt-get clean && \
  rm -rf /var/lib/apt/lists/*

# ロケール設定
RUN locale-gen en_US.UTF-8 && \
  localedef -f UTF-8 -i en_US en_US.UTF-8

# PHP拡張のインストール
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
  docker-php-ext-install intl pdo_mysql zip bcmath gd

# Node.js 最新 LTS（20.x） をインストール
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
  apt-get install -y nodejs && \
  npm install -g npm@latest

# 設定ファイルのコピー
COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY ./php.ini /usr/local/etc/php/php.ini

# 作業ディレクトリを Laravel の標準 `/var/www/html` に設定
WORKDIR /var/www/html
