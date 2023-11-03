<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- For IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- For Resposive Device -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Notices</title>

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="56x56" href="http://www.gbpec.edu.in/assets/images/logo_new.png">


<!-- Main style sheet -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- responsive style sheet -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">


<!--list.js -->
<script src="list.min.js"></script>
<!-- Fix Internet Explorer ______________________________________-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="vendor/html5shiv.js"></script>
<script src="vendor/respond.js"></script>
<![endif]-->

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
<div class="main-page-wrapper">



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
<h2>SECAB INSTITUTE OF BUSINESS ADMINISTRATION OF VIJAYAPURA</h2>
<ul>
<li><a href="index.html"></a></li>
<li>affiliated by RCU</li>
</ul>
</div> <!-- /.container -->
</div> <!-- /.opacity -->
</section> <!-- /.inner-page-banner -->





            <div class="theme-title">
                <h2>Notices</h2>
                <p>This page is dedicated to notice related to new announcement.Here you will find all updates related to our college.</p>
            <hr>
            <!-- to be deleted after addtion of php api --
                <div class="sidebar-news-list">
                    <h2>Latest NOtice</h2><br><br>

                    <ul>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/disable.pdf" class="tran3s active"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Post-matric Scholarship for Students with Disabilities</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/postmatric1.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Financial Assistance for Education of the Wards of Beedi_Cine_IOMC_LSDM Workers - Post-Matric</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/PM.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> PRIME MINISTER�S SCHOLARSHIP SCHEME for RPF</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/FAQ_MOMA.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> FAQ_MOMA</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/sector.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> CENTRAL SECTOR SCHEME OF SCHOLARSHIP</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/Result.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Central Armed Police Forces & Assam Rifles</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/Invitation%20for%20India%20InternationalScience%20Festival.jpeg" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Invitation for India International Science Festival</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/Result.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Result For Walk-in-Interview held on Aug 27-28 2018</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/sessional%20exam-Intimation%20for%20backpaper.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Sessional Exam-Intimation for back paper</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/MoMA_Post_Matric_2018-20.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Notice-POST-MATRIC SCHOLARSHIP</a></li>
                        <li><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/MoMA_MCM_2018-20.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Notice-MERIT CUM MEANS BASED SCHOLARSHIP</a></li>
                    </ul>
                    <hr>
                    <hr>
                </div> <!-- /.sidebar-news-list -->



            </div> <!-- /.theme-title -->
<style>





/* RESPONSIVE EXAMPLE */


@media (max-width: 600px) {
  .responsivetable { overflow-x: scroll;
  position: relative;
  margin-left:-53%;
 transform:scale(0.50); }
 
}
@media (min-width: 600px) and (max-width : 850px){
  .responsivetable { overflow-x: scroll;
  position: relative;
  margin-left:40%;
 transform:scale(0.80); }
 
}
</style>
<!--script for searching in table-->
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#TableInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#GbpecTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

 <div class="theme-title">
<h2>Table Search</h2>
<h2><input id = "TableInput" type = "text" placeholder = "Search in table.."><h2>
</div>



<!--This table idea  is similar to jackrugile codepen.and redesigned and responsive feature added by our team-->

<table class="responsivetable">
<thead>
 <tr>
<th >DATE</th>
<th >TYPE</th>
<th>NOTICES</th>
 </tr>
</thead>
<tbody id = "GbpecTable">
 <tr>
<td><strong>22/10/22</strong></td>
<td class = "academics">academics</td>
<td>BCA time table</td>
 </tr>
 <tr>
<td><strong>23/10/22</strong></td>
<td class = "Schlorship">Schlorship</td>
<td><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/disable.pdf" class="tran3s active"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Post-matric Scholarship for Students with Disabilities</a></td>
 </tr>
 <tr>
<td><strong>31/10/22</strong></td>
<td class = "Schlorship">Scholarship</td>
<td><a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/MoMA_MCM_2018-20.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Notice-MERIT CUM MEANS BASED SCHOLARSHIP</a></td>
 </tr>
 <tr>
<td><strong>24/09/2022</strong></td>
<td class = "Announcement">Announcement</td>
<td> <a href="http://www.gbpec.edu.in/docs/NoticeAndUpdates/Result.pdf" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Result For BCA 6th Sem </td>
 </tr>
 <tr>
<td><strong>15/01/2023</strong></td>
<td class = "event"> event</td>
<td></td>
 </tr>
 <tr>
<td><strong>24/01/2023</strong></td>
<td class =  "workshop">workshop</td>
<td>Python Workshop</td>
 </tr>
</tbody>
 </table>



 <style>

strong {
font-weight: bold;
}

em {
font-style: italic;
}

table {
background: #f5f5f5;
border-collapse: separate;
box-shadow: inset 0 1px 0 #fff;
font-size: 12px;
line-height: 24px;
margin: 30px auto;
text-align: left;
width: 800px;
}

th {
background:  linear-gradient(90deg,rgb(231, 66, 37), rgb(243, 35, 35));
border-left: 1px solid #555;
border-right: 1px solid #777;
border-top: 1px solid #555;
border-bottom: 1px solid #333;
box-shadow: inset 0 1px 0 #999;
color: #fff;
  font-weight: bold;
padding: 10px 15px;
position: relative;
text-shadow: 0 1px 0 #000;
border-radius:3%;
}

th:after {
background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
content: '';
display: block;
height: 25%;
left: 0;
margin: 1px 0 0 0;
position: absolute;
top: 25%;
width: 100%;
}

th:first-child {
border-left: 1px solid #777;
box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
box-shadow: inset -1px 1px 0 #999;
}

td {
border-right: 1px solid #fff;
border-left: 1px solid #e8e8e8;
border-top: 1px solid #fff;
border-bottom: 1px solid #e8e8e8;
padding: 10px 15px;
position: relative;
transition: all 300ms;
}

td:first-child {
box-shadow: inset 1px 0 0 #fff;
}

td:last-child {
border-right: 1px solid #e8e8e8;
box-shadow: inset -1px 0 0 #fff;
}

tr:last-of-type td {
box-shadow: inset 0 -1px 0 #fff;
}

tr:last-of-type td:first-child {
box-shadow: inset 1px -1px 0 #fff;
}

tr:last-of-type td:last-child {
box-shadow: inset -1px -1px 0 #fff;
}

tbody:hover td {
color: transparent;
text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
color: #444;
text-shadow: 0 1px 0 #fff;
}
 
 
 </style>






















<!-- Footer -->
<!-- Footer -->
<?php include 'footer.php';?>




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




<!-- Js File_________________________________ -->

<!-- j Query -->
<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

<!-- Vendor js _________ -->

<!-- owl.carousel -->
<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- mixitUp -->
<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
<!-- Progress Bar js -->
<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
<!-- Validation -->
<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
<!-- Calendar js -->
<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


<!-- Theme js -->
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="js/map-script.js"></script>













</div>
</body>
</html>

