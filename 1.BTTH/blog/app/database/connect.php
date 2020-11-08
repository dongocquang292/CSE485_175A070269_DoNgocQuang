<!-- Đây là file để kết nối với Database, check xem có kết nối thành công ko -->
<?php 
$host='localhost';
$user='root';
$pass='';
$db_name='hocweb';

$conn = new MySQLi($host, $user, $pass, $db_name);
if($conn->connect_error){
    die('database connection error: '.$conn->connect_error);
}
?>