<?php
session_start();
if(isset($_REQUEST["mahoamua"]))
{
   

/*
Gio hang luu tru trong session là mảng 2 chiếu
các phần tử MaHoa=>Thong tin hoa
[1]=>Hoa1{ma hoa,tenhoa,soluong,dongia}
[2]=>hoa2{}

*/
if(isset($_SESSION["giohang"])) 
$Giohang=$_SESSION["giohang"];
else
$Giohang=array("0"=>array());
$sl=0;
$mahoa=$_REQUEST["mahoamua"];
$maloai=$_REQUEST["maloai"];
//$maloaihoa=$_REQUEST["maloaihoa"];
if(isset($Giohang[$mahoa]))//neu hoa da cho mua truoc thi tang so luong len 1
   { 
      $Giohang[$mahoa][2]++;
      echo "hoa đã tồn tại +1";
   }
else //chua co tao moi hoa
{
	include_once("xl_csdl.php");
	 $banghoa=Doc_Bang("select * from hoa where mahoa=".$mahoa);
	foreach($banghoa as $h)
	{
     $hoa=array($h[0],$h[2],1,$h[3]);
     echo "Chưa có hoa tạo hoa mới";
     $Giohang[$mahoa]=$hoa;
     
   }
   
   
}
//xoa mang khoi tao

$_SESSION["giohang"]=$Giohang;

echo"<script>location.href = 'index.php?maloai=".$maloai."';</script>";
if(isset($_SESSION["giohang"]))
{
   $giohang=$_SESSION["giohang"];
   if(count($giohang)>1)
   {
      echo"<table boder='1'>";
      $stt=1;
      $tongtien=0;
      for($i=1;$i<count($giohang);$i++)
       {
          $h=$giohang[$i];
          echo"<tr>
          <td>".$stt."</td>
          <td>".$h[1]."</td>
          <td>".$h[2]."</td>
          <td>".$h[3]."</td>
          <td>".number_format($h[2]*$h[3])."</td>
          </tr>";
          $stt++;
             $tongtien+=$h[2]*$h[3];
        }
         echo"</table>";
    }
}
}
?>
