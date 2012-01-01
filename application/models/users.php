<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        parent::__construct();
    }
    
    function login() // User Login Kontrol
    {
      $this->db->where('username', $this->input->post('uname', TRUE));
      $this->db->where('password', $this->input->post('passw', TRUE));
      $query = $this->db->get_where('users');
      return $query->row_array();
    }
    
    function find($name,$value)
    {
        $query = $this->db->get_where('users', array($name => $value));
        return $query->result();
    }
   
}

/* End of file users.php */
/* Location: ./application/models/users.php */