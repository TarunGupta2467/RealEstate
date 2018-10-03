<?php

/**
 * main class of admin property data 
 * contain all function related with property data
 */
class AdminPropertyData {

    /**
     * function return all the property data
     */
    function propertyData() {
        $conn = database::getDB();
        $sql = 'SELECT * FROM property_details';
        $count = $conn->query($sql);
        $result = array();
        while ($row = $count->fetch_assoc()) {
            $add = array($row['id'], $row['plot_area'], $row['price'], $row['address1'], $row['address2'],
                $row['city'], $row['country'], $row['pincode'], $row['modified_date']);
            array_push($result, $add);
        }
        return $result;
    }

    /**
     * function return all the property data
     */
    function propertyDataEdit($id) {
        $conn = database::getDB();
        $sql = 'SELECT * FROM property_details WHERE id=' . $id;

        $count = $conn->query($sql);
        $result = array();
        while ($row = $count->fetch_assoc()) {
            $add = array($row['id'], $row['title'], $row['possession'], $row['bed'], $row['bath'],
                $row['build_up_area'], $row['plot_area'], $row['age_of_property'], $row['price']
                , $row['price_text'], $row['type'], $row['address1'], $row['address2'],
                $row['city'], $row['country'], $row['pincode'], $row['created_date'], $row['modified_date'],
                $row['description']);
            array_push($result, $add);
        }
        return $result;
    }

    /**
     * function to add new property in database
     */
    function addNewProperty($array, $arr) {

        $conn = database::getDB();
        $i = 0;
        
        while ($i <= 5) {
            $search = $array['address1'] . ' ' . $array['address2'] . ' ' . $array['city'] . ' ' . $array['country'];
            $r = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=%s', urldecode($search));
            $r = json_decode($r, true);
            $location = $r['results'][0]['geometry']['location'];

            if (isset($location)) {
                break;
            }
            $i++;
        }

        
        $title = $array['title'];
        $possession = $array['possession'];
        $bed = $array['bed'];
        $bath = $array['bath'];
        $build_up_area = $array['build_up_area'];
        $plot_area = $array['plot_area'];
        $age_of_property = $array['age_of_property'];
        $price = $array['price'];
        $price_text = $array['price_text'];
        $type = $array['type'];
        $latitude = $location['lat'];
        $longitude = $location['lng'];
        $address1 = $array['address1'];
        $address2 = $array['address2'];
        $city = $array['city'];
        $country = $array['country'];
        $pincode = $array['pincode'];
        $created_date = $array['created_date'];
        $modified_date = $array['modified_date'];
        $description = $array['description'];
        $image = $arr['image']['name'][0];

       
        $sql = "INSERT INTO property_details (title, possession, bed, bath, build_up_area, plot_area, 
                age_of_property, price, price_text, type, latitude, longitude, address1, address2, city,
                country, pincode, created_date, modified_date, description, image)
              VALUES ('$title', '$possession', '$bed','$bath', '$build_up_area', '$plot_area',"
                . "'$age_of_property', '$price', '$price_text','$type', '$latitude',"
                . " '$longitude','$address1', '$address2', '$city','$country', '$pincode', "
                . "'$created_date','$modified_date', '$description', '$image' )";

        $conn->query($sql);

        global $DOC_ROOT;
        $target_dir = $DOC_ROOT . 'css/images/';
        $target_file = $target_dir . basename($arr["image"]["name"][0]);
        move_uploaded_file($arr['image']['tmp_name'][0], $target_file);

    }
     
    /**
     * edit property data in database
     * @global type $DOC_ROOT
     * @param type $array
     * @param type $arr
     */
    function editProperty($array, $arr) {
       
        $conn = database::getDB();
        $i = 0;
      
        while ($i <= 5) {
            $search = $array['address1'] . ' ' . $array['address2'] . ' ' . $array['city'] . ' ' . $array['country'];
            $r = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=%s', urldecode($search));
            $r = json_decode($r, true);
            $location = $r['results'][0]['geometry']['location'];

            if (isset($location)) {
                break;
            }
            $i++;
        }

        $id= $array['id'];
        $title = $array['title'];
        $possession = $array['possession'];
        $bed = $array['bed'];
        $bath = $array['bath'];
        $build_up_area = $array['build_up_area'];
        $plot_area = $array['plot_area'];
        $age_of_property = $array['age_of_property'];
        $price = $array['price'];
        $price_text = $array['price_text'];
        $type = $array['type'];
        $latitude = $location['lat'];
        $longitude = $location['lng'];
        $address1 = $array['address1'];
        $address2 = $array['address2'];
        $city = $array['city'];
        $country = $array['country'];
        $pincode = $array['pincode'];
        $created_date = $array['created_date'];
        $modified_date = $array['modified_date'];
        $description = $array['description'];
        $image = $arr['image']['name'];

       $sql = "UPDATE property_details SET "
               . "title='$title', possession='$possession', bed='$bed', "
               . "bath='$bath', build_up_area='$build_up_area', plot_area='$plot_area',"
               . " age_of_property='$age_of_property', price= '$price',"
               . " price_text='$price_text', type='$type', latitude='$latitude',"
               . " longitude='$longitude', address1='$address1', address2='$address2',"
               . " city='$city', country='$country', pincode='$pincode', "
               . "created_date='$created_date', modified_date='$modified_date', "
               . "description= '$description', image='$image' WHERE id= " . $id;

        $conn->query($sql);

        global $DOC_ROOT;
        $target_dir = $DOC_ROOT . 'css/images/';
        $target_file = $target_dir . basename($arr["image"]["name"][0]);
        move_uploaded_file($arr['image']['tmp_name'][0], $target_file);         
    }
    
    /**
     * function remove property data from database
     * @param type $id
     */
    function removeProperty($id){
         $conn = database::getDB();
            
          
            $sql= "DELETE FROM property_details WHERE id=".$id;
            $conn->query($sql);
    }
}

