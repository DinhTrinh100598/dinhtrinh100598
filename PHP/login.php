<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css" media="screen">
	body {
        background-image: url('/img/images3.jpg') ;
        background-repeat: no-repeat;
	}
form {
	       margin:0 auto;
	       max-width: 360px;
	       height: 480px;
	       background-color: rgba(44, 62, 80, 0.7);
	       margin-top:  50px;
	       box-shadow: 0px 0px 20px 5px white;
	       border-radius: 30px;
	       border: 1px solid rgba(44, 62, 80, 0.7);
     }

input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 20px 0;
  display: inline-block;
  border: 2px solid white;
  box-sizing: border-box;
  border-radius: 10px;
  background-color: rgba(44, 62, 80, 0.7);
  box-shadow: 0px 0px 20px 5px white;
}
input:hover{
     border: 2px solid  #0d1ad1;
     background-color: white;
}

button {
	
  color: white;
  padding: 10px;
  width: 50%;
  margin: auto;
  display: block;
  font-family: Arial, sans-serif;
  font-weight: 600;
  font-size: 15px;
  margin-top: 30px;
  border-radius: 12px;
  background-color:rgba(44, 62, 80, 0.7);
  border: 2px solid white;
  box-shadow: 0px 0px 20px 5px white;
  
}

button:hover {
  color: #131414;
  background-color: white;
  
}

.container {
  padding: 30px;
  text-align: center;
   padding-top: 60px;
}
p{color: white;
	font-size: 16px;
     text-align: center;
     margin-top: 30px;
}
	a{
       color: #0bdb0e;
	}
.logincontainer{
	text-align: center;
	color: white;
	max-width: 100%;height: 60px;
	background-color: rgba(50, 65, 85, 0.8);
	 line-height: 60px;
	 border-radius: 30px;
	 font-size: 24px;
	 font-family:  Arial ,Helvetica ;
	 text-shadow: 0.1em 0.1em white;
	  box-shadow: 0px 5px 30px 0px blue;
  

}
	</style>
</head>
<body> 
	 <form action="login.php" method="POST">
	 	<div class="logincontainer">
	 	  <span>LOG IN</span>
	 	</div>
  <div class="container">
     <div class="form_name">
    <input type="text" placeholder="Enter you Username" name="Username" required>
     </div>
    <div class="form_name">
    <input type="password" placeholder="Enter you Password" name="Password" required>
     </div>  
    <button type="submit" name="dangnhap">SIGNIN</button>
     <p>You do not have an account <a href="register.php">Sign up now</a></p>
  </div>
</form>
   <?php  
       session_start();
       include ("connect.php");
       if (isset($_POST['dangnhap'])) {
       	   $Username = addslashes($_POST['Username']);
       	   $Password = addslashes($_POST['Password']);

       	  if (!$Username || !$Password) {
       	   	  echo' vui long nhập đủ !.';
       	   	  exit();
       	   } 
       	   $Password=md5($Password);
            
			$sql = "select * from sinhvienk where Username = '$Username' and Password = '$Password' ";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}

       	   $_SESSION['Username']= $Username;	
       	   header('Location:index.php');
       	   
       }

   ?>  
</body>
</html>