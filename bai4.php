<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="incon" href="incon.png" type="incom">
    <title>Cạnh huyền tam giác vuông</title>
    <link rel="stylesheet" href ="css4.css">
     <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
 <?php
 include('3bai.php');
 ?>

   <!-- <?php 

   $canhA=$_POST['canhA'];
   $canhB=$_POST['canhB'];
   $canhH=$_POST['canhH'];
  $canhH=sqrt(($canhA*$canhA)+($canhB*$canhB));

   ?> -->
   

 
   <div class="form">
    <form action=""  method="POST" >
        <h1>Cạnh huyền tam giác vuông</h1>

        <div class="inputt">
            <input type="text" required name="canhA">
            <label>Cạnh A</label>
        </div>

        <div class="inputt">
            <input type="text" required name="canhB">
            <label>Cạnh B</label>
        </div>

        <div class="inputt">
           <input type="text" required name="canhH" value="<?php echo $canhH ?>">
            <label>Cạnh Huyền</label>
        </div>          
        <button type="submit" class="thietke">Tính</button>

    </form>
</div>
 <div class="navigation">
        <span class="prev-btn">
         <a href="bai8.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai5.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


        


</body>
</html>