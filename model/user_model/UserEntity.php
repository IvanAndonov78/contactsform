<?php

class UserEntity {
    private $uid;
    private $email;
    private $pwd;

    public function __construct($uid = null, $email = null, $pwd = null) {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    function getUid(){
        return $this->uid;
    }

    function setUid($uid){
        $this->uid = $uid;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getPwd() {
        return $this->pwd;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

}

?>
