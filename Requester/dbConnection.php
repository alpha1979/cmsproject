<?php
$host = "localhost";
$db_name= "cmsproject_db";
$db_user="root";
$db_pwd = "";

$conn = new mysqli($host,$db_user,$db_pwd,$db_name);

if($conn->connect_error){
    die("connection failed");
}else{
   echo "connection";
}
// }catch(mysqli_sql_exception $e){
//     // echo "connection failed " + $e->getMessage();
// }
