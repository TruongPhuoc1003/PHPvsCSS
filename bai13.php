<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
    <link rel="stylesheet" href ="css13.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 
$ngay = $_POST['ngay'];
$thang = $_POST['thang'];
$nam = $_POST['nam'];

if(isset($ngay) && isset($thang) && isset($nam)) {
    $jd = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
    $day = jddayofweek($jd, 0);

    switch($day) {
        case 0:
            $thu = "Chủ Nhật";
            break;
        case 1:
            $thu = "Thứ Hai";
            break;
        case 2:
            $thu = "Thứ Ba";
            break;
        case 3:
            $thu = "Thứ Tư";
            break;
        case 4:
            $thu = "Thứ Năm";
            break;
        case 5:
            $thu = "Thứ Sáu";
            break;
        case 6:
            $thu = "Thứ Bảy";
            break;
        default:
            $thu = "Không hợp lệ";
    }

    echo '<input type="text" value="' . $thu . '" readonly>';
} else {
    echo "Vui lòng nhập đầy đủ ngày, tháng, năm.";
}


  
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Tìm thứ trong tuần</h1>

<div class="inputt">
          
            <label class="lb">Ngày/Tháng/Năm: </label>
            <input  type="text" required name="ngay">
           <!--  <label class="lb">/</label> -->
            <input type="text" required name="thang">
            <!-- <label class="lb">/</label> -->
            <input type="text" required name="nam">
        </div>
        <div>
        


        <div class="input">

           <input type="text"  required name="x" value="<?php echo $thu ?>"readonly>
           <!--  <label>Tổng điểm</label> -->
</div>
     
</div>   
        <button type="submit" class="thietke">Tìm thứ trong tuần</button>
    </div>
   
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai12.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai14.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>