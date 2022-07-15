<?php      
    include('connection.php');
    // include('createrAccount.php');

    $username = $_POST['user'];  
    $password = $_POST['pass'];
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login_page_ where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h5>Your user name is</h5>";
            echo $username;
            echo "<br>";
            echo "<h5>Your password is</h5>";
            echo $password;
            echo "<div class='alert alert-success' role='alert'>
    Your have logged in Successfully
  </div>
  ";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }     
?>  
