<?php
   include('header.php');
   ?>
 
<!--portfolio section start-->

<div class="mn-serv-head">
      <div class="container mt-3">
         <?php include('packages-tabs.php');?>
      </div>
   </div>

<!--portfolio section end -->

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