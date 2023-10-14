<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn</title>
    <link rel="stylesheet" href ="css5.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 


   $st1=$_POST['st1'];
   $st2=$_POST['st2'];
   $max=$_POST['max'];
   if($st1>$st2)
   {
    $max=$st1;
   }
   else
   {
     $max=$st2;
   }
 
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Tìm số lớn</h1>

        <div class="inputt">
            <input type="text" required name="st1">
            <label>Số thứ nhất</label>
        </div>

        <div class="inputt">
            <input type="text" required name="st2">
            <label>Số thứ hai</label>
        </div>

        <div class="inputt">
           <input type="text" required name="max" value="<?php echo $max ?>">
            <label>Số lớn nhất</label>
        </div>
            
        <button type="submit" class="thietke">Tính</button>
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai4.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai6.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>