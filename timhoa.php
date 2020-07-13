



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
                <form method="post" name="form1" id="form1">
                    <table width="400px" boder="1" cellpadding="1" cellspaccing="0">
                        <tr  text-align="center" style="text-align:center;">
                            <td colspan="2"><h1>Tìm Kiếm bó hoa</h1></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="ten" id="ten" value="" placeholder="Tìm kiếm" ></td>
                        </tr>
                        <tr align="center"><td colspan="2"><p><input type="submit" name="button" id="button" value="Xem kết quả" ></p></tr>
                    </table>
                </form>    
            </div>
            <div class="Main-right-product">
                <?php include('inc/timhoatheoten.php'); ?>
            </div>
</div>


       
<?php include('inc/footer.php'); ?>
