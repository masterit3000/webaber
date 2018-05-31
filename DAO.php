<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './openDB.php';
include './closeDB.php';

function about() {

    $about = array(
        "adress" => '409 Phạm Văn Đồng, phường 11 Quận Bình Thạnh TP HCM',
        "phone" => '0911.131.172',
        "email" => 'contacts@aber.com.vn',
        "intro" => 'Dựa trên nền tảng công nghệ từ Cộng hoà liên bang Đức, đội ngũ phát triển của Aber là những người Việt trẻ ở thế hệ 8x, 9x, với những khát khao và việc xây dựng một ứng dụng kết nối nhu cầu đi lại, công tác, vận chuyển và hơn nữa là hướng dẫn du lịch. Aber sẽ xây dựng nền tảng tốt nhất với mong muốn gia tăng trải nghiệm của khách hàng, bằng sự tận tâm và nụ cười của người dẫn đường – những tài xế Aber, với khách hàng không chỉ là di chuyển, chúng tôi gọi đó là “những chuyến xe chở niềm vui và nụ cười”. Đi sau nhưng cam kết tạo nên nhiều hơn những trải nghiệm khác biệt dành cho tài xế và hành khách, đó là điều tuyệt vời mà đội ngũ Aber Việt Nam đang hướng đến. Bên cạnh đó, ABER còn là trách nhiệm của chúng tôi đối với đội ngũ tài xế…',
    );
    return $about;
}

//function about (){
//    $cnn = openDB();
//    $sql = "select * from `abouts`";
//    $result = mysqli_query($cnn, $sql);
//    $about = array();
//    if( $row = mysqli_fetch_array($result)){
//        $adress = $row['adress'];
//        $phone = $row ['phone'];
//        $email = $row ['email'];
//        $intro = $row ['short_intro'];
//        $about = array (
//            "adress" => $adress,
//            "phone" => $phone,
//            "email" => $email,
//            "intro" => $intro,
//        );
//        return $about;
//    }
//    return null;
//}
function contact($contactform) {
    $cnn = openDB();
    $sql = "insert into `contacts` (`name`,`email`,`phone`,`message`) value (?,?,?,?)";
    $stm = $cnn->prepare($sql);
    $name = $contactform['name'];
    $email = $contactform['email'];
    $phone = $contactform['phone'];
    $message = $contactform['message'];
    $stm->bind_param("ssis", $name, $email, $phone, $message);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}

function signup($signup) {
    $cnn = openDB();
    $sql = "insert into `signup` (`ho`,`ten`,`email`,`phone`,`password`) value (?,?,?,?,?)";
    $stm = $cnn->prepare($sql);
    $ho = $signup['ho'];
    $ten = $signup['ten'];
    $email = $signup['email'];
    $phone = $signup['phone'];
    $password = $signup['password'];
    $stm->bind_param("sssss", $ho, $ten, $email, $phone, $password);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}

function signup_driver($signup) {
    $cnn = openDB();
    $sql = "insert into `signup_driver` (`ho`,`ten`,`email`,`phone`,`adress`) value (?,?,?,?,?)";
    $stm = $cnn->prepare($sql);
    $ho = $signup['ho'];
    $ten = $signup['ten'];
    $email = $signup['email'];
    $phone = $signup['phone'];
    $adress = $signup['adress'];
    $stm->bind_param("sssis", $ho, $ten, $email, $phone, $adress);
    $result = $stm->execute();
    if ($stm->error) {
        echo$stm->error;
    }
    $stm->close();
    $cnn->close();
    return $result;
}
