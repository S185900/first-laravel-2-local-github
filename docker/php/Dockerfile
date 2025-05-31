FROM php:7.4.9-fpm

# 通常、デフォルトの設定ファイル（php.ini）が用意されているが、
# 自分で作ったphp.iniをコンテナ内の/usr/local/etc/php/にコピーするために設定
# /usr/local/etc/php/:ここにphp.iniを置くとPHPがその設定を使うよ！と決められている場所
COPY php.ini /usr/local/etc/php/

# 起動時に必要なコマンドを実行(mysqlとcomposerの設定)
# Composer:PHPで作るアプリケーションで必要となるライブラリなどのパッケージを管理するツール
# RUN 命令は、事前に実行して欲しいコマンドを記述できる
RUN apt update \
    && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip \
    && docker-php-ext-install pdo_mysql zip

# Composerのインストール
# Composer は PHPコンテナから 操作することが多いので、コンテナの中にインストールしておく
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update

# 「コンテナの中で、今から使う場所は/var/wwwというフォルダですよ！」と伝える設定
# 何か新しいファイルを作るとき、そのファイルは/var/wwwフォルダの中にできる。
# プログラムを動かすとき、そのフォルダから動作を開始する。
WORKDIR /var/www
