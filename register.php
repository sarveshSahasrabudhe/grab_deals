<!-- header -->
<?php include "includes/header.php" ; ?>
<?php include "includes/navbar.php" ;$random = $_SESSION['random']; ?>



  
  <div id="content-wrapper">
  

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <br><br><br><br><br>

 


<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Register User</div>
<div class="card-body">
  <form  method="post" id="usrform">
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="userName" name="userName" class="form-control" placeholder=" Name" required="required" autofocus="autofocus">
            <label for="userName">Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="email" id="userEmail" class="form-control" name="userEmail" placeholder="Email" required="required">
            <label for="userEmail">Email</label>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="number" id="userMobile" name="userMobile" class="form-control" placeholder=" Mobile" required="required" autofocus="autofocus">
            <label for="userMobile">Mobile</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="date" id="userDOB" class="form-control" name="userDOB" placeholder="Last name" required="required">
            <label for="userDOB">Date of Birth</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="password" id="userPassword" class="form-control" name="userPassword" placeholder="Password" required="required">
            <label for="userPassword">Password</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="password" id="userConfirmPassword" class="form-control" name="userConfirmPassword" placeholder="Confirm password" required="required">
            <label for="userConfirmPassword">Confirm password</label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
          <!-- <textarea rows="4" cols="41.4%" name="comment" form="usrform">
Address</textarea> -->
            <!-- <input type="text" id="address" class="form-control" name="address" placeholder="Address" required="required">
            <label for="address">Address</label> -->
          </div>
        </div>
        <!-- <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="country" class="form-control" name="country" placeholder="Country" required="required">
            <label for="country">Country</label>
          </div>
        </div> -->
      </div>
    </div>
    


    <!-- <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <label for="select">Registration Type</label><br><br>
            <input type="radio" id="select" value="Customer"  name="select" required="required" autofocus="autofocus">Customer <br>
            <input type="radio" id="select" value="Manager" name="select" required="required" autofocus="autofocus">Manager 
          
          </div>
        </div>
      </div>
     </div> -->






    <input type="submit" value="Register" name="userSubmit" class="btn btn-primary btn-block">
    
  </form>
  <div class="text-center">
    <a class="d-block small mt-3" href="userLogin.php">Customer Login</a>
    <a class="d-block small " href="managerLogin.php">Manager Login </a>
    <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
  </div>
</div>
</div>
</div>
</div>



<?php 

// submit clicked
if(isset($_POST['userSubmit']))
{
// echo "Button clicked";

$userName = $_POST['userName'];

$userEmail = $_POST['userEmail'];

$userMobile = $_POST['userMobile']; 

$userDOB = $_POST['userDOB'];


$userPassword = $_POST['userPassword'];

$userConfirmPassword = $_POST['userConfirmPassword'];


//s$select = $_POST['select'];








$display_query = "SELECT * from userDetails where userName = '$userName' AND userEmail = '$userEmail'";
 
$result=mysqli_query($connection,$display_query);


$rowcount=mysqli_num_rows($result);
if($rowcount>0)  
{
// echo "<script>
//       alert('Account already exists ckick OK to login')
//        window.open('login.php');
// </script>";
header("Location:login.php");
}
else
{

if($userPassword == $userConfirmPassword )
  {
    
    echo "<script>alert('click')</script>";
      $query = "INSERT INTO userDetails(userName,userEmail,userMobile,userDOB,userPass) 
      VALUES('$userName','$userEmail','$userMobile','$userDOB','$userPassword')";

       $result = mysqli_query($connection,$query);

      if($result)
      {
          echo "<script>alert('Registered sucessfully')</script>";
          header("Location:index.php");

      }

       else 
      {
         echo "<script>alert('Registered error')</script>";
      }
    
    // if($select == 'Manager')
    // {
    //   $query = "INSERT INTO ManagerLogin(managerName,managerEmail,managerMobile,managerDOB,managerPassword) 
    //   VALUES('$userName','$userEmail','$userMobile','$userDOB','$userPassword')";

    //    $result = mysqli_query($connection,$query);

    //   if($result)
    //   {
    //       echo "Added sucessfully in manager table";
    //       header("Location:managerLogin.php");
    //   }

    //    else 
    //   {
    //       echo "Adding Error in manager table";
    //   }
    // }
}
  else
  {
      echo "<script>alert('Enter valid Password')</script>";
  }

}




  




}


// $display_query = "SELECT userName,userEmail,userMobile,userDOB,userPassword FROM CustomerLogin";
// $displayResult = mysqli_query($connection,$display_query);
// if($displayResult)
// {
//     $row = mysqli_fetch_assoc($displayResult);
//     while ($row)
//     { mysqli_num_row 
//         print_r($row);
//         $row = mysqli_fetch_assoc($displayResult);
//     }
// }



?>

  <!-- footer   -->
  <?php include "includes/footer.php" ; ?>