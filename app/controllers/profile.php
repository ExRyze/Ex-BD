<?php

class profile extends Controller{
    public function index(){
        if(!isset($_SESSION["user"])) {
            header("location: ".BASE_URL."/login");
        } else {
            $data['name'] = $_SESSION['user']['username'];
        }
        $data["title"] = "Profile";
        $this->view("template/header", $data);
        $this->view("profile/index", $data);
        $this->view("template/footer");
    }

    public function update() {
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        if( empty($data["username"]) ||
            empty($data["email"]) ||
            empty($data["password"]) ) {
            unset($_POST);
            header("location: ".BASE_URL."/dash");
        } else {
            $this->model("Users_model")->update($data);
            $row = $row = $this->model("Users_model")->getDataByEmail($data);
            $_SESSION["user"] = [
                'username' => $row['Username'],
                'email' => $row['email'],
                'password' => $row['Password'],
                'role' => $row['role']
            ];
            unset($_POST);
            header("location: ".BASE_URL."/profile");
        }
    }
}