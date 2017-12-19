	<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authorization { //extends CI_Controller{

    private $ci;

    public function __construct(){
    	// parent::__construct();

        $this->ci = &get_instance();
    }

    public function authorize()
    {
    	//echo 'ssss';
    	if(!is_callable(array($this->ci, '_filter'))) echo 'tarada _filter';

            //calls $AdminData->_filter()
        $filter = call_user_func(array($this->ci, '_filter'));

        if(is_array($filter) AND !empty($filter))
        {   

            if($filter[0] == 'aauth')
            {
                if(!$this->ci->aauth->is_loggedin()){
					redirect('site/login');
                }

		        if (!$this->_has_access()) {
		            if ($this->ci->input->is_ajax_request())
		                die('-9');

		            show_404();
		        }        	
		    }
	   	}   
        // print_r($this->ci->aauth->is_loggedin());
    }

    private function _has_access() {
        $class = $this->ci->router->class;
        $action = $this->ci->router->method;
        // $full_action = $class . '/' . $action;
        $full_action = $class . '.' . $action;
        $full_all_action = $class . '.*';
        // --> Start
        /*
        $acl = $this->ci->config->item('acl');
        $arr_acl = array();

        array_map(function($value) use (&$arr_acl){
            $arr_acl = array_merge($arr_acl, $value);
        }, array_values($acl));
        // --> End

        if (isset($arr_acl[$full_action])
            && !in_array($full_action, $this->ci->user->permissions))
            return false;
		*/
        if($this->ci->aauth->is_allowed($full_all_action) || $this->ci->aauth->is_allowed($full_action) || $this->ci->aauth->is_group_allowed($full_all_action) || $this->ci->aauth->is_group_allowed($full_action))            
        {
        	// echo 'adaji aksesnya';
        	return true;
        }	

        return false;
    }
}