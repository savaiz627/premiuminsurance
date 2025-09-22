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
   <body data-spy="scroll" data-target=".navbar" data-offset="100" class="ct1280">

      <!--Start Header -->
      <?php include_once('template-parts/header.php'); ?>
      <!--End Header -->



      <!--Start Hero-->
      <section class="hero-section-1  agency-bg" id="home">
         <div class="blur-bg-blocks">
            <aside class="blur-bg-set">
               <div class="blur-bg blur-bg-a"></div>
               <div class="blur-bg blur-bg-b"></div>
               <div class="blur-bg blur-bg-c"></div>
            </aside>
         </div>
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-5 v-center">
                  <div class="header-heading-1">
                     <h1 class="mb30" data-aos="zoom-out-up">Buy Insurance, <span class="fw3">Get a quote in just a few minutes </span></h1>
                     <p data-aos="zoom-out-up" data-aos-delay="400">It’s a risky world out there and getting the right insurance is complicated. Instead of hoping you have what you need, get with an our expert. You’ll have peace of mind in knowing you can face whatever lies ahead with confidence. We’ve got you covered.</p>
                     <a href="#modal" data-toggle="modal" data-target="#modal_aside_right" class="btnpora btn-rd2 mt30" data-aos="zoom-out-up" data-aos-delay="600">Get your Quote</a>
                  </div>
                  <div class="hero-feature" data-aos="zoom-out-up" data-aos-delay="800">
                     <div class="media v-center" >
                        <div class="icon-pora"><img src="images/icons/fast-time.png" alt="icon" class="w-100"></div>
                        <div class="media-body">Quick, Easy &	Hassle Free</div>
                     </div>
                     <div class="media v-center">
                        <div class="icon-pora"><img src="images/icons/customer-services.png" alt="icon" class="w-100"></div>
                        <div class="media-body">100% Claims Support</div>
                     </div>
                  </div>
               </div>
                  <div class="col-lg-5">
                     <div class="img-box m-mt60 text-center" data-aos="fade-In" data-aos-delay="400" data-aos-duration="3000"><img src="images/hero/beautiful-curly-girl.png" alt="car" class="img-fluid">
                     </div>
                  </div>
               </div>





               
            </div>
         </div>
      </section>
      <!--End Hero-->
      <!--Start quick-card-->
      <section class="btm-sldrdiv">
         <div class="container">
            <div class="row text-center">
               <div class="col-lg-4 mt60">
                  <div class="feature-card border-outer hoshd" data-aos="fade-up" data-aos-delay="100">
                     <div class="card-icon-section"> <img src="images/icons/car.png" alt="Security" class="img-fluid"> </div>
                     <h5 class="mb10"><em>Auto</em> Insurance</h5>
                     <p>Before you buy an auto insurance policy, it’s a good idea to compare rates from car insurance providers. Doing so can help you find the best policy to fit your coverage needs and financial situation.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt60">
                  <div class="feature-card border-outer hoshd" data-aos="fade-up" data-aos-delay="300">
                     <div class="card-icon-section"> <img src="images/icons/heart.png" alt="Security" class="img-fluid"> </div>
                     <h5 class="mb10"><em>Medicare</em> Insurance</h5>
                     <p>Before you buy an Medicare insurance policy, it’s a good idea to compare rates from Medicare insurance providers. Doing so can help you find the best policy to fit your coverage needs and financial situation.</p>
                  </div>
               </div>
               <div class="col-lg-4 mt60">
                  <div class="feature-card border-outer hoshd" data-aos="fade-up" data-aos-delay="500">
                     <div class="card-icon-section"> <img src="images/icons/health-care.png" alt="Security" class="img-fluid"> </div>
                     <h5 class="mb10"><em>Life</em> Insurance</h5>
                     <p>Before you buy an Life insurance policy, it’s a good idea to compare rates from Life premium insurance providers. Doing so can help you find the best policy to fit your coverage needs and financial situation.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End quick-card-->


      <!--why us start-->
      <div class="enquire-form pad-tb pora-bg1 text-white" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="cta-heading text-center">
                     <span class="subhead" data-aos="fade-up" data-aos-delay="100">Why use our service</span>
                     <h3 data-aos="fade-up" data-aos-delay="300">Live Your Best Life Today, Your Tomorrow Is Secured With Us</h3>
                  </div>
                  <div class="mt40 text-center">

                     <p>Thousands and thousands of satisfied consumers have trusted PremiumInsurancePolicy.com to help them comparatively shop for the best insurance coverage at the best price. Our fast, free and easy service matches you with a qualified insurance carrier, or licensed insurance agents, who will contact you with quotes within minutes of submitting your information. The process only takes a few minutes to complete one, simple form. Then, our proprietary technology will instantly match you to a licensed insurance agents or carrier within our network of licensed insurance agents to get you great rates on your policy!</p>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End why us-->
      <!--Start about-->
      <section class="about-bg-2 pad-tb" id="about">
         <div class="container">
            <div class="row m-text-c">
               <div class="col-lg-6 v-center">
                  <div class="about-company">
                     <h2 class="mb20" data-aos="fade-up" data-aos-delay="100">Save <em>Upto 90%</em> with Best <span class="fw3">Premium Insurance Policy</span></h2>
                     <p data-aos="fade-up" data-aos-delay="300">We Focus On Your Risk So You Can Focus On Your Dreams. Careers in insurance are the best-kept secret in vocations. Whatever your passion, find out where you fit. We live for connecting you with what you do best. From how we serve our customers and each other to how we serve our community, you’ll find a place where work-life balance and passionate pursuit come together.</p>
                     <a href="#" class="btnpora btn-rd2 mt40" data-aos="fade-up" data-aos-delay="600" data-toggle="modal" data-target="#modal_aside_right">Get your Quote</a>
                  </div>
               </div>
               <div class="col-lg-6 v-center">
                  <div class="img-box1 m-mt60" data-aos="fade-up" data-aos-delay="500"><img src="images/common/agent.png" alt="feature-image" class="img-fluid"></div>
               </div>
            </div>
         </div>
      </section>
      <!--End about -->
      <!--Start partner-->
      <section class="about-bg pad-tb" id="partners">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-lg-6 v-center">
                  <div class="partner-company">
                     <h2 class="mb20" data-aos="fade-up" data-aos-delay="100">Trusted by People with <em>Active Lifestyles</em></h2>
                     <p data-aos="fade-up" data-aos-delay="100">Spot is a game-changer in the insurance industry, and we have no intention of slowing down. We’ve already partnered with some of the biggest names in the active lifestyle industry.</p>
                  </div>
                  <!-- <div class="partnerlogo mt40"  data-aos="fade-In" data-aos-delay="500">
                     <a href="#"><img src="images/logo/uilogos-1.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-2.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-3.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-4.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-5.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-6.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-7.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-8.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-9.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-10.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-11.png" alt="brand logo"> </a>
                     <a href="#"><img src="images/logo/uilogos-12.png" alt="brand logo"> </a>
                  </div> -->
               </div>
               <div class="col-lg-5 v-center">
                  <div class="img-box1 m-mt60"  data-aos="fade-In" data-aos-delay="100"><img src="images/common/parntership.png" alt="image" class="img-fluid"></div>
               </div>
            </div>
         </div>
      </section>
      <!--End partner -->

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
                           <div class="steps-icons-1">	<img src="images/icons/choice.png" alt="steps"> </div>
                           <h4 class="mb10">More Value</h4>
                           <p>Accidents happen. So, when your customers know they’re safe from massive medical costs, they know they can do more of what they love with zero hesitation. And that’s peace of mind they won’t find anywhere else.</p>
                        </div>
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="300">
                           <div class="steps-icons-1">	<img src="images/icons/credit-card.png" alt="steps"> </div>
                           <h4 class="mb10">Less Risk</h4>
                           <p>We know when your customers file a claim. Which means we collect data that gives you insight into how they’re getting hurt. So you can make enhancements that mitigate risk for even the most accident-prone.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 mt60 m-m0">
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="200">
                           <div class="steps-icons-1">	<img src="images/icons/easy.png" alt="steps"> </div>
                           <h4 class="mb10">Rapid Claims</h4>
                           <p>Our fast and easy claims process actually pays out. That means happy customers. And that’s great for business</p>
                        </div>
                        <div class="steps-div mt30" data-aos="fade-up" data-aos-delay="500">
                           <div class="steps-icons-1">	<img src="images/icons/customers.png" alt="steps"> </div>
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
      <div class="cta-section pad-tb bg-fixed-img" data-parallax="scroll" data-speed="0.5" data-image-src="images/common/wideimg.png">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-8">
                  <div class="cta-heading">
                     <h2 class="mb20 text-w"  data-aos="fade-up" data-aos-delay="100">Request a Free Consultation!</h2>
                     <p class="text-w"  data-aos="fade-up" data-aos-delay="300">Tell us a few details about you and your company so we can help.</p>
                     <a href="#modal" data-toggle="modal" data-target="#modal_aside_right" class="btnpora btn-rd3 mt40 noshadow"  data-aos="fade-up" data-aos-delay="500"> Get your Quote</a>
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

      <!--contact popup start-->						
      <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Get your Quote!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-block border0 noshadow mt30">

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
                                 <label for="leadid_tcpa_disclosure" style="font-size: 10px; ">By selecting the check box, I confirm that I have read, understand, and agree to the Privacy Policy its Terms, and its Marketing Partners that I am freely giving my prior experience and express written consent to receive communication via emails, phone calls, and/or text messages related to this request at any telephone number or email address provided by me. I understand there may be a charge by my wireless carrier for such communications. I understand and agree these communications may be generated using an autodialer and may contain pre-recorded messages, and that my prior express written consent precludes and negates any claims under the Telephone Consumer Protection Act. Further, I understand that my consent is not a condition of purchase of any goods or services and that I may revoke my consent at any time. I understand that standard message and data rates may apply.</label>
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
                                    <option value="Auto Insurance">Auto Insurance</option>
                                    <option value="Medicare Insurance">Medicare Insurance</option>
                                    <option value="Life Insurance">Life Insurance</option>
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


                     <div class="form-btm-set">
                        <h5>We Deliver</h5>
                        <div class="icon-setss mt20">
                           <div class="icon-rows">
                              <div class="icon-imgg"><img src="images/icons/money.svg" alt="#"></div>
                              <div class="icon-txt">
                                 <p>Best Price</p>
                              </div>
                           </div>
                           <div class="icon-rows">
                              <div class="icon-imgg"><img src="images/icons/quality.svg" alt="#"></div>
                              <div class="icon-txt">
                                 <p>Quality Service</p>
                              </div>
                           </div>
                           <div class="icon-rows">
                              <div class="icon-imgg"><img src="images/icons/call-agent.svg" alt="#"></div>
                              <div class="icon-txt">
                                 <p>Good Support</p>
                              </div>
                           </div>
                           <div class="icon-rows">
                              <div class="icon-imgg"><img src="images/icons/satisfaction.svg" alt="#"></div>
                              <div class="icon-txt">
                                 <p>Satisfaction</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--contact popup end-->

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