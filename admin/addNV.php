<?php
    include("config/db.php");
    include("header.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
?>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tên cán bộ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtfullname" placeholder="Nhập vào tên ">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Chức vụ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtchucvu" placeholder="Nhập chức vụ">
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
        <label class="col-sm-2 col-form-label">Tên đơn vị</label>
        <div class="col-sm-10">
        <select class="form-control" name="sldonvi">  
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
                    $chucvu    = $_POST['txtchucvu'];
                    $phone     = $_POST['txtSdt'];
                    $email     = $_POST['txtEmail'];
                    $donvi     = $_POST['sldonvi'];
                    // $idDV      ="SELECT id FROM tbl_coquan Where tenDV = '$donvi'";
                    $sql = "INSERT INTO tbl_canbo(full_name, chucvu, sdt, email, id_donvi)
                            VALUES ('$fullName','$chucvu ','$phone ',' $email', '$donvi')";
                    // echo $sql;
                    // $result = mysqli_query($conn,$sql);
                    
                    // $count=mysqli_num_rows($result);
                    if(mysqli_query($conn,$sql)){
                        header('Location: index.php');
                    }
                    }
                    ?>
   