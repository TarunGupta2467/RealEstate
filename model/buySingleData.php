<?php

/** main class of model for buy page having
 * function to access of buy page from database 
 */
class buySingleData {

    /**
     * function to return all the property data
     * @param type $bed
     * @param type $city
     * @param type $category
     * @param type $price_min
     * @param type $price_max
     * @param type $area_min
     * @param type $area_max
     * @param type $sort
     * @param type $order
     * @return array
     */
    function buildings($bed, $city, $category, $price_min, $price_max, $area_min, $area_max, $sort, $order) {
        $conn = database::getDB();
        $building = array();
        $sq = "SELECT * FROM property_details";
        $con = 0;
        if ($bed != "" OR $city != "" OR $price_min != "" OR $price_max != "" OR $area_min != "" OR $area_max != "") {
            $sq = $sq . " WHERE ";
            if ($bed != '') {
                $sq = $sq . " bed = " . $bed;
                $con = 1;
            }
            if ($city != '') {
                if ($con != 0) {
                    $sq = $sq . " AND ";
                }
                $sq = $sq . " city = '" . $city . "'";
                $con = 1;
            }
            /*       if($category!='')
              {
              if($con!=0){
              $sq = $sq." OR ";
              }
              $sq = $sq." category = ".$category;
              $con=1;
              }
             */
            if ($price_min != '') {
                if ($con != 0) {
                    $sq = $sq . " AND ";
                }
                $sq = $sq . " price >= " . $price_min;
                $con = 1;
            }
            if ($price_max != '') {
                if ($con != 0) {
                    $sq = $sq . " AND ";
                }
                $sq = $sq . " price <= " . $price_max;
                $con = 1;
            }
            if ($area_min != '') {
                if ($con != 0) {
                    $sq = $sq . " AND ";
                }
                $sq = $sq . " plot_area >= " . $area_min;
                $con = 1;
            }
            if ($area_max != '') {
                if ($con != 0) {
                    $sq = $sq . " AND ";
                }
                $sq = $sq . " plot_area <= " . $area_max;
                $con = 1;
            }
        }
        $sq = $sq . " ORDER BY " . $sort . " " . $order;

        $result = $conn->query($sq);
        while ($row = $result->fetch_assoc()) {
            $add = array($row['image'], $row['possession'], $row['bed'], $row['bath'], $row['build_up_area'], $row['plot_area'], $row['age_of_property'], $row['price'], $row['id']);
            array_push($building, $add);
        }
        return $building;
    }

    /**
     * function to return community data
     * @return array
     */
    function featured_community() {
        $conn = database::getDB();
        $featured = array();
        $sql = "SELECT image, name FROM property_communities";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $add = array($row['image'], $row['name']);
            array_push($featured, $add);
        }
        return $featured;
    }

}

?>