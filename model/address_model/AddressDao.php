<?php

require_once './model/db.php';
require_once 'AddressEntity.php';

class AddressDao extends Db {
    
    public function __construct(){
        Db::__construct(); //== parent::__construct();
    }

    public function getAllAddresses() {
        
        $dbconn = $this->conn;
        $sql = "SELECT * FROM `t_address`";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        //$stmt->fetch(PDO::FETCH_ASSOC);
        // $rows = $stmt->fetchAll(); // the lazy way :)

        $rows = array();

        while($row = $stmt->fetch()) {

            $addressid = $row['addressid'];
            $nameid = $row['nameid'];
            $countryid = $row['countryid'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];

            $rs = new AddressEntity();
            $rs->setAddressId($addressid);
            $rs->setNameId($nameid);
            $rs->setCountryId($countryid);
            $rs->setPhone($phone);
            $rs->setEmail($email);
            $rs->setAddress($address);

            $rows[] = array(
                'addressid' => $rs->getAddressId(),
                'nameid' => $rs->getNameId(),
                'countryid' => $rs->getCountryId(),
                'phone' => $rs->getPhone(),
                'email' => $rs->getEmail(),
                'address' => $rs->getAddress()
            );
        }

        return $rows;
    }

    public function printAllAddresses() {
        $names = $this->getAllAddresses();
        echo '<ul>';
        foreach ($names as $val) {
            echo '<li>' . $val['addressid'] . '</li>';
            echo '<li>' . $val['nameid'] . '</li>';
            echo '<li>' . $val['countryid'] . '</li>';
            echo '<li>' . $val['phone'] . '</li>';
            echo '<li>' . $val['email'] . '</li>';
            echo '<li>' . $val['address'] . '</li>';
        }
        echo '</ul>';
    }

    public function insertAddress($inputArr) {

        $nameid = $inputArr[0]; //get last id
        $countryid = $inputArr[1]; 
        $phone = $inputArr[2];
        $email = $inputArr[3];
        $address = $inputArr[4];
        
        $dbconn = $this->conn;
        
        $stmt = $dbconn->prepare("INSERT INTO t_address (addressid, nameid, countryid, phone, email, address)
        VALUES (NULL, :nameid, :countryid, :phone, :email, :address)");

        $stmt->bindParam(':nameid', $nameid);
        $stmt->bindParam(':countryid', $countryid);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);

        $stmt->execute();

        $dbconn = null;
    }

}

?>