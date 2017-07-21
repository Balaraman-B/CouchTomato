<?php
require ("Entities/RestEntities.php");
class RestModel {
   function GetRestTypes() {
        require 'Credentials.php';

           
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM rest") or die(mysql_error());
        $types = array();

        
        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        
        mysql_close();
        return $types;
    }

    
    function GetRestByType($type) {
        require 'Credentials.php';

           
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM rest WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $RestArray = array();

        
        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $city = $row[4];
            $Address = $row[5];
            $image = $row[6];
            $review = $row[7];

            
            $rest = new RestEntities(-1, $name, $type, $price, $city, $address, $image, $review);
            array_push($RestArray, $rest);
        }
        
        mysql_close();
        return $RestArray;
    }

}

?>

