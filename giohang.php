<?php
 if(isset($_SESSION["giohang"]))
  {
	  $giohang=$_SESSION["giohang"];
	  if(count($giohang)>0)
	  {
	  echo"<table border='1' cellpadding='0' cellspacing='0'><tr><td>Stt</td><td>Tên Hoa</td><td>Sl</td><td>Đơn giá</td><td>TT</td></tr>";
	  $stt=1;
	  $tongtien=0;
	  foreach($giohang as $h)
	   {
		   echo"<tr><td>".$stt."</td><td>".$h[1]."</td><td>".$h[2]."</td><td>".$h[3]."</td><td>".number_format($h[2]*$h[3])."</td></tr>";
		   $stt++;
            $tongtien+=$h[2]*$h[3];
		   }
		  echo"</table>";
	  }
	  }
?>