<?php

require 'db.php';


$stmt = $conn->query("SELECT * FROM ketersediaan_kamar");
$kamar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Klinik Hemodialysis PMI DIY</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/templatemo-medic-care.css" rel="stylesheet">
</head>
<body id="top">

<main>
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="">
            <img src="images/Pmi.png" alt="Logo PMI" style="height: 50px; margin-right: 10px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline">Ketersediaan Kamar</a></li>
                <li class="nav-item"><a class="nav-link" href="#booking">Reservasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary" href="edit_kamar.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <div class="heroText d-flex flex-column justify-content-center">
                    <h1 class="mt-auto mb-2">
                        Better
                        <div class="animated-info">
                            <span class="animated-item">health</span>
                            <span class="animated-item">days</span>
                            <span class="animated-item">lives</span>
                        </div>
                    </h1>
                    <p class="mb-4">Hemodialisis adalah salah satu metode cuci darah yang digunakan untuk membantu penderita penyakit ginjal kronis atau gagal ginjal. Proses ini bertujuan untuk menggantikan sebagian fungsi ginjal yang rusak dengan cara menyaring darah menggunakan mesin hemodialisis.</p>
                    <div class="heroLinks d-flex flex-wrap align-items-center">
                        <a class="custom-link me-4" href="#timeline" data-hover="Cek Kamar">Cek Kamar</a>
                        <p class="contact-phone mb-0"><i class="bi-phone"></i> 0888-2490-117</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pb-0" id="timeline">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-lg-5 mb-4">KETERSEDIAAN KAMAR</h2>
                <div class="timeline">
                    <!-- Tabel Utama -->
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Nomor Kamar</th>
                                <th>Pagi (07.00-12.00)</th>
                                <th>Siang (13.00-20.00)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kamar as $row): ?>
                                <tr>
                                    <td><?php echo $row['nomor_kamar']; ?></td>
                                    <td style="color: <?php echo $row['pagi'] == 'Tersedia' ? 'green' : 'red'; ?>;">
                                        <?php echo $row['pagi'] == 'Tersedia' ? '✔ Tersedia' : '✘ Penuh'; ?>
                                    </td>
                                    <td style="color: <?php echo $row['siang'] == 'Tersedia' ? 'green' : 'red'; ?>;">
                                        <?php echo $row['siang'] == 'Tersedia' ? '✔ Tersedia' : '✘ Penuh'; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Informasi Reservasi</h2>
                            
                                <p>Untuk melakukan reservasi di Klinik Hemodialisis PMI DIY, berikut adalah langkah-langkah yang harus dilakukan:</p>
                                
                                <ol>
                                    <li>
                                        Menanyakan ketersediaan slot hemodialisis ke 
                                        <strong>Whatsapp kami (0888-2490-117)</strong>.
                                        <br>
                                        
                                        <a href="https://wa.me/08882490117" target="_blank" class="btn btn-success mt-2">
                                            <i class="bi-whatsapp"></i> Hubungi via WhatsApp
                                        </a>
                                    </li>
                                    <li>Setelah mendapatkan konfirmasi ketersediaan slot, silakan mengirimkan kelengkapan berkas sebagai berikut:</li>
                                    <ul>
                                        <li>a. Resume pulang rawat inap dari rumah sakit.</li>
                                        <li>b. Surat traveling dialysis.</li>
                                        <li>c. Surat Eligibilitas Peserta BPJS.</li>
                                        <li>d. Hasil lab terbaru mencakup hemoglobin, HIV, HbsAg, anti-HCV, ureum, dan creatinine.</li>
                                        <li>e. Hasil rontgen dan USG (bila ada).</li>
                                        <li>f. Fotokopi KTP.</li>
                                        <li>g. Fotokopi KK.</li>
                                    </ul>
                                    <li>Setelah berkas lengkap, kami akan menjadwalkan pemeriksaan kondisi pasien dengan dokter.</li>
                                    <li>Jika slot kami penuh, pasien dapat mendaftar ke <strong>waiting list</strong> kami dengan mengirimkan data berikut:</li>
                                    <ul>
                                        <li>a. Nama pasien.</li>
                                        <li>b. Alamat pasien.</li>
                                        <li>c. Faskes 1 pasien.</li>
                                        <li>d. Nomor HP yang dapat dihubungi.</li>
                                        <li>e. Tanggal terakhir pasien hemodialisis.</li>
                                    </ul>
                                </ol>
                                
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>
</main>

<footer class="site-footer section-padding" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 me-auto col-12">
                <h5 class="mb-lg-4 mb-3">Opening Hours</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex">Minggu: Tutup</li>
                    <li class="list-group-item d-flex">Senin - Sabtu: 07:00 - 23:00</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                <h5 class="mb-lg-4 mb-3">Our Clinic</h5>
                <p>Jl. Siliwangi No.3, Patuk, Banyuraden, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55293</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12 ms-auto">
                <h5 class="mb-lg-4 mb-2">Socials</h5>
                <ul class="social-icon">
                    <li><a href="https://www.instagram.com/klinikhdpmidiy/" class="social-icon-link bi-instagram"></a></li>
                    <li><a href="https://wa.me/8882490117" class="social-icon-link bi-phone"></a></li>
                </ul>
                <p class="copyright-text">Copyright © Hemodialysis PMI DIY</p>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scrollspy.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
