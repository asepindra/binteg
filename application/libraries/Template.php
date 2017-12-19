<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
    
                
		var $template_data = array();
		var $isSlider = false;
		var $slider = array();
		var $isBreadcrumbs = false;
		var $breadcrumbs = array('<i class="fa fa-home"></i>'=>'welcome');
		var $title;

		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
			$this->set('isSlider',$this->isSlider);
			if($this->isSlider)
				$this->set('slider',$this->CI->load->view('slider', $this->slider, TRUE));
			$this->set('isBreadcrumbs',$this->isBreadcrumbs);
			$this->set('jumBreadcrums',count($this->breadcrumbs));
			$this->set('breadcrumbs',$this->CI->load->view('breadcrumbs', array('breadcrumbs'=>$this->breadcrumbs,'title'=>$this->title), TRUE));
			return $this->CI->load->view($template, $this->template_data, $return);
		}

		function breadcrumbs($data)
		{
			$this->breadcrumbs = $this->breadcrumbs+$data;
			return $this->breadcrumbs;
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */