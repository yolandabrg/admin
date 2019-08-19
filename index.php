<?php 
include 'koneksi.php';
 ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>FGA-CC Kelompok 6</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
                <header class="header_area">
                    <div class="main_menu">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <a class="navbar-brand logo_h" href="#"><font color="white">DIGITAL TALENT SCHOLARSHIP
                                - FRESH GRADUATE ACADEMY (CLOUD COMPUTING)</font></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav menu_nav ml-auto">
                                        <li class="nav-item"><a class="nav-link" href="#">Kelompok 6</a></li> 
                                    </ul>
                                </div> 
                            </div>
                        </nav>
                    </div>
                </header>
                <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h3>Informasi <br />Wisata Kuliner</h3>
							<p>Website ini berisi daftar menu kuliner yang ada pada kota Pontianak</p>
							
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
        	<div class="container">
        		<div class="home_blog_inner">
                <?php  
                $queri="SELECT * FROM tbkuliner order by idkuliner " ;
                $hasil=MySQL_query ($queri);
                while ($data = mysql_fetch_array ($hasil)){
                $id = $data['idkuliner']; ?>
        			<div class="row h_blog_item">
        				<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="admin/img/<?php echo $data['fotokuliner'];?>" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner left">
									<h4><?php echo $data['namakuliner']; ?></h4>
									<p>Lokasi: <?php echo $data['lokasikuliner']; ?>
                                        <br/>Harga Rp.<?php echo $data['hargakuliner']; ?>
                                        <br/><?php echo $data['deskripsikuliner']; ?>
                                    </p>
								</div>
							</div>
						</div>
        			</div>
                    <?php } ?>
        			<!-- <div class="row h_blog_item">
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner right">
									<h4>Kopi Asiang </h4>
									<p>Lokasi: Jl. Merapi, Benua Melayu Darat, Pontianak Sel., Kota Pontianak
                                        <br/>Jam buka: Setiap hari, 04.00 hingga 15.00 WIB
                                        <br/>Harga: Mulai dari 5,000 IDR untuk kopi hitam dan 7,000 IDR untuk kopi susu
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/9-KopiAsiang-By-fredyhadi.jpg" alt="">
							</div>
						</div>
        			</div> -->
        		</div>
        	</div>
            <br>
            <br>
            <br>
            <br>
        </section>
        <!--================End Service Area =================-->
                
                <!--================Footer Area =================-->
                <footer class="footer_area">
                    <div class="container">
                        <div class="row footer_inner">
                            <div class="col-lg-12 col-sm-12">
                                <center class="f_widget ab_widget">
                                    <div class="f_title">
                                        <h1>Anggota Kelompok 6:</h3>
                                    </div>
                                    <h3>Edo Ridha Permana <br>Rosalia Ernawati <br>
                                    Sy. Kamal Baraqbah <br>Yolanda Bru Ginting</h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--================End Footer Area =================-->
                
                
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="js/jquery-3.3.1.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/stellar.js"></script>
                <script src="vendors/lightbox/simpleLightbox.min.js"></script>
                <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
                <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
                <script src="vendors/isotope/isotope.pkgd.min.js"></script>
                <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
                <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
                <script src="js/jquery.ajaxchimp.min.js"></script>
                <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
                <script src="vendors/counter-up/jquery.counterup.js"></script>
                <script src="js/mail-script.js"></script>
                <script src="js/theme.js"></script>
            </body>
        </html>