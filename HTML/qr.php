<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Green Thinkers
        </title>
        <!--CSS BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/gt-1CSS.css">
        <!--JS BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Courier+Prime&family=Kanit:wght@600&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
        <!--Favicon-->
        <link rel="icon" href="favicon -gt.ico">
        <!--FONT AWESOME-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    </head>
    <body>
        <div class="containier-fluid sec-title ">
            <nav class="navbar navbar-expand-lg navbar-light nav-bkg">
                <a class="navbar-brand title-font" href="">GREEN THINKERS:<span class="nav-moto">    Recyclying Solutions</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item nav-opt">
                            <a class="nav-link" href="gt-dashboard.php">Next</a>
                        </li>
                        <li class="nav-item nav-opt">
                            <a class="nav-link" href="Green_Thinkers.php">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
</body>
</html>
<?php 
 session_start();
 $conn = mysqli_connect("127.0.0.1", "root", "", "green");
 mysqli_select_db($conn , 'green');
  echo "<h2>Hello</h2>".$_SESSION['name'];
  $data = $_SESSION['name']; 
 echo "<h2>Output</h2>"; 
 echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>";
 
 ?>
 