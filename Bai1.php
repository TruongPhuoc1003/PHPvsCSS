<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình chữ nhật</title>
    <style>
      .form
       {
        background-color: aqua; 
    width: 400px;
    height:200px;

    border: 1px solid #000;    
    margin: 0 auto;
    text-align: center;


       }

    </style>
</head>
<body>

     <?php 
      $dientich=$_POST['dientich'];

      $chieudai=$_POST['chieudai'];
      $chieurong=$_POST['chieurong'];
      $dientich=$chieudai*$chieurong;
     ?>

    <div class="form">

        <form action=""  method="POST" >
            <h1>Diện tích hình chữ nhật</h1>
            <table>
                <tr>
                    <td>Chiều dài: </td>
                    <td ><input name="chieudai" type="number"></td>
                </tr>
                <tr>
                    <td>Chiều rộng: </td>
                    <td ><input type="number" name="chieurong"></td>
                    
                </tr>
                <tr>
                    <td>Diện tích:  </td>
                    <td><input name="dientich" type="text" value="<?php echo $dientich ?>"  ></td>
                </tr>
                <tr>    <td></td>
                    <td><input type="submit" value="TÍNH"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>