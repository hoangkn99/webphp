<?php
include_once("xl_csdl.php");
$bangloaihoa=Doc_Bang("select * from loaihoa");

foreach($bangloaihoa as $lh)
echo "<a href='index.php?maloai=".$lh[0]."'>".$lh[1]."</a><br>";
?>