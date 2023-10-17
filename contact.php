<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow" />
    <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.jpeg">
    <!-- CSS
	============================================ --> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.css">
    <link rel="stylesheet" href="assets/css/plugins/icomoon.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-content">
        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                    </a>
                </li>
            </ul>
        </div>
       <?php include 'header.php';?>

        <!-- Start Breadcrumb Area -->
        <div class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <ul class="axil-breadcrumb liststyle d-flex">
                                <li class="axil-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                            </ul>
                            <h1 class="axil-page-title">Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-images">
                <i class="shape shape-1 icon icon-bcm-01"></i>
                <i class="shape shape-2 icon icon-bcm-02"></i>
                <i class="shape shape-3 icon icon-bcm-03"></i>
            </div>
        </div>
        <!-- End Breadcrumb Area -->

        <main class="main-wrapper">

            <!-- Start Contact Area  -->
            <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xl-5 col-12">
                            <div class="contact-form-wrapper">
                                <!-- Start Contact Form -->
                                <div class="axil-contact-form contact-form-style-1">
                                    <h3 class="title">Get a free Hysus quote now</h3>

                                    <form id="contact-form" method="post" onsubmit="sendEmail(event)">
                                        <div class="col-md-12 input-subject">
                                       
                                        <select class="form-select subject" id="subject" name="subject" aria-label="Default select example">
                                            <option selected>This question is about...</option> 
                                            <option>Registering/Authorising</option>
                                            <option>Using Application</option>
                                            <option>Troubleshooting</option>
                                            <option>Backup/Restore</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                        <div class="form-group mt-5">
                                            <input name="name" type="text">
                                            <label>Name</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="email">
                                            <label>Email</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea name="message"></textarea>
                                            <label>Your message</label>
                                            <span class="focus-border"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Send message">
                                            <p class="form-messege"></p>
                                        </div>
                                    </form>

                                </div>
                                <!-- End Contact Form -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xl-6 offset-xl-1 col-12 mt_md--40 mt_sm--40">
                            <div class="axil-address-wrapper">
                                <!-- Start Single Address  -->
                                <div class="axil-address wow move-up">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Phone</h4>
                                            <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                                            <p><a class="axil-link" href="tel:+91-8750050049">+91-8750050049</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Address  -->
                                <!-- Start Single Address  -->
                                <div class="axil-address wow move-up mt--60 mt_sm--30 mt_md--30">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Email</h4>
                                            <p>Our support team will get back to in 48-h during standard business hours.
                                            </p>
                                            <p><a class="axil-link" href="mailto:hello@hysus.com">hello@hysus.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Address  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-group">
                    <div class="shape shape-01">
                        <i class="icon icon-contact-01"></i>
                    </div>
                    <div class="shape shape-02">
                        <i class="icon icon-contact-02"></i>
                    </div>
                    <div class="shape shape-03">
                        <i class="icon icon-contact-03"></i>
                    </div>
                </div>
            </div>
            <!-- End Contact Area  -->

            <!-- Start Office Location  -->
           <!--  <div class="axil-office-location-area ax-section-gap bg-color-lightest">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <span class="sub-title extra04-color wow" data-splitting>who we are</span>
                                <h2 class="title wow mb--0" data-splitting>Our office</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">

                        
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="axil-office-location mt--30 wow move-up">
                                <div class="thumbnail">
                                    <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                                </div>
                                <div class="content">
                                    <h4 class="title">Virginia-HQ</h4>
                                    <p>435 Pouros Locks <br /> United States</p>
                                        <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                            Map</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="axil-office-location mt--30 wow move-up">
                                <div class="thumbnail">
                                    <img src="assets/images/inner-image/contact/contact-02.jpg" alt="Location Images">
                                </div>
                                <div class="content">
                                    <h4 class="title">Nevada</h4>
                                    <p>46 Watsica Creek Suite 071 <br /> United States</p>
                                        <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                            Map</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="axil-office-location mt--30 wow move-up">
                                <div class="thumbnail">
                                    <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                                </div>
                                <div class="content">
                                    <h4 class="title">Columbia</h4>
                                    <p>7140 Wehner Tunnel <br /> Washington, D.C</p>
                                        <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                            Map</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="axil-office-location mt--30 wow move-up">
                                <div class="thumbnail">
                                    <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                                </div>
                                <div class="content">
                                    <h4 class="title">New Mexico</h4>
                                    <p>10 Maggie Valleys , <br /> United States</p>
                                        <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                            Map</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->
            
           

        </main>

        <!-- Start Footer Area -->
       <?php include 'Footer.php';?>
        <!-- End Footer Area -->
    </div>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/tilt.js"></script>
    <script src="assets/js/anime.js"></script>
    <script src="assets/js/tweenmax.js"></script>
    <script src="assets/js/slipting.js"></script>
    <script src="assets/js/scrollmagic.js"></script>
    <script src="assets/js/addindicators.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/youtube.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/scrollup.js"></script>
    <script src="assets/js/stickysidebar.js"></script>
    <script src="assets/js/js.cookie.js"></script>
    <script src="assets/js/jquery.style.switcher.js"></script>
    <script src="assets/js/contactform.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(event){
                event.preventDefault()
                
                const subject = event.target.subject.value;
                const name = event.target.name.value;
                const email = event.target.email.value;
                const message = event.target.message.value;

                

                let msg = `Name: ${name}
                Email: ${email}
                Message: ${message}`
                
            Email.send({
    Host : "smtp.elasticemail.com",
    Username : "hysustechnology@gmail.com",
    Password : "790E10820CA1D0FA235011282692902815E7",
    To : 'hysustechnology+contact@gmail.com',
    From : "hysustechnology@gmail.com",
    Subject : subject,
    Body: msg
      }).then((message)=>{
        
        window.location.href='./thank-you-hysus.php';
      }

      )
      .catch(err=>console.log(err));
    }
        </script>

       <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="bd26f25e-cbc2-45bb-93cc-c8222cd13b1b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>



</html>