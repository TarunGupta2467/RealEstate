
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
      <div class="card-header">Update property 
           <a href="<?php echo $this->BASE_URL.'public/adminpropertypage'; ?>">
               <button class="btn btn-primary show_table" style="float:right;">GO BACK</button></a></div>
      <div class="card-body">
          <form method="post" name="myForm" action="edit?id=<?php echo $args[2][0][0]; ?>" enctype="multipart/form-data" onsubmit="return validate();">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Title</label>
                <input class="form-control" type="text" name="title" value="<?php echo $args[2][0][1]; ?>">
                <p id="input_1">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">possession</label>
                <input class="form-control" type="text" name="possession" value="<?php echo $args[2][0][2]; ?>" >
                <p id="input_2">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Bed</label>
                <input class="form-control" type="text" name="bed"value="<?php echo $args[2][0][3]; ?>">
                <p id="input_3">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Bath</label>
                <input class="form-control" type="text" name="bath" value="<?php echo $args[2][0][4]; ?>">
                <p id="input_4">*Please fill this field</p>
              </div>
               <div class="col-md-6">
                <label for="exampleInputName">build up area</label>
                <input class="form-control" type="text" name="build_up_area" value="<?php echo $args[2][0][5]; ?>" >
                <p id="input_5">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">plot area</label>
                <input class="form-control" type="text" name="plot_area" value="<?php echo $args[2][0][6]; ?>">
                <p id="input_6">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Age of property</label>
                <input class="form-control" type="text" name="age_of_property" value="<?php echo $args[2][0][7]; ?>">
                <p id="input_7">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Price</label>
                <input class="form-control" type="text" name="price"value="<?php echo $args[2][0][8]; ?>">
                <p id="input_8">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Price Text</label>
                <input class="form-control" type="text" name="price_text"value="<?php echo $args[2][0][9]; ?>">
                <p id="input_9">*Please fill this field</p>
              </div>
               <div class="col-md-6">
                <label for="exampleInputName">Type</label>
                <input class="form-control" type="text" name="type"value="<?php echo $args[2][0][10]; ?>">
                <p id="input_10">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Image</label>
                <input class="form-control" type="file" name="image">
                <p id="input_11">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Address 1</label>
                <input class="form-control" type="text" name="address1"value="<?php echo $args[2][0][11]; ?>">
                <p id="input_13">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Address 2</label>
                <input class="form-control" type="text" name="address2"value="<?php echo $args[2][0][12]; ?>">
                <p id="input_14">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">City</label>
                <input class="form-control" type="text" name="city"value="<?php echo $args[2][0][13]; ?>">
                <p id="input_15">*Please fill this field</p>
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Country</label>
                <input class="form-control" type="text" name="country"value="<?php echo $args[2][0][14]; ?>">
                <p id="input_16">*Please fill this field</p>
              </div>
              <div class="col-md-4">
                <label for="exampleInputLastName">Pincode</label>
                <input class="form-control" type="text" name="pincode"value="<?php echo $args[2][0][15]; ?>">
                <p id="input_17">*Please fill this field</p>
              </div>
              <div class="col-md-4">
                <label for="exampleInputLastName">Created Date</label>
                <input class="form-control" type="date" name="created_date" value="<?php echo $args[2][0][16]; ?>">
                <p id="input_18">*Please fill this field</p>
              </div>
              <div class="col-md-4">
                <label for="exampleInputName">Modified Date</label>
                <input class="form-control" type="date" name="modified_date" value="<?php echo $args[2][0][17]; ?>">
                <p id="input_19">*Please fill this field</p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input class="form-control" name="description" placeholder="discription" value="<?php echo $args[2][0][18]; ?>">
            <p id="input_20">*Please fill this field</p>
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
  
    #input_11 ,#input_1 , #input_2 ,#input_3 , #input_4 ,#input_5 , #input_6 ,#input_7 , #input_8 ,#input_9 , #input_10 ,#input_13 , #input_14 ,#input_15 , #input_16 ,#input_17 , #input_18 ,#input_19 , #input_20{
      color: red;
      font-size: 18px;
      display: none;
     }
</style>
 <script>

function validate(){
           
                    document.getElementById("input_1").style.display = "none";
                    document.getElementById("input_2").style.display = "none"; 
                    document.getElementById("input_3").style.display = "none";
                    document.getElementById("input_4").style.display = "none";
                    document.getElementById("input_5").style.display = "none"; 
                    document.getElementById("input_6").style.display = "none";
                    document.getElementById("input_7").style.display = "none";
                    document.getElementById("input_8").style.display = "none"; 
                    document.getElementById("input_9").style.display = "none";
                    document.getElementById("input_10").style.display = "none";
                 
                    document.getElementById("input_13").style.display = "none";
                    document.getElementById("input_14").style.display = "none"; 
                    document.getElementById("input_15").style.display = "none";
                    document.getElementById("input_16").style.display = "none";
                    document.getElementById("input_17").style.display = "none"; 
                    document.getElementById("input_18").style.display = "none"; 
                    document.getElementById("input_19").style.display = "none";
                    document.getElementById("input_20").style.display = "none"; 




                    if(myForm.title.value.trim().length === 0 ){
                      document.getElementById("input_1").style.display = "block";
                      return false;
                    }
                     if(myForm.possession.value.trim().length === 0 ){
                      document.getElementById("input_2").style.display = "block";
                      return false;
                    }
                     if(myForm.bed.value.trim().length === 0 ){
                      document.getElementById("input_3").style.display = "block";
                      return false;
                    }
                     if(myForm.bath.value.trim().length === 0 ){
                      document.getElementById("input_4").style.display = "block";
                      return false;
                    }
                     if(myForm.build_up_area.value.trim().length === 0 ){
                      document.getElementById("input_5").style.display = "block";
                      return false;
                    }
                     if(myForm.plot_area.value.trim().length === 0 ){
                      document.getElementById("input_6").style.display = "block";
                      return false;
                    }
                     if(myForm.age_of_property.value.trim().length === 0 ){
                      document.getElementById("input_7").style.display = "block";
                      return false;
                    }
                     if(myForm.price.value.trim().length === 0 ){
                      document.getElementById("input_8").style.display = "block";
                      return false;
                    }
                     if(myForm.price_text.value.trim().length === 0 ){
                      document.getElementById("input_9").style.display = "block";
                      return false;
                    }
                     if(myForm.type.value.trim().length === 0 ){
                      document.getElementById("input_10").style.display = "block";
                      return false;
                    }                    
                     if(myForm.address1.value.trim().length === 0 ){
                      document.getElementById("input_13").style.display = "block";
                      return false;
                    }
                     if(myForm.address2.value.trim().length === 0 ){
                      document.getElementById("input_14").style.display = "block";
                      return false;
                    }
                     if(myForm.city.value.trim().length === 0 ){
                      document.getElementById("input_15").style.display = "block";
                      return false;
                    }
                     if(myForm.country.value.trim().length === 0 ){
                      document.getElementById("input_16").style.display = "block";
                      return false;
                    }
                     if(myForm.pincode.value.trim().length === 0 ){
                      document.getElementById("input_17").style.display = "block";
                      return false;
                    }
                     if(myForm.created_date.value.trim().length === 0 ){
                      document.getElementById("input_18").style.display = "block";
                      return false;
                    }
                     if(myForm.modified_date.value.trim().length === 0 ){
                      document.getElementById("input_19").style.display = "block";
                      return false;
                    }
                     if(myForm.description.value.trim().length === 0 ){
                      document.getElementById("input_20").style.display = "block";
                      return false;
                    }
                    
              return true; 
}

</script>