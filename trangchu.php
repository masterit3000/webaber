
<div id="homepage-block-2" class="bgMove" style="background-image: url('public/images/_homepage-1-bg.jpg');">
    <div class="container">
        <!-- <div class="dialog hidden-lg hidden-md">
                <h4 class="white">Gọi TAXI ngay</h4>
                <h3 class="yellow"><span class="fa fa-phone"></span> 0914 603 911</h3>
        </div> -->
        <h2>Đặt xe Trực tuyến</h2>

        <form method="post" accept-charset="utf-8" action="<?php echo $linkapp; ?>">
            <input type="hidden" name="csrf_delivn_name" value="d72ee191459ed54a322716263bae0e9d" />
            <!-- <div class="row forms" style="margin-bottom: 0px">
                    <div class="col-md-5ths">
                            <input type="text" value="" placeholder="Địa điểm đón..." required class="" name="from" id="from" style="margin-bottom: 0px">
                            <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="col-md-5ths">
                            <input type="text" value="" placeholder="Đến..." class="" name="to" id="to" style="margin-bottom: 0px">
                            <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="col-md-5ths">
                            <input type="text" value="" placeholder="Điện thoại" required class="" name="phone" style="margin-bottom: 0px">
                            <span class="fa fa-phone"></span>
                    </div>
                    <div class="col-md-5ths">
                            <input type="text" value="" placeholder="Thời gian" class="" name="pick_up_time" id="pick_up_time" style="margin-bottom: 0px">
                            <span class="fa fa-calendar"></span>
                    </div>
                    <div class="col-md-5ths">
                            <select style="height: 49px;width: 100%;margin-bottom: 0px" name="service_type">
                                    <option value="">Loại xe</option>
                                    <option value="1">4 Chỗ</option>
                                    <option value="2">7 Chỗ</option>
                                    <option value="3">4 Chỗ VIP</option>
                                    <option value="4">7 Chỗ VIP</option>
                                    <option value="8">Xe ôm</option>
                            </select>
                            <span class="fa fa-car"></span>
                    </div>
            </div> -->
            <input type="submit" class="btn btn-yellow btn-bg-dark btn-lg" value="Đặt xe">
        </form>
        <div id="large-image" style="margin-top: 133px">
            <img src="public/images/_car-big-2.png" alt="Taxi">
            <div class="dialog">
                <span class="fa fa-phone"></span>
                <h4 class="white">Gọi xe ngay</h4>
                <h3 class="yellow">0911 131 172</h3>
            </div>
        </div>
    </div>
</div>
<div class="homepage-block-yellow-2">
</div>
<?php
include './dichvu.php';
?>
<section id="download" class="parallax" style="background-image: url('public/images/_download-bg.jpg');">
    <div class="container">
        <h4 class="yellow">Thêm lợi ích</h4>
        <h2 class="h1">Tải ứng dụng</h2>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="items row">
                    <div class="col-md-2 visible-md visible-lg">
                        <span class="num">01.</span>
                    </div>
                    <div class="col-md-10">
                        <h5 class="yellow">Đặt xe nhanh</h5>
                        <p>Hệ thống tự động đặt xe gần nhất cho bạn.</p>
                    </div>
                    <div class="col-md-2 visible-md visible-lg">
                        <span class="num">02.</span>
                    </div>
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
                    <div class="col-md-2 visible-md visible-lg">
                        <span class="num">03.</span>
                    </div>
                    <div class="col-md-10">
                        <h5 class="yellow">Phần thưởng cho những chuyến đi</h5>
                        <p>Đi càng nhiều càng thưởng lớn, bạn luôn nhận được các điẻm thưởng cho những chuyên đi miến phí. </p>
                    </div>
                    <div class="col-md-2 visible-md visible-lg">
                        <span class="num">04.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-4 col-sm-12">
                <div class="mob">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=aber.com.driver_order">
                        <img src="public/images/_app-google.png" alt="App">
                    </a>
                    <a target="_blank" href="https://itunes.apple.com/us/app/aber/id1386737171?mt=8">
                        <img src="public/images/_app-apple.png" alt="App">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="car-block">
    <div class="car-right animation-block">
        <img src="public/images/_car-big-side.png" alt="Car">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4 class="yellow">Dành cho lái xe</h4>
                <h2 class="h1">Bạn có xe hoặc chưa có xe?</h2>
            </div>
            <div class="col-md-6">
                <p>Bạn là lái xe của hãng nào, điều đó không quan trọng! Tham gia vào sàn Taxi chung này bạn có nhiều cơ hội:</p>

                <ul class="check two-col strong">
                    <li>Tăng thêm thu nhập</li>
                    <li>Giảm chi phí cho những km rỗng</li>
                    <li>Bảng giá theo hãng taxi của bạn</li>
                    <li style="padding-left:  10px;">Tự chủ Thời gian làm việc</li>
                    <li style="padding-left:  10px;">Nguồn khách dồi dào</li>
                    <!-- <li>Nhiều yêu cầu đặt xe</li> -->
                </ul>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=aber.com.driver_order" style="width: 49%;float: left;margin-right: 5px;">
                    <img src="public/images/_app-google.png" alt="Android" style="height: 50px;max-width: 100%">
                </a>
                <a target="_blank" href="https://itunes.apple.com/us/app/aber/id1386737171?mt=8" style="width: 49%;float: left">
                    <img src="public/images/_app-apple.png" alt="Ios" style="height: 50px;max-width: 100%">
                </a>
                <br/>
                <br/>
                <br/>
                <a target="_blank" href="./index.php?page=signup_driver" class="btn btn-yellow btn-lg btn-white visible-xs" style="width:100%">Đăng ký lái xe 1</a>
                <a target="_blank" href="./index.php?page=signup_driver" class="btn btn-yellow btn-lg btn-white hidden-xs" style="width:73%">Đăng ký lái xe</a>

            </div>
        </div>
    </div>
</section>
<section id="testimonials">
    <hr class="lg">
    <div class="container hidden">
        <h4 class="yellow">Khách hàng hài lòng</h4>
        <h2 class="h1">Đánh giá cao</h2>

        <div class="swiper-container row" id="testimonials-slider">
            <div class="swiper-wrapper">
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat. Maecenas suscipit tellus sit amet augue placerat
                                fringilla a id lacus. Fusce tincidunt in leo lacinia condimentum.</p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Anastasia Stone</div>
                            <img src="public/images/_client-1.jpg" alt="Client">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Suspendisse nec arcu sed nibh lacinia pretium. Phasellus eros ligula, mattis id rutrum non, eleifend vitae lacus.
                            </p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Steven Rashford</div>
                            <img src="public/images/_client-4.jpg" alt="Client">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur dapibus pulvinar,
                                sapien eros sodales ante, euismod aliquet nulla metus a mauris. </p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Patrick James</div>
                            <img src="public/images/_client-5.jpg" alt="Client">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat. Maecenas suscipit tellus sit amet augue placerat
                                fringilla a id lacus. Fusce tincidunt in leo lacinia condimentum.</p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Anastasia Stone</div>
                            <img src="public/images/_client-1.jpg" alt="Client">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Suspendisse nec arcu sed nibh lacinia pretium. Phasellus eros ligula, mattis id rutrum non, eleifend vitae lacus.
                            </p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Steven Rashford</div>
                            <img src="public/images/_client-4.jpg" alt="Client">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 swiper-slide">
                    <div class="inner matchHeight">
                        <div class="text">
                            <p>Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur dapibus pulvinar,
                                sapien eros sodales ante, euismod aliquet nulla metus a mauris. </p>
                        </div>
                        <div class="quote">
                            <span class="fa fa-quote-left"></span>
                            <div class="name">Patrick James</div>
                            <img src="public/images/_client-5.jpg" alt="Client">
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows">
                <a href="#" class="arrow-left fa fa-caret-left"></a>
                <a href="#" class="arrow-right fa fa-caret-right"></a>
            </div>
        </div>
    </div>
</section>
<div id="homepage-banners">
    <div class="container">
        <div class="row">
            <a href="#" class="col-md-4 col-sm-4 col-ms-4">
                <img src="public/images/11111111.jpg" class="full-width" alt="Banner">
            </a>
            <a href="#" class="col-md-4 col-sm-4 col-ms-4">
                <img src="public/images/130.jpg" class="full-width" alt="Banner">
            </a>
            <a href="#" class="col-md-4 col-sm-4 col-ms-4">
                <img src="public/images/22222.jpg" class="full-width" alt="Banner">
            </a>
        </div>
    </div>
</div>
