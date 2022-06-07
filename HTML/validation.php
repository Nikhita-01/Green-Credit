<?php
       session_start();
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
       
       $q = "select * from greencredit where Email ='$email' && pwd = '$pwd'";
        $result = mysqli_query($conn , $q);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $_SESSION['password'] = $pwd;
            $_SESSION['name'] = $email;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['add'] = $add;
            $_SESSION['dob'] = $dob;
            $_SESSION['quan'] = $quan;
            $_SESSION['item'] = $item;
            $_SESSION['credit'] = 0;
           
            header('location:qr.php');
            
        }
        else{
            header('location:gt-login.php');
        }
    

        ?>