<!DOCTYPE html>

<html>
  
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="google-signin-client_id" class = 'google_sign' content="614906115268-vtvfs1ihge1ufbhu73ct32s0skav8ffc.apps.googleusercontent.com">
    
    <title>Erovoutika -  Intern Portal</title>

    <meta property="og:url" content="https://intern.erovoutika.ph"/>
    <meta property="og:image" content="https://intern.erovoutika.ph/images/internportal_bg_img.jpg"/>
    <meta property="og:title" content="Erovoutika - Virtual Internship Portal"/>
    <meta property="og:type" content="website"/>
    
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/Login_page.css" rel="stylesheet">
  
  </head>

  <body>
    
    <div class="all_background">
      
      <div class="container-fluid">
        
        <div class="row">

          <div class="col-md-6">
          
            <div class="head_img a1">
            
              <img src="images/internportal_bg_img.jpg" class="img-fluid">
          
            </div>
        
          </div>

        <div class="col-md-6">
          
          <div class="center">
            
            <div class="form_box pt-3 pb-3">
              
              <form action="" method="post" id="frmLogin"> 
                
                <div class="text-danger">
                  
                  <?php 
                    
                    if(isset($message))
                    {
                      echo $message; 
                    } 
                    
                  ?>
                  
                </div>
            
                <div class="form-group">
                  
                  <input type="email" class="form-control input_email"  id="email" name='Email' aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
                  
                  <div id='emailreq'></div>
                
                </div>

                <div class="form-group">
                  
                  <input type="password" class='form-control password input_password' name="pass" id="password" placeholder="Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
                
                </div>

                <div class="form-group">
                  
                  <input type="submit" name="login" value="Login" class="btn btn-primary Log-btn">
                
                </div>

                <div class="col-8 form-inline ml-1">
                  
                  <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> class=" "> 
                  <label>Remember me</label>
                
                </div>

                <hr>

              </form>

              <div class="card p-3" id='show_mobile_caution' style="display:none;">
                
                <h5>Erovoutika Intern Portal can be accessed only on computer.</h5>
              
              </div>

              <div class="signup_btn">
                
                <a class="btn btn-success text-white" data-toggle="modal" data-target="#id01"><h5 class="mb-0 p-1">Create New Account</h5></a>
              
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
    
    </div>

    <div class="background_Body">
      
      <!-- MODAL HERE -->
      
      <div id="id01" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog" role="document">
          
          <div class="modal-content">

            <div class="modal-header pb-0 flex-column position-relative" style="max-height: 100px !important;">
              
              <h2 class="modal-title" id="exampleModalLabel">Sign up</h2>
              
              <p class="text-muted Sign_mute pb-0">Intern Registration</p>
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                
                <span aria-hidden="true">&times;</span>
              
              </button>
              
              <br>
            
            </div>
            
            <div class="modal-body">
              
              <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                
                <div class="form-row text-center ">
                      
                  <input type="text" class="form-control" name='first_name' id="Fname" placeholder="First Name" required>
                  <input type="text" class="form-control" name='last_name' id="Lname" placeholder="Last Name" required>
                  <input type="text" class="form-control" name='middle_name' id="Mname" placeholder="Middle Name" required>
                  <input type="text" class="form-control" name='suffix_name' id="Sname" placeholder="Suffix">
                  <input type="number" class="form-control" name='age' id="age" placeholder="Age" required>
                  <input type="date" class="form-control" name='birthday' id="birthday" required>
                  <input type="email" class="form-control" name='email' id="Email1" placeholder="Email" required>
                  <input type="text" class="form-control" name='mobile_number' id="mNumber" placeholder="Mobile Number" required >

                  <input type="password" class="form-control" name='password' id="password" placeholder="Password" required>          
                  <input type="password" class="form-control" name='confirm_password' id="confirm_password" placeholder="Confirm Password" onchange="check_passwords()" required>
                  
                  <div class="w-100 text-left pt-2" style="text-align: justify !important; width: 338.9px !important; margin-left: 16px;">
                    
                    <div class="show-second icheck-primary pb-3" style="font-size: 16px; display: block;">
                              
                      <input type="checkbox" id="agreeTerms" isagree="false" name="terms" value="agree" required>
                              
                      <label for="agreeTerms" style="font-size: 10px;">
                                
                        We're committed to your privacy, Erovoutika Intern Portal uses the information you provide to us to contact you about our relevant
                        content, concerns, and service. You may unsubscribe from these sommunications at any time. For more information, check out our <a href="#">Privacy Policy</a>.
                              
                      </label>
                          
                    </div>
                      
                  </div>
                  
                </div>

                <div class="modal-footer justify-content-center" style="width: 100%;">
                
                  <button type="submit" name="register" class='reg-btn btn-signUp btn btn-success' id="reg-btn" >
                  
                    <h5 class="p-1 mb-0">Sign Up</h5>
                    
                  </button>
                  
                </div>
                
              </form>  
              
            </div>
              
          </div>
          
        </div>
        
      </div>

    </div> 
    <!-- MODAL END -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>

      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) 
      {
        if (event.target == modal) 
        {
          modal.style.display = "none";
        }
      }

      // screen adjustment
      // ============================================== script for screen size adjustment ==============================

      function myFunction(x) 
      {    
        if (x.matches) 
        {
          $('#frmLogin').hide();
          $('.signup_btn').hide();
          $('#show_mobile_caution').show();
        } 
        
        else 
        {
          //selector.style
          $('#frmLogin').show();
          $('.signup_btn').show();
          $('#show_mobile_caution').hide();
        }
      }

      var x = window.matchMedia("(max-width: 767px)");
      myFunction(x); // Call listener function at run time
      x.addListener(myFunction); // Attach listener function on state changes

    </script>

  </body>
    
</html>