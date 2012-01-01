<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
  
   public function __construct()
       {
            parent::__construct();
            
          $this->control(); // Admin Kontrol...
          $this->template->layout("admin") ;
          $this->load->model(array('sections','users'));
          }
       
       
  function index ()
  {
      $this->template->load('admin/index');
  }
  
  function liste()
  {
      $this->template->load('admin/liste');
      
  }
  
  function ekle($l="S")
  {
     
    $data['s']=$l;
    $this->load->library('form_validation');
    $this->form_validation->set_rules('head1', 'Türkçe Başlık', 'required');
		//$this->form_validation->set_rules('passw', 'Şifre', 'required');
    if ($this->form_validation->run() == FALSE)
		{
			 $this->template->load('admin/ekle',$data);
		}
		else
		{
       if ($this->sections->save($_POST))
       {
        redirect('admin/liste');
       } else
       {
        $this->template->load('admin/ekle',$data);
       }
     }
  }
  
  function alanya ()
  {
      $data['c']="alanya";
      $this->template->load('admin/admin', $data);
  }
  
  //-------------------------- Admin Özel Fonksiyonları ------------------
  
  private function control()
  {
    if (($this->session->userdata('login')==TRUE) and ($this->session->userdata('tp_key')==md5($_SERVER["REMOTE_ADDR"])))
    {
      
    } else {      
      redirect('/user');
    }
    
  }
  
} // class c 

/* End of file user.php */
/* Location: ./application/controllers/user.php */