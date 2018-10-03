<?php

/**
 * class having all function of about page
 */
class AboutData{
 
     function articleData(){     // function returns array having list of banner images
         
         $conn = database::getDB();
         $sql = "SELECT * FROM article";
         $result = $conn->query($sql);
         $image= array();
         while($row = $result->fetch_assoc()) {
           $add = array($row['id'],$row['date'],$row['about'],$row['description']);
             array_push($image,$add);
             }
             return $image;
     }

  }
?>