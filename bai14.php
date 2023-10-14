<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
    <link rel="stylesheet" href ="css14.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!--  <?php 


    $nam = $_POST['nam'];

if(isset($nam)) {
    $so_du_can = ($nam - 3) % 10;
    $can_arr = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $can = $can_arr[$so_du_can];

    $so_du_chi = ($nam - 3) % 12;
    $chi_arr = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $chi = $chi_arr[$so_du_chi];

    $nam_al = $can . " " . $chi;

    echo '<input type="text" value="' . $nam_al . '" readonly>';
} else {
    echo "Vui lòng nhập năm.";
}
  
   ?>  -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Tính năm âm lịch</h1>
<div class="input-box">
        <div class="inputt">
            <input type="text" required name="nam">
            <label class="lb">Năm dương lịch </label>
        </div>

        <div class="inpu">
            <input type="text" required name="nam_al" value="<?php echo $nam_al ?>"readonly>
     <label class="khong">Năm âm lịch </label>
<button type="submit" class="thietke">=></button>
        </div>

        
</div>





        <div class="input">
          
        
</div>
        
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai13.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai14.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>