# 最新の MySQL 8.3 を使用
FROM --platform=linux/amd64 mysql:8.3

LABEL maintainer="your-name <your-email@example.com>"

ENV TZ=UTC

# ポート開放
EXPOSE 3306

# MySQLの設定ファイルを適用
COPY ./my.cnf /etc/mysql/conf.d/my.cnf
