    <header class="page-header" style="background-image: url('public/images/_inner-bg.jpg');">
		<div class="container">
			<ol class="bread">
				<li>
					<a href="index.html"><span>Trang chủ</span></a>
				</li>
				<li class="divider"><span>//</span></li>
				<li>
					<span>Đặt xe</span>
				</li>
			</ol>		
			<h1>Đặt xe</h1>
		</div>
	</header>
	<section class="form-taxi-short">
		<div class="container">
			<h4 class="yellow aligncenter">Chúng tôi đang đợi điện thoại của bạn:</h4>
			<h3 class="aligncenter">0914 603 911</h3>
			<p class="form-label">Tuy nhiên bạn cũng có thể đặt xe trực tuyến</p>
						<form action="http://taxila.vn/index.php/index/get_taxi" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_delivn_name" value="d72ee191459ed54a322716263bae0e9d" />  
				<div class="menu-types">
		<a href="#" data-value="1" class="type-1">
		4 Chỗ	</a>
		<a href="#" data-value="2" class="type-2">
		7 Chỗ	</a>
		<a href="#" data-value="3" class="type-3">
		4 Chỗ VIP	</a>
		<a href="#" data-value="4" class="type-4">
		7 Chỗ VIP	</a>
		<a href="#" data-value="8" class="type-8">
		Xe ôm	</a>
		<input type="hidden" class="type-value" value="1" name="service_type">

</div>
<div class="row form-with-labels">
	<div class="col-md-12">
		<input type="text" value="" placeholder="Địa điểm đón..." class="" name="from" id="from" style="margin-bottom: 0px" required>
		<span class="fa fa-map-marker"></span>
	</div>
	<div class="col-md-12" style="margin-top: 24px">
		<input type="text" value="" placeholder="Đến..." class="" name="to" id="to" style="margin-bottom: 0px">
		<span class="fa fa-map-marker"></span>
	</div>
	<div class="col-md-12" style="margin-top: 24px">
		<input type="text" value="" required placeholder="Điện thoại" class="" name="phone">
		<span class="fa fa-phone" required></span>
	</div>
	<div class="col-md-12">
		<label style="color: #ffffff;padding-right: 10px">
			<input type="radio" value="0" name="pick_up_time" checked> Đi ngay
		</label>
		<label style="color: #ffffff;padding-right: 10px">
			<input type="radio" value="15" name="pick_up_time"> 15 phút
		</label>
		<label style="color: #ffffff;padding-right: 10px">
			<input type="radio" value="30" name="pick_up_time"> 30 phút
		</label>
		<label style="color: #ffffff;padding-right: 10px">
			<input type="radio" value="45" name="pick_up_time"> 45 phút
		</label>
		<label style="color: #ffffff;padding-right: 10px">
			<input type="radio" value="60" name="pick_up_time"> 1 tiếng
		</label>
	</div>
	<div class="col-md-12">
		<div class="g-recaptcha" data-sitekey="6LcAZ1cUAAAAAApTa57GHg2jmIaOo6xLF2SneGyv"></div>
	</div>
</div>

<input type="submit" value="Đặt xe" class="btn btn-lg btn-white aligncenter">			</form>		</div>
	</section>
	<section id="tariffs">
	<div class="container">
		<!-- <h4 class="yellow">Xem</h4> -->
		<h2 class="h1">Bảng giá</h2>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="item matchHeight vip">
					<div class="image"><img src="public/images/_tariff-1.png" class="full-width" alt="Tariff"></div>
					<h4 class="red">Xe 4 chỗ</h4>
					<p>&nbsp;</p>
					<div class="price"><small style="font-size:50%">từ</small> 6.500<span>/km</span></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="item matchHeight">
					<div class="image"><img src="public/images/_tariff-3.png" class="full-width" alt="Tariff"></div>
					<h4>Xe 7 chỗ</h4>
					<p>&nbsp;</p>
					<div class="price"><small style="font-size:50%">từ</small> 8.500<span>/km</span></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="item matchHeight">
					<div class="image"><img src="public/images/_tariff-2.png" class="full-width" alt="Tariff"></div>
					<h4>Xe riêng</h4>
					<p>&nbsp;</p>
					<div class="price"><small style="font-size:50%">từ</small> 8.000<span>/km</span></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="item matchHeight" style="padding: 10px 25px 20px">
					<div class="image"><img src="public/images/_tariff-1.png" class="full-width" alt="Tariff"></div>
					<h4>Xe Sân bay nội bài</h4>
					<div class="price"><small style="font-size:50%">từ</small>180.000<span> <small style="font-size:50%">chiều đi</small></span></div>
				</div>
			</div>												
		</div>
	</div>
</section>	<section id="download" class="parallax" style="background-image: url('public/images/_download-bg.jpg');">
	<div class="container">
		<h4 class="yellow">Thêm lợi ích</h4>
		<h2 class="h1">Tải ứng dụng</h2>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="items row">
					<div class="col-md-2 visible-md visible-lg"><span class="num">01.</span></div>
					<div class="col-md-10">
						<h5 class="yellow">Đặt xe nhanh</h5>
						<p>Hệ thống tự động đặt xe gần nhất cho bạn.</p>
					</div>
					<div class="col-md-2 visible-md visible-lg"><span class="num">02.</span></div>
					<div class="col-md-10">
						<h5 class="yellow">Dễ sử dụng</h5>
						<p>Thao tác đơn giản và cả bằng giọng nói để đặt xe.</p>
					</div>						
				</div>
			</div>
			<div class="col-md-4 col-md-push-4 col-sm-12">
				<div class="items items-right row">
					<div class="col-md-10">
						<h5 class="yellow">Theo dõi lộ trình</h5>
						<p>Bạn có thể theo dõi lộ trình chuyến đi qua điện thoại hoặc chia sẻ lộ trình cho người thân.</p>
					</div>
					<div class="col-md-2 visible-md visible-lg"><span class="num">03.</span></div>
					<div class="col-md-10">
						<h5 class="yellow">Phần thưởng cho những chuyến đi</h5>
						<p>Đi càng nhiều càng thưởng lớn, bạn luôn nhận được các điẻm thưởng cho những chuyên đi miến phí. </p>
					</div>						
					<div class="col-md-2 visible-md visible-lg"><span class="num">04.</span></div>
				</div>				
			</div>				
			<div class="col-md-4 col-md-pull-4 col-sm-12">
				<div class="mob">
					<a target="_blank" href="https://play.google.com/store/apps/details?id=taxila.com.user_order">
						<img src="public/images/_app-google.png" alt="App">
					</a>
					<a target="_blank" href="https://itunes.apple.com/us/app/taxila/id1367804291?ls=1&amp;mt=8">
						<img src="public/images/_app-apple.png" alt="App">
					</a>
				</div>
			</div>

		</div>
	</div>
</section>	<section id="partners">
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