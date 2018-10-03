<?php

/* main class of model for buy page having 
  function to access of buy page from database */

class buy_page_data {

    function property() {   // function return all the data of property table stored in project database
        $conn = database::getDB();
        $sql = "SELECT * FROM property_details ORDER BY id DESC LIMIT 8";
        $result = $conn->query($sql);
        $image = array();
        while ($row = $result->fetch_assoc()) {
            $add = array($row['city'], $row['image']);
            array_push($image, $add);
        }
        return $image;
    }

    function related_project() {    // function return all the data of related project stored in project database
        $conn = database::getDB();
        $sql = "SELECT * FROM related_project";
        $result = $conn->query($sql);
        $project = array();
        while ($row = $result->fetch_assoc()) {
            $add = array($row['name'], $row['image'], $row['bed'], $row['min_price'], $row['max_price'], $row['city']);
            array_push($project, $add);
        }
        return $project;
    }

}

?>