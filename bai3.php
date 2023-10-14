<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
    <link rel="stylesheet" href ="css3.css">

</head>
<body>

   <!-- <?php 


   $cscu=$_POST['cscu'];
   $csmoi=$_POST['csmoi'];
   $dg=$_POST['dg'];
   $tt=$_POST['tt'];
   $tt=($csmoi-$cscu)*2700;
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Thanh toán tiền điện</h1>

        <div class="inputt">
            <input type="text" required name="chuho">
            <label>Chủ hộ</label>
        </div>

        <div class="inputt">
            <input type="text" required name="cscu">
            <label>Chỉ số cũ</label>
        </div>

        <div class="inputt">
            <input type="text" required name="csmoi">
            <label>Chỉ số mới</label>
        </div>

        <div class="inputt">
            <input type="text" required name="dg">
            <label>Đơn giá</label>
        </div>

        <div class="inputt">
           <input type="text" required name="tt" 
           value="<?php echo $tt ?>">
            <label>Thanh toán</label>
        </div>
            
        <button type="submit" class="thietke">Tính</button>
       
            
        
    </form>
</div>
</body>
</html>