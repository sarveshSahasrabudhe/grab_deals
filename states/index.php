<div class="row clearfix">
                            <?php 
                                function get_city(){
                                  // Build up DB connection including cofiguration file
                                  require ("conn.php");
                                  //Assign an empty variable to store the fetched items
                                  $output = '';
                                 
                                  $sql = "select district from sity";
								  // execution of the query. Output a boolean value
                                  $res = mysqli_query($conn , $sql);
                                  // Check whether there are results or not
                                  if(mysqli_num_rows($res)>0){
                                    while ($row = mysqli_fetch_array($res)) {
                                      //Concatenate fetched items to the output variable with HTML option tags to display
                                      $output .= '<option value="'.$row["district"].'">'.$row["district"].'</option>';
                                    }
                                  }
                                  //return the output results to be displayed
                                  return $output;

                                }

                            ?>
                            
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control" id="state" name="city">                                           
                                           <option value="">-- Select City --</option>
                                           <?php echo get_city(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control" id="city" name="state">
                                           
                                           <option value="">-- First Select City --</option>
                                          
                                        </select>
                                    </div>
                                </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script type="text/javascript">
  // start jQuery function to load the content of all functions after the page is loaded completely
  $(document).ready(function(){
    //jQuery function to get the value changed in the input field
    $('#state').change(function(){
      //Store the selected input value in vendor_name variable
      var district = $(this).val();
      // start Ajax call to get the models belongs to a particular vendor_name
      $.ajax({
        url: "fetch_model1.php",   //Path for PHP file to fetch phone models from DB
        method: "POST",       //Fetching method
        data: {district:district},  //Data send to the server to get the results
        success:function(data)    //If data fetched successfully from the server, execute this function
        {
          // console.log(data);
          $('#city').html(data);  //Print the fetched models in the section wih ID - #item
        }
      });
    });   
  });
</script>
                            