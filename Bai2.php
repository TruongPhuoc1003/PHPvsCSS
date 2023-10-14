<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình tròn</title>
    <link rel="stylesheet" href ="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>

   <!-- <?php 
   $chuvi=$_POST['chuvi'];
   $PI=3.14;


   $dientich=$_POST['dientich'];
   $bankinh=$_POST['bankinh'];
   $chuvi=2*$bankinh*$PI;
   $dientich=$PI*pow($bankinh,2);


   ?>  -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Diện tích hình tròn</h1>

        <div class="input">
            <input name="bankinh" type="text" placeholder="Bán Kính" required>
      <!--  <i class='bx bxs-user'></i> -->
   </div>

        <div class="input"><input name="dientich" type="text" placeholder="Diện Tích" required value="<?php echo $dientich ?>"></div>

        <div class="input"><input name="chuvi" type="text" placeholder="Chu vi" required value="<?php echo $chuvi ?>"></div>

       
        
               
               <button type="submit" class="thietke">Tính</button>
            
        
    </form>

</body>
</html>