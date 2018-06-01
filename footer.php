<?php 
    $about = about();
    $adress = $about['adress'];
    $phone = $about['phone'];
    $email = $about['email'];
    $intro = $about['intro'];
?>
<?php
include_once './doitac.php';
?>
<section id="block-footer">
<div class="container">
		<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-ms-6">
					<h4>Giới thiệu</h4>
                                        <p class="text-justify"><?php echo $intro; ?></p>
					<div class="social-small social-yellow">
						<a href="https://www.facebook.com/dichvugoixe/" class="fa fa-facebook"></a>
						<a href="https://www.youtube.com/channel/UCAmlmfkKDx3JM6h7ui5h_yg/featured" class="fa fa-youtube"></a>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 hidden-md hidden-sm hidden-xs hidden-ms">
					<h4>Liên kết trang</h4>
					<div class="row">
						<div class="col-md-5">
							<ul class="nav navbar-nav">
								<!-- <li class="active">
									<a href="#">Đặt xe</a>
								</li> -->
								<li class="active">
									<a href="index.php?page=services">Dịch vụ</a>
								</li>
<!--								<li>
									<a href="index.php?page=pricelist">Bảng giá</a>
								</li>-->
                                                                <li>
									<a href="index.php?page=contacts">Liên hệ</a>
								</li>
								<li>
									<a href="index.php?page=download">Cài đặt ứng dụng</a>
								</li>

							</ul>
						</div>
						<div class="col-md-5">
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php?page=signup_driver">Đăng ký lái xe</a>
								</li>
								<!-- <li><a href="http://taxila.vn/index.php/index#testimonials">Đánh giá cao</a></li> -->
								
								<li>
									<a href="index.php?page=HDSD">Hướng dẫn sử dụng</a>
								</li>
								<li>
									<a href="index.php?page=HDSDLX">Hướng dẫn cho lái xe</a>
								</li>
							</ul>
						</div>
					</div>

			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-ms-6">
					<h4>Liên hệ</h4>
					<p>
						<span class="yellow">Địa chỉ:</span> <?php echo $adress; ?></p>

					<ul class="address">
						<li>
							<span class="fa fa-phone"></span>0911.131.172
						</li>
						<li>
							<span class="fa fa-tty"></span>02822 53 58 50
						</li>
						<li>
							<span class="fa fa-envelope"></span>
							<a href="mailto:lienhe@aber.com.vn">lienhe@aber.com.vn</a>
						</li>
						<!-- <li><span class="fa fa-fax"></span>04 39 72 58 88</li> -->
					</ul>
			</div>	
		</div>
	</div>
</section>

<footer>
	<div class="container">
            <a target="_blank" href="index.php">Aber</a> 2017 © All Rights Reserved <a href="#">Điều khoản sử dụng</a>
		<a href="#" class="go-top hidden-xs hidden-ms"></a>
	</div>
</footer>
	<script>var base_href = 'index.html';</script>
	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script src="public/js/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="public/js/plugins.min.js"></script>
	<script type="text/javascript" src="public/js/scripts.js"></script>
	<script type="text/javascript" src="public/js/autocomplete/jquery.bootcomplete.js"></script>
      
	<script type="text/javascript">
//		$(function () {
//            $('#from').bootcomplete({
//		        url:'http://taxila.vn/index.php/index/suggess_address',
//		        minLength : 2
//		    });
//		    $('#to').bootcomplete({
//		        url:'http://taxila.vn/index.php/index/suggess_address',
//		        minLength : 2
//		    });
//	    });
	</script>


<!-- Mirrored from taxila.vn/index.php/index/get_taxi by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 16:48:48 GMT -->
