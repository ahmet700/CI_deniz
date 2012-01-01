<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		var $layoutpath = "";
		
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
    
    function layout($ley="") 
    {
      if ($ley=="")
      {
      $this->layoutpath = "layouts/bos";
      } else
      {
         $this->layoutpath = "layouts/".$ley;
      }
      
    }
	
		function load($view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view($this->layoutpath, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */