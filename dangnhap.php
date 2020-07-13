<?php
if(isset($_POST["usertxt"]))
{
	include_once("xl_csdl.php");
	$tendn=$_POST["usertxt"];
	$matkhau=$_POST["passtxt"];
	$caul="select * from khachhang where TenDN='".$tendn."' and MatKhau='".$matkhau."'";
	$bangkh=Doc_Bang($caul);
	if($bangkh->rowCount()>0)
	{
	 foreach($bangkh as $kh)
	 {
	  $_SESSION["tenkh"]=$kh["HoTen"];
	  $_SESSION["makh"]=$kh["Makh"];
	  $_SESSION["email"]=$kh["Email"];
     }
    echo"<script>alert('Chào ".$_SESSION["tenkh"]."');</script>";
	echo"<script>location.reload('index.php');</script>";
	}
	else
	 echo"<script>alert('Đăng nhập sai');</script>";
	}
?>
<div class="Top-content-login">
            <form id="form1" name="form1" method="post" action="index.php">
                <table>
                    <tr>
                        <td colspan="2" class="Green-color Bold Text-center">Đăng nhập</td>
                    </tr>
                    <tr>
                        <td>Tài khoản</td>
                        <td><input type="text" name="usertxt" id="usertxt"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input type="password" name="passtxt" id="passtxt"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="Green-color Bold Text-center"><input class="Button" type="submit" name="submit" value="Đăng Nhập"></td>
                    </tr>
                </table>
            </div>