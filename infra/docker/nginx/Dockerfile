# 最新のNode.js 20 LTS を使用（Laravel Mix や Vite に対応）
FROM node:20-alpine as node

# 最新のNginx公式イメージを使用
FROM nginx:1.25-alpine

LABEL maintainer="your-name <your-email@example.com>"

SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

# タイムゾーン設定
ENV TZ=UTC

# 必要なパッケージをインストール
RUN apk update && \
  apk add --no-cache bash

# Node.js コマンドを追加
COPY --from=node /usr/local/bin /usr/local/bin
COPY --from=node /usr/local/lib /usr/local/lib
COPY --from=node /opt /opt

# Nginx の設定ファイルをコピー
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# 作業ディレクトリを Laravel の標準 `/var/www/html` に設定
WORKDIR /var/www/html
