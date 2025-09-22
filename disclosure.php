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
      <title><?php echo SiteName; ?> - Disclosure</title>
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
                     <h2  data-aos="fade-up" data-aos-delay="100">Disclosure</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center mt60">
               <div class="col-lg-12">
                  <p>This is an advertising referral and comparison service that matches consumers with prospective insurance agents and companies depending upon your information. The operator of this website is not an insurance company, an agent, a provider, a broker, a representative, a bank, or a financial or lending institution. We do not represent any specific insurance provider and do not provide insurance or financial quotes, or policies. The service is not used for insurance or credit decisions. Quotes are provided by independent participating insurance agents and companies that participate in network. Lowest advertised rates may vary and are not necessarily available from all participating service providers. By submitting your information, you expressly consent to be contacted by a representative, an insurance agent or insurance company. Providing your information does not guarantee that you will be accepted by a participating provider. We do not have access to the terms of your insurance plan and disclaim liability for, without limitation, any product, service, plan or provider. For details, questions or concerns regarding your plan, please contact your third-party provider or agent, directly. We do not endorse or charge you for any product or service. Any compensation received is paid by participating providers and only for advertising services provided. This service is void where prohibited. We are not connected with or endorsed by the U.S. government or any federal insurance program. This service does not constitute an offer to sell or a solicitation in connection with any product or service. This service and these disclosures are provided to you for information purposes only and should not be used as a substitute for informed professional advice.</p>
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