<?php

class User_model extends CI_Model{
  /*public function get_users(){
    $config['hostname'] = "localhost";
    $config['username'] = "root";
    $config['hostname'] = "";
    $config['database'] = "errand_db";

    $connection = $this->load->database($config);

    $query = $this->db->query("select * from users");
    return $query->num_rows();

    //$query =  $this->db->get('users');
    //return $query->result();
  }*/

  public function create_user(){
    $options = ['cost'=>12];
    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $encripted_pass
    );
    $insert_data = $this->db->insert('users', $data);
    return $insert_data;
  }

  public function login_user($username, $password){
      $this->db->where('username', $username);
      $result = $this->db->get('users');
      $db_password = $result->row(6)->password;
      //print_r($db_password);
      //die();

      if(password_verify($password, $db_password)){
        return $result->row(0)->id;
      }else{
        return false;
      }
  }
}

?>
