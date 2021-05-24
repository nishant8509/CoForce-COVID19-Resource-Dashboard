<?php require_once "controllerUserData.php"; ?>
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
    <body>
        <div class="desh">
            <div class="dhead">
                <h1>Welcome, <?php echo $fetch_info['name'] ?></h1>
            </div>
            <ul class="ul">
                <a href="home.php"><li>Home</li</a>
				<a href="daily.php"><li style="background: rgb(68, 0, 255);">Daily Health Check</li></a>
                <a href="posted.php"><li>Get Work</li></a>
                <a href="accepted.php"><li>Accepted Work</li></a>
                <a href="logout-user.php"><li>Logout</li></a>
            </ul>
        </div>
		<div class="head">
            <h1>Daily Health Assisment</h1>
        </div>
		<form class="form" action="" method="POST">
		    <p>Are you Covid-19 Positive :</p>
            <select name="test">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
            <p>Select Yes if you feel Dry cough in the past two weeks :</p>
            <select name="cough">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
            <p>Select Yes if you feel Headache in the past two weeks :</p>
            <select name="Headache">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
             <p>Select Yes if you feel Dizziness in the past two weeks :</p>
            <select name="Dizziness">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
            <p>Select Yes if you feel Body weakness in the past two weeks :</p>
            <select name="weakness">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			<p>Select Yes if you feel Loss of smell in the past two weeks :</p>
			<select name="smell">
			<option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
            <p>Select Yes if you feel Tiredness in the past two weeks :</p>
            <select name="Tiredness">
			    <option >Select</option>
			    <option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
            <button type="submit" name="submit">Submit</button>
        </form>
		<?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['test'])&& !empty($_POST['cough'])&& !empty($_POST['Headache'])&& !empty($_POST['Dizziness'])&& !empty($_POST['weakness'])&& !empty($_POST['smell'])&& !empty($_POST['Tiredness'])){
                $test=$_POST['test'];
                $cough=$_POST['cough'];
                $Headache=$_POST['Headache'];
                $Dizziness=$_POST['Dizziness'];
				$weakness=$_POST['weakness'];
                $smell=$_POST['smell'];
                $Tiredness=$_POST['Tiredness'];
                $name= $fetch_info['name'];
				$uid= $fetch_info['test1'];
                $query= "insert into Daily_assisment(covid_status,cough,Headache,Dizziness,weakness,smell,Tiredness,name,user_id) values('$test' , '$cough', '$Headache', '$Dizziness','$weakness','$smell', '$Tiredness','$name','$uid')";
                $run= mysqli_query($con,$query) or die(mysqli_error());
                if($run){
                     header("Location:op.php");
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


