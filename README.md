# Belajar CSS — Membuat Website dengan PHP dari Awal

Project latihan membangun website multi-halaman menggunakan **PHP native** (tanpa framework) dan **CSS murni**, dengan sistem routing sederhana berbasis parameter URL (`$_GET`).

## ✨ Fitur

- Routing antar halaman (`Home`, `About`, `Contact`) tanpa reload penuh struktur, cukup lewat `index.php?page=...`
- Desain **dark modern** dengan aksen gradient cyan–violet
- Navigasi dengan animasi underline saat hover
- Header sticky dengan efek glassmorphism (blur)
- Fully responsive — menyesuaikan dari desktop sampai mobile
- Mendukung `prefers-reduced-motion` untuk aksesibilitas

## 🛠️ Tech Stack

- PHP (native, tanpa framework)
- HTML5
- CSS3 (custom properties, flexbox, animation)

## 📁 Struktur Folder

```
project_php by maulana/
├── index.php        # Entry point + routing sederhana
├── home.php          # Konten halaman Home
├── about.php         # Konten halaman About
├── contact.php        # Konten halaman Contact
└── css/
    └── style.css      # Styling utama
```

## 🚀 Cara Menjalankan

1. Clone repository ini ke folder `htdocs` XAMPP (atau folder web server lokal lainnya):
   ```
   git clone https://github.com/Lanmaulana/belajar-php.git
   ```
2. Jalankan **Apache** lewat XAMPP Control Panel.
3. Buka browser dan akses:
   ```
   http://localhost/nama-project-kamu
   ```
4. Navigasi antar halaman lewat menu di atas (Home, About, Contact).

## 🧭 Cara Kerja Routing

Halaman yang ditampilkan ditentukan lewat parameter `page` di URL, contoh:

```
index.php?page=about
```

`index.php` akan meng-include file PHP yang sesuai (`about.php`) ke dalam `<div id="contents">`. Kalau parameter `page` tidak ada, default-nya akan menampilkan `home.php`.

## 👤 Author

**Maulana** (Xymaul)
Fullstack Developer

---

Project ini dibuat sebagai bahan belajar — silakan fork, modifikasi, atau pakai buat referensi sendiri.
