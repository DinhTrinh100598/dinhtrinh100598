<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng ký</title>
	<meta name="viewport" content="width =device-width,initial-scale =1.0">
	<style type="text/css" media="screen">
		body {
		margin:0 auto;
        background-image: url('/img/images3.jpg') ;
        background-repeat: no-repeat;
	}
form {  
	       margin:0 auto;
	       max-width: 340px;
	       height: 480px;
	       background-color: rgba(44, 62, 80, 0.7);
	       margin-top:  50px;
	       border-radius: 30px;
	       box-shadow: 0px 0px 20px 5px white;
     }

input[type=text], input[type=password] {
  width: 90%;
  padding: 10px 20px;
  margin: 15px 0;
  display: inline-block;
  border: 2px solid white;
  box-sizing: border-box;
  border-radius: 10px;
  background-color: rgba(44, 62, 80, 0.7);
       box-shadow: 0px 0px 20px 0px white;
}
input:hover{
	background-color: white;
	border: 2px solid #0d1ad1;
}

button {
  background-color: rgba(44, 62, 80, 0.7);
  color: white;
  width: 50%;
  padding: 10px;
  margin: auto;display: block;
  font-family: Arial, sans-serif;
  font-weight: 600;
  font-size: 15px;
  margin-top: 20px;
  border: 2px solid white;
  border-radius: 12px;
  box-shadow: 0px 0px 20px 0px white;
  
}

button:hover {
  color: #131414;
  background-color: white;
  
}

.container {
  padding: 30px;
  text-align: center;
   padding-top: 50px;
}
p{
	color: white;
	font-size: 16px;
	
}
 a{
 	text-decoration: none;
 	color: #E8F012;
 }
.rigistercontainer{
	text-align: center;
	 color: white;
	max-width: 100%;height: 60px;
	background-color: rgba(50, 65, 85, 0.8);
	 line-height: 60px;
	 border-radius: 30px;
	 font-size: 30px;
	 font-family:  Arial ,Helvetica ;
	 box-shadow: 0px 5px 30px 0px blue;
	 text-shadow: 0.05em 0.05em white;
  

}
	</style>
</head>
<body>
	 <form action="register.php" method="POST">
	 	<div class="rigistercontainer">
	 	  <span>Rigister</span>
	 	</div>
  <div class="container">
     <div class="form_name">
    <input type="text" placeholder="Enter you Username" name="Username" required>
     </div>
    <div class="form_name">
    <input type="text" placeholder="Enter you Password" name="Password" required>
     </div> 
     <div class="form_name">
    <input type="text" placeholder="Enter you Email" name="Email" required>
     </div>  
     <p>You agree to ,creating an account<span class="ah"><a href="#"> Terms & Conditions</span></p>
     <button type="submit" name="dangky">Create account</button>
  </div>
</form>
     <?php  
         include("connect.php");
         if (isset($_POST['dangky'])) {
         	$Username=$_POST['Username'];
         	$Password =$_POST['Password'];
         	$Email = $_POST['Email'];
         	$Password =md5($Password);
         $sql ="INSERT INTO `sinhvienk`( `Username`, `Password`, `Email`) VALUES ('$Username','$Password','$Email')";
                $query = mysqli_query($connect,$sql);
         	echo'dang ky thanh cong!';
         	header('location:login.php');
         }
          

     ?>
</body>
</html>