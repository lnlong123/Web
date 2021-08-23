<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
  include("header.php");
?>
    <?php include("config/db.php");
    ?>
<div class="container">
  <div class="row">
    <div class="col-7">
      <h5 class="text-end">Chào mừng bạn đến với trang quản lý</h3>
    </div>
    <div class="col-5">
      <a href="logout.php" class="text-decoration-none">Thoát</a>
    </div>
  </div>
</div>
  <div class="mb-3 ms-3">
    <a href="addNV.php" class="btn btn-success">Thêm người dùng</a>
  </div>
  <div class="form-group row ms-2">
    <label class="col-sm-2 col-form-label">Tìm kiếm theo đơn vị</label>
    <div class="col-sm-6">
    <select class="form-control" name="sldonvi">   
    <?php 
    $sql = "SELECT * FROM tbl_coquan";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
    ?>
      <option name="DonVi"><?php echo $row['tenDV']; ?></option>
    <?php

        }
    }
    ?>
    </select>
  </div>
  <div class="col-sm-4">
    <button type="submit" class="btn btn-success" name="btnLoc">Lọc</button>
  </div>
</div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Email</th>
      <th scope="col">Di động</th>
      <th scope="col">Làm việc tại</th>  
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM tbl_coquan INNER jOIN tbl_canbo ON tbl_coquan.id = tbl_canbo.id_donvi ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['full_name']; ?> </td>
      <td><?php echo $row['chucvu']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['sdt']; ?></td>
      <td><?php echo $row['tenDV']; ?></td>
      <td><a href="changeNV.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
      <td><a href="deleteNV.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
<?php include("footer.php");  
?>
