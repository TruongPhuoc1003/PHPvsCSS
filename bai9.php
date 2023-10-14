<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
    <link rel="stylesheet" href ="css9.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 


     $a = $_POST['a'];
$b = $_POST['b'];
$x = $_POST['x'];
if ($a == 0) {
        if ($b == 0) {
            echo "Phương trình có vô số nghiệm.";
        } else {
            echo "Phương trình vô nghiệm.";
        }
    } else {
        $x = -($b / $a);
        echo "Nghiệm của phương trình là: x = " . $x;
    }
  
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Giải phương trình bậc nhất</h1>
<div class="input-box">
        <div class="inputt">
            <input type="text" required name="a">
            <label class="lb">Phương trình: </label>
        </div>

        <div class="inpu">
            <input type="text" required name="b">
            <label class="x">x +</label>
            <label class="khong">=0</label>
        </div>

        
</div>





        <div class="input">
          <p>Tổng điểm</p>
           <input type="text"  required name="x" value="<?php echo $x ?>"readonly>
           <!--  <label>Tổng điểm</label> -->
        
</div>
        <button type="submit" class="thietke">Tính</button>
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai8.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai10.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>