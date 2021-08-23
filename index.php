<?php
    include('header.php');

?>
<div class="h3 text-center mt-5">Thông tin liên hệ của tất cả cán bộ trường đại học Thủy Lợi</div>
<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Email</th>
      <th scope="col">Di động</th>
      <th scope="col">Làm việc tại</th>  
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
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
<?php
    include('footer.php')
?>
