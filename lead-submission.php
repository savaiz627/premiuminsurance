<?php
//lead form submission 
require_once('constants.php');
require_once('inc/db-config.php');

$db_connection = new Database();
$conn = $db_connection->dbConnection();

$response_title = '';
$response_des = '';

function generate_lead_id() {
	$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$randomNum=substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 6);
	$numbers = rand(100, 900);
	$prefix = "PIP-";
	$sufix = $letters[rand(0, 25)];
	$lsufix = round(microtime(true));
	$lead_id = $prefix . $numbers . $randomNum; //project id created
	
	return $lead_id;
}

//Check is server method is post
if ($_SERVER["REQUEST_METHOD"] != "POST") :
   $response_title = 'Post Method Error';
   $response_des = 'Http post request not found please try again';

   //if method is confirm check if lead_type post value is not empty
   elseif (!isset($_POST['lead_type']) || empty(trim($_POST['lead_type'])) ) :

      $response_title = 'Lead Type Value is Missing';
      $response_des = 'There is an error. Please Select Your Insurance Type ';

// If lead_type value is correct then get all post vars
else :

   //basic post vars
   $lead_id          =  generate_lead_id();
   $first_name       =  trim($_POST['first_name']);
   $last_name        =  trim($_POST['last_name']);
   $date_of_birth    =  trim($_POST['date_of_birth']);
   $gender           =  trim($_POST['gender']);
   $marital_status   =  trim($_POST['marital_status']);
   $street_address   =  trim($_POST['street_address']);
   $city             =  trim($_POST['city']);
   $state            =  trim($_POST['state']);
   $zip_code         =  trim($_POST['zip_code']);
   $phone_number     =  trim($_POST['phone_number']);
   $email_address    =  trim($_POST['email_address']);
   $jornaya_lead_id  =  trim($_POST['universal_leadid']);
   $lead_type        =  trim($_POST['lead_type']);
   $lead_ip          =  trim($_POST['lead_ip']);

   //try db functions
   try{

      $basic_insert_query = "INSERT INTO `leadstbl`(`lead_id`,`first_name`,`last_name`,`date_of_birth`,`gender`,`marital_status`,`street_address`,`city`,`state`,`zip_code`,`phone_number`,`email_address`,`jornaya_lead_id`,`lead_type`,`lead_ip`, `submit_date`) VALUES(:lead_id,:first_name,:last_name,:date_of_birth,:gender,:marital_status,:street_address,:city,:state,:zip_code,:phone_number,:email_address,:jornaya_lead_id,:lead_type,:lead_ip,:submit_date)";
      $basic_insert_stmt = $conn->prepare($basic_insert_query);
      // DATA BINDING
      $basic_insert_stmt->bindValue(':lead_id', $lead_id, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':marital_status', $marital_status, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':street_address', $street_address, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':city', $city, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':state', $state, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':zip_code', $zip_code, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':phone_number', $phone_number, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':email_address', $email_address, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':jornaya_lead_id', $jornaya_lead_id, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':lead_type', $lead_type, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':lead_ip', $lead_ip, PDO::PARAM_STR);
      $basic_insert_stmt->bindValue(':submit_date', date('Y-m-d'), PDO::PARAM_STR);
      $basic_insert_stmt->execute();

      //now put some extra data according the lead type

      //if lead type is Auto Insurance
      if ($lead_type === "Auto Insurance") :

         $current_insurer  =  trim($_POST['current_insurer']);
         $own_home         =  trim($_POST['own_home']);
         $vehicle_make     =  trim($_POST['vehicle_make']);
         $vehicle_model    =  trim($_POST['vehicle_model']);
         $vehicle_year     =  trim($_POST['vehicle_year']);

         $ext_insert_query = "INSERT INTO `auto_insurance_tbl`(`lead_id`,`current_insurer`,`own_home`,`vehicle_make`,`vehicle_model`,`vehicle_year`) VALUES(:lead_id,:current_insurer,:own_home,:vehicle_make,:vehicle_model,:vehicle_year)";

         $ext_insert_stmt = $conn->prepare($ext_insert_query);
         // DATA BINDING
         $ext_insert_stmt->bindValue(':lead_id', $lead_id, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':current_insurer', $current_insurer, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':own_home', $own_home, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':vehicle_make', $vehicle_make, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':vehicle_model', $vehicle_model, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':vehicle_year', $vehicle_year, PDO::PARAM_STR);
         $ext_insert_stmt->execute();

      endif;

      //if lead type is Medicare Insurance
      if ($lead_type === "Medicare Insurance") :

         $current_insurer     =  trim($_POST['current_insurer']);
         $approximate_income  =  trim($_POST['approximate_income']);
         $height_feet         =  trim($_POST['height_feet']);
         $height_inches       =  trim($_POST['height_inches']);
         $weight              =  trim($_POST['weight']);

         $ext_insert_query = "INSERT INTO `medicare_insurance_tbl`(`lead_id`,`current_insurer`,`approximate_income`,`height_feet`,`height_inches`,`weight`) VALUES(:lead_id,:current_insurer,:approximate_income,:height_feet,:height_inches,:weight)";

         $ext_insert_stmt = $conn->prepare($ext_insert_query);
         // DATA BINDING
         $ext_insert_stmt->bindValue(':lead_id', $lead_id, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':current_insurer', $current_insurer, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':approximate_income', $approximate_income, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_feet', $height_feet, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_inches', $height_inches, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
         $ext_insert_stmt->execute();

      endif;

      //if lead type is Life Insurance
      if ($lead_type === "Life Insurance") :

         $coverage_term          =  trim($_POST['coverage_term']);
         $how_much_coverage      =  trim($_POST['how_much_coverage']);
         $use_tobacco_products   =  trim($_POST['use_tobacco_products']);
         $heart_disease          =  trim($_POST['heart_disease']);
         $had_cancer             =  trim($_POST['had_cancer']);
         $height_feet            =  trim($_POST['height_feet']);
         $height_inches          =  trim($_POST['height_inches']);
         $weight                 =  trim($_POST['weight']);

         $ext_insert_query = "INSERT INTO `life_insurance_tbl`(`lead_id`,`coverage_term`,`how_much_coverage`,`use_tobacco_products`,`heart_disease`,`had_cancer`,`height_feet`,`height_inches`,`weight`) VALUES(:lead_id,:coverage_term,:how_much_coverage,:use_tobacco_products,:heart_disease,:had_cancer,:height_feet,:height_inches,:weight)";

         $ext_insert_stmt = $conn->prepare($ext_insert_query);
         // DATA BINDING
         $ext_insert_stmt->bindValue(':lead_id', $lead_id, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':coverage_term', $coverage_term, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':how_much_coverage', $how_much_coverage, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':use_tobacco_products', $use_tobacco_products, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':heart_disease', $heart_disease, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':had_cancer', $had_cancer, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_feet', $height_feet, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_inches', $height_inches, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
         $ext_insert_stmt->execute();

      endif;

      //if lead type is Life Insurance
      if ($lead_type === "Final Expense Life Insurance") :

         $coverage_term          =  trim($_POST['coverage_term']);
         $how_much_coverage      =  trim($_POST['how_much_coverage']);
         $use_tobacco_products   =  trim($_POST['use_tobacco_products']);
         $heart_disease          =  trim($_POST['heart_disease']);
         $had_cancer             =  trim($_POST['had_cancer']);
         $height_feet            =  trim($_POST['height_feet']);
         $height_inches          =  trim($_POST['height_inches']);
         $weight                 =  trim($_POST['weight']);

         $ext_insert_query = "INSERT INTO `final_expense_tbl`(`lead_id`,`coverage_term`,`how_much_coverage`,`use_tobacco_products`,`heart_disease`,`had_cancer`,`height_feet`,`height_inches`,`weight`) VALUES(:lead_id,:coverage_term,:how_much_coverage,:use_tobacco_products,:heart_disease,:had_cancer,:height_feet,:height_inches,:weight)";

         $ext_insert_stmt = $conn->prepare($ext_insert_query);
         // DATA BINDING
         $ext_insert_stmt->bindValue(':lead_id', $lead_id, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':coverage_term', $coverage_term, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':how_much_coverage', $how_much_coverage, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':use_tobacco_products', $use_tobacco_products, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':heart_disease', $heart_disease, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':had_cancer', $had_cancer, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_feet', $height_feet, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':height_inches', $height_inches, PDO::PARAM_STR);
         $ext_insert_stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
         $ext_insert_stmt->execute();

      endif;

      $response_title   = 'Your request successfully submitted';
      $response_des     = 'Thank you for apply free quotation request after a thorough review one of our team will be in contact with you shortly';


   }catch (PDOException $e) {
      $response_title   = 'There is an error in Database';
      $response_des     = $e->getMessage();
   }


endif; //End if Check is server method is post
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!--website title-->
      <title><?php echo SiteName; ?> - That Fits Your Needs</title>
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

<section class="faq-section pad-tb ">
    <div class="jumbotron text-center">
        <h1 class="display-3"><?php echo $response_title; ?></h1>
            <p class="lead"><?php echo $response_des; ?></p>
        <hr>
        <p>
        Having trouble? <a class="nav-link btn-call hide-mob" href="tel:<?php echo TelLink; ?>">
                        <i class="fas fa-phone-alt"></i> <span><span class="clltxt">Want To Speak Live?</span> <?php echo PhnNum; ?> </span>                     </a>
        </p>
        <p class="lead">
        <a class="btnpora btn-rd2 mt30" href="<?php echo SiteUrl; ?>" role="button">Continue to homepage</a>
        </p>
    </div>
</section>


      <!--Start Faqs-->
      <section class="faq-section">
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
                              <p>PremiumInsurancePlans.com is a website that services insurance products for Auto, Medicare, Life insurance. </p>
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
                           How does PremiumInsurancePlans.com use my information?
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