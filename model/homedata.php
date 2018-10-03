<?php




 // main model class for main home page  
class HomeData{
 
     function bannerImg(){                       // function returns array having list of banner images
         
         $conn = database::getDB();
         $sql = "SELECT id, image FROM banner";
         $result = $conn->query($sql);
         $image= array();
         while($row = $result->fetch_assoc()) {
           $add = array($row['id'],$row['image']);
             array_push($image,$add);
             }
             return $image;
             
     }


     function testonomial(){                         // function returns array having testonomials data
         $conn = database::getDB();
         $sql = "SELECT name, about, image, speech FROM Testmonials";
         $result = $conn->query($sql);
         $testonomials = array();
          while($row = $result->fetch_assoc()) {
             $add = array($row['name'],$row['about'],$row['image'],$row['speech']);
               array_push($testonomials,$add);
             }

       return $testonomials;
     }


     function partner(){                              // function returns array having partners details
        $conn = database::getDB();
         $sql = "SELECT id,image FROM partners";
         $result = $conn->query($sql);
           $partners = array();
          while($row = $result->fetch_assoc()) {
             $add = array($row['id'],$row['image']);
               array_push($partners,$add);
             }
       return $partners;
       }
  }
?>