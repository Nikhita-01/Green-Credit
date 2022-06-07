<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "green");
mysqli_select_db($conn , 'green');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$s = $_SESSION['name'];
// $t = $_SESSION['fname'];
// $u = $_SESSION['lname'];
// $v = $_SESSION['add'];
// $w = $_SESSION['dob'];
$selectquery = " select * from greencredit";
$query = mysqli_query($conn,$selectquery);
$numofrows = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query))
{
if ($res['Email'] == $s)
{
  $t = $res['Fname']; 
  $a = $res['quan'];
  $i = $res['item'];
  $c = $res['credit'];
  
}
}
 $_SESSION['fname'] = $t;
 $_SESSION['quan'] = $a;
 $_SESSION['item'] = $i;
 $_SESSION['credit'] = $c;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
<nav class="navbar navbar-expand-lg navbar-light nav-bkg">
        <a class="navbar-brand title-font" href="">GREEN THINKERS:<span class="nav-moto"> Recyclying Solutions</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <!-- <li class="nav-item nav-opt">
                    <a class="nav-link" href="gt-about1.php">About Us</a>
                </li> -->
                <li class="nav-item nav-opt">
                    <a class="nav-link" href="Green_Thinkers.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    
    <div class="px-0 bg-light">
        <div class="d-flex">
            <div class="d-flex align-items-center " id="navbar"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button> <a class="text-decoration-none fs14 ps-2" href="#">GREEN THINKERS</a> </div>
            
        </div>
        <div class="d-md-flex">
            <ul id="navbar-items" class="p-0">
                <li><a href="gt-dashboard.php"> <span class="fas fa-th-list"></span> <span class="ps-3 name">Dashboard</span></a> </li>
                <!-- <li> <span class="fas fa-chart-line"></span> <span class="ps-3 name">Transactions</span> </li> -->
                <li><a href="gt-profile.php"> <span class="fas fa-calendar-alt"></span> <span class="ps-3 name">Profile</span></a> </li>
                <li><a href="gt-credit.php">  <span class="fas fa-chart-line"></span> <span class="ps-3 name">Credits</span> </a></li>
                <li><a href="gt-procedure1.php">  <span class="fas fa-clipboard-check"></span> <span class="ps-3 name">Procedure</span></a> </li>
                <li><a href="gt-about1.php">  <span class="fas fa-store-alt"></span> <span class="ps-3 name">About us</span></a> </li>
                <li><a href="gt-contactus.php">  <span class="fas fa-comment-alt" ></span> <span class="ps-3 name">Contact us</span></a> </li>
            </ul>
            <div id="topnavbar" class="summary">
                <h2 style="color: #30702d; font: georgia;">&nbsp;&nbsp;HELLO <?php echo $_SESSION['fname']?></h2>
              
                <div class="table-responsive px-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">SR NO.</th>
                                <th scope="col">ITEM<span>ID</span></th>
                                <th scope="col">QUANTITY</th>
                                <!-- <th scope="col">DATE</th> -->
                                <th scope="col">CREDIT SCORE</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><?php echo $_SESSION['item']?> </td>
                                <td><?php echo $_SESSION['quan']?> </td>
                                <td><?php echo $_SESSION['credit']?> </td>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>