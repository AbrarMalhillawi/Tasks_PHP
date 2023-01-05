<?php
require_once("server.php");
$fname="";
$mname="";
$lname="";
$family="";
$email="";
$password="";
$con_pass="";
$age="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"          integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
        .gradient-custom {
            background: #6a11cb;
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
        .vh-100 {
            height: auto !important;
        }

        #aa:hover {
          color : blue !important;
        }
    </style>
</head>
<body>
   
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please enter your Information!</p>
             <form method="POST">
            
             <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($POST['fname']))
             {
              if(isset($POST['fname']))
              {
                if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['fname']))
                {
                  $fname=$_POST['fname'];
                  echo "$fname";

                }
                else 
                {
                  echo "<p style='color:red !important'> you cant use special charachter or number </p>";
                }
              }
             }
             ?>



             <div class="form-outline form-white mb-4">
                <input type="text" name="fname" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">First Name</label>
              </div>



               <?php
                     if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['mname']))
                     {
                      if(isset($_POST['mname']))
                      {
                        if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['mname']))
                        {
                                 $mname=$_POST['mname'];
                        }
                        else {
                          echo "<p style='color:red !important'>you cant use special character or number </p>";
                        }
                      }
                     }
 
                     ?>

              <div class="form-outline form-white mb-4">
                <input type="text" name="mname" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Middle Name</label>
              </div>

              <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['lname']))
              {
                if(isset($_POST['lname']))
                {
                  if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['lname']))
                  {
                    $lname=$_POST['lname'];
                  }
                  else 
                  {
                    echo "<p style='color:red !important'>You can't use special character or number</p>";
                  }
                }
              }
              ?>


              <div class="form-outline form-white mb-4">
                <input type="text" name="lname" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Last Name</label>
              </div>

              

              <!-- <?php  
              //   if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['family'])){

              //     if(isset($_POST['family'])){
              //       if (preg_match("/^([a-zA-Z' ]+)$/", $_POST['family'])){
              //         $family = $_POST['family'];
              //       }else {
              //         echo "<p style='color:red !important'> You can't use special character or number </p>";
                      
              //       }
              //     }
              //   }
              // ?>

              <div class="form-outline form-white mb-4">
                <input type="text" name="family" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Family Name</label>
              </div> -->


              <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['mobile']))
              {
                $mobileRegex="/\d{14}";
                if(preg_match($mobileRegex,$_POST['mobile']))
                {
                     $mobile=$_POST['mobile'];
                }
                else 
                {
                  echo "<p style='color:red !important'>you must use 14 numbers for mobile </p>";
                }
              }
              ?>



              <div class="form-outline form-white mb-4">
                <input type="number" name="family" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Mobile</label>
              </div>

              <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['email']))
              {
                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {
                 $email=$_POST['email'];
                }
                else 
                {
                  echo "<p style='color:red !important'>your email is invalid</p>";
                }
              }
              ?>


              <div class="form-outline form-white mb-4">
                <input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              
              <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['password']))
              {
                $passwordRegex="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
              if(preg_match($passwordRegex,$_POST['password']))
              {
                $password=$_POST['password'];
              }
              else
              {
                echo "<p style='color:red !important'>You must use Uppercase, Lowercase, Special-Char. & Number.</p>";
              }
              
              
              }
              ?>
                

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <?php
              if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['confirm-password']))
              {
                if($_POST['confirm-password']==$_POST['password'])
                {
                  $con_pass=$_POST['password'];
                }
                else
                {
                  echo "<p style='color:red !important'>your password not matched.</p>";
                }
              }
              ?>


              <div class="form-outline form-white mb-4">
                <input type="password" name="confirm-password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>


              <?php
                if($_SERVER['REQUEST_METHOD']=="POST"  && isset($_POST['date-of-birth']))
                {
                  $inputDate=$_POST['date-of-birth'];
                  $dateOfBirth= new DateTime("$inputDate");
                  $today=new DateTime(date("Y-m-d"));
                  $diff=$today->diff($dateOfBirth);
                  if($diff->y >= 16)
                  {
                    $age=$diff->y; 
                  }
                  else 
                  {
                    echo "<p style='color:red !important'>your age is under 16 </p>";
                  }

                }
               ?>
  




              <div class="form-outline form-white mb-4">
                <input type="text" name="date-of-birth" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Date of Birth eg.(2000-5-21)</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

             </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
echo "$fname";
if($_SERVER['REQUEST_METHOD']=="POST" && $fname !="" && $mname!="" && $lname!="" && $email!="" && $password!="" && $age!="" )
{
  $fullName=$fname ." " . $mname . " " . $lname . " ";
  // echo "$fullName" ;
  $sql="INSERT INTO users (`name`,`email`,`password`,`mobile`)
  VALUES('$fullName','$email','$password','$mobile')";
  $connect->query($sql);
  echo "You had registerd successfully. You can login now. ";
}


?>

</body>
</html>

