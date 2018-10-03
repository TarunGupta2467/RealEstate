<?php

/**
 * main class having all username data
 */
class admin {

    /**
     * function having all data of users
     * @param type $username
     * @return type
     */
    function login($username) {
        $conn = database::getDB();
        $pass;
        $sql = "SELECT password FROM admin WHERE email = '" . $username . "'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $pass = $row['password'];
        }
        return $pass;
    }

}

?>