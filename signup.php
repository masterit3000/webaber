<header class="page-header" style="background-image: url('public/images/_inner-bg.jpg');">
    <div class="container">
        <ol class="bread">
            <li>
                <a href="index.html"><span>Trang chủ</span></a>
            </li>
            <li class="divider"><span>//</span></li>
            <li>
                <span>Đăng Kí</span>
            </li>
        </ol>		
        <h1>Đăng kí</h1>
    </div>
</header>
<section id="page-contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 contact-form">
                <form  class="form" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_delivn_name" value="d72ee191459ed54a322716263bae0e9d" />                                                                                                   
                    <h3 class="aligncenter">Đăng ký</h3>
                    <label>Họ <span class="red">*</span></label>
                    <input type="text" name="ho" placeholder="Họ của bạn" 
                           required value="">
                    <label>Tên <span class="red">*</span></label>
                    <input type="text" name="ten" placeholder="Tên của bạn" 
                           required value="">
                    <label>E-mail <span class="red">*</span></label>
                    <input type="email" name="email" placeholder="E-mail" 
                           required value="">
                    <label>Điện thoại <span class="red">*</span></label>
                    <input type="text" name="phone" placeholder="Điện thoại" 
                           required value="">
                    <label>Mật khẩu <span class="red">*</span></label>
                    <input type="password" name="password" placeholder="Mật khẩu" 
                           required value="">
                    <label>Nhập lại mật khẩu <span class="red">*</span></label>
                    <input type="password" name="re_password" placeholder="Nhập lại mật khẩu" 
                           required value="">
                    <div>
                        <div class="g-recaptcha" data-sitekey="6LcAZ1cUAAAAAApTa57GHg2jmIaOo6xLF2SneGyv"></div>
                    </div>
                    <input type="submit" name="send" value="Gửi" class="btn btn-yellow aligncenter btn-lg">
                </form>				</div>
        </div>
    </div>
</section>
<?php
     if($_SERVER['REQUEST_METHOD']==='POST'){
         $ho = $_POST['ho'];
         $name = $_POST['ten'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $password = $_POST['password'];
         $re_password = $_POST['re_password'];
         $kt= 0;
         // kiem tra du lieu nhap vao
         if(isset($ho)&isset($name)&isset($email)&isset($phone)&isset($password)&isset($re_password)){
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
                           if($password== ''){
                           echo 'Bạn chưa nhập password';
                       }else{
                           if($re_password!=$password){
                              echo 'Vui lòng nhập chính xác password';
                           } else {
                               $kt=1;
                           }
                              
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
             'password' => md5($password),
         );
         $result = signup($signup);
         if($result){
                      echo 'thanks kiu!';
                  } else {
                      echo 'error!';
                  }
     }
}
    
?>
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
                            <img src="public/images/logo.png" alt="Partner" style="max-width: 95%">
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
