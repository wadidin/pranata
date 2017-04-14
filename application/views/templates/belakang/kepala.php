<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo" title="Lihat Web" aria-hidden="true">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pranata</b> Indonesia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <img src="<?php echo base_url().'assets/upload/avatar/m_002.png';?>"  class="user-image" alt="User Image">
              <span class="hidden-xs">Wahidin Mahardika</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/upload/avatar/m_002.png';?>" class="img-circle" alt="User Image">
                <p>Wahidin Mahardika</p><hr>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profil/ProfilPengguna/'); ?>" class="btn btn-default btn-flat">Profil Saya</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('belakang/auth/keluar/'); ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  