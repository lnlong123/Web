<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Quản lí</title>
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3">
                        <h4>Login</h4>
                        <div class="col-12">
                            <label>Tên tài khoản</label>
                            <input type="text" name="txtemail" class="form-control" placeholder="Tên tài khoản">
                        </div>
                        <div class="col-12">
                            <label>Mật khẩu</label>
                            <input type="password" name="txtpassword" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Lưu thông tin đăng nhập</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end"name="sbmLogin">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("config/db.php");
    if(isset($_POST['sbmLogin'])){
        $email = $_POST['txtemail'];
        $pass  = $_POST['txtpassword'];
        //Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM user WHERE username='$email' AND passwd='$pass'";
        $result = mysqli_query($conn,$sql);
        $count=mysqli_num_rows($result);
        if($count == 1){
            
            header("Location:index.php");
            $_SESSION['login'] = $email;
        }else{
            header("Location:login.php");
        }
    }
?>
</body>
</html>