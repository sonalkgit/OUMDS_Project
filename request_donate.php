<!DOCTYPE html>
<html lang="en">

<head>
    <title>DB-test form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/request_pages.js"></script>
</head>
</head>

<body>
    

        <nav class="navbar navbar-style">

            <div class="container">
                <div class="navbar-header">
                    <h3>OUMDS</h3>
                </div>


                <ul class="main-nav js--main-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="">Request</a></li>
                    <li><a href="login.html">User</a></li>
                    <li><a href="login.php">NGO</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>

        </nav>
        <!--
        <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                <a class="navbar-brand" href="#"><span class="fa fa-home w3-xlarge"></span></a>

                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                </ul>
            </nav>
        </div>
    -->
    
    
    <?php $data1=$_GET['dataid']; echo $data1?>
    <div class="contianer conatainer-fluid">
        <div class="row">
            <div class="col-sm-12 container jumbotron headerprt">
                <div
                    style="background-color:#f07ee161;margin-left: 20vh;position: relative;border-radius:90px;padding-bottom: 2px;margin-right: -80px;">
                    <h1 class="display-3" style="padding-left: 50vh;padding-bottom: 2vh;">
                        Request Medicine
                    </h1>
                    <h4 style="padding-left: 50vh;padding-bottom: 2px;">
                        Make an request for a medicne you need right down here and the community will help you out.
                    </h4>
                </div>
            </div>
        </div>

        <!--side nav bar-->

        <div class="row">
            <div class="col-sm-2">
                <div style="border-right: 2px solid blue;">
                    <ul style="list-style-type:circle;">
                        <li>
                            <a href="request_page.html">Make Request</a>
                        </li>
                       
                    </ul>

                </div>
            </div>

            <div class="col-sm-2">

            </div>

            <div id="main_form" class="col-sm-6"
                style="background-color:#ee6bee;color: antiquewhite; border-radius: 3px;">
                <div class="display-3"
                    style="background-color: rgba(0,0,0,0.2);text-align: center;border-radius: 3px;margin-top: 10px;">
                    Donation Form
                </div>
                <br>
                <form style="padding: 2px;" action="oumds_request_donar.php?dataid=<?php echo $data1?>" method="POST">
                    <div>
                        <label>Donar Details</label><br>
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="Donar_name">
                    </div>
                    <div class="form-group">
                        <label>Mobile:</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile no" name="Donar_no">
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control" rows="12" placeholder="Enter your Address" name="Donar_addr"></textarea>
                    </div>
                    <div>
                        <label>Donation Details</label><br>
                    </div>
                    <div>
                        <label>Type:</label>
                    </div>
                    <div class="form-check-inline form-group">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="Donar_type" value="brand">Brand
                        </label>
                    </div>
                    <div class="form-check-inline form-group">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="Donar_type" value="gen">Generic
                        </label>
                    </div>
                    <div>
                        <label>Method of Donation:</label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label form-group">
                            <input type="radio" class="form-check-input" name="Donar_method" value="hno">Hand over
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label form-group">
                            <input type="radio" class="form-check-input" name="Donar_method" value="pod">postal delivery
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Quantinty</label>
                        <input type="number" class="form-control" placeholder="Enter Quantity" name="Donar_qnt">
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    

                </form>
            </div>

            <div class="col-sm-2">

            </div>
        </div>
    </div>

    </div>
    <br>

    <!--footer section-->

    <section class="">
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #f3cf00;">
             
              <!-- Grid container -->
              <div class="container p-4 pb-0">
                
                <!-- Section: CTA -->
                <section class="f1" style="color:black;">

                  
                  
                  <p>
                    Drop US a message with the form and we will be intouch with you within 24 hours..
                </p>
                <p>
                    देणगीसाठी श्रीमंत असणे आवश्यक नाही, इच्छा असणे आवश्यक आहे.<i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i>
                </p>
                
                <ul class="ss">
                  <li><a href="">Home</a></li>
                  <li><a href="/aboutus.html">About</a></li>
                  <li><a href="">Request</a></li>
                  <li><a href="">User</a></li>
                  <li><a href="">NGO</a></li>
                  <li><a href="">Admin</a></li>
              </ul>
                </section>
                <div class="social-wrapper">
                    <ul>
                      <li>
                        <a href="#" target="_blank">
                          <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png" alt="Twitter Logo" class="twitter-icon"></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <img src="https://www.freepnglogos.com/uploads/512x512-logo/512x512-transparent-circle-instagram-media-network-social-logo-new-16.png" alt="Instagram Logo" class="instagram-icon"></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <img src="https://www.freepnglogos.com/uploads/linkedin-basic-round-social-logo-png-13.png" alt="Linkedin Logo" class="linkedin-icon"></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <img src="http://icons.iconarchive.com/icons/marcus-roberto/google-play/256/Google-plus-icon.png" alt="Googleplus Logo" class="googleplus-icon"></a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <img src="https://lh3.googleusercontent.com/j_RwVcM9d47aBDW5DS1VkdxUYCkDUCB6wZglv4x-9SmsxO0VaFs7Csh-FmKRCWz9r_Ef=w170" alt="Youtube Logo" class="youtube-icon"></a>
                      </li>
                      
                    </ul>
                  </div>
                
          </div>
              <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgba(8, 0, 0, 0.5)">
                © 2022 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">OUMDS.com</a>
              </div>
              <!-- Copyright -->
            </footer>
            <!-- Footer -->
          </section>
           

          
        

</body>

</html>