<?php
@session_start();
include "../App/connection.php";



if(isset($_POST['logbutton'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "" && $password != ""){
       
        $sql_query = "SELECT * FROM credentials WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        while ($row=mysqli_fetch_array($result)) {
            if ($row['username']==$username && $row['password']==$password){
                
                $_SESSION['isLoggedIn'] = true;
              header('location: ../Public/home.php');
            }
            
	}
}
    else{
          $message = "Please enter your credentials";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location: ../Public/index.php');
    }
}


?>