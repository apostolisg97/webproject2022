<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>First Connect to mysql</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php
       
      ?>
      <!----======== CSS ======== -->
      <link rel="stylesheet" href="Log_In.css">  

      <!--<title>Dashboard Sidebar Menu</title>--> 
    </head>
    <body>  
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $mysqli = new mysqli($dbhost,$dbuser,$dbpass);
    if($mysqli -> connect_errno){
      printf("Connection Failed",$mysqli->connect_error);
      exit();
    }
    printf("Connection Sucessful");
    $mysqli ->close();
    ?>
      <div class="form">
        <div 
          class="form-toggle">
        </div>
        <div 
          class="form-panel one">
          <div class="form-header">
            <h1>Account Login

            </h1>
          </div>
          <?php
          echo " kane kati  ";
          ?>
          <div class="form-content">
            <form>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required="required"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="required"/>
              </div>
              <div class="form-group">
                <label class="form-remember">
                  <input type="checkbox"/>Remember Me
                </label><a class="form-recovery" href="#">Forgot Password?</a>
              </div>
              <div class="form-group">
                <button type="submit">Log In</button>
              </div>
            </form>
          </div>
        </div>
        <div class="form-panel two">
          <div class="form-header">
            <h1>Register Account</h1>
          </div>
          <div class="form-content">
            <form>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required="required"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="required"/>
                <php>
                  
                </php>
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required="required"/>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required="required"/>
              </div>
              <div class="form-group">
                <button type="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="pen-footer">
        <a 
        href="https://github.com/elangelis/Web_Project-full-stack" target="_blank">
            <i 
                class="material-icons"><--
            </i>
            <b> View/Download Source Code on Github </b>
        </a>
        <a 
            href="https://eclass.upatras.gr/modules/document/file.php/CEID1092/%CE%95%CF%81%CE%B3%CE%B1%CF%83%CF%84%CE%B7%CF%81%CE%B9%CE%B1%CE%BA%CE%AE%20%CE%86%CF%83%CE%BA%CE%B7%CF%83%CE%B7%202022%20-%202023/Ergastiriaki_Askisi_22-23-v1.0.pdf" target="_blank">
            <b> Project_Ceid_Upatras:</b>
            <i 
                class="material-icons">-->
            </i>
        </a>
      </div-->
      <!----======== JavaScript ======== -->
      <script type="text/javascript" src="Log_In.js"></script>
   </body>
  </html>