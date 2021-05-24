<?php
require "connection.php";
require_once "controllerUserData.php";
?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM service WHERE email = '$email'";
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
                <a href="home.php"><li >Home</li></a>
                <a href="accepted.php"><li style="background: rgba(255, 115, 0, 0.979);">Posted Service</li></a>
                <a href="logout-user.php"><li>Logout</li></a>
            </ul>
        </div>
        <div class="head">
            <h1>Posted Resorces</h1>
        </div>



        <?php
		$id= $fetch_info['test1'];
			if($id){
                $raw="select * from icu where test1='$id'";
				$result=$con->query($raw);
                   }
                   
                   while($row=$result->fetch_assoc()){?>

                    <div class="list">
                        <span style="color: orangered; padding-left: 10px;">Name :</span><span style="padding-right: 10px;"> <?php echo $row['name']?></span><br>
                        <span style="color: orangered; padding-left: 10px;">Phone Number :</span><span style="padding-right: 10px;"> <?php echo $row['phone']?></span><br>
                        <span style="color: orangered; padding-left: 10px;">Location :</span><span style="padding-right: 10px;"> <?php echo $row['location']?></span><br>
                        <span style="color: orangered; padding-left: 10px;">Service :</span><span style="padding-right: 10px;"> <?php echo $row['service']?></span>
						
                    </div>
					
					
                  <?php }
		?>
      </div>
    </body>
</html>


