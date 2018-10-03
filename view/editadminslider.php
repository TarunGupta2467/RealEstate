
<?php

require $this->DOC_ROOT.'/includes/adminheader.php';
?>


  <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-6 col-sm-6 mb-6">
                
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5"><?php echo $args[1]; ?> Properties!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="adminpropertypage">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-6">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo $args[0]; ?> Enquiries!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="adminenquirylisting">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
           
 
      <!-- Area Chart Example-->

      
      <!-- Example DataTables Card-->
            
     <div class="container hiden">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add New Slider Image  <a href="<?php echo $this->BASE_URL.'public/adminslider'; ?>">
          <button class="btn btn-primary show_table" style="float:right;">GO BACK</button>
          </a></div>
      <div class="card-body">
        <form method="post" name="myForm" action="adminedit?id=<?php echo $_REQUEST['id']; ?>" enctype="multipart/form-data" onsubmit="return validate()">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-12">
                <label for="exampleInputName">Image</label>
                <input class="form-control" type="file" name="image" multiple>
                <p id="input_1">*Please select a file</p>
              </div>
              
          <button class="btn btn-primary btn-block" type="submit">ADD</button>
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