<?php
include('header.php');
?>
<div class="h3 text-center mt-5">Thông tin liên hệ các phòng ban của trường đại học thủy lợi</div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên đơn vị</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>  
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
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>

<?php 
include('footer.php');
?>