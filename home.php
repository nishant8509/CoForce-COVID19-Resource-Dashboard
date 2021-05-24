<?php require_once "controllerUserData.php"; ?>
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
    <body>
        <div class="desh">
            <div class="dhead">
                <h1>Welcome, <?php echo $fetch_info['name'] ?></h1>
            </div>
            <ul class="ul">
                <a href="home.php"><li style="background: rgba(255, 115, 0, 0.979);">Home</li></a>
				<a href="icu.php"><li>ICU Beds</li></a>
				<a href="ob.php"><li>Oxygen Beds</li></a>
				<a href="os.php"><li>Oxygen Supplies</li></a>
				<a href="m.php"><li>Medicines</li></a>
				<a href="chat\loginz.php"><li>Tiffin Services</li></a>
				<a href="c.php"><li>Covid Testing</li></a>
				<a href="b.php"><li>Blood</li></a>
                <a href="post.php"><li>Post Requirement</li></a>
                <a href="posted.php"><li>Posted Requirement</li></a>
                <a href="accepted.php"><li  >Accepted Requirement</li></a>
                <a href="logout-user.php"><li>Logout</li></a>
            </ul>
        </div>
		<div class="head">
		    <h1>What are you looking for</h1>
		</div>
		<div class="block">
		   <a href="icu.php">
		    <div class="lblock">
			   <div class="img">
			       <img src="img/hospital.49030ac4.svg">
			   </div>
			   <div class="bodm">
			       <h2>ICU Beds</h2>
				   <p>Click here to find beds in your location</p>
		       </div>
			</div>
			</a>
			<a href="ob.php">
			<div class="rblock">
			     <div class="img">
			       <img src="img/bed.c74e1810.svg">
			   </div>
			   <div class="bodm">
			       <h2>Oxygen Beds</h2>
				   <p>Click here to find beds in your location</p>
		       </div>
			</div>
			</a>
		</div>
		<div class="block">
		   <a href="os.php">
		    <div class="lblock">
			   <div class="img">
			       <img src="img/oxygen.13072382.svg">
			   </div>
			   <div class="bodm">
			       <h2>Oxygen Supplies</h2>
				   <p>Find Cylinders, Refillers in Your Locatity</p>
		       </div>
			</div>
			</a>
			<a href="m.php">
			<div class="rblock">
			     <div class="img">
			       <img src="img/medicine.fafe8915.svg">
			   </div>
			   <div class="bodm">
			       <h2>Medicines</h2>
				   <p>Find Medicines in Your Area</p>
		       </div>
			</div>
			</a>
		</div>
		<div class="block">
		   <a href="">
		    <div class="lblock">
			   <div class="img">
			       <img src="img/tiffin.777305db.svg">
			   </div>
			   <div class="bodm">
			       <h2>Tiffin Services</h2>
				   <p>Get Food Delivered At Your Doorsteps</p>
		       </div>
			</div>
			</a>
			<a href="c.php">
			<div class="rblock">
			     <div class="img">
			       <img src="img/testing.83f40232.svg">
			   </div>
			   <div class="bodm">
			       <h2>Covid Testing</h2>
				   <p>Find RT-PCR Tests in Your Locality</p>
		       </div>
			</div>
			</a>
		</div>
		<div class="block">
		   <a href="b.php">
		    <div class="lblock">
			   <div class="img">
			       <img src="img/blood.8551f066.svg">
			   </div>
			   <div class="bodm">
			       <h2>Blood</h2>
				   <p>Find Donors For Blood Therapy</p>
		       </div>
			</div>
			</a>
			<a href="post.php">
			<div class="rblock">
			     <div class="img">
			       <img src="img/home-care.d282e48f.svg">
			   </div>
			   <div class="bodm">
			       <h2>Post Other Requirements</h2>
				   <p>Click here to Post Other Requirements</p>
		       </div>
			</div>
			</a>
		</div>
    </body>
</html>


