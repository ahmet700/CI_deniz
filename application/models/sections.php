<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sections extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    function find($name,$value,$order = 'position, id')
    {
                $this->db->order_by($order);
        $query = $this->db->get_where('sections', array($name => $value));
        return $query->result();
    }
    
    function save($data)
    {
      $sonuc=Array();
      $sonuc=$data;
      
      foreach ($data as $t=>$v)
      if (!$this->db->field_exists($t, 'sections'))
      {
        unset($sonuc[$t]);
      }
     
      return $this->db->insert('sections', $sonuc);  
    }
    
   
}

/* End of file Sections.php */
/* Location: ./application/models/Sections.php */