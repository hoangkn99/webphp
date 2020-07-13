<?php include('inc/header.php'); ?>

<div class="Main">
        <div class="Main-left">
        <?php 
            include ("th_loaihoa.php");
        ?>
        <img src="img/BannerSideCreative.jpg" alt="panner">
        </div>
        <div class="Main-right">
            <div class="Thethancuaformduoi">
                <form method="post" name="form1" id="form1">
                    <table width="400px" boder="1" cellpadding="1" cellspaccing="0" style="background-color:pink">
                    </table>
                </form>
            </div>
            <div class="Main-right-form">
            <?php
                $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                );
                $dbh = new PDO('mysql:host=localhost;dbname=qlbh', 'root', '',$options);
            
            
                if(isset($_POST["tendn"]))
                {
                    //$caulenh="insert into khachhang(makh,tendn,matkhau,hoten,diachi,dienthoai,email) values('".$_POST["tendn"]."','".$_POST["matkhau"]."','".$_POST["matkhau2"]."','".$_POST["hoten"]."','".$_POST["email"]."','".$_POST["diachi"]."','".$_POST["sdt"]."')";
	                //$caulenh="insert into khachhang(tendn,matkhau,hoten,diachi,dienthoai,email)
                   // values(".$_POST["tendn"].",".$_POST["matkhau"].",".$_POST["hoten"].",".$_POST["diachi"].","$_POST["sdt"].","$_POST["email"]")";
                   // echo $caulenh;
                   $tendn=$_POST["tendn"];
                   $matkhau=$_POST["matkhau"];
                   $hoten=$_POST["hoten"];
                   $email=$_POST["email"];
                   $diachi=$_POST["diachi"];
                   $sdt=$_POST["sdt"];
                    $dbh->query('INSERT INTO khachhang ( tendn, matkhau, hoten, diachi, dienthoai, email) VALUES ("'.$tendn.'", "'.$matkhau.'",  "'.$hoten.'", "'.$email.'", "'.$diachi.'", "'.$sdt.'")');

	               //$dbh->exec('INSERT INTO khachhang ( tendn, matkhau, hoten, diachi, dienthoai, email) VALUES ("'.$tendn.'", "'.$matkhau.'",  "'.$hoten.'", "'.$email.'", "'.$diachi.'", "'.$sdt.'")');
                    echo"<script>alert('Đăng ký thành công');</script>";
                    // câu truy vấn: INSERT INTO `khachhang` (`Makh`, `TenDN`, `MatKhau`, `HoTen`, `DiaChi`, `DienThoai`, `Email`) VALUES (NULL, 'hoang01', '123456', 'hoang01', 'uit', '0123456', 'hoang01@gmail.com');
                }
            ?>
                <form method="post" name="form1" id="form1">
                    <table width="400px" boder="1" cellpadding="1" cellspaccing="0">
                        <tr  text-align="center" style="text-align:center;">
                            <td colspan="2"><h1>THÊM BÓ HOA MỚI</h1></td>
                        </tr>
                        <tr>
                            <td>Tên đăng nhập:</td>
                            <td><input type="text" name="tendn" id="tendn"></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu:</td>
                            <td><input type="password" name="matkhau" id="matkhau"></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu xác nhận:</td>
                            <td><input type="password" name="matkhau2" id="matkhau2"></td>
                        </tr>
                        <tr>
                            <td>Họ và tên:</td>
                            <td><input type="text" name="hoten" id="hoten"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ email:</td>
                            <td><input type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ liên lạc:</td>
                            <td><input type="text" name="diachi" id="diachi"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại:</td>
                            <td><input type="number" name="sdt" id="sdt"></td>
                        </tr>
                        <tr align="center"><td colspan="2"><p><input type="submit" name="button" id="button" value="Đăng kí" ></p></tr>
                    </table>
                </form>    
            </div>
            <div class="Main-right-product">
                <?php include('inc/timhoatheoten.php'); ?>
            </div>
</div>


       
<?php include('inc/footer.php'); ?>