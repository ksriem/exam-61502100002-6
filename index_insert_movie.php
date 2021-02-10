<? //เพิ่มข้อมูล ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>กรอกข้อมูลภาพยนตร์</h2>
                    </div>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>ชื่อภาพยนตร์</label>
                            <input type="text" name="name_movie" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>เวลาฉาย</label>
                            <input type="datetime-local" name="date_movie" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" >
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>