<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền karaoke</title>
    <link rel="stylesheet" href ="css10.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
 
 <!--   <?php

 $gio_bat_dau=$_POST['gio_bat_dau'];
   $gio_ket_thuc=$_POST['gio_ket_thuc'];
$gia_tien_gio = 0;

if ($gio_bat_dau <= 17 && $gio_ket_thuc <= 17) 
{
    $gia_tien_gio = ($gio_ket_thuc - $gio_bat_dau) * 20000;
} 
else if ($gio_bat_dau >= 17) 
{
    $gia_tien_gio = ($gio_ket_thuc - $gio_bat_dau) * 45000;
} 
else 
{
    $gia_tien_gio1 = (17 - $gio_bat_dau) * 20000;
    $gia_tien_gio2 = ($gio_ket_thuc - 17) * 45000;
    $gia_tien_gio = $gia_tien_gio1 + $gia_tien_gio2;
}

if ($gio_bat_dau > $gio_ket_thuc) {
     $chao= "Giờ bắt đầu phải nhỏ hơn giờ kết thúc.";
} 
else if($gio_bat_dau<=10 )
{
  $chao="Thời gian nghỉ";
}

else 
{
    if ($gio_ket_thuc >= 24) 
    {
        $gio_nghi = $gio_ket_thuc - 24;
         $chaoo= "Khách hàng đã làm paylak qua 24h và nghỉ " . $gio_nghi . " giờ.";
    }
     $chao= "Số tiền khách hàng cần thanh toán: " . $gia_tien_gio . " đồng.";
}
?> -->


   <div class="form">

    <form action=""  method="POST" >
        <h1>Tính tiền karaoke</h1>

        <div class="inputt">
            <input type="text" required name="gio_bat_dau">
            <label>Giờ bắt đầu</label>
        </div>

        <div class="inputt">
            <input type="text" required name="gio_ket_thuc">
            <label>Giờ kết thúc</label>
            
        </div>

        <div class="inputt">
          <p>Tiền thanh toán</p>
           <input type="text" required name="max" value="<?php echo $gia_tien_gio?>" readonly>
            

        </div>
        <div>
                       
            </div>
       
           <label>
              <?php 


               if ($gio_bat_dau > $gio_ket_thuc) 
               {
    echo "Giờ bắt đầu phải nhỏ hơn giờ kết thúc.";
} 
else 
{
    if ($gio_ket_thuc > 24) 
    {
      
        $gio_nghi = $gio_ket_thuc - 24;
        echo "Khách hàng đã làm việc đến " . $gio_ket_thuc . "h và nghỉ " . $gio_nghi . " giờ.";
    }
    echo "Số tiền khách hàng cần thanh toán: " . $gia_tien_gio . " đồng.";
}

              
              ?>           
            </label>
           
        <button type="submit" class="thietke">Tính tiền</button>
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai9.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai12.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>