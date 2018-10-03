<?php

   include $DOC_ROOT.'includes/header.php';
?>

<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Lor</span>em</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="<?php $BASE_URL.'public/buy'; ?>">Buy </a></li>
				<li class="subitem2"><a href="<?php $BASE_URL.'public/buy'; ?>">Rent </a></li>
				<li class="subitem3"><a href="<?php $BASE_URL.'public/buy'; ?>">Hostels </a></li>
				<li class="subitem1"><a href="<?php $BASE_URL.'public/buy'; ?>">Resale </a></li>
				<li class="subitem2"><a href="loan.html">Home Loan</a></li>
				<li class="subitem3"><a href="<?php $BASE_URL.'public/buy'; ?>">Apartment </a></li>
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
<div class="container">
	
	<!--price-->
	<div class="price">
		<div class="price-grid">
			<div class="col-sm-4 price-top">
			<form method="POST" action='buysingle' name="search">	
				<h4>City</h4>

				<select class="in-drop" name="city" type="text">
					<option value="">Select City</option>
					<option value="Bangkok">Bangkok</option>
					<option value="Tokyo">Tokyo</option>
					<option value="london">london</option>
					<option value="Paris">Paris</option>
					<option value="Dhubai">Dhubai</option>
					<option value="New Jerrsey">New Jerrsey</option>
					<option value="Hongkong">Hongkong</option>
					<option value="New York">New York</option>
					<option value="Rome">Rome</option>
					<option value="Sydney">Sydney</option>
					<option value="Florence">Florence</option>
					<option value="Istanbul">Istanbul</option>
					<option value="Brezil">Brezil</option>
					<option value="Canda">Canda</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Singapore">Singapore</option>
					<option value="Taiwan">Taiwan</option>
					<option value="Spain">Spain</option>
					<option value="gurgaon">gurgaon</option>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>Category</h4>
				<select class="in-drop" name="category">
					<option value="">Select Category</option>
					<option>Apartment</option>
					<option>Independent House</option>
					<option>Row House</option>
					<option>Villa</option>
					<option>Builder Floor</option>
					<option>Farm House</option>
					<option>Penthouse</option>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>Rooms</h4>
				<select class="in-drop" name="bed" type="text">
					<option value="">No. of Bedrooms</option>
					<option value="1">1 BHK</option>
					<option value="2">2 BHK</option>
					<option value="3">3 BHK</option>
					<option value="4">4 BHK</option>
					<option value="5">4+ BHK</option>
				</select>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="price-grid">
			<div class="col-sm-6 price-top1">
				<h4>Price Range</h4>
				<ul>
					<li>
						<select class="in-drop" name="price_min">
							<option value="">Price From</option>
							<option value="0">0</option>
							<option value="5">5 Lacs </option>
							<option value="10">10 Lacs</option>
							<option value="15">15 Lacs</option>
							<option value="20">20 Lacs</option>
							<option value="25">25 Lacs</option>
							<option value="30">30 Lacs</option>
							<option value="35">35 Lacs</option>
							<option value="40">40 Lacs</option>
							<option value="45">45 Lacs</option>
							<option value="50">50 Lacs</option>
							<option value="55">55 Lacs</option>
							<option value="60">60 Lacs</option>
							<option value="65">65 Lacs</option>
							<option value="70">70 Lacs</option>
							<option value="75">75 Lacs</option>
							<option value="80">80 Lacs</option>
							<option value="85">85 Lacs</option>
							<option value="90">90 Lacs</option>
							<option value="95">95 Lacs</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop" name="price_max">
							<option value="">Price To</option>
							<option value="5">5 Lacs </option>
							<option value="10">10 Lacs</option>
							<option value="15">15 Lacs</option>
							<option value="20">20 Lacs</option>
							<option value="25">25 Lacs</option>
							<option value="30">30 Lacs</option>
							<option value="35">35 Lacs</option>
							<option value="40">40 Lacs</option>
							<option value="45">45 Lacs</option>
							<option value="50">50 Lacs</option>
							<option value="55">55 Lacs</option>
							<option value="60">60 Lacs</option>
							<option value="65">65 Lacs</option>
							<option value="70">70 Lacs</option>
							<option value="75">75 Lacs</option>
							<option value="80">80 Lacs</option>
							<option value="85">85 Lacs</option>
							<option value="90">90 Lacs</option>
							<option value="95">95 Lacs</option>
							<option value="100">1 Cr</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 price-top1">
				<h4>Area</h4>
				<ul>
					<li>
						<select class="in-drop" name="area_min">
							<option value="">Sqmt From</option>
							<option value="0">0</option>
							<option value="500">500 Sq Ft</option>
							<option value="1000">1000 Sq Ft</option>
							<option value="1500">1500 Sq Ft</option>
							<option value="2000">2000 Sq Ft</option>
							<option value="2500">2500 Sq Ft</option>
							<option value="3000">3000 Sq Ft</option>
							<option value="3500">3500 Sq Ft</option>
							<option value="4000">4000 Sq Ft</option>
							<option value="4500">4500 Sq Ft</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop" name="area_max">
							<option value="">Sqmt To</option>
							<option value="500">500 Sq Ft</option>
							<option value="1000">1000 Sq Ft</option>
							<option value="1500">1500 Sq Ft</option>
							<option value="2000">2000 Sq Ft</option>
							<option value="2500">2500 Sq Ft</option>
							<option value="3000">3000 Sq Ft</option>
							<option value="3500">3500 Sq Ft</option>
							<option value="4000">4000 Sq Ft</option>
							<option value="4500">4500 Sq Ft</option>
							<option value="10000">5000+ Sq Ft</option>
						</select>
					</li>
				</ul>
			</div>
			<button class="hvr-sweep-to-right more btn" type="submit" style="margin: 30px;" onclick="return validate();"> SEARCH RESULT</button>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
 

	<div class="top-grid">
		<h3>Top Properties</h3>
		<div class="grid-at">	
		<?php 
		for($i=0;$i<sizeof($args[0]);$i++){
                 	?>
			<div class="col-md-3 grid-city" style="margin-top: 5px;">
				<div class="grid-lo">
					<a onclick="submit_form('<?php echo $args[0][$i][0]; ?>');">
						<figure class="effect-layla" style="height: 220px; width: 100%;">
						<img class=" img-responsive" src="http://localhost/new/css/images/<?php echo $args[0][$i][1]; ?>" alt="img06" style="width: 100%; height: 100%;">
						<figcaption>
							<h4 class="effect1" ><?php echo $args[0][$i][0]; ?></h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
			</div>

<?php } ?>
			
			
				 <div class="clearfix"> </div>
			</div>	
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!---->
<!--premium-project-->
<div class="premium">
	<div class="pre-top">
		<h5>Lorem Ipsum is simply dummy</h5>
		<p>$7.24 Lacs-4.36 Lacs 2-3 BHK, Lorem Ipsum</p>
	</div>
</div>
<!--//premium-project-->
<!---->
<div class="container">
	<div class="future">
		<h3 >Fetured Projects</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						 <?php
						   
                 
              for($i=0;$i<sizeof($args[1]);$i++){
                 	?>


						<li><div class="project-fur">
								<a href="single.php" ><img class="img-responsive" src="http://localhost/new/css/images/<?php echo $args[1][$i][1]; ?>" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money"><?php echo "$".$args[1][$i][3]."Lacs - ".$args[1][$i][4]."Lacs"; ?></span>
		                                    <h6 class="fur-name"><a href="single.php"><?php echo $args[1][$i][0]; ?></a></h6>
		                                   	<span><?php echo $args[1][$i][5]; ?></span>
                               			</div>
			                            <div class="fur2">
			                               	<span><?php echo $args[1][$i][2]; ?> BHK</span>
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
			<script type="text/javascript" src="http://localhost/new/css/js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>
<!--footer-->
<?php include $DOC_ROOT.'includes/footer.php' ?>
<script type="text/javascript">
	function submit_form(z){
     search.city.value=z;
     search.submit();

	}
</script>