<?php
$menu = [

  [
    "title"=> "Dashboard",
    "icon" => "ft-home",
    "link" => base_url('Home'),
    "role" => "public"
  ],
  [
    "title"=> "User",
    "icon" => "ft-user",
    "link" => base_url('User'),
    "role" => "public"
  ],
  [
    "title"=> "Data klinik",
    "icon" => "la la-hospital-o",
    "link" => base_url('Klinik'),
    "role" => "public"
  ],
  [
    "title"=> "Data Dokter",
    "icon" => "la la-stethoscope",
    "link" => base_url('Dokter'),
    "role" => "public"
  ],
  [
    "title"=> "Tentang Klinik",
    "icon" => "la la-hospital-o",
    "link" => base_url('Tentang_klinik'),
    "role" => "KLINIK"
  ],
  [
    "title"=> "Logout",
    "icon" => "ft-log-out",
    "link" => base_url('Login/logout'),
    "role" => "public"
  ],
];
?>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-="true" data-img="<?= base_url('assets/') ?>images/backgrounds/02.jpg">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">     
      <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
        <h3 class="brand-text">ADMIN</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content" >
      <ul class="navigation navigation-main" id="" data-menu="m">
    <?php foreach ($menu as $value) {
      if($value['role'] != 'public' && $value['role'] == $this->session->userdata('role')){
        ?>  
        <li class=""><a href="<?=$value['link']?>"><i class="<?=$value['icon']?>"></i><span class="menu-title" data-i18n=""><?=$value['title']?></span></a>
        </li>
        <?php }elseif($value['role'] == 'public'){?>
        <li class=""><a href="<?=$value['link']?>"><i class="<?=$value['icon']?>"></i><span class="menu-title" data-i18n=""><?=$value['title']?></span></a>
        </li><?php }} ?>
      <!--   <li class=""><a href="<?= base_url('Klinik') ?>"><i class="la la-hospital-o"></i><span class="menu-title" data-i18n="">Data klinik</span></a>
        </li>
        <li class=""><a href="<?= base_url('Dokter') ?>"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="">Data Dokter</span></a>
        </li>
        <li class=""><a href="<?= base_url('Tentang_klinik') ?>"><i class="la la-hospital-o"></i><span class="menu-title" data-i18n="">Tentang Klinik</span></a>
        </li>
        <li class=""><a href="<?= base_url('Login/logout') ?>"><i class="ft-log-out"></i><span class="menu-title" data-i18n="">Logout</span></a>
        </li> -->
      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>