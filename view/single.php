
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include $DOC_ROOT.'includes/header.php'; ?>
<style type="text/css">
	
	#map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

</style>
 
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Lor</span>em</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="buy.php">Buy </a></li>
				<li class="subitem2"><a href="buy.php">Rent </a></li>
				<li class="subitem3"><a href="buy.php">Hostels </a></li>
				<li class="subitem1"><a href="buy.php">Resale </a></li>
				<li class="subitem2"><a href="loan.html">Home Loan</a></li>
				<li class="subitem3"><a href="buy.php">Apartment </a></li>
				<li class="subitem3"><a href="dealers.html">Dealers</a></li>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>
</div>
<!--//header-->
<!---->




<div class="container">


	

	


	<div class="buy-single-single">
	
			<div class="col-md-9 single-box">
				
       <div class=" buying-top">	
			<div class="flexslider">
    <ul class="slides">
        <?php
            
            for($i=0;$i<sizeof($args[0]);$i++){
      	?>
         <li data-thumb="<?php echo $BASE_URL.'css/images/'.$args[0][$i]; ?>">
            <img src="<?php echo $BASE_URL.'css/images/'.$args[0][$i]; ?>"/>
           </li> 

        <?php 
          }
        
          for($i=0;$i<sizeof($args[1]);$i++){   
        ?>
           <li data-thumb="<?php echo $BASE_URL.'css/images/'.$args[1][$i]; ?>">
             <img src="<?php echo $BASE_URL.'css/images/'.$args[1][$i]; ?>"/>
           </li>    
        <?php
           } 
        ?>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="<?php echo $BASE_URL; ?>css/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
               
                 
                 	     <h4>Possession: <?php echo $args[2][0]; ?></h4>
					     <p><span class="bath">Bed </span>: <span class="two"><?php echo $args[2][1]; ?> BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two"><?php echo $args[2][2]; ?> </span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two"><?php echo $args[2][3]; ?>  Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> <?php echo $args[2][4]; ?>  Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two"><?php echo $args[2][5]; ?>  Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"> <?php echo $args[2][6]; ?>  Lacs</span></p>				 
						<div class="   right-side">
							 <a href="contact?id=<?php echo $args[5]; ?>" class="hvr-sweep-to-right more" >Contact Builder</a>     
					 </div>
					</div>
					 <div class="col-sm-7 buy-sin">
					 	<h4>Description</h4>
					 	<p><?php echo $args[2][7]; ?>  </p>
					 </div>
					 <div class="clearfix"> </div>
					</div>


					 <div class="map-buy-single">
					 	<h4>Neighborhood Info</h4>
						 	<div class="map-buy-single1">
							<script>
// Initialize and add the map
   function initMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo $args[2][8]; ?>, lng: <?php echo $args[2][9]; ?>};
  
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqNNPpmyPX8rtYfB7jYrUjDMgpBbMf4c0&callback=initMap">
    </script>
				  <div id="map"></div>
						</div>
					</div>
				


					<div class="video-pre">
						<h4>Video Presentation</h4>
						<iframe src="https://player.vimeo.com/video/63931426"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
		</div>
	
			
		
		<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	<h4>Featured Communities</h4>
             <?php
		     	 for($i=0;$i<sizeof($args[3]);$i++){	
		     			?>
		           
  
		             <div class="single-box-img ">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="<?php echo $BASE_URL."css/images/".$args[3][$i][0]; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php"><?php echo $args[3][$i][1]; ?></a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				     </div>
				     <?php
		     		}

		     		?>








<!--
				
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="images/sl1.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php">Lorem ipsum dolor sit amet</a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="images/sl2.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php">Lorem ipsum dolor sit amet</a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="images/sl3.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php">Lorem ipsum dolor sit amet</a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="images/sl4.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php">Lorem ipsum dolor sit amet</a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>. -->
		 </div>
			
	  </div>
		<div class="clearfix"> </div>
		</div>
	</div>
<!---->
<div class="container">
	<div class="future">
		<h3 >Related Projects</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">		
                   <?php
                for($i=0;$i<sizeof($args[4]);$i++){
                 	?>


						<li><div class="project-fur">
								<a href="single.php" ><img class="img-responsive" src="<?php echo $BASE_URL."css/images/".$args[4][$i][0]; ?>" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money"><?php echo "$".$args[4][$i][1]."Lacs - ".$args[4][$i][2]."Lacs"; ?></span>
		                                    <h6 class="fur-name"><a href="single.php"><?php echo $args[4][$i][3]; ?></a></h6>
		                                   	<span><?php echo $args[4][$i][4]; ?></span>
                               			</div>
			                            <div class="fur2">
			                               	<span><?php echo $args[4][$i][5]; ?> BHK</span>
			                             </div>
									</div>					
							</div></li>


							<?php
						    }

							 ?>
					</ul>

					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="<?php echo $BASE_URL; ?>css/js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>
<!--footer-->
<?php include $DOC_ROOT.'includes/footer.php' ?>
