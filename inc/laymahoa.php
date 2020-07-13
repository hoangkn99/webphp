<?php


//Lấy mã hoa duoc chon
$mahoa=0;
if(isset($_GET["mahoa"]))
 {
	 $mahoa=$_GET["mahoa"];
	 $options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$dbh = new PDO('mysql:host=localhost;dbname=qlbh', 'root', '',$options);
$banghoa=$dbh->query("select * from hoa where mahoa=".$mahoa);
foreach($banghoa as $hoa)
{
	 
		   echo"<table><tr><td><img src='img/".$hoa[4]."'/></td>
		   <td><b>".$hoa[2]."</b><br><i>Giá bán </i>".number_format($hoa[3])."vnđ<br><i>Thành phần chính</i><br>".$hoa[5]."<br><a href='index.php?maloai=".$hoa[1]."'>Về trang chủ</a></td></tr></table>";
}
	 }

?>