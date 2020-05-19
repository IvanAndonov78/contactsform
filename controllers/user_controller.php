<?php 

require_once './model/user_model/UserDao.php';

class UserController {

    public function handleInput() {
        $data = json_decode(file_get_contents('php://input'), true);

        if(!empty($data['email']) && !empty($data['pwd'])) {
            
            $email = $data['email'];
            $email = trim($email);
            $email = stripslashes($email);
            $email = htmlspecialchars($email);

            $pwd = $data['pwd'];
            $pwd = trim($pwd);
            $pwd = stripslashes($pwd);
            $pwd = htmlspecialchars($pwd);

            $resArr = array(
                'email' => $email,
                'pwd' => $pwd
            );

            $this->setJsonToken($email, $pwd);
        }
        
    }

    public function setJsonToken($email, $pwd) {
        
        if (!empty($email) && !empty($pwd)) {

            $user_dao = new UserDao();

            if ($user_dao->isValidUser($email, $pwd)) {
                if ($email == 'dummy@dummy.com') {
                    $out = array('token' => 'dummy');
                } else if ($email == 'svilen@yohoho.bg') {
                    $out = array('token' => 'yep!123');
                }
                echo json_encode($out);
            } else {
                $out = array('token' => 'OUT!');
                echo json_encode($out);
            }
        }
        
    }

    public function adminReportProvider() {
        $user_dao = new UserDao();
        $data = $user_dao->getAdminRepData();
        echo json_encode($data);
    }
}




?>