<?php
// Pastikan koneksi ke database sudah ada
// Contoh koneksi (gunakan sesuai konfigurasi Anda)
$conn = new mysqli('localhost', 'root', '', 'kontak');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menambah data kontak
function data_kontak($data) {
    global $conn;
    $nama = $conn->real_escape_string($data['nama']);
    $email = $conn->real_escape_string($data['email']);
    $nomor = $conn->real_escape_string($data['nomor']);
    $pesan = $conn->real_escape_string($data['pesan']);

    $query = "INSERT INTO kontak (nama, email, nomor, pesan) VALUES ('$nama', '$email', '$nomor', '$pesan')";
    return $conn->query($query);
}

// Cek jika tombol tambah ditekan
if (isset($_POST['tambah'])) {
    if (data_kontak($_POST) > 0) {
        echo "<script>
                alert('Data Kontak Berhasil Ditambahkan');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Kontak Gagal Ditambahkan');
                document.location.href = 'index.php';
              </script>";
    }
}

// Ambil data kontak dari database
function select($query) {
    global $conn;
    $result = $conn->query($query);
    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

$data_kontak = select("SELECT * FROM kontak");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PortfolioMe</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
</head>

<body>
  <!-- navbar start -->
  <header>
    <nav>
      <div class="logo">
        Kelompok 9
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#project">Project</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- navbar end -->

  <!-- home start -->
  <section id="home" class="hero">
    <img src="../Image/developerActivity.svg" alt="Samuel Alfredo Silla">
    <h1>Hallo semua!</h1>
    <p>Kita adalah sekelompok mahasiswa yang sedang menempuh pendidikan di bidang IT.
      pada pengembangan website interaktif dan responsif
      menggunakan teknologi web modern.
    </p>
    <a href="#about" class="btn">About Me</a>
  </section>
  <!-- home end -->

  <!-- about start -->
  <section id="about" class="about">
    <h1>Tentang Kami</h1>
    <div class="container-about">
      <div class="Image-about">
        <a href="https://www.instagram.com/samuel_alfredo_/"><img src="../Image/samuel3.jpg" alt="Samuel"></a>
        <a href="https://www.instagram.com/rafiazisr/"><img src="../Image/rafi1.jpg" alt="Rafi"></a>
        <a href="https://www.instagram.com/rizkysghr/"><img src="../Image/rizki.jpg" alt="Risky"></a>
      </div>
      <p>Kelompok 9 adalah tim yang terdiri dari mahasiswa
        Informatika yang memiliki ketertarikan kuat pada dunia
        pemrograman dan pengembangan web. Dengan pengalaman
        menggunakan teknologi web modern seperti HTML, CSS,
        JavaScript, dan framework lainnya, kami fokus pada
        pembuatan website yang interaktif dan responsif untuk
        memberikan pengalaman terbaik bagi pengguna. Setiap
        anggota kelompok memiliki minat besar dalam pengembangan
        aplikasi berbasis web dan telah mengerjakan berbagai proyek
        yang memperkuat keterampilan coding dan desain kami.
        Kami selalu bersemangat untuk belajar teknologi baru dan
        terus meningkatkan kemampuan kami dalam dunia IT.
      </p>
    </div>
  </section>
  <!-- about end -->

  <!-- Skills Start -->
  <div id="skills" class="skills-container">
    <h1>SKILLS</h1>
    <div class="skills-grid">
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/HTML5"><img src="../Image/download.png" alt="HTML5"></a>
        <p>HTML 5</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/Cascading_Style_Sheets"><img src="../Image/CSS.jpeg" alt="CSS"></a>
        <p>CSS</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/JavaScript"><img src="../Image/JavaScript-logo.png " alt="JavaScript"></a>
        <p>JavaScript</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/PHP"><img src="../Image/PHP.png" alt="PHP"></a>
        <p>PHP</p>
      </div>
      <div class="skill-card">
        <a href="https://en.wikipedia.org/wiki/Kali_Linux"><img src="../Image/kalilinux.png" alt="Kali Linux"></a>
        <p>Kali Linux</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/Python_(bahasa_pemrograman)"><img src="../Image/Python.svg.png" alt="Python"></a>
        <p>Python</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/Java"><img src="../Image/Java.png" alt="Java"></a>
        <p>Java</p>
      </div>
      <div class="skill-card">
        <a href="https://en.wikipedia.org/wiki/Laravel"><img src="../Image/Laravel.png" alt="Laravel"></a>
        <p>Laravel</p>
      </div>
      <div class="skill-card">
        <a href="https://id.wikipedia.org/wiki/Go_(bahasa_pemrograman)"><img src="../Image/golang.png" alt="Golang"></a>
        <p>Golang</p>
      </div>
      <div class="skill-card">
        <a href="https://en.wikipedia.org/wiki/Node.js"><img src="../Image/node-js.png" alt="NodeJS"></a>
        <p>NodeJS</p>
      </div>
      <div class="skill-card">
        <a href="https://en.wikipedia.org/wiki/React_(JavaScript_library)"><img src="../Image/react.png" alt="react"></a>
        <p>React</p>
      </div>
      <div class="skill-card">
        <a href="https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)"><img src="../Image/Bootstarp.jpeg" alt="Bootstrap"></a>
        <p>Bootstrap</p>
      </div>
    </div>
  </div>
  <!-- Skills end -->

  <!-- Project Start -->
  <div class="project-container" id="project">
    <h1>PROJECT</h1>
    <div class="project-grid">
      <div class="project-card">
        <a href="https://samuelalfredosilla.github.io/PawonMbokRin/"><img src="../Image/Pawon mbokrin.png" alt="WebSite Pawon MbokRin"></a>
        <p>PawonMbokRin</p>
      </div>
      <div class="project-card">
        <a href="https://www.figma.com/proto/TuxIq5954Ps1h3P3y26AyW/Untitled?node-id=122-8276&node-type=canvas&t=fUiKRQ8co0T9swAO-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A27"><img src="../Image/Project rizky.png" alt="Project Webpinbel"></a>
        <p>Project Webpinbel</p>
      </div>
      <div class="project-card">
        <a href="https://samuelalfredosilla.github.io/website-check-khodam/"><img src="../Image/cek khodam.png" alt="Cek Khodam"></a>
        <p>Cek Khodam</p>
      </div>
      <div class="project-card">
        <a href="https://www.figma.com/proto/T3Jwt5bCDZV6vUHw3s94uP/GuardAI?node-id=30-136&starting-point-node-id=30%3A136&t=alOGcp43vOFVE4Yj-1"><img src="../Image/AIGUARD.png" alt="AIGuard"></a>
        <p>AIGuard</p>
      </div>
      <div class="project-card">
        <a href="https://samuelalfredosilla.github.io/MadaStore.github.io/"><img src="../Image/Mada Store.jpg" alt="Mada Store"></a>
        <p>Mada Store</p>
      </div>
      <div class="project-card">
        <a href="https://samuelalfredosilla.github.io/ValentineGiveforAlexis.github.io/"><img src="../Image/Valentine Give.jpg" alt="ValentineGive"></a>
        <p>ValentineGive</p>
      </div>
    </div>
  </div>
  <!-- Project end -->

  <!-- Contact Start -->

  <div class="background-contact">
    <div class="container-contact" id="contact">
      <h1>Contact Me</h1>
      <div class="contact-form">
        <h2>Contact Form</h2>
        <form action="proses.php" method="post">
          <!-- Input Nama -->
          <label for="name">Name *</label>
          <input type="text" id="name" name="nama" placeholder="Enter your name" required>

          <!-- Input Email -->
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>

          <!-- Input Nomor Telepon -->
          <label for="phone">No Telepon</label>
          <input type="tel" id="phone" name="nomor" placeholder="Enter your phone number">

          <!-- Input Pesan -->
          <label for="message">Pesan *</label>
          <textarea id="message" name="pesan" rows="5" placeholder="Enter your message" required></textarea>

          <!-- Tombol Submit -->
          <button type="submit" name="tambah">Send</button>
        </form>


      </div>
    </div>
  </div>
  <!-- Contact end -->

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbyqMeDwiX_wRA19g5lT-6Egj9fQQaMkzqP6uQoC0ipCa5xPm97q1xLi34chFqon_EXNKA/exec';
    const form = document.forms['contact-form-submissions'];
    const button = form.querySelector('button');
    const spinner = form.querySelector('.spinner');

    form.addEventListener('submit', e => {
      e.preventDefault();

      // Show spinner and disable button
      spinner.style.display = 'inline-block';
      button.disabled = true;

      fetch(scriptURL, {
          method: 'POST',
          body: new FormData(form)
        })
        .then(response => {
          console.log('Success!', response);
          alert('Message sent successfully!');

          // Hide spinner, enable button, and reset form
          spinner.style.display = 'none';
          button.disabled = false;
          form.reset();
        })
        .catch(error => {
          console.error('Error!', error.message);
          alert('Failed to send message!');

          // Hide spinner and enable button
          spinner.style.display = 'none';
          button.disabled = false;
        });
    });
  </script>
</body>

</html>