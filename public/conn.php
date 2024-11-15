<?php 
$db_host = "localhost";
$conn = mysqli_connect($db_host,'student','@Student123','students');


if(!isset($conn)){
    exit ("can't create conn to connect  'students' ");
}