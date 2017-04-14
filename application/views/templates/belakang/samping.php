<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/upload/avatar/m_002.png'?>"  class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Wahidin Mahardika</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>



      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Pencarian ...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="header">MAIN NAVIGATION</li>
        <?php //echo '<pre>';print_r($this->router); die; ?>
          <li class="<?=($this->router->method==="dashboard")?"active":"not-active"?>"> 
            <a href="<?php echo base_url('belakang/dashboard/'); ?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          </li>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Postingan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-edit"></i> Postingan Baru</a></li>
            <li><a href="#"><i class="fa fa-file-text"></i> Semua Postingan</a></li>
            <li><a href="#"><i class="fa fa-file-text"></i> Diterbitkan</a></li>
            <li><a href="#"><i class="fa fa-file-text"></i> Draft</a></li>
          </ul>
        </li>
        </li>

        <li><a href="#"><i class="fa fa-files-o"></i> Kategori</a></li>

        <li><a href="#"><i class="fa fa-file"></i> Komentar</a></li>

        <li class="header">DATA CONFIGURATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user-circle"></i> <span>Mahasiswa</span></a></li>        
            <li><a href="#"><i class="fa fa-address-book"></i> <span>Dosen dan Staff</span></a></li>
            <li><a href="#"><i class="fa fa-id-badge"></i> <span>Alumni</span></a></li>
            <li>
              <a href="#"><i class="fa fa-users"></i> Pengguna
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?=($this->router->method==="DataPengguna")?"active":"not-active"?>">
                <a href="<?php echo base_url();?>general/pengguna/DataPengguna/"> <i class="fa fa-user-secret"></i> <span>Data User</span></a>
                <li class="<?=($this->router->method==="DataGroupPengguna")?"active":"not-active"?>">
                <li><a href="<?php echo base_url();?>general/pengguna_group/DataGroupPengguna/"><i class="fa fa-users"></i> <span>Group User</span></a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="header">GENERAL CONFIGURATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-edit"></i> Setting Web</a></li>
            <li><a href="#"><i class="fa fa-vcard"></i> Setting Profile Saya</a></li>
            <li><a href="#"><i class="fa fa-file-text"></i> Setting Password Saya</a></li>
          </ul>
        </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  