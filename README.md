# Panduan Clone dan Menjalankan Proyek "test-development"

Berikut adalah panduan langkah demi langkah untuk meng-clone dan menjalankan proyek "test-development" dari GitHub:

## Persyaratan

Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:

1. PHP versi 7.3 atau lebih tinggi
2. Composer (https://getcomposer.org/)
3. Extensi PHP yang diperlukan (contoh: OpenSSL, PDO, Mbstring, Tokenizer, dll.)
4. Git (https://git-scm.com/)

## Langkah 1: Clone Repository

Pertama, pastikan Anda telah menginstal Git pada komputer Anda. Jika belum, Anda dapat mengunduh dan menginstalnya dari situs resmi Git (https://git-scm.com/).

Setelah Git terinstal, buka terminal atau command prompt, dan tentukan direktori di mana Anda ingin menyimpan proyek "test-development" dari GitHub. Kemudian, jalankan perintah berikut:

```
git clone https://github.com/SulthonNafis/test-development.git
```

Setelah menjalankan perintah tersebut, Git akan mengunduh semua file dan folder yang terkait dengan proyek "test-development" ke dalam direktori yang Anda tentukan.

## Langkah 2: Konfigurasi Lingkungan

Buka terminal atau command prompt, masuk ke direktori proyek "test-development" yang telah di-clone, dan buat salinan file `.env.example` sebagai `.env`:

```
cp .env.example .env      # untuk Mac/Linux
copy .env.example .env   # untuk Windows
```

Kemudian, buka file `.env` dan atur konfigurasi lingkungan sesuai dengan pengaturan database dan kebutuhan lain yang Anda miliki.

## Langkah 3: Install Dependensi

Dalam direktori proyek "test-development", jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan oleh proyek:

```
composer install
```

Perintah di atas akan menggunakan Composer untuk mengunduh dan menginstal semua paket yang diperlukan oleh proyek "test-development".

## Langkah 4: Generate Key Aplikasi

Pada file `.env`, perhatikan baris `APP_KEY`. Anda harus mengisi nilai kunci aplikasi ini dengan nilai acak. Untuk melakukan ini, jalankan perintah berikut di terminal:

```
php artisan key:generate
```

Perintah di atas akan mengisi nilai acak untuk `APP_KEY` pada file `.env`.

## Langkah 5: Jalankan Migrasi dan Seeder (Opsional)

Jika proyek "test-development" memiliki tabel database yang harus diatur, Anda dapat menjalankan migrasi dengan perintah berikut:

```
php artisan migrate
```

Jika Anda ingin mengisi database dengan data default, Anda dapat menjalankan seeder:

```
php artisan db:seed
```

## Langkah 6: Jalankan Aplikasi Laravel

Setelah semua langkah sebelumnya selesai, Anda dapat menjalankan aplikasi "test-development". Jalankan perintah berikut di terminal:

```
php artisan serve
```

Aplikasi akan dijalankan di alamat `http://localhost:8000`. Anda dapat membuka alamat tersebut di browser Anda dan mulai menjelajahi aplikasi "test-development".

Selamat, Anda telah berhasil meng-clone dan menjalankan proyek "test-development" dari GitHub ke komputer Anda! Selamat berkoding!
