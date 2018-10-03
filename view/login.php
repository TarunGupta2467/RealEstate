<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<style type="text/css">
     #input_email,#input_email_2, #input_password, #input_password2{
      color: red;
      font-size: 18px;
      display: none;
      padding: 0px;
      float: left;
     }
   </style>
  <script>
           function validate(){
                             
                    document.getElementById("input_email").style.display = "none";
                    document.getElementById("input_email_2").style.display = "none";
                    document.getElementById("input_password2").style.display = "none";       
                
                     if(myForm.username.value.trim().length ===0){
                      document.getElementById("input_email_2").style.display = "block";
                      return false;
                    }
                    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.username.value)){
                       document.getElementById("input_email").style.display = "block";
                       return false;
                     }
                      if(myForm.password.value.trim().length ===0){
                      document.getElementById("input_password2").style.display = "block";
                      return false;
                    }
                   
     
              return true; 
}

         </script>

<?php

include $DOC_ROOT.'includes/header.php';
?>


<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Log</span>in</h3> 
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
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Login</h3>
		<div class="login-top">
				<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="form-info">
					<form action=login method="POST" name="myForm" onsubmit = "return validate();">
						<input type="text" class="text" name="username" placeholder="Email Adress" >
						<p id="input_email_2">*please Enter Email </p>
                        <p id="input_email">*please Enter a valid Email </p>
						<input type="password"  name="password" placeholder="Password" >
						 <p id="input_password2">*please enter a password</p>
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit">
				           </label>
					</form>
				</div>
			<div class="create">
				<h4>New To Real Home?</h4>
				<a class="hvr-sweep-to-right" href="register.php">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<!--//contact-->
<!--footer-->
<?php include $DOC_ROOT.'includes/footer.php' ?>