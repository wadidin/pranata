<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Page Title -->
<title>STMIK Pranata Indonesia | Link and Match</title>

  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url(); ?>assets/depan/images/home/slider/slider-3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Beranda Mahasiswa</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo base_url(); ?>">Kuliah di PI</a></li>
                <li class="active text-gray-silver">Beranda Mahasiswa</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="col-md-3">
            <div class="sidebar sidebar-sidebar mt-sm-30">
              <div class="wiget">
                <h5 class="widget-title line-bottom"><b>Menu Calon Mahasiswa</b></h5>
                <ul class="list-divider list-border">
                  <li><a href="http://portal.pranataindonesia.ac.id/siap/">SIAP Mahasiswa</a></li>
                  <li><a href="<?php echo base_url('tentang/strukturpi/kemahasiswaan'); ?>">Kemahasiswaan</a></li>
                  <li><a href="<?php echo base_url('mahasiswa/hak'); ?>">Himpunan Aturan</a></li>
                  <li><a href="<?php echo base_url('mahasiswa/kaldik'); ?>">Kalender Akademik</a></li>
                  <li><a href="<?php echo base_url('mahasiswa/ukm'); ?>">Unit Kegiatan Mahasiswa</a></li>                  
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p class="mb-20">
              <p align="justify">Selamat datang para mahasiswa baru <b>STMIK Pranata Indonesia!</b> Di sini kalian akan belajar, berkembang, bersosialisasi dan pada akhirnya lulus mendapatkan gelar ahlimadya atau sarjana <b>STMIK Pranata Indonesia</b>. Sebelum mendapatkan gelar tersebut, ada beberapa hal penting yang perlu diperhatikan.</p><br>

              <p align="justify">Sebagai mahasiswa baru, yang perlu dilakukan semasa kuliah:</p><br>
              <ol type="1">
                <li>Isi data diri di SIAP</li>
                  <p align="justify">Para mahasiswa baru diwajibkan untuk mengisi isian Sistem Akademik secara online untuk daftar kontrak semester. Pengisian ini harus dilakukan setiap awal semester. Mahasiswa baru dapat berkonsultasi dengan dosen bimbingan untuk melakukan kontrak kredit semester.</p><br>
                <li>Buka mata untuk pengumuman baru</li>
                  <p align="justify">Setiap semester, pasti ada pengumuman baru, entah kalendar akademik baru atau pengumuman nilai-nilai mata pelajaran. Maka, seringlah memeriksa akun siap mahasiswa yang telah di sediakan.</p>
                <li>Kenali lingkungan kampus</li>
                  <p align="justify">Di <b>STMIK Pranata Indonesia!</b> ada banyak ruang kelas dan beberapa lab komputer. Kenali kampus dengan menghafalkan ruang kelas tempat mahasiswa baru belajar.</p>
                <li>Daftarkan diri di Perpustakaan</li>
                  <p align="justify"><i>Books are where knowledge is located</i>. Pinjam buku, browsing, makan atau sekadar bersantai di perpustakaan dapat dijadikan tempat aktivitas yang menarik.</p>
                <li>Ikuti kegiatan kemahasiswaan</li>
                  <p align="justify">Di lingkungan <b>STMIK Pranata Indonesia!</b> terdapat organisasi senat mahasiswa, himpunan mahasiswa jurusan, dan unit kemahasiswaan. Ikuti salah satu kegiatan tersebut untuk melatih <i>soft skill</i> kalian.</p>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Hubungi Kami Sekarang !</h3>
            
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nama <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Masukkan Nama" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Masukkan Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subjek <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Masukkan Subjek">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Telp/Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Masukkan Telp/Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Pesan</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Masukkan Pesan"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Tunggu sebentar ...">Kirim pesan kamu</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
            <div 
              id="google-map3"
              data-address="STMIK Pranata Indonesia"
              data-popupstring-id="#popupstring1"
              class="map-canvas autoload-map"
              data-mapstyle="default"
              data-height="400"
              data-latlng="-6.2516313,107.0132789,21z/data=!4m13!1m7!3m6!1s0x0:0x0!2zNsKwMTUnMDYuMSJTIDEwN8KwMDAnNDguNSJF!3b1!8m2!3d-6.251683!4d107.013483!3m4!1s0x0:0xbc9804da2691c34b!8m2!3d-6.2516835!4d107.0133973"
              data-title="sample title"
              data-zoom="20"
              data-marker="<?php echo base_url(); ?>assets/depan/images/map-marker.png">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
              <div class="text-center">
                <h3>STMIK Pranata Indonesia</h3>
                <p>Jl. Cut Mutia Raya No.28, Margahayu, Bekasi Tim., Kota Bks, Jawa Barat 17113</p>
              </div>
            </div>

             <!-- Google Map Javascript Codes -->
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
            <script src="<?php echo base_url(); ?>assets/depan/js/google-map-init.js"></script>
         
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

