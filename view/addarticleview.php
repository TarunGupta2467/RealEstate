
<?php

require $this->DOC_ROOT.'/includes/adminheader.php';
?>


  <div class="content-wrapper">
       
      <!-- Area Chart Example-->

      
      <!-- Example DataTables Card-->
            
     <div class="container hiden">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add New Slider Image 
          <a href="<?php echo $this->BASE_URL.'public/adminarticle'; ?>">
          <button class="btn btn-primary show_table" style="float:right;">GO BACK</button>
          </a></div>
      <div class="card-body">
        <form method="post" name="myForm" action="adminadddata" enctype="multipart/form-data" onsubmit="return validate()">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-12">
                <label for="exampleInputName">Date</label>
                <input class="form-control" type="date" name="date">
                <p id="input_1">*Please fill this field</p>
              </div>
                 <div class="col-md-12">
                <label for="exampleInputName">About</label>
                <input class="form-control" type="text" name="about">
                <p id="input_1">*Please fill this field</p>
              </div>
                 <div class="col-md-12">
                <label for="exampleInputName">Description</label>
                <input class="form-control" type="text" name="description">
                <p id="input_1">*Please fill this field</p>
              </div>
               
               <div class="col-md-12">
                <label for="exampleInputName"></label>
               <button class="btn btn-primary btn-block" type="submit">ADD</button>
                <p id="input_1">*Please fill this field</p>
              </div>
        
        </form>
       
      </div>
    </div>
  </div>
   

     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
<?php 

 
    require $this->DOC_ROOT.'includes/adminfooter.php';
    ob_get_flush(); 
?>
  <style type="text/css">
  
    #input_1 {
      color: red;
      font-size: 18px;
      display: none;
     }
</style>
 <script>
function validate(){
           
                    document.getElementById("input_1").style.display = "none";
                    if(myForm.image.value==''){
                       document.getElementById("input_1").style.display = "block"; 
                        return false;
                    }
              return true; 
}
</script>