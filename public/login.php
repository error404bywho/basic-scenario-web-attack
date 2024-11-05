<?php 
include 'php/conn.php';
if(isset($_POST['student_id']) && isset($_POST['password'])){
$id =   $_POST['student_id'];
$password = $_POST['password'];
$query = "SELECT * FROM account WHERE id = '$id' AND password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if(!isset($row)){
    echo '<div><div class="error-message">invalid login, please try again</div></div>';
   // header("Location: admin.php");
}
else {
    header("Location : Profile.html");
   
}
    }
