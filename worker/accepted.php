<?php
require "connection.php";
require_once "controllerUserData.php";
?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertablec WHERE email = '$email'";
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
				<a href="daily.php"><li>Daily Health Check</li></a>
                <a href="posted.php"><li >Get Work</li></a>
                <a href="accepted.php"><li style="background: rgb(68, 0, 255);">Accepted Work</li></a>
                <a href="logout-user.php"><li>Logout</li></a>
            </ul>
        </div>
        <div class="head">
            <h1>Accepted Work</h1>
        </div>


        <?php
		$id= 1;
		$i= $fetch_info['test1'];
			if($id){
                $raw="select * from recive where test2 ='$i'";
				$result=$con->query($raw);
                   }

                   
                   while($row=$result->fetch_assoc()){?>

                    <div class="list">
                        <span style="color: #002060; padding-left: 10px;">Customer Name :</span><span style="padding-right: 10px;"> <?php echo $row['name']?></span><br>
                        <span style="color: #002060; padding-left: 10px;">Customer Mobile Number :</span><span style="padding-right: 10px;"> <?php echo $row['mobile']?></span><br>
                        <span style="color: #002060; padding-left: 10px;">Customer Requirement :</span><span style="padding-right: 10px;"> <?php echo $row['requirement']?></span><br>
                        <span style="color: #002060; padding-left: 10px;">Shipping Addres :</span><span style="padding-right: 10px;"> <?php echo $row['address']?></span>
						
                    </div>
					
					
                  <?php }
		?>
      </div>
    </body>
</html>


