<?php

class Userlists extends Controller{
    public function index(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            $data['name'] = $_SESSION['user']['username'];
        } else {
            header('Location: '.BASE_URL);
        }
        $data["title"] = "User List";
        $data["user-db"] = $this->model("Users_model")->getAll();
        $this->view("template/header", $data);
        $this->view("userlists/index", $data);
        $this->view("template/footer");
    }

    public function tambah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            if($this->model('Users_model')->tambahUser($_POST) > 0){
                header('Location: ' . BASE_URL . "/userlists/index");
                exit;
            } else{
                header('Location:' . BASE_URL . '/user/singleData');
            }
        } else {
            header('Location: '.BASE_URL);
        }
    }

    public function delete($email){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            if($this->model('Users_model')->deleteUser($email) > 0){
                header('Location: ' . BASE_URL . "/userlists/index");
                exit;
            } else{
                header('Location:' . BASE_URL . '/userlists/index');
            }
        } else {
            header('Location: '.BASE_URL);
        }
        
    }    

    public function ubah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            $this->model('Users_model')->ubahDataUser($_POST);
            header('Location: ' . BASE_URL . "/userlists/index");
        } else {
            header('Location: '.BASE_URL);
        }
    }

    public function getUbah(){
        if(isset($_SESSION["user"])) {
            if($_SESSION["user"]['role'] != "admin") {
                header('Location: '.BASE_URL);
            }
            echo json_encode($this->model("Users_model")->getUserById_forEdit($_POST['id']));
        } else {
            header('Location: '.BASE_URL);
        }
    }
}