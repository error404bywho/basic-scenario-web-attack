<!-- =========================PROFILE=============================== -->
<?php
include('conn.php');
$id = '24GIT202';
/*
1. Select all rows's name in db
- address_info
- contact_info
- private_info
- school_info
2. Select all in4
*/
 
?>
<!-- =========================PROFILE=============================== -->

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
  <div class="container">
  <aside class="sidebar">
  <div class="profile">
    <img src="uploads/23CE.B030.jpg" alt="Profile Picture" class="profile-pic">
    <?php
      $QC_school_info="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'school_info'";
      $QR_school_info="SELECT * FROM school_info WHERE ID = '$id'";

      $result_column = mysqli_execute_query($conn, $QC_school_info);
      $result_row = mysqli_execute_query($conn, $QR_school_info);

      $Column_name = $result_column->fetch_array();
      $Row_value = $result_row->fetch_array();

      echo "<h2>" . $Row_value[1] . "</h2>";
      echo "<p>MSV " . $Row_value[0] . " | Lớp " . $Row_value[2] . " | Course " . $Row_value[5] . "</p>";
      echo "<p>Major: " . $Row_value[3] . "</p>";
      echo "<p>Faculty: " . $Row_value[6] . "</p>";
    ?>
    <button class="edit-btn">Sửa Hồ Sơ</button>
    <button class="edit-btn">Xuất Lý Lịch</button>
  </div>

  <nav class="menu">
    <ul>
      <li><a href="#personal-info">Thông Tin Cá nhân</a></li>
      <li><a href="#address-grid">Thường Trú Và Địa Chỉ</a></li>
      <li><a href="#contact-info">Thông tin liên hệ</a></li>
    </ul>
  </nav>

   <!-- Nút Logout đặt ở dưới cùng -->
   
   <button class="export-btn">&#x1F511; Logout</button>

</aside>

    <main class="content" >
      <section class="personal-info" id="personal-info" >
        <h3>Lê Đình Vũ</h3>
        <div class="info-grid" >
        <!-- =====================school-info========================= -->
        <?php
          $QC_school_info="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'school_info'";
          $QR_school_info="SELECT * FROM school_info WHERE ID = '$id'";

       
          $result_column = mysqli_execute_query($conn,$QC_school_info);
          $result_row = mysqli_execute_query($conn,$QR_school_info);

          $Column_name=$result_column->fetch_array(); //phần tử đầu tiên của cột luôn là id nên loại bỏ
          
          $Row_value=$result_row->fetch_array(); //row chỉ trả về 1 hàng vì select theo id
          $i=1;
          while($Column_name=$result_column->fetch_array() ){
            echo "<div><strong>"."$Column_name[0] : "."</strong>"."$Row_value[$i]"."</div>";
            $i++;
          }
            ?>
        <!-- <div><strong>Họ và tên:</strong> Lê Đình Vũ</div>
          <div><strong>Lớp :</strong>23CE.B030 </div>
          <div><strong>Khóa :</strong> 2023-2027</div>
          <div><strong>Ngành : </strong> Thiết Kế Vi Mạch Bán Dẫn (Cử Nhân) </div>
          <div><strong>Khoa : </strong> Kỹ Thuật Máy Tính và Điện Tử</div> -->
        <!-- =========================================================== -->
        </div>
      </section>

    <main class="content">
      <section class="personal-info">
        <h3>Thông tin cá nhân</h3>
        <div class="info-grid">
        <!-- ====================private-info============================ -->
        <?php
          $QC_private_info="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'private_info'";
          $QR_private_info="SELECT * FROM private_info WHERE ID = '$id'";

       
          $result_column = mysqli_execute_query($conn,$QC_private_info);
          $result_row = mysqli_execute_query($conn,$QR_private_info);

          $Column_name=$result_column->fetch_array(); //phần tử đầu tiên của cột luôn là id nên loại bỏ
          
          $Row_value=$result_row->fetch_array(); //row chỉ trả về 1 hàng vì select theo id
          $i=1;
          while($Column_name=$result_column->fetch_array() ){
            echo "<div><strong>"."$Column_name[0] : "."</strong>"."$Row_value[$i]"."</div>";
            $i++;
          }
            ?>

        <!-- <div><strong>Họ và tên:</strong> Lê Đình Vũ</div>
          <div><strong>Ngày sinh:</strong> 2005-03-11</div>
          <div><strong>Giới tính:</strong> Nam</div>
          <div><strong>CCCD:</strong> 048205002022</div>
          <div><strong>Nơi cấp:</strong> Đà Nẵng</div>
          <div><strong>Ngày cấp:</strong> 2023-06-22</div>
          <div><strong>Tôn giáo:</strong> Không</div> -->
        <!-- =========================================================== -->
        </div>
      </section>

      
      <section class="address-info" >
        <h3>Thường trú và địa chỉ</h3>
        <div class="info-grid" id="address-grid">
          <!-- ==================address-info============================== -->
          <?php
          $QC_address_info="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'address_info'";
          $QR_address_info="SELECT * FROM address_info WHERE ID = '$id'";

       
          $result_column = mysqli_execute_query($conn,$QC_address_info);
          $result_row = mysqli_execute_query($conn,$QR_address_info);

          $Column_name=$result_column->fetch_array(); //phần tử đầu tiên của cột luôn là id nên loại bỏ
          
          $Row_value=$result_row->fetch_array(); //row chỉ trả về 1 hàng vì select theo id
          $i=1;
          while($Column_name=$result_column->fetch_array() ){
            echo "<div><strong>"."$Column_name[0] : "."</strong>"."$Row_value[$i]"."</div>";
            $i++;
          }
            ?>
          
        <!-- =========================================================== -->
        </div>
      </section>

      <section class="contact-info" >
        <h3>Thông tin liên hệ</h3>
        <div class="info-grid" id="contact-info">
          <!-- ==================contact-info============================= -->
          <?php
          $QC_contact_info="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'contact_info'";
          $QR_contact_info="SELECT * FROM contact_info WHERE ID = '$id'";

       
          $result_column = mysqli_execute_query($conn,$QC_contact_info);
          $result_row = mysqli_execute_query($conn,$QR_contact_info);

          $Column_name=$result_column->fetch_array(); //phần tử đầu tiên của cột luôn là id nên loại bỏ
          
          $Row_value=$result_row->fetch_array(); //row chỉ trả về 1 hàng vì select theo id
          $i=1;
          while($Column_name=$result_column->fetch_array() ){
            echo "<div><strong>"."$Column_name[0] : "."</strong>"."$Row_value[$i]"."</div>";
            $i++;
          }
            ?>
        <!-- <div><strong>Email khác:</strong> connguathanhtroia@gmail.com</div>
          <div><strong>Điện thoại:</strong> 0764524805</div>
          <div><strong>Facebook:</strong> -</div>
          <div><strong>Zalo:</strong> 0764524805</div> -->
        <!-- =========================================================== -->
        </div>
      </section>

      <footer>
        <p>©Bản quyền thuộc về Trường ĐH CNTT&TT Việt - Hàn - Đại học Đà Nẵng</p>
      </footer>
    </main>
  </div>
</body>
</html>
