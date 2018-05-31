
<header class="page-header" style="background-image: url('public/images/_inner-bg.jpg');">
    <div class="container">
        <ol class="bread">
            <li>
                <a href="index.html"><span>Trang chủ</span></a>
            </li>
            <li class="divider"><span>//</span></li>
            <li>
                <span>Liên hệ</span>
            </li>
        </ol>		
        <h1>Liên hệ</h1>
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
                            <li class="large"><span class="fa fa-phone"></span><a href="tel:0914 603 911">0911.131.172</a></li>
                            <!-- <li><span class="fa fa-fax"></span>04 39 72 58 88</li> -->
                            <li><span class="fa fa-map-marker"></span>409 Phạm Văn Đồng, phường 11 Quận Bình Thạnh TP HCM</li>
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
                <iframe src="http://taxila.vn/index.php/iframe/contact/aber " style="width: 100%; height: 800px; border: 0px;overflow: hidden"  scrolling="no" ></iframe>
<!--                <form  class="form" method="post" accept-charset="utf-8">
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
                </form>					-->
            </div>
            <?php
            /*
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                $kt = 0;
                // kiem tra du lieu nhap vao
                if (isset($name) & isset($email) & isset($phone) & isset($message)) {
                    // kiem tra da nhap du thong tin chua
                    if ($name == '') {
                        echo 'Plese enter name!';
                    } else {
                        if ($email == '') {
                            echo 'Plese enter email!';
                        } else {
                            if ($phone == '') {
                                echo 'Plese enter phone';
                            } else {
                                if ($message == '') {
                                    echo 'Plese enter message';
                                } else {
                                    $kt = 1;
                                }
                            }
                        }
                    }
                }
                if ($kt === 1) {
                    $contact = array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $email,
                        'message' => $message,
                    );
                    $result = contact($contact);
                    if ($result) {
                        echo 'thanks kiu!';
                    } else {
                        echo 'error!';
                    }
                }
            }
             * 10.8211312,106.6932844
             */
            ?>
        </div>
    </div>
</section>
<div id="map" data-lat="10.8211312" data-lng="106.6932844" data-zoom="17"></div>
	