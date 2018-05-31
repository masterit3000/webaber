
<?php 

$page= isset($_GET['page'])? $_GET['page'] : "trangchu";
//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
$linkapp = "";

//do something with this information
if( $iPod || $iPhone || $iPad){
    //browser reported as an iPhone/iPod touch -- do something here
    $linkapp = "https://itunes.apple.com/us/app/aber/id1386737171?mt=8";
}else{
    //browser reported as an iPad -- do something here
    $linkapp = "https://play.google.com/store/apps/details?id=aber.com.driver_order";
}

?>
<div id="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-9">
                <div class="contacts">
                    <div>
                        <span class="fa fa-phone"></span>
                        <a href="tel:0911131172" style="color:#ffffff">0911 131 172</a>
                    </div>
                    <!-- <div class="visible-lg visible-md"><span class="fa fa-fax"></span> 04 39 72 58 88</div> -->
                    <div class="visible-lg visible-md">
                        <span class="fa fa-map-marker"></span> 409 Phạm Văn Đồng, phường 11 Quận Bình Thạnh TP HCM
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-3">
                <div class="social social-small visible-lg">
                    <a href=" #" class="fa fa-twitter"></a>
                    <a href=" #" class="fa fa-facebook"></a>
                    <a href=" #" class="fa fa-instagram"></a>
                    <a href=" #" class="fa fa-google-plus"></a>
                    <a href=" #" class="fa fa-pinterest"></a>
                </div>
                <a href="<?php echo $linkapp; ?>" class="btn btn-xs btn-white pull-right">Đặt xe trực tuyến</a>
            </div>
        </div>
    </div>
</div>
<div class="nav-wrapper">
    <nav class="navbar navbar-static navbar-affix" style="z-index: 100;" data-spy="affix">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="logo" href=" index.html">
                    <img src="public/images/logo-inner.png" alt="Taxila Booking" width="70px">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if ($page==''||$page=='trangchu') {echo 'class="current_page_item"';}?> >
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li <?php if ($page==''||$page=='intro') {echo 'class="current_page_item"';}?>>
                        <a href="index.php?page=intro">Giới Thiệu</a>
                    </li>

                    <li <?php if ($page==''||$page=='services') {echo 'class="current_page_item"';}?>>
                        <a href="index.php?page=services">Dịch vụ</a>
                    </li>
                    <li <?php if ($page==''||$page=='contacts') {echo 'class="current_page_item"';}?> >
                        <a href="index.php?page=contacts">Liên hệ</a>
                    </li>
                    <li <?php if ($page==''||$page=='signup') {echo 'class="current_page_item"';}?> >
                        <a href="index.php?page=signup">Đăng ký</a>
                    </li>
                    <li <?php if ($page==''||$page=='signup_driver') {echo 'class="current_page_item"';}?> >
                        <a  href="index.php?page=signup_driver">Đăng ký lái xe</a>
                    </li>
                </ul>
            </div>			</div>
    </nav>
</div>


