<!-- header -->
<?php include "includes/header.php" ; ?>
<?php include "includes/navbar.php" ;$random = $_SESSION['random']; ?>

<br><br><br><br><br>



  <!-- <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div> -->


  <section > 

    <div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form method="POST" action="">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Email address" required="required" autofocus="autofocus">
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>

              <div class="form-group">
                <div class="form-label-group">
                  <input type="hidden" id="otp" name="otp" class="form-control" placeholder="Enter OTP"  required="required">
                  <label for="otp">  <br><input type="submit" value="Get OTP"name="getOTP"  data-toggle="modal" class="btn btn-primary btn-block"></label>
                </div>
              </div>
              
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me">
                    Remember Password
                  </label>
                </div>
              </div>
             <!-- <a href="https://docs.google.com/spreadsheets/d/1UxXu8otaJpma81nb2al1IUR33kWb8duC0NhM1MQXkng/edit?ts=5d3071b9#gid=0"><input type="submit" value="Login"name="check" class="btn btn-primary btn-block"></a>  -->
              <!-- <button>Login</button> -->

              <input type="submit" value="Login"name="check"  data-toggle="modal" class="btn btn-primary btn-block">
              <!-- <a class="btn btn-primary btn-block" href="index.php">Login</a> -->
              
            </form>
            <div class="text-center">
              <a class="d-block small mt-3" href="userReg.php">Register an Account</a>
              <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
            </div>
          </div>
        </div>
      </div>

</section>

<?php 
global $otp1;
      if(isset($_POST['getOTP']))
      {
        $_SESSION['otp1'] = mt_rand(1000,9999);
         $otp2 = $_SESSION['otp1'];
        echo "<script>alert($otp2)</script>";
        echo "<script>
        document.getElementById('otp').type = 'text';

        </script>";
      }
      
        // submit clicked
        if(isset($_POST['check']))
        {
            // $userName = $_POST['userName'];
        
        echo    $userEmail = $_POST['inputEmail'];

       echo     $enterOTP = $_POST['otp'];

            // $userMobile = $_POST['userMobile']; 
           
            // $userDOB = $_POST['userDOB'];

            $userPassword = $_POST['inputPassword'];

            // session

           $session = "SELECT * FROM userDetails where userEmail = '$userEmail'";
            $session_result = mysqli_query($connection, $session);
            if(!$session_result)
            {
              echo "error".mysqli_error($connection);
            }
            else
            {
              while($row = mysqli_fetch_assoc($session_result))
              {
                $userName_back = $row['userName'];
  
                $user_id = $row['id'];              
  
                $userEmail_back = $row['userEmail'];
  
                $userMobile_back = $row['userMobile']; 
  
                $userDOB_back = $row['userDOB'];
  
                $userPassword_back = $row['userPass'];
  
  
              }


              if($userEmail == $userEmail_back && $userPassword == $userPassword_back)
              {
                $_SESSION['userName_back'] = $userName_back;
              //   $ll=$_SESSION['userName_back'];
              // $_SESSION['userName_back']       echo "<script> alert('$ll')</script>";
                $_SESSION['userEmail_back'] = $userEmail_back;
                $_SESSION['userMobile_back'] = $userMobile_back;
                $_SESSION['userDOB_back'] = $userDOB_back;
                $_SESSION['userPassword_back'] = $userPassword_back;
                $_SESSION['user_id'] = $user_id;


               

                
               // header("Location:cart.php");
              //  $_SESSION['userDOB_back'] = $userDOB;
               
              }
              if($_SESSION['otp1'] == $enterOTP)
              {
                header("Location:index.php");
              }
              else 
              echo "<script>alert('Enter valid OTP')</script>";
            
  
              // $display_query="SELECT * from userDetails 
              //               where (userEmail='$userEmail' && userPass='$userPassword') ";
         
              // $result=mysqli_query($connection,$display_query);
  
  
               
  
              // $rowcount=mysqli_num_rows($result);
            
              // if($rowcount>0)  
              // {
                
              // }


  

            }
           

           
            // elseif($rowcount1>0)  
            //   {
            //   echo "<script>
            //           window.open('addturf.php');
            //   </script>";
            //   }

            



            // else
            // {
            //   // echo " <script>alert('Invalid email or Password')</script> ";
            //   header("Location:register.php");
            // }
        } 
        
						
      ?>


  <!-- footer   -->
  <?php include "includes/footer.php" ; ?>
