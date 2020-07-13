<?php
include_once("xl_csdl.php");
$maloai=1;
if(isset($_GET["maloai"]))
   $maloai=$_GET["maloai"];
$banghoa=Doc_Bang("select * from hoa where maloai=".$maloai);
echo "<div class='Main-right-product'>";
foreach($banghoa as $hoa)
{
	
	echo"<div class='Main-right-product-content'>
			<a href='chitiethoa.php?mahoa=". $hoa[0]."'>
			<p><img src='img/".$hoa[4]."'/></p>
			<p>".$hoa[2]."</p>
			<i>Giá bán </i>".number_format($hoa[3])."vnđ</a>
			<a href='xl_giohang.php?mahoamua=".$hoa[0]."&&maloai=".$hoa[1]."'><img src='img/gio_hang.jpg'/></a>
		</div>";
}
echo "</div>";
?>