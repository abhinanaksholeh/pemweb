 Catatan Pemrograman Web - Pertemuan 1   

1.  Docker   
    Platform containerisasi untuk aplikasi.  
     Keunggulan:  Portabilitas, efisiensi, kecepatan.  
    5W 1H:   
   - What → Platform container.  
   - Why → Mudah dipindahkan & efisien.  
   - Who → Developer, sysadmin, DevOps.  
   - When → Pengembangan, testing, deployment.  
   - Where → Server lokal, cloud, dev env.  
   - How → Menjalankan aplikasi dalam container.  

2.  Website   
    Kumpulan halaman web yang bisa diakses via browser.  
    Jenis & Contoh:   
     - E-commerce → Tokopedia, Amazon.  
     - Media sosial → Facebook, Instagram.  
     - Portal berita → Kompas, BBC.  
     - Edukasi → Coursera, Khan Academy.  
     - Pemerintahan → Indonesia.go.id.  

3.  Proyek Web   
   -  Pra-UTS:  Website sederhana sesuai tema.  
   -  Tugas Akhir:  Website company profile sesuai workflow.  

4.  HTML Dasar   
     -  Struktur utama:  `<html>`, `<head>`, `<title>`, `<body>`.  
     -  Tag penting:   
     - Heading → `<h1>` - `<h6>`.  
     - Paragraf → `<p>`.  
     - Link → `<a>`.  
     - Gambar → `<img>`.  
     - List → `<ul>`.  
     - Tabel → `<table>`.  
     - Form → `<form>`.  

5.  Konfigurasi Nginx   
   nginx
   server {
       listen 80;
       server_name localhost;
       location / {
           root /usr/share/nginx/html;
           index index.html;
       }
   }
   
   diatas itu untuk menjalankan server di port 80 dengan root ke `index.html`.  