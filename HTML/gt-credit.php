<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Credit</title>
    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="CSS/gt-1CSS.css" />
    <!--JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Courgette&family=Courier+Prime&family=Kanit:wght@600&family=Noto+Sans+JP:wght@300&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet" />
    <!--Favicon-->
    <link rel="icon" href="favicon -gt.ico" />
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    .contact-form {
        background: #f0fc8c;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 50%;
        border-radius: 20px;
    }

    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-form form {
        padding: 11%;
    }

    .contact-form form .row {
        margin-bottom: -7%;
    }

    .contact-form h3 {
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #094409;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #18ad0a;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
        
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #00cc2c;
        border: none;
        cursor: pointer;
        height: 20px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light nav-bkg">
        <a class="navbar-brand title-font" href="">GREEN THINKERS:<span class="nav-moto"> Recyclying
                Solutions</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item nav-opt">
                    <a class="nav-link" href="gt-dashboard.php">Dash Board</a>
                </li>
                <li class="nav-item nav-opt">
                    <a class="nav-link" href="Green_Thinkers.php">Sign Out</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <div class="container contact-form">
        <form method="POST">
            <h3>Credits gained</h3>
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="form-group"> 
                    <label for="recycling">Recycling products:</label>
  <select name="recycling" id="recycling">
    <option value="paper">Paper</option>
    <option value="plastic">Plastic</option>
    <option value="Wood">Wood</option>
    <option value="Electronic">Electronic</option>
    <option value="Clothes">Clothes</option>
    <option value="Tyres">Tyres</option>
  </select>
 
</form> -->

                    <div class="form-group">
                        <label for="recycling">Recycling products:</label>
                        <select name="recycling" id="recycling" class="form-select" aria-label="Default select example">
                            <option value="paper" name="options">Paper</option>
                            <option value="plastic" name="options">Plastic</option>
                            <option value="Wood" name="options">Wood</option>
                            <option value="Electronic" name="options">Electronic</option>
                            <option value="Clothes" name="options">Clothes</option>
                            <option value="Tyres" name="options">Tyres</option>
                        </select>
                        <br />

                        <input type="text" name="quan" class="form-control"
                            placeholder="Quantity of products sent for recycling(in kgs)" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="extra" class="form-control"
                            placeholder="Extra credits made(Planting a tree,helped in cleaning drive,etc.)" value="" />
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                            value="" />
                    </div> -->
                    <div class="form-group">
                     <input type="submit"  name="btnSubmit" class="btnContact" value="Submit" style="height:40px" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <p> Add a file for evidence, to help us know that you are sustained green thinker :) </p>
                        <input type="file" id="myFile" name="filename" />
                        <!-- <input type="submit"> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
         
          $_ans = $_REQUEST['quan'];
        //   if ($_ans == "paper" || $_ans == "plastic" || $_ans == "Wood" || $_ans == "Electronic" || $_ans == "Clothes" || $_ans == "Tyres")
        //   {
        //     echo "HELOO";
        //     $_SESSION['credit'] = $_SESSION['credit'] + 5;
        //   } 
        if($_ans <= 50)
        {
            $_SESSION['credit'] = $_SESSION['credit'] + $_ans;
        }
        else 
        {
            $_SESSION['credit'] = $_SESSION['credit'] + $_ans + 10;
        }

            
          
                  ?>
    <?php
                
                $conn = mysqli_connect("127.0.0.1", "root", "", "green");
                mysqli_select_db($conn , 'green');
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                  }
               $i = $_REQUEST['recycling'];
               $a = $_REQUEST['quan'];
               $s = $_SESSION['name'];
               $r = $_SESSION['credit'];
               
               $sql="UPDATE `greencredit` SET `credit`='$r',`quan`='$a',`item`='$i' where `Email`= '$s' ";
               mysqli_query($conn , $sql);
              
               
               

            
                  ?>
</body>

</html>