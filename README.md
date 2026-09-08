# artisan-of-missing-vendor 🧙‍♂️

Proyek latihan mandiri Laravel — dibuat untuk memahami alur dasar **URL → Route → Controller → View**, sekaligus jadi tempat coba-coba sebelum ngerjain tugas beneran. Namanya diambil dari drama nyata: `vendor/autoload.php` yang ilang berkali-kali pas awal setup. 😅

---

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP 8.5)
- **Frontend Engine**: Inertia.js + React
- **Styling**: Custom CSS
- **Database**: SQLite

---

## 🚀 Cara Menjalankan di Lokal

Setelah clone repositori ini, ikuti langkah berikut:

### 1. Install Dependensi PHP & Node
```bash
composer install
pnpm install
```

### 2. Setup Environment (`.env`)
Copy file `.env.example` menjadi `.env`, lalu generate `APP_KEY`:
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Migrasi Database
```bash
touch database/database.sqlite
php artisan migrate
```

### 4. Jalankan Server Lokal
Buka dua terminal terpisah:
```bash
php artisan serve
```
```bash
pnpm dev
```

Buka browser di `http://127.0.0.1:8000`.

---

## 📌 Daftar Fitur & Rute Aplikasi

- **GET `/`** — Home
- **GET `/#tentang`** — Section About (scroll di halaman Home)
- **GET `/team`** — Halaman Project / Anggota
- **GET `/kalkulator`** — Kalkulator interaktif (form input angka & operasi)
- **GET `/hitung/{angka1}/{angka2}/{operasi}`** — Rute dinamis kalkulator (contoh: `/hitung/10/5/kali`)

---

## 🐛 Drama Selama Setup (Log Pribadi)

Buat pengingat diri sendiri kalau suatu saat harus setup ulang dari nol:

1. PHP belum terinstall → `sudo apt install php8.5-cli`
2. `composer install` gagal karena `ext-dom` & `ext-xml` belum ada → install extension yang kurang
3. `php artisan migrate` gagal, `pdo_sqlite` belum ada → `sudo apt install php8.5-sqlite3`
4. Vite manifest not found → lupa jalanin `pnpm dev` / `pnpm build`
5. Server ke-refuse connection → lupa `php artisan serve` masih jalan atau enggak

Moral of the story: **jangan tutup terminal yang lagi jalanin server.**

---

## 📄 Lisensi

Proyek latihan pribadi, bebas dipakai buat belajar.