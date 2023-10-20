<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.main {
  .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    justify-content: center;
    align-items: center;
  }
  
  
  .card {
    overflow: hidden !important;
    margin: 0px !important;
    padding: 0px !important;
}

.card .card-image a img {
    width: 100% !important;
    height: 350px !important;
}

.card:hover {
    transform: scale(1.02) !important;
    /* transition: transform 0.3s ease !important; */
    background-image: none !important;
}

  .card {
    background: $color-white;
    box-shadow: $box-shadow;
    color: $color-dark;
    border-radius: 2px;

    &-image {
      background: $color-white;
      display: block;
      padding-top: 70%;
      position: relative;
      width: 100%;

      img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    }
  }
}

@media only screen and (max-width: 600px) {
  .main {
    .container {
      display: grid;
      grid-template-columns: 1fr;
      grid-gap: 1rem;
    }
  }
}











   @media (min-width: 300px) and (max-width: 767.98px){
   .modal-open .modal{ padding: 0px;
   margin-top: 79px;
   }
   }
   @media (min-width: 250px) and (max-width: 290px){
   .modal-open .modal{ padding: 0px;
   margin-top: 79px;
   }
   }
   #myModal{
   background: rgba(24, 23, 24, 0.39);
   }
   .close:not(:disabled):not(.disabled) {
   cursor: pointer;
   background: black;
   padding: 5px;
   border-radius: 60px;
   color: white;
   }
   /*footer css start hussan*/
   .tab-content {
   max-width: 100%;
   margin-top: 52px !important;
   /*margin-left: 158px;*/
   }
   .card {
   padding-left: 50px;
   /* padding: 22%; */
   padding-top: 16px;
   }
   .card-body {
   -ms-flex: 1 1 auto;
   flex: 1 1 auto;
   /* padding: 1.25rem; */
   font-size: 11px;
   margin-left: -60px;
   }
   h5.package-heading {
   font-family: 'Poppins', sans-serif !important;
   text-align: center;
   max-width: 73%;
   }
   p.mono {
   color: #dd2b2c !important;
   font-size: 14px;
   /* text-align: center; */
   padding-left: 21px;
   }
   h5.price {
   font-weight: 900;
   /* text-align: center; */
   font-size: 40px !important;
   padding-left: 15px;
   }
   p.suitable {
   font-family: 'Poppins', sans-serif !important;
   font-size: 11px;
   text-align: center;
   padding-left: -5px;
   /* margin-left: -35px; */
   /* max-width: 110%; */
   margin-left: -40px;
   }
   button.order-now {
   font-family: 'Poppins', sans-serif !important;
   background: #dd2b2c;
   border: none;
   font-size: 16px;
   padding-left: 21px;
   padding-right: 21px;
   padding-top: 8px;
   padding-bottom: 8px;
   color: white;
   }
   .pkg-list li{
   list-style-type: none;
   font-family: 'Poppins', sans-serif !important;
   text-align: left;
   /*margin-left: -31px;*/
   padding-bottom: 8px;
   }
   .pkg-list li:before {
   content: "\2713";
   margin-right: 0.5em;
   font-weight: 600px;
   }
   ul.bottom-card {
   display: flex;
   margin-top: 10px;
   font-weight: 700;
   }
   p.card-live {
   margin-left: 41px;
   }
   button.details {
   background: transparent;
   font-family: 'Poppins', sans-serif !important;
   border: none;
   font-size: 12px;
   text-align: center;
   margin-left: 21px;
   font-weight: 600;
   }
   /*footer css end hussan*/
   /*crds styling start*/
   .card {
   padding: 10px 35px 10px 35px !important;
   box-shadow: 0px 3px 16px 6px rgba(221,43,44,0.11);
   -webkit-box-shadow: 0px 3px 16px 6px rgba(221,43,44,0.11);
   -moz-box-shadow: 0px 3px 16px 6px rgba(221,43,44,0.11);
   }
   .card-hd h5.package-heading {
   font-size: 26px !important;
   font-weight: 500;
   padding-top: 20px;
   font-family: 'Poppins', sans-serif !important;
   text-transform: capitalize !important;
   }
   h5.package-heading {
   max-width: 100% !important;
   }
   p.suitable {
   margin-left: 0px !important;
   text-align: center;
   }
   h5.price {
   text-align: center;
   }
   p.mono {
   text-align: center;
   font-weight: 700;
   }
   /*.card-hd button.order-now {*/
   /*    margin-left: 47px;*/
   /*}*/
   .card-body{
   margin-left: 0px !important;
   text-align: center !important;
   }
   .card-body ul.pkg-list {
   overflow-y: scroll;
   height: 150px;
   }
   .card-body ul.pkg-list::-webkit-scrollbar {
   width: 8px;
   }
   .card-body ul.pkg-list::-webkit-scrollbar-track {
   background-color: #F5F5F5;
   }
   .card-body ul.pkg-list::-webkit-scrollbar-thumb {
   background-color: #000000;
   border-radius: 10px;
   margin-left: 20px;
   }
   .card-body ul.pkg-list::-webkit-scrollbar-thumb:hover {
   background-color: #555;
   }
   ul.bottom-card {
   display: flex;
   margin-top: 28px !important;
   font-weight: 700;
   width: 100% !important;
   margin-left: 40px !important;
   }
   .port-sec .nav-pills li a{
   margin-right: 19px;
   }
   /*.port-sec li{*/
   /* margin-left: -24px !important;*/
   /*}*/
   p.card-want {
   font-size: 11px;
   margin-left: -64px !important;
   }
   p.card-live {
   margin-left: 47px !important;
   font-size: 12px !important;
   }
   .tab-content {
   max-width: 100% !important;
   margin-top: 52px !important;
   /*padding: 0px 150px 0px 150px;*/
   }
   .pri-card .card-hd {
   text-align: center;
   }
   /*crds styling end*/
   /*usama card css start   */
   .card-body ul.pkg-list {
   padding: 0px !important;
   }
   ul.bottom-card {
   display: flex !important;
   margin: 0px !important;
   padding: 10px 0px !important;
   }
   ul.bottom-card li {
   width: 50% !Important;
   float: left !Important;
   text-align: left !Important;
   }
   ul.bottom-card li a {
   color: #000;
   font-size: 12px;
   font-weight: 600;
   }
   ul.bottom-card li.pkg-btn-right {
   TEXT-ALIGN: RIGHT !important;
   }  
   .mn-lst-btn {
   padding: 10px 0px 4px 0px;
   }
   .mn-lst-btn a.details {
   color: #000 !important;
   font-size: 12px;
   font-weight: 700;
   }
   .card:hover h5.package-heading {
   color: #fff !important;
   }
   .card:hover p.mono {
   color: #fff !important;
   font-size: 14px;
   margin-bottom: 5px;
   }
   p.mono {
   padding: 0px !important;
   font-size: 14px;
   }
   h5.price {
   padding: 0px !important;
   }
   .card:hover h5.price {
   color: #fff !important;
   }
   .card:hover {
   transform: scale(1.02) !important;
   transition: transform 0.3s ease  !important;
   background-image: linear-gradient(145deg, #f50004, #8f0202) !important;
   }
   .mn-lst-button {
   padding: 15px 0px;
   }
   a.order-now.mn-dsc-btn {
   border: 2px solid #000;
   padding: 10px 30px;
   font-size: 14px;
   font-weight: 600;
   color: #000;
   text-transform: uppercase;
   }
   .card:hover a.order-now.mn-dsc-btn {
   border: 2px solid #fff;
   color: #fff;
   text-decoration: none;
   }
   .card:hover ul.bottom-card li a {
   color: #fff !important;
   text-decoration: none;
   }
   .card:hover .mn-lst-btn a.details {
   color: #fff !important;
   font-size: 12px;
   font-weight: 700;
   text-decoration: none;
   }
   p.suitable {
   margin-bottom: 8px !important;
   }
   p.mono {
   margin-bottom: 5px !important;
   }
   .mn-gallery-section .col-md-4.col-sm-12 {
   padding: 10px;
   overflow: hidden;
   margin: 0px;
   border: none !important;
   }
   .mn-gallery-section .col-md-4.col-sm-12 img {
   height: auto;
   width: 100%;
   }
.screen {
    cursor: pointer;
    float: left;
    margin: 0px 0px 0px;
    min-height: 350px;
    padding: 0px;
    position: relative;
    transition: all 2.5s ease-in 0s;
    width: 100%;
    z-index: 99;
    border-radius: 30px;
    background-size: 100% !important;
}

div#tab5 .card {
    border-radius: 31px;
}
   .screen:hover {
   background-position: 0px 100%;
   }
   .screen_01 {
   background: url("https://thelondonstudeo.com/img/Pit-Master.png") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   .screen_02 {
   background: url("https://thelondonstudeo.com/img/Home-MedHeave-Medical-Billing-Services.png") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   .screen_03 {
   background: url("https://thelondonstudeo.com/img/Home-City-Digital-Accountant.png") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   .screen_04 {
   background: url("https://thelondonstudeo.com/img/lalac-web.webp") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   .screen_05 {
   background: url("https://thelondonstudeo.com/img/ezgif.com-gif-maker (1).webp") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   .screen_06 {
   background: url("https://thelondonstudeo.com/img/ezgif.com-gif-maker (2).webp") 0px 0px no-repeat scroll rgba(0, 0, 0, 0);
   display: block;
   }
   /*usama card css end */
</style>



<section id="pricing" class="pricing">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span>Our Portfolio</span>
            <h2>Check our Portfolio</h2>
         <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias. Sit sint consectetur velit quisquam cupiditate<br> impedit suscipit alias. Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>
      <div class="container">
          <ul class="nav nav-tabs" id="custom_tab_ul">
            <li class="nav-item">
               <a class="nav-link active" href="#tab1">Digitizing</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab2">Vector Art</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="#tab9">Character</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab3">Logo Design</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab4">Branding</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab5">Web Design & Development</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab6">E-Commerce</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab7">UI/UX Design</a>
            </li>
             <li class="nav-item mt-3">
               <a class="nav-link" href="#tab8">Mobile App</a>
            </li>
         </ul>
          
         
         
         </div>

         <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
               <div class="row" data-aos="fade-left">
                  <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz1.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz1.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz2.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz2.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz3.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz3.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz4.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz4.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz5.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz5.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz6.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz6.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz7.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz7.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz8.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz8.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz9.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz9.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Digitizing Resize/dz10.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Digitizing Resize/dz10.png" alt="Image Gallery">
        </a>
      </div>
    </div>

   
  </div>
</main>
                </div>
            </div>
            
            
            
            <div class="tab-pane fade" id="tab2">
                <div class="row" data-aos="fade-left">
                 <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc1.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc1.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc2.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc2.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc12.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc12.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc4.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc4.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc5.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc5.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc6.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc6.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc7.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc7.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc11.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc11.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Vector Resize/vc9.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Vector Resize/vc9.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <!--<div class="card">-->
    <!--  <div class="card-image">-->
    <!--    <a href="assets/Vector Resize/vc10.png" data-fancybox="gallery" data-caption="Caption Images 1">-->
    <!--      <img src="assets/Vector Resize/vc10.png" alt="Image Gallery">-->
    <!--    </a>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="card">-->
    <!--  <div class="card-image">-->
    <!--    <a href="assets/Vector Resize/vc11.png" data-fancybox="gallery" data-caption="Caption Images 1">-->
    <!--      <img src="assets/Vector Resize/vc11.png" alt="Image Gallery">-->
    <!--    </a>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="card">-->
    <!--  <div class="card-image">-->
    <!--    <a href="assets/Vector Resize/vc12.png" data-fancybox="gallery" data-caption="Caption Images 1">-->
    <!--      <img src="assets/Vector Resize/vc12.png" alt="Image Gallery">-->
    <!--    </a>-->
    <!--  </div>-->
    <!--</div>-->
    
  </div>
</main>
                </div>
            </div>
            
            
            <div class="tab-pane fade" id="tab3">
                <div class="row" data-aos="fade-left">
                   <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg1.jpg" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg1.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg2.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg3.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg4.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg5.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg6.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg6.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
   <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg7.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg7.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg8.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg8.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg9.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg9.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg10.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg10.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg11.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg11.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/img/resize image folder/logo/lg12.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/img/resize image folder/logo/lg12.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
  </div>
</main>
                </div>
         </div>
         
         
            <div class="tab-pane fade" id="tab4">
               <div class="row" data-aos="fade-left">
                <main class="main">
                    <div class="container">
                            <div class="card">
                  <div class="card-image">
                    <a href="assets/img/resize image folder/branding/bd1.jpg" data-caption="Caption Images 1">
                      <img src="assets/img/resize image folder/branding/bd1.jpg" alt="Image Gallery">
                    </a>
                  </div>
                </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd2.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd3.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd4.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd5.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd6.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd6.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd7.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd7.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd8.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd8.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd9.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd9.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd10.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd10.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd11.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd11.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-image">
                                <a href="assets/img/resize image folder/branding/bd12.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                  <img src="assets/img/resize image folder/branding/bd12.jpg" alt="Image Gallery">
                                </a>
                              </div>
                            </div>
                
                </div>
                </main>
            </div>
      </div>
      
      
      
            <div class="tab-pane fade mn-gallery-section" id="tab5">
                <div class="row" data-aos="fade-left">
                      <main class="main">
                    <div class="container">
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/Pit-Master.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_01"></div>
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/Home-MedHeave-Medical-Billing-Services.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_02"></div>
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/Home-City-Digital-Accountant.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_03"></div>
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/lalac-web.webp" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_04"></div>
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/ezgif.com-gif-maker (1).webp" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_05"></div>
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="https://thelondonstudeo.com/img/ezgif.com-gif-maker (2).webp" data-fancybox="gallery" data-caption="Caption Images 1">
                          <div class="screen screen_06"></div>
                        </a>
                      </div>
    </div>

               
                </div>
                </main>
         </div>
         </div>
         
         
         
            <div class="tab-pane fade" id="tab6">
               <div class="row" data-aos="fade-left">
                   
                   <main class="main">
                    <div class="container">
                    <div class="card">
      <div class="card-image">
        <a href="assets/Ecommerce/ec-1.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Ecommerce/ec-1.png" alt="Image Gallery">
        </a>
      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="assets/Ecommerce/ec-2.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <img src="assets/Ecommerce/ec-2.png" alt="Image Gallery">
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="assets/Ecommerce/ec-3.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <img src="assets/Ecommerce/ec-3.png" alt="Image Gallery">
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="assets/Ecommerce/ec-4.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <img src="assets/Ecommerce/ec-4.png" alt="Image Gallery">
                        </a>
                      </div>
    </div>
                    <div class="card">
                      <div class="card-image">
                        <a href="assets/Ecommerce/ec-5.png" data-fancybox="gallery" data-caption="Caption Images 1">
                          <img src="assets/Ecommerce/ec-5.png" alt="Image Gallery">
                        </a>
                      </div>
    </div>
               
             
    
    </div>
                </main>
            </div>
      </div>
      
      
      
            <div class="tab-pane fade" id="tab7">
                <div class="row" data-aos="fade-left">
                    
                    <main class="main">
                    <div class="container">
                   <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-1.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-1.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-2.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-2.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-3.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-3.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-4.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-4.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-5.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-5.png" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/UI Resize/ui-6.png" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/UI Resize/ui-6.png" alt="Image Gallery">
        </a>
      </div>
    </div>

        </div>
                </main>
    
                </div>
         </div>
         
         
            <div class="tab-pane fade" id="tab8">
                <div class="row" data-aos="fade-left">
                   <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma1.webp.crdownload" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma1.webp.crdownload" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma2.webp" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma2.webp" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma3.webp" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma3.webp" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma4.webp" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma4.webp" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma5.webp" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma5.webp" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="https://thelondonstudeo.com/img/ma6.webp" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="https://thelondonstudeo.com/img/ma6.webp" alt="Image Gallery">
        </a>
      </div>
    </div>

   
  </div>
</main>
                </div>
         </div>
         
         
         
         <div class="tab-pane fade" id="tab9">
                <div class="row" data-aos="fade-left">
                   <main class="main">
  <div class="container">
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c1.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c2.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c3.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c4.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c5.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c6.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c6.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c7.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c7.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c8.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c8.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c9.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c9.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c10.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c10.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c11.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c11.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <a href="assets/Characters/c12.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
          <img src="assets/Characters/c12.jpg" alt="Image Gallery">
        </a>
      </div>
    </div>
    

   
  </div>
</main>
                </div>
         </div>
         
   </div>
</div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
   loop: false,
   protect: true
   });
   
</script>