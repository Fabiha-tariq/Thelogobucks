<?php
   include('header.php');
   ?>

<style>
     .imgtriangle{
        width: 100%;
        height: 100%;
    background-repeat: no-repeat;
    margin-top: -1222px;
     }
</style>

<div class="container contact" style="text-align:center !important;margin-top: 150px;">
<div class="row justify-content-center">
   <div class="col-md-7">
      <h2 class="fw-bold">We'd love to hear from you</h2>
      <p>Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions.</p>
   </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8" style="z-index: 9;">
            <form action="submit.php" method="post" enctype="multipart/form-data" style="background-color: white; margin-top: 50px;-webkit-box-shadow: 1px 0px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 0px 7px 0px rgba(0,0,0,0.75);
box-shadow: 1px 0px 7px 0px rgba(0,0,0,0.75);
 border-radius: 10px;">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6" style="padding: 20px 50px;">
                        <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">First Name</label><br>
                        <input name="firstName" required type="text" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6" style="padding: 20px 50px;">
                    <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">Company</label><br>
                        <input name="company" required type="text" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="Your Company">
                    </div>
                    <div class="col-md-6" style="padding: 20px 50px;">
                        <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">Email</label><br>
                        <input name="email" required type="text" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-6" style="padding: 20px 50px;">
                    <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">Phone</label><br>
                        <input name="phone" required type="text" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="Your Phone">
                    </div>
                    <div class="col-md-12" style="padding: 20px 50px;">
                    <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">How can we help you?</label><br>
                    <textarea name="message" required style="width: 100%;" rows="6"></textarea>
                    </div>
                    <div class="col-md-12" style="padding: 20px 50px;">
                    <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">How did you hear about us?</label><br>
                        <input name="howHear" required type="text" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="How did you hear about us?">
                    </div>
                    <div class="col-md-12" style="padding: 20px 50px;">
                    <label for="" style="color: #303030; font-weight: bold; font-size: 13px; ">Upload your file No file chosen</label><br>
                    <input type="file" required name="file" id="file" class="" style="font-size: 12px; padding: 5px 10px; border: 1px solid #8a8a8a; width: 100%; border-radius: 3px;" placeholder="Upload your file No file chosen">
                    </div>
                  <div class="col-md-12">
                      <button type="submit" style="background:  #07674e;; 
    border: none;
    width: 90%;
    padding: 10px;
    margin: 10px 30px;
    border-radius: 10px;
    color: #fff;
    font-size: 12px;
    font-family: 'MontserratMedium';">Submit</button>
                  </div>
              </div>   
                </div>
            </form>     
            <div class="col-md-4" style="margin-top: 250px; text-align: center; background-color:#07674e; color:#e1e6f5;">
            <h4 >Let's Talk</h4>
            <p style=" font-size: 12px;">Do you prefer the phone?</p>
            <p style=" font-size: 12px;" >Give us a call at <a href="tel:727-498-0051" style="color: #e1e6f5;">(727) 498-0051</a> </p>
        </div>   
        </div>
    </div>
</div> 
<div class="triangle-up"><img src="images/trainglegreen.png"  class="imgtriangle"></div>

<div class="container-fluid" style="background-color: #07674e; margin-top: -550px; padding-top: 550px; ">
    <div class="row">
        <div class="col-md-12">
          <h1 style="color: #e1e6f5; font-family: arial; margin-top: 75px; text-align:center;">WHERE TO FIND US</h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <img style="width: 100%; height: 300px;" src="images/contact-1.png" alt="">
            <h2 style="color: #e1e6f5; text-align: center; margin-top: 40px;">HEADQUARTERS</h2>
            <p style="color: #e1e6f5; font-size: 12px; text-align: center; margin-top: 10px;">9639 Hillcroft Street, Houston, TX, United States, Texas</p>
        </div>
        <div class="col-md-4">
            <img style="width: 100%; height: 300px;" src="images/contact-2.png" alt="">
            <h2 style="color: #e1e6f5; text-align: center; margin-top: 40px;">REGIONAL OFFICE</h2>
            <p style="color: #e1e6f5; font-size: 12px; text-align: center; margin-top: 10px;">Ibn Battuta Gate Building Dubai, UAE</p>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>




   

<?php
   include('footer.php');
   ?>
<script>
   $(document).ready(function(){
   $("body").click(function(){
    $(".modal-backdrop").css("visibility", "hidden");
   });
   });
   
   $('[data-fancybox="gallery"]').fancybox({
   buttons: [
     "slideShow",
     "thumbs",
     "zoom",
     "fullScreen",
     "share",
     "close"
   ],
   loop: true,
   protect: true
   });
   
   
</script>