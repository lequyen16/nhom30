<?php

require 'ketnoi.php';
if (isset($_POST['do-register'])) {
    $masv = $_POST['masv'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $gioitinh = $_POST['gioitinh'];
    $sothich = $_POST['sothich'];
    $quoctich = $_POST['quoctich'];
    $ghichu = $_POST['ghichu'];

    if (!empty($masv)&&!empty($hoten)&&!empty($email)&&!empty($gioitinh)&&!empty($sothich)&&!empty($quoctich)&&!empty($ghichu)) {
        //insert sữ liệu
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `member` (`masv`, `hoten`, `email`, `gioitinh`, `sothich`, `quoctich`, `ghichu`)
        VALUES('$masv', '$hoten', '$email', '$gioitinh', '$sothich', '$quoctich', '$ghichu')";

        if ($conn->query($sql)===TRUE) {
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Mã sinh viên đã tồn tại"); window.location="register.php";</script>';
        }
    } else {
        echo '<script language="javascript">alert("Bạn cần nhập thông tin đầy đủ"); window.location="register.php";</script>';
    }
}

?>
  