<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Page Title -->
<title>Kampus III pondokgede | STMIK Pranata Indonesia</title>

  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header layer-overlay" data-bg-img="<?php echo base_url(); ?>assets/depan/images/home/slider/slider-3.jpg">
      <div class="container pt-70 pb-70">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-8 xs-text-center">
              <h2 class="text-white mt-10">Kampus III Pondokgede</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb white mt-10 text-right xs-text-center">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Kontak</li>
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
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Ada pertanyaan ?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Hubungi Kami</h4>
                <h6 class="text-gray">Telp: (021) - 880 675 7</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Alamat</h4>
                <h6 class="text-gray">Jl. Pondok Gede No. 21, Jatirahayu, Pondokmelati.<br>Kota Bekasi, Jawa Barat, 17411.</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">info@pranataindonesia.ac.id</h6>
              </div>
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

