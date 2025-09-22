<?php 
require_once('constants.php');
require_once('inc/get_ip01.php');
$years = range(1981, strftime("%Y", time()));
$lead_ip = getUserIP();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!--website title-->
      <title><?php echo SiteName; ?> - About Us</title>
      <!--seo-meta-tag-->
      <meta charset="UTF-8">
      <meta name="description" content="Take care of the things you value most with insurance from American Family Insurance. Get insurance quotes, explore our insurance plans. Bundled options. Free quotes. ">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--website-favicon-->
      <link rel="icon" type="image/png" href="images/common/favicon.png">
      <!--plugin-scripts-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <link href="css/aos.css" rel="stylesheet">
      <!--google-fonts-->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- template-style-->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">

   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="100" class="ct1280">

      <!--Start Header -->
      <?php include_once('template-parts/header.php'); ?>
      <!--End Header -->





      <!--Start Faqs-->
      <section class="faq-section pad-tb ">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-12">
                  <div class="common-heading">
                     <h2  data-aos="fade-up" data-aos-delay="100">About Us</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center mt60">
               <div class="col-lg-12">
                  <p>Our U.S. based company operates one primary websites, premiuminsurancepolicy.com.</p>
                  <p>premiuminsurancepolicy.com is a free service for consumers that makes it easier to find the best possible rates for insurance. Just fill out one easy form and licensed insurance professionals will put together a price quote for you to review. Our state-of-the-art technology and wide network of insurance companies will match you with licensed insurance professionals in your area.</p>
                  <p>Our company is incorporated, independent and not owned by any of the service providers that may contact you. The information and/or work estimates provided to you are coming from professional home services providers who have membership in our partner network. These professionals are authorized by their respective organizations to provide you with this information. You are under no obligation to purchase any services offered to you.</p>            
               </div>
            </div>
         </div>
      </section>
      <!--End Faqs-->
      <!--Start Footer-->
      <?php include_once('template-parts/footer.php'); ?>
      <!--End Footer-->


      <!-- Main script file -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/pora.js.plugin.js"></script>
      <!-- contact from script file -->        
      <script src="js/validator.min.js"></script>
      <script src="js/form-scripts.js"></script>
      <!--common script file-->
      <script src="js/main.js"></script>


   </body>
</html>