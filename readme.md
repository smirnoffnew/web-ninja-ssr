# web-ninja-test

### Before start working please install 

##### composer
```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/bin --filename=composer
```
##### pecl

```
sudo apt-get install php7.0-mongodb
```
##### MySql
```
create database "yearprog_ninja"
```
##### php 7.2 with v8js
```
sudo apt update
```
```
sudo apt upgrade
```
```
sudo apt-get install python-software-properties
```
```
sudo add-apt-repository -y ppa:ondrej/php 
```
```
sudo add-apt-repository -y ppa:pinepain/libv8-archived
```
```
sudo apt update
```
```
sudo apt-get install php7.2 php7.2-curl php7.2-dev php7.2-mbstring php7.2-zip php7.2-mysql libv8-dev
```
```
sudo pecl -d php_suffix=7.2 install v8js
```
```
sudo bash -c 'echo ''extension=v8js.so'' >> /etc/php/7.2/cli/conf.d/20-v8js.ini'
```
```
php -i | grep v8js
```

## run the following commands

```
cp .env.example .env
```

```
composer install
```

```
php artisan migrate
```

```
php artisan key:generate
```

```
php artisan passport:install
```

```
php artisan db:seed
```

```
php artisan serve
```

### Getting Started for development

headers for api requests

'headers' => [

    'Accept' => 'application/json',

    'Authorization' => 'Bearer ' <accessToken>,

]

ssh: 1_asdf_%

DB_CONNECTION=mysql
DB_HOST=yearprog.mysql.tools
DB_PORT=3306
DB_DATABASE=yearprog_ninja
DB_USERNAME=yearprog_ninja
DB_PASSWORD=l&*HZ4p6h1

/usr/local/php71/bin/php ~/composer.phar install

