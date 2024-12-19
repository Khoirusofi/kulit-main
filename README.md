## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi Laravel ini di lokal.

### 1. Clone Repository

Clone repository ini ke komputer Anda:

```bash
git clone https://github.com/Khoirusofi/kulit-main.git
```
2. Masuk ke Direktori Proyek dan Install Dependensi

```bash
cd kulit-main

composer install
npm install
```

3. Salin File .env.example ke .env
Salin file konfigurasi .env.example menjadi .env dan isi detail yang diperlukan (seperti nama aplikasi, database, locale, dan pengaturan lainnya), contohnya : pilih sqlite / mysql

```bash
APP_URL=http://kulit-main.test

DB_CONNECTION=sqlite

# atau jika menggunakan MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=user_database_anda
DB_PASSWORD=password_database_anda
```

4. Buat Folder Storage dan Link ke Public Folder

```bash
root/
    app/
    bootstrap/
    ...
    storage/
        app/
            public/
                ketebalan_images
                produk_images
                styling_images
                tekstur_images
    .env
    ...

```

Kemudian jalankan perintah berikut:

```bash
php artisan storage:link
```

5. Generate Key Aplikasi

```bash
php artisan key:generate
```

6. Jalankan Migrasi Database

```bash
php artisan migrate
```

Jika Anda menggunakan sqlite, migrasi pertama akan meminta Anda untuk membuat file database. Anda dapat menentukan nama dan lokasi file, atau cukup tekan enter untuk menggunakan lokasi default.

7. Jalankan Seeder

```bash
php artisan db:seed
```

8. Kompilasi Aset

```bash
npm run build
```

9. Jalankan Aplikasi

```bash
php artisan serve
```
10. Akses Aplikasi di Browser http://kulit-main.test untuk home
10. Akses Aplikasi di Browser http://kulit-main.test/admin/login untuk admin/dashboard

11. Masuk menggunakan :
```
# admin
email: erfina@erfina.com
password: password

``
