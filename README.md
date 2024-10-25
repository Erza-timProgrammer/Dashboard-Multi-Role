<<<<<<< HEAD

# Sistem Login Akademik

Sistem Login Akademik adalah aplikasi berbasis web yang memungkinkan pengguna dengan 3 peran (Kaprodi, Dosen, dan Mahasiswa) untuk melakukan autenticasi dan salah satu role dapat berperan untuk mengelola data akademik melalui operasi CRUD (Create, Read, Update, Delete).

## Fitur Utama

-   **Multilevel Authentication**: Pengguna dapat login sesuai dengan peran mereka (Kaprodi, Dosen, Mahasiswa).
-   Kaprodi hanya dapat melihat data mahasiswa.
-   Mahasiswa dapat melihat data diri dan melakukan Request edit data kepada Role Dosen.
-   **CRUD untuk Data Dosen**: Kaprodi dapat mengelola data dosen.
-   **Pengelolaan Mata Kuliah**: Dosen dapat mengelola mata kuliah yang diampu.

## Teknologi yang Digunakan

-   **Laravel**: Framework PHP untuk pengembangan web.
-   **Vite**: Bundler dan build tool modern untuk proyek frontend.
-   **Tailwind CSS**: Framework CSS utility-first untuk styling antarmuka pengguna.
-   **PostCSS**: Alat untuk memproses CSS dengan plugin seperti Autoprefixer.
-   **Autoprefixer**: Plugin PostCSS yang menambahkan vendor prefixes secara otomatis.
-   **Axios**: Library untuk melakukan HTTP requests dari client-side.
-   **Flowbite**: Library komponen untuk mempercepat pengembangan antarmuka menggunakan Tailwind CSS.
-   **Inputmask**: Library untuk format input pada form.
