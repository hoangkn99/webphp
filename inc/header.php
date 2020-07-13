<?php session_start();
if(isset($_REQUEST["thoatdn"]))
  {
  session_destroy();
  echo"<script>location.href='index.php';</script>";

  }
 
?>
<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('TITLE', 'HOME');
require_once DOC_ROOT.'/baithuchanh3/common/php/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?=insertHeadInfo();?>
    <?=insertCSS('/baithuchanh3/top/css/style.css');?>
    <?=insertCSS('/baithuchanh3/css/style.css');?>
</head>
<body>
    <div>
        <div class="Top">
            <div class="Top-content">
            <div class="Top-content-logo">
                <img src="img/LogotypeKvitka.gif" alt="logo">
            </div>
            <div class="Top-content-infor">
                <P class="Green-color Bold">(08) 9891234</P>
                <P>Giờ mở cửa: 8:00 - 22:00 mỗi ngày</P>
                <div>
                    <img src="img/IconMail.gif" alt="mail">
                    <a href="#" class="Green-color">ktphuong@hcmuns.edu.vn</a>
                </div>
                <div>
                    <img src="img/online0.gif" alt="iconhoa">
                    <a href="#" class="Green-color">hoadep.com.vn</a>
                </div>
            </div>
            <?php
            if(isset($_SESSION["tenkh"]))
                include_once("thoatdangnhap.php");
            else
                include_once("dangnhap.php");  
	        ?>
            <div class="Top-content-payment Text-center">
                <p class="Green-color Bold">Có thể thanh toán bằng</p>
                <div>
                    <img src="img/IconCardMasterCard.gif" alt="ico1"> 
                    <img src="img/IconCardVisaE.gif" alt="ico2"> 
                    <img src="img/IconCardVisa.gif" alt="ico3"> 
                </div>
                <?php
                if(isset($_SESSION["giohang"]))
                {
                    $giohang=$_SESSION["giohang"];
                    if(count($giohang)>0)
                    {
                        $sl=0;
                        $tongtien=0;
                        for($i=1;$i<count($giohang);$i++)
                        {
                           $h=$giohang[$i];
                            $sl=$sl+$h[2];
                            $tongtien+=$h[2]*$h[3];

                        }
                        echo "Số lượng: ".$sl;
                        echo" Tổng tiền: " .number_format($tongtien);
                        echo "</br><a href='th_giohang.php'>Chi tiết</a>";
                    }
                }
                ?>
            </div>
            </div>
        </div>
        <div class="Nav">
            <div class="Nav-menu">
                <p class="Nav-menu-left">Danh mục hoa</p>
                <div class="Nav-menu-right Green-color Bold">
                    <a href="index.php">Trang chủ</a>
                    <a href="timhoa.php">Tìm kiếm bó hoa</a>
                    <a href="themhoa.php">Thêm bó hoa mới</a>
                    <a href="dangky.php">Đăng kí mới</a>
                </div>
        
        </div>
    </div>