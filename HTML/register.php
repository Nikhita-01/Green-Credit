<?php
       session_start();
       
        header("location:gt-login.php");
        echo "hello";
        $conn = mysqli_connect("127.0.0.1", "root", "", "green");
        mysqli_select_db($conn , 'green');
        $fname =  $_POST['Fname'];
        $lname =  $_POST['Lname'];
        $add =  $_POST['Address'];
        $email =  $_POST['Email'];
        $dob =  $_POST['dob'];
        $pwd = $_POST['pwd'];
        $quan = $_POST['quan'];
        $item = $_POST['item'];
       $q = "select * from greencredit where Fname ='$fname' ";
      // $_SESSION['name'] = $name;
        $result = mysqli_query($conn , $q);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            
            header('location:gt-signup.php');
        }
        else{
           
            //$_SESSION['score'] = 0;
            $sql = "INSERT INTO greencredit (Fname,Lname,Address,Email,dob,pwd,quan,item)  VALUES ('$fname','$lname','$add','$email','$dob','$pwd','$quan','$item')";
            mysqli_query($conn , $sql);
            echo "Registration successful";
           
        }
    

        ?>