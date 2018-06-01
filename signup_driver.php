	<header class="page-header" style="background-image: url('public/images/_inner-bg.jpg');">
		<div class="container">
			<ol class="bread">
				<li>
					<a href="index.html"><span>Trang chủ</span></a>
				</li>
				<li class="divider"><span>//</span></li>
				<li>
					<span>Đăng Kí Lái Xe</span>
				</li>
			</ol>		
			<!--<h1>Đăng Kí Lái Xe</h1>-->
		</div>
	</header>
<section id="page-contacts">
		<div class="container">
                    <iframe class="driverform" src="http://taxila.vn/index.php/iframe/driver/aber " style=" border: 0px;overflow: hidden"  scrolling="no" ></iframe>
<!--                	<div class="row">
				<div class="col-lg-6 col-lg-offset-3 contact-form">
					<form  class="form" method="post" accept-charset="utf-8">
						<input type="hidden" name="csrf_delivn_name" value="d72ee191459ed54a322716263bae0e9d" />
						<h3 class="aligncenter">Đăng ký lái xe</h3>
						<label>Họ
							<span class="red">*</span>
						</label>
						<input type="text" name="ho" placeholder="Họ của bạn" required value="">
						<label>Tên
							<span class="red">*</span>
						</label>
						<input type="text" name="ten" placeholder="Tên của bạn" required value="">
						<label>E-mail
							<span class="red">*</span>
						</label>
						<input type="email" name="email" placeholder="E-mail" required value="">
						<label>Điện thoại
							<span class="red">*</span>
						</label>
						<input type="text" name="phone" placeholder="Điện thoại" required value="">
						<label>Địa chỉ
							<span class="red">*</span>
						</label>
						<input type="text" name="address" placeholder="Địa chỉ của bạn" required value="">
						<div>
							<div class="g-recaptcha" data-sitekey="6LcAZ1cUAAAAAApTa57GHg2jmIaOo6xLF2SneGyv"></div>
						</div>
						<input type="submit" name="send" value="Gửi" class="btn btn-yellow aligncenter btn-lg">
					</form>
				</div>
			</div>-->
		</div>
	</section>
<?php
/*
     if($_SERVER['REQUEST_METHOD']==='POST'){
         $ho = $_POST['ho'];
         $name = $_POST['ten'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         $kt= 0;
         // kiem tra du lieu nhap vao
         if(isset($ho)&isset($name)&isset($email)&isset($phone)&isset($address)){
             // kiem tra da nhap du thong tin chua
            if($ho==''){
                echo 'Bạn chưa nhập họ!';
            }else{
                if($name==''){
                    echo 'Bạn chưa nhập tên!';
                } else {
                   if($email==''){
                       echo 'Bạn chưa nhập email!';
                   } else {
                       if($phone== ''){
                           echo 'Bạn chưa nhập số điện thoại';
                       }else{
                           if($address== ''){
                           echo 'Bạn chưa nhập địa chỉ';
                       }else{
                               $kt=1;
                       }
                       }
                   }
                }
            }
         }
     if($kt===1){
         $signup = array(
             'ho' => $ho,
             'ten' => $name,
             'email' => $email,
             'phone' => $phone,
             'adress' => $address,
         );
         $result = signup_driver($signup);
         if($result){
                      echo 'thanks kiu!';
                  } else {
                      echo 'error!';
                  }
     }
}
  */  
?>
	