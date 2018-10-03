<?php

    /**
     * main class contain all function related to contact page
     */
    
    class EnquiryData{
        /**
         * function to insert new enquiry
         * @param type $id
         * @param type $name
         * @param type $email
         * @param type $subject
         * @param type $description
         */
        function insertNewEnquiry($id, $name, $email, $subject , $description){
           $conn = database::getDB();
           $sql = "INSERT INTO enquirydetails (property_id, name, email, subject, description)
                     VALUES ($id, '$name', '$email','$subject' , '$description')";
           $conn->query($sql);
        }
        
    }