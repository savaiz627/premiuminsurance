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
      <title><?php echo SiteName; ?> - Instant Final Expense Insurance Quotes</title>
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
                     <h1 data-aos="zoom-out-up" style="padding-top:70px">Get a Free Final Expense Life Insurance Quote Now!</h1>
                     <p data-aos="zoom-out-up" data-aos-delay="400">A final expense life insurance policy is used to pay for burial expenses and funeral services when a loved one dies. This helps ease the financial burden placed on a family when a loved one dies.</p>
                     <a href="#form" class="btn-rd" data-aos="zoom-out-up" data-aos-delay="600">Get your Quote →</a>
                  </div>
               </div>
               <div class="col-lg-6" style="margin-top: 70px">
                  <div class="img-box1 m-mt30" data-aos="fade-In" data-aos-delay="400" data-aos-duration="2000"><img src="images/hero/life-insurance.jpg" alt="car" class="img-fluid">
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
                           <p>See all the different ways PremiumInsurancePolicy.com can help protect your life.</p>
                        </div>
                     </div>
                     <div class="media mt30" data-aos="fade-In" data-aos-delay="300">
                        <div class="img-ab-"><img src="images/icons/happiness.svg" alt="icon" class="layer"></div>
                        <div class="media-body">
                           <h4><em>Discounts </em></h4>
                           <p>Learn how you can save on life insurance by browsing plans.</p>
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
                        <h2><span>Receive Your Final Expense Quote in Less Than a Minute!</span></h2>
                        <p>PremiumInsurancePolicy.com makes finding the best Final Expense Quote quick and easy. You can instantly retrieve quotes from all of the Final Expense Insurance Companies that we represent. There is never an obligation to buy and agents are standing by to assist you if needed.</p>
                     </div>
                     <form role="form" id="leadForm" action="lead-submission" method = "post" data-toggle="validator" class="shake">

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
                              </div>  

                                                           
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
                                    <option value="Final Expense Life Insurance">Final Expense Life Insurance</option>
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
                     <h2 class="mb20" data-aos="fade-up" data-aos-delay="100">What is Final Expense Insurance?</h2>
                     <p data-aos="fade-up" data-aos-delay="300">Final Expense Insurance is essentially an insurance plan that provides financial assistance to the family members who must undergo burying the plan holder. Final Expense policies clearly appoint a funeral direction and explicitly cover all the various details outlining the policy holder's desired funeral. Due to the large costs of these aspects of a funeral, being covered allows you to save money by making periodic payments for the remainder of the policy holder's life or an alotted term.</p>
                     <a href="#form" class="btn-rd mt40" data-aos="fade-up" data-aos-delay="500">Get your Quote</a>
                  </div>
               </div>
               <div class="col-lg-6 v-center">
                  <div class="img-box1 m-mt30"><img src="images/common/life-insurance.jpg" alt="feature-image" class="img-fluid"></div>
               </div>
            </div>
         </div>
      </section>
      <!--End about -->



      <!--Start CTA-->
      <div class="cta-section pad-tb bg-fixed-img" data-parallax="scroll" data-speed="0.5" data-image-src="images/common/medicare.jpg">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-8">
                  <div class="cta-heading">
                     <h2 class="mb20 text-w" data-aos="fade-up" data-aos-delay="100">How does Final Expense Insurance Work?</h2>
                     <p class="text-w" data-aos="fade-up" data-aos-delay="300">To begin, Final Expense Insurance is similar to other types of insurance where there is a beneficiary whom the policy holder may name. There are two common ways to purchase final expense insurance: Term Insurance and Permanent Insurance. Term Insurance provides a coverage period with the two most common time allotments being 15 and 20 years. Permanent Insurance holds value until the beneficiary passes away. Both types of final expense insurance have low monthly installments which make it an easy choice for individuals with a fixed retirement income. Another major benefit of applying for final expense insurance is you become exempt from being asked medical questions which would normally affect your rates for Whole Life Insurance.</p>
                     <p class="text-w" data-aos="fade-up" data-aos-delay="300">Before deciding on a specific plan, it is important to take into consideration a variety of factors. These factors include: whether you wish to be buried or cremated, which type of casket you want and the size of your service. It is highly recommended that you contact a trusted funeral director to help guide you through the decision making process. Funeral Directors can also help you establish approximate costs and allow you to purchase final expense insurance more accurately.</p>
                     <p class="text-w" data-aos="fade-up" data-aos-delay="300">Final Expense Life Quotes provides a powerful resource for finding rates based on your custom needs. Our free quote tool helps match our clients with highly-ranked final expense carriers. At Final Expense Quotes, it is our mission to help families plan in an easy and convenient way. We always match our customers with the highest quality insurers in the industry. Make sure your family is provided for and get started today!</p>
                     <a href="#form" class="btn-rd mt40" data-aos="fade-up" data-aos-delay="500">Get your Quote →</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End CTA-->



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

      //if Final expense is selected
      if ( this.value == 'Final Expense Life Insurance')
      {
         $("#frmFields").empty();

         var FinalExpenseFields  = '<div class="row"> <div class="form-group col-sm-12"> <select id="coverage_term" name="coverage_term" class="form-control" required> <option value="">What coverage term are you looking for?</option> <option value="30 Year Term">30 Year Term</option> <option value="25 Year Term">25 Year Term</option> <option value="20 Year Term">20 Year Term</option> <option value="15 Year Term">15 Year Term</option> <option value="10 Year Term">10 Year Term</option> <option value="Universal Life">Universal Life</option> <option value="Variable Life">Variable Life</option> <option value="Whole Life">Whole Life</option> <option value="Not Sure">Not Sure</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="how_much_coverage" name="how_much_coverage" class="form-control" required> <option value="">How much coverage are you looking for?</option> <option value="$2,000">$2,000</option> <option value="$3,000">$3,000</option> <option value="$4,000">$4,000</option> <option value="$5,000">$5,000</option> <option value="$6,000">$6,000</option> <option value="$7,000">$7,000</option> <option value="$8,000">$8,000</option> <option value="$9,000">$9,000</option> <option value="$10,000">$10,000</option> <option value="$11,000">$11,000</option> <option value="$12,000">$12,000</option> <option value="$13,000">$13,000</option> <option value="$14,000">$14,000</option> <option value="$15,000">$15,000</option> <option value="$16,000">$16,000</option> <option value="$17,000">$17,000</option> <option value="$18,000">$18,000</option> <option value="$19,000">$19,000</option> <option value="$20,000">$20,000</option> <option value="$25,000">$25,000</option> <option value="$30,000">$30,000</option> <option value="$35,000">$35,000</option> <option value="$40,000">$40,000</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="use_tobacco_products" name="use_tobacco_products" class="form-control" required> <option value="">Do you use tobacco products?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="heart_disease" name="heart_disease" class="form-control" required> <option value="">Have you or any of your immediate relatives had heart disease?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <select id="had_cancer" name="had_cancer" class="form-control" required> <option value="">Have you or any of your immediate relatives had cancer?</option> <option value="Yes">Yes</option> <option value="No">No</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <b>What is your approximate height and weight?</b> </div><div class="form-group col-sm-6"> <select id="height_feet" name="height_feet" class="form-control" required> <option value="">Feet</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-6"> <select id="height_inches" name="height_inches" class="form-control" required> <option value="">Inches</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> </select> <div class="help-block with-errors"></div></div><div class="form-group col-sm-12"> <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Your Weight e.g (50kg)" required data-error="Please fill Out"> <div class="help-block with-errors"></div></div></div>';

         $('#frmFields').html(FinalExpenseFields); 
      }


   });  
});
</script>


</body>
</html>   