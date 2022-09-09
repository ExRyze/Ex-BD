<?php

class Animelist_model
{
  private $table = "animelist";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function get($id) {
    $this->db->query("SELECT * FROM {$this->table} WHERE `id_anime` = :id");
    $this->db->bind("id", $id);
    return $this->db->result();
  }

  public function getAll() {
    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultAll();
  }

  public function add($post, $date, $by) {
    $this->db->query("INSERT INTO {$this->table} (`id_anime`, `title_anime`, `alternative_title_anime`, `episodes_anime`, `description_anime`, `author_anime`, `status_anime`, `date_release_anime`, `date_finished_anime`, `credits_anime`, `type_video_anime`, `resolution_anime`, `added_date`, `added_by`) VALUES (NULL, :title, :alternative, :episodes, :description, :author, :status, :started, :finished, :credits, :type, :resolution, :addDate, :addBy);
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
    $this->db->bind('addDate', $date);
    $this->db->bind('addBy', $by);
    $this->db->rowCount();
  }

  public function update($id, $post, $date, $by) {
    $this->db->query("UPDATE `animelist` SET `title_anime` = :title, `alternative_title_anime` = :alternative, `episodes_anime` = :episodes, `description_anime` = :description, `author_anime` = :author, `status_anime` = :status, `date_release_anime` = :started, `date_finished_anime` = :finished, `credits_anime` = :credits, `type_video_anime` = :type, `resolution_anime` = :resolution, `updated_date` = :updateDate, `updated_by` = :updateBy WHERE `id_anime` = :id");
    $this->db->bind('id', $id);
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
    $this->db->bind('updateDate', $date);
    $this->db->bind('updateBy', $by);
    $this->db->rowCount();
  }

  public function delete($id) {
    $this->db->query("DELETE FROM {$this->table} WHERE `id_anime` = :id");
    $this->db->bind("id", $id);
    $this->db->rowCount();
  }
}