<?php
require "connection.php";
require_once "controllerUserData.php";
?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylemh.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 <body>
 </body>
</html>
    </head>
    <body >
      <div class="c" style="margin-left: -27%;">
        <div class="head">
            <h1>Add Resouces as Service Provider</h1>
        </div>
        <form class="form" action="" method="POST">
            <p>Name :</p>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <p>Mobile :</p>
             <input type="number" name="mobile" placeholder="Enter Your Monile Number">
             <p>location :</p>
             <input type="text" name="location" placeholder="Enter Your Requirement">
             <p>Service :</p>
             <input type="text" name="service" placeholder="Enter Your Addres">
            <button type="submit" name="submit">Submit</button>
        </form>
		<?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['name'])&& !empty($_POST['location'])&& !empty($_POST['service'])&& !empty($_POST['mobile'])){
                $name=$_POST['name'];
                $location=$_POST['location'];
                $service=$_POST['service'];
                $mobile=$_POST['mobile'];
				$ved='all';
                $v= $location." ".$ved ;
                $query= "insert into icu (name,location,service,phone,keywords) values('$name' , '$location', '$service', '$mobile','$v')";
                $run= mysqli_query($con,$query) or die(mysqli_error());
                if($run){
                     header("Location:oi.php");
                }
                else{
                     echo "not submited";
                }
            }
            else{
                echo "all fields required";
            }
        }
		?>
    </body>
 
</html>


