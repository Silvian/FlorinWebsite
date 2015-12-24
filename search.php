<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Page Result</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
     <link href="css/subscribe.css" rel="stylesheet">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
   <!--========================================================
                               HEADER
     =========================================================-->
     <header class="header__mod">
         <div id="stuck_container" class="stuck_container">
             <nav class="navbar navbar-default navbar-static-top ">
                 <div class="container">
                     <div class="navbar-header">
                         <h1 class="navbar-brand">
                             <a data-type='rd-navbar-brand' href="./">FGN <span class="text-primary">Plumbing & Heating</span>
                             </a>
                         </h1>
                     </div>

                     <ul class="navbar-nav sf-menu" data-type="navbar">
                        <li class="active">
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="about.html">About</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">About our products </a>
                                </li>
                                <li>
                                    <a href="#">About our services</a>
                                </li>
                                <li>
                                    <a class="act" href="#">Porta vel scelerisque</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Latest</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Malesuada at neque</a>
                                </li>
                                <li>
                                    <a href="#">Vivamus eget nibh </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="products.html">Products</a>
                        </li>

                        <li>
                            <a href="contacts.html">Contacts</a>
                        </li>
                    </ul>
                 </div>
             </nav>
             <div class="container srch">
                 <a class="search-form_toggle" href="#"></a>

                 <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                     <label class="search-form_label">
                         <input class="search-form_input" type="text" name="s" autocomplete="off"
                                placeholder="Search.."/>
                         <span class="search-form_liveout"></span>
                     </label>
                     <button class="search-form_submit fa-search" type="submit"></button>
                 </form>
             </div>
         </div>

     </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <section id="content" class="content well bg-alt2">
        <div class="container text-center">


                            <form class="search-form search-form__mod" action="search.php" method="GET"
                                  accept-charset="utf-8">
                                <label class="search-form_label">
                                    <input class="search-form_input" type="text" name="s" autocomplete="off"
                                           placeholder=" "/>
                                    <span class="search-form_liveout"></span>
                                </label>
                            </form>

            <h3 class="text-primary">Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>

    <!--========================================================
                             FOOTER
   =========================================================-->
     <footer>

         <section>

             <div class="container">

                 <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-6">
                         <div class="subscribe">
                             <p class="h3">Sign up for updates</p>

                             <form class='mailform' method="post" action="bat/rd-mailform.php">
                                 <input type="hidden" name="form-type" value="subscribe"/>
                                 <fieldset>

                                     <label>
                                         <input type="text"
                                                name="name"
                                                placeholder="Name"
                                                data-constraints="@LettersOnly @NotEmpty"/>
                                     </label>


                                     <label>
                                         <input type="text"
                                                name="email"
                                                placeholder="Email"
                                                data-constraints="@Email @NotEmpty"/>
                                     </label>

                                     <div class="mfControls">
                                         <button class="btn btn-primary btn-block" type="submit">SIGN UP</button>
                                     </div>
                                 </fieldset>
                             </form>
                         </div>
                     </div>
                     <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-0 col-xs-6">
                         <p class="h3 center767">Find us</p>

                         <div class="contact-info">
                             <address>8901 Marmora Road <br/>
                                 Glasgow, DO4 89GR.
                             </address>
                             <dl>
                                 <dt>Freephone:</dt>
                                 <dd>
                                     <a href="callto:#"> +1 800 559 6580</a>
                                 </dd>
                                 <dt>Telephone:</dt>
                                 <dd>
                                     <a href="callto:#"> +1 800 603 6035</a>
                                 </dd>
                                 <dt>FAX:</dt>
                                 <dd>
                                     <a href="callto:#"> +1 800 889 9898</a>
                                 </dd>
                             </dl>
                             <dl>
                                 <dt>E-mail:</dt>
                                 <dd>
                                     <a href="mailto:#">mail@demolink.org</a>
                                 </dd>
                             </dl>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 center767">
                         <p class="h3">Keep in touch</p>
                         <ul class="inline-list">
                             <li><a class="fa fa-google-plus" href="#"></a></li>
                             <li><a class="fa fa-twitter" href="#"></a></li>
                             <li><a class="fa fa-facebook" href="#"></a></li>
                             <li><a class="fa fa-pinterest" href="#"></a></li>
                             <li><a class="fa fa-linkedin" href="#"></a></li>
                         </ul>
                     </div>
                 </div>

             </div>
         </section>

         <section class="copyright text-center">
             <p class="rights text-primary">
                 &#169; <span id="copyright-year"></span> PLUMBING co.
                 <a href="privacy.html">Privacy Policy</a>
             </p>
         </section>

     </footer>
 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/tm-scripts.js"></script>
 <!-- </script> -->


 </body>
 </html>
