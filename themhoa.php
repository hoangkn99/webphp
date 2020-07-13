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
                $bangloaihoa=$dbh->query("select * from loaihoa");
                //Lấy dữ liệu thêm vào bảng Hoa
                if(isset($_POST["tenhoa"]))
                {
	                $caulenh="insert into Hoa(maloai,tenhoa,dongia,hinh,mota)
	                values(".$_POST["maloai"].",'".$_POST["tenhoa"]."',".$_POST["dongia"].",'".$_FILES["hinhanh"]["name"]."','".$_POST["mota"]."')";
	                $dbh->exec($caulenh);
	                echo"<script>alert('Thêm thành công');</script>";
	                //dua hinh len server
	                move_uploaded_file( $_FILES["hinhanh"]["tmp_name"],'img/'.$_FILES["hinhanh"]["name"]);
                }
            ?>
                <form method="post" name="form1" id="form1" enctype="multipart/form-data">
                    <table width="400px" boder="1" cellpadding="1" cellspaccing="0">
                        <tr  text-align="center" style="text-align:center;">
                            <td colspan="2"><h1>THÊM BÓ HOA MỚI</h1></td>
                        </tr>
                        <tr>
                            <td>Tên bó hoa:</td>
                            <td><input type="text" name="tenhoa" id="tenhoa"></td>
                        </tr>
                        <tr>
                            <td>Loại hoa:</td>
                            <td><select id="maloai" name="maloai">
                                    <option value="1">Hoa cúc</option>
                                    <option value="2">Hoa cưới</option>
                                    <option value="3">Hoa hồng</option>
                                    <option value="4">Hoa xuân</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Thành phần:</td>
                            <td><textarea name="mota" id="mota" rows="5" cols="40"></textarea></td>
                        </tr>
                        <tr>
                            <td>Đơn giá:</td>
                            <td><input type="number" name="dongia" id="dongia"></td>
                        </tr>
                        <tr>
                            <td>Hình bó hoa:</td>
                            <td><input type="file" name="hinhanh" id="hinhanh"></td>
                        </tr>
                        <tr align="center"><td colspan="2"><p><input type="submit" name="button" id="button" value="Thêm bó hoa" ></p></tr>
                    </table>
                </form>    
            </div>
            <div class="Main-right-product">
                <?php include('inc/timhoatheoten.php'); ?>
            </div>
</div>


       
<?php include('inc/footer.php'); ?>
