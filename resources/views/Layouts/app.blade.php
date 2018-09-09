
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link href="fonts/fontawesome-all.css" rel="stylesheet">

    <title>ClaimYourPet</title>

  </head>

  <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">ClaimYourPet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item">

                    <a href="<?php echo base_url('pet/index'); ?>" class="nav-link"  role="button" aria-haspopup="true" aria-expanded="false">HOME</a>

                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('pet/add/pet-info'); ?>" role="button" aria-haspopup="true" aria-expanded="false">ADD PET</a>
                    </li>


                   <li class="nav-item">

                    <a class="nav-link"  href="<?php echo base_url('pet/contact'); ?>"   role="button" aria-haspopup="true" aria-expanded="false">CONTACT</a>

                   </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?php echo base_url('pet/about'); ?>" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>

                  </li>

                  </ul>

                  <ul class="nav navbar-nav pull-right">

                     <li class="nav-item">

                      <a  class="nav-link" href="<?php echo base_url('user/login'); ?>" role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link" href="<?php echo base_url('user/logout'); ?>" role="button" aria-haspopup="true" aria-expanded="false">LOGOUT</a>

                     </li>


                     <li id="hidesearch" class="nav-item" style="display:none">

                           <?php

                              $attributes = array('class' => 'form-inline my-2 my-md-0');
                              echo form_open('pet/results');

                           ?>

                             <input class="form-control" type="text" placeholder="Enter Keyword(s)" aria-label="Search">
                           </form>

                     </li>

                     <li class="nav-item pull-right">

                        <a class="nav-link" href="#search"><i class="fas fa-search" style = "color : #ffffff  ;"></i></a>

                     </li>



                  </ul>


        <ul class="nav navbar-nav pull-right">


              <li class="nav-item">
                            <div class="input-group">
                               <input id="search1" class="form-control py-2 border-right-0 border" type="search" name="keyword" placeholder="Search.." value="" >
                               <span  id="search2"  class="input-group-append">
                               <div  class="input-group-text bg-transparent"><i class="fa fa-search" style = "color:#009900;"></i></div>
                               </span>
                            </div>
              </li>

        </ul>

      </div>
    </nav>




      @yield('content')








<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="main.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBgOj89D0NAiPkjMWZGygkh8hWLDWeVvVQ"  defer ></script>


        <!--&key=AIzaSyBgOj89D0NAiPkjMWZGygkh8hWLDWeVvVQ -->

          <footer class="footer" >

                    <ul class="footer-list">

                          <li>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></li>

                    </ul>

                    <ul class="footer-list">
                          <li>Copyright &copy 2018 Front End and Back End Design by RedPill</li>
                    </ul>

                    <ul class="footer-list">
                          <li> <a  href="<?php echo base_url('listing/payment-info'); ?>"  role="button" aria-haspopup="true" aria-expanded="false"><strong>How To Pay</strong></a></li>
                          <li> <a  href="<?php echo base_url('listing/terms-and-conditions'); ?>"  role="button" aria-haspopup="true" aria-expanded="false"><strong>Terms and Conditions</strong></a></li>
                          <li> <a  href="<?php echo base_url('listing/payment-info'); ?>"  role="button" aria-haspopup="true" aria-expanded="false"><strong>Help</strong></a></li>


                    </ul>

         </footer>
      </div>
  </body>
</html>
