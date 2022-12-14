<?php
class Login extends Controller {
    public function index()
    {
        if(isset($_SESSION["user"])) {
            header("location: ".BASE_URL);
            exit;
        }
        session_destroy();
        $data['title'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer', $data);
    }

    public function config() {
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        if( empty($data["email"]) || 
            empty($data["password"])) {
            unset($_POST);
            header("location: ".BASE_URL."/login");
            // isiin alert, lewat param
        } else {
            if($this->model("Users_model")->checkDataByEmail($data) > 0) {
                $row = $this->model("Users_model")->getDataByEmail($data);
                        $_SESSION["user"] = [
                    'username' => $row['Username'],
                    'email' => $row['email'],
                    'password' => $row['Password'],
                    'role' => $row['role']
                ];
                unset($_POST);
                header("location: ".BASE_URL);
            } else {
                unset($_POST);
                header("location: ".BASE_URL."/login");
            }
        }
    }

}