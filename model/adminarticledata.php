<?php

/**
 * main class having function related to article
 */
class AdminArticleData {

    /**
     * function return array of article data
     */
    function articleData() {        // function returns array having list of banner images
        $conn = database::getDB();
        $sql = "SELECT * FROM article";
        $result = $conn->query($sql);
        $image = array();
        while ($row = $result->fetch_assoc()) {
            $add = array($row['id'], $row['date'], $row['about'], $row['description']);
            array_push($image, $add);
        }
        return $image;
    }

    function addArticleData($array) {      // function to add new article data
        $conn = database::getDB();
        $date = $array['date'];
        $about = $array['about'];
        $desc = $array['description'];

        $sql = "INSERT INTO article (date, about, description)
              VALUES ('$date', '$about', '$desc')";
        $conn->query($sql);
    }

    function removeArticledata($id) {    // function to remove article

        $conn = database::getDB();


        $sql = "DELETE FROM article WHERE id=" . $id;

        $conn->query($sql);
    }

    function editArticleStore($array, $id) {    // function render page of edit article data

        $conn = database::getDB();

        $date = $array['date'];
        $about = $array['about'];
        $desc = $array['description'];

        $sql = "UPDATE `article` SET date='" . $date . "' ,about='" . $about . "' ,description= '" . $desc . "' WHERE id=" . $id;

        $conn->query($sql);
    }

    function articleDataforid($id) {       // function to return article data for id
        $conn = database::getDB();
        $sql = "SELECT * FROM article WHERE id=" . $id;
        $result = $conn->query($sql);
        $image = array();
        while ($row = $result->fetch_assoc()) {
            $add = array($row['id'], $row['date'], $row['about'], $row['description']);
            array_push($image, $add);
        }
        return $image;
    }

}
