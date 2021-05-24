<?php
require "connection.php";
if(isset($_POST['submit'])){
    if(!empty($_POST['name'])&& !empty($_POST['requirement'])&& !empty($_POST['address'])&& !empty($_POST['mobile'])){
        $name=$_POST['name'];
        $requirement=$_POST['requirement'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        
        $query= "insert into recive(name,requirement,address,mobile) values('$name' , '$requirement', '$address', '$mobile')";
        $run= mysqli_query($con,$query) or die(mysqli_error());
        if($run){
             echo "submited";
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