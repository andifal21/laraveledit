<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myproduk->nav_profil();

//timestamp
$date = new DateTime();
echo $date->format('d-m-Y : H:i:s');
?>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ asset('/') }}"><span>
          <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="DISKOMINFO" style="min-height: 50px; width: auto;">
        </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ asset('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block" >
        <ul>
          
            <li class="active"><a href="{{ asset('/')}}#hero">Beranda</a></li>
            <!--<li class="drop-down"><a href="{{ asset('profil') }}review">Profil</a>-->
            <!--  <ul>-->
                <?php foreach($nav_profil as $nav_profil) { ?>
                <li><a href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}">Profil</a></li>
                <?php } ?>
            <!--  </ul> -->
            <li><a href="{{ asset('/') }}#visimisi">Visi Misi</a></li>
              
            </li>
           
            <!--<li class="drop-down"><a href="{{ asset('produk') }}">Produk</a>
              <ul>
                <?php foreach($nav_kategori_produk as $nkp) { ?>
                <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}"><?php echo $nkp->nama_kategori_produk ?></a></li>
                <?php } ?>
                <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                <li><a href="{{ asset('produk') }}">Semua Produk</a></li>
              </ul>
            </li>-->

            <li class="drop-down"><a href="#">Galeri</a>
              <ul>
                
                <li><a href="{{ asset('video') }}">Video Youtube</a></li>
                <li><a href="{{ asset('galeri') }}">Galeri Gambar</a></li>
                <!--<li><a href="{{ asset('download') }}">Unduhan File</a></li>-->
              </ul>
            </li>
            <li><a href="{{ asset('kontak') }}">Kontak</a></li>
            <li><a><?php
                      $tanggal= mktime(date("m"),date("d"),date("Y"));
                      echo "".date("d/M/Y", $tanggal)."</b> ";
                      date_default_timezone_set('Asia/Jakarta');
                      ?>  
            </a></li> 
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><!-- ======= Hero Section ======= -->