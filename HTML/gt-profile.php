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
  $u = $res['Lname'];
  $v = $res['Address'];
  $w = $res['dob'];
  $c = $res['credit'];
}
}
 $_SESSION['fname'] = $t;
 $_SESSION['lname'] = $u;
 $_SESSION['add'] = $v;
 $_SESSION['dob'] = $w;
 $_SESSION['credit'] = $c;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        Profile
    </title>
    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/gt-1CSS.css">
    <!--JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Courgette&family=Courier+Prime&family=Kanit:wght@600&family=Noto+Sans+JP:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="favicon -gt.ico">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>

        .container {

            background-color: #eef895e8;
        }

        p {
            margin: 0
        }

        .d-flex a {
            text-decoration: none;
            color: #686868
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover
        }

        .fab.fa-twitter {
            color: #8ab7f1
        }

        .fab.fa-instagram {
            color: #E1306C
        }

        .fab.fa-facebook-f {
            color: #5999ec
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light nav-bkg">
        <a class="navbar-brand title-font" href="#">GREEN THINKERS:<span class="nav-moto"> Recyclying
                Solutions</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item nav-opt">
                    <a class="nav-link" href="gt-about1.php">About Us</a>
                </li>
                
               
                <li class="nav-item nav-opt">
                    <a class="nav-link" href="Green_Thinkers.php">Sign Out</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-12  p-0 px-3 py-3 mb-3">
                        <div class="d-flex flex-column align-items-center"> <img class="photo"
                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                alt="">
                            <p class="fw-bold h4 mt-3"><?php echo $_SESSION['fname']?></p>
                            <!-- <p class="text-muted">Indiviual</p> -->
                            <!-- <p class="text-muted mb-3">Mumbai</p> -->
                            <div class="d-flex ">
                                <div class="btn btn-primary follow me-2">Edit profile</div>
                                <div class="btn btn-outline-primary message">Share</div>
                            </div>
                            <div class="d-flex " style="margin-top: 30px;">
                               <a href="gt-dashboard.php"> <button class="btn btn-primary follow me-2" >DashBoard</button> </a>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-7 ps-md-4">
                <div class="row">
                    <div class="col-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">First Name</p>
                            <p class="py-2 text-muted"><?php echo $_SESSION['fname']?></p>

                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Last Name</p>
                            <p class="py-2 text-muted"><?php echo $_SESSION['lname']?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Email</p>
                            <p class="py-2 text-muted"><?php echo $_SESSION['name']?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Credit Score</p>
                            <p class="py-2 text-muted"><?php echo $_SESSION['credit']?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Address</p>
                            <p class="py-2 text-muted"><?php echo $_SESSION['add']?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">DOB</p>
                            <p class="py-2 text-muted"> <?php echo $_SESSION['dob']?></p>
                        </div>
                    </div>
                    <div class="col-12 bg-white p-0 px-2 pb-3 mb-3">
                        <div class="d-flex justify-content-between border-bottom py-2 px-3">
                            <p><span class="fab fa-twitter me-2"></span>Twitter</p> <a href="https://twitter.com/?lang=en">Twitter</a>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 px-3">
                            <p><span class="fab fa-instagram me-2"></span>Instagram</p> <a href="https://www.instagram.com/">Instagram</a>
                        </div>
                        <div class="d-flex justify-content-between py-2 px-3">
                            <p><span class="fab fa-facebook-f me-2"></span>facebook</p> <a href="">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>