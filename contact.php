<?php
include "includes/header.php";
?>

<section class="page-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="block">
          <h1>Contact Us</h1>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="#">Home</a>
            </li>
             <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                Contact
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-inner d-lg-flex">
                    <div class="contact-item">
                        <img src="assets/images/icon/001-contact.png" alt="" class="img-fluid">
                        <p>Email Us</p>
                        <h4>support@email.com</h4>
                    </div>
                    <div class="contact-item">
                        <img src="assets/images/icon/002-mail.png" alt="" class="img-fluid">
                        <p>Make a Call</p>
                        <h4>+45 234 345467</h4>
                    </div>
                    <div class="contact-item">
                        <img src="assets/images/icon/003-maps-and-flags.png" alt="" class="img-fluid">
                        <p>Corporate Office</p>
                        <h4>Moon Street Light Avenue, 14/05
                            Jupiter, JP 80630 </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h4 class="subheading">contact</h4>
                    <span class="subtitle">get in touch</span>
                    <h2>Have any query <span>on your mind?</span></h2>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form class="contact__form form-row " method="post" action="http://themeturn.com/tf-db/orgenik-demo/orgenik/mail.php" id="contactForm">
                    <div class="row">
                       <div class="col-12">
                           <div class="alert alert-success contact__msg" style="display: none" role="alert">
                               Your message was sent successfully.
                           </div>
                       </div>
                   </div>

                   <div class="row form-row">
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                           </div>
                       </div>
                       
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <div class="form-group">
                               <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                           </div>
                       </div>
                       
                       <div class="col-lg-12">
                           <div class="form-group">
                               <textarea id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message"></textarea>    
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-12">
                       <div class="mt-4 text-center">
                           <button class="btn btn-main2"  type="submit">Send Message <i class="ti-angle-right ml-2"></i></button>
                       </div>
                   </div>
               </form> 
            </div>
        </div>
    </div>
</section>


<section class="map"></section>


<?php
include "includes/footer.php";
?>