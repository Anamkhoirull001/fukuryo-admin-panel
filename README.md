# Project Laravel Filament

Project ini menggunakan **Laravel** dan **Filament Admin Panel** untuk mengelola data Master (Author, Category, dan Book).

---

## 🚀 Langkah Instalasi

1. **Clone Repository**

    ```bash
    git clone https://github.com/username/repo-name.git
    cd repo-name
    ```

2. **Install Dependency**

    ```bash
    composer install
    npm install && npm run build
    ```

3. **Konfigurasi Environment**

    - Duplikat file `.env.example` menjadi `.env`
    - Atur konfigurasi database sesuai dengan environment Anda:

        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nama_database
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4. **Generate Key Aplikasi**

    ```bash
    php artisan key:generate
    ```

5. **Migrasi Database**

    ```bash
    php artisan migrate
    ```

6. **Seed Database**
   Jalankan perintah berikut untuk menambahkan user admin default:

    ```bash
    php artisan db:seed
    ```

    Seeder akan membuat user admin dengan kredensial berikut:

    - **Email:** `admin@gmail.com`
    - **Password:** `admin123`

7. **Jalankan Server**

    ```bash
    php artisan serve
    ```

    Akses aplikasi di: `http://127.0.0.1:8000`

---

## 📌 Catatan

-   Pastikan sudah menginstal **PHP >= 8.1**, **Composer**, **Node.js**, dan **NPM**.
-   Akses panel Filament di `/admin` dengan akun admin di atas.
