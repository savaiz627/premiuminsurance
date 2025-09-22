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
      <title><?php echo SiteName; ?> - Medicare That Fits Your Needs</title>
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


<style>

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

select.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}


#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>





   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="100">
      <!--Start Header -->
      <?php include_once('template-parts/header-2.php'); ?>
      <!--End Header -->
      <!--Start Hero-->
      <section class="hero-section car-bg2" id="home">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 v-center">
                  <div class="header-heading">
                     <h1 data-aos="zoom-out-up">Medicare Made Easy</h1>
                     <p data-aos="zoom-out-up" data-aos-delay="400">You can choose a insurance plan to help cover what Original Medicare (Parts A and B) does not. The first step is figuring out what type of Medicare plan best meets your health needs and budget.</p>
                     <a href="#form" class="btn-rd" data-aos="zoom-out-up" data-aos-delay="600">Get your Quote →</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="img-box1 m-mt30" data-aos="fade-In" data-aos-delay="400" data-aos-duration="2000"><img src="images/hero/medicare.jpg" alt="car" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Hero-->
      <!--Start Enquire Form-->
      <div class="enquire-form pad-tb" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="cta-heading m-text-c">
                     <h2 class="mb10" data-aos="fade-up" data-aos-delay="100">Key Features :-</h2>
                     <p data-aos="fade-up" data-aos-delay="300">Special features only with our company</p>
                  </div>
                  <div class="key-features itm-media-object mt60">
                     <div class="media" data-aos="fade-In" data-aos-delay="100">
                        <div class="img-ab-"><img src="images/icons/customer-service.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4><em>Coverage & Policies </em></h4>
                           <p>See all the different ways PremiumInsurancePolicy.com can help on Medicare plans.</p>
                        </div>
                     </div>
                     <div class="media mt30" data-aos="fade-In" data-aos-delay="300">
                        <div class="img-ab-"><img src="images/icons/happiness.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4><em>Discounts </em></h4>
                           <p>Learn how you can save on Medicare Insurance Plans by browsing discounts.</p>
                        </div>
                     </div>
                     <div class="media mt30" data-aos="fade-In" data-aos-delay="500">
                        <div class="img-ab-"><img src="images/icons/support.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4><em>Claims </em></h4>
                           <p>Get helpful information about filing an auto claim with PremiumInsurancePolicy.com</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 pl0 m-mt30" id="form">
                  <div class="form-block">
                     <div class="form-header">
                        <h2><span>Get Medicare Insurance Quote</span></h2>
                        <p>To get a FREE no obligation Medicare insurance quote & possibly save!</p>
                     </div>
                     
                     <button> Get Started </button>




                     <form role="form" id="leadForm" action="lead-submission" method = "post" data-toggle="validator" class="shake">
<!-- 
                        <div class="tab">
                           <div class="row">
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Your Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <select id="gender" name="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>                              
                              <div class="form-group col-sm-12">
                                 <select id="marital_status" name="marital_status" class="form-control" required>
                                    <option value="">Are you currently married?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>  

                              <div class="form-group col-sm-12">
                                 <input type="checkbox" class="form-control" id="leadid_tcpa_disclosure" data-error="Please Check" required/>
                                 <label for="leadid_tcpa_disclosure" style="font-size: 10px; ">By selecting the check box, I confirm that I have read, understand, and agree to the <a href="privacypolicy.php" target="_blank">Privacy Policy</a>, its <a href="termsandconditions.php" target="_blank">Terms</a> and its Marketing Partners that I am freely giving my prior experience and express written consent to receive communication from Premiuminsurancepolicy and its <a href="marketingpartners.php" target="_blank">marketing partners</a> via emails, phone calls, and/or text messages related to this request at any telephone number or email address provided by me. I understand there may be a charge by my wireless carrier for such communications. I understand and agree these communications may be generated using an autodialer and may contain pre-recorded messages or artificial voice, and that my prior express written consent precludes and negates any claims under the Telephone Consumer Protection Act. Further, I understand that my consent is not a condition of purchase of any goods or services and that I may revoke my consent at any time. I understand that standard message and data rates may apply.</label>
                                 <div class="help-block with-errors"></div>
                              </div>   -->

                                                          
                           </div>
                        </div>

                        <div class="tab">
                           <div class="row">

                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Enter Street Address" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group col-sm-12">
                                 <select name="state" id="state" class="form-control" required>
                                    <option value="">Select State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter Your Zip/Postal Code" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Your Contact Phone Number" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group col-sm-12">
                                 <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Enter Your Email Address" required data-error="Please fill Out">
                                 <div class="help-block with-errors"></div>
                              </div>


                           </div>
                        </div>   

                        <div class="tab">
                           <div class="row">
                              <div class="form-group col-sm-12">
                                 <select id="lead_type" name="lead_type" class="form-control" required>
                                    <option value="">Select Your Insurance Type</option>
                                    <option value="Medicare Insurance">Medicare Insurance</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>                              
                           </div>
                        </div>       

                        
                        
                        <div id="frmFields" class="tab"></div>

                        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                        <input type="hidden" id="lead_ip" name="lead_ip" value="<?php echo $lead_ip; ?>">
                        
                        <div style="overflow:auto;">
                           <div style="float:right;">
                           <button type="button" id="prevBtn" class="btn btn-secondary" onclick="nextPrev(-1)">Previous</button>
                           <button type="button" id="nextBtn" class="btn btn-info" onclick="nextPrev(1)">Next</button>
                           </div>
                        </div>


                        <div style="text-align:center;margin-top:40px;">
                           <span class="step"></span>
                           <span class="step"></span>
                           <span class="step"></span>
                           <span class="step"></span>
                        </div>

                        <p class="trm"><i class="fas fa-lock"></i>DISCLOSURES - Availability of carriers and products are dependent on your resident zip code. Not all plans or benefits available in all areas. Consult a licensed insurance agent to find plans available in your area. Limitations and exclusions apply. Plans are insured or covered by a Medicare Advantage organization with a Medicare contract and/or a Medicare-approved Part D sponsor. Enrollment in the plan depends on the plan's contract renewal with Medicare. We do not offer every plan available in your area. Any information we provide is limited to those plans we do offer in your area. Please contact Medicare.gov or 1–800–MEDICARE (24 hours a day/7 days a week) to get information on all of your options. TTY users should call 1-877-486-2048.</p>

                     </form>                        
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End Enquire Form-->
      <!--Start logo-->
      <div class="logo-slider pb80">
         <div class="container">
            <div id="oc-clients" class="owl-carousel" data-0="2" data-600="3" data-1000="4" data-1400="5"  data-autoplay="true" data-nav="false" data-dots="false" data-space="15" data-loop="true" data-speed="800">
               <div class="project-logo"><img src="images/logo/logo-1.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-2.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-3.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-4.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-5.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-6.png" alt="text" class="img-fluid"></div>
               <div class="project-logo"><img src="images/logo/logo-3.png" alt="text" class="img-fluid"></div>
            </div>
         </div>
      </div>
      <!--End logo-->
      <!--Start about-->
      <section class="about-bg pad-tb" id="about">
         <div class="container">
            <div class="row m-text-c">
               <div class="col-lg-6 v-center">
                  <div class="about-company">
                     <h2 class="mb20" data-aos="fade-up" data-aos-delay="100">Save <em>Money</em> by chosing the best plan available in you area. Get <em>FREE CONSULTATION</em> and comapare different plans with PremiumInsurancePolicy.com</h2>
                     <p data-aos="fade-up" data-aos-delay="300">Do You Qualify For A Special Enrollment Period? You may need a new health plan due to certain life circumstances, like a move or a recent diagnosis. The Special Enrollment Period is an additional window of time to apply, add, drop, or change your Medicare coverage outside of enrollment periods.</p>
                     <a href="#form" class="btn-rd mt40" data-aos="fade-up" data-aos-delay="500">Get your Quote</a>
                  </div>
               </div>
               <div class="col-lg-6 v-center">
                  <div class="img-box1 m-mt30"><img src="images/common/medicare-card.jpg" alt="feature-image" class="img-fluid"></div>
               </div>
            </div>
         </div>
      </section>
      <!--End about -->


      <!--Start Loan Steps-->
      <section class="step-bg pt50 pb80">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 v-center">
                  <div class="common-heading m-text-c pr50">
                     <h2 class="mb20" data-aos="fade-up" data-aos-delay="100"><em>More Savings</em> Need more reasons to get a quote? <span class="fw3">We love saving people money!</span></h2>
                     <p data-aos="fade-up" data-aos-delay="100">Our company is incorporated, independent and not owned by any of the service providers that may contact you. The information provided to you will be coming from licensed insurance agents or insurance carriers who have membership in our partner network. These licensed insurance agents are authorized by their respective organizations to provide you with this information. You are under no obligation to purchase any services offered to you.</p>
                  </div>
               </div>
               <div class="col-lg-7 v-center m-mt60">
                  <div class="row divrightbdr">
                     <div class="col-lg-6">
                        <div class="steps-div  mt30" data-aos="fade-up" data-aos-delay="100">
                           <div class="steps-icons-1">   <img src="images/icons/choice.png" alt="steps"> </div>
                           <h4 class="mb10">More Value</h4>
                           <p>Accidents happen. So, when your customers know they’re safe from massive medical costs, they know they can do more of what they love with zero hesitation. And that’s peace of mind they won’t find anywhere else.</p>
                        </div>
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="300">
                           <div class="steps-icons-1">   <img src="images/icons/credit-card.png" alt="steps"> </div>
                           <h4 class="mb10">Less Risk</h4>
                           <p>We know when your customers file a claim. Which means we collect data that gives you insight into how they’re getting hurt. So you can make enhancements that mitigate risk for even the most accident-prone.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 mt60 m-m0">
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="200">
                           <div class="steps-icons-1">   <img src="images/icons/easy.png" alt="steps"> </div>
                           <h4 class="mb10">Rapid Claims</h4>
                           <p>Our fast and easy claims process actually pays out. That means happy customers. And that’s great for business</p>
                        </div>
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="500">
                           <div class="steps-icons-1">   <img src="images/icons/customers.png" alt="steps"> </div>
                           <h4 class="mb10">Easy Integration</h4>
                           <p>We handle the entire digital integration and customer claims process from beginning to end—at no extra cost.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Loan Steps-->


      <!--Start CTA-->
      <div class="cta-section pad-tb bg-fixed-img" data-parallax="scroll" data-speed="0.5" data-image-src="images/common/Medicare.jpg">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-8">
                  <div class="cta-heading">
                     <h2 class="mb20 text-w" data-aos="fade-up" data-aos-delay="100">Shop over the phone</h2>
                     <p class="text-w" data-aos="fade-up" data-aos-delay="300">Speak with a licensed insurance agent and get advice on choosing a plan that's right for you.</p>
                     <a class="nav-link btn-call hide-mob" href="tel:<?php echo TelLink; ?>"><i class="fas fa-phone-alt"></i> <span><span class="clltxt" style="color: white !important;">Happy to Help you</span> <?php echo PhnNum; ?> </span></a>
                     <a href="#form" class="btn-rd mt40" data-aos="fade-up" data-aos-delay="500">Get your Quote →</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End CTA-->


      <!--Start Reviews-->
      <section class="reviews-section pad-tb review-bg2" id="review">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="comon-heading">
                     <h2 class="mb20">Our <em>Happy</em> Customers</h2>
                  </div>
                  <h5 class="mt40">Thousands of unbiased reviews. Trusted by 10 Thousand+ customers.</h5>
                  <ul class="overallrating mt20">
                     <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star-half-alt"></i></a> </li>
                  </ul>
               </div>
               <div class="col-lg-6">
                  <div class="reviews-block owl-carousel m-mt60">
                     <div class="reviews-card">
                        <div class="-client-details-">
                           <div class="-reviewr">
                              <img src="images/reviews/review-image-1.jpg" alt="Good Review" class="img-fluid">
                           </div>
                           <div class="reviewer-text">
                              <h5>James Hooks</h5>
                              <div class="star-rate">
                                 <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star-half-alt"></i></a> </li>
                                    <li> <a href="javascript:void(0)">4.2</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="review-text pb0 pt30">
                           <p>PremiumInsurancePolicy.com was great saved my company $1200 a month on my insurance premium. I would highly recommend this company for insurance.</p>
                        </div>
                     </div>
                     <div class="reviews-card">
                        <div class="-client-details-">
                           <div class="-reviewr">
                              <img src="images/reviews/review-image-2.jpg" alt="Good Review" class="img-fluid">
                           </div>
                           <div class="reviewer-text">
                              <h5>Bruce Beckel</h5>
                              <div class="star-rate">
                                 <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star-half-alt"></i></a> </li>
                                    <li> <a href="javascript:void(0)">4.2</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="review-text pb0 pt30">
                           <p>After looking for 3 Days to try to lower my insurance on my truck and trailer I found PremiumInsurancePolicy.com agency. PremiumInsurancePolicy.com was very easy to work with. He was able to lower my insurance $5,000 a year.</p>
                        </div>
                     </div>
                     <div class="reviews-card">
                        <div class="-client-details-">
                           <div class="-reviewr">
                              <img src="images/reviews/review-image-3.jpg" alt="Good Review" class="img-fluid">
                           </div>
                           <div class="reviewer-text">
                              <h5>J Pat</h5>
                              <div class="star-rate">
                                 <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star-half-alt"></i></a> </li>
                                    <li> <a href="javascript:void(0)">4.2</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="review-text pb0 pt30">
                           <p>PremiumInsurancePolicy.com is a pleasure to work with and when any problems may arise PremiumInsurancePolicy.com is there to take care of the issue in a prompt and courteous fashion. PremiumInsurancePolicy.com is a true professional and provides great customer service!!!</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>         
      </section>
      <!--End Reviews-->



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
                           What is Medicare Supplement Insurance (a.k.a. Medigap)
                           </button>
                        </div>
                        <div id="collapse-1" class="card-body p0 collapse show" aria-labelledby="acc1" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>Medicare supplement insurance is a type of Medicare insurance plan that works with Original Medicare, instead of replacing it. It helps pay for some out-of-pocket costs. Original Medicare, which includes Parts A and B, covers some of your basic hospital and doctor expenses, respectively. Unfortunately, some does not mean all. The expenses which Medicare does not cover - sometimes referred to as "gaps" in coverage - are what Medigap insurance plans are designed to protect you from.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card-2 mt10">
                        <div class="card-header" id="acc2">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                           Who is Eligible for Medicare Supplement Insurance?
                           </button>
                        </div>
                        <div id="collapse-2" class="card-body p0 collapse" aria-labelledby="acc2" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>If any of the following scenarios apply to you, then you may have a Guaranteed Issue Right or the ability to enroll in Medicare Supplemental Insurance.
                                  <ul>
                                      <li>You are currently covered under Medicare Parts A & B</li>
                                      <li>You are within 6 months of turning 65.</li>
                                      <li>You are within 6 months of receiving Part B coverage.</li>
                                      <li>If you are about to lose your group health insurance plan.</li>
                                  </ul>
                              </p>
                              <p>Please note that you may still be required to answer some medical questions about your overall health and wellness. For further clarification, or if you have any questions, please do not hesitate to contact us at <?php echo PhnNum; ?>, TTY Users: 711. Give us a call today.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc3">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                           When Can I Sign Up for Medicare Supplement Insurance?
                           </button>
                        </div>
                        <div id="collapse-3" class="card-body p0 collapse" aria-labelledby="acc3" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>You can sign up for Medigap insurance at any time. However, there are some time frames that can make the process much easier, and can reduce your costs.</p>
                              <p>1) The Initial Enrollment Period (IEP). During your first 6 months of Part B coverage, your acceptance is guaranteed, regardless of your current level of health.</p>
                              <p>2) The "Guaranteed Issue" Period. If you are about to lose coverage through an employer (creditable coverage), you will have a "guaranteed issue" period lasting 63 days when you can purchase any Medicare Supplement Insurance policy with no health questions asked.</p>
                              <p>If you apply for Medicare Supplement Insurance outside of these time frames, you may have to go through the complicated process of medical underwriting and answering lots of invasive health questions. To learn more, and to get help going through the process, call us today at <?php echo PhnNum; ?>, TTY Users: 711.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc4">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                           What is Medicare Advantage Insurance
                           </button>
                        </div>
                        <div id="collapse-4" class="card-body p0 collapse" aria-labelledby="acc4" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>Medicare Advantage insurance plans are a private alternative way to get your Medicare benefits and can help limit your Medicare out-of-pocket costs. Plans may offer additional benefits like prescription drug coverage, dental, vision and hearing benefits. Plans vary, so it's important to compare them carefully to find the right option for you.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc5">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                           Who is Medicare Supplement recommended for?
                           </button>
                        </div>
                        <div id="collapse-5" class="card-body p0 collapse" aria-labelledby="acc5" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>Medicare Supplement plans can be a great choice for people from all walks of life. Assuming you’re eligible to enroll, the choice to sign up for Medicare Supplement comes down to your individual needs. Many people can benefit from a Medicare Supplement insurance policy, which offers the same network of providers as Original Medicare. Original Medicare provides standard coverage to every beneficiary, regardless of income. What it does not provide, however, is 100% coverage of your medical costs. Whether you have trouble covering a surprise medical bill, or you want to protect your nest egg in retirement, this additional coverage can be an excellent choice.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc6">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                           Where Do I Purchase Medicare Insurance plans?
                           </button>
                        </div>
                        <div id="collapse-6" class="card-body p0 collapse" aria-labelledby="acc6" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>One of the easiest ways to get a complete view of your options is to take to an licensed insurance agent that can give you quotes for multiple carriers and plan types all on one call. This saves you having to put your information onto websites that will sell your information, or going from carrier to carrier trying to find the right options available for you.</p>
                           </div>
                        </div>
                     </div>

                     <div class="card-2 mt10">
                        <div class="card-header" id="acc7">
                           <button class="btn btn-link btn-block text-left acc-icon collapsed" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                           Where Do I Purchase Medicare Insurance plans?
                           </button>
                        </div>
                        <div id="collapse-7" class="card-body p0 collapse" aria-labelledby="acc7" data-parent="#accordion3">
                           <div class="data-reqs">
                              <p>The ten types of Medicare Supplement Insurance Plans (like F, G & N) have standard benefits defined by Medicare. Each Medicare Supplement plan of a given type (letter) offers the same benefits regardless of what carrier you choose. This means shopping around isn’t just about finding the right plan for you, it’s about finding an affordable rate that will stay low over time.</p>
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
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="footer- mt30 mb30">
                     <h1><a href="<?php echo SiteUrl; ?>">Premium Insurance Policy</a></h1>
                  </div>
                  <p>PremiumInsurancePolicy.com is a U.S. company that offers a fast, free and easy service to help consumers find the best possible insurance for their needs. Just fill out one, simple form and licensed insurance agents will put together a quote for you to review. Our state-of-the-art technology and wide network of insurance companies will match you with licensed insurance agents in your area.</p>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="footer-ft">
                        <p>Copyright © 2022 PremiumInsurancePolicy.com. All rights reserved.</p>
                        <p><small>DISCLOSURES - This is an advertising referral and comparison service that matches consumers with prospective Medicare services providers depending upon your information. We do not represent any specific Medicare services provider. Quotes are provided by independent, participating Medicare services companies that participate in our network. Lowest advertised rates may vary and are not necessarily available from all participating service providers. By submitting your information, you expressly consent to be contacted by a representative or Medicare services company. Providing your information does not guarantee that you will be accepted by a participating service provider. We disclaim liability for, without limitation, any product, service or provider. For details, questions or concerns regarding your products or services, please contact your third-party service provider directly. We do not endorse or charge you for any product or service. Any compensation received is paid by participating service providers and only for advertising services provided. This service is void where prohibited. This service does not constitute an offer to sell or a solicitation in connection with any product or service. This service and these disclosures are provided to you for information purposes only and should not be used as a substitute for informed professional advice.</small></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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
   
<script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/8262ca9b-a35c-0129-14ac-33f1e5d6a190.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=307feae7-efef-c621-3375-a42f2bad3708&lck=8262ca9b-a35c-0129-14ac-33f1e5d6a190&snippet_version=2' /></noscript>

   <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("leadForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].querySelectorAll("input,select,checkbox");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


<script>
$(document).ready(function(){
   //on lead_type select
   $('#lead_type').on('change', function() {

      //if Auto Insurance is selected
      if ( this.value == 'Auto Insurance')
      {
         $("#frmFields").empty();

         var AutoInsuranceFields  = '<div class="row"> <div class="form-group col-sm-12"> <select id="current_insurer" name="current_insurer" class="form-control" required> <option value="">Who is your current insurer</option> <option value="21st Century">21st Century</option> <option value="Allstate Ins Co">Allstate Ins Co</option> <option value="Country Financial">Country Financial</option> <option value="Esurance">Esurance</option> <option value="Farmers Ins">Farmers Ins</option> <option value="Geico">Geico</option> <option value="Liberty Mutual">Liberty Mutual</option> <option value="MetLife">MetLife</option> <option value="Nationwide">Nationwide</option> <option value="Progressive">Progressive</option> <option value="State Farm">State Farm</option> <option value="Other">Other</option> <option value="Not Currently Insured">Not Currently Insured</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="own_home" name="own_home" class="form-control" required> <option value="">Do you own your home?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" placeholder="Enter Your Vehicle Make e.g (Audi, BMW)" required data-error="Please fill Out"> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" placeholder="Enter Your Vehicle Model" required data-error="Please fill Out"> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="vehicle_year" name="vehicle_year" class="form-control" required> <option value="">Select Vehicle Year</option> <?php foreach($years as $year) : ?> <option value="<?php echo $year; ?>"><?php echo $year; ?></option> <?php endforeach; ?> </select> </div></div>';

         $('#frmFields').html(AutoInsuranceFields); 

      }

      //if Medicare Insurance is selected
      if ( this.value == 'Medicare Insurance')
      {
         $("#frmFields").empty();

         var MedicareInsuranceFields  = '<div class="row"> <div class="form-group col-sm-12"> <select id="current_insurer" name="current_insurer" class="form-control" required> <option value="">Select Who is your current insurer?</option> <option value="I dont have">I dont have</option> <option value="AARP">AARP</option> <option value="AETNA">AETNA</option> <option value="Aflac">Aflac</option> <option value="American Family">American Family</option> <option value="Anthem">Anthem</option> <option value="Armed Forces Insurance">Armed Forces Insurance</option> <option value="Assurant">Assurant</option> <option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option> <option value="Cigna">Cigna</option> <option value="Golden Rule">Golden Rule</option> <option value="Government Employees">Government Employees</option> <option value="Hartford AARP">Hartford AARP</option> <option value="Health Net">Health Net</option> <option value="Health Plus of America">Health Plus of America</option> <option value="HealthMarkets">HealthMarkets</option> <option value="Humana">Humana</option> <option value="InSphere">InSphere</option> <option value="Kaiser Permanente">Kaiser Permanente</option> <option value="LifeWise Health Plan">LifeWise Health Plan</option> <option value="Metlife Insurance">Metlife Insurance</option> <option value="Mutual of Omaha">Mutual of Omaha</option> <option value="Oxford">Oxford</option> <option value="Principal Financial">Principal Financial</option> <option value="State Farm">State Farm</option> <option value="Tricare">Tricare</option> <option value="UnitedHealthCare">UnitedHealthCare</option> <option value="USAA">USAA</option> <option value="Wellpoint">Wellpoint</option> <option value="Other">Other</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="approximate_income" name="approximate_income" class="form-control" required> <option value="">What is your approximate income?</option> <option value="$0 to $29,000">$0 to $29,000</option> <option value="$29,000 to $46,000">$29,000 to $46,000</option> <option value="$46,000 or more">$46,000 or more</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <b>What is your approximate height and weight?</b> </div><div class="form-group col-sm-6"> <select id="height_feet" name="height_feet" class="form-control" required> <option value="">Feet</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-6"> <select id="height_inches" name="height_inches" class="form-control" required> <option value="">Inches</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Your Weight e.g (50kg)" required data-error="Please fill Out"> <div class="help-block with-errors"></div></div></div>';

         $('#frmFields').html(MedicareInsuranceFields); 

      }

      //if Life Insurance is selected
      if ( this.value == 'Life Insurance')
      {
         $("#frmFields").empty();

         var LifeInsuranceFields  = '<div class="row"> <div class="form-group col-sm-12"> <select id="coverage_term" name="coverage_term" class="form-control" required> <option value="">What coverage term are you looking for?</option> <option value="30 Year Term">30 Year Term</option> <option value="25 Year Term">25 Year Term</option> <option value="20 Year Term">20 Year Term</option> <option value="15 Year Term">15 Year Term</option> <option value="10 Year Term">10 Year Term</option> <option value="Universal Life">Universal Life</option> <option value="Variable Life">Variable Life</option> <option value="Whole Life">Whole Life</option> <option value="Not Sure">Not Sure</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="how_much_coverage" name="how_much_coverage" class="form-control" required> <option value="">How much coverage are you looking for?</option> <option value="$1,000,000 or Greater">$1,000,000 or Greater</option> <option value="$500,000 to $999,999">$500,000 to $999,999</option> <option value="$250,000 to $499,999">$250,000 to $499,999</option> <option value="$100,000-$249,999">$100,000-$249,999</option> <option value="$50,000-$99,999">$50,000-$99,999</option> <option value="$49,000 or Less">$49,000 or Less</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="use_tobacco_products" name="use_tobacco_products" class="form-control" required> <option value="">Do you use tobacco products?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="heart_disease" name="heart_disease" class="form-control" required> <option value="">Have you or any of your immediate relatives had heart disease?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="had_cancer" name="had_cancer" class="form-control" required> <option value="">Have you or any of your immediate relatives had cancer?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <b>What is your approximate height and weight?</b> </div><div class="form-group col-sm-6"> <select id="height_feet" name="height_feet" class="form-control" required> <option value="">Feet</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-6"> <select id="height_inches" name="height_inches" class="form-control" required> <option value="">Inches</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Your Weight e.g (50kg)" required data-error="Please fill Out"> <div class="help-block with-errors"></div></div></div>';

         $('#frmFields').html(LifeInsuranceFields); 
      }

   });  
});
</script>


</body>
</html>   