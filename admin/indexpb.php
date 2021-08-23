<?php 
    include('header.php');
    include("config/db.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
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
      <a href="add_dv.php" class="btn btn-success">Thêm đơn vị</a>
    </div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên đơn vị</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>  
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM tbl_coquan";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['tenDV']; ?> </td>
      <td><?php echo $row['DiaChi']; ?></td>
      <td><?php echo $row['SDT']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['website']; ?></td>
      <td><a href="change_dv.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
      <td><a href="delete_dv.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
<?php include("footer.php");  
?>