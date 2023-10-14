<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
    <link rel="stylesheet" href ="css7.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 


   $hk1=$_POST['hk1'];
   $hk2=$_POST['hk2'];
   $tb=$_POST['tb'];
   $tb=($hk1+$hk2*2)/3;
   $kq=$_POST['kq'];
   $xl=$_POST['xl'];
   if($tb>=5)
   {
    $kq="Được lên lớp";
   }
   else
   {
     $kq="Ở lại lớp";
   }
    
   if($tb>=8)
   {
    $xl="Giỏi";
   }
   else if($tb>6.5 && $tb<8)
   {
     $xl="Trung bình";
   }
   else
   {
      $xl="Yếu";
   }
 
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Kết quả học tập</h1>
<div class="input-box">
        <div class="inputt">
            <input type="text" required name="hk1">
            <label>Điểm học kỳ 1</label>
        </div>

        <div class="inputt">
            <input type="text" required name="hk2">
            <label>Điểm học kỳ 2</label>
        </div>
</div>

<div class="input-box">
        <div class="inputt">
          <p>Điểm trung bình</p>
           <input type="text" required name="max" value="<?php echo $tb ?>" readonly>
            
        </div>


        <div class="inputt">
          <p>Kết quả</p>
           <input type="text" required name="max" value="<?php echo $kq ?>" readonly>
            
        </div>


        <div class="inputt">
          <p>Xếp loại học lực</p>
           <input type="text" placeholder="Xếp loại học lực" required name="max" value="<?php echo $xl ?>" readonly>
            
        </div>
</div>
        <button type="submit" class="thietke">Tính</button>
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai6.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai8.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>