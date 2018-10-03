<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
				<li class="subitem1"><a href="buy.php">Buy </a></li>
				<li class="subitem2"><a href="buy.php">Rent </a></li>
				<li class="subitem3"><a href="buy.php">Hostels </a></li>
				<li class="subitem1"><a href="buy.php">Resale</a></li>
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
<div class="single">
	<div class="container">
            
	<!--price-->
	<div class="price">
		<div class="price-grid">
			<div class="col-sm-4 price-top">
			<form method="POST" action="#" name="search">	
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
                    <div class="col-sm-6 check-top-single" style="margin-top:30px;">
				<div class="single-bottom">
					<h4>Sort By</h4>
						<ul>
							<li>
                                                            <input type="radio"  name="sortBy" value="price" checked>
								<label for="brand"><span></span> Price</label>
							</li>
							<li>
                                                            <input type="radio" name="sortBy" value="date">
								<label for="brand"><span></span>Date</label>
							</li>
							
							
						</ul>
					</div>
			</div>
			<div class="col-sm-6 check-top-single" style="margin-top:30px;">
				<div class="single-bottom">
					<h4>Order</h4>
						<ul>
							<li>
                                                            <input type="radio" name="order"  value="" checked>
								<label for="brand5"><span></span> Increasing</label>
							</li>
							<li>
								<input type="radio"  name="order" value="">
								<label for="brand6"><span></span> Decreasing</label>
							</li>
							
							
						</ul>
					</div>
			</div>
			<button class="hvr-sweep-to-right more btn" type="submit" style="margin: 30px;" onclick="return validate();"> SEARCH RESULT</button>
			</form>
			<div class="clearfix"> </div>
		</div>
                    <div class="clearfix"> </div>
	</div>
</div>

<!---->
<div class="container">
	
	<div class="buy-single">
		<h3>Residential Flats, Apartments</h3>
		<div class="box-sin">
			<div class="col-md-9 single-box">

	<?php
      //      error_reporting(0);
       //     ini_set('display_errors', 0);
     for($i=0;$i<sizeof($args[0]);$i++){
      	?>
				




				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single?id=<?php echo $args[0][$i][8]; ?>"> <img class="img-responsive" src="<?php echo $BASE_URL."css/images/".$args[0][$i][0]; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: <?php echo $args[0][$i][1]; ?></h4>
					     <p><span class="bath">Bed </span>: <span class="two"><?php echo $args[0][$i][2]; ?> BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two"><?php echo $args[0][$i][3]; ?></span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two"><?php echo $args[0][$i][4]; ?> Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> <?php echo $args[0][$i][5]; ?> Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two"><?php echo $args[0][$i][6]; ?> Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"><?php echo $args[0][$i][7]; ?> Lacs</span></p>				 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php 
			}
				

				?>
				
		</div>
		<div class="col-md-3 map-single-bottom">
			<div class="map-single">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
			<div class="single-box-right">
		     	<h4>Featured Communities</h4>
             <?php
		     	
		     	 for($i=0;$i<sizeof($args[1]);$i++){	
		     			?>
		           
  
		             <div class="single-box-img ">
					<div class="box-img">
						<a href="single.php"><img class="img-responsive" src="<?php echo $BASE_URL."css/images/".$args[1][$i][0]; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php"><?php echo $args[1][$i][1]; ?></a></p>
						<a href="single.php" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				     </div>
				     <?php
		     		}
		     		?>
		 </div>
	  </div>
		<div class="clearfix"> </div>
		<div class="nav-page">
		<nav>
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
     </ul>
   </nav>
   </div>
		</div>
		
	</div>
	
</div>
<!---->
<!--footer-->
<?php include '../includes/footer.php' ?>