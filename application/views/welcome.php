<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>PA Tenggarong</title>
    <meta
      content="Persyaratan pendaftaran perkara pada Pengadilan Agama Tenggarong"
      name="description"
    />
    <meta content="Persyaratan Cerai" name="keywords" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo base_url('assets/img/favicon/apple-touch-icon.png'); ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo base_url('assets/img/favicon/favicon-32x32.png'); ?>"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo base_url('assets/img/favicon/favicon-16x16.png'); ?>"
    />
    <link rel="manifest" href="<?php echo base_url('assets/img/favicon/site.webmanifest'); ?>" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet" />
    <link
      href="<?php echo base_url ('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet" />
    <link
      href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Pengadilan Aga</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto">
          <img src="<?php echo base_url('assets/img/logo_patgr.png'); ?>" alt="" class="img-fluid" />
          <img src="<?php echo base_url('assets/img/wbk.png'); ?>" alt="" class="img-fluid" />
          <img src="<?php echo base_url('assets/img/berakhlak.png'); ?>" alt="" class="img-fluid" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Gugatan <i class="bi bi-chevron-down"></i></span
              ></a>
              <ul>
                <li><a href="#cerai" onclick="bunyi('cerai');">Cerai</a></li>
                <li>
                  <a href="#gugat-waris" onclick="bunyi('gugat-waris');"
                    >Gugat Waris</a
                  >
                </li>
                <li>
                  <a href="#hadhanah" onclick="bunyi('hadhanah');"
                    >Hak Asuh Anak</a
                  >
                </li>
                <li>
                  <a href="#harta-bersama" onclick="bunyi('harta-bersama');"
                    >Harta Bersama / Gono-Gini</a
                  >
                </li>
                <li>
                  <a href="#isbat-cerai" onclick="bunyi('isbat-cerai');"
                    >Isbat Nikah disertai Cerai</a
                  >
                </li>
                <li>
                  <a href="#nafkah-anak" onclick="bunyi('nafkah-anak');"
                    >Nafkah Anak</a
                  >
                </li>
                <li>
                  <a
                    href="#pembatalan-nikah"
                    onclick="bunyi('pembatalan-nikah');"
                    >Pembatalan Nikah</a
                  >
                </li>
                <li>
                  <a href="#poligami" onclick="bunyi('poligami');"
                    >Izin Poligami</a
                  >
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"
                ><span>Permohonan <i class="bi bi-chevron-down"></i></span
              ></a>
              <ul>
                <li>
                  <a href="#asal-usul-anak" onclick="bunyi('asal-usul-anak');"
                    >Asal Usul Anak</a
                  >
                </li>
                <li>
                  <a
                    href="#dispensasi-nikah"
                    onclick="bunyi('dispensasi-nikah');"
                    >Dispensasi Nikah</a
                  >
                </li>
                <li>
                  <a href="#isbat-nikah" onclick="bunyi('isbat-nikah');"
                    >Isbat Nikah atau Pengesahan Nikah</a
                  >
                </li>
                <li>
                  <a
                    href="#pencegahan-nikah"
                    onclick="bunyi('pencegahan-nikah');"
                    >Pencegahan Nikah</a
                  >
                </li>
                <li>
                  <a href="#penetapan-ahli-waris" onclick="bunyi('paw');"
                    >Penetapan Ahli Waris</a
                  >
                </li>
                <li>
                  <a
                    href="#pengangkatan-anak"
                    onclick="bunyi('pengangkatan-anak');"
                    >Pengangkatan Anak</a
                  >
                </li>
                <li>
                  <a href="#perwalian" onclick="bunyi('perwalian');"
                    >Perwalian</a
                  >
                </li>
                <li>
                  <a href="#wali-adhal" onclick="bunyi('wali-adhal');"
                    >Wali Adhal</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a
                class="nav-link scrollto"
                href="#eksekusi"
                onclick="bunyi('eksekusi');"
                >Eksekusi</a
              >
            </li>
            <li>
                <a href="#statistik" class="nav-link scrollto">Statistik</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1>e-Perintara</h1>
            <h2>Informasi Persyaratan Pendaftaran Perkara</h2>
            <h2>Pengadilan Agama Tenggarong</h2>
            <h2>Silahkan klik persyaratan untuk dibacakan</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#gugatan" class="btn-get-started scrollto">Mari Mulai</a>
              <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div
            class="col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <img
              src="<?php echo base_url('assets/img/hero-img.png'); ?>"
              class="img-fluid animated"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <section id="gugatan" class="gugatan">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-title">
            <h2>Gugatan</h2>
          </div>
          <section
            id="cerai"
            class="cerai section-bg"
            onclick="bunyi('cerai');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Cerai</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-cerai">
                    <li class="list-group-item list-cerai">
                      1. Surat Gugatan atau Surat Permohonan.
                    </li>
                    <li class="list-group-item list-cerai">
                      2. Fotokopi KTP dan Kartu Keluarga (apabila alamat KTP
                      tidak sesuai dengan alamat tempat tinggal saat ini, maka
                      melampirkan surat keterangan dari Ketua RT atau Desa atau
                      kelurahan)
                    </li>
                    <li class="list-group-item list-cerai">
                      3. Buku Nikah asli atau duplikat asli buku nikah dari KUA
                      yang menerbitkan buku nikah.
                    </li>
                    <li class="list-group-item list-cerai">
                      4. Alamat lengkap suami dan istri saat ini apabila sudah
                      berpisah tempat tinggal, menyertai Jalan... Gang...
                      Nomor... RT... Desa atau Kelurahan... Kecamatan...
                      Kabupaten....
                    </li>
                    <li class="list-group-item list-cerai">
                      5. Apabila tidak mengetahui alamat suami atau istri,
                      melampirkan surat keterangan gaib dari RT diketahui desa
                      atau lurah.
                    </li>
                    <li class="list-group-item list-cerai">
                      6. Apabila perceraian dikomulasikan dengan Hak Asuh Anak,
                      maka melampirkan Akta Kelahiran anak-anak tersebut.
                    </li>
                    <li class="list-group-item list-cerai">
                      7. Apabila status Pemohon atau Penggugat adalah PNS, TNI,
                      POLRI atau Karyawan Tetap BUMN atau BUMD, maka harus
                      melampirkan surat izin perceraian dahulu.
                    </li>
                    <li class="list-group-item list-cerai">
                      8. Apabila suami atau istri dipenjara, maka melampirkan
                      salinan putusan dari Pengadilan Negeri yang berisi hasil
                      persidangan dan vonis penjara.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="gugat-waris"
            class="gugat-waris section-bg"
            onclick="bunyi('gugat-waris');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Gugat Waris</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-gugat-waris">
                    <li class="list-group-item waris">
                      1. Surat gugatan (Surat Gugatan harus jelas dan disertai
                      dengan posita yang jelas dan terperinci)
                    </li>
                    <li class="list-group-item waris">
                      2. Identitas lengkap semua ahli waris, menyertai: Nama...
                      bin atau binti... Tempat dan tanggal lahir... NIK...
                      Pendidikan... pekerjaan... alamat, Jalan... Gang...
                      Nomor... RT... Desa atau Kelurahan... Kecamatan...
                      Kabupaten....
                    </li>
                    <li class="list-group-item waris">
                      3. Fotokopi buku nikah Pewaris atau almarhum yang memiliki
                      harta.
                    </li>
                    <li class="list-group-item waris">
                      4. Fotokopi KTP dan KK semua ahli waris yang masih hidup
                      (apabila alamat di KTP berbeda dengan alamat tempat
                      tinggal sekarang, maka melampirkan surat keterangan
                      domisili dari RT setempat)
                    </li>
                    <li class="list-group-item waris">
                      5. Fotokopi akta kelahiran ahli waris atau anak-anak dari
                      almarhum yang meninggal (pewaris)
                    </li>
                    <li class="list-group-item waris">
                      6. Fotokopi surat objek waris atau rincian harta lengkap
                      dan jelas, menyertai: lokasi, ukuran, batas-batas, merek
                      atau jenis, tahun pembelian atau didapat atau fotokopi
                      rekening.
                    </li>
                    <li class="list-group-item waris">
                      7. Surat keterangan kewarisan yang dikeluarkan oleh desa
                      atau kelurahan diketahui camat.
                    </li>
                    <li class="list-group-item waris">
                      8. Bagan silsilah keturunan diketahui RT, desa atau lurah,
                      camat.
                    </li>
                    <li class="list-group-item waris">
                      9. Akta kematian dari disdukcapil untuk Pewaris atau
                      almarhum yang memiliki harta dan ahli waris lainnya yang
                      meninggal dunia.
                    </li>
                    <li class="list-group-item waris">
                      10. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="hadhanah"
            class="hadhanah section-bg"
            onclick="bunyi('hadhanah');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Hak Asuh Anak atau Hadhanah</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-hadhanah">
                    <li class="list-group-item hadhanah">1. Surat Gugatan.</li>
                    <li class="list-group-item hadhanah">
                      2. Fotokopi KTP dan Kartu Keluarga.
                    </li>
                    <li class="list-group-item hadhanah">
                      3. Fotokopi akta cerai.
                    </li>
                    <li class="list-group-item hadhanah">
                      4. Fotokopi akta kelahiran anak.
                    </li>
                    <li class="list-group-item hadhanah">
                      5. Identitas lengkap mantan Suami dan mantan istri
                      menyertai: Nama... bin atau binti... Tempat dan tanggal
                      lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item hadhanah">
                      6. Apabilan anak berada pada orang lain selain orangtua
                      kandung, maka menyertakan identitas lengkap orang tersebut
                      menyertai: Nama... bin atau binti... Tempat dan tanggal
                      lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item hadhanah">
                      7. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="harta-bersama"
            class="harta-bersama section-bg"
            onclick="bunyi('harta-bersama');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Harta Bersama atau Harta Gono Gini</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-harta-bersama">
                    <li class="list-group-item hb">
                      1. Surat gugatan (Surat Gugatan harus jelas dan disertai
                      dengan alasan yang jelas dan terperinci)
                    </li>
                    <li class="list-group-item hb">2. Fotokopi akta cerai.</li>
                    <li class="list-group-item hb">
                      3. Fotokopi surat-surat kepemilikan harta atau apabila
                      tidak ada, berikan list secara rinci mengenai harta secara
                      jelas dan lengkap, menyertai: alamat atau lokasi, ukuran,
                      batas-batas, merek atau jenis atau tipe, tahun pembelian
                      atau didapat.
                    </li>
                    <li class="list-group-item hb">
                      4. Identitas lengkap mantan Suami dan mantan istri
                      menyertai: Nama... bin atau binti... Tempat dan tanggal
                      lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item hb">
                      5. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="isbat-cerai"
            class="isbat-cerai section-bg"
            onclick="bunyi('isbat-cerai');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Isbat Nikah Disertai Dengan Perceraian</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-isbat-cerai">
                    <li class="list-group-item list-in-cerai">
                      1. Surat Gugatan atau Surat Permohonan.
                    </li>
                    <li class="list-group-item list-in-cerai">
                      2. Fotokopi KTP dan Kartu Keluarga (apabila alamat KTP
                      tidak sesuai dengan alamat tempat tinggal saat ini, maka
                      melampirkan surat keterangan dari Ketua RT atau Desa atau
                      kelurahan)
                    </li>
                    <li class="list-group-item list-in-cerai">
                      3. Alamat lengkap suami dan istri saat ini apabila sudah
                      berpisah tempat tinggal, menyertai Jalan... Gang...
                      Nomor... RT... Desa atau Kelurahan... Kecamatan...
                      Kabupaten....
                    </li>
                    <li class="list-group-item list-in-cerai">
                      4. Surat Keterangan Tidak Terdaftar dari KUA wilayah
                      menikah siri.
                    </li>
                    <li class="list-group-item list-in-cerai">
                      5. Memberikan informasi mengenai: tanggal nikah siri,
                      daerah tempat melakukan nikah siri: Desa atau Kelurahan...
                      Kecamatan... Kabupaten... Nama imam atau orang yang
                      menikahkan, nama 2 orang saksi, mahar atau mas kawin.
                    </li>
                    <li class="list-group-item list-in-cerai">
                      6. Apabila saat menikah siri status suami atau istri
                      adalah Duda Cerai Hidup atau Janda Cerai Hidup maka
                      melampirkan Fotokopi Akta Cerai yang dikeluarkan oleh
                      Pengadilan, sedangkan apabila statusnya adalah Duda Cerai
                      Mati atau Janda Cerai Mati, maka melampirkan Surat
                      Keterangan Kematian.
                    </li>
                    <li class="list-group-item list-in-cerai">
                      7. Apabila perceraian dikomulasikan dengan Hak Asuh Anak,
                      maka melampirkan Akta Kelahiran anak-anak tersebut.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="nafkah-anak"
            class="nafkah-anak section-bg"
            onclick="bunyi('nafkah-anak');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Nafkah Anak</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-nafkah-anak">
                    <li class="list-group-item nafkah">1. Surat Gugatan.</li>
                    <li class="list-group-item nafkah">
                      2. Fotokopi KTP dan Kartu Keluarga.
                    </li>
                    <li class="list-group-item nafkah">
                      3. Fotokopi akta cerai.
                    </li>
                    <li class="list-group-item nafkah">
                      4. Fotokopi akta kelahiran anak.
                    </li>
                    <li class="list-group-item nafkah">
                      5. Fotokopi slip gaji atau penghasilan ayah kandung.
                    </li>
                    <li class="list-group-item nafkah">
                      6. Identitas lengkap mantan Suami dan mantan istri
                      menyertai: Nama... bin atau binti... Tempat dan tanggal
                      lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item nafkah">
                      7. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="pembatalan-nikah"
            class="pembatalan-nikah section-bg"
            onclick="bunyi('pembatalan-nikah');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Pembatalan Nikah</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-pembatalan-nikah">
                    <li class="list-group-item batal">1. Surat Pemohonan.</li>
                    <li class="list-group-item batal">
                      2. Fotokopi KTP dan KK.
                    </li>
                    <li class="list-group-item batal">
                      3. Fotokopi Buku Nikah, apabila ada 2 buku nikah yang
                      berbeda maka fotokopi keduanya.
                    </li>
                    <li class="list-group-item batal">
                      4. Identitas jelas para pihak menyertai: Nama... bin atau
                      binti... Tempat dan tanggal lahir... NIK... Pendidikan...
                      pekerjaan... alamat, Jalan... Gang... Nomor... RT... Desa
                      atau Kelurahan... Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item batal">
                      5. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="poligami"
            class="poligami section-bg"
            onclick="bunyi('poligami');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Izin Poligami</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-poligami">
                    <li class="list-group-item poli">1. Surat Permohonan.</li>
                    <li class="list-group-item poli">
                      2. Fotokopi KTP dan KK.
                    </li>
                    <li class="list-group-item poli">
                      3. Fotokopi Buku Nikah atau Duplikat Akta Nikah.
                    </li>
                    <li class="list-group-item poli">
                      4. Fotokopi slip gaji atau penghasilan.
                    </li>
                    <li class="list-group-item poli">
                      5. Surat pernyataan berlaku adil dari suami.
                    </li>
                    <li class="list-group-item poli">
                      6. Surat pernyataan tidak keberatan dimadu dari istri
                      pertama.
                    </li>
                    <li class="list-group-item poli">
                      7. Surat keterangan tidak keberatan menjadi istri kedua.
                    </li>
                    <li class="list-group-item poli">
                      8. Fotokopi Surat-surat kepemilikan harta selama menikah
                      dengan istri pertama atau rincian harta secara lengkap dan
                      jelas menyertai: lokasi, ukuran, batas-batas, merek atau
                      jenis atau tipe atau warna, tahun pembelian atau didapat.
                    </li>
                    <li class="list-group-item poli">
                      9. Surat keterangan dari dokter apabila istri pertama
                      mengidap penyakit.
                    </li>
                    <li class="list-group-item poli">
                      10. Identitas lengkap suami, istri pertama dan calon istri
                      kedua menyertai: Nama... bin atau binti... Tempat dan
                      tanggal lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                    <li class="list-group-item poli">
                      11. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <section id="permohonan" class="permohonan">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-title">
            <h2>Permohonan</h2>
          </div>
          <section
            id="asal-usul-anak"
            class="asal-usul-anak section-bg"
            onclick="bunyi('asal-usul-anak');"
          >
            <div class="container aos-int aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Asal Usul Anak</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-asal-usul-anak">
                    <li class="list-group-item asal-usul">
                      1. Surat Permohonan.
                    </li>
                    <li class="list-group-item asal-usul">
                      2. Pihak yang mengajukan adalah orangtua.
                    </li>
                    <li class="list-group-item asal-usul">3. Fotokopi KK.</li>
                    <li class="list-group-item asal-usul">
                      4. Fotokopi Surat Keterangan Kelahiran Anak atau Akta
                      kelahiran.
                    </li>
                    <li class="list-group-item asal-usul">
                      5. Fotokopi buku nikah orangtua.
                    </li>
                    <li class="list-group-item asal-usul">
                      6. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="dispensasi-nikah"
            class="dispensasi-nikah section-bg"
            onclick="bunyi('dispensasi-nikah');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Dispensasi Nikah</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-dispensasi-nikah">
                    <li class="list-group-item dn">1. Surat Permohonan.</li>
                    <li class="list-group-item dn">
                      2. Surat Penolakan dari KUA tempat menikah.
                    </li>
                    <li class="list-group-item dn">
                      3. Surat Keterangan Sehat dari puskemas untuk catin
                      laki-laki dan perempuan yang menerangkan mereka dalam
                      keadaan SEHAT dengan tujuan atau keperluan untuk
                      persyaratan mengajukan dispensasi nikah ke Pengadilan
                      Agama Tenggarong atau untuk keperluan persidangan di
                      pengadilan.
                    </li>
                    <li class="list-group-item dn">
                      4. Apabila catin perempuan dalam keadaan hamil,
                      melampirkan Surat Keterangan Hamil dari Puskesmas.
                    </li>
                    <li class="list-group-item dn">
                      5. Fotokopi KTP dan KK kedua orangtua (kedua calon
                      pengantin)
                    </li>
                    <li class="list-group-item dn">
                      6. Fotokopi KTP atau Kartu Identitas Anak atau akta
                      kelahiran anak (kedua calon pengantin)
                    </li>
                    <li class="list-group-item dn">
                      7. Fotokopi ijazah pendidikan terakhir anak atau Surat
                      keterangan Masih Sekolah dari Sekolah Anak (kedua calon
                      pengantin apabila anak tersebut masih berstatus pelajar
                      dan belum lulus sekolah)
                    </li>
                    <li class="list-group-item dn">
                      8. Pihak yang mengajukan adalah kedua orangtua dari
                      pengantin yang tidak cukup umur.
                      <ul class="list-group">
                        <li class="list-group-item dn-8">
                          Apabila orangtua sudah bercerai, permohonan tetap
                          diajukan oleh kedua orangtua.
                        </li>
                        <li class="list-group-item dn-8">
                          Apabila salah satu orangtua meninggal dunia,
                          melampirkan surat keterangan kematian dari Desa atau
                          Kelurahan atau akta kematian dari CAPIL.
                        </li>
                        <li class="list-group-item dn-8">
                          Apabila salah satu orangtua tidak diketahui
                          keberadaannya, melampirkan surat keterangan atau surat
                          keterangan gaib dari Desa atau Kelurahan yang
                          menerangkan suami atau istri Pemohon sudah tidak
                          menjadi warga desa atau kelurahan tersebut dan tidak
                          diketahui keberadaannya saat ini yang jelas berada di
                          wilayah republik indonesia.
                        </li>
                        <li class="list-group-item dn-8">
                          Apabila kedua orangtua telah meninggal dunia atau
                          dicabut kekuasaannya atau tidak diketahui
                          keberadaanya, permohonan Dispensasi Kawin diajukan
                          oleh Wali Anak, berdasarkan Penetapan Perwalian dari
                          Pengadilan. Apabila tidak ada Penetapan tersebut harus
                          mengajukan Permohonan Perwalian terlebih dahulu.
                        </li>
                      </ul>
                    </li>
                    <li class="list-group-item dn">
                      9. Surat pernyataan komitmen dari orangtua kandung untuk
                      ikut bertangungjawab terkait masalah ekonomi, sosial,
                      kesehatan dan pendidikan anak.
                    </li>
                    <li class="list-group-item dn">
                      10. Apabila calon suami atau calon istri bertatus Duda
                      atau Janda, maka melampirkan fotokopi Akta Cerai atau
                      Surat Kematian.
                    </li>
                    <li class="list-group-item dn">
                      11. Melampirkan Surat Pernyataan Konseling dari Puskesmas
                      Terdekat.
                    </li>
                    <li class="list-group-item dn">
                      12. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                    <li class="list-group-item dn">
                      13. Kedua Orangtua Catin Laki-Laki Dan Perempuan Wajib
                      Hadir Saat Sidang.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="isbat-nikah"
            class="isbat-nikah section-bg"
            onclick="bunyi('isbat-nikah');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Isbat Nikah atau Pengesahan Nikah</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-isbat-nikah">
                    <li class="list-group-item in">1. Surat Pemohonan.</li>
                    <li class="list-group-item in">2. Fotokopi KTP dan KK.</li>
                    <li class="list-group-item in">
                      3. Surat keterangan atau surat pengantar isbat nikah dari
                      KUA wilayah tempat menikah siri yang menerangkan bahwa
                      pernikahan siri tidak terdaftar di KUA.
                    </li>
                    <li class="list-group-item in">
                      4. Pihak yang mengajukan adalah suami dan istri.
                      <ul class="list-group">
                        <li class="list-group-item in-4">
                          Apabila suami atau istri meninggal dunia, maka
                          pasangan yang mengajukan adalah suami atau istri yang
                          masih hidup, dengan mendudukan ahli waris (anak
                          kandung atau orangtua almarhum atau saudara almarhum)
                          sebagai Termohon. Dan akta kematian atau Surat
                          Kematian suami atau istri yang meninggal.
                        </li>
                        <li class="list-group-item in-4">
                          Apabila yang mengajukan adalah anak, wali nikah, atau
                          pihak lain yang berkepentingan, maka mendudukan suami
                          atau istri atau ahli waris lainnya sebagai Termohon.
                          Dan apabila kedua orangtua meninggal mendudukan ahli
                          waris lainya sebagai Termohon dan Surat Kematian
                          orangtua.
                        </li>
                      </ul>
                    </li>
                    <li class="list-group-item in">
                      5. Apabila saat menikah siri status suami atau istri
                      adalah Duda Cerai Hidup atau Janda Cerai Hidup maka
                      melampirkan Fotokopi Akta Cerai yang dikeluarkan oleh
                      Pengadilan, sedangkan apabila statusnya adalah Duda Cerai
                      Mati atau Janda Cerai Mati, maka melampirkan Surat
                      Keterangan Kematian atau akta kematian.
                    </li>
                    <li class="list-group-item in">
                      6. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                    <li class="list-group-item in-01">
                      1. Tanggal Menikah : .....
                    </li>
                    <li class="list-group-item in-01">2. Nama Wali : .....</li>
                    <li class="list-group-item in-01">
                      3. Nama Penghulu : .....
                    </li>
                    <li class="list-group-item in-01">
                      4. Nama Saksi 1 : .....
                    </li>
                    <li class="list-group-item in-01">
                      5. Nama Saksi 2 : .....
                    </li>
                    <li class="list-group-item in-01">6. Mahar : .....</li>
                    <li class="list-group-item in-01">
                      7. Daerah Tempat Menikah : Desa ... Kecamatan ...
                      Kabupaten ....
                    </li>
                    <li class="list-group-item in-01">
                      8. Status saat menikah siri : Suami (Jejaka atau Duda) -
                      Istri (Perawan atau Janda)
                    </li>
                    <li class="list-group-item in">
                      <strong
                        >Persyaratan ini merupakan persyaratan awal, untuk
                        selanjutnya mengikuti petunjuk dan perintah Majelis
                        hakim di dalam persidangan</strong
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="pencegahan-nikah"
            class="pencegahan-nikah section-bg"
            onclick="bunyi('pencegahan-nikah');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Pencegahan Nikah</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-pencegahan-nikah">
                    <li class="list-group-item pn">1. Surat Permohonan.</li>
                    <li class="list-group-item pn">
                      2. Pihak yang mengajukan adalah wali yang tidak setuju.
                    </li>
                    <li class="list-group-item pn">3. Fotokopi KTP.</li>
                    <li class="list-group-item pn">
                      4. Identitas jelas calon pengantin yang ingin dicegah
                      perkawinannya: Nama... bin atau binti... Tempat dan
                      tanggal lahir... NIK... Pendidikan... pekerjaan... alamat,
                      Jalan... Gang... Nomor... RT... Desa atau Kelurahan...
                      Kecamatan... Kabupaten....
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="penetapan-ahli-waris"
            class="penetapan-ahli-waris section-bg"
            onclick="bunyi('paw');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Penetapan Ahli Waris</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-paw">
                    <li class="list-group-item paw">
                      1. Surat permohonan (Surat permohonan harus jelas dan
                      disertai dengan posita yang jelas dan terperinci)
                    </li>
                    <li class="list-group-item paw">
                      2. Identitas lengkap semua ahli waris, menyertai: Nama...
                      bin atau binti... Tempat dan tanggal lahir... NIK...
                      Pendidikan... pekerjaan... alamat, Jalan... Gang...
                      Nomor... RT... Desa atau Kelurahan... Kecamatan...
                      Kabupaten....
                    </li>
                    <li class="list-group-item paw">
                      3. Fotokopi buku nikah Pewaris atau almarhum yang memiliki
                      harta.
                    </li>
                    <li class="list-group-item paw">
                      4. Fotokopi KTP dan KK semua ahli waris yang masih hidup
                      (apabila alamat di KTP berbeda dengan alamat tempat
                      tinggal sekarang, maka melampirkan surat keterangan
                      domisili dari RT setempat)
                    </li>
                    <li class="list-group-item paw">
                      5. Fotokopi akta kelahiran ahli waris atau anak-anak dari
                      almarhum yang meninggal (pewaris)
                    </li>
                    <li class="list-group-item paw">
                      6. Fotokopi surat objek waris atau rincian harta lengkap
                      dan jelas, menyertai: lokasi, ukuran, batas-batas, merek
                      atau jenis, tahun pembelian atau didapat atau fotokopi
                      rekening.
                    </li>
                    <li class="list-group-item paw">
                      7. Surat keterangan kewarisan yang dikeluarkan oleh desa
                      atau kelurahan diketahui camat.
                    </li>
                    <li class="list-group-item paw">
                      8. Bagan silsilah keturunan diketahui RT, desa atau lurah,
                      camat.
                    </li>
                    <li class="list-group-item paw">
                      9. Akta kematian dari disdukcapil untuk Pewaris atau
                      almarhum yang memiliki harta dan ahli waris lainnya yang
                      meninggal dunia.
                    </li>
                    <li class="list-group-item paw">
                      10. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="pengangkatan-anak"
            class="pengangkatan-anak section-bg"
            onclick="bunyi('pengangkatan-anak');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Pengangkatan Anak</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-pengangkatan-anak">
                    <li class="list-group-item angkat">1. Surat Pemohonan.</li>
                    <li class="list-group-item angkat">
                      2. Pihak yang mengajukan adalah orangtua angkat.
                    </li>
                    <li class="list-group-item angkat">
                      3. Fotokopi Kartu Keluarga orangtua Angkat dan orangtua
                      kandung.
                    </li>
                    <li class="list-group-item angkat">
                      4. Fotokopi buku nikah.
                    </li>
                    <li class="list-group-item angkat">
                      5. Fotokopi akta kelahiran anak angkat.
                    </li>
                    <li class="list-group-item angkat">
                      6. Surat keterangan dari Dinas Sosial.
                    </li>
                    <li class="list-group-item angkat">
                      7. Apabila Pemohon tidak memiliki keturunan atau anak
                      karena sakit atau masalah medis, maka melampirkan surat
                      keterangan dari Puskemas yang menerangkan hasil
                      pemeriksaan dan permasalahan medis yang mengakibatkan
                      tidak memeiliki keturunan.
                    </li>
                    <li class="list-group-item angkat">
                      8. Agama anak dan orangtua angkat harus sama-sama islam.
                    </li>
                    <li class="list-group-item angkat">
                      9. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="perwalian"
            class="perwalian section-bg"
            onclick="bunyi('perwalian');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Perwalian</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-perwalian">
                    <li class="list-group-item wali">1. Surat Pemohonan.</li>
                    <li class="list-group-item wali">
                      2. Fotokopi Buku Nikah orangtua anak.
                    </li>
                    <li class="list-group-item wali">
                      3. Fotokopi Kartu Keluarga.
                    </li>
                    <li class="list-group-item wali">
                      4. Fotokopi Akta Kelahiran atau Surat keterangan kelahiran
                      anak.
                    </li>
                    <li class="list-group-item wali">
                      5. Apabila orangtua bercerai melampirkan Akta Cerai dan
                      apabila orangtua meninggal melampirkan surat kematian atau
                      akta kematian.
                    </li>
                    <li class="list-group-item wali">
                      6. Apabila Pemohon sudah menikah, maka melampirkan Surat
                      persetujuan dari suami atau istri yang menyatakan tidak
                      keberatan pasangannya menjadi wali dari anak tersebut.
                    </li>
                    <li class="list-group-item wali">
                      7. Surat pernyataan bersedia menjadi wali dari Pemohon.
                    </li>
                    <li class="list-group-item wali">
                      8. Surat pernyataan tidak akan melakukan kekerasan,
                      penelantaran, ekploitasi terhadap anak dari Pemohon.
                    </li>
                    <li class="list-group-item wali">
                      9. Surat persetujuan dari orangtua anak apabila masih
                      hidup.
                    </li>
                    <li class="list-group-item wali">
                      10. Apabila ada pihak lain atau keluarga yang ingin
                      menjadi wali dari anak tersebut, namun orangtua anak
                      tersebut masih hidup dan keberatan hak kewaliannya diambil
                      maka Surat Permohonan bersifat kontensius dengan
                      mendudukan orangtua kandung anak sebagai Termohon
                      (komulasi antara Gugatan Pencabutan Wali dengan Permohonan
                      Penetapan Wali)
                    </li>
                    <li class="list-group-item wali">
                      11. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section
            id="wali-adhal"
            class="wali-adhal section-bg"
            onclick="bunyi('wali-adhal');"
          >
            <div class="container aos-init aos-animate" data-aos="fade-up">
              <div class="section-title">
                <h2>Wali Adhal</h2>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-group" id="bunyi-wali">
                    <li class="list-group-item adhal">1. Surat Permohonan.</li>
                    <li class="list-group-item adhal">
                      2. Pihak yang mengajukan adalah calon pengantin perempuan.
                    </li>
                    <li class="list-group-item adhal">
                      3. Surat Penolakan dari KUA wilayah tempat menikah.
                    </li>
                    <li class="list-group-item adhal">
                      4. Fotokopi KTP dan KK.
                    </li>
                    <li class="list-group-item adhal">
                      5. Identitas jelas Wali yang tidak setuju Pemohon menikah:
                      Nama ... bin atau binti... Tempat dan tanggal lahir...
                      NIK... Pendidikan... pekerjaan... alamat, Jalan... Gang...
                      Nomor... RT... Desa atau Kelurahan... Kecamatan...
                      Kabupaten....
                    </li>
                    <li class="list-group-item adhal">
                      6. Semua Berkas Asli Dibawa Saat Persidangan.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <section
        id="eksekusi"
        class="eksekusi section-bg"
        onclick="bunyi('eksekusi');"
      >
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div class="section-title">
            <h2>Permohonan Eksekusi</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group" id="bunyi-eksekusi">
                <li class="list-group-item ekse">1. Surat Permohonan.</li>
                <li class="list-group-item ekse">2. Fotokopi KTP.</li>
                <li class="list-group-item ekse">
                  3. Fotokopi salinan putusan.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="statistik" class="section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Statistik Kunjungan</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Hari ini</th>
                                <th>Kemarin</th>
                                <th>Minggu ini</th>
                                <th>Bulan ini</th>
                                <th>Tahun ini</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $today; ?></td>
                                <td><?php echo $yesterday; ?></td>
                                <td><?php echo $sevenDays; ?></td>
                                <td><?php echo $month; ?></td>
                                <td><?php echo $year; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright
          <strong
            ><span
              ><a href="https://topyk27.github.io/">Taufik DWP</a></span
            ></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=AbRyBvQR"></script>
    <script src="<?php echo base_url('assets/js/mine.min.js'); ?>"></script>
  </body>
</html>
