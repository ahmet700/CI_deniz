<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
   
		$this->load->library('form_validation');
    $this->form_validation->set_rules('uname', 'Kullanıcı Adı', 'required|alpha_numeric|callback_uname_check');
		$this->form_validation->set_rules('passw', 'Şifre', 'required');
   
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/index');
		}
		else
		{
      redirect('admin');
    }
	}
  
  public function logout()
  {
    
    $newdata = array(
                   'username'  => "",
                   'tp_key'  => "",
                   'login' => FALSE
               );
        $this->session->set_userdata($newdata);
        $this->session->sess_destroy();
        redirect('/');
    
  }
  
  
  public function uname_check($str)
	{
    $this->load->model('users');
    $uname=$this->users->login();
    if (count($uname) > 0 )  {
             $newdata = array(
                   'username'  => $uname['username'],
                   'tp_key'  => md5($_SERVER["REMOTE_ADDR"]),
                   'login' => TRUE
               );
        $this->session->set_userdata($newdata);
        
       return TRUE;
     } else
     {
       $this->form_validation->set_message('uname_check','Invalid Username or Password');
       return FALSE;
      }
  }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */