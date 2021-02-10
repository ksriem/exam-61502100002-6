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
                        <h2>สมัครสมาชิก</h2>
                    </div>
                    <form action="insert_u.php" method="post">
                        <div class="form-group">
                            <label>กรุณากรอก username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>กรุณากรอก password</label>
                            <input type="password" name="passwords" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" >
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>