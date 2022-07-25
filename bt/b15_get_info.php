<?php

$ten = $_POST['ten'];
echo 'Tên vừa nhập là: ' . $ten . '<br/>';

$gioi_tinh = $_POST['gioi_tinh'];
echo 'Giới tính: ' . $gioi_tinh . '<br/>';

$email = $_POST['email'];
echo 'Email: ' . $email . '<br/>';

$mat_khau = $_POST['mat_khau'];
echo 'Mật khẩu: ' . $mat_khau . '<br/>';

$ngay_sinh = $_POST['ngay_sinh'];
echo 'Ngày sinh: ' . $ngay_sinh . '<br/>';

$so_thich = $_POST['so_thich'];
switch($so_thich){
    case 1:
        $hobby = 'Nghe nhạc'; break;
    case 2:
        $hobby = 'Đọc sách'; break;
    case 3:
        $hobby = 'Xem phim'; break;
    default:
        $hobby = 'error';
}
echo 'Sở thích: ' . $hobby . '<br/>';

$file = $_POST['chon_anh'];
echo $file;

$cam_nghi = $_POST['share_feeling'];
echo 'góp ý: ' . $cam_nghi . '<br/>';