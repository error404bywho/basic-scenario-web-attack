<!-- =========================PROFILE=============================== -->
<?php
session_start();
if(!isset($_SESSION['id_session'])){
  echo '<meta http-equiv="refresh" content="0;url=admin.php">';
  exit();
}
$id = $_GET['id'];
require('conn.php');

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
  <link rel="stylesheet" href="assets/css/edit.css">
</head>
<body>
  
  <div class="container">
  <aside class="sidebar">
  <div class="profile">
    <!-- ===============================UPLOADS============================ -->
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <?php echo '<label for="profile-pic-upload" class="profile-pic-label"><img src="uploads/' . $id . '.png" alt="Profile Picture" class="profile-pic"></label>'; ?>
    <input type="file" id="profile-pic-upload" name="profile-pic-upload" accept="image/*" style="display: none;" onchange="this.form.submit()">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    
</form>
  <!-- ===============================UPLOADS============================ -->

    <?php
 $id = $_GET['id'];
      $QC_school_info = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'school_info'";
      $QR_school_info = "SELECT * FROM school_info WHERE ID = '$id'";

      $result_column = mysqli_execute_query($conn, $QC_school_info);
      $result_row = mysqli_execute_query($conn, $QR_school_info);

      $Column_name = $result_column->fetch_array();
      $Row_value = $result_row->fetch_array();

      $fullname = $Row_value[1];
      $msv      = $Row_value[0];

      echo "<h2>" . $Row_value[1] . "&#x1F393;</h2>";
     
      echo "<hr>";
      echo "<p style=".'"font-size: 14px;"' .">MSV: " . $Row_value[0] . "</p>";
      echo "<br>";echo "<hr>";
      echo "<p style=".'"font-size: 14px;"' .">Class: " . $Row_value[2]. "</p>";
      echo "<br>";echo "<hr>";
      echo "<p style=".'"font-size: 14px;"' .">Course: " . $Row_value[5] . "</p>";
      echo "<br>";echo "<hr>";
      echo "<p style=".'"font-size: 14px;"' .">Major: " . $Row_value[3] . "</p>";
      echo "<br>";echo "<hr>";
      echo "<p style=".'"font-size: 14px;"' .">Faculty: " . $Row_value[6] . "</p>";
       
    ?>
    
    <hr style="margin-top: 40px;color : #c6c3c3">
  <?php
  echo '<a href="Profile.php?id='.$_GET['id'].'"><button class="edit-btn">&#x2B90; Back </button></a>';
  
  ?>
  </div>

</aside>
    <!-- =================================TOP-BAR============================ -->
    <div class="unique-top-right-bar">
  <div class="unique-menu-icon">
    <div class="unique-bar"><a href="dashboard.php?id=" class="unique-bar">&#x2302;</a></div>
    <div class="unique-bar"></div>
    <div class="unique-bar"></div>
  </div>
  <div class="unique-title">
    Học kỳ 1 - 2024-2025
  </div>
  <div class="unique-user-info">
    
   <?php echo "<span>". $fullname . " - " . $msv ."</span>"; ?>
   
    <?php echo '<img src="'. "uploads/".$id.".png" .'" alt="Avatar" class="unique-avatar">'; ?> 
  </div>
</div>
    <!-- ======================================================================= -->
    <main class="content" >
      <section class="personal-info" id="personal-info" >
        <h3>Profile</h3>
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
            echo "<div><strong>"."$Column_name[0] : "."</strong>"; 
            echo "<br>";
            echo '<input style=" background-color: #c6c3c3; cursor :not-allowed;" disabled type="text" value="'.$Row_value[$i].'">'."</div>";
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

        <h3>Personal</h3>
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
            echo "<div><strong>"."$Column_name[0] : "."</strong>"; 
            echo "<br>";
            echo '<input type="text" value="'.$Row_value[$i].'">'."</div>";
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
        <h3>Address</h3>
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
            echo "<div><strong>"."$Column_name[0] : "."</strong>";
            echo "<br>";
            echo '<input type="text" value="'.$Row_value[$i].'">'."</div>";
            $i++;
          }
            ?>
          
        <!-- =========================================================== -->
        </div>
      </section>

      <section class="contact-info" >
        <h3>Contact</h3>
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
            echo "<div><strong>"."$Column_name[0] : "."</strong>";
            echo "<br>";
            echo '<input type="text" value="'.$Row_value[$i].'">'."</div>";
            $i++;
          }
         
        //   $Column_name=$result_column->fetch_array();
        //   echo "<div><strong>"."$Column_name[0] : "."</strong>".'<a href="'."$Row_value[$i]".'"'.'target="_blank"'.'>https://www.facebook.com/profile.php?id=100027192362010</a>'."</div>";
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
