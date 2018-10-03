<?php
    
    /**
     * main class having function of enquiry data
     */
    class AdminEnquiryData{
        
        /**
         * enquiry data function return array of 
         * enquiry complete data
         */
        function Enquirydata(){
            $conn = database::getDB();
            $sql = 'SELECT * FROM enquirydetails';
            $count = $conn->query($sql);
            $result = array();
            while($row = $count->fetch_assoc()) {
   		$add= array($row['property_id'],$row['name'], $row['email'], $row['subject'], $row['description']);    	
   		array_push($result, $add) ;
                }
             return $result;
        }
        
    }
