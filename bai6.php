<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào theo giờ</title>
    <link rel="stylesheet" href ="css6.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>

<body>
  <?php
 include('3bai.php');
 ?>
 
<!-- <?php

  $gio=$_POST['gio'];
   $chao=$_POST['chao'];
   if($gio>=0 && $gio<13)
   {
        $chao="Chào buổi sáng";
   }

   else if($gio>=13 && $gio<18)
   {
        $chao="Chào buổi chiều";
   }

   else if($gio>=18 && $gio<24)
   {
      $chao="Chào buổi tối";
   }
   else
   {
    $chao="Nhập lại số giờ từ 00h ===> 23h";
  
   }
   ?>  -->

   <div class="form">


    <form action=""  method="POST" >
        <h1>Chào theo giờ</h1>

        <div class="inputt">
            <input type="text" required name="gio">
            <label>Nhập vào số giờ</label>
        </div>

        <div class="inputt">
           
            <label>
              <?php 
               echo $chao;
              ?>           
            </label>

        </div>
            
        <button type="submit" class="thietke">Chào</button>
    </form>

</div>
<div class="navigation">
        <span class="prev-btn">
         <a href="bai5.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai7.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>

</body>
</html>