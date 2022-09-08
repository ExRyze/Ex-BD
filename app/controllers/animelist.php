<?php

class Animelist extends Controller{
  public function index(){
    session_start();
    if(isset($_SESSION["user"])) {
      if($_SESSION["user"]['role'] === "user") {
        header('Location: '.BASE_URL);
      }
      $data['name'] = $_SESSION['user']['username'];
    } else {
      header('Location: '.BASE_URL);
    }
    $data["title"] = "Animelist";
    $data["animelist"] = $this->model("Animelist_model")->getAll();
    $this->view("template/header", $data);
    $this->view("animelist/index", $data);
    $this->view("template/footer");
  }
}