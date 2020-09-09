<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST" accept-charset="utf-8">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<td colspan="2" style="text-align: center"><input type="submit" name="dangky" value="register"></td>
		</table>
	</form>
	<?php 
        $conn = mysqli_connect('localhost', 'root', '', 'trinh');
//Kiểm tra kết nối
if (!$conn) {
    die('kết nối không thành công ' . mysqli_connect_error());
}
if (isset($_POST['dangky'])) {
           	$Username = isset($_POST['Username']) ? mysql_escape_string($_POST['Username']) : '';
           	$Password = isset($_POST['Password']) ? md5($_POST['Password']) : '';
           	$Email= isset($_POST['Email']) ?mysql_escape_string($_POST['Email']) : '' ;          
           }
           // kiem tra mât khau ho ten trung nhau khong
           $sql = "SELECT * FROM knphp Where Username='$Username' or Email='$Email'";
           $result = mysqli_query($conn,$sql);
           if (mysqli_num_rows($result) > 0) {
           	 echo '<script> Alert("Bi trung ten hoac chua den ten!")</script>';
           	Die();
           }		

$sql = "INSERT INTO  knphp (Username, Password,Email) 
VALUES ('$Username', '$Password','$Email')";
//kiểm tra
if (mysqli_query($conn, $sql))
    //Thông báo nếu thành công
    echo 'Thêm thành công';
else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . mysqli_error($connect);
//ngắt kết nối
mysqli_close($connect);
	 ?>
</body>
</html>