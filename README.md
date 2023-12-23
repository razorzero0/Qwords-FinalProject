# Panduan Instalasi Proyek Fullstack Developer Final Project by Qwords

Ini adalah panduan langkah demi langkah untuk menginstal dan menjalankan proyek Fullstack Developer Final Project oleh Qwords pada lingkungan lokal Anda.

## Langkah-langkah Penginstalan

1. **Clone Proyek**: Clone repositori dari GitHub:
    ```bash
    git clone https://github.com/razorzero0/Qwords-FinalProject.git
    ```

2. **Instal Dependencies Menggunakan Composer**: Masuk ke direktori proyek dan instal dependencies menggunakan Composer:
    ```bash
    cd Qwords-FinalProject
    composer install
    ```

3. **Persiapan Environment File**: Duplikat file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan sesuaikan pengaturan database Anda.

4. **Generate Application Key**: Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

5. **Menjalankan Server PHP**: Jalankan server PHP menggunakan perintah:
    ```bash
    php artisan serve
    ```

## Informasi Tambahan

- **URL Lokal Proyek**: Setelah menjalankan server, proyek akan dapat diakses melalui URL:
    ```
    http://localhost:8000
    ```

- **Versi PHP yang Dibutuhkan**: Proyek ini dikembangkan menggunakan PHP versi 8.1. Pastikan Anda menggunakan versi PHP yang kompatibel.

## Catatan

Pastikan semua persyaratan sistem terpenuhi sebelum menjalankan proyek.

Terima kasih telah menggunakan proyek Fullstack Developer Final Project by Qwords!
