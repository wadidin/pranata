<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="list-inline font-13 sm-text-center mt-5">
              <li>
              <li class="text-white">|</li>
                <a class="text-white" href="#" title="Informasi Kuliah di Pranata Indonesia">Kuliah di PI</a>
              </li>
              <li class="text-white">|</li>
              <li>
                <a class="text-white" href="#" title="Media Pranata Indonesia">Media</a>
              </li>
              <li class="text-white">|</li>
                <a class="text-white" href="http://portal.pranataindonesia.ac.id/" title="Sistem Informasi Akademik">Portal SIAP</a>
              <li class="text-white">|</li>
            </ul>
          </div>



          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
                <li class="mb-0 pb-0"></li>

                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                    <ul class="dropdown">
                      <li>
                        <div class="search-form-wrapper">
                          <form method="get" class="mt-10">
                            <input type="text" onfocus="if(this.value =='Pencarian ...') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Pencarian ...'; }" value="Pencarian ..." id="searchinput" name="s" class="">
                            <label><input type="submit" name="submit" value=""></label>
                          </form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>

            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/depan/images/logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="javascript:void(0)" class="font-12 text-gray text-uppercase"> Hubungi Kami : </a>
                  <h5 class="font-14 m-0"> (021) - 880 675 7</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="javascript:void(0)" class="font-12 text-gray text-uppercase"> Kami Buka Setiap : </a>
                  <h5 class="font-13 text-black m-0"> Sen-Sab | 07:00-21:30 </h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

