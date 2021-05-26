<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Privacy Policy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This blog website educate and guide people to build their own machines that they keep generating money to wealth.">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Rohith Preetham Sunkara, Arshveer Uppal">

  <!-- Icon - Faviicon -->
  <link rel="icon" type="image/png" href="logo-coin.png" />
  <!-- Link to Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Link to icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <!-- Custom Styling -->
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

  <!-- Privacy Policy Styling -->
  <link rel="stylesheet" href="assets/css/privacy.css">

  <!-- Link to Icons -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>

<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo text-decoration-none">
      <h1 class="logo-text font-weight-bolder"><span>D<i class="fas fa-donate"></i>llar</span> Makes<span> M<i class="fas fa-donate"></i>llar</span></h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/index.php' ?>"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="<?php echo BASE_URL . '/about.php' ?>"><i class="fas fa-address-card"></i> About</a></li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
      <?php endif; ?>
    </ul>
</header>

<br>

<div class="container">
  <div class="container">
    <h1 class="text-center">Privacy Policy & Terms Of Use</h1><br>
  </div>

    <img src="https://cdn4.iconfinder.com/data/icons/general19/png/256/lock.png" alt="">

    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To View The Privacy Policy</a>

</div>
<br>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title sticky-top text-center">Privacy Policy</h3>
        <button class="close" aria-hidden="true" type="button" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body">

        <h5>Your privacy is important to us.</h5>
        
        <p>The information and services published on this website may include inaccuracies or errors, including, without limitation, pricing, photographs, product descriptions, etc. In particular, Dream Destination does not guarantee the accuracy of, and disclaims all liability for any errors or other inaccuracies relating to the information and description of content displayed on the site </p>


        <h4>Links to Other Sites</h4>
        <p>We also involve other parties to provide you with the services. This includes, for example, viator, skyscanner advertisers, rideshare facebook and whatsapp groups of Canada, taxi companies, car-rental companies,etc.</p>
        <p>The information posted on the site includes links to information created and maintained by stakeholders and other public and/or private organizations. These links are provided solely for the user’s information and convenience.There are several links through the Dream Destination website that transfer you to other websites that are not under this Policy. When you click on such links to access these sites, the current Policy no longer applies. We are just the third-party website. Our aim is to provide you a single platform for everything needed for trip, whether it is booking hotel, providing readymade tour packages, booking air-tickets, providing tickets to various trip activities or information regarding mode of transport, etc. We are not responsible for the accuracy of the information. </p>

        <p>If you register to use the site: we may ask you for certain contact details. All contact information is stored on our server, which has built-in security and is not available to unauthorized persons.</p>

        <h6>What do we use your information for? </h6>

        <h6>Any of the information we collect from you may be used in one of the following ways: </h6>
        <ul>
        <li> To personalize your experience.</li>

        <p> (your information helps us to better respond to your individual needs)</p>

        <li> To improve our website.</li>

        <p> (We continually strive to improve our website offerings based on the information and feedback we receive from you)</p>

        <li> To send periodic emails</li>
        <br>
        <li>The email address you provide for registering, may be used to send you information and new tour packages available, in addition to receiving occasional company news, updates, related service information, etc.</li>
      </ul>
        <br>
        <p>Dream Destination and its respective suppliers make no representations about the suitability of the information, software, products, and services contained on this website for any purpose, and the inclusion or offering of any information or services on this website does not constitute any endorsement or recommendation of such services by Dream Destination. All such information, software, products, and services are provided “as is” without warranty of any kind.</p>

        <p>In no event shall Dream destination be liable for any direct, indirect, punitive, incidental, special, or consequential damages arising out of, or in any way connected with, your access to, display of or use of this website or with the delay or inability to access, display or use this website  whether based on a theory of negligence, contract, tort, strict liability, or otherwise, and even if Dream Destination has been advised of the possibility of such damages.</p>

        <p>Dream Destination, its directors, partners and suppliers are not liable for the acts, errors, omissions, representations, warranties, breaches or negligence of any stakeholder or third party suppliers or for any personal injuries, death, property damage, or other damages or expenses resulting therefrom. Dream Destination has no liability and will make no refund in the event of any delay, cancellation, overbooking, strike, force majeure or other causes beyond their direct control, and has no responsibility for any additional expense, omissions, delays, re-routing or acts of any government or authority. In no event shall Dream Destination be liable for any direct, indirect, punitive, incidental, special, or consequential damages arising out of, or in any way connected with users’ access to, display of or use of the site or with the delay or inability to access, display or use the site (including, but not limited to, users’ reliance upon opinions appearing on the site; any computer viruses, information, linked sites, products, and services obtained through the site; or otherwise arising out of the access to, display of or use of the site) whether based on a theory of negligence, contract, tort, strict liability, or otherwise.</p>

        <h4>Do we disclose any information to outside parties? </h4>

        <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as
          those parties agree to keep this information confidential.</p>

        <h4>Third party links </h4>

        <p>Occasionally, at our discretion, we may include or offer third party information or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>


        <h4>Changes to our Privacy Policy </h4>

        <p>
          This Policy was drafted by Dream Destination and published on the Dream Destination website on December 10, 2020. Dream Destination reserves the right, at our discretion, to update or revise this privacy policy at any time.We might amend the Privacy Statement from time to time, so we recommend you visit this page occasionally for modifications and updates.
        </p>

        <h4>Your Consent </h4>

        <p>By using our site, you are consenting to our privacy policy.</p>

        <h4>Contacting Us </h4>
        <p>If you have questions or concerns about our privacy policy, wish to change your personal information, have questions or concerns about anything on this site, you may contact us using the information below. </p>
        <p>Email Id: <a href="#">dreamdestination2021@gmail.com</a></p>

        <small>Note: If you have any copyright issues related to any information or images used, please feel free to contact us on <a href="#">dreamdestination2021@gmail.com</a>
        <br> We assure you we will remove the issuable content from our website. Please accept our apology in advance.</small>


      </div>
      <div class="modal-footer sticky-bottom">

        <a class="btn btn-primary" href="privacy.php">Agree</a>
      </div>
    </div>
  </div>
</div>


<br>
 <!-- footer -->
 <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text font-weight-bold footer-logo"><span>D<i class="fas fa-donate"></i>llar</span> Makes<span> D<i class="fas fa-donate"></i>llar</span></h1>
        <p>
          This blog website educate and guide people to build their own machines that they keep generating money to wealth.
        </p>
        <!-- <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@moneymakemachines.com</span>
        </div> -->

        <div>
          <h2> Follow Us</h2>
        </div>
        <br>
        <div class="socials">
          <a href="https://www.facebook.com/PlanetFitnessCanada/"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="<?php echo BASE_URL . '/index.php' ?>">
            <li>Home</li>
          </a>
          <a href="<?php echo BASE_URL . '/about.php' ?>">
            <li>About</li>
          </a>
          <a href="<?php echo BASE_URL . '/privacy.php' ?>">
            <li>Terms and Conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; +1-(409)-728-7525</span>
          <br><br>
          <span><i class="fas fa-envelope"></i> &nbsp; dinesh91990@gmail.com</span>
        </div>
        <!-- <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form> -->
      </div>

    </div>

    <div class="footer-bottom">
      &copy; Designed by ArshRohi Digi Creations
    </div>
  </div>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>


  </body>
  </html>
