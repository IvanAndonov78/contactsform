<?php

require_once './model/db.php';
require_once 'NameEntity.php';

class NameDao extends Db {
    
    public function __construct(){
        Db::__construct(); //== parent::__construct();
    }

    public function getAllNames() {
        
        $dbconn = $this->conn;
        $sql = "SELECT * FROM `t_name`";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        //$stmt->fetch(PDO::FETCH_ASSOC);

        // $rows = $stmt->fetchAll(); // the lazy way :)
        //var_dump($rows);die();

        $rows = array();

        while($row = $stmt->fetch()) {
            $nameid = $row['nameid'];
            $firstname = $row['firstname'];
            $surname = $row['surname'];

            $rs = new NameEntity();
            $rs->setNameId($nameid);
            $rs->setFirstName($firstname);
            $rs->setSurName($surname);

            $rows[] = array(
                'nameid' => $rs->getNameId(),
                'firstname' => $rs->getFirstName(),
                'surname' => $rs->getSurName()
            );
        }

        return $rows;
    }

    function printAllNames() {
        $names = $this->getAllNames();
        echo '<ul>';
        foreach ($names as $val) {
            echo '<li>' . $val['nameid'] . '</li>';
            echo '<li>' . $val['firstname'] . '</li>';
            echo '<li>' . $val['surname'] . '</li>';
        }
        echo '</ul>';
    }

    public function insertName($firstname, $surname) {
        
        $dbconn = $this->conn;
        
        $stmt = $dbconn->prepare("INSERT INTO t_name (nameid, firstname, surname)
        VALUES (NULL, :firstname, :surname)");

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':surname', $surname);

        $stmt->execute();

        $dbconn = null;
    }

    public function getLastNameId() {
        $dbconn = $this->conn;
        $sql = "SELECT * FROM `t_name`";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        
        $lastIndex = count($rows) - 1;

        return $rows[$lastIndex]['nameid'];
    }

}

?>