# Team 10 — Pemrograman Berbasis Kerangka Kerja (PBKK)

Proyek aplikasi web official Kelompok 10 PBKK Departemen Teknik Informatika ITS, Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC).

---

## 🛠️ Tech Stack & Framework
- **Backend**: Laravel 12 (PHP 8.3+)
- **Frontend Engine**: Inertia.js v3 + React 19 / Laravel Blade Templates
- **Styling**: Tailwind CSS v4 + Custom Retro-Modern Design (`team10.css`)
- **Database**: SQLite

---

## 🚀 Cara Menjalankan di Lokal (Panduan untuk Anggota Tim)

Setelah me-clone repositori dari GitHub, ikuti langkah-langkah di bawah ini:

### 1. Install Dependensi PHP & Node
```bash
composer install
npm install
```

### 2. Setup Environment (`.env`)
Copy file `.env.example` menjadi `.env` lalu generate `APP_KEY`:
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Migrasi Database & Seeder
```bash
php artisan key:generate
php artisan migrate --force
```

### 4. Build Aset Frontend
```bash
npm run build
```

### 5. Jalankan Server Lokal
Gunakan perintah otomatis composer untuk menjalankan PHP Server & Vite Dev Server secara bersamaan:
```bash
composer run dev
```

Buka browser di `http://127.0.0.1:8000` atau `http://localhost:8000`.

---

## 📌 Daftar Fitur & Rute Aplikasi

- **GET `/`** — Home (Beranda & Pengenalan Tim 10)
- **GET `/about`** — Profil Departemen Teknik Informatika ITS, FTEIC, Visi Misi, 6 Prodi, 6 Lab
- **GET `/project-idea`** *(atau `/project`)* — Rencana Proyek Akhir Sub-Theme **Personalized Agentic AI for Intelligent Job Discovery and Application Preparation**
- **GET `/kalkulator`** — Fitur Kalkulator Interaktif & Form Uji Perhitungan
- **GET `/hitung/{angka1}/{angka2}/{operasi}`** — Bonus Rute Dinamis (Contoh: `/hitung/10/5/kali`)
- **GET `/team`** — Profil 6 Anggota Kelompok 10 DTIF ITS
- **GET `/team/{id}`** — Detail Kontak & Biodata Anggota Tim
