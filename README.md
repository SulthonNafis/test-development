# Panduan Instalasi Laravel

## Persyaratan

Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:

1. PHP versi 7.3 atau lebih tinggi
2. Composer (https://getcomposer.org/)
3. Extensi PHP yang diperlukan (contoh: OpenSSL, PDO, Mbstring, Tokenizer, dll.)
4. Database server (MySQL, PostgreSQL, SQLite, SQL Server, atau lainnya)

## Langkah 1: Instal Composer

Pastikan Anda telah menginstal Composer pada sistem Anda. Composer adalah alat manajemen paket PHP yang diperlukan untuk mengelola dependensi aplikasi Laravel. Anda dapat mengunduh dan menginstalnya dari situs resmi Composer (https://getcomposer.org/).

## Langkah 2: Instal Git
Pastikan Anda telah menginstal Git pada komputer Anda. Git adalah sistem kontrol versi yang digunakan untuk mengelola proyek secara terdistribusi. Anda dapat mengunduh dan menginstalnya dari situs resmi Git (https://git-scm.com/).

## Langkah 3: Clone Repository
Setelah Git terinstal, buka terminal atau command prompt, dan tentukan direktori di mana Anda ingin menyimpan proyek Laravel dari GitHub. Kemudian, jalankan perintah berikut:

## Langkah 4:
buka command promt lalu Copy code
git clone https://github.com/nama-pengguna/nama-repository.git
Gantilah nama-pengguna dengan nama pengguna akun GitHub Anda dan nama-repository dengan nama repository GitHub yang ingin Anda clone.

Contoh, jika saya ingin meng-clone proyek Laravel bernama "laravel-app" dari repository "https://github.com/johndoe/laravel-app.git", perintahnya akan menjadi:

bash
Copy code
git clone https://github.com/johndoe/laravel-app.git
Setelah menjalankan perintah tersebut, Git akan mengunduh semua file dan folder yang terkait dengan proyek Laravel ke dalam direktori yang Anda tentukan.

Langkah 3: Konfigurasi Lingkungan
Buka terminal atau command prompt, masuk ke direktori proyek Laravel yang telah di-clone, dan buat salinan file .env.example sebagai .env:

bash
Copy code
cp .env.example .env      # untuk Mac/Linux
copy .env.example .env   # untuk Windows
Kemudian, buka file .env dan atur konfigurasi lingkungan sesuai dengan pengaturan database dan kebutuhan lain yang Anda miliki.

Langkah 4: Install Dependensi
Dalam direktori proyek Laravel, jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan oleh proyek:

Copy code
composer install
Perintah di atas akan menggunakan Composer untuk mengunduh dan menginstal semua paket yang diperlukan oleh proyek Laravel.

Langkah 5: Generate Key Aplikasi
Pada file .env, perhatikan baris APP_KEY. Anda harus mengisi nilai kunci aplikasi ini dengan nilai acak. Untuk melakukan ini, jalankan perintah berikut di terminal:

vbnet
Copy code
php artisan key:generate
Perintah di atas akan mengisi nilai acak untuk APP_KEY pada file .env.

Langkah 6: Jalankan Migrasi dan Seeder (Opsional)
Jika proyek Laravel yang Anda clone memiliki tabel database yang harus diatur, Anda dapat menjalankan migrasi dengan perintah berikut:

Copy code
php artisan migrate
Jika Anda ingin mengisi database dengan data default, Anda dapat menjalankan seeder:

Copy code
php artisan db:seed
Langkah 7: Jalankan Aplikasi Laravel
Setelah semua langkah sebelumnya selesai, Anda dapat menjalankan aplikasi Laravel Anda. Jalankan perintah berikut di terminal:

Copy code
php artisan serve
Aplikasi Laravel akan dijalankan di alamat http://localhost:8000. Anda dapat membuka alamat tersebut di browser Anda dan melihat tampilan awal dari aplikasi Laravel Anda.

