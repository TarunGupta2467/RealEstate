<?php
    
   /**
    * class having alll slider functions 
    */ 
    class AdminSliderData{
       
        /**
         * function retrun all sliders images
         * @return array
         */
        function Sliderdata(){
            $conn = database::getDB();
            $sql = 'SELECT * FROM banner';
            $count = $conn->query($sql);
            $result = array();
            while($row = $count->fetch_assoc()) {
   		$add= array($row['id'], $row['image']);    	
   		array_push($result, $add) ;
                }
             return $result;
        }
        
        /**
         * function add new slider image
         * @global type $DOC_ROOT
         * @param type $array
         */
        function addNewSlider($array){
             
            $conn = database::getDB();
    
            $image = $array['image']['name'][0];
           
            $sql = "INSERT INTO banner (image)
              VALUES ('$image')";
  
            $conn->query($sql);
          
         global $DOC_ROOT; 
         $target_dir = $DOC_ROOT.'css/images/';
          $target_file = $target_dir . basename($array["image"]["name"][0]);
          move_uploaded_file($array['image']['tmp_name'][0], $target_file);
      
          header('location: ../adminslider');
          die;
        }
        
        /**
         * function to remove slider image
         */
        
        function removeSlider($id){
              
            $conn = database::getDB();
            
          
            $sql= "DELETE FROM banner WHERE id=".$id;
            $conn->query($sql);
        }
        
        /**
         * function to edit slider
         */
        
        function editSlider($array,$id){
           
            $conn = database::getDB();
           
             global $DOC_ROOT; 
             $target_dir = $DOC_ROOT.'css/images/';
             $target_file = $target_dir . basename($array["image"]["name"][0]);
             move_uploaded_file($array['image']['tmp_name'][0], $target_file);
            
             $image= $array['image']['name'][0]; 
            $sql= "UPDATE `banner` SET image='".$image."' WHERE id=".$id;
           
            $conn->query($sql);
         
          header('location: ../adminslider');
          die;
            
        }
    }
