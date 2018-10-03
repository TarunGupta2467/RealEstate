<?php
  

   /* main class of model for buy page having 
     function to access of buy page from database */
   class SingleData{
       
       /**
        * function for property image for id
        * @param type $id
        * @return array
        */
   	function property_images($id){
         $conn = database::getDB();
        $images = array();
        $sql= "SELECT image FROM property_details WHERE id=".$id."";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
        array_push($images,$row['image']);
   	}
   	return $images;
   }
   
   /**
    * function for property images of id
    * @param type $id
    * @return array
    */
   function property_images_more($id){
        $conn = database::getDB();
        $images = array();
        $sql = "SELECT image FROM property_image WHERE property_id =".$id."";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
        array_push($images,$row['image']);
   	}
   	return $images;
   }
   
   /**
    * function for property data of a fix id
    * @param type $id
    * @return type
    */
   function property_details($id){
    $conn = database::getDB();
    $sql = "SELECT * FROM property_details WHERE id=".$id."";
       $result = $conn->query($sql);
       $data = array();
        while($row = $result->fetch_assoc()){
       $data = array($row['possession'],$row['bed'],$row['bath'],$row['build_up_area'],$row['plot_area'],$row['age_of_property'],$row['price'],$row['description'],$row['latitude'],$row['longitude']);
      }
      return $data;
   }  
   
   /**
    * function for community data
    * @return array
    */
   function featured_community(){
             $conn = database::getDB();
            $featured = array();
            $sql = "SELECT image, name FROM property_communities";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
              $add = array($row['image'],$row['name']);
              array_push($featured,$add);
             }
             return $featured;

    }
    
    /**
     * function for related project
     * @return array
     */
    function related_project_details(){
            $conn = database::getDB();
            $related_project = array();
                 $sql= "SELECT * FROM related_project";
                 $result = $conn->query($sql);
                 while($row = $result->fetch_assoc()){
              $add = array($row['image'],$row['min_price'],$row['max_price'],$row['name'],$row['city'],$row['bed']);
              array_push($related_project,$add);
             }
             return $related_project;
    }




}



?>