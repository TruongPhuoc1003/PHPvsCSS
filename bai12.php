<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>
    <link rel="stylesheet" href ="css12.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 


    if(isset($_POST['so'])) {
    $so = $_POST['so'];

    switch ($so) {
        case 0:
            $chu = "Không";
            break;
        case 1:
            $chu = "Một";
            break;
        case 2:
            $chu = "Hai";
            break;
        case 3:
            $chu = "Ba";
            break;
        case 4:
            $chu = "Bốn";
            break;
        case 5:
            $chu = "Năm";
            break;
        case 6:
            $chu = "Sáu";
            break;
        case 7:
            $chu = "Bảy";
            break;
        case 8:
            $chu = "Tám";
            break;
        case 9:
            $chu = "Chín";
            break;
        default:
            $chu = "Số không hợp lệ";
    }
} else {
    $chu = "Vui lòng nhập số";
}
  
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Đọc số</h1>
<div class="input-box">
        <div class="inputt">
            <input type="text" required name="so">
            <label class="lb">Nhập số(0--9) </label>
        </div>

        <div class="inpu">
            <input type="text" required name="chu" value="<?php echo $chu ?>"readonly>
     <label class="khong">Bằng chữ: </label>
<button type="submit" class="thietke">=></button>
        </div>

        
</div>          
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai10.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai13.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>