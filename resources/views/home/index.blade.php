
      <div class="site-mobile-menu">
         <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
               <span class="icon-close2 js-menu-toggle"></span>
            </div>
         </div>
         <div class="site-mobile-menu-body"></div>
      </div>
      <div class="site-blocks-cover overlay" style="background-image: url('kantorbupati1edit.JPG');" data-aos="fade"data-stellar-background-ratio="0.5 " data-aos="fade">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                  <h1 class="mb-0"><a class="text-white h2 mb-0"><strong>MATTAPPA<span class="text-primary">.</span></strong></a></h1>

                  <h8 class="mb-8" data-aos="fade-out">Farm House - Kabupaten Soppeng</h8>
               </div>
            </div>
         </div>
      </div>

<!-- end section -->

<!-- new section -->
<section id="hero" style="color: #fff;">
  <div class="container">
    <div class="">
        <div class="owl-carousel owl-theme">
          <?php foreach($slider as $slider) { ?>
          <div class="item">
            <div class="row">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out" class="slideku">
                  <h3 style="font-family: Gill Sans, sans-serif; color: #
                  ECD940"><?php echo $slider->judul_galeri ?></h3>
                  <h4><?php echo $slider->isi ?></h4>
                  <div class="text-center text-lg-left">
                    <a href="<?php echo $slider->website ?>" class="btn-get-started scrollto"><i class="fa fa-eye"></i> Selengkapnya.. </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="300">
                <div class="slideku">
                  <p class="text-center"><img src="{{ asset('public/upload/image/'.$slider->gambar) }}" class="img img-fluid animated" alt="<?php echo $slider->judul_galeri ?>"></p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
    </div>
  </div>
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="10 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="5" fill="#5cb0ff">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="#2494ff">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#3ba0ff">
    </g>
  </svg>
</section>
<!-- End Hero  -->

<!-- section -->
      <div class="site-section" id="visimisi">
         <div class="container">
            <div class="row">
               <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                  <h2 class="mb-5" data-aos="fade-right">Welcome to {{ $site->namaweb }}</h2>
                  <p><?php echo $site->tentang ?></p>
               </div>
            </div>
          </div>
      </div>

<!-- end section -->

<!-- ======= Struktur Organisasi ======= -->
<!--<section id="struktur-organisasi">
    <div class="container">
      <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-out">
              <h2 class="mb-5">Struktur Organisasi {{ $site->namaweb }}</h2>
      </div> 
        <div class="row">
            <div data-aos="fade-right">
              <img src="struktur-organisasifix.png" style="display: block; width: 100%; margin-left: auto; margin-right: auto; height: 800px">
            </div>
            <br><br><br> 
      </div>
    </div>
</section>
-->
<!-- End About Section -->
<!-- end test awal -->



<!-- Start main -->
<!--<main id="main">-->
 <!-- ======= About Section ======= -->
<!--    <section id="about" class="about">
      <div class="container-fluid container-background">
        <div class="row">
          <div class="col-xl-4 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <div class="kotak kotak-background">
              <div class="container-fluid"><img src="{{ asset('public/upload/image/'.$site->icon) }}" alt   ="{{ $site->namaweb }}" class="img img-fluid img-thumbnail kotak-background">
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h2 align="center">Welcome to {{ $site->namaweb }}</h2>
            <?php echo $site->tentang ?>
          </div>
        </div>
      </div>
    </section>
</main>-->
<!-- End About Section -->

<!-- ======= Struktur Organisasi ======= -->
<!--<section id="struktur-organisasi" class="about container-background">
    <div class="container-fluid">
      <div class="kotak kotak-background col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-right">
              <h2>Struktur Organisasi {{ $site->namaweb }}</h2>
      </div> 
        <div class="row">
            <div data-aos="fade-right">
              <img src="struktur-organisasi.jpg" style="width: 100%; height: 900px; position: relative; overflow: hidden;">
            </div>
            <br><br><br> 
      </div>
    </div>
</section>-->
<!-- End About Section -->


<!-- ================ tes =============== -->
<section class="recent_update_area" id="destination">
    <div class="container">
        <div class="recent_update_inner">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="" data-toggle="tab" href="#visimisi" role="tab" aria-controls="home" aria-selected="true">
                         <span class="glyphicon glyphicon-home"></span>
                        <h6>Apa itu Wisata Alam</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="tab" href="#tujuanfungsi" role="tab" aria-controls="profile" aria-selected="false">
                        <span class="lnr lnr-screen"></span>
                        <h6>Apa itu Wisata Kuliner</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="" data-toggle="tab" href="#sasaran" role="tab" aria-controls="contact" aria-selected="false">
                        <span class="lnr lnr-screen"></span>
                        <h6>kosong</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade  show active" id="visimisi" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-lg-5">
                            <div class="common_style">
                                <p class="line">Tourism Spot Kab. Soppeng</p>
                                <h3>
                                    Apa itu Wisata Alam
                                </h3>
                                <p style="color: #fff"><?php echo $site->pesan_1 ?></p><br />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart_img">
                                <img class="img-fluid" src="img/chart.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tujuanfungsi" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-lg-5">
                            <div class="common_style">
                                <p class="line">Tourism Spot Kab. Soppeng</p>
                                <h3>
                                    Apa itu Wisata Kuliner
                                </h3>
                                <span><p><?php echo $site->pesan_2?></p></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart_img">
                                <img class="img-fluid" src="img/chart.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sasaran" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row recent_update_text align-items-center">
                        <div class="col-lg-5">
                            <div class="common_style">
                                <p class="line">Tourism Spot Kab. Soppeng</p>
                                <h3>
                                    Sasaran
                                </h3>                      
                                <em>
                                  <span style="font-size: 18px; color: #fff"><p>- <?php echo $site->isi_1 ?></p></span>
                                </em>
                                <em>
                                  <span style="font-size: 18px; color: #fff"><p>- <?php echo $site->isi_2 ?></p></span>
                                </em>
                                <em>
                                  <span style="font-size: 18px; color: #fff"><p>- <?php echo $site->isi_3 ?></p></span>
                                </em>
                                <em>
                                  <span style="font-size: 18px; color: #fff"><p>- <?php echo $site->isi_4 ?></p></span>
                                </em>                                
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="chart_img">
                                <img class="img-fluid" src="img/chart.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= end tes ============ -->

<!-- ======= Visi Misi Section ======= -->
<!--<section id="apa-itu-nitrico" class="about  container-background">
    
    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-up">
          <div class="kotak kotak-background"><h2 class="kotak">Visi dan Misi {{ $site->namaweb }}</h2><div>
          <br><br>
    </div>

    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-down">
          <div data-aos="fade-right"><p><h2><?php echo $site->judul_1 ?></h2></p></div>
          <br><br>
    </div>

    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-down">
          <div data-aos="fade-left"><p><h4><?php echo $site->pesan_1 ?></h4></p></div>
          <br><br>
    </div>

    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-down">   
          <div data-aos="fade-right"><p><h2><?php echo $site->judul_2 ?></h2></p></div>
          <br><br>
    </div>

    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-down">   
          <div data-aos="fade-left"><p><h4><?php echo $site->pesan_2 ?></h4></p></div>
          <br><br>
    </div></div>
-->
<!-- ======= Struktur Organisasi Section ======= -->
<!--
    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-up">
        <div class="kotak" data aos="fade-out"><h2>Tujuan dan Fungsi<?php $site->namaweb ?></h2></div>
          <p><?php echo $site->prolog_program ?></p>
          <br><br>
    </div>
-->
<!-- ======= Sasaran DISKOMINFO Section ======= -->
<!--
    <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 justify-content-center" data-aos="fade-up">
        <div class="kotak"><h2 style="font-family: Trebuchet MS, Helvetica, sans-serif">SASARAN DAN TUJUAN<?php $site->namaweb ?></h2></div>
          <p><?php echo $site->judul_3 ?></p>
          <p><?php echo $site->pesan_3 ?></p>
          <br><br>
    </div>

-->
       <!-- START -->
<!--
    <div class="row">
      <?php  
            if($produks) {
            foreach($produks as $produk) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 produk text-center">
                  <figure class="thumnail">
                    <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                      <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="<?php  echo $produk->nama_produk ?>" class="img-fluid img-thumbnail">
                    </a>
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                          <?php  echo $produk->nama_produk ?>
                        </a>
                      </h3>
                    <p class="harga">Rp <?php echo $produk->harga_jual; ?></p>
                  </div>
                  <div class="link-produk">
                    <p>
                      <input type="hidden" name="quantity" id="{{ $produk->id_produk }}" value="1" class="quantity">
                      <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                        <a href="{{ asset('pemesanan?id_produk='.$produk->id_produk) }}" class="btn btn-info btn-sm">
                          <i class="fa fa-shopping-cart"></i> Pesan Produk Ini
                        </a>
                    </p>
                </div>
            </div>
            
         <?php } ?>
          <div class="clearfix"></div>
            <div class="col-md-12">
              <hr>
               {{ $produks->links() }}
              </div>
        <?php }else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
          </div>
          <?php } ?> 
          
    </div>
-->
    <!-- END --> 
    </div>
  
</section>
<!-- End Apa itu Diskominfo? Section -->


<!-- tes 4 -->
<!-- cadangan yaaaa -->
<section class="home-blog-area section-padding30">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-out">
               <h2>Tourist Spot</h2>
               <p>Objek Wisata</p>
            </div>
         </div>
      </div>
        <div class="row">
            <?php  
            if($berita) {
            foreach($berita as $berita) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                    <a href="{{ asset('berita/detail/'.$berita->slug_berita) }}">
                      <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>" class="img-fluid img-thumbnail">
                    </a>
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('berita/read/'.$berita->slug_berita) }}">
                          <?php  echo $berita->judul_berita ?>
                        </a>
                      </h3>
                    <p class="harga"><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 250, $end='...') ?></p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="<?php echo $berita->id_berita;?>" value="1" class="quantity">
                        <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>                       
                      </p>
                  </div>
                  </div> 
            </div>
          <?php }}else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Destinasi tidak ditemukan.</p>
          </div>
          <?php } ?>
          <div class="col-md-12">
            <hr>
            <p class="text-center">
              <a href="{{ asset('berita') }}" class="btn btn-info"><i class="fa fa-newspaper"></i> Lihat Destinasi lainnya...</a>
            </p>
          </div>
        </div>
        </div>
    </div>
</section>
<!-- end tes 4 -->
<section class="home-blog-area section-padding30">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-out">
               <h2>Tourist Spot</h2>
               <p>Objek Wisata</p>
            </div>
         </div>
      </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                   <h3>Wisata Alam</h3>
            </div>
          <div class="col-md-12">
            <p class="alert alert-info">Destinasi tidak ditemukan.</p>
          </div>
          <div class="col-md-12">
            <hr>
            <p class="text-center">
              <a href="{{ asset('berita') }}" class="btn btn-info"><i class="fa fa-newspaper"></i> Lihat Destinasi lainnya...</a>
            </p>
          </div>
        </div>
        </div>
    </div>
</section>
<!-- end tes 4 -->



<!-- ================= tes 2 ============== -->
                <!-- Portfolio -->
<section class="content-section" id="portfolio">
  <div class="container">
    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-out">
            <h2 class="mb-5">LINK APLIKASI</h2>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6">
        <a class="portfolio-item" href="https://soppengkab.go.id/">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">
                Pemkab Soppeng
              </div>
              <p class="mb-0">
                Website resmi Pemerintah Kabupaten Soppeng
              </p>
            </div>
          </div>
          <img class="img-fluid" src="web4.jpg" alt="Pemerintah Kabupaten Soppeng">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="https://www.kominfo.go.id/">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">KOMINFO PUSAT</div>
                <p class="mb-0">Website resmi KOMINFO pusat</p>
            </div>
          </div>
            <img class="img-fluid" src="web2.jpg" alt="KOMINFO">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="https://forms.gle/tL4bDCFKyiUxvkyu5">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">FEEDBACK</div>
                <p class="mb-0">Klik disini untuk kemajuan web ini</p>
            </div>
          </div>
            <img class="img-fluid" src="web1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="https://id.wikipedia.org/wiki/Kabupaten_Soppeng">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">About Soppeng</div>
                <p class="mb-0"></p>
            </div>
          </div>
            <img class="img-fluid" src="web3.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end tes 2 -->


<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>