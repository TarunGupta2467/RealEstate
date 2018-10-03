<?php
   
   /**
    * class havin function of admin home data
    */
    class AdminHomeData{    
        function numberOfEnquiry(){    // return number of enquiry 
            $conn = database::getDB();
            $sql = 'SELECT COUNT(*) as num FROM enquirydetails';
            $count = $conn->query($sql);
            while($row = $count->fetch_assoc()) {
   		  	$numberOfEnquiries = $row['num'];
   		  }
             return $numberOfEnquiries;
        }
        function numberOfProperty(){    //  return number of property
            $conn = database::getDB();
            $sql = 'SELECT COUNT(*) as num FROM property_details';
            $count = $conn->query($sql);
            while($row = $count->fetch_assoc()) {
   		  	$numberOfProperty = $row['num'];
   		  }
             return $numberOfProperty;
             
        }
    }