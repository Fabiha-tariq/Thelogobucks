<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link href="/path/to/jquery.fancybox.min.css" rel="stylesheet" />
<script src="/path/to/jquery.fancybox.min.js"></script>

<style>
    
    $color-white: #ffffff;
$color-black: #000000;
$color-light: #f5f7f8;
$color-dark: #333333;
$box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.4;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  background: $color-white;
  color: $color-dark;
}

.container {
  padding: 2rem 1rem;
  margin: 0 auto;
  max-width: 68rem;
  width: 100%;
}

.main {
  .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    justify-content: center;
    align-items: center;
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

    
</style>

<section id="pricing" class="pricing">
   <div class="container">
      <div class="section-title" data-aos="fade-up">
         <span>Pricing</span>
         <h2>Check our Pricing</h2>
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
               <a class="nav-link" href="#tab3">Logo Design</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="#tab1">Branding</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab2">Web Design & Development</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab3">E-Commerce</a>
            </li>
             <li class="nav-item">
               <a class="nav-link active" href="#tab1">UI/UX Design</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#tab2">Mobile App</a>
            </li>
         </ul>
         
         </div>

         <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
               
            </div>
            <div class="tab-pane fade" id="tab2">
               <div class="row" data-aos="fade-left">
                  
            </div>
            <div class="tab-pane fade" id="tab3">
               <div class="row" data-aos="fade-left">
                  
            </div>
         </div>
      </div>
   </div>
   
</section>

<script>

    // Fancybox Config
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


   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
