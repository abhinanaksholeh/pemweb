Analisa Belajar Hari Ini – Mata Kuliah Pemrograman Web (Pak Jef)

Hari ini di matkul Pemrograman Web yang diajar oleh Pak Jef, saya belajar tentang dasar-dasar pembuatan website menggunakan Bootstrap. Jujur awalnya agak bingung, tapi setelah dicoba satu per satu, ternyata seru juga karena langsung bisa kelihatan hasilnya di browser.

1. Struktur HTML dan Bootstrap
Awal mulainya saya buat struktur HTML dasar dulu, terus saya tambahin link CDN Bootstrap. Dari situ saya mulai coba-coba buat navbar, card, tombol, dan atur layout pakai grid system-nya Bootstrap. Ternyata Bootstrap ini beneran ngebantu banget buat ngerapiin tampilan tanpa harus banyak nulis CSS manual.

2. Bikin Halaman Profil Sederhana
Setelah ngerti layout, saya coba buat halaman profil pribadi yang isinya:
- Nama: Abhinaya Fikri
- Kampus: Universitas Esa Unggul
- Fakultas: Ilmu Komputer
- Tambahan: tempat tinggal & tanggal lahir

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Abhinaya Fikri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
      <div class="card-body text-center">
        <img src="https://via.placeholder.com/100" alt="Foto Profil" class="rounded-circle mb-3">
        <h4 class="card-title">Abhinaya Fikri</h4>
        <p class="card-text text-muted">Universitas Esa Unggul</p>
        <p class="card-text text-muted">Fakultas Ilmu Komputer</p>
        <p class="card-text">Tangerang</p>
        <p class="card-text">28 Agustus 2005</p>
      </div>
    </div>
  </div>

</body>
</html>

Penjelasan Singkat:
Bootstrap dipakai untuk styling biar nggak perlu nulis CSS sendiri.
Pakai card buat bungkus semua isi.
Pakai text-center biar semuanya rata tengah.
Gambar profil pakai placeholder, nanti kamu bisa ganti src-nya pakai link foto kamu sendiri.
Ukuran maksimum card diatur supaya nggak terlalu lebar.
Tinggal salin kode itu dan buka di browser, udah langsung tampil profil sederhana kamu. Kalau mau dikembangkan, tinggal ditambah bagian lainnya seperti tombol, social media, dll.
Saya juga upload foto profil biar lebih personal dan tampilannya enak dilihat. Semua saya bungkus pakai komponen card dan button dari Bootstrap biar clean.

3. Tambah Bagian About Me
Bagian ini saya isi tentang saya sendiri, bahwa saya masih mahasiswa yang lagi belajar soal UI/UX dan web development. Saya tulis jujur aja, bahwa saya masih dalam tahap belajar dan masih terus coba ngerti gimana bikin tampilan web yang menarik dan fungsional.

4. Visualisasi Skill
Nah, saya juga tambahin section skill pakai progress bar, biar keliatan kemampuan saya udah sampai mana. Karena saya masih pemula, saya isi begini:
- HTML: 40%
- JavaScript: 40%
- Database: 30%
Berikut ini tata cara simpel buat bikin Visualisasi Skill pakai Bootstrap progress bar, cocok banget buat pemula:

html
Salin
Edit
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skill Abhinaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5" style="max-width: 600px;">
    <h4 class="mb-4 text-center">My Skills</h4>

    <div class="mb-3">
      <label>HTML</label>
      <div class="progress">
        <div class="progress-bar bg-success" style="width: 40%;">40%</div>
      </div>
    </div>

    <div class="mb-3">
      <label>JavaScript</label>
      <div class="progress">
        <div class="progress-bar bg-warning text-dark" style="width: 40%;">40%</div>
      </div>
    </div>

    <div class="mb-3">
      <label>Database</label>
      <div class="progress">
        <div class="progress-bar bg-info text-dark" style="width: 30%;">30%</div>
      </div>
    </div>
  </div>

</body>
</html>
Penjelasan Singkat:
Pakai progress dari Bootstrap untuk bikin bar-nya.
Warna disesuaikan biar kelihatan menarik (bg-success, bg-warning, bg-info).
Isi style="width: 40%" sesuai persentase kemampuan kamu.
Label di atas progress bar kasih tau skill-nya apa.

5. Shortcut Sosial Media
Bagian ini seru juga. Saya tambahin ikon sosial media kayak:
- Instagram: ke akun kampus saya  
  👉 [@univ.esaunggul_tangerang](https://www.instagram.com/univ.esaunggul_tangerang/)
- GitHub: ke project saya di pemweb  
  👉 [GitHub Project](https://github.com/abhinanaksholeh/pemweb)

Saya ubah warnanya juga biar nggak cuma abu-abu, jadi langsung kelihatan jelas begitu buka halaman.

6. Footer
Terakhir, saya tambahin footer simpel di bawah dengan tulisan:
```html
&copy; 2024 Abhinaya Fikri
```
Biar halaman web-nya keliatan rapi dan nggak menggantung gitu aja.


Kesimpulan
Dari pembelajaran hari ini bareng Pak Jef, saya jadi lebih paham tentang:
- Cara bikin tampilan website yang rapi dan responsif pakai Bootstrap
- Nambahin konten personal kayak About Me dan Skill
- Nambahin ikon sosial media yang bisa langsung diakses

