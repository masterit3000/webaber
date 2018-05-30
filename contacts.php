<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



        <header class="page-header" style="background-image: url('public/images/_inner-bg.jpg');">
		<div class="container">
			<ol class="bread">
				<li>
					<a href="index.html"><span>Trang chủ</span></a>
				</li>
				<li class="divider"><span>//</span></li>
				<li>
					<span>Liên Hệ</span>
				</li>
			</ol>		
			<h1>Liên Hệ</h1>
		</div>
	</header>
	<section id="page-contacts">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-6">

							<h2 class="spanned"><span>Giờ hoạt động:</span> 24/7</h2>
							<!-- <p>
								"Taxi Taxila" với màu xanh lá cây đặc trưng đại diện cho Màu xanh cuộc sống, Màu xanh môi trường và Màu xanh an toàn giao thông, nay đã là một thương hiệu quen thuộc, gần gũi với không chỉ người tiêu dùng trong nước mà cả du khách nước ngoài. 
							</p> -->
						</div>					
						<div class="col-lg-12 col-md-12 col-sm-6">
							<ul class="address">
								<li class="large"><span class="fa fa-phone"></span><a href="tel:0914 603 911">0914 603 911</a></li>
								<!-- <li><span class="fa fa-fax"></span>04 39 72 58 88</li> -->
								<li><span class="fa fa-map-marker"></span>234 Phạm Văn Đồng, Cổ nhuế, Bắc Từ Liêm, Hà nội (Cạnh Trụ sở Bộ Công An)</li>
							</ul>			
						</div>
						<div class="col-lg-12 col-sm-12">
							<strong>Mạng xã hội:</strong>
							<ul class="social social-big">
								<li><a href="https://www.facebook.com/mailinhmienbac/" class="social-fb fa fa-facebook"></a></li>
								<li><a href="https://www.youtube.com/channel/UCjWCUzee3VCmtHK-fVg3W6A" class="social-youtube fa fa-youtube"></a></li>
							</ul>
							<a href="get_taxi.html" class="btn btn-yellow btn-lg">Đặt Taxi Trực tuyến</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 contact-form">
										<form action="http://taxila.vn/index.php/index/contacts" class="form" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_delivn_name" value="d72ee191459ed54a322716263bae0e9d" />                                      
						<h3 class="aligncenter">Gửi tin nhắn</h3>
						<label>Tên của bạn <span class="red">*</span></label>
						<input type="text" name="name" placeholder="Tên của bạn" required
								value="">
						<label>E-mail </label>
						<input type="email" name="email" placeholder="E-mail"
								value="">
						<label>Điện thoại </label>
						<input type="tel" name="phone" placeholder="Điện thoại"
								value="">
						<label>Tin nhắn <span class="red">*</span></label>
						<textarea name="message" placeholder="Nhập tin nhắn" required></textarea>
						<div>
							<div class="g-recaptcha" data-sitekey="6LcAZ1cUAAAAAApTa57GHg2jmIaOo6xLF2SneGyv"></div>
						</div>
						<input type="submit" name="send" value="Gửi" class="btn btn-yellow aligncenter btn-lg">
					</form>					
				</div>
			</div>
		</div>
	</section>
    <div id="map" data-lat="21.0465548" data-lng="105.78310169999997" data-zoom="17"></div>
	<section id="partners">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<h4 class="white margin-0">Đối tác</h4>
				<h2 class="white margin-0">và khách hàng</h2>
			</div>
			<div class="col-md-9 col-sm-12">
				<div class="row items">
				    <div class="col-md-5ths col-sm-3 col-ms-4 col-xs-6">
					    <a href="http://megaview.vn/" target="_blank">
					    	<img src="megaview.vn/img/logo.png" alt="Partner" style="max-width: 95%">
					    </a>
				    </div>
				    <div class="col-md-5ths col-sm-3 col-ms-4 col-xs-6">
				    	<a href="http://hyundai.com/" target="_blank">
				    		<img src="public/images/huyndai.png" alt="Partner"  height="70px">
				    	</a>
				    </div>
				</div>				
			</div>				
		</div>
	</div>
</section>
