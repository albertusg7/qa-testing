# Instal Composer dan Dependensi

Berikut ini perintah untuk menginstall composer dan dependensi aplikasi di ubuntu-20.04 (inc. WSL-2).
ini hanya butuh dijalankan sekali dan solusi sementara sampai nanti dapet dari devops versi finalnya.

## Lakukan ini untuk install composer
```sh
sudo apt update -y
sudo apt-get install git unzip php7.4-cli php7.4-curl php7.4-mbstring php7.4-xml
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# update this key at https://composer.github.io/pubkeys.html
COMPOSER=756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$COMPOSER') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"
```
## Masuk ke direktori applikasi dan install dependesi dari applikasi
```sh
cd image/php/app
composer install
```
Jika berhasil akan ada folder `vendor` di `images/php/app/ `
untuk mencoba codeption berhasil terinstal coba
```sh
./vendor/bin/codecept build
./vendor/bin/codecept dry-run acceptance
./vendor/bin/codecept dry-run functional
 ./vendor/bin/codecept dry-run unit
```

## Install nodejs dkk di wsl-2

Supaya mudah mengatur versi nodejs yang terinstall kita akan gunakan Nodejs Version Manager (nvm)
```sh
# update sesuai https://github.com/nvm-sh/nvm#install--update-script
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash
# tutup terminal (exit) dan kemudian buka kembali, cek nvm 
nvm -v
# kalau berhasil akan muncul seperti ini
# 0.38.0
```
Setelah selesai install nvm mari kita install nodejs menggunakan nvm
```sh
# cek node yang sudah terinstall
nvm ls
# melihat yang tersedia untuk diinstall 
nvm ls-remote
# melihat yang tersedia untuk diinstall, hanya versi lts (long time support)
nvm ls-remote --lts
# kita akan gunakan yang  lts paling akhir, install lts
nvm install --lts
# Installing latest LTS version.
# ...
# Now using node v14.17.3 (npm v6.14.13)
# Creating default alias: default -> lts/* (-> v14.17.3)
# Coba jalankan dan cek versi nodejs
node -v
# v14.17.3
# check nodejs package manager (npm)
npm -v
# 6.14.13
```

## 
