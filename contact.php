<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact</title>

    <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="56x56" href="http://www.gbpec.edu.in/assets/images/logo_new.png">
  
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/cont.css">


    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="vendor/html5shiv.js"></script>
        <script src="vendor/respond.js"></script>
    <![endif]-->
       




<!-- j Query -->
<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

<!-- Vendor js _________ -->

<!-- revolution -->
<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

<!-- Google map js -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
<script src="vendor/gmaps.min.js"></script>
<!-- owl.carousel -->
<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- mixitUp -->
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<!-- Progress Bar js -->
<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
<!-- Validation -->
<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>


<!-- Theme js -->
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>

</head>

<style>
@media (max-width: 650px){
.logo{
width:60px;
height:50px;
}
}

</style>


<body>





<!--
=============================================
Theme Header
==============================================
-->
<?php include 'navbar.php';?>
           
   

<!--
=====================================================
Theme Inner page Banner
=====================================================
-->
<section class="inner-page-banner">
        <div class="opacity">
          <div class="container">
        
            <ul>
              <li><a href="index.html"></a></li>
        
            </ul>
          </div> <!-- /.container -->
        </div> <!-- /.opacity -->
      </section> <!-- /.inner-page-banner -->
      











<!--
=====================================================
Contact Section
=====================================================
-->

                <!--/.nav-collapse -->
            </div>
        </div>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Nauraspur Bagalkot Road,Vijaypur(Vijayapura) 586109,KARNATAKA.(INDIA)</div>
          <div class="text-two"></div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 8970398827</div>
          <div class="text-two">+91 9886874703 </div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">SECABMSIA@YAHOO.CO.IN </div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any problem from us or any types of queries, you can send us message from here. It's our pleasure to help you.</p>
        <script>
          function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email Id must be filled out");
    return false;
}
var x = document.forms["myForm"]["message"].value;
  if (x == "") {
    alert(" Message is Empty");
    return false;

  }
return true;
}

</script>
      <form name="myForm" action="" onclick="return validateForm()" method="post" required>
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message" name="message"></textarea>
        </div>
        <div class="button">
          <input type="button" onclick="myFunction()" value="Send Now" ></button>

<p id="demo"></p>
<script>
function myFunction() 

{
  document.getElementById("demo").innerHTML = "The form is Successfully Submitted";
}
</script>
        </div>
      </form>
    </div>
    </div>
  </div>





<br>
<br>
<br>
<!-- Footer -->
<?php include 'footer.php';?>




    <script type='text/javascript' src='https://siba.secab.org/wp-content/plugins/event-calendar-wd/js/ecwd_popup.js?ver=1.0.97_596c9633db9f9'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-includes/js/masonry.min.js?ver=3.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ecwd = {"ajaxurl":"https:\/\/siba.secab.org\/wp-admin\/admin-ajax.php","ajaxnonce":"b6fd192c70","loadingText":"Loading...","event_popup_title_text":"Event Details","plugin_url":"https:\/\/siba.secab.org\/wp-content\/plugins\/event-calendar-wd","gmap_key":"","gmap_style":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/plugins/event-calendar-wd/js/scripts.js?ver=1.0.97_596c9633db9f9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/siba.secab.org\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8.1'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/plugins/wp-file-upload/vendor/datetimepicker/jquery-ui-timepicker-addon.min.js?ver=4.8.20'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/acmethemes/core/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/assets/library/bootstrap/js/bootstrap.min.js?ver=3.3.6'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/assets/library/owl-carousel/owl.carousel.min.js?ver=1.3.3'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/assets/library/wow/js/wow.min.js?ver=1.1.2'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/assets/library/magnific-popup/jquery.magnific-popup.min.js?ver=1.1.0'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-content/themes/education-base/assets/js/education-base-custom.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://siba.secab.org/wp-includes/js/wp-embed.min.js?ver=4.8.20'></script>


<!-- =============================================
Loading Transition
============================================== -->
<div id="loader-wrapper">
<div id="preloader_1">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
           </div>
</div>


   <!-- Scroll Top Button -->
   <button class="scroll-top tran3s p-color-bg">
<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
</button>










</body>
</html>

