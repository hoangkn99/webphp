<script language="javascript" type="text/jscript">
 function thongbaoxoa(mahoa)
 {
	 chon=confirm('Bạn có muốn xóa hoa này không?');
	 if(chon==true)
    location.href = "th_giohang?mahoaxoa="+mahoa;

	 }
</script>




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

if(isset($_SESSION["giohang"]))
{
   $giohang=$_SESSION["giohang"];
   if(count($giohang)>1)
   {

      if(isset($_GET["mahoaxoa"]))
		   {
			   $mahoaxoa=$_GET["mahoaxoa"];
			   unset($giohang[$mahoaxoa]);
			   $_SESSION["giohang"]=$giohang;
			 }
		if(isset($_POST["capnhat"]))
		{
			for($i=1;$i<count($giohang);$i++)
			{
            $h=$giohang[$i];
				$sl=$_POST["txtsl".$h[0]];
				if($sl>0)
				 $giohang[$h[0]][2]=$sl;
			}
			$_SESSION["giohang"]=$giohang;
		}
      echo"<form method='post'><table border='1' cellpadding='0' cellspacing='0' width='800px' align='center'><tr><td width='10%'>Stt</td><td width='30%'>Tên Hoa</td><td width='15%'>Sl</td><td width='20%'>Đơn giá</td><td width='20%'>Thành Tiền</td><td>Xóa</td></tr>";

      echo"<h1 align='center'>Giỏ Hàng</h1></br>";
      $stt=1;
      $tongtien=0;
      for($i=1;$i<count($giohang);$i++)
       {
          $h=$giohang[$i];
          echo"<tr>
          <td>".$stt."</td>
          <td>".$h[1]."</td>
          <td><input type='number' min='1' max='100' value='".$h[2]."' name='txtsl".$h[0]."'/></td>
          <td>".$h[3]."</td>
          <td>".number_format($h[2]*$h[3])."</td>
          <td><a href='#' onClick='thongbaoxoa(".$h[0].")' >Xóa</a></td>
          </tr>";
          $stt++;
             $tongtien+=$h[2]*$h[3];
        }
        echo"<tr><td align='right' colspan='6'>Tổng tiền :".number_format($tongtien)."</td></tr>";
		   echo"<tr><td align='center' colspan='6'><input type='submit' name='capnhat' value='Cập nhật'/></td></tr>"; 
         echo"</table></form>";
    }
}

?>
<?php
           if(isset($_SESSION["giohang"])){

            $hoten="";
			$dienthoai="";
			$email="";
			$makh="";
			$diachi="";
                if(isset($_POST["dathang"]))
                {
                  include_once("xl_csdl.php");
                    //$caulenh="insert into khachhang(makh,tendn,matkhau,hoten,diachi,dienthoai,email) values('".$_POST["tendn"]."','".$_POST["matkhau"]."','".$_POST["matkhau2"]."','".$_POST["hoten"]."','".$_POST["email"]."','".$_POST["diachi"]."','".$_POST["sdt"]."')";
	                //$caulenh="insert into khachhang(tendn,matkhau,hoten,diachi,dienthoai,email)
                   // values(".$_POST["tendn"].",".$_POST["matkhau"].",".$_POST["hoten"].",".$_POST["diachi"].","$_POST["sdt"].","$_POST["email"]")";
                   // echo $caulenh;
                   $hoten=$_POST["hotendh"];
                   $email=$_POST["emaildh"];
                   $diachi=$_POST["diachidh"];
                   $dienthoai=$_POST["sdtdh"];
                   $ngaydh=date("Y-m-d H:s:i");
                   if(isset($_SESSION["makh"]))
                   $makh=$_SESSION["makh"];
                   $caulenh="insert into 	donhang(ngaydh,makh,hoten,diachi,dienthoai,email,trangthai) values('".$ngaydh."',".$makh.",'".$hoten."','".$diachi."','".$dienthoai."','".$email."',1)";			
                   Ghi_Du_Lieu($caulenh);
                   
                    // câu truy vấn: INSERT INTO `khachhang` (`Makh`, `TenDN`, `MatKhau`, `HoTen`, `DiaChi`, `DienThoai`, `Email`) VALUES (NULL, 'hoang01', '123456', 'hoang01', 'uit', '0123456', 'hoang01@gmail.com');
                    $bangdh=Doc_Bang("select max(sodh)as sodhmoi from donhang");
                    foreach($bangdh as $dh)
                    {
                       $sodh=$dh[0];
                       //Them bang chi tiet
                       $caulenh="insert into ctdonhang(sodh,mahoa,soluong,dongia,thanhtien)
                       values";
                       for($i=1;$i<count($giohang);$i++){
                        $h=$giohang[$i];
                       
                         $caulenh=$caulenh."(".$sodh.",".$h[0].",".$h[2].",".$h[3].",".($h[2]*$h[3])."),";}
                        //bỏ dau, cuoi
                        $caulenh=substr($caulenh,0,strlen($caulenh)-1);
                        Ghi_Du_Lieu($caulenh);
                        //Xóa gio hang
                        unset($_SESSION["giohang"]);
                        echo"<script>alert('Đặt hàng thành công');</script>";
                        
                    }
                
                  }
               }
            ?>
<form method="post" name="form1" id="form1">
                    <table width="400px" boder="1" cellpadding="1" cellspaccing="0">
                        <tr  text-align="center" style="text-align:center;">
                            <td colspan="2"><h1 class="Main-right-form">Thông tin đặt hàng</h1></td>
                        </tr>
                        <tr>
                            <td>Họ và tên:</td>
                            <td><input type="text" name="hotendh" id="hotendh"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ email:</td>
                            <td><input type="email" name="emaildh" id="emaildh"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ giao hàng:</td>
                            <td><input type="text" name="diachidh" id="diachidh"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại:</td>
                            <td><input type="text" name="sdtdh" id="sdtdh"></td>
                        </tr>
                        <tr align="center"><td colspan="2"><p><input type="submit" name="dathang" id="button" value="Đặt hàng" ></p></tr>
                    </table>
                </form>  
            </div>
            <div class="Main-right-product">
            
            </div>
</div>


       
<?php include('inc/footer.php'); ?>


