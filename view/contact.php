<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
   
    require $DOC_ROOT.'includes/header.php';
   
    ?>
<!--contact-->
<div class="contact">
	<div class="container">
		<h3>Contat</h3>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
		  <h4 > Info</h4>
          <p class="text-contact">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took.</p>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5>Address</h5>
	             <p><b>The Company Name</b></p>
	             <p>25478 charms of pleasur</p>
	             <p>On the other hand, we denounce</p>	
		  	</div>
		  	<div class="col-md-6 contact-address1">
			  	  <h5>Email Address </h5>
	             <p>General :<a href="malito:mail@demolink.org"> info(at)Lorem.com</a></p>
	             <p>Office :<a href="malito:mail@demolink.org"> info(at)Lorem.com</a></p>
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5 >Phone </h5>
	             <p>Landline : 254-8974-5847</p>
	             <p>Mobile : +174 1478 74755</p>
	        </div>
		  	<div class="clearfix"></div>
		  </div>
		</div>
		<div class="col-md-6 contact-right">
	
                    <form action="contact/enquiry?p_id=<?php echo $_REQUEST['id']; ?>" method="post" onsubmit="return validate();" name="enquiry">
                           <input type="text" name="name" placeholder="Name">
                           <p id="name"></p>
			   <input type="text" name="email" placeholder="Email">
                           <p id="email"></p>
			   <input type="text" name="subject" placeholder="Subject">
                           <p id="subject"></p>
			   <textarea  placeholder="Message" name="description"></textarea>
                           <p id="description"></p>
			   <label class="hvr-sweep-to-right">
	                   <input type="submit" value="Submit">
	           </label>
			</form>
		</div>
		<div class="clearfix"> </div>
</div>
	</div>
	<div class="map">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	    </div>
</div>
<!--//contact-->

<?php
    require $DOC_ROOT.'includes/footer.php';
?>
<style>
    #name,#email,#subject,#description{
        color: red;
    }
</style>
<script>
    function validate(){
         if(enquiry.name.value.trim()==0){
             document.getElementById('name').innerHTML= 'Please fill this field';
             return false;
         }
         else document.getElementById('name').style.display= 'none';
         
         if(enquiry.email.value.trim()==0){
             document.getElementById('email').innerHTML= 'Please fill this field';
             return false;
         }
          
          if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(enquiry.email.value)){
             document.getElementById('email').innerHTML= 'Please enter valid email';
             return false;
                     }
         else document.getElementById('email').style.display= 'none';
              
         if(enquiry.subject.value.trim()==0){
             document.getElementById('subject').innerHTML= 'Please fill this field';
             return false;
         }
          else document.getElementById('subject').style.display= 'none';
          
         if(enquiry.description.value.trim()==0){
             document.getElementById('description').innerHTML= 'Please fill this field';
             return false;
         }
          else document.getElementById('description').style.display= 'none';
          
        
     return true;   
    }
</script>    