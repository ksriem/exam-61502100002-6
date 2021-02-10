<?php 

// โดยที่ $ชื่อตัวแปร = new mysqli($servername, $username, $password, $dbname)
$connect = new mysqli('localhost', 'webadmin', '1234', 'exam');
// ทำการ check connection ว่าถูกต้องหรือไม่
 if ($connect->connect_error) {
       die("Something wrong.: " . $connect->connect_error);
  }

$sql = "SELECT * FROM theater";
$result = $connect->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลภาพยนตร์</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "stylesheet" type = "text/css" href = "css.css" >
</head>
<style>

</style>

<body>

    <div class="container">
        <h1>รายการข้อมูลภาพยนตร์</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ค้นหาภาพยนตร์" title="ใส่ชื่อภาพยนตร์">
        <table id = movies>
            <thead>
                <tr>
                    <th>รหัสภาพยนตร์</th>
                    <th>ชื่อภาพยนตร์</th>
                    <th>วันและเวลาที่ฉาย</th>
                </tr>
            </thead>
            <tbody>
                <?php //ดึงข้อมูล (fetch) ในแถวหรือ row โดยจะเก็บข้อมูลในรูปแบบ array โดยเก็บไว้ที่ $row ดังนั้นแล้วเวลาที่เราจึงประกาศข้อมูลเป็น $row["ชื่อข้อมูล"]?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['name_movie'];?></td>
                        <td><?php echo $row['date_movie']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>

    <script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("movies");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td){
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }

</script>


</body>
</html>
