
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rubel Miah">
	
	<!-- favicon icon -->
	<link rel="shortcut icon" href="public/client/images/logo_clb2.png">

	<title>Ctrl/C Club - Blog</title>

	<!-- common css -->
	<link rel="stylesheet" href="public/client/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/client/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/client/css/magnific-popup.css">
	<link rel="stylesheet" href="public/client/css/owl.carousel.css">
	<link rel="stylesheet" href="public/client/css/owl.theme.css">
	<link rel="stylesheet" href="public/client/css/slicknav.css">
	<link rel="stylesheet" href="public/client/css/style.css">
	<link rel="stylesheet" href="public/client/css/responsive.css">
	<link rel="stylesheet" href="public/client/fonts/fonts/fontawesome-free-5.15.4-web/css/all.css">

	<script>
		 /* BTN return to top */

 		mybutton = document.getElementById("myBtn");
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		function topFunction() {
			document.body.scrollTop = 0; 
			document.documentElement.scrollTop = 0; 
		}	


			
	</script>

	<!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/client/js/html5shiv.js"></script>
    <script src="public/client/js/respond.js"></script>
    <![endif]-->

</head>
<body class="home blog">

	<!--preloader start-->
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
	<!--/preloader end-->

    <!--header start-->
    <header id="header">
		<button onclick="topFunction()" id="myBtn" title="Về đầu trang"><i class="fa fa-arrow-up"></i><span class="search-note">Về đầu trang</span></button>
		<img src="public/client/images/logo_clb2.png" alt="CLB IMG" class="club-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-menu-are pull-left">
                        <div class="navigation-wrapper">
                            <ul class="top-menu text-center">
                                <li><a href="index.php">Trang chủ</a></li>
                                <!--<li><a href="#">Bài viết</a></li>-->
								<li><a href="#footer">Liên hệ</a></li>
                            </ul>                   
                        </div>
                    </div>

					<div class="top-menu-are pull-right">
						<div class="navigation-wrapper">
							<ul class="nav-search">
								<li>
									<form action="" method="get">

										Tìm kiếm blog: <input class="search-input" type="search" name="search" placeholder="Nhập tên bài viết"/>

										<input class="search-btn" type="submit" name="ok" value="search" />

									</form>
								</li>
							</ul>
						</div>
					</div>

					
                    <div class="menu-mobile"></div>
                </div>
            </div>
        </div>
    </header>

	<!-- Return to top -->
    
	
    <!--/header end-->

	
	
	<div class="main-logo text-center">
		<a href="index.php"><img src="public/client/images/logo_clb.png" alt="Ctrl/C logo"></a>
	</div>

	<!--blog start-->
	<div class="container">		
		<!-- TIm kiem -->
		
					
					<?php include "app/controllers/search.php" ?>
					
				
		<!-- hentry -->
		<div id="blog">
			<?php
				if(file_exists($controller))
					include $controller;
			?>  
		</div>          
	</div>
	<!--/blog end-->


	<!--footer start-->
	<footer id="footer">
		<div class="footer-social text-center">
			<a class="facebook" href="https://www.facebook.com/profile.php?id=100072122889027" target="_blank"><i class="fa fa-facebook"></i> <span class="hidden-sm hidden-xs">Facebook</span></a>
			<a class="twitter" href="https://twitter.com/GenshinImpact" target="_blank"><i class="fa fa-twitter"></i> <span class="hidden-sm hidden-xs">Twitter</span></a>
			<a class="google-plus" href="https://www.youtube.com/channel/UC5d2PnKFapcZzq-p_knOURg" target="_blank"><i class="fa fa-youtube"></i> <span class="hidden-sm hidden-xs">Youtube</span></a>
			
		</div><!-- /Footer Social -->
		
		<div class="footer-copy-right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text pull-left">
							<p class="our-contact">CONTACT</p>
							<p class="our-name click-appear-img-in4-1">La Bảo Trân 
								<span class="hidden-img-tran"><img class="hidden-img-team" src="public/client/images/Tran.jpg" alt=""></span></p>
							<p class="our-email">Email: <span>lbtran.tt114@kgc.edu.vn</span></p>
							
							<p class="our-name click-appear-img-in4-2">Nguyễn Văn Thiện 
								<span class="hidden-img-thien"><img src="public/client/images/Thien.jpg" alt="" class="hidden-img-team"></span></p>
							<p class="our-email">Email:  <span>nvthien.tt114@kgc.edu.vn</span></p>
							
							<p class="our-name click-appear-img-in4-3">Nguyễn Thị Kim Tho 
								<span class="hidden-img-tho"><img class="hidden-img-team" src="public/client/images/Tho.jpg" alt=""></span></p>
							<p class="our-email">Email:  <span>ntktho.tt114@kgc.edu.vn</span></p>
							
							<p class="our-name click-appear-img-in4-4">Nguyễn Văn Khởi 
								<span class="hidden-img-khoi"><img src="public/client/images/Khoi.jpg" alt="" class="hidden-img-team"></span></p>
							<p class="our-email">Email:  <span>nvkhoi.tt114@kgc.edu.vn</span></p>
							
							<p class="our-name click-appear-img-in4-5">Nguyễn Phi Thường 
								<span class="hidden-img-phi"><img src="public/client/images/Phi.jpg" alt="" class="hidden-img-team"></span></p>
							<p class="our-email">Email:  <span>npthuong.tt114@kgc.edu.vn</span></p>
							
							
						</div>
						
						<!-- /Copyright Text -->
						
						<div class="wish pull-right">
					        <p>CLUB Ctrl/C</p>
							<i>thank you for coming!</i>
							<p>And remember...</p>
							<i>be your best self.</i>
							<p class="hidden-text">Hey, don't touch me :<</p>
					    </div>

						<!-- Scroll Up -->
					</div>
					
				</div>
				<div class="about-copyright">
					<p class="copyright">Copyright 2021 - Designed by 
						<span class="click-appear">Ctrl/C Club
							<span class="hidden-logo">
								<img src="public/client/images/logo_clb2.png" alt="">
							</span>
					</span> in Kien Giang College</p>
					
				</div>
			</div>
		</div><!-- Footer Copy Right -->
	</footer>
	<!--/footer end-->

	


	<!-- js files -->
	<script type="text/javascript" src="public/client/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="public/client/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="public/client/js/masonry.min.js"></script>
	<script type="text/javascript" src="public/client/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="public/client/js/smoothscroll.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.slicknav.js"></script>
	<script type="text/javascript" src="public/client/js/scripts.js"></script>
</body>

</html>