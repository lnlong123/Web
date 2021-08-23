<?php
    include("config/db.php");
    include("header.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
?>
<div class="h3 text-center mb-4">Thêm đơn vị</div>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tên đơn vị</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtfullname" placeholder="Nhập tên đơn vị ">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Địa chỉ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtdiachi" placeholder="Nhập địa chỉ">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtSdt" placeholder="Nhập số điện thoại">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="txtEmail" placeholder="Nhập email">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Website</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtWebsite" placeholder="Nhập website">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tên đơn vị cha</label>
        <div class="col-sm-10">
        <select class="form-control" name="sldonvi">
            <option></option>
            <?php 
            $sql = "SELECT * FROM tbl_coquan";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
            ?> 
                <option value="<?php echo $row['id']; ?>"><?php echo $row['tenDV']; ?></option>
            <?php
            }
        }
    ?>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnAddUser">Thêm</button>
        </div>
    </div>
    </form>
</div>
            <?php
                if(isset($_POST['btnAddUser'])){
                    $fullName  = $_POST['txtfullname'];
                    $diachi    = $_POST['txtdiachi'];
                    $phone     = $_POST['txtSdt'];
                    $email     = $_POST['txtEmail'];
                    $website   = $_POST['txtWebsite'];
                    $donvi     = $_POST['sldonvi'];
                    $sql = "INSERT INTO tbl_coquan(tenDV, DiaChi, SDT, Email, website, id_cha)
                            VALUES ('$fullName','$diachi ','$phone ',' $email','$website', '$donvi')";
                    if(mysqli_query($conn,$sql)){
                        header('Location:index.php');
                    }
                    }
                    ?>
   