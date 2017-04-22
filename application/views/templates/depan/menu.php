<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <!-- MENU -->
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-2 border-bottom-theme-colored-2px">
        <div class="container">
          <nav id="menuzord-right" class="menuzord menuzord-responsive yellow">
             <a class="menuzord-brand pull-left flip" href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>assets/depan/images/logo.png" alt="STMIK Pranata Indonesia">
            </a>
            <ul class="menuzord-menu menuzord-indented scrollable">

              <!-- HALAMAN HOME -->
              <li class="<?php echo active_link_controller('home'); ?>"><a href="<?php echo base_url(); ?>">Home </a></li>
              <!-- ./HALAMAN HOME -->

              <!-- HALAMAN TENTANG PI -->
              <li><a href="javascript:void(0)">Tentang </a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                    <h5><a href="javascript:void(0)" class="text-black">Selayang Pandang</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li class="<?php echo active_link_controller('sejarah'); ?>"><a href="<?php echo base_url('tentang/selayangpandang/sejarah/'); ?>" class="text-black"><i class="fa fa-book"></i> Sejarah</a></li>
                        <li class="<?php echo active_link_controller('identitas'); ?>"><a href="<?php echo base_url('tentang/selayangpandang/identitas/'); ?>" class="text-black"><i class="fa fa-star-o"></i> Identitas</a></li>
                        <li class="<?php echo active_link_controller('visimisi'); ?>"><a href="<?php echo base_url('tentang/selayangpandang/visimisi/'); ?>" class="text-black"><i class="fa fa-star"></i> Visi dan Misi</a></li>
                        <li class="<?php echo active_link_controller('landasan'); ?>"><a href="<?php echo base_url('tentang/selayangpandang/landasan/'); ?>" class="text-black"><i class="fa fa-leanpub"></i> Landasan Hukum</a></li>
                    </div>
                    <div class="col3">
                    <h5><a href="javascript:void(0)" class="text-black">Struktur PI</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li class="<?php echo active_link_controller('strukturorganisasi'); ?>"><a href="<?php echo base_url('tentang/strukturpi/strukturorganisasi/'); ?>" class="text-black"><i class="fa fa-user"></i> Struktur Organisasi</a></li>
                        <li class="<?php echo active_link_controller('dosendanstaff'); ?>"><a href="<?php echo base_url('tentang/strukturpi/dosendanstaff/'); ?>" class="text-black"><i class="fa fa-users"></i> Dosen dan Staff</a></li>
                        <li class="<?php echo active_link_controller('kemahasiswaan'); ?>"><a href="<?php echo base_url('tentang/strukturpi/kemahasiswaan/'); ?>" class="text-black"><i class="fa fa-user-circle"></i> Kemahasiswaan</a></li>
                        <li class="<?php echo active_link_controller('ketuayayasan'); ?>"><a href="<?php echo base_url('tentang/strukturpi/ketuayayasan/'); ?>" class="text-black"><i class="fa fa-vcard"></i> Ketua Yayasan</a></li>
                        <li class="<?php echo active_link_controller('ketuapi'); ?>"><a href="<?php echo base_url('tentang/strukturpi/ketuapi/'); ?>" class="text-black"><i class="fa fa-vcard"></i> Ketua PI</a></li>
                        <li class="<?php echo active_link_controller('kajur'); ?>"><a href="<?php echo base_url('tentang/strukturpi/kajur/'); ?>" class="text-black"><i class="fa fa-user-md"></i> Ketua Jurusan</a></li>
                        <li class="<?php echo active_link_controller('pusatadministrasi'); ?>"><a href="<?php echo base_url('tentang/strukturpi/pusatadministrasi/'); ?>" class="text-black"><i class="fa fa-money"></i> Pusat Administrasi</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <h5><a href="javascript:void(0)" class="text-black">Lain-Lain</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li class="<?php echo active_link_controller('kampusI'); ?>"><a href="<?php echo base_url('tentang/lainlain/kampusI'); ?>" class="text-black"><i class="fa fa-map-marker"></i> Kampus I - Cut Mutia</a></li>
                        <li class="<?php echo active_link_controller('kampusII'); ?>"><a href="<?php echo base_url('tentang/lainlain/kampusII'); ?>" class="text-black"><i class="fa fa-map-pin"></i> Kampus II - Pengasinan</a></li>
                        <li class="<?php echo active_link_controller('kampusIII'); ?>"><a href="<?php echo base_url('tentang/lainlain/kampusIII'); ?>" class="text-black"><i class="fa fa-map-signs"></i> Kampus III - Pondok Gede</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <!-- ./HALAMAN TENTANG PI -->

              <!-- HALAMAN AKADEMIK -->
              <li><a href="javascript:void(0)">Akademik </a>
                <ul class="dropdown list-dashed menuzord-menu">
                  <li class="<?php echo active_link_controller('ka'); ?>"><a href="<?php echo base_url('akademik/ka/'); ?>">Komputer Akuntansi (D3)</a></li>
                  <li class="<?php echo active_link_controller('mi'); ?>"><a href="<?php echo base_url('akademik/mi/'); ?>">Manajemen Informatika (D3)</a></li>
                  <li class="<?php echo active_link_controller('si'); ?>"><a href="<?php echo base_url('akademik/si/'); ?>">Sistem Informasi (S1)</a></li>
                  <li class="<?php echo active_link_controller('ti'); ?>"><a href="<?php echo base_url('akademik/ti/'); ?>">Teknik Informatika (S1)</a></li>
                </ul>
              </li>
              <!-- ./HALAMAN AKADEMIK -->

              <!-- HALAMAN PENERIMAAN -->
              <li><a href="javascript:void(0)">Penerimaan Mahasiswa Baru </a>
                <ul class="dropdown list-dashed menuzord-menu">
                  <li><a href="#">Informasi Penerimaan Mahasiswa Baru</a></li>
                  <li><a href="#">Formulir Pendaftaran</a></li>
                  <li><a href="#">Pendaftar</a></li>
                </ul>
              </li>
              <!-- ./HALAMAN PENERIMAAN -->

              <!-- HALAMAN INFORMASI PI -->
              <li><a href="javascript:void(0)">Informasi PI </span></a>
                <ul class="dropdown list-dashed menuzord-menu">
                  <li><a href="javascript:void(0)">Pengguna </a>
                    <ul class="dropdown list-dashed menuzord-menu">
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

              <!-- HALAMAN MAHASISWA -->
              <li><a href="javascript:void(0)">Mahasiswa </a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                    <h5><a href="javascript:void(0)" class="text-black">Aturan Akademik</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li class="<?php echo active_link_controller('hak'); ?>"><a href="<?php echo base_url('mahasiswa/hak/'); ?>" class="text-black"><i class="fa fa-bookmark"></i> Himpunan Aturan Akademik</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-calendar"></i> Kalender Akademik</a></li>
                    </div>
                    <div class="col3">
                    <h5><a href="javascript:void(0)" class="text-black">Ekstrakurikuler</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li><a href="#" class="text-black"><i class="fa fa-user"></i> Unit Kegiatan Mahasiswa</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <h5><a href="javascript:void(0)" class="text-black">Prestasi</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li><a href="#" class="text-black"><i class="fa fa-map-marker"></i> Prestasi Mahasiswa</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-marker"></i> Seni dan Budaya</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-pin"></i> Olahraga</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-signs"></i> Daftar Beasiswa</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <h5><a href="javascript:void(0)" class="text-black">Lain-Lain</a></h5><hr>
                      <ul class="list-unstyled list-dashed menuzord-menu">
                        <li><a href="#" class="text-black"><i class="fa fa-map-signs"></i> Webmail PI</a></li>
                        <li><a href="http://portal.pranataindonesia.ac.id/" class="text-black" title="Sistem Informasi Akademik"><i class="fa fa-map-marker"></i> Portal SIAP</a></li>
                        <li><a href="http://forlap.dikti.go.id/" class="text-black"><i class="fa fa-map-signs"></i> Forlap Dikti</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-marker"></i> E-Books</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-pin"></i> E-Library</a></li>
                        <li><a href="#" class="text-black"><i class="fa fa-map-signs"></i> E-Learning</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <!-- ./HALAMAN MAHASISWA -->

              <!-- HALAMAN KONTAK -->
              <li class="<?php echo active_link_controller('kontak'); ?>"><a href="<?php echo base_url('kontak/'); ?>">Hubungi Kami </a></li>
              <!-- ./HALAMAN KONTAK -->

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ./MENU -->

  