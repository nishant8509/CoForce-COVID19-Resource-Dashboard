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
      <div class="c">
        <div class="desh">
            <div class="dhead">
                <h1>Welcome, <?php echo $fetch_info['name'] ?></h1>
            </div>
            <ul class="ul">
                <a href="home.php"><li>Home</li></a>
				<a href="icu.php"><li>ICU Beds</li></a>
				<a href="ob.php"><li>Oxygen Beds</li></a>
				<a href="os.php"><li>Oxygen Supplies</li></a>
				<a href="m.php"><li>Medicines</li></a>
				<a href=".php"><li>Tiffin Services</li></a>
				<a href="c.php"><li>Covid Testing</li></a>
				<a href="b.php"><li>Blood</li></a>
                <a href="post.php"><li  style="background: rgba(255, 115, 0, 0.979);">Post Requirement</li></a>
                <a href="posted.php"><li>Posted Requirement</li></a>
                <a href="accepted.php"><li>Accepted Requirement</li></a>
                <a href="logout-user.php"><li>Logout</li></a>
            </ul>
        </div>
        <div class="head">
            <h1 style="padding-top: 250px;">Submition Successfuly</h1>
        </div>
        
    </body>
</html>


