<?php

require_once './model/db.php';
require_once 'CountryEntity.php';

class CountryDao extends Db {
    
    public function __construct(){
        Db::__construct(); //== parent::__construct();
    }

    public function getAllCountries() {
        $dbconn = $this->conn;
        $sql = "SELECT * FROM `t_country`";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        $rows = array();
        // $allRowSets = $stmt->fetchAll();
        // foreach($allRowSets as $val){ .. }
        while ($row = $stmt->fetch()) {

            $countryid = $row['countryid'];
            $countrycode = $row['countrycode'];
            $country = $row['country'];

            $rs = new CountryEntity();
            $rs->setCountryId($countryid);
            $rs->setCountryCode($countrycode);
            $rs->setCountry($country);

            $rows[] = array(
                'countryid' => $rs->getCountryId(),
                'countrycode' => $rs->getCountryCode(),
                'country' => $rs->getCountry()
            );
        }

        return $rows;
    }

    function printAllCountries() {
        $countries = $this->getAllCountries();
        echo '<ul>';
        foreach($countries as $val) {
            echo '<li>' . $val['countryid'] . '</li>';
            echo '<li>' . $val['postcode'] . '</li>';
            echo '<li>' . $val['country'] . '</li>';
        }
        echo '</ul>';
    }

}

?>