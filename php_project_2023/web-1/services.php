<!DOCTYPE html>
<html>
<head>
<title>Mobile Service Provider</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
<header>
<!-- header -->
	<?php
	include_once('header.php');
	?>
<!-- /header -->
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?17879';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginLeft":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"MObile Services",
      "brandSubTitle":"Hi welcome to Mobile Services",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi, there!\nHow can I help you?",
      "messageText":"Hello, I have a question about ",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"+919909879421"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img">
							<div class="slider_banner_info">
							
								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>


<section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">
<div class="container">
<h1 class="text-center pb-5 b-line" style="font-size: 1.575rem;padding-bottom: 1rem!important;"><b><u>Services</u></b> </h1>
<p class="w3_dwn">Mobile services is the largest mobile phone service chain in Ahmedabad, also the biggest Mobile service provider..</p>
<div class="w3_rm">
<a href="about" >READ MORE</a>
</div>
</div><br><br><br>
<div class="container">
<div class="row">
	<div class="col-md-12">
<h1 class="text-center pb-5 b-line" style="font-size: 1.575rem;padding-bottom: 1rem!important;"><b><u>Mobile Repair</u></b> </h1>
<h3 class="text-center pb-5 b-line" style="font-size: 1.575rem;padding-bottom: 1rem!important;">Please select the company of youre mobile</h3>
<br>
</div>
<?php
  foreach($company_arr as $c)
  {
  ?>
<div class="col-md-3 col-sm-6 w3_ban1">
<div class="card" >
  <div class="card-body">
 
    <a href="#" class=""><img class="card-img-top" src="../admin/company_img/<?php echo $c ->com_img;?>" alt="Card image cap"></a><br>
	<br>
  <!-- service img name -->
  <h6><b><?php echo $c ->com_name ;?></b></h6>
  
  </div>
</div>

</div>
<?php
   }
  ?>

</div>
</div>
</section>



<!-- Contact -->
<section class="contact py-lg-5 py-md-4 py-md-3 py-2">
<div class="container py-lg-5 py-md-4 py-md-3 py-2">
<div class="w3_mg">
<h3>Fast Service</h3>
<p class=" my-lg-4 my-md-3 my-sm-2 my-2">We offer our services in all the major areas; all you have to do is to select your area and contact us for our onsite mobile services. Our expert engineer will visit your place to get your mobile fixed.</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Conatct Page
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fast Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title clr">CONTACT FORM</h3>
            <div class=" contact-form">
               <form action="#" method="post">
                  <div class="row contact-bothside-agileinfo">
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="text" name="contact_name" placeholder="Name" required="">
                     </div>
               
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="email" name="contact_email" placeholder="Email" required="">
                     </div>
                     
                     <textarea name="contact_message" placeholder="Message" required=""></textarea>
					 
                     <input type="submit" value="SUBMIT" name="submit">
                  </div>
               </form>
            </div>
         </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>
</section>
<!-- /Conatct -->
	

<!-- Footer-->
<?php
include_once('footer.php');
?>
<!-- /Footer-->


<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

	<!-- banner Slider -->
	
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>


	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->

</body>
</html>