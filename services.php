<?php
include('header.php');
?>
<link href="
https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css
" rel="stylesheet">

<style>
    #header {
        background-color: white !important;
    }

    .image-container {
        position: relative;
        text-align: center;
    }

    .image-container img {
        width: 100%;
        height: auto;
        display: block;
        margin-top: -180px;
    }

    .text-overlay {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        padding: 20px;
        text-align: center;
        border-radius: 5px;
    }

    .text-overlay h2 {
        color: #07674e;
        font-weight: bold;
    }

    .sliderButtonLeft,
    .sliderButtonRight {
        border-radius: 50%;
        border: 1px solid white;
        padding: 5px;
        background: #fff;
        /* color: #000 !important; */
        width: 40px;
        height: 40px;
        box-shadow: 5px 10px 20px #888888;
    }

    @media (max-width: 768px) {

        .text-overlay {
            position: relative;
            top: auto;
            left: auto;
            transform: none;
            margin-top: 20px;
        }

        .image-container img {
            width: 100%;
            background-size: cover;
            margin-top: 30px;
        }
    }

    .triangle-up {
        height: 100px;
        background-position: center;
        background-size: 100% 100%;
        /* margin-right: -20px; */
    }

    .ups {
        margin-top: -100px;
        z-index: 9;
    }

    .imgtriangle {
        width: 1337px;
        height: 100%;
        background-repeat: no-repeat;
    }


    .ups1 {
        margin-top: -300px;
        z-index: 0;
    }
</style>

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="image-container">
                <img src="images/servicemainpage1.jpg" alt="Digital Agency Services">
                <div class="text-overlay">
                    <h2>AWARD-WINNING <br> DIGITAL AGENCY SERVICES</h2>
                </div>
            </div>
        </div>

        <div class="triangle-up1 ups1 p-0"><img src="images/shapes.png" class=" imgtriangle1"></div>

        <div class="row p-0 me-0 " style="margin-top: -150px; z-index: 3;">
            <div class="col-md-6 col-sm-12 col-lg-6" style="background-color: #e3e3e3;">
                <img style="width: 80%; margin-top: 40px; margin-top: 60px;" src="images/servicemainpage2.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6" style="background-color: #e3e3e3; padding-bottom: 200px; ">
                <h3 style="color: #07674e; text-align:start; font-weight: bold; ">BRANDING & GRAPHICS
                    DESIGN</h3>
                <p style="font-size: 13px; margin-top: 5px;">From logos to business cards to brand identity and beyond,
                    we'll work with you every step of the way to develop a unique brand that represents exactly who you
                    are—and what you want your customers to think of when they think of YOU. We believe that great branding
                    is more than just a logo; it's an entire experience that engages your audience and leaves them feeling
                    connected to your product or service—and ultimately wanting more.</p>
                <ul style="font-size: 14px;">
                    <li>UI/UX Design</li>
                    <li>Logo Design</li>
                    <li>Brand & Visual Design</li>
                    <li>Brochure Design</li>
                    <li>Business Card Design</li>
                </ul>
                <button class="btn" style="background-color: #07674e; color: white; margin-top: 30px;">Get In Touch</button>
            </div>
        </div>


        <div class="container-fluid" >
            <div class="row">
                <div class="triangle-up ups"><img src="images/trainglegreen.png" style="margin-left: 20px;" class="imgtriangle"></div>
                <div class="col-md-6" style="background-color: #07674e;">
                    <h3 style="text-align: center; font-weight: bold; margin-top: 120px; color: #ffc107;">DIGITAL
                        MARKETING SERVICES</h3>
                    <p style="color: white; margin-top: 30px; padding-left: 80px;">
                        Are you struggling to make your mark in the digital world? Look no further! Our team of experts
                        offers a wide range of digital marketing services tailored to your specific needs and budget.
                        From lead generation to audience engagement and sales growth, we have the tools to help you
                        succeed in the digital arena. Let us guide you to success and watch your business thrive!
                    </p>
                </div>
                <div class="col-md-6" style="background-color: #07674e;">
                    <img style="width: 100%; height: 400px; margin-top: 30px; margin-left: 20px;" src="images/servicemainpage3.png" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="triangle-up ups"><img src="images/shapes.png" style="margin-top: 8px; margin-left: 20px;" class="imgtriangle"></div>
                <div class="col-md-6" style="background-color: #e3e3e3;">
                    <img style="width: 100%; height: 400px; margin-top: 50px; "  src="images/servicemainpage4.png" alt="">
                </div>

                <div class="col-md-6" style="background-color: #e3e3e3;">
                    <h2 style="color: #07674e; font-weight: bold; margin-top: 50px;">CUSTOM SOFTWARE <br> DEVELOPMENT
                    </h2>
                    <p style="font-size: 13px; margin-top: 25px;">
                        Are you looking to improve the efficiency of your business and strengthen your brand image
                        online? Look no further! Our team specializes in designing and developing web solutions that do
                        just that. From web apps to client portals and everything in between, we create custom-fit
                        solutions that meet the unique needs of your business. Don't settle for a cookie-cutter
                        approach. Let us craft a web presence that sets you apart and drives success.
                    </p>
                    <ul style="font-size: 13px;">
                        <li>Website Development</li>
                        <li>PHP Development</li>
                        <li>Laravel Development</li>
                        <li>Hire Node Developers</li>
                        <li>ReactJS Development</li>
                    </ul>
                    <button class="btn" style="background-color: #07674e; color: white; margin-top: 20px; padding-left: 20px;">Get In
                        Touch</button>
                </div>
            </div>
        </div>

        <div class="triangle-up ups"><img src="images/trainglegreen.png" style="margin-left: 20px;" class="imgtriangle"></div>

        <div class="col-md-6" style="background-color: #07674e; padding-left: 50px; padding-bottom: 50px;">
            <h2 style="color: #ffc107; font-weight: bold; margin-top: 50px;">CUSTOM MOBILE APP DEVELOPMENT</h2>
            <p style="font-size: 13px; margin-top: 25px; color: white;">
                Automate your business with our mobile app development.People are always on the go and want to be able
                to do things that make life easier. That's why we build apps that allow you to automate your business—in
                a way that works for both of us!
                <br>
                <br>
                We can help you streamline all of your processes—from customer service to sales, from order fulfillment
                to inventory management, from payment processing to shipping & receiving—so you can focus on what
                matters most: growing your business!
            </p>
            <ul style="font-size: 13px; color: #fff;">
                <li>Mobile App Design</li>
                <li>Mobile Ecommerce App</li>
                <li>Android Apps</li>
                <li>iOS Apps</li>
                <li>Cloud App Development</li>
            </ul>
            <button class="btn" style="background-color: #fff; color: #07674e;">Get In Touch</button>
        </div>
        <div class="col-md-6" style="background-color: #07674e; padding-bottom: 200px;"></div>
        <div class="triangle-up ups"><img src="images/shapes.png" style=" margin-left: 20px;" class="imgtriangle"></div>
        <div class="col-md-6" style="background-color: #e3e3e3;">
            <img src="images/servicemainpage5.png" style="width: 100%; height: 400px; margin-top: 50px;" alt="">
        </div>
        <div class="col-md-6" style="background-color: #e3e3e3; padding-bottom: 200px;">
            <h2 style="color: #07674e; font-weight: bold; margin-top: 50px;">DEVOPS SERVICES</h2>
            <p style="font-size: 13px; margin-top: 25px;">
                Maximize your cloud potential with our DevOps Services. Our solutions streamline your operations,
                minimize costs, and speed up your release management cycle. By automating your end-to-end delivery
                pipeline across multiple cloud platforms, we can help you get to market faster and more efficiently. Our
                DevOps expertise allows organizations to align with their goals, delivering high-quality software
                products and services with speed and reliability.</p>
            <ul style="font-size: 13px;">
                <li>Pilot Framework Creation</li>
                <li>CI/CD Pipeline</li>
                <li>Process Automation</li>
                <li>Security Infrasturcture</li>
                <li>Operational Management</li>
            </ul>
            <button class="btn" style="background-color: #07674e; color: white; margin-top: 20px; padding-left: 20px;">Get In
                Touch</button>
        </div>
        <div class="triangle-up ups"><img src="images/trainglegreen.png" style="margin-left: 20px; margin-top: -110px;" class="imgtriangle"></div>

        <div class="col-md-6" style="background-color: #07674e;  margin-top: -100px;">
            <h3 style="text-align: center; font-weight: bold; margin-top: 120px; color: #ffc107;">STAFF AUGMENTATION
            </h3>
            <p style="color: white; margin-top: 30px; padding-left: 80px;">
                Unlock the full potential of your IT projects with our Staff Augmentation Services. As your project
                matures, it's vital to have the right team in place to ensure success. With our IT staffing solutions,
                you can access the top experts in the industry and scale your team quickly and efficiently. By
                leveraging the skills of our highly qualified professionals, you can speed up development, increase
                professional acumen and achieve flexibility for your team. Don't let a lack of resources hold you back,
                let us provide you with the staff augmentation benefits you need to drive your project forward. </p>
            <br><br><br><br><br><br>
        </div>
        <div class="col-md-6" style="background-color: #07674e; margin-top: -100px;">
            <img style="width: 100%; height: 400px; margin-top: 30px; margin-left: 20px;"  src="images/servicemainpage6.png" alt="">
        </div>
    </div>
</div>

<div class="triangle-up ups"><img src="images/shapes.png" style="margin-top: -0px;   width: 1337px; margin-left: 12px;" class="imgtriangle"></div>

<div class="cl-test" style="background-color: #e3e3e3; ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cl-sp fade-in-up">
                    <h3 style="text-align: center; font-weight: bold; margin-top: 120px; color: #ffc107;">CLIENT</h3>
                    <h3 style="text-align: center; font-weight: bold; color: #ffc107;">TESTIMONIALS</h3>
                </div>

                <h2 style="color: #07674e; text-align: center;">Don't Just Take Our Word For It Hear It From Our Clients
                </h2>
                <div class="sliderWrapper ">
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">Our website, business cards, and logo were all created by DX. Our
                                                ability
                                                to rank well in the search engines thanks to the website they
                                                designed
                                                has brought in a lot of new clientele and employment leads. DX
                                                services
                                                are without a doubt a worthwhile investment in our eyes.</p>
                                            <h6 style="font-weight: bold;">- John Rodeo</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">I Had DX to design a logo for me and create a branding package. I was
                                                thoroughly impressed with the quality of the design, as well as with
                                                their communication and the follow-up & follow through during the
                                                entire
                                                process. They have really great market knowledge of current trends
                                                and
                                                what is exciting to consumers. I highly recommend them!</p>
                                            <h6 style="font-weight: bold;">- Shannon Oakley</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">Where talent meets experience. Very professional service! We created
                                                the
                                                logo for our travelling company from scratch and finished with the
                                                full
                                                responsive and mobile friendly website design. We felt that our
                                                wishes
                                                were heard and excelled with on point insights. Would recommend.</p>
                                            <h6 style="font-weight: bold;">- Jing Yuan</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">Very professional and disciplined, easy to communicate and great job
                                                done. Will use them again.</p>
                                            <h6 style="font-weight: bold;">- City Digital Accountant</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">DX Technologies LLC has a good team for partnership. They are quick
                                                and
                                                clear on our requirement. Very easy on communication. Great stuff!
                                            </p>
                                            <h6 style="font-weight: bold;">- Charlie Leung</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="text-align: start; font-weight: bold; background-color: #fff; padding: 22px; padding-top: 22px; margin-top: 30px;">
                        <div class="sec6-caps">
                            <div class="cl-itm-bg">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="srv-caps">
                                            <img src="images/rev-stars.png" alt="">
                                            <p style="font-size: 14px; font-weight: lighter;">DX Technologies LLC is quick to reply, easy to plan tasks/projects
                                                with
                                                and finally great when doing the tasks/projects.</p>
                                            <h6 style="font-weight: bold;">- Niklas Hellberg</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <a href="#" style="color: #07674e; text-decoration: none; margin-top: 12px; font-size: 28px;">Read all Testimonials</a>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div style="justify-content: end; margin-left: 440px; margin-bottom: 30px;">
                        <button class="sliderButtonLeft  m">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </button>
                        <button class="sliderButtonRight">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </button>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>

</div>
<section class="sec-009" style="background-color: #07674e;">
    <div class="container" style="color: #fff;">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <h2 class="w-100">LET'S BUILD YOUR NEXT DIGITAL PRODUCT</h2>
                <p>Looking to kick-off your project in the next 30-90 days?<br>Let’s start planning!</p>
            </div>

            <div class="col-md-6 col-sm-12 text-center">
                <button class="btn" style="background-color: #fff; color: #07674e;">Talk to an Expert</button>
            </div>


        </div>
    </div>
    <hr style="color: #fff;">
</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="main.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
"></script>
<script src="
https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js
"></script>
<?php
include('footer.php');
?>
<script>
    $(document).ready(function() {

        // Slick Slider
        $('.sliderWrapper').slick({
            prevArrow: '.sliderButtonLeft',
            nextArrow: '.sliderButtonRight',
            dots: false,
            infinite: true,
            speed: 300,
        });
        // Slick Slider End

        $("body").click(function() {
            $(".modal-backdrop").css("visibility", "hidden");
        });
        // 
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
    });
</script>