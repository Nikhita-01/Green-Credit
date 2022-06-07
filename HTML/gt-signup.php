<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up
        </title>
        <!--CSS BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
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
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
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
                <a class="navbar-brand title-font" href="Green_Thinkers.php">GREEN THINKERS<h4 class="nav-moto">  Recyclying Solutions</h4></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item nav-opt">
                            <a class="nav-link" href="gt-about.php">About Us</a>
                        </li>
                        <li class="nav-item nav-opt">
                            <a class="nav-link" href="gt-signup.php">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 signup-form">
                    <h1>For Customers</h1>
                    <form method="POST" action="register.php">
                        <div class="mb-3">
                            <label for="form-label" class="form-label">First Name</label>
                            <input type="text" name="Fname" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Last Name</label>
                            <input type="text" name="Lname" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Address</label>
                            <input type="text" name="Address" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Date of birth</label>
                            <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="dateofbirth">
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="submits" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <!-- <div class="col-lg-6 signup-form">
                    <h1>For Business</h1>
                    <form >
                        <div class="mb-3">
                            <label for="form-label" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="companyname">
                        </div>
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Address</label>
                            <input type="text" class="form-control" id="form-label">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="submits" class="btn btn-success">Submit</button>
                    </form>
                </div> -->
            </div>
        </div>
        <!-- <div class="container-fluid single-log">
            <h2>Have an account?</h2>
            <a href="gt-login.php">
                <button type="button" class="btn btn-outline-success">Login</button>
            </a>
        </div> -->
        <footer id="footer">
            <a class="fab fa-twitter a"></a>
            <a class="fab fa-facebook-square a"></a>
            <a class="fab fa-instagram a"></a>
            <a class="fas fa-envelope a"></a>
            <p>© Copyright 2021 Green Thinkers</p>
        </footer>
    </body>
</html>