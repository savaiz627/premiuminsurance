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
      <title><?php echo SiteName; ?> - FAQs</title>
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
               <div class="col-lg-8">
                  <div class="common-heading">
                     <h2  data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center mt60">
               <div class="col-lg-8">
                  <div id="accordion3" class="accordion">
                     <div class="card-2">
                        <div class="card-header" id="acc1">
                           <button class="btn btn-link btn-block text-left acc-icon" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                           What services are supported by the websites that you operate?
                           </button>
                        </div>
                        <div id="collapse-1" class="card-body p0 collapse show" aria-labelledby="acc1" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>PremiumInsurancePolicy.com is a website that services insurance products for Auto, Medicare, Life insurance. </p>
                           </div>
                        </div>
                     </div>
                     <div class="card-2 mt10">
                        <div class="card-header" id="acc2">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                           How do your websites help me find a competitive insurance quote?
                           </button>
                        </div>
                        <div id="collapse-2" class="card-body p0 collapse" aria-labelledby="acc2" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>By completing the form on our website, you may get matched with providers in your area who will contact you to discuss your needs and provide quotes.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc3">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                           How long will the process take?
                           </button>
                        </div>
                        <div id="collapse-3" class="card-body p0 collapse" aria-labelledby="acc3" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>Our websites work fast. Simply fill out the free form on our site, which usually takes about 2-3 minutes, and you will start receiving inquiries usually within minutes. It's that easy!</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc4">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                           When do I get contacted by the service provider or their organization?
                           </button>
                        </div>
                        <div id="collapse-4" class="card-body p0 collapse" aria-labelledby="acc4" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>After completing the form on our website, insurance providers will usually begin contacting you within minutes, so have your phone nearby. Other providers may take up to 24 hours to contact you, and some may contact you via email so be sure to check your inbox.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc5">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                           Does this service cost anything?
                           </button>
                        </div>
                        <div id="collapse-5" class="card-body p0 collapse" aria-labelledby="acc5" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>No. Our websites are completely free for all consumers interested in speaking with an insurance provider.  Consumers have no obligation to purchase anything from any provider that may contact you.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc6">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                           How does PremiumInsurancePolicy.com use my information?
                           </button>
                        </div>
                        <div id="collapse-6" class="card-body p0 collapse" aria-labelledby="acc6" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>The information we collect on our websites is securely provided to providers who are members of our network. Their job is to provide you with information to assist with your needs, a competitive price estimate, and answer your questions to allow you to make an informed purchasing decision. We respect your privacy and you can find more information about how we protect your information by reviewing our <a href="privacy-policy">Privacy Policy.</a></p>
                           </div>
                        </div>
                     </div>


                  </div>
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