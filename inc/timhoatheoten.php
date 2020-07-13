<?php
//Lấy mã hoa duoc chon

if(isset($_POST["ten"]))
 {
	 $tenhoa=$_POST["ten"];
	
	 $options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$dbh = new PDO('mysql:host=localhost;dbname=qlbh', 'root', '',$options);
$banghoa=$dbh->query("select * from hoa where tenhoa like'%".$tenhoa."%' or mota like '%".$tenhoa."%'");
echo"<div class='Main-right-product'>";
$dem=0;
foreach($banghoa as $hoa)
{
	 echo "<div class='Main-right-product-content'>
	 <a href='chitiethoa.php?mahoa=". $hoa[0]."'>
	 <p><img src='img/".$hoa[4]."'/></p>
		<p><b>".$hoa[2]."</b></p>
		<p><i>Giá bán </i>".number_format($hoa[3])."vnđ</p>
		</a></div>";

}
echo"</div>";
	 }

?>