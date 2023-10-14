<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <link rel="stylesheet" href ="css8.css">
    <link rel="stylesheet" href ="3bai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<?php
 include('3bai.php');
 ?>
   <!-- <?php 


     $diemToan = $_POST['diemToan'];
$diemLy = $_POST['diemLy'];
$diemHoa = $_POST['diemHoa'];
$diemChuan = $_POST['diemChuan'];
$tongDiem = $diemToan + $diemLy + $diemHoa;
   if ($diemToan > 0 && $diemLy > 0 && $diemHoa > 0) 
   {
    if ($tongDiem >= $diemChuan) 
    {
        $ketQua = "Đậu";
    } 
    else 
    {
        $ketQua = "Rớt";
    }
} 
else 
{
    $ketQua = "Rớt";
}
   ?> -->

   <div class="form">

    <form action=""  method="POST" >
        <h1>Kết quả thi đại học</h1>
<div class="input-box">
        <div class="inputt">
            <input type="text" required name="diemToan">
            <label>Toán</label>
        </div>

        <div class="inputt">
            <input type="text" required name="diemLy">
            <label>Lý</label>
        </div>
</div>

<div class="input-box">
        <div class="inputt">
           <input type="text" required name="diemHoa" >
            <label>Hoá</label>
        </div>


        <div class="inputt">
           <input type="text" required name="diemChuan">
            <label>Điểm chuẩn</label>
        </div>


        <div class="inputt">
          <p>Tổng điểm</p>
           <input type="text"  required name="tongDiem" value="<?php echo $tongDiem ?>"readonly>
           <!--  <label>Tổng điểm</label> -->
        </div>

          <div class="inputt">
            <p>Kết quả thi</p>
           <input type="text"  required name="ketQua" value="<?php echo $ketQua ?>"readonly >

            <!-- <label>Kết quả thi</label> -->
        </div>
</div>
        <button type="submit" class="thietke">Tính</button>
       
            
        
    </form>
</div>




<!-- =================================================================================================================== -->
<div class="navigation">
        <span class="prev-btn">
         <a href="bai7.php"> <i class='bx bx-chevron-left' ></i></a>
        </span>
        <span class="next-btn">
          <a href="bai9.php"><i class='bx bx-chevron-right' ></i></a>
        </span>

      </div>


</body>
</html>