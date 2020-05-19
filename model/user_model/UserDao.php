<?php 

require_once './model/db.php';
require_once 'UserEntity.php';

// Svilen!123
// https://www.md5online.org/md5-encrypt.html
//dummy

class UserDao extends Db {

    public function __construct(){
        Db::__construct(); //== parent::__construct();
    }

    function isValidUser($email, $pwd) {
        
        $dbconn = $this->conn;
        $sql = "SELECT * FROM t_user WHERE t_user.email=";
        $sql .= "'". $email . "'";
        $sql .= " AND t_user.pwd=" . "'" . md5($pwd) . "'";
        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        
        $db_email = '';
        $db_pwd = '';
        while($single_row = $stmt->fetch()) {
            $db_email = $single_row['email'];
            $db_pwd = $single_row['pwd'];
        }
        
        if ($email == $db_email && md5($pwd) == $db_pwd) {
            return true;
        } 

        return false;
    }

    function getAdminRepData() {
        
        $dbconn = $this->conn;
        // SELECT * FROM t_name AS n INNER JOIN t_address AS a ON n.nameid=a.nameid INNER JOIN t_country AS c ON a.countryid=c.countryid
        $sql = "SELECT * FROM t_name AS n ";
        $sql .= "INNER JOIN t_address AS a ON n.nameid=a.nameid ";
        $sql .= "INNER JOIN t_country AS c ON a.countryid=c.countryid";

        $stmt = $dbconn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        return $rows;

    }

}


?>