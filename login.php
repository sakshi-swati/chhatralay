<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Hola!!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_4de6" data-image-width="1600" data-image-height="1067">
      <div class="u-expanded-width u-grey-5 u-opacity u-opacity-60 u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-align-left u-black u-container-style u-group u-opacity u-opacity-20 u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h3 class="  u-text-1"> WELCOME BACK</h3>

          <div class="u-form u-form-1">

            <form action="" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form">
              <div class="u-form-email u-form-group u-form-group-1">
                <label for="email-d70e" class="u-form-control-hidden u-label">Email</label>
                <input type="email" placeholder="Enter a valid email address" id="email-d70e" name="email" class="u-grey-5 u-input u-input-rectangle" required="">
              </div>
              <div class="u-form-group u-form-group-2">
                <label for="text-3987" class="u-form-control-hidden u-label"></label>
                <input type="password" placeholder="Enter Password" id="text-3987" name="password" class="u-grey-5 u-input u-input-rectangle">
              </div>

              <div class="u-align-center u-form-group u-form-submit u-form-group-3">
                <!-- <a href="#" class="u-active-grey-90 u-border-none u-btn u-btn-submit u-button-style u-hover-grey-90 u-palette-1-base u-btn-1">LOG IN<br> -->
                </a>
                <input type="submit" name="submit" value="submit" class=" u-active-grey-90 u-border-none u-btn u-btn-submit u-button-style u-hover-grey-90 u-palette-1-base u-btn-1">
              </div>

              <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse"> -->
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
    //clicked
    //1.get the data from login here
     $email= $_POST['email'];
     $password= $_POST['password'];

     //2.sql to check wether username or passwordexists or not
     $sql= "SELECT * FROM userinfo WHERE email='$email' AND password='$password'";

     //execute query
     $conn= mysqli_connect('localhost','root','');
     $db_select = mysqli_select_db($conn,'chhatralay') or die(mysqli_error());

     $res= mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count==1)
     {
        //echo "user availaable";
      
       header("location:https://localhost/chhatralay/index.php");
        
     }
     else{
         //echo"usernot avalaible";
       
        header("location:https://localhost/shilpi/try/login.php");
     }


}

else{
    //not clicked
}
?>