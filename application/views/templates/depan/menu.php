<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <!-- MENU -->
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-2 border-bottom-theme-colored-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord menuzord-responsive yellow">
            <ul class="menuzord-menu menuzord-indented scrollable"">

              <!-- HALAMAN HOME -->
              <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url(); ?>">Home </a></li>
              <!-- ./HALAMAN HOME -->

              <!-- HALAMAN TENTANG PI -->
              <li><a href="javascript:void(0)">Tentang PI </span></a>
                <ul class="dropdown">
                  <li><a href="javascript:void(0)">Selayang Pandang </a>
                    <ul class="dropdown">
                      <li><a href="#">Sejarah</a></li>
                      <li><a href="#">Identitas</a></li>
                      <li><a href="#">Visi dan Misi</a></li>
                      <li><a href="#">Landasan Hukum</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)">Struktur PI </a>
                    <ul class="dropdown">
                      <li><a href="#">Struktur Organisasi</a></li>
                      <li><a href="#">Dosen dan Staff</a></li>
                      <li><a href="#">Kemahasiswaan</a></li>
                      <li><a href="#">Ketua Yayasan</a></li>
                      <li><a href="#">Ketua PI</a></li>
                      <li><a href="#">Ketua Jurusan</a></li>
                      <li><a href="#">Pusat Administrasi</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)">Lain-Lain </a>
                    <ul class="dropdown">
                      <li><a href="#">Kampus I - Cut Mutia</a></li>
                      <li><a href="#">Kampus II - Pengasinan</a></li>
                      <li><a href="#">Kampus III - Pondok Gede</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- ./HALAMAN TENTANG PI -->

              <!-- HALAMAN AKADEMIK -->
              <li><a href="javascript:void(0)">Akademik </a>
                <ul class="dropdown">
                  <li><a href="#">Komputer Akuntansi (D3)</a></li>
                  <li><a href="#">Manajemen Informatika (D3)</a></li>
                  <li><a href="#">Sistem Informasi (S1)</a></li>
                  <li><a href="#">Teknik Informatika (S1)</a></li>
                </ul>
              </li>
              <!-- ./HALAMAN AKADEMIK -->

              <!-- HALAMAN PENERIMAAN -->
              <li><a href="javascript:void(0)">Penerimaan Mahasiswa Baru </a>
                <ul class="dropdown">
                  <li><a href="#">Informasi Penerimaan Mahasiswa Baru</a></li>
                  <li><a href="#">Formulir Pendaftaran</a></li>
                  <li><a href="#">Pendaftar</a></li>
                </ul>
              </li>
              <!-- ./HALAMAN PENERIMAAN -->

              <!-- HALAMAN INFORMASI PI -->
              <li><a href="javascript:void(0)">Informasi PI </span></a>
                <ul class="dropdown">
                  <li><a href="javascript:void(0)">Pengguna </a>
                    <ul class="dropdown">
                      <li><a href="#">Mahasiswa</a></li>
                      <li><a href="#">Dosen dan Staff</a></li>
                      <li><a href="#">Alumni</a></li>
                    </ul>
                      <li><a href="#">Berita</a></li>
                      <li><a href="#">Agenda</a></li>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Wisuda</a></li>
                      <li><a href="#">Lowongan Kerja</a></li>
                  </li>
                </ul>
              </li>

              <!-- HALAMAN MAHASISW -->
              <li><a href="javascript:void(0)">Mahasiswa </span></a>
                <ul class="dropdown">
                  <li><a href="javascript:void(0)">Aturan Akademik </a>
                    <ul class="dropdown">
                      <li><a href="#">Himpunan Aturan Akademik</a></li>
                      <li><a href="#">Kalender Akademik</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)">Ekstrakurikuler </a>
                    <ul class="dropdown">
                      <li><a href="#">Unit Kegiatan Mahasiswa</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)">Prestasi </a>
                    <ul class="dropdown">
                      <li><a href="#">Prestasi Mahasiswa</a></li>
                      <li><a href="#">Seni dan Budaya</a></li>
                      <li><a href="#">Olahraga</a></li>
                    </ul>
                  <li><a href="#">Daftar Beasiswa</a>
                  </li>
                </ul>
              </li>
              <!-- ./HALAMAN TENTANG PI -->

              <!-- HALAMAN KONTAK -->
              <li class="<?php echo activate_menu('kontak'); ?>"><a href="<?php echo base_url('kontak/'); ?>">Hubungi Kami </a></li>
              <!-- ./HALAMAN KONTAK -->

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ./MENU -->

  