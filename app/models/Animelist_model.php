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

  public function add($post) {
    $this->db->query("INSERT INTO {$this->table} (`id_anime`, `title_anime`, `alternative_title_anime`, `episodes_anime`, `description_anime`, `author_anime`, `status_anime`, `date_release_anime`, `date_finished_anime`, `credits_anime`, `type_video_anime`, `resolution_anime`) VALUES (NULL, :title, :alternative, :episodes, :description, :author, :status, :started, :finished, :credits, :type, :resolution);
    ");
    $this->db->bind('title', $post['animetitle']);
    $this->db->bind('alternative', $post['animealternative']);
    $this->db->bind('episodes', $post['animeepisodes']);
    $this->db->bind('description', $post['animedescription']);
    $this->db->bind('author', $post['animeauthor']);
    $this->db->bind('status', $post['animestatus']);
    $this->db->bind('started', $post['animestarted']);
    $this->db->bind('finished', $post['animefinished']);
    $this->db->bind('credits', $post['animecredits']);
    $this->db->bind('type', $post['animetype']);
    $this->db->bind('resolution', $post['animeresolution']);
    $this->db->rowCount();
  }
}