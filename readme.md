# Laundry System

Repository yang dibuat ini sangat cocok untuk kita yang sedang belajar fullstack tetapi bingung kalau nanti harus membuat project apa. maka dari itu saya perkenalkan Laundry System yang bisa dijadikan portofolio pertama kamu di ranah fullsatck web development

stack yang digunakan pada project kali ini adalah Laravel & Vue.js, kamu bisa ikuti instruksi dibawah ini agar bisa menjalankan aplikasi web nya di lokal komputer kamu

## How To Start?

Kamu bisa masuk ke folder htdocs di komputermu lalu copas perintah dibawah ini

```bash
  git clone git@github.com:DzikriAlan/laundry-system.git
```

lalu masuk ke dalam project yang baru saja kamu clone
```bash
  cd laundry-system
```

copy file .env.example
```bash
  cp .env.example .env
```

rubah beberapa line pada file .env dari seperti ini
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
```

menjadi seperti dibawah ini
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laundry
  DB_USERNAME=root
  DB_PASSWORD=
```

sebelum menginstall composer pastikan versi php kamu adalah 7.4
```bash
  composer install
```

setelah tadi berhasil membuat file .env, lakukan perintah dibawah ini
```bash
  php artisan key:generate
```

sekarang mari kita membuat database!
```bash
  php artisan migrate
```

jika kamu menjalankan perintah dibawah ini, maka akan membuat data baru pada database. kamu nanti bisa telusuri pada folder database/seeds
```bash
  php artisan db:seed
```

Sebelum melakukan perintah dibawah, pastikan kamu mempunyai nodejs dengan versi v16.20.1 dan npm dengan versi v8.19.4

```bash
  npm install
```

jalankan aplikasi laundry mu sekarang

```bash
  npm run watch
```

