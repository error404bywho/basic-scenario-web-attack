<?php 
$conn = mysqli_connect('localhost','root','','students');


if(!isset($conn)){
    exit ("can't create conn to connect  'students' ");
}