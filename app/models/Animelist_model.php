<?php

class Animelist_model
{
  private $table = "animelist";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAll() {
    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultAll();
  }
}