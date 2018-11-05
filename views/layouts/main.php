<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Portal Informatika</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/template-scripts.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body class="size-1140">
<?php $this->beginBody() ?>
 <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>KONTAK INFO: <strong>XXX-XXX-XXX</strong> | <strong>umn.ac.id/test</strong></p>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-3 ">
                  <img src="img/logo.png" style="width: 100%;padding-top: 15px;">
               </div>
               <div class="top-nav s-12 l-9" id="cssmenu">
                  <p class="nav-text">NAVIGASI</p>
                  <ul class="right">
                     <li class="active-item"><a href="index.php">Beranda</a></li>
                     <li class='has-sub'><a href='tentang.php'><span>Tentang</span></a>
                        <ul>
                          <li><a href='#section-one'><span>Sejarah</span></a></li>
                           <li><a href='#section-two'><span>Visi Misi</span></a></li>
                          <li class='has-sub'><a href='#'><span>Kompetensi</span></a>
                             <ul>
                                <li><a href='#a'><span>Kompetensi Unggulan</span></a></li>
                                <li class='last'><a href='#a'><span>Kompetensi Tambahan</span></a></li>
                             </ul>
                          </li>
                          <li><a href='#a'><span>Akreditasi</span></a></li>
                          <li><a href='#a'><span>Mitra</span></a></li>
                        </ul>
                      </li>
                      <li class='has-sub'><a href='#a'><span>Kurikulum</span></a>
                        <ul>
                          <li><a href='#a'><span>Mata Kuliah</span></a></li>
                          <li class='has-sub'><a href='#a'><span>Peminatan</span></a>
                             <ul>
                                <li><a href='#a'><span>Game Development</span></a></li>
                                <li><a href='#a'><span>Cyber Security</span></a></li>
                                <li><a href='#a'><span>Oracle</span></a></li>
                                <li><a href='#a'><span>CISCO</span></a></li>
                                <li class='last'><a href='#a'><span>SAP</span></a></li>
                             </ul>
                          </li>
                          <li><a href='#a'><span>Program Internasional</span></a></li>
                        </ul>
                      </li>
                      <li class='has-sub'><a href='dosen.php'><span>Dosen</span></a>
                        <ul>
                          <li><a href='#a'><span>List Dosen</span></a></li>                          
                          <li><a href='#a'><span>Detail Dosen</span></a></li>
                        </ul>
                      </li>
                      <li class='has-sub'><a href='#a'><span>Berita & Acara</span></a>
                        <ul>
                          <li><a href='#a'><span>List Berita</span></a></li>                          
                          <li><a href='#a'><span>List Acara</span></a></li>
                        </ul>
                      </li>
                     <li><a href="#a">Fasilitas</a></li>
                     
                  </ul>
               </div>
            </div>
         </nav>

      </header> 
          <div class="container" >
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
 

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
