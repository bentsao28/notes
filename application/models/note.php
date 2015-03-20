<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Note extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }
  public function create($new_note)
  {
  	$query = "INSERT INTO notes (name, description, created_at) VALUES (?, ?, NOW())";
    $values = array($new_note['name'], $new_note['note']);
    return $this->db->query($query, $values);
  }
  public function destroy($id)
  {
    $query = $this->db->query("DELETE FROM notes WHERE id = ?", array($id));
    return $query;
  }
  public function update($note, $id)
     {
      
      $array['note'] = $note;
      $array['id'] = $id;

      $query = $this->db->query("UPDATE posts.notes SET description = ?, updated_at = NOW()
          WHERE id = ?", $array);
      return $query;
     }
}