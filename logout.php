<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">

<?php include "includes/navbar.php"?>
<?php 
   
    if(isset($_GET['log']))
    {
     
      
      // $_SESSION['managerName_back'] = null;
      // $_SESSION['managerEmail_back'] = null;
      // $_SESSION['managerMobile_back'] =null;
      // $_SESSION['userDOB_back'] = null;
      // $_SESSION['managerPassword_back'] = null;
      // $_SESSION['usermanager_id_id'] = null;
      // $_SESSION['managerPassword_back'] =null;
  
  
  
      $_SESSION['userName_back'] = null;
      $_SESSION['userEmail_back'] = null;
      $_SESSION['userMobile_back'] = null;
      $_SESSION['userDOB_back'] = null;
      $_SESSION['userPassword_back'] = null;
      $_SESSION['user_id'] = null;
      $_SESSION['userDOB_back'] = null;
    //  $_SESSION['random'] = null;
        header("Location:index.php");
  
    }
  ?>




<?php include "includes/footer.php";?>