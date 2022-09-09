<?php

class Animelist extends Controller{

  public function __construct() {
    if(isset($_SESSION["user"])) {
      if($_SESSION["user"]['role'] === "user") {
        header('Location: '.BASE_URL);
      }
    } else {
      header('Location: '.BASE_URL);
    }
  }

  public function index(){
    $data['name'] = $_SESSION['user']['username'];
    $data["title"] = "Animelist";
    $data["animelist"] = $this->model("Animelist_model")->getAll();
    $this->view("template/header", $data);
    $this->view("animelist/index", $data);
    $this->view("template/footer");
  }

  public function add() {
    $data['name'] = $_SESSION['user']['username'];
    $data["title"] = "Add - Anime";
    $this->view("template/header", $data);
    $this->view("animelist/form", $data);
    $this->view("template/footer");
  }

  public function addConfig() {
    $data['name'] = $_SESSION['user']['username'];
    if($_POST['animestarted'] === "" && $_POST['animefinished'] === "") {
      $_POST['animestarted'] = NULL;
      $_POST['animefinished'] = NULL;
    } else if($_POST['animestarted'] === "") {
      $_POST['animestarted'] = NULL;
    } else if($_POST['animefinished'] === "") {
      $_POST['animefinished'] = NULL;
    }
    $this->model("Animelist_model")->add($_POST, date("Y-m-d H:i:s", strtotime('+8 hours')), $_SESSION['user']['email']);
    header("Location: ".BASE_URL."/animelist");
  }

  public function update($id) {
    $data["anime"] = $this->model("Animelist_model")->get($id);
    if(!$data["anime"]) {
      header("Location: ".BASE_URL."/animelist");
    }
    $data['name'] = $_SESSION['user']['username'];
    $data["title"] = "Update - Anime";
    $data['id'] = $id;
    $this->view("template/header", $data);
    $this->view("animelist/form", $data);
    $this->view("template/footer", $data);
  }

  public function updateConfig($id) {
    $data["anime"] = $this->model("Animelist_model")->get($id);
    if(!$data["anime"]) {
      header("Location: ".BASE_URL."/animelist");
    }
    $data['name'] = $_SESSION['user']['username'];
    if($_POST['animestarted'] === "" && $_POST['animefinished'] === "") {
      $_POST['animestarted'] = NULL;
      $_POST['animefinished'] = NULL;
    } else if($_POST['animestarted'] === "") {
      $_POST['animestarted'] = NULL;
    } else if($_POST['animefinished'] === "") {
      $_POST['animefinished'] = NULL;
    }
    $this->model("Animelist_model")->update($id, $_POST, date("Y-m-d H:i:s", strtotime('+8 hours')), $_SESSION['user']['email']);
    header("Location: ".BASE_URL."/animelist");
  }

  public function delete($id) {
    $this->model("Animelist_model")->delete($id);
    header("Location: ".BASE_URL."/animelist");
  }
}